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
                        <div class="py-5">Buat kotak centang dan radio lintas-browser dan lintas perangkat yang konsisten
                            dengan komponen pemeriksaan kami yang sepenuhnya ditulis ulang.</div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="checkbox" data-kt-scroll-offset="50">
                            <a href="#checkbox"></a>Checkbox
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5 mb-5">
                            <div class="rounded border p-10">
                                <div class="mb-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault" />
                                        <label class="form-check-label" for="flexCheckDefault">Default checkbox</label>
                                    </div>
                                </div>
                                <div class="mb-0">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                            checked="checked" />
                                        <label class="form-check-label" for="flexCheckChecked">Checked checkbox</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-10">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="kt_checkbox_1_2" />
                                        <label class="form-check-label" for="kt_checkbox_1_2">Default state</label>
                                    </div>
                                </div>
                                <div class="mb-10">
                                    <label class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" />
                                        <span class="form-check-label">Without id linking</span>
                                    </label>
                                </div>
                                <div class="mb-10">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" id="kt_checkbox_1_3"
                                            checked="checked" />
                                        <label class="form-check-label" for="kt_checkbox_1_3">Checked state</label>
                                    </div>
                                </div>
                                <div class="mb-10">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" disabled="disabled"
                                            id="kt_checkbox_1_4" />
                                        <label class="form-check-label" for="kt_checkbox_1_4">Disabled checkbox</label>
                                    </div>
                                </div>
                                <!--begin::Code-->
                                <div class="py-0">
                                    <!--begin::Highlight-->
                                    <div class="highlight">
                                        <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px">
<code class="language-html">&lt;div class="form-check form-check-custom form-check-solid"&gt;
&lt;input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault"/&gt;
&lt;label class="form-check-label" for="flexCheckDefault"&gt;
Default checkbox
&lt;/label&gt;
&lt;/div&gt;

&lt;label class="form-check form-check-custom form-check-solid"&gt;
&lt;input class="form-check-input" type="checkbox" value="1"/&gt;
&lt;span class="form-check-label"&gt;
Without id linking
&lt;/span&gt;
&lt;/label&gt;

&lt;div class="form-check form-check-custom form-check-solid"&gt;
&lt;input class="form-check-input" type="checkbox" value="1" id="flexCheckChecked" checked="checked" /&gt;
&lt;label class="form-check-label" for="flexCheckChecked"&gt;
Checked checkbox
&lt;/label&gt;
&lt;/div&gt;

&lt;div class="form-check form-check-custom form-check-solid"&gt;
&lt;input class="form-check-input" type="checkbox" value="1" disabled id="flexCheckDisabled" /&gt;
&lt;label class="form-check-label" for="flexCheckDisabled"&gt;
Disabled checkbox
&lt;/label&gt;
&lt;/div&gt;</code>
</pre>
                                        </div>
                                    </div>
                                    <!--end::Highlight-->
                                </div>
                                <!--end::Code-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-10">
                                    <div class="form-check form-check-custom form-check-success form-check-solid">
                                        <input class="form-check-input" type="checkbox" value=""
                                            checked="checked" />
                                        <label class="form-check-label" for="">Success</label>
                                    </div>
                                </div>
                                <div class="mb-10">
                                    <div class="form-check form-check-custom form-check-danger form-check-solid">
                                        <input class="form-check-input" type="checkbox" value=""
                                            checked="checked" />
                                        <label class="form-check-label" for="">Danger</label>
                                    </div>
                                </div>
                                <div class="mb-10">
                                    <div class="form-check form-check-custom form-check-warning form-check-solid">
                                        <input class="form-check-input" type="checkbox" value=""
                                            checked="checked" />
                                        <label class="form-check-label" for="">Warning</label>
                                    </div>
                                </div>
                                <!--begin::Code-->
                                <div class="py-0">
                                    <!--begin::Highlight-->
                                    <div class="highlight">
                                        <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px">
<code class="language-html">&lt;div class="form-check form-check-custom form-check-success form-check-solid"&gt;
&lt;input class="form-check-input" type="checkbox" value="" checked /&gt;
&lt;label class="form-check-label" for=""&gt;
Success
&lt;/label&gt;
&lt;/div&gt;

