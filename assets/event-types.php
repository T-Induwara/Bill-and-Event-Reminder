<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Event Types - RemindMeister</title>
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
            }
            @font-face{
                font-family:Poppins-R;
                src:url('../font/Poppins-Regular.ttf');
            }
            @font-face{
                font-family:Poppins-S;
                src:url('../font/Poppins-SemiBold.ttf');
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
            /*css for event section on mobile*/
            .evn-types-section{
            }
            .ev-row{
                flex-direction: row;
                justify-content: center;
                margin-top:5rem;
                margin-bottom:5rem;
            }
            .events div img{
                margin: auto;  
                position: absolute;
                left:0;
                right: 0;
                top: 0;
                bottom: 0;
                width: 40%;
            }
            .events div{
                width:100px;
                height:100px;
                background-color: var(--bg);
                filter:drop-shadow(0px 8px 10px rgba(0, 0, 0, 0.19));
                border-radius:10px;
                margin-left:4rem;
                margin-right:4rem;
            }
            .ev-name{
                font-family: Poppins-S;
                text-align: center;
                margin-top:1rem;
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
                /*css for event section on tablet*/
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
                /*css for event section on desktop*/
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
                    <a href="contact.html">Contact Us</a>
                    <a href="#" class="nav-log-btn"><b>Log in</b></a>
                </div>
                <div class="m-nav-btn">
                    <img src="images/header/m-open.webp" alt="m open btn" class="op-btn" id="op-btn">
                    <img src="images/header/m-close.webp" alt="m close btn" class="co-btn" id="co-btn">
                </div>
            </div>
        </header>
        <main>
            <?php
                print("Hello World")
            ?>
            <div class="container-fluid dashboard-header">
                <div class="row">
                    <div class="col-md-6 pg-title">
                        <div class="title-col">
                            <h1>EVENT TYPES</h1>
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
            <div class="evn-types-section">
                <div class="ev-row d-flex">
                    <div class="events">
                        <div class="ev-wedding" id="ev-wedding">
                            <img src="images/user-dashboard/event-types/weddings.webp" alt="wedding icon">
                        </div>
                        <p class="ev-name" id="ev-name">Weddings</p>
                    </div>
                    <div class="events">
                        <div class="ev-bday" id="ev-bday">
                            <img src="images/user-dashboard/event-types/birthdays.webp" alt="bday icon">
                        </div>
                        <p class="ev-name" id="ev-name">Weddings</p>
                    </div>
                    <div class="events">
                        <div class="ev-anni" id="ev-anni">
                            <img src="images/user-dashboard/event-types/anniversaries.webp" alt="anniversary icon">
                        </div>
                        <p class="ev-name" id="ev-name">Weddings</p>
                    </div>
                    <div class="events">
                        <div class="ev-gt" id="ev-gt">
                            <img src="images/user-dashboard/event-types/get-together.webp" alt="get together icon">
                        </div>
                        <p class="ev-name" id="ev-name">Weddings</p>
                    </div>
                </div>
                <div class="ev-row d-flex">
                    <div class="events">
                        <div class="ev-party" id="ev-party">
                            <img src="images/user-dashboard/event-types/office-parties.webp" alt="party icon">
                        </div>
                        <p class="ev-name" id="ev-name">Weddings</p>
                    </div>
                    <div class="events">
                        <div class="ev-shop" id="ev-shop">
                            <img src="images/user-dashboard/event-types/shopping.webp" alt="shopping icon">
                        </div>
                        <p class="ev-name" id="ev-name">Weddings</p>
                    </div>
                    <div class="events">
                        <div class="ev-conf" id="ev-conf">
                            <img src="images/user-dashboard/event-types/conference.webp" alt="conference icon">
                        </div>
                        <p class="ev-name" id="ev-name">Weddings</p>
                    </div>
                    <div class="events">
                        <div class="ev-oth" id="ev-oth">
                            <img src="images/user-dashboard/event-types/other-events.webp" alt="other events icon">
                        </div>
                        <p class="ev-name" id="ev-name">Weddings</p>
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
                        <a href="../index.html">Home</a>
                        <a href="aboutus.html">About Us</a>
                        <a href="contact.html">Contact Us</a>
                        <a href="#" class="nav-log-btn"><b>Log in</b></a>
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
