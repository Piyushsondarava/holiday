<?php
 
namespace App\Traits;

trait Sms {
 
   /*
    * Generates text from the number
    */
   public function SendOtpTo($user_mobile){
      

        //  http://bulksms.indiadigitalsms.com/api/smsapi?key=Account key&route=Route&sender=Sender id&number=Number(s)&sms=Message
         $headers = array("Content-Type:application/json");
         
         $apiKey = "553e0ed6a2f2030382ee195b6e69c987";
         $route = "1";
         $senderId = "RURALN";
         $otp = rand(000000,999999);
         $message = "".$otp." is your verification code for Rural App";
         $message = "Dear Customer, ".$otp." is the otp (one time password) to verify your mobile number. do not share it with anyone. RURAL news";
         $templateid = 1207162044151944939;
          
         
         $call_url = "http://bulksms.indiadigitalsms.com/api/smsapi?key=".$apiKey."&route=".$route."&sender=".$senderId."&number=".urlencode($user_mobile)."&sms=".urlencode($message)."&templateid=".$templateid;
        // echo $call_url; exit();
         $ch = curl_init();   
         curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);   
         curl_setopt($ch, CURLOPT_URL, $call_url);   
           
         curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);   
         curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);   
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   
            
         $response = curl_exec($ch);   
           
         if ($response === FALSE) {   
            die('Curl failed: ' . curl_error($ch));   
         }    
         curl_close($ch);
        //  dd($response);
         //return $response;  
         return $otp;  
         
        //  $check_url = "http://bulksms.indiadigitalsms.com/api/dlrapi?key=".$apiKey."&messageid=".$response."";
         
        //  $ch = curl_init();   
        //  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);   
        //  curl_setopt($ch, CURLOPT_URL, $check_url);   
         
        //  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);   
        //  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);   
        //  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   
         
        //  $response = curl_exec($ch);   
        //  // Execute post   
        //  if ($response === FALSE) {   
        //     die('Curl failed: ' . curl_error($ch));   
        //  }    
        //  curl_close($ch);
        // //  print_r($response); exit;
        //  return $response;  
   }  
   
 
}






