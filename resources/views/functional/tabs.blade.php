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
                        <div class="py-5">Tab adalah bagian dari program atau halaman HTML yang digunakan untuk
                            menampilkan satu bagian tertentu dan menyembunyikan bagian lain yang tidak diperlukan. Untuk
                            menampilkan tab dan isinya, pertama kita harus membuat tombol tabnya dengan div atau bisa juga
                            button. Kita bisa memilih isi tab yang akan ditambilkan dengan tombol tersebut.</div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="line-tabs" data-kt-scroll-offset="50">
                            <a href="#line-tabs"></a>Line Tabs
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_pane_1">Link 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_2">Link 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_3">Link 3</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel">Et et
                                        consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui
                                        minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam
                                        sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure
                                        incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do
                                        nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit.
                                    </div>
                                    <div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel">Nulla est ullamco ut irure
                                        incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis
                                        labore cillum sint adipisicing exercitation ipsum. Nostrud ut anim non exercitation
                                        velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna
                                        consequat voluptate minim amet aliquip ipsum aute laboris nisi. Labore labore veniam
                                        irure irure ipsum pariatur mollit magna in cupidatat dolore magna irure esse tempor
                                        ad mollit. Dolore commodo nulla minim amet ipsum officia consectetur amet ullamco
                                        voluptate nisi commodo ea sit eu.</div>
                                    <div class="tab-pane fade" id="kt_tab_pane_3" role="tabpanel">Sint sit mollit irure quis
                                        est nostrud cillum consequat Lorem esse do quis dolor esse fugiat sunt do. Eu ex
                                        commodo veniam Lorem aliquip laborum occaecat qui Lorem esse mollit dolore anim
                                        cupidatat. eserunt officia id Lorem nostrud aute id commodo elit eiusmod enim irure
                                        amet eiusmod qui reprehenderit nostrud tempor. Fugiat ipsum excepteur in aliqua non
                                        et quis aliquip ad irure in labore cillum elit enim. Consequat aliquip incididunt
                                        ipsum et minim laborum laborum laborum et cillum labore. Deserunt adipisicing cillum
                                        id nulla minim nostrud labore eiusmod et amet.</div>
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
<code class="language-html">&lt;ul class="nav nav-tabs nav-line-tabs mb-5 fs-6"&gt;
&lt;li class="nav-item"&gt;
&lt;a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_pane_1"&gt;Link 1&lt;/a&gt;
&lt;/li&gt;
&lt;li class="nav-item"&gt;
&lt;a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_2"&gt;Link 2&lt;/a&gt;
&lt;/li&gt;
&lt;li class="nav-item"&gt;
&lt;a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_3"&gt;Link 3&lt;/a&gt;
&lt;/li&gt;
&lt;/ul&gt;

&lt;div class="tab-content" id="myTabContent"&gt;
&lt;div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel"&gt;
...
&lt;/div&gt;
&lt;div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel"&gt;
...
&lt;/div&gt;
&lt;div class="tab-pane fade" id="kt_tab_pane_3" role="tabpanel"&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="tine-tabs-2x" data-kt-scroll-offset="50">
                            <a href="#tine-tabs-2x"></a>Line Tabs 2x
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_pane_4">Link 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_5">Link 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_6">Link 3</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="kt_tab_pane_4" role="tabpanel">Et et
                                        consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui
                                        minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam
                                        sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure
                                        incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do
                                        nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit.
                                    </div>
                                    <div class="tab-pane fade" id="kt_tab_pane_5" role="tabpanel">Nulla est ullamco ut
                                        irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna
                                        duis labore cillum sint adipisicing exercitation ipsum. Nostrud ut anim non
                                        exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit
                                        ullamco magna consequat voluptate minim amet aliquip ipsum aute laboris nisi. Labore
                                        labore veniam irure irure ipsum pariatur mollit magna in cupidatat dolore magna
                                        irure esse tempor ad mollit. Dolore commodo nulla minim amet ipsum officia
                                        consectetur amet ullamco voluptate nisi commodo ea sit eu.</div>
                                    <div class="tab-pane fade" id="kt_tab_pane_6" role="tabpanel">Sint sit mollit irure
                                        quis est nostrud cillum consequat Lorem esse do quis dolor esse fugiat sunt do. Eu
                                        ex commodo veniam Lorem aliquip laborum occaecat qui Lorem esse mollit dolore anim
                                        cupidatat. eserunt officia id Lorem nostrud aute id commodo elit eiusmod enim irure
                                        amet eiusmod qui reprehenderit nostrud tempor. Fugiat ipsum excepteur in aliqua non
                                        et quis aliquip ad irure in labore cillum elit enim. Consequat aliquip incididunt
                                        ipsum et minim laborum laborum laborum et cillum labore. Deserunt adipisicing cillum
                                        id nulla minim nostrud labore eiusmod et amet.</div>
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
                                    <pre class="language-html">
