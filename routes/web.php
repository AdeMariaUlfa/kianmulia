<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PortofolioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('login',[LoginController::class,'login'])->name('login');

Route::post('login',[LoginController::class,'proses_login'])->name('login.auth');

Route::post('logout',[LoginController::class,'logout'])->name('logout');

Route::get('/', function () {return view('welcome');});

Route::get('/profil', function () {return view('profilKami');});
Route::get('/profil-bisnis', function () {return view('bisnisKami');});
Route::get('/profil-bisnis-epc', function () {return view('bisnisKami-epc');});
Route::get('/profil-bisnis-services', function () {return view('bisnisKami-services');});
Route::get('/profil-bisnis-trading', function () {return view('bisnisKami-trading');});
Route::get('/profil-bisnis-product', function () {return view('bisnisKami-product');});
Route::get('/profil-susunan', function () {return view('susunanPengurus');});
Route::get('/profil-struktur', function () {return view('strukturPerusahaan');});
Route::get('/profil-sertifikat', function () {return view('sertifikat');}); 
Route::get('/profil-prospektus', function () {return view('prospektus');}); 

Route::get('/tataKelola-biro', function () {return view('tataKelola-biro');}); 
Route::get('/tataKelola-komite', function () {return view('tataKelola-komite');}); 
Route::get('/tataKelola-sekretaris', function () {return view('tataKelola-sekretaris');}); 
Route::get('/tataKelola-akuntan', function () {return view('tataKelola-akuntan');}); 


Route::get('/epc-fabrication', function () {return view('sub-bisnis/epc-fabrication');}); 
Route::get('/epc-installation', function () {return view('sub-bisnis/epc-installation');}); 
Route::get('/epc-testing', function () {return view('sub-bisnis/epc-testing');}); 
Route::get('/product-gas', function () {return view('sub-bisnis/product-gas');}); 
Route::get('/product-konverter', function () {return view('sub-bisnis/product-konverter');}); 
Route::get('/product-metering', function () {return view('sub-bisnis/product-metering');}); 
Route::get('/product-regulating', function () {return view('sub-bisnis/product-regulating');}); 
Route::get('/product-regulator', function () {return view('sub-bisnis/product-regulator');}); 
Route::get('/trading-canalta', function () {return view('sub-bisnis/trading-canalta');}); 
Route::get('/trading-rmg', function () {return view('sub-bisnis/trading-rmg');}); 
Route::get('/trading-honeywell', function () {return view('sub-bisnis/trading-honeywell');}); 
Route::get('/trading-tormene', function () {return view('sub-bisnis/trading-tormene');}); 

Route::resource('/admin/berita',BeritaController::class);
Route::resource('/admin/portofolio',PortofolioController::class);
Route::resource('/admin/laporan',LaporanController::class);
Route::get('/berita', [HomeController::class, 'berita'] );
Route::get('/admin/portofolio/{id}/hapus-dokumentasi',[PortofolioController::class,'destroyDokumentasi'])->name('hapus-dokumentasi');
Route::post('/admin/portofolio/{id}/tambah-dokumentasi',[PortofolioController::class,'tambahDokumentasi'])->name('tambah-dokumentasi');

Route::get('/projek',[PortofolioController::class, 'landing']);
Route::get('/infoInvestor', function () {return view('investor-info');});
Route::get('/pemegangSaham', function () {return view('investor-saham');});
Route::get('/investorLaporan', [HomeController::class, 'laporan'] );
Route::get('/investorRapat', function () {return view('investor-rapat');});
Route::get('/investor-tanggungjawab', function () {return view('investor-tanggungjawab');});

Route::get('/kontak', function () {return view('kontakKami');});
Route::get('/karir', function () {return view('karir');});
Route::get('/admin', function () {return view('admin.dashboard');});


// link route english
Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::get('/ourProfile', [HomeController::class, 'profile'])->name('profile');
Route::get('/structure', [HomeController::class, 'structure'])->name('structure');
Route::get('/board', [HomeController::class, 'board'])->name('board');
Route::get('/certificate', [HomeController::class, 'certificate'])->name('certificate');
Route::get('/business', [HomeController::class, 'business'])->name('business');
Route::get('/business-epc', [HomeController::class, 'business_epc'])->name('business_epc');
Route::get('/business-product', [HomeController::class, 'business_product'])->name('business_product'); 
Route::get('/business-services', [HomeController::class, 'business_services'])->name('business_services'); 
Route::get('/business-trading', [HomeController::class, 'business_trading'])->name('business_trading'); 

Route::get('/investorInfo', [HomeController::class, 'investorInfo'])->name('investorInfo');
Route::get('/shareholders', [HomeController::class, 'shareholders'])->name('shareholders');