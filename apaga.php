<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <style>
    body {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .btn {
        background: red;
        padding: 10px;
        width: 100px;
        margin: 20px;
        text-align: center;
        border: solid 1px black;
        border-radius: 8px;
    }

    a {
        text-decoration: none;
        font-family: Arial, Helvetica, sans-serif;
        text-transform: uppercase;
        color: white;
        background: red;
    }
    </style>

    <body> <?php
        $id = $_GET["id"];

        echo "<h1>$id</h1>";





        ?> </body>

</html>