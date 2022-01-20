<?php

use App\Models\TokenModel;

function akses_restapi($method, $url, $data)
{

    $client = \Config\Services::curlrequest();
    $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6Imp1aGRpbmZiQGdtYWlsLmNvbSIsImlhdCI6MTY0MjY1MTI2MSwiZXhwIjoxNjQyNjU0ODYxfQ.yncPhyY2481Sjz0SgGkOJ5kjYEQaPgw28KjV0qG0ks0";

    $model = new TokenModel();
    $idToken = 2;
    $token = $model->getToken($idToken);
    echo $token;
    echo "<br><br>";
    $tokenPart = explode(".", $token);
    $payload = $tokenPart[1];
    $decode = base64_decode($payload);
    $jsonDecode = json_decode($decode, true);
    $exp = $jsonDecode['exp'];
    $waktuSekarang = Time();
    echo $exp . "---" . $waktuSekarang;
    if ($exp <= $waktuSekarang) {
        $url = "http://localhost/latihanci4/public/otentikasi";
        $form_params = [
            'email' => 'juhdinfb@gmail.com',
            'password' => '1600Juh1992'
        ];

        $response = $client->request('POST', $url, ['http_errors' => false, 'form_params' => $form_params]);
        echo $response->getBody();
    }
    //exit();


    echo "<br><br>";
    $headers = [
        'Authorization' => 'Bearer ' . $token
    ];
    $response = $client->request($method, $url, ['headers' => $headers, 'http_errors' => false, 'form_params' => $data]);

    return $response->getBody();
}
