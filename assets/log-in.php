<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);


if (isset($_SESSION['email'])) {
    header("Location: user-dashboard.php"); // Redirect to login page
    exit(); // Stop further execution of the current script
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Log In - RemindMeister</title>
        <link rel="icon" type="image/x-icon" href="../assets/images/remindmeister-favicon-250px.png">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script type="text/js" src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/main-style.css">
        <style>
            :root{
                --primary: #001f3f;
                --accent: #39cccc;
                --bg: #f8f8f8;
                --txt: #333333;
                --cta: #ff851b;
            }

            body{
                margin:0 !important;
                padding:0 !important;
                background-color: var(--bg);
            }
            @font-face{
                font-family:Poppins-R;
                src:url('./font/Poppins-Regular.ttf');
            }
            @font-face{
                font-family:Poppins-S;
                src:url('./font/Poppins-SemiBold.ttf');
            }
            .login-container{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            .heading{
                font-family:Poppins-S !important;
                font-size: 3.2rem;
                color:var(--primary);
                text-align: center;
                margin-bottom:4rem;
            }
            .details{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                background-color: var(--bg);
                border-radius: 20px;
                filter:drop-shadow(0px 8px 10px rgba(0, 0, 0, 0.19));

            }
            input[type=email],input[type=password]
            {   
	            outline:none;
            }
            form{
                margin: 0rem;
                padding: 4rem 2rem;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                filter: drop-shadow(0);
               
            }
            .email{
                font-family:Poppins-R; 
                padding: 0.5rem 1.5rem;     
                font-size: 20px;
                text-align: center;
                border-radius: 7px;
                margin-bottom: 1rem;
                color: var(--primary);
                border-color:var(--bg) ;
                background-color: var(--bg);
                outline:none;
                border:none;
                border-bottom:1px solid var(--primary)
               
             }
             .password{
                font-family:Poppins-R; 
                padding: 0.5rem 1.5rem;     
                font-size: 20px;
                text-align: center;
                border-radius: 7px;
                background-color: var(--bg);
                margin-bottom: 1rem;
                border-color:var(--bg) ;
                outline:none;
                border:none;
                border-bottom:1px solid var(--primary)
             }
             h2{
                font-family:Poppins-R; 
                font-size: 0.9rem;
                color: var(--txt);
                margin-bottom: 1rem;
             }
             .BTN{
                font-family:Poppins-S; 
                font-size: 20px;
                padding: 0.5rem 4rem;
                border-radius: 7px;
                background-color: var(--cta);
                color: var(--bg);
                border: none;
                transition: 0.6s;
             }
             .BTN:hover{
                background-color: var(--primary);
                color: var(--bg);
                transition: 0.6s;
                cursor: pointer;
             }
             .row1{
                display: flex;
                flex-direction:column-reverse;
                justify-content: center;
                align-items: center;
                margin-bottom: 5rem;
             }
             .row1 img{
                margin-top: 3rem;
                width: 40%;
             }
             .login-err
             {
                color: red;
             }

             @media only screen and (min-width:768px){
               
                .heading{
                  font-size: 5rem;
                  margin-top:2rem;
                  margin-bottom:1rem;
                }
               form{
                    margin-top: 0;
                    margin-left: auto;
                    margin-right: auto;
                    padding: 4rem;
               }
               .email{
                    padding: 1rem 2rem;
                    font-size: 25px;
                    border-radius: 7px;
                    margin-bottom: 2rem;
               }
               .details{
                    flex-direction: row;
                    margin-bottom: 10rem;
                   
               }
               .password{
                    padding: 1rem 2rem;
                    font-size: 25px;
                    border-radius: 7px;
                    margin-bottom: 2rem;
               }
               h2{
                     font-size: 1.2rem;
                     margin-bottom: 2rem;
               }
               .row1{
                    display: flex;
                    flex-direction: row;
                    margin-top: 5rem;
               }
               .row1 img{
                    z-index: 1;
                    position: absolute;
                    width: 20%;
                    left: 2.5rem;
                    margin-top: 10rem;
               }
               .BTN{
                    font-size: 25px;
                    padding:0.6rem 4rem;
                    border-radius: 7px;
               }

             }

             @media only screen and (min-width:1280px){
                .heading{
                    font-size: 4.5rem;
                }
                form{
                    margin-top: 0;
                    margin-left:auto;
                    margin-right: auto;
                    padding: 6rem;
                }
                .email,.password{
                    padding: 1rem 4rem;
                    font-size: 20px;
                    border-radius: 7px;
                    margin-bottom: 2.3rem;
                }
                .details{
                    margin-bottom: 10rem;
                }
                h2{
                    font-size: 15px;
                }
               .row1 img{
                    position: absolute;
                    z-index: 1;
                    width: 15%;
                    left: 22%;
                    margin-top: 10rem;
                }
                .BTN{
                    font-size: 25px;
                    padding: 0.3rem 3rem;
                    border-radius: 7px;
                }
                
             }

        </style>
    </head>


    <body>
        <?php

        $con = new mysqli("localhost", "timax", "Masseffect34c1#@", "RemindMeister");

        if ($con === false) {
            die(print_r(sqlsrv_errors(), true));
        }
        else{
            echo "Connection established!";
        }

        // Check if the login form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get the entered email and password
            $email = $_POST["email"];
            $password = $_POST["password"];

            $sql = "SELECT * FROM registered_user WHERE email = ?";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("s",$email);
            $stmt->execute();
            $stmt->store_result();

            // Check if a user with the provided email exists
            if ($stmt->num_rows === 1) {
                // Bind the result variables
                $stmt->bind_result($uID, $userEmail, $fname, $lname, $userPassword, $subID);
                $stmt->fetch();
            
                // Verify the password
                if ($password==$userPassword) {
                // Password is correct, create a session
                
                $_SESSION["loggedin"] = true;
                $_SESSION["U_ID"] = $uID;
                $_SESSION["email"] = $userEmail;
                $_SESSION['First_name'] = $fname;
                $_SESSION['Last_name'] = $lname;
                
                // Redirect to a protected page or dashboard
                header("location: user-dashboard.php");
                exit();

                }
                else {
                    echo '<script>';
                    echo 'alert ("Incorrect password. Please try again.");';
                    echo '</script>';
                }
            }
            else {
                echo '<script>';
                echo 'alert ("No user with that email address found.");';
                echo '</script>';
            }
                
            // Close the database connection
            $stmt->close();
            $con->close();

        }

        ?>

        <header>
            <div class="nav-container">
                <div class="nav-logo"><a href="../index.php">REMINDMEISTER</a></div>
                <div class="nav-list" id="nav-list">
                    <a href="../index.php">Home</a>
                    <a href="aboutus.html">About Us</a>
                    <a href="contact.php">Contact Us</a>
                    <a href="create-account.php" class="nav-log-btn"><b>Sign up</b></a>
                </div>
                <div class="m-nav-btn">
                    <img src="images/header/m-open.webp" alt="m open btn" class="op-btn" id="op-btn">
                    <img src="images/header/m-close.webp" alt="m close btn" class="co-btn" id="co-btn">
                </div>
            </div>
        </header>
        <main>
           <div class="login-container">
                <h1 class="heading">Log in</h1>
                <div class="row1">
                <img src="./images/login-signup/Saly-32.webp" alt="image">
                <div class="details">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <input type="email" name="email" placeholder="E-mail address" class="email" required>
                        <input type="password" name="password" placeholder="password" class="password" required>
                        <h2>Forgot Password</h2>
                        <input type="submit" id="btn" class="BTN" value="Log in">
                        <br>
                    </form>
                </div>
                </div>
            </div>
        </main>
        <footer>
            <div class="footer-container">
                <div class="foo-desc">
                    <p>RemindMeister is your ultimate companion for staying organized and on top of your bills and events. With its user-friendly interface, smart reminders, and seamless integration, managing your schedule has never been easier. Say goodbye to missed deadlines and hello to a more efficient and stress-free life.</p>
                    <h1>REMINDMEISTER</h1>
                </div>
                <div class="foo-urls">
                    <div class="foo-list">
                        <a href="../index.php">Home</a>
                        <a href="aboutus.html">About Us</a>
                        <a href="contact.php">Contact Us</a>
                        <a href="create-account.php" class="nav-log-btn"><b>Sign up</b></a>
                    </div>
                    <img src="images/footer/Saly-12.webp" alt="footer image" class="footer-img">
                </div>
                <div class="foo-social">
                    <h3>Our Social Medias</h3>
                    <div class="social-icons">
                        <img src="images/footer/social-icons/ic_baseline-facebook.webp" alt="facebook icon">
                        <img src="images/footer/social-icons/mdi_youtube.webp" alt="youtube icon">
                        <img src="images/footer/social-icons/mdi_linkedin.webp" alt="linkedin icon">
                        <img src="images/footer/social-icons/mdi_twitter.webp" alt="twitter icon">
                        <img src="images/footer/social-icons/ri_whatsapp-fill.webp" alt="whatsapp icon">
                        <img src="images/footer/social-icons/ri_instagram-fill.webp" alt="instragram icon">
                    </div>
                    <h3 class="foo-email-h">E-mail</h3>
                    <p><a href="mailto:hello@remindmeister.com">HELLO@REMINDMEISTER.COM</a></p>
                    <h3 class="foo-phone-h">Phone</h3>
                    <p><a href="tel+94112546782">+94 11 2546782</a></p>
                </div>
            </div>
        </footer>
        <script src="js/main-script.js"></script>
    </body>
</html>