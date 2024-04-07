<?php
$Name=$_POST['Name'];
$Surname=$_POST['Surname'];
$message=$_POST['message'];

$subject="Тема: Обратная связь";
$mestext="Спасибо Вам за отзыв";
$headers ="От: Cake Live";
mail($adress, $subject, $mestext, $headers);
$mainpage = "../index.html";
header("Refresh: 4; url='$mainpage'");
echo "<p align='center'><b>Сообщение отправлено.</b><br>
Через 4 сек. Вы будете перенаправлены
<a href='$mainpage'>на главную страницу</a></p>";
