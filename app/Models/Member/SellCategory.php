<?php

namespace App\Models\Member;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 供应类
 * @package App\Models\Member
 */
class SellCategory extends Model
{
    use SoftDeletes;

    protected $table = "sellCategory";

}
