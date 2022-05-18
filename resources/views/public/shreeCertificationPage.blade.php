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
                                </span>&gt;<span property="itemListElement" typeof="ListItem"><span property="name">Certification & Licenses</span>
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
                                       

                                            <div class="gdlr-core-title-item-title-wrap clearfix" style="padding: 20px 0px 0px 0px;">
                                            <h6> Company Registration Certificate</h6>
                                            <p><img src="images/company_reg.png') }}" alt=""/></p>
                                           
                                            </div>
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