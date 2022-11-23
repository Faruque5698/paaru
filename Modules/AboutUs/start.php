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

  // Separator: Module Management
  $all_modules = $menu->add('About PAARU', [
    'class' => 'nav-title',
  ])
  ->data('order', 60);

  // About Dropdown
  $aboutusControl = $menu->add('<i class="nav-icon fas fa-user-cog"></i> About', [
    'class' => 'nav-item nav-dropdown',
  ])
  ->data([
    'order'         => 61,
    'activematches' => [
      'admin/aboutus*',
    ],
    'permission'    => ['view_aboutus'],
  ]);
  $aboutusControl->link->attr([
    'class' => 'nav-link nav-dropdown-toggle',
    'href'  => '#',
  ]);

  // Submenu: All About
  $aboutusControl->add('<i class="nav-icon fas fa-user"></i> About Us', [
    'route' => 'backend.aboutus.index',
    'class' => 'nav-item',
  ])
  ->data('order', 62)
  ->link->attr([
    'class' => 'nav-link',
  ]);

  $aboutusControl->add('<i class="nav-icon fas fa-envelope-open-text"></i>Messages', [
      'route' => 'backend.pmmessages.index',
      'class' => 'nav-item',
  ])
  ->data('order', 63)
  ->link->attr([
      'class' => 'nav-link',
  ]);
  
  $aboutusControl->add('<i class="nav-icon fas fa-link"></i>All Links', [
    'route' => 'backend.links.index',
    'class' => 'nav-item',
  ])
  ->data('order', 64)
  ->link->attr([
    'class' => 'nav-link',
  ]);

})->sortBy('order');
