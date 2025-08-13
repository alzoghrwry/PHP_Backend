<?php
declare(strict_types=1);

 
?>
<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>بياناتك الشخصية</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-tr from-blue-50 to-blue-200 min-h-screen flex items-center justify-center p-4">

    <div class="bg-white shadow-2xl rounded-2xl p-8 max-w-md w-full">
        <h1 class="text-2xl font-bold text-center text-blue-700 mb-6"> بياناتك الشخصية</h1>
        <!--  وتعتبر هذه الطرية امنة للتعامل مع البيانات الحساسة url  لاننا نتعامل مع مدخلات من قبل المستخدم وحتى لا يتم عرض البيانات على عنوان post تم استخدام دالة  -->
        <form action="Resault.php" method="post" class="space-y-5">
            
          
            <div>
                <label for="name" class="block text-gray-700 font-medium mb-2">الاسم:</label>
                <input id="name" name="name" type="text" required
                       class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            
           
            <div>
                <label for="color" class="block text-gray-700 font-medium mb-2">لونك المفضل:</label>
                <input id="color" name="color" type="color" value="#475fa3"
                       class="w-full h-12 border border-gray-300 rounded-lg cursor-pointer">
            </div>
            
            
            <button type="submit"
                    class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition duration-300 font-bold">
                إرسال 
            </button>
        </form>
    </div>

</body>
</html>