&lt;div class="form-check form-check-custom form-check-danger form-check-solid"&gt;
&lt;input class="form-check-input" type="checkbox" value="" checked /&gt;
&lt;label class="form-check-label" for=""&gt;
Danger
&lt;/label&gt;
&lt;/div&gt;

&lt;div class="form-check form-check-custom form-check-warning form-check-solid"&gt;
&lt;input class="form-check-input" type="checkbox" value="" checked /&gt;
&lt;label class="form-check-label" for=""&gt;
Warning
&lt;/label&gt;
&lt;/div&gt;</code>
</pre>
                                        </div>
                                    </div>
                                    <!--end::Highlight-->
                                </div>
                                <!--end::Code-->
                            </div>
                        </div>
                        <!--end::Block-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-10">
                                    <div class="form-check form-check-custom form-check-solid form-check-lg">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckboxLg" />
                                        <label class="form-check-label" for="flexCheckboxLg">Large checkbox</label>
                                    </div>
                                </div>
                                <div class="mb-10">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckboxSm" />
                                        <label class="form-check-label" for="flexCheckboxSm">Default radio</label>
                                    </div>
                                </div>
                                <div class="mb-10">
                                    <div class="form-check form-check-custom form-check-solid form-check-sm">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexRadioLg" />
                                        <label class="form-check-label" for="flexRadioLg">Small checkbox</label>
                                    </div>
                                </div>
                                <!--begin::Code-->
                                <div class="py-0">
                                    <!--begin::Highlight-->
                                    <div class="highlight">
                                        <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px">
<code class="language-html">&lt;div class="form-check form-check-custom form-check-solid form-check-lg"&gt;
&lt;input class="form-check-input" type="checkbox" value="" id="flexCheckboxLg"/&gt;
&lt;label class="form-check-label" for="flexCheckboxLg"&gt;
Large checkbox
&lt;/label&gt;
&lt;/div&gt;

&lt;div class="form-check form-check-custom form-check-solid form-check-lg"&gt;
&lt;input class="form-check-input" type="radio" value="" id="flexCheckboxSm"  /&gt;
&lt;label class="form-check-label" for="flexCheckboxSm"&gt;
Large radio
&lt;/label&gt;
&lt;/div&gt;

&lt;div class="form-check form-check-custom form-check-solid form-check-sm"&gt;
&lt;input class="form-check-input" type="checkbox" value="" id="flexRadioLg"/&gt;
&lt;label class="form-check-label" for="flexRadioLg"&gt;
Small checkbox
&lt;/label&gt;
&lt;/div&gt;</code>
</pre>
                                        </div>
                                    </div>
                                    <!--end::Highlight-->
                                </div>
                                <!--end::Code-->
                            </div>
                        </div>
                        <!--end::Block-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-10 d-flex">
                                    <div class="form-check form-check-custom form-check-solid me-10">
                                        <input class="form-check-input h-30px w-30px" type="checkbox" value=""
                                            id="flexCheckbox30" />
                                        <label class="form-check-label" for="flexCheckbox30">40px</label>
                                    </div>
                                    <div class="form-check form-check-custom form-check-solid me-10">
                                        <input class="form-check-input h-40px w-40px" type="checkbox" value=""
                                            id="flexCheckbox40" />
                                        <label class="form-check-label" for="flexCheckbox40">40px</label>
                                    </div>
                                    <div class="form-check form-check-custom form-check-solid me-10">
                                        <input class="form-check-input h-50px w-50px" type="checkbox" value=""
                                            id="flexCheckbox50" />
                                        <label class="form-check-label" for="flexCheckbox50">50px</label>
                                    </div>
                                </div>
                                <!--begin::Code-->
                                <div class="py-0">
                                    <!--begin::Highlight-->
                                    <div class="highlight">
                                        <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px">
<code class="language-html">&lt;div class="form-check form-check-custom form-check-solid me-10"&gt;
&lt;input class="form-check-input h-30px w-30px" type="checkbox" value="" id="flexCheckbox30"/&gt;
&lt;label class="form-check-label" for="flexCheckbox30"&gt;
40px
&lt;/label&gt;
&lt;/div&gt;

