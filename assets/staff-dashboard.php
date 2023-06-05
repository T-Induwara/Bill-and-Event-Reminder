<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Staff Dashboard - RemindMeister</title>
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

            #img1{
                margin: 0rem;
                padding:0rem;
                width: 100%;
                padding:1rem;
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
            #but p{
                font-family: Poppins-R;
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
                margin-top: 4rem;
                padding: 3rem 2rem 3rem 2rem;
                display: flex;
                flex-direction: column;
                align-items: center;
                
                }

                #but{
                margin:4rem 3rem 0 3rem;
                padding:0 1rem 0rem 1rem;
                display: flex;
                width: 40%;
                flex-direction:column ;
                justify-content: center;
                }
                #but p{
                    font-size:25px;
                }
                #img1{
                    padding:2rem;
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
                margin-top: 4rem;
                padding: 5rem 7rem 8rem 7rem;
                width: 100%;
                height: 60vh;
                flex-direction: row;
                
                }

                #but{
                margin:0 3rem 0 3rem;
                padding:3rem 5rem 3rem 5rem;
                width: 25%;
                display: flex;
                flex-direction:column ;
                justify-content: center;
                }
                #but p{
                    font-size:15px;
                }

                #img1{
                    margin: 0rem;
                    padding:0.5rem;
                    width: 100%;
                    display: flex;
                    flex-direction: row;
                    align-items: center;
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
                    <div class="col-md-6 pg-title">
                        <div class="title-col">
                            <h1>STAFF DASHBOARD</h1>
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

            <div class="category">
              <a id="but" href="bill-types.php">  
                   <div class="subbutton" >
                   <img id="img1" alt="image" src="/assets/images/user-dashboard/add-bills.webp">
                   </div>
                   <p id="dis">View user inquiries</p> 
              </a>    
              <a id="but" href="event-types.php">  
                   <div class="subbutton" >
                   <img id="img1" alt="image" src="/assets/images/user-dashboard/add-events.webp">
                   </div>
                   <p id="dis">Manage F.A.Qs</p> 
              </a>  
               
            </div>

        </main>
        <script src="js/main-script.js"></script>
    </body>
</html>
