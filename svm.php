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
				<h2>Support Vector Machine</h2>
				<p>Support Vector Machines (SVMs) are a type of supervised learning algorithm that can be used for classification or regression tasks. The main idea behind SVMs is to find a
                     hyperplane that maximally separates the different classes in the training data. This is done by finding the hyperplane that has the largest margin, which is defined as the distance between the hyperplane and the closest data points from each class. Once the hyperplane is determined, new data can be classified by determining on which side of the hyperplane it falls. SVMs are particularly useful when the data has many features, and/or when there is a clear margin of separation in the data..</p>
			</div>
			<div class="col-md-4">
				<img src="https://static.javatpoint.com/tutorial/machine-learning/images/support-vector-machine-algorithm5.png" alt="Linear Regression" class="picture" style="padding-right: 80px;">
			</div>
		</div>
	</div>
	<br>
	<br>
	<div class="container">
		<h2>Prediction using SVM </h2>
		<p>
		<b>The model here is built in PHP using the data from Database</b>.In PHP, you can use the PHP-ML library to implement SVMs on your datasets. To build a PHP SVM model, you need to retrieve a dataset, preprocess the data,
		 split it into training and testing sets, and use the SVC class to train your SVM model. You can then use it to classify new data points and evaluate the
		accuracy and performance of your model.Here,The database consists of 'social media ads' containing information about the age,sal,gender,purchased.This information
		is retrieved from database and is used to train the model.Enter the Age and Salary to predict whether the person buys the product or not.
		</p>
		<form method="post" action="">
			<div class="form-group">
				<label for="input1">Enter Age</small></label>
				<input type="tel" class="form-control" id="age" name="age" placeholder="Enter Age in Numbers">
			</div>
			<div class="form-group">
				<label for="input1">Enter Salary</label>
				<input type="tel" class="form-control" id="sal" name="sal" placeholder="Enter Average Salary">
			</div>
			<button type="submit" name="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
	<?php
		require_once 'vendor/autoload.php';
		use Phpml\Classification\SVC;
		use Phpml\SupportVectorMachine\Kernel;
	if(isset($_POST['submit'])){
		$input1 = $_POST['age'];
        $input2 = $_POST['sal'];
		
		// Establish a database connection
		$host = 'localhost';
		$username = 'root';
		$password = '';
		$database = 'phpml';
		
		$connection = new mysqli($host, $username, $password, $database);
		
		// Check if connection was successful
		if ($connection->connect_error) {
			die('Connection failed: ' . $connection->connect_error);
		}
		
		// Fetch data from the database
		$query = "SELECT age, salary, purchased FROM users";
		$result = $connection->query($query);
		
		// Prepare dataset
		$features = [];
		$labels = [];
		
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				$features[] = [$row['age'], $row['salary']];
				$labels[] = $row['purchased'];
			}
		}
		

		// Train an SVC model on the dataset
		$classifier = new SVC(Kernel::LINEAR, $cost = 1000);
		$classifier->train($features,$labels);
		
		$newFeature = [$input1,$input2];
		// Make predictions on the testing set
		$prediction = $classifier->predict($newFeature);
		if($prediction=='0'){
			$ans="Will Not Purchase";
		}else{
			$ans="Will Purchase";
		}
		echo "<div class='container'>
		<h4>Predicted Disease: $ans</h4>
		</div>";

}
	?>
</body>
</html>