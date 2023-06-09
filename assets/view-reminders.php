<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>View Reminders - RemindMeister</title>
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
            /*CSS for view reminder section on mobile*/
            .v-rem-section{
                padding:2rem 1rem 2rem 1rem;
            }
            .btn-section{
                flex-direction: row;
                justify-content: space-around;
                align-items: center;
            }
            .v-bill-btn-col,.v-evn-btn-col{
                flex-direction: column;
                align-items: center;
                margin-top:2rem;
            }
            .v-bill-btn,.v-evn-btn{
                background-color: var(--bg);
                filter: drop-shadow(0px 0px 10px hsl(0 0% 47% / 0.3));
                border-radius:10px;
                flex-direction: column;
                align-items: center;
                padding:1rem;
                transition: 0.6s;
            }
            .v-bill-btn:hover,.v-evn-btn:hover{
                background-color: var(--cta);
                cursor: pointer;
                transition: 0.6s;
            }
            .v-bill-btn img,.v-evn-btn img{
                width:30px;
            }
            .v-bill-btn-col p,.v-evn-btn-col p{
                font-family: Poppins-S;
                margin-top:0.6rem;
            }
            .bill-window,.evn-window{
                background-color: var(--bg);
                filter: drop-shadow(0px 0px 10px hsl(0 0% 47% / 0.3));
                padding:2rem;
                border-radius: 10px;
                display:none;
            }
            .rel-btn{
                background-color: var(--primary);
                color:var(--bg);
                font-family: Poppins-S;
                text-align: center;
                width:100px;
                border:1px solid var(--primary);
                border-radius: 7px;
                padding:0.5rem 0rem 0.5rem 0rem;
                transition: 0.6s;
            }
            .rel-btn:hover{
                background-color: var(--bg);
                color:var(--primary);
                border:1px solid var(--primary);
                padding:0.5rem 0rem 0.5rem 0rem;
                filter: drop-shadow(0px 0px 10px hsl(0 0% 47% / 0.3));
                transition: 0.6s;
                cursor: pointer;
            }
            /*CSS for dashboard and return btns*/
            .pg-return-btn{
                flex-direction: row;
                justify-content: center;
                padding-top:4rem;
                padding-bottom:4rem;
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
                .pg-return-btn{
                    padding-top:4rem;
                    padding-bottom:4rem !important;
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
                /*CSS for view reminder section on tablet*/
                .v-rem-section{
                    padding:2rem 4rem 2rem 4rem;
                }
                .btn-section{
                    flex-direction: row;
                    justify-content: space-around;
                    align-items: center;
                }
                .v-bill-btn-col,.v-evn-btn-col{
                    flex-direction: column;
                    align-items: center;
                    margin-top:2rem;
                }
                .v-bill-btn,.v-evn-btn{
                    background-color: var(--bg);
                    filter: drop-shadow(0px 0px 10px hsl(0 0% 47% / 0.3));
                    border-radius:10px;
                    flex-direction: column;
                    align-items: center;
                    padding:1.5rem;
                    transition: 0.6s;
                }
                .v-bill-btn img,.v-evn-btn img{
                    width:60px;
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
                /*CSS for view reminder section on desktop*/
                .v-rem-section{
                    padding:2rem 4rem 2rem 4rem;
                }
                .btn-section{
                    flex-direction: column;
                    align-items: center;
                }
                .v-bill-btn-col,.v-evn-btn-col{
                    flex-direction: column;
                    align-items: center;
                    margin-top:2rem;
                }
                .v-bill-btn,.v-evn-btn{
                    flex-direction: column;
                    align-items: center;
                }
                .v-bill-btn img,.v-evn-btn img{
                    width:60px;
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
            <div class="container-fluid dashboard-header">
                <div class="row">
                    <div class="col-md-6 pg-title">
                        <div class="title-col">
                            <h1>VIEW REMINDERS</h1>
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
            <div class="container-fluid v-rem-section">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="btn-section d-flex">
                            <div class="rel-btn" onClick="window.location.reload();">Refresh</div>
                            <div class="v-bill-btn-col d-flex">
                                <div class="v-bill-btn d-flex" id="v-bill-btn">
                                    <img src="images/user-dashboard/add-bills.webp" alt="View bills icon">
                                </div>
                                <p>View Bills</p>
                            </div>
                            <div class="v-evn-btn-col d-flex">
                                <div class="v-evn-btn d-flex" id="v-evn-btn">
                                    <img src="images/user-dashboard/add-events.webp" alt="View events icon">
                                </div>
                                <p>View Bills</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="bill-window" id="bill-window">
                            <p>Bill window</p>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Desciption</th>
                                        <th>Time</th>
                                        <th>Date</th>
                                        <th>Reminder method</th>
                                        <th>Type</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $serverName = "TIMAXX-NITRO";

                                    $connectionInfo = array( "Database"=>"RemindMeisterV2");
                                    $conn = sqlsrv_connect( $serverName, $connectionInfo);

                                    //check connection
                                    if( $conn ) {
                                        echo "Connection established.<br />";
                                    }else{
                                        echo "Connection could not be established.<br />";
                                        die( print_r( sqlsrv_errors(), true));
                                    }

                                    //declaring sql command
                                    $sql = "SELECT * FROM Created_Bill";
                                    $result = sqlsrv_query($conn,$sql);
                                    if(!$result){
                                        die(print_r(sqlsrv_errors().true));
                                    }
                                    //read data of each row
                                    while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)){
                                        echo "
                                            <tr>
                                                <td>{$row['CB_Title']}</td>
                                                <td>{$row['CB_Description']}</td>
                                                <td>{$row['CB_Reminder_time']->format('H:i')}</td>
                                                <td>{$row['CB_Reminder_date']->format('Y-m-d')}</td>
                                                <td>{$row['CB_Reminder_option']}</td>
                                                <td>{$row['CB_Type']}</td>
                                                <td>
                                                    <a class='btn btn-primary btn-sm' href='edit-bill.php?id={$row['CB_ID']}'>Edit</a>
                                                    <a class='btn btn-danger btn-sm' href='delete-bill.php?id={$row['CB_ID']}'>Delete</a>
                                                </td>
                                            </tr>
                                        ";
                                    }

                                    ?>
                                    
                                </tbody>
                            </table>
                        </div>
                        <div class="evn-window" id="evn-window">
                            <p>Event window</p>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Desciption</th>
                                        <th>Time</th>
                                        <th>Date</th>
                                        <th>Reminder method</th>
                                        <th>Type</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $serverName = "TIMAXX-NITRO";

                                    $connectionInfo = array( "Database"=>"RemindMeisterV2");
                                    $conn = sqlsrv_connect( $serverName, $connectionInfo);

                                    //check connection
                                    if( $conn ) {
                                        echo "Connection established.<br />";
                                    }else{
                                        echo "Connection could not be established.<br />";
                                        die( print_r( sqlsrv_errors(), true));
                                    }

                                    //declaring sql command
                                    $sql = "SELECT * FROM Created_Event";
                                    $result = sqlsrv_query($conn,$sql);
                                    if(!$result){
                                        die(print_r(sqlsrv_errors().true));
                                    }
                                    //read data of each row
                                    while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)){
                                        echo "
                                            <tr>
                                                <td>{$row['CEVN_Title']}</td>
                                                <td>{$row['CEVN_Description']}</td>
                                                <td>{$row['CEVN_Reminder_time']->format('H:i')}</td>
                                                <td>{$row['CEVN_Reminder_date']->format('Y-m-d')}</td>
                                                <td>{$row['CEVN_Reminder_option']}</td>
                                                <td>{$row['CEVN_Type']}</td>
                                                <td>
                                                    <a class='btn btn-primary btn-sm' href='edit-bill.php?id={$row['CEVN_ID']}'>Edit</a>
                                                    <a class='btn btn-danger btn-sm' href='delete-bill.php?id={$row['CEVN_ID']}'>Delete</a>
                                                </td>
                                            </tr>
                                        ";
                                    }

                                    ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pg-return-btn d-flex">
                <a href="user-dashboard.php">
                    <div class="ret-btn">Dashboard</div>
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
            var billBtn = document.getElementById("v-bill-btn");
            var evnBtn = document.getElementById("v-evn-btn");
            var billWindow = document.getElementById("bill-window");
            var evnWindow = document.getElementById("evn-window");

            billBtn.addEventListener("click",function(){
                billWindow.style.display = "block";
                evnWindow.style.display = "none";
            })
            evnBtn.addEventListener("click",function(){
                billWindow.style.display = "none";
                evnWindow.style.display = "block";
            })

        </script>
    </body>
</html>
