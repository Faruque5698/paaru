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
\Menu::make('admin_sidebar', function ($menu) {

  // Sliders Dropdown
  $slidersControl = $menu->add('<i class="nav-icon fas fa-sliders-h"></i> Sliders', [
    'class' => 'nav-item nav-dropdown',
  ])
  ->data([
    'order'         => 90,
    'activematches' => [
      'admin/sliders*',
    ],
    'permission'    => ['view_sliders'],
  ]);
  $slidersControl->link->attr([
    'class' => 'nav-link nav-dropdown-toggle',
    'href'  => '#',
  ]);

  // Submenu: All Sliders
  $slidersControl->add('<i class="nav-icon fas fa-sliders-h"></i> All Sliders', [
    'route' => 'backend.sliders.index',
    'class' => 'nav-item',
  ])
  ->data('order', 91)
  ->link->attr([
    'class' => 'nav-link',
  ]);

})->sortBy('order');
