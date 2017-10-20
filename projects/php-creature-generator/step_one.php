<?php 
// Page Title 
$page_title = 'Creature Generator';
require_once 'includes/header.php'; 
?>
<body>
	<main>
		<div id="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-sm-offset-3">
					<h1>Seneca College - Webmaster Program</h1>
					<h2>Creature Generator</h2>
					<p>Generate your create name with this simple tool!</p>
					<h3>Step One: Information Gathering</h3>
					<p>Please enter your name first!</p>
					<!-- Main Form -->
					<form id="mainForm" method="post" action="step_two.php">
						<div class="form-group has-feedback">
							<label for="name">Name:</label>
							<input type="text" name="name" id="name" class="form-control">
						</div>
						<p>Then choose your creature type!</p>
						<div class="form-group">
							<label class="control-label" for="alien">Alien</label>
							<input type="radio" name="creature_type" id="alien" value="alien">
							<label class="control-label" for="robot">Robot</label>
							<input type="radio" name="creature_type" id="robot" value="robot">
						</div>
						<div class="form-group text-center">
							<button type="submit" class="btn btn-primary">To Step 2!</button>
						</div>
					</form>
					<?php
						// PHP Validation
						if (isset($_REQUEST['success'])) {
							echo '<p id="error-message" class="text-center"><strong>';
							echo "Please fill out all the fields above!";
							echo '</strong></p>';
						}
					?>
				</div>
			</div>
		</div>
	</main>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script>
		$(document).ready(function() {
			// Javascript Validation Form Effects
			var name = $('#name');
			var feedback = document.createElement('span');
			
			name.on('input', function() {
				if (name.val() == '') {
				name.parent('div').removeClass('has-success');
				name.parent('div').addClass('has-error');
				name.after(feedback).next().removeClass('glyphicon-ok');
				name.after(feedback).next().addClass('glyphicon glyphicon-remove form-control-feedback');
				} else {
					name.parent('div').removeClass('has-error');
					name.parent('div').addClass('has-success');
					name.after(feedback).next().removeClass('glyphicon-remove');
					name.after(feedback).next().addClass('glyphicon glyphicon-ok form-control-feedback');
				}	
			});
		});
	</script>
	<?php
	require_once 'includes/footer.php';
	?>
