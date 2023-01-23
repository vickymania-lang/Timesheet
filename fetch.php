<?php

$conn = mysqli_connect('localhost', 'root', '', 'timesheet') or die ('unable to connect');

if(isset($_POST['request'])) {

    $request = $_POST['request'];

    $query = "SELECT * FROM dashboard WHERE  date_applied = '$request' ";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);


?>

<table class="table">
    <?php
    if($count) {

    
    ?>

    <thead>

        <tr>
				<th>Date</th>
				<th>Name</th>
				<th>Task Category</th>
				<th>Sub-Category</th>
				<th>Hours</th>
				<th></th>
        </tr>

        <?php
    }else {
        echo "sorry! no record found";
    }    
    ?>
    </thead>
    <tbody>
        <?php
        while($row = mysqli_fetch_assoc($result)){
        ?>
         <tr>
            <td><?php echo $row['date_applied'];?></td>
            <td><?php echo $row['Name'];?></td>
            <td><?php echo $row['Task_Category'];?></td>
            <td><?php echo $row['Sub_Category'];?></td>
            <td>2.0</td>
            <td><a href="details.php?user_id=<?php echo $row['id']; ?> "><i class="fa fa-eye fa-lg"></i></a></td>

        </tr>
        <?php
        }
        ?> 
    </tbody>

</table>

<?php
    }
 ?> 