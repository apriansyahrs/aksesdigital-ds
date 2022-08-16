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
                        <h1 class="anchor fw-bold mb-5" id="bootstrap-buttons" data-kt-scroll-offset="50">
                            <a href="#overview"></a>Buttons
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">Gunakan gaya tombol kustom untuk tindakan dalaasem formulir, dialog, dan lainnya
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="pb-10">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="base-buttons" data-kt-scroll-offset="50">
                            <a href="#base-buttons"></a>Base Buttons
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <a href="#" class="btn btn-white me-2 mb-2">White</a>
                                <a href="#" class="btn btn-primary me-2 mb-2">Primary</a>
                                <a href="#" class="btn btn-light me-2 mb-2">Light</a>
                                <a href="#" class="btn btn-secondary me-2 mb-2">Secondary</a>
                                <a href="#" class="btn btn-success me-2 mb-2">Success</a>
                                <a href="#" class="btn btn-info me-2 mb-2">Info</a>
                                <a href="#" class="btn btn-warning me-2 mb-2">Warning</a>
                                <a href="#" class="btn btn-danger me-2 mb-2">Danger</a>
                                <a href="#" class="btn btn-dark me-2 mb-2">Dark</a>
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
<code class="language-html">&lt;a href="#" class="btn btn-white"&gt;White&lt;/a&gt;
&lt;a href="#" class="btn btn-primary"&gt;Primary&lt;/a&gt;
&lt;a href="#" class="btn btn-light"&gt;Light&lt;/a&gt;
&lt;a href="#" class="btn btn-secondary"&gt;Secondary&lt;/a&gt;
&lt;a href="#" class="btn btn-success"&gt;Success&lt;/a&gt;
&lt;a href="#" class="btn btn-info"&gt;Info&lt;/a&gt;
&lt;a href="#" class="btn btn-warning"&gt;Warning&lt;/a&gt;
&lt;a href="#" class="btn btn-danger"&gt;Danger&lt;/a&gt;
&lt;a href="#" class="btn btn-dark"&gt;Dark&lt;/a&gt;</code>
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
                            <div class="rounded border p-10">
                                <a href="#" class="btn btn-light-primary me-2 mb-2">Primary</a>
                                <a href="#" class="btn btn-light-success me-2 mb-2">Success</a>
                                <a href="#" class="btn btn-light-info me-2 mb-2">Info</a>
                                <a href="#" class="btn btn-light-warning me-2 mb-2">Warning</a>
                                <a href="#" class="btn btn-light-danger me-2 mb-2">Danger</a>
                                <a href="#" class="btn btn-light-dark me-2 mb-2">Dark</a>
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
<code class="language-html">&lt;a href="#" class="btn btn-light-primary"&gt;Primary&lt;/a&gt;
&lt;a href="#" class="btn btn-light-success"&gt;Success&lt;/a&gt;
&lt;a href="#" class="btn btn-light-info"&gt;Info&lt;/a&gt;
&lt;a href="#" class="btn btn-light-warning"&gt;Warning&lt;/a&gt;
&lt;a href="#" class="btn btn-light-danger"&gt;Danger&lt;/a&gt;
&lt;a href="#" class="btn btn-light-dark"&gt;Dark&lt;/a&gt;</code>
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
                        <h1 class="anchor fw-bold mb-5" id="outline-dashed-style" data-kt-scroll-offset="50">
                            <a href="#outline-dashed-style"></a>Outline Dashed Style
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">Use
                            <code>.btn-outline</code>and
                            <code>.btn-outline-dashed</code>Bootstrap Button classes with the standard outline theme color
                            <code>.btn-outline-{color}</code>and
                            <code>.btn-active-light-{color}</code>classes to have a button with outline dashed border style:
                        </div>
                        <!--end::Block-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <a href="#" class="btn btn-outline btn-outline-dashed me-2 mb-2">Default</a>
                                <a href="#"
                                    class="btn btn-outline btn-outline-dashed btn-outline-primary btn-active-light-primary me-2 mb-2">Primary</a>
                                <a href="#"
                                    class="btn btn-outline btn-outline-dashed btn-outline-success btn-active-light-success me-2 mb-2">Success</a>
                                <a href="#"
                                    class="btn btn-outline btn-outline-dashed btn-outline-info btn-active-light-info me-2 mb-2">Info</a>
                                <a href="#"
                                    class="btn btn-outline btn-outline-dashed btn-outline-warning btn-active-light-warning me-2 mb-2">Warning</a>
                                <a href="#"
                                    class="btn btn-outline btn-outline-dashed btn-outline-danger btn-active-light-danger me-2 mb-2">Danger</a>
                                <a href="#"
                                    class="btn btn-outline btn-outline-dashed btn-outline-dark btn-active-light-dark me-2 mb-2">Dark</a>
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
<code class="language-html">&lt;a href="#" class="btn btn-outline btn-outline-dashed me-2 mb-2"&gt;Default&lt;/a&gt;
&lt;a href="#" class="btn btn-outline btn-outline-dashed btn-outline-primary btn-active-light-primary"&gt;Primary&lt;/a&gt;
&lt;a href="#" class="btn btn-outline btn-outline-dashed btn-outline-success btn-active-light-success"&gt;Success&lt;/a&gt;
&lt;a href="#" class="btn btn-outline btn-outline-dashed btn-outline-info btn-active-light-info"&gt;Info&lt;/a&gt;
&lt;a href="#" class="btn btn-outline btn-outline-dashed btn-outline-warning btn-active-light-warning"&gt;Warning&lt;/a&gt;
&lt;a href="#" class="btn btn-outline btn-outline-dashed btn-outline-danger btn-active-light-danger"&gt;Danger&lt;/a&gt;
&lt;a href="#" class="btn btn-outline btn-outline-dashed btn-outline-dark btn-active-light-dark"&gt;Dark&lt;/a&gt;</code>
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
                        <h1 class="anchor fw-bold mb-5" id="icons" data-kt-scroll-offset="50">
                            <a href="#icons"></a>
                            Icons
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Duotune examples-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <a href="#" class="btn btn-primary me-2 mb-2">
                                    <!--begin::Svg Icon | path: icons/duotune/graphs/gra004.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3"
                                                d="M11 11H13C13.6 11 14 11.4 14 12V21H10V12C10 11.4 10.4 11 11 11ZM16 3V21H20V3C20 2.4 19.6 2 19 2H17C16.4 2 16 2.4 16 3Z"
                                                fill="currentColor" />
                                            <path
                                                d="M21 20H8V16C8 15.4 7.6 15 7 15H5C4.4 15 4 15.4 4 16V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->Caption
                                </a>
                                <a href="#" class="btn btn-success me-2 mb-2">
                                    <!--begin::Svg Icon | path: icons/duotune/graphs/gra004.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3"
                                                d="M11 11H13C13.6 11 14 11.4 14 12V21H10V12C10 11.4 10.4 11 11 11ZM16 3V21H20V3C20 2.4 19.6 2 19 2H17C16.4 2 16 2.4 16 3Z"
                                                fill="currentColor" />
                                            <path
                                                d="M21 20H8V16C8 15.4 7.6 15 7 15H5C4.4 15 4 15.4 4 16V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->Caption
                                </a>
                                <a href="#" class="btn btn-info me-2 mb-2">
                                    <!--begin::Svg Icon | path: icons/duotune/graphs/gra004.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3"
                                                d="M11 11H13C13.6 11 14 11.4 14 12V21H10V12C10 11.4 10.4 11 11 11ZM16 3V21H20V3C20 2.4 19.6 2 19 2H17C16.4 2 16 2.4 16 3Z"
                                                fill="currentColor" />
                                            <path
                                                d="M21 20H8V16C8 15.4 7.6 15 7 15H5C4.4 15 4 15.4 4 16V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->Caption
                                </a>
                                <a href="#" class="btn btn-warning me-2 mb-2">
                                    <!--begin::Svg Icon | path: icons/duotune/graphs/gra004.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3"
                                                d="M11 11H13C13.6 11 14 11.4 14 12V21H10V12C10 11.4 10.4 11 11 11ZM16 3V21H20V3C20 2.4 19.6 2 19 2H17C16.4 2 16 2.4 16 3Z"
                                                fill="currentColor" />
                                            <path
                                                d="M21 20H8V16C8 15.4 7.6 15 7 15H5C4.4 15 4 15.4 4 16V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->Caption
                                </a>
                                <a href="#" class="btn btn-danger me-2 mb-2">
                                    <!--begin::Svg Icon | path: icons/duotune/graphs/gra004.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3"
                                                d="M11 11H13C13.6 11 14 11.4 14 12V21H10V12C10 11.4 10.4 11 11 11ZM16 3V21H20V3C20 2.4 19.6 2 19 2H17C16.4 2 16 2.4 16 3Z"
                                                fill="currentColor" />
                                            <path
                                                d="M21 20H8V16C8 15.4 7.6 15 7 15H5C4.4 15 4 15.4 4 16V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->Caption
                                </a>
                                <a href="#" class="btn btn-dark me-2 mb-2">
                                    <!--begin::Svg Icon | path: icons/duotune/graphs/gra004.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3"
                                                d="M11 11H13C13.6 11 14 11.4 14 12V21H10V12C10 11.4 10.4 11 11 11ZM16 3V21H20V3C20 2.4 19.6 2 19 2H17C16.4 2 16 2.4 16 3Z"
                                                fill="currentColor" />
                                            <path
                                                d="M21 20H8V16C8 15.4 7.6 15 7 15H5C4.4 15 4 15.4 4 16V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->Caption
                                </a>
                                <div class="separator my-10"></div>
                                <a href="#" class="btn btn-icon btn-primary me-2 mb-2">
                                    <!--begin::Svg Icon | path: icons/duotune/graphs/gra004.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3"
                                                d="M11 11H13C13.6 11 14 11.4 14 12V21H10V12C10 11.4 10.4 11 11 11ZM16 3V21H20V3C20 2.4 19.6 2 19 2H17C16.4 2 16 2.4 16 3Z"
                                                fill="currentColor" />
                                            <path
                                                d="M21 20H8V16C8 15.4 7.6 15 7 15H5C4.4 15 4 15.4 4 16V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                                <a href="#" class="btn btn-icon btn-success me-2 mb-2">
                                    <!--begin::Svg Icon | path: icons/duotune/graphs/gra004.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3"
                                                d="M11 11H13C13.6 11 14 11.4 14 12V21H10V12C10 11.4 10.4 11 11 11ZM16 3V21H20V3C20 2.4 19.6 2 19 2H17C16.4 2 16 2.4 16 3Z"
                                                fill="currentColor" />
                                            <path
                                                d="M21 20H8V16C8 15.4 7.6 15 7 15H5C4.4 15 4 15.4 4 16V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                                <a href="#" class="btn btn-icon btn-info me-2 mb-2">
                                    <!--begin::Svg Icon | path: icons/duotune/graphs/gra004.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3"
                                                d="M11 11H13C13.6 11 14 11.4 14 12V21H10V12C10 11.4 10.4 11 11 11ZM16 3V21H20V3C20 2.4 19.6 2 19 2H17C16.4 2 16 2.4 16 3Z"
                                                fill="currentColor" />
                                            <path
                                                d="M21 20H8V16C8 15.4 7.6 15 7 15H5C4.4 15 4 15.4 4 16V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                                <a href="#" class="btn btn-icon btn-warning me-2 mb-2">
                                    <!--begin::Svg Icon | path: icons/duotune/graphs/gra004.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3"
                                                d="M11 11H13C13.6 11 14 11.4 14 12V21H10V12C10 11.4 10.4 11 11 11ZM16 3V21H20V3C20 2.4 19.6 2 19 2H17C16.4 2 16 2.4 16 3Z"
                                                fill="currentColor" />
                                            <path
                                                d="M21 20H8V16C8 15.4 7.6 15 7 15H5C4.4 15 4 15.4 4 16V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                                <a href="#" class="btn btn-icon btn-danger me-2 mb-2">
                                    <!--begin::Svg Icon | path: icons/duotune/graphs/gra004.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3"
                                                d="M11 11H13C13.6 11 14 11.4 14 12V21H10V12C10 11.4 10.4 11 11 11ZM16 3V21H20V3C20 2.4 19.6 2 19 2H17C16.4 2 16 2.4 16 3Z"
                                                fill="currentColor" />
                                            <path
                                                d="M21 20H8V16C8 15.4 7.6 15 7 15H5C4.4 15 4 15.4 4 16V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                                <a href="#" class="btn btn-icon btn-dark me-2 mb-2">
                                    <!--begin::Svg Icon | path: icons/duotune/graphs/gra004.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3"
                                                d="M11 11H13C13.6 11 14 11.4 14 12V21H10V12C10 11.4 10.4 11 11 11ZM16 3V21H20V3C20 2.4 19.6 2 19 2H17C16.4 2 16 2.4 16 3Z"
                                                fill="currentColor" />
                                            <path
                                                d="M21 20H8V16C8 15.4 7.6 15 7 15H5C4.4 15 4 15.4 4 16V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                            </div>
                        </div>
                        <!--end::Block-->
                        <!--begin::Code-->
                        <div class="pt-5 pb-20">
                            <!--begin::Highlight-->
                            <div class="highlight">
                                <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html">
