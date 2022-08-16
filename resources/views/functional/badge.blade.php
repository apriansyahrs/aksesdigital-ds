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
                        <div class="py-5">komponen hitungan dan pelabelan kecil</div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="basic" data-kt-scroll-offset="50">
                            <a href="#basic"></a>Basic
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10 pb-0 d-flex flex-wrap">
                                <span class="badge badge-white me-10 mb-10">New</span>
                                <span class="badge badge-primary me-10 mb-10">New</span>
                                <span class="badge badge-light me-10 mb-10">New</span>
                                <span class="badge badge-secondary me-10 mb-10">New</span>
                                <span class="badge badge-success me-10 mb-10">New</span>
                                <span class="badge badge-info me-10 mb-10">New</span>
                                <span class="badge badge-warning me-10 mb-10">New</span>
                                <span class="badge badge-danger me-10 mb-10">New</span>
                                <span class="badge badge-dark me-10 mb-10">New</span>
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
<code class="language-html">&lt;span class="badge badge-white"&gt;New&lt;/span&gt;
&lt;span class="badge badge-primary"&gt;New&lt;/span&gt;
&lt;span class="badge badge-light"&gt;New&lt;/span&gt;
&lt;span class="badge badge-secondary"&gt;New&lt;/span&gt;
&lt;span class="badge badge-success"&gt;New&lt;/span&gt;
&lt;span class="badge badge-info"&gt;New&lt;/span&gt;
&lt;span class="badge badge-warning"&gt;New&lt;/span&gt;
&lt;span class="badge badge-danger"&gt;New&lt;/span&gt;
&lt;span class="badge badge-dark"&gt;New&lt;/span&gt;</code>
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
                        <h1 class="anchor fw-bold mb-5" id="light-style" data-kt-scroll-offset="50">
                            <a href="#light-style"></a>Light Style
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10 pb-0 d-flex flex-wrap">
                                <span class="badge badge-light-primary me-10 mb-10">New</span>
                                <span class="badge badge-light-success me-10 mb-10">New</span>
                                <span class="badge badge-light-info me-10 mb-10">New</span>
                                <span class="badge badge-light-warning me-10 mb-10">New</span>
                                <span class="badge badge-light-danger me-10 mb-10">New</span>
                                <span class="badge badge-light-dark me-10 mb-10">New</span>
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
<code class="language-html">&lt;span class="badge badge-light-primary"&gt;New&lt;/span&gt;
&lt;span class="badge badge-light-success"&gt;New&lt;/span&gt;
&lt;span class="badge badge-light-info"&gt;New&lt;/span&gt;
&lt;span class="badge badge-light-warning"&gt;New&lt;/span&gt;
&lt;span class="badge badge-light-danger"&gt;New&lt;/span&gt;
&lt;span class="badge badge-light-dark"&gt;New&lt;/span&gt;</code>
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
                        <h1 class="anchor fw-bold mb-5" id="square-badge" data-kt-scroll-offset="50">
                            <a href="#square-badge"></a>Square Badge
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10 pb-0 d-flex flex-wrap align-items-center">
                                <span class="d-flex p-2 bg-dark me-10 mb-10">
                                    <span class="badge badge-square badge-white">5</span>
                                </span>
                                <span class="badge badge-square badge-primary me-10 mb-10">5</span>
                                <span class="badge badge-square badge-light me-10 mb-10">5</span>
                                <span class="badge badge-square badge-secondary me-10 mb-10">5</span>
                                <span class="badge badge-square badge-success me-10 mb-10">5</span>
                                <span class="badge badge-square badge-info me-10 mb-10">5</span>
                                <span class="badge badge-square badge-warning me-10 mb-10">5</span>
                                <span class="badge badge-square badge-danger me-10 mb-10">5</span>
                                <span class="badge badge-square badge-dark me-10 mb-10">5</span>
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
<code class="language-html">&lt;span class="badge badge-square badge-white"&gt;5&lt;/span&gt;
&lt;span class="badge badge-square badge-primary"&gt;5&lt;/span&gt;
&lt;span class="badge badge-square badge-light"&gt;5&lt;/span&gt;
&lt;span class="badge badge-square badge-secondary"&gt;5&lt;/span&gt;
&lt;span class="badge badge-square badge-success"&gt;5&lt;/span&gt;
&lt;span class="badge badge-square badge-info"&gt;5&lt;/span&gt;
&lt;span class="badge badge-square badge-warning"&gt;5&lt;/span&gt;
&lt;span class="badge badge-square badge-danger"&gt;5&lt;/span&gt;
&lt;span class="badge badge-square badge-dark"&gt;5&lt;/span&gt;</code>
</pre>
                                </div>
                            </div>
                            <!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="pt-10">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="circle-badge" data-kt-scroll-offset="50">
                            <a href="#circle-badge"></a>Circle Badge
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10 pb-0 d-flex flex-wrap align-items-center">
                                <span class="d-flex p-2 bg-dark me-10 mb-10">
                                    <span class="badge badge-circle badge-white">5</span>
                                </span>
                                <span class="badge badge-circle badge-primary me-10 mb-10">5</span>
                                <span class="badge badge-circle badge-light me-10 mb-10">5</span>
                                <span class="badge badge-circle badge-secondary me-10 mb-10">5</span>
                                <span class="badge badge-circle badge-success me-10 mb-10">5</span>
                                <span class="badge badge-circle badge-info me-10 mb-10">5</span>
                                <span class="badge badge-circle badge-warning me-10 mb-10">5</span>
                                <span class="badge badge-circle badge-danger me-10 mb-10">5</span>
                                <span class="badge badge-circle badge-dark me-10 mb-10">5</span>
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
<code class="language-html">&lt;span class="badge badge-circle badge-white"&gt;5&lt;/span&gt;
&lt;span class="badge badge-circle badge-primary"&gt;5&lt;/span&gt;
&lt;span class="badge badge-circle badge-light"&gt;5&lt;/span&gt;
&lt;span class="badge badge-circle badge-secondary"&gt;5&lt;/span&gt;
&lt;span class="badge badge-circle badge-success"&gt;5&lt;/span&gt;
&lt;span class="badge badge-circle badge-info"&gt;5&lt;/span&gt;
&lt;span class="badge badge-circle badge-warning"&gt;5&lt;/span&gt;
&lt;span class="badge badge-circle badge-danger"&gt;5&lt;/span&gt;
&lt;span class="badge badge-circle badge-dark"&gt;5&lt;/span&gt;</code>
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
                                <a href="#basic" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Basic</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#light-style" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Light Style</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#square-badge" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Square Badge</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#circle-badge" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Circle Badge</span>
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
