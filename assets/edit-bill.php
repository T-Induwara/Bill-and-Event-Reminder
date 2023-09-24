<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: log-in.php"); // Redirect to login page
    exit(); // Stop further execution of the current script
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Dashboard - RemindMeister</title>
        <link rel="icon" type="image/x-icon" href="../assets/images/remindmeister-favicon-250px.png">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script type="text/js" src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/main-style.css">
        <style>
            :root{
                --primary: #001f3f;
                --accent: ;
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
                src:url('font/Poppins-Regular.ttf');
            }
            @font-face{
                font-family:Poppins-S;
                src:url('font/Poppins-SemiBold.ttf');
            }

           

            /*Default css for mobile*/
            .dashboard-header{
                padding:2em 3em 2em 3em;
            }
            .usr-col{
                margin-top:1rem;
                flex-direction:row;
                justify-content:center;
                align-items: center;
            }
            .usr-col-details{
                flex-direction: column;
                margin-left:0.5rem;
            }
            .usr-image{
                margin-top:-0.5rem;
                width:15%;
            }
            .title-col h1,.usr-name{
                font-family:Poppins-S;
            }
            .title-col h1{
                font-size:40px;
                text-align: center;
            }
            .usr-name{
                font-size: 25px;
            }
            .usr-mail{
                margin-top:-0.8rem;
                font-family: Poppins-R;
                font-size: 15px;
            }

            .main-content{
                padding:4rem 1rem 4rem 1rem;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }



            .form-cont{
                flex-direction: column;
                filter:drop-shadow(0px 8px 10px rgba(0, 0, 0, 0.19));
                background-color: var(--bg);
                border-radius:10px;
                padding:3rem 1.5rem 3rem 1.5rem;
            }

            form{
                margin-top:2rem;
            }
            form label,.frm-divs p{
                font-family:Poppins-R;
                margin-right:2rem;
            }
            .frm-divs{
                flex-direction:column;
                justify-content: space-between;
                align-items: center;
                margin-top:2rem;
            }
            .frm-divs input{
                margin-top:1rem;
            }
            input{
                width:300px;
                text-align: center;
            }
            input[type=text],input[type=date],input[type=time]{
                outline:none;
                border:none;
                border-bottom:1px solid var(--primary);
                background-color: var(--bg);
                border-radius:5px;
                padding:0.5rem 1.5rem 0.5rem 1.5rem;
            }
            input[type=text],input[type=date],input[type=time]:focus{
                outline:none;
            }
            .rad-btns{
                flex-direction: row;
                align-items: center;
                justify-content: center;
            }
            .rad-btns input{
                margin-right:0.5rem;
            }
            input[type=radio]{
                appearance: none;
                -moz-appearance: none;
                -webkit-appearance: none;
                outline: none;
                width:20px;
                height:20px;
                /* Define the custom radio button design */
                border-radius: 50%;
                border: 1px solid var(--primary);
            }
            input[type=radio]:checked{
                background-color: var(--cta);
            }
            .frm-sub-btn{
                display:block;
                margin-left:auto;
                margin-right:auto;
                margin-top:2rem;
                font-family: Poppins-S;
                color:var(--bg);
                background-color: var(--primary);
                padding:0.7rem 2rem 0.7rem 2rem;
                border-radius:7px;
                transition: 0.6s;
                border:none;
            }
            .frm-sub-btn:hover{
                background-color: var(--cta);
                transition: 0.6s;
            }
            .frm-outer-container{
                display:none;
            }

            .return{
                margin: 0;
                padding: 0;
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;

            }

            .return-but{
                margin: 4rem 1rem 1rem 1rem;
                padding: 0.5rem 3rem 0.5rem 3rem;
                text-align: center;
                font-family: Poppins-S;
                color:var(--bg);
                background-color: var(--primary);
                border-radius:7px;
                transition: 0.6s;
                border:none;
                
            }

            .return-but:hover{
                background-color: var(--cta);
                transition: 0.6s;
            }

           


            /*CSS for tablet*/
            @media only screen and (min-width:768px){
                .dashboard-header{
                    padding:2em 2em 2em 2em;
                }
                .usr-col{
                    margin-top:0.5rem;
                    justify-content:end;
                }
                .usr-col-details{
                    flex-direction: column;
                    margin-left:0.5rem;
                }
                .usr-image{
                    width:15%;
                }
                .title-col h1{
                    font-size:50px;
                    text-align: left;
                }
                .usr-name{
                    font-size: 28px;
                }
                .usr-mail{
                    margin-top:-1rem;
                    font-size: 15px;
                } 

                .form-cont{
                    margin-left: 3rem;
                    margin-right: 3rem;
                
                }
                
                .frm-container{
                    padding:2rem 3rem 2rem 3rem;
                }
                .frm-divs{
                    margin-top:2rem;
                }
                .frm-divs input{
                    margin-top:0rem;
                }

                .frm-divs{
                flex-direction:row;
            }

                
            }

            /*CSS for desktop*/
            @media only screen and (min-width:1280px){
                .dashboard-header{
                    padding:2em 3em 2em 3em;
                }
                .usr-col-details{
                    margin-left:1rem;
                }
                .usr-image{
                    width:8%;
                }
                .title-col h1{
                    font-size:50px;
                }
                .usr-name{
                    font-size: 28px;
                }
                .usr-mail{
                    margin-top:-1rem;
                    font-size: 15px;
                }

                .main-content{
                padding:2rem 10rem 2rem 10rem;
                }

                .form-cont{
                    margin-left: 9rem;
                    margin-right: 9rem;
                    padding-left: 4rem;
                    padding-right: 4rem;
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
                    <a href="#" class="nav-log-btn"><b>Log out</b></a>
                </div>
                <div class="m-nav-btn">
                    <img src="images/header/m-open.webp" alt="m open btn" class="op-btn" id="op-btn">
                    <img src="images/header/m-close.webp" alt="m close btn" class="co-btn" id="co-btn">
                </div>
            </div>
        </header>
        <main>
            <?php
            ?> 
            <div class="container-fluid dashboard-header">
                <div class="row">
                    <div class="col-md-6 pg-title">
                        <div class="title-col">
                            <h1>EDIT BILL</h1>
                        </div>
                    </div>
                    <div class="col-md-6 pg-usr-window">
                        <div class="usr-col d-flex">
                            <img src="images/usr-img/Ellipse 1.webp" alt="dashboard user image" class="usr-image">
                            <div class="usr-col-details d-flex">
                                <h2 class="usr-name" id="usr-name"><?php echo $_SESSION['First_name']; ?>   <?php echo $_SESSION['Last_name']; ?></h2>
                                <p class="usr-mail" id="usr-mail"><?php echo $_SESSION['email']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="main-content">
                <div class="form-cont">
                    <?php
                        if(isset($_GET["id"])){
                            $id = $_GET["id"];

                            $con = new mysqli("localhost", "timax", "Masseffect34c1#@", "RemindMeister");

                            // Check the connection
                            if ($con->connect_error) {
                                die("Connection failed: " . $con->connect_error);
                            } else {
                                echo "Connection established.<br />";
                            }
                            
                            $sql = "SELECT * FROM Created_Bill WHERE CB_ID = $id";
                            $result = mysqli_query($con,$sql);
                            if(!$result){
                                die(print_r(mysqli_error($con).true));
                            }
                            //read data of each row
                            while($row = mysqli_fetch_assoc($result)){
                                $CB_Title = $row['CB_Title'];
                                $CB_Description = $row['CB_Description'];
                                $CB_Reminder_time = date('H:i', strtotime($row['CB_Reminder_time']));
                                $CB_Reminder_date = date('Y-m-d', strtotime($row['CB_Reminder_date']));
                                $CB_Reminder_option = $row['CB_Reminder_option'];
                                $CB_Type = $row['CB_Type'];
                            }
                        } 
                        // Check if the form is submitted
                        if ($_SERVER["REQUEST_METHOD"] === "POST") {
                            //Get form data
                            $billTitle = $_POST["billTitle"];
                            $billDesc = $_POST["billDesc"];
                            $time = $_POST["time"];
                            $date = $_POST["date"];
                            
                            $sql = "UPDATE Created_Bill set CB_Title = '$billTitle', CB_Description = '$billDesc', CB_Reminder_time = '$time', CB_Reminder_date = '$date' WHERE CB_ID = $id";
                            $stmt = mysqli_query($con, $sql);
                            
                            if ($stmt === false) {
                                die(print_r(mysqli_error($con), true));
                            }
                            
                            echo '<script>';
                            echo 'alert ("Bill Edited Successfully");';
                            echo 'window.location.href="view-reminders.php"';
                            echo '</script>';
                            exit();
                        }  

                    ?>
                        <form action="" method="post">
                            <div class="frm-divs d-flex">
                                <label for="billTitle">Add bill title</label>
                                <input type="text" name="billTitle" placeholder="Bill tittle" value="<?php echo "$CB_Title" ?>" required>
                            </div>
                            <div class="frm-divs d-flex">
                                <label for="billDesc">Add bill description</label>
                                <input type="text" name="billDesc" placeholder="Bill description" value="<?php echo "$CB_Description" ?>" required>
                            </div>
                            <div class="frm-divs d-flex">
                                <label for="time">Set reminder time</label>
                                <input type="time" name="time" value="<?php echo "$CB_Reminder_time" ?>" required>
                            </div>
                            <div class="frm-divs d-flex">
                                <label for="date">Set reminder date</label>
                                <input type="date" name="date" value="<?php echo "$CB_Reminder_date" ?>" required>
                            </div>
                            <input type="submit" value="Edit Bill" class="frm-sub-btn">
                        </form>

                </div>
                <div class="return">
                <a href="view-reminders.php" >
                <input type="submit" value="Return" class="return-but">
                </a>
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
                        <a href="#" class="nav-log-btn"><b>Log out</b></a>
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
