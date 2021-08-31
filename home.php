<?php
    session_start();

    if (isset($_SESSION['id']) && (isset($_SESSION['username']))) {
        # code...
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HELLO, <?php echo $_SESSION['username'];?></h1>
    <a href="logout.php">
      <button>LOGOUT</button>
    </a>
</body>
</html>
<?php
    }else{
          header("location: index.php");
          exit();
    }

?>