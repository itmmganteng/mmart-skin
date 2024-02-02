# Template Web M Mart

Package ini digunakan untuk melakukan instalasi template pada sistem M Mart.

## Installation

Setelah melakukan pembuatan project laravel, silahkan gunakan langkah-langkah berikut untuk melakukan instalasi template:

### Via composer

1. `Cd` ke Project Laravel  
2. Install package `diglactic/laravel-breadcrumbs` dengan menjalankan perintah:
```
composer require diglactic/laravel-breadcrumbs
```
3. Install package `yajra/laravel-datatables` dengan menjalankan perintah:
```
composer require yajra/laravel-datatables
```
4. Install package `itmm/m-mart-skin` menggunakan perintah:
```
composer require itmm/m-mart-skin
```
5. Jalankan perintah berikut untuk melakukan instalasi template 
```
php artisan mmart-skin:install
```
6. Jalankan perintah `composer dump-autoload`
7. Tambahkan Script berikut ke `app/Providers/AppServiceProvider.php`
```
    use App\Core\KTBootstrap;
    use Illuminate\Database\Schema\Builder;

    public function boot()
    {
        // Tambahkan
        Builder::defaultStringLength(191);
        KTBootstrap::init();
    }
```
8. Tambahkan fungsi berikut ke `app/Providers/EventServiceProvider.php`
```
    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
```
9. Tambahkan Script berikut ke `app/Providers/RouteServiceProvider.php` pada function `boot` pada `$this->routes(function () { ... }`
```
Route::middleware('web')
    ->group(base_path('routes/example.php'));
```
10. Daftarkan Provider Berikut pada config/app.php
```
/*
* Application Service Providers...
*/
App\Providers\HelperServiceProvider::class,
```
