<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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

Route::get('/', 'UserController@showIndex')->name('index'); // ANASAYFA DİREK GİRİŞ
Route::post('/', 'UserController@indexSendMessage')->name('send_message_index'); // ANASAYFADAKİ İLETİŞİM FORMUNDAN MESAJ GELİNCE
Route::get('/hakkimizda', 'UserController@showAbout')->name('about');
Route::get('/egitimlerimiz', 'UserController@showCourses')->name('courses'); // TÜM EĞİTİMLER
Route::get('/egitimlerimiz/{id}', 'UserController@showCourse')->name('course'); // SPESİFİK EĞİTİMŞLER
Route::get('/projelerimiz', 'UserController@showProjects')->name('projects');
Route::get('/etkinlik-takvimi', 'UserController@showEvents')->name('events');
Route::get('/etkinlik-takvimi/{id}', 'UserController@showEvent')->name('event');
Route::get('/iletisim', 'UserController@showContact')->name('contact'); // İLETİŞİM FORMUNA GİRİNCE
Route::post('/iletisim', 'UserController@sendMessage')->name('send_message'); // İLETİŞİM DOLDURUP GÖNDERİNCE
Route::get('/misyon_vizyon', 'UserController@showMissionVision')->name('mission_vision');
Route::get('admin/login', 'AuthController@login_GET')->name('login');
Route::post('admin/login', 'AuthController@login_POST');

Route::get('admin/logout', 'AuthController@logout')->name('logout');

Route::middleware(['auth'])->group(function () {
    /******************* Admin Panel  *************************** */
    Route::get('/admin', 'AdminController@showAdminIndex')->name('admin_index');
    Route::get('admin/editcontact', 'AdminController@showEditContact')->name('admin_edit_contact');
    Route::post('admin/editcontact', 'AdminController@updateContact')->name('admin_update_contact');
    
    // === EVENTS === //
    Route::get('admin/events', 'AdminController@showEvents')->name('admin_events');
    Route::get('admin/create_event', 'AdminController@showCreateEventForm')->name('admin_show_create_event_form');
    Route::post('admin/create_event', 'AdminController@createEvent')->name('admin_create_event');
    Route::post('admin/update_event', 'AdminController@updateEvent')->name('admin_update_event');
    Route::post('admin/delete_event', 'AdminController@deleteEvent');
    Route::post('admin/update_details', 'AdminController@showUpdateDetails');
    // == COURSES == //

    Route::get('admin/courses', 'AdminController@showCourses')->name('admin_courses');
    Route::get('admin/create_course','AdminController@showCreateCourseForm')->name('admin_show_create_course_form');
    Route::post('admin/create_course','AdminController@createCourse')->name('admin_create_course');
    Route::get('admin/editCourse/{id?}', 'AdminController@editCourse')->name('admin_edit_course');
    Route::post('admin/editCourse/{id?}', 'AdminController@editCoursePost');

    Route::get('admin/delete_course', 'AdminController@deleteCourse')->name('admin_delete_course');
    
    Route::get('admin/about', 'AdminController@showAbout')->name('admin_edit_about');
    Route::post('admin/about', 'AdminController@updateAbout')->name('admin_edit_about');
    
    // === MESSAGES ===
    Route::get('admin/messages', 'AdminController@showMessages')->name('admin_messages'); /* DİREK GİRİLİRSE*/
    Route::post('admin/messages', 'AdminController@deleteMessage'); /* SİL TUŞUNA BASILIRSA */
    Route::post('admin/getmessage','AdminController@getMessage'); /* MESAJI GÖR BUTONUNA BASINCA ÇALIŞSAN BÖLÜM */
    
    // === PROJECTS ===
    Route::get('admin/projects', 'AdminController@showProjects')->name('admin_projects');
    Route::get('admin/create_project', 'AdminController@createProject')->name('admin_create_project');
    Route::post('admin/create_project', 'AdminController@uploadProject')->name('admin_upload_project');
    Route::get('admin/delete_project','AdminController@deleteProject')->name('admin_delete_project');
    Route::get('admin/editProject/{id?}', 'AdminController@editProject')->name('admin_edit_project');
    Route::post('admin/editProject/{id?}', 'AdminController@editProjectPost');
    
    /* PROJELER -- DÜZENLE BUTONUNA TIKLADIĞIMDA MODALA GELEN BİLGİLER */
    Route::post('admin/showUpdateDetailsProject', 'AdminController@showUpdateDetailsProject');
    
    /* PROJELER -- GÜNCELLE BUTONUNA TIKLADIĞIMDA ÇALIŞAN ROUTE */

   // Route::post('admin/updateProject', 'AdminController@updateProject')->name('admin_update_project');
    //Route::post('admin/deleteProject', 'AdminController@deleteProject');

    Route::get('admin/adminprofile','AdminController@showAdminProfile')->name('admin_adminprofile');
    Route::post('admin/adminprofile','AdminController@createNewAdmin');

    Route::get('admin/changepassowrd','AdminController@changePassword')->name('admin.newpassword');
    Route::post('admin/changepassowrd','AdminController@updatePassword')->name('admin.newpassword');
    
    Route::get('admin/deleteuser','AdminController@deleteUser')->name('admin.deleteuser');

});