<?php 
    require 'vendor/autoload.php';

    class SendEmail{

        public static function SendMail($to,$subject,$content){
            $key = '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';

            $email = new \SendGrid\Mail\Mail();
            $email->setFrom("rolanr83@gmail.com", "Rolan Robinson");
            $email->setSubject($subject);
            $email->addTo($to);
            $email->addContent("text/plain", $content);
            //$email->addContent("text/html", $content);

            $sendgrid = new \SendGrid($key);

            try{
                $response = $sendgrid->send($email);
                return $response;
            }catch(Exception $e){
                echo 'Email exception Caught : '. $e->getMessage() ."\n";
                return false;
            }
        }
    }
?>