<code class="language-html">&lt;ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6"&gt;
&lt;li class="nav-item"&gt;
&lt;a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_pane_4"&gt;Link 1&lt;/a&gt;
&lt;/li&gt;
&lt;li class="nav-item"&gt;
&lt;a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_5"&gt;Link 2&lt;/a&gt;
&lt;/li&gt;
&lt;li class="nav-item"&gt;
&lt;a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_6"&gt;Link 3&lt;/a&gt;
&lt;/li&gt;
&lt;/ul&gt;

&lt;div class="tab-content" id="myTabContent"&gt;
&lt;div class="tab-pane fade show active" id="kt_tab_pane_4" role="tabpanel"&gt;
...
&lt;/div&gt;
&lt;div class="tab-pane fade" id="kt_tab_pane_5" role="tabpanel"&gt;
...
&lt;/div&gt;
&lt;div class="tab-pane fade" id="kt_tab_pane_6" role="tabpanel"&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="tabs-with-dropdowns" data-kt-scroll-offset="50">
                            <a href="#tabs-with-dropdowns"></a>Tabs with Dropdowns
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_pane_7">Link 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_8">Link 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_9">Link 3</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
                                            role="button" aria-expanded="false">Dropdown</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" data-bs-toggle="tab"
                                                    href="#kt_tab_pane_10">Action</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" data-bs-toggle="tab"
                                                    href="#kt_tab_pane_11">Another action</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" data-bs-toggle="tab"
                                                    href="#kt_tab_pane_12">Something else here</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" data-bs-toggle="tab"
                                                    href="#kt_tab_pane_13">Separated link</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="kt_tab_pane_7" role="tabpanel">Et et
                                        consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui
                                        minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam
                                        sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure
                                        incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do
                                        nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit.
                                    </div>
                                    <div class="tab-pane fade" id="kt_tab_pane_8" role="tabpanel">Nulla est ullamco ut
                                        irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna
                                        duis labore cillum sint adipisicing exercitation ipsum. Nostrud ut anim non
                                        exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit
                                        ullamco magna consequat voluptate minim amet aliquip ipsum aute laboris nisi. Labore
                                        labore veniam irure irure ipsum pariatur mollit magna in cupidatat dolore magna
                                        irure esse tempor ad mollit. Dolore commodo nulla minim amet ipsum officia
                                        consectetur amet ullamco voluptate nisi commodo ea sit eu.</div>
                                    <div class="tab-pane fade" id="kt_tab_pane_9" role="tabpanel">Sint sit mollit irure
                                        quis est nostrud cillum consequat Lorem esse do quis dolor esse fugiat sunt do. Eu
                                        ex commodo veniam Lorem aliquip laborum occaecat qui Lorem esse mollit dolore anim
                                        cupidatat. eserunt officia id Lorem nostrud aute id commodo elit eiusmod enim irure
                                        amet eiusmod qui reprehenderit nostrud tempor. Fugiat ipsum excepteur in aliqua non
                                        et quis aliquip ad irure in labore cillum elit enim. Consequat aliquip incididunt
                                        ipsum et minim laborum laborum laborum et cillum labore. Deserunt adipisicing cillum
                                        id nulla minim nostrud labore eiusmod et amet.</div>
                                    <div class="tab-pane fade" id="kt_tab_pane_10" role="tabpanel">Et et consectetur
                                        ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat
                                        veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit
                                        dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non
                                        esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non
                                        est eiusmod tempor incididunt tempor dolor ipsum in qui sit.</div>
                                    <div class="tab-pane fade" id="kt_tab_pane_11" role="tabpanel">Nulla est ullamco ut
                                        irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna
                                        duis labore cillum sint adipisicing exercitation ipsum. Nostrud ut anim non
                                        exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit
                                        ullamco magna consequat voluptate minim amet aliquip ipsum aute laboris nisi. Labore
                                        labore veniam irure irure ipsum pariatur mollit magna in cupidatat dolore magna
                                        irure esse tempor ad mollit. Dolore commodo nulla minim amet ipsum officia
                                        consectetur amet ullamco voluptate nisi commodo ea sit eu.</div>
                                    <div class="tab-pane fade" id="kt_tab_pane_12" role="tabpanel">Sint sit mollit irure
                                        quis est nostrud cillum consequat Lorem esse do quis dolor esse fugiat sunt do. Eu
                                        ex commodo veniam Lorem aliquip laborum occaecat qui Lorem esse mollit dolore anim
                                        cupidatat. eserunt officia id Lorem nostrud aute id commodo elit eiusmod enim irure
                                        amet eiusmod qui reprehenderit nostrud tempor. Fugiat ipsum excepteur in aliqua non
                                        et quis aliquip ad irure in labore cillum elit enim. Consequat aliquip incididunt
                                        ipsum et minim laborum laborum laborum et cillum labore. Deserunt adipisicing cillum
                                        id nulla minim nostrud labore eiusmod et amet.</div>
                                    <div class="tab-pane fade" id="kt_tab_pane_13" role="tabpanel">Et et consectetur
                                        ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat
                                        veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit
                                        dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non
                                        esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non
                                        est eiusmod tempor incididunt tempor dolor ipsum in qui sit.</div>
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
                                    <pre class="language-html">
