<?php session_start(); ?>
<?php include 'database.php'; ?>
<?php
  // Get Total Questions
  $query = "SELECT * FROM questions";
  // Get results
  $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
  $total = $results->num_rows;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Quizzer</title>
		<link rel="stylesheet" href="css/style.css" type="text/css"/>
	</head>
	<body>
		<header>
			<div class="container title">
				<h1>Quizzer</h1>
			</div>
		</header>
		<main>
			<div class="container">
				<h2>You're Done!</h2>
				<p>Congratulations! You have completed the test.</p>
				<p>Final Score: <?php echo $_SESSION['score']; ?> of <?php echo $total ?> <?php $_SESSION['score'] = 0;?></p>
				<a href="question.php?n=1" class="start">Take Again</a>
			</div>
		</main>
		<footer>
			<div class="container">
				Copyright &copy; 2016, Quizzer
			</div>
		</footer>
	</body>
</html>