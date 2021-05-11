<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make a Transaction</title>

    <link rel="stylesheet" href="bank_style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">


    <style>
        .table_grp{
            width:90%;
            overflow-x: auto;
        }
        .main_trans{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 10px 10px 10px 10px;
            padding: 10px 5px 5px 5px;
        }
        .trsct_btn{
            background:white;
            border:1px solid black;
            font-size: large;
            padding: 5px 10px;
            display: inline-block;
            cursor: pointer;
            align-items: center;
            font-weight:500;
        }
        .passbook_btn{
            background:#202020;
            color: white;
            border:1px solid black;
            font-size: large;
            padding: 5px 10px;
            display: inline-block;
            cursor: pointer;
            align-items: center;
            font-weight:500;
        }
        .trsct_btn:hover{
            background:#202020;
            color:white;
            transition: all .3s ease-in-out;
        }
        .passbook_btn:hover{
            background:white;
            color:#202020;
            transition: all .3s ease-in-out;
        }
    </style>
</head>

<body onload="load()">

    <?php 
        include 'db_con.php';
         
        $sel="select * from users";
        $result=mysqli_query($con, $sel);

    ?>
    
    <!-- preloader -->
    <div id="loading"></div>

    <header>
        <?php
            include'for_nav.php';
        ?>

        <br><br>

        <div class="main_trans">
            <div align="center">
                <div class="mb-3"  style="color: white; background-color:#4CAF50; border: 1px solid green; width:100%;">
                    <h3 style="font-family: fantasy; color: honeydew; margin: 12px 10px;"> Total Available User in Our Bank</h3>
                </div>
            </div>
        
            <div class="table_grp">
                <table border="1" class="table table-hover">
                    <thead class="table-dark" >
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email ID</th>
                            <th>Balance</th>
                            <th>Action</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($rs=mysqli_fetch_assoc($result)){

                        ?>

                            <tr>
                                <td><?php echo $rs['id']?></td>
                                <td><?php echo $rs['name']?></td>
                                <td><?php echo $rs['email']?></td>
                                <td><?php echo $rs['balance']?></td>
                                <td><a href="transact_p.php?id=<?php echo $rs['id'] ?>"><button class="trsct_btn" type="button">Transact</button></a></td>
                                <td><a href="passbook.php?id=<?php echo $rs['id'] ?>"><button class="passbook_btn" type="button">PassBook</button></a></td>
                            </tr>                                

                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="crt_user">
                <a href="createuser.php"><button type="button" class="btn btn-outline-secondary btn-lg">Create a New user</button></a>
                <a href="banking.php#container_main"><button type="button" class="btn btn-info btn-lg">Home</button></a>
            </div>
        </div>

    </header>
    <footer>
        <p align="center">Copyright &copy; 2021, All Right Reserved by <a href="#">Darshan Kadiya</a></p>
    </footer>


    <script>
        var preloader = document.getElementById('loading');

        function load() {
            setTimeout(loaded, 1000); //3 sec ka sleep    
        }
        function loaded() {
            preloader.style.display = 'none';
        }
    </script>
</body>

</html>