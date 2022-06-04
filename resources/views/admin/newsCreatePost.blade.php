@extends('admin.layouts.master')
@section('title','Home')
@section('contents')


<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">News</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-news"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Create News Post</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-9 mx-auto">

						<h6 class="mb-0 text-uppercase">Create News Post</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
								<div class="p-4 border rounded">
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


									<form class="needs-validation" method="post" action="{{ url('/admin/create-news-post') }}" >
                                    @csrf

										<div class="mb-3">
											<label for="validationCustom03" class="form-label">News Title :</label>
											<input type="text" name="news_title" class="form-control @error('news_title') is-invalid @enderror" id="validationCustom03" value="{{ old('news_title') }}" required="">

                                            @error('news_title')
                                            <div class="invalid-feedback">
                                           {{ $message }}
                                            </div>
                                             @enderror


										<div class="mb-3">
											<label for="validationTextarea" class="form-label">News Content : </label>
											<textarea name="news_content" class="form-control  @error('news_title') is-invalid @enderror" value="{{ old('news_content') }}" id="validationTextarea" placeholder="Required example textarea" required>{{ old('news_content')}}</textarea>
											<div class="invalid-feedback">Please enter a message in the textarea.</div>

                                            @error('news_content')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                             @enderror
										</div>

                                        <div class="mb-3">
											<label for="validationTextarea" class="form-label">E-magazine category : </label>
                                            <select name="news_category" class="form-select" id="validationCustom04" required="">
                                                <?php if(old('news_category')){
                                                   $status_string = old('news_category');
                                                    ?>
                                                     <option value="<?php echo old('news_category') ?>"><?php echo $status_string ?></option>
                                                    <?php  }  ?>
                                            <option value="General Notices">General Notices</option>
											<option value="Examination Notices">Examination Notices</option>
                                            <option value="News Events">News Events</option>
	                                        </select>

                                            @error('news_category')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                             @enderror
										</div>


	                                    <div class="mb-3">
											<label for="validationTextarea" class="form-label">Home Page Status : </label>
                                            <select name="home_page_status" class="form-select" id="validationCustom04" required="">
                                                <?php if(old('home_page_status')){
                                                    if(old('status')==0){ $status_string='Not Show';}
                                                    elseif(old('status')==1){ $status_string='Show';}
                                                    else { $status_string='';}
                                                    ?>
                                                     <option value="<?php echo old('home_page_status') ?>"><?php echo $status_string ?></option>
                                                    <?php  }  ?>
                                            <option value="0">Not Show</option>
											<option value="1">Show</option>


											</select>
                                            @error('home_page_status')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                             @enderror
										</div>


										<div class="mb-3">
											<label for="validationTextarea" class="form-label">Post Status : </label>
                                            <select name="status" class="form-select" id="validationCustom04" required="">
                                                <?php if(old('status')){
                                                    if(old('status')==0){ $status_string='Draft';}
                                                    elseif(old('status')==1){ $status_string='Publish';}
                                                    else { $status_string='';}
                                                    ?>
                                                     <option value="<?php echo old('status') ?>"><?php echo $status_string ?></option>
                                                    <?php  }  ?>
                                            <option value="0">Draft</option>
												<option value="1">Publish</option>


											</select>
                                            @error('status')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                             @enderror
										</div>




										<div class="mb-3">
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
