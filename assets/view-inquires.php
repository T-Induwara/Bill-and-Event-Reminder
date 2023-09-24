<?php
    session_start();

    if (!isset($_SESSION['email'])) {
        header("Location: log-in.php"); // Redirect to login page
        exit(); // Stop further execution of the current script
    }

    //Get logged in user's id
    $uID = $_SESSION["U_ID"];

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
            .table{
                width: 95%;
                padding: 4rem 0rem;
                filter:drop-shadow(0px 8px 10px rgba(0, 0, 0, 0.19));
                background-color: var(--bg);
                margin-left: auto;
                margin-right: auto;
                margin-bottom: 4rem;
                margin-top: 2rem;
                background-color: white;
                border-radius: 10px;
            }
            /*CSS for dashboard and return btns*/
            .pg-return-btn{
                flex-direction: row;
                justify-content: center;
                padding-bottom:8rem;
            }
            .ret-btn{
                background-color:var(--primary);
                color:var(--bg);
                font-family: Poppins-S;
                font-size:15px;
                padding:1rem 2rem 1rem 2rem;
                border-radius:7px;
                transition: 0.6s;
            }
            .ret-btn:hover{
                background-color:var(--cta);
                color:var(--bg);
                cursor:pointer;
                transition: 0.6s;
            }
            .table{
                padding:3rem 2rem 3rem 2rem;
            }
            .table table{
                width:100%;
            }
            @media only screen and (max-width:767px){
                .row-sub{
                    margin-top:2rem;
                }
                .pg-return-btn{
                    padding-top:4rem;
                    padding-bottom:0rem !important;
                }
                
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
                .table{
                width: 90%;
                filter:drop-shadow(0px 8px 10px rgba(0, 0, 0, 0.19));
                margin-left: auto;
                margin-right: auto;
                margin-bottom: 5rem;
                margin-top: 3rem;
               
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
                .table{
                width: 95%;
                filter:drop-shadow(0px 8px 10px rgba(0, 0, 0, 0.19));

            }


            }
        </style>
    </head>
    <body>
        <header>
            <div class="nav-container">
                <div class="nav-logo"><a href="../index.html">REMINDMEISTER</a></div>
                <div class="nav-list" id="nav-list">
                    <a href="../index.html">Home</a>
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
                            <h1>VIEW INQUIRY</h1>
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
            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <th>Inquiry Title</th>
                            <th>Inquiry Desciption</th>
                            <th>Email</th>
                            <th>Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $con = new mysqli("localhost", "timax", "Masseffect34c1#@", "RemindMeister");

                        // Check the connection
                        if ($con->connect_error) {
                            die("Connection failed: " . $con->connect_error);
                        } else {
                            //echo "Connection established.<br />";
                        }

                        //declaring sql command
                        $sql = "SELECT * FROM Inquiry WHERE RU_ID = $uID";
                        $result = mysqli_query($con,$sql);
                        
                        //read data of each row
                        while($row = mysqli_fetch_assoc($result)){
                            echo '
                                <tr>
                                    <td>'.$row['Inquiry_Title'].'</td>
                                    <td>'.$row['Inquiry_Description'].'</td>
                                    <td>'.$row['Email'].'</td>
                                    <td>'.$row['Phone'].'</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="edit-inquires.php?id='.$row["INQ_ID"].'">Edit</a>
                                        <a class="btn btn-danger btn-sm" href="delete-inquires.php?id='.$row["INQ_ID"].'">Delete</a>
                                    </td>
                                </tr>
                            ';
                        }

                        ?>
                        
                    </tbody>
                </table>
            </div>
            <div class="pg-return-btn d-flex">
                <a href="user-dashboard.php">
                    <div class="ret-btn" id="ret-btn-frm">Return</div>
                </a>
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
                        <a href="../index.html">Home</a>
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
