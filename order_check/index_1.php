<style type="text/css">
    body{margin:0;}

    input, textarea { outline:none; }
    input:active, textarea:active { outline:none; }
    :focus { outline:none; }
    .order_check
    {
background-color: #2B4F91;
        height: auto;
        text-align: left;
        font: 14px Helvetica;
        color: #fff;
        border-radius: 4px;
            padding: 50px;
    }
    .order_check h1{
        font-size: 24px;font-weight: normal;
        float: left;
    }
    .order_check form
    {
        margin:0;
        margin-top: 115px;
    }
    .order_question input{
        width: 50%;
        height: 40px;
        margin-bottom: 20px;
        border-radius: 5px;
    }
    .order_question textarea{
        height: 80px;
        width: 50%;

        border-radius: 5px;
    }
    .numb
    {
        margin: 0 auto;
        width: 100%;
        font: 22px Helvetica;
        border: none;
        border-radius: 4px;
        clear: both;
    }
    .numb input
    {
        text-align: center;
        border:2px solid #4693ce;
        font: 23px Helvetica;
        background: #F2F2F2;
        padding: 10px 25px;
        border-radius: 0px;
            color: #000;
                width: 80%;
                margin-top: 10px;
    }
    .order_check input[type="submit"]
    {
width: 30%; float: left;
color: #fff;
background: #F2994A;
font-size: 14px;
line-height: 16px;
text-transform: uppercase;
    }
    .order_check input[type="submit"]:active{background-color:#00B855;}
    .ans{
        background-color:#fff;
        padding: 10px;
        font-size: 20px;
        display: block;
        border-radius: 4px;
        width: 415px;
        margin: 0 auto;
    }
    progress {
        width: 500px; border-radius: 4px;  border:0;
        appearance: none;
        -moz-appearance: none;
        -webkit-appearance: none;
        height: 20px;
        position: absolute;
        top: 0px;
        left: -150px;
        border:1px solid #000;
    }
    progress::-webkit-progress-bar {
        width: 100%; background-color:#ef0707; border-radius: 4px; color:blue;
        z-index: 0;
    }
    progress::-webkit-progress-value {
        width: 200px; background-color:#12CE69; border-radius: 4px; color:blue;
        z-index: 0;
    }
    progress::-moz-progress-bar {
        width: 200px; background-color:#12CE69; border-radius: 4px;
        border:none;
        box-shadow: none;
        z-index: 0;
    }
    .pr_box{
        width: 202px;
        height: 20px;
        position: relative;
        margin: 0 auto;
        margin-top:10px;
    }
    .pr_box progress{z-index: 0;}
    .pr_box span
    {
        z-index: 99;
        font-size: 13px;
        width:  212px;
        height: 20px;
        text-align: center;
        margin-top:10px;
    }
    
    
    
    
    
    /*табы*/
    
    /* Базовый контейнер табов */
    
.order_check .tabs {
	min-width: 320px;

	padding: 0px;
	margin: 0 auto;
        display: block;
        width: 100%;
        margin-top: 50px;
        border-top: solid 1px #5572a7;
}
/* Стили секций с содержанием */
.tabs>section {
	display: none;
	padding: 15px;

	border: 1px solid #ddd;
}
.tabs>section>p {
	margin: 0 0 5px;
	line-height: 1.5;
	color: #fff;
	/* прикрутим анимацию */
	-webkit-animation-duration: 1s;
	animation-duration: 1s;
	-webkit-animation-fill-mode: both;
	animation-fill-mode: both;
	-webkit-animation-name: fadeIn;
	animation-name: fadeIn;
}
/* Описываем анимацию свойства opacity */
 
@-webkit-keyframes fadeIn {
	from {
		opacity: 0;
	}
	to {
		opacity: 1;
	}
}
@keyframes fadeIn {
	from {
		opacity: 0;
	}
	to {
		opacity: 1;
	}
}
/* Прячем чекбоксы */
.tabs>input {
	display: none;
	position: absolute;
}
/* Стили переключателей вкладок (табов) */
.tabs>label {
	display: inline-block;
	margin: 0 0 -1px;
	padding: 15px 25px;
	font-weight: 600;
	text-align: center;
	color: #aaa;
	border: 0px solid #ddd;
	border-width: 1px 1px 1px 1px;
	background: #f1f1f1;
	border-radius: 3px 3px 0 0;
}
/* Шрифт-иконки от Font Awesome в формате Unicode */
.tabs>label:before {
	font-family: fontawesome;
	font-weight: normal;
	margin-right: 10px;
}
.tabs>label[for*="1"]:before {
	content: "\f19a";
}
.tabs>label[for*="2"]:before {
	content: "\f17a";
}
.tabs>label[for*="3"]:before {
	content: "\f13b";
}
.tabs>label[for*="4"]:before {
	content: "\f13c";
}
/* Изменения стиля переключателей вкладок при наведении */
 
.tabs>label:hover {
	color: #888;
	cursor: pointer;
}
/* Стили для активной вкладки */
.tabs>input:checked+label {
	color: #555;
	border-top: 1px solid #009933;
	border-bottom: 1px solid #fff;
	background: #fff;
}
/* Активация секций с помощью псевдокласса :checked */
#tab1:checked~#content-tab1, #tab2:checked~#content-tab2, #tab3:checked~#content-tab3, #tab4:checked~#content-tab4 {
	display: block;
}
/* Убираем текст с переключателей 
* и оставляем иконки на малых экранах
*/
 
