# Template Web M Mart

Package ini digunakan untuk melakukan instalasi template pada sistem M Mart.

## Installation

Setelah melakukan pembuatan project laravel, silahkan gunakan langkah-langkah berikut untuk melakukan instalasi template:

### Via composer

1. `Cd` ke Project Laravel
2. Install package `itmm/m-mart-skin` menggunakan perintah:
```
composer require itmm/m-mart-skin
```
3. Jalankan perintah berikut untuk melakukan instalasi template 
```
php artisan mskin:install
```
4. Tambahkan Script berikut ke `app/Providers/AppServiceProvider.php`
```
...
use App\Core\KTBootstrap;
use Illuminate\Database\Schema\Builder;

public function boot()
{
    ...
    Builder::defaultStringLength(191);
    KTBootstrap::init();
}
```
5. Tambahkan fungsi berikut ke `app/Providers/EventServiceProvider.php`
```
class EventServiceProvider extends ServiceProvider
{
    ...

    public function shouldDiscoverEvents()
    {
        return false;
    }
}
```
6. Tambahkan Script berikut ke `app/Providers/RouteServiceProvider.php` pada function `boot` pada `$this->routes(function () { ... }`
```
public function boot()
{
    ...
    $this->routes(function () {
        ...
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/example.php'));
    })
}
```
7. Daftarkan Provider Berikut pada config/app.php
```
'providers' => [
    ...,
    App\Providers\HelperServiceProvider::class,
]
```
8. Jalankan command berikut untuk mempublish config (opsional)
```
php artisan vendor:publish --tag=mskin-config --force
```
9. Penggunaan template ini bisa dilihat pada [Documentation](https://preview.keenthemes.com/laravel/metronic/docs/index)
