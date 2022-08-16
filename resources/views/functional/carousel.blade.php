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
                        <div class="py-5">Komponen slideshow untuk bersepeda melalui elemen—gambar atau slide teks—seperti
                            korsel.</div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="dots-indicators" data-kt-scroll-offset="50">
                            <a href="#dots-indicators"></a>Dots Indicators
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div id="kt_carousel_1_carousel" class="carousel carousel-custom slide"
                                    data-bs-ride="carousel" data-bs-interval="8000">
                                    <!--begin::Heading-->
                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                        <!--begin::Label-->
                                        <span class="fs-4 fw-bold pe-2">Title</span>
                                        <!--end::Label-->
                                        <!--begin::Carousel Indicators-->
                                        <ol class="p-0 m-0 carousel-indicators carousel-indicators-dots">
                                            <li data-bs-target="#kt_carousel_1_carousel" data-bs-slide-to="0"
                                                class="ms-1 active"></li>
                                            <li data-bs-target="#kt_carousel_1_carousel" data-bs-slide-to="1"
                                                class="ms-1"></li>
                                            <li data-bs-target="#kt_carousel_1_carousel" data-bs-slide-to="2"
                                                class="ms-1"></li>
                                        </ol>
                                        <!--end::Carousel Indicators-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Carousel-->
                                    <div class="carousel-inner pt-8">
                                        <!--begin::Item-->
                                        <div class="carousel-item active">Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                            text ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting, remaining essentially
                                            unchanged.</div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="carousel-item">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book.</div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="carousel-item">Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting, remaining essentially
                                            unchanged.</div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Carousel-->
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
                                    <pre class="language-html" style="height:400px">
<code class="language-html">&lt;div id="kt_carousel_1_carousel" class="carousel carousel-custom slide" data-bs-ride="carousel" data-bs-interval="8000"&gt;
&lt;!--begin::Heading--&gt;
&lt;div class="d-flex align-items-center justify-content-between flex-wrap"&gt;
&lt;!--begin::Label--&gt;
&lt;span class="fs-4 fw-bold pe-2"&gt;Title&lt;/span&gt;
&lt;!--end::Label--&gt;

&lt;!--begin::Carousel Indicators--&gt;
&lt;ol class="p-0 m-0 carousel-indicators carousel-indicators-dots"&gt;
&lt;li data-bs-target="#kt_carousel_1_carousel" data-bs-slide-to="0" class="ms-1 active"&gt;&lt;/li&gt;
&lt;li data-bs-target="#kt_carousel_1_carousel" data-bs-slide-to="1" class="ms-1"&gt;&lt;/li&gt;
&lt;li data-bs-target="#kt_carousel_1_carousel" data-bs-slide-to="2" class="ms-1"&gt;&lt;/li&gt;
&lt;/ol&gt;
&lt;!--end::Carousel Indicators--&gt;
&lt;/div&gt;
&lt;!--end::Heading--&gt;

&lt;!--begin::Carousel--&gt;
&lt;div class="carousel-inner pt-8"&gt;
&lt;!--begin::Item--&gt;
&lt;div class="carousel-item active"&gt;
...
&lt;/div&gt;
&lt;!--end::Item--&gt;

&lt;!--begin::Item--&gt;
&lt;div class="carousel-item"&gt;
...
&lt;/div&gt;
&lt;!--end::Item--&gt;

&lt;!--begin::Item--&gt;
&lt;div class="carousel-item"&gt;
...
&lt;/div&gt;
&lt;!--end::Item--&gt;
&lt;/div&gt;
&lt;!--end::Carousel--&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="bullet-indicators" data-kt-scroll-offset="50">
                            <a href="#bullet-indicators"></a>Bullet Indicators
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div id="kt_carousel_2_carousel" class="carousel carousel-custom slide"
                                    data-bs-ride="carousel" data-bs-interval="8000">
                                    <!--begin::Heading-->
                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                        <!--begin::Label-->
                                        <span class="fs-4 fw-bold pe-2">Title</span>
                                        <!--end::Label-->
                                        <!--begin::Carousel Indicators-->
                                        <ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet">
                                            <li data-bs-target="#kt_carousel_2_carousel" data-bs-slide-to="0"
                                                class="ms-1 active"></li>
                                            <li data-bs-target="#kt_carousel_2_carousel" data-bs-slide-to="1"
                                                class="ms-1"></li>
                                            <li data-bs-target="#kt_carousel_2_carousel" data-bs-slide-to="2"
                                                class="ms-1"></li>
                                        </ol>
                                        <!--end::Carousel Indicators-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Carousel-->
                                    <div class="carousel-inner pt-8">
                                        <!--begin::Item-->
                                        <div class="carousel-item active">Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                            text ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting, remaining essentially
                                            unchanged.</div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="carousel-item">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book.</div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="carousel-item">Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting, remaining essentially
                                            unchanged.</div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Carousel-->
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
                                    <pre class="language-html" style="height:400px">
<code class="language-html">&lt;div id="kt_carousel_2_carousel" class="carousel carousel-custom slide" data-bs-ride="carousel" data-bs-interval="8000"&gt;
&lt;!--begin::Heading--&gt;
&lt;div class="d-flex align-items-center justify-content-between flex-wrap"&gt;
&lt;!--begin::Label--&gt;
&lt;span class="fs-4 fw-bold pe-2"&gt;Title&lt;/span&gt;
&lt;!--end::Label--&gt;

&lt;!--begin::Carousel Indicators--&gt;
&lt;ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet"&gt;
&lt;li data-bs-target="#kt_carousel_2_carousel" data-bs-slide-to="0" class="ms-1 active"&gt;&lt;/li&gt;
&lt;li data-bs-target="#kt_carousel_2_carousel" data-bs-slide-to="1" class="ms-1"&gt;&lt;/li&gt;
&lt;li data-bs-target="#kt_carousel_2_carousel" data-bs-slide-to="2" class="ms-1"&gt;&lt;/li&gt;
&lt;/ol&gt;
&lt;!--end::Carousel Indicators--&gt;
&lt;/div&gt;
&lt;!--end::Heading--&gt;

&lt;!--begin::Carousel--&gt;
&lt;div class="carousel-inner pt-8"&gt;
&lt;!--begin::Item--&gt;
&lt;div class="carousel-item active"&gt;
...
&lt;/div&gt;
&lt;!--end::Item--&gt;

&lt;!--begin::Item--&gt;
&lt;div class="carousel-item"&gt;
...
&lt;/div&gt;
&lt;!--end::Item--&gt;

&lt;!--begin::Item--&gt;
&lt;div class="carousel-item"&gt;
...
&lt;/div&gt;
&lt;!--end::Item--&gt;
&lt;/div&gt;
&lt;!--end::Carousel--&gt;
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
                                <a href="#dots-indicators" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Dots Indicators</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#bullet-indicators" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Bullet Indicators</span>
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
