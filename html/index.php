<?php 
// ������� ������ ������� ��������� � �����
//define('SITES', TRUE);

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
      <link rel="stylesheet" type="text/css" href="css/style_test.css" /><!-- BAZIC STYLES -->
      <link rel="stylesheet" type="text/css" href="css/modal_test.css" /><!-- FOR MODAL WINDOW -->
      <link rel="stylesheet" type="text/css" href="css/buttons.css" /> <!-- FOR BUTTONS -->
      <link rel="stylesheet" type="text/css" href="css/colorbox.css" /> <!-- FOR ZOOM FOTO -->
    <!-- MEDIA CSS -->
 <!-- <link  rel="stylesheet" media="only screen and ( min-width: 880px) and ( max-width: 1024px)" href="css/media_880px_1024px.css"/> -->
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
<!-- START SUUM FOTO -->
<script type="text/javascript" src="js_test/jquery.min_zoom.js"></script>
<script type="text/javascript" src="js_test/jquery.lazyload.mini.js"></script>
<script type="text/javascript" src="js_test/jquery.colorbox-min.js"></script>   
<script>
     $(document).ready(function () {
     $("img").lazyload({effect:"fadeIn"});
     $("a[rel='colorbox']").colorbox({maxWidth:"90%",maxHeight:"90%",opacity:"0.7"});
     });
</script>
<!-- END SUUM FOTO -->   
<!--  END IS -->
    
<title><?= TITLE ?></title>

</head>
   <body>      
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
          <li><a href="#nabor">������ ������</a></li>             
          <li><a href="#sales">�����</a></li>
          <li><a href="#pochemu_my">������ ��</a></li>
          <li><a href="#zakaz">��� ��������</a></li>
          <li><a href="#otzivy">������</a></li>
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

<div class="main">

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
 <a name="top"></a>  
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
      <div class="display_content1">
     
       <!--<img id="stretch" src="images_test/background1.jpg"/>-->
       
       <div class="content1">
        <h2>������������ ������� ���<br/>
           ��������� ���������,<br/>
           <span>�� ����� �� �����<br/>
           ���������� ���� ����������<br/>
          (�����������, �������)</span></h2>
       </div><!-- END .content1 -->
       <div class="box_content2">
        
             <div class="content2">
               <a href="#sales"><img class="width_img"  src="images_test/button.png" title="������� � �����"/></a>
             </div><!-- END .content2 -->
        
             <div class="content3">
<!-- START FORM ZAKAZ -->            
      <form method="post" action="nabor.php">
        <table class="tbl_zakaz_nabor" border="0" cellspacing="0" cellpadding="0">
           <tr>
            <td class="zakaz_nabor_left">��� :&nbsp;</td>
             <td class="zakaz_nabor_txt">
              <img class="width_img_form"  src="images_test/form_top.png"/>
              <input type="text" name="name" value="<?= $name_us ?>" />
               <img class="width_img_form"  src="images_test/form_bot.png"/></td>
             <td class="zakaz_nabor_right">&nbsp;</td>
            </tr>
          <tr>
           <td class="zakaz_nabor_left">Email :&nbsp;</td>
             <td class="zakaz_nabor_txt">
              <img class="width_img_form"  src="images_test/form_top.png"/>  
               <input type="text" name="email" value="<?= $email_us ?>"/>
               <img class="width_img_form"  src="images_test/form_bot.png"/></td>
             <td class="zakaz_nabor_right">&nbsp;</td>
           </tr>
          <tr>
           <td class="zakaz_nabor_left">������� :&nbsp;</td>
             <td class="zakaz_nabor_txt">
             <img class="width_img_form"  src="images_test/form_top.png"/>
              <input type="text" name="phone" value="<?= $phone_us ?>" />
              <img class="width_img_form"  src="images_test/form_bot.png"/></td>
            <td class="zakaz_nabor_right">&nbsp;</td>
          </tr>    
		</table>
        <button class="button_zakaz_nabor" name="start_nabor">�������� �����</button>
    </form>	
<!-- END FORM ZAKAZ -->            
             </div><!-- END .content3 -->
          </div><!-- END .box_content2 -->
        </div><!-- END .display_content1 -->

