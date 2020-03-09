<!-- start: Main Menu -->
<div id="sidebar-left" class="span2">
    <div class="nav-collapse sidebar-nav in collapse" style="height: auto;">
        <ul class="nav nav-tabs nav-stacked main-menu">

            <li>
              <a class="dropmenu" href="#"><i class="icon-shopping-cart"></i><span class="hidden-tablet">  Compras</span></a>
              <ul class="nav nav-second-level">
                <li>
                  <a href={{action("CompraController@getInsert")}}>Registrar</a>
                </li>
                <li>
                  <a href={{action("CompraController@getIndex")}}>Consultar</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="dropmenu" href="#"><i class="icon-plus-sign"></i><span class="hidden-tablet">  Donacion</span></a>
              <ul class="nav nav-second-level">
                <li>
                  <a href={{action("DonacionController@getInsert")}}>Registrar</a>
                </li>
                <li>
                  <a href={{action("DonacionController@getIndex")}}>Consultar</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="dropmenu" href="#"><i class="icon-user"></i><span class="hidden-tablet">  Donante</span></a>
              <ul class="nav nav-second-level">
                <li>
                  <a href={{action("DonanteController@getInsert")}}>Registrar</a>
                </li>
                <li>
                  <a href={{action("DonanteController@getIndex")}}>Consultar</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="dropmenu" href="#"><i class="icon-briefcase"></i><span class="hidden-tablet">  Gestión de medicamentos</span></a>
              <ul class="nav nav-second-level">
                <li>
                  <a href={{action("MedicamentosController@getInsert")}}>Registrar Medicamento</a>
                </li>
                <li>
                  <a href={{action("MedicamentosController@getIndex")}}>Consultar Medicamentos</a>
                </li>
                <li>
                  <a href={{action("CategoriaController@getInsert")}}>Registrar Categoria</a>
                </li>
                <li>
                  <a href={{action("CategoriaController@getIndex")}}>Consultar Categoria</a>
                </li>

              </ul>
            </li>
            <li>
              <a class="dropmenu" href="#"><i class="icon-edit"></i><span class="hidden-tablet">  Kardex</span></a>
              <ul class="nav nav-second-level">
                <li>
                  <a href={{action("KardexController@getInsert")}}>Registrar</a>
                </li>
                <li>
                  <a href={{action("KardexController@getIndex")}}>Consultar</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="dropmenu" href="#"><i class="icon-barcode"></i><span class="hidden-tablet">  Lotes</span></a>
              <ul class="nav nav-second-level">
                <li>
                  <a href={{action("LotesController@getInsert")}}>Registrar</a>
                </li>
                <li>
                  <a href={{action("LotesController@getIndex")}}>Consultar</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="dropmenu" href="#"><i class="icon-paste"></i><span class="hidden-tablet">  Pedidos</span></a>
              <ul class="nav nav-second-level">
                <li>
                  <a href={{action("PedidoController@getInsert")}}>Registrar</a>
                </li>
                <li>
                  <a href={{action("PedidoController@getIndex")}}>Consultar</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="dropmenu" href="#"><i class="icon-truck"></i><span class="hidden-tablet">  Proveedor</span></a>
              <ul class="nav nav-second-level">
                <li>
                  <a href={{action("ProveedorController@getInsert")}}>Registrar</a>
                </li>
                <li>
                  <a href={{action("ProveedorController@getIndex")}}>Consultar</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="dropmenu" href="#"><i class="icon-beaker"></i><span class="hidden-tablet">  Suministro</span></a>
              <ul class="nav nav-second-level">
                <li>
                  <a href={{action("SuministroController@getInsert")}}>Registrar</a>
                </li>
                <li>
                  <a href={{action("SuministroController@getIndex")}}>Consultar</a>
                </li>
              </ul>
            </li>
        </ul>
    </div>
</div>
<!-- end: Main Menu -->
