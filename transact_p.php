<?php
    include'db_con.php';

    $note=false;
    $note2=false;
    $note3=false;
    if (isset($_POST['submit'])) {
        $Send_from=$_GET['id'];
        $send_to=$_POST['receiver'];
        $amt=$_POST['amt'];

        $sql="select * from users where id=$Send_from";
        $query=mysqli_query($con,$sql);
        $sql1=mysqli_fetch_array($query);

        $sql2="select * from users where id=$send_to";
        $query1=mysqli_query($con,$sql2);
        $sql3=mysqli_fetch_array($query1);


        if ($amt<=0) {
            $note=true;
        }

        else if($amt> $sql1['balance']){
            $note2=true;
        }
        else{

            $updatedBal=$sql1['balance']-$amt;
            $set="update users set balance=$updatedBal where id=$Send_from";
            mysqli_query($con,$set);

            $updatedBal=$sql3['balance']+$amt;
            $set="update users set balance=$updatedBal where id=$send_to";
            mysqli_query($con,$set);

            $insert="insert into history(sender,receiver,amt) values('{$sql1['name']}','{$sql3['name']}','{$amt}')";
            $query_insert=mysqli_query($con,$insert);

            if($query_insert){
            
                $note3=true;
            }

            $updatedBal=0;
            $amt=0;

            $sel_to="select * from users where id=$send_to";
            $set2=mysqli_query($con,$sel_to);
            
            if (!$set2) {
                echo "error:".mysqli_error($set2);
            }
            $sql5=mysqli_fetch_assoc($set2);
        }
    } 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transact Money</title>

    <link rel="stylesheet" href="bank_style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <style>
        .trans__from {
            width: 700px;
            height: 600px;
            background-color: aqua;
            margin-top: 20px;
            margin: 20px 20px 20px 20px;
            border: 1px solid blue;
            border-radius: 20px;
            
        }

        .trans__to {
            width: 700px;
            height: 600px;
            background-color: lightpink;
            margin-top: 20px;
            margin: 20px 20px 20px 20px;
            border: 1px solid blue;
            border-radius: 20px;
        }

        .to_from {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            padding: 10px 10px 20px 10px;
            margin-top: 20px;

        }

        .from {
            margin: 10px 10px 10px 10px;
            padding: 10px 10px 10px 10px;
            
        }

        .to {
            margin: 10px 10px 10px 10px;
            padding: 10px 10px 10px 10px;
        }

        .btn-form {
            background-color: #202020;
            color: white;
            border: 1px solid black;
            font-size: large;
            padding: 15px 10px;
            cursor: pointer;
            align-items: center;
            text-decoration: none;
            width: 40%;
            font-weight: 500;

        }

        .btn-form:hover {
            background-color: whitesmoke;
            color: #202020;
            transition: all .3s ease-in-out;
        }
        .btn__grp{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        h2 u{
            color: blue;
            font-weight: 700;
            font-size: 35px;
            font-family:fantasy;
        }
        label{
            font-size: larger;
            font-weight: 700;
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

        <div class="container ">
            <div align="center">
                <div class="tr_head create_title">
                    <h2>Make a Transaction</h2>
                </div>
            </div>

        </div>

        <?php
            if ($note==true) {
                echo'<br><br>';
                echo "<h1 align='center' style='color:red;'>Please! Enter proper Amount..</h1>";
            }
            if ($note2==true) {
                echo'<br><br>';
                echo "<h1 align='center' style='color:red;'>You Have Insufficient Balance !!</h1>";
            }
            if ($note3==true) {
                echo'<br><br>';
                echo "<h1 align='center' style='color:green;'>Congrats!! Transaction Successful</h1>";
                echo"<br>";
                echo "<h1 align='center' style='color:green;'>{$sql5['name']}'s Updated Balance:{$sql5['balance']} </h1>";
                echo"<br>";
                echo"<div align='center'><a href='history.php' ><button class='btn btn-primary'>Check History</button></a></div>";
            }
        ?>

        <div class="to_from">
            <div class="trans__from">
                <div class="from">
                    <h2><u>Send From:</u></h2> <br><br><br><br>
                    <div class="from__form">

                        <?php
                            include'db_con.php';

                            $get_id= $_GET['id']; //get id from url

                            $sender_sql="select * from users where id=$get_id";
                            $sender=mysqli_query($con,$sender_sql);

                            if (!$sender) {
                                echo "error:".mysqli_error($sender);
                            }
                            $sender_info=mysqli_fetch_assoc($sender);

                        ?>

                        <!-- <form method="GET"> -->
                            <label for="id">SENDER ID</label><br>
                            <input type="number" name="id" class="form-control" value="<?php echo $sender_info['id']; ?>" disabled><br>
                            <label for="name">SENDER NAME</label><br>
                            <input type="text" name="id" class="form-control" value="<?php echo $sender_info['name']; ?>" disabled> <br>
                            <label for="email">SENDER EMAIL</label><br>
                            <input type="email" name="id" class="form-control" value="<?php echo $sender_info['email']; ?>" disabled> <br>
                            <label for="balance">SENDER AVAILABLE BALANCE</label><br>
                            <input type="number" name="id" class="form-control" value="<?php echo $sender_info['balance']; ?>" disabled> <br>

                        <!-- </form> -->
                    </div>
                </div>
            </div>
            <div class="trans__to">
                <div class="to">
                    <h2><u>Send To:</u></h2>

                    <div class="to__from"><br><br><br><br><br>

                        <?php
                            $receiver_sql="select * from users where id!=$get_id";
                            $receiver=mysqli_query($con,$receiver_sql);

                            if (!$receiver) {
                                echo "error:".mysqli_error($receiver);
                            }

                        ?>


                        <form method="POST" >
                            <label for="receiver">RECEIVER</label><br>
                            <select name="receiver" class="form-control" required>
                                <option value="" disabled selected>Select Receiver</option>

                                <?php
                                    while($receiver_info=mysqli_fetch_assoc($receiver)){

                                ?>
                                    <option value="<?php echo $receiver_info['id'] ?>" >
                                        <?php echo $receiver_info['id']; ?> : <?php echo $receiver_info['name']; ?> -> Bal=<?php echo $receiver_info['balance']; ?>
                                    </option>

                                <?php
                                    }
                                ?>
                            </select><br>
                            <label for="amt">Amount In INR</label><br>
                            <input type="number" name="amt" class="form-control"
                                placeholder="Enter Amt You want to Transfer him/her" required> <br>

                            <div class="btn__grp">
                                <input type="submit" value="Send" name="submit" class="form-control btn-form">
                                <input type="reset" value="Reset" name="reset" class="form-control btn-form">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><br>

        <div class="text-center">
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
    </script>
</body>

</html>