<!--  END DISPLAY 1 --> 
      <div class="preimuchestva">
       <div class="content4">
        
          <div class="box_content4">
        
             <div class="left_con_4">
               <img class="width_img"  src="images_test/logo_preim1.png"/>
               <p>�������� �� ���� ������</p>
             </div><!-- END .left_con_4 -->
               
             <div class="center_con_4">
               <img class="width_img"  src="images_test/logo_preim2.png"/>
               <p>������ ��� ���������</p>
             </div><!-- END .center_con_4 -->
              
             <div class="right_con_4">
               <img class="width_img"  src="images_test/logo_preim3.png"/>
               <p>������������ ������ �� 2-� ����</p>
             </div><!-- END .right_con_4 --> 
                 
          </div><!-- END .box_content4 -->
          
       </div><!-- END .content4 -->
      </div><!-- END .preimuchestva -->
      
      <div class="primery_rabot">
        <div class="content5">
         <div class="content_h2">
           <img class="width_img_form"  src="images_test/h2_top.png"/>  
           <h2>������� ������� �����:</h2>
           <img class="width_img_form"  src="images_test/h2_bot.png"/>
         </div><!-- END .content_h2 -->
         
         <div class="slider_primery">
<!-- START SLIDER PRIMERY RABOT -->
           <div class="carousel">

             <div class="carousel-button-left"><a href="#"></a></div>
              <div class="carousel-button-right"><a href="#"></a></div>
             
               <div class="carousel-wrapper">
                <div class="carousel-items">
                
                <div class="carousel-block"> 
                <a class="cboxElement" rel="colorbox" href="images_test/slider_foto1_big.jpg" >
                 <img class="no_width_img"  src="images_test/slider_foto1.jpg" alt="" title=""/></a> 
                </div><!-- END .carousel-block -->
                
                <div class="carousel-block">  
                <a class="cboxElement" rel="colorbox" href="images_test/slider_foto2_big.jpg" >  
                  <img class="no_width_img"  src="images_test/slider_foto2.jpg" alt="" title=""/></a>
                </div><!-- END .carousel-block -->
                
                <div class="carousel-block">  
                <a class="cboxElement" rel="colorbox" href="images_test/slider_foto3_big.jpg" >  
                  <img class="no_width_img"  src="images_test/slider_foto3.jpg" alt="" title=""/></a> 
                </div><!-- END .carousel-block -->
                
                <div class="carousel-block">  
                 <a class="cboxElement" rel="colorbox" href="images_test/slider_foto4_big.jpg" > 
                  <img class="no_width_img"  src="images_test/slider_foto4.jpg" alt="" title=""/></a> 
                </div><!-- END .carousel-block -->
                
                <div class="carousel-block">  
                 <a class="cboxElement" rel="colorbox" href="images_test/slider_foto5_big.jpg" > 
                  <img class="no_width_img"  src="images_test/slider_foto5.jpg" alt="" title=""/></a>
                </div><!-- END .carousel-block -->
                                
              </div><!-- END <div class="carousel-items"> -->
            </div><!-- END <div class="carousel-wrapper"> -->
          </div><!-- END <div class="carousel"> 
<!-- END SLIDER PRIMERY RABOT -->
        </div><!-- END .slider_primery -->
      
      </div><!-- END .content5 -->
<a name="nabor"></a>
     </div><!-- END .primery_rabot -->
      
      <div class="sostav_nabora">
       <div class="content6">
         <div class="content_h2">
           <!--<a name="nabor">&nbsp;</a>-->
           <img class="width_img_form"  src="images_test/h2_top.png"/>  
            <h2>�� ���� ������� �����:</h2>
           <img class="width_img_form"  src="images_test/h2_bot.png"/>
         </div><!-- END .content_h2 -->
         <img  id="sostav_nabora1" src="images_test/sostav_nabora1.png"/>   
         <img  id="sostav_nabora2" src="images_test/sostav_nabora2.png"/>   
         <img  id="sostav_nabora3" src="images_test/sostav_nabora3.png"/>   
         <img  id="sostav_nabora4" src="images_test/sostav_nabora4.png"/>   
         <p id="sostav_p1">����</p>   
         <p id="sostav_p2">������ <br/>DMC</p>
         <p id="sostav_p3">�����</p>
         <p id="sostav_p4">����� � ���� � ���</p>   
         <a href="#format"><span id="button_zakaz">������� � ������</span></a>   
            
       </div><!-- END .content6 -->
     </div><!-- END .sostav_nabora -->
     
      <div class="sale">
        <div class="content7">
         <div class="content_h2">
           <img class="width_img_form"  src="images_test/h2_top.png"/>  
            <h2>�����!!! <span>����� ������!!!</span></h2>
           <img class="width_img_form"  src="images_test/h2_bot.png"/>
         </div><!-- END .content_h2 -->
         <p>������� ����� ������� �� �������� ������ <b>10%</b> <br/>�� ��������� ������� !</p>
       </div><!-- END .content7 -->
