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
* Module Notice for Admin Backend
*
* *************************************************************************
*/
\Menu::make('admin_sidebar', function ($menu) {

  // Notice Dropdown
  $noticeControl = $menu->add('<i class="nav-icon fas fa-flag-checkered"></i> Notice', [
    'class' => 'nav-item nav-dropdown',
  ])
  ->data([
    'order'         => 97,
    'activematches' => [
      'admin/notice*',
    ],
    'permission'    => ['view_notices'],
  ]);
  $noticeControl->link->attr([
    'class' => 'nav-link nav-dropdown-toggle',
    'href'  => '#',
  ]);

  // Submenu: All Notice
  $noticeControl->add('<i class="nav-icon fas fa-flag-checkered"></i> All Notices', [
    'route' => 'backend.notice.index',
    'class' => 'nav-item',
  ])
  ->data('order', 97)
  ->link->attr([
    'class' => 'nav-link',
  ]);

})->sortBy('order');
