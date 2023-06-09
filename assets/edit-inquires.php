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
                height: 100vh;
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
            .background{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            form{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 2rem 1rem;
                margin-left: auto;
                margin-right: auto;
                background-color: white;
                filter:drop-shadow(0px 8px 10px rgba(0, 0, 0, 0.19));
                border-radius: 15px;
            }
            .background h1{
                 font-family:Poppins-R;
                 color: var(--primary);
                 font-size: 1.5rem;
                 margin-bottom: 1rem;
            }
            .title,.discription,.email,.phone{
                font-family:Poppins-R;
                font-size: 1rem;
                padding: 0.5rem 2.5rem;
                margin-bottom: 2rem;
                border-bottom:1px solid var(--primary);
                border-top: none;
                border-left: none;
                border-right: none;
                text-align: center;
            }
            .btn{
                padding: 0.5rem 1rem;
                background-color: var(--primary);
                color: var(--bg);
                font-family:Poppins-S;
                font-size: 1.2rem;
                margin-top: 2rem;
                border-radius: 0.5rem;
                cursor: pointer;
                border: none;
            }
            .btn1{
                margin-top: 2rem;
                padding: 0.5rem 1rem;
                background-color: var(--primary);
                color: var(--bg);
                font-family:Poppins-S;
                font-size: 1.2rem;
                margin-bottom: 2rem;
                border-radius: 0.5rem;
                cursor: pointer;
                border: none;
            }
            input[type=text]
            {   

	            outline:none;
            }
            @media only screen and (max-width:767px){
                input{
                    text-align: center;
                    width: 100%;
                }
                .background h1{
                    text-align: center;
                    width: 100%;
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


                .category{
                margin: 0rem;
                padding: 3rem 2rem 3rem 2rem;
                width: 100%;
                height: 40vh;
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
            form{
                justify-content: space-around;
                width: 80%;
                padding: 3rem 3rem;
            }
             .row1 , .row2, .row3, .row4{
                padding-left: 3rem;
                padding-right: 3rem;
                width: 100%;
                display: flex;
                justify-content:space-between;
                align-items: center;
             }
             .background h1{
                font-size: 1rem;
             }  
             .title,.discription,.email,.phone{
                height: 2rem;
                font-size: 0.8rem;
               
             } 
             .btn{
                font-size: 1.5rem;
                border: none;
             }
             .btn1{
                font-size: 1.5rem;
                border: none;
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
                padding: 5rem 7rem 8rem 7rem;
                width: 100%;
                height: 60vh;
                
                }

                #but{
                margin:0 3rem 0 3rem;
                padding:3rem 5rem 3rem 5rem;
                width: 100%;
                display: flex;
                flex-direction:column ;
                justify-content: center;
            }

            .subbutton img{
                margin: 0rem;
                padding:1rem;
                width: 100%;
                display: flex;
                flex-direction: row;
                align-items: center;
            }
            form{
                width: 70%;
                padding: 2rem 3rem;
            }
            .row1 , .row2, .row3, .row4{
                padding: 1rem 3rem;
                display: flex;
                flex-direction: row;
                justify-content:space-between;
                align-items: center;
                height: 5rem;
            }
            .background h1{
                font-size: 1.3rem;
             } 
             .title, .discription, .email, .phone{
                padding:1.5rem 4rem ;
                font-size: 1.2rem;
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
                            <h1>EDIT INQUIRY</h1>
                        </div>
                    </div>
                    <div class="col-md-6 pg-usr-window">
                        <div class="usr-col d-flex">
                            <img src="images/usr-img/Ellipse 1.webp" alt="dashboard user image" class="usr-image">
                            <div class="usr-col-details d-flex">
                                <h2 class="usr-name" id="usr-name">Ravi Jay</h2>
                                <p class="usr-mail" id="usr-mail">ravi.jay@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          <div class="background">
            <form action="edit-inquires.php" method="post">
                <div class="row1">
                    <h1>Edit Inquiry</h1>
                    <input type="text" class="title" placeholder="Eg:SLT Landline"> 
                </div>
                <div class="row2">
                    <h1>Edit Inquiry Description</h1>
                    <input type="text" class="discription" placeholder="Eg:SLT Landline"> 
                </div>
                <div class="row3">
                    <h1>Edit Inquiry Email</h1>
                    <input type="text" class="email" placeholder="Eg:SLT Landline"> 
                </div>
                <div class="row4">
                    <h1>Edit Inquiry Phone</h1>
                    <input type="text" class="phone" placeholder="Eg:SLT Landline"> 
                </div>
                <button class="btn">Edit Inquiry</button>
            </form>
                <button class="btn1">Return</button>
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
