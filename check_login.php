<?php
session_start();
 if(isset($_SESSION['UserName'])){
        //echo "already";
    }

//echo "<table style='border: solid 1px black;'>";
//echo "<tr><th>Id</th><th>username</th><th>password</th><th>timestamp</th></tr>";
$servername = "localhost";
$dbname = "xenon_act";
$username = "SLK";
$password = "ting0518";

$value_acc=$_POST['acc'];
$value_pw=md5($_POST['pw']);
$sql ="SELECT count(*) FROM `acc` WHERE acc='".$value_acc."' and pw ='".$value_pw."'";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$query    = $conn->query($sql);
    $data = $query->fetch();
    if ($data[0] >0){
        echo "you are loggin now ";
        $_SESSION['UserName']=$value_acc;
		echo $_SESSION['UserName'];
    }
    else { 
        // echo "請檢查帳號密碼";
        header("Refresh: 1 ; url=login.php?q=1");
    }

    // use exec() because no results are returned
    // $conn->exec($sql);
    }
catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
//要做LOG OUT 攻能
?>