<a name="format"></a>        
      </div><!-- END .sale -->
      <div class="format">
       <div class="content8">
        <div class="content_h2">
         <p>&nbsp;</p><!--<a name="format">&nbsp;</a>-->
           <img class="width_img_form"  src="images_test/h2_top.png"/>  
            <h2>������� �� ������ ��� ������</h2>
           <img class="width_img_form"  src="images_test/h2_bot.png"/>
         </div><!-- END .content_h2 -->
          
          <div class="box_ul8">
            <ul>
             <li><img class="width_img"  src="images_test/logo_format_box.png"/></li>
             <li><img class="width_img"  src="images_test/logo_format_box.png"/></li>
             <li><img class="width_img"  src="images_test/logo_format_box.png"/></li>
             <li><img class="width_img"  src="images_test/logo_format_box.png"/></li>
             <li><img class="width_img"  src="images_test/logo_format_box.png"/></li>
             <li><img class="width_img"  src="images_test/logo_format_box.png"/></li>
             <li><img class="width_img"  src="images_test/logo_format_box.png"/></li>
            </ul>
          </div><!-- END .box_ul8 -->   

            <div class="box_content8">
            
             <div class="box_format1">
               <span>A6</span>
               <p>105mm/148mm</p>
               <span><b>1100 �</b></span>
               <a href="format.php?format=A6" id="a_format">��������</a>
             </div><!-- END .box_format1 -->
               
             <div class="box_format2">
               <span>A5</span>
               <p>148mm/210mm</p>
               <span><b>1850 �</b></span>
               <a href="format.php?format=A5" id="a_format1">��������</a>
             </div><!-- END .box_format2 -->
              
             <div class="box_format3">
               <span>A4</span>
               <p>210mm/297mm</p>
               <span><b>1950 �</b></span>
               <a href="format.php?format=A4" id="a_format2">��������</a>
             </div><!-- END .box_format3 -->
             
             <div class="box_format4">
               <span>A3</span>
               <p>297mm/420mm</p>
               <span><b>2150 �</b></span>
               <a href="format.php?format=A3" id="a_format3">��������</a>
             </div><!-- END .box_format4 -->
             
             <div class="box_format5">
               <span>A2</span>
               <p>420mm/594mm</p>
               <span><b>2450 �</b></span>
               <a href="format.php?format=A2" id="a_format4">��������</a>
             </div><!-- END .box_format5 -->
             
             <div class="box_format6">
               <span>A1</span>
               <p>594mm/841mm</p>
               <span><b>2700 �</b></span>
               <a href="format.php?format=A1" id="a_format5">��������</a>
             </div><!-- END .box_format6 -->
             
             <div class="box_format7">
               <span>A0</span>
               <p>841/1189mm</p>
               <span><b>3900 �</b></span>
               <a href="format.php?format=A0" id="a_format6">��������</a>
             </div><!-- END .box_format7 -->      

          </div><!-- END .box_content8 -->
       <div class="content_h2">
        <img class="width_img_form"  src="images_test/h2_top_reset.png"/>
       </div><!-- END .content_h2 --> 
     </div><!-- END .content8 --> 
    </div><!-- END .format -->
<a name="shema_zak"></a>     
      <div class="zakaz_shema">
       <div class="content9">
        <div class="box_content9">
        
             <div class="content14">
               <img id="content14_img" src="images_test/logo_content_14.png" />
             </div><!-- END .content14 -->
        
             <div class="content15">
                <img id="content15_img_top" src="images_test/h2_top.png"/>   
                  <p>�� ������ �������� ������ �����+���� � ���<br/>
                     ����� �� <strike>1000 ������</strike><br/> 
                     <span>500</span> <span id="color_red">������</span><br/>
                     <b>����������� ����������!!!</b></p>
                
                <a href="shema.php" name="modal4"><span id="button">�������� �����</span></a> 
                <img class="width_img_form"  src="images_test/h2_top_reset.png"/>
                
                <!--<a href="#"><button class="minimal" value="�������� �����">�������� �����</button></a>-->       
                  </div><!-- END .content15 -->
               
          </div><!-- END .box_content9 -->
       </div><!-- END .content9 --> 

