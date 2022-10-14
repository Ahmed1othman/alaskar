<style>
    .one h1 {
        text-align: center;
        text-transform: uppercase;
        font-size: 26px;
        font-weight: bold;
        color: {{ websiteInfo_hlp('main_color')}};
        font-family: Sans-Seri;
        width: 90%;
        display: inline-block;
        vertical-align: middle;

        text-shadow: 0px 2px 2px #b3b3b3;
    }

    .fix-menu-desktop .wrap-menu-desktop{
        height: 100px;
    }

    .menu-desktop .main-menu>li {
        white-space: nowrap;
    }

</style>
<!-- Start Navbar Area -->
<div class="navbar-area">
    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href="{{ route('home') }}" class="logo">
            @if (websiteInfo_hlp('logo_'.App::getLocale()) && websiteInfo_hlp('show_logo'))
                <img style="max-width: 110px; max-height: 60px" src="{{ asset('storage/front/' . websiteInfo_hlp('logo_'.App::getLocale())) }}"
                     alt="{{ websiteInfo_hlp('website_name_'.App::getLocale()) }}">
            @else
                <div class="one">
                    <h1>{{websiteInfo_hlp('website_name_'.App::getLocale())}}</h1>
                </div>
            @endif
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light ">
                <a class="navbar-brand" href="{{ route('home') }}">
                    @if (websiteInfo_hlp('logo_'.App::getLocale()) && websiteInfo_hlp('show_logo'))
                        <img style="max-width: 110px; max-height: 60px" src="{{ asset('storage/front/' . websiteInfo_hlp('logo_'.App::getLocale())) }}"
                             alt="{{ websiteInfo_hlp('website_name_'.App::getLocale()) }}" >
                    @else

                        <div class="one">
                            <h1>{{websiteInfo_hlp('website_name_'.App::getLocale())}}</h1>
                        </div>
                    @endif
                </a>
                <a class="navbar-brand-sticky" href="{{ route('home') }}">
                    @if (websiteInfo_hlp('logo_'.App::getLocale()) && websiteInfo_hlp('show_logo'))
                        <img style="max-width: 110px; max-height: 60px" src="{{ asset('storage/front/' . websiteInfo_hlp('logo_'.App::getLocale())) }}"
                             alt="{{ websiteInfo_hlp('website_name_'.App::getLocale()) }}" >
                    @else

                        <div class="one">
                            <h1>{{websiteInfo_hlp('website_name_'.App::getLocale())}}</h1>
                        </div>
                    @endif
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        @foreach (navbar_hlp() as $item)
                            <li class="nav-item">
                                <a href="{{ route($item->route) }}" class="nav-link">
                                    {{ __('site/app.'.$item->title) }}
                                </a>
                            </li>
                        @endforeach

                        <li class="nav-item">
                            <a href="#">
                                {{trans('admin/news.lang')}}
                                <i class='bx bxs-chevron-right'></i>
                            </a>
                            <ul class="dropdown-menu">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <li>
                                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            {{ $properties['native'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>

                    <div class="menu-btn">
                        <a href="#contact_us" class="seo-btn">{{__('site/app.contact_us')}}</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->
