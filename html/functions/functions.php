<?php
// ФУНКЦИИ ДЛЯ ФУНКЦИОНАЛА САЙТА - ЗАГРУЗКА ФАЙЛОВ С ФОРМ ЗАКАЗА (ИСПОЛЬЗУЕМ 2 ВАРИАНТ)

/* директива запрета доступа к данному файлу напрямую */
//defined('SITES') or die('Access denied !');

// подключение файла конфигурации
require_once 'config.php';
  
/* === Редирект === */
function redirect()
{ // HTTP_REFERER - адрес с которого пришел пользователь на текущую страницу
    $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
    header("Location: $redirect");
    exit;
}
/* ===Редирект=== */

/* ===Загрузка файла 1 вариант === */
function upload()
{
     error_reporting(0);
     $error = '';// определяем переменную для вывода текстов сообщений об oшибках	
     $max_size=5*1024*1024;// определяем максимальный размер файла
	 $min_size=0;// определяем минимальный размер файла  
	 
	 if (isset($_FILES)) :     
///------ Если файл не выбран ----------/// 
        if ($_FILES['userfile']['name'] == "")	
	    { 
		echo '<div class="error">Вы забыли выбрать файл для загрузки!</div>';}
		//echo '<div class="error">Вы забыли выбрать файл для загрузки!</div>'; 
///------ Если размер  файла больше 5 мегабайта ----------------///
        if ($_FILES['userfile']['size'] > $max_size)
	    { 
		$error[] = '<div class="error">Размер файла превышает 5Mb ! Попробуйте выбрать другой файл !</div>';}
		//echo '<div class="error">Размер файла превышает 5Mb ! Попробуйте выбрать другой файл !</div>';
///------ Если файл не PHG/JPG/JPEG/GIF  -----------------------///
        if (($_FILES['userfile']['type'] != "image/png") && ($_FILES['userfile']['type'] != "image/jpg") && ($_FILES['userfile']['type'] != "image/jpeg" ) && ($_FILES['userfile']['type'] != "image/gif") )	    
		{
		$error[] = '<div class="error">Вы пытаетесь загрузить недопустимый тип файла !(Допустимый формат: .jpg .png .jpeg .gif)</div>';}	
			
endif;
///-----  если нажата кнопка ЗАГРУЗИТЬ и ошибок нет ------------///
 if (isset($_FILES['userfile']) && $error == "") 
    {
///------ Если ошибок нет --------------------------------------///     		
        if ($_FILES['userfile']['error'] == 0)
		{
           $path = "../uploads/";// выбираем папку для хранения закаченных на сервер файлов
           $name = basename($_FILES['userfile']['name']);// определяем переменную с именем закачиваемого файла
		   $path .= $name;//добавляем к переменной адреса куда копируем файл переменную с именем файла
       if (@move_uploaded_file($_FILES['userfile']['tmp_name'], $path)) //копируем файл-фото ,в пункт назначения 
           {   
           // формируем сообщение о загрузке файла на сайт		   
	       echo '<div class="success"><p>Файл&nbsp;&nbsp;'. $file_strip .'&nbsp;&nbsp;успешно загружен !</p>
	             <br/><img src='.$name.' width="100px" height="100px"/></div>';  // Получилось.
		   }		         
		 else 
		 // выводим сообщение о ошибке при загрузке файла на сайт 
		 {$error[]='Ошибка при загрузке файла ! Попробуйте еще раз...'; }
      }
     else 
	 // выводим сообщение о ошибке при загрузке файла на сайт
	 {$error[]='Ошибка при загрузке файла на сайт ! Попробуйте еще раз...';}
   }
}
/* === Загрузка файла 1 вариант === */

