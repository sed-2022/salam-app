<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;



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


Route::get('/','HomeController@index');


Route::get('/image-gallery','HomeController@ImageGallery');

Route::get('/edit-image-gallery','AdminController@NavigateEditImageG');

Route::post('/save-image-gallery','AdminController@EditImageG');

Route::get('/delete-image-gallery/{id}', 'AdminController@DeleteImageG');


Route::get('/edit-scheme-gallery','AdminController@NavigateEditSchemeImageG');

Route::get('/scheme-gallery','HomeController@SchemeImageGallery');

Route::post('/save-scheme-gallery','AdminController@EditSchemeImageG');

Route::get('/delete-scheme-gallery/{id}', 'AdminController@DeleteSchemeImageG');


Route::get('/project-scheme','HomeController@ProjectScheme');

//Contact Us
Route::get('/contact','HomeController@ContactUs');

Route::post('/send-message', 'HomeController@ContactUsForm');


Route::get('/funding-companies','HomeController@FundingCompanies');

Route::get('/houses-units','HomeController@HousesUnits');

Route::get('/periodic-reports','HomeController@PeriodicReports');



Route::get('/prototyp-A','HomeController@PrototypA');

Route::get('/prototyp-B','HomeController@PrototypB');

Route::get('/prototyp-C','HomeController@PrototypC');

Route::get('/reserve-appoinment','HomeController@ReserveAppoinment');


Route::post('/submit-reservation', 'HomeController@MakeAppoinment');

Route::get('/reserve-house','HomeController@ReserveHouse');


Route::post('/choose-prefered-type','HomeController@VisitorChooseHouse');




Route::get('/all-appointments-list', 'AdminController@AppointmentsList');
Route::get('/all-housing-settings/{type}', 'AdminController@HousingList');


Route::get('/all-notifications-list', 'AdminController@newNotifications');

Route::get('/all-contactus-messages', 'AdminController@ContactUsList');
Route::get('/periodic-reports-settings', 'AdminController@PeriodicReportsSettings');


Route::get('/admin-account', 'AdminController@account');
Route::put('/update-admin-account', 'AdminController@UpdateAdminAccount');

Route::get('/all-visitors-choises', 'AdminController@VisitorsChoisesList');



Route::get('/houses-A-detilas', 'AdminController@HousesDetilasA');

Route::post('/edit-houses-a-detilas', 'AdminController@EditHousesDetilasA');

Route::get('/delete-house-details-row/{id}', 'AdminController@DeleteHouseDetailRow');





Route::get('/houses-B-detilas', 'AdminController@HousesDetilasB');

Route::post('/edit-houses-b-detilas', 'AdminController@EditHousesDetilasB');


Route::get('/houses-C-detilas', 'AdminController@HousesDetilasC');
Route::post('/edit-houses-c-detilas', 'AdminController@EditHousesDetilasC');




Route::get('/new-notifications', 'AdminController@newNotifications');


Route::get('/housing-reservation/export_excel', 'AdminController@ExportReservations');

Route::get('/housing-reservation/download-reservations', 'AdminController@DownloadReservations');


Route::get('/contacts-list/export_excel', 'AdminController@ExportCotacts');

Route::get('/contacts-list/download-contacts', 'AdminController@DownloadCotacts');



Route::get('/vistors-list/export_excel', 'AdminController@ExportVitorsList');

Route::get('/vistors-list/download-vistors', 'AdminController@DownloadVitorsList');



Route::post('/add-report', 'AdminController@AddReport');
Route::put('/edit-report/{id}', 'AdminController@EditReport');
Route::delete('/delete-report/{id}', 'AdminController@DestroyReport');


Route::get('/all-appointments-list/export_excel', 'AdminController@ExportAppointments');

Route::get('/all-appointments-list/download-appointments', 'AdminController@DownloadAppointments');


Route::get('/settings', 'AdminController@allSettings');

Route::get('/home-page-settings', 'AdminController@NavigateHomeSettings');

Route::put('/edit-home-page-settings', 'AdminController@EditHomeSettings');



Route::get('/project-scheme-settings', 'AdminController@NavigateProjectPageSettings');

Route::put('/edit-project-scheme-settings', 'AdminController@EditProjectPageSettings');

Route::get('/delete-logo/{id}', 'AdminController@DeleteLogo');



Route::get('/funding-companies-settings', 'AdminController@NavigateFundingPageSettings');

Route::post('/edit-funding-companies-settings', 'AdminController@EditFundingPageSettings');


Route::get('/involved-companies-settings', 'AdminController@NavigateInvolvedCompanySettings');

Route::get('/parteners', 'AdminController@NavigatePartenersSettings');

Route::post('/edit-involved-companies-settings', 'AdminController@EditInvolvedCompanySettings');

Route::get('/delete-involved-companies-logo/{id}', 'AdminController@DeleteInvolvedCompanyLogo');




Route::post('/edit-sucess-partners-settings', 'AdminController@EditSucessPartnersSettings');

Route::get('/delete-sucess-partners-logo/{id}', 'AdminController@DeleteSucessPartnersLogo');



Route::post('/mark-as-read', 'AdminController@markNotificationAsRead');



Route::get('/visitors-reservations-mark-as-read', 'AdminController@markVistorsReserationsAsRead');


Route::get('/appointments-mark-as-read', 'AdminController@markAppointmentAsRead');


Route::get('/contactUs-mark-as-read', 'AdminController@markContactUsAsRead');






Route::put('/update-housing-settings/{type}', 'AdminController@UpdateHousingList');

Auth::routes(['register' => false]);




Auth::routes();

