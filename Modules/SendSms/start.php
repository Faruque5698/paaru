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
* Module SendSms for Admin Backend
*
* *************************************************************************
*/
\Menu::make('admin_sidebar', function ($menu) {
  // SendSms Dropdown
  $sendsmsControl = $menu->add('<i class="nav-icon fas fa-comment"></i> Send SMS', [
    'class' => 'nav-item nav-dropdown',
  ])
  ->data([
    'order'         => 100,
    'activematches' => [
      'admin/sendsms*',
    ],
    'permission'    => ['send_sms'],
  ]);
  $sendsmsControl->link->attr([
    'class' => 'nav-link nav-dropdown-toggle',
    'href'  => '#',
  ]);

  // Submenu: All Notice
  $sendsmsControl->add('<i class="nav-icon fas fa-comment"></i> Send SMS', [
    'route' => 'backend.sendsms.index',
    'class' => 'nav-item',
  ])
  ->data('order', 101)
  ->link->attr([
    'class' => 'nav-link',
  ]);

})->sortBy('order');
