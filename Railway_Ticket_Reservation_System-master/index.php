<!DOCTYPE html>
<html>
    <head>
        <title>Railway Ticket Booking</title>
        <link rel="stylesheet" href="index.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

        <!-- font awesome cdn link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <!-- custom css file link -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="singleproduct.css">
        <link rel="stylesheet" type="text/css" href="../css/footer.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">


        <script language="Javascript">
            function display(ad){
                alert(ad)
            }
        </script>
    </head>
    <body>
    </header>
    <!-- header section starts -->

    <header class="header">

        <a href="#" class="logo"> Railway Ticket Reservation System </a>

        <nav class="navbar navbar-expand-lg navbar-dark header-back sticky-top header-navbar-fonts">
            <a href="#home">home</a>
            <a href="#features">features</a>
            <a href=" // to be edited">Meals</a>
            <a href="#categories">categories</a>    
            <a href="#review">review</a>
            <a href="#blogs">blogs</a>
            <a href="login.php">Login</a>
            <?php
            // Start the session
            session_start();
            // Check if the user is logged in
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                // User is logged in, display the welcome message
                echo " Welcome " . $_SESSION['username'] . "!</p>";
                echo'<script type="text/javascript">';
                echo 'display("' . $_SESSION['username']. '");'; // Replace "functionName" with the actual name of your JavaScript function
                echo '</script>';
            }
            ?>
        </nav>
    
        <form method="post" action="logout.php">
            <input type="submit" name="logout" value="Logout" class="btn">
        </form>
    </header> 
    
    <!-- home section starts -->

    <section class="index" id="home">
         
    </section>

    <!-- home section ends -->

    <!-- features section starts -->

    <section class="features" id="features">

       

    </section>


    <!-- footer section starts -->

    <!--<section class="footer">

        <div class="box-container">

            <div class="box">
                <h3> Po's <i class="fas fa-shopping-basket"></i></h3>
                <p>Follow us on social media for Latest Update</p>
                <div class="share">
                    <a href="https://www.facebook.com/profile.php?id=100092349631825" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="https://www.instagram.com/pos_organic/?igshid=OTJhZDVkZWE%3D" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#" class="links"> <i class="fas fa-phone"></i> +91 9372404512/+91 87795 28579 </a>
                <a href="#" class="links"> <i class="fas fa-phone"></i> +91 96738 96757 </a>
                <a href="#" class="links"> <i class="fas fa-phone"></i> posorganic@gmail.com </a>
                <a href="#" class="links"> <i class="fas fa-phone"></i> mumbai, india - 400104 </a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="index.php" class="links"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="major (1).php #features" class="links"> <i class="fas fa-arrow-right"></i> features </a>
                <a href="major (1).php #products" class="links"> <i class="fas fa-arrow-right"></i> products </a>
                <a href=" major (1).php #categories" class="links"> <i class="fas fa-arrow-right"></i> categories </a>
                <a href="major (1).php #review" class="links"> <i class="fas fa-arrow-right"></i> review </a>
                <a href="major (1).php ##blogs" class="links"> <i class="fas fa-arrow-right"></i> blogs </a>
            </div>
        </div>

    </section> -->

    <!-- footer section ends -->

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="script.js"></script>

</body>

</html>      