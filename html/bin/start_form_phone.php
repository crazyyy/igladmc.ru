<?php
// ƒЋя ќ“ѕ–ј¬ » ѕ»—№ћј — ‘ќ–ћџ «ј ј«ј ќЅ–ј“Ќќ√ќ «¬ќЌ ј
// снимаем запрет пр¤мого обращени¤ к файлу
//define('SITES', TRUE);

/* директива запрета доступа к данному файлу напр¤мую */
//defined('SITES') or die('Access denied !');

// подключение файла конфигурации
require_once '../functions/config.php';

// подключение общей библиотеки функций
require_once '../functions/functions.php';	  

// им¤
if ((isset($_POST['name'])) && (strlen(trim($_POST['name'])) > 0)) 
    {
	  $name = stripslashes(strip_tags($_POST['name']));
         } else 
		        {$name = '»м¤ не указано';}
// телефон
if ((isset($_POST['phone'])) && (strlen(trim($_POST['phone'])) > 0)) 
    {
	   $phone = stripslashes(strip_tags($_POST['phone']));
          } else 
		         {$phone = '“елефон не указан';}
		//------- ќѕ–≈ƒ≈Ћя≈ћ ѕ≈–≈ћ≈ЌЌџ≈ ƒЋя ќ“ѕ–ј¬ » ѕ»—№ћј јƒћ»Ќ” -----------///			 		 
		$name = mb_convert_encoding($message,"windows-1251","UTF-8");
		// записываем в массив данные с введенными символами 
        $name = $_POST['name'];// поле им¤(‘»ќ)
        $phone = $_POST['phone'];// поле телефон
        $var_date = date("Y-m-d H:i:s");//определ¤ем переменную дл¤ обозначени¤ текущей даты
        //‘ќ–ћ»–”≈ћ «ј√ќЋќ¬ » ѕ»—№ћј
        $to = ADMINMAIL;//переменна¤ с адресом электронной почты на который отправл¤етс¤ сообщение 
        $subject = '–≈√»—“–ј÷»я «јя¬ » Ќј ќЅ–ј“Ќџ… «¬ќЌќ '; //пeременна¤ $subject формирует тему письма
        $from = 'site visitor';//создаем в письме заголовок - от кого письмо
        $headers  = "From: <".$from.">\r\n";                                              
        $headers  .= "MIME-Version: 1.0\r\n";//”казываем правильный MIME-тип сообщени¤
        $headers  .= "Content-type:text/html; charset=\"UTF8\" r\n";//задаем кодировку
         ///-------------------- формируем сообщение ---------------------///
         $message = ///с данной переменной начинаетс¤ тело письма
        '<html>
          <head>
           <title>REGISTRATION NEW ORDER PHONE</title>
            </head>
             <body>
              <p><b>REGISTRATION NEW ORDER PHONE :</b></p>
         <table>
          <tr>
            <td><b>Name user:</b>&nbsp;&nbsp;'.$name.'</td>
              </tr>
         <tr>
          <td><b>Phone user:</b>&nbsp;&nbsp;'.$phone.'</td>
           </tr>
	     <tr>
          <td><b>Date time :</b>&nbsp;&nbsp;'.$var_date.'</td>
           </tr>
            </table>
             </body>
               </html>';       
			   //преобр из кодировки "UTF-8" в кодировку "windows-1251"		
               //$name = mb_convert_encoding($message,"windows-1251","UTF-8");
			   //$message = mb_convert_encoding($message,"windows-1251","UTF-8");
               //преобр из кодировки "UTF-8" в кодировку "windows-1251"
			   //$subject = mb_convert_encoding($subject,"windows-1251","UTF-8");				
               //отправл¤ем письмо
               @mail($to,$subject,$message,$headers);   
               exit;
?>