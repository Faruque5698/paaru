<?php

/*
|--------------------------------------------------------------------------
| Register Namespaces and Routes
|--------------------------------------------------------------------------
|
| When your module starts, this file is executed automatically. By default
| it will only load the module's route file. However, you can expand on
| it to load anything else from the module, such as a class or view.
|
*/

if (!app()->routesAreCached()) {
  require __DIR__.'/Http/routes.php';
}

/*
*
* Module Members for Admin Backend
*
* *************************************************************************
*/


// \Menu::make('admin_sidebar', function ($menu) {

//   // Student Dropdown
//   $studentsControl = $menu->add('<i class="nav-icon fas fa-sliders-h"></i> Students', [
//     'class' => 'nav-item nav-dropdown',
//   ])
//   ->data([
//     'order'         => 92,
//     'activematches' => [
//       'admin/students*',
//     ],
//     'permission'    => ['view_students'],
//   ]);
//   $studentsControl->link->attr([
//     'class' => 'nav-link nav-dropdown-toggle',
//     'href'  => '#',
//   ]);

//   // Submenu: All Student
//   $studentsControl->add('<i class="nav-icon fas fa-sliders-h"></i> All Students', [
//     //To define route to use this section
//     'class' => 'nav-item',
//   ])
//   ->data('order', 93)
//   ->link->attr([
//     'class' => 'nav-link',
//   ]);

// })->sortBy('order');
