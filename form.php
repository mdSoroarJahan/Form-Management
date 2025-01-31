<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<body>
    <h1>From Handling Example</h1>

    <!-- GET Method Form -->
     <h2>GET Method Form</h2>
     <form action="handle_get.php" method="GET">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>
        <br><br>
        <button type="submit">Submit</button>
     </form>
     <hr>

     <!-- Post Method From -->
      <h2>POST Method Form</h2>
      <form action="handle_post.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>
        <br><br>
        <button type="submit">Submit</button>
      </form>

</body>
</html>