<?php
$sql ="CREATETABLE person(
id INT NOT NULL PRIMARYKEY AUTO_INCREAMENT,
first_name VARCHAR(30) NOT NULL,
last_name VARCHAR(30) NOT NULL,
email VARCHAR(70) NOT NULL UNIQUE
)";
if(mysqli_query($link,$sql)){
    echo"Successful";
}else{
    echo"Couldnot able to execute $sql".mysqli_error($link);
}
mysqli_close($link);
?>