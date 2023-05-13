<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class product extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'product';

}
