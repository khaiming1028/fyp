<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Buyer;
use App\Mail\ContactUs;
use App\Models\Contact;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
require __DIR__.'/auth.php';

Route::get('/', [CarController::class, 'mainpage'])->name('car.homepage') ;
Route::get('/wishlist', [CarController::class, 'carwishlist'])->name('view.wishlist');
Route::delete('/wishlist', [CarController::class, 'deleteWishlist'])->name('delete.wishlist');
Route::get('/portfolio-details/{id}', [CarController::class, 'show'])->name('detail');
Route::get('/portfolio-details', [CarController::class, 'secondpage'])->name('portfolio-detail');
Route::post('/contact-us/submit', [CarController::class, 'contact_us_submit'])->name('contact_us_submit');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {


        $totalCars = Car::count(); // Get the total count of cars
            $totalSoldCars = Car::has('buyer')->count(); // Get the count of sold cars
            $availableCars = $totalCars - $totalSoldCars; // Calculate the available cars
            $totalContacts = Contact::count();


            return view('dashboard', compact( 'totalCars' ,'totalSoldCars' , 'availableCars' ,'totalContacts' ));
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('car')->group(function (){
        //car lisitng
        Route::get("/",[CarController::class,'main'])->name('car.index');
        Route::get("/create",[CarController::class,'create'])->name('car.create');
        Route::post("/",[CarController::class,'store'])->name('car.store');
        Route::get("/{car}/edit",[CarController::class,'edit'])->name('car.edit');
        Route::put("/{car}/update",[CarController::class,'update'])->name('car.update');
        Route::post('/car-image/delete', [CarController::class, 'carImgDelete'])->name('cars.deleteImg');
        Route::delete("/{car}/destroy",[CarController::class,'destroy'])->name('car.destroy');
        Route::get("/{create}/add",[CarController::class,'add'])->name('car.add');
        Route::post('/{carId}/sell', [CarController::class, 'sellCar'])->name('cars.sell');
    });

Route::prefix('buyer')->group(function (){
    //buyer listing
    Route::get("/",[CarController::class,'buyer'])->name('main.buyer');
    Route::get("/create-buyer",[CarController::class,'createBuyer'])->name('create.buyer');
    Route::post("/",[CarController::class,'storeBuyer'])->name('store.buyer');
    Route::get("/{buyer}/edit-buyer",[CarController::class,'editBuyer'])->name('edit.buyer');
    Route::put("/{buyer}/update-buyer",[CarController::class,'updateBuyer'])->name('update.buyer');
    Route::delete("/{buyer}/destroy-buyer",[CarController::class,'destroyBuyer'])->name('destroy.buyer');
    Route::get("/buyer-detail",[CarController::class,'buyerDetail'])->name('buyer.detail');
    Route::get('/buyer-detail/{carId}', [CarController::class, 'showBuyerDetails'])->name('buyer.details');
});

});

Route::get('/user', [CarController::class, 'viewUser'])->name('view.user');
Route::delete("/{user}/destroy-buyer",[CarController::class,'destroyUser'])->name('destroy.user');

// Route::get('/user', [CarController::class, 'storeser'])->name('store.user');

//chart
Route::get('/get-total-cars-data', [CarController::class, 'getTotalCarsData'])->name('car.data');


Route::get('/sold', [CarController::class, 'sold'])->name('car.sold');
Route::get('/contact', [CarController::class, 'showContact'])->name('show.contact');
Route::get('/wishlist/{id}', [CarController::class, 'addcartowishlist'])->name('addcar.to.wishlist');
