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
* Module Event for Admin Backend
*
* *************************************************************************
*/
\Menu::make('admin_sidebar', function ($menu) {

  // Activity Dropdown
  $slidersControl = $menu->add('<i class="nav-icon fas fa-calendar"></i> Events', [
    'class' => 'nav-item nav-dropdown',
  ])
  ->data([
    'order'         => 95,
    'activematches' => [
      'admin/events*',
    ],
    'permission'    => ['view_event'],
  ]);
  $slidersControl->link->attr([
    'class' => 'nav-link nav-dropdown-toggle',
    'href'  => '#',
  ]);

  // Submenu: All Events
  $slidersControl->add('<i class="nav-icon fas fa-calendar-alt"></i> All Events', [
    'route' => 'backend.events.index',
    'class' => 'nav-item',
  ])
  ->data('order', 96)
  ->link->attr([
    'class' => 'nav-link',
  ]);

    $slidersControl->add('<i class="nav-icon fas fa-user"></i> Participant', [
        'route' => 'backend.events.participant',
//        'route' => 'backend.events.index',
        'class' => 'nav-item',
    ])
        ->data('order', 97)
        ->link->attr([
            'class' => 'nav-link',
        ]);


})->sortBy('order');
