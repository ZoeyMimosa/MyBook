<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>My PHP Website</title>
</head>
<body>
	<h1>Welcome to the cloud!</h1>
    <form method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <input type="submit" value="Submit">
    </form>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the submitted name value
        $name = $_POST["name"];
        
        // Display a greeting message
        echo "Hello, " . $name . ", welcome to my cloud!";
    }
    ?>
</body>
</html>
