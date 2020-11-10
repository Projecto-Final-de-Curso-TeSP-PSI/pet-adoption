<?php

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

Route::get('/', 'AdminController@index');

Route::get('/dashboard1', function () {
    return view('dashboard1');
});
Route::get('/dashboard2', function () {
    return view('dashboard2');
});
Route::get('/dashboard3', function () {
    return view('dashboard3');
});
Route::get('/dashboard4', function () {
    return view('dashboard4');
});
Route::get('/dashboard5', function () {
    return view('dashboard5');
});

// Apps
Route::get('/apps/inbox', function () {
    return view('/apps/inbox');
});
Route::get('/apps/chat', function () {
    return view('/apps/chat');
});
Route::get('/apps/todos', function () {
    return view('/apps/todos');
});
Route::get('/apps/notes', function () {
    return view('/apps/notes');
});
Route::get('/apps/calendar', function () {
    return view('/apps/calendar');
});

// UI Components
Route::get('/ui-components/alerts', function () {
    return view('/ui-components/alerts');
});
Route::get('/ui-components/badges', function () {
    return view('/ui-components/badges');
});
Route::get('/ui-components/buttons', function () {
    return view('/ui-components/buttons');
});
Route::get('/ui-components/cards', function () {
    return view('/ui-components/cards');
});
Route::get('/ui-components/dropdowns', function () {
    return view('/ui-components/dropdowns');
});
Route::get('/ui-components/forms', function () {
    return view('/ui-components/forms');
});
Route::get('/ui-components/list-groups', function () {
    return view('/ui-components/list-groups');
});
Route::get('/ui-components/modals', function () {
    return view('/ui-components/modals');
});
Route::get('/ui-components/progress-bars', function () {
    return view('/ui-components/progress-bars');
});
Route::get('/ui-components/tables', function () {
    return view('/ui-components/tables');
});
Route::get('/ui-components/tabs', function () {
    return view('/ui-components/tabs');
});

// User
Route::get('/user/signup', function () {
    return view('/user/signup');
});
Route::get('/user/login', function () {
    return view('/user/login');
});
Route::get('/user/forgot-password', function () {
    return view('/user/forgot-password');
});

// Charts
Route::get('/charts/apex/LineCharts', function () {
    return view('/charts/apex/LineCharts');
});
Route::get('/charts/apex/AreaCharts', function () {
    return view('/charts/apex/AreaCharts');
});
Route::get('/charts/apex/ColumnCharts', function () {
    return view('/charts/apex/ColumnCharts');
});
Route::get('/charts/apex/BarCharts', function () {
    return view('/charts/apex/BarCharts');
});
Route::get('/charts/apex/MixedCharts', function () {
    return view('/charts/apex/MixedCharts');
});
Route::get('/charts/apex/PieDonutsCharts', function () {
    return view('/charts/apex/PieDonutsCharts');
});

// Icons
Route::get('/icons/feather-icons', function () {
    return view('/icons/feather-icons');
});
Route::get('/icons/line-icons', function () {
    return view('/icons/line-icons');
});
Route::get('/icons/icofont-icons', function () {
    return view('/icons/icofont-icons');
});

// Pages
Route::get('/pages/search', function () {
    return view('/pages/search');
});
Route::get('/pages/invoice', function () {
    return view('/pages/invoice');
});
Route::get('/pages/users-card', function () {
    return view('/pages/users-card');
});
Route::get('/pages/notifications', function () {
    return view('/pages/notifications');
});
Route::get('/pages/timeline', function () {
    return view('/pages/timeline');
});
Route::get('/pages/gallery', function () {
    return view('/pages/gallery');
});
Route::get('/pages/faq', function () {
    return view('/pages/faq');
});
Route::get('/pages/pricing', function () {
    return view('/pages/pricing');
});
Route::get('/pages/profile', function () {
    return view('/pages/profile');
});
Route::get('/pages/profile-settings', function () {
    return view('/pages/profile-settings');
});
Route::get('/pages/error-404', function () {
    return view('/pages/error-404');
});