&lt;div class="form-check form-check-custom form-check-solid me-10"&gt;
&lt;input class="form-check-input h-40px w-40px" type="checkbox" value="" id="flexCheckbox40"/&gt;
&lt;label class="form-check-label" for="flexCheckbox40"&gt;
40px
&lt;/label&gt;
&lt;/div&gt;

&lt;div class="form-check form-check-custom form-check-solid me-10"&gt;
&lt;input class="form-check-input h-50px w-50px" type="checkbox" value="" id="flexCheckbox50"/&gt;
&lt;label class="form-check-label" for="flexCheckbox50"&gt;
50px
&lt;/label&gt;
&lt;/div&gt;</code>
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
                        <h1 class="anchor fw-bold mb-5" id="radio" data-kt-scroll-offset="50">
                            <a href="#radio"></a>Radio
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5 mb-5">
                            <div class="rounded border p-10">
                                <div class="mb-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value=""
                                            id="flexCheckDefault1" name="radio2" />
                                        <label class="form-check-label" for="flexCheckDefault1">Default radio</label>
                                    </div>
                                </div>
                                <div class="mb-0">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value=""
                                            id="flexCheckChecked1" name="radio2" checked="checked" />
                                        <label class="form-check-label" for="flexCheckChecked1">Checked radio</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Block-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-10">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="radio" value=""
                                            id="kt_flexRadioDefault_1_2" />
                                        <label class="form-check-label" for="kt_flexRadioDefault_1_2">Default
                                            radio</label>
                                    </div>
                                </div>
                                <div class="mb-10">
                                    <label class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="radio" value="" />
                                        <span class="form-check-label">Without id linking</span>
                                    </label>
                                </div>
                                <div class="mb-10">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="radio" value=""
                                            id="kt_flexRadioChecked_1_3" checked="checked" />
                                        <label class="form-check-label" for="kt_flexRadioChecked_1_3">Checked
                                            radio</label>
                                    </div>
                                </div>
                                <div class="mb-10">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="radio" value=""
                                            disabled="disabled" id="kt_flexRadioDisabled_1_4" />
                                        <label class="form-check-label" for="kt_flexRadioDisabled_1_4">Disabled
                                            radio</label>
                                    </div>
                                </div>
                                <!--begin::Code-->
                                <div class="py-0">
                                    <!--begin::Highlight-->
                                    <div class="highlight">
                                        <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px">
<code class="language-html">&lt;div class="form-check form-check-custom form-check-solid"&gt;
&lt;input class="form-check-input" type="radio" value="" id="flexRadioDefault"/&gt;
&lt;label class="form-check-label" for="flexRadioDefault"&gt;
Default radio
&lt;/label&gt;
&lt;/div&gt;

&lt;label class="form-check form-check-custom form-check-solid"&gt;
&lt;input class="form-check-input" type="radio" value=""/&gt;
&lt;span class="form-check-label"&gt;
Without id linking
&lt;/span&gt;
&lt;/label&gt;

&lt;div class="form-check form-check-custom form-check-solid"&gt;
&lt;input class="form-check-input" type="radio" value="" id="flexRadioChecked" checked="checked" /&gt;
&lt;label class="form-check-label" for="flexRadioChecked"&gt;
Checked radio
&lt;/label&gt;
&lt;/div&gt;

&lt;div class="form-check form-check-custom form-check-solid"&gt;
&lt;input class="form-check-input" type="radio" value="" disabled id="flexRadioDisabled"/&gt;
&lt;label class="form-check-label" for="flexRadioDisabled"&gt;
Disabled radio
&lt;/label&gt;
&lt;/div&gt;</code>
</pre>
                                        </div>
                                    </div>
                                    <!--end::Highlight-->
                                </div>
                                <!--end::Code-->
                            </div>
                        </div>
                        <!--end::Block-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-10">
                                    <div class="form-check form-check-custom form-check-success form-check-solid">
                                        <input class="form-check-input" type="radio" value="" checked="checked"
                                            id="flexCheckboxLg" />
                                        <label class="form-check-label" for="flexCheckboxLg">Success</label>
                                    </div>
                                </div>
                                <div class="mb-10">
                                    <div class="form-check form-check-custom form-check-danger form-check-solid">
                                        <input class="form-check-input" type="radio" value="" checked="checked"
                                            id="flexCheckboxSm" />
                                        <label class="form-check-label" for="flexCheckboxSm">Danger</label>
                                    </div>
                                </div>
                                <div class="mb-10">
                                    <div class="form-check form-check-custom form-check-warning form-check-solid">
                                        <input class="form-check-input" type="radio" value="" checked="checked"
                                            id="flexRadioLg" />
                                        <label class="form-check-label" for="flexRadioLg">Warning</label>
                                    </div>
                                </div>
                                <!--begin::Code-->
                                <div class="py-0">
                                    <!--begin::Highlight-->
                                    <div class="highlight">
                                        <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px">
