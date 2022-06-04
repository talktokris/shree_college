<div class="kingster-header-background"></div>
                <div class="kingster-header-container  kingster-container">
                    <div class="kingster-header-container-inner clearfix">
                        <div class="kingster-logo  kingster-item-pdlr">
                            <div class="kingster-logo-inner">
                                <a class="" href="{{ url('/') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="" /></a>
                            </div>
                        </div>
                        <div class="kingster-navigation kingster-item-pdlr clearfix ">
                            <div class="kingster-main-menu" id="kingster-main-menu">
                                <ul id="menu-main-navigation-1" class="sf-menu">

                                    <?php
                              $CurrentRoute = Route::currentRouteName();
                              // dd($CurrentRoute);

                              if($CurrentRoute=="landing"){   $homePageActive='current-menu-item'; }else {$homePageActive='';}
                              if(($CurrentRoute=="about-shree")||($CurrentRoute=="shree-team")||($CurrentRoute=="shree-certification")){   $aboutPageActive='current-menu-item'; }else {$aboutPageActive='';}
                              if(($CurrentRoute=="cima")||($CurrentRoute=="acca")){   $coursePageActive='current-menu-item'; }else {$coursePageActive='';}
                              if($CurrentRoute=="news-category"){   $newsPageActive='current-menu-item'; }else {$newsPageActive='';}
                              if($CurrentRoute=="gallery"){   $galleryPageActive='current-menu-item'; }else {$galleryPageActive='';}
                              if($CurrentRoute=="faq"){   $faqPageActive='current-menu-item'; }else {$faqPageActive='';}
                              if($CurrentRoute=="inquiry"){   $inquiryPageActive='current-menu-item'; }else {$inquiryPageActive='';}
                              if($CurrentRoute=="contact"){   $contactPageActive='current-menu-item'; }else {$contactPageActive='';}




                                    ?>
                                <li class="menu-item <?php echo $homePageActive;?>"><a href="{{ url('/') }}"  class="sf-with-ul-pre">Home</a></li>

                                    <li class="menu-item <?php echo $aboutPageActive;?> menu-item-has-children kingster-normal-menu"><a href="#" class="sf-with-ul-pre">Shree College</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item" data-size="60"><a href="{{ url('/about-shree') }}">About Shree College</a></li>

                                            <li class="menu-item" data-size="60"><a href="{{ url('/shree-team') }}">Our Experienced Team</a></li>
                                            <li class="menu-item" data-size="60"><a href="{{ url('/shree-certification') }}">Certification & Licenses</a></li>

                                        </ul>
                                    </li>



                                    <li class="menu-item <?php echo $coursePageActive;?> menu-item-has-children kingster-normal-menu"><a href="#" class="sf-with-ul-pre">Courses</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item" data-size="60"><a href="{{ url('/cima') }}"><img src="{{ asset('assets/images/menu-icon-cima.png') }}" class="menu-icon-img">CIMA - Chartered Institute Of Management Accountants</a></li>
                                            <li class="menu-item" data-size="60"><a href="{{ url('/acca') }}"><img src="{{ asset('assets/images/menu-icon-acca.png') }}" class="menu-icon-img">ACCA -The Association of Chartered Certified Accountants</a></li>


                                        </ul>
                                    </li>

                                    <li class="menu-item <?php echo $newsPageActive;?> menu-item-has-children kingster-normal-menu"><a href="#" class="sf-with-ul-pre">News</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item" data-size="60"><a href="{{ url('/news/general-notices') }}">General Notices</a></li>
                                            <li class="menu-item" data-size="60"><a href="{{ url('/news/examination-notices') }}">Examination Notices</a></li>
                                            <li class="menu-item" data-size="60"><a href="{{ url('/news/news-events') }}">News & Events</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item <?php echo $galleryPageActive;?> "><a href="{{ url('/gallery') }}"  class="sf-with-ul-pre">Gallery</a></li>
                                    <li class="menu-item <?php echo $faqPageActive;?> "><a href="{{ url('/faq') }}"  class="sf-with-ul-pre">FAQs</a></li>
                                    <li class="menu-item <?php echo $inquiryPageActive;?> "><a href="{{ url('/inquiry') }}"  class="sf-with-ul-pre">Inquiry</a></li>
                                    <li class="menu-item <?php echo $contactPageActive;?> "><a href="{{ url('/contact') }}"  class="sf-with-ul-pre">Contact</a></li>


                                </ul>
                                <div class="kingster-navigation-slide-bar" id="kingster-navigation-slide-bar"></div>
                            </div>
                            <?php /*
                            <div class="kingster-main-menu-right-wrap clearfix ">
                                <div class="kingster-main-menu-search" id="kingster-top-search"><i class="icon_search"></i></div>
                                <div class="kingster-top-search-wrap">
                                    <div class="kingster-top-search-close"></div>
                                    <div class="kingster-top-search-row">
                                        <div class="kingster-top-search-cell">
                                            <form role="search" method="get" class="search-form" action="#">
                                                <input type="text" class="search-field kingster-title-font" placeholder="Search..." value="" name="s">
                                                <div class="kingster-top-search-submit"><i class="fa fa-search"></i></div>
                                                <input type="submit" class="search-submit" value="Search">
                                                <div class="kingster-top-search-close"><i class="icon_close"></i></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            */?>
                        </div>
                    </div>
                </div>
