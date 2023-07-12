<?php
include 'connection.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="taxi.png" type="image/x-icon">
    <link rel="stylesheet" href="Join.css">
    <title>IITH Cab-Sharing</title>
</head>
<body>
<table class="styled-table">
<header class="head">
        <h1 class="content">  IITH <br> Cab-<span>Sharing</span> <br> <u></u> </h1>
        <br>
</header>
    <br>
    <div class="Conform">
    <p ><b>The details mentioned below are of the cab sharers. If the time, date, and destination of any fellow cab sharers match yours, you can contact them via email or phone to coordinate and join the cab conveniently. Happy sharing!</b></p> 
    </div>
    <thead>
        <tr>
            <th>Name</th>
            <th>Date</th>
            <th>Time</th>
            <th>Emai_Id</th>
            <th>Contact-No</th>
            <th>Pickup Location</th>
            <th>Drope Location</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql="select * from `cab-form`";
        $result=mysqli_query($con,$sql);
        if($result){
        while( $row=mysqli_fetch_assoc($result)){
            $Name=$row['Name'];
            $Date=$row['Date'];
            $Time=$row['Time'];
            $Email_Id=$row['Email_Id'];
            $ContactNo=$row['Contact-No'];
            $PickupLocation=$row['Starting point'];
            $DropeLocation=$row['Ending point'];
            echo '<tr>
            <td> '.$Name.'</td>
            <td>'.$Date.'</td>
            <td> '.$Time.'</td>
            <td> '.$Email_Id.'</td>
            <td>'.$ContactNo.'</td>
            <td> '.$PickupLocation.' </td>
            <td> '.$DropeLocation.'</td>

        </tr>
        </tr>';
        }
    }
        ?>
    </tbody>
</table>
</body>
</html>