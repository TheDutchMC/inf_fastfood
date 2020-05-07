<?php
require "dbConnector.php";

if(isset($_GET['orderBy'])) {
    $orderBy = $_GET['orderBy'];
} else {
    $orderBy = "nameAsc";
}

//Spread out what to order by and how
switch ($orderBy) {
    case "nameAsc":
        $order = "naam";
        $dir = "ASC";
        break;
    case "nameDesc":
        $order = "naam";
        $dir = "DESC";
        break;
    case "priceAsc":
        $order = "prijs";
        $dir = "ASC";
        break;
    case "priceDesc":
        $order = "prijs";
        $dir = "DESC";
        break;
    case "calAsc":
        $order = "calorieen";
        $dir = "ASC";
        break;
    case "calDesc":
        $order = "calorieen";
        $dir = "DESC";
        break;
}

//Pull the products from the database
$pull_stmt = "SELECT naam,prijs,id FROM product ORDER BY ${order} ${dir}";

$getProducts = $handle->prepare($pull_stmt);
$getProducts->execute();

$products = $getProducts->fetchAll();

$currency = "€";
$window_width =0;
$window_width = "<script type='text/javascript'>window.innerWidth;</script>";

$itemsPerRowNR = 1920/140;

$itemsPerRow = round($itemsPerRowNR);

echo "<tr>";

$i = 0;
foreach($products as $product) {
    $name = $product['naam'];
    $price = $product['prijs'];
    $id = $product['id'];

    echo    
    "<td onclick=\"location.href='foodSpecifics.php?id=${id}'\" style=\"cursor:pointer\" class=\"productContainer\">
        <p class=\"productName\"> ${name} ${i}</p>
        <p class=\"productPrice\"> ${currency} ${price} </p>
    </td>";

    $i++;
}
?>