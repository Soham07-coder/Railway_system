<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Railway Ticket Booking</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="singleproduct.css">

    <style>
    /* CSS styles for the search bar */

    .search-bar input[type="text"] {
      width: 100%;
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
    }
  </style>

</head>

<body class="Page1">

    <!-- header section starts -->

    <header class="header">

        <a href="#" class="logo"> Railway Reservation System </a>

        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="major (1).php #features">features</a>
            <a href="major (1).php #products">products</a>
            
        </nav>

        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>

        <form class="search-bar" action="/search" method="get">
            <input type="text" name="query" placeholder="Search...">
        </form>

    </header>

    <!-- Account Page -->
    <div class="account-page">
        <div class="Acontainer">
            <div class="row">
                <div class="col-2">
                    <img src="">
                    <div class="col-2">
                        <div class="form-container">
                            <div class="form-btn">
                                <span onclick="login()">Login</span>
                                <span onclick="Register()">Register</span>
                                <hr id="indicator">
                            </div>
                            <form id="LoginForm" method="post" action="logindetails.php">
                                <input type="text" name="username" placeholder="Username" required>
                                <input type="password" name="password" placeholder="Password" required>
                                <button type="submit" name="login" class="btn">Login</button>
                            </form>

                            <form id="RegForm" action="Regcode.php" method="POST">
                                <input type="text" name="username" placeholder="Username" required>
                                <input type="email" name="email" placeholder="Email Address" required onblur="Validate(this.value)">
                                <input type="password" name="password" placeholder="password" required>
                                <button type="submit" name="register" class="btn">Register</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <script>
        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var indicator = document.getElementById("indicator");

        function Validate(EmailAddress){
            var Location = EmailAddress.indexOf('@')
		    if(Location== -1)
		    {
			    alert("You entered a wrong Email ID")
		    }
        }


        function Register() {
            RegForm.style.transform = "translateX(0px)";
            LoginForm.style.transform = "translateX(0px)";
            indicator.style.transform = "translateX(100px)";

        }

        function login() {
            RegForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = "translateX(300px)";
            indicator.style.transform = "translateX(0px)";
        }


    </Script>
    <!-- footer section starts -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                

            </div>
        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="script.js"></script>

</body>

</html>