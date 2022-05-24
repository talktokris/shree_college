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
                                </span>&gt;<span property="itemListElement" typeof="ListItem"><span property="name">NEWS</span>
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
                            <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-40 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-right">
                                <div class="gdlr-core-pbf-background-wrap" style="background-color: #f7f7f7 ;"></div>
                                <div class="gdlr-core-pbf-sidebar-content-inner">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-full-with-frame" >
                                            <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">

                                                @foreach ($newsData as $item)


                                                <div class="gdlr-core-item-list gdlr-core-blog-full  gdlr-core-item-mglr gdlr-core-style-left">

                                                    <div class="gdlr-core-blog-full-frame gdlr-core-skin-e-background">
                                                        <div class="gdlr-core-blog-full-head clearfix">
                                                            <div class="gdlr-core-blog-full-head-right">
                                                                <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 33px ;font-weight: 700 ;letter-spacing: 0px ; color: #3db166;">{{ $item->news_title }}</h3>

                                                                <?php $imageName= $item->large_img; if($imageName!=''){ ?>
                                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                        <img src="{{ asset('assets/images/news') }}/{{ $item->id }}/{{ $item->large_img }}" width="900" height="500"  alt="" />

                                                                    </div>
                                                                    <?php }?>
                                                                <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href="#">{{ $item->created_at->diffForHumans(); }}</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-blog-content">{{ $item->news_content }}
                                                            <div class="clear"></div></div>
                                                    </div>
                                                </div>
                                                @endforeach


                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-sidebar-left gdlr-core-column-extend-left  kingster-sidebar-area gdlr-core-column-20 gdlr-core-pbf-sidebar-padding  gdlr-core-line-height" style="padding: 60px 30px 30px 0px;">

                            @include('public/layouts/sidebarNews') ;


                        </div>
                    </div>


                    @include('public/layouts/socialFooter')

                    @include('public/layouts/partnersFooter')
                </div>
            </div>





            <footer>

                    @include('public/layouts/footer')


            </footer>
        </div>
    </div>




    @endsection
