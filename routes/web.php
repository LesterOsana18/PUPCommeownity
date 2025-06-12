<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\ModerationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReportCatController;
use App\Http\Controllers\AboutContactMsgController;
use App\Http\Controllers\UpdateController;
posts/users
use App\Livewire\PostUpdate;

use App\Http\Controllers\Admin\AnnouncementController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\VolunteerController;
use App\Http\Controllers\AdoptionController;
use App\Http\Controllers\AdoptionApplicationController;
main

// Registration Routes
// This route shows the registration form.
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Authentication Routes
// This route shows the login form.
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

// Home Route
// This route serves the home page of the application.
// It is the default route that users see when they visit the root URL.
Route::get('/', [HomeController::class, 'index'])->name('home');

// Dashboard Route
// This route is protected by the 'auth' middleware, meaning only authenticated users can access it.
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

// Donation Route
// This route handles the donation form submission.
Route::post('/donation-form', [DonationController::class, 'store'])->name('donation.store');

// Report Route
// This route handles the report-a-cat for submission.
Route::post('/report', [ReportCatController::class, 'store'])->name('report.store');

// About Route
// This route handles the contact/send-a-message form in about page.
Route::post('/about', [AboutContactMsgController::class, 'store'])->name('about.store');

// Website Routes
// These routes are for the public-facing pages of the website.
Route::get('/adopt', function () {
    return view('adopt');
});

Route::get('/adoptionprocess', function () {
    return view('adoptionprocess');
});

Route::get('/application', function () {
    return view('application');
});

Route::get('/catprofile', function () {
    return view('catprofile');
});

Route::get('/volunteer', function () {
    return view('volunteer');
});

Route::get('/donate', function () {
    return view('donate');
});

Route::get('/donation-form', function () {
    return view('donation-form');
});

Route::get('/donation-options', function () {
    return view('donation-options');
});

Route::get('/report', function () {
    return view('report');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/tables', function () {
    return view('tables');
});

// Adoption Routes
Route::prefix('adoptions')->name('adoptions.')->group(function () {
    // Route to display all available cats for adoption
    Route::get('/', [AdoptionController::class, 'index'])->name('index');

    // Route to show details of a specific cat (for adoption)
    Route::get('/{id}', [AdoptionController::class, 'show'])->name('show');

    // Route to handle the adoption request
    Route::post('/{id}/adopt', [AdoptionController::class, 'adopt'])->name('adopt');
});

// Route to show the adoption application form
Route::get('/application', [AdoptionApplicationController::class, 'create'])->name('application.create');

// Route to handle the form submission
Route::post('/application', [AdoptionApplicationController::class, 'store'])->name('application.store');

// Admin Routes
Route::get('/moderation', [ModerationController::class, 'index'])
    ->name('moderation');

Route::get('/admin-report', function () {
    return view('admin-report');
});

Route::get('/admin-post', function () {
    return view('admin-post');
});

posts/users
Route::middleware(['auth'])->get('/post-update', PostUpdate::class)->name('updates.post');


// Update Routes
Route::get('/update', [UpdateController::class, 'index'])->name('update');

Route::prefix('updates')->name('updates.')->group(function () {
    Route::get('/', [UpdateController::class, 'index'])->name('index');          // List of public updates
    Route::get('/create', [UpdateController::class, 'create'])->name('create');  // Show update creation form
    Route::post('/', [UpdateController::class, 'store'])->name('store');         // Store user-submitted update
    Route::get('/search', [UpdateController::class, 'search'])->name('search');  // Search updates
    Route::get('/{post}', [UpdateController::class, 'show'])->name('show');      // Read single update
});

// Announcement Routes
Route::prefix('admin/announcements')->name('admin.announcements.')->group(function () {
    Route::get('/', [AnnouncementController::class, 'index'])->name('index');
    Route::get('/create', [AnnouncementController::class, 'create'])->name('create');
    Route::post('/', [AnnouncementController::class, 'store'])->name('store');
    Route::get('/{announcement}', [AnnouncementController::class, 'show'])->name('show');
    Route::put('/{announcement}', [AnnouncementController::class, 'update'])->name('update');
    Route::delete('/{announcement}', [AnnouncementController::class, 'destroy'])->name('destroy');
});

// Optional: legacy/store endpoint for alternate route
Route::post('/update/announcements', [AnnouncementController::class, 'store'])
    ->middleware('auth')
    ->name('update.announcements.store');

// Events Routes
Route::prefix('admin/events')->name('admin.events.')->group(function () {
    Route::get('/', [EventController::class, 'index'])->name('index');
    Route::get('/create', [EventController::class, 'create'])->name('create');
    Route::post('/', [EventController::class, 'store'])->name('store');
    Route::get('/{event}', [EventController::class, 'show'])->name('show');
    Route::put('/{event}', [EventController::class, 'update'])->name('update');
    Route::delete('/{event}', [EventController::class, 'destroy'])->name('destroy');

    // Nested routes for volunteers within events
    Route::prefix('/{event}/volunteers')->name('volunteers.')->group(function () {
        Route::get('/', [VolunteerController::class, 'index'])->name('index');
        Route::post('/', [VolunteerController::class, 'store'])->name('store');
        Route::delete('/{volunteer}', [VolunteerController::class, 'destroy'])->name('destroy');
    });
});

// Optional: legacy/store endpoint for alternate route
Route::post('/update/events', [EventController::class, 'store'])
    ->middleware('auth')
    ->name('update.events.store');