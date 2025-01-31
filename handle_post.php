<?php
//Taking data using POST method
if(isset($_POST['name']) && isset($_POST['age'])){
    $name = $_POST['name'];
    $age = $_POST['age'];

    echo "<h1>POST Method Result.</h1>";
    echo "<p>Name: $name</p>";
    echo "<p>Age: $age</p>";
}else{
    echo "<p>Invalid request!</p>";
}
?>