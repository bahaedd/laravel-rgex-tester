<?php

use Illuminate\Http\Request;
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
    return view('welcome');
});

Route::get('/show', function () {
    $result = Session::get('result');
    $message = Session::get('message');
    return View::make('regex')->with(['result' => $result, 'message' => $message]);
});

Route::post('regex', function (Request $request) {
    $data = $request->all();

    $validation = Validator::make($data, ['subject' => 'required', 'pattern' => 'required']);
    if ($validation->fails()) {
        return Redirect::to('/show')->withInput()->withErrors($validation);
    }

    $subject = $data['subject'];
    $pattern = $data['pattern'];

    try {
        preg_match_all('/' . $pattern . '/', $subject, $matches);
    } catch (Exception $e) {
        return Redirect::to('/show')->withInput()->with('message', $e->getMessage());
    }

    if (sizeof($matches[0]) > 0) {
        foreach ($matches[0] as $match) {
            $result[] = $match;
        }
        Session::flash('result', $result);
    } else {
        Session::flash('message', 'There were no matches');
    }
    return Redirect::to('/show')->withInput();
})->name('regex');
