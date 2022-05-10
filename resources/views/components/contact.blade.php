<!-- ==================== Contact ==================== -->
<section id="contact" class="section">
    <h2 class="title">CONTACT</h2>
    <div class="section-des">
        Lorem ipsum dolor sit amet consectetu adipiscing elit viverra tristique placerat.
    </div>
    <div class="content-670">
        <p>
            Dolor sit amet, consectetur adipiscing elit. Viverra tristique placerat in massa consectetur quisque. Nunc ac fames lectus in libero aliquet lorem ipsum dolor sit amet enim est urus tincidunt magna ut turpis eu, eu enim. Nisl porttitor elit risus velit urna morbi mauris.
        </p>
    </div>

    <a href="https://www.google.com/maps/place/Central+Park/@40.7828647,-73.9653551,15z/data=!4m5!3m4!1s0x0:0xb9df1f7387a94119!8m2!3d40.7828647!4d-73.9653551" target="_blank">
        <img class="block-right" src="images/map.png" alt="">                    
    </a>

    <div class="content-670">
        <div class="contact-form">
            <p>
                <input id="name" type="text" name="your-name" placeholder="NAME">
            </p>
            <p>
                <input id="contact-email" type="email" name="your-email" placeholder="EMAIL">
            </p>                                    
            <p>
                <input id="subject" type="text" name="your-subject" placeholder="SUBJECT">
            </p>
            <p>
                <textarea id="message" name="your-message" placeholder="MESSAGE"></textarea>
            </p>
            <p class="contact-submit-holder">
                <input type="submit" value="SEND">
            </p>                                
        </div> 
    </div>

</section>
<!-- ================== Contact END ================== -->

<?php

$email = "axel.tahmid@gmail.com";

//Initial response is NULL
$response = null;

//Initialize appropriate action and return as HTML response
if (isset($_POST["action"])) {
    $action = $_POST["action"];

    switch ($action) {
        case "SendMessage": {
                if (isset($_POST["email"]) && !empty($_POST["email"])) {

                    $message = $_POST["message"];
                    $message .= "<br/><br/>";                                        

                    $response = (SendEmail($message, $_POST["subject"], $_POST["name"], $_POST["email"], $email)) ? 'Message Sent' : "Sending Message Failed";
                } else {
                    $response = "Sending Message Failed";
                }
            }
            break;
        default: {
                $response = "Invalid action is set! Action is: " . $action;
            }
    }
}


if (isset($response) && !empty($response) && !is_null($response)) {
    echo '{"ResponseData":' . json_encode($response) . '}';
}

function SendEmail($message, $subject, $name, $from, $to) {
    $isSent = false;
    // Content-type header
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    // Additional headers    
    $headers .= 'From: ' . $name .'<'.$from .'>';

    mail($to, $subject, $message, $headers);
    if (mail) {
        $isSent = true;
    }
    return $isSent;
}

?>