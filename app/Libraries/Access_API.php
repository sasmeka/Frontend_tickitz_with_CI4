<?php

namespace App\Libraries;

class Access_API
{
    function get_data($url)
    {
        $option = [];
        $client = \Config\Services::curlrequest($option);
        $data = json_decode($client->get($url)->getBody())->data;
        return $data;
    }
    function get_meta($url)
    {
        $option = [];
        $client = \Config\Services::curlrequest($option);
        $data = json_decode($client->get($url)->getBody())->meta;
        return $data;
    }
}
