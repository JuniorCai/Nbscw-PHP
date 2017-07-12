<?php
/**
 * Created by PhpStorm.
 * User: 钧球
 * Date: 2017-05-24
 * Time: 10:47
 */

namespace App\Code\Repository;

use App\Models\Member\Sell;
use App\Models\Member\SellCategory;
use App\Models\Member\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class SellCategoryRepository
{

    function CreateCategory($category)
    {
        return SellCategory::create([
            'id' => $category->id,
            'name' => $category->name,
            'parentId' => $category->parentId,
            'sort' => $category->sort
        ]);
    }

    function updateCategoryAccordingFilter($filterArray, $updateArray)
    {
        try
        {
            $list = $this->GetCategoryFromCache();
            $list->where($filterArray)->update($updateArray);
            return true;
        }catch (\Exception $exception)
        {
            return false;
        }    }

    function GetCategoryById($id)
    {
        $list = $this->GetCategoryFromCache();

        return $list->where("id",$id)->get();
    }

    function GetCategoryFromCache()
    {
        $list = Cache::get("SellCategory");
        if($list!=null)
        {
            return $list;
        }
        $newList = SellCategory::get();
        Cache::put("SellCategory",$newList,60);
        return $newList;
    }

    function updateCategory(SellCategory $category)
    {
        return $category->save();
    }

    function GetCategoryByFilter($filterArray)
    {
        $list = $this->GetCategoryFromCache();

        return $list->where($filterArray)->get();
    }

    function UpdateCategoryCache()
    {
        try
        {
            $newList = SellCategory::get();
            Redis::put("SellCategory",$newList);
            return true;
        }catch (\Exception $e)
        {
            return false;
        }
    }
}