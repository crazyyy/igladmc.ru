<?php 
//������� � ����������� �������� ������ ������ ��� ����� ������ ������  - ������ �������

/// ������� ������ ������� ��������� � �����
//define('SITES', TRUE);

/* ��������� ������� ������� � ������� ����� �������� */
//defined('SITES') or die('Access denied !');

// ����������� ����� ������������
require_once 'functions/config.php';

// ����������� ����� ���������� �������
require_once 'functions/functions.php';	

// ��������� ����� ������
session_start();

// foto
if (!isset($_SESSION['reg']['foto']))
    {$foto_us = '����������� �� �������';} // ���� ���������� ������� � ��������� ���������� �� ���������� ����������� ������ �������� 
	 else// ����� ����������� ���������� �������� �� �������
	  {$foto_us = ($_SESSION['reg']['foto']);}
// ������
if (!isset($_SESSION['reg']['format']))
    {$format_us = '������ �� ������';} // ���� ���������� ������� � ����� ������� �� ���������� ����������� ������ �������� 
	 else// ����� ����������� ���������� �������� �� �������
	  {$format_us = ($_SESSION['reg']['format']);}
// ���
if (!isset($_SESSION['reg']['name']))
    {$name_us = '';} // ���� ���������� ������� � ��� ������������ �� ���������� ����������� ������ �������� 
	 else// ����� ����������� ���������� �������� ��� �� �������
	  {$name_us = ($_SESSION['reg']['name']);}
// email
if (!isset($_SESSION['reg']['email']))
    {$email_us = '';} // ���� ���������� ������� � email ������������ �� ���������� ����������� ������ �������� 
	 else// ����� ����������� ���������� �������� email �� �������
	  {$email_us = ($_SESSION['reg']['email']);}
// �������
if (!isset($_SESSION['reg']['phone']))
    {$phone_us = '';} // ���� ���������� ������� � phone ������������ �� ���������� ����������� ������ �������� 
	 else// ����� ����������� ���������� �������� phone �� �������
	  {$phone_us = ($_SESSION['reg']['phone']);}
// �����
if (!isset($_SESSION['reg']['addres']))
    {$addres_us = '';} // ���� ���������� ������� � ������� ������������ �� ���������� ����������� ������ �������� 
	 else// ����� ����������� ���������� �������� ������ �� �������
	  {$addres_us = ($_SESSION['reg']['addres']);}

?>
<!DOCTYPE HTML>
 <html>
  <head>
   <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
   <!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> -->
    <meta http-equiv="X-UA-Compatible" content="IE = Edge, chrome = 1"><!---->
    <meta name="keywords" content="������ ��� ��������� �� ����������"/><!-- ������ �������� ���� --> 
    <meta name="description" content="������ ��� ��������� �� ����������"/><!-- �������� �������� -->
    <meta name="viewport" content="width=device-width"><!-- ���������� ���������� �������� � �������� ������� -->
    <meta name="viewport" content="initial-scale=1" /><!-- ������ ��������� ������� �������� -->
    <!-- CSS -->
      <link rel="stylesheet" type="text/css" href="css/style_test.css" />
      <link rel="stylesheet" type="text/css" href="css/modal_test.css" />
      <link rel="stylesheet" type="text/css" href="css/buttons.css" /> 
      <link rel="stylesheet" type="text/css" href="css/window.css" /> 
    <!-- MEDIA CSS -->
    
    <!--  END CSS -->
    <!--  IS -->
    <!-- ������ - ���������� ��� ��������� �������� ������ ��� ������ �� �� 9 ������ � ���� -->   
      <!--[if lt IE 9]>
       <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
      <![endif]-->
   <!-- ����� - ���������� ��� ��������� �������� ������ ��� ������ �� �� 9 ������ � ���� -->  
   <!-- START SLIDER -->
<script type="text/javascript" src="js_test/jquery.min.js"></script> <!-- ���������� ��������� ������ jQuery -->
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
    
<title>����� ������ - �������</title>
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
         <span>�������� �������</span>
        </div><!-- END .header_logo -->
       </div><!-- END .header_box_l --> 
        
       <div class="header_box_m"> 
        <div class="header_menu">
         <ul>
          <li><a href="index.php#nabor">������ ������</a></li>             
          <li><a href="index.php#sales">�����</a></li>
          <li><a href="index.php#pochemu_my">������ ��</a></li>
          <li><a href="index.php#zakaz">��� ��������</a></li>
          <li><a href="index.php#otzivy">������</a></li>
         </ul>
        </div><!-- END .header_menu -->
       </div><!-- END .header_box_m --> 
      
       <div class="header_box_c">  
        <div class="header_contact">
        
            <p><?= ADMINPHONE ?></p>
            <a href="#dialog" name="modal"><span>�������� �������� ������</span></a>
         
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
           <h2>����� ������ ��������� ������</h2>
            <img class="width_img" src="images_test/h2_top.png" id="img_form" />
            <div id="form_label"> 
             <h4>������� ���� ���������� ������ � �� ��� ���������� :</h4>          
              <p>���� ���������� (*) ����������� � ����������.</p> 
               </div><!-- END .form_label -->
 <a name="top">&nbsp;</a>  
         <div id="contact_form">
          <form name="contact" method="post" action="">
           <table class="zakaz-data" border="0" cellspacing="0" cellpadding="0">
            <tr>
	         <td class="zakaz-txt">�.�.�.(*)</td>
	         <td class="zakaz-inpt"><input type="text" name="name" id="name" size="30" value="" /></td>
	         <td class="zakaz-error"><p class="error" id="name_error">���� ����������� � ���������� !</p></td>		
	        </tr>
	        <tr>
	         <td class="zakaz-txt">�������(*)</td>
	         <td class="zakaz-inpt"><input type="text" name="phone" id="phone" size="30" value="" /></td>
             <td class="zakaz-error"><p class="error" id="phone_error">���� ����������� � ���������� !</p></td>	
	       </tr>
	      </table>
           <br/>
           <input type="submit" name="submit" class="button" id="submit_btn" value="�������� ������" />
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
      <h2>����� ������ ������</h2>
       <img class="width_img"  src="images_test/h2_top.png" id="img_form" />
  
   <div id='message'>
    <h2 style="color:green;">���� ����� ������ �� ��������� !</h2>
     <p style="color:green;">������� �� ����� ������ ��������-�������� ! ����������� �� �����, � ��������� ����� � ���� �������� ��� �������� ��� ��������� ��������.</p>
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