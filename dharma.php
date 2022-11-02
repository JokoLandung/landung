<?php 
       $data = "18962";
       $secretKey = "5cC9609018";
	   $userkey = "1920d75a4d4cff8f64c7025cc4cca357";
             // Computes the timestamp
              date_default_timezone_set('UTC');
              $tStamp = strval(time()-strtotime('1970-01-01 00:00:00'));
               // Computes the signature by hashing the salt with the secret key as the key
       $signature = hash_hmac('sha256', $data."&".$tStamp, $secretKey, true);
     
       // base64 encode�
       $encodedSignature = base64_encode($signature);
     
       // urlencode�
       // $encodedSignature = urlencode($encodedSignature);
     
       echo "X-cons-id: " .$data ."<br>";
       echo "X-timestamp:" .$tStamp ."<br>";
       echo "X-signature: " .$encodedSignature ."<br>";
	   echo "user_key: " .$userkey." ";
    ?>
