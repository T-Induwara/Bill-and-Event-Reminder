<?php
    session_start();

    if (!isset($_SESSION['email'])) {
        header("Location: log-in.php"); // Redirect to login page
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bill Types - RemindMeister</title>
        <link rel="icon" type="image/x-icon" href="../assets/images/remindmeister-favicon-250px.png">
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
            /*css for event section on mobile*/
            .evn-types-section{
                padding:2rem 0rem 8rem 0rem;
            }
            .ev-row{
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            .row-sub{
                flex-direction: row;
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
                width:80px;
                height:80px;
                background-color: var(--bg);
                filter:drop-shadow(0px 8px 10px rgba(0, 0, 0, 0.19));
                border-radius:10px;
                margin-left:3rem;
                margin-right:3rem;
            }
            .ev-name{
                font-family: Poppins-S;
                text-align: center;
                margin-top:1rem;
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
            .frm-outer-container{
                display:none;
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
                /*css for event section on tablet*/
                .evn-types-section{
                    padding:0rem;
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
                    width:80px;
                    height:80px;
                    border-radius:10px;
                    margin-left:3rem;
                    margin-right:3rem;
                }
                .ev-name{
                    text-align: center;
                    margin-top:1rem;
                }
                .events div:hover{
                    cursor: pointer;
                }
                /*css for form section on tablet*/
                .event-frm-section{
                    padding:4rem 3rem 6rem 3rem;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                }
                .frm-container{
                    flex-direction: column;
                    filter:drop-shadow(0px 8px 10px rgba(0, 0, 0, 0.19));
                    background-color: var(--bg);
                    border-radius:10px;
                    padding:3rem 6rem 3rem 6rem;
                }
                .frm-divs{
                    flex-direction:row;
                    justify-content: space-between;
                    align-items: center;
                    margin-top:2rem;
                }
                .frm-divs input{
                    margin-top:0rem;
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
                /*css for event section on desktop*/
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
                    border-radius:10px;
                    margin-left:4rem;
                    margin-right:4rem;
                }
                .ev-name{
                    text-align: center;
                    margin-top:1rem;
                }
                /*css for form section on desktop*/
                
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
            
            <div class="container-fluid dashboard-header">
                <div class="row">
                    <div class="col-md-6 pg-title">
                        <div class="title-col">
                            <h1 id="ev-pg-title">BILL TYPES</h1>
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
            <div class="evn-types-section" id="evn-types-section">
                <div class="ev-row d-flex">
                    <div class="row-sub d-flex">
                        <div class="events" id="wedding-col">
                            <div class="ev-wedding ev" id="bl-phone">
                                <img src="images/user-dashboard/bill-types/phone.webp" alt="wedding icon">
                            </div>
                            <p class="ev-name" id="ev-name">Phone</p>
                        </div>
                        <div class="events" id="bday-col">
                            <div class="ev-bday ev" id="bl-int">
                                <img src="images/user-dashboard/bill-types/internet.webp" alt="bday icon">
                            </div>
                            <p class="ev-name" id="ev-name">Internet</p>
                        </div>
                    </div>
                    <div class="row-sub d-flex">
                        <div class="events" id="anniv-col">
                            <div class="ev-anni ev" id="bl-insu">
                                <img src="images/user-dashboard/bill-types/insurance.webp" alt="anniversary icon">
                            </div>
                            <p class="ev-name" id="ev-name">Insurance</p>
                        </div>
                        <div class="events" id="get-to-col">
                            <div class="ev-gt ev" id="bl-finan">
                                <img src="images/user-dashboard/bill-types/finance.webp" alt="get together icon">
                            </div>
                            <p class="ev-name" id="ev-name">Finance</p>
                        </div>
                    </div>
                </div>
                <div class="ev-row d-flex ev-row1">
                    <div class="row-sub d-flex">
                        <div class="events" id="party-col">
                            <div class="ev-party ev" id="bl-cdpay">
                                <img src="images/user-dashboard/bill-types/cards.webp" alt="party icon">
                            </div>
                            <p class="ev-name" id="ev-name">Card payments</p>
                        </div>
                        <div class="events" id="shop-col">
                            <div class="ev-shop ev" id="bl-water">
                                <img src="images/user-dashboard/bill-types/water.webp" alt="shopping icon">
                            </div>
                            <p class="ev-name" id="ev-name">Water</p>
                        </div>
                    </div>
                    <div class="row-sub d-flex">
                        <div class="events" id="conf-col">
                            <div class="ev-conf ev" id="bl-elec">
                                <img src="images/user-dashboard/bill-types/electricity.webp" alt="conference icon">
                            </div>
                            <p class="ev-name" id="ev-name">Electricity</p>
                        </div>
                        <div class="events" id="other-col">
                            <div class="ev-oth ev" id="bl-oth">
                                <img src="images/user-dashboard/bill-types/other-bills.webp" alt="other events icon">
                            </div>
                            <p class="ev-name" id="ev-name">Other</p>
                        </div>
                    </div>
                </div>
                <div class="pg-return-btn d-flex">
                    <a href="user-dashboard.php">
                        <div class="ret-btn">Dashboard</div>
                    </a>
                </div>
            </div>
            <div class="frm-outer-container" id="frm-outer-container">
                <div class="event-frm-section d-flex" id="evn-frm-section">
                    <div class="frm-container d-flex">
                        <div class="frm-title" id="frm-title">
                            <h1 class="title-main" id="title-main"></h1>
                        </div>
                        <?php
                            $serverName = "TIMAXX-NITRO";
                            $connectionOptions = array(
                                "Database" => "RemindMeisterV2"
                            );

                            // Create a connection to the SQL Server
                            $conn = sqlsrv_connect($serverName, $connectionOptions);


                            $uID = $_SESSION["U_ID"];
                            // Check if the form is submitted
                            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                                // Retrieve form data
                                $billTitle = $_POST["billTitle"];
                                $billDesc = $_POST["billDesc"];
                                $time = $_POST["time"];
                                $date = $_POST["date"];
                                $remMethod = $_POST["billRemMethod"];
                                $billType = $_POST["billType"];
                                
                                // Perform validation
                                $errors = array();
                                if (empty($billTitle)) {
                                    $errors[] = "Bill title is required";
                                }
                                if (empty($billDesc)) {
                                    $errors[] = "Bill description is required";
                                }
                                if (empty($time)) {
                                    $errors[] = "Time is required";
                                }
                                if (empty($date)) {
                                    $errors[] = "Date is required";
                                }
                                if (empty($remMethod)) {
                                    $errors[] = "Reminder method is required";
                                }
                                
                                // If there are no validation errors, insert the data into the table
                                if (empty($errors)) {
                                    $sql = "INSERT INTO Created_Bill (CB_Title, CB_Description, CB_Reminder_time, CB_Reminder_date, CB_Reminder_option, CB_Type, U_ID) VALUES (?, ?, ?, ?, ?, ?,?)";
                                    $params = array($billTitle, $billDesc, $time, $date, $remMethod, $billType, $uID );
                                    $stmt = sqlsrv_query($conn, $sql, $params);
                                    
                                    if ($stmt === false) {
                                        die(print_r(sqlsrv_errors(), true));
                                    }
                                    
                                    // Data inserted successfully, redirect to a success page or perform any other necessary actions
                                    //echo "Bill reminder added successfully. <br> Please Log in now.";
                                    echo '<script>';
                                    echo 'window.location.href="success-b.php";';
                                    echo '</script>';
                                    exit();
                                }
                            }
                        ?>
                        <form action="" method="post">
                        <?php if (!empty($errors)) : ?>
                            <ul class="errors">
                                <?php foreach ($errors as $error) : ?>
                                <li><?php echo $error; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                            <input type="hidden" name="billType" value="" id="title-main-value">
                            <div class="frm-divs d-flex">
                                <label for="billTitle">Add bill title</label>
                                <input type="text" name="billTitle" placeholder="My bill..." required>
                            </div>
                            <div class="frm-divs d-flex">
                                <label for="billDesc">Add bill description</label>
                                <input type="text" name="billDesc" placeholder="My bill is about..." required>
                            </div>
                            <div class="frm-divs d-flex">
                                <label for="time">Set reminder time</label>
                                <input type="time" name="time" required>
                            </div>
                            <div class="frm-divs d-flex">
                                <label for="date">Set reminder date</label>
                                <input type="date" name="date" required>
                            </div>
                            <div class="frm-divs d-flex">
                                <p>Select reminder method</p>
                                <div class="rad-btns d-flex">
                                    <input type="radio" name="billRemMethod" value="SMS" required>
                                    <label for="sms">SMS</label>
                                    <input type="radio" name="billRemMethod" value="Email" required>
                                    <label for="email">E-mail</label>
                                </div>
                            </div>
                            <input type="submit" value="Add reminder" class="frm-sub-btn" id="btn-frm-submit">
                            
                        </form>
                    </div>
                </div>
                <div class="pg-return-btn d-flex">
                    <div class="ret-btn" id="ret-btn-frm">Return</div>
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
        <script>
            console.log("Internal js loaded");

            var phnCol = document.getElementById("bl-phone");
            var intCol = document.getElementById("bl-int");
            var insuCol = document.getElementById("bl-insu");
            var financeCol = document.getElementById("bl-finan");
            var cdpayCol = document.getElementById("bl-cdpay");
            var waterCol = document.getElementById("bl-water");
            var elecCol = document.getElementById("bl-elec");
            var othCol = document.getElementById("bl-oth");

            var pgName = document.getElementById("ev-pg-title");

            var eventSection = document.getElementById("evn-types-section");
            var frmSection = document.getElementById("evn-frm-section");

            var btns = document.querySelectorAll('.ev');
            var evNames = document.querySelectorAll('.ev-name');
            var frmName = document.getElementById("title-main");
            var frmOutContainer = document.getElementById("frm-outer-container");

            btns.forEach((c) => {
                c.addEventListener('mouseover', function () {
                    c.style.background = "var(--cta)";
                    c.style.transition = "0.6s"
                });
                c.addEventListener('mouseleave', function () {
                    c.style.background = "var(--bg)";
                    c.style.transition = "0.6s"
                });
                c.addEventListener('click', function () {
                    pgName.innerHTML = "Add Bills";
                    eventSection.style.display = "none";
                    frmOutContainer.style.display = "block";
                });
            });
            phnCol.addEventListener("click",function(){
                frmName.innerHTML = "Phone";
            });
            intCol.addEventListener("click",function(){
                frmName.innerHTML = "Internet";
            });
            insuCol.addEventListener("click",function(){
                frmName.innerHTML = "Insurance";
            });
            financeCol.addEventListener("click",function(){
                frmName.innerHTML = "Finance";
            });
            cdpayCol.addEventListener("click",function(){
                frmName.innerHTML = "Card Payments";
            });
            waterCol.addEventListener("click",function(){
                frmName.innerHTML = "Water";
            });
            elecCol.addEventListener("click",function(){
                frmName.innerHTML = "Electricity";
            });
            othCol.addEventListener("click",function(){
                frmName.innerHTML = "Other";
            });

            var retBtn = document.getElementById("ret-btn-frm");
            retBtn.addEventListener("click",function(){
                eventSection.style.display = "block";
                frmOutContainer.style.display = "none";
            })
            
            var bFrmBtn = document.getElementById("btn-frm-submit");
            bFrmBtn.onclick = function(){
                // Get the value of the element with id="title-main"
                var eventTypeValue = document.getElementById("title-main").innerHTML;
                
                // Set the value of the hidden input field
                document.getElementById("title-main-value").value = eventTypeValue;
            }

            
            
        </script>
    </body>
</html>