<a name="pochemu_my"></a>        
      </div><!-- END .zakaz_shema -->
      <div class="vibor_client">
       <div class="content10">
        <div class="content_h3">
          <!--<a name="pochemu_my">&nbsp;</a>-->
           <img class="width_img_form"  src="images_test/h3_top.png"/>  
            <h3>������ ��� ������� ��� ����� 1860 ��������</h3>
           <img class="width_img_form"  src="images_test/h3_bot.png"/>
         </div><!-- END .content_h3 -->
         <div class="klienty_swou">   
            <table class="vibor_klienty" border="0" cellspacing="0" cellpadding="0">
			  <tr>
                <td class="vibor-txt_left"><p>�������� ������� ��� ������������</p></td>
                <td class="vibor-img"><img class="width_img_tbl"  src="images_test/vibor-img1.png"/> </td>
                <td class="vibor-img"><img class="width_img_tbl"  src="images_test/vibor-img2.png"/> </td>
                <td class="vibor-txt_right"><p>������ ������� �������� ���� �������� ��������, ��� �������� ��������</p></td>
            </tr>
            <tr>
                <td class="vibor-txt_left"><p>��������������  ������ ��� ���� ������� �������</p></td>
                <td class="vibor-img"><img class="width_img_tbl"  src="images_test/vibor-img3.png"/> </td>
                <td class="vibor-img"><img class="width_img_tbl"  src="images_test/vibor-img4.png"/> </td>
                <td class="vibor-txt_right"><p>��� ����� ������ ������� ��������� ������ ������, ������� ���������� �� ��� �����</p></td>
            </tr>
            <tr>
                <td class="vibor-txt_left"><p>�������������� ������ � ������� ����������</p></td>
                <td class="vibor-img"><img class="width_img_tbl"  src="images_test/vibor-img5.png"/> </td>
                <td class="vibor-img"><img class="width_img_tbl"  src="images_test/vibor-img6.png"/> </td>
                <td class="vibor-txt_right"><p>����� ������� ������ �� ������������ ����������</p></td>
            </tr>
			<tr>
                <td class="vibor-txt_left"><p>����������� ��������������� ���������, ��� ��������� �������� �� �����</p></td>
                <td class="vibor-img"><img class="width_img_tbl"  src="images_test/vibor-img7.png"/> </td>
                <td class="vibor-img"><img class="width_img_tbl"  src="images_test/vibor-img8.png"/> </td>
                <td class="vibor-txt_right"><p>���������� ������ � �������� �������� �� ����� 2-� ����</p></td>
            </tr>
		</table>
 </div><!-- END .klienty_swou -->
 <div class="klienty_hidden">
 <table class="vibor_klienty" border="0" cellspacing="0" cellpadding="0">
			  <tr>
                <td class="vibor-txt_left"><p>�������� ������� ��� ������������</p></td>
                <td class="vibor-img"><img class="width_img_tbl"  src="images_test/vibor-img1.png"/> </td>
              </tr>
              <tr>  
                <td class="vibor-img"><img class="width_img_tbl"  src="images_test/vibor-img2.png"/> </td>
                <td class="vibor-txt_right"><p>������ ������� �������� ���� �������� ��������, ��� �������� ��������</p></td>
             </tr>
            <tr>
                <td class="vibor-txt_left"><p>��������������  ������ ��� ���� ������� �������</p></td>
                <td class="vibor-img"><img class="width_img_tbl"  src="images_test/vibor-img3.png"/> </td>
            </tr>
            <tr>    
                <td class="vibor-img"><img class="width_img_tbl"  src="images_test/vibor-img4.png"/> </td>
                <td class="vibor-txt_right"><p>��� ����� ������ ������� ��������� ������ ������, ������� ���������� �� ��� �����</p></td>
            </tr>
            <tr>
                <td class="vibor-txt_left"><p>�������������� ������ � ������� ����������</p></td>
                <td class="vibor-img"><img class="width_img_tbl"  src="images_test/vibor-img5.png"/> </td>
            </tr>
            <tr>    
                <td class="vibor-img"><img class="width_img_tbl"  src="images_test/vibor-img6.png"/> </td>
                <td class="vibor-txt_right"><p>����� ������� ������ �� ������������ ����������</p></td>
            </tr>
			<tr>
                <td class="vibor-txt_left"><p>����������� ��������������� ���������, ��� ��������� �������� �� �����</p></td>
                <td class="vibor-img"><img class="width_img_tbl"  src="images_test/vibor-img7.png"/> </td>
            </tr>
            <tr>    
                <td class="vibor-img"><img class="width_img_tbl"  src="images_test/vibor-img8.png"/> </td>
                <td class="vibor-txt_right"><p>���������� ������ � �������� �������� �� ����� 2-� ����</p></td>
            </tr>
		</table>
 </div><!-- END .klienty_hidden -->       
        
        
       </div><!-- END .content10 -->
