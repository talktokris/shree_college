<div class="gdlr-core-pbf-background-wrap" style="background-color: #f7f7f7 ;"></div>
                                <div class="gdlr-core-sidebar-item gdlr-core-item-pdlr">

                                    <div id="gdlr-core-recent-post-widget-1" class="widget widget_gdlr-core-recent-post-widget kingster-widget news-box">
                                        <h3 class="kingster-widget-title" style="border-radius: 10px;">Recent News</h3><span class="clear"></span>
                                        <div class="gdlr-core-recent-post-widget-wrap gdlr-core-style-1 news-area">
                                            @foreach ($newsDataLimit as $row)


                                            <div class="gdlr-core-recent-post-widget clearfix bdr_bottom">
                                                <?php $imgName=$row->thumbnail_img; if($imgName==""){ $imageNewsString= url('assets/images/news/no-news.png'); }
                                                else {  $imageNewsString= url('assets/images/news/'.$row->id.'/'.$row->thumbnail_img) ;}?>
                                                <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image"><img src="{{ $imageNewsString }}" alt="" width="150" height="150" title="shutterstock_135948689" /></div>
                                                <div class="gdlr-core-recent-post-widget-content">
                                                    <div class="gdlr-core-recent-post-widget-title"><a href="{{ url('/news')}}">{{ $row->news_title }}</a></div>
                                                    <div class="gdlr-core-recent-post-widget-info"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href="#">{{ $row->created_at->diffForHumans(); }}</a></span>
                                                    </div>
                                                </div>
                                            </div>

                                            @endforeach

                                        </div>
                                    </div>


                                </div>
                            </div>
