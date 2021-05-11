<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User PassBook</title>

    <link rel="stylesheet" href="bank_style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">


    <style>
        .passbook {
            width: 80%;
            background-color: #D3D3D3;
            border: 1px solid silver;
            border-radius: 15px;
            padding: 20px 20px 20px 20px;
        }
        .passbook div h2 {
            color: tomato;
            font-size: 3vw;
        }
        .passbook div h2 strong{
            color: #202020;
            font-family:sans-serif;
        }
        .table_grp{
            overflow-x: auto;
        }
    </style>
</head>

<body onload="load()">
    <!-- preloader -->
    <div id="loading"></div>

    <header>

        <?php
            include'for_nav.php';

            include'db_con.php';

            $user_id=$_GET['id'];
            $sel="select * from users where id=$user_id";
            $sql=mysqli_query($con,$sel);

            if (!$sql) {
                echo "error:".mysqli_error($sql);
            }
            $select=mysqli_fetch_assoc($sql);

            // this for sender 
            $sel1="select * from history where sender='{$select['name']}'";
            $result=mysqli_query($con, $sel1);

            // now receiver
            $sel2="select * from history where receiver='{$select['name']}'";
            $result1=mysqli_query($con, $sel2);

        
        ?>

        <br><br>

        <div align="center">
            <div class="mb-3" style="color: white; background-color:#4CAF50; border: 1px solid green; width:70%;">
                <h3 style="font-family: fantasy; color: honeydew; margin: 12px 10px;">User's PassBook
                </h3>
            </div>
        </div>

        <div class="main__pb " align="center">
            <div>
                <div class="passbook" align="left">
                    <div class="bid">
                        <h2><strong>Bank A/C ID:</strong><?php echo $select['id']; ?></h2>
                    </div><br>
                    <div class="bname">
                        <h2><strong>Name:</strong><?php echo $select['name']; ?></h2>
                    </div><br>
                    <div class="bemail">
                        <h2><strong>Email ID:</strong><?php echo $select['email']; ?></h2>
                    </div><br>
                    <div class="bavlbl">
                        <h2><strong>Available Balance:</strong><?php echo $select['balance']; ?></h2>
                    </div><br>
                    <div class="per_hist">
                        <h2><strong>Your Transaction History: </strong></h2>
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
                                            <?php
                                        while($rows1=mysqli_fetch_assoc($result1)){
                                    ?>

                                            <tr>
                                                <td><?php echo $rows1['id']; ?></td>
                                                <td><?php echo $rows1['sender']; ?></td>
                                                <td><?php echo $rows1['receiver']; ?></td>
                                                <td><?php echo $rows1['amt']; ?></td>
                                                <td><?php echo $rows1['time']; ?></td>
                                            </tr>

                                    <?php
                                        }
                                    ?>

                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br><br>

        <div class="text-center mb-3">
            <button class="btn btn-outline-primary btn-lg" onclick="printt()">Print</button>&nbsp;
            <a href="transaction.php"><button class="btn btn-outline-secondary btn-lg">Back</button></a>&nbsp;
            <a href="banking.php#container_main"><button class="btn btn-info btn-lg">Home</button></a>
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
        function printt(){
            window.print();
        }
    </script>
</body>

</html>