<code class="language-html">&lt;ul class="nav nav-tabs nav-line-tabs mb-5 fs-6"&gt;
&lt;li class="nav-item"&gt;
&lt;a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_pane_7"&gt;Link 1&lt;/a&gt;
&lt;/li&gt;
&lt;li class="nav-item"&gt;
&lt;a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_8"&gt;Link 2&lt;/a&gt;
&lt;/li&gt;
&lt;li class="nav-item"&gt;
&lt;a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_9"&gt;Link 3&lt;/a&gt;
&lt;/li&gt;
&lt;li class="nav-item dropdown"&gt;
&lt;a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"&gt;Dropdown&lt;/a&gt;
&lt;ul class="dropdown-menu"&gt;
&lt;li&gt;&lt;a class="nav-link dropdown-item" data-bs-toggle="tab" href="#kt_tab_pane_10"&gt;Action&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/li&gt;
&lt;/ul&gt;

&lt;div class="tab-content" id="myTabContent"&gt;
&lt;div class="tab-pane fade show active" id="kt_tab_pane_7" role="tabpanel"&gt;
...
&lt;/div&gt;
&lt;div class="tab-pane fade" id="kt_tab_pane_8" role="tabpanel"&gt;
...
&lt;/div&gt;
&lt;div class="tab-pane fade" id="kt_tab_pane_9" role="tabpanel"&gt;
...
&lt;/div&gt;
&lt;div class="tab-pane fade show active" id="kt_tab_pane_10" role="tabpanel"&gt;
...
&lt;/div&gt;
&lt;div class="tab-pane fade" id="kt_tab_pane_11" role="tabpanel"&gt;
...
&lt;/div&gt;
&lt;div class="tab-pane fade" id="kt_tab_pane_12" role="tabpanel"&gt;
...
&lt;/div&gt;
&lt;div class="tab-pane fade" id="kt_tab_pane_13" role="tabpanel"&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="card-tabs" data-kt-scroll-offset="50">
                            <a href="#card-tabs"></a>Card Tabs
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="card shadow">
                                    <div class="card-header card-header-stretch">
                                        <h3 class="card-title">Title</h3>
                                        <div class="card-toolbar">
                                            <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-bs-toggle="tab"
                                                        href="#kt_tab_pane_7">Link 1</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_8">Link
                                                        2</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_9">Link
                                                        3</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="kt_tab_pane_7" role="tabpanel">Et
                                                et consectetur ipsum labore excepteur est proident excepteur ad velit
                                                occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua
                                                enim pariatur veniam sunt est aute sit dolor anim. Velit non irure
                                                adipisicing aliqua ullamco irure incididunt irure non esse consectetur
                                                nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est
                                                eiusmod tempor incididunt tempor dolor ipsum in qui sit.</div>
                                            <div class="tab-pane fade" id="kt_tab_pane_8" role="tabpanel">Nulla est
                                                ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim
                                                reprehenderit. Magna duis labore cillum sint adipisicing exercitation ipsum.
                                                Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo
                                                esse dolore fugiat sint velit ullamco magna consequat voluptate minim amet
                                                aliquip ipsum aute laboris nisi. Labore labore veniam irure irure ipsum
                                                pariatur mollit magna in cupidatat dolore magna irure esse tempor ad mollit.
                                                Dolore commodo nulla minim amet ipsum officia consectetur amet ullamco
                                                voluptate nisi commodo ea sit eu.</div>
                                            <div class="tab-pane fade" id="kt_tab_pane_9" role="tabpanel">Sint sit mollit
                                                irure quis est nostrud cillum consequat Lorem esse do quis dolor esse fugiat
                                                sunt do. Eu ex commodo veniam Lorem aliquip laborum occaecat qui Lorem esse
                                                mollit dolore anim cupidatat. eserunt officia id Lorem nostrud aute id
                                                commodo elit eiusmod enim irure amet eiusmod qui reprehenderit nostrud
                                                tempor. Fugiat ipsum excepteur in aliqua non et quis aliquip ad irure in
                                                labore cillum elit enim. Consequat aliquip incididunt ipsum et minim laborum
                                                laborum laborum et cillum labore. Deserunt adipisicing cillum id nulla minim
                                                nostrud labore eiusmod et amet.</div>
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
<code class="language-html">&lt;div class="card "&gt;
&lt;div class="card-header card-header-stretch"&gt;
&lt;h3 class="card-title"&gt;Title&lt;/h3&gt;
&lt;div class="card-toolbar"&gt;
&lt;ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0"&gt;
&lt;li class="nav-item"&gt;
&lt;a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_pane_7"&gt;Link 1&lt;/a&gt;
&lt;/li&gt;
&lt;li class="nav-item"&gt;
&lt;a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_8"&gt;Link 2&lt;/a&gt;
&lt;/li&gt;
&lt;li class="nav-item"&gt;
&lt;a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_9"&gt;Link 3&lt;/a&gt;
&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="card-body"&gt;
&lt;div class="tab-content" id="myTabContent"&gt;
&lt;div class="tab-pane fade show active" id="kt_tab_pane_7" role="tabpanel"&gt;
....
&lt;/div&gt;

