<?php
namespace App\lib;
use DB;
/*require_once 'nusoap.php';*/
use nusoap_client;
class zarinpal
{
    public $MerchantID;
    public function __construct()
    {
        $this->MerchantID="c824b3be-3156-11ea-aebd-000c295eb8fc";
    }
    public function pay($Amount,$Email,$Mobile)
    {
                    $Description = 'فروش محصول';  // Required
                    $CallbackURL = url('/order'); // Required
            
            
                $client = new nusoap_client('https://www.zarinpal.com/pg/services/WebGate/wsdl', 'wsdl');
                $client->soap_defencoding = 'UTF-8';
                $result = $client->call('PaymentRequest', [
                    [
                        'MerchantID'     => $this->MerchantID,
                        'Amount'         => $Amount,
                        'Description'    => $Description,
                        'Email'          => $Email,
                        'Mobile'         => $Mobile,
                        'CallbackURL'    => $CallbackURL,
                    ],
                ]);
            
                //Redirect to URL You can do it also by creating a form
                if ($result['Status'] == 100) {
                    return $result['Authority'];
                } else {
                    return false;
                }
                
    
    
    }
 
}
