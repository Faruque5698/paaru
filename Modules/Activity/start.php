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
* Module Activity for Admin Backend
*
* *************************************************************************
*/
\Menu::make('admin_sidebar', function ($menu) {

  // Activity Dropdown
  $slidersControl = $menu->add('<i class="nav-icon fas fa-tasks"></i> Activity', [
    'class' => 'nav-item nav-dropdown',
  ])
  ->data([
    'order'         => 92,
    'activematches' => [
      'admin/activities*',
    ],
    'permission'    => ['view_activity'],
  ]);
  $slidersControl->link->attr([
    'class' => 'nav-link nav-dropdown-toggle',
    'href'  => '#',
  ]);

  // Submenu: All Activities
  $slidersControl->add('<i class="nav-icon fas fa-tasks"></i> All Activities', [
    'route' => 'backend.activities.index',
    'class' => 'nav-item',
  ])
  ->data('order', 93)
  ->link->attr([
    'class' => 'nav-link',
  ]);

  // Submenu: Activity Types
  $slidersControl->add('<i class="nav-icon fas fa-tasks"></i> Activity Types', [
    'route' => 'backend.activitiy_types.index',
    'class' => 'nav-item',
  ])
  ->data('order', 94)
  ->link->attr([
    'class' => 'nav-link',
  ]);


})->sortBy('order');
