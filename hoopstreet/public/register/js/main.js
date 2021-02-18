
var camount = 0;
var cname= "";
var cemail="";


$(function(){
    $("#form-register").validate({
        rules: {
            password : {
                required : true,
            },
            confirm_password: {
                equalTo: "#password"
            }
        },
        messages: {
            username: {
                required: "Please provide an username"
            },
            email: {
                required: "Please provide an email"
            },
            password: {
                required: "Please provide a password"
            },
            confirm_password: {
                required: "Please provide a password",
                equalTo: "Please enter the same password"
            }
        }
    });
    
});

$.fn.steps.setStep = function (step)
{
  var currentIndex = $(this).steps('getCurrentIndex');
  for(var i = 0; i < Math.abs(step - currentIndex); i++){
    if(step > currentIndex) {
      $(this).steps('next');
    }
    else{
      $(this).steps('previous');
    }
  } 
};

$(document).ready(function(){
    var is_async_step = false;
  $("#form-total").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "fade",
        // enableAllSteps: true,
        autoFocus: true,
        transitionEffectSpeed: 500,
        titleTemplate : '<div class="title">#title#</div>',
        labels: {
            previous : 'Back',
            next : '<i class="zmdi zmdi-arrow-right"></i>',
            finish : '<i class="zmdi zmdi-arrow-right"></i>',
            current : ''
        },
        onStepChanging: function (event, currentIndex, newIndex) { 
            var ss0 = false;
            var ss1 = false;
            var ss2 = false;
            var ss3 = false;
            var ss4 = false;
            

            
            if (currentIndex == 0) {

                             var pass = $('#password').val();
                             var email = $('#email').val();
                             cemail = email;
                             camount = inv;

                            var postForm = { //Fetch form data
                                    'step'     : '1',
                                    'password' : pass,
                                    'email' : email,
                                    //Store name fields value
                                };

                                var requestResult = $.ajax({ url: 'registercustomer',
                                 data: postForm,
                                 type: 'post',
                                 
                                 async: false,
                                 success: function(output) {
                                  // var t = JSON.parse(output);
                                  // cemail = t.email;
                                              console.log(output);
                                              ss0 = true;
                                              return ss0;
                                          },
                                  error: function(request, status, error){
                                    console.log(error);
                                    alert("Error: Could not create your account. Please Try again"+status + error);
                                    ss0= false;
                                    return false;
                                  }
                            });
                        return ss0;
                        
                    }

                        else if (currentIndex == 1) {

                             var inv = $('#investment').val();
                            
                             camount = inv;

                            var postForm = { //Fetch form data
                                    'step'     : '2',
                                    'investment' : inv,
                                    'email' : cemail,
                                    //Store name fields value
                                };

                                var requestResult = $.ajax({ url: 'server.php',
                                 data: postForm,
                                 type: 'post',
                                 
                                 async: false,
                                 success: function(output) {
                                              console.log(output);
                                              ss1 = true;
                                              return ss1;
                                          },
                                  error: function(request, status, error){
                                    alert("Error: Could not save investment. Please Try again"+status + error);
                                    ss1= false;
                                    return false;
                                  }
                            });
                        return ss1;
                        
                    }

                    else if (currentIndex == 2) {

                             var name = $('#name').val();
                             var phone = $('#phone').val();
                             var state = $('#state').val();
                             var address = $('#address').val();
                             var accredation = $('input[name="accredation"]:checked').val();
                            
                            cname = name;

                            var formData = new FormData();
                            formData.append('step','3');
                            formData.append('name','name');
                            formData.append('file', $('#income-file')[0].files[0]);

                            var postForm = { //Fetch form data
                                    'step'     : '3',
                                    'name' : name,
                                    'phone' : phone,
                                    'address' : address,
                                    'state' : state,
                                    'email' : cemail,
                                    'accredation' : accredation,
                                    
                                    //Store name fields value
                                };

                                var requestResult = $.ajax({ url: 'server.php',
                                 data: postForm,
                                 type: 'post',
                                 dataType:false,
                                 process:false,
                                 async: false,
                                 success: function(output) {
                                              console.log(output);
                                              ss2 = true;
                                              return ss2;
                                          },
                                  error: function(request, status, error){
                                    alert("Error: Could not save your details. Please Try again" + status + error);
                                    ss2= false;
                                    return false;
                                  }
                            });
                        return ss2;
                        
                    }
            
            else if (currentIndex == 3) {

                            
                        return true;
                        
                    }
                    
                     else if (currentIndex == 4) {

                    var requestResult = $.ajax({ url: 'server.php',
                     data: postForm,
                     type: 'post',
                     dataType:'json',
                     async: false,
                     // success: function(output) {
                     //              alert(output);
                     //          },
                     //  error: function(request, status, error){
                     //    alert("Error: Could not delete");
                     //  }
                });


                        // var requestResult = $.ajax({
                        //     type: 'POST',
                        //     url: "server.php",
                        //     data:{'username' : 'omer'},
                        //     async: false,
                        //     contentType: "application/json",
                        //     dataType: 'json',
                           
                            
                        // });
                        console.log(requestResult.responseText);
                        return true;
                    }else{
                        return true;
                    }
            
             

          
            
        },
            saveState: true
    });

  $('#radioBtn a').on('click', function(){
    var sel = $(this).data('title');
    var tog = $(this).data('toggle');
    $('#'+tog).prop('value', sel);
    
    $('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]').removeClass('active').addClass('notActive');
    $('a[data-toggle="'+tog+'"][data-title="'+sel+'"]').removeClass('notActive').addClass('active');
})
});

//change radio
$(document).ready(function(){
$('#filess').hide();
$('input[name=accredation]').change(function(){
var value = this.value;
if(value == "yes")
{
    $('#filess').show();
}else{
    $('#filess').hide();
}
});


});