/* === Загрузка файла 2 вариант === */
function file_image_upload()
{
//запускаем сессию
//session_start();     

// СТАНДАРТНЫЕ КОДЫ ОШИБОК ПРИ ЗАГРУЗКЕ ФАЙЛОВ
// 0 - ошибок нет,файл загружен
// 1 - размер файла превышает максимальное значение указанное в php.ini
// 2 - размер файла превышает максимальное значение указанное в в multipart-форме (параметр - MAX_FILE_SIZE)
// 3 - файл загружен не полностью
// 4 - файл не загружен	
$text_error="";// определяем переменной вывода сообщений об ошибках пустое значение
//ЕСЛИ ПЕРЕДАЮТСЯ ДАННЫЕ ФОРМЫ ЗАГРУЗКИ ИЗОБРАЖЕНИЯ
if(isset($_FILES["userfile"]))
{
    $userfile_tmp  = $_FILES["userfile"]["tmp_name"];//сохраняем имя файла во временном каталоге сервера
    $userfile_name = $_FILES["userfile"]["name"];//имя файла на компьютере пользователя
    $userfile_size = $_FILES["userfile"]["size"];//размер файла
    $userfile_type = $_FILES["userfile"]["type"];//MIME тип файла
    $error_code  = $_FILES["userfile"]["error"];//код ошибки
// ПРОВЕРЯЕМ НА НАЛИЧИЕ СТАНДАРТНЫХ ОШИБОК ПРИ ЗАГРУЗКЕ ФАЙЛОВ
if($error_code == 1)
    {
	//выводим сообщение
	$text_error="<br/><p id='name_error3'>Размер файла превышает максимальное значение !<br/>
	             Максимальный размер загружаемого файла не должен превышать 5Mb.<br/>
	             Попробуйте еще раз.</p>";
	             echo $text_error;   				
    }
if($error_code == 2)
    {
	//выводим сообщение
	$text_error="<br/><p id='name_error3'>Размер файла превышает максимальное значение !<br/>
	             Максимальный размер загружаемого файла не должен превышать 5Mb.<br/>
	             Попробуйте еще раз.</p>";
                 echo $text_error;			
    }
if($error_code == 3)
    {
	//выводим сообщение
	$text_error="<br/><p id='name_error3'>Файл загружен не полностью !<br/>
	             Возможно нарушилось соединение с сервером.<br/>
	             Попробуйте еще раз.</p>";
                 echo $text_error; 				
    }
if($error_code == 4)
    {
	//выводим сообщение
	$text_error="<br/><p id='name_error3'>Вы не выбрали файл для загрузки !<br/>
	             Попробуйте еще раз.</p>";
                 echo $text_error;		
    }     
	 //если ошибок нет и размер файла больше 0
     if($error_code==0 && $userfile_size>0) 
	    {
          //проверяем загружаемый файл на необходимый форматimage/jpeg  
		 if(($_FILES['userfile']['type'] != "image/png") && 
		    ($_FILES['userfile']['type'] != "image/jpg") && 
			($_FILES['userfile']['type'] != "image/jpeg" ) && 
			($_FILES['userfile']['type'] != "image/gif") )
		      {
               //выводим сообщение
	           $text_error="<br/><p id='name_error3'>Выбранный файл не является изображением !<br/>
	                        Допустимый формат для загружаемых изображений .gif .png .jpg .jpeg <br/>
	                        Попробуйте еще раз.</p>";
                            echo $text_error;
			  }
				else {
                      //проверяем загружаемый файл на размер 
					   if ($userfile_size>=5*1024*1024 ) // 1000 = 1 Кбайт
					      {
                            //выводим сообщение
	                        $text_error = "<br/><p id='name_error3'>Размер файла превышает максимальное значение !<br/>
	                                       Максимальный размер загружаемого файла не должен превышать 5 Мбайт.<br/>
	                                       Попробуйте еще раз.</p>";
                                           echo $text_error;
                                     }
                                 }
               if($error_code == 0 && $text_error == "")//если ошибок загрузки файла нет
			      {
				  // ОПРЕДЕЛЯЕМ КАТАЛОГ ДЛЯ ЗАГРУЗКИ ФАЙЛОВ 
				   $path = PATHIMAGES;//"C:/wamp/www/SiteTest/uploads/"
				   //// МЕНЯЕМ ПОД СВОИ ЗНАЧЕНИЯ !!!!!!(/home/moserg777/domains/svetlodar-eco-shop.ru/public_html/uploads)
				   $file_name = $_FILES['userfile']['name']; // Получаем название файла (включая его расширение).
	               $ext = substr($file_name, strpos($file_name,'.'), strlen($file_name)-1); // Получаем расширение имени файла. 
	               $file_strip = str_replace(" ","_",$file_name); //Замещаем пробелы в названии файла
                   // определяем переменную с именем закачиваемого файла
				   //$file_name = basename($userfile_name);
				   // устанавливаем имя для сохраненного файла
                   $date_img = date("His");//для имени используем актуальное время (часы мин сек)
                   $indifikator = mt_rand(1, 10000);//генерируем число от 1 до 10000
                   $indifikator_img = $date_img.$indifikator;//склеиваем время и с генерированное число
                   $file_name = "image_".$indifikator_img.$ext;//получаем новое уникальное имя
				     
	   chmod($path, 777); // Задаем права доступа 
       // Проверяем загружен ли файл 
       if(is_uploaded_file($userfile_tmp) )
       { 
         // Если файл загружен успешно, перемещаем его 
         // из временной директории в конечную 
         if(copy($userfile_tmp,$path .= $file_name)) 
                { //удаляем файл из временной папки сервера				
				  //unlink ($userfile_tmp);
				  //выводим сообщение
	 $text_message ="<br/><p style='text-align: center; font-size:14px; color:green; '>Файл &nbsp;".$userfile_name."&nbsp; успешно загружен !</p>";
     echo $text_message;
	 // Записываем имя закаченного файла в переменную сессии
     if (!isset($_SESSION['reg']['foto']))
         {$_SESSION['reg']['foto'] = $file_name;} // если переменной массива с названием фотографии не существует присваиваем значение 
	       else// иначе перезаписываем значение переменной сессии 
	         {$_SESSION['reg']['foto'] = $file_name;}	
	 			    			  
				}//закрываем  если файл загружен успешно
		     }//закрываем  проверку загружен ли файл		   
	      } // закрываем если ошибок загрузки файла нет   
		} //закрываем ЕСЛИ ПЕРЕДАЮТСЯ ДАННЫЕ ФОРМЫ ЗАГРУЗКИ ИЗОБРАЖЕНИЯ 
	} //закрываем если нажата кнопка ЗАГРУЗИТЬ ИЗОБРАЖЕНИЕ
			  else 
			       {// иначе выводим сообщение
	                             $text_error="<br/><p id='name_error3'>Файл не загружен !
	                             Ошибка на стороне сервера.
								 Попробуйте еще раз.</p>";
                                 echo $text_error; 				
                              }
                           }								
