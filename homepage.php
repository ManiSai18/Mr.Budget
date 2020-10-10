<?php
  include("includes/common.php");
  if (! isset($_SESSION['email'])) {
    header('location: index.php');
  }

$user_id = $_SESSION['user_id'];
$query = "SELECT plan_id  FROM plan_details WHERE user_id='" . $user_id . "' ";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
if ($num > 0)  {
    header('location: plan.php');
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="homepage.css">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/homepage.css">
</head>
<body>
    <?php include("./includes/header.php"); ?>
    
        <div class="container">
            <h1 class="p1">You don't have any Active plans</h1>
            <div class="panel panel-default">
                <div class="panel-body ">
                    <a href="create_plan.php" class="text"><span class="glyphicon glyphicon-plus-sign"></span>Create New Plan</a>
                </div>
            </div>
        </div> 
    <?php include("includes/footer.php");?>
</body>
</html>
