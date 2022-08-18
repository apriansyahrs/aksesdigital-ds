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
                        <div class="py-5">Tabel adalah daftar yang berisi susunan informasi atau data yang dit-ampilkan
                            dalam bentuk baris dan kolom, Secara umum suatu tabel terdiri atas be-berapa elemen antara lain
                            : baris, kolom, sel, dan garis.</div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="pb-10">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="basic" data-kt-scroll-offset="50">
                            <a href="#basic"></a>Basic
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="my-5">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                            <td>$433,060</td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2012/12/02</td>
                                            <td>$372,000</td>
                                        </tr>
                                        <tr>
                                            <td>Herrod Chandler</td>
                                            <td>Sales Assistant</td>
                                            <td>San Francisco</td>
                                            <td>59</td>
                                            <td>2012/08/06</td>
                                            <td>$137,500</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end::Block-->
                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight">
                                <button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html" style="height:300px">
<code class="language-html">&lt;div class="table-responsive"&gt;
&lt;table class="table"&gt;
&lt;thead&gt;
&lt;tr class="fw-bold fs-6 text-gray-800"&gt;
&lt;th&gt;Name&lt;/th&gt;
&lt;th&gt;Position&lt;/th&gt;
&lt;th&gt;Office&lt;/th&gt;
&lt;th&gt;Age&lt;/th&gt;
&lt;th&gt;Start date&lt;/th&gt;
&lt;th&gt;Salary&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;td&gt;Tiger Nixon&lt;/td&gt;
&lt;td&gt;System Architect&lt;/td&gt;
&lt;td&gt;Edinburgh&lt;/td&gt;
&lt;td&gt;61&lt;/td&gt;
&lt;td&gt;2011/04/25&lt;/td&gt;
&lt;td&gt;$320,800&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Garrett Winters&lt;/td&gt;
&lt;td&gt;Accountant&lt;/td&gt;
&lt;td&gt;Tokyo&lt;/td&gt;
&lt;td&gt;63&lt;/td&gt;
&lt;td&gt;2011/07/25&lt;/td&gt;
&lt;td&gt;$170,750&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="cell-spacing" data-kt-scroll-offset="50">
                            <a href="#cell-spacing"></a>Cell Spacing
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="my-5">
                            <div class="table-responsive">
                                <table class="table gs-7 gy-7 gx-7">
                                    <thead>
                                        <tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                            <td>$433,060</td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2012/12/02</td>
                                            <td>$372,000</td>
                                        </tr>
                                        <tr>
                                            <td>Herrod Chandler</td>
                                            <td>Sales Assistant</td>
                                            <td>San Francisco</td>
                                            <td>59</td>
                                            <td>2012/08/06</td>
                                            <td>$137,500</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end::Block-->
                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight">
                                <button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html" style="height:300px">
