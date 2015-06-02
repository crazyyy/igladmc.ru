<?php 
//������� � ������� �������� � ����� ������ �����

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
<!--<script type="text/javascript">-->
<script type="text/javascript" src="js_test/modal_window.js"></script><!-- FOR WINDOW -->		
        <!-- </script> -->
   <!-- END Ajax UPLOAD -->
    <!--  END IS -->
    
<title>����� �����</title>
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
          
<!--  START MODAL WINDOW - SHEMA-->	
<!-- START CONTENT -->
<div class="form_windows">   
 <div class="adr-dostavki">     
   <h2>����� ������ �����</h2>
     <img class="width_img"  class="width_img"  src="images_test/h2_top.png" id="img_form" />

<!-- START UPLOADER FORM -->

<div id="file_holder">
  <h5>1. �������� ����������� ��� �������� :</h5>          
    <p>���������� ������: .jpg .png .jpeg .gif</p>
      <br/> 
 <form action="shema.php" method="post" enctype="multipart/form-data">
  <table border='0' cellpadding='0' cellspacing='0' width='80%' >
   <tr>
    <td style="text-align:center;"><input id="" class="input" type="file" name="userfile" /></td>
      </tr>
       </table>
   <input type = 'submit' name='foto_load' id="button_zakaz_shema" value = '��������� �����������'>    
 <div id="loading"><img class="width_img"  src="ajax-loader.gif" alt="Loading" /> ���������, ���� ��������...</div>
 <div id="errormes"></div>
<?php   
//���� ������ ������ ��������� ����������� 
if(isset ($_POST['foto_load']))
 {           
   //��������� �������� �������� ���������� 
   file_image_upload();
 } ?>		    
</form>
<br/>

</div><!-- END .file_holder -->           
<!-- END UPLOADER FORM -->                           

<div id="contact_form2">         
 <form name="contact2" method="post" action="bin/start_form_shema.php">            
        <h5>2. ������� ����������� ������ :</h5>          
            <table class="tbl_shema" border="0" cellspacing="0" cellpadding="0">
              <tr>
				<td class="shema">
                  <span>A6</span>
                  <p>105mm/<br/>148mm</p>
                  <input type='radio' name='radiobutton' value='1' checked='checked'/>
                  </div><!-- END .box_format1 -->
                </td>
				<td class="shema">
                  <span>A5</span>
                  <p>148mm/<br/>210mm</p>
                  <input type='radio' name='radiobutton' value='2' />
                </td>
				<td class="shema">
                  <span>A4</span>
                  <p>210mm/<br/>297mm</p>
                  <input type='radio' name='radiobutton' value='3' />
                </td>
			    <td class="shema">
                  <span>A3</span>
                  <p>297mm/<br/>420mm</p>
                 <input type='radio' name='radiobutton' value='4' />
                </td>
                </td>
               <tr> 
                <td class="shema">
                  <span>A2</span>
                  <p>420mm/<br/>594mm</p>
                <input type='radio' name='radiobutton' value='5' /> 
                </td>
                <td class="shema"> 
                  <span>A1</span>
                  <p>594mm/<br/>841mm</p>
                  <input type='radio' name='radiobutton' value='6' />
                </td>
                <td class="shema">
                  <span>A0</span>
                  <p>841/<br/>1189mm</p>
                  <input type='radio' name='radiobutton' value='7' />
                </td>
              </tr>
             </table>  
           <br/>
         <h5>3. ������� ���� ���������� ������ ��� �������� ����� :</h5>          
       <p>���� ���������� (*) ����������� � ����������.</p>          
           <table class="zakaz-data" border="0" cellspacing="0" cellpadding="0">
            <tr>
	           <td class="zakaz-txt">���(*)</td>
	           <td class="zakaz-inpt"><input type="text" name="name2" id="name2" size="30" value="<?= $name_us ?>" /></td>
	           <td class="zakaz-error"><p class="error2" id="name_error2">���� ����������� � ���������� !</p>
               </td>		
	        </tr>
            <tr>
	           <td class="zakaz-txt">E-mail </td>
	           <td class="zakaz-inpt"><input type="text" name="email2" id="email2" size="30" value="<?= $email_us ?>" /></td>
	           <td class="zakaz-error"><p class="error2" id="email_error2">���� ����������� � ���������� !</p></td>		
	        </tr>
	        <tr>
	           <td class="zakaz-txt">�������(*)</td>
	           <td class="zakaz-inpt"><input type="text" name="phone2" id="phone2" size="30" value="<?= $phone_us ?>" /></td>
               <td class="zakaz-error"><p class="error2" id="phone_error2">���� ����������� � ���������� !</p></td>	
	       </tr>
           <tr>
	         <td class="zakaz-txt">�����(*)</td>
	         <td class="zakaz-inpt"><input type="text" name="adres2" id="adres2" size="40" value="<?= $addres_us ?>" /></td>
             <td class="zakaz-error"><p class="error2" id="adres_error2">���� ����������� � ���������� !</p>  
             </td>	
	       </tr>
	      </table>
         <input type="submit" name="start_shema_form" class="button2" id="submit_btn2" value="�������� �����" />        
        <br/> 
       <br/>       
      </form>
         </div><!-- END .contact_form2 -->
   </div><!-- END .adr-dostavki -->
</div><!-- END .form_windows -->
<!-- END CONTENT --> 

<!--  END MODAL WINDOW - NABOR --> 
<!-- END -->      
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
    </div><!-- END .display_box -->
   </div><!-- END .main -->
 </body>
</html>