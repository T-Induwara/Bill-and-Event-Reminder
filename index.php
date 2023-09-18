<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RemindMeister - Your Bill & Event Reminder Assistant</title>
        <link rel="icon" type="image/x-icon" href="../assets/images/remindmeister-favicon-250px.png">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <script type="text/js" src="assets/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="assets/css/main-style.css">
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
                src:url('assets/font/Poppins-Regular.ttf');
            }
            @font-face{
                font-family:Poppins-S;
                src:url('assets/font/Poppins-SemiBold.ttf');
            }
            /*Default and mobile css*/
            .hero-left-col{
                background-color: var(--bg);
                min-height:50vh;
                z-index:10
            }
            .hero-right-col{
                color:var(--bg);
                text-align: center;
                display:flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                background-color: var(--primary);
                min-height:50vh;
                padding-bottom:3rem;
                z-index:5
            }
            .hero-rocket-img{
                width:40px;
                position:absolute;
                top:10rem;
                left:55vw;
            }
            .hero-girl-img{
                width:28%;
                position:absolute;
                top:15rem;
                left:12vw;
            }
            .hero-boy-img{
                width:80%;
                position:absolute;
                top:13rem;
                left:4rem;
            }
            .hero-right-col h1, .hero-right-col p, .hero-right-col a{
                margin-top:2rem;
            }
            .hero-right-col h1{
                font-family:Poppins-S;
                font-size:40px;
            }
            .hero-right-col p{
                font-family:Poppins-R;
                font-size:15px;
                padding-left:2rem;
                padding-right:2rem;
            }
            .hero-right-col a{
                color:var(--primary);
                font-family:Poppins-S;
                font-size:20px;
                width:200px;
                padding-top:10px;
                padding-bottom:10px;
                background-color:var(--bg);
                border-radius:7px;
                transition:0.6s;
            }
            .hero-right-col a:hover{
                color:var(--bg);
                background-color:var(--cta);
                transition:0.6s;
            }
            /*Begining of powered by section mobile css*/
            .powered-section{
                background-color: var(--bg);
                padding:4em 0em 4em 0em !important;
            }
            .po-section-titles{
                text-align: center;
            }
            .po-section-titles p{
                font-family:Poppins-S;
            }
            .po-section-titles h1{
                font-family:Poppins-S;
            }
            .po-icons{
                flex-direction: column;
                justify-content: center;
                margin-top:3em;
            }
            .po-icons img{
                width:120px;
                margin:0px 40px 0px 40px;
            }
            /*Begining of benefit section mobile css*/
            .benefit-section{
                background-color: var(--primary);
                padding:3em 2em 3em 2em;
            }
            .benefit-titles{
                color:var(--bg);
                flex-direction: column;
                justify-content: center;
                align-items: center;
                text-align: center;
            }
            .benefit-titles p,.benefit-titles h1,.benefit-titles div{
                margin-top:2rem;
            }
            .benefit-titles p{
                font-family:Poppins-R;
            }
            .benefit-titles h1{
                font-family:Poppins-S;
            }
            .benefit-desc{
                padding-right:0rem;
            }
            .benefit-titles div{
                color:var(--primary);
                font-family: Poppins-S;
                background-color: var(--bg);
                width:150px;
                padding:10px 0px 10px 0px;
                text-align: center;
            }
            .b-left-col,.b-right-col{
                flex:50%;
            }.b-left-col .left-col-desc{
                margin-top:10rem;
            }
            .left-col-desc,.right-col-desc{
                padding:0rem 1rem 0rem 1rem;
            }
            .left-col-desc .b-features{
                text-align: right;
            }
            .benefit-cols{
                flex-direction: column;
            }
            .sch-img{
                width:30%;
                margin-bottom:-4rem;
                margin-left:-3rem;
            }
            .edit-img{
                width:55%;
                margin-bottom:-3rem;
                margin-left:10rem;
            }
            .cal-img{
                width:40%;
                margin-top:-4rem;
                margin-left:12rem;
            }
            .right-col-desc{
                margin-top:2rem;
            }
            .b-features{
                background-color: var(--accent);
                border-radius:10px;
                padding:2rem;
            }
            .b-features h3{
                font-family: Poppins-S;
            }
            .b-features p{
                font-family: Poppins-R;
            }
            /*Begining of sub plan section mobile css*/
            .sub-plans-section{
                background-color: var(--bg);
                text-align: center;
                padding:3em 2em 3em 2em;
            }
            .sub-plans-section p{
                font-family: Poppins-R;
            }
            .sub-plans-section h1{
                font-family: Poppins-S;
            }
            .pricing-f-row,.pricing-s-row{
                flex-direction: column;
                justify-content: center;
            }
            .pricing-f-row div,.pricing-s-row div{
                font-family: Poppins-S;
                color:var(--bg);
                font-size:25px;
                background-color: var(--cta);
                padding:2rem 3rem 2rem 3rem;
                margin:1rem;
                border-radius:7px;
                transition:0.6s;
            }
            .bronze-p:hover{
                transition:0.6s;
                filter: drop-shadow(0px 0px 8px #53535398);
            }
            .silver-p:hover{
                transition:0.6s;
                filter: drop-shadow(0px 0px 8px #53535398);
            }
            .gold-p:hover{
                transition:0.6s;
                filter: drop-shadow(0px 0px 8px #53535398);
            }
            .diamond-p:hover{
                transition:0.6s;
                filter: drop-shadow(0px 0px 8px #53535398);
            }
            .diamondp-p:hover{
                transition:0.6s;
                filter: drop-shadow(0px 0px 8px #53535398);
            }
            .pricing-f-row{
                margin-top:3rem;
            }
            .pricing-s-row{
                margin-top:0rem;
            }
            /*Begining of feedback section mobile css*/
            .feedback-section{
                padding:4em 1em 4em 1em;
                background-color: var(--primary);
            }
            .feedback-section p, .feedback-section h1,.usr-section h3{
                text-align: center;
                color:var(--bg);
            }
            .feedback-section p{
                font-family: Poppins-R;
            }
            .feedback-section h1,.usr-section h3,.feedback p{
                font-family: Poppins-S;
            }
            .feedback p,.usr-section h3{
                color:var(--primary);
            }
            .fback-col{
                flex-direction: column;
                justify-content: center;
                align-items: center;
                margin-top:1rem;
            }
            .feedback{
                flex-direction: column;
                align-items: center;
                background-color:var(--bg);
                border-radius: 20px;
                width:90%;
                padding:1rem;
                margin-top:2rem;
            }
            .f-bk-2{
                margin-left:0rem;
            }
            .stars{
                width:35%;
            }
            .usr-section{
                flex-direction: row;
                justify-content: center;
                align-items: center;
                margin-top:1rem;
            }
            .usr-section img{
                width:16%;
            }
            .usr-section h3{
                margin-left:1rem;
            }
            .fback-img-col img{
                width:60%;
                display:block;
                margin-top:5rem;
                margin-left:auto;
                margin-right:auto;
            }
            /*Begining of join now section mobile css*/
            .join-section{
                background-color: var(--bg);
                padding:4em 2em 4em 2em;
            }
            .j-sec-img img{
                width:60%;
                display:block;
                margin-left:auto;
                margin-right:auto;
            }
            .j-sec-content{
                justify-content: center;
                align-items: center;
            }
            .join-content h1,.join-content div{
                font-family: Poppins-S;
            }
            .join-content{
                flex-direction: column;
                justify-content: center;
                margin-left:0rem;
                margin-top:3rem;
            }
            .join-content h1{
                text-align: center;
                font-size:40px;
            }
            .join-content p{
                font-family: Poppins-R;
                text-align: right;
            }
            .join-btn{
                color:var(--bg);
                font-size:25px;
                text-align: center;
                padding:1rem 3rem 1rem 3rem;
                background-color: var(--cta);
                border-radius:7px;
                transition: 0.6s;
            }
            .join-btn:hover{
                color:var(--bg);
                background-color: var(--primary);
                transition: 0.6s;
            }
                .faq-img{
                    width:70%;
                    display: block;
                    margin-left: auto;
                    margin-right: auto;
                }
                .faqs{
                  flex-direction: column;
                  justify-content: center;
                  align-items: center;
                }
                .faq-window{
                    padding: 4rem 2rem;
                }
                .faq-section{
                    background-color: var(--primary);
                    padding: 4rem 2rem;
                }
                .faq-title{
                    color:var(--bg);
                    text-align: center;
                    padding-bottom: 3rem;
                    margin-top:4rem;
                    font-size:40px;
                }
                .table{
                    color:var(--primary);
                }
                .tbl-row{
                    flex-direction: column;
                    margin-top:1rem;
                    background-color: var(--bg);
                    border-radius: 7px;
                    padding:1rem;
                    text-align: center;
                }
                .table td{
                    border:none;
                }
                .faq-h{
                    font-family: Poppins-S;
                    font-size:15px;
                }
                .faq-c{
                    font-family: Poppins-R;
                    font-size:12px;
                }
            

            @media only screen and (max-width:767px){
                /*Begining of powered by section mobile css*/
                .po-icons{
                    align-items: center;
                }
                .po-icons img{
                    margin-bottom:3rem;
                    width:150px;
                }

            }


            /*Tablet css*/
            @media only screen and (min-width:768px){
                .hero-section{
                    margin-top:-6.9rem;
                }
                .hero-right-col{
                    padding-bottom:0rem;
                }
                .hero-rocket-img{
                    width:50px;
                    top:10rem;
                    left:38vw;
                }
                .hero-girl-img{
                    width:20%;
                    top:15rem;
                    left:6vw;
                }
                .hero-boy-img{
                    width:50%;
                    top:12%;
                    left:45%;
                }
                .hero-right-col h1{
                    font-size:55px;
                }
                .hero-right-col p{
                    font-size:20px;
                    padding-left:12rem;
                    padding-right:12rem;
                }
                .hero-right-col a{
                    font-size:25px;
                    width:200px;
                    padding-top:10px;
                    padding-bottom:10px;
                }
                /*Begining of powered by section tablet css*/
                .powered-section{
                    background-color: var(--bg);
                    padding:4em 0em 4em 0em !important;
                }
                .po-icons{
                    flex-direction: row;
                    justify-content: center;
                    margin-top:3em;
                }
                .po-icons img{
                    width:120px;
                    margin:0px 40px 0px 40px;
                }
                /*Begining of benefit section tablet css*/
                .benefit-section{
                    padding:3em 5em 3em 5em;
                }
                .benefit-titles{
                    flex-direction: column;
                    justify-content: center;
                }
                .benefit-titles p,.benefit-titles h1,.benefit-titles div{
                    margin-top:2rem;
                }
                .benefit-desc{
                    padding-right:3rem;
                }
                .benefit-titles div{
                    width:150px;
                    padding:10px 0px 10px 0px;
                    text-align: center;
                }
                .b-left-col,.b-right-col{
                    flex:50%;
                }.b-left-col .left-col-desc{
                    margin-top:10rem;
                }
                .left-col-desc,.right-col-desc{
                    padding:0rem 1rem 0rem 1rem;
                }
                .left-col-desc .b-features{
                    text-align: right;
                }
                .benefit-cols{
                flex-direction: row;
                }
                .sch-img{
                    width:30%;
                    margin-bottom:-4rem;
                    margin-left:-3rem;
                }
                .edit-img{
                    width:55%;
                    margin-bottom:-3rem;
                    margin-left:12rem;
                }
                .cal-img{
                    width:40%;
                    margin-top:-4rem;
                    margin-left:14rem;
                }
                .right-col-desc{
                    margin-top:2rem;
                }
                .b-features{
                    border-radius:10px;
                    padding:2rem;
                }
                /*Begining of sub plan section tablet css*/
                .sub-plans-section{
                    padding:3em 2em 3em 2em;
                }
                .pricing-f-row,.pricing-s-row{
                    flex-direction: row;
                    justify-content: center;
                }
                .pricing-f-row div,.pricing-s-row div{
                    font-size:25px;
                    padding:1rem 3rem 1rem 3rem;
                    margin-left:2rem;
                    margin-right:2rem;
                    border-radius:7px;
                    transition:0.6s;
                }
                .pricing-f-row{
                    margin-top:3rem;
                }
                .pricing-s-row{
                    margin-top:2rem;
                }
                /*Begining of feedback section tablet css*/
                .feedback-section{
                    padding:4em 2em 4em 2em;
                }
                .feedback-section p, .feedback-section h1,.usr-section h3{
                    text-align: center;
                }
                .fback-col{
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    margin-top:2rem;
                }
                .feedback{
                    flex-direction: column;
                    align-items: center;
                    border-radius: 20px;
                    width:70%;
                    padding:1rem;
                    margin-top:3rem;
                }
                .f-bk-2{
                    margin-left:0rem;
                }
                .stars{
                    width:35%;
                }
                .usr-section{
                    flex-direction: row;
                    justify-content: center;
                    align-items: center;
                    margin-top:1rem;
                }
                .usr-section img{
                    width:12%;
                }
                .usr-section h3{
                    margin-left:1rem;
                }
                .fback-img-col img{
                    width:50%;
                    display:block;
                    margin-top:5rem;
                    margin-left:auto;
                    margin-right:auto;
                }
                /*Begining of join now section tablet css*/
                .join-section{
                    padding:4em 2em 4em 2em;
                }
                .j-sec-img img{
                    width:50%;
                    display:block;
                    margin-left:auto;
                    margin-right:auto;
                }
                .j-sec-content{
                    justify-content: center;
                    align-items: center;
                }
                .join-content{
                    flex-direction: column;
                    justify-content: center;
                    margin-left:0rem;
                    margin-top:3rem;
                }
                .join-content h1{
                    text-align: center;
                    font-size:40px;
                }
                .join-content p{
                    text-align: right;
                }
                .join-btn{
                    font-size:30px;
                    text-align: center;
                    padding:1rem 3rem 1rem 3rem;
                    border-radius:7px;
                    transition: 0.6s;
                }
                .faq-img{
                    width:50%;
                    display: block;
                    margin-left: auto;
                    margin-right: auto;
                }
                .faqs{
                  flex-direction: column;
                  justify-content: center;
                  align-items: center;
                }
                .faq-window{
                    padding: 4rem 2rem;
                }
                .faq-section{
                    background-color: var(--primary);
                    padding: 4rem 2rem;
                }
                .faq-title{
                    color:var(--bg);
                    text-align: center;
                    padding-bottom: 3rem;
                    margin-top:4rem;
                    font-size: 40px;
                } 
                .tbl-row{
                    flex-direction: column;
                    margin-top:1rem;
                    background-color: var(--bg);
                    border-radius: 7px;
                    padding:1rem;
                    text-align: center;
                }
                .faq-h{
                    font-size:20px;
                }
                .faq-c{
                    font-size:15px;
                } 
            }
            
            @media only screen and (max-width:1179px){
                .nav-list a{
                    color:var(--primary) !important;
                }
            }

            /*Desktop css*/
            @media only screen and (min-width:1280px){
                .hero-left-col{
                    min-height:100vh;
                }
                .hero-right-col{
                    min-height:100vh;
                    padding-bottom:0rem;
                }
                .hero-rocket-img{
                    width:60px;
                    top:10rem;
                    left:32vw;
                }
                .hero-girl-img{
                    width:15%;
                    top:15rem;
                    left:6vw;
                }
                .hero-boy-img{
                    width:40%;
                    top:11rem;
                    left:17em;
                }
                .hero-right-col h1{
                    font-size:45px;
                    padding-left:2rem;
                    padding-right:2rem;
                }
                .hero-right-col p{
                    font-size:18px;
                }
                .hero-right-col a{
                    font-size:25px;
                    width:200px;
                    padding-top:10px;
                    padding-bottom:10px;
                }
                /*Begining of powered by section desktop css*/
                .powered-section{
                    padding:4em 0em 4em 0em !important;
                }
                .powered-section{
                    background-color: var(--bg);
                    padding:4em 0em 4em 0em !important;
                }
                .po-section-titles{
                    text-align: center;
                }
                .po-section-titles p{
                    font-family:Poppins-S;
                }
                .po-section-titles h1{
                    font-family:Poppins-S;
                }
                .po-icons{
                    flex-direction: row;
                    justify-content: center;
                    margin-top:3em;
                }
                .po-icons img{
                    width:120px;
                    margin:0px 40px 0px 40px;
                }
                /*Begining of benefit section desktop css*/
                .benefit-section{
                    padding:3em 5em 3em 5em;
                }
                .benefit-titles{
                    flex-direction: column;
                    justify-content: center;
                    align-items:start;
                    text-align: left;
                }
                .benefit-titles p,.benefit-titles h1,.benefit-titles div{
                    margin-top:2rem;
                }
                .benefit-desc{
                    padding-right:3rem;
                }
                .benefit-titles div{
                    width:150px;
                    padding:10px 0px 10px 0px;
                    text-align: center;
                }
                .b-left-col,.b-right-col{
                    flex:50%;
                }.b-left-col .left-col-desc{
                    margin-top:10rem;
                }
                .left-col-desc,.right-col-desc{
                    padding:0rem 1rem 0rem 1rem;
                }
                .left-col-desc .b-features{
                    text-align: right;
                }
                .sch-img{
                    width:30%;
                    margin-bottom:-4rem;
                    margin-left:-3rem;
                }
                .edit-img{
                    width:55%;
                    margin-bottom:-3rem;
                    margin-left:12rem;
                }
                .cal-img{
                    width:40%;
                    margin-top:-4rem;
                    margin-left:14rem;
                }
                .right-col-desc{
                    margin-top:2rem;
                }
                /*Begining of sub plan section desktop css*/
                .sub-plans-section{
                    padding:3em 2em 3em 2em;
                }
                .pricing-f-row,.pricing-s-row{
                    flex-direction: row;
                    justify-content: center;
                }
                .pricing-f-row div,.pricing-s-row div{
                    font-size:25px;
                    padding:2rem 4rem 2rem 4rem;
                    margin-left:2rem;
                    margin-right:2rem;
                    border-radius:7px;
                    transition:0.6s;
                }
                .pricing-f-row{
                    margin-top:3rem;
                }
                .pricing-s-row{
                    margin-top:2rem;
                }
                /*Begining of feedback section desktop css*/
                .feedback-section{
                    padding:4em 2em 4em 2em;
                }
                .feedback-section p, .feedback-section h1,.usr-section h3{
                    text-align: center;
                }
                .fback-col{
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    margin-top:1rem;
                }
                .feedback{
                    flex-direction: column;
                    align-items: center;
                    border-radius: 20px;
                    width:70%;
                    padding:1rem;
                    margin-top:2rem;
                }
                .f-bk-2{
                    margin-left:20rem;
                }
                .stars{
                    width:35%;
                }
                .usr-section{
                    flex-direction: row;
                    justify-content: center;
                    align-items: center;
                    margin-top:1rem;
                }
                .usr-section img{
                    width:12%;
                }
                .usr-section h3{
                    margin-left:1rem;
                }
                .fback-img-col img{
                    width:60%;
                    display:block;
                    margin-top:10rem;
                    margin-left:auto;
                    margin-right:auto;
                }
                /*Begining of join now section mobile css*/
                .join-section{
                    padding:4em 2em 4em 2em;
                }
                .j-sec-img img{
                    width:50%;
                    display:block;
                    margin-left:auto;
                    margin-right:auto;
                }
                .j-sec-content{
                    justify-content: center;
                    align-items: center;
                }
                .join-content{
                    flex-direction: column;
                    justify-content: center;
                    margin-left:-13rem;
                    margin-top:0rem;
                }
                .join-content p{
                    text-align: right;
                }
                .join-btn{
                    font-size:30px;
                    text-align: center;
                    padding:1rem 3rem 1rem 3rem;
                    border-radius:7px;
                    transition: 0.6s;
                }
                .faq-title{
                    margin-top:6rem;
                }
                .faq-img{
                    width:80%;
                    display: block;
                    margin-left: auto;
                    margin-right: auto;
                }
                .faqs{
                  flex-direction: column;
                  justify-content: center;
                  align-items: center;
                }
                .faq-window{
                    padding: 4rem 2rem;
                }
                .faq-section{
                    background-color: var(--primary);
                    padding: 4rem 2rem;
                }
                .faq-title{
                    color:var(--bg);
                    text-align: center;
                    padding-bottom: 2rem;
                    padding-left: 5rem;
                }
                .tbl-row{
                    flex-direction: column;
                    margin-top:1rem;
                    background-color: var(--bg);
                    border-radius: 7px;
                    padding:1rem;
                }
                .table td{
                    border:none;
                }
                .faq-h{
                    font-size:15px;
                }
                .faq-c{
                    font-size:12px;
                }  
            }

        </style>
    </head>
    <body>
        <header>
            <div class="nav-container">
                <div class="nav-logo"><a href="index.php">REMINDMEISTER</a></div>
                <div class="nav-list" id="nav-list">
                    <a href="index.php" style="color:#f8f8f8;">Home</a>
                    <a href="assets/aboutus.html" style="color:#f8f8f8;">About Us</a>
                    <a href="assets/contact.php" style="color:#f8f8f8;">Contact Us</a>
                    <a href="assets/log-in.php" class="nav-log-btn"><b>Log in</b></a>
                </div>
                <div class="m-nav-btn">
                    <img src="/assets/images/header/m-open.webp" alt="m open btn" class="op-btn" id="op-btn">
                    <img src="/assets/images/header/m-close.webp" alt="m close btn" class="co-btn" id="co-btn">
                </div>
            </div>
        </header>
        <main>
            <div class="container-fluid hero-section">
                <div class="row">
                    <div class="col-lg-6 hero-left-col">
                        <img src="assets/images/home/Saly-43.webp" alt="hero section rocket" class="hero-rocket-img">
                        <img src="assets/images/home/Saly-2.webp" alt="hero section girl" class="hero-girl-img">
                        <img src="assets/images/home/Saly-16.webp" alt="hero section boy" class="hero-boy-img">

                    </div>
                    <div class="col-lg-6 hero-right-col">
                        <h1>Stay Organized.<br> Never Miss a Bill or Event.</h1>
                        <p>RemindMeister keeps your life on track with automated bill reminders and event notifications.</p>
                        <a href="assets/aboutus.html"><div>Discover</div></a>
                    </div>
                </div>
            </div>
            <div class="container-fluid powered-section">
                <div class="row">
                    <div class="col-lg-12 po-section-titles">
                        <p>REMINDMEISTER</p>
                        <h1>Powered by</h1>
                    </div>
                    <div class="po-icons d-flex">
                        <img src="assets/images/home/Github.webp" alt="github logo">
                        <img src="assets/images/home/Digital Ocean.webp" alt="digital ocean logo">
                        <img src="assets/images/home/Vercel.webp" alt="vercel logo">
                    </div>
                </div>
            </div>
            <div class="container-fluid benefit-section">
                <div class="row">
                    <div class="col-lg-5 pre-benefit-titles d-flex">
                        <div class="benefit-titles d-flex">
                            <p>Why choose our service?</p>
                            <h1>The benefits</h1>
                            <p class="benefit-desc">Choose RemindMeister for hassle free bill management and event tracking. Our intuitive interface, reliable reminders, and seamless integration make staying organized a breeze.</p>
                            <div class="benefit-btn">Get Started</div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="benefit-cols d-flex">
                            <div class="b-left-col">
                                <div class="left-col-desc">
                                    <img src="assets/images/home/Saly-26.webp" alt="schedule image" class="sch-img">
                                    <div class="b-features">
                                        <h3>Schedule Bills & Events</h3>
                                        <p>Effortlessly schedule and manage your bills and events with RemindMeister's intuitive interface, ensuring you never miss a due date or important occasion.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="b-right-col">
                                <div class="right-col-desc">
                                    <img src="assets/images/home/Saly-25.webp" alt="edit bills image" class="edit-img">
                                    <div class="b-features">
                                        <h3>Edit Your Added Bills & Events</h3>
                                        <p>Easily make changes and updates to your added bills and events at any time. RemindMeister provides flexibility and control to adapt to your evolving schedule.</p>
                                    </div>
                                </div>
                                <div class="right-col-desc">
                                    <div class="b-features">
                                        <h3>Calendar Intergration</h3>
                                        <p>Seamlessly sync RemindMeister with your favorite calendar app, ensuring all your bill payment dates and events are conveniently consolidated in one place.</p>
                                    </div>
                                    <img src="assets/images/home/Saly-42.webp" alt="calendar intergration image" class="cal-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid sub-plans-section">
                <p>Best Pricing for you</p>
                <h1>Subscription Plans</h1>
                <div class="pricing-f-row d-flex">
                    <div class="bronze-p">Bronze</div>
                    <div class="silver-p">Silver</div>
                    <div class="gold-p">Gold</div>
                </div>
                <div class="pricing-s-row d-flex">
                    <div class="diamond-p">Diamond</div>
                    <div class="diamondp-p">Diamond+</div>
                </div>
            </div>
            <div class="container-fluid feedback-section">
                <p>Client testimonials</p>
                <h1>What our customers are saying?</h1>
                <div class="row">
                    <div class="col-lg-6 fback-col d-flex">
                        <div class="feedback d-flex">
                            <p>"I absolutely love the online bill and event reminder system provided by this website!"</p>
                            <img src="assets/images/home/reviews/stars.webp" alt="star reviews" class="stars">
                            <div class="usr-section d-flex">
                                <img src="assets/images/home/reviews/Jane Shanel.webp" alt="jane image">
                                <h3>Jane Shanel</h3>
                            </div>
                        </div>
                        <div class="feedback d-flex f-bk-2">
                            <p>"I absolutely love the online bill and event reminder system provided by this website!"</p>
                            <img src="assets/images/home/reviews/stars.webp" alt="star reviews" class="stars">
                            <div class="usr-section d-flex">
                                <img src="assets/images/home/reviews/John Wick.webp" alt="john image">
                                <h3>John Wick</h3>
                            </div>
                        </div>
                        <div class="feedback d-flex">
                            <p>"I absolutely love the online bill and event reminder system provided by this website!"</p>
                            <img src="assets/images/home/reviews/stars.webp" alt="star reviews" class="stars">
                            <div class="usr-section d-flex">
                                <img src="assets/images/home/reviews/Mia Rosey.webp" alt="mia image">
                                <h3>Mia Rosey</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 fback-img-col">
                        <img src="assets/images/home/feedback-img.webp" alt="feedback column image">
                    </div>
                </div>
            </div>
            <div class="container-fluid join-section">
                <div class="row">
                    <div class="col-lg-6 j-sec-img">
                        <img src="assets/images/home/Saly-22.webp" alt="join with us btn">
                    </div>
                    <div class="col-lg-6 j-sec-content d-flex">
                        <div class="join-content d-flex">
                            <h1>Join with us</h1>
                            <p>So curious, right?</p>
                            <a href="assets/log-in.html">
                                <div class="join-btn">JOIN NOW</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid faq-section">
                <div class="row">
                    <div class="col-lg-7 d-flex faqs">
                        <div class="faq-window" id="faq-window">
                            <table class="table">
                                    <tbody>
                                        <?php
                                        //$serverName = "TIMAXX-NITRO";
                                        $con = new mysqli("localhost","timax","Masseffect34c1#@","RemindMeister");

                                        //$connectionInfo = array( "Database"=>"RemindMeisterV2");
                                        //$conn = sqlsrv_connect( $serverName, $connectionInfo);

                                        //check connection status.
                                        if( $con->connect_error) {
                                            echo "Connection could not be established.<br />";
                                            die( print_r( sqlsrv_errors(), true));
                                        }
                                        else{
                                            echo "Connection established Tharusha.<br />";
                                        }

                                        //declaring sql command
                                        $sql = "SELECT * FROM FAQ";
                                        $result = $con->query($sql);
                                        if($con->query($sql)){
                                            echo "Query ran successfully!";

                                            //read data of each row
                                            //Watched a Youtube video to do this part. https://youtu.be/NqP0-UkIQS4 Video is about MySql. Also, used this type of code on entire website when listing current database table items
                                            while($row = $result->fetch_assoc()){
                                                echo "
                                                    <tr class='d-flex tbl-row'>
                                                        <td class='faq-h'>{$row['Question']}</td>
                                                        <td class='faq-c'>{$row['Answer']}</td>
                                                    </tr>
                                                ";
                                            }
                                            $result->close();
                                        }
                                        else{
                                            die(print_r(sqlsrv_errors().true));
                                        }

                                        $con->close();
                                        ?>
                                        
                                    </tbody>
                                </table>
                        </div>
                    </div>
                    <div class="col-lg-5 faq-title">
                        <h1 class="faq-title">F.A.Qs</h1>
                        <img src="assets/images/home/faq-img.webp" class="faq-img">
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
                        <a href="index.php">Home</a>
                        <a href="assets/aboutus.html">About Us</a>
                        <a href="assets/contact.php">Contact Us</a>
                        <a href="assets/log-in.php" class="nav-log-btn"><b>Log in</b></a>
                    </div>
                    <img src="assets/images/footer/Saly-12.webp" alt="footer image" class="footer-img">
                </div>
                <div class="foo-social">
                    <h3>Our Social Medias</h3>
                    <div class="social-icons">
                        <img src="assets/images/footer/social-icons/ic_baseline-facebook.webp" alt="facebook icon">
                        <img src="assets/images/footer/social-icons/mdi_youtube.webp" alt="youtube icon">
                        <img src="assets/images/footer/social-icons/mdi_linkedin.webp" alt="linkedin icon">
                        <img src="assets/images/footer/social-icons/mdi_twitter.webp" alt="twitter icon">
                        <img src="assets/images/footer/social-icons/ri_whatsapp-fill.webp" alt="whatsapp icon">
                        <img src="assets/images/footer/social-icons/ri_instagram-fill.webp" alt="instragram icon">
                    </div>
                    <h3 class="foo-email-h">E-mail</h3>
                    <p><a href="mailto:hello@remindmeister.com">HELLO@REMINDMEISTER.COM</a></p>
                    <h3 class="foo-phone-h">Phone</h3>
                    <p><a href="tel+94112546782">+94 11 2546782</a></p>
                </div>
            </div>
        </footer>
        <script src="assets/js/main-script.js"></script>
    </body>
</html>