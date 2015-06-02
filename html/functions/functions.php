<?php
// ������� ��� ����������� ����� - �������� ������ � ���� ������ (���������� 2 �������)

/* ��������� ������� ������� � ������� ����� �������� */
//defined('SITES') or die('Access denied !');

// ����������� ����� ������������
require_once 'config.php';
  
/* === �������� === */
function redirect()
{ // HTTP_REFERER - ����� � �������� ������ ������������ �� ������� ��������
    $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
    header("Location: $redirect");
    exit;
}
/* ===��������=== */

/* ===�������� ����� 1 ������� === */
function upload()
{
     error_reporting(0);
     $error = '';// ���������� ���������� ��� ������ ������� ��������� �� o������	
     $max_size=5*1024*1024;// ���������� ������������ ������ �����
	 $min_size=0;// ���������� ����������� ������ �����  
	 
	 if (isset($_FILES)) :     
///------ ���� ���� �� ������ ----------/// 
        if ($_FILES['userfile']['name'] == "")	
	    { 
		echo '<div class="error">�� ������ ������� ���� ��� ��������!</div>';}
		//echo '<div class="error">�� ������ ������� ���� ��� ��������!</div>'; 
///------ ���� ������  ����� ������ 5 ��������� ----------------///
        if ($_FILES['userfile']['size'] > $max_size)
	    { 
		$error[] = '<div class="error">������ ����� ��������� 5Mb ! ���������� ������� ������ ���� !</div>';}
		//echo '<div class="error">������ ����� ��������� 5Mb ! ���������� ������� ������ ���� !</div>';
///------ ���� ���� �� PHG/JPG/JPEG/GIF  -----------------------///
        if (($_FILES['userfile']['type'] != "image/png") && ($_FILES['userfile']['type'] != "image/jpg") && ($_FILES['userfile']['type'] != "image/jpeg" ) && ($_FILES['userfile']['type'] != "image/gif") )	    
		{
		$error[] = '<div class="error">�� ��������� ��������� ������������ ��� ����� !(���������� ������: .jpg .png .jpeg .gif)</div>';}	
			
endif;
///-----  ���� ������ ������ ��������� � ������ ��� ------------///
 if (isset($_FILES['userfile']) && $error == "") 
    {
///------ ���� ������ ��� --------------------------------------///     		
        if ($_FILES['userfile']['error'] == 0)
		{
           $path = "../uploads/";// �������� ����� ��� �������� ���������� �� ������ ������
           $name = basename($_FILES['userfile']['name']);// ���������� ���������� � ������ ������������� �����
		   $path .= $name;//��������� � ���������� ������ ���� �������� ���� ���������� � ������ �����
       if (@move_uploaded_file($_FILES['userfile']['tmp_name'], $path)) //�������� ����-���� ,� ����� ���������� 
           {   
           // ��������� ��������� � �������� ����� �� ����		   
	       echo '<div class="success"><p>����&nbsp;&nbsp;'. $file_strip .'&nbsp;&nbsp;������� �������� !</p>
	             <br/><img src='.$name.' width="100px" height="100px"/></div>';  // ����������.
		   }		         
		 else 
		 // ������� ��������� � ������ ��� �������� ����� �� ���� 
		 {$error[]='������ ��� �������� ����� ! ���������� ��� ���...'; }
      }
     else 
	 // ������� ��������� � ������ ��� �������� ����� �� ����
	 {$error[]='������ ��� �������� ����� �� ���� ! ���������� ��� ���...';}
   }
}
/* === �������� ����� 1 ������� === */

