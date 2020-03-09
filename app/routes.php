<?php

Route::get('/', function()
{
	return View::make('hello');
});

Route::controller('medicamentos','MedicamentosController');

Route::controller('menu1','MenuController');

Route::controller('login','LoginController');

Route::controller('donacion1','DonacionController');



Route::get('Header', function() {
    return View::make('includes.header');
});


Route::get('menu', function () {
	$donante =  Donante::paginate(10);
	$medicamentos = Medicamento::paginate(10);

	return View::make('menu.menu',
										 ["donantes"=> $donante,"medicamento" => $medicamentos] );
});

Route::Controller('proveedor','ProveedorController');

Route::Controller('Donante','DonanteController');

Route::Controller('kardex','KardexController');

Route::controller('pedido','PedidoController');

Route::controller('suministro','SuministroController');

Route::controller('compra','CompraController');

Route::controller('Donacion','DonacionController');

Route::controller('categorias','CategoriaController');

Route::controller('lotes','LotesController');

Route::controller('Usuario','UsuarioController');

Route::get('ExHeader', function () {
    return View::make('includes.pages.ex1');
});

Route::get('login', 'LoginController@showLogin'); // Mostrar login
Route::post('login', 'LoginController@postLogin'); // Verificar datos
Route::get('logout', 'LoginController@logOut'); // Finalizar sesión

Route::get('inuser', function () {

    $u = new User();
    $u->nombre = "daniel";
    $u->username = "Admin";
    $u->password = Hash::make("abc123");

    $u->save();
    echo "Usuario Registrado";
});

Route::group(['before' => 'auth'], function()
{
    Route::get('/', 'MedicamentosController'); // Vista de inicio
});


Route::get('404_not_Found', function () {
    return View::make('includes.NotFound');
});

Route::get('pdf',function(){
	$medicamento = Medicamento::all();
	$pdf = PDF::loadView('reportes.prueba',['medicamento' => $medicamento]);
	return $pdf->download('reporte.pdf');
});

Route::get('report_pedido',function(){
	$pedido = pedido::all();
	$pdf = PDF::loadView('reportes.report_pedido',['pedidos' => $pedido]);
	return $pdf->download('reporte.report_pedido.pdf');
});

Route::get('report_compra',function(){
	$compra = Compra::all();
	$pdf = PDF::loadView('reportes.report_compra',['compras' => $compra]);
	return $pdf->download('reporte.report_compra.pdf');
});

Route::get('MedicamentosVencidos',function(){
	$medicamento = DB::select('call MedVencidos');
	$pdf = PDF::loadView('reportes.vencidos',['medicamento' => $medicamento]);
	return $pdf->download('reporte.pdf');
});


Route::get('categoria/destroy/{id}',[
    'uses' => 'CategoriaController@destroy',
    'as' => 'categoria.destroy'
]);

Route::get('ex',function(){
	return View::make('includes.pages.example1');
});

Route::get('MedicamentosFaltantes',function(){
	$medicamento = DB::select('call MedicamentosFaltantes');
	$pdf = PDF::loadView('reportes.faltantes',['medicamento' => $medicamento]);
	return $pdf->download('reporte.pdf');
});