<code class="language-html">&lt;a href="#" class="btn btn-primary"&gt;&lt;span class="svg-icon svg-icon-1"&gt;&lt;svg&gt;...&lt;/svg&gt;&lt;/span&gt;Caption&lt;/a&gt;
&lt;a href="#" class="btn btn-success"&gt;&lt;span class="svg-icon svg-icon-1"&gt;&lt;svg&gt;...&lt;/svg&gt;&lt;/span&gt;Caption&lt;/a&gt;
&lt;a href="#" class="btn btn-info"&gt;&lt;span class="svg-icon svg-icon-1"&gt;&lt;svg&gt;...&lt;/svg&gt;&lt;/span&gt;Caption&lt;/a&gt;
&lt;a href="#" class="btn btn-warning"&gt;&lt;span class="svg-icon svg-icon-1"&gt;&lt;svg&gt;...&lt;/svg&gt;&lt;/span&gt;Caption&lt;/a&gt;
&lt;a href="#" class="btn btn-danger"&gt;&lt;span class="svg-icon svg-icon-1"&gt;&lt;svg&gt;...&lt;/svg&gt;&lt;/span&gt;Caption&lt;/a&gt;
&lt;a href="#" class="btn btn-dark"&gt;&lt;span class="svg-icon svg-icon-1"&gt;&lt;svg&gt;...&lt;/svg&gt;&lt;/span&gt;Caption&lt;/a&gt;

