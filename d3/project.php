<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Project</title>
    <link rel="stylesheet" type="text/css" href="project.css">
    <script type="text/javascript" src="project.js"></script>
  </head>
  <body>
<?php
  $servername = "localhost";
  $username = "root";
  $dbpass = "root";
  $dbname = "consumdb";

  $id = "";
  $password = "";

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $id = test_input($_POST["id"]); 
  $password = test_input($_POST["password"]);  

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }

  $sql = "SELECT PASSWORD FROM user WHERE id = " . $id;
  $result = $conn->query($sql);
  /*if ($conn->query($sql) === TRUE) {
    echo "success";
  } 
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }*/
  foreach ($result as $i) {
            $data = $i[0];
  }
  if (!empty($result)) {
    if($data != $password) {
      $sql = "INSERT INTO User (id, password) VALUES (" . $id . ", " . $password . ")";
      $conn->query($sql);
      /*if ($conn->query($sql) === TRUE) {
        echo "success";
      } 
      else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }*/
    }
  }
?>

    <div class="head">
      <h1>Record Your Expense</h1>
    </div>

    <div class="topnav">
      <button id="total">Total Consumption</button>
      <button id="meals">Meals Consumption</button>
      <button id="shopping">Shopping Consumption</button>
      <button id="decoration">Decoration Consumption</button>
      <button id="entertainment">Entertainment Consumption</button>
      <button id="else">Other Consumption</button>
      <button id="budget">Left Budget</button>
    </div>

    <div class="card" id="card1">
      <img src="food.jpg" alt="food" style="widows: 100%">
      <div class="container">
        <h1>What did you eat today?</h1>
        <p>
          Try to make your own meal! Here is some recipes for you! 
          <a href="https://www.allrecipes.com/recipes/">Click Here</a>
        </p>
        <p>Enter Your Meals Consumption</p>
        <P><button id="mea">consumption</button></p>
      </div>
    </div>

    <div class="card" id="card2">
      <img src="shopping.jpg" alt="shopping" style="widows: 100%">
      <div class="container">
        <h1>Did you get your needed?</h1>
        <p>
          No idea? Here is the website of Rideau Center! 
          <a href="https://shops.cadillacfairview.com/property/cf-rideau-centre">Click Here</a>
        </p>
        <p>Enter Your Shopping Consumption</p>
        <P><button id="sho">consumption</button></p>
      </div>
    </div>

    <div class="card" id="card3">
      <img src="decoration.jpg" alt="decoration" style="widows: 100%">
      <div class="container">
        <h1>Decorte Your Place</h1>
        <p>
          Time to upgrade your place! Here is the website of IKEA! 
          <a href="https://www.ikea.com/ca/en/stores/ottawa/">Click Here</a>
        </p>
        <p>Enter Your Decoration Consumption</p>
        <P><button id="dec">consumption</button></p>
      </div>
    </div>

    <div class="card" id="card4">
      <img src="entertainment.jpg" alt="entertainment" style="widows: 100%">
      <div class="container">
        <h1>It is the time to relax!</h1>
        <p>
          Want to play some games? Here is the website of Steam! 
          <a href="https://store.steampowered.com/">Click Here</a>
        </p>
        <p>Enter Your Entertainment Consumption</p>
        <P><button id="ent">consumption</button></p>
      </div>
    </div>

    <div class="card" id="card5">
      <img src="else.jpg" alt="else" style="widows: 100%">
      <div class="container">
        <h1>What else did you buy?</h1>
        <p>Your consumption is not one of types above, but you still can record it! </p>
        <P><button id="els">consumption</button></p>
      </div>
    </div>
    
    <div class="card" id="card6">
      <img src="budget.jpg" alt="budget" style="widows: 100%">
      <div class="container">
        <h1>What is your budget?</h1>
        <p>Give yourself a budget amount, try not to exceed it.</p>
        <P><button id="bud">budget</button></p>
      </div>
    </div>
    
  </body>
</html>