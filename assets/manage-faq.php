<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Manage FAQ - RemindMeister</title>
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
            .pg-title{
                flex-direction: row;
                justify-content: start;
                align-items: center;
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
                width:25%;
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
                margin-top:-0.5rem;
                font-family: Poppins-R;
                font-size: 15px;
            }
            .usr-clear{
                margin-top:-1rem;
            }
            .faq-pholder{
                height:60vh;
                background-color: var(--bg);
                margin:0rem 2rem 0rem 2rem;
                border-radius: 10px;
                filter: drop-shadow(0px 0px 10px hsl(0 0% 47% / 0.3));
            }
            .bottom-btns{
                flex-direction: column;
                justify-content:space-between;
                align-items: center;
                margin-top:2rem;
                margin-bottom:4rem;
            }
            .dash-btn,.add-btn{
                flex-direction: row;
                justify-content: space-evenly;
                align-items: center;
            }
            .add-btn{
                margin-top:2rem;
            }
            .dash-btn img,.add-btn img{
                width:20px;
            }
            .dash-btn p,.add-btn p{
                margin:0;
                padding-left:1rem;
            }
            .dash-btn{
                background-color: var(--bg);
                color:var(--primary);
                padding:1rem 2rem 1rem 2rem;
                border:1px solid var(--primary);
                font-family: Poppins-S;
                font-size:20px;
                border-radius:7px;
                transition: 0.6s;
            }
            .add-btn{
                background-color: var(--primary);
                color:var(--bg);
                padding:1rem 2rem 1rem 2rem;
                font-family: Poppins-S;
                font-size:20px;
                border-radius:7px;
                transition: 0.6s;
            }
            .dash-btn:hover{
                background-color: var(--cta);
                color:var(--bg);
                border:1px solid var(--cta);
                cursor: pointer;
            }
            .add-btn:hover{
                background-color: var(--cta);
                color:var(--bg);
                transition: 0.6s;
                cursor: pointer;
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
                    margin-left:1rem;
                }
                .usr-image{
                    width:20%;
                }
                .title-col h1{
                    font-size:50px;
                    text-align: left;
                }
                .usr-name{
                    font-size: 28px;
                }
                .usr-mail{
                    margin-top:-0.5rem;
                    font-size: 15px;
                }
                .usr-clear{
                    margin-top:-1rem;
                }
                .faq-pholder{
                    height:70vh;
                    margin:0rem 4rem 0rem 4rem;
                }
                .bottom-btns{
                    margin:0rem 4rem 0rem 4rem;
                }
                .add-btn{
                    margin-top:0rem;
                }
                .bottom-btns{
                    flex-direction: row;
                    justify-content:space-between;
                    align-items: center;
                    margin-top:2rem;
                    margin-bottom:4rem;
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
                    width:10%;
                }
                .title-col h1{
                    font-size:50px;
                }
                .usr-name{
                    font-size: 25px;
                }
                .usr-mail{
                    margin-top:-0.50rem;
                    font-size: 15px;
                }
                .usr-clear{
                    margin-top:-1rem;
                }
                .faq-pholder{
                    height:60vh;
                }
            }
        </style>
    </head>
    <body>
        <main>
            <?php
            ?>
            <div class="container-fluid dashboard-header">
                <div class="row">
                    <div class="col-md-6 pg-title d-flex">
                        <div class="title-col">
                            <h1>MANAGE F.A.Qs</h1>
                        </div>
                    </div>
                    <div class="col-md-6 pg-usr-window">
                        <div class="usr-col d-flex">
                            <img src="images/junior-support-dashboard/usr-image.webp" alt="dashboard user image" class="usr-image">
                            <div class="usr-col-details d-flex">
                                <h2 class="usr-name" id="usr-name">Ashley Williams</h2>
                                <p class="usr-mail" id="usr-mail">Agent ID : OBE-JA01</p>
                                <p class="usr-mail usr-clear" id="usr-clearance">Clearance : Junior</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="faq-pholder d-flex">
               <!--This placeholder to show the database faq table content-->
               <div class="faq-container"></div>
            </div>
            <div class="bottom-btns d-flex">
                <a href="staff-dashboard.php">
                    <div class="dash-btn d-flex">
                        <img src="images/junior-support-dashboard/dashboard.webp" alt="dashboard btn">
                        <p>Dashboard</p>
                    </div>
                </a>
                <div class="add-btn d-flex">
                    <img src="images/junior-support-dashboard/add.webp" alt="add btn">
                    <p>Add</p>
                </div>
            </div>
        </main>
        <script src="js/main-script.js"></script>
    </body>
</html>
