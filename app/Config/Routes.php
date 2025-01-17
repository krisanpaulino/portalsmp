<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('berita', 'Home::berita');
$routes->get('berita/(:num)', 'Home::beritaDetail/$1');
$routes->get('sekolah', 'Home::sekolah');
$routes->get('sekolah/(:num)', 'Home::sekolahDetail/$1');
$routes->get('pendaftaran', 'Home::pendaftaran');
$routes->post('daftar', 'Home::daftar');
$routes->get('success-page', 'Home::successPage');
$routes->get('auth', 'Auth::index');
$routes->post('auth/dologin', 'Auth::login');
$routes->post('auth/dologout', 'Auth::logout', ['filter' => 'login']);
$routes->group('admin', ['filter' => 'login'],  static function ($routes) {
    $routes->get('/', 'Admin::index');
    $routes->get('dashboard', 'Admin::index');

    $routes->get('sekolah', 'Sekolah::index');
    $routes->get('sekolah/tambah', 'Sekolah::tambah');
    $routes->post('sekolah/insert', 'Sekolah::insert');
    $routes->get('sekolah/edit/(:num)', 'Sekolah::edit/$1');
    $routes->get('sekolah/laporan', 'Sekolah::laporan');
    $routes->get('sekolah/(:num)', 'Sekolah::detail/$1');
    $routes->post('sekolah/update', 'Sekolah::update');
    $routes->post('sekolah/delete', 'Sekolah::delete');

    $routes->post('sekolah/insert-riwayat', 'Sekolah::insertRiwayat');
    $routes->post('sekolah/delete-riwayat', 'Sekolah::deleteRiwayat');

    $routes->get('ta', 'Sekolah::ta');
    $routes->post('ta/delete', 'Sekolah::taDelete');
    $routes->post('ta/insert', 'Sekolah::taInsert');

    $routes->get('berita', 'Berita::index');
    $routes->get('berita/tambah', 'Berita::tambah');
    $routes->post('berita/insert', 'Berita::insert');
    $routes->post('berita/update', 'Berita::update');
    $routes->post('berita/delete', 'Berita::delete');
    $routes->get('berita/edit/(:num)', 'Berita::edit/$1');

    $routes->get('pendaftaran', 'Pendaftaran::index');
    $routes->get('pendaftaran/(:num)', 'Pendaftaran::detail/$1');

    $routes->get('profil', 'User::index');
    $routes->post('ganti-password', 'User::updatePassword');
});
