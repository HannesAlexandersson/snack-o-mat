<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />        
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="Stylesheet" href="style.css"/>        
        <title>Snack-o-Mat</title>   
        <?php //eftersom alla sidorna på sajten använder samma head så requiras nödvändiga filer här så att alla får åtkomst till dem alltid
        __DIR__. require 'object-array.php';
        __DIR__. require 'functions.php'; 
        __DIR__. require 'header.php' ;        
        ?>
    </head> 
    <body>