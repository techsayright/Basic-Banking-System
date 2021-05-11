<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Banking System</title>
    <link rel="stylesheet" href="bank_style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

        <style>
            .just_into{
                background-color: #ff5e14 ;
                height: 100vh;
                display: flex;
                padding-top: 10%;
                justify-content:center;
                /* flex-direction:column; */
            }
            .just_into div h1{
                color:white;
                text-decoration:underline;
            }
            .just_into div ol li{
                color:white;
                font-size: 2vh;
                
            }
            .just_into div h2 a i{
                font-size: 10vh;

            }

            @media only screen and (max-width: 450px){
                .div1,
                .div2,
                .div3 {
                    height: 200px;
                    width: 250px;
                    
                }
                .logo1 img, .logo2 img, .logo3 img{
                    height: 100px;
                    width:100px
                }
                .btn1 a button,
                .btn2 a button,
                .btn3 a button {
                    
                    border: none;
                    font-size: medium;
                    padding: 8px 8px;
                    display: inline-block;
                    cursor: pointer;
                    align-items: center;
                    text-decoration: none;
                }

            }
        </style>
</head>


<body onload="load()">

    <!-- preloader -->
    <div id="loading"></div>

    <?php
        include'for_nav.php';
    ?>

    <div class="just_into">
            <div>
                <h1>HOW TO USE THIS BANK:</h1>
                <br>
                <ol>
                    <li>This is free to use Bank</li>
                    <li>You can create Account for new user By clicking "Create New User"</li>
                    <li>You can make a Transaction by clicking "Make Transaction"</li>
                    <li>In "Make Transaction" page, you can see all the available User...from this all users, <br>You can select anyone for transaction</li>
                    <li>In "History", you can see all history</li>
                    <li>If You want to see particular User's History, you can go for "Make Transaction->PassBook"</li>
                    <li>This project is under "The Sparks Foundation"</li>
                    <li>Thanks for using Our System</li>
                </ol>
                <br><br><br>
                <h2 align="center"><a href="#container_main"><i class="fa fa-sort-desc"></i></a></h2>
            </div>

    </div>
    
    <div id="container_main" style="height:2vh;">
            

    <div class="container_main">
        <div class="text">
            <h1>
                <div align="center">Wel-Come To</div><br>WORLD'S BEST BANK
            </h1>
        </div>

        <div class="img">
            <img src="bank logo.png" alt="bank">
        </div>
    </div>

    <div class="feature">
        <div class="div1">
            <div class="logo1"><img src="user logo.png" alt="user" height="300" width="300"></div>
            <div class="btn1">
                <a href="createuser.php"><button>Create New User</button></a>
            </div>
        </div>
        <div class="div2">
            <div class="logo2">
                <img src="transaction logo.png" alt="transaction" height="300" width="300">
            </div>
            <div class="btn2">
                <a href="transaction.php"><button>Make Transaction</button></a>
            </div>
        </div>
        <div class="div3">
            <div class="logo3">
                <img src="history logo.png" alt="history" height="300" width="300">
            </div>
            <div class="btn3">
                <a href="history.php"><button>Check History</button></a>
            </div>
        </div>
    </div>

    <footer>
        <p align="center">Copyright &copy; 2021, All Right Reserved by <a href="#">Darshan Kadiya</a></p>
    </footer>
    </div>


    <script>
        var preloader=document.getElementById('loading');

        function load(){
            setTimeout(loaded, 1000); //3 sec ka sleep    
        }
        function loaded(){
            preloader.style.display='none';
        }
    </script>
</body>

</html>