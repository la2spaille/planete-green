<?php

namespace Engine\Model;

class Rest
{
    private $rooteUrl;

    public function __construct($domain, $version,$local = false)
    {
        $protocol = $local ? "http://" : "https://";
        $this->rooteUrl = $protocol . $domain . "/" . $version;
    }

    public function get($endpoint = "")
    {
        $url = $this->rooteUrl . "/" . $endpoint;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_CAINFO, SRC . "engine/Model/cert.pem");

        $response = curl_exec($curl);
        if (curl_error($curl)) {
            print_r(curl_error($curl));
        }
        curl_close($curl);
        return json_decode($response,true);
    }
}