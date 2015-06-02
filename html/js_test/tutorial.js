///////////////////////////////////////////////////////////////////////////////////////////////////////
// --------------------------- ������ � ������� ����  -----------------------------------------------//
///////////////////////////////////////////////////////////////////////////////////////////////////////

// 1 - ��������� ����� 
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
		
	 //��������� ���� ���
	  var name = $("input#name").val();
		if (name == "") {
      $("#name_error").show();
      $("input#name").focus();
      return false;
    }
	
	//��������� ���� �������
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
        $('#message').html("<h2>���� ������ ����������!</h2>")
        .append("<p>����������� �� �����, � ��������� ����� � ���� �������� ��� ��������.</p>")
        .hide()
        .fadeIn(1500, function() {
          $('#message').append("<img class='width_img' id='checkmark' src='images_test/h2_top_reset.png' /><p>��� ������������ ����� ������ ������������� ��������.</p>");
        });
      }
     });
    return false;
	});
});
runOnLoad(function(){
  $("input#name").select().focus();
});

// 2 - ��������� ����� 
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
		
	//��������� ���� ���
	  var name2 = $("input#name2").val();
		if (name2 == "") {
      $("#name_error2").show();
      $("input#name2").focus();
      return false;
    }
	
	//��������� ���� �����
	var email2 = $("input#email2").val();
		if (email2 == "") {
      $("#email_error2").show();
      $("input#email2").focus();
      return false;
    }
	
	//��������� ���� �������
		var phone2 = $("input#phone2").val();
		if (phone2 == "") {
      $("#phone_error2").show();
      $("input#phone2").focus();
      return false;
    }
	
	
	//��������� ���� �����
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