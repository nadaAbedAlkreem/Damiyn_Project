<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

	<!-- ** Basic Page Needs ** -->
	<meta charset="utf-8">
	<title>projects</title>

	<!-- ** Mobile Specific Metas ** -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Agency HTML Template">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
	<meta name="author" content="Themefisher">
	<meta name="generator" content="Themefisher Classified Marketplace Template v1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" integrity="sha512-gOQQLjHRpD3/SEOtalVq50iDn4opLVup2TF8c4QPI3/NmUPNZOk2FG0ihi8oCU/qYEsw4P6nuEZT2lAG0UNYaw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- theme meta -->
	<meta name="theme-name" content="classimax" />
	<link rel="icon" href="{{asset('assets/img/brand/favicon.png')}}" type="image/x-icon">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include starrr plugin after jQuery -->
      <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

	<!-- favicon -->
	<link href="images/favicon.png" rel="shortcut icon">
 
	<!-- 
  Essential stylesheets
  =====================================-->
  @include('auth.asset.css')
  


</head>
<body class="body-wrapper">
	<header>
    @include('components.header')
    </header>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		  <div class="modal-content">
			<div class="modal-header d-block modal-header-edit " style="border: 0;">
			  <h1 class="modal-title fs-5" id="exampleModalLabel">طلب جديد </h1>
			  <p>أدخل رقم البائع ونوع وتفاصيل الطلب</p>
			</div>
		         <div class="modal-body">
			  <form   id="SubmitFormOrder">
				@csrf
 			  <meta name="csrf-token" content="{{ csrf_token() }}" />
 				<div class="form-group label-right mb-3">
				  <label >رقم واتس البائع</label>
				  <input type="text" class="form-control" name="mobile_phone_vendor" placeholder="رقم واتس البائع" id="mobile_phone_vendor">
				  <span class="text-danger error-text mobile_err"></span>
				</div>
				<div class="form-group label-right mb-3">
					<label >نوع الطلب</label><br>
					<select class="form-select" name ="type_request"  id = "type_request" aria-label="Default select example">
						<option selected>إختر نوع الطلب</option>
						<option value="p">منتج</option>
						<option value="s">خدمة</option>
					  </select>
					  <span class="text-danger error-text pswd_err"></span>

				  </div>
				<div class="form-group label-right mb-3">
				  <label >تفاصيل الطلب</label>
				  <textarea class="form-control" name = "description" placeholder = "تفاصيل الطلب" id="message-text">تفاصيل الطلب</textarea>
				  <span class="text-danger error-text address_err"></span>

				</div>
				<div class="modal-footer" style="border: 0;">
			  <button type="submit" class="btn btn-send w-100">ارسال </button>
			  </form>

		        </div>
			</div>	
		  </div>
		</div>
     </div>

	 @include('components.footer')

     @include('auth.asset.js')
	 <script type="text/javascript">
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

     </script>

   
	<!-- <script src="{{url('assets/js/forms/order.js')}}"></script> -->

  
</body>


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js" integrity="sha512-7VTiy9AhpazBeKQAlhaLRUk+kAMAb8oczljuyJHPsVPWox/QIXDFOnT9DUk1UC8EbnHKRdQowT7sOBe7LAjajQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 

</html>
