<?php

      $curl = curl_init();
      curl_setopt_array($curl, [
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'https://tnwebservice/v3.2/tnwebservicestringinputs.asmx/GetCategories?websiteConfigID=string'
      ]);
      
      $resp = curl_exec($curl);
      echo $resp;
      curl_close($curl);
  
?>