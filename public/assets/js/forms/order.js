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
	 
   
 
 

  
 
