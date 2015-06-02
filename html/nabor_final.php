<?php 
//ПЕРЕХОД С ОБРАБОТЧИКА ОТПРАВКИ ПИСЬМА АДМИНУ ДЛЯ ФОРМЫ ЗАКАЗА НАБОРА  - ЗАЯВКА ПРИНЯТА

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
   <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
   <!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> -->
    <meta http-equiv="X-UA-Compatible" content="IE = Edge, chrome = 1"><!---->
    <meta name="keywords" content="Наборы для вышивания по фотографии"/><!-- список ключевых слов --> 
    <meta name="description" content="Наборы для вышивания по фотографии"/><!-- описание страницы -->
    <meta name="viewport" content="width=device-width"><!-- заставляем устройства сообщать о размерах экранов -->
    <meta name="viewport" content="initial-scale=1" /><!-- задаем начальный масштаб страницы -->
    <!-- CSS -->
      <link rel="stylesheet" type="text/css" href="css/style_test.css" />
      <link rel="stylesheet" type="text/css" href="css/modal_test.css" />
      <link rel="stylesheet" type="text/css" href="css/buttons.css" /> 
      <link rel="stylesheet" type="text/css" href="css/window.css" /> 
    <!-- MEDIA CSS -->
    
    <!--  END CSS -->
    <!--  IS -->
    <!-- НАЧАЛО - инструкция для поддержки основных стилей для версии ИЕ от 9 версии и ниже -->   
      <!--[if lt IE 9]>
       <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
      <![endif]-->
   <!-- КОНЕЦ - инструкция для поддержки основных стилей для версии ИЕ от 9 версии и ниже -->  
   <!-- START SLIDER -->
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
   <!-- END FORM FOR MODAL -->
   <!-- START Ajax UPLOAD -->
<script type="text/javascript" src="js_test/jquery.js"></script><!-- FOR Google jQuery CDN -->
<script type="text/javascript" src="ajax/jquery.ajax.upload.js"></script><!-- FOR Ajax -->
<!--<script type="text/javascript">-->
<script type="text/javascript" src="js_test/modal_window.js"></script><!-- FOR WINDOW -->		
        <!-- </script> -->
   <!-- END Ajax UPLOAD -->
    <!--  END IS -->
    
<title>Заказ набора - успешно</title>
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
      
<!--  START MODAL WINDOW - NABOR-->      
<!-- START CONTENT -->
    <div class="form_windows">    
     <div class="adr-dostavki">   
      <h2>Форма заказа набора</h2>
       <img class="width_img"  src="images_test/h2_top.png" id="img_form" />
  
   <div id='message'>
    <h2 style="color:green;">Ваша заказ принят на обработку !</h2>
     <p style="color:green;">Спасибо за выбор нашего интернет-магазина ! Оставайтесь на связи, в ближайшее время с вами свяжется наш менеджер для уточнения доставки.</p>
      <img class="width_img"  id='checkmark' src='images_test/h2_top_reset.png' />
        <div> 
         <img class="width_img"  id='checkmark' src='images_test/logo_final.png' /> 
        </div>
       </div>
   
   </div><!-- END .adr-dostavki -->
</div><!-- END .form_windows -->
<!-- END CONTENT --> 

<!--  END MODAL WINDOW - NABOR --> 
<!-- END -->      
   
    </div><!-- END .display_box -->
   </div><!-- END .main -->
 </body>
</html>