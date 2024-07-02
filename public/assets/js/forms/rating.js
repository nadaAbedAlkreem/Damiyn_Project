$('#SubmitFormRating').on('submit',function(e)
{
  
 
     e.preventDefault();
    let formData = new FormData($('#SubmitFormRating')[0]);
 
     $.ajaxSetup({
     headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              } });
    $.ajax(
    {
    type:"POST",
    url: "add",
    data:formData,
    contentType:false, // determint type object 
    processData: false,  // processing on response 
    success:function(response)
    {
 
     $('#successMsg').show();
      console.log(response);
      var btn_close = document.getElementById('close');  
      btn_close.click();
      var table = $('.data-table').DataTable();
      table.draw();
    },
 
   error: function(response) 
    {
 
      
      //  var errorIcon = document.getElementById('errorIcon');
      //  errorIcon.textContent =   response.responseJSON.errors.icon;  
      //  if( response.responseJSON.errors.icon){
        
      //   errorIcon.hidden = false;

      //  }else{
      //   errorIcon.hidden = true;

      //  }

    
    },
   });
  
  // else if(document.querySelector('#submitForm').innerHTML == "update")
  // {
  //   e.preventDefault();
  //   let formData = new FormData($('#SubmitFormPartner')[0]);
  //    $.ajaxSetup({
  //    headers: {
  //    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  //             } });
  //   $.ajax(
  //   {
  //   type:"POST",
  //   url: "update",
  //   data:formData,
  //   contentType:false, // determint type object 
  //   processData: false,  // processing on response 
  //   success:function(response)
  //   {
  //    $('#successMsg').show();
  //     console.log(response);
  //     var btn_close = document.getElementById('close');  
  //     btn_close.click();


  //     swal({  
  //        title: " success",  
  //         icon: "success",  
  //        button: "ok",  
  //        });  


  //     var table = $('.data-table').DataTable();
  //     table.draw();
  //   },
 
  //  error: function(response) 
  //   {
  //    var jsonData = response.responseJSON.message;
  //      console.log(jsonData);    
  //        swal({  
  //        title: " Oops!",  
  //        text:jsonData,  
  //        icon: "error",  
  //        button: "oh no!",  
  //        });  
    
  //   },
  //  });

  // }


 
});
 
 $(function () 
 {
  
   $.ajaxSetup(
    {
       headers:
        {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.noConflict();
    $(document).ready(function($) 
    {
      var table = $('.data-table').DataTable(
      {
     processing: true,
     serverSide: true,
     paging: false,
     ordering: false,
     searching: false,
     info: false,

     ajax: {
                 url: "view",
                 data: function (d) {
                      d.search = $('#search').val()
                 }
           },
     columns: [
         {data: 'id', name: 'id'},
         {data: 'name', name: 'name'},
         {data: 'comment', name: 'comment'},
         {data: 'create', name: 'create'}
         

      ]

       });
        $('#search').keyup(function()
        {
           table.draw();
        });
  
 
  
 
    });

 

 })

           
$(".data-table").on('click', '.deleteRecord[data-id]', function (e)
 { 
      e.preventDefault();
      
  $('.show_confirm').click(function(event)
    {

      swal(
        {
        title: `Are you sure you want to delete this record?`,
        text: "If you delete this, it will be gone forever.",
        icon: "warning",
         dangerMode: true,
        
         })
        .then((willDelete) => 
     { 
         if (willDelete)
        {
           var id = $(this).data("id");
           var token = $("meta[name='csrf-token']").attr("content");
   
         $.ajax(
        {
          url: "delete/"+id,
           type: 'DELETE',
          data: 
          {
            "id": id,
             "_token": token,
          },
          success: function ()
          {
            console.log("it Works");
 
            $('.data-table').DataTable().ajax.reload();
         }
        });

       }
     });

    
    });

    
 });


// $(document).on("click" , "#add-item" ,function(e)
//  {
//   document.querySelector('#submitForm').innerHTML = 'Send';
//   document.getElementById("name").value =  '';
//   var fileInput = document.getElementById('icon');
//   fileInput.value = null;

//  });
//  $(document).on("click" , "#form-edit" ,function(e)
//  {
  // document.querySelector('#submitForm').innerHTML = 'update';
	// 	e.preventDefault();
	// 	var name  = $(this).data("name");
  //   var id  = $(this).data("id");

 	// 	console.log(name);
 
 	// 	document.getElementById("name").value = name;
  //   document.getElementById("id").value = id;
  //   var fileInput = document.getElementById('icon');
  //   fileInput.value = null;

 
 
	// });
