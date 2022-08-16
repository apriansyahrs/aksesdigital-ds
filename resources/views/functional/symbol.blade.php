@extends('layout.doc')
@section('content')
    <div class="docs-content d-flex flex-column flex-column-fluid" id="kt_docs_content">
        <!--begin::Container-->
        <div class="container d-flex flex-column flex-lg-row" id="kt_docs_content_container">
            <!--begin::Card-->
            <div class="card card-docs flex-row-fluid mb-2">
                <!--begin::Card Body-->
                <div class="card-body fs-6 py-15 px-10 py-lg-15 px-lg-15 text-gray-700">
                    <!--begin::Section-->
                    <div class="pb-10">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="overview" data-kt-scroll-offset="50">
                            <a href="#overview"></a>Overview
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">Symbol adalah komponen khusus untuk avatar atau label dengan warna konten.</div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="avata" data-kt-scroll-offset="50">
                            <a href="#avata"></a>Avatar
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10 pb-0 d-flex flex-wrap">
                                <div class="symbol symbol-50px me-10 mb-10">
                                    <img src="{{ asset('assets/media/avatars/300-6.jpg') }}" alt="" />
                                </div>
                                <div class="symbol symbol-50px me-10 mb-10">
                                    <img src="{{ asset('assets/media/avatars/300-1.jpg') }}" alt="" />
                                </div>
                                <div class="symbol symbol-50px me-10 mb-10">
                                    <img src="{{ asset('assets/media/avatars/300-2.jpg') }}" alt="" />
                                </div>
                                <div class="symbol symbol-50px me-10 mb-10">
                                    <img src="{{ asset('assets/media/avatars/300-5.jpg') }}" alt="" />
                                </div>
                                <div class="symbol symbol-50px me-10 mb-10">
                                    <img src="{{ asset('assets/media/avatars/300-20.jp') }}g" alt="" />
                                </div>
                                <div class="symbol symbol-50px me-10 mb-10">
                                    <img src="{{ asset('assets/media/avatars/300-23.jp') }}g" alt="" />
                                </div>
                            </div>
                        </div>
                        <!--end::Block-->
                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight">
                                <button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html">
<code class="language-html">&lt;div class="symbol symbol-50px"&gt;
&lt;img src="assets/media/avatars/300-6.jpg" alt=""/&gt;
&lt;/div&gt;</code>
</pre>
                                </div>
                            </div>
                            <!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="label" data-kt-scroll-offset="50">
                            <a href="#label"></a>Label
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10 pb-0 d-flex flex-wrap">
                                <div class="symbol symbol-50px me-10 mb-10">
                                    <div class="symbol-label fs-2 fw-semibold text-success">A</div>
                                </div>
                                <div class="symbol symbol-50px me-10 mb-10">
                                    <div class="symbol-label fs-2 fw-semibold bg-danger text-inverse-danger">L</div>
                                </div>
                                <div class="symbol symbol-50px me-10 mb-10">
                                    <div class="symbol-label fs-2 fw-semibold text-danger">C</div>
                                </div>
                                <div class="symbol symbol-50px me-10 mb-10">
                                    <div class="symbol-label fs-2 fw-semibold bg-primary text-inverse-primary">T</div>
                                </div>
                                <div class="symbol symbol-50px me-10 mb-10">
                                    <div class="symbol-label fs-2 fw-semibold text-warning">X</div>
                                </div>
                                <div class="symbol symbol-50px me-10 mb-10">
                                    <div class="symbol-label fs-2 fw-semibold bg-info text-inverse-info">S</div>
                                </div>
                            </div>
                        </div>
                        <!--end::Block-->
                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight">
                                <button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html">
<code class="language-html">&lt;div class="symbol symbol-50px"&gt;
&lt;div class="symbol-label fs-2 fw-semibold text-success"&gt;A&lt;/div&gt;
&lt;/div&gt;

