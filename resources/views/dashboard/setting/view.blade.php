@extends('dashboard.layouts.app')

@section('content')
<style>
.video-container {
    width: 100%; /* Adjust the width as needed */
    height: auto; /* The height will adjust automatically based on the video aspect ratio */
    max-width: 800px; /* Set a maximum width for the video container */
    margin: 0 auto; /* Center the video container horizontally */
}
 </style>   
<div class="main-content app-content">

<!-- container -->
     <div class="main-container container-fluid">

<!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
          <div class="my-auto">
           <h4 class="page-title">Tables</h4>
             <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
              <li class="breadcrumb-item active" aria-current="page">Edit Tables</li>
           </ol>
          </div>
            <div class="d-flex my-xl-auto right-content align-items-center">
      
        <div class="pe-1 mb-xl-0">
         </div>
 
       
    </div>
</div>
<!-- breadcrumb -->

<div class="row">
                            <div class="col-lg-12">
                           
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Basic Edit Table</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <div class="modal-body">
                                            
                                                                        <form id="SubmitFormSetting"  enctype="multipart/form-data">
                                                                          <div class="card">
                                                                            <div class="card-body">
                                                                              <div id="wizard1">
                                                                                <section>
                                                                                  <h2 class="d-none">setting Information</h2>
                                                                                  <div class="control-group form-group">
                                                                                  @if(!empty($setting))
                                                                                  
                                                                                  @foreach($setting as $item)
                                                                              

                                                                                  @if ($item->type_field == "images") 
                                                                                  <!-- <label class="form-label">{{$item->key}} <i class="bi bi-eye-fill"  data-bs-toggle="modal" data-bs-target="#modalImageLogoHeader"></i> </label>
                                                                                          <input type="file" id = "{{$item->key}}" class="form-control required"     name="{{$item->key}}"  >
                                                                                          <div class="modal fade" id="modalImageLogoHeader" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                                <div class="modal-dialog">
                                                                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/blog/close-circle.svg" alt=""></button>
                                                                                                    <div class="modal-body modal-body-edit   ">
                                                                                                      <img class="profile-user-img img-fluid "  style = "width: 125%; height: 125%;"  src='/storage/{{$item->value}}'   alt="User  picture">
                                                                                                    </div>
                                                                                                </div>
                                                                                          </div> -->

                                                                                          <label class="form-label card-body pt-0">{{$item->key}}</label>
                                                            <div class="card-body pt-0">
                                                            
                                                            <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true" style="background-image: url({{ asset('storage/' . $item->value) }})">
                                                                 <div class="image-input-wrapper w-100px h-100px"></div>    
                                                                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                                                <!--begin::Inputs-->
                                                                                <input type="file" name="{{$item->key}}"  />
                                                                                <input type="hidden" name="avatar_remove" />
                                                                                <!--end::Inputs-->
                                                                            </label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Cancel-->
                                                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                                                                <i class="bi bi-x fs-2"></i>
                                                                            </span>
                                                                            <!--end::Cancel-->
                                                                            <!--begin::Remove-->
                                                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                                                                <i class="bi bi-x fs-2"></i>
                                                                            </span>
                                                                            <!--end::Remove-->
                                                                        </div>	
                                                                    </div>	
                                                                                  @elseif( $item->type_field == "string" )
                                                                                              <div class="card-body pt-0">
                                                                                                      <label class="form-label">{{$item->key}}</label>
                                                                                                      <input type="text"  id = "{{$item->key}}" name="{{$item->key}}" value = "{{ $item->value }}" class="form-control required" ></input>
                                                                                            </div>
                                                                              
                                                                                  @elseif( $item->type_field == "video" ) 
                                                                                  <div class="card">
                                                                                        <div class="card-body">
                                                                                                      <div class="control-group form-group">
                                                                                                              <label class="form-label">{{$item->key}}<i class="bi bi-eye-fill"  data-bs-toggle="modal" data-bs-target="#modalVideo"></i>  </label>
                                                                                                            <div class="col-sm-12 col-md-12">
                                                                                                              <input type="file"  id = "{{$item->key}}"  name="{{$item->key}}"  class="dropify" data-height="200">
                                                                                                            </div>
                                                                                              </div>  
                                                                                        </div> 
                                                                                        <div class="modal fade" id="modalVideo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                                <div class="modal-dialog">
                                                                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/blog/close-circle.svg" alt=""></button>
                                                                                                    <div class="modal-body modal-body-edit   ">
                                                                                                    <video controls autoplay name="media"  style = "width: 125%; height: 125%;" >
                                                                                                    <source src='/storage/{{$item->value}}' type="video/mp4">
                                                                                                    </video>                 
                                                                                                    </div>
                                                                                                </div>
                                                                                          </div>

                                                               


                                                                                  @endif
 
                                                                                  @endforeach

                                                                              @endif
                                                                                                                        
                                                                                                          
                                                                                     <button type="button" id = "close" class="btn-close" data-bs-dismiss="modal" aria-label="Close" hidden></button>
                                                                                  </section>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                      </div>
                                                                          <div class="modal-footer d-flex justify-content-center">
                                                                                    <button type="submit" class="btn btn-indigo" id="submitForm">save change  <i class="fas fa-paper-plane-o ml-1"></i></button>
                                                                            </div>
                                                                  </form>
                                                                        
                                                                              </div>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                              
                                                          <div class="modal fade" id="ModalImgaeAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                          <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                  <form id="SubmitFormAddImage"  enctype="multipart/form-data">
                                                                      <div class="card">
                                                                        <div class="card-body">
                                                                          <div id="wizard1">
                                                                                  <section>
                                                                                    <div class="control-group form-group">
                                                                                    <input type="text"  id = "id" name="id" class="form-control required" hidden>

                                                                                      <label class="form-label">icon</label>
                                                                                      <input type="file"  id = "image" class="form-control required"     name="image[]" placeholder="image" multiple>
                                                                                      <span class=" text-danger" role="alert" >
                                                                                      <i class="fas fa-exclamation-circle mr-1" id ="errorImage"  hidden></i>
                                                                                      </span>
                                                                                    </div>
                                                                                    <button type="button" id = "close-add-btn" class="btn-close" data-bs-dismiss="modal" aria-label="Close" hidden></button>
                                                                                  </section>
                                                                              </div>
                                                                          </div>
                                                                      </div>
                                                                        <div class="modal-footer d-flex justify-content-center">
                                                                              <button type="submit" class="btn btn-indigo" id="submitFormImage">Send <i class="fas fa-paper-plane-o ml-1"></i></button>
                                                                        </div>
                                                                  </form> 
                                                              </div>
                                                            </div>	
                                                          </div>
                                                        
            </div> 
         
 <script type="text/javascript">
 $('#SubmitFormSetting').on('submit',function(e)
{
 
    e.preventDefault();
     let formData = new FormData($('#SubmitFormSetting')[0]);
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
       console.log(response);
       document.getElementById("SubmitFormSetting").reset(); 
      swal({  
         title: " success",  
          icon: "success",  
         button: "ok",  
         });  
         location.reload();

   
    },
 
   error: function(response) 
    {
     var jsonData = response.responseJSON.message;
       console.log(jsonData);    
         swal({  
         title: " Oops!",  
         text:jsonData,  
         icon: "error",  
         button: "oh no!",  
         });  
    
    },
   });
  
 
});
 


 


 
 
  
</script>                 
  </div>
 
  @endsection
