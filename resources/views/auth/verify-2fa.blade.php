@extends('layouts.app')

@section('content')
<section class="login py-5 border-top-1 " style="direction: rtl;">
<div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-5 col-md-8 align-item-center register-bg">
	<h3 class="bg-h3 p-4 text-start">كود التحقق </h3>
    <?php    $user =  Auth::guard('phone')->user() ; 

    
    ?>
			<p class="p-text">أدخل كود التحقق المرسل إلى رقم الجوال
				<br><span class="color-number">966 {{$user->phone}}+</span></p>                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" id ="VerifySubmit">
                        @csrf
                        <fieldset class="p-4">
                        <input name = "phone" value = "{{$user->phone}}" class="form-control mb-3" type="text"  hidden>
                        <input name = "id" value = "{{$user->id}}" class="form-control mb-3" type="text"  hidden>

                        <div class="row valdaiton">
                                <div class="col">
                                    <input name = "num5" class="form-control mb-3" type="text" required="">
                                </div>
                                <div class="col">
                                    <input  name = "num4" class="form-control mb-3" type="text"  required="">
                                </div>
                                <div class="col">
                                    <input  name = "num3" class="form-control mb-3" type="text"  required="">
                                </div>
                                <div class="col">
                                    <input  name = "num2" class="form-control mb-3" type="text"  required="">
                                </div>
                                <div class="col">
                                    <input  name = "num1" class="form-control mb-3" type="text"  required="">
                                </div>
                            </div>

                            <button  type="submit" class="w-100 btn btn-primary  mt-3 btn-blue">تحقق </button>
                                    <div style="justify-content: center;   display: flex;   align-items: center;" id="countdown"></div>
                            <div class="text-center mt-0 register-par">
                                <p class="parah" id = "reload-send-btn"><a class="mt-3 d-inline-block text-primary"  > إعادة ارسال كود تحقق </a>
                                </p>
                            </div>
                        </fieldset>
			        </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<script src="assets/js/auth/verify.js"></script>

@endsection