@media screen and (max-width: 680px) {
	.tabs>label {
		font-size: 0;
	}
	.tabs>label:before {
		margin: 0;
		font-size: 18px;
	}
}
/* Изменяем внутренние отступы 
*  переключателей для малых экранов
*/
@media screen and (max-width: 400px) {
	.tabs>label {
		padding: 15px;
	}
}
    
    
    
    
    
    
    
    /*табы*/
</style>
<div class="order_check">
    <div class="container">
        <div class="col-sm-6">
            <h1>[[*pagetitle]]</h1><img src="/order_check/beta.svg" style="margin-top: 25px;margin-left: 5px;">
    <form method="POST" action="" style="">
        <div class="numb">
            <p style="margin: 0px;">Введите номер заказа:</p>
           <input  value="<?= (isset($_POST['pref'])) ? $_POST['pref'] : '' ?>" placeholder="0000000-я00" type="text" name="pref" size="15" maxlength="15" id="pref_input"  onclick="this.select();" onKeyUp=""> <!--<input value="" type="text" name="number" size="5" maxlength="5" id="number_input"  onclick="this.select();">
            <!--<span id="perc">23%</span>-->
          
            <?php
            if (isset($_POST['pref'])) {
                $indata = array(
                    "Number" => $_POST['pref']
                );
                $post_json = json_encode($indata);
                $ch = curl_init('service.1mzf.ru:8080/ERP/hs/ExchangeWebsite/StatusForWeb') or die("cUrl init erroR" . curl_error($ch));
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($ch, CURLOPT_POSTFIELDS, $post_json);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'POST /ERP/hs/ExchangeWebsite/StatusForWeb HTTP/1.1',
                    'Host: service.1mzf.ru:8080',
                    'Content-type: application/x-www-form-urlencoded charset=utf-8',
                    'Content-length: ' . strlen($post_json),
                    'Accept: */*',
                    'Connection: Close',
                    'Authorization: Basic d2ViOndlYg=='
                ));
                $results = json_decode(curl_exec($ch), true);
                  ?><!--<pre> <? print_r(curl_exec($ch)); ?> </pre>--><?
                if ($results['status']) {
                  
                    foreach ($results['status'] as $status) {
                        /*?> 
                        <p style="margin: 0px;">Индикатор готовности заказа № <?= $_POST['pref'] ?></p>
                        
                        <div class="pr_box">*/
                             if($status['Status'] == "Готов" || $status['Status'] == "Выдан" || $status['Status'] == "true"){?>
                            

                            <?}else{
$now = time(); // текущее время (метка времени)
$your_date = strtotime(explode("T", $status["DataOplata"])[0]); // какая-то дата в строке (1 января 2017 года)
$datediff = $now - $your_date; // получим разность дат (в секундах)
$days =  floor($datediff / (60 * 60 * 24));
//echo $days;
                                $percent = 33 + 2*$days;
                            /*    ?>
                                  <progress id="progress_bar" value="<?=($percent > 99)?'99':$percent?>" max="100"></progress></div>
                        <p>Готовность - <?=($percent > 99)?'99':$percent?>%
                            <br>
                           <?if ($days < 25){
                               echo 'Статус: в работе';
                           }elseif ($days < 30) {
                                 echo 'Статус: Готов. ОТК.';              
                                           } else {
                                 echo 'Статус: Готов. На доукомплектовании.';               
                                           }*/
?>

                        </p>  
                            <?}
                    }
                } else {
                    echo '<br>Заказ с номером ' . $_POST['pref'] . ' не найден';
                }
            }
            echo '<br><input type="submit" name="submit" value="Проверить">	';
            ?>
                        <p><a style="font-size: 12px;
