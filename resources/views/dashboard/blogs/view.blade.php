@extends('dashboard.layouts.app')

@section('content')
  

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
            <button type="button" class="btn btn-info btn-icon me-2 btn-b"><i class="mdi mdi-filter-variant"></i></button>
        </div>
        <div class="pe-1 mb-xl-0">
            <button type="button" id = "add-item"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" class="btn btn-danger btn-icon me-2 buttons"><i class="mdi mdi-plus-circle"></i></button>
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
                                        <!-- <input type="text"  id='search' class="form-control" placeholder=" name" aria-label=" name"
							     		aria-describedby="basic-addon1"> -->

                                            <table class="table table-bordered border text-nowrap mb-0 data-table"  id="basic-edit">
                                                <thead>
                                                    <tr>
                                                        <th>id</th>
                                                        <th>image</th>
                                                        <th>title</th>
                                                        <th>content </th>
                                                        <th>create </th>
                                                        <th>action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                            
                                                
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         
  
 
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		  <div class="modal-content">
		         <div class="modal-body">
			       <form id="SubmitFormBlogs"  enctype="multipart/form-data">
			         <div class="card">
				    		<div class="card-body">
							   	<div id="wizard1">
										<section>
											<h2 class="d-none">service Information</h2>
											<div class="control-group form-group">
                      <input type="text" id = "id" class="form-control required"     name="id"  hidden>

												<label class="form-label">image</label>
                        <input type="file" id = "image" class="form-control required"     name="image" placeholder="image">
                        <span class=" text-danger" role="alert" >
                        <i class="fas fa-exclamation-circle mr-1" id ="errorImage"  hidden></i>
                        </span>
                      </div>
											<div class="control-group form-group">
												<label class="form-label"></label>
                       <input type="text"  id = "title" name="title" class="form-control required" placeholder="title">
                       <span class=" text-danger" role="alert" >
                        <i class="fas fa-exclamation-circle mr-1" id ="errorTittle"  hidden></i>
                        </span>
											</div>  
                       <div class="control-group form-group">
							          <label class="form-label"> content</label>
                          <textarea  type="text"  id = "content" name="content" class="form-control required"  > </textarea>
                        </div>  
                        <span class=" text-danger" role="alert" >
                        <i class="fas fa-exclamation-circle mr-1" id ="errorContent"  hidden></i>
                        </span>
                     <button type="button" id = "close" class="btn-close" data-bs-dismiss="modal" aria-label="Close" hidden></button>
										</section>
								</div>
						</div>
				</div>

        </div>
            <div class="modal-footer d-flex justify-content-center">
             <button type="submit" class="btn btn-indigo" id="submitForm">Send <i class="fas fa-paper-plane-o ml-1"></i></button>
            </div>
 			  </form>


        

		        </div>
			</div>	
		  </div>
		</div>
    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		  <div class="modal-content">
			<div class="modal-header modal-header-edit1">
			  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><img src="{{url('assets/images/blog/close-circle.svg')}}" alt=""></button>
			</div>
			<div class="modal-body modal-body-edit">
			  <h5>  تفاصيل   </h5>
			  <p  id = "content_"  ></p>
			</div>
		  </div>
		</div>
	  </div>
  </div> 
            
 

  <script src="{{url('assets/js/forms/blog.js')}}"></script>
  
  </div>
 @endsection
