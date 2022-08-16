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
                        <div class="py-5">Menambahkan dialog ke situs Anda untuk lightbox, pemberitahuan pengguna, atau
                            konten yang sepenuhnya kustom.</div>
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
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_1">Launch demo modal</button>
                                <div class="modal fade" tabindex="-1" id="kt_modal_1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title">Modal title</h3>
                                                <!--begin::Close-->
                                                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                    data-bs-dismiss="modal" aria-label="Close">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                    <span class="svg-icon svg-icon-1">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.5" x="6" y="17.3137"
                                                                width="16" height="2" rx="1"
                                                                transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                                            <rect x="7.41422" y="6" width="16"
                                                                height="2" rx="1"
                                                                transform="rotate(45 7.41422 6)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Close-->
                                            </div>
                                            <div class="modal-body">
                                                <p>Modal body text goes here.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
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
<code class="language-html">&lt;button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_1"&gt;
Launch demo modal
&lt;/button&gt;

&lt;div class="modal fade" tabindex="-1" id="kt_modal_1"&gt;
&lt;div class="modal-dialog"&gt;
&lt;div class="modal-content"&gt;
&lt;div class="modal-header"&gt;
&lt;h3 class="modal-title"&gt;Modal title&lt;/h3&gt;

&lt;!--begin::Close--&gt;
&lt;div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close"&gt;
&lt;span class="svg-icon svg-icon-1"&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;!--end::Close--&gt;
&lt;/div&gt;

&lt;div class="modal-body"&gt;
&lt;p&gt;Modal body text goes here.&lt;/p&gt;
&lt;/div&gt;

&lt;div class="modal-footer"&gt;
&lt;button type="button" class="btn btn-light" data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
&lt;button type="button" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="fullscreen" data-kt-scroll-offset="50">
                            <a href="#fullscreen"></a>Fullscreen
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_2">Launch demo modal</button>
                                <div class="modal bg-white fade" tabindex="-1" id="kt_modal_2">
                                    <div class="modal-dialog modal-fullscreen">
                                        <div class="modal-content shadow-none">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                <!--begin::Close-->
                                                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                    data-bs-dismiss="modal" aria-label="Close">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                    <span class="svg-icon svg-icon-2x">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.5" x="6" y="17.3137"
                                                                width="16" height="2" rx="1"
                                                                transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                                            <rect x="7.41422" y="6" width="16"
                                                                height="2" rx="1"
                                                                transform="rotate(45 7.41422 6)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Close-->
                                            </div>
                                            <div class="modal-body">
                                                <p>Modal body text goes here.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
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
                                    <pre class="language-html" style="height:400px">
<code class="language-html">&lt;button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_2"&gt;
Launch demo modal
&lt;/button&gt;

&lt;div class="modal bg-white fade" tabindex="-1" id="kt_modal_2"&gt;
&lt;div class="modal-dialog modal-fullscreen"&gt;
&lt;div class="modal-content shadow-none"&gt;
&lt;div class="modal-header"&gt;
&lt;h5 class="modal-title"&gt;Modal title&lt;/h5&gt;

&lt;!--begin::Close--&gt;
&lt;div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close"&gt;
&lt;span class="svg-icon svg-icon-2x"&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;!--end::Close--&gt;
&lt;/div&gt;

&lt;div class="modal-body"&gt;
&lt;p&gt;Modal body text goes here.&lt;/p&gt;
&lt;/div&gt;

&lt;div class="modal-footer"&gt;
&lt;button type="button" class="btn btn-light" data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
&lt;button type="button" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="scrolling-long-content" data-kt-scroll-offset="50">
                            <a href="#scrolling-long-content"></a>Scrolling Long Content
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_scrollable_1">Launch demo modal</button>
                                <div class="modal fade" tabindex="-1" id="kt_modal_scrollable_1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                <!--begin::Close-->
                                                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                    data-bs-dismiss="modal" aria-label="Close">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                    <span class="svg-icon svg-icon-2x">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.5" x="6" y="17.3137"
                                                                width="16" height="2" rx="1"
                                                                transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                                            <rect x="7.41422" y="6" width="16"
                                                                height="2" rx="1"
                                                                transform="rotate(45 7.41422 6)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Close-->
                                            </div>
                                            <div class="modal-body" style="min-height: 2500px">This is some placeholder
                                                content to show the scrolling behavior for modals. Instead of repeating the
                                                text the modal, we use an inline style set a minimum height, thereby
                                                extending the length of the overall modal and demonstrating the overflow
                                                scrolling. When content becomes longer than the height of the viewport,
                                                scrolling will move the modal as needed.</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
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
                                    <pre class="language-html" style="height:400px">
<code class="language-html">&lt;button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable_1"&gt;
Launch demo modal
&lt;/button&gt;

&lt;div class="modal fade" tabindex="-1" id="kt_modal_scrollable_1"&gt;
&lt;div class="modal-dialog"&gt;
&lt;div class="modal-content"&gt;
&lt;div class="modal-header"&gt;
&lt;h5 class="modal-title"&gt;Modal title&lt;/h5&gt;

&lt;!--begin::Close--&gt;
&lt;div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"&gt;
&lt;span class="svg-icon svg-icon-2x"&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;!--end::Close--&gt;
&lt;/div&gt;

