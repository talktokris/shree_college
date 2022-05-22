@extends('admin.layouts.master')
@section('title','Home')
@section('contents')


<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Gallery</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-photo-album"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Upload Image</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-9 mx-auto">


						<h6 class="mb-0 text-uppercase">Upload New Images to Gallery</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
								<div class="p-4 border rounded">

                                <div class="card">
                                    <img src="assets/images/gallery/03.png" class="card-img-top" alt="...">

                                </div>
									<form class="needs-validation">

										<div class="mb-3">
											<select class="form-select"  aria-label="select example" required>
												<option value="">Open this select menu</option>
												<option value="1">One</option>
												<option value="2">Two</option>
												<option value="3">Three</option>
											</select>
											<div class="invalid-feedback">Example invalid select feedback</div>
										</div>
										<div class="mb-3">
											<input type="file" class="form-control" aria-label="file example" required>
											<div class="invalid-feedback">Example invalid form file feedback</div>
										</div>
										<div class="mb-3">
											<button class="btn btn-primary" type="submit" disabled>Submit form</button>
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
