<?php
declare(strict_types=1);



session_start();

//قراءة النتائج من الجلسة
$result = $_SESSION['result'] ?? null;

if ($result === null) {
//    في حال كانت الجلسة فارغة بدون بيانات نوجه المستخدم الى نموذج الفورم
    header('Location: info_form.php', true, 303);
    exit();
}


$name = htmlspecialchars((string) ($result['name'] ?? 'Guest'));
$color = htmlspecialchars((string) ($result['color'] ?? '#000000'));


unset($_SESSION['result']);
?>
<!doctype html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>result</title>
</head>
<body>
    <h1> <?php echo $name; ?></h1>
    <p>لونك المفضل: <span style="color: <?php echo $color; ?>;"><?php echo $color; ?></span></p>
    <p><a href="index.php">العودة للرئيسية</a></p>
</body>
</html>