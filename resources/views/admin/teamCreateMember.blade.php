@extends('admin.layouts.master')
@section('title','Home')
@section('contents')

<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Shree Team</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-network-chart"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Create Team Member</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">Create New Team Member</h6>
						<hr/>
						<div class="card">

                                    <!---- allert message Start -->
                                    @if(Session::has('flash_message_success'))
                                    <div class="alert alert-success border-0 bg-success alert-dismissible fade show py-2">
                                        <div class="d-flex align-items-center">
                                            <div class="font-35 text-white"><i class="bx bxs-check-circle"></i>
                                            </div>
                                            <div class="ms-3">
                                                <h6 class="mb-0 text-white">Success Alerts</h6>
                                                <div class="text-white">{!! session('flash_message_success') !!} </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    @endif

                                    @if(Session::has('flash_message_error'))
                                    <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show py-2">
                                        <div class="d-flex align-items-center">
                                            <div class="font-35 text-white"><i class="bx bxs-message-square-x"></i>
                                            </div>
                                            <div class="ms-3">
                                                <h6 class="mb-0 text-white">Error Alerts</h6>
                                                <div class="text-white">{!! session('flash_message_error') !!}</div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    @endif
                                    <!---- allert message End -->
							<div class="card-body">
								<div class="p-4 border rounded">
									<form class="row g-3 needs-validation" method="post" action="{{ url('/admin/create-team-member') }}" >
                                        @csrf
										<div class="col-md-6">
											<label for="validationCustom01" class="form-label">Name</label>
                                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="validationCustom03" value="{{ old('name') }}" required="">

                                            @error('name')
                                            <div class="invalid-feedback">
                                           {{ $message }}
                                            </div>
                                             @enderror
										</div>
										<div class="col-md-6">
											<label for="validationCustom02" class="form-label">Team Type</label>
                                            <select name="job_scope" class="form-select" id="validationCustom04" required="">
                                                <?php if(old('job_scope')){
                                                    ?>
                                                     <option value="<?php echo old('job_scope') ?>"><?php echo old('job_scope') ?></option>
                                                    <?php  }  ?>
                                            <option value="Management">Management</option>
												<option value="Lecturer">Lecturer</option>


											</select>
                                            @error('job_scope')
                                            <div class="invalid-feedback">
                                           {{ $message }}
                                            </div>
                                             @enderror
										</div>

                                        <div class="col-md-6">
											<label for="validationCustom02" class="form-label">Job Title</label>
                                            <input type="text" name="post" class="form-control @error('post') is-invalid @enderror" id="validationCustom03" value="{{ old('post') }}" required="">

                                            @error('post')
                                            <div class="invalid-feedback">
                                           {{ $message }}
                                            </div>
                                             @enderror
										</div>


                                        <div class="col-md-6">
											<label for="validationCustom02" class="form-label">Qualification</label>
                                            <input type="text" name="education" class="form-control @error('education') is-invalid @enderror" id="validationCustom03" value="{{ old('education') }}">

                                            @error('education')
                                            <div class="invalid-feedback">
                                           {{ $message }}
                                            </div>
                                             @enderror
										</div>

                                        <div class="col-md-6">
											<label for="validationCustom02" class="form-label">Email Address</label>
                                            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="validationCustom03" value="{{ old('email') }}" required="">

                                            @error('email')
                                            <div class="invalid-feedback">
                                           {{ $message }}
                                            </div>
                                             @enderror
										</div>
										<div class="col-md-6">
											<label for="validationCustomUsername" class="form-label">Facebok profile URL</label>
											<div class="input-group has-validation"> <span class="input-group-text" id="inputGroupPrepend">Facebook</span>
                                                <input type="text" name="facebook_link" class="form-control @error('facebook_link') is-invalid @enderror" id="validationCustom03" value="{{ old('facebook_link') }}" >

                                                @error('facebook_link')
                                                <div class="invalid-feedback">
                                               {{ $message }}
                                                </div>
                                                 @enderror
											</div>
										</div>
                                        <div class="col-md-6">
											<label for="validationCustomUsername" class="form-label">Twitter profile URL</label>
											<div class="input-group has-validation"> <span class="input-group-text" id="inputGroupPrepend">Twitter</span>
                                                <input type="text" name="twitter_link" class="form-control @error('twitter_link') is-invalid @enderror" id="validationCustom03" value="{{ old('twitter_link') }}">

                                                @error('twitter_link')
                                                <div class="invalid-feedback">
                                               {{ $message }}
                                                </div>
                                                 @enderror
											</div>
										</div>

                                        <div class="col-md-6">
											<label for="validationCustom02" class="form-label">Show Status</label>
                                            <select name="status" class="form-select" id="validationCustom04" required="">
                                                <?php if(old('status')){
                                                    if(old('status')==0){ $status_string='Pending';}
                                                    elseif(old('status')==1){ $status_string='Active';}
                                                    else { $status_string='';}
                                                    ?>
                                                     <option value="<?php echo old('status') ?>"><?php echo $status_string ?></option>
                                                    <?php  }  ?>
                                            <option value="0">Pending</option>
												<option value="1">Active</option>


											</select>
                                            @error('status')
                                            <div class="invalid-feedback">
                                           {{ $message }}
                                            </div>
                                             @enderror
										</div>

										<div class="col-12">
											<button class="btn btn-primary" type="submit">Submit form</button>
										</div>
									</form>
								</div>
							</div>
						</div>




					</div>
				</div>
				<!--end row-->
			</div>
		</div>





@endsection
