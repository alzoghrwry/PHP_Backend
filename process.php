<?php
declare(strict_types=1);

//     Resault.php ونعيد توجيهها الى صفحة postهنا نستقبل الطلب عبر دالة 
// ونعيد استخدامها في صفحات اخرى لان الجلسة تحفظ البياناتurl استخدمنا الجلسة حتى تكون البيانات اكثر امان وخصوصية ولاتظهر في عنوان 
session_start();

// التحقق من الدالة المرسلة حتى يتم التوجيه الصحيح
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    // إذا لم يكن POST نعيد التوجيه: هذا يضمن أن process.php لن يُصل عند زيارة مباشرة عبر GET
    header('Location: info_form.php', true, 303);
    exit();
}



// نستخدم filter_input للحصول على القيم بأمان
$name = (string) filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$color = (string) filter_input(INPUT_POST, 'color', FILTER_SANITIZE_SPECIAL_CHARS);

// هنا حتى لاتكون القيم فارغة وحددنا قيم افتراضية حسب الطلب
if ($name === '') {
    $name = 'Guest';
}
if ($color === '') {
    $color = '#000000';
}

// تخزين القيم داخل الجلسة
$_SESSION['result'] = [
    'name' => $name,
    'color' => $color,
];


header('Location: Resault.php', true, 303);
exit();