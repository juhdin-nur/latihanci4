<?php

namespace App\Controllers;

use Config\CURLRequest;

class RestClient extends BaseController
{
    public function index()
    {
        // $client = \Config\Services::curlrequest();
        // $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6Imp1aGRpbmZiQGdtYWlsLmNvbSIsImlhdCI6MTY0MjY1MTI2MSwiZXhwIjoxNjQyNjU0ODYxfQ.yncPhyY2481Sjz0SgGkOJ5kjYEQaPgw28KjV0qG0ks0";
        // $headers = [
        //     'Authorization' => 'Bearer ' . $token
        // ];

        //GET
        // $url = "http://localhost/latihanci4/public/pegawai/4";
        // $response = $client->request('GET', $url, ['headers' => $headers, 'http_errors' => false]);
        // dd($response->getBody());

        //CREATE
        // $url = "http://localhost/latihanci4/public/pegawai";
        // $data = [
        //     'nama' => 'Abdullah',
        //     'email' => 'abdullah@gmail.com'
        // ];
        // $response = $client->request('POST', $url, ['form_params' => $data, 'headers' => $headers, 'http_errors' => false]);
        // echo $response->getBody();

        //UPDATE
        // $url = "http://localhost/latihanci4/public/pegawai/4";
        // $data = [
        //     'nama' => 'Abdullah2',
        //     'email' => 'abdullah2@gmail.com'
        // ];
        // $response = $client->request('PUT', $url, ['form_params' => $data, 'headers' => $headers, 'http_errors' => false]);
        // echo $response->getBody();
        //DELETE
        // $url = "http://localhost/latihanci4/public/pegawai/4";
        // $data = [];
        // $response = $client->request('DELETE', $url, ['form_params' => $data, 'headers' => $headers, 'http_errors' => false]);
        // echo $response->getBody();
        helper(['restclient']);
        $url = 'http://localhost/latihanci4/public/pegawai';
        $data = [
            'nama' => 'Jay2',
            'email' => 'jay2@gmail.com'
        ];
        $response = akses_restapi('GET', $url, []);
        // echo $response;
        $dataArray = json_decode($response, true);
        foreach ($dataArray as $values) {
            echo "Nama : " . $values['nama'];
            echo "Email : " . $values['email'];
            echo "<br>";
        }
    }
}
