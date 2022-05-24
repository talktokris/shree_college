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
                                </span>&gt;<span property="itemListElement" typeof="ListItem"><span property="name">Contact Information</span>
                                <meta property="position" content="2">
                                </span>
                            </div>
                        </div>
                    </div>

                    @foreach ($contactHq as $item)



                    <div class="gdlr-core-pbf-wrapper " style="padding: 50px 0px 40px 0px;" data-skin="White Text">
                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #261e38 ;"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 50px 20px 0px 20px;">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " data-gdlr-animation="fadeInUp" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 35px ;"><i class=" gdlr-core-icon-item-icon fa fa-phone" style="color: #ffffff ;font-size: 40px ;min-width: 40px ;min-height: 40px ;"></i></div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 25px ;">
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 26px ;letter-spacing: 0px ;text-transform: none ;">Phone</h3></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;">
                                                        <p>Need Help? Please feel free to call us.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;text-transform: none ;color: #3db166 ;">
                                                        <p><?php if($item->phone_one !=''){ ?><a href="tel:{{ $item->phone_one }}">{{ $item->phone_one }}</a><?php }?></p>
                                                        <p><?php if($item->phone_two !=''){ ?><a href="tel:{{ $item->phone_two }}">{{ $item->phone_two }}</a><?php }?></p>
                                                        <p><?php if($item->phone_three !=''){ ?><a href="tel:{{ $item->phone_three }}">{{ $item->phone_three }}</a><?php }?></p>
                                                        <p><?php if($item->phone_four !=''){ ?><a href="tel:{{ $item->phone_four }}">{{ $item->phone_four }}</a><?php }?></p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 50px 20px 0px 20px;">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " data-gdlr-animation="fadeInDown" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 35px ;"><i class=" gdlr-core-icon-item-icon fa fa-envelope-o" style="color: #ffffff ;font-size: 40px ;min-width: 40px ;min-height: 40px ;"></i></div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 25px ;">
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 26px ;letter-spacing: 0px ;text-transform: none ;">Email</h3></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;">
                                                        <p>We're here to assist in any way possible.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;">
                                                        <p><?php if($item->email_one !=''){ ?><a href="mailto:{{ $item->email_one }}">{{ $item->email_one }}</a><?php }?></p>
                                                        <p><?php if($item->email_two !=''){ ?><a href="mailto:{{ $item->email_two }}">{{ $item->email_two }}</a><?php }?></p>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 50px 20px 0px 20px;">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " data-gdlr-animation="fadeInUp" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 35px ;"><i class=" gdlr-core-icon-item-icon fa fa-location-arrow" style="color: #ffffff ;font-size: 40px ;min-width: 40px ;min-height: 40px ;"></i></div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 25px ;">
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 26px ;letter-spacing: 0px ;text-transform: none ;">Location</h3></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;">
                                                   <h6>{{ $item->organization_name}}</h6>
                                                   <p>
                                                    {{ $item->address}}

                                                            </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 0px 0px;">
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-wp-google-map-plugin-item gdlr-core-item-pdlr gdlr-core-item-pdb " style="padding-bottom: 0px ;">

                                        <div style="overflow:hidden;width: 100%;position: relative;">

                                           <?php echo  $item->google_map_link ?>

                                            <div style="position: absolute;width: 80%;bottom: 20px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;">

                                            </div>
                                            <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    @if ($contactData->count()>= 1)




                    <div class="gdlr-core-pbf-wrapper " style="padding: 50px 0px 40px 0px;" data-skin="White Text">
                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #261e38 ;"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">

                            @foreach ($contactData as $row)

                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 50px 20px 0px 20px;">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " data-gdlr-animation="fadeInUp" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 25px ;">
                                                        <div class="gdlr-core-title-item-title-wrap clearfix">
                                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 26px ;letter-spacing: 0px ;text-transform: none ;">{{ $row->organization_name }}</h3></div>
                                                    </div>
                                                </div>
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                                                        <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;">
                                                            <p> {{ $row->address}} </p>
                                                            <h6>Email</h6>

                                                            <p><?php if($row->email_one !=''){ ?><a href="mailto:{{ $row->email_one }}">{{ $row->email_one }}</a><?php }?> <?php if($row->email_two !=''){ ?> , <a href="mailto:{{ $row->email_two }}">{{ $row->email_two }}</a><?php }?></p>
                                                            <p></p>

                                                            <h6>Phone</h6>
                                                            <p><?php if($row->phone_one !=''){ ?><a href="tel:{{ $row->phone_one }}">{{ $row->phone_one }}</a><?php }?> <?php if($row->phone_two !=''){ ?> , <a href="tel:{{ $row->phone_two }}">{{ $row->phone_two }}</a><?php }?></p>
                                                            <p><?php if($row->phone_three !=''){ ?><a href="tel:{{ $row->phone_three }}">{{ $row->phone_three }}</a><?php }?><?php if($row->phone_four !=''){ ?>, <a href="tel:{{ $row->phone_four }}">{{ $row->phone_four }}</a><?php }?></p>

                                                        </div>
                                                    </div>
                                                </div>



                                        </div>
                                    </div>
                                </div>

                                @endforeach


                            </div>
                        </div>
                    </div>



                    @endif

                    @endforeach

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
