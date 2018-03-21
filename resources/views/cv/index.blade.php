{{--https://certy.px-lab.com/developer/--}}
<!DOCTYPE html>
<html lang="en-US" xmlns:fb="http://ogp.me/ns/fb#" xmlns:addthis="http://www.addthis.com/help/api-spec" class="crt">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Веб-разработчик</title>
    <link type="text/css" rel="stylesheet" href={{@asset('css/f26a4.css')}}>
    <link type="text/css" rel="stylesheet" href={{@asset('css/kir.css')}} />
    <link type="text/css" rel="stylesheet" href={{@asset('css/home.css')}} />
    <link type="text/css" rel="stylesheet" href={{asset('css/style.min.css')}}>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
    <script type="text/javascript" src={{@asset('js/contacts.js')}}></script>

</head>
<body class="home page-template-default page page-id-90 wp-custom-logo crt crt-layers-1 crt-nav-on crt-nav-type2 crt-main-nav-on crt-side-box-on crt-sidebar-on"
      data-color="#1FA184">
<div class="crt-wrapper">
    @include('cv.header')
    <div id="crtContainer" class="crt-container">
        @include('cv.sidebar')
        @include('cv.menu')
        <div class="crt-container-sm">
            @include('cv.content.about')
            @include('cv.content.personal')
            @include('cv.content.experience')
            @include('cv.content.portfolio')
            @include('cv.content.contact')

        </div>
    </div>
    <div id="crtSidebar">
        <button id="crtSidebarClose" class="btn btn-icon btn-light btn-shade"><span
                    class="crt-icon crt-icon-close"></span></button>
        <div id="crtSidebarInner">
            <nav id="crtMainNavSm" class="hidden-lg hidden-md text-center">
                <ul class="clear-list">
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-90 current_page_item menu-item-148">
                        <a href="https://certy.px-lab.com/developer/">Home</a></li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-147"><a
                                href="https://certy.px-lab.com/developer/blog/">Blog</a></li>
                </ul>
            </nav>
            <aside class="widget-area clear-mrg">
                <section class="widget clearfix certy_widget_card">
                    <div class="crt-card bg-primary text-center">
                        <div class="crt-card-avatar"><span class="crt-avatar-state"> <span
                                        class="crt-avatar-state1"> <img class="avatar avatar-195" alt=""
                                                                        src="https://certy.px-lab.com/developer/wp-content/uploads/sites/6/2017/08/certy-programmer-1-195x195.png"
                                                                        srcset="https://certy.px-lab.com/developer/wp-content/uploads/sites/6/2017/08/certy-programmer-1.png 2x"> </span> <span
                                        class="crt-avatar-state2"> <img class="avatar avatar-195" alt=""
                                                                        src="https://certy.px-lab.com/developer/wp-content/uploads/sites/6/2017/08/certy-programmer-2-195x195.png"
                                                                        srcset="https://certy.px-lab.com/developer/wp-content/uploads/sites/6/2017/08/certy-programmer-2.png 2x"> </span> </span>
                        </div>
                        <div class="crt-card-info clear-mrg"><h2 class="text-upper">Robert Smith</h2>
                            <p class="text-muted">iOS Developer</p>
                            <ul class="crt-social clear-list">
                                <li><a target="_blank" href="https://www.facebook.com/pxlaboratory/"><span
                                                class="crt-icon crt-icon-facebook"></span></a></li>
                                <li><a target="_blank" href="https://twitter.com/_pxlab"><span
                                                class="crt-icon crt-icon-twitter"></span></a></li>
                                <li><a target="_blank" href="https://www.behance.net/pxlab"><span
                                                class="crt-icon crt-icon-behance"></span></a></li>
                                <li><a target="_blank" href="https://dribbble.com/Px-Lab"><span
                                                class="crt-icon crt-icon-dribbble"></span></a></li>
                                <li><a target="_blank"
                                       href="https://www.youtube.com/channel/UCzyxW0-fgJGrWNWz-WceMGg"><span
                                                class="crt-icon crt-icon-youtube"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section class="widget clearfix widget_search"><h2 class="widget-title">Search</h2>
                    <form role="search" method="get" class="search-again" action="https://certy.px-lab.com/developer/">
                        <div class="form-item-wrap"><input type="search" id="search-form-5aae6f028cdcc"
                                                           class="form-item" placeholder="Search" value="" name="s"/>
                        </div>
                        <div class="form-submit form-item-wrap"><input type="submit" id="submit" class="btn btn-primary"
                                                                       value="Try Again"></div>
                    </form>
                </section>
                <section class="widget clearfix widget_tag_cloud"><h2 class="widget-title">Tags</h2>
                    <div class="tagcloud"><a href="https://certy.px-lab.com/developer/tag/api/"
                                             class="tag-cloud-link tag-link-4 tag-link-position-1"
                                             style="font-size: 16.4pt;" aria-label="API (2 items)">API</a> <a
                                href="https://certy.px-lab.com/developer/tag/certy/"
                                class="tag-cloud-link tag-link-5 tag-link-position-2" style="font-size: 22pt;"
                                aria-label="Certy (3 items)">Certy</a> <a
                                href="https://certy.px-lab.com/developer/tag/cv/"
                                class="tag-cloud-link tag-link-6 tag-link-position-3" style="font-size: 8pt;"
                                aria-label="CV (1 item)">CV</a> <a
                                href="https://certy.px-lab.com/developer/tag/experience/"
                                class="tag-cloud-link tag-link-7 tag-link-position-4" style="font-size: 8pt;"
                                aria-label="Experience (1 item)">Experience</a> <a
                                href="https://certy.px-lab.com/developer/tag/google/"
                                class="tag-cloud-link tag-link-8 tag-link-position-5" style="font-size: 16.4pt;"
                                aria-label="Google (2 items)">Google</a> <a
                                href="https://certy.px-lab.com/developer/tag/key/"
                                class="tag-cloud-link tag-link-9 tag-link-position-6" style="font-size: 16.4pt;"
                                aria-label="KEY (2 items)">KEY</a> <a
                                href="https://certy.px-lab.com/developer/tag/online/"
                                class="tag-cloud-link tag-link-10 tag-link-position-7" style="font-size: 8pt;"
                                aria-label="Online (1 item)">Online</a> <a
                                href="https://certy.px-lab.com/developer/tag/resume/"
                                class="tag-cloud-link tag-link-11 tag-link-position-8" style="font-size: 8pt;"
                                aria-label="Resume (1 item)">Resume</a></div>
                </section>
                <section class="widget clearfix widget_recent_entries"><h2 class="widget-title">From the Blog</h2>
                    <ul>
                        <li>
                            <a href="https://certy.px-lab.com/developer/2017/06/20/how-to-create-google-font-developer-api-key/">How
                                to Create Google Font Developer API Key</a></li>
                        <li><a href="https://certy.px-lab.com/developer/2017/06/20/how-to-create-google-font-api-key/">How
                                to Create Google Maps Developer API Key</a></li>
                        <li><a href="https://certy.px-lab.com/developer/2017/06/20/how-to-create-online-cv-and-resume/">How
                                to Create Online CV and Resume</a></li>
                    </ul>
                </section>
            </aside>
        </div>
    </div>
    @include('cv.footer')
    <button id="crtBtnUp" class="btn btn-icon btn-primary"><span class="crt-icon crt-icon-arrow-page-up"></span>
    </button>
    <svg id="crtBgShape1" class="hidden-sm hidden-xs" height="519" width="758">
        <polygon class="pol" points="0,455,693,352,173,0,92,0,0,71"/>
    </svg>
    <svg id="crtBgShape2" class="hidden-sm hidden-xs" height="536" width="633">
        <polygon points="0,0,633,0,633,536"/>
    </svg>
</div>
</body>
</html>