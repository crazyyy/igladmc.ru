<?php
//��� �������� ������ ������ � ����� ������ ������� 
// ������� ������ ������� ��������� � �����
//define('SITES', TRUE);

/* ��������� ������� ������� � ������� ����� �������� */
//defined('SITES') or die('Access denied !');

// ����������� ����� ������������
require_once '../functions/config.php';

// ����������� ����� ���������� �������
require_once '../functions/functions.php';	

// ��������� ����� ������
session_start();
// ���������� ������ foto
if (!isset($_SESSION['reg']['foto']))
    {$foto_us = '����������� �� �������';} // ���� ���������� ������� � ��������� ���������� �� ���������� ����������� ������ �������� 
	 else// ����� ����������� ���������� �������� �� �������
	  {$foto_us = ($_SESSION['reg']['foto']);}
// ������� ���� ������
    if ((isset($_POST['hiden_format'])) && (strlen(trim($_POST['hiden_format'])) > 0)) 
    {
	  $format_us = stripslashes(strip_tags($_POST['hiden_format']));
      $_SESSION['reg']['format']  = $format_us;
		 } else 
		        {
				 $format_us = '������ �� ������'; 
				}
// ���� ���
    if ((isset($_POST['name2'])) && (strlen(trim($_POST['name2'])) > 0)) 
    {
	  $name = stripslashes(strip_tags($_POST['name2']));
      $_SESSION['reg']['name']  = $name_us = $name;
		 } else 
		        {
				 $name_us = '��� �� �������'; 
				}
// ���� �����
if ((isset($_POST['email2'])) && (strlen(trim($_POST['email2'])) > 0)) 
    {
	  $email = stripslashes(strip_tags($_POST['email2']));
      $_SESSION['reg']['email']  = $email_us = $email;    
		 } else 
		        {
				$email_us = 'email �� ������';
				}				
// ���� �������
if ((isset($_POST['phone2'])) && (strlen(trim($_POST['phone2'])) > 0)) 
    {
	   $phone = stripslashes(strip_tags($_POST['phone2']));
       $_SESSION['reg']['phone']  = $phone_us = $phone;   
		  } else 
		         {
				 $phone_us = '������� �� ������';
				 }
// ���� �����
if ((isset($_POST['adres2'])) && (strlen(trim($_POST['adres2'])) > 0)) 
    {
	   $adres = stripslashes(strip_tags($_POST['adres2']));
       $_SESSION['reg']['addres']  = $addres_us = $adres;    
		  } else 
		         {
				 $addres_us = '����� �� ������';
				 }				 
		//------- ���������� ���������� ��� �������� ������ ������ -----------///			 		
		// ���������� � ������ ������ � ���������� ��������� 
        $name = $name_us;// ���� ���(���)
        $email = $email_us;// ���� �����
        $phone = $phone_us;// ���� �������
        $addres = $addres_us;// ���� �����
		$format = $format_us;// ���� ������
		$foto = $foto_us;// ���� �����������
		$var_date = date("Y-m-d H:i:s");//���������� ���������� ��� ����������� ������� ����
        //��������� ��������� ������
        $to = ADMINMAIL;//���������� � ������� ����������� ����� �� ������� ������������ ��������� 
        $subject = '����������� ������ �� ������'; //�e�������� $subject ��������� ���� ������
        $from = '���������� �����';//������� � ������ ��������� - �� ���� ������
        $headers  = "From: <".$from.">\r\n";                                              
        $headers  .= "MIME-Version: 1.0\r\n";//��������� ���������� MIME-��� ���������
        $headers  .= "Content-type:text/html; charset=\"windows-1251\" r\n";//������ ���������
         ///-------------------- ��������� ��������� ---------------------///
         $message = ///� ������ ���������� ���������� ���� ������
        '<html>
          <head>
           <title>����������� ������ �� ������</title>
            </head>
             <body>
              <p><b>� ��� ����� ������ �� ������ :</b></p>
         <table>
          <tr>
            <td><b>��� ���������:</b>&nbsp;&nbsp;'.$name.'</td>
              </tr>
         <tr>
          <td><b>E-mail ���������:</b>&nbsp;&nbsp;'.$email.'</td>
           </tr>
         <tr>
          <td><b>������� ���������:</b>&nbsp;&nbsp;'.$phone.'</td>
           </tr>
         <tr>
          <td><b>����� �������� ������:</b>&nbsp;&nbsp;'.$addres.'</td>
           </tr>
         <tr>
          <td><b>��������� ������ :</b>&nbsp;&nbsp;'.$format.'</td>
           </tr>
         <tr>
          <td><b>����������� :</b>&nbsp;&nbsp;'.$foto.'</td>
           </tr>
	     <tr>
          <td><b>����� ����������� ������ :</b>&nbsp;&nbsp;'.$var_date.'</td>
           </tr>
            </table>
             </body>
               </html>';
			   //������ �� ��������� "UTF-8" � ��������� "windows-1251"		
               //$message = mb_convert_encoding($message,"windows-1251","UTF-8");
               //������ �� ��������� "UTF-8" � ��������� "windows-1251"
			   //$subject = mb_convert_encoding($subject,"windows-1251","UTF-8");				
			   //���������� ������
               if (@mail($to,$subject,$message,$headers))   
               {//���� ������ ���������� �������
			   //���������� ���������� ������
			   unset($_SESSION['reg']['name']);
			   unset($_SESSION['reg']['email'] );
			   unset($_SESSION['reg']['phone']);
			   unset($_SESSION['reg']['addres'] );
			   unset($_SESSION['reg']['foto'] );
			   unset($_SESSION['reg']['format'] );
			   //��������� �� �������� � ���������� �� �������� ������
			   header("Location: ../format_final.php"); 
			   } else {//����� ��������� �� �������� � ���������� � ��������� �������� ������
						//��������� �� �������� � ���������� �� �������� ������
			            header("Location: ../format_error.php"); 
				      }
?>