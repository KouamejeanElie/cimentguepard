<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//Toutes les routes pour les pages publiques
Route::group([

     'prefix' => 'Pages'
], function(){
    Route::get('a-propos','AllPageController@ShowAbout')->name('path_a-propos');
    Route::get('contact','AllPageController@ShowContact')->name('path_contact');
    Route::get('locationetgestion','AllPageController@ShowConstruction')->name('path_construction');
    Route::get('ventemateriaux','AllPageController@ShowCiment')->name('path_ciment');
    Route::get('devis','AllPageController@ShowDevis')->name('path_devis');
    Route::get('rdv','AllPageController@ShowRdv')->name('path_rdv');
});

//Route pour stocker les messages venant du formaulaire
Route::post('/sendformcontact','AllPageController@sendformcontact')->name('path_send_contact');

//Route pour stocker les rendez vous
Route::post('/sendrdv','AllPageController@sendrdv')->name('path_send_rdv');

//Route pour stocker les demandes de devis
Route::post('/senddevis','AllPageController@senddevis')->name('path_send_devis');

//Route pour stocker les newsletters
Route::post('/sendnewsletter','AllPageController@sendnewsletter')->name('path_send_newsletter');

Auth::routes();

Route::get('/home', 'HomeController@index')->middleware(['auth'])->name('home');


//Route pour acceder a l'administration
Route::group([

     'prefix' => 'Admin'
], function(){
    Route::get('admin/adminhome','AdminController@index')->name('path_admin_home')->middleware('is_admin');
});

//Route Admin pour acceder aux Forms
Route::group([

     'prefix' => 'Admin'
], function(){
    Route::get('formscontact','AdminController@showAdminContact')->name('path_admin_contact');
    Route::get('formsnewsletter','AdminController@showAdminNewsletter')->name('path_admin_newsletter');
    Route::get('formsrdv','AdminController@showAdminRdv')->name('path_admin_rdv');
    Route::get('formsdevis','AdminController@showAdminDevis')->name('path_admin_devis');
    Route::get('formsarticle','AdminController@showAdminArticle')->name('path_admin_article');
    Route::get('formsprojet','AdminController@showAdminProjet')->name('path_admin_projet');
    Route::get('formstemoignages','AdminController@showAdminTemoignage')->name('path_admin_temoignage');
});

//Store article / projet / temoignage
Route::group([

     'prefix' => 'Admin'
], function(){
    Route::post('formsarticle','AdminController@StoreArticle')->name('path_admin_store_article');
    Route::post('formsprojet','AdminController@StoreProjet')->name('path_admin_store_projet');
     Route::post('formstemoignages','AdminController@StoreTemoignage')->name('path_admin_store_temoignage');
});


//Route Admin action update
Route::group([

     'prefix' => 'Admin'
], function(){
    Route::get('formsarticle/{id}','AdminController@EditAdminArticle')->name('path_edit_admin_article');
    Route::patch('articleedit/{id}','AdminController@updatearticle');
    Route::get('formsprojet/{id}','AdminController@EditAdminProjet')->name('path_edit_admin_projet');
    Route::patch('projetedit/{id}','AdminController@updateprojet');
    Route::get('formstemoignages/{id}','AdminController@EditAdminTemoignage')->name('path_edit_admin_temoignage');
    Route::patch('temoignageedit/{id}','AdminController@updatetemoignage');
});



//Route Admin action delete
Route::group([

     'prefix' => 'Admin'
], function(){
    Route::delete('formsrdv/{id}','AdminController@DeleteAdminRdv')->name('path_delete_admin_rdv');
    Route::delete('formsdevis/{id}','AdminController@DeleteAdminDevis')->name('path_delete_admin_devis');
    Route::delete('formscontact/{id}','AdminController@DeleteAdminContact')->name('path_delete_admin_contact');
    Route::delete('formsnewsletter/{id}','AdminController@DeleteAdminNewsletter')->name('path_delete_admin_newsletter');
    Route::delete('formsarticle/{id}','AdminController@DeleteAdminArticle')->name('path_delete_admin_article');
     Route::delete('formsprojet/{id}','AdminController@DeleteAdminProjet')->name('path_delete_admin_projet');
      Route::delete('formstemoignages/{id}','AdminController@DeleteAdminTemoignage')->name('path_delete_admin_temoignage');
});
