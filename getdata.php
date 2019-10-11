<?php
      $data = $_GET['GetData'];
      $number = $_GET['Number'];
      $curl = curl_init();
      curl_setopt_array($curl, [
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'http://tnwebservices-test.ticketnetwork.com/tnwebservice/v3.2/tnwebservicestringinputs.asmx/GetEvents?websiteConfigI
        D=26432&numberOfEvents=2'
      ]);
      
      $resp = curl_exec($curl);
      echo "result=>";
      echo $resp;
      curl_close($curl);      
  //http://tnwebservices-test.ticketnetwork.com/tnwebservice/v3.2/tnwebservicestringinputs.asmx/'.$data.'?websiteConfigID=26432&numberOfEvents=1&eventID=20
?>