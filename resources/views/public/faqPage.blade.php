@extends('public.layouts.master')
@section('title','Home')
@section('contents')

<div class="kingster-body-outer-wrapper">
      <div class="kingster-body-wrapper clearfix kingster-with-frame">
        <div class="kingster-top-bar">

        @include('public/layouts/headerTop') ;

        </div>
        <header class="kingster-header-wrap kingster-header-style-plain kingster-style-menu-right kingster-sticky-navigation kingster-style-fixed" data-navigation-offset="75px" >

        @include('public/layouts/header') ;

        </header>

        <div class="kingster-page-title-wrap kingster-style-medium kingster-left-align" >
          <div class="kingster-header-transparent-substitute"></div>
          <div class="kingster-page-title-overlay"></div>

          <div class="kingster-breadcrumbs bd_nav">
            <div class="kingster-breadcrumbs-container kingster-container">
              <div class="kingster-breadcrumbs-item kingster-item-pdlr">
                <span property="itemListElement" typeof="ListItem">
                  <a property="item"  typeof="WebPage" title="Go to Kingster." href="index.php" class="home" ><span property="name">Home</span></a>
                  <meta property="position" content="1" /> </span> &gt;<span property="itemListElement" typeof="ListItem" >
                    <span property="name">Faqs</span>
                  <meta property="position" content="2" />
                </span>
              </div>
            </div>
          </div>
        </div>

        <div class="kingster-page-wrapper" id="kingster-page-wrapper">
          <div class="kingster-content-container kingster-container">
            <div
              class="kingster-sidebar-wrap clearfix kingster-line-height-0 kingster-sidebar-style-right"
            >
              <div
                class="kingster-sidebar-center kingster-column-40 kingster-line-height"
              >
                <div
                  class="gdlr-core-pbf-wrapper"
                  style="padding: 90px 0px 50px 0px"
                >
                  <div class="gdlr-core-pbf-background-wrap"></div>
                  <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                    <div
                      class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container"
                    >
                      <div class="gdlr-core-pbf-column gdlr-core-column-first">
                        <div
                          class="gdlr-core-pbf-column-content-margin gdlr-core-js"
                          style="padding: 0px 10px 0px 0px"
                        >
                          <div
                            class="gdlr-core-pbf-column-content clearfix gdlr-core-js"
                          >
                            <div class="gdlr-core-pbf-element">
                              <div
                                class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"
                                style="padding-bottom: 35px"
                              >
                                <div
                                  class="gdlr-core-title-item-title-wrap clearfix"
                                >
                                  <h3
                                    class="gdlr-core-title-item-title gdlr-core-skin-title"
                                    style="
                                      font-size: 24px;
                                      font-weight: 600;
                                      letter-spacing: 0px;
                                      text-transform: none;
                                      color: #1a1a1a;
                                    "
                                  >
                                    Frequently Asked Questions
                                  </h3>
                                </div>
                              </div>
                            </div>
                            <div class="gdlr-core-pbf-element">
                              <div
                                class="gdlr-core-accordion-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-accordion-style-background-title-icon gdlr-core-left-align gdlr-core-icon-pos-right"
                              >
                                <div
                                  class="gdlr-core-accordion-item-tab clearfix gdlr-core-active"
                                >
                                  <div
                                    class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon"
                                  ></div>
                                  <div
                                    class="gdlr-core-accordion-item-content-wrapper"
                                  >
                                    <h4
                                      class="gdlr-core-accordion-item-title gdlr-core-js gdlr-core-skin-e-background gdlr-core-skin-e-content"
                                    >
                                      Why Shree Collage ?
                                    </h4>
                                    <div
                                      class="gdlr-core-accordion-item-content"
                                    >
                                      <p>
                                          <ul>
                                        <li>The first registered tuition provider for CIMA in Nepal with remarkable pass Rate.
                                        </li>
                                        <li>Central location i.e. Minbhawan, New Baneshwor</li>
                                        <li>Free of Cost BBS from TU along with CIMA/ ACCA</li>
                                          </ul>


                                      </p>

                                    </div>
                                  </div>
                                </div>
                                <div
                                  class="gdlr-core-accordion-item-tab clearfix"
                                >
                                  <div
                                    class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon"
                                  ></div>
                                  <div
                                    class="gdlr-core-accordion-item-content-wrapper"
                                  >
                                    <h4
                                      class="gdlr-core-accordion-item-title gdlr-core-js gdlr-core-skin-e-background gdlr-core-skin-e-content"
                                    >
                                    Is Cost affordable at Shree College?
                                    </h4>
                                    <div
                                      class="gdlr-core-accordion-item-content"
                                    >
                                      <p>
                                        Yes, it is affordable and we also provide scholarships to deserving candidates.
                                      </p>

                                    </div>
                                  </div>
                                </div>
                                <div
                                  class="gdlr-core-accordion-item-tab clearfix"
                                >
                                  <div
                                    class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon"
                                  ></div>
                                  <div
                                    class="gdlr-core-accordion-item-content-wrapper"
                                  >
                                    <h4
                                      class="gdlr-core-accordion-item-title gdlr-core-js gdlr-core-skin-e-background gdlr-core-skin-e-content"
                                    >
                                    How is Management of Shree College?
                                    </h4>
                                    <div
                                      class="gdlr-core-accordion-item-content"
                                    >
                                      <p>
                                        We are in our fifth year of successful operation and all the management team is highly professionals to guide the candidate in building their career.
                                      </p>

                                    </div>
                                  </div>
                                </div>
                                <div  class="gdlr-core-accordion-item-tab clearfix" >
                                  <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon"></div>
                                  <div class="gdlr-core-accordion-item-content-wrapper"  >
                                    <h4 class="gdlr-core-accordion-item-title gdlr-core-js gdlr-core-skin-e-background gdlr-core-skin-e-content" >
                                    Is Shree college authorized to provide CIMA/ ACCA in Nepal?
                                    </h4>
                                    <div   class="gdlr-core-accordion-item-content"  >
                                      <p>
                                         Yes, Shree College is registered tuition provider for CIMA and silver learning partner for ACCA.
                                      </p>

                                    </div>
                                  </div>
                                </div>

                                <div class="gdlr-core-accordion-item-tab clearfix" >
                                  <div  class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon" ></div>
                                  <div  class="gdlr-core-accordion-item-content-wrapper" >
                                    <h4  class="gdlr-core-accordion-item-title gdlr-core-js gdlr-core-skin-e-background gdlr-core-skin-e-content" >
                                    Are the faculty well equipped and experienced in handling CIMA/ACCA students?
                                    </h4>
                                    <div  class="gdlr-core-accordion-item-content">
                                      <p>
                                        Yes, All our faculty (national & international) are well experienced and professionally qualified.
                                      </p>

                                    </div>
                                  </div>
                                </div>

                                <div class="gdlr-core-accordion-item-tab clearfix" >
                                    <div  class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon" ></div>
                                    <div  class="gdlr-core-accordion-item-content-wrapper" >
                                      <h4  class="gdlr-core-accordion-item-title gdlr-core-js gdlr-core-skin-e-background gdlr-core-skin-e-content" >
                                        Is there any credit transfer facility if students wish to go abroad.?
                                      </h4>
                                      <div  class="gdlr-core-accordion-item-content">
                                        <p>
                                           Yes, we have list of colleges like UCLAN (University of Central Lancashire), UK for our students to continue their further studies from any level of CIMA/ACCA.
                                        </p>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="gdlr-core-accordion-item-tab clearfix" >
                                    <div  class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon" ></div>
                                    <div  class="gdlr-core-accordion-item-content-wrapper" >
                                      <h4  class="gdlr-core-accordion-item-title gdlr-core-js gdlr-core-skin-e-background gdlr-core-skin-e-content" >
                                        What are the extra curriculum activities at Shree College.?
                                      </h4>
                                      <div  class="gdlr-core-accordion-item-content">
                                        <p>
                                            We have a full list of extra curriculum activities that not only energize students but also help students to work on their soft skills required by the employers.
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
                  </div>
                </div>
              </div>
              <div class="kingster-sidebar-right kingster-column-20 kingster-line-height kingster-line-height" >


                @include('public/layouts/sidebar')

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
