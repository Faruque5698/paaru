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

  // Contact US Dropdown
  $contactControl = $menu->add('<i class="nav-icon fas fa-address-book"></i> Contact', [
    'class' => 'nav-item nav-dropdown',
  ])
  ->data([
    'order'         => 66,
    'activematches' => [
      'admin/contactus*',
    ],
    'permission'    => ['contact_us'],
  ]);
  $contactControl->link->attr([
    'class' => 'nav-link nav-dropdown-toggle',
    'href'  => '#',
  ]);

  // All Contacts
  $contactControl->add('<i class="nav-icon fas fa-users"></i> Contacts', [
    'route' => 'backend.contactus.index',
    'class' => 'nav-item',
  ])
  ->data('order', 67)
  ->link->attr([
    'class' => 'nav-link',
  ]);

  $contactControl->add('<i class="nav-icon fas fa-envelope"></i>Inbox', [
      'route' => 'backend.contactus.messages',
      'class' => 'nav-item',
  ])
  ->data('order', 68)
  ->link->attr([
      'class' => 'nav-link',
  ]);



})->sortBy('order');
