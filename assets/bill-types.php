<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bill Types - RemindMeister</title>
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
                padding:4em 2em 4em 2em;
            }

            /*CSS for tablet*/

            /*CSS for desktop*/

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
            ?>
            <div class="container-fluid dashboard-header">
                <div class="row">
                    <div class="col-lg-6 pg-title">
                        <div class="title-col">
                            <h1>BILL TYPES</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 pg-usr-window">
                        <div class="usr-col">
                            <img src="images/usr-img/Ellipse 1.webp" alt="dashboard user image">
                            <div class="usr-col-details">
                                <h2 class="usr-name" id="usr-name">Ravi Jay</h2>
                                <p class="usr-mail" id="usr-mail">ravi.jay@gmail.com</p>
                            </div>
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