<?php
// ƒЋя ќ“ѕ–ј¬ » ѕ»—№ћј — ‘ќ–ћџ «ј ј«ј ќЅ–ј“Ќќ√ќ «¬ќЌ ј
// снимаем запрет пр¤мого обращени¤ к файлу
//define('SITES', TRUE);

/* директива запрета доступа к данному файлу напр¤мую */
//defined('SITES') or die('Access denied !');
require_once '../functions/config.php';

// подключение файла конфигурации
require_once '../functions/functions.php';	  

// запускаем сессию
session_start();
// foto
 if (isset($_POST['start_nabor_form'])) 
    { 
// им¤
    if ((isset($_POST['name2'])) && (strlen(trim($_POST['name2'])) > 0)) 
    {
	  $name = stripslashes(strip_tags($_POST['name2']));
      $_SESSION['reg']['name']  = $name_us = $name;
		 } else 
		        {
				 $name_us = '»м¤ не указано'; 
				}
// емайл
if ((isset($_POST['email2'])) && (strlen(trim($_POST['email2'])) > 0)) 
    {
	  $email = stripslashes(strip_tags($_POST['email2']));
      $_SESSION['reg']['email']  = $email_us = $email;    
		 } else 
		        {
				$email_us = 'email не указан';
				}				
// телефон
if ((isset($_POST['phone2'])) && (strlen(trim($_POST['phone2'])) > 0)) 
    {
	   $phone = stripslashes(strip_tags($_POST['phone2']));
       $_SESSION['reg']['phone']  = $phone_us = $phone;   
		  } else 
		         {
				 $phone_us = '“елефон не указан';
				 }
// адрес
if ((isset($_POST['adres2'])) && (strlen(trim($_POST['adres2'])) > 0)) 
    {
	   $adres = stripslashes(strip_tags($_POST['adres2']));
       $_SESSION['reg']['addres']  = $addres_us = $adres;    
		  } else 
		         {
				 $addres_us = 'јдрес не указан';
				 }				 
}//------- ќѕ–≈ƒ≈Ћя≈ћ ѕ≈–≈ћ≈ЌЌџ≈ ƒЋя ќ“ѕ–ј¬ » ѕ»—№ћј јƒћ»Ќ” -----------///
        $name = $name_us;// им¤
        $email = $email_us;// емайл
        $phone = $phone_us;// телефон
        $addres = $addres_us;// адрес
        move_uploaded_file($_FILES['userfile']['tmp_name'],'../images_test/images/'.$_FILES['userfile']['name']);
		
		//определ¤ем переменную дл¤ обозначени¤ текущей даты
		$var_date = date("Y-m-d H:i:s");
        //‘ќ–ћ»–”≈ћ «ј√ќЋќ¬ » ѕ»—№ћј 
        $to = ADMINMAIL;//переменна¤ с адресом электронной почты на который отправл¤етс¤ сообщение  
        $subject = '–≈√»—“–ј÷»я «јя¬ » Ќј ЌјЅќ–'; //пeременна¤ $subject формирует тему письма
        //прописываем заголовки                                      
        $headers  .= "MIME-Version: 1.0\r\n";//”казываем правильный MIME-тип сообщени¤
        $headers  .= "Content-type:text/html; charset=\"utf-8\" r\n";//задаем кодировку
         ///-------------------- формируем сообщение ---------------------///
         $message = 
        '<html>
          <head>
           <title>–≈√»—“–ј÷»я «јя¬ » Ќј ЌјЅќ–</title>
            </head>
             <body>
              <p><b>–≈√»—“–ј÷»я «јя¬ » Ќј ЌјЅќ– :</b></p>
         <table>
          <tr>
            <td><b>»м¤ заказчика:</b>&nbsp;&nbsp;'.$name.'</td>
              </tr>
         <tr>
          <td><b>E-mail заказчика:</b>&nbsp;&nbsp;'.$email.'</td>
           </tr>
         <tr>
          <td><b>“елефон заказчика:</b>&nbsp;&nbsp;'.$phone.'</td>
           </tr>
         <tr>
          <td><b>јдрес заказчика:</b>&nbsp;&nbsp;'.$addres.'</td>
           </tr>
         <tr>
          <td><img src="'.$_SERVER['HTTP_ORIGIN'].'/images_test/images/'.$_FILES['userfile']['name'].'"></td>
           </tr>
	     <tr>
          <td><b>¬рем¤ создани¤ за¤вки :</b>&nbsp;&nbsp;'.$var_date.'</td>
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
               if (mail($to,$subject,$message,$headers))   
               {//если письмо отправлено 
			   //уничтожаем переменные сессии
			   unset($_SESSION['reg']['name']);
			   unset($_SESSION['reg']['email'] );
			   unset($_SESSION['reg']['phone']);
			   unset($_SESSION['reg']['addres'] );
			   unset($_SESSION['reg']['foto'] );
			   unset($_SESSION['reg']['format'] );
			   //переходим на страницу сообщени¤ о прин¤тии за¤вки
			   header("Location: ../nabor_final.php"); 
			   } else {//иначе
						//переходим на страницу дефолтную
			            header("Location: ../nabor_error.php"); 
				      }
?>