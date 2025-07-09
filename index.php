<?php
// vulnerable.php
$name = $_GET['name'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>XSS Demo</title>
</head>
<body>
    <h1>Hello, <?php echo $name; ?>!</h1>
</body>
</html>
