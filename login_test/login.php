<?php
session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        
        if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
          //read from db
            $query="select * from users where user_name='$user_name' limit 1";        
            $result=mysqli_query($con,$query);
            
            if($result){
                if($result && mysqli_num_rows($result)>0){
                    $user_data= mysqli_fetch_assoc($result);
                    
                    if($user_data['password']===$password){
                        $_SESSION['user_id']=$user_data['user_id'];
                        header("Location: index.php");
                        die;
                    }  
                  } 
            }
            echo "Wrong username or password";
            
        }else{
            echo "Enter valid data";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

        <div id="box">
            <form method="post">
                <div style="font-size:30px;margin: 10px;color: white; font-family:Arial, Helvetica, sans-serif">Login</div>
                Name<br>
                <input id="text" type="text" name="user_name"><br><br>
                Password<br>
                <input id="password" type="password" name="password"><br><br>
                
                <input id="button" type="submit" name="Login"><br><br>
                <a href="signup.php">click here to signup</a><br><br>
            </form>
        </div>

</body>
</html>