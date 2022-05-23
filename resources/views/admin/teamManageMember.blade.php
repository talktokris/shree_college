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
								<li class="breadcrumb-item active" aria-current="page">Manage Team</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->


				<h6 class="mb-0 text-uppercase">Shree Team Members</h6>

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
				<hr/>
				<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-3">


                @foreach ($teamData as $item)
                	<div class="col">

            <?php $teamImage= $item->image;
            if($teamImage=='') { $image_location = url('/assets/images/team/no-image.jpg') ;}
            else {  $image_location = url('/assets/images/team').'/'.$item->id.'/'.$item->image ; }
            ?>
						<div class="card">
							<img src="{{ $image_location }}" class="card-img-top" alt="...">
								<p class="card-text" style="text-align: center;"><a href="<?php echo url('/admin/team-member-image').'/'. base64_encode($item->id) ;?>" class="btn btn-info mt-3">Upload or Change Photo</a></p>

							<div class="card-body">

								<h5 class="card-title">{{ $item->name }} <span>({{$item->post}})</span></h5>
                                <table class="table">
                                    <tr><td><strong>Job Scope :</strong> </td> <td>{{ $item->job_scope }}</td></tr>
                                    <tr><td><strong>Post :</strong></td> <td>{{ $item->post }}</td></tr>
                                    <tr><td><strong>Email :</strong></td> <td>{{ $item->email }}</td></tr>
                                    <tr><td><strong>Facebook :</strong></td> <td>{{ $item->facebook_link }}</td></tr>
                                    <tr><td><strong>Twitter :</strong></td> <td>{{ $item->twitter_link }}</td></tr>
<?php if($item->status==1){ $status_string='Active' ;} else {$status_string='Pending';} ?>
                                    <tr><td><strong>Status :</strong> </td> <td>{{ $status_string }}</td></tr>
                                </table>
								<p class="card-text"></p>	<a href="<?php echo url('/admin/team-member/delete/').'/'. base64_encode($item->id) ;?>" class="btn btn-danger"><i class="bx bx-trash"></i></a>  <a href="<?php echo url('/admin/team-member/edit/').'/'. base64_encode($item->id) ;?>" class="btn btn-warning" style="float: right;"><i class="bx bx-pencil"></i></a>
							</div>
						</div>
					</div>
                @endforeach


				</div>
				<!--end row-->




			</div>
		</div>





@endsection
