<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
</head>

<body>


<?php

$conn = new PDO("mysql:host=localhost;dbname=rocama", "root", "root");
$sql="select email from email";

foreach($conn->query($sql, PDO::FETCH_ASSOC) as $simos){
	$mail=mail($simos['email'],$_POST['subject'],$_POST['msg']);
    echo $simos['email'];
     if($mail){
        echo "success";
    } else {
        echo "failed."; 
    }

}


?>	 
</form>



</body>

</html>