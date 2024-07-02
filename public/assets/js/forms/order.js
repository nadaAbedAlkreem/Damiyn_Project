$(document).ready(function()
	{
		$(document).on("click" , "#show_des" ,function(e)
		{
			e.preventDefault();
			var des = $(this).data("des");
			var code = $(this).data("code");
			console.log(des);
			console.log(des);
			document.getElementById("des").innerHTML  = des;
			document.getElementById("code").innerHTML  = code;

	
		});
	 
	});
	 

    $(function ()
	 {
     
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
       });
	   $.noConflict();
       $(document).ready(function($) {
        var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
		paging: false,
        ordering: false,
		searching: false,
        info: false,
 
		ajax: {
                    url: "order",
                    data: function (d) {
                        d.type_order = $('#type_order').val(),
                        d.search = $('#search').val()
                    }
              },
        columns: [
            {data: 'code', name: 'code'},
            {data: 'mobile_phone_vendor', name: 'mobile_phone_vendor'},
            {data: 'status_order', name: 'status_order'},
			{data: 'created_at', name: 'created_at'},
            {data: 'type_order', name: 'type_order'},
			{data: 'description', name: 'description'},

         ]

    });
	
    	$('#search').keyup(function()
	     	{
              table.draw();
             });
		$('#type_order').change(function()
		{
                table.draw();
         });
	
	
	 
    
});
 
    
   
 
     
  });

  $(document).ready(function() 
  {
    $('#SubmitFormOrder').on('submit',function(e)
    {
            e.preventDefault();
        
            //   let phone = $('#recipient-name').val();
            //   let type_order= $('.form-select option:selected').val();
            //   let details = $('#message-text').val();
            //   console.log(name);
            //   var token = $("meta[name='csrf-token']").attr("content");
            let formData = new FormData(this); // Create FormData from the form element
            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                     } });

                     
            console.log(formData);
            $.noConflict();
            $.ajax({
            url: "order",
            method:"post",
            type:"post",
            dataType: "json",
            processData: false, // Necessary for FormData
            contentType: false, // Necessary for FormData
            data: formData,    
            success:function(response){
            $('#successMsg').show();
            console.log(response);

            swal({
                    title:  'نجحت عملية ارسال الطلب ',
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
  });



 
 
  
  $(document).ready(function($) {
      var table = $('.data-table-order').DataTable({
        processing: true,
        serverSide: true,
        paging: false,
        ordering: false,
        searching: false,
        info: false,

   ajax: {
        url: "view",
                   data: function (d) {
                       d.type_order = $('#type_order').val(),
                       d.search = $('#search').val()
                       d.status = $('#status').val()

                   }
             },
       columns: [
         {data: 'id', name: 'id'},
         {data: 'user', name: 'user'},
         {data: 'code', name: 'code'},    
         {data: 'mobile', name: 'mobile'},
         {data: 'status', name: 'status'},
         {data: 'type', name: 'type'},
         {data: 'description', name: 'description'},
         {data: 'create', name: 'create'}
       ]     
   

   });
     $('#search').keyup(function(){
             table.draw();
            });
     $('#type_order').change(function(){
           table.draw();
        });
     $('#status').change(function(){
           table.draw();
        });
      });

	$(document).on("click" , "#show_des" ,function(e){
		e.preventDefault();
		var des = $(this).data("des");
		var code = $(this).data("code");
		console.log(des);
		console.log(des);
		document.getElementById("des").innerHTML  = des;
		document.getElementById("code").innerHTML  = code;
 
	});
	 
   
 
 

  
 
