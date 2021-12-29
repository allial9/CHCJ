<?php 
session_start();
require_once "recipe_pdo.php";

//code for search results will go here. 
$counts = 0;
// print_r($_SESSION['ingredient'.$counts]); // prints out value of last selected ingredient. Need to find a way to implement in loop to display all ingredients
// $ingredient = $_SESSION['ingredient'.$counts];

// $_SESSION['ingredient'] = array();
// var_dump($_SESSION['ingredient']);
foreach ($_SESSION['ingredient'] as $key => $value){
    // print_r($_SESSION['ingredient']);
    // var_dump($_SESSION['ingredient']);
    echo($_SESSION['ingredient'][$counts]);
    echo('<br/>');
    $counts++;
};

?>


<html>
    <head>
        <title>
            The Recipe Book
        </title>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="recipe_style.css">
        
    </head>
    <body><script id="__bs_script__">//<![CDATA[
    document.write("<script async src='/browser-sync/browser-sync-client.js?v=2.27.7'><\/script>".replace("HOST", location.hostname));
//]]></script>

        <header>

            <h1 id="title">Recipe Book</h1>
        </header>

        <h3> Featuring multicultural cuisine right at your finger tips! </h3>
        <div classid="rtt"><p> Recently added and trending text go here </p></div>
        <form>

        <div id="searchbar">
            <input type="search" id="rsearch" name="rsearch" >
        </div>  
        <input type="submit" id="search" value="Search">
        <a href="ingredients.php"> Add a recipe </a>
        <!-- redirect to ingredients.php then recipe_add.php -->
        <!-- add jquery autocomplete to design -->

        </form>
        <script type="text/javascript">

        $(document).ready(function(){
            $("h1").css("text-align", "center");
        });

        </script>
    </body>
</html>