<code class="language-html">&lt;div class="form-check form-check-custom form-check-success form-check-solid"&gt;
&lt;input class="form-check-input" type="radio" value="" checked id="flexCheckboxLg"/&gt;
&lt;label class="form-check-label" for="flexCheckboxLg"&gt;
Success
&lt;/label&gt;
&lt;/div&gt;

&lt;div class="form-check form-check-custom form-check-danger form-check-solid"&gt;
&lt;input class="form-check-input" type="radio" value="" checked id="flexCheckboxSm"  /&gt;
&lt;label class="form-check-label" for="flexCheckboxSm"&gt;
Danger
&lt;/label&gt;
&lt;/div&gt;

&lt;div class="form-check form-check-custom form-check-warning form-check-solid"&gt;
&lt;input class="form-check-input" type="radio" value="" checked id="flexRadioLg"/&gt;
&lt;label class="form-check-label" for="flexRadioLg"&gt;
Warning
&lt;/label&gt;
&lt;/div&gt;</code>
</pre>
                                        </div>
                                    </div>
                                    <!--end::Highlight-->
                                </div>
                                <!--end::Code-->
                            </div>
                        </div>
                        <!--end::Block-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-10">
                                    <div class="form-check form-check-custom form-check-solid form-check-lg">
                                        <input class="form-check-input" type="radio" value=""
                                            id="flexCheckboxLg" />
                                        <label class="form-check-label" for="flexCheckboxLg">Large radio</label>
                                    </div>
                                </div>
                                <div class="mb-10">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="radio" value=""
                                            id="flexCheckboxSm" />
                                        <label class="form-check-label" for="flexCheckboxSm">Large radio</label>
                                    </div>
                                </div>
                                <div class="mb-10">
                                    <div class="form-check form-check-custom form-check-solid form-check-sm">
                                        <input class="form-check-input" type="radio" value=""
                                            id="flexRadioLg" />
                                        <label class="form-check-label" for="flexRadioLg">Small radio</label>
                                    </div>
                                </div>
                                <!--begin::Code-->
                                <div class="py-0">
                                    <!--begin::Highlight-->
                                    <div class="highlight">
                                        <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px">
<code class="language-html">&lt;div class="form-check form-check-custom form-check-solid"&gt;
&lt;input class="form-check-input" type="radio" value="" id="flexCheckboxLg"/&gt;
&lt;label class="form-check-label" for="flexCheckboxLg"&gt;
Large checkbox
&lt;/label&gt;
&lt;/div&gt;

&lt;div class="form-check form-check-custom form-check-solid"&gt;
&lt;input class="form-check-input" type="radio" value="" id="flexCheckboxSm"  /&gt;
&lt;label class="form-check-label" for="flexCheckboxSm"&gt;
Large radio
&lt;/label&gt;
&lt;/div&gt;

