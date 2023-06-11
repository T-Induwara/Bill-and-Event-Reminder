<?php
session_start();

if (!isset($_SESSION['Email'])) {
    header("Location: log-in.php"); // Redirect to login page
    exit(); // Stop further execution of the current script
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit FAQ - RemindMeister</title>
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
                justify-content: center;
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
                padding:0.8rem 1.5rem 0.8rem 1.5rem;
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
            .login-container{
                margin-top:2rem;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding-bottom:2rem;
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
                font-size: 15px;
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
                font-size: 15px;
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
                font-size: 20px;
                padding: 0.5rem 4rem;
                border-radius: 7px;
                background-color: var(--cta);
                color: var(--bg);
                cursor: pointer;
                border: none;
                margin-top:2rem;
             }
             .login-err{
                font-family: Poppins-R;
                color:red;
             }
            

            /*CSS for tablet*/
            @media only screen and (min-width:768px){
                .pg-title{
                    justify-content: start;
                }
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
                form{
                    padding: 4rem;
               }
               .email{
                    padding: 1rem 2rem;
                    font-size: 15px;
                    border-radius: 7px;
                    margin-bottom: 2rem;
               }
               .password{
                    padding: 1rem 2rem;
                    font-size: 15px;
                    border-radius: 7px;
                    margin-bottom: 2rem;
               }
               h2{
                     font-size: 1.2rem;
                     margin-bottom: 2rem;
               }
               .BTN{
                    font-size: 20px;
                    padding:0.8rem 6rem;
                    border-radius: 7px;
                    margin-top:2rem;
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
                form{
                    padding: 3rem;
                }
                .email,.password{
                    padding: 1rem 4rem;
                    font-size: 15px;
                    border-radius: 7px;
                    margin-bottom: 2.3rem;
                }
                h2{
                    font-size: 1.2rem;
                }
                .BTN{
                    font-size: 20px;
                    padding: 0.4rem 8rem;
                    border-radius: 7px;
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
                            <h1>EDIT F.A.Q</h1>
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
            <div class="login-container">
                <div class="details">
                <?php
                        if(isset($_GET["id"])){
                            $id = $_GET["id"];
                    
                            $serverName = "TIMAXX-NITRO";

                            $connectionInfo = array( "Database"=>"RemindMeisterV2");
                            $conn = sqlsrv_connect( $serverName, $connectionInfo);

                            $sql = "SELECT * FROM FAQ WHERE FAQ_ID = $id";
                            $result = sqlsrv_query($conn,$sql);
                            if(!$result){
                                die(print_r(sqlsrv_errors().true));
                            }
                            //read data of each row
                            while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)){
                                $question = $row['Question'];
                                $answer = $row['Answer'];
  
                            }
                        } 
                        // Check if the form is submitted
                        if ($_SERVER["REQUEST_METHOD"] === "POST") {
                            //Get form data
                            $subQuestion = $_POST["quest"];
                            $subAnswer = $_POST["ans"];
                            
                            // Perform validation
                            $errors = array();
                            if (empty($subQuestion)) {
                                $errors[] = "Question is required";
                            }
                            if (empty($subAnswer)) {
                                $errors[] = "Answer is required";
                            }
                            
                            // If there are no validation errors, insert the data into the table
                            if (empty($errors)) {
                                $sql = "UPDATE FAQ set Question = '$subQuestion', Answer= '$subAnswer' WHERE FAQ_ID = $id";
                                $stmt = sqlsrv_query($conn, $sql);
                                
                                if ($stmt === false) {
                                    die(print_r(sqlsrv_errors(), true));
                                }
                                
                                echo '<script>';
                                echo 'alert ("FAQ Edited Successfully");';
                                echo 'window.location.href="manage-faq.php"';
                                echo '</script>';
                                exit();
                            }
                        }  

                    ?>
                    <form action="" method="post">
                        <input type="text" placeholder="Question" class="email" name="quest" value="<?php echo "$question" ?>" required>
                        <input type="textarea" placeholder="Answer" class="password" name="ans" value="<?php echo "$answer" ?>" required>
                        <input type="submit" id="btn" class="BTN" value="Edit">
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
            <div class="bottom-btns d-flex">
                <a href="manage-faq.php">
                    <div class="dash-btn d-flex">
                        <img src="images/junior-support-dashboard/dashboard.webp" alt="dashboard btn">
                        <p>Return</p>
                    </div>
                </a>
            </div>
        </main>
        <script src="js/main-script.js"></script>
    </body>
</html>
