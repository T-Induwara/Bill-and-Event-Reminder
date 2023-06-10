<?php
// Initialize the session
session_start();

// logged in users are redirected to the orders page
if(isset($_SESSION["authenticated"])){
    header("location: user-dashboard.php");
    exit;
}

$first_name = "";
$last_name = "";
$phone = "";
$email = "";

$error = "";
if (isset($_POST['first_name'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirmation = $_POST['password_confirmation'];

    //this do-while allows us to cancel the loop if any validation fails
    do {
        /************************* validate first_name *************************/
        if (empty($first_name)) {
            $error = "First name is required";
            break;
        }

        /************************** validate last_name *************************/
        if (empty($last_name)) {
            $error = "Last name is required";
            break;
        }

        /********* validate email: check that email is not already used ********/

        //check email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "Email format is not valid";
            break;
        }

        //server: localhost, mysql_user: root, password: 0000, database: shop
        $dbConnection = new mysqli("localhost", "root", "0000", "shop");

        //Let use prepared statements to avoid "sql injection attacks"
        $statement = $dbConnection->prepare("SELECT id FROM users WHERE email = ?");

        // Bind variables to the prepared statement as parameters
        $statement->bind_param('s', $email);

        // execute statement
        $statement->execute();

        // check if email is already in the database
        $statement->store_result();
        if ($statement->num_rows > 0) {
            $error = "Email is already used";
            break;
        }

        //close this statement otherwise we cannot prepare another statement
        $statement->close();


        /**************************** validate phone ***************************/
        if (strlen($phone) < 6) {
            $error = "Phone must have at least 6 characters";
            break;
        }

        /************************** validate password **************************/
        if (strlen($password) < 6) {
            $error = "Password must have at least 6 characters";
            break;
        }

        /******************** validate password_confirmation *******************/
        if ($password_confirmation != $password) {
            $error = "Password confirmation does not match";
            break;
        }

        /************** All fields are valide: create a new user ***************/
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $created_at = date('Y-m-d H:i:s');

        //Let use prepared statements to avoid "sql injection attacks"
        $statement = $dbConnection->prepare("INSERT INTO users (first_name, last_name, email, phone, password, created_at) VALUES (?, ?, ?, ?, ?, ?)");

        // Bind variables to the prepared statement as parameters
        $statement->bind_param('ssssss', $first_name, $last_name, $email, $phone, $hashed_password, $created_at);

        // execute statement
        $statement->execute();

        $insert_id = $statement->insert_id;
        $statement->close();

        /********** A new account is created **********/   
		
        // Save session data
        $_SESSION["authenticated"] = true;
        $_SESSION["id"] = $insert_id;
        $_SESSION["first_name"] = $first_name;
        $_SESSION["last_name"] = $last_name;
        $_SESSION["email"] = $email;
        $_SESSION["phone"] = $phone;
        $_SESSION["hashed_password"] = $hashed_password;
        $_SESSION["created_at"] = $created_at;
        
        // Redirect user to orders page
        header("location: user-dashboard.php");
        exit;
    } while(false);
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create Account - RemindMeister</title>
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
                    <form>
                        <div class="full-name">
                            <div class="first-name">
                                <input type="text" placeholder="First name">                                
                            </div>
                            <div class="last-name">
                                <input type="text" placeholder="Last name">                                 
                            </div>
                        </div>
                        <div class="contact-detail">
                            <div class="phone">
                                <input type="tel" placeholder="Phone">                                
                            </div>
                            <div class="email">
                                <input type="email" placeholder="E-mail">                                  
                            </div>
                        </div>
                        <div class="password-container">
                            <div class="password">
                                <input type="password" placeholder="Password">                                
                            </div>
                            <div class="confirm-password">
                                <input type="password" placeholder="Confirm Password">                                  
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