&lt;div class="symbol symbol-50px"&gt;
&lt;div class="symbol-label fs-2 fw-semibold bg-danger text-inverse-danger"&gt;L&lt;/div&gt;
&lt;/div&gt;

&lt;div class="symbol symbol-50px"&gt;
&lt;div class="symbol-label fs-2 fw-semibold text-danger"&gt;C&lt;/div&gt;
&lt;/div&gt;

&lt;div class="symbol symbol-50px"&gt;
&lt;div class="symbol-label fs-2 fw-semibold bg-primary text-inverse-primary"&gt;T&lt;/div&gt;
&lt;/div&gt;

&lt;div class="symbol symbol-50px"&gt;
&lt;div class="symbol-label fs-2 fw-semibold text-warning"&gt;X&lt;/div&gt;
&lt;/div&gt;

&lt;div class="symbol symbol-50px"&gt;
&lt;div class="symbol-label fs-2 fw-semibold bg-info text-inverse-info"&gt;S&lt;/div&gt;
&lt;/div&gt;</code>
</pre>
                                </div>
                            </div>
                            <!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="styles" data-kt-scroll-offset="50">
                            <a href="#styles"></a>Styles
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">Use
                            <code>.symbol-circle</code>and
                            <code>.symbol-square</code>classes to change a symbol element's style:
                        </div>
                        <!--end::Block-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10 pb-0 d-flex flex-wrap">
                                <div class="symbol symbol-50px me-10 mb-10">
                                    <div class="symbol-label"
                                        style="background-image:url('assets/media/avatars/300-6.jpg')"></div>
                                </div>
                                <div class="symbol symbol-50px me-10 mb-10">
                                    <div class="symbol-label fs-2 fw-semibold text-success">A</div>
                                </div>
                                <div class="symbol symbol-50px symbol-circle me-10 mb-10">
                                    <div class="symbol-label"
                                        style="background-image:url('assets/media/avatars/300-6.jpg')"></div>
                                </div>
                                <div class="symbol symbol-50px symbol-circle me-10 mb-10">
                                    <div class="symbol-label fs-2 fw-semibold text-success">A</div>
                                </div>
                                <div class="symbol symbol-50px symbol-square me-10 mb-10">
                                    <div class="symbol-label"
                                        style="background-image:url('assets/media/avatars/300-6.jpg')"></div>
                                </div>
                                <div class="symbol symbol-50px symbol-square me-10 mb-10">
                                    <div class="symbol-label fs-2 fw-semibold text-success">A</div>
                                </div>
                            </div>
                        </div>
                        <!--end::Block-->
                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight">
                                <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html">
<code class="language-html">&lt;div class="symbol symbol-50px"&gt;
&lt;div class="symbol-label" style="background-image:url(assets/media/avatars/300-6.jpg)"&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;div class="symbol symbol-50px"&gt;
&lt;div class="symbol-label fs-2 fw-semibold text-success"&gt;A&lt;/div&gt;
&lt;/div&gt;

&lt;div class="symbol symbol-50px symbol-circle"&gt;
&lt;div class="symbol-label" style="background-image:url(assets/media/avatars/300-6.jpg)"&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;div class="symbol symbol-50px symbol-circle"&gt;
&lt;div class="symbol-label fs-2 fw-semibold text-success"&gt;A&lt;/div&gt;
&lt;/div&gt;

