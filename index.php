<?php
declare(strict_types=1);


?>
<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>الصفحة الرئيسية</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-tr from-blue-50 to-blue-200 min-h-screen flex items-center justify-center p-6">

    <div class="bg-white shadow-2xl rounded-2xl p-8 max-w-lg w-full text-center">
        
        <h1 class="text-2xl font-bold text-blue-700 mb-4"> الوقت الحالي على الخادم</h1>
        
        <p class="text-lg text-gray-700 mb-6">
            <span class="font-semibold">الوقت:</span>
            <?php echo htmlspecialchars((string) date('Y-m-d H:i:s')); ?>
        </p>

        <div class="space-y-4">
            <a href="info_form.php" 
               class="block bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition font-bold">
                نموذج تعبئة الاسم واختيار اللون المفضل
            </a>

            <a href="resault.php" 
               class="block bg-green-600 text-white py-3 rounded-lg hover:bg-green-700 transition font-bold">
                صفحة عرض نتيجة الاسم
            </a>
        </div>
    </div>

</body>
</html>
