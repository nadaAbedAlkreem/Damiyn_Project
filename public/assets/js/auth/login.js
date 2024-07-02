
$(document).ready(function() 
{
   $('#SubmitFormLogin').on('submit',function(e)
        {
                e.preventDefault(); // Prevent the default form submission
                let formData = new FormData(this); // Create FormData from the form element

                $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                         } });
 

                $.ajax(
                    {
                            type: "post",
                            url: "login",
                            dataType: "json",
                            processData: false, // Necessary for FormData
                            contentType: false, // Necessary for FormData
                            data: formData,

                            success: function (data) {
                                 console.log("data"); 

                                 window.location.href = "http://127.0.0.1:8000/send-2fa-code"; 


                            },
                            error: function (error) 
                            {
                                console.log(error);
                                    swal(
                                        {
                                        icon: 'error',
                                        title: 'Oops...',
                                        text: error.responseJSON.message
                                    })
                            },
                    });
    
        });
});

 
 