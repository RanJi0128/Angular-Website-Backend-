<?php

      $curl = curl_init();
      curl_setopt_array($curl, [
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'https://tnwebservices-test.ticketnetwork.com/tnwebservice/v3.2/tnwebservicestringinputs.asmx?op=GetCategories'
      ]);
      
      $resp = curl_exec($curl);
      echo $resp;
      curl_close($curl);
  
?>