<!DOCTYPE HTML>
<html lang="en">
    <head>
        <?php 
        include "includes/seo-meta.php";
        ?>

        <title> FastfoodPages </title>

        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/products.css">
    </head>
    <body>
        <?php
        include "includes/navigation-bar.php";
        ?>
        <div class="pageNameContainer">
            <p> Our Products </p>
        </div>
        
        <div class="orderBy">
            <form class="orderByForm">
                <label for="orderBy"> Order by: </label>
                <select id="orderBy" name="orderBy">
                    <option value="nameAsc"> Name - Ascending </option>
                    <option value="nameDesc"> Name - Descending </option>
                    <option value="priceAsc"> Price - Ascending </option>
                    <option value="priceDesc"> Price - Descending </option>
                    <option value="calAsc"> Calories - Ascending </option>
                    <option value="calDesc"> Calories - Descending </option>
                </select>
                <input type="submit" value="Apply"/>
            </form>
        </div>

        <table class="productsContainer">
        <?php
        require "phpBackend/loadProducts.php";
        ?>
        </table>
        <?php
        include "includes/footer.php"
        ?>
    </body>
</html>