<a name="zakaz"></a>      
      </div><!-- END .vibor_client -->
      <div class="sdelat_zakaz">
        <div class="content11">
         <div class="content_h2">
           <img class="width_img_form"  src="images_test/h2_top.png"/>  
            <h2>��� ������� �����</h2>
           <img class="width_img_form"  src="images_test/h2_bot.png"/>
         </div><!-- END .content_h2 -->
         <img id="chek_zakaz1" src="images_test/chek_zakaz1.png"/>   
         <img id="chek_zakaz2" src="images_test/chek_zakaz2.png"/>   
         <img id="chek_zakaz3" src="images_test/chek_zakaz3.png"/>   
         <img id="chek_zakaz4" src="images_test/chek_zakaz4.png"/>
         <img id="chek_zakaz5" src="images_test/chek_zakaz5.png"/>   
         <img id="chek_zakaz6" src="images_test/chek_zakaz6.png"/>   
         <img id="chek_zakaz7" src="images_test/chek_zakaz7.png"/>   
         <img id="chek_zakaz8" src="images_test/chek_zakaz7.png"/> 
         <img id="chek_zakaz9" src="images_test/chek_zakaz7.png"/>
         <img id="chek_zakaz10" src="images_test/chek_zakaz7.png"/>   
         <img id="chek_zakaz11" src="images_test/chek_zakaz8.png"/>   
         <img id="chek_zakaz12" src="images_test/chek_zakaz9.png"/>   
         <img id="chek_zakaz13" src="images_test/chek_zakaz10.png"/>
             
         <p id="chek_p1">��������<br/>������ ������</p>   
         <p id="chek_p2">������� ������<br/> � ��������� ����</p>
         <p id="chek_p3">� ���� ��������<br/> ��� ��������</p>
         <p id="chek_p4">� ������� 2-� ���� ��<br/> �������� ��� �����</p> 
         <p id="chek_p5">����� 7-14 ���� ��<br/> ����� �� �������� �������</p>
         <p id="chek_p6">����������� ������</p> 
         
         <a href="#format"><span id="button_sdelat_zakaz">������� ������</span></a>  
       </div><!-- END .content11 -->
<a name="otzivy"></a>        
      
      </div><!-- END .sdelat_zakaz -->
      <div class="otziv">
        <div class="content12">
        <div class="content_h2">
           <!--<a name="otzivy">&nbsp;</a>-->
           <img class="width_img_form"  src="images_test/h2_top.png"/>  
            <h2>������� ������ � ������ ����� ��������</h2>
           <img class="width_img_form"  src="images_test/h2_bot.png"/>
         </div><!-- END .content_h2 --> 
         <div class="slider_otzivy">
           <!-- START SLIDER OTZIVY -->
           <div class="carousel_top">

             <div class="carousel-button-left_top"><a href="#"></a></div>
              <div class="carousel-button-right_top"><a href="#"></a></div>
             
               <div class="carousel-wrapper_top">
                <div class="carousel-items_top">
<!-- OTZIV 1 -->    
            <div class="carousel-block_top">  
             <table class="otziv_bloc" border="0" cellspacing="0" cellpadding="0">
			  <tr>
                <td class="otziv_img"><img class="no_width_img"  src="images_test/foto_otziv1.png" alt="" title=""/></td>
                <td class="otziv_txt"><h4>�������</h4>
                  <p>������ ������ ������� �������. �������� ��� ����� ������ ���. �.� � ���� � ������������, �������� ����� �� ��������� ����. ��� ����� �����������. �� �������� ���������� � �������.</p> 
                  <p>����������� ������� ������ � ������ �� &nbsp;<a href="mailto:igolochka8@mail.ru">igolochka8@mail.ru</a></p>
                  </td>
                <td class="otziv_img2">&nbsp;</td>
            </tr>
		  </table>
         </div><!-- END .carousel-block_top -->
<!-- OTZIV 2 -->       
         <div class="carousel-block_top">  
          <table class="otziv_bloc" border="0" cellspacing="0" cellpadding="0">
			  <tr>
                <td class="otziv_img"><img class="no_width_img"  src="images_test/foto_otziv2.png" alt="" title=""/></td>
                <td class="otziv_txt"><h4>������</h4>
                  <p>������ ��� ����������� �������� �� ����������. ��� ������� ����������, ��� �������� ������� ��������. �������� ������ ������ ���� ������� �� ����������, ��� ��� ������! �� ����� �������� �����, �� ���� ������� ��������!  �� ����� ���������� �� ��������, �� � �������� ��� ����������. ������ � ��������. ���� �������) </p>
                  <p>����������� ������� ������ � ������ �� &nbsp;<a href="mailto:igolochka8@mail.ru">igolochka8@mail.ru</a></p>
                  </td>
                <td class="otziv_img2"><img class="no_width_img"  src="images_test/foto_otziv2_mini.png" alt="" title=""/></td>
            </tr>
		  </table>        
        </div><!-- END .carousel-block_top -->
