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
								<li class="breadcrumb-item active" aria-current="page">Manage Gallery</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->

				<div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase p-2">Filter by gallery category</h6>

						<div class="card">
							<div class="card-body">
								<div class="p-4 border rounded">
									<form class="row g-3 needs-validation" novalidate>

                                    <div class="col-md-2">
											<label for="validationCustom04" class="form-label">Select Gallery</label>

											<div class="invalid-feedback">Please select a valid state.</div>
										</div>
										<div class="col-md-6">

											<select class="form-select" id="validationCustom04" required>
												<option selected disabled value="">Choose...</option>
												<option>...</option>
											</select>
											<div class="invalid-feedback">Please select a valid state.</div>
										</div>
										<div class="col-md-3">

                                            <button class="btn btn-primary" type="submit">Search</button>

										</div>


									</form>
								</div>
							</div>
						</div>

						<hr/>


					</div>
				</div>



				<h6 class="mb-0 text-uppercase">Card with images</h6>
				<hr/>
				<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-4">
					<div class="col">
						<div class="card">
							<img src="assets/images/gallery/01.png" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>	<a href="javascript:;" class="btn btn-primary">Go somewhere</a>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<img src="assets/images/gallery/02.png" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>	<a href="javascript:;" class="btn btn-danger">Go somewhere</a>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<img src="assets/images/gallery/03.png" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>	<a href="javascript:;" class="btn btn-success">Go somewhere</a>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<img src="assets/images/gallery/04.png" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>	<a href="javascript:;" class="btn btn-warning">Go somewhere</a>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->




			</div>
		</div>





@endsection