&lt;div class="modal-body" style="min-height: 2500px"&gt;
&lt;p&gt;Modal body text goes here.&lt;/p&gt;
&lt;/div&gt;

&lt;div class="modal-footer"&gt;
&lt;button type="button" class="btn btn-light" data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
&lt;button type="button" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code>
</pre>
                                </div>
                            </div>
                            <!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_scrollable_2">Launch demo modal</button>
                                <div class="modal fade" tabindex="-1" id="kt_modal_scrollable_2">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                <!--begin::Close-->
                                                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                    data-bs-dismiss="modal">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                    <span class="svg-icon svg-icon-2x">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.5" x="6" y="17.3137"
                                                                width="16" height="2" rx="1"
                                                                transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                                            <rect x="7.41422" y="6" width="16"
                                                                height="2" rx="1"
                                                                transform="rotate(45 7.41422 6)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Close-->
                                            </div>
                                            <div class="modal-body">This is some placeholder content to show the scrolling
                                                behavior for modals. Instead of repeating the text the modal, we use an
                                                inline style set a minimum height, thereby extending the length of the
                                                overall modal and demonstrating the overflow scrolling. When content becomes
                                                longer than the height of the viewport, scrolling will move the modal as
                                                needed. This is some placeholder content to show the scrolling behavior for
                                                modals. Instead of repeating the text the modal, we use an inline style set
                                                a minimum height, thereby extending the length of the overall modal and
                                                demonstrating the overflow scrolling. When content becomes longer than the
                                                height of the viewport, scrolling will move the modal as needed. This is
                                                some placeholder content to show the scrolling behavior for modals. Instead
                                                of repeating the text the modal, we use an inline style set a minimum
                                                height, thereby extending the length of the overall modal and demonstrating
                                                the overflow scrolling. When content becomes longer than the height of the
                                                viewport, scrolling will move the modal as needed. This is some placeholder
                                                content to show the scrolling behavior for modals. Instead of repeating the
                                                text the modal, we use an inline style set a minimum height, thereby
                                                extending the length of the overall modal and demonstrating the overflow
                                                scrolling. When content becomes longer than the height of the viewport,
                                                scrolling will move the modal as needed. This is some placeholder content to
                                                show the scrolling behavior for modals. Instead of repeating the text the
                                                modal, we use an inline style set a minimum height, thereby extending the
                                                length of the overall modal and demonstrating the overflow scrolling. When
                                                content becomes longer than the height of the viewport, scrolling will move
                                                the modal as needed. This is some placeholder content to show the scrolling
                                                behavior for modals. Instead of repeating the text the modal, we use an
                                                inline style set a minimum height, thereby extending the length of the
                                                overall modal and demonstrating the overflow scrolling. When content becomes
                                                longer than the height of the viewport, scrolling will move the modal as
                                                needed. This is some placeholder content to show the scrolling behavior for
                                                modals. Instead of repeating the text the modal, we use an inline style set
                                                a minimum height, thereby extending the length of the overall modal and
                                                demonstrating the overflow scrolling. When content becomes longer than the
                                                height of the viewport, scrolling will move the modal as needed. This is
                                                some placeholder content to show the scrolling behavior for modals. Instead
                                                of repeating the text the modal, we use an inline style set a minimum
                                                height, thereby extending the length of the overall modal and demonstrating
                                                the overflow scrolling. When content becomes longer than the height of the
                                                viewport, scrolling will move the modal as needed. This is some placeholder
                                                content to show the scrolling behavior for modals. Instead of repeating the
                                                text the modal, we use an inline style set a minimum height, thereby
                                                extending the length of the overall modal and demonstrating the overflow
                                                scrolling. When content becomes longer than the height of the viewport,
                                                scrolling will move the modal as needed. This is some placeholder content to
                                                show the scrolling behavior for modals. Instead of repeating the text the
                                                modal, we use an inline style set a minimum height, thereby extending the
                                                length of the overall modal and demonstrating the overflow scrolling. When
                                                content becomes longer than the height of the viewport, scrolling will move
                                                the modal as needed.</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
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
                                    <pre class="language-html" style="height:400px">
<code class="language-html">&lt;button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable_2"&gt;
Launch demo modal
&lt;/button&gt;

&lt;div class="modal fade" tabindex="-1" id="kt_modal_scrollable_2"&gt;
&lt;div class="modal-dialog modal-dialog-scrollable"&gt;
&lt;div class="modal-content"&gt;
&lt;div class="modal-header"&gt;
&lt;h5 class="modal-title"&gt;Modal title&lt;/h5&gt;

&lt;!--begin::Close--&gt;
&lt;div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close"&gt;
&lt;span class="svg-icon svg-icon-2x"&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;!--end::Close--&gt;
&lt;/div&gt;

&lt;div class="modal-body"&gt;
&lt;p&gt;Long modal body text goes here.&lt;/p&gt;
&lt;/div&gt;

&lt;div class="modal-footer"&gt;
&lt;button type="button" class="btn btn-light" data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
&lt;button type="button" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;
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
                                <a href="#fullscreen" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Fullscreen</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#scrolling-long-content" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Scrolling Long Content</span>
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
