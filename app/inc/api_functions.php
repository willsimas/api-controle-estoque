<?php

function api_request($endpoint, $method = 'GET', $variables = [])
{
    // initiate the curl request
    $client = curl_init();

    // return the result as a STRING
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    //defines the URL
    $url = API_BASE_URL;

    // if request is GET
    if ($method == 'GET') {
        $url .= '?endpoint=' . $endpoint;
        if (!empty($variables)) {
            $url .= "&" . http_build_query($variables);
        }
    }

    // if request is POST
    if ($method == 'POST') {
        $variables = array_merge(['endpoint' => $endpoint, $variables]);
        curl_setopt($client, CURLOPT_POSTFIELDS, http_build_query($variables));

    }

    curl_setopt($client, CURLOPT_URL, $url);

    $reponse = curl_exec($client);

    return json_decode($reponse, true);

}
