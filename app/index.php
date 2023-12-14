<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// dependencies
require_once('inc/config.php');
require_once('inc/api_functions.php');

echo "<pre>";

$result = api_request('get_all_products', 'GET');

// print_r($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTROLE ESTOQUE</title>
</head>
<body>
    <main>
        <div>
            <center>
                <?php 
                    foreach($result['data']['results'] as $product) {
                        echo "<center>". $product['product_name'] . "</center><br>";
                    }
                ?>
            </center>
        </div>
    </main>
</body>
</html>
