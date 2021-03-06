@extends('public.layouts.master')
@section('title','Home')
@section('contents')


<div class="kingster-body-outer-wrapper ">
        <div class="kingster-body-wrapper clearfix  kingster-with-frame">


            <div class="kingster-top-bar">

            @include('public/layouts/headerTop') ;

            </div>
            <header class="kingster-header-wrap kingster-header-style-plain  kingster-style-menu-right kingster-sticky-navigation kingster-style-fixed" data-navigation-offset="75px">

            @include('public/layouts/header') ;

            </header>








            <div class="kingster-breadcrumbs bd_nav">
                        <div class="kingster-breadcrumbs-container kingster-container">
                            <div class="kingster-breadcrumbs-item kingster-item-pdlr"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Kingster." href="index.php" class="home"><span property="name">Home</span></a>
                                <meta property="position" content="1">
                                </span>&gt;<span property="itemListElement" typeof="ListItem"><span property="name">Shree College Team</span>
                                <meta property="position" content="2">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="kingster-page-wrapper" id="kingster-page-wrapper">
                <div class="gdlr-core-page-builder-body">
                    <div class="gdlr-core-pbf-sidebar-wrapper ">
                        <div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
                            <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-40 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left" style="padding: 20px 0px 0px 40px;">
                                <div class="gdlr-core-pbf-sidebar-content-inner" data-skin="Personnel">

                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                                            <div class="gdlr-core-title-item-title-wrap clearfix">
                                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 27px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;">Shree College Professional Team</h3>
                                            </div>

                                            <div class="gdlr-core-title-item-title-wrap clearfix" style="padding: 20px 0px 0px 0px;">
                                                We believe the best faculty members are the assets and guiding tool for any students to go through exams.
                                                So, we welcome highly experienced tutors with international exposure for CIMA professional qualification
                                            </div>
                                        </div>
                                    </div>





                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-personnel-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-personnel-item-style-medium gdlr-core-personnel-style-medium">


                                            @foreach ($teamData as $item)

                                            <?php $imageName= $item->image;
                                            if($imageName ==''){ $imageLinkString= url('/assets/images/team/no-image.jpg'); }
                                            else { $imageLinkString= url('/assets/images/team').'/'.$item->id.'/'.$item->image;} ?>

                                               <div class="gdlr-core-personnel-list-column  gdlr-core-column-60 gdlr-core-column-first gdlr-core-item-pdlr">
                                                <div class="gdlr-core-personnel-list clearfix">
                                                    <div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                        <a href="#"><img src="{{ $imageLinkString }}" alt="" width="200" height="200" title="personnel-1" /></a>
                                                    </div>
                                                    <div class="gdlr-core-personnel-list-content-wrap">
                                                        <div class="gdlr-core-personnel-list-social">
                                                            <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align" style="padding-bottom: 0px ;"><a href="{{ $item->facebook_link }}" target="_blank" class="gdlr-core-social-network-icon" title="facebook" style="font-size: 18px ;color: #50bd77 ;"><i class="fa fa-facebook" ></i></a><a href="{{ $item->twitter_link}}" target="_blank" class="gdlr-core-social-network-icon" title="twitter" style="font-size: 18px ;color: #50bd77 ;margin-left: 14px ;"><i class="fa fa-twitter" ></i></a></div>
                                                        </div>
                                                        <h3 class="gdlr-core-personnel-list-title" style="font-size: 23px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;"><a href="#" >{{ $item->name }}</a></h3>
                                                        <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 16px ;font-weight: 500 ;font-style: normal ;letter-spacing: 0px ;">{{ $item->post }}</div>
                                                        <div class="gdlr-core-personnel-info">
                                                            <div class="kingster-personnel-info-list kingster-type-email"><i class="kingster-personnel-info-list-icon fa fa-envelope-open"></i>{{ $item->email }}</div>

                                                        </div>
                                                        <div class="gdlr-core-personnel-list-content">
                                                         <?php if($item->education!=''){ ?> <p>&#8211; {{ $item->education }}</p> <?php }?>
                                                        </div>
                                                       </div>
                                                </div>
                                            </div>

                                            @endforeach


                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="gdlr-core-pbf-sidebar-right gdlr-core-column-extend-right  kingster-sidebar-area gdlr-core-column-20 gdlr-core-pbf-sidebar-padding  gdlr-core-line-height" style="padding: 40px 0px 30px 0px;">

                            @include('public/layouts/sidebarNews') ;

                            </div>
                        </div>
                    </div>



                </div>


            </div>


            @include('public/layouts/socialFooter')

            @include('public/layouts/partnersFooter')


            <footer>

            @include('public/layouts/footer')

            </footer>
        </div>
    </div>



    @endsection