<!-- OTZIV 3 -->       
         <div class="carousel-block_top">  
          <table class="otziv_bloc" border="0" cellspacing="0" cellpadding="0">
			  <tr>
                <td class="otziv_img"><img class="no_width_img"  src="images_test/foto_otziv_woman.png" alt="" title=""/></td>
                <td class="otziv_txt"><h4>��������</h4>
                  <p>�������� ������ �����, ��������� ��� �� ���������� �� ��������� ����. �������, ��� ����� ������!</p>
                  <p>����������� ������� ������ � ������ �� &nbsp;<a href="mailto:igolochka8@mail.ru">igolochka8@mail.ru</a></p>
                  </td>
                <td class="otziv_img2">&nbsp;</td>
            </tr>
		  </table>        
        </div><!-- END .carousel-block_top -->                
<!-- OTZIV 4 -->       
         <div class="carousel-block_top">  
          <table class="otziv_bloc" border="0" cellspacing="0" cellpadding="0">
			  <tr>
                <td class="otziv_img"><img class="no_width_img"  src="images_test/foto_otziv4.png" alt="" title=""/></td>
                <td class="otziv_txt"><h4>��������� ������� </h4>
                  <p> ��������� �����, ������ �� ���� ������ �� ��������� � ������� ���� �� ��������. �������� ����� �� ��������� ���� ����� ������, ��� � �������� �� ������ ����������) ������ ���� �������� ������ ����� ���������, � ��� ����� ��������� </p>
                  <p>��� �������� � ��&nbsp;&nbsp;<a href="https://vk.com/id16215788" target="_blank">vk.com/id16215788</a></p>
                  <p>����������� ������� ������ � ������ �� &nbsp;<a href="mailto:igolochka8@mail.ru">igolochka8@mail.ru</a></p>
                  </td>
                <td class="otziv_img2"><img class="no_width_img"  src="images_test/foto_otziv4_mini.jpg" alt="" title=""/></td>
            </tr>
		  </table>        
        </div><!-- END .carousel-block_top -->  
<!-- OTZIV 5 -->       
         <div class="carousel-block_top">  
          <table class="otziv_bloc" border="0" cellspacing="0" cellpadding="0">
			  <tr>
                <td class="otziv_img"><img class="no_width_img"  src="images_test/foto_otziv5.png" alt="" title=""/></td>
                <td class="otziv_txt"><h4>������</h4>
                  <p>�������� � ������� ��� ������. � ���� �������� �������� ������� ������. �������!</p>
                  <p>����������� ������� ������ � ������ �� &nbsp;<a href="mailto:igolochka8@mail.ru">igolochka8@mail.ru</a></p>
                  </td>
                <td class="otziv_img2"><img class="no_width_img"  src="images_test/foto_otziv5mini.png" alt="" title=""/></td>
            </tr>
		  </table>        
        </div><!-- END .carousel-block_top -->                       
<!-- OTZIV 6 -->       
         <div class="carousel-block_top">  
          <table class="otziv_bloc" border="0" cellspacing="0" cellpadding="0">
			  <tr>
                <td class="otziv_img"><img class="no_width_img"  src="images_test/foto_otziv6.png" alt="" title=""/></td>
                <td class="otziv_txt"><h4>�������</h4>
                  <p>�������� �������� �����. ������ �� �� ��� ������ ����� ��� ������. ��� ����� ������� ���������, ����� ������������, ����� �������, ����� ��������. ��� �����������, ��������� ��� �� ����� ���������.</p>
                  <p>��� �������� � ��&nbsp;&nbsp;<a href="https://vk.com/azarika02" target="_blank">https://vk.com/azarika02</a></p>
                  <p>����������� ������� ������ � ������ �� &nbsp;<a href="mailto:igolochka8@mail.ru">igolochka8@mail.ru</a></p>
                  </td>
                <td class="otziv_img2">&nbsp;</td>
            </tr>
		  </table>        
        </div><!-- END .carousel-block_top -->                               