&lt;a href="#" class="btn btn-icon btn-primary"&gt;&lt;span class="svg-icon svg-icon-1"&gt;&lt;svg&gt;...&lt;/svg&gt;&lt;/span&gt;&lt;/a&gt;
&lt;a href="#" class="btn btn-icon btn-success"&gt;&lt;span class="svg-icon svg-icon-1"&gt;&lt;svg&gt;...&lt;/svg&gt;&lt;/span&gt;&lt;/a&gt;
&lt;a href="#" class="btn btn-icon btn-info"&gt;&lt;span class="svg-icon svg-icon-1"&gt;&lt;svg&gt;...&lt;/svg&gt;&lt;/span&gt;&lt;/a&gt;
&lt;a href="#" class="btn btn-icon btn-warning"&gt;&lt;span class="svg-icon svg-icon-1"&gt;&lt;svg&gt;...&lt;/svg&gt;&lt;/span&gt;&lt;/a&gt;
&lt;a href="#" class="btn btn-icon btn-danger"&gt;&lt;span class="svg-icon svg-icon-1"&gt;&lt;svg&gt;...&lt;/svg&gt;&lt;/span&gt;&lt;/a&gt;
&lt;a href="#" class="btn btn-icon btn-dark"&gt;&lt;span class="svg-icon svg-icon-1"&gt;&lt;svg&gt;...&lt;/svg&gt;&lt;/span&gt;&lt;/a&gt;</code>
</pre>
                                </div>
                            </div>
                            <!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                        <!--end::Duotune examples-->
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
                                <a href="#base-buttons" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Base Buttons</span>
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
                                <a href="#outline-dashed-style" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Outline Dashed Style</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#icons" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Icons</span>
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
