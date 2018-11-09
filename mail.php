 <?php

    $conn = new PDO("mysql:host=localhost;dbname=ROCAMA", "root", "root");

    $email= $_POST['email'];

    $sql = "INSERT INTO email (email) VALUES (?)";

    $prepared = $conn->prepare($sql);
    
    $prepared->execute([$email]);

?>

