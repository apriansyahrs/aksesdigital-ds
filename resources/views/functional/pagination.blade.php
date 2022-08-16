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
                        <div class="py-5">Untuk menunjukkan serangkaian konten terkait ada di beberapa halaman.</div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="basic-example" data-kt-scroll-offset="50">
                            <a href="#basic-example"></a>Basic Example
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <ul class="pagination">
                                    <li class="page-item previous disabled">
                                        <a href="#" class="page-link">
                                            <i class="previous"></i>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">4</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">5</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">6</a>
                                    </li>
                                    <li class="page-item next">
                                        <a href="#" class="page-link">
                                            <i class="next"></i>
                                        </a>
                                    </li>
                                </ul>
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
<code class="language-html">&lt;ul class="pagination"&gt;
&lt;li class="page-item previous disabled"&gt;&lt;a href="#" class="page-link"&gt;&lt;i class="previous"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
&lt;li class="page-item "&gt;&lt;a href="#" class="page-link"&gt;1&lt;/a&gt;&lt;/li&gt;
&lt;li class="page-item active"&gt;&lt;a href="#" class="page-link"&gt;2&lt;/a&gt;&lt;/li&gt;
&lt;li class="page-item "&gt;&lt;a href="#" class="page-link"&gt;3&lt;/a&gt;&lt;/li&gt;
&lt;li class="page-item "&gt;&lt;a href="#" class="page-link"&gt;4&lt;/a&gt;&lt;/li&gt;
&lt;li class="page-item "&gt;&lt;a href="#" class="page-link"&gt;5&lt;/a&gt;&lt;/li&gt;
&lt;li class="page-item "&gt;&lt;a href="#" class="page-link"&gt;6&lt;/a&gt;&lt;/li&gt;
&lt;li class="page-item next"&gt;&lt;a href="#"  class="page-link"&gt;&lt;i class="next"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code>
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
                        <h1 class="anchor fw-bold mb-5" id="offset" data-kt-scroll-offset="50">
                            <a href="#offset"></a>Offset
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <ul class="pagination">
                                    <li class="page-item previous disabled">
                                        <a href="#" class="page-link">
                                            <i class="previous"></i>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">3</a>
                                    </li>
                                    <li class="page-item offset">
                                        <a href="#" class="page-link">...</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">5</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">6</a>
                                    </li>
                                    <li class="page-item next">
                                        <a href="#" class="page-link">
                                            <i class="next"></i>
                                        </a>
                                    </li>
                                </ul>
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
<code class="language-html">&lt;ul class="pagination"&gt;
&lt;li class="page-item previous disabled"&gt;&lt;a href="#" class="page-link"&gt;&lt;i class="previous"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
&lt;li class="page-item "&gt;&lt;a href="#" class="page-link"&gt;1&lt;/a&gt;&lt;/li&gt;
&lt;li class="page-item active"&gt;&lt;a href="#" class="page-link"&gt;2&lt;/a&gt;&lt;/li&gt;
&lt;li class="page-item "&gt;&lt;a href="#" class="page-link"&gt;3&lt;/a&gt;&lt;/li&gt;
&lt;li class="page-item "&gt;&lt;a href="#" class="page-link"&gt;...&lt;/a&gt;&lt;/li&gt;
&lt;li class="page-item "&gt;&lt;a href="#" class="page-link"&gt;5&lt;/a&gt;&lt;/li&gt;
&lt;li class="page-item "&gt;&lt;a href="#" class="page-link"&gt;6&lt;/a&gt;&lt;/li&gt;
&lt;li class="page-item next"&gt;&lt;a href="#"  class="page-link"&gt;&lt;i class="next"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code>
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
                        <h1 class="anchor fw-bold mb-5" id="button-with-text" data-kt-scroll-offset="50">
                            <a href="#button-with-text"></a>Button With Text
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <ul class="pagination">
                                    <li class="page-item previous disabled">
                                        <span class="page-link page-text">Previous</span>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">4</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">5</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">6</a>
                                    </li>
                                    <li class="page-item next">
                                        <a class="page-link page-text" href="#">Next</a>
                                    </li>
                                </ul>
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
<code class="language-html">&lt;ul class="pagination"&gt;
&lt;li class="page-item previous disabled"&gt;
&lt;span class="page-link page-text"&gt;Previous&lt;/span&gt;&lt;/span&gt;
&lt;/li&gt;
&lt;li class="page-item "&gt;&lt;a href="#" class="page-link"&gt;1&lt;/a&gt;&lt;/li&gt;
&lt;li class="page-item active"&gt;&lt;a href="#" class="page-link"&gt;2&lt;/a&gt;&lt;/li&gt;
&lt;li class="page-item "&gt;&lt;a href="#" class="page-link"&gt;3&lt;/a&gt;&lt;/li&gt;
&lt;li class="page-item "&gt;&lt;a href="#" class="page-link"&gt;4&lt;/a&gt;&lt;/li&gt;
&lt;li class="page-item "&gt;&lt;a href="#" class="page-link"&gt;5&lt;/a&gt;&lt;/li&gt;
&lt;li class="page-item "&gt;&lt;a href="#" class="page-link"&gt;6&lt;/a&gt;&lt;/li&gt;
&lt;li class="page-item next"&gt;
&lt;a class="page-link page-text" href="#"&gt;Next&lt;/span&gt;&lt;/a&gt;
&lt;/li&gt;
&lt;/ul&gt;</code>
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
                        <h1 class="anchor fw-bold mb-5" id="circle-style" data-kt-scroll-offset="50">
                            <a href="#circle-style"></a>Circle Style
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <ul class="pagination pagination-circle">
                                    <li class="page-item previous disabled">
                                        <a href="#" class="page-link">
                                            <i class="previous"></i>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">4</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">5</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">6</a>
                                    </li>
                                    <li class="page-item next">
                                        <a href="#" class="page-link">
                                            <i class="next"></i>
                                        </a>
                                    </li>
                                </ul>
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
<code class="language-html">&lt;ul class="pagination pagination-circle"&gt;
&lt;li class="page-item previous disabled"&gt;&lt;a href="#" class="page-link"&gt;&lt;i class="previous"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
&lt;li class="page-item "&gt;&lt;a href="#" class="page-link"&gt;1&lt;/a&gt;&lt;/li&gt;
&lt;li class="page-item active"&gt;&lt;a href="#" class="page-link"&gt;2&lt;/a&gt;&lt;/li&gt;
&lt;li class="page-item "&gt;&lt;a href="#" class="page-link"&gt;3&lt;/a&gt;&lt;/li&gt;
&lt;li class="page-item "&gt;&lt;a href="#" class="page-link"&gt;4&lt;/a&gt;&lt;/li&gt;
&lt;li class="page-item "&gt;&lt;a href="#" class="page-link"&gt;5&lt;/a&gt;&lt;/li&gt;
&lt;li class="page-item "&gt;&lt;a href="#" class="page-link"&gt;6&lt;/a&gt;&lt;/li&gt;
&lt;li class="page-item next"&gt;&lt;a href="#"  class="page-link"&gt;&lt;i class="next"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code>
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
                        <h1 class="anchor fw-bold mb-5" id="outline-style" data-kt-scroll-offset="50">
                            <a href="#outline-style"></a>Outline Style
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <ul class="pagination pagination-outline">
                                    <li class="page-item previous disabled m-1">
                                        <a href="#" class="page-link">
                                            <i class="previous"></i>
                                        </a>
                                    </li>
                                    <li class="page-item m-1">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li class="page-item active m-1">
                                        <a href="#" class="page-link">2</a>
                                    </li>
                                    <li class="page-item m-1">
                                        <a href="#" class="page-link">3</a>
                                    </li>
                                    <li class="page-item m-1">
                                        <a href="#" class="page-link">4</a>
                                    </li>
                                    <li class="page-item m-1">
                                        <a href="#" class="page-link">5</a>
                                    </li>
                                    <li class="page-item m-1">
                                        <a href="#" class="page-link">6</a>
                                    </li>
                                    <li class="page-item next m-1">
                                        <a href="#" class="page-link">
                                            <i class="next"></i>
                                        </a>
                                    </li>
                                </ul>
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
<code class="language-html">&lt;ul class="pagination pagination-outline"&gt;
&lt;li class="page-item previous disabled m-1"&gt;&lt;a href="#" class="page-link"&gt;&lt;i class="previous"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
&lt;li class="page-item m-1"&gt;&lt;a href="#" class="page-link"&gt;1&lt;/a&gt;&lt;/li&gt;
&lt;li class="page-item active m-1"&gt;&lt;a href="#" class="page-link"&gt;2&lt;/a&gt;&lt;/li&gt;
&lt;li class="page-item m-1"&gt;&lt;a href="#" class="page-link"&gt;3&lt;/a&gt;&lt;/li&gt;
&lt;li class="page-item m-1"&gt;&lt;a href="#" class="page-link"&gt;4&lt;/a&gt;&lt;/li&gt;
&lt;li class="page-item m-1"&gt;&lt;a href="#" class="page-link"&gt;5&lt;/a&gt;&lt;/li&gt;
&lt;li class="page-item m-1"&gt;&lt;a href="#" class="page-link"&gt;6&lt;/a&gt;&lt;/li&gt;
&lt;li class="page-item next m-1"&gt;&lt;a href="#"  class="page-link"&gt;&lt;i class="next"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code>
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
                        <h1 class="anchor fw-bold mb-5" id="outline-and-circle-styles" data-kt-scroll-offset="50">
                            <a href="#outline-and-circle-styles"></a>Outline &amp; Circle Styles
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <ul class="pagination pagination-circle pagination-outline">
                                    <li class="page-item previous disabled m-1">
                                        <a href="#" class="page-link">
                                            <i class="previous"></i>
                                        </a>
                                    </li>
                                    <li class="page-item m-1">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li class="page-item active m-1">
                                        <a href="#" class="page-link">2</a>
                                    </li>
                                    <li class="page-item m-1">
                                        <a href="#" class="page-link">3</a>
                                    </li>
                                    <li class="page-item m-1">
                                        <a href="#" class="page-link">4</a>
                                    </li>
                                    <li class="page-item m-1">
                                        <a href="#" class="page-link">5</a>
                                    </li>
                                    <li class="page-item m-1">
                                        <a href="#" class="page-link">6</a>
                                    </li>
                                    <li class="page-item next m-1">
                                        <a href="#" class="page-link">
                                            <i class="next"></i>
                                        </a>
                                    </li>
                                </ul>
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
<code class="language-html">&lt;ul class="pagination pagination-circle pagination-outline"&gt;
&lt;li class="page-item previous disabled m-1"&gt;&lt;a href="#" class="page-link"&gt;&lt;i class="previous"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
&lt;li class="page-item m-1"&gt;&lt;a href="#" class="page-link"&gt;1&lt;/a&gt;&lt;/li&gt;
&lt;li class="page-item active m-1"&gt;&lt;a href="#" class="page-link"&gt;2&lt;/a&gt;&lt;/li&gt;
&lt;li class="page-item m-1"&gt;&lt;a href="#" class="page-link"&gt;3&lt;/a&gt;&lt;/li&gt;
&lt;li class="page-item m-1"&gt;&lt;a href="#" class="page-link"&gt;4&lt;/a&gt;&lt;/li&gt;
&lt;li class="page-item m-1"&gt;&lt;a href="#" class="page-link"&gt;5&lt;/a&gt;&lt;/li&gt;
&lt;li class="page-item m-1"&gt;&lt;a href="#" class="page-link"&gt;6&lt;/a&gt;&lt;/li&gt;
&lt;li class="page-item next m-1"&gt;&lt;a href="#"  class="page-link"&gt;&lt;i class="next"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code>
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
                                <a href="#basic-example" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Basic Example</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#offset" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Offset</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#button-with-text" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Button With Text</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#circle-style" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Circle Style</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#outline-style" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Outline Style</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#outline-and-circle-styles" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Outline &amp; Circle Styles</span>
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