<!-- OTZIV 7 -->       
         <div class="carousel-block_top">  
          <table class="otziv_bloc" border="0" cellspacing="0" cellpadding="0">
			  <tr>
                <td class="otziv_img"><img class="no_width_img"  src="images_test/foto_otziv7.png" alt="" title=""/></td>
                <td class="otziv_txt"><h4>����</h4>
                  <p>�������� ����� � ���� ������� �������� ��������� �������� � ��������� ����������! �������� ������� �������! ���������� �������� �� ������, ����� � ������ �������! ������ ������ � ���� ����� ��������.</p>
                  <p>��� �������� � ��&nbsp;&nbsp;<a href="https://vk.com/id9537643" target="_blank">https://vk.com/id9537643</a></p>
                  <p>����������� ������� ������ � ������ �� &nbsp;<a href="mailto:igolochka8@mail.ru">igolochka8@mail.ru</a></p>
                  </td>
                <td class="otziv_img2"><img class="no_width_img"  src="images_test/foto_otziv7_mini.jpg" alt="" title=""/></td>
            </tr>
		  </table>        
        </div><!-- END .carousel-block_top -->                               
<!-- OTZIV 8 -->       
         <div class="carousel-block_top">  
          <table class="otziv_bloc" border="0" cellspacing="0" cellpadding="0">
			  <tr>
                <td class="otziv_img"><img class="no_width_img"  src="images_test/foto_otziv8.png" alt="" title=""/></td>
                <td class="otziv_txt"><h4>����������</h4>
                  <p>���������� ������ ��� ������, ���������, �������� � ��������! ������� ��������� ������ �������� ������ �����, ��� ��� �������. ����� ����� ��� ������ �� ����. � ������ ��������� ������ �� ����� � ��� �� ����� ������ ����� � ����. ����� ��������!</p>
                  <p>��� �������� � ��&nbsp;&nbsp;<a href="https://vk.com/alexandradudarenko" target="_blank">https://vk.com/alexandradudarenko</a></p>
                  <p>����������� ������� ������ � ������ �� &nbsp;<a href="mailto:igolochka8@mail.ru">igolochka8@mail.ru</a></p>
                  </td>
                <td class="otziv_img2">&nbsp;</td>
            </tr>
		  </table>        
        </div><!-- END .carousel-block_top -->                              
<!-- OTZIV 9 -->       
         <div class="carousel-block_top">  
          <table class="otziv_bloc" border="0" cellspacing="0" cellpadding="0">
			  <tr>
                <td class="otziv_img"><img class="no_width_img"  src="images_test/foto_otziv9.png" alt="" title=""/></td>
                <td class="otziv_txt"><h4>����</h4>
                  <p>������ ��� �������� �����, ��� � ��� �� �������� ������������ ��������. ������� ��� �������! </p>
                  <p>����������� ������� ������ � ������ �� &nbsp;<a href="mailto:igolochka8@mail.ru">igolochka8@mail.ru</a></p>
                  </td>
                <td class="otziv_img2"><img class="no_width_img"  src="images_test/foto_otziv9mini.png" alt="" title=""/></td>
            </tr>
		  </table>        
        </div><!-- END .carousel-block_top -->                               
<!-- OTZIV 10 -->       
         <div class="carousel-block_top">  
          <table class="otziv_bloc" border="0" cellspacing="0" cellpadding="0">
			  <tr>
                <td class="otziv_img"><img class="no_width_img"  src="images_test/foto_otziv_men.png" alt="" title=""/></td>
                <td class="otziv_txt"><h4>�����</h4>
                  <p>����� ���� ������� �� 8 �����. �������� ����� ���� �����. ���� ����� ��������� ��� ������ ����!</p>
                  <p>����������� ������� ������ � ������ �� &nbsp;<a href="mailto:igolochka8@mail.ru">igolochka8@mail.ru</a></p>
                  </td>
                <td class="otziv_img2">&nbsp;</td>
            </tr>
		  </table>        
        </div><!-- END .carousel-block_top --> 
<!-- OTZIV 11 -->       
         <div class="carousel-block_top">  
          <table class="otziv_bloc" border="0" cellspacing="0" cellpadding="0">
			  <tr>
                <td class="otziv_img"><img class="no_width_img"  src="images_test/foto_otziv11.png" alt="" title=""/></td>
                <td class="otziv_txt"><h4>��������</h4>
                  <p>����� ����� ������, ���������� ��� ���, �.� ���� � ���������� � �������� �������� ��� � 600������. �� ��������� �� �������� �� �������� �� ����. ������� ��� �� ����� ����!</p>
                  <p>����������� ������� ������ � ������ �� &nbsp;<a href="mailto:igolochka8@mail.ru">igolochka8@mail.ru</a></p>
                  </td>
                <td class="otziv_img2">&nbsp;</td>
            </tr>
		  </table>        
        </div><!-- END .carousel-block_top -->                                        
                               
              </div><!-- END <div class="carousel-items_top"> -->
            </div><!-- END <div class="carousel-wrapper_top"> -->
          </div><!-- END <div class="carousel_top"> 
