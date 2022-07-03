<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// AUTH
$routes->match(['get', 'post'], '/login', 'Auth::index', ['filter' => 'noauth']);

$routes->group('', ['filter' => 'auth'], function ($routes) {

    // AUTH
    $routes->match(['get', 'post'], '/logout', 'Auth::logout');

    // DASHBOARD
    $routes->get('/', 'Dashboard::index');

    // KEUANGAN
    $routes->get('/keuangan/pendapatan', 'Keuangan::DataPendapatan');
    $routes->get('/keuangan/edit-pendapatan', 'Keuangan::EditPendapatan');
    $routes->get('/keuangan/pengeluaran', 'Keuangan::DataPengeluaran');
    $routes->get('/keuangan/edit-pengeluaran', 'Keuangan::EditPengeluaran');

    $routes->group('', ['filter' => 'mstfilter'], function ($routes) {
        // Master | Poli
        $routes->group('/master/poli', function ($routes) {
            $routes->match(['get', 'post'], '/', 'PoliController::index');
            $routes->match(['get', 'post'], '(:num)/edit', 'PoliController::edit/$1');
        });

        // Master | Tindakan
        $routes->get('/master/tindakan', 'MasterPoli::DataTindakan');
        $routes->get('/master/edit-tindakan', 'MasterPoli::EditTindakan');

        // Master | Obat
        $routes->group('/master/obat', function ($routes) {
            $routes->get('/', 'ObatController::index');
            $routes->post('/', 'ObatController::new');
            $routes->get('(:num)/edit', 'ObatController::edit/$1');
            $routes->put('(:num)/edit', 'ObatController::update/$1');
        });

        // Master | Dokter
        $routes->get('/master/dokter', 'MasterPoli::DataDokter');
        $routes->get('/master/edit-dokter', 'MasterPoli::EditDokter');
    });

    // PASIEN
    $routes->get('/pasien', 'Pasien::index');
    $routes->get('/pasien/edit', 'Pasien::EditPasien');

    // RIWAYAT
    $routes->get('/riwayat', 'Riwayat::index');
    $routes->get('/riwayat/edit', 'Riwayat::EditRiwayat');

    // TINDAKAN
    $routes->get('/tindakan', 'Tindakan::index');
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