/* === �������� ����� 2 ������� === */
function file_image_upload()
{
//��������� ������
//session_start();     

// ����������� ���� ������ ��� �������� ������
// 0 - ������ ���,���� ��������
// 1 - ������ ����� ��������� ������������ �������� ��������� � php.ini
// 2 - ������ ����� ��������� ������������ �������� ��������� � � multipart-����� (�������� - MAX_FILE_SIZE)
// 3 - ���� �������� �� ���������
// 4 - ���� �� ��������	
$text_error="";// ���������� ���������� ������ ��������� �� ������� ������ ��������
//���� ���������� ������ ����� �������� �����������
if(isset($_FILES["userfile"]))
{
    $userfile_tmp  = $_FILES["userfile"]["tmp_name"];//��������� ��� ����� �� ��������� �������� �������
    $userfile_name = $_FILES["userfile"]["name"];//��� ����� �� ���������� ������������
    $userfile_size = $_FILES["userfile"]["size"];//������ �����
    $userfile_type = $_FILES["userfile"]["type"];//MIME ��� �����
    $error_code  = $_FILES["userfile"]["error"];//��� ������
// ��������� �� ������� ����������� ������ ��� �������� ������
if($error_code == 1)
    {
	//������� ���������
	$text_error="<br/><p id='name_error3'>������ ����� ��������� ������������ �������� !<br/>
	             ������������ ������ ������������ ����� �� ������ ��������� 5Mb.<br/>
	             ���������� ��� ���.</p>";
	             echo $text_error;   				
    }
if($error_code == 2)
    {
	//������� ���������
	$text_error="<br/><p id='name_error3'>������ ����� ��������� ������������ �������� !<br/>
	             ������������ ������ ������������ ����� �� ������ ��������� 5Mb.<br/>
	             ���������� ��� ���.</p>";
                 echo $text_error;			
    }
if($error_code == 3)
    {
	//������� ���������
	$text_error="<br/><p id='name_error3'>���� �������� �� ��������� !<br/>
	             �������� ���������� ���������� � ��������.<br/>
	             ���������� ��� ���.</p>";
                 echo $text_error; 				
    }
if($error_code == 4)
    {
	//������� ���������
	$text_error="<br/><p id='name_error3'>�� �� ������� ���� ��� �������� !<br/>
	             ���������� ��� ���.</p>";
                 echo $text_error;		
    }     
	 //���� ������ ��� � ������ ����� ������ 0
     if($error_code==0 && $userfile_size>0) 
	    {
          //��������� ����������� ���� �� ����������� ������image/jpeg  
		 if(($_FILES['userfile']['type'] != "image/png") && 
		    ($_FILES['userfile']['type'] != "image/jpg") && 
			($_FILES['userfile']['type'] != "image/jpeg" ) && 
			($_FILES['userfile']['type'] != "image/gif") )
		      {
               //������� ���������
	           $text_error="<br/><p id='name_error3'>��������� ���� �� �������� ������������ !<br/>
	                        ���������� ������ ��� ����������� ����������� .gif .png .jpg .jpeg <br/>
	                        ���������� ��� ���.</p>";
                            echo $text_error;
			  }
				else {
                      //��������� ����������� ���� �� ������ 
					   if ($userfile_size>=5*1024*1024 ) // 1000 = 1 �����
					      {
                            //������� ���������
	                        $text_error = "<br/><p id='name_error3'>������ ����� ��������� ������������ �������� !<br/>
	                                       ������������ ������ ������������ ����� �� ������ ��������� 5 �����.<br/>
	                                       ���������� ��� ���.</p>";
                                           echo $text_error;
                                     }
                                 }
               if($error_code == 0 && $text_error == "")//���� ������ �������� ����� ���
			      {
				  // ���������� ������� ��� �������� ������ 
				   $path = PATHIMAGES;//"C:/wamp/www/SiteTest/uploads/"
				   //// ������ ��� ���� �������� !!!!!!(/home/moserg777/domains/svetlodar-eco-shop.ru/public_html/uploads)
				   $file_name = $_FILES['userfile']['name']; // �������� �������� ����� (������� ��� ����������).
	               $ext = substr($file_name, strpos($file_name,'.'), strlen($file_name)-1); // �������� ���������� ����� �����. 
	               $file_strip = str_replace(" ","_",$file_name); //�������� ������� � �������� �����
                   // ���������� ���������� � ������ ������������� �����
				   //$file_name = basename($userfile_name);
				   // ������������� ��� ��� ������������ �����
                   $date_img = date("His");//��� ����� ���������� ���������� ����� (���� ��� ���)
                   $indifikator = mt_rand(1, 10000);//���������� ����� �� 1 �� 10000
                   $indifikator_img = $date_img.$indifikator;//��������� ����� � � �������������� �����
                   $file_name = "image_".$indifikator_img.$ext;//�������� ����� ���������� ���
				     
	   chmod($path, 777); // ������ ����� ������� 
       // ��������� �������� �� ���� 
       if(is_uploaded_file($userfile_tmp) )
       { 
         // ���� ���� �������� �������, ���������� ��� 
         // �� ��������� ���������� � �������� 
         if(copy($userfile_tmp,$path .= $file_name)) 
                { //������� ���� �� ��������� ����� �������				
				  //unlink ($userfile_tmp);
				  //������� ���������
	 $text_message ="<br/><p style='text-align: center; font-size:14px; color:green; '>���� &nbsp;".$userfile_name."&nbsp; ������� �������� !</p>";
     echo $text_message;
	 // ���������� ��� ����������� ����� � ���������� ������
     if (!isset($_SESSION['reg']['foto']))
         {$_SESSION['reg']['foto'] = $file_name;} // ���� ���������� ������� � ��������� ���������� �� ���������� ����������� �������� 
	       else// ����� �������������� �������� ���������� ������ 
	         {$_SESSION['reg']['foto'] = $file_name;}	
	 			    			  
				}//���������  ���� ���� �������� �������
		     }//���������  �������� �������� �� ����		   
	      } // ��������� ���� ������ �������� ����� ���   
		} //��������� ���� ���������� ������ ����� �������� ����������� 
	} //��������� ���� ������ ������ ��������� �����������
			  else 
			       {// ����� ������� ���������
	                             $text_error="<br/><p id='name_error3'>���� �� �������� !
	                             ������ �� ������� �������.
								 ���������� ��� ���.</p>";
                                 echo $text_error; 				
                              }
                           }								
