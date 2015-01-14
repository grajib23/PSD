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
        
    };

    postRegistrationData.username = userName;
    postRegistrationData.email = email;
    postRegistrationData.phone = phoneNum;
    postRegistrationData.national_id = nationalId;
    postRegistrationData.password = password;
    postRegistrationData.user_role = role;

    postRegistrationData = JSON.stringify( postRegistrationData );

    console.log(postRegistrationData);

    $.ajax({
        type: "post",
        url: 'users',
        data:postRegistrationData,
        success: function( data ){
            //data = JSON.parse( data );
            console.log(data);
            if(data.hasOwnProperty("error") && data.error === true ){
                console.log('Error');

            }
            else{
                console.log('Success');

               // window.location = "/registration";


            }
            //alert( data.message );
            //console.log(data);
        }
    });

});



// $('.mws-button-row button:contains("Next")')

$('form.autoAJAX .mws-button-row button:contains("Next")').click(function(e){
    //console.log('auto');
    var thisForm = $(this).closest('form');
    var data = getCurrentInputs();


    var validated = thisForm.validate({ onsubmit: false }).form();
    if(!validated){
        console.log('Not validated inputs. No AJAX call made... :)');
        return;
    }

    $.ajax({
        type: "POST",
        url: data.postUrl,
        data: data.serializedData,
        success:function(data, abc){
            console.log(data);
            console.log(abc);

        }
    });

});




//input submit logoic js
function getCurrentInputs(){
    var currentIndex = $('.wizard-nav li.current').index();
    var currentFieldsets = $('.mws-form fieldset:nth('+currentIndex+')');
    var currentFieldsData = currentFieldsets.serialize();
    var postUrl = currentFieldsets.find('input[name="posturl"]').val();

    return { 'serializedData':currentFieldsData, 'postUrl':postUrl };
}
//bundle post
//Usage: toObject(getCurrentInputs())
function toObject(arr){
    var obj={},i;
    for(i=0;i<arr.length;++i){
        if(arr[i]!==undefined){
            obj[arr[i].name]=arr[i].value;
        }
    }
    return obj;
}


