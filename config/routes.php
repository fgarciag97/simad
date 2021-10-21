<?php

use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {

    $routes->registerMiddleware('csrf', new CsrfProtectionMiddleware([
        'httpOnly' => true
    ]));
    $routes->applyMiddleware('csrf');

    $routes->connect('/', ['controller' => 'Panel', 'action' => 'index']);

    //=========================================================
    // PRESUPUESTO
    //=========================================================
    /*$routes->connect('/datos-entidad', ['controller' => 'MpDatosEntidad', 'action' => 'index']);
    $routes->connect('/ingresos', ['controller' => 'MpIngresos', 'action' => 'index']);
    $routes->connect('/categorias-programaticas', ['controller' => 'MpCategoriasProgramaticas', 'action' => 'index']);
    $routes->connect('/resumen-presupuestario', ['controller' => 'MpRp', 'action' => 'index']);
    $routes->connect('/resumen-presupuestario-por-partidas', ['controller' => 'MpRpPartidas', 'action' => 'index']);
    $routes->connect('/resumen-presupuestario-por-sectores', ['controller' => 'MpRpSectores', 'action' => 'index']);
    $routes->connect('/gastos-por-trasferencias-y-donaciones', ['controller' => 'MpGastosTD', 'action' => 'index']);
    $routes->connect('/gastos-de-inversion', ['controller' => 'MpGastosI', 'action' => 'index']);
    $routes->connect('/asignacion-presupuestaria', ['controller' => 'MpAsignacionPresupuestaria', 'action' => 'index']);
    $routes->connect('/presupuesto', ['controller' => 'MpPresupuestos', 'action' => 'index']);
    $routes->connect('/proyectos', ['controller' => 'MpProyectos', 'action' => 'index']);
    $routes->connect('/reportes', ['controller' => 'MpReportes', 'action' => 'index']);*/

    $routes->fallbacks(DashedRoute::class);
});


