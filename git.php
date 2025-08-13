<?php
declare(strict_types=1);


$name = (string) filter_input(INPUT_GET, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
if ($name === '') {
    $name = 'Guest';
}

?>
<!doctype html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>محتوى صفحة git</title>
</head>
<body>
    <h1> <?php echo htmlspecialchars($name); ?>!</h1>
    
    <p><a href="index.php">العودة للرئيسية</a></p>
</body>
</html>