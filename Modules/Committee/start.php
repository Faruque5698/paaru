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
* Module committees for Admin Backend
*
* *************************************************************************
*/
\Menu::make('admin_sidebar', function ($menu) {


  // Committee Dropdown
  $committeeControl = $menu->add('<i class="nav-icon fas fa-users"></i> Committees', [
    'class' => 'nav-item nav-dropdown',
  ])
  ->data([
    'order'         => 85,
    'activematches' => [
      'admin/committees/*',
    ],
    'permission'    => ['view_committee'],
  ]);
  $committeeControl->link->attr([
    'class' => 'nav-link nav-dropdown-toggle',
    'href'  => '#',
  ]);

  // All Committees
  $committeeControl->add('<i class="nav-icon fas fa-users"></i> Executive Committee', [
    'route' => 'backend.committees.index',
    'class' => 'nav-item',
  ])
  ->data('order', 86)
  ->link->attr([
    'class' => 'nav-link',
  ]);

  $committeeControl->add('<i class="nav-icon fas fa-users"></i> Advisory Committee', [
    'route' => 'backend.advisory_committee.index',
    'class' => 'nav-item',
  ])
  ->data('order', 86)
  ->link->attr([
    'class' => 'nav-link',
  ]);

  $committeeControl->add('<i class="nav-icon fas fa-users"></i> Committee Types', [
    'route' => 'backend.committee_types.index',
    'class' => 'nav-item',
  ])
  ->data('order', 88)
  ->link->attr([
    'class' => 'nav-link',
  ]);

})->sortBy('order');