//Rutas sin proteccion CSRF
Router::scope('/', function ($routes) {
    $routes->connect('/m-u-g-m-r-r-h-h-tabulacion-salarial/EditarTabulacionEmpleados/*', ['controller' => 'MUGRRHHTabulacionSalarial', 'action' => 'EditarTabulacionEmpleados']);
    $routes->connect('/m-u-g-m-r-r-h-h-tabulacion-salarial/EditarTabulacionDirectivos/*', ['controller' => 'MUGRRHHTabulacionSalarial', 'action' => 'EditarTabulacionDirectivos']);
    $routes->connect('/m-u-g-m-r-r-h-h-tabulacion-salarial/EditarTabulacionObreros/*', ['controller' => 'MUGRRHHTabulacionSalarial', 'action' => 'EditarTabulacionObreros']);
    $routes->connect('/m-u-g-m-r-r-h-h-tabulacion-salarial/EditarTabulacionObrerosNoPermanentes/*', ['controller' => 'MUGRRHHTabulacionSalarial', 'action' => 'EditarTabulacionObrerosNoPermanentes']);
    $routes->connect('/m-u-g-m-r-r-h-h-tabulacion-salarial/EditarTabulacionProteccionCivil/*', ['controller' => 'MUGRRHHTabulacionSalarial', 'action' => 'EditarTabulacionProteccionCivil']);
    $routes->connect('/m-u-g-m-r-r-h-h-tabulacion-salarial/EditarTabulacionRotativo/*', ['controller' => 'MUGRRHHTabulacionSalarial', 'action' => 'EditarTabulacionRotativo']);
    $routes->connect('/m-u-g-m-r-r-h-h-tabulacion-salarial/parametrosprimas/*', ['controller' => 'MUGRRHHTabulacionSalarial', 'action' => 'parametrosprimas']);
    $routes->connect('/m-u-g-m-r-r-h-h-tabulacion-salarial/parametrosparametros/*', ['controller' => 'MUGRRHHTabulacionSalarial', 'action' => 'parametrosparametros']);
    $routes->connect('/m-u-g-m-r-r-h-h-tabulacion-salarial/parametrosporcentaje/*', ['controller' => 'MUGRRHHTabulacionSalarial', 'action' => 'parametrosporcentaje']);
    $routes->connect('/m-u-g-m-r-r-h-h-tabulacion-salarial/parametrosprofesion/*', ['controller' => 'MUGRRHHTabulacionSalarial', 'action' => 'parametrosprofesion']);
    
    $routes->connect('/m-r-r-h-h-cesta-ticket-empleados/EditarCT/*', ['controller' => 'MRRHHCestaTicketEmpleados', 'action' => 'EditarCT']);
    $routes->connect('/m-r-r-h-h-cesta-ticket-cementerio/EditarCT/*', ['controller' => 'MRRHHCestaTicketCementerio', 'action' => 'EditarCT']);
    $routes->connect('/m-r-r-h-h-cesta-ticket-obreros/EditarCT/*', ['controller' => 'MRRHHCestaTicketObreros', 'action' => 'EditarCT']);
    $routes->connect('/m-r-r-h-h-cesta-ticket-proteccion-civil/EditarCT/*', ['controller' => 'MRRHHCestaTicketProteccionCivil', 'action' => 'EditarCT']);

    $routes->connect('/m-r-r-h-h-horas-extras-empleados/EditarHE/*', ['controller' => 'MRRHHHorasExtrasEmpleados', 'action' => 'EditarHE']);
    $routes->connect('/m-r-r-h-h-horas-extras-obreros/EditarHE/*', ['controller' => 'MRRHHHorasExtrasObreros', 'action' => 'EditarHE']);
    $routes->connect('/m-r-r-h-h-horas-extras-proteccion-civil/EditarHE/*', ['controller' => 'MRRHHHorasExtrasProteccionCivil', 'action' => 'EditarHE']);
    
    $routes->connect('/m-r-r-h-h-prestaciones-sociales/asignar/*', ['controller' => 'MRRHHPrestacionesSociales', 'action' => 'asignar']);
    $routes->connect('/m-r-r-h-h-vacaciones/EditarV/*', ['controller' => 'MRRHHVacaciones', 'action' => 'EditarV']);
    $routes->connect('/m-r-r-h-h-fin/EditarF/*', ['controller' => 'MRRHHFin', 'action' => 'EditarF']);
    $routes->connect('/m-compra-ordenes-emitidas/EditarCompra/*', ['controller' => 'MCompraOrdenesEmitidas', 'action' => 'EditarCompra']);
    $routes->connect('/m-compra-ordenes-servicio/EditarServicio/*', ['controller' => 'MCompraOrdenesServicio', 'action' => 'EditarServicio']);
    $routes->connect('/m-compra-ordenes-emitidas/EditarOrden/*', ['controller' => 'MCompraOrdenesEmitidas', 'action' => 'EditarOrden']);
    $routes->connect('/m-compra-ordenes-servicio/EditarOrden/*', ['controller' => 'MCompraOrdenesServicio', 'action' => 'EditarOrden']);
    $routes->connect('/ingresos/editar/*', ['controller' => 'MpIngresos', 'action' => 'editar']);
    $routes->connect('/mp-egresos/ajustar/*', ['controller' => 'MpEgresos', 'action' => 'ajustar']);
    $routes->connect('/mp-resolucion/incrementar/*', ['controller' => 'MpResolucion', 'action' => 'incrementar']);
    $routes->connect('/mp-resolucion/disminuir/*', ['controller' => 'MpResolucion', 'action' => 'disminuir']);
    $routes->connect('/mp-proyectos/editaregresos/*', ['controller' => 'MpProyectos', 'action' => 'editaregresos']);
    $routes->connect('/mrrhh-formulacion/editarultimoano/*', ['controller' => 'MrrhhFormulacion', 'action' => 'editarultimoano']);
    $routes->connect('/mrrhh-formulacion/editarultimoanoempleados/*', ['controller' => 'MrrhhFormulacion', 'action' => 'editarultimoanoempleados']);
    $routes->connect('/m-r-r-h-h-nomina/asignardias/*', ['controller' => 'MRRHHNomina', 'action' => 'asignardias']);
    $routes->connect('/m-r-r-h-h-vacaciones-o/asignardias/*', ['controller' => 'MRRHHVacacionesO', 'action' => 'asignardias']);
    $routes->connect('/m-r-r-h-h-fin-o/asignardias/*', ['controller' => 'MRRHHFinO', 'action' => 'asignardias']);
    $routes->connect('/m-r-r-h-h-bono-estabilidad/asignarbono/*', ['controller' => 'MRRHHBonoEstabilidad', 'action' => 'asignarbono']);
    $routes->connect('/m-r-r-h-h-asistencia-medica/asignarasistencia/*', ['controller' => 'MRRHHAsistenciaMedica', 'action' => 'asignarasistencia']);
    $routes->connect('/ejecucion-transferencia/EditarOrden/*', ['controller' => 'EjecucionTransferencia', 'action' => 'EditarOrden']);
    $routes->connect('/ejecucion-transferencia/editar/*', ['controller' => 'EjecucionTransferencia', 'action' => 'editar']);
    $routes->connect('/m-r-r-h-h-nomina/sueldoindividual/*', ['controller' => 'MRRHHNomina', 'action' => 'sueldoindividual']);
    $routes->connect('/m-r-r-h-h-retroactivo/sueldoindividual/*', ['controller' => 'MRRHHRetroactivo', 'action' => 'sueldoindividual']);
    $routes->connect('/m-r-r-h-h-retroactivo-v/sueldoindividual/*', ['controller' => 'MRRHHRetroactivoV', 'action' => 'sueldoindividual']);
    $routes->connect('/m-r-r-h-h-retroactivo/sueldoindividualam/*', ['controller' => 'MRRHHRetroactivo', 'action' => 'sueldoindividualam']);
    $routes->connect('/m-r-r-h-h-retroactivo/sueldoindividualbe/*', ['controller' => 'MRRHHRetroactivo', 'action' => 'sueldoindividualbe']);
    $routes->connect('/m-ordenamiento/numeroordennomina/*', ['controller' => 'MOrdenamiento', 'action' => 'numeroordennomina']);
    $routes->connect('/m-ordenamiento/numeroordencompra/*', ['controller' => 'MOrdenamiento', 'action' => 'numeroordencompra']);
    $routes->connect('/m-ordenamiento/numeroordenservicio/*', ['controller' => 'MOrdenamiento', 'action' => 'numeroordenservicio']);
    $routes->connect('/m-ordenamiento/numeroordentransferencia/*', ['controller' => 'MOrdenamiento', 'action' => 'numeroordentransferencia']);
    $routes->connect('/mp-resolucion/editarpartidarel/*', ['controller' => 'MpResolucion', 'action' => 'editarpartidarel']);
    $routes->fallbacks(DashedRoute::class);
});