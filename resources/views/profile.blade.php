@extends('layouts.app')

@section('content')
<section class="login py-5 border-top-1 " style="direction: rtl;">
	<div class="container">
	  <div class="row justify-content-center">
		<div class="col-lg-3 col-md-8 align-item-center register-bg border-ptofile">
			<h5 class="new-profile">البيانات الشخصية</h5>
		</div>
		<div class="col-lg-7 col-md-8 align-item-center border-profile1">
		  <div >
			<form  id ="SubmitUpdateProfile" >
               
			  <fieldset class="p-4">
				<div class="class-group text-align-right">
                 <input class="form-control mb-3"  id ="id"  name ="id"  value ="{{Auth::user()->id}}" type="text" placeholder="الإسم كامل" required="" hidden>
 
					<label for="">الإسم</label>
					<input class="form-control mb-3"  id ="name"  name = "name" value ="{{Auth::user()->name}}" type="text" placeholder="الإسم كامل" required="">
				</div>
				<div class="class-group text-align-right">
					<label for="">البريد الإلكتروني</label>
					<input class="form-control mb-3" id = "email" name = "email" value ="{{Auth::user()->email}}" type="email" placeholder="البريد الإلكتروني" required="">
				</div>
				<div class="class-group text-align-right">
					<label for="">رقم الجوال </label>
					<input class="form-control mb-3"  id ="phone"  name ="phone" value ="{{Auth::user()->phone}}" type="phone" placeholder="رقم الجوال " required="">
				</div>
				<button type="submit"  class="w-100 btn btn-primary  mt-3 btn-blue"> حفظ التعديلات</button>
			  </fieldset>

 
			</form>
		  </div>
		</div>
	  </div>
	</div>
  </section>
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js" integrity="sha512-7VTiy9AhpazBeKQAlhaLRUk+kAMAb8oczljuyJHPsVPWox/QIXDFOnT9DUk1UC8EbnHKRdQowT7sOBe7LAjajQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{url('assets/js/forms/profile.js')}}"></script>

@endsection
