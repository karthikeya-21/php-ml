<?php include('includes/header.php'); ?>
<style>
body {
        font-family: Arial, sans-serif;
        font-size: 16px;
        line-height: 1.5;
        color: #333;
        margin: 0;
        padding: 0;
      }


      .jumbotron h1 {
        color: black;
        text-shadow: 1px 1px 1px #333;
        text-align: center;
      }

      .card-img-top {
        height: 300px;
        object-fit: cover;
      }

      .card {
        margin-bottom: 30px;
      }
    </style>
<div class="jumbotron">
  <h1>Introduction To Machine Learning</h1>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <img class="card-img-top" style="height:fit-content" src="https://miro.medium.com/v2/resize:fit:1400/format:webp/0*7lHSm-TrWkbxckI9.png" alt="Supervised Learning">
            <div class="card-body">
              <h5 class="card-title">Supervised Learning</h5>
              <p class="card-text">Supervised learning is a type of machine learning where the algorithm is trained on labeled data, which consists of input-output pairs. The goal of supervised learning is to learn a function that can map inputs to outputs with a high degree of accuracy.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <img class="card-img-top" style="height:fit-content" src="https://miro.medium.com/v2/resize:fit:1100/format:webp/0*dMW760AWCDbdQW-z.png" alt="Unsupervised Learning">
            <div class="card-body">
              <h5 class="card-title">Unsupervised Learning</h5>
              <p class="card-text">Unsupervised learning is a type of machine learning where the algorithm is trained on unlabeled data, which consists of input data without any corresponding output labels. The goal of unsupervised learning is to find patterns and structure in the data.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container mt-5">
    <div class="row">
      <div class="col-md-6">
        <h2>Classification Methods</h2>
        <p>Classification is a type of supervised learning where the goal is to predict the categorical class labels of new instances based on past observations. There are various classification methods available in machine learning:</p>
        <ul>
          <li>Linear Regression</li>
          <li>Logistic Regression</li>
          <li>Decision Trees</li>
          <li>Random Forests</li>
          <li>Support Vector Machines</li>
          <li>Naive Bayes</li>
          <li>K-Nearest Neighbors</li>
        </ul>
        <p>Each of these methods has its own strengths and weaknesses, and the choice of which method to use depends on the characteristics of the data and the problem at hand.</p>
      </div>
      <div class="col-md-6">
        <img src="classs.jpg" class="img-fluid">
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>Try Out Few Classification Methods</h2>
        <ul>
          <li ><a class="nav-link " href="regression.php"><b>Linear Regression</b></a></li>
          <li ><a class="nav-link " href="dt.php"><b>Decision Tree</b></a></li>
          <li ><a class="nav-link " href="svm.php"><b>Support Vector Machine</b></a></li>
        </ul>
      </div>
    </div>
  </div>
  </div>
</body>
</html>