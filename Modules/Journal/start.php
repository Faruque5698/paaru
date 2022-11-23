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
* Module Journals for Admin Backend
*
* *************************************************************************
*/
\Menu::make('admin_sidebar', function ($menu) {


  // Journals Dropdown
  $slidersControl = $menu->add('<i class="nav-icon fas fa-newspaper"></i> Journals', [
    'class' => 'nav-item nav-dropdown',
  ])
  ->data([
    'order'         => 88,
    'activematches' => [
      'admin/journals*',
    ],
    'permission'    => ['view_journals'],
  ]);
  $slidersControl->link->attr([
    'class' => 'nav-link nav-dropdown-toggle',
    'href'  => '#',
  ]);

  // Submenu: All Journals
  $slidersControl->add('<i class="nav-icon fas fa-newspaper"></i> All Journals', [
    'route' => 'backend.journals.index',
    'class' => 'nav-item',
  ])
  ->data('order', 89)
  ->link->attr([
    'class' => 'nav-link',
  ]);

})->sortBy('order');
