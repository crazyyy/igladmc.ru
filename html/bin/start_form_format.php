<?php
//ДЛЯ ОТПРАВКИ ПИСЬМА АДМИНУ С ФОРМЫ ЗАКАЗА ФОРМАТА 
// снимаем запрет прямого обращения к файлу
//define('SITES', TRUE);

/* директива запрета доступа к данному файлу напрямую */
//defined('SITES') or die('Access denied !');

// подключение файла конфигурации
require_once '../functions/config.php';

// подключение общей библиотеки функций
require_once '../functions/functions.php';	

// запускаем сеанс сессии
session_start();
// переменная сессии foto
if (!isset($_SESSION['reg']['foto']))
    {$foto_us = 'Изображение не выбрано';} // если переменной массива с названием фотографии не существует присваиваем пустое значение 
	 else// иначе присваиваем переменной значение из массива
	  {$foto_us = ($_SESSION['reg']['foto']);}
// скрытое поле формат
    if ((isset($_POST['hiden_format'])) && (strlen(trim($_POST['hiden_format'])) > 0)) 
    {
	  $format_us = stripslashes(strip_tags($_POST['hiden_format']));
      $_SESSION['reg']['format']  = $format_us;
		 } else 
		        {
				 $format_us = 'Формат не указан'; 
				}
// поле имя
    if ((isset($_POST['name2'])) && (strlen(trim($_POST['name2'])) > 0)) 
    {
	  $name = stripslashes(strip_tags($_POST['name2']));
      $_SESSION['reg']['name']  = $name_us = $name;
		 } else 
		        {
				 $name_us = 'Имя не указано'; 
				}
// поле емайл
if ((isset($_POST['email2'])) && (strlen(trim($_POST['email2'])) > 0)) 
    {
	  $email = stripslashes(strip_tags($_POST['email2']));
      $_SESSION['reg']['email']  = $email_us = $email;    
		 } else 
		        {
				$email_us = 'email не указан';
				}				
// поле телефон
if ((isset($_POST['phone2'])) && (strlen(trim($_POST['phone2'])) > 0)) 
    {
	   $phone = stripslashes(strip_tags($_POST['phone2']));
       $_SESSION['reg']['phone']  = $phone_us = $phone;   
		  } else 
		         {
				 $phone_us = 'Телефон не указан';
				 }
// поле адрес
if ((isset($_POST['adres2'])) && (strlen(trim($_POST['adres2'])) > 0)) 
    {
	   $adres = stripslashes(strip_tags($_POST['adres2']));
       $_SESSION['reg']['addres']  = $addres_us = $adres;    
		  } else 
		         {
				 $addres_us = 'Адрес не указан';
				 }				 
		//------- ОПРЕДЕЛЯЕМ ПЕРЕМЕННЫЕ ДЛЯ ОТПРАВКИ ПИСЬМА АДМИНУ -----------///			 		
		// записываем в массив данные с введенными символами 
        $name = $name_us;// поле имя(ФИО)
        $email = $email_us;// поле емайл
        $phone = $phone_us;// поле телефон
        $addres = $addres_us;// поле адрес
		$format = $format_us;// поле формат
		$foto = $foto_us;// поле изображение
		$var_date = date("Y-m-d H:i:s");//определяем переменную для обозначения текущей даты
        //ФОРМИРУЕМ ЗАГОЛОВКИ ПИСЬМА
        $to = ADMINMAIL;//переменная с адресом электронной почты на который отправляется сообщение 
        $subject = 'РЕГИСТРАЦИЯ ЗАЯВКИ НА ФОРМАТ'; //пeременная $subject формирует тему письма
        $from = 'Посетитель сайта';//создаем в письме заголовок - от кого письмо
        $headers  = "From: <".$from.">\r\n";                                              
        $headers  .= "MIME-Version: 1.0\r\n";//Указываем правильный MIME-тип сообщения
        $headers  .= "Content-type:text/html; charset=\"windows-1251\" r\n";//задаем кодировку
         ///-------------------- формируем сообщение ---------------------///
         $message = ///с данной переменной начинается тело письма
        '<html>
          <head>
           <title>РЕГИСТРАЦИЯ ЗАЯВКИ НА ФОРМАТ</title>
            </head>
             <body>
              <p><b>У ВАС НОВАЯ ЗАЯВКА НА ФОРМАТ :</b></p>
         <table>
          <tr>
            <td><b>Имя заказчика:</b>&nbsp;&nbsp;'.$name.'</td>
              </tr>
         <tr>
          <td><b>E-mail заказчика:</b>&nbsp;&nbsp;'.$email.'</td>
           </tr>
         <tr>
          <td><b>Телефон заказчика:</b>&nbsp;&nbsp;'.$phone.'</td>
           </tr>
         <tr>
          <td><b>Адрес доставки заказа:</b>&nbsp;&nbsp;'.$addres.'</td>
           </tr>
         <tr>
          <td><b>Выбранный формат :</b>&nbsp;&nbsp;'.$format.'</td>
           </tr>
         <tr>
          <td><b>Изображение :</b>&nbsp;&nbsp;'.$foto.'</td>
           </tr>
	     <tr>
          <td><b>Время регистрации заявки :</b>&nbsp;&nbsp;'.$var_date.'</td>
           </tr>
            </table>
             </body>
               </html>';
			   //преобр из кодировки "UTF-8" в кодировку "windows-1251"		
               //$message = mb_convert_encoding($message,"windows-1251","UTF-8");
               //преобр из кодировки "UTF-8" в кодировку "windows-1251"
			   //$subject = mb_convert_encoding($subject,"windows-1251","UTF-8");				
			   //отправляем письмо
               if (@mail($to,$subject,$message,$headers))   
               {//если письмо отправлено успешно
			   //уничтожаем переменные сессии
			   unset($_SESSION['reg']['name']);
			   unset($_SESSION['reg']['email'] );
			   unset($_SESSION['reg']['phone']);
			   unset($_SESSION['reg']['addres'] );
			   unset($_SESSION['reg']['foto'] );
			   unset($_SESSION['reg']['format'] );
			   //переходим на страницу с сообщением об отправке данных
			   header("Location: ../format_final.php"); 
			   } else {//иначе переходим на страницу с сообщением о неудачной отправке данных
						//переходим на страницу с сообщением об отправке данных
			            header("Location: ../format_error.php"); 
				      }
?>