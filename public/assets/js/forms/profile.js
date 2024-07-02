$('#SubmitUpdateProfile').on('submit',function(e)
{
  e.preventDefault();
    //  let id = $('#id').val();
    //  let name = $('#name').val();
    //  let email= $('#email').val();
    //  let phone = $('#phone').val();
    //  var token = $("meta[name='csrf-token']").attr("content");
     let formData = new FormData(this); // Create FormData from the form element
     console.log(formData);

    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            } });

     $.ajax({
     url: "/profile/update",
     type:"post",
     dataType: "json",
     processData: false, // Necessary for FormData
     contentType: false, // Necessary for FormData
     data: formData,    
      success:function(response){
      $('#successMsg').show();
      console.log(response);

      swal({
         title:  ' تم تحديث المعلومات  ',
         icon: "success",
         buttons: true,
         dangerMode: false,
       })

       },
      error: function(response ) {
      var jsonData = response.responseJSON.message;
       console.log(jsonData);  

         swal({
        title:  jsonData ,
        icon: "warning",
        buttons: true,
       dangerMode: true,
           })

  },
  });
});