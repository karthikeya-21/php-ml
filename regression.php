<?php include('includes/header.php'); ?>
<style type="text/css">
		.info {
			margin-top: 50px;
		}
		.picture {
			margin-top: 50px;
			max-width: 400px;
		}
	</style>
    	<div class="container">
		<div class="row">
			<div class="col-md-8 info">
				<h2>Linear Regression</h2>
				<p>Linear regression is a type of predictive modeling technique used to analyze and model the relationships between two or more variables. It is used to predict a numerical value based on a set of independent variables. The goal of linear regression is to find the line of best fit that minimizes the sum of the squares of the residuals (the difference between the predicted value and the actual value). The equation of the line is y = mx + b, where y is the dependent variable, x is the independent variable, m is the slope of the line, and b is the y-intercept.</p>
				<p>Linear regression is commonly used in fields such as economics, finance, and social sciences to predict outcomes such as stock prices, sales, and population growth.</p>
			</div>
			<div class="col-md-4">
				<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3a/Linear_regression.svg/1280px-Linear_regression.svg.png" alt="Linear Regression" class="picture">
			</div>
		</div>
	</div>
	<div class="container">
		<h2>Prediction using Linear Regression</h2>
		<p>
			You can try a Linear Regression Model Here.<b>The Model is built using php-ml library in PHP</b>.
			LeastSquares model is trained with students marks and no. of hours they study.
			Enter the no. of hours a student studied to get the predicted marks of the student,based on the 
			model built in php.
		</p>
		<form method="post" action="">
			<div class="form-group">
				<label for="input1">Enter No. of Hours</label>
				<input type="text" class="form-control" id="Hours" name="hours" placeholder="Enter Hours">
			</div>
			<button type="submit" name="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
	<?php
	require_once __DIR__ . '/vendor/autoload.php';
	use Phpml\Regression\LeastSquares;
	if(isset($_POST['submit'])){
		$hours=floatval($_POST['hours']);
	// include the PHP-ML library
		$hours=array($hours);
	
	$samples = [[2.5],[5.1],[3.2],[8.5],[3.5],[1.5],[9.2],[5.5],[8.3],[2.7],[7.7],[5.9],
	[4.5],[3.3],[1.1],[8.9],[2.5],[1.9],[6.1],[7.4],[2.7],[4.8],[3.8],[6.9],[7.8]];
	$targets = [21,47,27,75,30,20,88,60,81,25,85,62,41,42,17,95,30,24,67,69,30,54,35,76,86];
	
	$regression = new LeastSquares();
	$regression->train($samples, $targets);
	
	// predict the labels for the testing set
	$ans = $regression->predict($hours);
	echo "<div class='container'>
	<h4>Predicted Marks: $ans</h4></div>";
}
	?>
</body>
</html>

