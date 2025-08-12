<?php
declare(strict_types=1);

// index.php — يعرض الوقت الحالي على الخادم  ويعرض رابط صفحة تعبئة النموذج وصفحة  عرض النتائج 

?>
<!doctype html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>الصفحة الرئيسية</title>
</head>
<body>
    <h1>الوقت الحالي على الخادم</h1>
    <p>الوقت: <?php echo htmlspecialchars((string) date('Y-m-d H:i:s')); ?></p>

    <ul>
        <li><a href="info_form.php">نموذج تعبئة الاسم  واختيار اللون المفضل</a></li>
        <li><a href="resault.php">صفحة عرض نتيجة الاسم </a></li>
    </ul>
</body>
</html>