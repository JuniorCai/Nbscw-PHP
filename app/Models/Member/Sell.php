<?php

namespace App\Models\Member;

use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 供应类
 * @package App\Models\Member
 */
class Sell
{
    use SoftDeletes;

    protected $table = "productSells";

}
