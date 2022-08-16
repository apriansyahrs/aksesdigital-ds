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
                        <div class="py-5">Typography adalah bagian penting dari Sistem Desain yang membawa konsistensi di
                            seluruh pengalaman dan platform. Aturan tipografi yang baik membantu menyajikan konten dengan
                            jelas dan efisien.
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="font-sizes" data-kt-scroll-offset="50">
                            <a href="#font-sizes"></a>Font Sizes
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight">
                                <button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-scss" style="height:200px">
<code class="language-scss">$font-sizes: (
1: $h1-font-size,   // 22.75px
2: $h2-font-size,   // 19.50px
3: $h3-font-size,   // 17.55px
4: $h4-font-size,   // 16.25px
5: $h5-font-size,   // 14.95px
6: $h6-font-size,   // 13.95px

7: $font-size-base * 0.95,  // 12.35px
8: $font-size-base * 0.85,  // 11.05px
9: $font-size-base * 0.75,  // 9.75px
10: $font-size-base * 0.5,  // 6.50px

base: $font-size-base, // 13px
fluid: 100%, // 100%

2x: $font-size-base * 2,        // 26px
2qx: $font-size-base * 2.25,    // 29.25px
2hx: $font-size-base * 2.5,     // 32.5px
2tx: $font-size-base * 2.75,    // 35.75px

3x: $font-size-base * 3,        // 39px
3qx: $font-size-base * 3.25,    // 42.25px
3hx: $font-size-base * 3.5,     // 45.5px
3tx: $font-size-base * 3.75,    // 48.75px

4x: $font-size-base * 4,        // 52px
4qx: $font-size-base * 4.25,    // 55.25px
4hx: $font-size-base * 4.5,     // 58.5px
4tx: $font-size-base * 4.75,    // 61.75px

5x: $font-size-base * 5,        // 65px
5qx: $font-size-base * 5.25,    // 68.25px
5hx: $font-size-base * 5.5,     // 71.5px
5tx: $font-size-base * 5.75     // 74.75px
) !default;</code>
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
                        <h1 class="anchor fw-bold mb-5" id="line-height" data-kt-scroll-offset="50">
                            <a href="#line-height"></a>Line Height
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <ul class="pt-3 pb-5">
                            <li class="py-2">
                                <code>1</code>- for classes that set line height to
                                <code>1</code>
                            </li>
                            <li class="py-2">
                                <code>sm</code>- for classes that set line height to
                                <code>1.25</code>
                            </li>
                            <li class="py-2">
                                <code>base</code>- for classes that set line height to
                                <code>1.5</code>
                            </li>
                            <li class="py-2">
                                <code>lg</code>- for classes that set line height to
                                <code>1.75</code>
                            </li>
                            <li class="py-2">
                                <code>xl</code>- for classes that set line height to
                                <code>2</code>
                            </li>
                            <li class="py-2">
                                <code>xxl</code>- for classes that set line height to
                                <code>2.25</code>
                            </li>
                        </ul>
                        <!--end::Block-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="lh-1 py-5">Example text
                                    <br />for
                                    <code>.lh-1</code>
                                </div>
                                <div class="lh-sm py-5">Example text
                                    <br />for
                                    <code>.lh-sm</code>
                                </div>
                                <div class="lh-base py-5">Example text
                                    <br />for
                                    <code>.lh-base</code>
                                </div>
                                <div class="lh-lg py-5">Example text
                                    <br />for
                                    <code>.lh-lg</code>
                                </div>
                                <div class="lh-xl py-5">Example text
                                    <br />for
                                    <code>.lh-xl</code>
                                </div>
                                <div class="lh-xxl py-5">Example text
                                    <br />for
                                    <code>.lh-xxl</code>
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
                                    <pre class="language-html">
