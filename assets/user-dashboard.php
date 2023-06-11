<?php
session_start();

if (!isset($_SESSION['Email'])) {
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

            .category{
                margin: 0rem;
                padding: 4rem 3rem 4rem 3rem;
                width: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                
            }

            #but{
                margin:0 3rem 0 3rem;
                padding:0 2rem 3rem 2rem;
                display: flex;
                width: 70%;
                flex-direction:column ;
                justify-content: center;
            }

            

            .subbutton{
                margin: 0rem;
                padding: 1rem;
                display: flex;
                flex-direction: column;
                border-radius: 10px;
                filter: drop-shadow(0px 0px 10px rgb(230, 227, 227));
                background: var(--bg);
                transition: 0.6s;

            }

            .subbutton img{
                margin: 0rem;
                padding:1rem;
                width: 100%;
            }

            #dis{
                margin:0;
                margin-bottom: 0rem;
                padding-top:1rem;
                text-align: center;
                font-family:Poppins-S;
                
            }

            .subbutton:hover{
                background-color: var(--cta);
                transition: 0.6s;
            }
            
            .inq-btn{
                width:200px !important;
            }
            .cat-extra{
                padding: 0rem 3rem 2rem 3rem;
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


                .category{
                margin: 0rem;
                padding: 3rem 2rem 3rem 2rem;
                width: 100%;
                display: flex;
                flex-direction: row;
                align-items: center;
                
                }

                #but{
                margin:0 3rem 0 3rem;
                padding:0 1rem 0rem 1rem;
                display: flex;
                width: 70%;
                flex-direction:column ;
                justify-content: center;
            }
             
            .inq-btn{
                width:140px !important;
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

                .category{
                margin: 0rem;
                padding: 0rem 7rem 5rem 7rem;
                width: 100%;
                
                }

                #but{
                margin:0 3rem 0 3rem;
                padding:3rem 5rem 3rem 5rem;
                width: 100%;
                display: flex;
                flex-direction:column ;
                justify-content: center;
            }
            .subbutton{
                padding: 0;
            }

            .subbutton img{
                padding:1rem;
                width: 90px;
                display: block;
                margin-left: auto;
                margin-right: auto;
            }
            .inq-btn{
                width:260px !important;
            }

            @media only screen and (min-width:1600px){
                .subbutton img{
                    padding:2rem;
                    width: 150px;
                    display: block;
                    margin-left: auto;
                    margin-right: auto;
                }
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
                    <a href="logout.php" class="nav-log-btn"><b>Log out</b></a>
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
                            <h1>USER DASHBOARD</h1>
                        </div>
                    </div>
                    <div class="col-md-6 pg-usr-window">
                        <div class="usr-col d-flex">
                            <img src="images/usr-img/Ellipse 1.webp" alt="dashboard user image" class="usr-image">
                            <div class="usr-col-details d-flex">
                                <h2 class="usr-name" id="usr-name"><?php echo $_SESSION['First_name']; ?>   <?php echo $_SESSION['Last_name']; ?></h2>
                                <p class="usr-mail" id="usr-mail"><?php echo $_SESSION['Email']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="category">
              <a id="but" href="bill-types.php">  
                   <div class="subbutton" >
                   <img id="img1" alt="image" src="images/user-dashboard/add-bills.webp">
                   </div>
                   <p id="dis">Add Bills</p> 
              </a>    
              <a id="but" href="event-types.php">  
                   <div class="subbutton" >
                   <img id="img1" alt="image" src="images/user-dashboard/add-events.webp">
                   </div>
                   <p id="dis">Add Events</p> 
              </a>    
              <a id="but" href="view-reminders.php">  
                   <div class="subbutton" >
                   <img id="img1" alt="image" src="images/user-dashboard/view-reminders.webp">
                   </div>
                   <p id="dis">View Reminders</p> 
              </a>    
               
            </div>
            <div class="category cat-extra">
                <a id="but" href="view-inquires.php" class="inq-btn">  
                    <div class="subbutton cus-btn" >
                        <img id="img1" alt="image" src="images/user-dashboard/support-btn.webp">
                    </div>
                    <p id="dis">View Inquires</p> 
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
                        <a href="../index.php">Home</a>
                        <a href="aboutus.html">About Us</a>
                        <a href="contact.php">Contact Us</a>
                        <a href="logout.php" class="nav-log-btn"><b>Log out</b></a>
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
