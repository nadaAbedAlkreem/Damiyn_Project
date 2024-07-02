  $(document).ready(function()
  {
      $(document).on("click" , "#show-content" ,function(e)
      {
          e.preventDefault();
          var content = $(this).data("content");
          console.log(content);
          document.getElementById("content_").innerHTML  = content;


      }
     );

  });
  $('#SubmitFormBlogs').on('submit',function(e)
  {
      if(document.querySelector('#submitForm').innerHTML == "Send")
      {
        e.preventDefault();
        let formData = new FormData($('#SubmitFormBlogs')[0]);
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
          
          console.log(response);
          var errorImage = document.getElementById('errorImage');
          errorImage.textContent =   response.responseJSON.errors.image;  
            if( response.responseJSON.errors.image){
            
              errorImage.hidden = false;

          }else{
              errorImage.hidden = true;

          }

          var errorTittle = document.getElementById('errorTittle');
          errorTittle.textContent =   response.responseJSON.errors.title;  
          if( response.responseJSON.errors.title){
            errorTittle.hidden = false;

          }else{
            errorTittle.hidden = true;

          }
          var errorContent = document.getElementById('errorContent');
          errorContent.textContent =   response.responseJSON.errors.content;  
          if( response.responseJSON.errors.content){
            errorContent.hidden = false;

          }else{
            errorContent.hidden = true;

          }

        
        },
      });
      }
      else if(document.querySelector('#submitForm').innerHTML == "update")
      {
        e.preventDefault();
        let formData = new FormData($('#SubmitFormBlogs')[0]);
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
          console.log(response);
          var errorImage = document.getElementById('errorImage');
          errorImage.textContent =   response.responseJSON.errors.image;  
            if( response.responseJSON.errors.image){
            
              errorImage.hidden = false;

          }else{
              errorImage.hidden = true;

          }

          var errorTittle = document.getElementById('errorTittle');
          errorTittle.textContent =   response.responseJSON.errors.title;  
          if( response.responseJSON.errors.title){
            errorTittle.hidden = false;

          }else{
            errorTittle.hidden = true;

          }
          var errorContent = document.getElementById('errorContent');
          errorContent.textContent =   response.responseJSON.errors.content;  
          if( response.responseJSON.errors.content){
            errorContent.hidden = false;

          }else{
            errorContent.hidden = true;

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
        {data: 'title', name: 'title'},
        {data: 'image', name: 'image'},        
        {data: 'content', name: 'content'},
        {data: 'create', name: 'create'},
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
  document.getElementById("title").value =  '';
  document.getElementById("content").value =  '';
  tinymce.init(
    {
    selector: 'textarea#content',
    });
    tinymce.get('content').setContent('');
  var fileInput = document.getElementById('image');
  fileInput.value = null;




  });

  $(document).ready(function() 
  {

    $(document).on("click" , "#form-edit" ,function(e)
    {
        document.querySelector('#submitForm').innerHTML = 'update';
          e.preventDefault();
          var title  = $(this).data("title");
          var content  = $(this).data("content");
          var id  = $(this).data("id");
          console.log(content);

          document.getElementById("title").value = title;
          document.getElementById("content").value = content;
          
          document.getElementById("id").value = id;
          var fileInput = document.getElementById('image');
          fileInput.value = null;


    });
  });
