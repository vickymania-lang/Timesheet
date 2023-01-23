<?php

$conn = mysqli_connect('localhost', 'root', '', 'timesheet') or die ('unable to connect');



if(isset($_POST['submit'])){

        If (empty($_POST ["Name"])){
            die('Name list required');
        }else {
        $Name = $_POST ["Name"];
        };

        // If (empty($_POST ["Date"])){
        //     die('Date required');
        // }else {
        // $Date = $_POST ["Date"];
        // };



        If (empty($_POST ["Task_Category"])){
            die('Task Category title required');
        }else {
        $Task_Category = $_POST ["Task_Category"];
        };



        If (empty($_POST ["Sub_Category"])){
            die('Sub Category  required');
        }else {
        $Sub_Category = $_POST ["Sub_Category"];
        };


        // database insert SQL code
        $stmt = $conn -> prepare ("INSERT INTO dashboard (Name, Task_Category, Sub_Category) VALUES (?, ?, ?)");
        $stmt->bind_param("sss",  $Name, $Task_Category, $Sub_Category);

        $stmt->execute();

        header('Location: dashboard1.php');



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

</head>
<body>
    <section>
        <div class="containers">
            <form class="container" action="" method="POST">

                <label for="fname">Name</label><br>
                <input type="text" id="fname" name="Name" placeholder="Name"><br>
                <!-- <label for="lname">Date</label><br> -->
                <!-- <input style="width: 590px; height: 40px;" type="date" id="lname" name="Date" value="<?php echo $date_reg; ?>"><br><br> -->
                <label for="lname">Task Category</label><br>
                <input type="text" id="lname" name="Task_Category" placeholder="Task Category"><br><br>
                <label for="lname">Sub Category</label><br>
                <input type="text" id="lname" name="Sub_Category" placeholder="Sub Category"><br><br>
                <button style="width: 20%; text-align: center;" name="submit"" type="submit">Save</button>

              </form> 

        </div>
    </section>

    <a href="details.html">okay</a>

    
</body>
</html>