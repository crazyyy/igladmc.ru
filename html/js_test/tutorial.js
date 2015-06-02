///////////////////////////////////////////////////////////////////////////////////////////////////////
// --------------------------- РАБОТА С ДАННЫМИ ФОРМ  -----------------------------------------------//
///////////////////////////////////////////////////////////////////////////////////////////////////////

// 1 - обработка формы 
$(function() {
  $('.error').hide();
  $('input.zakaz-inpt').css({backgroundColor:"#FFFFFF"});
  $('input.zakaz-inpt').focus(function(){
    $(this).css({backgroundColor:"#FFDDAA"});
  });
  $('input.zakaz-inpt').blur(function(){
    $(this).css({backgroundColor:"#FFFFFF"});
  });

  $(".button").click(function() {
		// validate and process form
		// first hide any error messages
    $('.error').hide();
		
	 //проверяем поле имя
	  var name = $("input#name").val();
		if (name == "") {
      $("#name_error").show();
      $("input#name").focus();
      return false;
    }
	
	//проверяем поле телефон
		var phone = $("input#phone").val();
		if (phone == "") {
      $("#phone_error").show();
      $("input#phone").focus();
      return false;
    }
	
		var dataString = 'name='+ name + '&phone=' + phone;
		//alert (dataString);return false;
		
		$.ajax({
      type: "POST",
      url: "bin/start_form_phone.php",
      data: dataString,
      success: function() {
		$('#form_label').hide();  
        $('#contact_form').html("<div id='message'></div>");
        $('#message').html("<h2>Ваша заявка отправлена!</h2>")
        .append("<p>Оставайтесь на связи, в ближайшее время с вами свяжется наш менеджер.</p>")
        .hide()
        .fadeIn(1500, function() {
          $('#message').append("<img class='width_img' id='checkmark' src='images_test/h2_top_reset.png' /><p>Для формирования новой заявки перезагрузите страницу.</p>");
        });
      }
     });
    return false;
	});
});
runOnLoad(function(){
  $("input#name").select().focus();
});

// 2 - обработка формы 
$(function() {
  $('.error2').hide();
  $('input.zakaz-inpt').css({backgroundColor:"#FFFFFF"});
  $('input.zakaz-inpt').focus(function(){
    $(this).css({backgroundColor:"#FFDDAA"});
  });
  $('input.zakaz-inpt').blur(function(){
    $(this).css({backgroundColor:"#FFFFFF"});
  });

  $(".button2").click(function() {
		// validate and process form
		// first hide any error messages
    $('.error2').hide();
		
	//проверяем поле имя
	  var name2 = $("input#name2").val();
		if (name2 == "") {
      $("#name_error2").show();
      $("input#name2").focus();
      return false;
    }
	
	//проверяем поле емайл
	var email2 = $("input#email2").val();
		if (email2 == "") {
      $("#email_error2").show();
      $("input#email2").focus();
      return false;
    }
	
	//проверяем поле телефон
		var phone2 = $("input#phone2").val();
		if (phone2 == "") {
      $("#phone_error2").show();
      $("input#phone2").focus();
      return false;
    }
	
	
	//проверяем поле адрес
	var adres2 = $("input#adres2").val();
		if (adres2 == "") {
      $("#adres_error2").show();
      $("input#adres2").focus();
      return false;
    }
		  
	});
});
runOnLoad(function(){
  $("input#name").select().focus();
});