<code class="language-html">&lt;div class="table-responsive"&gt;
&lt;table class="table gs-7 gy-7 gx-7"&gt;
&lt;thead&gt;
&lt;tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200"&gt;
&lt;th&gt;Name&lt;/th&gt;
&lt;th&gt;Position&lt;/th&gt;
&lt;th&gt;Office&lt;/th&gt;
&lt;th&gt;Age&lt;/th&gt;
&lt;th&gt;Start date&lt;/th&gt;
&lt;th&gt;Salary&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;td&gt;Tiger Nixon&lt;/td&gt;
&lt;td&gt;System Architect&lt;/td&gt;
&lt;td&gt;Edinburgh&lt;/td&gt;
&lt;td&gt;61&lt;/td&gt;
&lt;td&gt;2011/04/25&lt;/td&gt;
&lt;td&gt;$320,800&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Garrett Winters&lt;/td&gt;
&lt;td&gt;Accountant&lt;/td&gt;
&lt;td&gt;Tokyo&lt;/td&gt;
&lt;td&gt;63&lt;/td&gt;
&lt;td&gt;2011/07/25&lt;/td&gt;
&lt;td&gt;$170,750&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="row-border-styling" data-kt-scroll-offset="50">
                            <a href="#row-border-styling"></a>Border Styling
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5 pb-6">
                            <div class="table-responsive">
                                <table class="table table-row-bordered gy-7">
                                    <thead>
                                        <tr class="fw-bold fs-6 text-gray-800">
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                            <td>$433,060</td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2012/12/02</td>
                                            <td>$372,000</td>
                                        </tr>
                                        <tr>
                                            <td>Herrod Chandler</td>
                                            <td>Sales Assistant</td>
                                            <td>San Francisco</td>
                                            <td>59</td>
                                            <td>2012/08/06</td>
                                            <td>$137,500</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end::Block-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="table-responsive">
                                <table class="table table-row-dashed table-row-gray-300 gy-7">
                                    <thead>
                                        <tr class="fw-bold fs-6 text-gray-800">
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                            <td>$433,060</td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2012/12/02</td>
                                            <td>$372,000</td>
                                        </tr>
                                        <tr>
                                            <td>Herrod Chandler</td>
                                            <td>Sales Assistant</td>
                                            <td>San Francisco</td>
                                            <td>59</td>
                                            <td>2012/08/06</td>
                                            <td>$137,500</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end::Block-->
                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight">
                                <button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html" style="height:300px">
<code class="language-html">&lt;div class="py-5"&gt;
&lt;div class="table-responsive"&gt;
&lt;table class="table table-row-dashed table-row-gray-300 gy-7"&gt;
&lt;thead&gt;
&lt;tr class="fw-bold fs-6 text-gray-800"&gt;
&lt;th&gt;Name&lt;/th&gt;
&lt;th&gt;Position&lt;/th&gt;
&lt;th&gt;Office&lt;/th&gt;
&lt;th&gt;Age&lt;/th&gt;
&lt;th&gt;Start date&lt;/th&gt;
&lt;th&gt;Salary&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;td&gt;Tiger Nixon&lt;/td&gt;
&lt;td&gt;System Architect&lt;/td&gt;
&lt;td&gt;Edinburgh&lt;/td&gt;
&lt;td&gt;61&lt;/td&gt;
&lt;td&gt;2011/04/25&lt;/td&gt;
&lt;td&gt;$320,800&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Garrett Winters&lt;/td&gt;
&lt;td&gt;Accountant&lt;/td&gt;
&lt;td&gt;Tokyo&lt;/td&gt;
&lt;td&gt;63&lt;/td&gt;
&lt;td&gt;2011/07/25&lt;/td&gt;
&lt;td&gt;$170,750&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class="py-5"&gt;
&lt;div class="table-responsive"&gt;
&lt;table class="table table-row-dashed table-row-gray-300 gy-7"&gt;
&lt;thead&gt;
&lt;tr class="fw-bold fs-6 text-gray-800"&gt;
&lt;th&gt;Name&lt;/th&gt;
&lt;th&gt;Position&lt;/th&gt;
&lt;th&gt;Office&lt;/th&gt;
&lt;th&gt;Age&lt;/th&gt;
&lt;th&gt;Start date&lt;/th&gt;
&lt;th&gt;Salary&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;td&gt;Tiger Nixon&lt;/td&gt;
&lt;td&gt;System Architect&lt;/td&gt;
&lt;td&gt;Edinburgh&lt;/td&gt;
&lt;td&gt;61&lt;/td&gt;
&lt;td&gt;2011/04/25&lt;/td&gt;
&lt;td&gt;$320,800&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Garrett Winters&lt;/td&gt;
&lt;td&gt;Accountant&lt;/td&gt;
&lt;td&gt;Tokyo&lt;/td&gt;
&lt;td&gt;63&lt;/td&gt;
&lt;td&gt;2011/07/25&lt;/td&gt;
&lt;td&gt;$170,750&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="striped-rows" data-kt-scroll-offset="50">
                            <a href="#striped-rows"></a>Striped Rows
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="my-5">
                            <div class="table-responsive">
                                <table class="table table-striped gy-7 gs-7">
                                    <thead>
                                        <tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                            <td>$433,060</td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2012/12/02</td>
                                            <td>$372,000</td>
                                        </tr>
                                        <tr>
                                            <td>Herrod Chandler</td>
                                            <td>Sales Assistant</td>
                                            <td>San Francisco</td>
                                            <td>59</td>
                                            <td>2012/08/06</td>
                                            <td>$137,500</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end::Block-->
                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight">
                                <button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html" style="height:300px">
