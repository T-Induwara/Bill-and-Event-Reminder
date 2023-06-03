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
            <div class="container-fluid dashboard-header">
                <div class="row">
                    <div class="col-md-6 pg-title">
                        <div class="title-col">
                            <h1 id="ev-pg-title">EVENT TYPES</h1>
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
            <div class="evn-types-section" id="evn-types-section">
                <div class="ev-row d-flex">
                    <div class="row-sub d-flex">
                        <div class="events" id="wedding-col">
                            <div class="ev-wedding ev" id="ev-wedding">
                                <img src="images/user-dashboard/event-types/weddings.webp" alt="wedding icon">
                            </div>
                            <p class="ev-name" id="ev-name">Weddings</p>
                        </div>
                        <div class="events" id="bday-col">
                            <div class="ev-bday ev" id="ev-bday">
                                <img src="images/user-dashboard/event-types/birthdays.webp" alt="bday icon">
                            </div>
                            <p class="ev-name" id="ev-name">Birthdays</p>
                        </div>
                    </div>
                    <div class="row-sub d-flex">
                        <div class="events" id="anniv-col">
                            <div class="ev-anni ev" id="ev-anni">
                                <img src="images/user-dashboard/event-types/anniversaries.webp" alt="anniversary icon">
                            </div>
                            <p class="ev-name" id="ev-name">Anniversary</p>
                        </div>
                        <div class="events" id="get-to-col">
                            <div class="ev-gt ev" id="ev-gt">
                                <img src="images/user-dashboard/event-types/get-together.webp" alt="get together icon">
                            </div>
                            <p class="ev-name" id="ev-name">Get Together</p>
                        </div>
                    </div>
                </div>
                <div class="ev-row d-flex ev-row1">
                    <div class="row-sub d-flex">
                        <div class="events" id="party-col">
                            <div class="ev-party ev" id="ev-party">
                                <img src="images/user-dashboard/event-types/office-parties.webp" alt="party icon">
                            </div>
                            <p class="ev-name" id="ev-name">Parties</p>
                        </div>
                        <div class="events" id="shop-col">
                            <div class="ev-shop ev" id="ev-shop">
                                <img src="images/user-dashboard/event-types/shopping.webp" alt="shopping icon">
                            </div>
                            <p class="ev-name" id="ev-name">Shopping</p>
                        </div>
                    </div>
                    <div class="row-sub d-flex">
                        <div class="events" id="conf-col">
                            <div class="ev-conf ev" id="ev-conf">
                                <img src="images/user-dashboard/event-types/conference.webp" alt="conference icon">
                            </div>
                            <p class="ev-name" id="ev-name">Conference</p>
                        </div>
                        <div class="events" id="other-col">
                            <div class="ev-oth ev" id="ev-oth">
                                <img src="images/user-dashboard/event-types/other-events.webp" alt="other events icon">
                            </div>
                            <p class="ev-name" id="ev-name">Other</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="event-frm-section" id="evn-frm-section">
                <div class="frm-container">
                    <div class="frm-title" id="frm-title">
                        <h1 class="title-main" id="title-main">Weddings</h1>
                    </div>
                    <form action="connect.php" method="post">
                        <div class="frm-divs d-flex">
                            <label for="eventTitle">Add event title</label>
                            <input type="text" name="eventTitle" placeholder="My event...">
                        </div>
                        <div class="frm-divs d-flex">
                            <label for="eventDesc">Add event description</label>
                            <input type="text" name="eventDesc" placeholder="My event is about...">
                        </div>
                        <div class="frm-divs d-flex">
                            <label for="time">Set reminder time</label>
                            <input type="time" name="time">
                        </div>
                        <div class="frm-divs d-flex">
                            <label for="date">Set reminder date</label>
                            <input type="date" name="date">
                        </div>
                        <div class="frm-divs d-flex">
                            <p>Select reminder method</p>
                            <div class="d-flex">
                                <input type="radio" name="eventRemMethod" value="SMS">
                                <label for="sms">SMS</label>
                                <input type="radio" name="eventRemMethod" value="Email">
                                <label for="email">E-mail</label>
                            </div>
                        </div>
                        <input type="submit" value="Add reminder">
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
                        <a href="../index.html">Home</a>
                        <a href="aboutus.html">About Us</a>
                        <a href="contact.html">Contact Us</a>
                        <a href="log-in.html" class="nav-log-btn"><b>Log in</b></a>
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

            var weddingCol = document.getElementById("ev-wedding");
            var bdayCol = document.getElementById("ev-bday");
            var anniCol = document.getElementById("ev-anni");
            var gtCol = document.getElementById("ev-gt");
            var partyCol = document.getElementById("ev-party");
            var shopCol = document.getElementById("ev-shop");
            var confCol = document.getElementById("ev-conf");
            var othCol = document.getElementById("ev-oth");

            var pgName = document.getElementById("ev-pg-title");

            var eventSection = document.getElementById("evn-types-section");
            var frmSection = document.getElementById("evn-frm-section");

            var btns = document.querySelectorAll('.ev');
            var evNames = document.querySelectorAll('.ev-name');
            var frmName = document.getElementById("title-main");

            btns.forEach((c) => {//In here I added forEach with mouseover and mouseleave to mimic css hover effect for all divs at once
                c.addEventListener('mouseover', function () {
                    c.style.background = "var(--cta)";
                    c.style.transition = "0.6s"
                });
                c.addEventListener('mouseleave', function () {
                    c.style.background = "var(--bg)";
                    c.style.transition = "0.6s"
                });
                c.addEventListener('click', function () {
                    pgName.innerHTML = "Add Events";
                    eventSection.style.display = "none";
                    frmSection.style.display = "block";
                });
            });
            weddingCol.addEventListener("click",function(){
                frmName.innerHTML = "Weddings";
            });
            bdayCol.addEventListener("click",function(){
                frmName.innerHTML = "Birthdays";
            });
            anniCol.addEventListener("click",function(){
                frmName.innerHTML = "Anniversary";
            });
            gtCol.addEventListener("click",function(){
                frmName.innerHTML = "Get Together";
            });
            partyCol.addEventListener("click",function(){
                frmName.innerHTML = "Parties";
            });
            shopCol.addEventListener("click",function(){
                frmName.innerHTML = "Shopping";
            });
            confCol.addEventListener("click",function(){
                frmName.innerHTML = "Conference";
            });
            othCol.addEventListener("click",function(){
                frmName.innerHTML = "Other";
            });
        </script>
    </body>
</html>
