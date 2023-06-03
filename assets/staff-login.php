<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
          Staff Login
        </title>
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
                src:url('../font/Poppins-Regular.ttf');
            }
            @font-face{
                font-family:Poppins-S;
                src:url('../font/Poppins-SemiBold.ttf');
            }
            .login-container{
                min-height: 100vh;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            .heading{
                font-family:poppins-S;
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
                border-radius: 10px;
               filter:drop-shadow(0px 8px 10px rgba(0, 0, 0, 0.19));

            }
            form{
                padding: 2rem 1rem;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                filter: drop-shadow(0);
               
            }
            .email{
                font-family:Poppins-S; 
                padding: 0.5rem 1.5rem;     
                font-size: 1.3rem;
                text-align: center;
                border-radius: 10px;
                margin-bottom: 1rem;
                color: var(--primary);
                border-color:var(--bg) ;
               
             }
             .password{
                font-family:Poppins-S; 
                padding: 0.5rem 1.5rem;     
                font-size: 1.3rem;
                text-align: center;
                border-radius: 10px;
                margin-bottom: 1rem;
                border-color:var(--bg) ;
             }
             h2{
                font-family:Poppins-S; 
                font-size: 0.9rem;
                color: var(--txt);
                margin-bottom: 1rem;
             }
             button{
                font-family:Poppins-R; 
                font-size: 1.8rem;
                padding: 0.5rem 3.5rem;
                border-radius: 0.8rem;
                background-color: var(--cta);
                color: var(--bg);
                cursor: pointer;
             }

             @media only screen and (min-width:768px){
                h1{
                  font-size: 5rem;  
                }
               form{
                    padding: 4rem;
               }
               .email{
                    padding: 1rem 2rem;
                    font-size: 2rem;
                    border-radius: 1rem;
                    margin-bottom: 2rem;
               }
               .password{
                    padding: 1rem 2rem;
                    font-size: 2rem;
                    border-radius: 1rem;
                    margin-bottom: 2rem;
               }
               h2{
                     font-size: 1.2rem;
                     margin-bottom: 2rem;
               }
               button{
                    font-size: 2.5rem;
                    padding:1rem 5rem;
                    border-radius: 1.2rem;
               }

             }

             @media only screen and (min-width:1280px){
                h1{
                    font-size: 4.2rem;
                }
                form{
                    padding: 2rem;
                }
                .email,.password{
                    padding: 1rem 3.5rem;
                    font-size: 2.1rem;
                    border-radius: 1.5rem;
                    margin-bottom: 2.3rem;
                }
                h2{
                    font-size: 1.5rem;
                }
                button{
                    font-size: 2.5rem;
                    padding: 1rem 6rem;
                    border-radius: 1.3rem;
                    
                }
                
             }


        </style>
    </head>
    <body>
        <main>
            <div class="login-container">
                <h1 class="heading">Staff Log in</h1>
                <div class="details">
                <form action="staff-login.php" method="post">
                    <input type="email" placeholder="Staff E-mail address" class="email">
                    <input type="password" placeholder="Staff password" class="password">
                    <h2>Forgot Password</h2>
                    <button id="btn" class="BTN">Log in</button>
                    </form>
                </div>
            </div>
        </main>
    </body>
</html>