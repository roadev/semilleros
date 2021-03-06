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

Route::get('/', 'SectionalsController@listSectionals');
Route::get('/sectionals/new', 'SectionalsController@newSectional');
Route::get('/sectionals/{sectional}', 'SectionalsController@show');
Route::post('/sectionals/create', 'SectionalsController@create');
Route::get('/sectionals', 'SectionalsController@listSectionals');
Route::get('/faculties', 'FacultiesController@listFalcuties');
Route::get('/faculties/new', 'FacultiesController@newFaculty');
Route::get('/faculties/{faculty}', 'FacultiesController@show');
Route::post('/faculties/create', 'FacultiesController@create');
Route::get('/projects', 'ProjectsController@listProjects');
Route::get('/projects/new', 'ProjectsController@newProject');
Route::post('/projects/create', 'ProjectsController@create');
Route::get('/research_centers', 'ResearchCentersController@listResearchCenters');
Route::get('/research_centers/new', 'ResearchCentersController@newResearchCenters');
Route::get('/events', 'EventsController@listEvents');
Route::get('/events/new', 'EventsController@newEvent');
Route::post('/events/create', 'EventsController@create');
Route::get('/groups', 'GroupsController@listGroups');
Route::get('/groups/new', 'GroupsController@newGroup');
Route::post('/groups/create', 'GroupsController@create');
Route::get('/groups/{group}', 'GroupsController@show');
Route::get('/members', 'MembersController@listMembers');
Route::get('/members/new', 'MembersController@newMember');
Route::post('/members/create', 'MembersController@create');
Route::get('/academic_programs', 'AcademicProgramsController@listAcademicPrograms');
Route::get('/research_centers', 'ResearchCentersController@listResearchCenters');
Route::get('/research_centers/new', 'ResearchCentersController@newResearchCenters');
Route::post('/research_centers/create', 'ResearchCentersController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