<!-- END SLIDER OTZIVY -->
     
         </div><!-- END .slider_otzivy -->
         
       </div><!-- END .content12 -->
<a name="sales"></a>  
      </div><!-- END .otziv -->
      <div class="uspey_zakazat">
        <div class="content13">
         <div class="content_h2">
          <p>&nbsp;</p>
           <!-- <a name="sales">&nbsp;</a> -->
           <img class="width_img_form"  src="images_test/h2_top.png"/>  
            <h2>����� �������� <span>�� �����!</span></h2>
           <img class="width_img_form"  src="images_test/h2_bot.png"/>
         </div><!-- END .content_h2 -->
         <img id="sales_zakaz1" src="images_test/sostav_nabora11.png" />   
         <img id="sales_zakaz2" src="images_test/sostav_nabora22.png" />   
         <img id="sales_zakaz3" src="images_test/sostav_nabora33.png" />   
         <img id="sales_zakaz4" src="images_test/sostav_nabora44.png" />
         <img id="sales_zakaz5" src="images_test/sostav_nabora444.png" />   
         <img id="sales_zakaz6" src="images_test/sales_zakaz.png"/>   
        
         <p id="sales_p1">����</p>   
         <p id="sales_p2">������<br/>DMC</p>
         <p id="sales_p3">�����</p>
         <p id="sales_p4">�����+ <br/>���� � ���</p> 
         <p id="sales_p5"><b>+ 10% ������ �� ��������� �����</b></p>
         <p id="sales_p6"><b>�����</b></p>
         <p id="sales_p7"><strike>1000 ������ </strike><br/><span>500 ������</span></p> 
         <p id="sales_p8"><b>����� + ����</b></p>
         
          <div class="table_sales_box">  
           <div class="box_button_sales1"> 
            <a href="#format"><span id="button_sales1">�������� �����</span></a>
            <p>�� � <i>Instagram</i><a href="https://instagram.com/igolochka8/" target="_blank"><img class="width_img" src="images_test/Instagram.png" title="�� � Instagram"/></p>
           </div>
           <div class="box_button_sales2">  
            <a href="shema.php" name="modal4"><span id="button_sales1">�������� �����</span></a>
            <p>&nbsp;</p>
           </div>
         </div><!-- END .table_sales_box -->
         
       </div><!-- END .content13 -->
      </div><!-- END .uspey_zakazat -->
<!-- END -->      
    <div class="futer">
<div class="futer_content">
      
       <img  class="img_pos" src="images_test/logo_strelca.png"/>
       
       <div class="futer_box_l">
        <div class="futer_logo">
         <h1>������ ��� ��������� <br/>�� ����������</h1>
         <span>�������� �������</span>
        </div><!-- END .futer_logo -->
       </div><!-- END .futer_box_l --> 
        
       <div class="futer_box_m"> 
        <div class="futer_menu">
         <ul>
          <li><a href="#nabor">������ ������</a></li>             
          <li><a href="#sales">�����</a></li>
          <li><a href="#pochemu_my">������ ��</a></li>
          <li><a href="#zakaz">��� ��������</a></li>
          <li><a href="#otzivy">������</a></li>
         </ul>
        </div><!-- END .futer_menu -->
       </div><!-- END .futer_box_m --> 
      
       <div class="futer_box_c">  
        <div class="futer_contact">
           
            <p><?= ADMINPHONE ?></p>
            <a href="#dialog" name="modal"><span>�������� �������� ������</span></a>
         
        </div><!-- END .futer_contact -->
       </div><!-- END .futer_box_c -->    
      </div><!-- END .futer -->
   
     </div><!-- END .display_box -->
<!-- Yandex.Metrika informer -->
<a href="https://metrika.yandex.ru/stat/?id=28726541&amp;from=informer"
target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/28726541/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
style="width:88px; height:31px; border:0;" alt="������.�������" title="������.�������: ������ �� ������� (���������, ������ � ���������� ����������)" onclick="try{Ya.Metrika.informer({i:this,id:28726541,lang:'ru'});return false}catch(e){}"/></a>
<!-- /Yandex.Metrika informer -->

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
    </div><!-- END .main -->
 </body>
</html>