/* ===�������� ����� 2 ������� === */

/* ===�������� ����� 3 ������� === */
function upload_image()
{
// ����������� ���� ������ ��� �������� ������
// 0 - ������ ���,���� ��������
// 1 - ������ ����� ��������� ������������ �������� ��������� � php.ini
// 2 - ������ ����� ��������� ������������ �������� ��������� � � multipart-����� (�������� - MAX_FILE_SIZE)
// 3 - ���� �������� �� ���������
// 4 - ���� �� ��������	
	  
	  $error_code  = $_FILES["userfile"]["error"];//��� ������
	  $max_filesize=2*1024*1024;// ���������� ������������ ������ �����
      $allowed_filetypes = array('.jpg','.jpeg','.gif','.png'); // ��� ����� ���� ������, ������� ������� ���������. 
	  $filename = $_FILES['userfile']['name']; // �������� �������� ����� (������� ��� ����������).
	  $ext = substr($filename, strpos($filename,'.'), strlen($filename)-1); // �������� ���������� ����� �����. 
	  $file_strip = str_replace(" ","_",$filename); //�������� ������� � �������� �����
	  $upload_path = 'C:/wamp/www/'; //������������� ���� �������� � ��������� ����� ������� (����� ���� root.php !!!) 
	  $path = 'uploads/'; //������������� ���� �������� � ����� �������� ����� 
	  $path .= $file_strip;
	  //chmod($upload_path, 777); // ������ ����� ������� 
	 
  // ���������, �������� �� ��� �����, ���� ��� - DIE � ����������� ������������. 
  if(!in_array($ext,$allowed_filetypes)) 
        {
die('<div class="error">�� ��������� ��������� ������������ ��� ����� !(���������� ������: .jpg .png .jpeg .gif)</div>');
	    }
		
      // ������ ��������� ������ �����, ���� �� ������� �������, �� DIE � ����������� ������������.
      if(filesize($_FILES['userfile']['tmp_name']) > $max_filesize) 
	           {
			die('<div class="error">������ ����� ��������� 5Mb ! ���������� ������� ������ ���� !</div>');
 	           }
			   
         if(move_uploaded_file($_FILES['userfile']['tmp_name'],$upload_path .= $file_strip))
                { 					
					   // ���� ���� �������� �������, ���������� ��� 
				       // �� ��������� ���������� � �������� 
                       if(copy($_FILES['userfile']['tmp_name'],$path)) 
                                 { 					
                                   echo '<div class="success">���� '. $file_strip .' ������� �������� !</div>';
				                   //������� ���� �� ��������� ����� �������
				                   unlink ($_FILES['userfile']['tmp_name']);
				                  }
					
			     echo '<div class="success">���� '. $file_strip .' ������� �������� !</div>';
				 
				 // foto
                 if (!isset($_SESSION['reg']['foto']))
                    {$_SESSION['reg']['foto'] = $file_strip;} // ���� ���������� ������� � ���� �� ���������� ����������� ������ �������� 
	                  else// ����� ����������� ���������� �������� ���� �� ������� ������
	                      {$_SESSION['reg']['foto'] = $file_strip;}
				 }
				  
			 
	         else {
                echo '<div class="error">'.$error_code.'���� '. $file_strip .' �� ��������. ���������� �����..</div>'; }

}
/* ===�������� ����� 3 ������� === */