/* ===Загрузка файла 2 вариант === */

/* ===Загрузка файла 3 вариант === */
function upload_image()
{
// СТАНДАРТНЫЕ КОДЫ ОШИБОК ПРИ ЗАГРУЗКЕ ФАЙЛОВ
// 0 - ошибок нет,файл загружен
// 1 - размер файла превышает максимальное значение указанное в php.ini
// 2 - размер файла превышает максимальное значение указанное в в multipart-форме (параметр - MAX_FILE_SIZE)
// 3 - файл загружен не полностью
// 4 - файл не загружен	
	  
	  $error_code  = $_FILES["userfile"]["error"];//код ошибки
	  $max_filesize=2*1024*1024;// определяем максимальный размер файла
      $allowed_filetypes = array('.jpg','.jpeg','.gif','.png'); // Это будут виды файлов, которые пройдут валидацию. 
	  $filename = $_FILES['userfile']['name']; // Получаем название файла (включая его расширение).
	  $ext = substr($filename, strpos($filename,'.'), strlen($filename)-1); // Получаем расширение имени файла. 
	  $file_strip = str_replace(" ","_",$filename); //Замещаем пробелы в названии файла
	  $upload_path = 'C:/wamp/www/'; //Устанавливаем путь загрузки к временной папке сервера (через файл root.php !!!) 
	  $path = 'uploads/'; //Устанавливаем путь загрузки к папке хранения файла 
	  $path .= $file_strip;
	  //chmod($upload_path, 777); // Задаем права доступа 
	 
  // Проверяем, разрешен ли вид файла, если нет - DIE и информируем пользователя. 
  if(!in_array($ext,$allowed_filetypes)) 
        {
die('<div class="error">Вы пытаетесь загрузить недопустимый тип файла !(Допустимый формат: .jpg .png .jpeg .gif)</div>');
	    }
		
      // Теперь проверяем размер файла, если он слишком большой, то DIE и информируем пользователя.
      if(filesize($_FILES['userfile']['tmp_name']) > $max_filesize) 
	           {
			die('<div class="error">Размер файла превышает 5Mb ! Попробуйте выбрать другой файл !</div>');
 	           }
			   
         if(move_uploaded_file($_FILES['userfile']['tmp_name'],$upload_path .= $file_strip))
                { 					
					   // Если файл загружен успешно, перемещаем его 
				       // из временной директории в конечную 
                       if(copy($_FILES['userfile']['tmp_name'],$path)) 
                                 { 					
                                   echo '<div class="success">Файл '. $file_strip .' успешно загружен !</div>';
				                   //удаляем файл из временной папки сервера
				                   unlink ($_FILES['userfile']['tmp_name']);
				                  }
					
			     echo '<div class="success">Файл '. $file_strip .' успешно загружен !</div>';
				 
				 // foto
                 if (!isset($_SESSION['reg']['foto']))
                    {$_SESSION['reg']['foto'] = $file_strip;} // если переменной массива с фото не существует присваиваем пустое значение 
	                  else// иначе присваиваем переменной значение фото из массива сессии
	                      {$_SESSION['reg']['foto'] = $file_strip;}
				 }
				  
			 
	         else {
                echo '<div class="error">'.$error_code.'Файл '. $file_strip .' не загружен. Попробуйте позже..</div>'; }

}
/* ===Загрузка файла 3 вариант === */

