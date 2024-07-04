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
                                                        <th>name</th>
                                                        <th>logo</th>
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
			       <form id="SubmitFormPartner"  enctype="multipart/form-data">
			         <div class="card">
				    		<div class="card-body">
							   	<div id="wizard1">
										<section>
											<h2 class="d-none">Partner Information</h2>
											<div class="control-group form-group">
												<label class="form-label">Name</label>
                        <input type="text"  id = "id" name="id" class="form-control required" hidden>
												<input type="text"  id = "name" name="name" class="form-control required" placeholder="Name">
								
                        <span class=" text-danger" role="alert" >
                        <i class="fas fa-exclamation-circle mr-1" id ="errorName"  hidden></i>
                        </span>
                      </div>
											<div class="control-group form-group">
												<label class="form-label"></label>
												<input type="file" id = "logo" class="form-control required"     name="logo" placeholder="logo">
                        <span class=" text-danger" role="alert" >
                        <i class="fas fa-exclamation-circle mr-1" id ="errorLogo"  hidden></i>
                        </span>
                      </div>  

                      <button type="button" id = "close" class="btn-close" data-bs-dismiss="modal" aria-label="Close" hidden ></button>

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

            </div> 

            <script src="{{url('assets/js/forms/partner.js')}}"></script>
                
  </div>
 
            @endsection