&lt;div class="form-check form-check-custom form-check-solid"&gt;
&lt;input class="form-check-input" type="radio" value="" id="flexRadioLg"/&gt;
&lt;label class="form-check-label" for="flexRadioLg"&gt;
Small checkbox
&lt;/label&gt;
&lt;/div&gt;</code>
</pre>
                                        </div>
                                    </div>
                                    <!--end::Highlight-->
                                </div>
                                <!--end::Code-->
                            </div>
                        </div>
                        <!--end::Block-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-10 d-flex">
                                    <div class="form-check form-check-custom form-check-solid me-10">
                                        <input class="form-check-input h-30px w-30px" type="radio" value=""
                                            id="flexCheckbox30" />
                                        <label class="form-check-label" for="flexCheckbox30">40px</label>
                                    </div>
                                    <div class="form-check form-check-custom form-check-solid me-10">
                                        <input class="form-check-input h-40px w-40px" type="radio" value=""
                                            id="flexCheckbox40" />
                                        <label class="form-check-label" for="flexCheckbox40">40px</label>
                                    </div>
                                    <div class="form-check form-check-custom form-check-solid me-10">
                                        <input class="form-check-input h-50px w-50px" type="radio" value=""
                                            id="flexCheckbox50" />
                                        <label class="form-check-label" for="flexCheckbox50">50px</label>
                                    </div>
                                </div>
                                <!--begin::Code-->
                                <div class="py-0">
                                    <!--begin::Highlight-->
                                    <div class="highlight">
                                        <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px">
<code class="language-html">&lt;div class="form-check form-check-custom form-check-solid me-10"&gt;
&lt;input class="form-check-input h-30px w-30px" type="checkbox" value="" id="flexCheckbox30"/&gt;
&lt;label class="form-check-label" for="flexCheckbox30"&gt;
40px
&lt;/label&gt;
&lt;/div&gt;

&lt;div class="form-check form-check-custom form-check-solid me-10"&gt;
&lt;input class="form-check-input h-40px w-40px" type="checkbox" value="" id="flexCheckbox40"/&gt;
&lt;label class="form-check-label" for="flexCheckbox40"&gt;
40px
&lt;/label&gt;
&lt;/div&gt;

&lt;div class="form-check form-check-custom form-check-solid me-10"&gt;
&lt;input class="form-check-input h-50px w-50px" type="checkbox" value="" id="flexCheckbox50"/&gt;
&lt;label class="form-check-label" for="flexCheckbox50"&gt;
50px
&lt;/label&gt;
&lt;/div&gt;

&lt;div class="form-check form-check-custom form-check-solid me-10"&gt;
&lt;input class="form-check-input h-30px w-30px" type="radio" value="" id="flexRadio30"/&gt;
&lt;label class="form-check-label" for="flexRadio30"&gt;
40px
&lt;/label&gt;
&lt;/div&gt;

&lt;div class="form-check form-check-custom form-check-solid me-10"&gt;
&lt;input class="form-check-input h-40px w-40px" type="radio" value="" id="flexRadio40"/&gt;
&lt;label class="form-check-label" for="flexRadio40"&gt;
40px
&lt;/label&gt;
&lt;/div&gt;

&lt;div class="form-check form-check-custom form-check-solid me-10"&gt;
&lt;input class="form-check-input h-50px w-50px" type="radio" value="" id="flexRadio50"/&gt;
&lt;label class="form-check-label" for="flexRadio50"&gt;
50px
&lt;/label&gt;
&lt;/div&gt;</code>
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
                    <div class="pt-10">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="switch" data-kt-scroll-offset="50">
                            <a href="#switch"></a>Switch
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5 mb-5">
                            <div class="rounded border p-10">
                                <div class="form-check form-switch mb-10">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="flexSwitchCheckDefault" />
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox
                                        input</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="flexSwitchCheckChecked" checked="checked" />
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox
                                        input</label>
                                </div>
                            </div>
                        </div>
                        <!--end::Block-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-10">
                                    <div class="form-check form-switch form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="kt_flexSwitchDefault_1_2" />
                                        <label class="form-check-label" for="kt_flexSwitchDefault_1_2">Default
                                            switch</label>
                                    </div>
                                </div>
                                <div class="mb-10">
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" />
                                        <span class="form-check-label">Without id linking</span>
                                    </label>
                                </div>
                                <div class="mb-10">
                                    <div class="form-check form-switch form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="kt_flexSwitchChecked_1_3" checked="checked" />
                                        <label class="form-check-label" for="kt_flexSwitchChecked_1_3">Checked
                                            switch</label>
                                    </div>
                                </div>
                                <div class="mb-10">
                                    <div class="form-check form-switch form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="kt_flexSwitchDisabled_1_4" disabled="disabled" checked="checked" />
                                        <label class="form-check-label" for="kt_flexSwitchDisabled_1_4">Disabled
                                            switch</label>
                                    </div>
                                </div>
                                <!--begin::Code-->
                                <div class="py-0">
                                    <!--begin::Highlight-->
                                    <div class="highlight">
                                        <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px">
