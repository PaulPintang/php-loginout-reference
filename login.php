<?php
    session_start();
    include "conn.php";

    if(isset($_POST['username']) && isset($_POST['password'])) {
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $username = validate($_POST['username']);
        $password = validate($_POST['password']);
    

        if (empty($username)) {
            header("Location: index.php?error=Username is required");
            exit();
        } else if(empty($password)){
            header("Location: index.php?error=Password is required");
            exit();
        }
        // pag goods su username and pass amo kadi maga execute na code
        else{
            $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

            $result = mysqli_query($db, $sql);

            // binutang ko ide kading insert to database para pag tama lang su username and pass saka lang sya maga insert sa database. 
            // pag sala su username and pass diman da mangyayare na INSERT INTO database.
            if(mysqli_num_rows($result)) {

                 if (isset($_POST['login'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $pc = $_POST['pc'];

                    $query = "INSERT INTO dropusers (username, password, pc) VALUES ('$username', '$password', '$pc')";
                    mysqli_query($db, $query);
                    }  

                    $row = mysqli_fetch_assoc($result);
                    $_SESSION['username'] = $row['username'];
                    // $_SESSION['name'] = $row['name'];
                    $_SESSION['id'] = $row['id'];

                    header('location: home.php');
                    echo "tama";

                }
                    else{
                    header("Location: index.php?error=username and password not match");
                    exit();
              }
            }

    }else{
        header(location: index.php);
        exit();
    }

?>