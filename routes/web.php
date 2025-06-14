<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\PostUpdate;

// Controllers
use App\Http\Controllers\AboutContactMsgController;
use App\Http\Controllers\AdoptionApplicationController;
use App\Http\Controllers\AdoptionController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModerationController;
use App\Http\Controllers\ReportCatController;
use App\Http\Controllers\TablesController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\VolunteerPageController;

// Admin Controllers
use App\Http\Controllers\Admin\AnnouncementController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\VolunteerController;

use App\Http\Controllers\AboutController;

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
Route::get('/admin/reports/{id}', [ReportCatController::class, 'show'])->name('reports.show');

// About Route
// This route handles the contact/send-a-message in About page.
Route::post('/about', [AboutContactMsgController::class, 'store'])->name('about.store');
Route::get('/moderation/messages', [AboutContactMsgController::class, 'index'])->name('moderation.messages');
// Route::get('/about', [AboutController::class, 'index'])->name('about');

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

/* Route::get('/tables', function () {
    return view('tables');
}); */

/* // Route to display all applications
Route::get('/tables', [AdoptionApplicationController::class, 'index'])->name('tables'); */

// Show the tables page with donations, adoptions, and applications data
Route::get('/tables', [TablesController::class, 'index'])->name('tables');

// Applications CRUD (Edit, Update, Delete)
Route::get('/tables/{id}/edit', [AdoptionApplicationController::class, 'edit'])->name('tables.applications.edit');
Route::put('/tables/{id}', [AdoptionApplicationController::class, 'update'])->name('tables.applications.update');
Route::delete('/tables/{id}', [AdoptionApplicationController::class, 'destroy'])->name('tables.applications.destroy');

// Create application view
Route::get('/application', [AdoptionApplicationController::class, 'create'])->name('application.create');

// Volunteer Page Route
Route::get('/volunteer', [VolunteerPageController::class, 'index'])->name('volunteer');
Route::post('/events/{event}/volunteer', [VolunteerController::class, 'store'])->name('events.volunteer');

// Adoption Page Route
Route::get('/adopt', [AdoptionController::class, 'adopt'])->name('adopt');

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

// Donations CRUD (Create, Read, Update, Delete)
Route::get('/donations', [DonationController::class, 'index'])->name('donations.index');
Route::get('/donations/create', [DonationController::class, 'create'])->name('donations.create');
Route::get('/donations/{donation}/edit', [DonationController::class, 'edit'])->name('donations.edit');
Route::put('/donations/{donation}', [DonationController::class, 'update'])->name('donations.update');
Route::delete('/donations/{donation}', [DonationController::class, 'destroy'])->name('donations.destroy');

// Admin Routes
Route::get('/moderation', [ModerationController::class, 'index'])
    ->name('moderation');

Route::middleware(['auth'])->group(function () {
    Route::put('/moderation/posts/{post}/toggle', [ModerationController::class, 'toggleStatus'])
        ->middleware('auth')
        ->name('moderation.posts.toggle');
    Route::delete('/moderation/posts/{post}', [ModerationController::class, 'delete'])->name('moderation.posts.delete');
    Route::get('/moderation/posts/{post}/read', [ModerationController::class, 'showPost'])->name('moderation.posts.read');
    Route::put('/moderation/posts/{post}', [ModerationController::class, 'update'])->name('moderation.posts.update');
});

// Route::get('/admin-report', function () {
//     return view('admin-report');
// });

Route::get('/admin-post', function () {
    return view('admin-post');
});

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

Route::middleware('auth')->group(function () {
    Route::get('/updates/{post}/edit', [UpdateController::class, 'edit'])->name('updates.edit');
    Route::delete('/updates/{post}', [UpdateController::class, 'destroy'])->name('updates.destroy');
    Route::put('/updates/{post}', [UpdateController::class, 'update'])->name('updates.update');
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

// About Page
// This route handles the view of teams and supporters.
Route::get('/about', [AboutController::class, 'index']);

// Admin - Resource
Route::delete('/admin/resources/{id}', [UpdateController::class, 'destroyResource'])->name('admin.resources.destroy');
