<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware' => 'locale'], function () {
  Route::get('/', function () {
      return view('index');
  });
 Route::get('about', array('as' => 'about', function()
    {
        return View::make('about');
    }));

  Route::get('/contact', function () {
      return view('contact');
  });
  Route::get('/blog', function () {
      return view('blog');
  });
  Route::get('/team', function () {
      return view('team');
  });
   Route::get('/videos', function () {
      return view('videos');
  });
   Route::get('/gallery', function () {
        return view('gallery');
    });
   Route::get('/products', function () {
        return view('products');
    });
   Route::get('/desktop', function () {
        return redirect('https://www.zamilsteel.com.vn');
    });
    Route::get('/peb', function () {
        return view('peb');
    });
    Route::get('/ss', function () {
        return view('ss');
    });
    Route::get('/maxseam', function () {
        return view('maxseam');
    });
    Route::get('/components', function () {
        return view('components');
    });
    Route::get('/thailand-architect17-exhibition', function () {
        return view('thailand-architect17-exhibition');
    });
    Route::get('/cambodia-campus-17', function () {
        return view('cambodia-campus-17');
    });
    Route::get('/vietnam-awards-16', function () {
        return view('vietnam-awards-16');
    });
    Route::get('/indochina-airport-17', function () {
        return view('indochina-airport-17');
    });
    Route::get('/bci-equinox-17', function () {
        return view('bci-equinox-17');
    });
    Route::get('/s1-certificate', function () {
        return view('s1-certificate');
    });
    Route::get('/indonesia-campus-16', function () {
        return view('indonesia-campus-16');
    });
    Route::get('/canon-factory', function () {
        return view('canon-factory');
    });
    Route::get('/phil-construct-visayas-16', function () {
        return view('phil-construct-visayas-16');
    });
    Route::get('/aisc-dongnai-factory', function () {
        return view('aisc-dongnai-factory');
    });
});

Route::get('setlocale/{locale}', function ($locale) {
  \Session::put('locale', $locale);

  return back();
});