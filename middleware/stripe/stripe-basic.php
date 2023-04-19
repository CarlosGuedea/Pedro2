<?php
    require_once 'vendor/autoload.php';
    header('Content-Type', 'application/json');

    // \Stripe\Stripe::setApiKey("sk_test_51MqelmDFy3xOvEs5V8OqgYFiwXT9JK5TG5YfJQJCy5F7fPOzElwFlWZ8zGQadPPGTVZuAfcsFUmbfKjghNRGuKkV00Jcl1k7oR");
    // $session = Stripe\Checkout\Session::create([]);

    $stripe = new Stripe\StripeClient("sk_test_51MqelmDFy3xOvEs5V8OqgYFiwXT9JK5TG5YfJQJCy5F7fPOzElwFlWZ8zGQadPPGTVZuAfcsFUmbfKjghNRGuKkV00Jcl1k7oR");
    $session = $stripe->checkout->sessions->create([
        "success_url" => "http://localhost:80/success",
        "cancel_url" => "http://localhost:80/cancel",
        "payment_method_types" => ['card','oxxo'],
        "mode" => "payment",
        "line_items" => [
            [
                "price_data" => [
                    "currency" => "mxn",
                    "product_data" => [
                        "name" => "Basic",
                        "description" => "Paquete Basic"
                    ],
                    "unit_amount" => 10000
                ],
                "quantity" => 1
            ]
        ]
    ]);

     echo json_encode($session);     
?>