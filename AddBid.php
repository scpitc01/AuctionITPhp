<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php
            session_start();
            if($_SESSION["accountType"] != 'user' && $_SESSION["accountType"] != 'admin')
            {
                header('Location: index.php'); 
            }
        ?>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/tether.min.js"></script>
        <script src ="js/bootstrap.min.js"></script>
        <link href="css/bootstrap.min.css" text="text/css" rel="stylesheet">
        <script type="text/javascript">
            $( document ).ready(function() {
                if(<?php echo $_SESSION['databaseSuccess'] ?> === 1)
                {
                    alert("Bid Added");
                    <?php $_SESSION['databaseSuccess'] = 0; ?>
                }
                else if(<?php echo $_SESSION['databaseSuccess'] ?> === 2)
                {
                    alert("Error adding Bid to Database");
                    <?php $_SESSION['databaseSuccess'] = 0; ?>
                }
                else if(<?php echo $_SESSION['databaseSuccess'] ?> === 3)
                {
                    alert("This is a test");
                    <?php $_SESSION['databaseSuccess'] = 0; ?>
                }
                else
                {
                }
            });
            function validate()
            {
                var error="";
                var number = document.getElementById( "itemNumber" );
                if( number.value === "" )
                {
                    error = "You have to enter an Item Number.";
                    document.getElementById( "error_para" ).innerHTML = error;
                    return false;
                }
                var bidderID = document.getElementById( "bidderID" );
                if( description.value === "" )
                {
                    error = "You have to enter a Bidder ID.";
                    document.getElementById( "error_para" ).innerHTML = error;
                    return false;
                }
                else
                {
                    return true;
                }
            }

        </script>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

    
        <?php include "PhpScripts/Templates/Nav.php";?>


         <div class="container body-content">
            <form class="form-group" action="PhpScripts/AddBidDatabase.php" method="post">
                <div class="form-group">
                    <label for="itemNumber">Item Number</label>
                    <input type="text" class="form-control" name="itemNumber" id="itemNumber" placeholder="Item Number">
                </div>
                <div class="form-group">
                    <label for="bidderID">Bidder ID</label>
                    <input type="text" class="form-control" name="bidderID" id="bidderID" placeholder="Bidder ID">
                </div>
                <div class="form-group">
                    <label for="value">Value</label>
                    <input type="text" class="form-control" name="value" id="value" placeholder="Value">
                </div>
                <div class="form-group">
                    <label for="year">Year</label>
                    <input type="text" class="form-control" name="year" id="year" value=<?php echo date("Y") ?>>
                </div>
                <div class="form-group">
                    <label for="description">Description (Used only for 600+)</label>
                    <input type="text" class="form-control" name="description" id="description" placeholder="description">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div>
            <table style="width:20%">
                <tr>
                    <th>Item Number</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <th>600</th>
                    <th>Cake Slices</th>
                </tr>
                <tr>
                    <th>601</th>
                    <th>Whole Cake</th>
                </tr>
                <tr>
                    <th>602</th>
                    <th>Ducks</th>
                </tr>
                <tr>
                    <th>603</th>
                    <th>Button Type 1</th>
                </tr>
                <tr>
                    <th>604</th>
                    <th>Button Type 2</th>
                </tr>
            </table>
        </div>
    </body>
</html>
