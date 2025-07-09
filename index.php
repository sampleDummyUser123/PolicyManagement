<?php
// vulnerable.php
$name = $_GET['name'];
$other = $_GET['other'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>XSS Demo</title>
</head>
<body>
    <h1>Hello, <?php echo $name; ?>!</h1>
    <h1>Hello, <?php echo $name; ?>!</h1>
    <h1>Hello, <?php echo $name; ?>!</h1>
    <h1>Hello, <?php echo $other; ?>!</h1>
    <h1>Hello, <?php echo $name; ?>!</h1>
    <h1>Hello, <?php echo $name; ?>!</h1>
    <h1>Hello, <?php echo $other; ?>!</h1>
</body>
</html>
