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
				<h2>Decision Tree</h2>
				<p>A decision tree is a non-parametric supervised learning algorithm, which is utilized for both classification and regression tasks. It has a hierarchical, tree structure, which consists of a root node, branches, internal nodes and leaf nodes.</p>
				<p>As you can see from the diagram , a decision tree starts with a root node, which does not have any incoming branches. The outgoing branches from the root node then feed into the internal nodes, also known as decision nodes. Based on the available features, both node types conduct evaluations to form homogenous subsets, which are denoted by leaf nodes, or terminal nodes. The leaf nodes represent all the possible outcomes within the dataset..</p>
			</div>
			<div class="col-md-4">
				<img src="https://www.researchgate.net/profile/Roberto-Morales-13/publication/330262276/figure/fig1/AS:738923085066245@1553184400475/Decision-Tree-Structure-Martinez-et-al-2009.png" alt="Linear Regression" class="picture" style="padding-right: 80px;">
			</div>
		</div>
	</div>
	<br>
	<br>
	<div class="container">
		<h2>Prediction using Decision Tree</h2>
		<p>
			<b>The Decision Tree model is built in Python</b>.The model is trained on 'heart.csv' file which contains 
			14 fields as age, gender, cp, trestbps, chol, fbs, restecg, thalach, exang, oldpeak, slope, ca, thal, target.But the model 
			is built only based on two predictors-age and cholesterol.The page executes the python model passing the input arguments
			and predicts whether the person is prone to disease or not.This is just a demonstartion of the  model,hence the 
			output depends on only two fields.
		</p>
		<form method="post" action="">
			<div class="form-group">
				<label for="input1">Enter Age</label>
				<input type="text" class="form-control" id="Hours" name="hours" placeholder="Enter Your Age">
			</div>
			<div class="form-group">
				<label for="input1">Select Cholesterol level</label>
				<input type="text" class="form-control" id="chol" name="chol" placeholder="Enter Your Cholesterol level">
			</div>
			<button type="submit" name="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
	<?php
	if(isset($_POST['submit'])){
		$hours=floatval($_POST['hours']);
        $chol=floatval($_POST['chol']);
        $command = escapeshellcmd('python model.py ' . $hours.' '.$chol);
        $ans = exec($command);
        if($ans=='[0]'){
            $ans="No Disease";
        }else{
            $ans="Yes";
        }
	echo "<div class='container'>
	<h4>Predicted Disease: $ans</h4>
	</div>";
}
	?>
</body>
</html>
