@include('layouts.header')
<link
    href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

@section('title', 'Home')

<style>
    td .p {
        font-size: 14px !important;
    }

</style>

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    @include('layouts.nav')
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    @include('layouts.layout')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row d-flex justify-content-between align-items-center">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0" style="text-transform: capitalize;">
                                {{ $pagename }}</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/menupage">Menupage</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#">{{ $pagename }}</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#">{{ $page_id }}</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12 mb-2">
                    
                </div>
            </div>
            <div class="content-body">
                <section id="nav-tabs-aligned">
                    <div class="row match-height">
                        <!-- Centered Aligned Tabs starts -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <ul class="nav nav-tabs justify-content-center" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="tab-category-1" data-toggle="tab"
                                                href="#category-1" aria-controls="category-1" role="tab"
                                                aria-selected="true">SALADS</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tab-category-2" data-toggle="tab"
                                                href="#category-2" aria-controls="category-2" role="tab"
                                                aria-selected="false">STARTER</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content mt-3">
                                        <div class="tab-pane active" id="category-1" aria-labelledby="tab-category-1" role="tabpanel">
                                            <p>
                                                <h2>SALADS</h2>
                                            </p>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <h4>GRÜNER SALAT</h4>
                                                            <p>Frische Blattsalate</p>
                                                        </td>
                                                        <td>9.50</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="category-2" aria-labelledby="tab-category-2" role="tabpanel">
                                            <p>
                                            <h2>STARTER</h2>
                                            </p>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <h4>CONSOMMÉ MIT SHERRY</h4>
                                                            <p>Eine Suppe für den Feinschmecker</p>
                                                        </td>
                                                        <td>10.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>TOMATENCRÈMESUPPE</h4>
                                                            <p>Mit Basilikum und Rahmhäubchen</p>
                                                        </td>
                                                        <td>11.50</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Centered Aligned Tabs ends -->


                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    @include('layouts.footer')
    <script>
        '@if (session()->has('message'))<div class="alert alert-success">' + toastr["success"]("{{ session()->get('message') }}") + '</div>@endif'
    </script>
</body>
