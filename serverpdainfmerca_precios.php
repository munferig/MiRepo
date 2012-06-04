<?

//creacion de nuevos metodos



//////////////////////////////////////////////////////////////////////////////////////////
// Se registra el metodo de Lista clientes con venta de articulos asociados a un vendedor
//////////////////////////////////////////////////////////////////////////////////////////
$server->register('listcliartvended',		// Nom del mètode a publicar
    array('empresa' => 'xsd:string',		// Paràmetres de entrada
		  'vendedor' => 'xsd:string', 	
		  'operador' => 'xsd:string',
		  'tipocli' => 'xsd:string',
		  'tipbultos' => 'xsd:string' ),
    array('return' => 'xsd:string'),     	// Paràmetres de sortida
    'infmerca:server',                      // Espai de nom
    'infmerca:server#listcliartvended',    	// Acció SOAP
    'rpc',                               	// style
    'encoded',                         		// use
    'Devuelve los clientes con venta de articulos asociados a un vendedor'		// Documentació
);


///////////////////////////////////////////////////////////////////////////////
// Se registra el metodo de Lista artículos de la venta del dia de un cliente
///////////////////////////////////////////////////////////////////////////////
$server->register('listartventadiacliente',					// Nom del mètode a publicar
    array('vendedor' => 'xsd:string',						// Paràmetres de entrada
		  'cliente' => 'xsd:string',
		  'tipbultos' => 'xsd:string'),		
    array('return' => 'xsd:string'),     					// Paràmetres de sortida
    'infmerca:server',                      				// Espai de nom
    'infmerca:server#listartventadiacliente',    			// Acció SOAP
    'rpc',                               					// style
    'encoded',                         						// use
    'Devuelve los artículos que tienen venta del día'		// Documentació
);


///////////////////////////////////////////////////////////////////////////////
// Se registra el metodo de Lista artículos asociados a un vendedor de la venta del dia 
///////////////////////////////////////////////////////////////////////////////
$server->register('listartventadiavended',					// Nom del mètode a publicar
    array('empresa' => 'xsd:string',						// Paràmetres de entrada
		  'vendedor' => 'xsd:string',
		  'operador' => 'xsd:string',
		  'tipocli' => 'xsd:string',
		  'tipbultos' => 'xsd:string'),
    array('return' => 'xsd:string'),     					// Paràmetres de sortida
    'infmerca:server',                      				// Espai de nom
    'infmerca:server#listartventadiavended',				// Acció SOAP
    'rpc',                               					// style
    'encoded',                         						// use
    'Devuelve los artículos que tienen venta del día y asociados a un vendedor'		// Documentació
);



///////////////////////////////////////////////////////////////////////////////
// Se registra el metodo lista clientes de lineas de venta del dia de un articulo-marca
///////////////////////////////////////////////////////////////////////////////
$server->register('listcliventadiaartmarca',					// Nom del mètode a publicar
    array('empresa' => 'xsd:string',
		  'articulo' => 'xsd:string',						// Paràmetres de entrada
		  'marca' => 'xsd:string',
		  'operador' => 'xsd:string',
		  'tipocli' => 'xsd:string',
		  'tipbultos' => 'xsd:string'),
    array('return' => 'xsd:string'),     					// Paràmetres de sortida
    'infmerca:server',                      				// Espai de nom
    'infmerca:server#listcliventadiaartmarca',				// Acció SOAP
    'rpc',                               					// style
    'encoded',                         						// use
    'Devuelve la lista de clientes que han comprado un articulo marca'		// Documentació
);


///////////////////////////////////////////////////////////////////////////////
// Se registra el metodo lista de precios anteriores de diferentes marcas
///////////////////////////////////////////////////////////////////////////////
$server->register('listprecantmarcas',					// Nom del mètode a publicar
    array('empresa' => 'xsd:string',
		  'articulo' => 'xsd:string',						// Paràmetres de entrada
		  'cliente' => 'xsd:string',
		  'fecini' => 'xsd:string',
		  'fecfin' => 'xsd:string'),		
    array('return' => 'xsd:string'),     					// Paràmetres de sortida
    'infmerca:server',                      				// Espai de nom
    'infmerca:server#listprecantmarcas',				// Acció SOAP
    'rpc',                               					// style
    'encoded',                         						// use
    'Devuelve la lista precios anteriores para diferentes marcas en los últimos X días'		// Documentació
);

