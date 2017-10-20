<?php 
// Page Title
$page_title = 'Generator Results';
require_once 'includes/header.php';
?>

<body>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                <h1 class="text-center">Here are your results!</h1>
                <?php
                    // Getting POST data and assigning values to variables
                    if (!empty($_POST['name']) && !empty($_POST['creature_type'])) {
                        $name = $_POST['name'];
                        $creature_type = $_POST['creature_type'];
                    // Redirect to main page, PHP validation
                    } else {
                        header('Location: step_one.php?success=false');
                    }
                    // Sanitize string function
                    function sanitize ($input) {
                        $input = strip_tags(htmlspecialchars_decode($input));
                        $input = preg_replace('/([?!@$%&*_\-();:])/', ' ', ($input));
                        return $input;
                    }
                    $name = sanitize ($name);
                    // String manipulation
                    $modified_name = ucfirst(strtolower($name));
                    if ($creature_type == 'alien') {
                        $modified_name = $modified_name . '-zilla';
                    }
                    if ($creature_type == 'robot') {
                        $modified_name = $modified_name . '-prime';
                    }
                    // Creating date variable
                    date_default_timezone_set('America/Toronto');
                    $date = date('l F jS\, Y');
                    // Display manipulated string and data data
                    echo '<p class="text-center">';
                    echo "Hey {$modified_name}! The date today is {$date} and it's been a crazy day!";
                    echo '</p>';
                    echo '<p class="text-center">';
                    echo "We're building your creature now, so hold on tight! Feel free to watch some YouTube, play a game, browse Reddit, or study some Javascript while you wait.";
                    echo '</p>';
                ?>
                <button id="reveal" class="btn btn-success center-block">Click here to get your results!</button>
                </div>
                <div id="description" class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <?php
                        // Acquiring array data
                        require_once 'includes/descriptions.php';
                        // Display generated alien image and description
                        if ($creature_type == 'alien') {
                            $description = $alien;
                            echo '<h2 class="text-center">';
                            echo $modified_name;
                            echo '</h2>';
                            echo '<img src="'.$alien_pic.'" alt="alien" class="center-block img-responsive">';
                            echo '<p>';
                            echo $description;
                            echo '</p>';
                        }
                        // Display generated robot image and description
                        if ($creature_type == 'robot') {
                            $description = $robot;
                            echo '<h2 class="text-center">';
                            echo $modified_name;
                            echo '</h2>';
                            echo '<img src="'.$robot_pic.'" alt="robot" class="center-block img-responsive">';
                            echo '<p>';
                            echo $description;
                            echo '</p>';
                        }
                        // PHP Mailer Stuff
                        require_once 'vendors/PHPMailer-master/PHPMailerAutoload.php';
                        // $mail = new PHPMailer;
                        // $mail->setFrom('zhfachang@myseneca.ca', 'Alex Chang');
                        // $mail->addAddress('eric.chen@senecacollege.com', 'Eric Chen');
                        // $mail->Subject = "Creature Generator Results for {$modified_name}";
                        // $mail->isHTML(true);
                        // $mail->Body     = "Name: [{$modified_name}]<br> Creature Type: [{$creature_type}]<br> {$description}";
                        // if(!$mail->send()) {
                        //   echo 'The message was not sent.';
                        //   echo 'Mailer error: ' . $mail->ErrorInfo;
                        // } else {
                        //   echo 'The message has been sent.';
                        // }
                    ?>
                </div>
            </div>
        </div>
    </main>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script>
		$(document).ready(function() {
            // Using display:none with CSS produces better visual effect
            // $('#description').hide();
			$('#reveal').click(function () {
                $('#description').fadeToggle("slow");
            }); 
		});
	</script>
<?php
require_once 'includes/footer.php';
?>