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

  $all_modules = $menu->add('Menus', [
    'class' => 'nav-title',
  ])
  ->data('order', 80);
  // Members Dropdown
  $membersControl = $menu->add('<i class="nav-icon fas fa-user"></i> Members', [
    'class' => 'nav-item nav-dropdown',
  ])
  ->data([
    'order'         => 81,
    'activematches' => [
      'admin/members*',
    ],
    'permission'    => ['view_members'],
  ]);
  $membersControl->link->attr([
    'class' => 'nav-link nav-dropdown-toggle',
    'href'  => '#',
  ]);

  // Member Types
  $membersControl->add('<i class="nav-icon fas fa-users"></i> All Types', [
    'route' => 'backend.member_types.index',
    'class' => 'nav-item',
  ])
  ->data('order', 81)
  ->link->attr([
    'class' => 'nav-link',
  ]);

  // Submenu: All Members
  $membersControl->add('<i class="nav-icon fas fa-users"></i> All Members', [
    'route' => 'backend.members.index',
    'class' => 'nav-item',
  ])
  ->data('order', 82)
  ->link->attr([
    'class' => 'nav-link',
  ]);
  // Submenu: Life Time Members
  $membersControl->add('<i class="nav-icon fas fa-users"></i> Life Members', [
    'route' => 'backend.members.get_life_member',
    'class' => 'nav-item',
  ])
  ->data('order', 83)
  ->link->attr([
    'class' => 'nav-link',
  ]);
  // Submenu: alumni members
  $membersControl->add('<i class="nav-icon fas fa-users"></i> Alumni Members', [
    'route' => 'backend.members.get_alumni_members',
    'class' => 'nav-item',
  ])
  ->data('order', 84)
  ->link->attr([
    'class' => 'nav-link',
  ]);
  // Submenu: reowned alumni members
  $membersControl->add('<i class="nav-icon fas fa-users"></i> Renowned Alumnus', [
    'route' => 'backend.renowned_alumni_members.index',
    'class' => 'nav-item',
  ])
  ->data('order', 85)
  ->link->attr([
    'class' => 'nav-link',
  ]);

})->sortBy('order');
