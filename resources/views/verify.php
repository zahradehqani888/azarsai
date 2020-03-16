<?php

    require_once 'lib/nusoap.php';

    $MerchantID = 'c824b3be-3156-11ea-aebd-000c295eb8fc';
    $Amount = 100; //Amount will be based on Toman
    $Authority = $_GET['Authority'];

    if ($_GET['Status'] == 'OK') {
        $client = new nusoap_client('https://www.zarinpal.com/pg/services/WebGate/wsdl', 'wsdl');
        $client->soap_defencoding = 'UTF-8';
        $result = $client->call('PaymentVerification', [
            [
                'MerchantID'     => $MerchantID,
                'Authority'      => $Authority,
                'Amount'         => $Amount,
            ],
        ]);

        if ($result['Status'] == 100) {
            echo 'Transation success. RefID:'.$result['RefID'];
        } else {
            echo 'Transation failed. Status:'.$result['Status'];
        }
    } else {
        echo 'Transaction canceled by user';
    }
