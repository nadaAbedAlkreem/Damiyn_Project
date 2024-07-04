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
        

                                            <table class="table table-bordered border text-nowrap mb-0 data-table"  id="basic-edit">
                                                <thead>
                                                    <tr>
                                                        <th>id</th>
                                                        <th>name</th>
                                                        <th>comment</th>
                                                        <th>create </th>
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
			       <form id="SubmitFormRating"   >
			         <div class="card">
				    		<div class="card-body">
							   	<div id="wizard1">
										<section>
 											<div class="control-group form-group">
 
                      <label class="form-label">comment</label>
                        <input type="text"  id = "comment" name="comment" class="form-control required" placeholder="comment">
                        <label class="form-label">Name</label>
                        <!-- <input type="text"  id = "name" name="name" class="form-control required" placeholder="name"> -->
                        <select class="form-select"  id="name" name = "name" >
                        <option value="0"  > </option>

                          @if(!empty($users))
                            @foreach($users as $user)
                            <option value="{{$user->id}}"  >{{$user->name}}</option>
                            @endforeach                         
                          @endif
                          </select> 
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

                
  </div>
  <script src="{{url('assets/js/forms/rating.js')}}"></script>

            @endsection
 