@include('layouts.header')
<link
    href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

@section('title', 'Home')

<style>
    td .p {
        font-size: 14px !important;
    }
    .remove-icon-position{
        position: absolute;
        top: -10px;
        right: 0px;
        cursor: pointer;
        display: none;
    }
    .edit-icon-position{
        position: absolute;
        top: -10px;
        right: 30px;
        cursor: pointer;
        display: none;
    }
    .nav-tabs .nav-item:hover .remove-icon-position, .nav-tabs .nav-item:hover .edit-icon-position{
        display: block;
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
                                        <div>
                                            <div class="form-modal-ex">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#inlineForm">
                                                    Add
                                                </button>
                                                <!-- Modal -->
                                                <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="myModalLabel33">Category</h4>
                                                                <button type="button" class="close category-modal-close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form action="#" class="category-create-modal">
                                                                <div class="modal-body">
                                                                    <label>Category Name: </label>
                                                                    <div class="form-group">
                                                                        <input type="text" placeholder="Category" class="form-control category-text" required/>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button class="btn btn-primary btn-add-category">Save</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <li class="nav-item">
                                            <a class="nav-link active" id="tab-category-1" data-toggle="tab" href="#category-1" aria-controls="category-1" role="tab" aria-selected="true">
                                                CATEGORY
                                            </a>
                                            <i data-feather='edit-2' class="edit-icon-position edit-icon-position-1"></i>
                                            <i data-feather='x' class="remove-icon-position remove-icon-position-1"></i>
                                            
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tab-category-2" data-toggle="tab" href="#category-2" aria-controls="category-2" role="tab" aria-selected="false">STARTER</a>
                                            <i data-feather='edit-2' class="edit-icon-position edit-icon-position-2"></i>
                                            <i data-feather='x' class="remove-icon-position remove-icon-position-2"></i>
                                        </li>
                                        
                                    </ul>
                                    <div class="tab-content mt-3">
                                        <div class="tab-pane active" id="category-1" aria-labelledby="tab-category-1" role="tabpanel">
                                            <p>
                                                <h2>CATEGORY</h2>
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
        '@if (session()->has('message'))<div class="alert alert-success">' + toastr["success"]("{{ session()->get('message') }}") + '</div>@endif';
        var id = 0;
        $('.category-create-modal').on('submit', function(e){
            var category_text = $('.category-text').val();
            console.log(category_text);
            $('.category-modal-close').click();
            $('.nav-tabs').append("<li class='nav-item'><a class='nav-link' id='tab-"+id+"' data-toggle='tab' href='#category-"+id+"' aria-controls='category-"+id+"' role='tab' aria-selected='false'>"+category_text+"</a><i data-feather='edit-2' class='edit-icon-position'></i><i data-feather='x' class='remove-icon-position'></i></li>");
            $('.tab-content').append("<div class='tab-pane' id='category-"+id+"' aria-labelledby='tab-category-"+id+"' role='tabpanel'><p><h2>"+category_text+"</h2></p><table class='table'><tbody></tbody></table></div>");
            id = id + 1;
        });

    </script>
</body>