//////////////////////////////////////////////////////////////////////////////////////////
// Se registra el metodo de Lista de clientes con venta de días anteriores sin precio
//////////////////////////////////////////////////////////////////////////////////////////
$server->register('listcliartalbsinprecio',		// Nom del mètode a publicar
    array('empresa' => 'xsd:string',		// Paràmetres de entrada
		  'vendedor' => 'xsd:string', 	
		  'operador' => 'xsd:string',
		  'tipocli' => 'xsd:string'),
    array('return' => 'xsd:string'),     	// Paràmetres de sortida
    'infmerca:server',                      // Espai de nom
    'infmerca:server#listcliartalbsinprecio',    	// Acció SOAP
    'rpc',                               	// style
    'encoded',                         		// use
    'Devuelve los clientes con venta de días anteriores sin precios'		// Documentació
);


//////////////////////////////////////////////////////////////////////////////////////////
// Lista artículos de albaranes de días anteriores sin precio
//////////////////////////////////////////////////////////////////////////////////////////
$server->register('listartalbsinprecio',		// Nom del mètode a publicar
    array('vendedor' => 'xsd:string', 			//Paràmetres de entrada
		  'cliente' => 'xsd:string'),
    array('return' => 'xsd:string'),     	// Paràmetres de sortida
    'infmerca:server',                      // Espai de nom
    'infmerca:server#listartalbsinprecio',    	// Acció SOAP
    'rpc',                               	// style
    'encoded',                         		// use
    'Devuelve los artículos sin precios de albaranes de días anteriores'		// Documentació
);

//////////////////////////////////////////////////////////////////////////////////////////
// Lista artículos de albaranes de días anteriores sin precio
//////////////////////////////////////////////////////////////////////////////////////////
$server->register('artalbsinprecio',		// Nom del mètode a publicar
    array('vendedor' => 'xsd:string', 			//Paràmetres de entrada
		  'cliente' => 'xsd:string'),
    array('return' => 'xsd:string'),     	// Paràmetres de sortida
    'infmerca:server',                      // Espai de nom
    'infmerca:server#artalbsinprecio',    	// Acció SOAP
    'rpc',                               	// style
    'encoded',                         		// use
    'Devuelve los artículos sin precios de albaranes de días anteriores'		// Documentació
);

//////////////////////////////////////////////////////////////////////////////////////////
// Lista clientes con articulos sin precio de dias anteriores por vendedor
//////////////////////////////////////////////////////////////////////////////////////////
$server->register('listcliventadiaartsinprecio',								// Nom del mètode a publicar
    array('empresa' => 'xsd:string', 											//Paràmetres de entrada
		  'articulo' => 'xsd:string',
		  'vendedor' => 'xsd:string',
		  'operador' => 'xsd:string',
		  'tipocli' => 'xsd:string'),	
    array('return' => 'xsd:string'), 						    				// Paràmetres de sortida
    'infmerca:server',                     			 							// Espai de nom
    'infmerca:server#artalbsinprecio',    										// Acció SOAP
    'rpc',                               										// style
    'encoded',                         											// use
    'Devuelve la lista de clientes con articulos sin precio de dias anteriores por vendedor'		// Documentació
);



//********************************************************************
//********************************************************************
//
//                      Asignación de precios
//
//********************************************************************
//********************************************************************


///////////////////////////////////////////////////////////////////////
//
//	Lista clientes con venta de articulos asociados a un vendedor
//
///////////////////////////////////////////////////////////////////////
function listcliartvended($empresa, $vendedor, $operador, $tipocli, $tipbultos){
include('bd.php');

//Consulta de las lineas con bultos a 0 o las lineas con bultos > 0  //NMF(8-Jun-2010)
if ($tipbultos == 'todos')
{
	$tipbultos = ' ';
}
else
{
	$tipbultos = 'and bult_lin > 0';
}


$sql = 'select distinct(clie_lin),nom_cli,  mot_cli 
from fflineas,
	 ffclient ,
	 fffamusu,
	 ffalbara,
	 ffarticu
where empr_lin = 1 and 
	  clie_lin = cod_cli and 
	  arti_lin = cod_art and 
	  fam_famusu = fam_art and 
	  usu_famusu = \''.$vendedor.'\'  and indi_lin in ( \''.P.'\',\''.N.'\', \''.n.'\') and prec_lin = 0 '.$tipbultos.' and tip_cli '.$operador.' \''.$tipocli.'\'
order by clie_lin;';

$conexion = odbc_pconnect($dsn , $user, $password);
$result = odbc_exec($conexion, $sql);


while (odbc_fetch_row($result))
	{
	$return = $return.''.trim(odbc_result($result, 1 )).'	'.trim(odbc_result($result, 2 )).'	'.trim(odbc_result($result, 3 )).';';
//	$return = $return.''.trim(odbc_result($result, 1 )).';';
	}

//$return = $vendedor;

return $return;


}



