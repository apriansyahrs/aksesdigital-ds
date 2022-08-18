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
                        <div class="py-5">Perluas kontrol formulir dengan mudah dengan menambahkan teks, tombol, atau grup
                            tombol di kedua sisi input tekstual, pilihan kustom, dan input file kustom.</div>
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
                                <!--begin::Input group-->
                                <div class="input-group mb-5">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                        aria-describedby="basic-addon1" />
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="input-group has-validation mb-5">
                                    <span class="input-group-text">@</span>
                                    <input type="text" class="form-control is-invalid" required="" />
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback">Please choose a
                                        username.</div>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="input-group mb-5">
                                    <input type="text" class="form-control" placeholder="Recipient's username"
                                        aria-label="Recipient's username" aria-describedby="basic-addon2" />
                                    <span class="input-group-text" id="basic-addon2">@example.com</span>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <label for="basic-url" class="form-label">Your vanity URL</label>
                                <div class="input-group mb-5">
                                    <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                                    <input type="text" class="form-control" id="basic-url"
                                        aria-describedby="basic-addon3" />
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="input-group mb-5">
                                    <span class="input-group-text">$</span>
                                    <input type="text" class="form-control"
                                        aria-label="Amount (to the nearest dollar)" />
                                    <span class="input-group-text">.00</span>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="input-group mb-5">
                                    <input type="text" class="form-control" placeholder="Username"
                                        aria-label="Username" />
                                    <span class="input-group-text">@</span>
                                    <input type="text" class="form-control" placeholder="Server" aria-label="Server" />
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="input-group">
                                    <span class="input-group-text">With textarea</span>
                                    <textarea class="form-control" aria-label="With textarea"></textarea>
                                </div>
                                <!--end::Input group-->
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
<code class="language-html">&lt;!--begin::Input group--&gt;
&lt;div class="input-group mb-5"&gt;
&lt;span class="input-group-text" id="basic-addon1"&gt;@&lt;/span&gt;
&lt;input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"/&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;

&lt;!--begin::Input group--&gt;
&lt;div class="input-group mb-5"&gt;
&lt;input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2"/&gt;
&lt;span class="input-group-text" id="basic-addon2"&gt;@example.com&lt;/span&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;

&lt;!--begin::Input group--&gt;
&lt;label for="basic-url" class="form-label"&gt;Your vanity URL&lt;/label&gt;
&lt;div class="input-group mb-5"&gt;
&lt;span class="input-group-text" id="basic-addon3"&gt;https://example.com/users/&lt;/span&gt;
&lt;input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"/&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;

&lt;!--begin::Input group--&gt;
&lt;div class="input-group mb-5"&gt;
&lt;span class="input-group-text"&gt;$&lt;/span&gt;
&lt;input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"/&gt;
&lt;span class="input-group-text"&gt;.00&lt;/span&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;

&lt;!--begin::Input group--&gt;
&lt;div class="input-group mb-5"&gt;
&lt;input type="text" class="form-control" placeholder="Username" aria-label="Username"/&gt;
&lt;span class="input-group-text"&gt;@&lt;/span&gt;
&lt;input type="text" class="form-control" placeholder="Server" aria-label="Server"/&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;

