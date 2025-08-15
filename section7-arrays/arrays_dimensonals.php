<?php 
    // These arrays use named keys
    $products = [
        ["name" => "Laptop", "price" => 1000, "stock" => 5],
        ["name" => "Mouse", "price" => 20, "stock" => 15],
        ["name" => "Keyboard", "price" => 50, "stock" => 10],
    ];

    // Access array
    // echo $product[0]["name"];

    function calculateTotalPrice($products) {
        $total = 0;

        foreach($products as $product) {
            $total += $product['price'];
        }
        return $total;
    }

    $totalPrice = calculateTotalPrice($products);
    echo "Total price for all products: $" . $totalPrice;
    // echo $product['name']. " cost $". $product['price'] . "<br>";

?>