<?php
//ПЕРЕХОД С ГЛАВНОЙ СТРАНИЦИ С ФОРМЫ ЗАКАЗА СХЕМЫ

/// снимаем запрет прямого обращения к файлу
//define('SITES', TRUE);

/* директива запрета доступа к данному файлу напрямую */
//defined('SITES') or die('Access denied !');

// подключение файла конфигурации
require_once 'functions/config.php';

// подключение общей библиотеки функций
require_once 'functions/functions.php';

// запускаем сеанс сессии
session_start();

// foto
if (!isset($_SESSION['reg']['foto']))
    {$foto_us = 'Изображение не выбрано';} // если переменной массива с названием фотографии не существует присваиваем пустое значение
	 else// иначе присваиваем переменной значение из массива
	  {$foto_us = ($_SESSION['reg']['foto']);}
// формат
if (!isset($_SESSION['reg']['format']))
    {$format_us = 'Формат не выбран';} // если переменной массива с видом формата не существует присваиваем пустое значение
	 else// иначе присваиваем переменной значение из массива
	  {$format_us = ($_SESSION['reg']['format']);}
// имя
if (!isset($_SESSION['reg']['name']))
    {$name_us = '';} // если переменной массива с ФИО пользователя не существует присваиваем пустое значение
	 else// иначе присваиваем переменной значение ФИО из массива
	  {$name_us = ($_SESSION['reg']['name']);}
// email
if (!isset($_SESSION['reg']['email']))
    {$email_us = '';} // если переменной массива с email пользователя не существует присваиваем пустое значение
	 else// иначе присваиваем переменной значение email из массива
	  {$email_us = ($_SESSION['reg']['email']);}
// телефон
if (!isset($_SESSION['reg']['phone']))
    {$phone_us = '';} // если переменной массива с phone пользователя не существует присваиваем пустое значение
	 else// иначе присваиваем переменной значение phone из массива
	  {$phone_us = ($_SESSION['reg']['phone']);}
// адрес
if (!isset($_SESSION['reg']['addres']))
    {$addres_us = '';} // если переменной массива с фдресом пользователя не существует присваиваем пустое значение
	 else// иначе присваиваем переменной значение адреса из массива
	  {$addres_us = ($_SESSION['reg']['addres']);}

?>
<!DOCTYPE HTML>
 <html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE = Edge, chrome = 1"><!---->
    <meta name="keywords" content="Наборы для вышивания по фотографии"/><!-- список ключевых слов -->
    <meta name="description" content="Наборы для вышивания по фотографии"/><!-- описание страницы -->
    <meta name="viewport" content="width=device-width"><!-- заставляем устройства сообщать о размерах экранов -->
    <meta name="viewport" content="initial-scale=1" /><!-- задаем начальный масштаб страницы -->
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <!--[if lt IE 9]>
     <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
    <![endif]-->
<title>Заказ схемы</title>
</head>

<body>
   <div class="main">
    <div class="header_main">
     <div class="header">
      <div class="header_content">

       <img  class="img_pos" src="images_test/logo_strelca.png"/>

       <div class="header_box_l">
        <div class="header_logo">
         <h1><?= TITLE ?></h1>
         <span>ИНТЕРНЕТ МАГАЗИН</span>
        </div><!-- END .header_logo -->
       </div><!-- END .header_box_l -->

       <div class="header_box_m">
        <div class="header_menu">
         <ul>
          <li><a href="index.php#nabor">СОСТАВ НАБОРА</a></li>
          <li><a href="index.php#sales">АКЦИИ</a></li>
          <li><a href="index.php#pochemu_my">ПОЧЕМУ МЫ</a></li>
          <li><a href="index.php#zakaz">КАК ЗАКАЗАТЬ</a></li>
          <li><a href="index.php#otzivy">ОТЗЫВЫ</a></li>
         </ul>
        </div><!-- END .header_menu -->
       </div><!-- END .header_box_m -->

       <div class="header_box_c">
        <div class="header_contact">

            <p><?= ADMINPHONE ?></p>
            <a href="#dialog" name="modal"><span>ЗАКАЗАТЬ ОБРАТНЫЙ ЗВОНОК</span></a>

        </div><!-- END .header_contact -->
       </div><!-- END .header_box_c -->

       </div><!-- END .header_content -->
      </div><!-- END .header -->
    </div><!-- END .header_main -->
