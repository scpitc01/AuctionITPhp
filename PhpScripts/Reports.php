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
        <div class="navbar navbar-inverse bg-inverse">
            <div clas="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="Index.php">AuctionIT</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a class="nav-link" href="AddItem.php"><h4>Add an Item</h4></a>
                        </li>
                        <li>
                            <a class="nav-link" href="FindItem.php"><h4>Edit an Item</h4></a>
                        </li>
                        <li>
                            <a class="nav-link" href="ViewAllItems.php"><h4>View Items</h4></a>
                        </li>
                        <li>
                            <a class="nav-link" href="Reports.php"><h4>Reports</h4></a>
                        </li>
                        <li>
                            <a class="nav-link" href="AddBid.php"><h4>Add Bid</h4></a>
                        </li>
                        <li>
                            <a class="nav-link" href="RegisterBidder.php"><h4>Bidder Registration</h4></a>
                        </li>
                        <li>
                            <a class="nav-link" href="AdminPage.php"><h4>Administrator Tools</h4></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container body-content">
            <form class="form-group" action="PhpScripts/GenerateAuctionNumSheet.php" method="post">
                <input class="btn btn-primary" type="submit" value="Auction Numbering Sheet">
            </form> 
            <form class="form-group" action="PhpScripts/GenerateAuctionProgram.php" method="post">
                <input class="btn btn-primary" type="submit" value="Auction Program">
            </form> 
            <form class="form-group" action="PhpScripts/GenerateReceipt.php" method="post">
                <input class="btn btn-primary" type="submit" value="All Receipts">
            </form>
            <form class="form-group" action="PhpScripts/GenerateSpecificReceipt.php" method="post">
                <div class="form-group">
                    <label for="bidderID">Bidder ID</label>
                    <input type="text" class="form-control" name="bidderID" id="bidderID" placeholder="Bidder ID">
                </div>
                <input class="btn btn-primary" type="submit" value="Get Specific Receipt">
            </form>
        </div>
    </body>
</html>
