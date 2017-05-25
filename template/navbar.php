<nav class="navbar navbar-default navbar-fixed-top" >
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-apple" aria-hidden="true"></span> Library</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php
                    if ($_SERVER['REQUEST_URI']=="/Bookstore/main.php") {
                       echo "<li class=\"active\"><a href=\"main.php\">Home <span class=\"sr-only\">(current)</span></a></li>";
                       echo " <li><a href=\"buybook.php\">Book</a></li>";
                       echo " <li><a href=\"searchtotalui.php\">Available Book</a></li>";
                    }
                    else if($_SERVER['REQUEST_URI']=="/Bookstore/buybook.php") {
                       echo " <li><a href=\"main.php\">Home</a></li>";
                       echo "<li class=\"active\"><a href=\"buybook.php\">Book <span class=\"sr-only\">(current)</span></a></li>";
                       echo " <li><a href=\"searchtotalui.php\">Available Book</a></li>";
                    }
                    else if($_SERVER['REQUEST_URI']=="/Bookstore/searchtotalui.php") {
                       echo " <li><a href=\"main.php\">Home</a></li>";
                       echo " <li><a href=\"buybook.php\">Book</a></li>";
                       echo " <li class=\"active\"><a href=\"searchtotalui.php\">Available Book <span class=\"sr-only\">(current)</span> </a></li>";
                    }
                    else{
                       echo " <li><a href=\"main.php\">Home</a></li>";
                       echo " <li><a href=\"buybook.php\">Book</a></li>";
                       echo " <li><a href=\"searchtotalui.php\">Available Book</a></li>";
                    }
                    ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
                    session_start();
                    if(isset($_SESSION['login']) != session_id()) {
                    	echo "<li><a href=\"login.php\">Login</a></li>";
                     echo "<li><a href=\"regisform.php\">Create Account?</a></li>";
                    } else {
                         echo "<li><a href=\"core.php?do=logout\">Logout</a></li>";
                         if($_SESSION['status'] == 1)//admin
                         {
                     ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello, <?php echo $_SESSION['firstname']; ?> </a>
                    <ul class="dropdown-menu">
                        <li><a href="addbookinfoo.php">Add new book</a></li>
                        <li><a href="deleteui.php">Delete/Add book</a></li>
                        <li><a href="startedit.php">Edit book</a></li>
                        <li><a href="editpreorder.php">Edit pre-order book</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="borrowing.php">Borrow Option</a></li>
                        <li><a href="returning.php">Return Option</a></li>
                    </ul>
                </li>
                <?php } else { ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello, <?php echo $_SESSION['firstname']; ?> </a>
                    <ul class="dropdown-menu">
                        <li><a href="editprofile2.php">Profile</a></li>
                        <li><a href="viewborrow.php">My borrow book</a></li>
                        <li><a href="checkorder.php">My pre-order book</a></li>
                        <li><a href="wishlist.php">My wishlist</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </li>
                <?php } } ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
