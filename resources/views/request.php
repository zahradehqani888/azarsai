<?php

    

    $MerchantID = 'c824b3be-3156-11ea-aebd-000c295eb8fc';  //Required
    $Amount = 100; //Amount will be based on Toman  - Required
    $Description = 'توضیحات تراکنش تستی';  // Required
    $Email = 'zahra.dehqani888@gmail.com'; // Optional
    $Mobile = '09173362983'; // Optional
    $CallbackURL = '/';  // Required


    $client = new nusoap_client('https://www.zarinpal.com/pg/services/WebGate/wsdl', 'wsdl');
    $client->soap_defencoding = 'UTF-8';
    $result = $client->call('PaymentRequest', [
        [
            'MerchantID'     => $MerchantID,
            'Amount'         => $Amount,
            'Description'    => $Description,
            'Email'          => $Email,
            'Mobile'         => $Mobile,
            'CallbackURL'    => $CallbackURL,
        ],
    ]);

    //Redirect to URL You can do it also by creating a form
    if ($result['Status'] == 100) {
        
        header('Location: https://www.zarinpal.com/pg/StartPay/'.$result['Authority']);
       
      // return redirect('/');
    } else {
        echo'ERR: '.$result['Status'];
    }