<code class="language-html">&lt;div class="table-responsive"&gt;
&lt;table class="table table-striped gy-7 gs-7"&gt;
&lt;thead&gt;
&lt;tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200"&gt;
&lt;th&gt;Name&lt;/th&gt;
&lt;th&gt;Position&lt;/th&gt;
&lt;th&gt;Office&lt;/th&gt;
&lt;th&gt;Age&lt;/th&gt;
&lt;th&gt;Start date&lt;/th&gt;
&lt;th&gt;Salary&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;td&gt;Tiger Nixon&lt;/td&gt;
&lt;td&gt;System Architect&lt;/td&gt;
&lt;td&gt;Edinburgh&lt;/td&gt;
&lt;td&gt;61&lt;/td&gt;
&lt;td&gt;2011/04/25&lt;/td&gt;
&lt;td&gt;$320,800&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Garrett Winters&lt;/td&gt;
&lt;td&gt;Accountant&lt;/td&gt;
&lt;td&gt;Tokyo&lt;/td&gt;
&lt;td&gt;63&lt;/td&gt;
&lt;td&gt;2011/07/25&lt;/td&gt;
&lt;td&gt;$170,750&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="striped-rounded-and-bordered" data-kt-scroll-offset="50">
                            <a href="#striped-rounded-and-bordered"></a>Striped, Rounded &amp; Bordered
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="my-5">
                            <div class="table-responsive">
                                <table class="table table-rounded table-striped border gy-7 gs-7">
                                    <thead>
                                        <tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                            <td>$433,060</td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2012/12/02</td>
                                            <td>$372,000</td>
                                        </tr>
                                        <tr>
                                            <td>Herrod Chandler</td>
                                            <td>Sales Assistant</td>
                                            <td>San Francisco</td>
                                            <td>59</td>
                                            <td>2012/08/06</td>
                                            <td>$137,500</td>
                                        </tr>
                                    </tbody>
                                </table>
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
                                    <pre class="language-html" style="height:300px">
<code class="language-html">&lt;div class="table-responsive"&gt;
&lt;table class="table table-rounded table-striped border gy-7 gs-7"&gt;
&lt;thead&gt;
&lt;tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200"&gt;
&lt;th&gt;Name&lt;/th&gt;
&lt;th&gt;Position&lt;/th&gt;
&lt;th&gt;Office&lt;/th&gt;
&lt;th&gt;Age&lt;/th&gt;
&lt;th&gt;Start date&lt;/th&gt;
&lt;th&gt;Salary&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;td&gt;Tiger Nixon&lt;/td&gt;
&lt;td&gt;System Architect&lt;/td&gt;
&lt;td&gt;Edinburgh&lt;/td&gt;
&lt;td&gt;61&lt;/td&gt;
&lt;td&gt;2011/04/25&lt;/td&gt;
&lt;td&gt;$320,800&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Garrett Winters&lt;/td&gt;
&lt;td&gt;Accountant&lt;/td&gt;
&lt;td&gt;Tokyo&lt;/td&gt;
&lt;td&gt;63&lt;/td&gt;
&lt;td&gt;2011/07/25&lt;/td&gt;
&lt;td&gt;$170,750&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="hoverable-rows" data-kt-scroll-offset="50">
                            <a href="#hoverable-rows"></a>Hoverable Rows
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="my-5">
                            <div class="table-responsive">
                                <table class="table table-hover table-rounded table-striped border gy-7 gs-7">
                                    <thead>
                                        <tr class="fw-semibold fs-6 text-gray-800 border-bottom-2 border-gray-200">
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                            <td>$433,060</td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2012/12/02</td>
                                            <td>$372,000</td>
                                        </tr>
                                        <tr>
                                            <td>Herrod Chandler</td>
                                            <td>Sales Assistant</td>
                                            <td>San Francisco</td>
                                            <td>59</td>
                                            <td>2012/08/06</td>
                                            <td>$137,500</td>
                                        </tr>
                                    </tbody>
                                </table>
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
                                    <pre class="language-html" style="height:300px">
