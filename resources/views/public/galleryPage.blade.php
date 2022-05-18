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
                              </span>&gt;<span property="itemListElement" typeof="ListItem"><span property="name">Gallery</span>
                              <meta property="position" content="2">
                              </span>
                          </div>
                      </div>
                  </div>
              </div>
          <div class="kingster-page-wrapper" id="kingster-page-wrapper">
              <div class="gdlr-core-page-builder-body">
                  <div class="gdlr-core-pbf-wrapper ">
                      <div class="gdlr-core-pbf-background-wrap" style="background-color: #f5f5f5 ;"></div>
                      <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                          <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                              <div class="gdlr-core-pbf-element">
                                  <div class="gdlr-core-portfolio-item gdlr-core-item-pdb clearfix  gdlr-core-portfolio-item-style-grid" style="padding-bottom: 10px ;">

                                      <div class="filter light-filter clearfix gdlr-core-filterer-wrap gdlr-core-js  gdlr-core-item-pdlr gdlr-core-style-text gdlr-core-center-align">
                                          <ul>
                                              <li><a href="#" class="active" data-filter="*">All</a></li>
                                              <li><a href="#" data-filter=".class1" >Blood Donation</a></li>
                                              <li><a href="#" data-filter=".class2" >Orientation 2079</a></li>
                                              <li><a href="#" data-filter=".class3" >Orientation 2078</a></li>
                                          </ul>
                                      </div>

                                      <div class="gdlr-core-portfolio-item-holder gdlr-core-js-2 filter-container clearfix" data-layout="fitrows">

                                          <div class="gdlr-core-item-list class1 gdlr-core-item-pdlr gdlr-core-column-20 ">
                                              <div class="gdlr-core-portfolio-grid  gdlr-core-left-align gdlr-core-style-with-frame gdlr-core-js" data-sync-height="portfolio-item-1">
                                                  <div class="gdlr-core-portfolio-grid-frame gdlr-core-skin-e-background" style="opacity: 1 ;"></div>
                                                  <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image  gdlr-core-style-title-icon">
                                                      <div class="gdlr-core-portfolio-thumbnail-image-wrap  gdlr-core-zoom-on-hover"><img src="{{ asset('assets/upload/shutterstock_53600224-400x257.jpg') }}" width="700" height="450"  alt="" /><span class="gdlr-core-image-overlay  gdlr-core-portfolio-overlay gdlr-core-image-overlay-center-icon gdlr-core-js"><span class="gdlr-core-image-overlay-content" ><span class="gdlr-core-portfolio-title gdlr-core-title-font " style="font-size: 18px ;font-weight: 400 ;letter-spacing: 1px ;text-transform: none ;"  ><a href="#" >Charity &#038; Voluntary For Social</a></span><span class="gdlr-core-portfolio-icon-wrap"><a class="gdlr-core-lightgallery gdlr-core-js "  href="{{ asset('assets/upload/shutterstock_53600224.jpg') }}" data-lightbox-group="gdlr-core-img-group-1"><i class="gdlr-core-portfolio-icon arrow_expand" ></i></a></span></span>
                                                          </span>
                                                      </div>
                                                  </div>
                                                  <div class="gdlr-core-portfolio-content-wrap gdlr-core-skin-divider">
                                                      <h3 class="gdlr-core-portfolio-title gdlr-core-skin-title" style="font-size: 21px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;"><a href="#" >Charity &#038; Voluntary For Social</a></h3><span class="gdlr-core-portfolio-info gdlr-core-portfolio-info-tag gdlr-core-info-font gdlr-core-skin-caption"><a href="#" rel="tag">Charity</a> <span class="gdlr-core-sep">/</span> <a href="#" rel="tag">Social</a></span>
                                                  </div>
                                              </div>
                                          </div>

                                          <div class="gdlr-core-item-list class2 gdlr-core-item-pdlr gdlr-core-column-20">
                                              <div class="gdlr-core-portfolio-grid  gdlr-core-left-align gdlr-core-style-with-frame gdlr-core-js" data-sync-height="portfolio-item-1">
                                                  <div class="gdlr-core-portfolio-grid-frame gdlr-core-skin-e-background" style="opacity: 1 ;"></div>
                                                  <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image  gdlr-core-style-title-icon">
                                                      <div class="gdlr-core-portfolio-thumbnail-image-wrap  gdlr-core-zoom-on-hover"><img src="{{ asset('assets/upload/rawpixel-577480-unsplash-1-400x257.jpg') }}" width="700" height="450"  alt="" /><span class="gdlr-core-image-overlay  gdlr-core-portfolio-overlay gdlr-core-image-overlay-center-icon gdlr-core-js"><span class="gdlr-core-image-overlay-content" ><span class="gdlr-core-portfolio-title gdlr-core-title-font " style="font-size: 18px ;font-weight: 400 ;letter-spacing: 1px ;text-transform: none ;"  ><a href="#" >Medical Breakthrough</a></span><span class="gdlr-core-portfolio-icon-wrap"><a class="gdlr-core-lightgallery gdlr-core-js "  href="{{ asset('assets/upload/rawpixel-577480-unsplash-1.jpg') }}" data-lightbox-group="gdlr-core-img-group-1"><i class="gdlr-core-portfolio-icon arrow_expand" ></i></a></span></span>
                                                          </span>
                                                      </div>
                                                  </div>
                                                  <div class="gdlr-core-portfolio-content-wrap gdlr-core-skin-divider">
                                                      <h3 class="gdlr-core-portfolio-title gdlr-core-skin-title" style="font-size: 21px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;"><a href="#" >Medical Breakthrough</a></h3><span class="gdlr-core-portfolio-info gdlr-core-portfolio-info-tag gdlr-core-info-font gdlr-core-skin-caption"><a href="#" rel="tag">Medical</a></span></div>
                                              </div>
                                          </div>

                                          <div class="gdlr-core-item-list class3 gdlr-core-item-pdlr gdlr-core-column-20 ">
                                              <div class="gdlr-core-portfolio-grid  gdlr-core-left-align gdlr-core-style-with-frame gdlr-core-js" data-sync-height="portfolio-item-1">
                                                  <div class="gdlr-core-portfolio-grid-frame gdlr-core-skin-e-background" style="opacity: 1 ;"></div>
                                                  <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image  gdlr-core-style-title-icon">
                                                      <div class="gdlr-core-portfolio-thumbnail-image-wrap  gdlr-core-zoom-on-hover"><img src="{{ asset('assets/upload/pexels-photo-400x257.jpg') }}" width="700" height="450" alt="" /><span class="gdlr-core-image-overlay  gdlr-core-portfolio-overlay gdlr-core-image-overlay-center-icon gdlr-core-js"><span class="gdlr-core-image-overlay-content" ><span class="gdlr-core-portfolio-title gdlr-core-title-font " style="font-size: 18px ;font-weight: 400 ;letter-spacing: 1px ;text-transform: none ;"  ><a href="#" >Family Law Advisory</a></span><span class="gdlr-core-portfolio-icon-wrap"><a class="gdlr-core-lightgallery gdlr-core-js "  href="{{ asset('assets/upload/pexels-photo.jpg') }}" data-lightbox-group="gdlr-core-img-group-1"><i class="gdlr-core-portfolio-icon arrow_expand" ></i></a></span></span>
                                                          </span>
                                                      </div>
                                                  </div>
                                                  <div class="gdlr-core-portfolio-content-wrap gdlr-core-skin-divider">
                                                      <h3 class="gdlr-core-portfolio-title gdlr-core-skin-title" style="font-size: 21px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;"><a href="#" >Family Law Advisory</a></h3><span class="gdlr-core-portfolio-info gdlr-core-portfolio-info-tag gdlr-core-info-font gdlr-core-skin-caption"><a href="#" rel="tag">Family</a> <span class="gdlr-core-sep">/</span> <a href="#" rel="tag">Law</a></span>
                                                  </div>
                                              </div>
                                          </div>

                                          <div class="gdlr-core-item-list class1 gdlr-core-item-pdlr gdlr-core-column-20">
                                              <div class="gdlr-core-portfolio-grid  gdlr-core-left-align gdlr-core-style-with-frame gdlr-core-js" data-sync-height="portfolio-item-1">
                                                  <div class="gdlr-core-portfolio-grid-frame gdlr-core-skin-e-background" style="opacity: 1 ;"></div>
                                                  <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image  gdlr-core-style-title-icon">
                                                      <div class="gdlr-core-portfolio-thumbnail-image-wrap  gdlr-core-zoom-on-hover"><img src="{{ asset('assets/upload/training-train-lime-barbell-39688-400x257.jpg') }}" width="700" height="450"  alt="" /><span class="gdlr-core-image-overlay  gdlr-core-portfolio-overlay gdlr-core-image-overlay-center-icon gdlr-core-js"><span class="gdlr-core-image-overlay-content" ><span class="gdlr-core-portfolio-title gdlr-core-title-font " style="font-size: 18px ;font-weight: 400 ;letter-spacing: 1px ;text-transform: none ;"  ><a href="#" >Free Training For Senior</a></span><span class="gdlr-core-portfolio-icon-wrap"><a class="gdlr-core-lightgallery gdlr-core-js "  href="{{ asset('assets/upload/training-train-lime-barbell-39688.jpg') }}" data-lightbox-group="gdlr-core-img-group-1"><i class="gdlr-core-portfolio-icon arrow_expand" ></i></a></span></span>
                                                          </span>
                                                      </div>
                                                  </div>
                                                  <div class="gdlr-core-portfolio-content-wrap gdlr-core-skin-divider">
                                                      <h3 class="gdlr-core-portfolio-title gdlr-core-skin-title" style="font-size: 21px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;"><a href="#" >Free Training For Senior</a></h3><span class="gdlr-core-portfolio-info gdlr-core-portfolio-info-tag gdlr-core-info-font gdlr-core-skin-caption"><a href="#" rel="tag">Sport</a></span></div>
                                              </div>
                                          </div>

                                          <div class="gdlr-core-item-list class2 gdlr-core-item-pdlr gdlr-core-column-20 ">
                                              <div class="gdlr-core-portfolio-grid  gdlr-core-left-align gdlr-core-style-with-frame gdlr-core-js" data-sync-height="portfolio-item-1">
                                                  <div class="gdlr-core-portfolio-grid-frame gdlr-core-skin-e-background" style="opacity: 1 ;"></div>
                                                  <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image  gdlr-core-style-title-icon">
                                                      <div class="gdlr-core-portfolio-thumbnail-image-wrap  gdlr-core-zoom-on-hover"><img src="{{ asset('assets/upload/joshua-fuller-368384-unsplash-400x257.jpg') }}" width="700" height="450"  alt="" /><span class="gdlr-core-image-overlay  gdlr-core-portfolio-overlay gdlr-core-image-overlay-center-icon gdlr-core-js"><span class="gdlr-core-image-overlay-content" ><span class="gdlr-core-portfolio-title gdlr-core-title-font " style="font-size: 18px ;font-weight: 400 ;letter-spacing: 1px ;text-transform: none ;"  ><a href="#" >Stage Play From Students</a></span><span class="gdlr-core-portfolio-icon-wrap"><a class="gdlr-core-lightgallery gdlr-core-js "  href="{{ asset('assets/upload/joshua-fuller-368384-unsplash.jpg') }}" data-lightbox-group="gdlr-core-img-group-1"><i class="gdlr-core-portfolio-icon arrow_expand" ></i></a></span></span>
                                                          </span>
                                                      </div>
                                                  </div>
                                                  <div class="gdlr-core-portfolio-content-wrap gdlr-core-skin-divider">
                                                      <h3 class="gdlr-core-portfolio-title gdlr-core-skin-title" style="font-size: 21px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;"><a href="#" >Stage Play From Students</a></h3><span class="gdlr-core-portfolio-info gdlr-core-portfolio-info-tag gdlr-core-info-font gdlr-core-skin-caption"><a href="#" rel="tag">Acting</a> <span class="gdlr-core-sep">/</span> <a href="#" rel="tag">Drama</a></span>
                                                  </div>
                                              </div>
                                          </div>

                                          <div class="gdlr-core-item-list class3 gdlr-core-item-pdlr gdlr-core-column-20">
                                              <div class="gdlr-core-portfolio-grid  gdlr-core-left-align gdlr-core-style-with-frame gdlr-core-js" data-sync-height="portfolio-item-1">
                                                  <div class="gdlr-core-portfolio-grid-frame gdlr-core-skin-e-background" style="opacity: 1 ;"></div>
                                                  <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image  gdlr-core-style-title-icon">
                                                      <div class="gdlr-core-portfolio-thumbnail-image-wrap  gdlr-core-zoom-on-hover"><img src="{{ asset('assets/upload/austin-neill-247047-unsplash-400x257.jpg') }}" width="700" height="450" alt="" /><span class="gdlr-core-image-overlay  gdlr-core-portfolio-overlay gdlr-core-image-overlay-center-icon gdlr-core-js"><span class="gdlr-core-image-overlay-content" ><span class="gdlr-core-portfolio-title gdlr-core-title-font " style="font-size: 18px ;font-weight: 400 ;letter-spacing: 1px ;text-transform: none ;"  ><a href="#" >Concert For Charity</a></span><span class="gdlr-core-portfolio-icon-wrap"><a class="gdlr-core-lightgallery gdlr-core-js "  href="{{ asset('assets/upload/austin-neill-247047-unsplash.jpg') }}" data-lightbox-group="gdlr-core-img-group-1"><i class="gdlr-core-portfolio-icon arrow_expand" ></i></a></span></span>
                                                          </span>
                                                      </div>
                                                  </div>
                                                  <div class="gdlr-core-portfolio-content-wrap gdlr-core-skin-divider">
                                                      <h3 class="gdlr-core-portfolio-title gdlr-core-skin-title" style="font-size: 21px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;"><a href="#" >Concert For Charity</a></h3><span class="gdlr-core-portfolio-info gdlr-core-portfolio-info-tag gdlr-core-info-font gdlr-core-skin-caption"><a href="#" rel="tag">Concert</a> <span class="gdlr-core-sep">/</span> <a href="#" rel="tag">Music</a></span>
                                                  </div>
                                              </div>
                                          </div>

                                          <div class="gdlr-core-item-list class1 gdlr-core-item-pdlr gdlr-core-column-20 ">
                                              <div class="gdlr-core-portfolio-grid  gdlr-core-left-align gdlr-core-style-with-frame gdlr-core-js" data-sync-height="portfolio-item-1">
                                                  <div class="gdlr-core-portfolio-grid-frame gdlr-core-skin-e-background" style="opacity: 1 ;"></div>
                                                  <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image  gdlr-core-style-title-icon">
                                                      <div class="gdlr-core-portfolio-thumbnail-image-wrap  gdlr-core-zoom-on-hover"><img src="{{ asset('assets/upload/shutterstock_218235004-400x257.jpg') }}" width="700" height="450"  alt="" /><span class="gdlr-core-image-overlay  gdlr-core-portfolio-overlay gdlr-core-image-overlay-center-icon gdlr-core-js"><span class="gdlr-core-image-overlay-content" ><span class="gdlr-core-portfolio-title gdlr-core-title-font " style="font-size: 18px ;font-weight: 400 ;letter-spacing: 1px ;text-transform: none ;"  ><a href="#" >Free Tuition From Prof. Smith</a></span><span class="gdlr-core-portfolio-icon-wrap"><a class="gdlr-core-lightgallery gdlr-core-js "  href="{{ asset('assets/upload/shutterstock_218235004.jpg') }}" data-sub-html="Studying" data-lightbox-group="gdlr-core-img-group-1"><i class="gdlr-core-portfolio-icon arrow_expand" ></i></a></span></span>
                                                          </span>
                                                      </div>
                                                  </div>
                                                  <div class="gdlr-core-portfolio-content-wrap gdlr-core-skin-divider">
                                                      <h3 class="gdlr-core-portfolio-title gdlr-core-skin-title" style="font-size: 21px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;"><a href="#" >Free Tuition From Prof. Smith</a></h3><span class="gdlr-core-portfolio-info gdlr-core-portfolio-info-tag gdlr-core-info-font gdlr-core-skin-caption"><a href="#" rel="tag">Study</a> <span class="gdlr-core-sep">/</span> <a href="#" rel="tag">Tuition</a></span>
                                                  </div>
                                              </div>
                                          </div>

                                          <div class="gdlr-core-item-list class2 gdlr-core-item-pdlr gdlr-core-column-20">
                                              <div class="gdlr-core-portfolio-grid  gdlr-core-left-align gdlr-core-style-with-frame gdlr-core-js" data-sync-height="portfolio-item-1">
                                                  <div class="gdlr-core-portfolio-grid-frame gdlr-core-skin-e-background" style="opacity: 1 ;"></div>
                                                  <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image  gdlr-core-style-title-icon">
                                                      <div class="gdlr-core-portfolio-thumbnail-image-wrap  gdlr-core-zoom-on-hover"><img src="{{ asset('assets/upload/shutterstock_361397258-400x257.jpg') }}" width="700" height="450" alt="" /><span class="gdlr-core-image-overlay  gdlr-core-portfolio-overlay gdlr-core-image-overlay-center-icon gdlr-core-js"><span class="gdlr-core-image-overlay-content" ><span class="gdlr-core-portfolio-title gdlr-core-title-font " style="font-size: 18px ;font-weight: 400 ;letter-spacing: 1px ;text-transform: none ;"  ><a href="#" >Business Showcase Session</a></span><span class="gdlr-core-portfolio-icon-wrap"><a class="gdlr-core-lightgallery gdlr-core-js "  href="{{ asset('assets/upload/shutterstock_361397258.jpg') }}" data-lightbox-group="gdlr-core-img-group-1"><i class="gdlr-core-portfolio-icon arrow_expand" ></i></a></span></span>
                                                          </span>
                                                      </div>
                                                  </div>
                                                  <div class="gdlr-core-portfolio-content-wrap gdlr-core-skin-divider">
                                                      <h3 class="gdlr-core-portfolio-title gdlr-core-skin-title" style="font-size: 21px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;"><a href="#" >Business Showcase Session</a></h3><span class="gdlr-core-portfolio-info gdlr-core-portfolio-info-tag gdlr-core-info-font gdlr-core-skin-caption"><a href="#" rel="tag">Business</a></span></div>
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