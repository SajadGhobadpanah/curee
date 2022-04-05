<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class Policy
{
    use HandlesAuthorization;

    public function edit(User $user, User $currentuser)
    {
        return $user->id == $currentuser->id;

   }
}
