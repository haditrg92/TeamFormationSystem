<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Analysis of Performance (Learning Style)</h1>
			</div>
		</div>
		<div class="modal fade" id="Visual" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Visual learners</h4>
					</div>
					<div class="modal-body" align="justify">
						<b>Visual learners</b> have two sub-channels-<i>linguistic</i> and <i>spatial</i>. 
						Learners who are <i>visual-linguistic</i> like to learn through written 
						language, such as reading and writing tasks. They remember what 
						has been written down, even if they do not read it more than once. 
						They like to write down directions and pay better attention to 
						lectures if they watch them. Learners who are <i>visual-spatial</i> usually 
						have difficulty with the written language and do better with charts, 
						demonstrations, videos, and other visual materials. They easily 
						visualize faces and places by using their imagination and seldom get 
						lost in new surroundings. To integrate this style into the learning 
						environment:
						<ul>
							<li>Use graphs, charts, illustrations, or other visual aids.</li>
							<li>Include outlines, concept maps, agendas, handouts, etc. for reading and taking notes.</li>
							<li>Include plenty of content in handouts to reread after the learning session.</li>
							<li>Leave white space in handouts for note-taking.</li>
							<li>Invite questions to help them stay alert in auditory environments.</li>
							<li>Post flip charts to show what will come and what has been presented.</li>
							<li>Emphasize key points to cue when to takes notes.</li>
							<li>Eliminate potential distractions.</li>
							<li>Supplement textual information with illustrations whenever possible.</li>
							<li>Have them draw pictures in the margins.</li>
							<li>Have the learners envision the topic or have them act out the subject matter.</li>
						</ul>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<div class="modal fade" id="Auditory" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Auditory learners</h4>
					</div>
					<div class="modal-body" align="justify">
						<b>Auditory learners</b> often talk to themselves. They also may move 
						their lips and read out loud. They may have difficulty with reading 
						and writing tasks. They often do better talking to a colleague or a 
						tape recorder and hearing what was said. To integrate this style into 
						the learning environment:
						<ul>
							<li>Begin new material with a brief explanation of what is coming. 
							Conclude with a summary of what has been covered. This is the old adage of 
							“tell them what they are going to lean, teach them, and tell them what they have learned.”</li>
							<li>Use the Socratic method of lecturing by questioning learners to draw as 
							much information from them as possible and then fill in the gaps with you own expertise.</li>
							<li>Include auditory activities, such as brainstorming, buzz groups, or Jeopardy. 
							Leave plenty of time to debrief activities. This allows them to make connections of 
							what they leaned and how it applies to their situation.</li>
							<li>Have the learners verbalize the questions.</li>
							<li>Develop an internal dialogue between yourself and the learners.</li>
						</ul>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<div class="modal fade" id="Kinesthetic" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Kinesthetic learners</h4>
					</div>
					<div class="modal-body" align="justify">
						<b>Kinesthetic learners</b> do best while touching and moving. It also has 
						two sub-channels: kinesthetic (movement) and tactile (touch). They 
						tend to lose concentration if there is little or no external stimulation 
						or movement. When listening to lectures they may want to take notes 
						for the sake of moving their hands. When reading, they like to scan 
						the material first, and then focus in on the details (get the big picture 
						first). They typically use color high lighters and take notes by 
						drawing pictures, diagrams, or doodling. To integrate this style into 
						the learning environment:
						<ul>
							<li>Use activities that get the learners up and moving.</li>
							<li>Play music, when appropriate, during activities.</li>
							<li>Use colored markers to emphasize key points on flip charts or white boards.</li>
							<li>Give frequent stretch breaks (brain breaks).</li>
							<li>Provide toys such as Koosh balls and Play-Dough to give them 
							something to do with their hands.</li>
							<li>To highlight a point, provide gum, candy, scents, etc. which 
							provides a cross link of scent (aroma) to the topic at hand (scent can be a powerful cue).</li>
							<li>Provide high lighters, colored pens and/or pencils.</li>
							<li>Guide learners through a visualization of complex tasks.</li>
							<li>Have them transfer information from the text to another medium such as a keyboard or a tablet.</li>
						</ul>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover">
						<tr>
							<th>No</th>
							<th>Semester</th>
							<th>Learning Style</th>
						</tr>
						<?php
						$userID = $_SESSION['userID'];
						$result = mysql_query("SELECT * FROM learning_style 
									JOIN semester ON learning_style.semesterID=semester.semesterID 
									WHERE learning_style.studentID='$userID'");
						$i = 1;
						while($row = mysql_fetch_array($result)){
							echo "<tr>";
							echo "<td>$i</td>";
							echo "<td>Semester ".$row['semesterNo']." Session ".$row['semesterSession']."</td>";
							if($row['learningStatus']=="Visual"){
						?>
							<td><button class="btn btn-primary" data-toggle="modal" data-target="#Visual">
								Visual
							</button></td>
							<!-- Modal -->
							
						<?php
							}
							elseif($row['learningStatus']=="Auditory"){
						?>
							<td><button class="btn btn-primary" data-toggle="modal" data-target="#Auditory">
								Auditory
							</button></td>
							<!-- Modal -->
							
						<?php
							}
							elseif($row['learningStatus']=="Kinesthetic"){
						?>
							<td><button class="btn btn-primary" data-toggle="modal" data-target="#Kinesthetic">
								Kinesthetic
							</button></td>
							<!-- Modal -->
							
						<?php
							}
							echo "</tr>";
							$i++;
						}
						$check = mysql_num_rows($result);
						if($check==0){
							echo "<tr>";
							echo "<td colspan='3'><div class='alert alert-danger' align='center'>Please answer the survey</div></td>";
							echo "</tr>";
						}
						?>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>