<?php

session_start();

if(isset($_POST))
{
    // $valueToSearch = $_POST['valueToSearch'];
    // $query = "SELECT * FROM `dashboard` WHERE CONCAT(`Date`) LIKE '%".$valueToSearch."%'";
    $query = "SELECT * FROM `dashboard`";

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




// if(isset($_POST['search']))
// {
//     // $valueToSearch = $_POST['valueToSearch'];
//     // $query = "SELECT * FROM `dashboard` WHERE CONCAT(`Date`) LIKE '%".$valueToSearch."%'";
//     $search_result = filterTable($query);
    
// }
//  else {
//     $query = "SELECT * FROM `dashboard`";
//     $search_result = filterTable($query);
// }

// // function to connect and execute the query
// function filterTable($query)
// {
//     $connect = mysqli_connect("localhost", "root", "", "timesheet");
//     $filter_Result = mysqli_query($connect, $query);
//     return $filter_Result;
// }

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

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>


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

	<!-- for header part -->
	<header>

		<div class="logosec">
            <img style="width: 170px;" src="image/cctimesheet_logo.png" />
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
					<div style="background-color: white; border-left: grey;" class="nav-option">
						<img src="image/dashboard.png"
							class="nav-img"
							alt="dashboard">
						
							<a style="text-decoration: none; color: green; position: relative; left: -15px;" href="adminSheet1.html">
						<h3> Dashboard</h3>
							</a>
					</div>

					<div style="background-color: white;" class="option2 nav-option">
						<img src="image/cal.png"
							class="nav-img"
							alt="articles">
							<a style="text-decoration: none; color: green; position: relative; left: -15px; " href="dashboard1.php">
						<h3> Time</h3>
							</a>
					</div>

					<div style="background-color: white;" class="nav-option option3">
						<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png"
							class="nav-img"
							alt="report">
							<a style="text-decoration: none; color: green; position: relative; left: -15px; " href="adminsheetlist.php">
						<h3> Admin</h3>
							</a>
						
					</div>


				</div>
			</nav>
		</div>
		<div class="main">

			<div style="margin: 10px auto 0px auto;" class="report-container">
				<div class="report-header">
					<h1 class="recent-Articles">Timesheet</h1>
					<!-- <button class="view">View All</button> -->
				</div>

				<div class="report-body">

					<div>
						<form action="dashboard1.php" method="post">
                       
                        <!-- <h5>Filter By</h5> -->
						<div style="display: flex; margin: 20px; padding: 0px 50px">
							<div id="filters" class="dropdown" style="padding: 0px 50px">
							<select style="width: 150px; height: 40px;" name="fetchval" id="fetchval">
									<option value=""disabled="" selected="" >Select Filter</option>
									<option value="Daily">Daily</option>
									<option value="Weekly">Weekly</option>
									<option value="All">All</option>
								</select>
					
							<!-- <input type="submit" name="search" value="Filter"> -->
							</div>
							<div id="filters" style="padding: 0px 50px;" stlye="display; flex;">
							<select style="width: 150px; height: 40px;" name="fetchval" id="fetchval">
									<option value="dave"></option>
									<option value="dave">Monday</option>
									<option value="pumpernickel">Tuesday</option>
									<option value="reeses">Wednessday</option>
									<option value="reeses">Thursday</option>
									<option value="reeses">Friday</option>
								</select>
						
							<input type="submit" name="search" value="Filter">
							</div>
							<div style="padding: 0px 50px; position: relative; top: -15px;" stlye="display; flex;">
							<a href="save.php">
							<button style="width: 60px;" type="button" class="btn btn-primary">Add</button>
							</a>
							</div>
						</div>

						
					

	<table class="container_table" style="width:100%">


		

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
                    <td><?php echo $row['date_applied'];?></td>
                    <td><?php echo $row['Name'];?></td>
                    <td><?php echo $row['Task_Category'];?></td>
                    <td><?php echo $row['Sub_Category'];?></td>
                    <td>2.0</td>
                    <td><a href="details.php?user_id=<?php echo $row['id']; ?> "><i class="fa fa-eye fa-lg"></i></a></td>

                </tr>
        <?php endwhile;?>

      
    </table>

		</form>
                           
                     
				
				</div>
			</div>
		</div>
	</div>


	

<script type="text/javascript">
		$(document).ready(function(){
			$("#fetchval").on('change', function() {
				var value = $(this).val();
				// alert(value);

				$.ajax({
					url: "fetch.php",
					type: "POST",
					data: 'request=' + value,
					beforeSend: function() {
						$(".container_table").html("<span>working...</span>");
					},
					success:function(data){
						$(".container_table").html(data);
					}
					
				});

			})
		} );


	</script>

					<script>
			let menuicn = document.querySelector(".menuicn");
			let nav = document.querySelector(".navcontainer");

			menuicn.addEventListener("click",()=>
			{
				nav.classList.toggle("navclose");
			})
			
	<script src="./index.js"></script>


</body>
</html>