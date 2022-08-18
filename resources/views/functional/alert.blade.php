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
                        <div class="py-5">
                            Berikan pesan umpan balik kontekstual untuk tindakan
                            pengguna biasa dengan beberapa pesan peringatan yang
                            tersedia dan fleksibel.
                        </div>
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
                            <div class="rounded border p-10 pb-0 d-flex flex-column">
                                <div class="alert alert-primary" role="alert">
                                    A simple primary alert—check it out!
                                </div>
                                <div class="alert alert-success" role="alert">
                                    A simple success alert—check it out!
                                </div>
                                <div class="alert alert-danger" role="alert">
                                    A simple danger alert—check it out!
                                </div>
                                <div class="alert alert-info" role="alert">
                                    A simple danger alert—check it out!
                                </div>
                                <div class="alert alert-warning" role="alert">
                                    A simple warning alert—check it out!
                                </div>
                            </div>
                        </div>
                        <!--end::Block-->
                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight">
                                <button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">
                                    copy
                                </button>
                                <div class="highlight-code">
                                    <pre class="language-html">
                                        <code class="language-html">
                                            &lt;!--begin::Alert--&gt;
                                                &lt;div class="alert alert-primary" role="alert"&gt;
                                                    A simple warning alert—check it out!
                                                &lt;/div&gt;
                                            &lt;!--end::Alert--&gt;

                                            &lt;!--begin::Alert--&gt;
                                                &lt;div class="alert alert-success" role="alert"&gt;
                                                    A simple warning alert—check it out!
                                                &lt;/div&gt;
                                            &lt;!--end::Alert--&gt;

                                            &lt;!--begin::Alert--&gt;
                                                &lt;div class="alert alert-danger" role="alert"&gt;
                                                    A simple warning alert—check it out!
                                                &lt;/div&gt;
                                            &lt;!--end::Alert--&gt;

                                            &lt;!--begin::Alert--&gt;
                                                &lt;div class="alert alert-info" role="alert"&gt;
                                                    A simple warning alert—check it out!
                                                &lt;/div&gt;
                                            &lt;!--end::Alert--&gt;

                                            &lt;!--begin::Alert--&gt;
                                                &lt;div class="alert alert-warning" role="alert"&gt;
                                                    A simple warning alert—check it out!
                                                &lt;/div&gt;
                                            &lt;!--end::Alert--&gt;
                                        </code>
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
                        <h1 class="anchor fw-bold mb-5" id="icon" data-kt-scroll-offset="50">
                            <a href="#icon"></a>Icon
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10 pb-0 d-flex flex-column">
                                <!--begin::Alert-->
                                <div class="alert alert-primary d-flex align-items-center">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/files/fil024.svg-->
                                    <span class="svg-icon svg-icon-2hx svg-icon-primary me-4 mb-5 mb-sm-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3"
                                                d="M14 2H6C4.89543 2 4 2.89543 4 4V20C4 21.1046 4.89543 22 6 22H18C19.1046 22 20 21.1046 20 20V8L14 2Z"
                                                fill="currentColor" />
                                            <path d="M20 8L14 2V6C14 7.10457 14.8954 8 16 8H20Z" fill="currentColor" />
                                            <rect x="13.6993" y="13.6656" width="4.42828" height="1.73089"
                                                rx="0.865447" transform="rotate(45 13.6993 13.6656)" fill="currentColor" />
                                            <path
                                                d="M15 12C15 14.2 13.2 16 11 16C8.8 16 7 14.2 7 12C7 9.8 8.8 8 11 8C13.2 8 15 9.8 15 12ZM11 9.6C9.68 9.6 8.6 10.68 8.6 12C8.6 13.32 9.68 14.4 11 14.4C12.32 14.4 13.4 13.32 13.4 12C13.4 10.68 12.32 9.6 11 9.6Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Content-->
                                    <div>
                                        <span>The alert component can be used to highlight
                                            certain parts of your page for higher content
                                            visibility.</span>
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Alert-->

                            </div>
                        </div>
                        <!--end::Block-->
                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight">
                                <button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">
                                    copy
                                </button>
                                <div class="highlight-code">
                                    <pre class="language-html" style="height: 400px">
                                        <code class="language-html">
                                        &lt;!--begin::Alert--&gt;
                                        &lt;div class="alert alert-primary d-flex align-items-center"&gt;
                                        &lt;!--begin::Icon--&gt;
                                        &lt;span class="svg-icon svg-icon-2hx svg-icon-light me-4 mb-5 mb-sm-0"&gt;...&lt;/span&gt;
                                        &lt;!--end::Icon--&gt;

                                        &lt;!--begin::Wrapper--&gt;
                                        &lt;div class="d-flex flex-column text-light pe-0 pe-sm-10"&gt;
                                        &lt;!--begin::Title--&gt;
                                        &lt;h4 class="mb-2 light"&gt;This is an alert&lt;/h4&gt;
                                        &lt;!--end::Title--&gt;

                                        &lt;!--begin::Content--&gt;
                                        &lt;span&gt;The alert component can be used to highlight certain parts of your page for higher content visibility.&lt;/span&gt;
                                        &lt;!--end::Content--&gt;
                                        &lt;/div&gt;
                                        &lt;!--end::Wrapper--&gt;

                                        &lt;!--begin::Close--&gt;
                                        &lt;button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert"&gt;
                                        &lt;span class="svg-icon svg-icon-2x svg-icon-light"&gt;...&lt;/span&gt;
                                        &lt;/button&gt;
                                        &lt;!--end::Close--&gt;
                                        &lt;/div&gt;
                                        &lt;!--end::Alert--&gt;
                                        </code>
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
                        <h1 class="anchor fw-bold mb-5" id="dimissing" data-kt-scroll-offset="50">
                            <a href="#dimissing"></a>Dismissing
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10 pb-0 d-flex flex-column">
                                <!--begin::Alert-->
                                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                    A simple alert—check it out!
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                <!--end::Alert-->
                                <!--begin::Alert-->
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    A simple alert—check it out!
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                <!--end::Alert-->
                                <!--begin::Alert-->
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    A simple alert—check it out!
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                <!--end::Alert-->
                                <!--begin::Alert-->
                                <div class="alert alert-info alert-dismissible fade show" role="alert">
                                    A simple alert—check it out!
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                <!--end::Alert-->
                                <!--begin::Alert-->
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    A simple alert—check it out!
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                <!--end::Alert-->
                            </div>
                        </div>
                        <!--end::Block-->
                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight">
                                <button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">
                                    copy
                                </button>
                                <div class="highlight-code">
                                    <pre class="language-html" style="height: 400px">