/* ===Загрузка файла 4 вариант === */
function upload_image_size()
{
// каталог для загрузки файлов
$dir = './upload/';
// в multipart-форме мы определили имя input-поля upfile
// это имя нужно использовать при работе с массивом $_FILES
if(isset($_FILES["upfile"]))
{
    $upfile      = $_FILES["upfile"]["tmp_name"];
    $upfile_name = $_FILES["upfile"]["name"];
    $upfile_size = $_FILES["upfile"]["size"];
    $upfile_type = $_FILES["upfile"]["type"];
    $error_code  = $_FILES["upfile"]["error"];

// если ошибок нет
    if($error_code == 0)
    {
     // выводим информацию о принятом файле
     echo "Имя файла на сервере: ".$upfile."<br>";
     echo "Имя файла на компьютере пользователя: ".$upfile_name."<br>";
     echo "MIME-тип файла: ".$upfile_type."<br>";
     echo "Размер файла: ".$upfile_size."<br><br>";

     // дополняем имя файла
     $upfile_name = $dir . $upfile_name;

     // копируем временный файл в каталог $dir, имя файла будет исходное,
     // т. е. как на компьютере у пользователя
     // первый параметр — источник
     // второй параметр — получатель
     copy($upfile,$upfile_name);

     // можно использовать функцию move_uploaded_file()
     //move_uploaded_file($upfile, $upfile_name);

     }
}
// ------------ 2 ВАРИАНТ ---------------------------------------------------------------------///    
	 $err_uploaded = "";
     if($_FILES["file_name"]["error"]==0 && $_FILES["file_name"]["size"]>0) 
	    {
          if ($_FILES["file_name"]["type"]!="image/gif") 
		      {
               $err_uploaded .= "Картинка должна быть в формате gif<br>";
              }
                else {
                       if ($_FILES["file_name"]["size"]>10000) 
					      {
                            $err_uploaded .= "Размер картинки больше допустимого<br>";
                          }
                            else {
                                     $img = imagecreatefromgif($_FILES["file_name"]["tmp_name"]);
                                     $img_X = imagesx($img);
                                     $img_Y = imagesy($img);
                                     imagedestroy($img);
                                       if ($img_X!=88 || $img_Y!=31) {
                                           $err_uploaded .= "Размер картинки должен быть 88*31<br>";
                                           }
                                         }
                                      }
               if (!$err_uploaded) 
			      {
                   $path = "/home/jquery/www/site1/public_html/newfile/";
                   $path .= $_FILES["file_name"]["name"];
                   if (@move_uploaded_file($_FILES["file_name"]["tmp_name"], $path)) 
				       {
                        chmod($path, 0644); // Задаем права доступа
                        echo "Файл успешно загружен<br>";
                        echo '<img src="' . $_FILES["file_name"]["name"] . '" alt="">';
                       }
                         else {
                                 echo "Ошибка при загрузке";
                              }
                      }
                         else {
                                 echo $err_uploaded;
                              }
                          }
                            else echo "Ошибка при загрузке";
}
?>