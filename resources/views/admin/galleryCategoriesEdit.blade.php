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
								<li class="breadcrumb-item active" aria-current="page">Gallery Category Setup</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">Create New Gallery Category</h6>
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

                                    @foreach ($galleryCatDataSingle as $itemSingle)


                                        <form class="row g-3 needs-validation" method="post" action="{{ url('/admin/gallery-category/edit') }}/<?php echo base64_encode($itemSingle->id);?>" >
                                            @csrf

                                    <div class="col-md-3">
											<label for="validationCustom04" class="form-label">Gallery Category Name :</label>

										</div>
										<div class="col-md-6">

                                            <input type="text" name="catagory_name" class="form-control @error('catagory_name') is-invalid @enderror" id="validationCustom03" value="{{ old('catagory_name') ?? $itemSingle->catagory_name  }}" required="">

                                            @error('catagory_name')
                                            <div class="invalid-feedback">
                                           {{ $message }}
                                            </div>
                                             @enderror
										</div>
										<div class="col-md-3">

                                            <button class="btn btn-primary" type="submit">Submit form</button>

										</div>


									</form>
                                    @endforeach
								</div>
							</div>
						</div>
						<hr/>



					</div>
				</div>
				<!--end row-->

                	<!--start row-->
				<div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">Gallery Category List</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
								<table class="table mb-0">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Name</th>
											<th scope="col">Edit</th>
											<th scope="col">Delete</th>
										</tr>
									</thead>
									<tbody>
                                        <?php $num=1; ?>
                                    @foreach ($galleryCatData as $item)

                                    <tr>
                                        <th scope="row">{{ $num++ }}</th>
                                        <td>{{ $item->catagory_name }}</td>
                                        <td><a href="<?php echo url('/admin/gallery-category/edit/').'/'. base64_encode($item->id) ;?>" class="btn btn-warning"><i class="bx bx-pencil"></i></a></td>
                                        <td><a href="<?php echo url('/admin/gallery-category/delete/').'/'. base64_encode($item->id) ;?>" class="btn btn-danger"><i class="bx bx-trash"></i></a></td>

                                    </tr>
                                    @endforeach

									</tbody>
								</table>
							</div>
						</div>


					</div>
				</div>
				<!--end row-->
			</div>
		</div>





@endsection
