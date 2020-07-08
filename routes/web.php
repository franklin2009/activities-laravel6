<?php

/**
 * Ruta: /, muestra la vista del home
 */

Route::get('/', 'PageController@home');

/**
 * Ruta: about, muestra la vista con informacion del desarrollador
 */
Route::get('about', 'PageController@about');


/**
 * Ruta: employees, gestion de emplados
 */
Route::resource('employees', 'EmployeeController');

/**
 * Ruta: activities, gestion de actividades
 */
Route::resource('activities', 'ActivitieController');
Route::get('activities/{activitie}/status', ['uses' => 'ActivitieController@status', 'as' => 'activities.status']);