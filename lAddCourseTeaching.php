<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Add Course Teaching</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<a href="index.php?page=lCourseTeaching" class="btn btn-primary">List Course Teaching</a>
			</div>
		</div><br><br>
		<div class="row">
			<form action="index.php?page=lAddCourseTeaching" method="get">
			<input type="hidden" name="page" value="<?php echo $_GET['page']; ?>">
			<div class="col-lg-3" align="right">
					<b>Course Code:</b>
			</div>
			<div class="col-lg-4">
				<div class="input-group custom-search-form">
					<input type="text" class="form-control" placeholder="Search..." 
					name="searchC" value="<?php if(isset($_GET['searchC'])) echo $_GET['searchC']; ?>">
					<span class="input-group-btn">
						<button class="btn btn-default" type="submit">
							<i class="fa fa-search"></i>
						</button>
					</span>
				</div>
			</div>
			</form>
		</div><br>
		<div class="row">
			<form action="index.php?page=lAddCourseTeaching" method="get">
			<input type="hidden" name="page" value="<?php echo $_GET['page']; ?>">
			<div class="col-lg-3" align="right">
					<b>Course Name:</b>
			</div>
			<div class="col-lg-4">
				<div class="input-group custom-search-form">
					<input type="text" class="form-control" placeholder="Search..." 
					name="search" value="<?php if(isset($_GET['search'])) echo $_GET['search']; ?>">
					<span class="input-group-btn">
						<button class="btn btn-default" type="submit">
							<i class="fa fa-search"></i>
						</button>
					</span>
				</div>
			</div>
			</form>
		</div><br><br><br>
		<?php
		if(!isset($_GET['search'])&&!isset($_GET['searchC'])){
		?>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover">
						<tr>
							<th width="20">No.</th>
							<th width="150">Course Code</th>
							<th>Course Names</th>
							<th>Action</th>
						</tr>
						<?php
						$result = mysql_query("SELECT * FROM course");
						$i = 1;
						while($row = mysql_fetch_array($result)){
							echo "<tr>";
							echo "<td>$i</td>";
							echo "<td>".$row['courseID']."</td>";
							echo "<td>".$row['courseName']."</td>";
							echo "<td><a href='index.php?page=lAddCourseTeaching1&id=".$row['courseID']."' class='btn btn-info'>View</a></td>";
							echo "</tr>";
							$i++;
						}
						?>
					</table>
				</div>
			</div>
		</div>
		<?php
		}
		else{
		?>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover">
						<tr>
							<th width="20">No.</th>
							<th width="150">Course Code</th>
							<th>Course Name</th>
							<th>Action</th>
						</tr>
						<?php
						$search = "";
						if(isset($_GET['search'])){
							$search = mysql_real_escape_string($_GET['search']);
							$result = mysql_query("SELECT * FROM course WHERE courseName LIKE '%$search%'");
						}
						elseif(isset($_GET['searchC'])){
							$search = mysql_real_escape_string($_GET['searchC']);
							$result = mysql_query("SELECT * FROM course WHERE courseID LIKE '%$search%'");
						}
						else{
							header("Location: index.php?page=lAddCourseTeaching");
						}

						$i = 1;
						while($row = mysql_fetch_array($result)){
							echo "<tr>";
							echo "<td>$i</td>";
							echo "<td>".$row['courseID']."</td>";
							echo "<td>".$row['courseName']."</td>";
							echo "<td><a href='index.php?page=lAddCourseTeaching1&id=".$row['courseID']."' class='btn btn-info''>View</a></td>";
							echo "</tr>";
							$i++;
						}
						?>
					</table>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
</div>




