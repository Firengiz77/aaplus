<?php

use App\Models\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Back\BackController;
use App\Http\Controllers\Back\UserController;
use App\Http\Controllers\Front\MainController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\ProjecttypeController;

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

// yeni deyisiklik

// admin panel template get routeleri
Route::prefix('admin')->group(function(){

    // Admin Panel routeleri
Route::get('/index',[BackController::class,'index'])->middleware('admin')->name('admin.index');
Route::get('/user_index',[UserController::class,'user_index'])->middleware('admin')->name('user_index');
Route::post('/admin_edit_all', [UserController::class, 'admin_edit_all'])->name('admin.edit.all');
Route::post('/admin_edit_password', [UserController::class, 'admin_edit_password'])->name('admin.edit.password');
Route::get('/user', [UserController::class, 'users'])->name('user.index');
Route::get('/add-role/{id}', [UserController::class, 'add_role'])->name('add-role');
Route::get('/delete/{id}',[UserController::class,'delete_user'])->name('delete-user');

// pages routeleri
Route::get('/page_index',[PageController::class,'index'])->name('page.index');
Route::get('/page_add',[PageController::class,'page_add'])->name('page.page_add');
Route::post('/page/add',[PageController::class,'create'])->name('page.add');
Route::get('/page/edit/{id}',[PageController::class,'edit'])->name('page.edit');
Route::post('/page/update/{id}',[PageController::class,'update'])->name('page.update');
Route::get('/page/delete/{id}',[PageController::class,'delete_page'])->name('delete-page');

// contact routeleri
Route::get('/contact_index',[ContactController::class,'index'])->name('contact.index');
Route::get('/contact_add',[ContactController::class,'contact_add'])->name('contact.contact_add');
Route::post('/contact/add',[ContactController::class,'create'])->name('contact.add');
Route::get('/contact/edit/{id}',[ContactController::class,'edit'])->name('contact.edit');
Route::post('/contact/update/{id}',[ContactController::class,'update'])->name('contact.update');
Route::get('/contact/delete/{id}',[ContactController::class,'delete_contact'])->name('delete-contact');

// gallery routeleri
Route::get('/gallery_index',[GalleryController::class,'index'])->name('gallery.index');
Route::get('/gallery_add',[GalleryController::class,'gallery_add'])->name('gallery.gallery_add');
Route::post('/gallery/add',[GalleryController::class,'create'])->name('gallery.add');
Route::get('/gallery/edit/{id}',[GalleryController::class,'edit'])->name('gallery.edit');
Route::post('/gallery/update/{id}',[GalleryController::class,'update'])->name('gallery.update');
Route::get('/gallery/delete/{id}',[GalleryController::class,'delete_gallery'])->name('delete-gallery');

// slider routeleri
Route::get('/slider_index',[SliderController::class,'index'])->name('slider.index');
Route::get('/slider_add',[SliderController::class,'slider_add'])->name('slider.slider_add');
Route::post('/slider/add',[SliderController::class,'create'])->name('slider.add');
Route::get('/slider/edit/{id}',[SliderController::class,'edit'])->name('slider.edit');
Route::post('/slider/update/{id}',[SliderController::class,'update'])->name('slider.update');
Route::get('/slider/delete/{id}',[SliderController::class,'delete_slider'])->name('delete-slider');


// counter routeleri
Route::get('/counter_index',[CounterController::class,'index'])->name('counter.index');
Route::post('/counter/add',[CounterController::class,'create'])->name('counter.add');
Route::get('/counter/edit/{id}',[CounterController::class,'edit'])->name('counter.edit');
Route::post('/counter/update/{id}',[CounterController::class,'update'])->name('counter.update');
Route::get('/counter/delete/{id}',[CounterController::class,'delete_counter'])->name('delete-counter');

// certificate routeleri
Route::get('/certificate_index',[CertificateController::class,'index'])->name('certificate.index');
Route::post('/certificate/add',[CertificateController::class,'create'])->name('certificate.add');
Route::get('/certificate/edit/{id}',[CertificateController::class,'edit'])->name('certificate.edit');
Route::post('/certificate/update/{id}',[CertificateController::class,'update'])->name('certificate.update');
Route::get('/certificate/delete/{id}',[CertificateController::class,'delete_certificate'])->name('delete-certificate');

// partners routeleri
Route::get('/partners_index',[PartnerController::class,'index'])->name('partners.index');
Route::post('/partners/add',[PartnerController::class,'create'])->name('partners.add');
Route::get('/partners/edit/{id}',[PartnerController::class,'edit'])->name('partners.edit');
Route::post('/partners/update/{id}',[PartnerController::class,'update'])->name('partners.update');
Route::get('/partners/delete/{id}',[PartnerController::class,'delete_partners'])->name('delete-partners');

// news routeleri
Route::get('/news_index',[NewsController::class,'index'])->name('news.index');
Route::get('/news_add',[NewsController::class,'news_add'])->name('news.news_add');
Route::post('/news/add',[NewsController::class,'create'])->name('news.add');
Route::get('/news/edit/{id}',[NewsController::class,'edit'])->name('news.edit');
Route::post('/news/update/{id}',[NewsController::class,'update'])->name('news.update');
Route::get('/news/delete/{id}',[NewsController::class,'delete_news'])->name('delete-news');

// project type routeleri
Route::get('/project_type_index',[ProjecttypeController::class,'index'])->name('project_type.index');
Route::post('/project_type/add',[ProjecttypeController::class,'create'])->name('project_type.add');
Route::post('/project_type/update/{id}',[ProjecttypeController::class,'update'])->name('project_type.update');
Route::get('/project_type/delete/{id}',[ProjecttypeController::class,'delete_project_type'])->name('delete-project_type');


// project routeleri
Route::get('/project_index',[ProjectController::class,'index'])->name('project.index');
Route::get('/project_add',[ProjectController::class,'project_add'])->name('project.project_add');
Route::post('/project/add',[ProjectController::class,'create'])->name('project.add');
Route::post('/project/update/{id}',[ProjectController::class,'update'])->name('project.update');
Route::get('/project/delete/{id}',[ProjectController::class,'delete_project'])->name('delete-project');


// category routeleri
Route::get('/category_index',[CategoryController::class,'index'])->name('category.index');
Route::post('/category/add',[CategoryController::class,'create'])->name('category.add');
Route::post('/category/update/{id}',[CategoryController::class,'update'])->name('category.update');
Route::get('/category/delete/{id}',[CategoryController::class,'delete_category'])->name('delete-category');


// product routeleri
Route::get('/product_index',[ProductController::class,'index'])->name('product.index');
Route::get('/product_add',[ProductController::class,'product_add'])->name('product.product_add');
Route::post('/product/add',[ProductController::class,'create'])->name('product.add');
Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::post('/product/update/{id}',[ProductController::class,'update'])->name('product.update');
Route::get('/product/delete/{id}',[ProductController::class,'delete_product'])->name('delete-product');

// Messages routeler
Route::get('/messages_index',[MessagesController::class,'index'])->name('messages.index');
Route::get('/message/delete/{id}',[MessagesController::class,'delete_message'])->name('delete-message');





});

// admin panel register login routeleri 
Route::get('/register', function () { 
    return view('admin.user.register');
})->name('register');

Route::get('/login', function () {
    return view('admin.user.login');
})->name('admin.login');

Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'register']);
Route::get('/logout', [UserController::class, 'logout'])->name('admin.logout');






Route::get('/{locale}/lang', function ($locale) {
    App::setLocale($locale);
    Session::put('locale', $locale);
    return redirect()->back();
});



$lang = Request::segment(1);

if(in_array($lang, ['az','en','ru'])){
    app()->setLocale($lang);
}else{
    app()->setLocale('az');

    $lang = '';
}

Route::get('/', function () {
    return redirect(app()->getLocale());
});


Route::group([
    'prefix' => $lang
  ], function(){ 
            Route::get('/', [MainController::class,'getPage'])->name('index');
            Route::get('/single', [MainController::class,'getSinglePage'])->name('single');
            Route::get('{slug}/{project?}', [MainController::class,'getPage'])->name('project');
           Route::get('{slug2}/{project2?}/{project3?}', [MainController::class,'getPage'])->name('project2');

});

Route::post('/sendmail2', [MainController::class,'sendmail2'])->name('sendmail2');
Route::get('search',[MainController::class, 'search']);







