<?php

use App\Http\Controllers\Admin\{
	CategoryController,
	EmailSettingsController,
	FooterSettingsController,
	FrontController,
	FrontSettingsController,
	GeneralSettingsController,
	HomeSettingsController,
	JobsController,
	ProductsController,
	ProfileController,
	SizesController,
	TypeController,
	PagesController
};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "adminauth" middleware group. Make something great!
|
*/


$prefix = 'admin';
$defined = 'admin.';
$middlewares = ['adminauth','siteData'];
//Admin_123+Nist_1
Route::group(['prefix' => $prefix, 'as' => $defined], function () {


	Route::get('/', 'App\Http\Controllers\Auth\AdminAuthController@adminpage')->name('admin.page');
	Route::get('login', 'App\Http\Controllers\Auth\AdminAuthController@getLogin')->name('login');
	Route::post('login', 'App\Http\Controllers\Auth\AdminAuthController@postLogin')->name('post.login');
	Route::get('logout', 'App\Http\Controllers\Auth\AdminAuthController@logout')->name('logout');
});



Route::group(['middleware' => $middlewares, 'prefix' => $prefix, 'as' => $defined], function () {

	Route::controller(FrontController::class)->group(function () {
		//View routes for all pages

		//Admin Dashboard
		Route::get('dashboard', 'dashboard')->name('dashboard');

		Route::get('settings/web-settings/check-key/{key?}/{id?}', 'checkKey')->name('general.settings.check.key');
		Route::get('settings/web-settings/general', 'generalSettings')->name('general.settings');
		Route::get('settings/web-settings/general-list/{page?}', 'generalSettingsList')->name('general.settings.list');
		Route::get('settings/web-settings/create-setting', 'createSetting')->name('general.settings.create');
		Route::post('settings/web-settings/create-setting', 'createSettingPost')->name('general.settings.create.post');

		Route::get('settings/web-settings/update-setting/{id}', 'updateSetting')->name('general.settings.update');
		Route::get('settings/web-settings/delete-setting/{id}', 'deleteSetting')->name('general.settings.delete');
 

		Route::get('settings/email-settings/smtp', 'emailSMTP')->name('smtp.settings');
		Route::get('settings/email-settings/pending-mails', 'emailJobs')->name('email.jobs');
		Route::get('settings/email-settings/failed-mails', 'emailFailedJob')->name('email.failedjobs');

		Route::get('settings/general-settings', 'index')->name('generalsettings');
		Route::get('settings/front-settings/homepage', 'FrontSettings')->name('frontsettings');
		Route::get('settings/front-settings/slider/{selected?}', 'SliderSettings')->name('slidersettings');
		Route::get('settings/front-settings/logo', 'LogoSettings')->name('logosettings');
		Route::get('settings/front-settings/favicon', 'FaviconSettings')->name('faviconsettings');
		Route::get('settings/front-settings/style', 'StyleSettings')->name('stylesettings');
		Route::get('settings/front-settings/shopimg', 'ShopImgSettings')->name('shopimgsettings');

		Route::get('change-theme', 'ChangeTheme')->name('changetheme');
	});

	Route::controller(GeneralSettingsController::class)->group(function () {

		Route::post('settings/web-settings/update-general-settings', 'update')->name('updateGeneralSettings');
		Route::get('settings/web-settings/clear-system-cache', 'clearCache')->name('clearcache');
	});

	Route::controller(HomeSettingsController::class)->group(function () {
		Route::post('settings/home-settings/update-home-settings', 'update')->name('updatehomesettings');
		//Route::post('settings/home-settings/update-home-settings/slider', 'addSlider')->name('updatehomesettings.slider');
		Route::post('settings/home-settings/slider', 'createUpdateSlider') ->name('updatehomesettings.slider');

		Route::get('settings/home-settings/delete-home-settings/slider/{index}', 'deleteSlider')->name('deletehomesettings.slider');
		Route::post('settings/home-settings/update-home-settings/bottom-slider', 'addBottomSlider')->name('updatehomesettings.bottom_slider');
		Route::get('settings/home-settings/delete-home-settings/bottom-slider/{index}', 'deleteBottomSlider')->name('deletehomesettings.slider_bottom');
		Route::post('settings/home-settings/update-home-settings/comments', 'addComment')->name('updatehomesettings.comment');
		Route::get('settings/home-settings/delete-home-settings/comment/{index}', 'deleteComment')->name('deletehomesettings.comment');
	});


	Route::controller(PagesController::class)->group(function () {

		Route::get('settings/pages/list', 'list')->name('pages.index');
		Route::get('settings/pages/list/datatables', 'datatables')->name('pages.list.datatables');
		Route::get('settings/pages/create-page', 'create')->name('page.create');
		Route::post('settings/pages/store', 'store')->name('page.store');
		Route::get('settings/pages/edit/{slug}', 'edit')->name('page.edit');
		Route::post('settings/pages/update', 'update')->name('page.update');
		Route::post('settings/pages/update-status', 'update_status')->name('page.status.update');
		Route::post('settings/pages/destroy/{slug}', 'destroy')->name('page.destroy');
	});


	Route::controller(JobsController::class)->group(function () {

		Route::get('settings/start-queues', 'start')->name('startqueues');
		Route::get('settings/resend-failed-job/{slug}', 'resend')->name('resendfailedjob');
	});

	Route::controller(EmailSettingsController::class)->group(function () {

		Route::post('settings/email/update-smtp', 'updateSmtp')->name('updateSMTP');
		Route::get('settings/email/get-jobs', 'getJobs')->name('getemailjobs');
		Route::get('settings/email/get-failed-jobs', 'getFailedJobs')->name('getemailfailedjobs');
	});

	Route::controller(FrontSettingsController::class)->group(function () {

		Route::post('update-front-settings', 'HomePageUpdate')->name('updatefrontsettings');
		Route::post('update-logo', 'updateLogo')->name('updatelogo');
		Route::post('update-favicon', 'updateFavicon')->name('updatefavicon');
		Route::post('update-shopimg', 'updateShopImg')->name('updateshopimg');
		Route::post('update-front-style', 'updateFrontStyle')->name('updatefrontstyle');
	});

	Route::controller(ProfileController::class)->group(function () {

		Route::get('account-settings', 'profile')->name('profile.settings');
		Route::post('account-settings/update', 'ChangeProfile')->name('profile.settings.update');
		Route::get('change-password', 'passChange')->name('change.password');
		Route::post('change-password/update', 'ChangePassword')->name('change.password.update');
	});


	Route::controller(CategoryController::class)->group(function () {

		Route::resource('categories', CategoryController::class);
		Route::get('categories/datables/list', 'datatables')->name('categories.datatables');
		Route::post('categories/status/update', 'update_status')->name('categories.status.update');
		Route::post('categories/update/category/{slug}', 'update')->name('category.update');
	});


	Route::controller(SizesController::class)->group(function () {

		Route::resource('sizes', SizesController::class);
		Route::get('sizes/datables/list', 'datatables')->name('sizes.datatables');
		Route::post('sizes/size/update/{slug}', 'update')->name('size.update');
	});

	Route::controller(TypeController::class)->group(function () {
		Route::resource('types', TypeController::class);
		Route::get('types/datables/list', 'datatables')->name('types.datatables');
		Route::post('types/type/update/{slug}', 'update')->name('type.update');
	});

	Route::controller(ProductsController::class)->group(function () {

 Route::resource('products', ProductsController::class);

		Route::get('products/comments/list/all', 'comments')->name('product.comments.all');
		Route::get('products/comments/{page?}/{product_id?}/{status?}', 'product_comments')->name('product.comments');
		Route::get('products/location/{location?}/{product_id?}', 'location_order')->name('location.order');
		Route::get('products/delete/{product_id}', 'destroy')->name('product.delete');
		Route::get('products/list/{page?}/{keyword?}/{type?}/{category?}', 'product_list')->name('products.list');
		Route::get('products/datables/list', 'datatables')->name('products.datatables');
		Route::get('products/locations/{id}/{location?}/{order?}', 'product_locations')->name('products.locations');
		Route::get('products/images/{slug}/{id?}', 'getProductFiles')->name('products.getProductFiles');
		Route::get('products/check-slug/{slug}/{id?}',[ProductsController::class,'check_slug'] )->name('products.check_slug');
		Route::get('products/{slug}/edit',  [ProductsController::class,'edit'])->name('products.datatables');
		Route::post('products/status/update', 'update_status')->name('products.status.update');
		Route::post('products/product/update', 'update')->name('product.update');
	});


	Route::controller(FooterSettingsController::class)->group(function () {
		Route::get('footer', 'FooterSettings')->name('settings.footer');
		Route::post('footer/update', 'updateFooter')->name('settings.footer.update');
	});
});