<code class="language-html">&lt;div class="table-responsive"&gt;
&lt;table class="table table-hover table-rounded table-striped border gy-7 gs-7"&gt;
&lt;thead&gt;
&lt;tr class="fw-semibold fs-6 text-gray-800 border-bottom-2 border-gray-200"&gt;
&lt;th&gt;Name&lt;/th&gt;
&lt;th&gt;Position&lt;/th&gt;
&lt;th&gt;Office&lt;/th&gt;
&lt;th&gt;Age&lt;/th&gt;
&lt;th&gt;Start date&lt;/th&gt;
&lt;th&gt;Salary&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;td&gt;Tiger Nixon&lt;/td&gt;
&lt;td&gt;System Architect&lt;/td&gt;
&lt;td&gt;Edinburgh&lt;/td&gt;
&lt;td&gt;61&lt;/td&gt;
&lt;td&gt;2011/04/25&lt;/td&gt;
&lt;td&gt;$320,800&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Garrett Winters&lt;/td&gt;
&lt;td&gt;Accountant&lt;/td&gt;
&lt;td&gt;Tokyo&lt;/td&gt;
&lt;td&gt;63&lt;/td&gt;
&lt;td&gt;2011/07/25&lt;/td&gt;
&lt;td&gt;$170,750&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="active-rows" data-kt-scroll-offset="50">
                            <a href="#active-rows"></a>Active Rows
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="my-5">
                            <div class="table-responsive">
                                <table class="table table-rounded table-row-bordered border gy-7 gs-7">
                                    <thead>
                                        <tr class="fw-semibold fs-6 text-gray-800 border-bottom-2 border-gray-200">
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr class="table-active">
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                        </tr>
                                        <tr class="table-active">
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                            <td>$433,060</td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2012/12/02</td>
                                            <td>$372,000</td>
                                        </tr>
                                        <tr>
                                            <td>Herrod Chandler</td>
                                            <td>Sales Assistant</td>
                                            <td>San Francisco</td>
                                            <td>59</td>
                                            <td>2012/08/06</td>
                                            <td>$137,500</td>
                                        </tr>
                                    </tbody>
                                </table>
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
                                    <pre class="language-html" style="height:300px">
<code class="language-html">&lt;div class="table-responsive"&gt;
&lt;table class="table table-rounded table-row-bordered border gy-7 gs-7"&gt;
&lt;thead&gt;
&lt;tr class="fw-semibold fs-6 text-gray-800 border-bottom-2 border-gray-200"&gt;
&lt;th&gt;Name&lt;/th&gt;
&lt;th&gt;Position&lt;/th&gt;
&lt;th&gt;Office&lt;/th&gt;
&lt;th&gt;Age&lt;/th&gt;
&lt;th&gt;Start date&lt;/th&gt;
&lt;th&gt;Salary&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;td&gt;Tiger Nixon&lt;/td&gt;
&lt;td&gt;System Architect&lt;/td&gt;
&lt;td&gt;Edinburgh&lt;/td&gt;
&lt;td&gt;61&lt;/td&gt;
&lt;td&gt;2011/04/25&lt;/td&gt;
&lt;td&gt;$320,800&lt;/td&gt;
&lt;/tr&gt;
&lt;tr class="table-active"&gt;
&lt;td&gt;Garrett Winters&lt;/td&gt;
&lt;td&gt;Accountant&lt;/td&gt;
&lt;td&gt;Tokyo&lt;/td&gt;
&lt;td&gt;63&lt;/td&gt;
&lt;td&gt;2011/07/25&lt;/td&gt;
&lt;td&gt;$170,750&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="nesting" data-kt-scroll-offset="50">
                            <a href="#nesting"></a>Nesting
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="my-5">
                            <div class="table-responsive">
                                <table
                                    class="table table-striped table-rounded border border-gray-300 table-row-bordered table-row-gray-300 gy-7 gs-7">
                                    <thead>
                                        <tr class="fw-semibold fs-4 text-gray-800">
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Handle</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">
                                                <table class="table table-row-dashed table-row-gray-500 gy-5 gs-5 mb-0">
                                                    <thead>
                                                        <tr class="fw-semibold fs-6 text-gray-800">
                                                            <th scope="col">Header</th>
                                                            <th scope="col">Header</th>
                                                            <th scope="col">Header</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">A</th>
                                                            <td>First</td>
                                                            <td>Last</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">B</th>
                                                            <td>First</td>
                                                            <td>Last</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">C</th>
                                                            <td>First</td>
                                                            <td>Last</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
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
                                    <pre class="language-html" style="height:300px">
