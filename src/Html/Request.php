<?php

namespace App\Html;

use App\RestApiClient\Client;

class Request {

    static function handle()
    {
        switch ($_SERVER["REQUEST_METHOD"]){
            case "POST":
                self::postRequest();
                break;
            case "GET";
            default:
                //self::getRequest();
                break;
        }
    }

    private static function postRequest()
    {
        $request = $_REQUEST;
        $client = new Client();
        switch ($request){
            case isset($request['btn-home']):
                break;
            case isset($request['btn-counties']):
                PageCounties::table(self::getCounties());
                break;
            case isset($request['btn-del-county']);
                $response = $client->delete('counties', $request['btn-del-county']);
                PageCounties::table(self::getCounties());
                break;
            case isset($request['btn-save-county']);
                $response = $client->post('counties', $request['btn-save-county']);
                PageCounties::table(self::getCounties());
                break;
        }
    }


    private static function getCounties() : array
    {
        $client = new Client();
        $response = $client->get('counties');

        return $response['data'];
    }
}