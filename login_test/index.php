<?php 
session_start();

    //$_SESSION;
    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAR REPAIR</title>
</head>
<body>

    <style type="text/css">
        
        #text{
            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
            width: 90%;
        }
        #button{
            padding: 10px;
            width: 100px;
            color: white;
            background-color: lightseagreen;
            border: none;
        }
        #box{
            background-color: lightskyblue;
            margin: auto;
            width: 300px;
            padding: 20px;
            font-size:15px;
            color: whitesmoke;
            font-family:Arial, Helvetica, sans-serif;
        }       
    </style>


    <h1>Welcome to Car Repair Online</h1>
    <br>
    Hello <?php echo $user_data['user_name']; ?>
    <br>
    <br>
    <div id="box">
            <form method="post">
                <div style="font-size:30px;margin: 10px;color: white; font-family:Arial, Helvetica, sans-serif">Login</div>
                Address<br>
                <input id="text" type="text" name="address"><br><br>
                Phone num<br>
                <input id="text" type="text" name="phone"><br><br>
                Car license plate num<br>
                <input id="text" type="text" name="car_licensenum"><br><br>
                Engine number<br>
                <input id="text" type="text" name="engine_num"><br><br>
                Appointment date<br>
                <input id="date" type="date" name="app_date"><br><br>
                Mechanic<br>
                <input id="" type="date" name="app_date"><br><br>

                <input id="button" type="submit" name="Submit"><br><br>
                <input type="reset">
            </form>
        </div>
    <br>
    <br>
    <br>
    <br>
    <a href="logout.php">Logout</a>
</body>
</html>