<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - RemindMeister</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/js" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/main-style.css">

    <style>
        body {
            margin: 0 !important;
            padding: 0 !important;
            background-color: var(--bg);
        }

        .content {
            display: grid;
            grid-template-columns: 1fr;
            grid-auto-rows: 50vh;
            grid-template-areas: "a" "b" "c" "d";

        }

        .title {
            grid-area: a;
        }

        .hand {
            grid-area: b;
        }

        .inquiry-form {
            grid-area: c;
        }

        .man {
            grid-area: d;
        }

        .title {
            padding-left: 2rem;
            padding-right: 2rem;
            padding-top: 4rem;
            font-family: Poppins-S;
            font-size: 2em;
            text-align: center;
        }

        .hand-img {
            width: 60%;
            display: block;
            margin-left: auto;
            margin-top: 3rem;
            margin-right: auto;
        }

        .man-img {
            width: 40%;
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 3rem;
            margin-bottom: 4rem;
        }

        .inquiry-form {
            display: flex;
            align-items: center;
            justify-content: center;
            filter: drop-shadow(0px 0px 10px rgb(230, 227, 227));


        }

        form {
            background-color: var(--bg);
            margin: 1rem;
            padding: 1rem;
            padding-left: 2rem;
            padding-right: 2rem;
            border-radius: 15px;
        }

        #inquiry,
        #inq-summary {
            width: 20rem;
        }

        #email,
        #phone {
            width: 9.5rem;
        }

        .contact-detail {
            display: flex;
            gap: 1rem;
        }

        input[type=text],input[type=email],input[type=tel] {
            border: none;
            border-bottom: 1px solid var(--txt);
            border-radius: 5px;
            background-color: var(--bg);
            font-family: Poppins-R;
            padding: 0.1rem;
            margin-top: 3rem;

        }

        input::placeholder {
            text-align: center;
        }

        input[type=submit] {
            background-color: var(--cta);
            width: 20rem;
            padding: 1rem;
            margin-top: 2rem;
            margin-bottom: 2rem;
            border-radius: 5px;
            color: var(--bg);
            border: none;
            font-family: Poppins-S;
            cursor: pointer;
            transition: 0.6s;
        }

        input[type=submit]:hover {
            color: var(--primary);
            transition: 0.6s;
        }

        /*remove outline on html form fields when active status*/
        textarea:focus,
        input:focus {
            outline: none;
        }

        /*tablet*/
        @media only screen and (min-width:768px) {
            body {
                margin: 0 !important;
                padding: 0 !important;
                background-color: var(--bg);
            }

            .content {
                display: grid;
                grid-template-columns: 1fr 1fr;
                grid-auto-rows: 40vh;
                grid-template-areas: "a b" "c d";
            }

            .title {
                grid-area: a;
            }

            .hand {
                grid-area: b;
            }

            .inquiry-form {
                grid-area: d;
            }

            .man {
                grid-area: c;
            }

            .title {
                padding-left: 5rem;
                padding-right: 3rem;
                padding-top: 3rem;
                font-family: Poppins-S;
                font-size: 2em;
            }

            .hand-img {
                width: 50%;
                display: block;
                margin-left: auto;
                margin-top: 8rem;
                margin-right: auto;
            }

            .man-img {
                width: 40%;
                display: block;
                margin-left: auto;
                margin-right: auto;
                margin-top: 3rem;
            }

            .inquiry-form {
                display: flex;
                align-items: center;
                justify-content: center;
                filter: drop-shadow(0px 0px 10px rgb(230, 227, 227));


            }

            form {
                background-color: var(--bg);
                margin: 1rem;
                padding: 1rem;
                padding-left: 2rem;
                padding-right: 2rem;
                border-radius: 15px;
            }

            #inquiry,
            #inq-summary {
                width: 23rem;
            }

            #email,
            #phone {
                width: 11rem;
            }

            .contact-detail {
                display: flex;
                gap: 1rem;
            }

            input[type=text],input[type=email],input[type=tel] {
                border: none;
                border-bottom: 1px solid var(--txt);
                border-radius: 5px;
                background-color: var(--bg);
                font-family: Poppins-R;
                padding: 0.1rem;
                margin-top: 3rem;

            }

            input::placeholder {
                text-align: center;
            }

            input[type=submit] {
                background-color: var(--cta);
                width: 23rem;
                padding: 1rem;
                margin-top: 3rem;
                margin-bottom: 2rem;
                border-radius: 5px;
                color: var(--bg);
                border: none;
                font-family: Poppins-S;
                cursor: pointer;
                transition: 0.6s;
            }

            input[type=submit]:hover {
                color: var(--primary);
                transition: 0.6s;
            }

            /*remove outline on html form fields when active status*/
            textarea:focus,
            input:focus {
                outline: none;
            }
        }

        @media only screen and (min-width:1280px) {
            body {
                margin: 0 !important;
                padding: 0 !important;
                background-color: var(--bg);
            }

            .content {
                display: grid;
                grid-template-columns: 1fr 1fr;
                grid-auto-rows: 70vh;
                grid-template-areas: "a b" "c d";
            }
            .title {
                grid-area: a;
            }
            .hand {
                grid-area: b;
            }
            .inquiry-form {
                grid-area: d;
            }
            .man {
                grid-area: c;
            }
            .title {
                padding-left: 5rem;
                padding-right: 4rem;
                padding-top: 8rem;
                font-family: Poppins-S;
                font-size: 2.5em;
            }
            .hand-img {
                width: 60%;
                display: block;
                margin-left: auto;
                margin-top: 8rem;
                margin-right: auto;
            }
            .man-img {
                width: 26%;
                display: block;
                margin-left: auto;
                margin-right: auto;
                margin-top: 3rem;
            }

            .inquiry-form {
                display: flex;
                align-items: center;
                justify-content: center;
                filter: drop-shadow(0px 0px 10px rgb(230, 227, 227));


            }

            form {
                background-color: var(--bg);
                margin: 1rem;
                padding: 1rem;
                padding-left: 2rem;
                padding-right: 2rem;
                border-radius: 15px;
            }

            #inquiry,
            #inq-summary {
                width: 25rem;
            }

            #email,
            #phone {
                width: 12rem;
            }

            .contact-detail {
                display: flex;
                gap: 1rem;
            }

            input[type=text],input[type=email],input[type=tel] {
                border: none;
                border-bottom: 1px solid var(--txt);
                border-radius: 5px;
                background-color: var(--bg);
                font-family: Poppins-R;
                padding: 0.1rem;
                margin-top: 3rem;

            }

            input::placeholder {
                text-align: center;
            }

            input[type=submit] {
                background-color: var(--cta);
                width: 25rem;
                padding: 1rem;
                margin-top: 2rem;
                margin-bottom: 2rem;
                border-radius: 5px;
                color: var(--bg);
                border: none;
                font-family: Poppins-S;
                cursor: pointer;
                transition: 0.6s;
            }

            input[type=submit]:hover {
                background-color: var(--primary);
                color: var(--bg);
                transition: 0.6s;
            }

            /*remove outline on html form fields when active status*/
            textarea:focus,
            input:focus {
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
    <main>
        <?php
        ?>
        <div class="content">
            <div class="title">
                Connect with Us: Reach Out and Let's Make RemindMeister Even Better!
            </div>
            <div class="hand">
                <img src="images/contact-us/Saly-31.webp" alt="" class="hand-img">
            </div>
            <div class="man">
                <img src="images/contact-us/Saly-38.webp" alt="" class="man-img">
            </div>
            <div class="inquiry-form">
                <form method="GET" action="create-account.php">
                    <div class="inq-summary">
                        <input type="text" placeholder="Inquiry Summary" id="inq-summary">
                    </div>
                    <div class="inquiry">
                        <input type="text" placeholder="inquiry" id="inquiry">
                    </div>
                    <div class="contact-detail">
                        <div class="email">
                            <input type="email" placeholder="Email" id="email">
                        </div>
                        <div class="Phone">
                            <input type="tel" placeholder="Phone number" id="phone">
                        </div>
                    </div>
                    <input type="submit" value="Send">
                </form>
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