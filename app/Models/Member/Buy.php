<?php

namespace App\Models\Member;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 求购类
 * @package App\Models\Member
 */
class Buy extends Model
{
    use SoftDeletes;

    protected $table = "productBuys";

    protected $dates = ["deleted_at"];

}
