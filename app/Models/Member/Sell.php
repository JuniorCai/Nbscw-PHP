<?php

namespace App\Models\Member;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 供应类
 * @package App\Models\Member
 */
class Sell extends Model
{
    use SoftDeletes;

    protected $table = "productSells";

    protected $dates = ["deleted_at"];

}

class PriceTypeEnum
{
    /**
     * 面议
     */
    const Negotiable = 0;
    /**
     * 一口价
     */
    const Fixed = 1;
    /**
     * 区间价
     */
    const Range = 2;
}
