<?php
$user = $_SESSION['user'];

if($user=="admin"){
?>
<li>
	<a href="index.php?page=homepage"><i class="fa fa-home fa-fw"></i> Home Page</a>
</li>
<li>
	<a href="#"><i class="glyphicon glyphicon-user -o fa-fw"></i> Register User<span class="fa arrow"></span></a>
	<ul class="nav nav-second-level">
		<li>
			<a href="index.php?page=lecturer">Lecturer</a>
		</li>
		<li>
			<a href="index.php?page=student">Student</a>
		</li>
	</ul>
	<!-- /.nav-second-level -->
</li>
<li>
	<a href="#"><i class="fa fa-group -o fa-fw"></i> Manage Program<span class="fa arrow"></span></a>
	<ul class="nav nav-second-level">
		<li>
			<a href="index.php?page=addClass">Add Program</a>
		</li>
		<li>
			<a href="index.php?page=class">View Program</a>
		</li>
	</ul>
	<!-- /.nav-second-level -->
</li>
<li>
	<a href="#"><i class="glyphicon glyphicon-th-list -o fa-fw"></i> Manage Semester<span class="fa arrow"></span></a>
	<ul class="nav nav-second-level">
		<li>
			<a href="index.php?page=addSemester">Add Semester</a>
		</li>
		<li>
			<a href="index.php?page=semester">View Semester</a>
		</li>
		<li>
			<a href="index.php?page=currentSemester">Current Semester</a>
		</li>
	</ul>
	<!-- /.nav-second-level -->
</li>
<li>
    <a href="#"><i class="glyphicon glyphicon-list -o fa-fw"></i> Manage Course<span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <li>
            <a href="index.php?page=addCourse">Add Course</a>
        </li>
        <li>
            <a href="index.php?page=course">View Course</a>
        </li>
    </ul>
    <!-- /.nav-second-level -->
</li>
<li>
    <a href="#"><i class="fa fa-question -o fa-fw"></i> Question Survey<span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <li>
            <a href="index.php?page=personality">Personality Type</a>
        </li>
        <li>
            <a href="index.php?page=learning">Learning Style</a>
        </li>
    </ul>
    <!-- /.nav-second-level -->
</li>
<li>
	<a href="logout.php"><i class="glyphicon glyphicon-log-out fa-fw"></i> Logout</a>
</li>
<?php
}

elseif($user=="lecturer"){
?>
<li>
	<a href="index.php?page=homepage"><i class="fa fa-home fa-fw"></i> Home Page</a>
</li>
<li>
	<a href="index.php?page=lProfile"><i class="fa fa-user fa-fw"></i> Profile</a>
</li>
<li>
	<a href="#"><i class="fa fa-book fa-fw"></i> Course Teaching<span class="fa arrow"></span></a>
	<ul class="nav nav-second-level">
		<li>
			<a href="index.php?page=lAddCourseTeaching">Add Course Teaching</a>
		</li>
		<li>
			<a href="index.php?page=lCourseTeaching">List Course Teaching</a>
		</li>
	</ul>
	<!-- /.nav-second-level -->
</li>
<li>
	<a href="index.php?page=lGroupFormation"><i class="glyphicon glyphicon-th-list -o fa-fw"></i> Group Formation</a>
</li>
<li>
	<a href="index.php?page=lAnalysis"><i class="fa fa-file-text-o fa-fw"></i> Analysis of Student Performance</a>
</li>
<li>
	<a href="logout.php"><i class="glyphicon glyphicon-log-out fa-fw"></i> Logout</a>
</li>
<?php
}

elseif($user=="student"){
?>
<li>
	<a href="index.php?page=homepage"><i class="fa fa-home fa-fw"></i> Home Page</a>
</li>
<li>
	<a href="index.php?page=sProfile"><i class="fa fa-user fa-fw"></i> Profile</a>
</li>
<li>
	<a href="#"><i class="fa fa-edit fa-fw"></i> Survey<span class="fa arrow"></span></a>
	<ul class="nav nav-second-level">
		<li>
			<a href="index.php?page=surveyPersonality">Personality Type</a>
		</li>
		<li>
			<a href="index.php?page=surveyLearning">Learning Style</a>
		</li>
	</ul>
	<!-- /.nav-second-level -->
</li>
<li>
	<a href="#"><i class="fa fa-book fa-fw"></i> Course Registered<span class="fa arrow"></span></a>
	<ul class="nav nav-second-level">
		<li>
			<a href="index.php?page=sAddCourseRegister">Add Course</a>
		</li>
		<li>
			<a href="index.php?page=sCourseRegister">View Course</a>
		</li>
	</ul>
	<!-- /.nav-second-level -->
</li>
<li>
	<a href="index.php?page=sGroupFormation"><i class="glyphicon glyphicon-th-list fa-fw"></i> Group Formation</a>
</li>
<li>
    <a href="#"><i class="fa fa-files-o fa-fw"></i> Analysis of Performance<span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <li>
            <a href="index.php?page=sAnalysisPersonality">Personality Type</a>
        </li>
        <li>
            <a href="index.php?page=sAnalysisLearning">Learning Style</a>
        </li>
    </ul>
    <!-- /.nav-second-level -->
</li>
<li>
	<a href="logout.php"><i class="glyphicon glyphicon-log-out fa-fw"></i> Logout</a>
</li>
<?php
}
?>