 
$('#SubmitFormaAvertisement').on('submit',function(e)
{
  if(document.querySelector('#submitForm').innerHTML == "Send")
  {
        e.preventDefault();
        let formData = new FormData($('#SubmitFormaAvertisement')[0]);
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
        var jsonData = response.responseJSON.message;
          console.log(jsonData);    
          var errorImage = document.getElementById('errorImage');
          errorImage.textContent =   response.responseJSON.errors.image;  
            if( response.responseJSON.errors.image){
            
              errorImage.hidden = false;

          }else{
              errorImage.hidden = true;

          }
        
        },
      });
  }
    else if(document.querySelector('#submitForm').innerHTML == "update")
        {
          e.preventDefault();
          let formData = new FormData($('#SubmitFormaAvertisement')[0]);
          $.ajaxSetup({
          headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    } });
          $.ajax(
          {
          type:"POST",
          url: "update",
          data:formData,
          contentType:false, // determint type object 
          processData: false,  // processing on response 
          success:function(response)
          {
          $('#successMsg').show();
            console.log(response);
            var btn_close = document.getElementById('close');  
            btn_close.click();


            swal({  
              title: " success",  
                icon: "success",  
              button: "ok",  
              });  


            var table = $('.data-table').DataTable();
            table.draw();
          },
      
          error: function(response) 
            {
            var jsonData = response.responseJSON.message;
              console.log(jsonData);    
              var errorImage = document.getElementById('errorImage');
              errorImage.textContent =   response.responseJSON.errors.image;  
                if( response.responseJSON.errors.image){
                
                  errorImage.hidden = false;
    
              }else{
                  errorImage.hidden = true;
    
              }
            },
          });

        }


    
});

$(function () 
{
  
  $.ajaxSetup(
    {
      headers: {
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
        {data: 'image', name: 'image'},        
        {data: 'action', name: 'action'},
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


$(document).on("click" , "#add-item" ,function(e)
{
document.querySelector('#submitForm').innerHTML = 'Send';

var fileInput = document.getElementById('image');
fileInput.value = null;




});
$(document).ready(function() {

$(document).on("click" , "#form-edit" ,function(e)
{
document.querySelector('#submitForm').innerHTML = 'update';
  e.preventDefault();

  var id  = $(this).data("id");




  document.getElementById("id").value = id;
  var fileInput = document.getElementById('image');
  fileInput.value = null;


});
});
