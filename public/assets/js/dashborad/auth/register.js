// 


$(document).ready(function() 
{
   $('#SubmitRegisterAdminForm').on('submit',function(e)
        {
 
            e.preventDefault(); // Prevent the default form submission
            let formData = new FormData(this); // Create FormData from the form element

                $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                         } });

                         

              $.ajax(
                {
                    type: 'POST',
                    url: 'register', // Use the correct route here
                    data: formData,
                    processData: false, // Necessary for FormData
                    contentType: false, // Necessary for FormData
                    dataType: 'json', // Specify the data type expected from the server

                        success: function (data) {
                        window.location.href = "http://127.0.0.1:8000/admin/login"; 


                        },
                        error: function (error) 
                        {
                            console.log(error);
                            Swal.fire({
                                title: 'Error!',
                                text: error.responseJSON.message ,
                                icon: 'error',
                                confirmButtonText: 'OK'
                            });
                        },
                 });
  
        });
});

 
 