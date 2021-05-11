<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
    <style>
        nav {
            background-color: #f7f7f7;
            box-shadow: silver 0 0 5px 0;
            position: sticky;
            top: 0;
            /*sticky mate aa jaruri*/
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 10vh;
            min-width: 100%;
            z-index: 10;
    
        }

        nav .logo_txt h1 a {
            color:  #b1d4e0;
            font-size: 30px;
            line-height: 38px;
            cursor: pointer;
            text-decoration: none;
        }

        nav .logo_txt h1 a:hover {
            color:  #0c2d48;
            transition: all 0.3 ease-in-out;
        }
    </style>
</head>

<body>
    <nav>
        <div class="logo-img">
            <img src="swastik.png" alt="swastik" height=40 weight=40>
        </div> &nbsp; &nbsp;
        <div class="logo_txt">
            <h1><a href="#">SWASTIK BANK</a></h1>
        </div>
    </nav>
</body>

</html>