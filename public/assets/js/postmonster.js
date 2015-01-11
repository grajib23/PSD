// Post Maual Assain Data
$('form.verticalDashboard [name="submit-btn"]').click(function(e){
    e.preventDefault();
    
    var role        = $("#role").val();
    var userName    = $("#userName").val();
    var email       = $("#email").val();
    var phoneNum    = $("#phoneNum").val();
    var nationalId  = $("#nationalId").val();
    var password    = $("#password").val();

    var postRegistrationData = {
        "data": {
            "is_confirm":"1",
            "is_active":"1"
        }
    };
    postRegistrationData.data.user_role = role;
    postRegistrationData.data.user_name = userName;
    postRegistrationData.data.user_email = email;
    postRegistrationData.data.user_phone = phoneNum;
    postRegistrationData.data.user_national_id = nationalId;
    postRegistrationData.data.user_pass = password;

    postRegistrationData = JSON.stringify( postRegistrationData );

    console.log(postRegistrationData);
    $.ajax({
        type: "post",
        url: '/registation',
        data: {
                'data':postRegistrationData
              },
        success: function( data ){
            //data = JSON.parse( data );
            
            if(data.hasOwnProperty("error") && data.error === true ){
                console.log('Error');
            }
            else{
                console.log('Success');

                window.location = "/registration";

            }
            alert( data.message );
            console.log(data);
        }
    });

});  