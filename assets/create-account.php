<?php
    session_start();

    if(isset($_SESSION["email"])){//if user loggedin this code will redirect user to dashboard
        header("location: user-dashboard.php");
        exit;
    }

    $con = new mysqli("localhost", "timax", "Masseffect34c1#@", "RemindMeister");

    if ($con === false) {
        die(print_r(sqlsrv_errors(), true));
    }
    else{
        //echo "Connection established!";
    }

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Retrieve form data
        $firstName = $_POST["firstname"];
        $lastName = $_POST["lastname"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["con_password"];
        
        // Perform validation
        $errors = array();
        if ($password !== $confirmPassword) {
            $errors[] = "Passwords do not match";
        }
        
        // If there are no validation errors, insert the data into the table
        if (empty($errors)) {
            $sql = "INSERT INTO registered_user (Email, First_name, Last_name, Password) VALUES (?, ?, ?, ?)";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("ssss",$email, $firstName, $lastName, $password);
            $stmt->execute();
            
            // Data inserted successfully, redirect to a success page or perform any other necessary actions
            echo '<script>';
            echo 'alert ("Account created successfully. Please Log in now.");';
            echo 'window.location.href = "../assets/log-in.php"';
            echo '</script>';
            exit();

            
            // Close the database connection
            $stmt->close();
            $con->close();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create Account - RemindMeister</title>
        <link rel="icon" type="image/x-icon" href="../assets/images/remindmeister-favicon-250px.png">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script type="text/js" src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/main-style.css">

        <style>
            body{
                margin:0 !important;
                padding:0 !important;
                background-color: var(--bg);
            }
            main{
                display:flex ;
                justify-content:center ;
                align-content:center ;
                padding:1rem 0rem 8rem 0rem;
            }
            .form-container{
                display: flex;
                align-items: center;
                justify-content:flex-start;
                align-content:center;
                flex-direction: column;
            }
            .content{
                display:flex ;
                align-items:center ;
                justify-content:space-between;
                align-content:space-between ; 
                flex-direction: column;      
                margin: 1rem;   
                filter:drop-shadow(0px 0px 10px rgb(230, 227, 227));
                border-radius: 10px;     
                background-color: var(--bg);
                margin-bottom: 4rem;
                width:85vw;
                padding:2rem;
            }
            .form-title{
                font-family:Poppins-S;
                font-size: 2em;
                margin-top: 2rem;
                margin-bottom:2rem;
            }
            form{
                margin: 1rem;
                width:100%;
            }
            .password-container{
                padding-bottom: 1rem;
            }
            .first-name, .last-name, .phone, .email, .password, .confirm-password{
                display: flex;
                flex-direction:row;
            }
            .login-image {
                width: 40%;
                position:absolute;
                top:58rem;
                right: 8rem;
            }
            input[type=email],input[type=tel],input[type=text],input[type=password]{
                border: none;
                border-bottom: 1px solid var(--txt);
                border-radius:5px;
                background-color: var(--bg);
            }
            input::placeholder {
                text-align: center; 
            }
            input[type=submit]{
                background-color:var(--cta);
                width:100%;
                padding:0.5rem;
                border-radius: 5px;
                color:var(--bg);
                border: none;
                font-family:Poppins-S;
                cursor: pointer;
                transition:0.6s;
            }  
            input[type=submit]:hover {
                color: var(--primary);
                transition:0.6s;
            }
            #return-login{
                font-family:Poppins-R;
                font-size: 0.8em;
                margin-bottom: 2rem;
                opacity: 0.6;
            }
            #return-login:hover{
                color:var(--primary);
                opacity:1;
            }

            /*remove outline on html form fields when active status*/
            textarea:focus, input:focus{
                outline: none;
            }
            @media only screen and (max-width:767px){
                input{
                    width:100%;
                    margin-top:3rem !important;
                }
            }

            /* tablet*/
            @media only screen and (min-width:768px){
                body{
                    margin:0 !important;
                    padding:0 !important;
                    background-color: var(--bg);
                }
                main{
                    display:flex ;
                    justify-content:center ;
                    align-content:center ;
                }
                .form-container{
                    display: flex;
                    align-items: center;
                    justify-content:flex-start;
                    align-content:center;
                    flex-direction: column;
                }
                .content{
                    display:flex ;
                    align-items:center ;
                    justify-content:space-between;
                    align-content:space-between ; 
                    flex-direction: column;      
                    margin: 1rem;   
                    /*box-shadow:16px 16px 10px rgb(146, 141, 141);*/
                    filter:drop-shadow(0px 0px 10px rgb(230, 227, 227));
                    border-radius: 10px;     
                    background-color: var(--bg);
                    margin-bottom: 4rem;
                }
                .form-title{
                    font-family:Poppins-S;
                    font-size: 3em;
                    margin-top: 4rem;
                }
                form{
                    margin: 1rem;
                }
                .full-name{
                    display:flex;
                    justify-content: space-around;
                }
                .contact-detail{
                    display:flex;
                    justify-content: space-around;
                }
                .password-container{
                    display:flex;
                    justify-content: space-around;
                    padding-bottom: 1rem;
                }
                .first-name, .last-name, .phone, .email, .password, .confirm-password{
                    display: flex;
                    flex-direction:column;
                    margin:1rem;
                    width:100%;
                }
                .login-image {
                    width: 20%;
                    position:absolute;
                    top:40rem;
                    right: 20rem;
                }
                input[type=text]{
                    border: none;
                    border-bottom: 1px solid var(--txt);
                    border-radius:5px;
                    background-color: var(--bg);
    
                }
                input::placeholder {
                    text-align: center; 
                }

                input[type=submit]{
                    background-color:var(--cta);
                    width:100%;
                    padding:0.5rem;
                    border-radius: 5px;
                    color:var(--bg);
                    border: none;
                    font-family:Poppins-S;
                    cursor: pointer;
                    transition:0.6s;
                    margin-top:1rem;
                }  
                input[type=submit]:hover {
                    color: var(--primary);
                    transition:0.6s;
                }
                #return-login{
                    font-family:Poppins-R;
                    font-size: 0.8em;
                    margin-bottom: 2rem;
                    opacity: 0.6;
                }
                #return-login:hover{
                    color:var(--primary);
                    opacity:1;
                }            

                /*remove outline on html form fields when active status*/
                textarea:focus, input:focus{
                    outline: none;
                }
            }

            /* desktop */
            @media only screen and (min-width:1280px){

                body{
                    margin:0 !important;
                    padding:0 !important;
                    background-color: var(--bg);
                }
                main{
                    display:flex ;
                    justify-content:center ;
                    align-content:center ;
                }
                .form-container{
                    display: flex;
                    align-items: center;
                    justify-content:flex-start;
                    align-content:center;
                    flex-direction: column;
                }
                .content{
                    display:flex ;
                    align-items:center ;
                    justify-content:space-between;
                    align-content:space-between ; 
                    flex-direction: column;      
                    margin: 1rem;   
                    filter:drop-shadow(0px 0px 10px rgb(230, 227, 227));
                    border-radius: 10px;     
                    background-color: var(--bg);
                    margin-bottom: 4rem;
                    width:50vw;
                }
                .form-title{
                    font-family:Poppins-S;
                    font-size: 3em;
                    margin-top: 2rem;
                }
                form{
                    margin: 1rem;
                }
                .full-name{
                    display:flex;
                }
                .contact-detail{
                    display:flex;
                }
                .password-container{
                    display:flex;
                    padding-bottom: 1rem;
                }
                .first-name, .last-name, .phone, .email, .password, .confirm-password{
                    display: flex;
                    flex-direction:column;
                    margin-top:2rem;
                
                }
                .login-image {
                    width: 12%;
                    position:absolute;
                    top:22rem;
                    right: 15rem;

                }
                input[type=text]{
                    border: none;
                    border-bottom: 1px solid var(--txt);
                    border-radius:5px;
                    background-color: var(--bg);
    
                }
                input::placeholder {
                    text-align: center; 
                }

                input[type=submit]{
                    background-color:var(--cta);
                    width:100%;
                    padding:0.5rem;
                    border-radius: 5px;
                    color:var(--bg);
                    border: none;
                    font-family:Poppins-S;
                    cursor: pointer;
                    transition:0.6s;
                    
                }  
                input[type=submit]:hover {
                    background-color: var(--primary);
                    color: var(--bg);
                    transition:0.6s;
                }
                #return-login{
            
                    font-family:Poppins-R;
                    font-size: 0.8em;
                    margin-bottom: 2rem;
                    opacity: 0.6;
                }
                #return-login:hover{
                    color:var(--primary);
                    opacity:1;
                }


                /*remove outline on html form fields when active status*/
                textarea:focus, input:focus{
                    outline: none;
                }
            }
        </style>
    </head>
    <body>
        <header>
            <div class="nav-container">
                <div class="nav-logo"><a href="../index.php">REMINDMEISTER</a></div>
                <div class="nav-list" id="nav-list">
                    <a href="../index.php">Home</a>
                    <a href="aboutus.html">About Us</a>
                    <a href="contact.php">Contact Us</a>
                    <a href="log-in.php" class="nav-log-btn"><b>Log in</b></a>
                </div>
                <div class="m-nav-btn">
                    <img src="images/header/m-open.webp" alt="m open btn" class="op-btn" id="op-btn">
                    <img src="images/header/m-close.webp" alt="m close btn" class="co-btn" id="co-btn">
                </div>
            </div>
        </header>

        <main >
            <div class="form-container">
                <div class="form-title">Create Account</div>
                <div class="content">
                    <form action="" method="POST">
                    <?php if (!empty($errors)) : ?>
                        <ul class="errors">
                            <?php foreach ($errors as $error) : ?>
                            <li><?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                        <div class="full-name">
                            <div class="first-name">
                                <input type="text" placeholder="First name" name="firstname" required>                                
                            </div>
                            <div class="last-name">
                                <input type="text" placeholder="Last name" name="lastname" required>                                 
                            </div>
                        </div>
                        <div class="contact-detail">
                            <div class="phone">
                                <input type="tel" placeholder="Phone" name="phone" required>                                
                            </div>
                            <div class="email">
                                <input type="email" placeholder="E-mail" name="email" required>                                  
                            </div>
                        </div>
                        <div class="password-container">
                            <div class="password">
                                <input type="password" placeholder="Password" name="password" required>                                
                            </div>
                            <div class="confirm-password">
                                <input type="password" placeholder="Confirm Password"  name="con_password" required>                                  
                            </div>
                        </div>
                        <input type="submit" value="Create Account">
                    </form>
                 <a id="return-login" href="log-in.php">Have an account?</a>
                </div>
                <img src="images/login-signup/Saly-35.webp" alt="login-image" class="login-image">
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
                        <a href="log-in.php" class="nav-log-btn"><b>Log in</b></a>
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