<code class="language-html">&lt;div class="lh-1"&gt;Example text for .lh-1&lt;/div&gt;
&lt;div class="lh-sm"&gt;Example text for .lh-sm&lt;/div&gt;
&lt;div class="lh-base"&gt;Example text for .lh-base&lt;/div&gt;
&lt;div class="lh-lg"&gt;Example text for .lh-lg&lt;/div&gt;
&lt;div class="lh-xl"&gt;Example text for .lh-xl&lt;/div&gt;
&lt;div class="lh-xxl"&gt;Example text for .lh-xxl&lt;/div&gt;</code>
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
                        <h1 class="anchor fw-bold mb-5" id="letter-spacing" data-kt-scroll-offset="50">
                            <a href="#letter-spacing"></a>Letter Spacing
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">Use
                            <code>.ls-{value}</code>class to set an element's letter spacing where
                            <code>value</code>is one of:
                        </div>
                        <!--end::Block-->
                        <!--begin::Block-->
                        <ul class="pt-3 pb-5">
                            <li class="py-2">
                                <code>1</code>- for classes that set letter spacing to
                                <code>0.1rem</code>
                            </li>
                            <li class="py-2">
                                <code>2</code>- for classes that set letter spacing to
                                <code>0.115rem</code>
                            </li>
                            <li class="py-2">
                                <code>3</code>- for classes that set letter spacing to
                                <code>0.125rem</code>
                            </li>
                            <li class="py-2">
                                <code>4</code>- for classes that set letter spacing to
                                <code>0.25rem</code>
                            </li>
                            <li class="py-2">
                                <code>5</code>- for classes that set letter spacing to
                                <code>0.5rem</code>
                            </li>
                            <li class="py-2">
                                <code>n1</code>- for classes that set letter spacing to
                                <code>-0.1rem</code>
                            </li>
                            <li class="py-2">
                                <code>n2</code>- for classes that set letter spacing to
                                <code>-0.115rem</code>
                            </li>
                            <li class="py-2">
                                <code>n3</code>- for classes that set letter spacing to
                                <code>-0.125rem</code>
                            </li>
                            <li class="py-2">
                                <code>n4</code>- for classes that set letter spacing to
                                <code>-0.25rem</code>
                            </li>
                            <li class="py-2">
                                <code>n5</code>- for classes that set letter spacing to
                                <code>-0.5rem</code>
                            </li>
                        </ul>
                        <!--end::Block-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="ls-1 py-5">Example text for
                                    <code>.ls-1</code>
                                </div>
                                <div class="ls-2 py-5">Example text for
                                    <code>.ls-2</code>
                                </div>
                                <div class="ls-3 py-5">Example text for
                                    <code>.ls-3</code>
                                </div>
                                <div class="ls-4 py-5">Example text for
                                    <code>.ls-4</code>
                                </div>
                                <div class="ls-5 py-5">Example text for
                                    <code>.ls-5</code>
                                </div>
                                <div class="ls-n1 py-5">Example text for
                                    <code>.ls-n1</code>
                                </div>
                                <div class="ls-n2 py-5">Example text for
                                    <code>.ls-n2</code>
                                </div>
                                <div class="ls-n3 py-5">Example text for
                                    <code>.ls-n3</code>
                                </div>
                                <div class="ls-n4 py-5">Example text for
                                    <code>.ls-n4</code>
                                </div>
                                <div class="ls-n5 py-5">Example text for
                                    <code>.ls-n5</code>
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
                                    <pre class="language-html">
<code class="language-html">&lt;div class="ls-1"&gt;Example text for .ls-1&lt;/div&gt;
&lt;div class="ls-2"&gt;Example text for .ls-2&lt;/div&gt;
&lt;div class="ls-3"&gt;Example text for .ls-3&lt;/div&gt;
&lt;div class="ls-4"&gt;Example text for .ls-4&lt;/div&gt;
&lt;div class="ls-5"&gt;Example text for .ls-5&lt;/div&gt;
&lt;div class="ls-n1"&gt;Example text for .ls-n1&lt;/div&gt;
&lt;div class="ls-n2"&gt;Example text for .ls-n2&lt;/div&gt;
&lt;div class="ls-n3"&gt;Example text for .ls-n3&lt;/div&gt;
&lt;div class="ls-n4"&gt;Example text for .ls-n4&lt;/div&gt;
&lt;div class="ls-n5"&gt;Example text for .ls-n5&lt;/div&gt;</code>
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
                                <a href="#font-sizes" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Font Sizes</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#line-height" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Line Height</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#letter-spacing" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Letter Spacing</span>
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
