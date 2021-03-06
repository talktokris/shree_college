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
								<li class="breadcrumb-item active" aria-current="page">Search News Post</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">News List</h6>
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



						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered dataTable" style="width:100%">

								<thead>
									<tr>
										<th>Image</th>
										<th>News</th>

										<th>Created</th>
										<th>Update</th>
										<th>Delete</th>
									</tr>
								</thead>
								<tbody>

                                @foreach ($newsData as $item)

                                <?php $imageFindName=$item->thumbnail_img;
                                if($imageFindName==""){   $news_image= url('assets/images/news/no-news.png'); }
                                else {   $news_image= url('assets/images/news').'/'.$item->id.'/'.$item->thumbnail_img; } ?>

                                <?php  $homeStatus=$item->home_page_status;
                                        if($homeStatus==1){ $homeSting='<span class="badge bg-success">Show</span>';}
                                        elseif($homeStatus==0){ $homeSting='<span class="badge bg-secondary">Not Show</span>';}

                                         $statusValue=$item->status;
                                        if($statusValue==1){ $statusSting='<span class="badge bg-success">Active</span>';}
                                        elseif($statusValue==0){ $statusSting='<span class="badge bg-secondary">Draft</span>';}?>
                                <tr>
                                    <td style="text-align: center;"><img src="<?php echo $news_image ;?>"  style="width: 200px;" ></br>
                                    <a href="{{ url('/admin/news-image-upload')}}/{{ base64_encode($item->id) }}" class="btn btn-warning" style="margin: 1em;">Change Image</a></td>
                                    <td style="word-break:break-all;"><h5 style="overflow-wrap: break-word;  white-space:nowrap;">{{ $item->news_title}}</h5>
                                       <p style="overflow-wrap: break-word;  white-space:normal;"> <?php echo $item->news_content ;?></p></td>
                                    <td><strong> E-magazine category :</strong> {{ $item->news_category }}</br>
                                        <strong> Home Page  Status :</strong> <?php echo $homeSting ;?></br>
                                        <strong> Active Status :</strong> <?php echo  $statusSting ;?> </br>
                                        <strong> Created Date :</strong> {{ $item->created_at->diffForHumans()  }}</br>
                                        <strong> Updated Date :</strong> {{ $item->updated_at->diffForHumans()  }}</br></td>
                                    <td><a href="<?php echo url('/admin/news/edit/').'/'. base64_encode($item->id) ;?>" class="btn btn-warning"><i class="bx bx-pencil"></i></a></td>
                                    <td><a href="<?php echo url('/admin/news/delete/').'/'. base64_encode($item->id) ;?>" class="btn btn-danger"><i class="bx bx-trash"></i></a></td>
                                </tr>
                                @endforeach

								</tbody>
								<tfoot>
									<tr>
										<th>Image</th>
										<th>News</th>

										<th>Created</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>




			</div>
		</div>





@endsection
