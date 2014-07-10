$(document).ready(function(){
	$.stellar();
	$(function() {
		$('a[href*=#]:not([href=#])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html,body').animate({
						scrollTop: target.offset().top
					}, 1000);
					return false;
				}
			}
		});
	});
	$("#phone").inputmask("(999) 999-9999", {placeholder:"_", showMaskOnFocus: false, showMaskOnHover: false });
	$("#zip").inputmask("99999", {placeholder:" ", showMaskOnFocus: false, showMaskOnHover: false });
	$("#form_submit").click(function() {
		if($.trim($("#name").val()) === "")
		{
			$("#name").attr("class", "required");
		}
		else
		{
			$("#name").removeAttr("class");
		}
		if($.trim($("#email").val()) === "")
		{
			$("#email").attr("class", "required");
		}
		else
		{
			$("#email").removeAttr("class");
		}
		alert($.trim($("#zip").val().length));
		if($.trim($("#phone").val().count) <= 13)
		{
			$("#phone").attr("class", "required");
		}
		else
		{
			$("#phone").removeAttr("class");
		}
		if($.trim($("#zip").val().indexOf("_") === -1))
		{
			$("#zip").attr("class", "required");
		}
		else
		{
			$("#zip").removeAttr("class");
		}
		if($.trim($("#comment").val()) === "")
		{
			$("#comment").attr("class", "required");
		}
		else
		{
			$("#comment").removeAttr("class");
		}
	});
	$("#name").focusout(function() {
		if(!($.trim($("#name").val()) === ""))
		{
			$("#name").removeAttr("class");
		}
	});
	$("#email").focusout(function() {
		if(!($.trim($("#email").val()) === ""))
		{
			$("#email").removeAttr("class");
		}
	});
	$("#phone").focusout(function() {
		if(!($.trim($("#phone").val()) === ""))
		{
			var s = $.trim($("#phone").val());
			if(s.indexOf("_") === -1)
			{
				$("#phone").removeAttr("class");
			}
		}
	});
	$("#zip").focusout(function() {
		if(!($.trim($("#zip").val()) === ""))
		{
			var s = $.trim($("#zip").val());
			if(s.indexOf("_") === -1)
			{
				$("#zip").removeAttr("class");
			}
		}
	});
	$("#comment").focusout(function() {
		if(!($.trim($("#comment").val()) === ""))
		{
			$("#comment").removeAttr("class");
		}
	});
});