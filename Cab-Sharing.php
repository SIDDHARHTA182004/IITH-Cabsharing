<?php

include 'connection.php';
session_start();


if(isset($_POST['mySubmit'])){
    $name = $_POST['myName'];
    $date = $_POST['myDate'];
    $time = $_POST['myTime'];
    $email = $_POST['myEmail'];
    $phone = $_POST['myNumber'];
    $starting = $_POST['location'];
    $ending = $_POST['destination'];

    $sql = "insert into `cab-form` (`Name`,`Date`,`Time`,`Email_Id`,`Contact-No`,`Starting point`,`Ending point`) 
    values('$name','$date','$time','$email','$phone','$starting','$ending')";
    $result=mysqli_query($con,$sql);
    if(!$result){
      echo "Error";
    }

    // if($result){
    //     $_SESSION['status']="Your cab-sharing details have been successfully recorded. Expect to receive calls or emails from potential cab-sharers soon.<br>Thank you, and happy sharing!";
    //     header('location: Cab-Sharing.php');
    // }
    // else{
    //     echo "something went wrong";
    // }
    // // echo $sql;


}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IITH Cab-Sharing</title>
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <link rel="shortcut icon" href="taxi.png" type="image/x-icon">
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&family=Oswald:wght@200&display=swap"
        rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }
        h1 {
            font-family: 'Merriweather', serif;
        }
        body {
            background-color:#26284e;
        }

        .head {
            /* background-color: #ffa938; */
            margin: 5px 0px;
            border: 2px solid black;
            border-radius: 8px;
            border: none;
            position: absolute;
            color: white;
            margin: 50px;
            font-size: 25px;
            text-align: left;
            
        }

        header {
            /* background-color: aqua; */
            display: block;
            text-align: center;
           
        }
        h1 span{
    color: #d43242;
}

        form {
            text-align: center;
            margin-top: 40px;
        }

        .form {
            color: #ffa938;
            font-family: 'Merriweather', serif;
            font-size: 20px;
        }

        input {
            width: 100%;
            padding: 5px 10px;
            margin: 8px 0;
            border: 2px solid black;
            border-radius: 4px;
        }

        input[type=submit] {
            width: 5%;
        }

        input:hover {
            background-color: lightgrey;
            color: blue;
        }

        .divClass {
            display: inline-block;
            height: 350px;
            width: 350px;
            text-align: left;
        }

        input[type=submit] {
            width:30%;
            background-color: #d43242;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }
        .conform{
            display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
  
        }
       
 .conform h1{
color: #d43242;
align-items: center; 
}
.conform h2{
    color: #ffa938;
}

        
    </style>
</head>

<body>
<div class="conform">
    <h1>Upon submitting the form with your details, your cab-sharing information will be successfully recorded. And you can expect to receive calls or emails from potential cab-sharers in the near future.
        </h1>
        <br>
        <h2>
            Thank you, and happy sharing!
    </div>
    <hr>
    <header class="head">
        <h1 class="content">  IITH <br> Cab-<span>Sharing</span> <br> <u> Form </u> </h1>
    </header>

    <form id="myForm"  method = "post" autocomplete="on" >
        <div class="divClass">
            <div class="form">
                Name: <input type="text" name="myName" placeholder="Enter your name" required>
            </div>
            <br>
            <div class="form">
                Date: <input type="date" name="myDate" required>
            </div>
            <br>
            <div class="form">
                Time: <input type="time" name="myTime" required>
            </div>
            <br>
            <div class="form">
                Email_Id: <input type="email" name="myEmail" placeholder="Enter your IITH Mail_ID" required>
            </div>
            <br>
            <div class="form">
                Contact-No: <input type="number" name="myNumber" placeholder="Enter your mobile number" required>
            </div>
            <br>
            <div class="form">
            Pickup Location: <input type="text" name="location" placeholder="Enter your Starting point" required>
            </div>
            <br>
            <div class="form">
            Drope Location: <input type="text" name="destination" placeholder="Enter your Droping point" required>
            </div>
            <br>
            <div class="row">
               <input type="submit" name="mySubmit" value="Submit" onclick="openPopup">
            </div>
        </div>
    </form>
    <br>
    <br>
    <br>
    
    <!-- <div class="outside">
    <div class="popup" id="popup">
    <h1>Your cab-sharing details have been successfully recorded. Expect to receive calls or emails from potential cab-sharers soon.
        </h1>
        <br>
        <h2>
            Thank you, and happy sharing!
        </h2>
     <button type="button" onclick="closePopup()">
     DONE
     </button>
    </div>
    </div> -->
<!-- <script>
    let popup = document.getElementById("popup");
    function openPopup(){
        popup.classList.add("open-popup");
    }
    function closePopup(){
        popup.classList.remove("open-popup");
    }
</script> -->
</body>

</html>