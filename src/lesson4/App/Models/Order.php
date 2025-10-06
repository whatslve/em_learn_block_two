<?php

namespace App\Models;

use App\Interfaces\Log;
use App\Traits\Logger;

class Order implements Log
{
    use Logger;
}