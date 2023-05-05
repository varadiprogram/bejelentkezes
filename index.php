<?php

include("database.php");

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
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

        <h2>Neuro register</h2><br>
        username:
        <input type="text" name="username">
        <br>
        <br>
        password:

        <input type="password" name="password">
        <br>
        <br>
        <input type="submit" name="submit" value="register">
    </form>
</body>

</html>


<?php

if($_SERVER["REQUEST_METHOD"] == "POST" ){

$username = filter_input(INPUT_POST , "username", FILTER_SANITIZE_SPECIAL_CHARS);
$password = filter_input(INPUT_POST , "password", FILTER_SANITIZE_SPECIAL_CHARS);




    if(empty($username )){
        echo"Válasz ki egy felhasználónevet <br>";
    }
    elseif(empty($password)){
        echo"Válasz ki egy jelszót <br>";

}

else{
    
$sql = "INSERT INTO users (user, password)
VALUES ('$username' , '$password')";

try{
   
mysqli_query($conn, $sql);
echo"Sikeresen bejelentkeztél";

}
catch(mysqli_sql_exception){
    echo"fogalat felhasználónév vagy jelszó";
}

}

}


mysqli_close($conn);
?>