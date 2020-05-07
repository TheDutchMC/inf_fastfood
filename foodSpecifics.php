<!DOCTYPE HTML>
<html lang="en_us">
    <head>
        <?php
        include "includes/seo-meta.php";
        include "includes/navigation-bar.php";
        ?>
        
        <title> Fastfood Pages </title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/foodSpecifics.css">
    </head>

    <body>
        <?php

        require("phpBackend/dbConnector.php");

        $id = intval($_GET['id']);

        $pull_stmt = "SELECT * FROM product WHERE id='${id}'";

        $getProduct = $handle->prepare($pull_stmt);
        $getProduct->execute();

        $product = $getProduct->fetch();

        echo "
        <table class=\"productDetailsContainer\"> 
            <tr class=\"specificsTr\">
                <td class=\"identifier\"> Name </td>
                <td class=\"value\"> " . $product['naam'] . "</td>
            </tr>
            <tr class=\"specificsTr\">
                <td class=\"identifier\"> Calories </td>
                <td class=\"value\"> " . $product['calorieen'] . "cal</td>
            </tr>
            <tr class=\"specificsTr\">
                <td class=\"identifier\"> Price </td>
                <td class=\"value\"> €" . $product['prijs'] . "</td>
            </tr>
            <tr class=\"specificsTr\">
                <td class=\"identifier\"> Format </td>
                <td class=\"value\"> " . $product['formaat'] . "</td>
            </tr>
            <tr class=\"specificsTr\">
                <td class=\"identifier\"> Weight </td>
                <td class=\"value\"> " . $product['gewicht'] . "g </td>
            </tr>
            <tr class=\"specificsTr\">
                <td class=\"identifier\"> Availability </td>
                <td class=\"value\"> " . $product['beschikbaarheid'] . "</td>
            </tr>
            <tr class=\"specificsTr\">
                <td class=\"identifier\"> Calories from fat </td>
                <td class=\"value\"> " . $product['calorieen_uit_vet'] . "g </td>
            </tr>
            <tr class=\"specificsTr\">
                <td class=\"identifier\"> Total fat </td>
                <td class=\"value\"> " . $product['totaal_vet'] . "g </td>
            </tr>
            <tr class=\"specificsTr\">
                <td class=\"identifier\"> Saturated fat </td>
                <td class=\"value\"> " . $product['verzadigd_vet'] . "g </td>
            </tr>
            <tr class=\"specificsTr\">
                <td class=\"identifier\"> Cholesterol </td>
                <td class=\"value\"> " . $product['cholesterol'] . "g </td>
            </tr>
            <tr class=\"specificsTr\">
                <td class=\"identifier\"> Salt </td>
                <td class=\"value\"> " . $product['zout'] . "g </td>
            </tr>
            <tr class=\"specificsTr\">
                <td class=\"identifier\"> Carbohydrates </td>
                <td class=\"value\"> " . $product['koolhydraten'] . "g </td>
            </tr>
            <tr class=\"specificsTr\">
                <td class=\"identifier\"> Dietary fiber </td>
                <td class=\"value\"> " . $product['voedingsvezels'] . "g </td>
            </tr>
            <tr class=\"specificsTr\">
                <td class=\"identifier\"> Sugar </td>
                <td class=\"value\"> " . $product['suiker'] . "g </td>
            </tr>
            <tr class=\"specificsTr\">
               <td class=\"identifier\"> Proteine </td>
                <td class=\"value\"> " . $product['proteine'] . "g </td>
            </tr>
            <tr class=\"specificsTr\">
                <td class=\"identifier\"> Vitamine A </td>
                <td class=\"value\"> " . $product['vitamine_a_adh'] . "g </td>
            </tr>
            <tr class=\"specificsTr\">
                <td class=\"identifier\"> Vitamine C </td>
                <td class=\"value\"> " . $product['vitamine_c_adh'] . "g </td>
            </tr>
            <tr class=\"specificsTr\">
                <td class=\"identifier\"> Calcium </td>
                <td class=\"value\"> " . $product['calcium_adh'] . "g </td>
            </tr>
            <tr class=\"specificsTr\">
                <td class=\"identifier\"> Iron </td>
                <td class=\"value\"> " . $product['ijzer_adh'] . "g </td>
            </tr>
        </table>

            ";
        ?>

        <?php
        include "includes/footer.php"
        ?>
    </body>
</html>