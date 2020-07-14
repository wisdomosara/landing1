<?php

$email = "";
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $conn = new mysqli("nba02whlntki5w2p.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306", "zsf0luis4r0emanv", "kmh3vl4zg6iuc6bk", "pckf8ocyung0ua7u");
    $sql = "INSERT INTO email value ('$email');";
    if(mysqli_query($conn, $sql))
    {
        echo "successfully";
    }
    else 
    {
        echo "not succeful";
    }
}
?>

<form method=post>
    <input type="email" name="email" />
    <input type="submit" name="submit" />
</form>

<div>
<?php
$conn = new mysqli("localhost", "root", "", "pckf8ocyung0ua7u");
$sql = "SELECT * FROM email";
$result = $conn->query($sql);

if ($result) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>- Email: ". $row["email"]. " " ;
    }
} 
$conn->close();
?>

</div>