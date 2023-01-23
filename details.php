<?php


$conn = mysqli_connect('localhost', 'root', '', 'timesheet') or die ('unable to connect');
// $sql = mysqli_connect("timesheet", $conn);
$user_id = $_GET['user_id'];
//fecthing data'

$query = "SELECT * from dashboard WHERE id = '$user_id' ";
$result = mysqli_query($conn, $query) or die(mysqli_error());


while($row=mysqli_fetch_array($result)){
  $Name = $row['Name'];
  $date_reg = $row['date_applied'];
  $Category = $row['Task_Category'];
  $sub_category = $row['Sub_Category'];
}



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>details</title>
    <link rel="stylesheet" href="css/style.css">

    <style>
        .dropbtn {
 width: 1000px;
 color: white;
 padding: 16px;
 font-size: 16px;
 border: solid grey;
}

.dropdown {
 position: relative;
 display: inline-block;
}

.dropdown-content {
 display: none;
 position: absolute;
 background-color: #f1f1f1;
 min-width: 160px;
 box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
 z-index: 1;
}

.dropdown-content a {
 color: black;
 padding: 12px 16px;
 text-decoration: none;
 display: block;
}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #fff;}



    </style>

</head>
<body>
    <section>
        <div class="containers">
            <div class="container" action="" method="POST">
                <label for="fname">Name</label><br>
                <input type="text" id="fname" name="fname" value="<?php echo "$Name"; ?>" readonly><br>
                <label for="lname">Date</label><br>
                <input type="text" id="lname" name="lname" value="<?php echo $date_reg; ?>" readonly><br><br>
                <label for="lname">Task Category</label><br>
                <input type="text" id="lname" name="lname" value="<?php echo $Category; ?>" readonly><br><br>
                <label for="lname">Sub Category</label><br>
                <input type="text" id="lname" name="lname" value="<?php echo $sub_category; ?>" readonly><br><br>
                <label for="lname">Approval</label><br>
                <select style="width: 200px; height: 40px;" name="dog-names" id="dog-names">
                      <option value="rigatoni">Approved</option>
                      <option value="dave">Declined</option>
                      <option value="pumpernickel">Pending</option>
                </select><br>

                <button style="float: left;" style="width: 20%; text-align: center;"" type="submit">Save</button>
                  

</div> 

        </div>
    </section>

    <a href="adminSheet1.html">okay</a>
    
</body>
</html>