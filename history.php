<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>

    <link rel="stylesheet" href="bank_style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <style>
        .table_grp {
            width: 90%;
            overflow-x: auto;
        }

        .main_trans {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 10px 10px 10px 10px;
            padding: 10px 5px 5px 5px;
        }
    </style>
</head>

<body onload="load()">

    <?php 
        include 'db_con.php';
         
        $sel="select * from history";
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
                <div class="mb-3" style="color: white; background-color:#4CAF50; border: 1px solid green; width:100%;">
                    <h3 style="font-family: fantasy; color: honeydew; margin: 12px 10px;">Transaction History of All time</h3>
                </div>
            </div>

            <div class="table_grp">
                <table border="1" class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Tr No.</th>
                            <th>Sender</th>
                            <th>Receiver</th>
                            <th>Transact Amount(INR)</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($rows=mysqli_fetch_assoc($result)){
                        ?>

                                <tr>
                                    <td><?php echo $rows['id']; ?></td>
                                    <td><?php echo $rows['sender']; ?></td>
                                    <td><?php echo $rows['receiver']; ?></td>
                                    <td><?php echo $rows['amt']; ?></td>
                                    <td><?php echo $rows['time']; ?></td>
                                </tr>

                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="crt_user">
                <a href="transaction.php"><button type="button" class="btn btn-outline-secondary btn-lg">Make a Transaction</button></a>
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