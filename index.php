<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    include_once 'open-database.php';
/*
 *  Check if connection was succesful. If success connection but database not found, create the database.
 */

    

?>


<!DOCTYPE html> 
<meta charset="utf-8">
<html>
 <?php
    // Let's find out what values were send through GET
    $PageNr = "";
    $PageQuery = "";
    
    if( !empty($_GET['page']))
        { $PageNr = $_GET['page']; }
        
    switch( $PageNr){
        case "lb-0001":
            // Page lb-0001 = index page;
            $top_include = 'lb-top.php';
            $banner_include = 'lb-banner.php';
            $body_include = 'lb-0001.php';
            $footer_include = 'lb-footer.php';
            break;
         case "lb-0002":
            // Page lb-0002 = other page;
            $top_include = 'lb-top.php';
            $banner_include = 'lb-banner.php';
            $body_include = 'lb-0002.php';
            $footer_include = 'lb-footer.php';
            break;
        
        default:
            // If no matching case found
            $top_include = 'lb-top.php';
            $banner_include = 'lb-banner.php';
            $body_include = 'lb-0000.php';
            $footer_include = 'lb-footer.php';
            break;
    }
  
 ?>

    <head>
        <?php 
        $page_include = 'lb-header.php';
        include ($page_include);
        ?>
    </head>

    
    <body>
        <!-- Top Section -->
        <div id ="top">
            <?php
            include( $top_include );
            ?>
        </div>
        
        <!-- Banner Section -->
            <?php
            include( $banner_include );
            ?>
        <!-- Body Section -->
            <?php
            include( $body_include );
            ?>

        <!-- Footer Section -->
        <div id ="footer">
            <?php
            include( $footer_include );
            ?>
        </div>    

    </body>
</html>