/* ===�������� ����� 4 ������� === */
function upload_image_size()
{
// ������� ��� �������� ������
$dir = './upload/';
// � multipart-����� �� ���������� ��� input-���� upfile
// ��� ��� ����� ������������ ��� ������ � �������� $_FILES
if(isset($_FILES["upfile"]))
{
    $upfile      = $_FILES["upfile"]["tmp_name"];
    $upfile_name = $_FILES["upfile"]["name"];
    $upfile_size = $_FILES["upfile"]["size"];
    $upfile_type = $_FILES["upfile"]["type"];
    $error_code  = $_FILES["upfile"]["error"];

// ���� ������ ���
    if($error_code == 0)
    {
     // ������� ���������� � �������� �����
     echo "��� ����� �� �������: ".$upfile."<br>";
     echo "��� ����� �� ���������� ������������: ".$upfile_name."<br>";
     echo "MIME-��� �����: ".$upfile_type."<br>";
     echo "������ �����: ".$upfile_size."<br><br>";

     // ��������� ��� �����
     $upfile_name = $dir . $upfile_name;

     // �������� ��������� ���� � ������� $dir, ��� ����� ����� ��������,
     // �. �. ��� �� ���������� � ������������
     // ������ �������� � ��������
     // ������ �������� � ����������
     copy($upfile,$upfile_name);

     // ����� ������������ ������� move_uploaded_file()
     //move_uploaded_file($upfile, $upfile_name);

     }
}
// ------------ 2 ������� ---------------------------------------------------------------------///    
	 $err_uploaded = "";
     if($_FILES["file_name"]["error"]==0 && $_FILES["file_name"]["size"]>0) 
	    {
          if ($_FILES["file_name"]["type"]!="image/gif") 
		      {
               $err_uploaded .= "�������� ������ ���� � ������� gif<br>";
              }
                else {
                       if ($_FILES["file_name"]["size"]>10000) 
					      {
                            $err_uploaded .= "������ �������� ������ �����������<br>";
                          }
                            else {
                                     $img = imagecreatefromgif($_FILES["file_name"]["tmp_name"]);
                                     $img_X = imagesx($img);
                                     $img_Y = imagesy($img);
                                     imagedestroy($img);
                                       if ($img_X!=88 || $img_Y!=31) {
                                           $err_uploaded .= "������ �������� ������ ���� 88*31<br>";
                                           }
                                         }
                                      }
               if (!$err_uploaded) 
			      {
                   $path = "/home/jquery/www/site1/public_html/newfile/";
                   $path .= $_FILES["file_name"]["name"];
                   if (@move_uploaded_file($_FILES["file_name"]["tmp_name"], $path)) 
				       {
                        chmod($path, 0644); // ������ ����� �������
                        echo "���� ������� ��������<br>";
                        echo '<img src="' . $_FILES["file_name"]["name"] . '" alt="">';
                       }
                         else {
                                 echo "������ ��� ��������";
                              }
                      }
                         else {
                                 echo $err_uploaded;
                              }
                          }
                            else echo "������ ��� ��������";
}
?>