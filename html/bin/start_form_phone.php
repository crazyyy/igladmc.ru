<?php
// ��� �������� ������ � ����� ������ ��������� ������
// ������� ������ ������� ��������� � �����
//define('SITES', TRUE);

/* ��������� ������� ������� � ������� ����� �������� */
//defined('SITES') or die('Access denied !');

// ����������� ����� ������������
require_once '../functions/config.php';

// ����������� ����� ���������� �������
require_once '../functions/functions.php';	  

// ���
if ((isset($_POST['name'])) && (strlen(trim($_POST['name'])) > 0)) 
    {
	  $name = stripslashes(strip_tags($_POST['name']));
         } else 
		        {$name = '��� �� �������';}
// �������
if ((isset($_POST['phone'])) && (strlen(trim($_POST['phone'])) > 0)) 
    {
	   $phone = stripslashes(strip_tags($_POST['phone']));
          } else 
		         {$phone = '������� �� ������';}
		//------- ���������� ���������� ��� �������� ������ ������ -----------///			 		 
		$name = mb_convert_encoding($message,"windows-1251","UTF-8");
		// ���������� � ������ ������ � ���������� ��������� 
        $name = $_POST['name'];// ���� ���(���)
        $phone = $_POST['phone'];// ���� �������
        $var_date = date("Y-m-d H:i:s");//���������� ���������� ��� ����������� ������� ����
        //��������� ��������� ������
        $to = ADMINMAIL;//���������� � ������� ����������� ����� �� ������� ������������ ��������� 
        $subject = '����������� ������ �� �������� ������'; //�e�������� $subject ��������� ���� ������
        $from = 'site visitor';//������� � ������ ��������� - �� ���� ������
        $headers  = "From: <".$from.">\r\n";                                              
        $headers  .= "MIME-Version: 1.0\r\n";//��������� ���������� MIME-��� ���������
        $headers  .= "Content-type:text/html; charset=\"UTF8\" r\n";//������ ���������
         ///-------------------- ��������� ��������� ---------------------///
         $message = ///� ������ ���������� ���������� ���� ������
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
			   //������ �� ��������� "UTF-8" � ��������� "windows-1251"		
               //$name = mb_convert_encoding($message,"windows-1251","UTF-8");
			   //$message = mb_convert_encoding($message,"windows-1251","UTF-8");
               //������ �� ��������� "UTF-8" � ��������� "windows-1251"
			   //$subject = mb_convert_encoding($subject,"windows-1251","UTF-8");				
               //���������� ������
               @mail($to,$subject,$message,$headers);   
               exit;
?>