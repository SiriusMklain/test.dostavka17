<?php
$name = (isset($_POST['name'])) ? trim(strip_tags($_POST['name'])) : '';
$mail = (isset($_POST['email'])) ? trim(strip_tags($_POST['email'])) : '';
$message = (isset($_POST['question'])) ? trim(strip_tags($_POST['question'])) : '';
$phone = (isset($_POST['tel'])) ? trim(strip_tags($_POST['tel'])) : '';
$order = (isset($_POST['order'])) ? trim(strip_tags($_POST['order'])) : '';

$all = '';
$all .= "Номер заказа: ".$order." <br />";
$all .= "ФИО: ".$name." <br />";
$all .= "Телефон: ".$phone." <br />";

$all .= "Email: ".$mail." <br />";
$all .= "Сообщение: ".$message." <br />";
$to = 'tech-order@1mzf.ru'; 
$subject = 'Задан вопрос по заказу № '.$order;
$headers = "Content-type: text/html; charset=utf-8" . "\r\nFrom: info@1mzf.ru";
$check_mail = mail($to, $subject, $all, $headers);
if($check_mail){
    echo '1';
}