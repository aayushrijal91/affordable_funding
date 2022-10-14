<?php
include __DIR__ . '/../functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['token'])) {
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = $recaptcha_server_secret;
    $recaptcha_response = $_POST['token'];
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    try {
        if ($recaptcha->score < 0.5) {
            throw new Exception('Low Score');
        }

        $to = $admin_email;

        $subject = "Message from " . $site;

        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $enquiryType = $_POST['enquiryType'];
        $comment = $_POST['comment'];
        
        $first_name = strip_tags(trim($_POST["first_name"]));
        $last_name = strip_tags(trim($_POST["last_name"]));

        // CRM Integration 
        $curl = curl_init();
        $f = fopen('request.txt', 'w');
        $form_data = json_encode(array(
            'form_name'                 => 'Affordable Funding Landing Page',
            'first_name'                => $first_name,
            'last_name'                 => $last_name,
            'amount'                    => "",
            'phone'                     => $phone,
            'email'                     => $email,
            'source_id'                 => 18,
            'notes'         => $comment,
            'custom_fields[EnquiryType]' => $enquiryType,
        ));
        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL             => "https://affordablefunding.ambitioncloud.com.au/api/inbound",
                CURLOPT_RETURNTRANSFER  => true,
                CURLOPT_ENCODING        => "",
                CURLOPT_MAXREDIRS       => 10,
                CURLOPT_TIMEOUT         => 0,
                CURLOPT_FOLLOWLOCATION  => true,
                CURLOPT_HTTP_VERSION    => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST   => "POST",
                CURLOPT_VERBOSE         => true,
                CURLOPT_STDERR          => $f,
                CURLOPT_POSTFIELDS      => $form_data,
                CURLOPT_HTTPHEADER => array(
                    "Content-Type: application/json",
                    "x-tenant-key: ".$ambition_cloud_key
                ),
            )
        );

        $response = curl_exec($curl);
        $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        fwrite($f, $form_data);
        fclose($f);
        curl_close($curl);

        $message = '<!DOCTYPE html>
                <html>
                    <head>
                        <style>
                            table {
                                font-family: arial, sans-serif;
                                border-collapse: collapse;
                                width: 100%;
                            }
                            
                            td, th {
                                border: 1px solid #dddddd;
                                text-align: left;
                                padding: 8px;
                            }
                            
                            tr:nth-child(even) {
                                background-color: #dddddd;
                            }
                        </style>
                    </head>
                <body><table><tbody>' .
            '<tr>' .
            '<td>Name</td>' .
            '<td><b>' . $first_name . " " . $last_name . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Phone Number</td>' .
            '<td><b>' . $phone . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Email Address</td>' .
            '<td><b>' . $email . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Enquiry Type</td>' .
            '<td><b>' . $enquiryType . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Message</td>' .
            '<td><b>' . $comment . '</b></td>' .
            '</tr>' .
            '</tbody></table></body></html>';

        $headers = "MIME-Version: 1.0\r\n" .
            "Content-type: text/html; charset=utf-8\r\n" .
            "From: " . $site . " <" . $no_reply_email . ">" . "\r\n" .
            "Reply-To: " . $site . " <" . $no_reply_email . ">" . "\r\n" .
            "X-Mailer: PHP/" . phpversion();
        $result = mail($to, $subject, $message, $headers);

        if ($result) {
            header('location:./../thankyou');
        } else {
            throw new Exception('Failed, please submit form again or call us directly.');
        }
    } catch (Exception $e) {
        echo '<script language="javascript">alert("' . $e->getMessage() . '")</script>';
        echo '<script language="javascript">history.go(-1);</script>';
    }
}
