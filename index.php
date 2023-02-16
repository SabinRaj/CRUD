<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>SABIN</title>
	<link rel="stylesheet" type="text/css"
	 href="bootstrap/css/bootstrap.min.css">
	
	<style>
		.height10{
			height:10px;
		}
		.mtop10{
			margin-top:10px;
		}
		.modal-label{
			position:relative;
			top:7px
		}
	</style>
</head>
<body>

	<h1>CRUD Operation Using Mysql and php</h1>

			
			
					<a href="addnew.php" > ADD STUDENTS</a><br><br>
				<table id="myTable" >
 					<thead>  
 						<!-- thead tag is used to group header content in an HTML table -->
						<th>ID</th>
						<th>Firstname</th>
						<th>Lastname</th>
						<th>Address</th>
						<th>Action</th>
					</thead>
				
						<?php
							include_once('connection.php');
							$sql = "SELECT * FROM student";

							
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								?>
								<tr>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['firstname'];  ?></td>
								<td><?php echo $row['lastname']; ?></td>
								<td><?php echo $row['address']; ?></td>
								<td>
								<a href="editdata.php?id=<?=$row['id'] ?>">EDIT</a> 
								||  <a href="delete.php?id=<?=$row['id'] ?>">DELELE</a></td>
							</tr>
							<?php
							}

						?>
					<tbody>
				</table>
<!-- 
<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>


<script>
$(document).ready(function(){
    $('#myTable').DataTable();
    }); -->

    //DataTables is a jQuery plugin that can be used for adding interactive and advanced controls to HTML tables for the webpage. This also allows the data in the table to be searched, sorted, and filtered according to the needs of the user. 


</script>
</body>
<footer><div class="PP"><p><b>SABIN RAJ BAGALE</b></p></div></footer>
<style>
.PP{
	text-align: center;
	color: red;
}
</style>
</html>