<code class="language-html">&lt;!--begin::Alert--&gt;
&lt;div class="alert alert-dismissible bg-light-primary d-flex flex-column flex-sm-row p-5 mb-10"&gt;
&lt;!--begin::Icon--&gt;
&lt;span class="svg-icon svg-icon-2hx svg-icon-primary me-4 mb-5 mb-sm-0"&gt;...&lt;/span&gt;
&lt;!--end::Icon--&gt;

&lt;!--begin::Wrapper--&gt;
&lt;div class="d-flex flex-column pe-0 pe-sm-10"&gt;
  &lt;!--begin::Title--&gt;
  &lt;h4 class="fw-semibold"&gt;This is an alert&lt;/h4&gt;
  &lt;!--end::Title--&gt;
  &lt;!--begin::Content--&gt;
  &lt;span&gt;The alert component can be used to highlight certain parts of your page for higher content visibility.&lt;/span&gt;
  &lt;!--end::Content--&gt;
&lt;/div&gt;
&lt;!--end::Wrapper--&gt;

&lt;!--begin::Close--&gt;
&lt;button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert"&gt;
  &lt;span class="svg-icon svg-icon-1 svg-icon-primary"&gt;...&lt;/span&gt;
&lt;/button&gt;
&lt;!--end::Close--&gt;
&lt;/div&gt;
&lt;!--end::Alert--&gt;</code>
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
                                <a href="#icon" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Icon</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#dimissing" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Dismissing</span>
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
