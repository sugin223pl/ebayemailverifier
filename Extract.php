<?php
namespace App;
use GuzzleHttp\Client;
class Extract {
    public static function go($email) {
        $email = trim($email);
        $client = new Client([
            "base_uri" => "https://reg.ebay.com"
        ]);
        $options = [
            'form_params' => [
                "businessemail" => $email,
                "countryId" => 167,
                "mode" => 26,
                "eId" => "businessemail",
                "track" => null,
                "usrDesgn" => 2,
                "srcPage" => 2052190,
                "ru" => "https://www.ebay.com/",
                "checkForReclaimEmail" => false
               ]
        ];

        $response = $client->post("/reg/ajax", $options);
        $response = $response->getBody();
        $response = json_decode($response);
            if(isset($response->content->businessemail)) {
                $response = strip_tags($response->content->businessemail);
                if (strpos($response, 'registered') !== false) {
                    return true;
                }
            }
            return false;
    }
    public static function prepare() {
        $file = fopen("old.txt","r");
        $good = [];
            while(!feof($file)) {
                $email = fgets($file);
                $email = trim($email);
                if(strlen($email) > 10) {
                    $email = trim($email);
                    if(self::go($email)) {
                        array_push($good, $email);
                        print $email . ' valid' . "\r\n";
                    }
                    //sleep(2);
                }
            }
            fclose($file);

            file_put_contents("new.json", json_encode($good));
            print 'done!' . "\r\n";
    }
}