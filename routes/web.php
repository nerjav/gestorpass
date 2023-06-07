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
    return view('brackets/admin-auth::admin.auth.login');
});

Route::post('/verificar-contrasena', 'App\Http\Controllers\Admin\CredencialesController@verificarContrasena')->name('verificar-contrasena');

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('admin-users')->name('admin-users/')->group(static function() {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login',                 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('usuarios')->name('usuarios/')->group(static function() {
            Route::get('/',                                             'UsuarioController@index')->name('index');
            Route::get('/create',                                       'UsuarioController@create')->name('create');
            Route::post('/',                                            'UsuarioController@store')->name('store');
            Route::get('/{usuario}/edit',                               'UsuarioController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'UsuarioController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{usuario}',                                   'UsuarioController@update')->name('update');
            Route::delete('/{usuario}',                                 'UsuarioController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('servidors')->name('servidors/')->group(static function() {
            Route::get('/',                                             'ServidorController@index')->name('index');
            Route::get('/create',                                       'ServidorController@create')->name('create');
            Route::post('/',                                            'ServidorController@store')->name('store');
            Route::get('/{servidor}/edit',                              'ServidorController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ServidorController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{servidor}',                                  'ServidorController@update')->name('update');
            Route::delete('/{servidor}',                                'ServidorController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('tipodeconexions')->name('tipodeconexions/')->group(static function() {
            Route::get('/',                                             'TipodeconexionController@index')->name('index');
            Route::get('/create',                                       'TipodeconexionController@create')->name('create');
            Route::post('/',                                            'TipodeconexionController@store')->name('store');
            Route::get('/{tipodeconexion}/edit',                        'TipodeconexionController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'TipodeconexionController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{tipodeconexion}',                            'TipodeconexionController@update')->name('update');
            Route::delete('/{tipodeconexion}',                          'TipodeconexionController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('serrvidors')->name('serrvidors/')->group(static function() {
            Route::get('/',                                             'SerrvidorController@index')->name('index');
            Route::get('/create',                                       'SerrvidorController@create')->name('create');
            Route::post('/',                                            'SerrvidorController@store')->name('store');
            Route::get('/{serrvidor}/edit',                             'SerrvidorController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'SerrvidorController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{serrvidor}',                                 'SerrvidorController@update')->name('update');
            Route::delete('/{serrvidor}',                               'SerrvidorController@destroy')->name('destroy');
        });
    });
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('credenciales')->name('credenciales/')->group(static function() {
            Route::get('/',                                             'CredencialesController@index')->name('index');
            Route::get('/create',                                       'CredencialesController@create')->name('create');
            Route::post('/',                                            'CredencialesController@store')->name('store');
            Route::get('/{credenciale}/edit',                           'CredencialesController@edit')->name('edit');
            Route::get('/{credenciale}/show',                           'CredencialesController@show')->name('show');
            Route::post('/bulk-destroy',                                'CredencialesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{credenciale}',                               'CredencialesController@update')->name('update');
            Route::delete('/{credenciale}',                             'CredencialesController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('estados')->name('estados/')->group(static function() {
            Route::get('/',                                             'EstadosController@index')->name('index');
            Route::get('/create',                                       'EstadosController@create')->name('create');
            Route::post('/',                                            'EstadosController@store')->name('store');
            Route::get('/{estado}/edit',                                'EstadosController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'EstadosController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{estado}',                                    'EstadosController@update')->name('update');
            Route::delete('/{estado}',                                  'EstadosController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('cat-informaciones')->name('cat-informaciones/')->group(static function() {
            Route::get('/',                                             'CatInformacionesController@index')->name('index');
            Route::get('/create',                                       'CatInformacionesController@create')->name('create');
            Route::post('/',                                            'CatInformacionesController@store')->name('store');
            Route::get('/{catInformacione}/edit',                       'CatInformacionesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'CatInformacionesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{catInformacione}',                           'CatInformacionesController@update')->name('update');
            Route::delete('/{catInformacione}',                         'CatInformacionesController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('cat-servicios')->name('cat-servicios/')->group(static function() {
            Route::get('/',                                             'CatServiciosController@index')->name('index');
            Route::get('/create',                                       'CatServiciosController@create')->name('create');
            Route::post('/',                                            'CatServiciosController@store')->name('store');
            Route::get('/{catServicio}/edit',                           'CatServiciosController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'CatServiciosController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{catServicio}',                               'CatServiciosController@update')->name('update');
            Route::delete('/{catServicio}',                             'CatServiciosController@destroy')->name('destroy');
        });
    });
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('grupos')->name('grupos/')->group(static function() {
            Route::get('/',                                             'GrupoController@index')->name('index');
            Route::get('/create',                                       'GrupoController@create')->name('create');
            Route::post('/',                                            'GrupoController@store')->name('store');
            Route::get('/{grupo}/edit',                                 'GrupoController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'GrupoController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{grupo}',                                     'GrupoController@update')->name('update');
            Route::delete('/{grupo}',                                   'GrupoController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('cat-informaciones')->name('cat-informaciones/')->group(static function() {
            Route::get('/',                                             'CatInformacionesController@index')->name('index');
            Route::get('/create',                                       'CatInformacionesController@create')->name('create');
            Route::post('/',                                            'CatInformacionesController@store')->name('store');
            Route::get('/{catInformacione}/edit',                       'CatInformacionesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'CatInformacionesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{catInformacione}',                           'CatInformacionesController@update')->name('update');
            Route::delete('/{catInformacione}',                         'CatInformacionesController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('servidors')->name('servidors/')->group(static function() {
            Route::get('/',                                             'ServidorController@index')->name('index');
            Route::get('/create',                                       'ServidorController@create')->name('create');
            Route::post('/',                                            'ServidorController@store')->name('store');
            Route::get('/{servidor}/edit',                              'ServidorController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ServidorController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{servidor}',                                  'ServidorController@update')->name('update');
            Route::delete('/{servidor}',                                'ServidorController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('credenciales')->name('credenciales/')->group(static function() {
            Route::get('/',                                             'CredencialesController@index')->name('index');
            Route::get('/create',                                       'CredencialesController@create')->name('create');
            Route::post('/',                                            'CredencialesController@store')->name('store');
            Route::get('/{credenciale}/edit',                           'CredencialesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'CredencialesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{credenciale}',                               'CredencialesController@update')->name('update');
            Route::delete('/{credenciale}',                             'CredencialesController@destroy')->name('destroy');
            Route::get('/usuario',                                      'CredencialesController@usuario')->name('usuario');

        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('estados')->name('estados/')->group(static function() {
            Route::get('/',                                             'EstadosController@index')->name('index');
            Route::get('/create',                                       'EstadosController@create')->name('create');
            Route::post('/',                                            'EstadosController@store')->name('store');
            Route::get('/{estado}/edit',                                'EstadosController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'EstadosController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{estado}',                                    'EstadosController@update')->name('update');
            Route::delete('/{estado}',                                  'EstadosController@destroy')->name('destroy');
        });
    });
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('cat-informaciones')->name('cat-informaciones/')->group(static function() {
            Route::get('/',                                             'CatInformacionesController@index')->name('index');
            Route::get('/create',                                       'CatInformacionesController@create')->name('create');
            Route::post('/',                                            'CatInformacionesController@store')->name('store');
            Route::get('/{catInformacione}/edit',                       'CatInformacionesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'CatInformacionesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{catInformacione}',                           'CatInformacionesController@update')->name('update');
            Route::delete('/{catInformacione}',                         'CatInformacionesController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('servidors')->name('servidors/')->group(static function() {
            Route::get('/',                                             'ServidorController@index')->name('index');
            Route::get('/create',                                       'ServidorController@create')->name('create');
            Route::post('/',                                            'ServidorController@store')->name('store');
            Route::get('/{servidor}/edit',                              'ServidorController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ServidorController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{servidor}',                                  'ServidorController@update')->name('update');
            Route::delete('/{servidor}',                                'ServidorController@destroy')->name('destroy');


        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('tipo-debds')->name('tipo-debds/')->group(static function() {
            Route::get('/',                                             'TipoDebdController@index')->name('index');
            Route::get('/create',                                       'TipoDebdController@create')->name('create');
            Route::post('/',                                            'TipoDebdController@store')->name('store');
            Route::get('/{tipoDebd}/edit',                              'TipoDebdController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'TipoDebdController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{tipoDebd}',                                  'TipoDebdController@update')->name('update');
            Route::delete('/{tipoDebd}',                                'TipoDebdController@destroy')->name('destroy');
        });
    });
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('verifications')->name('verifications/')->group(static function() {
            Route::get('/',                                             'VerificationsController@index')->name('index');
            Route::get('/create',                                       'VerificationsController@create')->name('create');
            Route::post('/',                                            'VerificationsController@store')->name('store');
            Route::get('/{verification}/edit',                          'VerificationsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'VerificationsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{verification}',                              'VerificationsController@update')->name('update');
            Route::delete('/{verification}',                            'VerificationsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('admin-users')->name('admin-users/')->group(static function() {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login',                 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('verifications')->name('verifications/')->group(static function() {
            Route::get('/',                                             'VerificationsController@index')->name('index');
            Route::get('/create',                                       'VerificationsController@create')->name('create');
            Route::post('/',                                            'VerificationsController@store')->name('store');
            Route::get('/{verification}/edit',                          'VerificationsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'VerificationsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{verification}',                              'VerificationsController@update')->name('update');
            Route::delete('/{verification}',                            'VerificationsController@destroy')->name('destroy');
        });
    });
});
