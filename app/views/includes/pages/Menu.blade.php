<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ximedic</title>
        @include('includes.head.head1')
    </head>

    <body >

        @include('includes.header.header')

        <div class="container-fluid-full">
            <div class="row-fluid">

                @include('includes.sidebar.sidebar')

                <!-- start: Content -->
                <div id="content" class="span11" style="min-height: 974px;">

                    <ul class="breadcrumb">
                        <li>
                            <i class="icon-home"></i>
                            <a href={{action("MedicamentosController@getIndex")}}>Inicio</a>
                            <i class="icon-angle-right"></i>
                        </li>
                        <li><a href="#">{{$pag}}</a></li>
                    </ul>
                    <!--/row-->
                    <div class="row-fluid">
                      @if (Session::has('insert'))
                      <div class="alert alert-success">
                        {{ Session::get('insert') }}
                      </div>
                      <div onload="alert('La página se ha cargado completamente');" class="noty" data-noty-options='{"text":"  {{ Session::get("insert") }}","layout":"topCenter","type":"success"}'>dsadasdasd</div>


                      @endif

                      <!-- /.navbar-top-links -->

                        <div class="navbar-default sidebar" role="navigation">
                            <div class="sidebar-nav navbar-collapse">
                                <ul class="nav" id="side-menu">
                                    <li class="sidebar-search">
                                        <div class="input-group custom-search-form">
                                          {{ Form::open(['method'=>'GET','class'=>'navbar-form pull-center']) }}
                                    <div class="input-group custom-search-form">
                                        {{Form::input('text','buscar', Input::get('buscar'),array(
                                                            'placeholder'=>'Buscar',
                                                            'Class'=>'form-control',
                                                            'Class='=>'fa fa-search',
                                                            'style'=>' border-radius:300px; text-align:center; font-family: font-size: 10pt; width:1000px; height:45px'))}}
                                    </div>
                                    {{Form::close()}}

                      @yield('vista')
                    </div>

                </div><!--/.fluid-container-->

                <!-- end: Content -->


            </div><!--/#content.span10-->
        </div><!--/fluid-row-->

        <div class="modal hide fade" id="myModal">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3>Settings</h3>
            </div>
            <div class="modal-body">
                <p>Here settings can be configured...</p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn" data-dismiss="modal">Close</a>
                <a href="#" class="btn btn-primary">Save changes</a>
            </div>
        </div>

        <div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <ul class="list-inline item-details">
                    <li><a href="http://themifycloud.com">Admin templates</a></li>
                    <li><a href="http://themescloud.org">Bootstrap themes</a></li>
                </ul>
            </div>
        </div>

        <div class="clearfix"></div>

        @include('includes.footer.footer')

        <!-- start: JavaScript-->
        @include('includes.footer.js1')

        <!-- end: JavaScript-->



    </body>
</html>