//////////////////////////////////////////////////////////////////////////////
//
// Lista artículos de la venta del dia de un cliente asociados a un vendedor
//
//////////////////////////////////////////////////////////////////////////////
function listartventadiacliente($vendedor, $cliente, $tipbultos){
include('bd.php');

//Consulta de las lineas con bultos a 0 o las lineas con bultos > 0  //NMF(8-Jun-2010)
if ($tipbultos == 'todos')
{
	$tipbultos = ' ';
}
else
{
	$tipbultos = 'and bult_lin > 0';
}


$sql = 'select arti_lin, des_art, marc_lin, mar_maract, ter_maract,  bult_lin, prec_lin, empr_lin, cent_lin, alba_lin, nume_lin, tipo_lin , "" as fec
from fflineas, ffarticu, fffamusu, ffmaract
where empr_lin = 1 and clie_lin = \''.$cliente.'\' and usu_famusu = \''.$vendedor.'\' and arti_lin = cod_art and fam_art = fam_famusu and emp_maract = empr_lin and art_maract = arti_lin and marc_lin = mar_maract '.$tipbultos.' and prec_lin = 0 and indi_lin in ( \''.P.'\',\''.N.'\', \''.n.'\') order by arti_lin;';



$conexion = odbc_pconnect($dsn , $user, $password);
$result = odbc_exec($conexion, $sql);


while (odbc_fetch_row($result))
	{
	$return = $return.''.trim(odbc_result($result, 1 )).'	'.trim(odbc_result($result, 2 )).'	'.trim(odbc_result($result, 3 )).'	'.trim(odbc_result($result, 4 )).'	'.trim(odbc_result($result, 5 )).'	'.trim(odbc_result($result, 6 )).'	'.trim(odbc_result($result, 7 )).'	'.trim(odbc_result($result, 8 )).'	'.trim(odbc_result($result, 9 )).'	'.trim(odbc_result($result, 10 )).'	'.trim(odbc_result($result, 11 )).'	'.trim(odbc_result($result, 12 )).'	'.trim(odbc_result($result, 13 )).';';
	}


return $return;



}



//////////////////////////////////////////////////////////////////////////////
//
// Lista artículos de la venta del dia asociados a un vendedor
//
//////////////////////////////////////////////////////////////////////////////
function listartventadiavended($empresa, $vendedor, $operador, $tipocli, $tipbultos){
include('bd.php');

//Consulta de las lineas con bultos a 0 o las lineas con bultos > 0  //NMF(8-Jun-2010)
if ($tipbultos == 'todos')
{
	$tipbultos = ' ';
}
else
{
	$tipbultos = 'and bult_lin > 0';
}


$sql = 'select arti_lin, des_art, marc_lin, ter_maract , prov_lin
from fflineas, ffarticu, fffamusu, ffmaract, ffclient
where arti_lin = cod_art and  art_maract = arti_lin and marc_lin = mar_maract and
   emp_maract = empr_lin and fam_art = fam_famusu and usu_famusu = \''.$vendedor.'\'  and empr_lin = \''.$empresa.'\' and indi_lin in ( \''.P.'\',\''.N.'\', \''.n.'\') and prec_lin = 0 '.$tipbultos.'  and clie_lin = cod_cli  and tip_cli '.$operador.' \''.$tipocli.'\'  
   group by 1, 2, 3, 4, 5 ;';


$conexion = odbc_pconnect($dsn , $user, $password);
$result = odbc_exec($conexion, $sql);


while (odbc_fetch_row($result))
	{
	$return = $return.''.trim(odbc_result($result, 1 )).'	'.trim(odbc_result($result, 2 )).'	'.trim(odbc_result($result, 3 )).'	'.trim(odbc_result($result, 4 )).'	'.trim(odbc_result($result, 5 )).';';
	}

//$return = $sql;

return $return;



}


