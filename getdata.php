<?php
      $data = $_GET['GetData'];
      $number = $_GET['Number'];
      $curl = curl_init();
      curl_setopt_array($curl, [
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'http://tnwebservices-test.ticketnetwork.com/tnwebservice/v3.2/tnwebservicestringinputs.asmx/SearchEvents?websiteConfigI
        D=26432&searchTerms=U2&whereClause=city=%22Foxborough%22&orderByClause='
      ]);
      
      $resp = curl_exec($curl);
      echo $resp;
      curl_close($curl);      
  //http://tnwebservices-test.ticketnetwork.com/tnwebservice/v3.2/tnwebservicestringinputs.asmx/'.$data.'?websiteConfigID=26432&numberOfEvents=1&eventID=20
?>