<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
  public function toResponse($request)
  {
    $home = (auth()->user()->is_admin === 1) ? '/admin/events' : '/';

    return redirect($home);
  }
}