<code class="language-html">&lt;div class="table-responsive"&gt;
&lt;table class="table table-striped table-rounded border border-gray-300 table-row-bordered table-row-gray-300 gy-7 gs-7"&gt;
&lt;thead&gt;
&lt;tr class="fw-semibold fs-4 text-gray-800"&gt;
&lt;th scope="col"&gt;#&lt;/th&gt;
&lt;th scope="col"&gt;First&lt;/th&gt;
&lt;th scope="col"&gt;Last&lt;/th&gt;
&lt;th scope="col"&gt;Handle&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;th scope="row"&gt;1&lt;/th&gt;
&lt;td&gt;Mark&lt;/td&gt;
&lt;td&gt;Otto&lt;/td&gt;
&lt;td&gt;@mdo&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td colspan="4"&gt;
&lt;table class="table table-row-dashed table-row-gray-500 gy-5 gs-5 mb-0"&gt;
    &lt;thead&gt;
        &lt;tr class="fw-semibold fs-6 text-gray-800"&gt;
            &lt;th scope="col"&gt;Header&lt;/th&gt;
            &lt;th scope="col"&gt;Header&lt;/th&gt;
            &lt;th scope="col"&gt;Header&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
        &lt;tr&gt;
            &lt;th scope="row"&gt;A&lt;/th&gt;
            &lt;td&gt;First&lt;/td&gt;
            &lt;td&gt;Last&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;th scope="row"&gt;B&lt;/th&gt;
            &lt;td&gt;First&lt;/td&gt;
            &lt;td&gt;Last&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;th scope="row"&gt;C&lt;/th&gt;
            &lt;td&gt;First&lt;/td&gt;
            &lt;td&gt;Last&lt;/td&gt;
        &lt;/tr&gt;
    &lt;/tbody&gt;
&lt;/table&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;th scope="row"&gt;3&lt;/th&gt;
&lt;td&gt;Larry&lt;/td&gt;
&lt;td&gt;the Bird&lt;/td&gt;
&lt;td&gt;@twitter&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="responsive" data-kt-scroll-offset="50">
                            <a href="#responsive"></a>Responsive
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="my-5">
                            <div class="table-responsive">
                                <table class="table table-striped gy-7 gs-7">
                                    <thead>
                                        <tr class="fw-semibold fs-6 text-gray-800 border-bottom-2 border-gray-200">
                                            <th class="min-w-200px">Name</th>
                                            <th class="min-w-400px">Position</th>
                                            <th class="min-w-100px">Office</th>
                                            <th class="min-w-200px">Age</th>
                                            <th class="min-w-200px">Start date</th>
                                            <th class="min-w-200px">Salary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                            <td>$433,060</td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2012/12/02</td>
                                            <td>$372,000</td>
                                        </tr>
                                        <tr>
                                            <td>Herrod Chandler</td>
                                            <td>Sales Assistant</td>
                                            <td>San Francisco</td>
                                            <td>59</td>
                                            <td>2012/08/06</td>
                                            <td>$137,500</td>
                                        </tr>
                                    </tbody>
                                </table>
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
                                    <pre class="language-html" style="height:300px">