line-height: 14px; color: #FFFFFF; border-bottom: dashed 1px #fff; padding: 8px;
    margin: 15px;
    line-height: 50px;" href="https://zerkala.ru/news/uroven-klientskoj-aktivnosti/" target="_blank">Уровень клиентской активности</a></p>    
        </div>

    </form>
    </div>
    <div class="col-sm-6">

        <video controls="" name="media" style="width:100%;margin: 1%">
    <source src="/img/Auto_end.mp4" type="video/mp4">
</video>
    </div>
        <div class="col-sm-12">
<?/*            
     <div class="tabs">
    <input id="tab1" type="radio" name="tabs" checked>
    <label for="tab1" title="Вкладка 1">Вкладка 1</label>
 
    <input id="tab2" type="radio" name="tabs">
    <label for="tab2" title="Вкладка 2">Вкладка 2</label>
 
    <input id="tab3" type="radio" name="tabs">
    <label for="tab3" title="Вкладка 3">Вкладка 3</label>
 
    <input id="tab4" type="radio" name="tabs">
    <label for="tab4" title="Вкладка 4">Вкладка 4</label>
 
    <section id="content-tab1">
        <p>
		Здесь размещаете любое содержание....
        </p>
    </section>  
    <section id="content-tab2">
        <p>
          Здесь размещаете любое содержание....
        </p>
    </section> 
    <section id="content-tab3">
        <p>
          Здесь размещаете любое содержание....
		</p>
    </section> 
    <section id="content-tab4">
        <p>
          Здесь размещаете любое содержание....
        </p>
    </section>    
</div>*/?>
            
        </div>
     </div>
      </div>

    <? //if (isset($results['status']) && $_POST['pref'] != "") {?>
<div class="container">
        <style>
            html{
                overflow-y: scroll!important;
            }
            .hide_answer{
                display: none;
            }
        </style>
 
        
        
                 <p class="show_answer" style="margin:0cm 0cm 8pt"><span style="font-size:11pt"><b><u><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">
                                              <span style="font-size:14.0pt"><span style="line-height:107%">Почему вы не герметизируете душевые перегородки силиконом?</span></span></span></span></u></b></span>
</p>
          <div class="hide_answer">


<p style="margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="line-height:107%">Душевая перегородка по своей сути не является полностью герметичной конструкцией, так как в ее конструктив входят открывающиеся элементы; петли, которые имеют механические зазоры для движения; коннекторы, которые имеют основание и регулировочные зазоры; металлические профили, которые держат стекло при помощи механического зажима, а не при помощи клея. Поэтому осуществление герметизации душевой при помощи герметика для компенсации строительных недочетов и неровностей монтажных поверхностей может привести к существенному ухудшению внешнего вида всей конструкции, с последующим предъявлением претензий изготовителю. Таким образом все нарушения, допущенные строителями, несправедливо перейдут на изготовителя душевой перегородки, хотя ответственность за некачественно подготовленные поверхности полностью находится в зоне компетенции компании, осуществлявшей общестроительные работы.</span></span></span></span></span></p>

<p style="margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="line-height:107%">Поэтому настоятельно рекомендуем Вам принимать поверхности под душевую перегородку с особой тщательностью, прежде чем подписать строителям акт выполненных работ.</span></span></span></span></span></p>

<p style="margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="line-height:107%">Эффект от герметизации кривых швов и ниш настолько не отвечает эстетическим ожиданиям клиентов, что на основании многочисленных жалоб, мы полностью отказались от данного вида работ даже по настоянию клиента. Идеально ровным стеклом или профилем, к сожалению, не возможно исправить строительные огрехи и просчеты. Поэтому настоятельно рекомендуем Вам принимать поверхности под душевую перегородку с особой тщательностью, прежде чем подписать строителям акт выполненный работ.</span></span></span></span></span></p>

<p style="margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="line-height:107%">При идеально подготовленных поверхностях (ссылка на Правила эксплуатации душевых)и соблюдении всех требований по эксплуатации душевых перегородок, а также основываясь на .</span></span></span></span></span></p>

