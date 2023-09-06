<?php

// use App\Http\Controllers\ProfileController; profile dari inertia
use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\HBNController;
// use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\KaderController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RayonController;
use Illuminate\Auth\Events\PasswordReset;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\PerpusController;
use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\QuotesController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Blog\TagController;
use App\Http\Controllers\LaravoltController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\Blog\PostController;
use App\Http\Controllers\StatistikController;
use App\Http\Controllers\CategoryBookController;
use App\Http\Controllers\Blog\CategoryController;
use App\Http\Controllers\ForgetPasswordControler;
use App\Http\Controllers\Admin\Blog\TagController as admintagcontroller;
use App\Http\Controllers\Admin\Blog\PostController as adminpostcontroller;
use App\Http\Controllers\Admin\Blog\CategoryController as admincategorycontroller;

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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';


Route::get('/emails', function () {
  return view('mails.reset');
});

// =====================================================
// Route Frondend  =====================================
// ----------------------------------------------------
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/post', [PostController::class, 'index'])->name('post.details');
Route::get('/galeri', [GaleriController::class, 'index'])->name('index');
Route::get('/pengurus', [PengurusController::class, 'show'])->name('show');
Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::get('/article/{slug}', [PostController::class, 'show'])->name('post');
Route::get('/article/nu/{slug}', [PostController::class, 'nushow'])->name('nushow');
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category');
Route::get('/tag/{slug}', [TagController::class, 'show'])->name('tag');
Route::get('/calendar', [AgendaController::class, 'index'])->name('calendar.index');
Route::get('/profile/{slug}', [ProfileController::class, 'profile'])->name('profileuser');
Route::get('/qrcode/varifikasi/kta/{id}/anjay/mabar/ckuahsksdfsihew/S3NAT-4NJ1NG-63lut-73ng/51-3nd1', [QrCodeController::class, 'index']);
Route::get('/perpus', [PerpusController::class, 'index'])->name('index');
Route::get('/perpus/details/{id}', [PerpusController::class, 'details'])->name('details');
Route::get('/kta/user/download/pdf/{id}/my-kta/', [PDFController::class, 'kaderPDF']);

// =====================================================
// Route Auth  =========================================
// -----------------------------------------------------
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/validasi', [LoginController::class, 'validasi'])->name('validasi');
Route::post('/validasii', [LoginController::class, 'validasii'])->name('validasii');
Route::get('/register/{user}', [LoginController::class, 'register'])->name('register');
Route::put('/register/store/{id}', [LoginController::class, 'store'])->name('store');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');



// =====================================================
// Forget Password  ====================================
// -----------------------------------------------------

// Menampilkan form lupa kata sandi
Route::get('/forgot-password', [ForgetPasswordControler::class, 'showForgotPasswordForm'])
  ->middleware('guest')
  ->name('password.request');

// Mengirim tautan reset kata sandi
Route::post('/forgot-password', [ForgetPasswordControler::class, 'sendResetLinkEmail'])
  ->middleware('guest')
  ->name('password.email');

// Menampilkan form reset kata sandi
Route::get('/reset-password/{token}', [ForgetPasswordControler::class, 'showResetPasswordForm'])
  ->middleware('guest')
  ->name('password.reset');

// Melakukan reset kata sandi
Route::post('/reset-password', [ForgetPasswordControler::class, 'resetPassword'])
  ->middleware('guest')
  ->name('password.update');






// =====================================================
// Route Auth Pengunjung Kader Admin, Superadmin =======
// -----------------------------------------------------
Route::middleware(['auth', 'role:1, 2, 3, 4'])->group(function () {
  Route::post('/comments', [CommentController::class, 'store'])->name('comments.store')->middleware('auth');
  Route::get('/profile', [ProfileController::class, 'index'])->middleware(['auth']);
  Route::get('/account', [ProfileController::class, 'account'])->middleware(['auth']);
  Route::put('/account/update', [ProfileController::class, 'update'])->name('profile.update')->middleware(['auth']);
  Route::post('/account/newpassword', [ProfileController::class, 'newpassword'])->name('change-password')->middleware(['auth']);
});

// =====================================================
// Route Kader, Admin, Superadmin =======================
// -----------------------------------------------------
Route::middleware(['auth', 'role:1, 2, 3'])->group(function () {
  Route::get('/uploads', [ProfileController::class, 'uploads'])->middleware(['auth']);
  Route::post('/profile/galeri/store', [ProfileController::class, 'store'])->name('store');
  Route::post('/profile/post/storepost', [ProfileController::class, 'storepost'])->name('storepost');
  Route::post('/profile/perpus/storeperpus', [ProfileController::class, 'storeperpus'])->name('storeperpus');
});

require __DIR__ . '/auth.php';