<!--  END HEADER -->

<!--  START MODAL WINDOW - PHONE-->
    <div id="boxes">
	 <div id="mask"></div><!---->
      <div id="dialog" class="window">
       <a class="close" href="#"/><img class="width_img"  src="close.png"></a>
        <!-- START CONTENT -->
          <div class="adr-dostavki">
           <h2>Форма заказа обратного звонка</h2>
            <img class="width_img" src="images_test/h2_top.png" id="img_form" />
            <div id="form_label">
             <h4>Укажите ваши контактные данные и мы вам перезвоним :</h4>
              <p>Поля помеченные (*) обязательны к заполнению.</p>
               </div><!-- END .form_label -->
 <a name="top">&nbsp;</a>
         <div id="contact_form">
          <form name="contact" method="post" action="">
           <table class="zakaz-data" border="0" cellspacing="0" cellpadding="0">
            <tr>
	         <td class="zakaz-txt">Ф.И.О.(*)</td>
	         <td class="zakaz-inpt"><input type="text" name="name" id="name" size="30" value="" /></td>
	         <td class="zakaz-error"><p class="error" id="name_error">Поле обязательно к заполнению !</p></td>
	        </tr>
	        <tr>
	         <td class="zakaz-txt">Телефон(*)</td>
	         <td class="zakaz-inpt"><input type="text" name="phone" id="phone" size="30" value="" /></td>
             <td class="zakaz-error"><p class="error" id="phone_error">Поле обязательно к заполнению !</p></td>
	       </tr>
	      </table>
           <br/>
           <input type="submit" name="submit" class="button" id="submit_btn" value="Заказать звонок" />
            </form>
         </div><!-- END .contact_form -->
          <img class="width_img"  src="images_test/logo35.png"/>
   </div><!-- END .adr-dostavki -->
<!-- END CONTENT -->
	 </div><!-- END .window -->
   </div><!-- END id="boxes" -->
<!--  END MODAL WINDOW - PHONE -->

<div class="display_box">

<!--  START MODAL WINDOW - SHEMA-->
<!-- START CONTENT -->
<div class="form_windows">
 <div class="adr-dostavki">
   <h2>Форма заказа схемы</h2>
     <img class="width_img"  class="width_img"  src="images_test/h2_top.png" id="img_form" />

<!-- START UPLOADER FORM -->

<div id="file_holder">
  <h5>1. Выберите изображение для загрузки :</h5>
    <p>Допустимый формат: .jpg .png .jpeg .gif</p>
      <br/>
 <form action="shema.php" method="post" enctype="multipart/form-data">
  <table border='0' cellpadding='0' cellspacing='0' width='80%' >
   <tr>
    <td style="text-align:center;"><input id="" class="input" type="file" name="userfile" /></td>
      </tr>
       </table>
   <input type = 'submit' name='foto_load' id="button_zakaz_shema" value = 'Загрузить изображение'>
 <div id="loading"><img class="width_img"  src="ajax-loader.gif" alt="Loading" /> Подождите, идет загрузка...</div>
 <div id="errormes"></div>
<?php
//если нажата кнопка ЗАГРУЗИТЬ ИЗОБРАЖЕНИЕ
if(isset ($_POST['foto_load']))
 {
   //запускаем сценарий загрузки фотографии
   file_image_upload();
 } ?>
</form>
<br/>

</div><!-- END .file_holder -->
<!-- END UPLOADER FORM -->

