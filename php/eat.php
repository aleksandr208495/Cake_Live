<?php
$Name=$_POST['Name'];
$Surname=$_POST['Surname'];
$Email=$_POST['Email'];
$Phone=$_POST['Phone'];
$Order=$_POST['Order'];

$subject="Тема: Обратная связь";
$mestext="Спасибо $Name $Surname за заказ\nВаш заказ: $Order";
$headers ="От: Cake Live";
mail($adress, $subject, $mestext, $headers);
$mainpage = "../index.html";
header("Refresh: 4; url='$mainpage'");
echo "<p align='center'><b>Сообщение отправлено.</b><br>
Через 4 сек. Вы будете перенаправлены
<a href='$mainpage'>на главную страницу</a></p>";