// =====================================================
// Route For Address Package ===========================
// -----------------------------------------------------
Route::get('contoh-laravolt', [LaravoltController::class, 'index'])->name('laravolt.index');
Route::get('get-kota', [LaravoltController::class, 'get_kota'])->name('get.kota');
Route::get('get-kecamatan', [LaravoltController::class, 'get_kecamatan'])->name('get.kecamatan');
Route::get('get-kelurahan', [LaravoltController::class, 'get_kelurahan'])->name('get.kelurahan');
// =====================================================
// Route Admin dan Superadmin ==========================
// -----------------------------------------------------
Route::middleware(['auth', 'role:1,2'])->group(function () {
  Route::get('/admin', [StatistikController::class, 'index'])->name('dashboard');
  Route::get('/admin/perpus', [PerpusController::class, 'admin_index'])->name('admin_index');
  Route::get('admin/perpus/create', [PerpusController::class, 'create'])->name('create');
  Route::post('/admin/perpus/store', [PerpusController::class, 'store'])->name('store');
  Route::get('/admin/perpus/{id}/edit', [PerpusController::class, 'edit'])->name('perpus.edit');
  Route::put('/admin/perpus/{id}', [PerpusController::class, 'update'])->name('perpus.update');
  Route::delete('/admin/perpus/{id}', [PerpusController::class, 'destroy'])->name('perpus.destroy');

  Route::get('/admin/galeri', [GaleriController::class, 'admin_index'])->name('admin_index');
  Route::get('/admin/galeri/create', [GaleriController::class, 'admin_create'])->name('admin_create');
  Route::post('/admin/galeri/store', [GaleriController::class, 'store'])->name('store');
  Route::put('/admin/galeri/update{id}', [GaleriController::class, 'update'])->name('admin.galeri.update');
  Route::delete('/admin/galeri/{id}', [GaleriController::class, 'admin_destroy'])->name('admin_destroy');

  Route::get('/admin/post/category', [admincategorycontroller::class, 'index'])->name('categories.index');
  Route::get('/admin/post/category/create', [admincategorycontroller::class, 'create'])->name('categories.create');
  Route::post('/admin/post/category/store', [admincategorycontroller::class, 'store'])->name('categories.store');
  Route::get('/admin/post/category/{id}/edit', [admincategorycontroller::class, 'edit'])->name('categories.edit');
  Route::put('/admin/post/category/{id}', [admincategorycontroller::class, 'update'])->name('categories.update');
  Route::delete('/admin/post/category/{id}', [admincategorycontroller::class, 'destroy'])->name('categories.destroy');

  Route::get('/admin/post/tag', [admintagcontroller::class, 'index'])->name('tags.index');
  Route::get('/admin/post/tag/create', [admintagcontroller::class, 'create'])->name('create');
  Route::post('/admin/post/tag/store', [admintagcontroller::class, 'store'])->name('store');
  Route::get('/admin/post/tag/{id}/edit', [admintagcontroller::class, 'edit'])->name('tags.edit');
  Route::put('/admin/post/tag/{id}', [admintagcontroller::class, 'update'])->name('tags.update');
  Route::delete('/admin/post/tag/{id}', [admintagcontroller::class, 'destroy'])->name('tags.destroy');

  Route::get('/admin/post', [adminpostcontroller::class, 'index'])->name('posts.index');
  Route::get('/admin/post/create', [adminpostcontroller::class, 'create'])->name('posts.create');
  Route::post('/admin/post/store', [adminpostcontroller::class, 'store'])->name('posts.store');
  Route::get('/admin/post/{id}/edit', [adminpostcontroller::class, 'edit'])->name('posts.edit');
  Route::put('/admin/post/{id}', [adminpostcontroller::class, 'update'])->name('posts.update');
  Route::delete('/admin/post/{id}', [adminpostcontroller::class, 'destroy'])->name('posts.destroy');

  Route::get('/admin/calendar', [AgendaController::class, 'list'])->name('calendar.list');
  Route::get('/admin/calendar/create', [AgendaController::class, 'create'])->name('calendar.create');
  Route::post('/admin/calendar/store', [AgendaController::class, 'store'])->name('store');
  Route::get('/admin/calendar/{id}/edit', [AgendaController::class, 'edit'])->name('calendar.edit');
  Route::put('/admin/calendar/{id}', [AgendaController::class, 'update'])->name('calendar.update');
  Route::delete('/admin/calendar/destroy/{id}', [AgendaController::class, 'destroy'])->name('calendar.destroy');

  Route::get('/admin/user', [UserController::class, 'index'])->name('user.index');
  Route::get('/admin/user/create', [UserController::class, 'create'])->name('create.user');
  Route::get('/admin/user/{id}/details', [ProfileController::class, 'details'])->name('details');

  Route::get('/admin/user/download-pdf/{id}', [PDFController::class, 'kaderPDF']);
  Route::get('/admin/user/rayon/pdf/{slug}', [PDFController::class, 'rayonPDF'])->name('rayonPDF');

  Route::post('/admin/user/store', [UserController::class, 'store'])->name('store.user');
  Route::get('/admin/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
  Route::put('/admin/user/{id}', [UserController::class, 'update'])->name('user.update');
  Route::delete('/admin/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');
  Route::get('/admin/user/rayon/{slug}', [UserController::class, 'list'])->name('user.rayon.list');

  Route::get('/admin/rayon', [RayonController::class, 'index'])->name('rayon.index');
  Route::get('/admin/rayon/{slug}', [RayonController::class, 'show'])->name('rayon.show');

  Route::get('/admin/administrator/', [UserController::class, 'administrator'])->name('administrator');
  Route::get('/admin/kadermapaba/', [UserController::class, 'kadermapaba'])->name('kadermapaba');
  Route::get('/admin/kaderpkd/', [UserController::class, 'kaderpkd'])->name('kaderpkd');
  Route::get('/admin/kaderpkl/', [UserController::class, 'kaderpkl'])->name('kaderpkl');
  Route::get('/admin/kaderpkn/', [UserController::class, 'kaderpkn'])->name('kaderpkn');
  Route::get('/admin/unverification/', [UserController::class, 'unverification'])->name('unverification');
  Route::get('/admin/bukankader/', [UserController::class, 'bukankader'])->name('bukankader');

  Route::get('/admin/categorybooks/', [CategoryBookController::class, 'index'])->name('categorybooks');
  Route::get('/admin/categorybooks/create', [CategoryBookController::class, 'create'])->name('create');
  Route::post('/admin/categorybooks/store', [CategoryBookController::class, 'store'])->name('store');
  Route::get('/admin/categorybooks/{id}/show', [CategoryBookController::class, 'show'])->name('categorybooks.show');
  Route::get('/admin/categorybooks/{id}/edit', [CategoryBookController::class, 'edit'])->name('categorybooks.edit');
  Route::put('/admin/categorybooks/{id}', [CategoryBookController::class, 'update'])->name('categorybooks.update');
  Route::delete('/admin/categorybooks/{id}', [CategoryBookController::class, 'destroy'])->name('categorybooks.destroy');

  Route::get('/admin/hbn/', [HBNController::class, 'index'])->name('hbn.index');
  Route::get('/admin/hbn/create', [HBNController::class, 'create'])->name('hbn.create');
  Route::post('/admin/hbn/store', [HBNController::class, 'store'])->name('hbn.store');
  Route::get('/admin/hbn/{id}/edit', [HBNController::class, 'edit'])->name('hbn.edit');
  Route::put('/admin/hbn/{id}', [HBNController::class, 'update'])->name('hbn.update');
  Route::delete('/admin/hbn/{id}', [HBNController::class, 'destroy'])->name('hbn.destroy');
});
// =====================================================
// Route Super Admin only ==============================
// -----------------------------------------------------
Route::middleware(['auth', 'role:1'])->group(function () {

  Route::get('/admin/kader', [KaderController::class, 'kader'])->name('kader');
  Route::get('/admin/kader/create', [KaderController::class, 'create'])->name('create');
  Route::post('/admin/kader/store', [KaderController::class, 'store'])->name('store');
  Route::get('/admin/kader/{id}/edit', [KaderController::class, 'edit'])->name('edit');
  Route::put('/admin/kader/{id}', [KaderController::class, 'update'])->name('update');
  Route::delete('/admin/kader/{id}', [KaderController::class, 'destroy'])->name('kader.destroy');
  Route::get('/admin/kader/{id}/view', [KaderController::class, 'view'])->name('view');

  Route::get('/admin/page', [HomeController::class, 'admin_page'])->name('admin_page');
  Route::get('/admin/page/{id}/edit', [HomeController::class, 'edit'])->name('edit');
  Route::put('/admin/page/{id}', [HomeController::class, 'update'])->name('update');

  Route::get('/admin/rayon/create/new', [RayonController::class, 'create'])->name('create');
  Route::post('/admin/rayon/store', [RayonController::class, 'store'])->name('store');
  Route::get('/admin/rayon/{id}/edit', [RayonController::class, 'edit'])->name('rayon.edit');
  Route::put('/admin/rayon/{id}', [RayonController::class, 'update'])->name('rayon.update');
  Route::delete('/admin/rayon/{id}', [RayonController::class, 'destroy'])->name('rayon.destroy');

  Route::get('/admin/quotes/', [QuotesController::class, 'index'])->name('index');
  Route::get('/admin/quotes/create', [QuotesController::class, 'create'])->name('create');
  Route::post('/admin/quotes/store', [QuotesController::class, 'store'])->name('store');
  Route::get('/admin/quotes/{id}/edit', [QuotesController::class, 'edit'])->name('quotes.edit');
  Route::put('/admin/quotes/{id}', [QuotesController::class, 'update'])->name('quotes.update');
  Route::delete('/admin/quotes/{id}', [QuotesController::class, 'destroy'])->name('quotes.destroy');

  Route::get('/admin/pengurus/', [PengurusController::class, 'index'])->name('index');
  Route::get('/admin/pengurus/create', [PengurusController::class, 'create'])->name('create');
  Route::post('/admin/pengurus/store', [PengurusController::class, 'store'])->name('store');
  Route::get('/admin/pengurus/{id}/edit', [PengurusController::class, 'edit'])->name('pengurus.edit');
  Route::put('/admin/pengurus/{id}', [PengurusController::class, 'update'])->name('pengurus.update');
  Route::delete('/admin/pengurus/{id}', [PengurusController::class, 'destroy'])->name('pengurus.destroy');
});
