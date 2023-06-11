
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Staff Login - Online Bill & Event Reminder</title>
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
            .login-container{
                min-height: 100vh;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            .heading{
                font-family:Poppins-S !important;
                font-size: 3.2rem;
                color:var(--primary);
                text-align: center;
            }
            .details{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                background-color: var(--bg);
                border-radius: 20px;
                filter:drop-shadow(0px 8px 10px rgba(0, 0, 0, 0.19));

            }
            input[type=email],input[type=password]
            {   

	            outline:none;
            }
            form{
                padding: 4rem 2rem;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                filter: drop-shadow(0);
               
            }
            .email{
                font-family:Poppins-R; 
                padding: 0.5rem 1.5rem;     
                font-size: 1.3rem;
                text-align: center;
                border-radius: 7px;
                margin-bottom: 1rem;
                color: var(--primary);
                border-color:var(--bg) ;
                background-color: var(--bg);
                outline:none;
                border:none;
                border-bottom:1px solid var(--primary)
               
             }
             .password{
                font-family:Poppins-R; 
                padding: 0.5rem 1.5rem;     
                font-size: 1.3rem;
                text-align: center;
                border-radius: 7px;
                background-color: var(--bg);
                margin-bottom: 1rem;
                border-color:var(--bg) ;
                outline:none;
                border:none;
                border-bottom:1px solid var(--primary)
             }
             h2{
                font-family:Poppins-R; 
                font-size: 0.9rem;
                color: var(--txt);
                margin-bottom: 1rem;
             }
             .BTN{
                font-family:Poppins-R; 
                font-size: 1.5rem;
                padding: 0.5rem 4rem;
                border-radius: 7px;
                background-color: var(--cta);
                color: var(--bg);
                cursor: pointer;
                border: none;
             }
             .login-err{
                font-family: Poppins-R;
                color:red;
             }
             .title-col{
                width:100vw;
             }
             .title-col h1{
                text-align: center;
             }

             @media only screen and (min-width:768px){
                .heading{
                  font-size: 5rem;  
                }
               form{
                    padding: 6rem;
               }
               .email{
                    padding: 1rem 2rem;
                    font-size: 2rem;
                    border-radius: 7px;
                    margin-bottom: 2rem;
               }
               .password{
                    padding: 1rem 2rem;
                    font-size: 2rem;
                    border-radius: 7px;
                    margin-bottom: 2rem;
               }
               h2{
                     font-size: 1.2rem;
                     margin-bottom: 2rem;
               }
               .BTN{
                    font-size: 2.5rem;
                    padding:0.8rem 6rem;
                    border-radius: 7px;
               }

             }

             @media only screen and (min-width:1280px){
                .heading{
                    font-size: 4.5rem;
                }
                form{
                    padding: 5rem;
                }
                .email,.password{
                    padding: 1rem 4rem;
                    font-size: 1.5rem;
                    border-radius: 7px;
                    margin-bottom: 2.3rem;
                }
                h2{
                    font-size: 1.2rem;
                }
                .BTN{
                    font-size: 2.5rem;
                    padding: 0.4rem 8rem;
                    border-radius: 7px;
                    
                }
                
             }


        </style>
    </head>
    <body>
        <main>
            <div class="login-container">
                <h1 class="heading">Staff Log in</h1>
                <div class="details">
                    <form action="" method="post">
                        <input type="email" placeholder="Staff E-mail address" class="email" name="email" required>
                        <input type="password" placeholder="Staff password" class="password" name="password" required>
                        <h2>Forgot Password</h2>
                        <input type="submit" id="btn" class="BTN" value="Log in">
                        <br>
                        <!-- Display error message if any -->
                        <?php if (isset($error)) { ?>
                            <p class="login-err">
                                <?php echo $error; ?>
                            </p>
                            <?php
                        } ?>
                    </form>
                </div>
            </div>
        </main>
    </body>
</html>