<?php

class api_logic
{
    private $endpoint;
    private $params;

    // ====================================
    public function __construct($endpoint, $params = null)
    {
        // define the objects/class props
        $this->endpoint = $endpoint;
        $this->params = $params;
    }
    // ====================================
    









    // ====================================
    // ENDPOINTS
    // ====================================
    public function status()
    {
        return [
            'status' => 'SUCCESS',
            'message' => 'API is Running!!!',
            'results' => null
        ];
    }
    // ====================================
    public function endpoint_exists()
    {
        return method_exists($this, $this->endpoint);
    }
    // ====================================
    public function get_all_products()
    {
        $db = new database();
        $results = $db->getProducts();
        return [
            'status' => 'SUCCESS',
            'message' => '',
            'results' => $results
        ];
    }
    // ====================================
    public function get_all_clients()
    {
        return [
            'status' => 'SUCCESS',
            'message' => '',
            'results' => [
                'client1', 'client2', 'client3', 'client4'
            ]
        ];
    }
    // ====================================
}
