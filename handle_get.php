<?php
//Taking input using get method
if(isset($_GET['name']) && isset($_GET['age'])){
    $name = $_GET['name'];
    $age = $_GET['age'];

    echo "<h1>GET Method Result</h1>";
    echo "<p>Name: $name</p>";
    echo "<p>Age: $age</p>";
}else{
    echo "<p>Invalid Request! Please Submit properly.</p>";
}



?>




"<pre>"
    <?php
    print_r($_GET);
    ?>
"</pre>"