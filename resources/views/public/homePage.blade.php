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
                    <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 0px 0px;">
                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #192f59 ;"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-revolution-slider-item gdlr-core-item-pdlr gdlr-core-item-pdb " style="padding-bottom: 0px ;">

                                        <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                                            <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.8">
                                                <ul>
                                                    <li data-index="rs-3" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="{{ asset('assets/upload/slider-1-2-100x50.jpg') }}" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description=""> <img src="{{ asset('assets/upload/slider-1-2.jpg') }}" alt="" title="slider-1-2" width="1800" height="1119" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                                        <div class="tp-caption   tp-resizeme" id="slide-3-layer-1" data-x="38" data-y="center" data-voffset="-146" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 33px; line-height: 33px; font-weight: 300; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">Best college of  your choice</div>
                                                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-3-layer-4" data-x="33" data-y="center" data-voffset="-44" data-width="['600']" data-height="['118']" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":330,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6;background-color:rgba(24,36,59,0.9);border-radius:3px 3px 3px 3px;"></div>
                                                        <div class="tp-caption   tp-resizeme" id="slide-3-layer-2" data-x="55" data-y="center" data-voffset="-52" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":360,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap; font-size: 88px; line-height: 88px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Playfair Display;">Shree College</div>


                                                    </li>
                                                    <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="{{ asset('assets/upload/slider-2-100x50.jpg') }}" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description=""> <img src="{{ asset('assets/upload/slider-2.jpg') }}" alt="" title="slider-2" width="1800" height="1119" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                                        <div class="tp-caption   tp-resizeme" id="slide-1-layer-1" data-x="36" data-y="center" data-voffset="-120" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 33px; line-height: 33px; font-weight: 300; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">Shree college specialized on </div>
                                                        <div class="tp-caption   tp-resizeme" id="slide-1-layer-2" data-x="33" data-y="center" data-voffset="-31" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":370,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-size: 83px; line-height: 83px; font-weight: 600; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">ACCA &amp; CIMA</div>
                                                    </li>

                                                    <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="{{ asset('assets/upload/slider-3-100x50.jpg') }}" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description=""> <img src="{{ asset('assets/upload/slider-3.jpg') }}" alt="" title="slider-3" width="1800" height="1119" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                                        <div class="tp-caption   tp-resizeme" id="slide-2-layer-1" data-x="36" data-y="center" data-voffset="-120" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 33px; line-height: 33px; font-weight: 300; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">World's Largest </div>
                                                        <div class="tp-caption   tp-resizeme" id="slide-2-layer-2" data-x="33" data-y="center" data-voffset="-31" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":370,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-size: 83px; line-height: 83px; font-weight: 600; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">Professional Body</div>
                                                    </li>
                                                </ul>
                                                <div class="tp-bannertimer tp-bottom" ></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper  hp1-col-services"  data-skin="Blue Title" id="gdlr-core-wrapper-1">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                                <div class=" gdlr-core-pbf-wrapper-container-inner gdlr-core-item-mglr clearfix" id="div_1dd7_0">
                                    <div class="gdlr-core-pbf-column gdlr-core-column-15 gdlr-core-column-first">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_1">
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-with-caption gdlr-core-item-pdlr" id="div_1dd7_2">
                                                        <div class="gdlr-core-column-service-media gdlr-core-media-image"><img src="{{ asset('assets/upload/icon-3.png') }}" alt="" width="40" height="40" title="icon-1" /></div>
                                                        <div class="gdlr-core-column-service-content-wrapper">
                                                            <div class="gdlr-core-column-service-title-wrap">
                                                                <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" id="h3_1dd7_0">Globally Scope</h3>
                                                                <div class="gdlr-core-column-service-caption gdlr-core-info-font gdlr-core-skin-caption" id="div_1dd7_3">Study & Work Globally</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-15" id="gdlr-core-column-1">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_4">
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-with-caption gdlr-core-item-pdlr" id="div_1dd7_5">
                                                        <div class="gdlr-core-column-service-media gdlr-core-media-image"><img src="{{ asset('assets/upload/icon-4.png') }}" alt="" width="44" height="40" title="icon-2" /></div>
                                                        <div class="gdlr-core-column-service-content-wrapper">
                                                            <div class="gdlr-core-column-service-title-wrap">
                                                                <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" id="h3_1dd7_1">190+ Countries</h3>
                                                                <div class="gdlr-core-column-service-caption gdlr-core-info-font gdlr-core-skin-caption" id="div_1dd7_6">Across 190+ Countries Including Nepal</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-15" id="gdlr-core-column-2">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_7">
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-with-caption gdlr-core-item-pdlr" id="div_1dd7_8">
                                                        <div class="gdlr-core-column-service-media gdlr-core-media-image"><img src="{{ asset('assets/upload/icon-1.png') }}" alt="" width="44" height="39" title="icon-3" /></div>
                                                        <div class="gdlr-core-column-service-content-wrapper">
                                                            <div class="gdlr-core-column-service-title-wrap">
                                                                <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" id="h3_1dd7_2">Establishment</h3>
                                                                <div class="gdlr-core-column-service-caption gdlr-core-info-font gdlr-core-skin-caption" id="div_1dd7_9">100+ Years Establishment History</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-15" id="gdlr-core-column-3">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_10">
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-with-caption gdlr-core-item-pdlr" id="div_1dd7_11">
                                                        <div class="gdlr-core-column-service-media gdlr-core-media-image"><img src="{{ asset('assets/upload/icon-2.png') }}" alt="" width="41" height="41" title="icon-4" /></div>
                                                        <div class="gdlr-core-column-service-content-wrapper">
                                                            <div class="gdlr-core-column-service-title-wrap">
                                                                <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" id="h3_1dd7_3">Professionals</h3>
                                                                <div class="gdlr-core-column-service-caption gdlr-core-info-font gdlr-core-skin-caption" id="div_1dd7_12">Globally 696000 + Professionals</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper "  id="gdlr-core-wrapper-2">
                        <div class="gdlr-core-pbf-background-wrap">
                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" id="div_1dd7_13" data-parallax-speed="0.8"></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container-custom">
                                <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_14" data-sync-height="height-1">
                                        <div class="gdlr-core-pbf-background-wrap">
                                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" id="div_1dd7_15" data-parallax-speed="0"></div>
                                        </div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content"></div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-30" id="gdlr-core-column-4">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_16" data-sync-height="height-1">
                                        <div class="gdlr-core-pbf-background-wrap">
                                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" id="div_1dd7_17" data-parallax-speed="0.1"></div>
                                        </div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" id="div_1dd7_18">
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_4">Apply for Admission</h3></div>
                                                        <span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" id="span_1dd7_0">Fall 2023 applications are now open</span></div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" id="div_1dd7_19">
                                                    <div class="gdlr-core-text-box-item-content" id="div_1dd7_20">
                                                        <p>We don’t just give students an education and experiences that set them up for success in a career. We help them succeed in their career—to discover a field they’re passionate about and dare to lead it.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"><a class="gdlr-core-button  gdlr-core-button-solid gdlr-core-button-no-border" href="{{ url('/inquiry')}}" id="a_1dd7_0"><span class="gdlr-core-content" >Apply Now</span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper " id="div_1dd7_21">
                        <div class="gdlr-core-pbf-background-wrap">
                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" id="div_1dd7_22" data-parallax-speed="0.2"></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-left-align" id="div_1dd7_23">
                                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" id="div_1dd7_24"><img src="{{ asset('assets/upload/footer-logo.png') }}" alt="" style="width: 150px; height:auto;" title="logo-white" /></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" id="div_1dd7_25">
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_5">About </br>Shree Collage</h3></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-40">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" id="div_1dd7_26">
                                                    <div class="gdlr-core-text-box-item-content" id="div_1dd7_27">
                                                        <p>Shree College of management is a dynamic, innovative and quality oriented educational institution offering the students a world class education by providing learning experience designed to develop intellectual abilities as well as social and ethical values. Shree College is located inside the city with well connectivity from all the directions.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" id="div_1dd7_28">
                                                    <div class="gdlr-core-text-box-item-content" id="div_1dd7_29">
                                                        <p>Shree College is located inside the city with well connectivity from all the directions.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"><a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border" href="{{ url('/about-shree')}}" id="gdlr-core-button-id-66813"><span class="gdlr-core-content" >Read More</span><i class="gdlr-core-pos-right fa fa-long-arrow-right" id="i_1dd7_0"  ></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper " id="div_1dd7_30" data-skin="Column Service">
                        <div class="gdlr-core-pbf-background-wrap" id="div_1dd7_31"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-top gdlr-core-no-caption gdlr-core-item-pdlr" id="div_1dd7_32">
                                                    <div class="gdlr-core-column-service-media gdlr-core-media-image" id="div_1dd7_33"><img src="{{ asset('assets/upload/col-icon-1.png') }}" alt="" width="41" height="41" title="col-icon-1" /></div>
                                                    <div class="gdlr-core-column-service-content-wrapper">
                                                        <div class="gdlr-core-column-service-title-wrap">
                                                            <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" id="h3_1dd7_6">Eligibility</h3></div>
                                                        <div class="gdlr-core-column-service-content" id="div_1dd7_34">
                                                            <ul>
                                                              <li>No specific grading criteria</li>
                                                                <li>No stream barrier (Science, Management, Humanities, A Level)</li>
                                                                <li>Can join before exam result</li>
                                                                <li>No any formal entrance examination</li>
                                                            </ul>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-20" id="gdlr-core-column-5">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-top gdlr-core-no-caption gdlr-core-item-pdlr" id="div_1dd7_35">
                                                    <div class="gdlr-core-column-service-media gdlr-core-media-image" id="div_1dd7_36"><img src="{{ asset('assets/upload/col-icon-3.png') }}" alt="" width="43" height="45" title="col-icon-2" /></div>
                                                    <div class="gdlr-core-column-service-content-wrapper">
                                                        <div class="gdlr-core-column-service-title-wrap">
                                                            <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" id="h3_1dd7_7">Pass Rate</h3></div>
                                                        <div class="gdlr-core-column-service-content" id="div_1dd7_37">

                                                            <ul>
                                                              <li>About 80% pass rate</li>
                                                                <li>16 papers in 4 years time</li>
                                                                <li>Examination format MCQs</li>
                                                                <li>Individual paper exam at a time</li>
                                                            </ul>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-20" id="gdlr-core-column-6">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-top gdlr-core-no-caption gdlr-core-item-pdlr" id="div_1dd7_38">
                                                    <div class="gdlr-core-column-service-media gdlr-core-media-image" id="div_1dd7_39"><img src="{{ asset('assets/upload/col-icon-2.png') }}" alt="" width="40" height="43" title="col-icon-3" /></div>
                                                    <div class="gdlr-core-column-service-content-wrapper">
                                                        <div class="gdlr-core-column-service-title-wrap">
                                                            <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" id="h3_1dd7_8">Employability</h3></div>
                                                        <div class="gdlr-core-column-service-content" id="div_1dd7_40">
                                                        <ul>
                                                              <li>Can work in any sector nationally and internationally</li>
                                                                <li>Can compete with vacancies i.e CA, ACCA, MBA, CIMA, CPA, CFA</li>
                                                                <li>Can work as a decision maker on top level of the organization</li>
                                                            </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>




                    <?php /*

                    <div class="gdlr-core-pbf-wrapper " id="div_1dd7_79">
                        <div class="gdlr-core-pbf-background-wrap" id="div_1dd7_80"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-tab-item gdlr-core-js gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-tab-style1-horizontal gdlr-core-item-pdlr">

                                        <div class="gdlr-core-tab-item-content-image-wrap clearfix">
                                            <div class="gdlr-core-tab-item-image  gdlr-core-active" data-tab-id="1">
                                                <a class="gdlr-core-lightgallery gdlr-core-js " href="https://www.youtube.com/watch?v=C5pKtnmHTxg">
                                                    <span class="gdlr-core-tab-item-image-background" id="span_1dd7_1"  ></span>
                                                    <i class="fa fa-play" ></i>
                                                </a>
                                            </div>
                                            <div class="gdlr-core-tab-item-image " data-tab-id="2">
                                                <a class="gdlr-core-lightgallery gdlr-core-js " href="https://www.youtube.com/watch?v=C5pKtnmHTxg">
                                                    <span class="gdlr-core-tab-item-image-background" id="span_1dd7_2"  ></span>
                                                    <i class="fa fa-play" ></i>
                                                </a>
                                            </div>
                                            <div class="gdlr-core-tab-item-image " data-tab-id="3">
                                                <a class="gdlr-core-lightgallery gdlr-core-js " href="https://www.youtube.com/watch?v=C5pKtnmHTxg">
                                                    <span class="gdlr-core-tab-item-image-background" id="span_1dd7_3"  ></span>
                                                    <i class="fa fa-play" ></i>
                                                </a>
                                            </div>
                                            <div class="gdlr-core-tab-item-image " data-tab-id="4">
                                                <a class="gdlr-core-lightgallery gdlr-core-js " href="https://www.youtube.com/watch?v=C5pKtnmHTxg">
                                                    <span class="gdlr-core-tab-item-image-background" id="span_1dd7_4"  ></span>
                                                    <i class="fa fa-play" ></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="gdlr-core-tab-item-wrap">
                                            <div class="gdlr-core-tab-item-title-wrap clearfix gdlr-core-title-font">
                                                <div class="gdlr-core-tab-item-title  gdlr-core-active" data-tab-id="1">Benefits</div>
                                                <div class="gdlr-core-tab-item-title " data-tab-id="2">Self Development</div>
                                                <div class="gdlr-core-tab-item-title " data-tab-id="3">Spirituality</div>
                                                <div class="gdlr-core-tab-item-title " data-tab-id="4">Alumni</div>
                                            </div>
                                            <div class="gdlr-core-tab-item-content-wrap clearfix">
                                                <div class="gdlr-core-tab-item-content  gdlr-core-active" data-tab-id="1" >
                                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top">
                                                        <div class="gdlr-core-title-item-title-wrap ">
                                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_24">Why Choose Kingster?<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                                    </div>
                                                    <p>The Kingster University Alumni Association is excited to announce the arrival of KU Alumni Connect. This is a new community building platform for Kinster’s alumni. It is the only place online where you can find, and connect with, all 90,000 Kingster’s alumni. All alumni are automatically enrolled!</p>
                                                    <p>Kingster University was established by John Smith in 1920 for the public benefit and it is recognized globally. Throughout our great history, Kingster has offered access to a wide range of academic opportunities. As a world leader in higher education, the University has pioneered change in the sector.</p>
                                                </div>
                                                <div class="gdlr-core-tab-item-content " data-tab-id="2" >
                                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top">
                                                        <div class="gdlr-core-title-item-title-wrap ">
                                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_25">Self Development<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                                    </div>
                                                    <p>The Kingster University Alumni Association is excited to announce the arrival of KU Alumni Connect. This is a new community building platform for Kinster’s alumni. It is the only place online where you can find, and connect with, all 90,000 Kingster’s alumni. All alumni are automatically enrolled!</p>
                                                    <p>Kingster University was established by John Smith in 1920 for the public benefit and it is recognized globally. Throughout our great history, Kingster has offered access to a wide range of academic opportunities. As a world leader in higher education, the University has pioneered change in the sector.</p>
                                                </div>
                                                <div class="gdlr-core-tab-item-content " data-tab-id="3" >
                                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top">
                                                        <div class="gdlr-core-title-item-title-wrap ">
                                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_26">Spirituality<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                                    </div>
                                                    <p>The Kingster University Alumni Association is excited to announce the arrival of KU Alumni Connect. This is a new community building platform for Kinster’s alumni. It is the only place online where you can find, and connect with, all 90,000 Kingster’s alumni. All alumni are automatically enrolled!</p>
                                                    <p>Kingster University was established by John Smith in 1920 for the public benefit and it is recognized globally. Throughout our great history, Kingster has offered access to a wide range of academic opportunities. As a world leader in higher education, the University has pioneered change in the sector.</p>
                                                </div>
                                                <div class="gdlr-core-tab-item-content " data-tab-id="4" >
                                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top">
                                                        <div class="gdlr-core-title-item-title-wrap ">
                                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_27">Alumni<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                                    </div>
                                                    <p>The Kingster University Alumni Association is excited to announce the arrival of KU Alumni Connect. This is a new community building platform for Kinster’s alumni. It is the only place online where you can find, and connect with, all 90,000 Kingster’s alumni. All alumni are automatically enrolled!</p>
                                                    <p>Kingster University was established by John Smith in 1920 for the public benefit and it is recognized globally. Throughout our great history, Kingster has offered access to a wide range of academic opportunities. As a world leader in higher education, the University has pioneered change in the sector.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    */ ?>




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
