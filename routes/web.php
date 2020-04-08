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

Route::get('/','BranchController@showhome');
Route::get('logout','HomeController@logout');
Route::get('/reg','LogsController@register');
Route::post('/reg2','LogsController@store');
Route::get('/log','LogsController@login');
Route::post('/logs','LogsController@logs');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about_us','AboutController@about');
Route::get('/contact_us','AboutController@contact');


Route::get('/admin','HomeController@panel')->middleware('admin');
Route::get('/addprovince','ProvinceController@add');
Route::post('/addprovince2','ProvinceController@add2');
Route::get('addcity','CityController@add');
Route::post('addcity2','CityController@add2');

Route::get('addbranch','BranchController@add_new');
Route::get('get-state-list','BranchController@getStateList');
Route::get('get-city-list','BranchController@getCityList');
Route::post('addbranch2','BranchController@add2');
Route::get('showbranches','BranchController@show');
Route::get('editbranch','BranchController@edit');
Route::get('del_branch1/{id}','BranchController@del');
Route::get('deletebranch/{id}','BranchController@delete');
Route::get('updatebranch/{id}','BranchController@update');
Route::post('updatebranch2/{id}','BranchController@update2');

Route::get('/addcomplaint','ComplaintController@add');
Route::post('/addcomplaint2','ComplaintController@add2');
Route::get('/showcomplaints','ComplaintController@show');
Route::get('/co_complaint/{id}','ComplaintController@co');
Route::get('/delcomplaint/{id}','ComplaintController@delete');
Route::get('/del_complaint1/{id}','ComplaintController@del1');


Route::get('/add_opinion','OpinionController@add');
Route::post('/add_opinion2','OpinionController@add2');
Route::get('/showopinion','OpinionController@show');
Route::get('/delopinion/{id}','OpinionController@delete');
Route::get('/co_opinion/{id}','OpinionController@co');
Route::get('/del_opinion1/{id}','OpinionController@del1');

Route::get('/addnews','NewsController@add');
Route::post('/addnews2','NewsController@add2');
Route::get('/shownews','NewsController@show');
Route::get('co_news/{id}','NewsController@co');
Route::get('/editnews','NewsController@edit');
Route::get('/del_news1/{id}','NewsController@del');
Route::get('/delnews/{id}','NewsController@delete');
Route::get('/updatenews/{id}','NewsController@update');
Route::post('/updatenews2/{id}','NewsController@update2');

Route::post('/add_newscomment/{id}','newsCommentController@add');
Route::get('/reply/{id}','newsCommentController@reply');
Route::get('/reply2/{comment}/{id}','newsCommentController@reply2');


Route::get('/add-to-cart/{id}','ProductController@addToCart');
Route::get('/cart', 'ProductController@cart');
Route::get('/checkout','ProductController@checkout');
Route::get('/delete', 'ProductController@remove');
Route::get('/save','ProductController@save');
Route::get('/pay','ProductController@pay');
Route::get('/shop','ProductController@show');
Route::delete('remove-from-cart', 'ProductController@remove');
Route::patch('update-cart', 'ProductController@update');
Route::get('/co_product/{id}','ProductController@co');
Route::get('removefromcart/{id}','ProductController@del');


Route::get('addproduct','AdminProductController@add');
Route::post('addproduct2','AdminProductController@add2');
Route::get('/editproduct', 'AdminProductController@edit');
Route::get('/updateproduct/{id}','AdminProductController@update');
Route::post('/updateproduct2/{id}','AdminProductController@update2');
Route::get('/del_product1/{id}','AdminProductController@del');
Route::get('/deleteproduct/{id}','AdminProductController@delete');

Route::get('/addcolor','ColorController@add');
Route::post('/addcolor2','ColorController@add2');



Route::get('/addcategory','BlogCategoryController@add');
Route::post('/addcategory2','BlogCategoryController@add2');

Route::get('/addarticle','BlogController@add');
Route::post('/addarticle2','BlogController@add2');
Route::get('/blog','BlogController@show');
Route::get('/co_article/{id}','BlogController@co');
Route::get('/editarticle','BlogController@edit');
Route::get('/updatearticle/{id}','BlogController@update');
Route::post('/updatearticle2/{id}','BlogController@update2');
Route::get('/del_article1/{id}','BlogController@del');
Route::get('/deletearticle/{id}','BlogController@delete');


Route::post('add_blogcomment/{id}','BlogCommentController@add');

Route::get('addgaranty','GarantyController@add');
Route::post('addgaranty2','GarantyController@add2');
Route::get('show_guarantee','GarantyController@show');
Route::post('result_guarantee','GarantyController@result');

Route::get('/repair_branch','RepairController@repair_branch');
Route::post('addrepair','RepairController@add');
Route::get('/repair','RepairController@repair');
Route::post('/rapair_status','RepairController@result');
Route::get('/all_repairs','RepairController@all');
Route::get('/edit_repair/{id}','RepairController@edit');
Route::post('/edit_repair2/{id}','RepairController@edit2');
Route::get('/adminrepair','RepairController@adminrepair');



Route::get('test','ProductController@test');
Route::get('test2','ProductController@test2');
//Route::post('/saveee','ProductController@saveee');
Route::get('/test3',function(){
    $user=\App\User::pluck('name');
    return $user;
});

Route::get('/test4','AdminProductController@color');

Route::get('get-state-list','BranchController@getStateList');
Route::get('get-city-list','BranchController@getCityList');
//Route::post('save','DropdownController@save');


Route::get('payment','AdminProductController@payment');
Route::get('checker','AdminProductController@checker');

Route::get('buy',function(){
    return view('testshop');
});
 
Route::get('order','orderController@order');
Route::post('shop','orderController@add_order');

Route::get('/test5','BranchController@add_new');
Route::get('/product/{id}',function ($id){
    $product=\App\Product::find($id);
    foreach($product->colors as $color ){
        echo $color->name;
    }

 //   echo $product->color;

});
Route::get('/user/{id}',function($id){
   $user=\App\User::find($id);
   foreach($user->roles as $role){
       echo $role->name;
       echo "<br>";
   }
});