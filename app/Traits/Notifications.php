<?php
 
namespace App\Traits;

trait Notifications {
 
   /*
    * Generates text from the number
    */
   public function SendNotifications($title,$body,$fcmIdArray){
      

         /*
            $body contains notification body part data
            $title contains title of notification
            $fcmIdArray is a array of firebase_id
         */
         $headers = array("Content-Type:application/json", "Authorization:key=AAAAsTRt_8o:APA91bEdFgx78qEc2tKm0DnEDDI2RSkJLArkvpEijF5F_b9yNyOqfUFvYqgmViUREJQZBQp-AR-XtZKE60Tps-v-f4xA2XhXZod0Qh7LTdKodZ1lomrzFJo81fIC1lNNsyRXzE2CDQf3");

         $notification['body'] = $title;
         $notification['title'] = $body;
         $notification['sound'] = 'default';
         $notification['mutable-content'] = 1;
         $notification['content-available'] = 1;
         $notification['badge'] = 1;
         $notification['priority'] = 'high';
         $data = array(   
            'notification' => $notification,
            'data' => $notification,
            'registration_ids' => $fcmIdArray,   
         );
         $data = json_encode($data);

         $ch = curl_init();   
         curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);   
         curl_setopt($ch, CURLOPT_URL, "https://fcm.googleapis.com/fcm/send");   
         curl_setopt($ch, CURLOPT_POST, true);   
         curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);   
         curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);   
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   
         curl_setopt($ch, CURLOPT_POSTFIELDS, $data);   
         $response = curl_exec($ch);   
         // Execute post   
         if ($response === FALSE) {   
            die('Curl failed: ' . curl_error($ch));   
         }    
         curl_close($ch);
         return $response;   
   }  
   
 
}