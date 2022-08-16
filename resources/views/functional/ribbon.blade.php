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
                        <div class="py-5">Ribbon adalah elemen mikro khusus yang dapat digunakan pada elemen kartu untuk
                            bakat tambahan.</div>
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
                            <!--begin::Card-->
                            <div class="card card-bordered">
                                <div class="card-header ribbon">
                                    <div class="card-title">Ribbon Example</div>
                                    <div class="ribbon-label bg-primary">Ribbon</div>
                                </div>
                                <div class="card-body">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    when an unknown printer took a galley of type and scrambled it to make a type specimen
                                    book. It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                                    desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                </div>
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Block-->
                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight">
                                <button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html">
<code class="language-html">&lt;div class="card card-bordered"&gt;
&lt;div class="card-header ribbon"&gt;
&lt;div class="card-title"&gt;Ribbon Example&lt;/div&gt;
&lt;div class="ribbon-label bg-primary"&gt;Ribbon&lt;/div&gt;
&lt;/div&gt;
&lt;div class="card-body"&gt;
...
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
                    <!--begin::Section-->
                    <div class="py-10">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="rounded" data-kt-scroll-offset="50">
                            <a href="#rounded"></a>Rounded
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <!--begin::Row-->
                            <div class="row row-cols-1 row-cols-lg-3 g-9">
                                <!--begin::Col-->
                                <div class="col">
                                    <!--begin::Card-->
                                    <div class="card card-bordered">
                                        <div class="card-header ribbon ribbon-end">
                                            <div class="card-title">Ribbon Example</div>
                                            <div class="ribbon-label bg-primary">Ribbon</div>
                                        </div>
                                        <div class="card-body">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting, remaining essentially
                                            unchanged.</div>
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col">
                                    <!--begin::Card-->
                                    <div class="card card-bordered">
                                        <div class="card-header ribbon ribbon-top">
                                            <div class="ribbon-label bg-primary">Ribbon</div>
                                            <div class="card-title">Ribbon Example</div>
                                        </div>
                                        <div class="card-body">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting, remaining essentially
                                            unchanged.</div>
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col">
                                    <!--begin::Card-->
                                    <div class="card card-bordered">
                                        <div class="card-header justify-content-end ribbon ribbon-start">
                                            <div class="ribbon-label bg-primary">Ribbon</div>
                                            <div class="card-title">Ribbon Example</div>
                                        </div>
                                        <div class="card-body">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting, remaining essentially
                                            unchanged.</div>
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Block-->
                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight">
                                <button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html" style="height:400px">
<code class="language-html">&lt;!--begin::Card--&gt;
&lt;div class="card card-bordered"&gt;
&lt;div class="card-header ribbon ribbon-end"&gt;
&lt;div class="ribbon-label bg-primary"&gt;Ribbon&lt;/div&gt;
&lt;div class="card-title"&gt;Ribbon Example&lt;/div&gt;
&lt;/div&gt;

&lt;div class="card-body"&gt;
...
&lt;/div&gt;
&lt;/div&gt;
&lt;!--end::Card--&gt;

&lt;!--begin::Card--&gt;
&lt;div class="card card-bordered"&gt;
&lt;div class="card-header ribbon ribbon-top"&gt;
&lt;div class="ribbon-label bg-primary"&gt;Ribbon&lt;/div&gt;
&lt;div class="card-title"&gt;Ribbon Example&lt;/div&gt;
&lt;/div&gt;

&lt;div class="card-body"&gt;
...
&lt;/div&gt;
&lt;/div&gt;
&lt;!--end::Card--&gt;

&lt;!--begin::Card--&gt;
&lt;div class="card card-bordered"&gt;
&lt;div class="card-header justify-content-end ribbon ribbon-start"&gt;
&lt;div class="ribbon-label bg-primary"&gt;Ribbon&lt;/div&gt;
&lt;div class="card-title"&gt;Ribbon Example&lt;/div&gt;
&lt;/div&gt;

&lt;div class="card-body"&gt;
...
&lt;/div&gt;
&lt;/div&gt;
&lt;!--end::Card--&gt;</code>
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
                        <h1 class="anchor fw-bold mb-5" id="vertical" data-kt-scroll-offset="50">
                            <a href="#vertical"></a>Vertical
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <!--begin::Row-->
                            <div class="row row-cols-1 row-cols-lg-2 g-9">
                                <!--begin::Col-->
                                <div class="col">
                                    <!--begin::Card-->
                                    <div class="card card-bordered">
                                        <div class="card-header ribbon ribbon-top ribbon-vertical">
                                            <div class="ribbon-label bg-danger">OK!</div>
                                            <div class="card-title">Ribbon Example</div>
                                        </div>
                                        <div class="card-body">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book.</div>
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col">
                                    <!--begin::Card-->
                                    <div class="card card-bordered">
                                        <div class="card-header ribbon ribbon-top ribbon-vertical">
                                            <div class="ribbon-label bg-success">
                                                <i class="bi bi-heart-fill fs-2 text-white"></i>
                                            </div>
                                            <div class="card-title">Ribbon Example</div>
                                        </div>
                                        <div class="card-body">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book.</div>
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Block-->
                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight">
                                <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html" style="height:400px">
<code class="language-html">&lt;!--begin::Card--&gt;
&lt;div class="card card-bordered"&gt;
&lt;div class="card-header ribbon ribbon-top ribbon-vertical"&gt;
&lt;div class="ribbon-label bg-danger"&gt;
OK!
&lt;/div&gt;
&lt;div class="card-title"&gt;Ribbon Example&lt;/div&gt;
&lt;/div&gt;
&lt;div class="card-body"&gt;
...
&lt;/div&gt;
&lt;/div&gt;
&lt;!--end::Card--&gt;

&lt;!--begin::Card--&gt;
&lt;div class="card borcard-borderedder"&gt;
&lt;div class="card-header ribbon ribbon-top ribbon-vertical"&gt;
&lt;div class="ribbon-label bg-success"&gt;
&lt;i class="bi bi-heart-fill fs-2 text-white"&gt;&lt;/i&gt;
&lt;/div&gt;
&lt;div class="card-title"&gt;Ribbon Example&lt;/div&gt;
&lt;/div&gt;
&lt;div class="card-body"&gt;
...
&lt;/div&gt;
&lt;/div&gt;
&lt;!--end::Card--&gt;</code>
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
                                <a href="#rounded" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Rounded</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#vertical" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Vertical</span>
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
