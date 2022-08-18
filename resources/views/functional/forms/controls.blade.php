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
                        <div class="py-5">Berikan kontrol formulir tekstual seperti s dan s peningkatan dengan gaya
                            kustom, ukuran, status fokus, dan banyak lagi. <code>&lt;input&gt; &lt;textarea&gt;</code></div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="form-control" data-kt-scroll-offset="50">
                            <a href="#form-control"></a>Form Control
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-10">
                                    <label class="form-label">Default input</label>
                                    <input type="text" class="form-control" placeholder="name@example.com" />
                                </div>
                                <div class="mb-10">
                                    <label class="form-label">Solid background style</label>
                                    <input type="text" class="form-control form-control-solid"
                                        placeholder="name@example.com" />
                                </div>
                                <div class="mb-10">
                                    <label class="form-label">Transparent background style</label>
                                    <input type="text" class="form-control form-control-transparent"
                                        placeholder="name@example.com" />
                                </div>
                                <!--begin::Code-->
                                <div class="py-0">
                                    <!--begin::Highlight-->
                                    <div class="highlight">
                                        <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-html">
<code class="language-html">&lt;input type="text" class="form-control" placeholder="name@example.com"/&gt;
&lt;input type="text" class="form-control form-control-solid" placeholder="name@example.com"/&gt;
&lt;input type="text" class="form-control form-control-transparent" placeholder="name@example.com"/&gt;</code>
</pre>
                                        </div>
                                    </div>
                                    <!--end::Highlight-->
                                </div>
                                <!--end::Code-->
                            </div>
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="form-select" data-kt-scroll-offset="50">
                            <a href="#form-select"></a>Form Select
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-10">
                                    <label for="exampleFormControlInput1" class="form-label">Default select</label>
                                    <select class="form-select" aria-label="Select example">
                                        <option>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="mb-10">
                                    <label for="exampleFormControlInput1" class="form-label">Transparent background
                                        style</label>
                                    <select class="form-select form-select-transparent" aria-label="Select example">
                                        <option>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="mb-10">
                                    <label for="exampleFormControlTextarea1" class="form-label">White background
                                        style</label>
                                    <select class="form-select form-select-transparent" aria-label="Select example">
                                        <option>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <!--begin::Code-->
                                <div class="py-0">
                                    <!--begin::Highlight-->
                                    <div class="highlight">
                                        <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px">
<code class="language-html">&lt;select class="form-select" aria-label="Select example"&gt;
&lt;option&gt;Open this select menu&lt;/option&gt;
&lt;option value="1"&gt;One&lt;/option&gt;
&lt;option value="2"&gt;Two&lt;/option&gt;
&lt;option value="3"&gt;Three&lt;/option&gt;
&lt;/select&gt;

&lt;select class="form-select form-select-transparent" aria-label="Select example"&gt;
&lt;option&gt;Open this select menu&lt;/option&gt;
&lt;option value="1"&gt;One&lt;/option&gt;
&lt;option value="2"&gt;Two&lt;/option&gt;
&lt;option value="3"&gt;Three&lt;/option&gt;
&lt;/select&gt;

&lt;select class="form-select form-select-transparent" aria-label="Select example"&gt;
&lt;option&gt;Open this select menu&lt;/option&gt;
&lt;option value="1"&gt;One&lt;/option&gt;
&lt;option value="2"&gt;Two&lt;/option&gt;
&lt;option value="3"&gt;Three&lt;/option&gt;
&lt;/select&gt;</code>
</pre>
                                        </div>
                                    </div>
                                    <!--end::Highlight-->
                                </div>
                                <!--end::Code-->
                            </div>
                        </div>
                        <!--end::Block-->
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
                                <a href="#form-control" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Form Control</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#form-select" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Form Select</span>
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
