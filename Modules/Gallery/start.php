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
* Module Gallery for Admin Backend
*
* *************************************************************************
*/
\Menu::make('admin_sidebar', function ($menu) {
  // Notice Dropdown
  $galleryControl = $menu->add('<i class="nav-icon far fa-image"></i> Gallery', [
    'class' => 'nav-item nav-dropdown',
  ])
  ->data([
    'order'         => 98,
    'activematches' => [
      'admin/gallery*',
    ],
    'permission'    => ['view_gallery'],
  ]);
  $galleryControl->link->attr([
    'class' => 'nav-link nav-dropdown-toggle',
    'href'  => '#',
  ]);

  // Submenu: All Notice
  $galleryControl->add('<i class="nav-icon far fa-images"></i> Galleries', [
    'route' => 'backend.gallery.index',
    'class' => 'nav-item',
  ])
  ->data('order', 99)
  ->link->attr([
    'class' => 'nav-link',
  ]);

})->sortBy('order');
