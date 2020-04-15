 
$('document').ready(function()
{
    
    /* validation */
    $("#forgetpasswordform").validate({
        rules:
        {
            username: {
                required: true,
                minlength: 3
            },
            pass: {
                required: true,
                minlength: 8,
                maxlength: 15
            },
            confirmpass: {
                required: true,
                equalTo: '#pass'
            },
            email: {
                required: true,
                email: true
            },
            second_name:
            {
                required: true,
                minlength: 3,
                lettersonly: true
            }
        },
        messages:
        {
            username: "Enter a Valid Username",
            pass:{
                required: "Provide a Password",
                minlength: "Password Needs To Be Minimum of 8 Characters"
            },
            email: "Enter a Valid Email",
            confirmpass:{
                required: "Retype Your Password",
                equalTo: "Password Mismatch! Retype"
            },
            second_name:{required:"Enter a Valid Name"}
        },
        submitHandler: submitForm
    });
    /* validation */

});