<div id="contact_form2">
 <form name="contact2" method="post" action="bin/start_form_shema.php">
        <h5>2. Укажите необходимый формат :</h5>
            <table class="tbl_shema" border="0" cellspacing="0" cellpadding="0">
              <tr>
				<td class="shema">
                  <span>A6</span>
                  <p>105mm/<br/>148mm</p>
                  <input type='radio' name='radiobutton' value='1' checked='checked'/>
                  </div><!-- END .box_format1 -->
                </td>
				<td class="shema">
                  <span>A5</span>
                  <p>148mm/<br/>210mm</p>
                  <input type='radio' name='radiobutton' value='2' />
                </td>
				<td class="shema">
                  <span>A4</span>
                  <p>210mm/<br/>297mm</p>
                  <input type='radio' name='radiobutton' value='3' />
                </td>
			    <td class="shema">
                  <span>A3</span>
                  <p>297mm/<br/>420mm</p>
                 <input type='radio' name='radiobutton' value='4' />
                </td>
                </td>
               <tr>
                <td class="shema">
                  <span>A2</span>
                  <p>420mm/<br/>594mm</p>
                <input type='radio' name='radiobutton' value='5' />
                </td>
                <td class="shema">
                  <span>A1</span>
                  <p>594mm/<br/>841mm</p>
                  <input type='radio' name='radiobutton' value='6' />
                </td>
                <td class="shema">
                  <span>A0</span>
                  <p>841/<br/>1189mm</p>
                  <input type='radio' name='radiobutton' value='7' />
                </td>
              </tr>
             </table>
           <br/>
         <h5>3. Укажите ваши контактные данные для отправки схемы :</h5>
       <p>Поля помеченные (*) обязательны к заполнению.</p>
           <table class="zakaz-data" border="0" cellspacing="0" cellpadding="0">
            <tr>
	           <td class="zakaz-txt">Имя(*)</td>
	           <td class="zakaz-inpt"><input type="text" name="name2" id="name2" size="30" value="<?= $name_us ?>" /></td>
	           <td class="zakaz-error"><p class="error2" id="name_error2">Поле обязательно к заполнению !</p>
               </td>
	        </tr>
            <tr>
	           <td class="zakaz-txt">E-mail </td>
	           <td class="zakaz-inpt"><input type="text" name="email2" id="email2" size="30" value="<?= $email_us ?>" /></td>
	           <td class="zakaz-error"><p class="error2" id="email_error2">Поле обязательно к заполнению !</p></td>
	        </tr>
	        <tr>
	           <td class="zakaz-txt">Телефон(*)</td>
	           <td class="zakaz-inpt"><input type="text" name="phone2" id="phone2" size="30" value="<?= $phone_us ?>" /></td>
               <td class="zakaz-error"><p class="error2" id="phone_error2">Поле обязательно к заполнению !</p></td>
	       </tr>
           <tr>
	         <td class="zakaz-txt">Адрес(*)</td>
	         <td class="zakaz-inpt"><input type="text" name="adres2" id="adres2" size="40" value="<?= $addres_us ?>" /></td>
             <td class="zakaz-error"><p class="error2" id="adres_error2">Поле обязательно к заполнению !</p>
             </td>
	       </tr>
	      </table>
         <input type="submit" name="start_shema_form" class="button2" id="submit_btn2" value="Заказать схему" />
        <br/>
       <br/>
      </form>
         </div><!-- END .contact_form2 -->
   </div><!-- END .adr-dostavki -->
</div><!-- END .form_windows -->
<!-- END CONTENT -->

    </div><!-- END .display_box -->
   </div><!-- END .main -->


<script type="text/javascript" src="js_test/jquery.min.js"></script> <!-- подключаем последнюю версию jQuery -->
<script type="text/javascript" src="js_test/carousel.js"></script><!-- FOR PRIMERY RABOT -->
<script type="text/javascript" src="js_test/carousel_top.js"></script><!-- FOR OTZIVY -->
   <!-- END SLIDER -->
   <!-- START MODAL WINDOW -->
<script type="text/javascript" src="js_test/modal_window.js"></script><!-- FOR MODAL WINDOW -->
   <!-- END MODAL WINDOW -->
   <!-- START FORM FOR MODAL-->
<script type="text/javascript" src="js_test/jquery-1.2.3.pack.js"></script>
<script type="text/javascript" src="js_test/runonload.js"></script>
<script type="text/javascript" src="js_test/tutorial.js"></script>

<script type="text/javascript" src="js_test/modal_window.js"></script><!-- FOR WINDOW -->
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter28726541 = new Ya.Metrika({id:28726541,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/28726541" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
 </body>
</html>