<p style="margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="line-height:107%">В том случае, если установочные поверхности подготовлены в полном соответствии со Строительными Нормами и Правилами, и если клиент использует душевую перегородку по прямому н</span></span></span></span></span></p>

<p style="margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="line-height:107%">Прежде всего необходимо понять в чем отличие душевой перегородки, изготовленной на заказ, от приобретенной готовой душевой кабины.</span></span></span></span></span></p>

<p style="margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="line-height:107%">Готовая душевая кабина как правило представляет собой профиль, замкнутый со всех сторон со вклеенными в него стеклами, то есть силиконовый герметик служит не только герметизирующим составом, но и клеем, который придает жесткости всей конструкции. Большим минусом такого конструктива является толщина стекла 4-6 мм (что является менее прочным по сравнению с 8-ми мм стеклом), но и так же тот факт, что в случае разрушения разбитое стекло заменить не возможно, так как оно вклеено в пазы, и приходится менять всю дверь.</span></span></span></span></span></p>

<p style="margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="line-height:107%">Душевая перегородка представляет собой отдельные стеклянные панели, которые соединяются между собой либо коннекторами, либо петлями. </span></span></span></span></span></p>

<p style="margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="line-height:107%">Преимущества душевой перегородки – рекомендованная толщина не менее 8 мм. Возможность изготовления душевой любого размера с шагом в 1 мм. Форма душевой перегородки может быть любой в соответствии с особенностями помещения. </span></span></span></span></span></p>

          </div>
        
        
        
        
        
        
        
        
        
        
        
        <p class="show_answer" style="margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:107%">
                  <span style="font-family:Calibri,sans-serif"><b><u><span style="font-size:14.0pt">
                                  <span style="line-height:107%">
                                      <span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Сообщите точную дату доставки</span></span></span></u></b>
                                          
                  </span></span></span>
        </p>
        <div class="hide_answer">
<p style="margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:107%">
            <span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt">
                    <span style="line-height:107%"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">В компании существует 3 тарифа:</span></span></span>
                        
            </span></span></span></p>

<p style="margin:0cm 0cm 8pt"><span style="font-size:11pt">
        <span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt">
                    <span style="line-height:107%"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">1. Тариф ПРИОРИТИ – Данный тариф идеально подходит для клиентов, высоко ценящих свое личное время, а также для заказчиков объекты которых имеют временнЫе ограничения по проведению строительных и шумовых работ. <b>Клиент назначает удобную ему дату и время доставки в интервале плюс/минус 15 минут.</b> Доставка по Тарифу ПРИОРИТИ планируется в ручном режиме логистом, при планировании учитывается дорожная обстановка, трафик, специалисты прибывают на адрес заранее и ожидают прибытия Заказчика. </span></span></span></span></span></span></p>

<p style="margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="line-height:107%"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">2. Тариф СТАНДАРТ - Данный тариф рекомендуется для юридических и физических лиц, не связанных жесткими временны՛ми рамками, когда принципиальна дата доставки и проведения монтажных работ без привязки к конкретному часу. Клиент назначает удобную ему дату доставки, но временной интервал прибытия непосредственного исполнителя определяется логистической программой «</span></span></span><span lang="EN-US" style="font-size:14.0pt">
                    <span style="line-height:107%"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Steklovozov</span></span></span><span style="font-size:14.0pt"><span style="line-height:107%"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">-</span></span></span><span lang="EN-US" style="font-size:14.0pt"><span style="line-height:107%"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">logistic</span></span></span><span style="font-size:14.0pt"><span style="line-height:107%"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">». </span></span></span></span></span></span></p>

<p style="margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">
                <span style="font-size:14.0pt"><span style="line-height:107%"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">3.</span></span></span> <span style="font-size:14.0pt"><span style="line-height:107%"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Доставка по тарифу ЭКОНОМ – предназначена для клиентов основным критерием которых является минимально возможная стоимость услуги и для которых НИ ДАТА, НИ ВРЕМЯ доставки принципиально не важны. Дата доставки по тарифу ЭКОНОМ назначается автоматически профессиональной логистической программой «</span></span></span><span lang="EN-US" style="font-size:14.0pt"><span style="line-height:107%"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Steklovozov</span></span></span><span style="font-size:14.0pt"><span style="line-height:107%"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">-</span></span></span><span lang="EN-US" style="font-size:14.0pt"><span style="line-height:107%"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">logistic</span></span></span><span style="font-size:14.0pt"><span style="line-height:107%"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">» в порядке общей очереди после загрузки адресов категорий ПРИОРИТИ и СТАНДАРТ.</span></span></span></span></span></span></p>

