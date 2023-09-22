<html>
	<head>
		<link rel="shortcut icon" href="icons/Logo.png" type="image/x-icon" />
        <link rel="stylesheet" href="css/man-main.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<script src="jquery-3.6.0.min.js"></script>
		<script src="javascript/manufacturer.js"></script>
		<title>Pharmacy</title>
	<head>
	<body>
		<?php
			include("php/manu.php");
		?>	
		<ul class="side-bar">
			<dev>
                    <img class="main-logo" src="icons/Logo.png" width="375px" >
            </dev>
			<div class="container1" onclick="myFunction(this)">
				<div class="bar1"></div>
				<div class="bar2"></div>
				<div class="bar3"></div>
			</div>
			<li>
                <dev id="text">
				    <a class="Dashboard" href="Dashboard.php"><img class="icon" src="icons/icons8-dashboard-60.png"><span>Dashboard</span></a>
                </dev>    
            </li>
			<li>
                <dev id="text">
                    <a class="Medicines" href="Medicine stock.php"><img class="icon" src="icons/icons8-medicines-64.png"><span>Medicines</span></a>
                </dev>
			</li>
			<li>
                <dev id="text">
                    <a class="customer" href="Customers 1.php"><img class="icon" src="icons/icons8-customers-64.png"><span>Customer</span></a>
                </dev>
			</li>
			<li>
                <dev id="text">
                    <a class="active" href="Manufacturer.php"><img class="icon" src="icons/icons8-manufacturing-48.png"><span>Manufacturer</span></a>
                </dev>
			</li>
			<li>
                <dev id="text">
                    <a class="employee" href="Employees.php"><img class="icon" src="icons/icons8-employees-64.png"><span>Employees</span></a>
                </dev>  
			</li>
            <li>
                <dev id="text">
                    <a class="logout" href="index.php"><img class="icon" src="icons/icons8-logout-48.png"><span>logout</span></a>
                </dev>  
			</li>
		</ul>
		<div id="main-content">
            <h2><img id="page-name-logo" src="icons/icons8-manufacturing-48.png" height="35" width="35"><span>Manufacturer</span></h1>
        </div>
		<div id="content">
		<form method="post">
			<input type="text" placeholder="search" id="search">
			<label id="search-label"><h3>Search:</h3></label>
			<div id="table-size">
				<table id="table">
					<tr id="table-header">
						<th>Company id</th>
						<th>Company name</th>
						<th>Phone</th>
						<th>Address</th>
					</tr>
					<?php
							while ( $row = mysqli_fetch_array($result) )
							{
								echo "<tr>";
									echo "<td>".$row[0]."</td>";
									echo "<td>".$row[1]."</td>";
									echo "<td>".$row[2]."</td>";
									echo "<td>".$row[3]."</td>";
								echo "</tr>";
							}
						?>
				</table>
			</div>		
				<label id="ci-label"><h3>Company ID:</h3></label>
				<input type="text" id="Company-id" name="compID" readonly style="background:#cccccc;">
				<label id="cn-label"><h3>Company Name:</h3></label>
				<input type="text" placeholder="Company name" id="Company-name" name="compName">
				<label id="p-label"><h3>Phone:</h3></label>
				<input type="number" placeholder="Phone" id="Phone" name="compPhone">
				<label id="a-label"><h3>Address:</h3></label>
				<input type="text" placeholder="Address" id="Address" name="compAddress">
				<div id="button-padding">
				<button type="submit" class="rainbow-button" onclick="addHtmlTableRow();" id="add" name="add"><img id="iconadd" src="icons/icons8-add-30.png">Add</button>
				<button type="submit" class="rainbow-button" onclick="updateHtmlTableSelectedRow();" id="update" name="update"><img id="iconupdate" src="icons/icons8-available-updates-30.png">Update</button>
				<button type="submit" class="rainbow-button" onclick="deleteSelectedRow();" id="delete" name="delete"><img id="icondelete" src="icons/icons8-delete-32.png">Delete</button>
				</div>
			</form>
		</div>
		<script src="jquery-3.6.0.min.js"></script>
		<script src="javascript/manufacturer.js"></script>
	<body>
<html>