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
                        <div class="py-5">Tunjukkan lokasi halaman saat ini dalam hierarki navigasi yang secara otomatis
                            menambahkan pemisah</div>
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
                            <div class="rounded border p-10">
                                <ol class="breadcrumb text-muted fs-6 fw-semibold">
                                    <li class="breadcrumb-item pe-3">
                                        <a href="#" class="pe-3">Home</a>
                                    </li>
                                    <li class="breadcrumb-item pe-3">
                                        <a href="#" class="pe-3">Library</a>
                                    </li>
                                    <li class="breadcrumb-item pe-3 text-muted">Active</li>
                                </ol>
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
<code class="language-html">&lt;ol class="breadcrumb text-muted fs-6 fw-semibold"&gt;
&lt;li class="breadcrumb-item pe-3"&gt;&lt;a href="#" class="pe-3"&gt;Home&lt;/a&gt;&lt;/li&gt;
&lt;li class="breadcrumb-item pe-3"&gt;&lt;a href="#" class="pe-3"&gt;Library&lt;/a&gt;&lt;/li&gt;
&lt;li class="breadcrumb-item pe-3 text-muted"&gt;Active&lt;/li&gt;
&lt;/ol&gt;</code>
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
                        <h1 class="anchor fw-bold mb-5" id="line-separator" data-kt-scroll-offset="50">
                            <a href="#line-separator"></a>Line Separator
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <ol class="breadcrumb breadcrumb-line text-muted fs-6 fw-semibold">
                                    <li class="breadcrumb-item pe-3">
                                        <a href="#" class="pe-3">Home</a>
                                    </li>
                                    <li class="breadcrumb-item pe-3">
                                        <a href="#" class="pe-3">Library</a>
                                    </li>
                                    <li class="breadcrumb-item pe-3 text-muted">Active</li>
                                </ol>
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
<code class="language-html">&lt;ol class="breadcrumb breadcrumb-line text-muted fs-6 fw-semibold"&gt;
&lt;li class="breadcrumb-item pe-3"&gt;&lt;a href="#" class="pe-3"&gt;Home&lt;/a&gt;&lt;/li&gt;
&lt;li class="breadcrumb-item pe-3"&gt;&lt;a href="#" class="pe-3"&gt;Library&lt;/a&gt;&lt;/li&gt;
&lt;li class="breadcrumb-item pe-3 text-muted"&gt;Active&lt;/li&gt;
&lt;/ol&gt;</code>
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
                        <h1 class="anchor fw-bold mb-5" id="dot-separator" data-kt-scroll-offset="50">
                            <a href="#dot-separator"></a>Dot Separator
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold">
                                    <li class="breadcrumb-item pe-3">
                                        <a href="#" class="pe-3">Home</a>
                                    </li>
                                    <li class="breadcrumb-item pe-3">
                                        <a href="#" class="pe-3">Library</a>
                                    </li>
                                    <li class="breadcrumb-item pe-3 text-muted">Active</li>
                                </ol>
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
<code class="language-html">&lt;ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold"&gt;
&lt;li class="breadcrumb-item pe-3"&gt;&lt;a href="#" class="pe-3"&gt;Home&lt;/a&gt;&lt;/li&gt;
&lt;li class="breadcrumb-item pe-3"&gt;&lt;a href="#" class="pe-3"&gt;Library&lt;/a&gt;&lt;/li&gt;
&lt;li class="breadcrumb-item pe-3 text-muted"&gt;Active&lt;/li&gt;
&lt;/ol&gt;</code>
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
                        <h1 class="anchor fw-bold mb-5" id="without-separator" data-kt-scroll-offset="50">
                            <a href="#without-separator"></a>Without Separator
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <ol class="breadcrumb breadcrumb-separatorless text-muted fs-6 fw-semibold">
                                    <li class="breadcrumb-item pe-3">
                                        <a href="#" class="pe-3">Home</a>
                                    </li>
                                    <li class="breadcrumb-item pe-3">
                                        <a href="#" class="pe-3">Library</a>
                                    </li>
                                    <li class="breadcrumb-item pe-3 text-muted">Active</li>
                                </ol>
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
<code class="language-html">&lt;ol class="breadcrumb breadcrumb-separatorless text-muted fs-6 fw-semibold"&gt;
&lt;li class="breadcrumb-item pe-3"&gt;&lt;a href="#" class="pe-3"&gt;Home&lt;/a&gt;&lt;/li&gt;
&lt;li class="breadcrumb-item pe-3"&gt;&lt;a href="#" class="pe-3"&gt;Library&lt;/a&gt;&lt;/li&gt;
&lt;li class="breadcrumb-item pe-3 text-muted"&gt;Active&lt;/li&gt;
&lt;/ol&gt;</code>
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
                                <a href="#line-separator" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Line Separator</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#dot-separator" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Dot Separator</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#without-separator" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Without Separator</span>
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
