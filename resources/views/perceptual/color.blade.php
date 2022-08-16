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
                        <h1 class="anchor fw-bold mb-5" id="bg-colors" data-kt-scroll-offset="50">
                            <a href="#bg-colors"></a>Background Colors
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">Atur latar belakang elemen dengan mudah ke kelas kontekstual apa pun seperti
                            yang ditunjukkan di bawah ini:
                        </div>
                        <!--end::Block-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <p class="bg-lighten text-inverse-lighten p-3 fw-semibold fw-6">.bg-lighten</p>
                                <p class="bg-white text-inverse-white p-3 fw-semibold fw-6">.bg-white</p>
                                <p class="bg-primary text-inverse-primary p-3 fw-semibold fw-6">.bg-primary</p>
                                <p class="bg-light text-inverse-light p-3 fw-semibold fw-6">.bg-light</p>
                                <p class="bg-secondary text-inverse-secondary p-3 fw-semibold fw-6">.bg-secondary</p>
                                <p class="bg-success text-inverse-success p-3 fw-semibold fw-6">.bg-success</p>
                                <p class="bg-info text-inverse-info p-3 fw-semibold fw-6">.bg-info</p>
                                <p class="bg-warning text-inverse-warning p-3 fw-semibold fw-6">.bg-warning</p>
                                <p class="bg-danger text-inverse-danger p-3 fw-semibold fw-6">.bg-danger</p>
                                <p class="bg-dark text-inverse-dark p-3 fw-semibold fw-6">.bg-dark</p>
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
<code class="language-html">&lt;div class="bg-lighten"&gt;&lt;/div&gt;
&lt;div class="bg-white"&gt;&lt;/div&gt;
&lt;div class="bg-primary"&gt;&lt;/div&gt;
&lt;div class="bg-light"&gt;&lt;/div&gt;
&lt;div class="bg-secondary"&gt;&lt;/div&gt;
&lt;div class="bg-success"&gt;&lt;/div&gt;
&lt;div class="bg-info"&gt;&lt;/div&gt;
&lt;div class="bg-warning"&gt;&lt;/div&gt;
&lt;div class="bg-danger"&gt;&lt;/div&gt;
&lt;div class="bg-dark"&gt;&lt;/div&gt;</code>
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
                        <h1 class="anchor fw-bold mb-5" id="light-bg-colors" data-kt-scroll-offset="50">
                            <a href="#light-bg-colors"></a>Light Background Colors
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">Use
                            <code>.bg-light-{color}</code>class to set an element's light background color defined with
                            <code>$theme-light-colors</code>in
                            <code>sass/_variables.scss</code>:
                        </div>
                        <!--end::Block-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <p class="bg-light-primary text-primary p-3 fw-semibold fw-6">.bg-light-primary</p>
                                <p class="bg-light-success text-success p-3 fw-semibold fw-6">.bg-light-success</p>
                                <p class="bg-light-info text-info p-3 fw-semibold fw-6">.bg-light-info</p>
                                <p class="bg-light-warning text-warning p-3 fw-semibold fw-6">.bg-light-warning</p>
                                <p class="bg-light-danger text-danger p-3 fw-semibold fw-6">.bg-light-danger</p>
                                <p class="bg-light-dark text-dark p-3 fw-semibold fw-6">.bg-light-dark</p>
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
<code class="language-html">&lt;div class="bg-light-primary text-primary"&gt;&lt;/div&gt;
&lt;div class="bg-light-success text-success"&gt;&lt;/div&gt;
&lt;div class="bg-light-info text-info"&gt;&lt;/div&gt;
&lt;div class="bg-light-warning text-warning"&gt;&lt;/div&gt;
&lt;div class="bg-light-danger text-danger"&gt;&lt;/div&gt;
&lt;div class="bg-light-dark text-dark"&gt;&lt;/div&gt;</code>
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
                        <h1 class="anchor fw-bold mb-5" id="active-bg-colors" data-kt-scroll-offset="50">
                            <a href="#active-bg-colors"></a>Active Background Colors
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">Use
                            <code>.bg-active-{color}</code>class to toggle an element's active background color state with
                            <code>.active</code>class:
                        </div>
                        <!--end::Block-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <p class="bg-active-lighten text-active-inverse-lighten active p-3 fw-semibold fw-6">
                                    .bg-active-lighten</p>
                                <p class="bg-active-white text-active-inverse-white active p-3 fw-semibold fw-6">
                                    .bg-active-white</p>
                                <p class="bg-active-primary text-active-inverse-primary active p-3 fw-semibold fw-6">
                                    .bg-active-primary</p>
                                <p class="bg-active-light text-active-inverse-light active p-3 fw-semibold fw-6">
                                    .bg-active-light</p>
                                <p class="bg-active-secondary text-active-inverse-secondary active p-3 fw-semibold fw-6">
                                    .bg-active-secondary</p>
                                <p class="bg-active-success text-active-inverse-success active p-3 fw-semibold fw-6">
                                    .bg-active-success</p>
                                <p class="bg-active-info text-active-inverse-info active p-3 fw-semibold fw-6">
                                    .bg-active-info</p>
                                <p class="bg-active-warning text-active-inverse-warning active p-3 fw-semibold fw-6">
                                    .bg-active-warning</p>
                                <p class="bg-active-danger text-active-inverse-danger active p-3 fw-semibold fw-6">
                                    .bg-active-danger</p>
                                <p class="bg-active-dark text-active-inverse-dark active p-3 fw-semibold fw-6">
                                    .bg-active-dark</p>
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
<code class="language-html">&lt;div class="bg-active-lighten text-active-inverse-lighten active"&gt;&lt;/div&gt;
&lt;div class="bg-active-white text-active-inverse-white active"&gt;&lt;/div&gt;
&lt;div class="bg-active-primary text-active-inverse-primary active"&gt;&lt;/div&gt;
&lt;div class="bg-active-light text-active-inverse-light active"&gt;&lt;/div&gt;
&lt;div class="bg-active-secondary text-active-inverse-secondary active"&gt;&lt;/div&gt;
&lt;div class="bg-active-success text-active-inverse-success active"&gt;&lt;/div&gt;
&lt;div class="bg-active-info text-active-inverse-info active"&gt;&lt;/div&gt;
&lt;div class="bg-active-warning text-active-inverse-warning active"&gt;&lt;/div&gt;
&lt;div class="bg-active-danger text-active-inverse-danger active"&gt;&lt;/div&gt;
&lt;div class="bg-active-dark text-active-inverse-dark active"&gt;&lt;/div&gt;</code>
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
                        <h1 class="anchor fw-bold mb-5" id="hover-bg-colors" data-kt-scroll-offset="50">
                            <a href="#hover-bg-colors"></a>Hover Background Colors
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">Use
                            <code>.bg-hover-{color}</code>class to set an element's hover background color:
                        </div>
                        <!--end::Block-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <p class="text-gray-600 bg-hover-lighten text-hover-inverse-lighten p-3 fw-semibold fw-6">
                                    .bg-hover-lighten</p>
                                <p class="text-gray-600 bg-hover-white text-hover-inverse-white p-3 fw-semibold fw-6">
                                    .bg-hover-white</p>
                                <p class="text-gray-600 bg-hover-primary text-hover-inverse-primary p-3 fw-semibold fw-6">
                                    .bg-hover-primary</p>
                                <p class="text-gray-600 bg-hover-light text-hover-inverse-light p-3 fw-semibold fw-6">
                                    .bg-hover-light</p>
                                <p
                                    class="text-gray-600 bg-hover-secondary text-hover-inverse-secondary p-3 fw-semibold fw-6">
                                    .bg-hover-secondary</p>
                                <p class="text-gray-600 bg-hover-success text-hover-inverse-success p-3 fw-semibold fw-6">
                                    .bg-hover-success</p>
                                <p class="text-gray-600 bg-hover-info text-hover-inverse-info p-3 fw-semibold fw-6">
                                    .bg-hover-info</p>
                                <p class="text-gray-600 bg-hover-warning text-hover-inverse-warning p-3 fw-semibold fw-6">
                                    .bg-hover-warning</p>
                                <p class="text-gray-600 bg-hover-danger text-hover-inverse-danger p-3 fw-semibold fw-6">
                                    .bg-hover-danger</p>
                                <p class="text-gray-600 bg-hover-dark text-hover-inverse-dark p-3 fw-semibold fw-6">
                                    .bg-hover-dark</p>
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
<code class="language-html">&lt;div class="bg-hover-lighten text-hover-inverse-lighten"&gt;&lt;/div&gt;
&lt;div class="bg-hover-white text-hover-inverse-white"&gt;&lt;/div&gt;
&lt;div class="bg-hover-primary text-hover-inverse-primary"&gt;&lt;/div&gt;
&lt;div class="bg-hover-light text-hover-inverse-light"&gt;&lt;/div&gt;
&lt;div class="bg-hover-secondary text-hover-inverse-secondary"&gt;&lt;/div&gt;
&lt;div class="bg-hover-success text-hover-inverse-success"&gt;&lt;/div&gt;
&lt;div class="bg-hover-info text-hover-inverse-info"&gt;&lt;/div&gt;
&lt;div class="bg-hover-warning text-hover-inverse-warning"&gt;&lt;/div&gt;
&lt;div class="bg-hover-danger text-hover-inverse-danger"&gt;&lt;/div&gt;
&lt;div class="bg-hover-dark text-hover-inverse-dark"&gt;&lt;/div&gt;</code>
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
                        <h1 class="anchor fw-bold mb-5" id="hover-light-bg-colors" data-kt-scroll-offset="50">
                            <a href="#hover-light-bg-colors"></a>Hover Light Background Colors
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">Use
                            <code>.bg-hover-light-{color}</code>class to set an element's hover light background color:
                        </div>
                        <!--end::Block-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <p class="text-gray-600 bg-hover-light-primary text-hover-primary p-3 fw-semibold fw-6">
                                    .bg-hover-light-primary</p>
                                <p class="text-gray-600 bg-hover-light-success text-hover-success p-3 fw-semibold fw-6">
                                    .bg-hover-light-success</p>
                                <p class="text-gray-600 bg-hover-light-info text-hover-info p-3 fw-semibold fw-6">
                                    .bg-hover-light-info</p>
                                <p class="text-gray-600 bg-hover-light-warning text-hover-warning p-3 fw-semibold fw-6">
                                    .bg-hover-light-warning</p>
                                <p class="text-gray-600 bg-hover-light-danger text-hover-danger p-3 fw-semibold fw-6">
                                    .bg-hover-light-danger</p>
                                <p class="text-gray-600 bg-hover-light-dark text-hover-dark p-3 fw-semibold fw-6">
                                    .bg-hover-light-dark</p>
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
<code class="language-html">&lt;div class="bg-hover-light-primary text-hover-primary"&gt;&lt;/div&gt;
&lt;div class="bg-hover-light-success text-hover-success"&gt;&lt;/div&gt;
&lt;div class="bg-hover-light-info text-hover-info"&gt;&lt;/div&gt;
&lt;div class="bg-hover-light-warning text-hover-warning"&gt;&lt;/div&gt;
&lt;div class="bg-hover-light-danger text-hover-danger"&gt;&lt;/div&gt;
&lt;div class="bg-hover-light-dark text-hover-dark"&gt;&lt;/div&gt;</code>
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
                                <a href="#bg-colors" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Background Colors</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#light-bg-colors" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Light Background Colors</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#active-bg-colors" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Active Background Colors</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#hover-bg-colors" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Hover Background Colors</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#hover-light-bg-colors" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Hover Light Background Colors</span>
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
