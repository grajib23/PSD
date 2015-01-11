<?php

/*`1
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

 

################## Delivery Module Froentend Route Start ############################ 
#### Are You Find frontendcontroller Then Go This Way app->controller->frontendcontroller #### 
                          ############################
Route::get('/','frontendcontroller\LoginController@loginmodule');
Route::get('/login','frontendcontroller\DashboardController@login');
Route::get('/dashboard','frontendcontroller\DashboardController@dashboardmodule');
Route::post('/dashboard','frontendcontroller\DashboardController@dashboardmodule');
Route::get('/registration','frontendcontroller\RegistrationController@registrationmodule');
Route::post('/registration','frontendcontroller\RegistrationController@registrationmodule');
Route::get('/registrationlist','frontendcontroller\UserlistController@registrationlistmodule');


################## Delivery Module Backend Route Start ############################
#### Are You Find Backendcontroller Then Go This Way app->controller####
                          ############################
/*Route::resource('v1/registation','UserRegistrationController',[

	'only'=>[

	    'index','show','store','update'
	 ]
]);*/
Route::post('/registation','UserRegistrationController@store');
Route::resource('/genarel-info','PersonalInfoController',[

	'only'=>[

	    'index','show','store','update'
	 ]
]);
Route::resource('/district-list','district',[

	'only'=>[
		'index','show'
	]

]);
Route::resource('/rank','Rank',[
	'only'=>[
		'index','show','store','update'
	]
]);
Route::resource('posting_type','PostingController');

Route::resource('cadre','CardeController');

Route::get('address-all','AddressController@index');





Route::resource('countries','countryController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('countries.divisions','divisionController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('countries.divisions.districts','districtController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('countries.divisions.districts.upzillas','UpzilaController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('ranks','RankController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('languages','LanguageController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('cadres','CadreController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('degrees','DegreeController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('grounds','GroundController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('courses','CourseController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('diciplinecatatgorys','DiciplineCatatgoryController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('diciplinestatus','DiciplineStatusController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('additionalqualifications','AdditionalQualificationController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('leavetypes','LeaveTypeController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('nationalsenioritys','NationalSeniorityController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('organizations','OrganizationController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('payscales','PayScaleController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('positions','PositionController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('postingtypes','PostingTypeController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('posts','PostController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('prinicipalsubjects','PrinicipalSubjectController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('promotiontypes','PromotionTypeController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('publicationtypes','PublicationTypeController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('purposes','PurposeController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('subjects','SubjectController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('powers','PowerController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('servicetypes','ServiceTypeController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('users','UserController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('users.personalinfos','PersonalInfoController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('personalinfos.spouses','SpouseController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('personalinfos.permanentaddress','PermanentAddressController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('personalinfos.presentaddress','PresentAddressController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('personalinfos.childrens','ChildrenController',[
	'except'=>[
		'create','edit'
	]
]);

Route::resource('personalinfos.languageinfos','LanguageInfoController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('personalinfos.powerinfos','PowerInfoController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('personalinfos.eduqualifications','EduQualificationController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('personalinfos.localtrinings','LocalTriningController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('personalinfos.foreigntrinings','ForeignTriningController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('personalinfos.travels','TravelController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('personalinfos.postingabrods','PostingAbrodController',[
	'except'=>[
		'create','edit'
	]
]);


##****************************TODO******************************************


Route::resource('personalinfos.publications','PublicationController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('personalinfos.honours','HonourAndAwardController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('personalinfos.otherservices','OtherServiceController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('personalinfos.servicehistory','ServiceHistoryController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('personalinfos.leavehistory','LeaveHistoryController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('personalinfos.promotions','PromotionController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('personalinfos.diciplineactions','DiscplinaryActionController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('personalinfos.postingrecords','PostingRecordController',[
	'except'=>[
		'create','edit'
	]
]);
Route::resource('personalinfos.additionalqualificationhistory','AdditionalQualificationHistoryController',[
	'except'=>[
		'create','edit'
	]
]);