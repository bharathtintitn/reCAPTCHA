<?php 
require_once('recaptchalib.php');
$name0 = $_POST['name0'];
$name1 = $_POST['email']; 
$name2 = $_POST['phone']; 
$name3 = $_POST['location']; 
$name4 = $_POST['description'];

$recaptcha_field = $_POST["recaptcha_challenge_field"];
$respone_filed = $_POST["recaptcha_response_field"];
$address = $_SERVER["REMOTE_ADDR"];
$privatekey = '6LcjBPQSAAAAADx86oB5BIzO_KKTH6KVt8qSqpCB';



if ($_POST["recaptcha_response_field"]) {
        $resp = recaptcha_check_answer ($privatekey,
                                        $address,
                                        $recaptcha_field,
                                        $respone_filed);
        if ($resp->is_valid) {
				echo "<p>reCaptcha you have entered is CORRECT!!!. What to do next?</p>";
        } else {
                # set the error code so that we can display it
				echo "<p>reCaptcha you have entered is Wrong</p>";
        }
}
?>