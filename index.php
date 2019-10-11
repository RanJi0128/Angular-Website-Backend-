<?php
      $data = $_GET['GetData'];
      $curl = curl_init();
      curl_setopt_array($curl, [
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'http://tnwebservices-test.ticketnetwork.com/tnwebservice/v3.2/tnwebservicestringinputs.asmx/'.$data.'?websiteConfigID=26432'
      ]);
      
      $resp = curl_exec($curl);
      echo $resp;
      curl_close($curl);      
  
?>