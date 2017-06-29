<?php

namespace App\Models\Member;

use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 求购类
 * @package App\Models\Member
 */
class Buy
{
    use SoftDeletes;

    protected $table = "productBuys";

}
