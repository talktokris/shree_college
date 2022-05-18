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

            
            <div class="kingster-page-wrapper" id="kingster-page-wrapper">
                <div class="gdlr-core-page-builder-body">
               

                    <div class="kingster-breadcrumbs bd_nav">
                        <div class="kingster-breadcrumbs-container kingster-container">
                            <div class="kingster-breadcrumbs-item kingster-item-pdlr"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Kingster." href="index.php" class="home"><span property="name">Home</span></a>
                                <meta property="position" content="1">
                                </span>&gt;<span property="itemListElement" typeof="ListItem"><span property="name">Online Inquiry</span>
                                <meta property="position" content="2">
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="gdlr-core-pbf-wrapper " id="div_1dd7_105">
                        <div class="gdlr-core-pbf-background-wrap">
                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" id="div_1dd7_106" data-parallax-speed="0"></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js "></div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-30">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_34">Online Inquiry</h3></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-course-search-item gdlr-core-item-pdb gdlr-core-item-pdlr">
                                                    <form class="gdlr-core-course-form clearfix" action="#" method="GET">
                                                        <div class=" gdlr-core-course-column gdlr-core-column-45 gdlr-core-column-first">
                                                            <div class="gdlr-core-course-search-field gdlr-core-course-field-keywords">
                                                                <input type="text" placeholder="Name" name="course-keywords" value="" />
                                                            </div>
                                                        </div>
                                                        <div class=" gdlr-core-course-column gdlr-core-column-45">
                                                            <div class="gdlr-core-course-search-field gdlr-core-course-field-course-id">
                                                                <input type="text" placeholder="Email" name="course-id" value="" />
                                                            </div>
                                                        </div>

                                                        <div class=" gdlr-core-course-column gdlr-core-column-45">
                                                            <div class="gdlr-core-course-search-field gdlr-core-course-field-course-id">
                                                                <input type="text" placeholder="Phone" name="course-id" value="" />
                                                            </div>
                                                        </div>
                                                        <div class=" gdlr-core-course-column gdlr-core-column-45 gdlr-core-column-first">
                                                            <div class="gdlr-core-course-search-field gdlr-core-course-field-department">
                                                                
                                                                <div class="gdlr-core-course-form-combobox gdlr-core-skin-e-background">
                                                              
                                                                    <select class="gdlr-core-skin-e-content" name="department">
                                                                        <option value="">Nationality</option>
                                                                        <option value="">Nepal</option>
                                                                        <option value="business-adminstration">India</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class=" gdlr-core-course-column gdlr-core-column-45 gdlr-core-column-first">
                                                            <div class="gdlr-core-course-search-field gdlr-core-course-field-department">
                                                                
                                                                <div class="gdlr-core-course-form-combobox gdlr-core-skin-e-background">
                                                              
                                                                    <select class="gdlr-core-skin-e-content" name="department">
                                                                        <option value="">Course</option>
                                                                        <option value="CIMA">CIMA</option>
                                                                        <option value="ACCA">ACCA </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" gdlr-core-course-column gdlr-core-column-45 gdlr-core-column-first">
                                                            <div class="gdlr-core-course-search-field gdlr-core-course-field-keywords">
                                                               
                                                                <textarea type="textarea"  placeholder="Message" class="text-area" name="course-keywords" rows="3" style="background-color: #3b4b6b ; color: #b1c0e0 !important;"></textarea>
                                                            </div>
                                                        </div>
                                               
                                                        <div class="gdlr-core-course-form-submit gdlr-core-course-column gdlr-core-column-45 gdlr-core-column-first gdlr-core-center-align">
                                                            <input class="gdlr-core-full-size" type="submit" value="Send Message" />
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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