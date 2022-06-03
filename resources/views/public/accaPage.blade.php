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
                                </span>&gt;<span property="itemListElement" typeof="ListItem"><span property="name">ACCA - The association of chartered certified accountants</span>
                                <meta property="position" content="2">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="kingster-page-wrapper" id="kingster-page-wrapper">
                <div class="gdlr-core-page-builder-body">
                    <div class="gdlr-core-pbf-sidebar-wrapper " style="margin: 0px 0px 30px 0px;">
                        <div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
                            <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-40 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left" style="padding: 35px 0px 20px 0px;">
                                <div class="gdlr-core-pbf-sidebar-content-inner">






                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 40px ;">
                                            <div class="gdlr-core-title-item-title-wrap clearfix">
                                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 22px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;color: #223d71 ;margin-right: 30px ;"> ACCA</h3>
                                                <div class="gdlr-core-title-item-divider gdlr-core-right gdlr-core-skin-divider" style="font-size: 22px ;border-bottom-width: 3px ;"></div>

                                            </div>

                                        </div>
                                    </div>

                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 40px ;">


                                            <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                            <img src="{{ asset('assets/images/acca_image.jpg') }}" alt="" width="1100" height="490" style="  border: 1px solid #3db166 !important;">
                                            </div>

                                        </div>
                                    </div>

                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 40px ;">


                                            <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;text-transform: none ;">
                                                <p>The association of chartered certified accountants (ACCA) is globally recognized professional qualification introduced in 1904. It is largest and fastest growing accountancy body for professional accountants in the world.</p>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 0px -7px 0px 0px;">
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-feature-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align">
                                                        <div class="gdlr-core-feature-box gdlr-core-js gdlr-core-feature-box-type-outer" style="background-color: #3db166 ;border-width: 0px 0px 0px 0px;border-radius: 3px;-moz-border-radius: 3px;-webkit-border-radius: 3px;">
                                                            <div class="gdlr-core-feature-box-background" style="background-image: url(upload/shutterstock_327174593.jpg) ;opacity: 0.14 ;"></div>
                                                            <div class="gdlr-core-feature-box-content gdlr-core-sync-height-content">
                                                                <h3 class="gdlr-core-feature-box-item-title" style="font-size: 16px ;font-weight: 600 ;">Flexibility</h3></div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 0px -3px 0px -3px;">
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-feature-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align">
                                                        <div class="gdlr-core-feature-box gdlr-core-js gdlr-core-feature-box-type-outer" style="background-color: #3db166 ;border-width: 0px 0px 0px 0px;border-radius: 3px;-moz-border-radius: 3px;-webkit-border-radius: 3px;">
                                                            <div class="gdlr-core-feature-box-background" style="background-image: url(upload/shutterstock_339364214.jpg) ;opacity: 0.14 ;"></div>
                                                            <div class="gdlr-core-feature-box-content gdlr-core-sync-height-content">
                                                                <h3 class="gdlr-core-feature-box-item-title" style="font-size: 16px ;font-weight: 600 ;">Mobility</h3></div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 0px 0px 0px -7px;padding: 0px 0px 45px 0px;">
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-feature-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align">
                                                        <div class="gdlr-core-feature-box gdlr-core-js gdlr-core-feature-box-type-outer" style="background-color: #3db166 ;border-width: 0px 0px 0px 0px;border-radius: 3px;-moz-border-radius: 3px;-webkit-border-radius: 3px;">
                                                            <div class="gdlr-core-feature-box-background" style="background-image: url(upload/shutterstock_547272460.jpg) ;opacity: 0.14 ;"></div>
                                                            <div class="gdlr-core-feature-box-content gdlr-core-sync-height-content">
                                                                <h3 class="gdlr-core-feature-box-item-title" style="font-size: 16px ;font-weight: 600 ;">Globally</h3></div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 15px ;">
                                            <div class="gdlr-core-text-box-item-content" style="font-size: 21px ;text-transform: none ;color: #3db166 ;">
                                                <p style="text-align:center;">Every eight minutes, someone, somewhere in the world register with ACCA!!! <br/>
                                                &ldquo; Let the facts speak for themselves &rdquo;
                                                    </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-course-info-item gdlr-core-item-pdlr gdlr-core-item-pdb" style="padding-bottom: 45px ;">
                                                    <div class="gdlr-core-course-info-item-inner clearfix" style="color: #ffffff ;background-color: #3db166 ;">
                                                        <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                                                            <div class="gdlr-core-head">500000+</div>
                                                            <div class="gdlr-core-tail">Students globally</div>
                                                        </div>
                                                        <div class="gdlr-core-pbf-column gdlr-core-column-30">
                                                            <div class="gdlr-core-head">200000+</div>
                                                            <div class="gdlr-core-tail">Members globally</div>
                                                        </div>
                                                        <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                                                            <div class="gdlr-core-head">400+ </div>
                                                            <div class="gdlr-core-tail">Examination centres globally</div>
                                                        </div>
                                                        <div class="gdlr-core-pbf-column gdlr-core-column-30 ">
                                                            <div class="gdlr-core-head">280 +</div>
                                                            <div class="gdlr-core-tail">Approved learning partners</div>
                                                        </div>
                                                        <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                                                            <div class="gdlr-core-head">83+</div>
                                                            <div class="gdlr-core-tail">Offices and centres globally</div>
                                                        </div>
                                                        <div class="gdlr-core-pbf-column gdlr-core-column-40">
                                                            <div class="gdlr-core-head">180+</div>
                                                            <div class="gdlr-core-tail">Countries in which  ACCA has its presence</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix ">
                                                    <ul>
                                                        <li class=" gdlr-core-skin-divider" style="margin-bottom: 13px ;"><span class="gdlr-core-icon-list-icon-wrap" style="margin-top: 1px ;"><i class="gdlr-core-icon-list-icon fa fa-hand-o-right" style="color: #f82249 ;font-size: 22px ;width: 22px ;"></i></span>
                                                            <div class="gdlr-core-icon-list-content-wrap"><span class="gdlr-core-icon-list-content" style="font-size: 17px ;text-transform: none ;">Academic degree with professional certificate – Bsc. Honours from Oxford Brookes University with ACCA (after skill level)</span></div>
                                                        </li>
                                                        <li class=" gdlr-core-skin-divider" style="margin-bottom: 13px ;"><span class="gdlr-core-icon-list-icon-wrap" style="margin-top: 1px ;"><i class="gdlr-core-icon-list-icon fa fa-hand-o-right" style="color: #f82249 ;font-size: 22px ;width: 22px ;"></i></span>
                                                            <div class="gdlr-core-icon-list-content-wrap"><span class="gdlr-core-icon-list-content" style="font-size: 17px ;text-transform: none ;">Flexibility- in determining number of years to complete and number of papers to be taken at each exam intake</span></div>
                                                        </li>
                                                        <li class=" gdlr-core-skin-divider" style="margin-bottom: 13px ;"><span class="gdlr-core-icon-list-icon-wrap" style="margin-top: 1px ;"><i class="gdlr-core-icon-list-icon fa fa-hand-o-right" style="color: #f82249 ;font-size: 22px ;width: 22px ;"></i></span>
                                                            <div class="gdlr-core-icon-list-content-wrap"><span class="gdlr-core-icon-list-content" style="font-size: 17px ;text-transform: none ;">Mobility – can sit for ACCA exam throughout the world (any of the 399 exam centre) </span></div>
                                                        </li>
                                                        <li class=" gdlr-core-skin-divider" style="margin-bottom: 13px ;"><span class="gdlr-core-icon-list-icon-wrap" style="margin-top: 1px ;"><i class="gdlr-core-icon-list-icon fa fa-hand-o-right" style="color: #f82249 ;font-size: 22px ;width: 22px ;"></i></span>
                                                            <div class="gdlr-core-icon-list-content-wrap"><span class="gdlr-core-icon-list-content" style="font-size: 17px ;text-transform: none ;">International (globally) recognition.</span></div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align">
                                            <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #3db166 ;border-bottom-width: 3px ;"></div>
                                        </div>
                                    </div>


                                    <div class="gdlr-core-pbf-wrapper ">
                                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 40px ;">
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 20px ;font-weight: 600 ;">APPLIED KNOWLEDGE</h3></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-course-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-course-style-list" style="padding-bottom: 45px ;">
                                                    <div class="gdlr-core-course-item-list"><a class="gdlr-core-course-item-link" href="#"><span class="gdlr-core-course-item-id gdlr-core-skin-caption" >BT</span><span class="gdlr-core-course-item-title gdlr-core-skin-title" >Business and Technology</span></a></div>
                                                    <div class="gdlr-core-course-item-list"><a class="gdlr-core-course-item-link" href="#"><span class="gdlr-core-course-item-id gdlr-core-skin-caption" >MA</span><span class="gdlr-core-course-item-title gdlr-core-skin-title" >Management Accounting</span></a></div>
                                                    <div class="gdlr-core-course-item-list"><a class="gdlr-core-course-item-link" href="#"><span class="gdlr-core-course-item-id gdlr-core-skin-caption" >FA</span><span class="gdlr-core-course-item-title gdlr-core-skin-title" >Financial Accounting</span></a></div>
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                            Students are assessed using computer-based testing with multiple-choice questions. Each test typically lasts for 2 hours and they are available to be taken throughout the year.
                                            </div>
                                            </div>

                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 40px ;">
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 20px ;font-weight: 600 ;">APPLIED SKILLS</h3></div>
                                                </div>
                                            </div>

                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-course-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-course-style-list" style="padding-bottom: 45px ;">
                                                    <div class="gdlr-core-course-item-list"><a class="gdlr-core-course-item-link" href="#"><span class="gdlr-core-course-item-id gdlr-core-skin-caption" >LW</span><span class="gdlr-core-course-item-title gdlr-core-skin-title" >Corporate and Business Law</span></a></div>
                                                    <div class="gdlr-core-course-item-list"><a class="gdlr-core-course-item-link" href="#"><span class="gdlr-core-course-item-id gdlr-core-skin-caption" >PM</span><span class="gdlr-core-course-item-title gdlr-core-skin-title" >Performance Management</span></a></div>
                                                    <div class="gdlr-core-course-item-list"><a class="gdlr-core-course-item-link" href="#"><span class="gdlr-core-course-item-id gdlr-core-skin-caption" >TX</span><span class="gdlr-core-course-item-title gdlr-core-skin-title" >Taxation</span></a></div>
                                                    <div class="gdlr-core-course-item-list"><a class="gdlr-core-course-item-link" href="#"><span class="gdlr-core-course-item-id gdlr-core-skin-caption" >FR</span><span class="gdlr-core-course-item-title gdlr-core-skin-title" >Financial Reporting</span></a></div>
                                                    <div class="gdlr-core-course-item-list"><a class="gdlr-core-course-item-link" href="#"><span class="gdlr-core-course-item-id gdlr-core-skin-caption" >AA</span><span class="gdlr-core-course-item-title gdlr-core-skin-title" >Audit and Assurance</span></a></div>
                                                    <div class="gdlr-core-course-item-list"><a class="gdlr-core-course-item-link" href="#"><span class="gdlr-core-course-item-id gdlr-core-skin-caption" >FM</span><span class="gdlr-core-course-item-title gdlr-core-skin-title" >Financial Management</span></a></div>
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                    These assessed through computer-based exams. Students sitting exams for these levels will undertake computer-based exams taking place in March, June, September, and December at an ACCA venue. LW exam is available as on-demand CBE.
                                                    </div>
                                            </div>

                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 40px ;">
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 20px ;font-weight: 600 ;">ESSENTIALSE (Strategic Professional)</h3></div>
                                                </div>
                                            </div>

                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-course-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-course-style-list" style="padding-bottom: 45px ;">
                                                    <div class="gdlr-core-course-item-list"><a class="gdlr-core-course-item-link" href="#"><span class="gdlr-core-course-item-id gdlr-core-skin-caption" >SBL</span><span class="gdlr-core-course-item-title gdlr-core-skin-title" >Strategic Business Leader</span></a></div>
                                                    <div class="gdlr-core-course-item-list"><a class="gdlr-core-course-item-link" href="#"><span class="gdlr-core-course-item-id gdlr-core-skin-caption" >SBR</span><span class="gdlr-core-course-item-title gdlr-core-skin-title" >Strategic Business Reporting</span></a></div>


                                            </div>

                                            </div>


                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 40px ;">
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 20px ;font-weight: 600 ;">OPTIONS (Any Two)</h3></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-course-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-course-style-list">
                                                    <div class="gdlr-core-course-item-list"><a class="gdlr-core-course-item-link" href="#"><span class="gdlr-core-course-item-id gdlr-core-skin-caption" >AFM</span><span class="gdlr-core-course-item-title gdlr-core-skin-title" >Advanced Financial Management</span></a></div>
                                                    <div class="gdlr-core-course-item-list"><a class="gdlr-core-course-item-link" href="#"><span class="gdlr-core-course-item-id gdlr-core-skin-caption" >APM</span><span class="gdlr-core-course-item-title gdlr-core-skin-title" >Advanced Performance Management</span></a></div>
                                                    <div class="gdlr-core-course-item-list"><a class="gdlr-core-course-item-link" href="#course/advanced-cost-accounting-and-management/index.html"><span class="gdlr-core-course-item-id gdlr-core-skin-caption" >ATX</span><span class="gdlr-core-course-item-title gdlr-core-skin-title" >Advanced Taxation</span></a></div>
                                                    <div class="gdlr-core-course-item-list"><a class="gdlr-core-course-item-link" href="#course/auditing/index.html"><span class="gdlr-core-course-item-id gdlr-core-skin-caption" >AAA</span><span class="gdlr-core-course-item-title gdlr-core-skin-title" >Advanced Audit and Assurance</span></a></div>

                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                    Essential and Option modules. These assessed through paper-based exams. Students sitting exams for these levels will undertake written exams taking place in March, June, September, and December at an ACCA venue.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                </div>
                            </div>
                            <div class="gdlr-core-pbf-sidebar-right gdlr-core-column-extend-right  kingster-sidebar-area gdlr-core-column-20 gdlr-core-pbf-sidebar-padding  gdlr-core-line-height" style="padding: 35px 0px 30px 0px;">

                        @include('public/layouts/sidebar')
                            </div>
                        </div>
                    </div>

                    @include('public/layouts/socialFooter')

                    @include('public/layouts/partnersFooter')



                </div>
            </div>






            <footer>

            @include('public/layouts/footer') ;

            </footer>
        </div>
    </div>

@endsection
