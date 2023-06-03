<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Submission successfull - RemindMeister</title>
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
            /*css for form section on mobile*/
            .event-frm-section{
                padding:4rem 1rem 6rem 1rem;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            .frm-container{
                flex-direction: column;
                filter:drop-shadow(0px 8px 10px rgba(0, 0, 0, 0.19));
                background-color: var(--bg);
                border-radius:10px;
                padding:3rem 1.5rem 3rem 1.5rem;
            }
            .frm-title{
                border:1px solid rgba(0, 0, 0, 0.19);
                border-radius:7px;
                padding:1rem 1rem 1rem 1rem;
            }
            .title-main{
                text-align: center;
                font-family: Poppins-S;
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
            /*CSS for center window on mobile*/
            .center-title{
                margin-top:3rem;
            }
            .center-title p{
                font-family: Poppins-R;
                text-align: center;
            }
            .btm-btns{
                flex-direction: column;
                justify-content: center;
                align-items: center;
                margin-top:2rem;
            }
            .btm-btns a div{
                font-family: Poppins-S;
            }
            .dboard-btn{
                background-color: var(--bg);
                color:var(--primary);
                border:1px solid var(--primary);
                padding:0.7rem 2rem 0.7rem 2rem;
                border-radius:7px;
                transition: 0.6s;
            }
            .another-r-btn{
                background-color: var(--primary);
                color:var(--bg);
                border:1px solid var(--bg);
                padding:0.7rem 2rem 0.7rem 2rem;
                border-radius:7px;
                transition: 0.6s;
                margin-top:1rem;
            }
            .dboard-btn:hover{
                background-color: var(--primary);
                color:var(--bg);
                border:1px solid var(--bg);
                transition: 0.6s;
            }
            .another-r-btn:hover{
                background-color: var(--cta);
                color:var(--bg);
                border:1px solid var(--cta);
                transition: 0.6s;
            }

            @media only screen and (max-width:767px){
                .row-sub{
                    margin-top:2rem;
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
                /*CSS for center window on tablet*/
                .center-title{
                    margin-top:3rem;
                }
                .center-title p{
                    font-family: Poppins-R;
                    text-align: center;
                }
                .btm-btns{
                    flex-direction: row;
                    justify-content: center;
                    margin-top:3rem;
                }
                .btm-btns a div{
                    font-family: Poppins-S;
                }
                .dboard-btn{
                    background-color: var(--bg);
                    color:var(--primary);
                    border:1px solid var(--primary);
                    padding:0.7rem 2rem 0.7rem 2rem;
                    border-radius:7px;
                    margin-right:1rem;
                    transition: 0.6s;
                }
                .another-r-btn{
                    background-color: var(--primary);
                    color:var(--bg);
                    border:1px solid var(--bg);
                    padding:0.7rem 2rem 0.7rem 2rem;
                    border-radius:7px;
                    margin-left:1rem;
                    transition: 0.6s;
                    margin-top:0rem;
                }
                .dboard-btn:hover{
                    background-color: var(--primary);
                    color:var(--bg);
                    border:1px solid var(--bg);
                    transition: 0.6s;
                }
                .another-r-btn:hover{
                    background-color: var(--cta);
                    color:var(--bg);
                    border:1px solid var(--cta);
                    transition: 0.6s;
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
                /*CSS for center window on desktop*/
                
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
                            <h1 id="ev-pg-title">Add Event</h1>
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
            <div class="frm-outer-container" id="frm-outer-container">
                <div class="event-frm-section d-flex" id="evn-frm-section">
                    <div class="frm-container d-flex">
                        <div class="frm-title" id="frm-title">
                            <h1 class="title-main" id="title-main">Congratulations!</h1>
                        </div>
                        <div class="center-title">
                            <p>Your event reminder added successfully!</p>
                        </div>
                        <div class="btm-btns d-flex">
                            <a href="user-dashboard.php">
                                <div class="dboard-btn">Dashboard</div>
                            </a>
                            <a href="event-types.php">
                                <div class="another-r-btn">Add another reminder</div>
                            </a>
                        </div>
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
        <script>
            console.log("Internal js loaded");
        </script>
    </body>
</html>
