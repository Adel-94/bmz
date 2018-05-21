<?php

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
Route::middleware(['auth','admin'])->group(function(){
    Route::get('/admin', function () {
        return view('admin_view.layouts.admin');
    });
    //Settings

    Route::get('/admin/adminSettings', 'UserController@index')->name('adminSettings');
    Route::get('/delete_adminSettings/{id}','UserController@delete_adminSettings')->name('delete_adminSettings');
    Route::get('/edit_adminSettings/{id}','UserController@edit_adminSettings')->name('edit_adminSettings');
    Route::post('/update_adminSettings/{id}','UserController@update_adminSettings')->name('update_adminSettings');

    //about
    Route::get('/admin/about', 'AboutController@index')->name('about');
    Route::post('/admin/save_about', 'AboutController@save_about');
    Route::get('/admin/add_about', 'AboutController@add_about');
    Route::get('/delete_about/{id}','AboutController@delete_about')->name('delete_about');
    Route::get('/edit_about/{id}','AboutController@edit_about')->name('edit_about');
    Route::post('/update_about/{id}','AboutController@update_about')->name('update_about');
            //product_category
    Route::get('/admin/prodCat', 'Product_categoryController@index')->name('prodCat');
    Route::post('/admin/save_prodCat', 'Product_categoryController@save_prodCat');
    Route::get('/admin/add_prodCat', 'Product_categoryController@add_prodCat');
    Route::get('/delete_prodCat/{id}','Product_categoryController@delete_prodCat')->name('delete_prodCat');
    Route::get('/edit_prodCat/{id}','Product_categoryController@edit_prodCat')->name('edit_prodCat');
    Route::post('/update_prodCat/{id}','Product_categoryController@update_prodCat')->name('update_prodCat');
  
     //products
    Route::get('/admin/products', 'ProductsController@index')->name('products');
    Route::post('/admin/save_products', 'ProductsController@save_products');
    Route::get('/admin/add_products', 'ProductsController@add_products');
    Route::get('/delete_products/{id}','ProductsController@delete_products')->name('delete_products');
    Route::get('/edit_products/{id}','ProductsController@edit_products')->name('edit_products');
    Route::post('/update_products/{id}','ProductsController@update_products')->name('update_products');
  
 
});
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'MainController@index')->name('bmz');
Route::get('about', 'MainController@about')->name('about_bmz');
Route::get('projects', 'MainController@projects')->name('projects_bmz');
Route::get('products', 'MainController@product')->name('products_bmz');
Route::get('order', 'MainController@order')->name('order_bmz');
Route::get('contact', 'MainController@contact')->name('contact_bmz');
Route::get('/products/cat/{cat}', 'MainController@sortbyCat')->name('sortCat_bmz');
Route::get('productDetails/{id}', 'MainController@productDetails')->name('productDetails');
Route::post('postMessage', 'MailController@postMessage');
Route::post('sendOrder', 'MailController@sendOrder');
Route::get('search', 'MainController@search');
Auth::routes();
//ana.niye? bi dak,bu gedib products adinda view tapa bilmir deyecem ama,bu duzdu axi
Route::get('/home', 'HomeController@index')->name('home');