&lt;!--begin::Input group--&gt;
&lt;div class="input-group"&gt;
&lt;span class="input-group-text"&gt;With textarea&lt;/span&gt;
&lt;textarea class="form-control" aria-label="With textarea"&gt;&lt;/textarea&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;</code>
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
                        <h1 class="anchor fw-bold mb-5" id="solid-style" data-kt-scroll-offset="50">
                            <a href="#solid-style"></a>Solid Style
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Input group-->
                                <div class="input-group input-group-solid mb-5">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                    <input type="text" class="form-control" placeholder="Username"
                                        aria-label="Username" aria-describedby="basic-addon1" />
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="input-group input-group-solid mb-5">
                                    <input type="text" class="form-control" placeholder="Recipient's username"
                                        aria-label="Recipient's username" aria-describedby="basic-addon2" />
                                    <span class="input-group-text" id="basic-addon2">@example.com</span>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <label for="basic-url" class="form-label">Your vanity URL</label>
                                <div class="input-group input-group-solid mb-5">
                                    <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                                    <input type="text" class="form-control" id="basic-url"
                                        aria-describedby="basic-addon3" />
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="input-group input-group-solid mb-5">
                                    <span class="input-group-text">$</span>
                                    <input type="text" class="form-control"
                                        aria-label="Amount (to the nearest dollar)" />
                                    <span class="input-group-text">.00</span>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="input-group input-group-solid mb-5">
                                    <input type="text" class="form-control" placeholder="Username"
                                        aria-label="Username" />
                                    <span class="input-group-text">@</span>
                                    <input type="text" class="form-control" placeholder="Server"
                                        aria-label="Server" />
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="input-group input-group-solid">
                                    <span class="input-group-text">With textarea</span>
                                    <textarea class="form-control" aria-label="With textarea"></textarea>
                                </div>
                                <!--end::Input group-->
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
<code class="language-html">&lt;!--begin::Input group--&gt;
&lt;div class="input-group input-group-solid mb-5"&gt;
&lt;span class="input-group-text" id="basic-addon1"&gt;@&lt;/span&gt;
&lt;input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"/&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;

&lt;!--begin::Input group--&gt;
&lt;div class="input-group input-group-solid mb-5"&gt;
&lt;input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2"/&gt;
&lt;span class="input-group-text" id="basic-addon2"&gt;@example.com&lt;/span&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;

&lt;!--begin::Input group--&gt;
&lt;label for="basic-url" class="form-label"&gt;Your vanity URL&lt;/label&gt;
&lt;div class="input-group input-group-solid mb-5"&gt;
&lt;span class="input-group-text" id="basic-addon3"&gt;https://example.com/users/&lt;/span&gt;
&lt;input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"/&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;

&lt;!--begin::Input group--&gt;
&lt;div class="input-group input-group-solid mb-5"&gt;
&lt;span class="input-group-text"&gt;$&lt;/span&gt;
&lt;input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"/&gt;
&lt;span class="input-group-text"&gt;.00&lt;/span&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;

&lt;!--begin::Input group--&gt;
&lt;div class="input-group input-group-solid mb-5"&gt;
&lt;input type="text" class="form-control" placeholder="Username" aria-label="Username"/&gt;
&lt;span class="input-group-text"&gt;@&lt;/span&gt;
&lt;input type="text" class="form-control" placeholder="Server" aria-label="Server"/&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;

&lt;!--begin::Input group--&gt;
&lt;div class="input-group input-group-solid"&gt;
&lt;span class="input-group-text"&gt;With textarea&lt;/span&gt;
&lt;textarea class="form-control" aria-label="With textarea"&gt;&lt;/textarea&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;</code>
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
                        <h1 class="anchor fw-bold mb-5" id="sizing" data-kt-scroll-offset="50">
                            <a href="#sizing"></a>Sizing
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Input group-->
                                <div class="input-group input-group-sm mb-5">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm" />
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="input-group mb-5">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default" />
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-lg" />
                                </div>
                                <!--end::Input group-->
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
<code class="language-html">&lt;!--begin::Input group--&gt;
&lt;div class="input-group input-group-sm mb-5"&gt;
&lt;span class="input-group-text" id="inputGroup-sizing-sm"&gt;Small&lt;/span&gt;
&lt;input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"/&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;

&lt;!--begin::Input group--&gt;
&lt;div class="input-group mb-5"&gt;
&lt;span class="input-group-text" id="inputGroup-sizing-default"&gt;Default&lt;/span&gt;
&lt;input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"/&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;

