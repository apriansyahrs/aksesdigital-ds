    <div id="kt_docs_aside" class="docs-aside" data-kt-drawer="true" data-kt-drawer-name="aside"
        data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
        data-kt-drawer-toggle="#kt_docs_aside_toggle">
        <!--begin::Logo-->
        <div class="docs-aside-logo flex-column-auto h-75px" id="kt_docs_aside_logo">
            <!--begin::Link-->
            <a href="/">
                <img alt="Logo" src="{{ asset('assets/media/logos/default.svg') }}"
                    class="theme-light-show h-25px" />
            </a>
            <!--end::Link-->
        </div>
        <!--end::Logo-->

        <!--begin::Aside Menu-->
        <!--begin::Menu wrapper-->
        <div class="docs-aside-menu flex-column-fluid">
            <div class="hover-scroll-overlay-y mt-5 mb-5 mt-lg-0 mb-lg-5 pe-lg-n2 me-lg-2"
                id="kt_docs_aside_menu_wrapper" data-kt-scroll="true"
                data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
                data-kt-scroll-dependencies="#kt_docs_aside_logo, #kt_docs_aside_select, #kt_docs_aside_footer"
                data-kt-scroll-wrappers="#kt_docs_aside_menu" data-kt-scroll-offset="10px">
                <!--begin::Menu-->
                <div class="menu menu-column menu-title-gray-800 menu-arrow-gray-500 menu-state-primary fw-semibold"
                    id="#kt_docs_aside_menu" data-kt-menu="true">
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu heading-->
                        <h4 class="menu-content text-muted mb-0 fs-7 text-uppercase">Getting Started</h4>
                        <!--end:Menu heading-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ Request::is('/') ? 'active' : '' }} py-2" href="{{ url('/') }}">
                            <span class="menu-title">Overview</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ Request::is('references') ? 'active' : '' }} py-2"
                            href="{{ url('/references') }}">
                            <span class="menu-title">References</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <div class="h-30px"></div>
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu heading-->
                        <h4 class="menu-content text-muted mb-0 fs-7 text-uppercase">Perceptual Pattern</h4>
                        <!--end:Menu heading-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ Request::is('typography') ? 'active' : '' }} py-2"
                            href="{{ url('/typography') }}">
                            <span class="menu-title">Typography</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ Request::is('color') ? 'active' : '' }} py-2" href="{{ url('/color') }}">
                            <span class="menu-title">Color</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <div class="h-30px"></div>
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu heading-->
                        <h4 class="menu-content text-muted mb-0 fs-7 text-uppercase">Functional Pattern</h4>
                        <!--end:Menu heading-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ Request::is('accordion') ? 'active' : '' }} py-2"
                            href="{{ url('/accordion') }}">
                            <span class="menu-title">Accordion</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ Request::is('alert') ? 'active' : '' }} py-2"
                            href="{{ url('/alert') }}">
                            <span class="menu-title">Alert</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ Request::is('badge') ? 'active' : '' }} py-2"
                            href="{{ url('/badge') }}">
                            <span class="menu-title">Badge</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ Request::is('breadchumb') ? 'active' : '' }} py-2"
                            href="{{ url('/breadchumb') }}">
                            <span class="menu-title">Breadchumb</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ Request::is('button') ? 'active' : '' }} py-2"
                            href="{{ url('/button') }}">
                            <span class="menu-title">Button</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ Request::is('card') ? 'active' : '' }} py-2"
                            href="{{ url('/card') }}">
                            <span class="menu-title">Card</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ Request::is('carousel') ? 'active' : '' }} py-2"
                            href="{{ url('/carousel') }}">
                            <span class="menu-title">Carousel</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="click"
                        class="menu-item {{ Request::is('forms*') ? 'here show' : '' }} menu-accordion">
                        <!--begin:Menu link-->
                        <span class="menu-link py-2">
                            <span class="menu-title">Forms</span>
                            <span class="menu-arrow"></span>
                        </span>
                        <!--end:Menu link-->
                        <!--begin:Menu sub-->
                        <div class="menu-sub menu-sub-accordion">
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link py-2 {{ Request::is('forms/controls') ? 'active' : '' }}"
                                    href="{{ url('/forms/controls') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Controls</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link py-2 {{ Request::is('forms/checks-radios') ? 'active' : '' }}"
                                    href="{{ url('/forms/checks-radios') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Checks, Radios & Switch</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link py-2 {{ Request::is('forms/input-group') ? 'active' : '' }}"
                                    href="{{ url('/forms/input-group') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Input Group</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                        </div>
                        <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ Request::is('modal') ? 'active' : '' }} py-2"
                            href="{{ url('/modal') }}">
                            <span class="menu-title">Modal</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ Request::is('pagination') ? 'active' : '' }} py-2"
                            href="{{ url('/pagination') }}">
                            <span class="menu-title">Pagination</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ Request::is('rating') ? 'active' : '' }} py-2"
                            href="{{ url('/rating') }}">
                            <span class="menu-title">Rating</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ Request::is('ribbon') ? 'active' : '' }} py-2"
                            href="{{ url('/ribbon') }}">
                            <span class="menu-title">Ribbon</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ Request::is('separator') ? 'active' : '' }} py-2"
                            href="{{ url('/separator') }}">
                            <span class="menu-title">Separator</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ Request::is('symbol') ? 'active' : '' }} py-2"
                            href="{{ url('/symbol') }}">
                            <span class="menu-title">Symbol</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ Request::is('table') ? 'active' : '' }} py-2"
                            href="{{ url('/table') }}">
                            <span class="menu-title">Table</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ Request::is('tabs') ? 'active' : '' }} py-2"
                            href="{{ url('/tabs') }}">
                            <span class="menu-title">Tabs</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                </div>
                <!--end::Menu-->
            </div>
        </div>
        <!--end::Menu wrapper-->
    </div>