<code class="language-html">&lt;div class="form-check form-switch form-check-custom form-check-solid"&gt;
&lt;input class="form-check-input" type="checkbox" value="" id="flexSwitchDefault"/&gt;
&lt;label class="form-check-label" for="flexSwitchDefault"&gt;
Default switch
&lt;/label&gt;
&lt;/div&gt;

&lt;label class="form-check form-switch form-check-custom form-check-solid"&gt;
&lt;input class="form-check-input" type="checkbox" value=""/&gt;
&lt;span class="form-check-label""&gt;
Without id linking
&lt;/span&gt;
&lt;/label&gt;

&lt;div class="form-check form-switch form-check-custom form-check-solid"&gt;
&lt;input class="form-check-input" type="checkbox" value="" id="flexSwitchChecked" checked="checked" /&gt;
&lt;label class="form-check-label" for="flexSwitchChecked"&gt;
Checked switch
&lt;/label&gt;
&lt;/div&gt;

&lt;div class="form-check form-switch form-check-custom form-check-solid"&gt;
&lt;input class="form-check-input" type="checkbox" value="" id="flexSwitchDisabled" disabled checked="checked" /&gt;
&lt;label class="form-check-label" for="flexSwitchDisabled"&gt;
Disabled switch
&lt;/label&gt;
&lt;/div&gt;</code>
</pre>
                                        </div>
                                    </div>
                                    <!--end::Highlight-->
                                </div>
                                <!--end::Code-->
                            </div>
                        </div>
                        <!--end::Block-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-10 d-flex">
                                    <div class="form-check form-switch form-check-custom form-check-solid me-10">
                                        <input class="form-check-input h-20px w-30px" type="checkbox" value=""
                                            id="flexSwitch20x30" />
                                        <label class="form-check-label" for="flexSwitch20x30">20px x 30px</label>
                                    </div>
                                    <div class="form-check form-switch form-check-custom form-check-solid me-10">
                                        <input class="form-check-input h-30px w-50px" type="checkbox" value=""
                                            id="flexSwitch30x50" />
                                        <label class="form-check-label" for="flexSwitch30x50">30px X 50px</label>
                                    </div>
                                    <div class="form-check form-switch form-check-custom form-check-solid me-10">
                                        <input class="form-check-input h-40px w-60px" type="checkbox" value=""
                                            id="flexSwitch40x60" />
                                        <label class="form-check-label" for="flexSwitch40x60">40px X 60px</label>
                                    </div>
                                </div>
                                <!--begin::Code-->
                                <div class="py-0">
                                    <!--begin::Highlight-->
                                    <div class="highlight">
                                        <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px">
<code class="language-html">&lt;div class="form-check form-switch form-check-custom form-check-solid me-10"&gt;
&lt;input class="form-check-input h-20px w-30px" type="checkbox" value="" id="flexSwitch20x30"/&gt;
&lt;label class="form-check-label" for="flexSwitch20x30"&gt;
20px x 30px
&lt;/label&gt;
&lt;/div&gt;

&lt;div class="form-check form-switch form-check-custom form-check-solid me-10"&gt;
&lt;input class="form-check-input h-30px w-50px" type="checkbox" value="" id="flexSwitch30x50"/&gt;
&lt;label class="form-check-label" for="flexSwitch30x50"&gt;
30px X 50px
&lt;/label&gt;
&lt;/div&gt;

&lt;div class="form-check form-switch form-check-custom form-check-solid me-10"&gt;
&lt;input class="form-check-input h-40px w-60px" type="checkbox" value="" id="flexSwitch40x60"/&gt;
&lt;label class="form-check-label" for="flexSwitch40x60"&gt;
40px X 60px
&lt;/label&gt;
&lt;/div&gt;</code>
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
                                <a href="#checkbox" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Checkbox</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#radio" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Radio</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#switch" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Switch</span>
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