&lt;!--begin::Input group--&gt;
&lt;div class="input-group input-group-lg"&gt;
&lt;span class="input-group-text" id="inputGroup-sizing-lg"&gt;Large&lt;/span&gt;
&lt;input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg"/&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;</code>
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
                        <h1 class="anchor fw-bold mb-5" id="icons" data-kt-scroll-offset="50">
                            <a href="#icons"></a>Icons
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Input group-->
                                <div class="input-group mb-5">
                                    <span class="input-group-text" id="basic-addon1">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3"
                                                    d="M16.5 9C16.5 13.125 13.125 16.5 9 16.5C4.875 16.5 1.5 13.125 1.5 9C1.5 4.875 4.875 1.5 9 1.5C13.125 1.5 16.5 4.875 16.5 9Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M9 16.5C10.95 16.5 12.75 15.75 14.025 14.55C13.425 12.675 11.4 11.25 9 11.25C6.6 11.25 4.57499 12.675 3.97499 14.55C5.24999 15.75 7.05 16.5 9 16.5Z"
                                                    fill="currentColor" />
                                                <rect x="7" y="6" width="4" height="4"
                                                    rx="2" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <input type="text" class="form-control" placeholder="Username"
                                        aria-label="Username" aria-describedby="basic-addon1" />
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="input-group mb-5">
                                    <input type="text" class="form-control" placeholder="Recipient's username"
                                        aria-label="Recipient's username" aria-describedby="basic-addon2" />
                                    <span class="input-group-text" id="basic-addon2">
                                        <i class="fas fa-envelope-open-text fs-4"></i>
                                    </span>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="input-group mb-5">
                                    <span class="input-group-text" id="basic-addon3">
                                        <i class="las la-wallet fs-1"></i>
                                    </span>
                                    <input type="text" class="form-control" id="basic-url" placeholder="Website URL"
                                        aria-describedby="basic-addon3" />
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="input-group mb-5">
                                    <span class="input-group-text">
                                        <i class="bi bi-graph-down fs-2"></i>
                                    </span>
                                    <input type="text" class="form-control"
                                        placeholder="Amount (to the nearest dollar)" />
                                    <span class="input-group-text">.00</span>
                                </div>
                                <!--end::Input group-->
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
<code class="language-html">&lt;!--begin::Input group--&gt;
&lt;div class="input-group mb-5"&gt;
&lt;span class="input-group-text" id="basic-addon1"&gt;
&lt;!--begin::Svg Icon | path: icons/duotune/communication/com006.svg--&gt;
&lt;span class="svg-icon svg-icon-3x"&gt;
&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"&gt;
....
&lt;/svg&gt;
&lt;/span&gt;
&lt;!--end::Svg Icon--&gt;
&lt;/span&gt;
&lt;input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"/&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;

&lt;!--begin::Input group--&gt;
&lt;div class="input-group mb-5"&gt;
&lt;input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2"/&gt;
&lt;span class="input-group-text" id="basic-addon2"&gt;
&lt;i class="fas fa-envelope-open-text fs-4"&gt;&lt;/i&gt;
&lt;/span&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;

&lt;!--begin::Input group--&gt;
&lt;div class="input-group mb-5"&gt;
&lt;span class="input-group-text" id="basic-addon3"&gt;
&lt;i class="las la-wallet fs-1"&gt;&lt;/i&gt;
&lt;/span&gt;
&lt;input type="text" class="form-control" id="basic-url"  placeholder="Website URL" aria-describedby="basic-addon3"/&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;

&lt;!--begin::Input group--&gt;
&lt;div class="input-group mb-5"&gt;
&lt;span class="input-group-text"&gt;&lt;i class="bi bi-graph-down fs-2"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;input type="text" class="form-control" placeholder="Amount (to the nearest dollar)"/&gt;
&lt;span class="input-group-text"&gt;.00&lt;/span&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;</code>
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
                                <a href="#solid-style" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Solid Style</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#sizing" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Sizing</span>
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