<p style="margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">
                <span style="font-size:14.0pt"><span style="line-height:107%"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">В любом случае компания крайне заинтересована в скорейшей доставке, срок оказания услуги составляет не более 10 дней при адресе доставки в пределах МКАД.</span></span></span></span></span></span></p>

<p style="margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt">
                    <span style="line-height:107%"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Вы всегда можете повысить категорию обслуживания до тарифа Приорити, для внесения изменений Вам необходимо заполнить форму:</span></span></span></span></span></span></p>

<p style="margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt">
                    <span style="line-height:107%">
                        <img onclick="showFormDostavka()" alt="" src="data:image/png;base64,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" style="width:588px; height:126px" /></span></span></span></span></span></p>

<p style="margin:0cm 0cm 8pt">&nbsp;</p>
    </div>


<p class="show_answer" style="margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:107%">
            <span style="font-family:Calibri,sans-serif"><b><u><span style="font-size:14.0pt"><span style="line-height:107%">
                                <span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Во сколько приедет водитель ?</span></span></span></u></b></span>
                                    
        </span></span></p>
        <div class="hide_answer">
<p style="margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="line-height:107%"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Тариф ПРИОРИТИ – Данный тариф идеально подходит для клиентов, высоко ценящих свое личное время, а также для заказчиков объекты которых имеют временнЫе ограничения по проведению строительных и шумовых работ. <b>Клиент назначает удобную ему дату и время доставки в интервале плюс/минус 15 минут.</b> Доставка по Тарифу ПРИОРИТИ планируется в ручном режиме логистом, при планировании учитывается дорожная обстановка, трафик, специалисты прибывают на адрес заранее и ожидают прибытия Заказчика. </span></span></span></span></span></span></p>

<p style="margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="line-height:107%"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Тариф СТАНДАРТ - Данный тариф рекомендуется для юридических и физических лиц, не связанных жесткими временны՛ми рамками, когда принципиальна дата доставки и проведения монтажных работ без привязки к конкретному часу. Клиент назначает удобную ему дату доставки, но временной интервал прибытия непосредственного исполнителя определяется логистической программой «</span></span></span><span lang="EN-US" style="font-size:14.0pt"><span style="line-height:107%"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Steklovozov</span></span></span><span style="font-size:14.0pt"><span style="line-height:107%"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">-</span></span></span><span lang="EN-US" style="font-size:14.0pt"><span style="line-height:107%"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">logistic</span></span></span><span style="font-size:14.0pt"><span style="line-height:107%"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">».</span></span></span></span></span></span></p>

<p style="margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="line-height:107%"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Доставка по тарифу ЭКОНОМ – предназначена для клиентов основным критерием которых является минимально возможная стоимость услуги и для которых НИ ДАТА, НИ ВРЕМЯ доставки принципиально не важны. Дата доставки по тарифу ЭКОНОМ назначается автоматически профессиональной логистической программой «</span></span></span><span lang="EN-US" style="font-size:14.0pt"><span style="line-height:107%"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Steklovozov</span></span></span><span style="font-size:14.0pt"><span style="line-height:107%"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">-</span></span></span><span lang="EN-US" style="font-size:14.0pt"><span style="line-height:107%"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">logistic</span></span></span><span style="font-size:14.0pt"><span style="line-height:107%"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">» в порядке общей очереди после загрузки адресов категорий ПРИОРИТИ и СТАНДАРТ.</span></span></span></span></span></span></p>

<p style="margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="line-height:107%"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Стоимость услуги складываются из следующих составляющих:</span></span></span></span></span></span></p>

<p style="margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="line-height:107%"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">- аренда и амортизация автомобиля</span></span></span></span></span></span></p>

<p style="margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="line-height:107%"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">- ГСМ</span></span></span></span></span></span></p>

<p style="margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="line-height:107%"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">- получение заказа на производственной площадке Московской зеркальной фабрики</span></span></span></span></span></span></p>

<p style="margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="line-height:107%"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">-погрузочно-разгрузочные работы</span></span></span></span></span></span></p>