//////////////////////////////////////////////////////////////////////////////
//
// Lista clientes de lineas de venta del dia de un articulo-marca
//
//////////////////////////////////////////////////////////////////////////////
function listcliventadiaartmarca($empresa, $articulo, $marca, $operador, $tipocli, $tipbultos){
include('bd.php');

//Consulta de las lineas con bultos a 0 o las lineas con bultos > 0  //NMF(8-Jun-2010)
if ($tipbultos == 'todos')
{
	$tipbultos = ' ';
}
else
{
	$tipbultos = 'and bult_lin > 0';
}


$sql = 'select clie_lin, nom_cli, mot_cli,  bult_lin, prec_lin, empr_lin, alba_lin, cent_lin, nume_lin, tipo_lin
from fflineas, ffclient
where empr_lin = \''.$empresa.'\' and arti_lin = \''.$articulo.'\' and marc_lin = \''.$marca.'\' and clie_lin = cod_cli and indi_lin in ( \''.P.'\',\''.N.'\', \''.n.'\') and prec_lin = 0 '.$tipbultos.' and tip_cli '.$operador.' \''.$tipocli.'\' order by prec_lin;';

$conexion = odbc_pconnect($dsn , $user, $password);
$result = odbc_exec($conexion, $sql);


while (odbc_fetch_row($result))
	{
	$return = $return.''.trim(odbc_result($result, 1 )).'	'.trim(odbc_result($result, 2 )).'	'.trim(odbc_result($result, 3 )).'	'.trim(odbc_result($result, 4 )).'	'.trim(odbc_result($result, 5 )).'	'.trim(odbc_result($result, 6 )).'	'.trim(odbc_result($result, 7 )).'	'.trim(odbc_result($result, 8 )).'	'.trim(odbc_result($result, 9 )).'	'.trim(odbc_result($result, 10 )).';';
	}


return $return;



}

//////////////////////////////////////////////////////////////////////////////
//
// Lista precios anteriores para diferentes marcas en los últimos X días
//
//////////////////////////////////////////////////////////////////////////////
function listprecantmarcas($empresa, $articulo, $cliente, $fecini, $fecfin){
include('bd.php');

$sql = 'select mar_hispre, fec_hispre, pre_hispre from ffhispre where emp_hispre = \''.$empresa.'\' and cod_hispre = \''.$cliente.'\' and art_hispre = \''.$articulo.'\' and fec_hispre > date(\''.$fecini.'\') and fec_hispre <= date(\''.$fecfin.'\') order by fec_hispre, mar_hispre;';


$conexion = odbc_pconnect($dsn , $user, $password);
$result = odbc_exec($conexion, $sql);


while (odbc_fetch_row($result))
	{
	$return = $return.''.trim(odbc_result($result, 1 )).'	'.trim(odbc_result($result, 2 )).'	'.trim(odbc_result($result, 3 )).';';
	}


return $return;

}

/////////////////////////////////////////////////////////////////////////////
//
//	Lista de clientes con albaranes de venta de días anteriores sin precio
//
/////////////////////////////////////////////////////////////////////////////
function listcliartalbsinprecio($empresa, $vendedor, $operador, $tipocli){
include('bd.php');

$sql = 'select distinct(cli_hliven), nom_cli,  mot_cli 
from ffhliven,
	 ffclient ,
	 fffamusu,
	 ffarticu
where emp_hliven = 1 and 
	  cli_hliven = cod_cli and 
	  art_hliven = cod_art and 
	  fam_famusu = fam_art and 
	  usu_famusu = \''.$vendedor.'\'  and ind_hliven in ( \''.A.'\') and pre_hliven = 0 and bul_hliven > 0 and tip_cli '.$operador.' \''.$tipocli.'\'
order by cli_hliven;';

$conexion = odbc_pconnect($dsn , $user, $password);
$result = odbc_exec($conexion, $sql);

while (odbc_fetch_row($result))
	{
	$return = $return.''.trim(odbc_result($result, 1 )).'	'.trim(odbc_result($result, 2 )).'	'.trim(odbc_result($result, 3 )).';';
	}

return $return;
}

