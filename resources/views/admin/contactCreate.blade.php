@extends('admin.layouts.master')
@section('title','Home')
@section('contents')

<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Shree Contact</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-phone"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Create Contact</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">Create New Contact</h6>
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
									<form class="row g-3 needs-validation" method="post" action="{{ url('/admin/create-contact') }}" >
                                        @csrf
										<div class="col-md-6">
											<label for="validationCustom01" class="form-label">Organization Name</label>
                                            <input type="text" name="organization_name" class="form-control @error('organization_name') is-invalid @enderror" id="validationCustom03" value="{{ old('organization_name') }}" required="">

                                            @error('organization_name')
                                            <div class="invalid-feedback">
                                           {{ $message }}
                                            </div>
                                             @enderror
										</div>


                                        <div class="col-md-6">
											<label for="validationCustom02" class="form-label">Address</label>
                                            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="validationCustom03" value="{{ old('address') }}" required="">

                                            @error('address')
                                            <div class="invalid-feedback">
                                           {{ $message }}
                                            </div>
                                             @enderror
										</div>

                                        <div class="col-md-12">
											<label for="validationCustom02" class="form-label">Google Map Link</label>
                                            <input type="text" name="google_map_link" class="form-control @error('google_map_link') is-invalid @enderror" id="validationCustom03" value="{{ old('google_map_link') }}" required="">

                                            @error('google_map_link')
                                            <div class="invalid-feedback">
                                           {{ $message }}
                                            </div>
                                             @enderror
										</div>
										<div class="col-md-6">
											<label for="validationCustomUsername" class="form-label">Email</label>
											<div class="input-group has-validation"> <span class="input-group-text" id="inputGroupPrepend"><i class="bx bx-envelope"></i></span>
                                                <input type="text" name="email_one" class="form-control @error('email_one') is-invalid @enderror" id="validationCustom03" value="{{ old('email_one') }}" >

                                                @error('email_one')
                                                <div class="invalid-feedback">
                                               {{ $message }}
                                                </div>
                                                 @enderror
											</div>
										</div>
                                        <div class="col-md-6">
											<label for="validationCustomUsername" class="form-label">Email</label>
											<div class="input-group has-validation"> <span class="input-group-text" id="inputGroupPrepend"><i class="bx bx-envelope"></i></span>
                                                <input type="text" name="email_two" class="form-control @error('email_two') is-invalid @enderror" id="validationCustom03" value="{{ old('email_two') }}">

                                                @error('email_two')
                                                <div class="invalid-feedback">
                                               {{ $message }}
                                                </div>
                                                 @enderror
											</div>
										</div>

                                         <div class="col-md-6">
											<label for="validationCustomUsername" class="form-label">Phone No</label>
											<div class="input-group has-validation"> <span class="input-group-text" id="inputGroupPrepend"><i class="bx bx-phone"></i></span>
                                                <input type="text" name="phone_one" class="form-control @error('phone_one') is-invalid @enderror" id="validationCustom03" value="{{ old('phone_one') }}">

                                                @error('phone_one')
                                                <div class="invalid-feedback">
                                               {{ $message }}
                                                </div>
                                                 @enderror
											</div>
										</div>

                                        <div class="col-md-6">
											<label for="validationCustomUsername" class="form-label">Phone No</label>
											<div class="input-group has-validation"> <span class="input-group-text" id="inputGroupPrepend"><i class="bx bx-phone"></i></span>
                                                <input type="text" name="phone_two" class="form-control @error('phone_two') is-invalid @enderror" id="validationCustom03" value="{{ old('phone_two') }}">

                                                @error('phone_two')
                                                <div class="invalid-feedback">
                                               {{ $message }}
                                                </div>
                                                 @enderror
											</div>
										</div>

                                        <div class="col-md-6">
											<label for="validationCustomUsername" class="form-label">Phone No</label>
											<div class="input-group has-validation"> <span class="input-group-text" id="inputGroupPrepend"><i class="bx bx-phone"></i></span>
                                                <input type="text" name="phone_three" class="form-control @error('phone_three') is-invalid @enderror" id="validationCustom03" value="{{ old('phone_three') }}">

                                                @error('phone_three')
                                                <div class="invalid-feedback">
                                               {{ $message }}
                                                </div>
                                                 @enderror
											</div>
										</div>

                                        <div class="col-md-6">
											<label for="validationCustomUsername" class="form-label">Phone No</label>
											<div class="input-group has-validation"> <span class="input-group-text" id="inputGroupPrepend"><i class="bx bx-phone"></i></span>
                                                <input type="text" name="phone_four" class="form-control @error('phone_four') is-invalid @enderror" id="validationCustom03" value="{{ old('phone_four') }}">

                                                @error('phone_four')
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
                                            @error('news_title')
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
