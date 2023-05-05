<?php
include("database.php");

/*   regisztárció


$sql = "INSERT INTO users (user, password)
 VALUES ('$username' , '$password')";
try{
mysqli_query($conn, $sql);
echo"User is registred";
}

catch( mysqli_sql_exception){
    echo"Failed";
}

mysqli_close($conn);*/

/*
$sql = "SELECT * FROM users";  felsorolás
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result )> 0){
while($row = mysqli_fetch_assoc($result)){
    echo $row["id"];
    echo"<br>";
    echo $row["user"];
    echo"<br>";
    echo $row["password"];
};

}

else{
    echo"no users found";
}

mysqli_close($conn);
*/
?>