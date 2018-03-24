<?php
    use Illuminate\Support\Facades\DB;
    $portfolio = DB::table('portfolios')->get();
?>
<div class="crt-paper-layers crt-animate portfolio">
    <div class="crt-paper clear-mrg clearfix">
        <div class="crt-paper-cont paper-padd clear-mrg">
            <section id="portfolio" class="section padd-box"><h2 class="title-lg text-upper">Портфолио</h2>
                <div class="pf-wrap">
                    {{--<div class="pf-filter padd-box">--}}
                        {{--<button data-filter="*">Все</button>--}}
                        {{--<button data-filter=".pf-design">Design</button>--}}
                        {{--<button data-filter=".pf-team">Team</button>--}}
                        {{--<button data-filter=".pf-work">Work</button>--}}
                    {{--</div>--}}
                    <div class="pf-grid">
                        <div class="pf-grid-sizer"></div>
                        @foreach($portfolio as $item)
                            <article class="pf-grid-item pf-design"><a class="pf-project" href="#pf-popup-65">
                                    <figure class="pf-figure">
                                        <img width="380" height="253"
                                                                   src={{url('/uploads/' . $item->image)}}
                                                                   class="attachment-certy-portfolio size-certy-portfolio wp-post-image"
                                                                   sizes="(max-width: 380px) 100vw, 380px"/>
                                    </figure>
                                    <div class="pf-caption text-center">
                                        <div class="valign-table">
                                            <div class="valign-cell">
                                                <h2 class="pf-title text-upper">{{$item->title}}</h2>
                                                <div class="pf-text clear-mrg"><p>This text visible only if you
                                                        will add text in Excerpt section.</p>
                                                    <div class="addthis_toolbox addthis_default_style addthis_32x32_style"
                                                         addthis:url='https://certy.px-lab.com/developer/certy_portfolio/certy-item-1/'>
                                                        <a class="addthis_button_preferred_1"></a><br/> <a
                                                                class="addthis_button_preferred_2"></a><br/> <a
                                                                class="addthis_button_preferred_3"></a><br/> <a
                                                                class="addthis_button_preferred_4"></a><br/> <a
                                                                class="addthis_button_compact"></a><br/> <a
                                                                class="addthis_counter addthis_bubble_style"></a>
                                                    </div>
                                                </div>
                                                <span class="pf-btn btn btn-primary">View More</span></div>
                                        </div>
                                    </div>
                                </a>
                                <div id="pf-popup-65" class="pf-popup clearfix">
                                    <div class="pf-popup-col1">
                                        <div class="pf-popup-media cr-slider" data-init="none">
                                            <div class="pf-popup-slide">
                                                <div class="pf-popup-embed" data-type="image" data-width="419"
                                                     data-height="293"
                                                     data-url=""></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>