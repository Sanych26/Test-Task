<?php
class ApiController
{
    public static string $url = 'https://crm.belmar.pro/api/v1';
    public static string $token = 'ba67df6a-a17c-476f-8e95-bcdb75ed3958';
    public static function sendOrder($req)
    {
        $method = 'addlead';

        $data = [
            "firstName" => $req['firstName'],
            "lastName" => $req['lastName'],
            "phone" => $req['phone'],
            "email" => $req['email'],
            "countryCode" => $req['countryCode'],
            "box_id" => $req['box_id'],
            "offer_id" => $req['offer_id'],
            "landingUrl" => $req['landingUrl'],
            "ip" => $req['ip'],
            "password" => $req['password'],
            "language" => $req['language'],
            "clickId" => "",
            "quizAnswers" => "",
            "custom1" => "",
            "custom2" => "",
            "custom3" => ""
        ];
        $jsonData = json_encode($data);

        $curl = curl_init();

        // Set cURL options
        curl_setopt($curl, CURLOPT_URL, self::$url.'/'.$method);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            'token: ' . self::$token,
            'Content-Type: application/json',
        ]);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);

        // Execute the request
        $response = curl_exec($curl);
        curl_close($curl);

        return json_decode($response, true);
    }

    public static function getOrders()
    {
        $method = 'getstatuses';

        $dateTo = $_REQUEST['dateTo'] . " 23:59:59";
        $dateFrom = $_REQUEST['dateFrom'] . " 00:00:00";

        $data = [
            "date_from" => $dateFrom, // today minus 30 days
            "date_to" => $dateTo,     // today
            "page" => 0,              // default 0
            "limit" => 100            // default 100, max 500
        ];
        $jsonData = json_encode($data);

        $curl = curl_init();

        // Set cURL options
        curl_setopt($curl, CURLOPT_URL, self::$url.'/'.$method);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            'token: ' .  self::$token,
            'Content-Type: application/json',
        ]);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);

        // Execute the request
        $response = curl_exec($curl);

        if (curl_errno($curl)) {
            $res = 'Request error: ' . curl_error($curl);
        } else {
            $res = json_decode($response, true);
        }
        curl_close($curl);

        echo json_encode($res);
        die();
    }
}