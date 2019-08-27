<html>

<head>
	<title>Leaderboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Anton&display=swap" rel="stylesheet">


	<script defer src="https://use.fontawesome.com/releases/v5.0.7/js//all.js"></script>
	<link rel="stylesheet" type="text/css" href="hacker.css">
</head>

<body>
	<section id="section_2">
		<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #543864;">

			<a class="navbar-brand" href="#">TRF Leaderboard</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#har" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="har">
				<ul class="navbar-nav ml-auto">

					<li class="nav-item active"><a class="nav-link" href="#">Home</a></li>

					<li class="nav-item active"><a class="nav-link" href="#">Contact</a></li>
				</ul>
			</div>
		</nav>
	</section>
	<h1 style="text-align: center;">TRF Leaderboard<h2 style="text-align: center;">(Algorithms)</h2>
	</h1>
	<div >
	<h2 style="text-align : center;">Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rank</h2>
	</div>
	


	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hackerrank";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM lead ORDER by rank ASC";
$result = $conn->query($sql);
		echo "<div class='new'>";
		echo "<section class='jumbotron container'>";
		echo "<div class='row'>";
		
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		echo "<div class='col-6'>";
		echo "<ul class='list-group'>";
		echo "<li class='list-group-item'>".$row['name']."</li>";
		echo "</ul>";
		echo "</div>";
		
		echo "<div class='col-6'>";
		echo "<ul class='list-group'>";
		echo "<li class='list-group-item'>".$row['rank']."</li>";
		echo "</ul>";
		echo "</div>";
		
    }
	
	echo "</div>";
	echo "</section>";
	echo "</div>";
} 
$conn->close();
?>


</body>

</html>