///////////////////////////////////////////////////////////////////////
//
//	Lista artículos de albaranes de días anteriores sin precio
//
///////////////////////////////////////////////////////////////////////
function listartalbsinprecio($vendedor, $cliente){
include('bd.php');


$sql = 'select art_hliven, des_Art, mar_hliven, amp_marcas as descmarca, ter_marcas as ter_marca, bul_hliven, pre_hliven, emp_hliven, cen_hliven, alb_hliven, num_hliven, "A" , fec_hliven
from ffhliven, ffarticu, fffamusu, ffclient , ffmarcas 
where emp_hliven = 1 and usu_famusu = \''.$vendedor.'\'  and cli_hliven = cod_cli and cli_hliven = \''.$cliente.'\' and art_hliven = cod_art and fam_art = fam_famusu and bul_hliven > 0 and pre_hliven = 0 and ind_hliven in ( \''.A.'\') and mar_marcas = mar_hliven and art_marcas = art_hliven and emp_marcas = emp_hliven
Order by  emp_hliven, cen_hliven, alb_hliven, num_hliven, art_hliven;';

$conexion = odbc_pconnect($dsn , $user, $password);
$result = odbc_exec($conexion, $sql);


while (odbc_fetch_row($result))
	{
	
	$return = $return.''.trim(odbc_result($result, 1 )).'	'.trim(odbc_result($result, 2 )).'	'.trim(odbc_result($result, 3 )).'	'.trim(odbc_result($result, 4 )).'	'.trim(odbc_result($result, 5 )).'	'.trim(odbc_result($result, 6 )).'	'.trim(odbc_result($result, 7 )).'	'.trim(odbc_result($result, 8 )).'	'.trim(odbc_result($result, 9 )).'	'.trim(odbc_result($result, 10 )).'	'.trim(odbc_result($result, 11 )).'	'.trim(odbc_result($result, 12 )).'	'.trim(odbc_result($result, 13 )).';';
	}

return $return;

}


//////////////////////////////////////////////////////////////////////////////
//
// Lista artículos de albaranes de días anteriores por vendedor
//
//////////////////////////////////////////////////////////////////////////////

function artalbsinprecio($empresa, $vendedor, $operador, $tipocli){
include('bd.php');

$sql = 'select  art_hliven, des_art, mar_hliven, ter_marcas , pro_hliven, emp_hliven, cen_hliven, alb_hliven, num_hliven from ffhliven, ffarticu, fffamusu, ffclient, ffmarcas where pre_hliven = 0 and bul_hliven > 0  and ind_hliven = "A" and art_hliven = cod_art and fam_art = fam_famusu and usu_famusu = \''.$vendedor.'\' and cli_hliven = cod_cli and tip_cli '.$operador.' \''.$tipocli.'\' and mar_hliven = mar_marcas group by 1,2,3,4,5,6,7, 8, 9;';

$conexion = odbc_pconnect($dsn , $user, $password);
$result = odbc_exec($conexion, $sql);

while (odbc_fetch_row($result))
	{
	$return = $return.''.trim(odbc_result($result, 1 )).'	'.trim(odbc_result($result, 2 )).'	'.trim(odbc_result($result, 3 )).'	'.trim(odbc_result($result, 4 )).'	'.trim(odbc_result($result, 5 )).'	'.trim(odbc_result($result, 6 )).'	'.trim(odbc_result($result, 7 )).'	'.trim(odbc_result($result, 8 )).'	'.trim(odbc_result($result, 9 )).';';
	}

return $return;

}

//////////////////////////////////////////////////////////////////////////////
//
// Lista clientes con articulos sin precio de dias anteriores por vendedor
//
//////////////////////////////////////////////////////////////////////////////

function listcliventadiaartsinprecio($empresa, $articulo, $vendedor, $operador, $tipocli){
include('bd.php');


$sql = 'select distinct(cli_hliven), nom_cli,  mot_cli, bul_hliven, pre_hliven, emp_hliven, alb_hliven, cen_hliven, num_hliven, ind_hliven

from ffhliven,
	 ffclient ,
	 fffamusu,
	 ffarticu

where emp_hliven = '.$empresa.' and 
	  cli_hliven = cod_cli and 
	  art_hliven = cod_art and 
	  fam_famusu = fam_art and 
	  usu_famusu = "'.$vendedor.'"  and ind_hliven in ( "A") and pre_hliven = 0 and bul_hliven > 0 and tip_cli '.$operador.' "'.$tipocli.'" and art_hliven = "'.$articulo.'" order by cli_hliven;';

$conexion = odbc_pconnect($dsn , $user, $password);
$result = odbc_exec($conexion, $sql);


while (odbc_fetch_row($result))
	{
	$return = $return.''.trim(odbc_result($result, 1 )).'	'.trim(odbc_result($result, 2 )).'	'.trim(odbc_result($result, 3 )).'	'.trim(odbc_result($result, 4 )).'	'.trim(odbc_result($result, 5 )).'	'.trim(odbc_result($result, 6 )).'	'.trim(odbc_result($result, 7 )).'	'.trim(odbc_result($result, 8 )).'	'.trim(odbc_result($result, 9 )).'	'.trim(odbc_result($result, 10 )).';';
	}


return $return;

}



?>