&lt;div class="tab-pane fade" id="kt_tab_pane_8" role="tabpanel"&gt;
...
&lt;/div&gt;

&lt;div class="tab-pane fade" id="kt_tab_pane_9" role="tabpanel"&gt;
...
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
                        <h1 class="anchor fw-bold mb-5" id="scrollable-tabs" data-kt-scroll-offset="50">
                            <a href="#scrollable-tabs"></a>Scrollable Tabs
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-5 hover-scroll-x">
                                    <div class="d-grid">
                                        <ul class="nav nav-tabs flex-nowrap text-nowrap">
                                            <li class="nav-item">
                                                <a class="nav-link active btn btn-active-light btn-color-gray-600 btn-active-color-primary rounded-bottom-0"
                                                    data-bs-toggle="tab" href="#kt_tab_pane_1">Long Link 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-primary rounded-bottom-0"
                                                    data-bs-toggle="tab" href="#kt_tab_pane_2">Long Link 2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-primary rounded-bottom-0"
                                                    data-bs-toggle="tab" href="#kt_tab_pane_3">Long Link 3</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-primary rounded-bottom-0"
                                                    data-bs-toggle="tab" href="#kt_tab_pane_4">Long Link 4</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-primary rounded-bottom-0"
                                                    data-bs-toggle="tab" href="#kt_tab_pane_5">Long Link 5</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-primary rounded-bottom-0"
                                                    data-bs-toggle="tab" href="#kt_tab_pane_6">Long Link 6</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-primary rounded-bottom-0"
                                                    data-bs-toggle="tab" href="#kt_tab_pane_7">Long Link 7</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-primary rounded-bottom-0"
                                                    data-bs-toggle="tab" href="#kt_tab_pane_8">Long Link 8</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-primary rounded-bottom-0"
                                                    data-bs-toggle="tab" href="#kt_tab_pane_9">Long Link 9</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-primary rounded-bottom-0"
                                                    data-bs-toggle="tab" href="#kt_tab_pane_10">Long Link 10</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel">Et et
                                        consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui
                                        minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam
                                        sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure
                                        incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do
                                        nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit.
                                    </div>
                                    <div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel">Nulla est ullamco ut
                                        irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna
                                        duis labore cillum sint adipisicing exercitation ipsum. Nostrud ut anim non
                                        exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit
                                        ullamco magna consequat voluptate minim amet aliquip ipsum aute laboris nisi. Labore
                                        labore veniam irure irure ipsum pariatur mollit magna in cupidatat dolore magna
                                        irure esse tempor ad mollit. Dolore commodo nulla minim amet ipsum officia
                                        consectetur amet ullamco voluptate nisi commodo ea sit eu.</div>
                                    <div class="tab-pane fade" id="kt_tab_pane_3" role="tabpanel">Sint sit mollit irure
                                        quis est nostrud cillum consequat Lorem esse do quis dolor esse fugiat sunt do. Eu
                                        ex commodo veniam Lorem aliquip laborum occaecat qui Lorem esse mollit dolore anim
                                        cupidatat. eserunt officia id Lorem nostrud aute id commodo elit eiusmod enim irure
                                        amet eiusmod qui reprehenderit nostrud tempor. Fugiat ipsum excepteur in aliqua non
                                        et quis aliquip ad irure in labore cillum elit enim. Consequat aliquip incididunt
                                        ipsum et minim laborum laborum laborum et cillum labore. Deserunt adipisicing cillum
                                        id nulla minim nostrud labore eiusmod et amet.</div>
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
                                    <pre class="language-html">
