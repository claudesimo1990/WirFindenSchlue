<?php

namespace App;

use Illuminate\Auth\Authenticatable as BasicAuthenticatable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Order extends Model implements Authenticatable
{
    use BasicAuthenticatable;


    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }

}
