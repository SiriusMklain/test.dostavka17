


<style type="text/css">

.order_check
{
	padding: 14px;

	width: 400px;
	text-align: center;
	font: 14px Helvetica;
	margin: 0 auto;
	background:#1a87c2;
	color: #fff;
	border-radius: 4px;
}
.order_check input[type="text"]
{
	width: 75px;
		font: 19px Helvetica;
	border: none;
	border-radius: 4px;
	padding:17px 10px;
}
.order_check input[type="submit"]
{
	font: 15px Helvetica;
	border: none;
	background-color: #fff;
	box-shadow: none;
	color:#000;
	margin:20px 0px;
	padding: 10px;
	border-radius: 4px;
	width: 235px;
}
</style>

<div class="order_check">
<form method="post" action="index.php">
	<input value="" type="text" name="pref" size="2" maxlength="2">
	<input value="" type="text" name="number" size="4" maxlength="4">
	<input value="" type="text" name="suf" size="2" maxlength="2"><br>
	<input type="submit" name="submit" value="Проверить номер заказа">
</form>






<?php


if(isset($_POST['submit']))
		{
			$pref = $_POST['pref'];
			$number = $_POST['number'];
			$suf = $_POST['suf'];





		try
		{

			$db = new PDO('mysql:host=195.208.106.104;dbname=zsminv','website','78iHr7AS90');


			$sql = "select us.progress from uploadstatus us join meininv m on m.status = us.status and m.substatus = us.substatus
			where (us.progress > 0) and (m.nomzakaz = :number) and (m.suf = :suf)";

			$result = $db->prepare($sql);
			$result->execute(array(':pref' => $pref, ':number' => $number, ':suf' => $suf));


			$value = $result->fetchAll();

			if(!empty($value['0']['progress']))
			{

			echo "Ваш заказ выполнен на ".$value['0']['progress']." %";
			}
			else
			{
				echo "Нет заказа с таким номером";

			}

			$error_array = $db->errorInfo();

			if($db->errorCode() != 0000)
			{
			echo'<pre style="display:none">
			SQL ошибка:'. $error_array[2].'</pre>';
			}



		}
		catch(PDOException $e)
		{
			die("Error: ".$e->getMessage());
		}

}
else
{
	echo"Введите номер вашего заказа";
}
?>


</div>