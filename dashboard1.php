<?php

session_start();



if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    $query = "SELECT * FROM `dashboard` WHERE CONCAT(`Date`, `Name`, `Task_Category`, `Sub_Category`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `dashboard`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "timesheet");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
	<meta name="viewport"
		content="width=device-width,
				initial-scale=1.0">
	<title>Admin detail</title>
	<link rel="stylesheet"
		href="style.css">
	<link rel="stylesheet"
		href="responsive.css">
        <link href="https://www.bootstrapcdn.com/#tab_fontawesome:~:text=%3Clink%20rel%3D%22stylesheet%22%20href%3D%22https%3A//cdn.jsdelivr.net/npm/bootstrap%405.2.3/dist/css/bootstrap.min.css%22%20integrity%3D%22sha384%2DrbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65%22%20crossorigin%3D%22anonymous%22%3E">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="css/style.css">
	<style>
		 table,
		th,
		td {
			border: 1px solid black;
			border-collapse: collapse;
		}
		
		th,
		td {
			padding: 20px;
		}
		
		th {
			text-align: left;
		}
	</style>

 


    </style>
</head>

<body>

	<!-- for header part -->
	<header>

		<div class="logosec">
            <img src="image/cctimesheet_logo.png" />
			<!-- <div class="logo">Name of Company</div> -->
			<!-- <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
				class="icn menuicn"
				id="menuicn"
				alt="menu-icon"> -->
		</div>

		
		<div class="message">
			<div class="circle"></div>
		
			<div class="dp">
			<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png"
					class="dpicn"
					alt="dp">
			</div>
			<h3><?php if (isset(  $_SESSION["Username"])) {echo  $_SESSION["Username"];}?></h3>

		</div>

	</header>

	<div class="main-container">
		<div class="navcontainer">
			<nav class="nav">
				<div class="nav-upper-options">
					<div class="nav-option option1">
						<img src="image/dashboard.png"
							class="nav-img"
							alt="dashboard">
						
							<a style="text-decoration: none; color: white; position: relative; left: -15px;" href="adminSheet1.html">
						<h3> Dashboard</h3>
							</a>
					</div>

					<div style="background-color: green;" class="option2 nav-option">
						<img src="image/cal.png"
							class="nav-img"
							alt="articles">
							<a style="text-decoration: none; color: white; position: relative; left: -15px; " href="dashboard1.php">
						<h3> Time</h3>
							</a>
					</div>

					<div style="background-color: green;" class="nav-option option3">
						<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png"
							class="nav-img"
							alt="report">
							<a style="text-decoration: none; color: white; position: relative; left: -15px; " href="adminsheetlist.php">
						<h3> Admin</h3>
							</a>
						
					</div>


				</div>
			</nav>
		</div>
		<div class="main">


			<div class="report-container">
				<div class="report-header">
					<h1 class="recent-Articles">Timesheet</h1>
					<!-- <button class="view">View All</button> -->
				</div>

				<div class="report-body">

					<div>
						<form action="dashboard1.php" method="post">
                       
                        <!-- <h5>Filter By</h5> -->
						<div style="display: flex; margin: 20px; padding: 0px 50px">
							<div style="padding: 0px 50px">
							<input style="width: 200px;" type="text" name="valueToSearch" placeholder="Value To Search">
							<input type="submit" name="search" value="Filter">
							</div>
							<div stlye="display; flex;">
							<input style="width: 200px;" type="text" name="valueToSearch" placeholder="Value To Search">
							<input type="submit" name="search" value="Filter">
							</div>
						</div>
					

	<table style="width:100%">


		

        <tr>
				<th>Date</th>
				<th>Name</th>
				<th>Task Category</th>
				<th>Sub-Category</th>
				<th>Hours</th>
				<th></th>
        </tr>

		<?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['Date'];?></td>
                    <td><?php echo $row['Name'];?></td>
                    <td><?php echo $row['Task_Category'];?></td>
                    <td><?php echo $row['Sub_Category'];?></td>
                    <td>2.0</td>
                    <td><i class="fa fa-eye fa-lg"></i></td>

                </tr>
        <?php endwhile;?>

      
    </table>

		</form>
                           
                     
				
				</div>
			</div>
		</div>
	</div>
    <script>
        <script>
let menuicn = document.querySelector(".menuicn");
let nav = document.querySelector(".navcontainer");

menuicn.addEventListener("click",()=>
{
	nav.classList.toggle("navclose");
})
</script>

    </script>
	<script src="./index.js"></script>


</body>
</html>