<?php 
include_once("conn.php");
if($_GET['id']){
?>

						<div class="form-group" >
						<label>Batch</label>
						<div class="form-group">
						<select name="batch" class="form-control"  >
						<option value="">All Batch</option>
						<?php
						$b = mysqli_query($conn,"select * from course_batch where course_id =".$_GET['id']);
						while($row = mysqli_fetch_array($b))
						{
						?>
						<option value="<?php echo $row['batch_name']; ?>"><?php echo $row['batch_name']; ?></option>
						<?php } ?>
						</select>
						</div>
						</div>
						
<?php } ?>