<?php

namespace App\Services;

use Modules\ContactUs\Entities\ContactUs;

class ContactUsService
{
  // Frontend page all address
  public function single() {
    return ContactUs::findOrFail(1);
  }
}
