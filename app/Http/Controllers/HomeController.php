<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\laporan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function profilKami()
   {
      return view('profilKami');
   }
   public function bisnisKami()
   {
      return view('bisnisKami');
   }
   public function bisnisKami_epc()
   {
      return view('bisnisKami-epc');
   }
   public function bisnisKami_services()
   {
      return view('bisnisKami-services');
   }
   public function bisnisKami_trading()
   {
      return view('bisnisKami-trading');
   }
   public function bisnisKami_product()
   {
      return view('bisnisKami-product');
   }
   public function sertifikat()
   {
      return view('sertifikat');
   }
   public function susunanPengurus()
   {
      return view('susunanPengurus');
   }
   public function prospektus()
   {
      return view('prospektus');
   }
   public function portofolioProjek()
   {
    return view('portofolio-projek');
   }
   public function infoInvestor()
   {
    return view('investor-info');
   }
   public function pemegangSaham()
   {
      return view('investor-saham');
   }
   public function tataKelola_biro()
   {
      return view('tataKelola-biro');
   }
   public function tataKelola_komite()
   {
      return view('tataKelola-komite');
   }
   public function tataKelola_sekretaris()
   {
      return view('tataKelola-sekretaris');
   }
   public function tataKelola_akuntan()
   {
      return view('tataKelola-akuntan');
   }
   public function investorLaporan()
   {
      return view('investor-laporan');
   }
   public function investorRapat()
   {
      return view('investor-rapat');
   }
   public function investorTanggungjawab()
   {
      return view('investor-tanggungjawab');
   }
   public function strukturPerusahaan()
   {
      return view('strukturPerusahaan');
   }
   public function kontakKami()
   {
      return view('kontakKami');
   }
   public function berita()
   {
      $data = berita::latest()->get();
      return view('guest-berita', compact('data'));
   }
   public function laporan()
   {
      $data = laporan::latest()->get();
      return view('investor-laporan', compact('data'));
   }



   // view page bahasa inggris
   public function home()
   {
      return view('eng.home');
   }
   public function profile()
   {
      return view('eng.profile');
   }
   public function structure()
   {
      return view('eng.structure');
   }
   public function board()
   {
      return view('eng.board');
   }
   public function certificate()
   {
      return view('eng.certificate');
   }
   public function business()
   {
      return view('eng.business');
   }
   public function business_epc()
   {
      return view('eng.business-epc');
   }
   public function business_product()
   {
      return view('eng.business-product');
   }
   public function business_services()
   {
      return view('eng.business-services');
   }
   public function business_trading()
   {
      return view('eng.business-trading');
   }
   public function investorInfo()
   {
      return view('eng.investorInfo');
   }
   public function shareholders()
   {
      return view('eng.shareholders');
   }
}
