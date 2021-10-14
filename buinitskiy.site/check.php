<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
$fam = $_POST['fam'];

$in = $_POST['in'];
$tel = $_POST['tel'];
$kol = $_POST['kol'];
$tip = $_POST['tip'];
$pot = $_POST['pot'];
$yes = $_POST['yes'];
$comment = $_POST['comment'];
}
printf("Поздравляю вы выполнили заказ!!! <br> <h3> Фамилия - $fam <br> Инициалы - $in<br> Телефон - $tel<br> Количество - $kol<br> Тип - $tip<br> Доставка - $pot<br> Требуется накладная - $yes<br> Дополнительная информация - $comment </h3>");
?>

