<?php


Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { 
    Route::crud('faculty','FacultyCrudController');
    Route::crud('department','DepartmentCrudController');
    Route::crud('group', 'GroupCrudController');
    Route::crud('students', 'StudentsCrudController');
    Route::crud('disciplines', 'DisciplinesCrudController');
    Route::crud('teachers', 'TeachersCrudController');
    Route::crud('schedule', 'ScheduleCrudController');
    Route::crud('setting_university', 'Setting_UniversityCrudController');
}); 
