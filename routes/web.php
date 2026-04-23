<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ProductBookingController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



/*
|--------------------------------------------------------------------------
| Frontend  Route Starts
|--------------------------------------------------------------------------
|
|
*/

// Route::get('/', function () {
//     return view('frontend.layouts.layout');
// })->name('home');


Route::get('/login',function(){
    return view('auth.login');
})->name('login');


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::view('/about-us', 'frontend.about')->name('about-us');
Route::view('/aluminium-profile-gate', 'frontend.aluminium-profile-gate')->name('aluminium-profile-gate');
Route::view('/glass-railing', 'frontend.glass-railing')->name('glass-railing');
Route::view('/steel-gate', 'frontend.steel-gate')->name('steel-gate');
Route::view('/powder-coated-railing', 'frontend.powder-coated-railing')->name('powder-coated-railing');

Route::view('/duplex-staircase', 'frontend.duplex-staircase')->name('duplex-staircase');
Route::view('/iron-steel-interior-work', 'frontend.iron-steel-interior-work')->name('iron-steel-interior-work');

Route::view('/contact', 'frontend.contact')->name('contact');
Route::view('/blogs', 'frontend.blogs')->name('blogs');
Route::view('/blogs-details', 'frontend.blogs-details')->name('blog-details');








// Route::view('/whyus', 'frontend.whyus')->name('whyus');









Route::post('/contact-submit', [HomeController::class, 'contactSubmit'])->name('contact.submit');
Route::view('/thank-you', 'frontend.thank-you')->name('thankyou');

Route::post('/appointment-submit',[HomeController::class, 'appointmentSubmit'])->name('appointment.submit');


Route::get('/gallery', [HomeController::class, 'Gallery'])->name('galleries');
Route::post('/gallery', [HomeController::class, 'Gallery'])->name('gallery');
Route::post('/contact/send', [HomeController::class, 'sendContact'])->name('contact.send');
Route::post('/send-enquiry', [HomeController::class, 'sendEnquiry'])->name('send.enquiry');

Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');
Route::get('/blog/{slug}', [HomeController::class, 'show'])->name('blog.details');
Route::get('/category/{slug}', [HomeController::class, 'category'])->name('blog.category');

Route::get('/{slug}', [HomeController::class, 'pages'])->name('page.details');


/*
|--------------------------------------------------------------------------
| Frontend  Route Ends
|--------------------------------------------------------------------------
|
|
*/


/*
|--------------------------------------------------------------------------
| Backend  Route Start
|--------------------------------------------------------------------------
|
|
*/


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::prefix('dashboard')->group(function () {
        Route::resource('categories', CategoryController::class);
    });
    Route::prefix('dashboard')->name('admin.')->middleware(['auth'])->group(function () {
        Route::resource('blogs', BlogController::class);
         Route::resource('gallery', \App\Http\Controllers\Admin\GalleryController::class);
         Route::resource('teams', \App\Http\Controllers\Admin\TeamsController::class);
         Route::resource('testimonials', \App\Http\Controllers\Admin\TestimonialController::class);
         Route::resource('pages', \App\Http\Controllers\Admin\PageController::class);
    });
    Route::prefix('dashboard')->name('admin.')->group(function () {
        Route::get('/product-bookings', [ProductBookingController::class, 'index'])->name('product.bookings');
        Route::delete('/product-bookings/{id}', [ProductBookingController::class, 'destroy'])->name('product.bookings.destroy');
    });
    Route::prefix('dashboard')->name('admin.')->group(function () {
        Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');
        Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');
    });

    Route::post('/clear-cache', function () {
    Artisan::call('optimize:clear');
    return back()->with('success', 'Cache cleared successfully!');
})->name('cache.clear')->middleware('auth');

});

require __DIR__ . '/auth.php';



