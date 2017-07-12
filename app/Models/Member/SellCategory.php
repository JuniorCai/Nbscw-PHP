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
    protected $dates = ["deleted_at"];


    public function childrenCategories()
    {
        return $this->hasMany('App\Models\Member\SellCategory','parentId');
    }

    public function parentCategory()
    {
        return $this->belongsTo('App\Models\Member\SellCategory','parentId');
    }
}