<p style="margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="line-height:107%"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">- заработная плата сотрудников</span></span></span></span></span></span></p>

<p style="margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="line-height:107%"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">-разработка и обслуживание программного обеспечения и т.д…</span></span></span></span></span></span></p>

<p style="margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="line-height:107%"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Оплата тарифа Эконом не покрывает расходов, связанных с организацией доставки, поэтому для экономии средств Заказчика производится оптимизация маршрутов программой </span></span></span><span style="font-size:14.0pt"><span style="line-height:107%"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">"Steklovozov - logistic"®. Программой осуществляется автоматический выбор адресов по тарифу Эконом либо по территориальной близости к доставкам с повышенной категорией обслуживания (Тариф Стандарт или Приорити), либо при оптимизации маршрутов и подкреплении дополнительных адресов в рамках района.</span></span></span></span></span></span></p>

<p style="margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="line-height:107%"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">&nbsp;Для принятия специалистов необходимо запланировать увеличенный интервал времени, так как невозможно спланировать точное время пребывания специалистов на каждом адресе, это связано со сложной дорожной обстановкой, задержкой на объектах заказчика при разгрузочных работах, незапланированным ожиданием Заказчиков на объекте, и т.д.. Мы дорожим временем наших Клиентов, поэтому согласовываем увеличенный временной интервал, в котором гарантированно выполним свои обязательства, так как перенос и повторный выезд в случае форс мажорных обстоятельств, потребует гораздо бОльших временных затрат и двойного ожидания выполнения услуг.</span></span></span></span></span></span></p>

<p style="margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="line-height:107%"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Категорию заказа уточняйте в договоре доставки.</span></span></span></span></span></span></p>

<p style="margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="line-height:107%"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Вы всегда можете повысить категорию обслуживания до тарифа Приорити, для внесения изменений Вам необходимо заполнить форму:</span></span></span></span></span></span></p>

<p style="margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="line-height:107%">
                        
                        <img alt="" onclick="showFormDostavka()" src="data:image/png;base64,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" style="width:588px; height:126px" /></span></span></span></span></span></p>

<p style="margin:0cm 0cm 8pt">&nbsp;</p>



<p style="margin:0cm 0cm 8pt">
    <span style="font-size:11pt">
        <span style="line-height:107%">
            <span style="font-family:Calibri,sans-serif"><b><u><span style="font-size:14.0pt"><span style="line-height:107%"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Как мне связаться с водителем напрямую? </span></span></span></u></b></span></span></span></p>

<p style="margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="line-height:107%"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Личный номер водителя не может быть предоставлен, так как является персональными данными сотрудника. Водитель свяжется с Вами самостоятельно примерно за час до прибытия на объект. Вы всегда можете обратиться в контактный центр по телефону 8-495-640-41-01, Вам будет предоставлена информация о месте нахождения бригады и ориентировочное время прибытия специалистов.</span></span></span></span></span></span></p>

<p style="margin:0cm 0cm 8pt">&nbsp;</p>

<p style="margin:0cm 0cm 8pt">&nbsp;</p>

        </div>
        
             
        
        
        
        
        
        
        
    </div>
    
    <?//}?>
         
                        <p style="font-size: 15px;color: grey;">*Сервис находится в режиме тестирования</p>
    <script src="/assets/js/jquery-3.2.1.min.js?ver=8490"></script>
    <script src="/assets/js/jquery.maskedinput.min.js?ver=4658" type="text/javascript"></script>
    <script>
        
        $('.show_answer').click(function(){
            $('.hide_answer').hide();
            $(this).next().show();
        });
                //$("#pref_input").mask("9999999-_99");    
           $('#order_question').submit(function (e) {
     //   $('.main-form input[type=submit]').prop('disabled', true);
        var $form = $(this);
        var datas = new FormData($('#order_question')[0]);
        $form.css('filter', 'grayscale(100%)');
        console.log(datas);
        $.ajax({type: "POST", url: "/order_check/order_question.php", data: datas, processData: false, contentType: false,
        success: function (data) {
                $form.css('filter', 'grayscale(0%)');
                if (data == 1) {
                    $form.html("<p class='message_txt'>Спасибо! Ваше обращение будет рассмотрено в ближайшее время.<p>");
                } else {
                    alert(data);
                }

            }});

        return false;
    });
           
    </script>
