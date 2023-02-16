<!-- Edit -->
<?php
$id = $_GET['id'];

include_once('connection.php');
$sql = "SELECT * FROM student WHERE id=$id";
$query = $conn->query($sql);
$row = $query->fetch_assoc();

?>
<div id="edit_<?php echo $row['id']; ?>">
   
           
                <center><h1>Edit Student Data</h1></center>
  

			<form method="POST" action="edit.php">

				<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
				
						<label>Firstname:</label>
					
						<input type="text" name="firstname" value="<?php echo $row['firstname']; ?>">
					
						<label>Lastname:</label>
					
						<input type="text" name="lastname" value="<?php echo $row['lastname']; ?>">
					
						<label>Address:</label>
					
						<input type="text" name="address" value="<?php echo $row['address']; ?>">
						<br>

            
                <button type="submit" name="edit" > Update</button>
			</form>
            </div>

        </div>
    </div>
</div>
</div>