<code class="language-html">&lt;div class="mb-5 hover-scroll-x"&gt;
&lt;div class="d-grid"&gt;
&lt;ul class="nav nav-tabs flex-nowrap text-nowrap"&gt;
&lt;li class="nav-item"&gt;
&lt;a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-primary rounded-bottom-0" data-bs-toggle="tab" href="#kt_tab_pane_1"&gt;Long Link 1&lt;/a&gt;
&lt;/li&gt;
&lt;li class="nav-item"&gt;
&lt;a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-primary rounded-bottom-0" data-bs-toggle="tab" href="#kt_tab_pane_1"&gt;Long Link 2&lt;/a&gt;
&lt;/li&gt;
...
&lt;/ul&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class="tab-content" id="myTabContent"&gt;
&lt;div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel"&gt;
...
&lt;/div&gt;
&lt;div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel"&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="vertical-tabs" data-kt-scroll-offset="50">
                            <a href="#vertical-tabs"></a>Vertical Tabs
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="d-flex flex-column flex-md-row rounded border p-10">
                                <ul class="nav nav-tabs nav-pills border-0 flex-row flex-md-column me-5 mb-3 mb-md-0 fs-6">
                                    <li class="nav-item w-md-200px me-0">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#kt_vtab_pane_1">Link 1</a>
                                    </li>
                                    <li class="nav-item w-md-200px me-0">
                                        <a class="nav-link" data-bs-toggle="tab" href="#kt_vtab_pane_2">Link 2</a>
                                    </li>
                                    <li class="nav-item w-md-200px">
                                        <a class="nav-link" data-bs-toggle="tab" href="#kt_vtab_pane_3">Link 3</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="kt_vtab_pane_1" role="tabpanel">Et et
                                        consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui
                                        minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam
                                        sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure
                                        incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do
                                        nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit.
                                    </div>
                                    <div class="tab-pane fade" id="kt_vtab_pane_2" role="tabpanel">Nulla est ullamco ut
                                        irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna
                                        duis labore cillum sint adipisicing exercitation ipsum. Nostrud ut anim non
                                        exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit
                                        ullamco magna consequat voluptate minim amet aliquip ipsum aute laboris nisi. Labore
                                        labore veniam irure irure ipsum pariatur mollit magna in cupidatat dolore magna
                                        irure esse tempor ad mollit. Dolore commodo nulla minim amet ipsum officia
                                        consectetur amet ullamco voluptate nisi commodo ea sit eu.</div>
                                    <div class="tab-pane fade" id="kt_vtab_pane_3" role="tabpanel">Sint sit mollit irure
                                        quis est nostrud cillum consequat Lorem esse do quis dolor esse fugiat sunt do. Eu
                                        ex commodo veniam Lorem aliquip laborum occaecat qui Lorem esse mollit dolore anim
                                        cupidatat. eserunt officia id Lorem nostrud aute id commodo elit eiusmod enim irure
                                        amet eiusmod qui reprehenderit nostrud tempor. Fugiat ipsum excepteur in aliqua non
                                        et quis aliquip ad irure in labore cillum elit enim. Consequat aliquip incididunt
                                        ipsum et minim laborum laborum laborum et cillum labore. Deserunt adipisicing cillum
                                        id nulla minim nostrud labore eiusmod et amet.</div>
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
                                    <pre class="language-html">
<code class="language-html">&lt;ul class="nav nav-tabs nav-pills border-0 flex-row flex-md-column me-5 mb-3 mb-md-0 fs-6"&gt;
&lt;li class="nav-item w-md-200px me-0"&gt;
&lt;a class="nav-link active" data-bs-toggle="tab" href="#kt_vtab_pane_1"&gt;Link 1&lt;/a&gt;
&lt;/li&gt;
&lt;li class="nav-item w-md-200px me-0"&gt;
&lt;a class="nav-link" data-bs-toggle="tab" href="#kt_vtab_pane_2"&gt;Link 2&lt;/a&gt;
&lt;/li&gt;
&lt;li class="nav-item w-md-200px"&gt;
&lt;a class="nav-link" data-bs-toggle="tab" href="#kt_vtab_pane_3"&gt;Link 3&lt;/a&gt;
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
                                <a href="#line-tabs" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Line Tabs</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#tine-tabs-2x" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Line Tabs 2x</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#tabs-with-dropdowns" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Tabs with Dropdowns</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#card-tabs" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Card Tabs</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#scrollable-tabs" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Scrollable Tabs</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#vertical-tabs" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Vertical Tabs</span>
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
