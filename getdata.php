<?php
      $data = $_GET['GetData'];
      $number = $_GET['Number'];
      $curl = curl_init();
      curl_setopt_array($curl, [
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'http://tnwebservices-test.ticketnetwork.com/tnwebservice/v3.2/tnwebservicestringinputs.asmx/'.$data.'?websiteConfigID=26432&numberOfEvents=100'
      ]);
      
      $resp = curl_exec($curl);
      print_r($curl);
      echo $resp;
      curl_close($curl);      
  
?>