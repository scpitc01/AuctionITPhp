<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/tether.min.js"></script>
        <script src ="js/bootstrap.min.js"></script>
        <link href="css/bootstrap.min.css" text="text/css" rel="stylesheet">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <nav class="navbar navbar-inverse bg-inverse">
            <div clas="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">AuctionIT</a>
                </div>
                <div class="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a class="nav-link" href="AddItem.php"><h4>Add an Item</h4></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container body-content">
            <form class="form-group" action="AddItemDatabase.php" method="post">
                <div class="form-group">
                    <label for="itemNumber">Item Number</label>
                    <input type="text" class="form-control" id="itemNumber" placeholder="Item Number">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" placeholder="Description">
                </div>
                <div class="form-group">
                    <label for="donatedBy">Donated By</label>
                    <input type="text" class="form-control" id="donatedBy" placeholder="Donated By">
                </div>
                <div class="form-group">
                    <label for="value">Value</label>
                    <input type="text" class="form-control" id="value" placeholder="Value">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </body>
</html>
