
$(function(){

	$('#loginForm').validate({
        rules: {
            username: { required: true,email:true },
            password: { required: true },
        },
        messages: {
            username: { required: "Please enter your email id",email:"Invalid email id" },
            password: { required: "Please enter your password" },
        },
		errorPlacement: function(error, element) {
			if (element.attr("name") == "username"){$("#userErr").html(error);}
			if (element.attr("name") == "password"){$("#pwdErr").html(error);}
			else
			error.insertAfter(element);
		}, 
		success: function (error) {
           // error.remove();
        },
		errorElement: "span",
		debug:true,
        submitHandler: function (form) {
            if($(form).valid()){
                form.submit();
           }
        }
    });
	
	
});