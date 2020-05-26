<?php
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Auth;
use App\User;
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
Auth::routes();



Route::get('/insertuser', function () {
    set_time_limit(0);
    $employee = DB::table('employee')->get();
    $user =   new User();
    $user->username = 'admin';
    $user->password = bcrypt('0000');
    $user->save();
    $user->assignRole('adminpage');
    foreach($employee as $item){
        $count = DB::table('users')->where('username', $item->emp_id)->count();
        if( $count == 0){



            $user =   new User();
            $user->username = $item->emp_id;
            $user->password = bcrypt($item->emp_idcard);
            $user->save();
            $user->assignRole('employee');
        }
    }


    return "SUCCESS";

});



Route::get('/insertposition', function () {
    $position = DB::table('employee')->get();

    foreach($position as $item){
        $count = DB::table('position')->where('name_posi', $item->position)->count();
        if( $count == 0){
            DB::table('position')->insert(
                ['name_posi' => $item->position]);
        }
    }


    return "SUCCESS";
});





Route::get('/loginuser', function () {




    return view('el.login');
})->name('loginuser');








Route::get('/', function () {
    $vicha = DB::table('product')
    ->Where('status','1')
    ->orderBy('id', 'desc')
    ->paginate(10);

    $article = DB::table('article')
    ->Where('status','1')
    ->orderBy('id', 'desc')
    ->paginate(10);


    $sinka = DB::table('sinka')
    ->orderBy('id', 'desc')
    ->paginate(4);

    $youtube = DB::table('_youtube')
    ->where('id', '1')
    ->first();

    $sinka_2 = DB::table('sinka')
    ->where('id', '2')
    ->first();

    $sinka_3 = DB::table('sinka')
    ->where('id', '1')
    ->first();


    $newsinka = DB::table('newsinka')
    ->Where('status','1')
    ->orderBy('id', 'desc')
    ->paginate(10);

    $data =  array(

    'vicha' =>$vicha,
    'article' =>$article,
    'sinka'  =>$sinka,
    'youtube' => $youtube,
    'sinka_2' => $sinka_2,
    'sinka_3' => $sinka_3,
    'newsinka' => $newsinka
);
    return view('el.index',  $data);
})->middleware('auth');



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/adminngg', 'Admin\ArticleController@admin')->name('admin');
Route::get('/addrole', 'RoleUserController@index')->name('addrole');
Route::get('/knowledge', 'MainpageController@knowledge')->name('knowledge');
Route::get('/knowledge/{id}', 'MainpageController@detailknowledge')->name('knowledge');
Route::get('/product', 'MainpageController@product')->name('product');
Route::get('/detailsinka/{id}', 'MainpageController@detailsinka')->name('detailsinka');
Route::get('/activity', 'MainpageController@activity')->name('activity');
Route::get('/contact', 'MainpageController@contact')->name('contact');


//Api
Route::get('/get_product', 'ApiController@product')->name('product');
Route::get('/get_category', 'ApiController@category')->name('category');
Route::get('/get_subcategory', 'ApiController@subcategory')->name('subcategory');
Route::get('/get_article', 'ApiController@article')->name('article');
Route::get('/get_sinka', 'ApiController@sinka')->name('sinka');
Route::get('/get_newsinka', 'ApiController@newsinka')->name('newsinka');
Route::get('/get_job', 'ApiController@job')->name('job');
Route::get('/get_emppp', 'ApiController@emppp')->name('emppp');
Route::get('/get_youtube', 'ApiController@youtube')->name('youtube');
Route::get('/get_learning/{id}', 'ApiController@get_learning')->name('get_learning');
///



Route::get('/profile', 'LearningOnlineController@index')->name('profile');
Route::get('/learningOnline', 'LearningOnlineController@learningOnline')->name('learningOnline');

Route::get('/learningCorse/{id}', 'LearningOnlineController@learningcorse')->name('learningCorse');
Route::get('/showtest/{id}', 'LearningOnlineController@showtest')->name('showtest');
Route::post('/showtestdata', 'LearningOnlineController@showtestdata')->name('showtestdata');

Route::get('/article_l/{id}', 'LearningOnlineController@article_l')->name('article_l');


Route::resource('/settest', 'Admin\SettestController')->names([
    'create' => 'settest.create',
    'store'  => 'settest.store',
    'update'  => 'settest.update'
]);


Route::resource('/article', 'Admin\ArticleController')->names([
    'create' => 'article.create',
    'store'  => 'article.store',
    'update'  => 'article.update'
]);

Route::resource('/category', 'Admin\CategoryController')->names([
    'create' => 'category.create',
    'store'  => 'category.store',
    'update'  => 'category.update'

]);

Route::resource('/cpa', 'Admin\CpaController')->names([
    'create' => 'cap.create',
    'store'  => 'cap.store',
    'update'  =>'cap.update'
]);

Route::resource('/emppp', 'Admin\EmpppController')->names([
    'create' => 'emppp.create',
    'store'  => 'emppp.store',
    'update'  =>'emppp.update'

]);

Route::resource('/job', 'Admin\JobController')->names([
    'create' => 'job.create',
    'store'  => 'job.store',
    'update'  =>'job.update'
]);

Route::resource('/newsinka', 'Admin\NewsinkaController')->names([
    'create' => 'newsinka.create',
    'store'  => 'newsinka.store',
    'update'  =>'newsinka.update'
]);

Route::resource('/produc', 'Admin\ProducController')->names([
    'create' => 'produc.create',
    'store'  => 'produc.store',
    'update'  =>'produc.update'
]);

Route::resource('/producX', 'Admin\ProducXController')->names([
    'create' => 'producX.create',
    'store'  => 'producX.store',
    'update'  =>'producX.update'
]);

Route::resource('/sinka', 'Admin\SinkaController')->names([
    'create' => 'sinka.create',
    'store'  => 'sinka.store',
    'update'  =>'sinka.update'
]);

Route::resource('/subcategory', 'Admin\SubcategoryController')->names([
    'create' => 'subcategory.create',
    'store'  => 'subcategory.store',
    'update'  =>'subcategory.update'
]);

Route::resource('/youtube', 'Admin\YoutubeController')->names([
    'create' => 'youtube.create',
    'store'  => 'youtube.store',
    'update'  =>'youtube.update'
]);

Route::resource('/grouplear', 'Admin\GroupLearController')->names([
    'create' => 'grouplear.create',
    'store'  => 'grouplear.store',
    'update'  =>'grouplear.update',
    'show'  =>'grouplear.show'
]);



Route::get('/set_brand/{id}/{idd}', 'MainpageController@add_brand')->name('set_brand');

Route::post('/save_brand_set', 'MainpageController@save_brand_set')->name('save_brand_set');



Route::get('/get_score_test/{id}', 'MainpageController@get_score_test')->name('get_score_test');


