&lt;div class="symbol symbol-50px symbol-square"&gt;
&lt;div class="symbol-label" style="background-image:url(assets/media/avatars/300-6.jpg)"&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;div class="symbol symbol-50px symbol-square"&gt;
&lt;div class="symbol-label fs-2 fw-semibold text-success"&gt;A&lt;/div&gt;
&lt;/div&gt;</code>
</pre>
                                </div>
                            </div>
                            <!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="group" data-kt-scroll-offset="50">
                            <a href="#group"></a>Group
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">Wrap symbols with
                            <code>.symbol-group</code>class to have a group with slighly overlapped symbols:
                        </div>
                        <!--end::Block-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10 pb-0 d-flex flex-wrap">
                                <div class="symbol-group symbol-hover">
                                    <div class="symbol symbol-circle symbol-50px mb-10">
                                        <img src="assets/media/avatars/300-6.jpg" alt="" />
                                    </div>
                                    <div class="symbol symbol-circle symbol-50px mb-10">
                                        <div class="symbol-label fs-2 fw-semibold bg-danger text-inverse-danger">L</div>
                                    </div>
                                    <div class="symbol symbol-circle symbol-50px mb-10">
                                        <img src="assets/media/avatars/300-2.jpg" alt="" />
                                    </div>
                                    <div class="symbol symbol-circle symbol-50px mb-10">
                                        <div class="symbol-label fs-2 fw-semibold bg-success text-inverse-success">A</div>
                                    </div>
                                    <div class="symbol symbol-circle symbol-50px mb-10">
                                        <img src="assets/media/avatars/300-20.jpg" alt="" />
                                    </div>
                                    <div class="symbol symbol-circle symbol-50px mb-10">
                                        <img src="assets/media/avatars/300-23.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Block-->
                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight">
                                <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html">
<code class="language-html">&lt;div class="symbol-group symbol-hover"&gt;
&lt;div class="symbol symbol-circle symbol-50px"&gt;
&lt;img src="assets/media/avatars/300-6.jpg" alt=""/&gt;
&lt;/div&gt;

&lt;div class="symbol symbol-circle symbol-50px mb-10"&gt;
&lt;div class="symbol-label fs-2 fw-semibold bg-danger text-inverse-danger"&gt;L&lt;/div&gt;
&lt;/div&gt;

&lt;div class="symbol symbol-circle symbol-50px"&gt;
&lt;img src="assets/media/avatars/300-2.jpg" alt=""/&gt;
&lt;/div&gt;

&lt;div class="symbol symbol-circle symbol-50px mb-10"&gt;
&lt;div class="symbol-label fs-2 fw-semibold bg-success text-inverse-success"&gt;A&lt;/div&gt;
&lt;/div&gt;

&lt;div class="symbol symbol-circle symbol-50px"&gt;
&lt;img src="assets/media/avatars/300-20.jpg" alt=""/&gt;
&lt;/div&gt;

&lt;div class="symbol symbol-circle symbol-50px"&gt;
&lt;img src="assets/media/avatars/300-23.jpg" alt=""/&gt;
&lt;/div&gt;
&lt;/div&gt;</code>
</pre>
                                </div>
                            </div>
                            <!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                </div>
                <!--end::Card Body-->
            </div>
            <!--end::Card-->
            <!--begin::Sidebar wrapper-->
            <div class="ms-7 flex-row-auto w-lg-200px">
                <!--begin::Sidebar nav-->
                <div class="card card-flush d-none d-lg-flex" data-kt-sticky="true" data-kt-sticky-name="sidebar-navs"
                    data-kt-sticky-offset="{default: false, lg: 200}" data-kt-sticky-width="200px"
                    data-kt-sticky-animation="false" data-kt-sticky-left="auto" data-kt-sticky-top="25px"
                    data-kt-sticky-zindex="95">
                    <!--begin::Card body-->
                    <div class="card-body px-0 px-3 py-6">
                        <!--begin::Menu-->
                        <ul id="kt_sidebar_nav"
                            class="nav nav-flush menu menu-column menu-title-gray-700 menu-bullet-gray-300 menu-state-primary fw-semibold fs-6">
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#overview" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Overview</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#avata" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Avatar</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#label" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Label</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#styles" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Styles</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#group" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Group</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Menu-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Sidebar nav-->
            </div>
            <!--end::Sidebar wrapper-->
        </div>
        <!--end::Container-->
    </div>
@endsection
