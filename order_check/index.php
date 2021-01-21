<?

ini_set('error_reporting', E_ALL);

?>

<div class="order_check">
    <div class="container">
        <div class="col-sm-10">
            <div class="conatct-info">
                <h3 class="title">Статус заказа</h3>
                <p>Введите номер заказа:</p>
            </div>
            <form method="POST" action="" style="" class="contact-one__form">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="input-box">
                            <label for="pref_input"></label><input required="" value="<?= (isset($_POST['pref'])) ? $_POST['pref'] : '' ?>"
                                                                   placeholder="000000000" type="text" name="pref" size="15" maxlength="15"
                                                                   id="pref_input" onclick="this.select();" onKeyUp="">
                        </div>
                    </div>

                    <br>
                    <?
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
                    ?><!--<pre style="color:black"> <? print_r($results); ?> <? print_r($_POST); ?> </pre>--><?
                    }

                    if (!empty($results["DeliveryTax"]) && isset($_POST["tarif"])){
                        ?>
                        <div class="col-lg-12">
                            <br>
                            <div class="status-btn">
                                Статус: (<?= $results["Status"] ?>)!
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <br>
                            <div class="you_tariff">Ваш
                                Тариф (<?= $results["DeliveryTax"][0]["Tax"] ?>)!
                            </div>
                        </div>
                        <div style="clear:both;"></div>
                    <?
//                    if ($_POST["tarif"] != $results["DeliveryTax"][0]["Tax"]){
//                    ?>
<!--                    <br>-->
<!--                        <div class="col-lg-12">-->
<!--                            <br>-->
<!--                            <br><br>-->
<!--                            <div class="status-btn">-->
<!--                                Статус: --><?//= $results["Status"] ?>
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-lg-12">-->
<!--                            <br>-->
<!--                            <div class="main-btn">Ваш-->
<!--                                Тариф (--><?//= $results["DeliveryTax"][0]["Tax"] ?><!--)!-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        --><?//
//                    } ?>

                        <?


                        ?>


                        <?
                    }else{
                    ?>
                    <div class="col-lg-12">
                        <br>
                        <div class="">
                        <select required="" name="tarif" class="tarif">
                            <option value="Эконом">Эконом</option>
                            <option value="Стандарт">Стандарт</option>
                            <option value="Приорити">Приорити</option>
                        </select>
                        </div>
                    </div>
                    <br>
                    <div class="col-lg-6 text-left">
                        <div class="">
                            <br>
                            <input type="submit" name="submit" value="Проверить" class="main-btn text-left">
                        </div>
                    </div>
                </div>
                <?
                }
                ?><br>
                <!--                    <p style="clear:both;">-->
                <span class="order_not">
                            <? if (($results["message"] == "не найдена сделка" || empty($results["DeliveryTax"]) && isset($_POST["tarif"]))) { ?>
                                <div class="main-btn">Заказ с номером ( <?= $_POST["pref"] ?> ) не найден</div><? } ?>
                        </span>
                <!--                    </p>-->
            </form>
        </div>


    </div>
    <div class="col-sm-12">
        <div data-value="Эконом" class="hides ">
            Эконом – предназначена для клиентов основным критерием которых является минимально возможная стоимость
            услуги и для которых НИ ДАТА, НИ ВРЕМЯ доставки принципиально не важны. Дата доставки по тарифу ЭКОНОМ
            назначается автоматически профессиональной логистической программой «Steklovozov-logistic» в порядке общей
            очереди после загрузки адресов категорий ПРИОРИТИ и СТАНДАРТ.

        </div>
        <div data-value="Стандарт" class="hides ">
            СТАНДАРТ - Данный тариф рекомендуется для юридических и физических лиц, не связанных жесткими временны՛ми
            рамками, когда принципиальна дата доставки и проведения монтажных работ без привязки к конкретному часу.
            Клиент назначает удобную ему дату доставки, но временной интервал прибытия непосредственного исполнителя
            определяется логистической программой « Steklovozov-logistic».
        </div>
        <div data-value="Приорити" class="hides ">
            ПРИОРИТИ – Данный тариф идеально подходит для клиентов, высоко ценящих свое личное время, а также для
            заказчиков объекты которых имеют временнЫе ограничения по проведению строительных и шумовых работ. Клиент
            назначает удобную ему дату и время доставки в интервале плюс/минус 15 минут. Доставка по Тарифу ПРИОРИТИ
            планируется в ручном режиме логистом, при планировании учитывается дорожная обстановка, трафик, специалисты
            прибывают на адрес заранее и ожидают прибытия Заказчика.
        </div>

        <br> <? if (!empty($results["DeliveryTax"]) && isset($_POST["tarif"])) { ?>
            <button class="hides" onclick="showFormDostavka()" type="button">Изменить тариф</button>

        <? } ?>
    </div>
</div>
<script src="/assets/js/jquery-3.2.1.min.js?ver=8490"></script>
<script src="/assets/js/jquery.maskedinput.min.js?ver=4658" type="text/javascript"></script>
<script>

    $('.show-hide-block').click(function () {
        $('.hide').hide();
        $(this).next().show();
    });

    //$("#pref_input").mask("9999999-_99");
    $('#order_question').submit(function (e) {
        //   $('.main-form input[type=submit]').prop('disabled', true);
        var $form = $(this);
        var datas = new FormData($('#order_question')[0]);
        $form.css('filter', 'grayscale(100%)');
        console.log(datas);
        $.ajax({
            type: "POST", url: "/order_check/order_question.php", data: datas, processData: false, contentType: false,
            success: function (data) {
                $form.css('filter', 'grayscale(0%)');
                if (data == 1) {
                    $form.html("<p class='message_txt'>Спасибо! Ваше обращение будет рассмотрено в ближайшее время.<p>");
                } else {
                    alert(data);
                }

            }
        });

        return false;
    });

</script>
<div style="clear:both;"></div>
<div class="modal fade" id="number_kp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close fui-cross" data-dismiss="modal" aria-hidden="true"></button>

                <img style="max-width: 100%;cursor: pointer;" src="/order_check/1.jpg" alt=""/>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="type_tarif" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close fui-cross" data-dismiss="modal" aria-hidden="true"></button>
                <img style="max-width: 100%;" src="/order_check/2.jpg" alt=""/>
            </div>
        </div>
    </div>
</div>
