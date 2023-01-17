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
	<title>Admin details</title>
	<link rel="stylesheet"
		href="css/style1.css">
	<link rel="stylesheet"
		href="responsive.css">
        <link href="https://www.bootstrapcdn.com/#tab_fontawesome:~:text=%3Clink%20rel%3D%22stylesheet%22%20href%3D%22https%3A//cdn.jsdelivr.net/npm/bootstrap%405.2.3/dist/css/bootstrap.min.css%22%20integrity%3D%22sha384%2DrbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65%22%20crossorigin%3D%22anonymous%22%3E">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		table,
		th,
		td {
			/* border: 1px solid black; */
			border-collapse: collapse;
		}
		 
		th,
		td {
			padding: 10px;
		}

    .avatar{
        width:50px;
        height:50px;
        border-radius:50%;
        font-size:20px;
        padding:auto;
        color: white;
		background-color: green;
		text-align: center;
    }
		</style>

   
</head>

<body>

	<!-- for header part -->
	<header>

		<div class="logosec">
            <img src="image/cctimesheet_logo.png" />
		
		</div>

	

		<div class="message">
			<div class="circle"></div>
			
			<div class="dp">
			<img src="image/pic.png"
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

					<div class="report-topic-heading">


                
                    </div>

					</div>

					<table style="width:100%">
					<tr style='text-align: left;'>
						<th></th>
						<th>Name</th>
						<th>Project Name</th>
						<th></th>
     			   </tr>

					<?php while($row = mysqli_fetch_array($search_result)):?>
							<tr style='text-align: left;'>
								<td><div class='avatar'><?php echo substr($row['Name'],0,1);?></div></td>
								<td><?php echo $row['Name'];?></td>
								<td><?php echo $row['Project_Name'];?></td>
								<td><i class="fa fa-eye fa-lg"></i></td>

							</tr>
      			 	 <?php endwhile;?>
						
					</table>
            

					
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

    <a href="adminsheetall.html">okay</a>

</body>
</html>
