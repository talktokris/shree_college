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
                                        Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard
                                        dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type
                                        and scrambled it to make a type specimen
                                        book. It has survived not only five
                                        centuries, but also the leap into
                                        electronic typesetting, remaining
                                        essentially unchanged. It was
                                        popularised in the 1960s with the
                                        release of Letraset sheets containing
                                        Lorem Ipsum passages, and more recently
                                        with desktop publishing software like
                                        Aldus PageMaker including versions of
                                        Lorem Ipsum.Why do we use it?
                                      </p>
                                      <p>
                                        It is a long established fact that a
                                        reader will be distracted by the
                                        readable content of a page when looking
                                        at its layout. The point of using Lorem
                                        Ipsum is that it has a more-or-less
                                        normal distribution of letters, as
                                        opposed to using 'Content here, content
                                        here', making it look like readable
                                        English. Many desktop publishing
                                        packages and web page editors now use
                                        Lorem Ipsum as their default model text,
                                        and a search for 'lorem ipsum' will
                                        uncover many web sites still in their
                                        infancy. Various versions have evolved
                                        over the years, sometimes by accident,
                                        sometimes on purpose (injected humour
                                        and the like).
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
                                      Why ACCA at shree collage ?
                                    </h4>
                                    <div
                                      class="gdlr-core-accordion-item-content"
                                    >
                                      <p>
                                        Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard
                                        dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type
                                        and scrambled it to make a type specimen
                                        book. It has survived not only five
                                        centuries, but also the leap into
                                        electronic typesetting, remaining
                                        essentially unchanged. It was
                                        popularised in the 1960s with the
                                        release of Letraset sheets containing
                                        Lorem Ipsum passages, and more recently
                                        with desktop publishing software like
                                        Aldus PageMaker including versions of
                                        Lorem Ipsum.Why do we use it?
                                      </p>
                                      <p>
                                        It is a long established fact that a
                                        reader will be distracted by the
                                        readable content of a page when looking
                                        at its layout. The point of using Lorem
                                        Ipsum is that it has a more-or-less
                                        normal distribution of letters, as
                                        opposed to using 'Content here, content
                                        here', making it look like readable
                                        English. Many desktop publishing
                                        packages and web page editors now use
                                        Lorem Ipsum as their default model text,
                                        and a search for 'lorem ipsum' will
                                        uncover many web sites still in their
                                        infancy. Various versions have evolved
                                        over the years, sometimes by accident,
                                        sometimes on purpose (injected humour
                                        and the like).
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
                                      What ACCA eligibility to study ACCA?
                                    </h4>
                                    <div
                                      class="gdlr-core-accordion-item-content"
                                    >
                                      <p>
                                        Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard
                                        dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type
                                        and scrambled it to make a type specimen
                                        book. It has survived not only five
                                        centuries, but also the leap into
                                        electronic typesetting, remaining
                                        essentially unchanged. It was
                                        popularised in the 1960s with the
                                        release of Letraset sheets containing
                                        Lorem Ipsum passages, and more recently
                                        with desktop publishing software like
                                        Aldus PageMaker including versions of
                                        Lorem Ipsum.Why do we use it?
                                      </p>
                                      <p>
                                        It is a long established fact that a
                                        reader will be distracted by the
                                        readable content of a page when looking
                                        at its layout. The point of using Lorem
                                        Ipsum is that it has a more-or-less
                                        normal distribution of letters, as
                                        opposed to using 'Content here, content
                                        here', making it look like readable
                                        English. Many desktop publishing
                                        packages and web page editors now use
                                        Lorem Ipsum as their default model text,
                                        and a search for 'lorem ipsum' will
                                        uncover many web sites still in their
                                        infancy. Various versions have evolved
                                        over the years, sometimes by accident,
                                        sometimes on purpose (injected humour
                                        and the like).
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
                                      Why CIMA at shree collage ?
                                    </h4>
                                    <div
                                      class="gdlr-core-accordion-item-content"
                                    >
                                      <p>
                                        Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard
                                        dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type
                                        and scrambled it to make a type specimen
                                        book. It has survived not only five
                                        centuries, but also the leap into
                                        electronic typesetting, remaining
                                        essentially unchanged. It was
                                        popularised in the 1960s with the
                                        release of Letraset sheets containing
                                        Lorem Ipsum passages, and more recently
                                        with desktop publishing software like
                                        Aldus PageMaker including versions of
                                        Lorem Ipsum.Why do we use it?
                                      </p>
                                      <p>
                                        It is a long established fact that a
                                        reader will be distracted by the
                                        readable content of a page when looking
                                        at its layout. The point of using Lorem
                                        Ipsum is that it has a more-or-less
                                        normal distribution of letters, as
                                        opposed to using 'Content here, content
                                        here', making it look like readable
                                        English. Many desktop publishing
                                        packages and web page editors now use
                                        Lorem Ipsum as their default model text,
                                        and a search for 'lorem ipsum' will
                                        uncover many web sites still in their
                                        infancy. Various versions have evolved
                                        over the years, sometimes by accident,
                                        sometimes on purpose (injected humour
                                        and the like).
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
                                      What are eligibility to study CIMA ?
                                    </h4>
                                    <div
                                      class="gdlr-core-accordion-item-content"
                                    >
                                      <p>
                                        Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard
                                        dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type
                                        and scrambled it to make a type specimen
                                        book. It has survived not only five
                                        centuries, but also the leap into
                                        electronic typesetting, remaining
                                        essentially unchanged. It was
                                        popularised in the 1960s with the
                                        release of Letraset sheets containing
                                        Lorem Ipsum passages, and more recently
                                        with desktop publishing software like
                                        Aldus PageMaker including versions of
                                        Lorem Ipsum.Why do we use it?
                                      </p>
                                      <p>
                                        It is a long established fact that a
                                        reader will be distracted by the
                                        readable content of a page when looking
                                        at its layout. The point of using Lorem
                                        Ipsum is that it has a more-or-less
                                        normal distribution of letters, as
                                        opposed to using 'Content here, content
                                        here', making it look like readable
                                        English. Many desktop publishing
                                        packages and web page editors now use
                                        Lorem Ipsum as their default model text,
                                        and a search for 'lorem ipsum' will
                                        uncover many web sites still in their
                                        infancy. Various versions have evolved
                                        over the years, sometimes by accident,
                                        sometimes on purpose (injected humour
                                        and the like).
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