<code class="language-html">&lt;div class="table-responsive"&gt;
&lt;table class="table table-striped gy-7 gs-7"&gt;
&lt;thead&gt;
&lt;tr class="fw-semibold fs-6 text-gray-800 border-bottom-2 border-gray-200"&gt;
&lt;th class="min-w-200px"&gt;Name&lt;/th&gt;
&lt;th class="min-w-400px"&gt;Position&lt;/th&gt;
&lt;th class="min-w-100px"&gt;Office&lt;/th&gt;
&lt;th class="min-w-200px"&gt;Age&lt;/th&gt;
&lt;th class="min-w-200px"&gt;Start date&lt;/th&gt;
&lt;th class="min-w-200px"&gt;Salary&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;td&gt;Tiger Nixon&lt;/td&gt;
&lt;td&gt;System Architect&lt;/td&gt;
&lt;td&gt;Edinburgh&lt;/td&gt;
&lt;td&gt;61&lt;/td&gt;
&lt;td&gt;2011/04/25&lt;/td&gt;
&lt;td&gt;$320,800&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Garrett Winters&lt;/td&gt;
&lt;td&gt;Accountant&lt;/td&gt;
&lt;td&gt;Tokyo&lt;/td&gt;
&lt;td&gt;63&lt;/td&gt;
&lt;td&gt;2011/07/25&lt;/td&gt;
&lt;td&gt;$170,750&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="sorting-states" data-kt-scroll-offset="50">
                            <a href="#sorting-states"></a>Sorting States
                        </h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="my-5">
                            <div class="table-responsive">
                                <table class="table table-row-bordered gy-5">
                                    <thead>
                                        <tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
                                            <th class="table-sort-desc">Name</th>
                                            <th class="table-sort-asc">Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                            <td>$433,060</td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2012/12/02</td>
                                            <td>$372,000</td>
                                        </tr>
                                        <tr>
                                            <td>Herrod Chandler</td>
                                            <td>Sales Assistant</td>
                                            <td>San Francisco</td>
                                            <td>59</td>
                                            <td>2012/08/06</td>
                                            <td>$137,500</td>
                                        </tr>
                                    </tbody>
                                </table>
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
                                    <pre class="language-html" style="height:300px">
<code class="language-html">&lt;div class="table-responsive"&gt;
&lt;table class="table table-row-bordered gy-5"&gt;
&lt;thead&gt;
&lt;tr class="fw-bold fs-6 text-gray-800"&gt;
&lt;th class="table-sort-desc"&gt;Name&lt;/th&gt;
&lt;th class="table-sort-asc"&gt;Position&lt;/th&gt;
&lt;th&gt;Office&lt;/th&gt;
&lt;th&gt;Age&lt;/th&gt;
&lt;th&gt;Start date&lt;/th&gt;
&lt;th&gt;Salary&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;td&gt;Tiger Nixon&lt;/td&gt;
&lt;td&gt;System Architect&lt;/td&gt;
&lt;td&gt;Edinburgh&lt;/td&gt;
&lt;td&gt;61&lt;/td&gt;
&lt;td&gt;2011/04/25&lt;/td&gt;
&lt;td&gt;$320,800&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Garrett Winters&lt;/td&gt;
&lt;td&gt;Accountant&lt;/td&gt;
&lt;td&gt;Tokyo&lt;/td&gt;
&lt;td&gt;63&lt;/td&gt;
&lt;td&gt;2011/07/25&lt;/td&gt;
&lt;td&gt;$170,750&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
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
                                <a href="#cell-spacing" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Cell Spacing</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#row-border-styling" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Border Styling</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#striped-rows" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Striped Rows</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#striped-rounded-and-bordered" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Striped, Rounded &amp; Bordered</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#hoverable-rows" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Hoverable Rows</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#active-rows" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Active Rows</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#nesting" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Nesting</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#responsive" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Responsive</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#sorting-states" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Sorting States</span>
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
