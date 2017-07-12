<?php
/**
 * Created by PhpStorm.
 * User: 钧球
 * Date: 2017-05-24
 * Time: 10:47
 */

namespace App\Code\Repository;

use App\Models\Member\Sell;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;

class SellRepository
{
    protected $CachePeriod;

    function __construct()
    {
        $this->CachePeriod = Config::get("app.WebCachePeriod.Sell");
    }

    function CreateSell(Sell $sell)
    {
        return Sell::create([
            'userId' => $sell->userId,
            'companyId' => $sell->companyId,
            'categoryId' => $sell->categoryId,
            'title' => $sell->title,
            'detail' => $sell->detail,
            'img1' => $sell->img1,
            'img2' => $sell->img2,
            'img3' => $sell->img3,
            'expiration' => $sell->expiration,
            'unit' => $sell->unit,
            'price' => $sell->price,
            'maxPrice' => $sell->maxPrice,
            'minPrice' => $sell->minPrice,
            'priceType' => $sell->priceType,
            'verifyStatus' => $sell->verifyStatus,
            'releaseStatus' => $sell->releaseStatus,
            'startDate' => $sell->startDate,
            'endDate' => $sell->endDate,
            'updateDate' => $sell->updateDate,
        ]);
    }

    function updateSellsAccordingFilter($filterArray,$updateArray)
    {
        try
        {
            Sell::where($filterArray)->update($updateArray);
            return true;
        }catch (\Exception $exception)
        {
            return false;
        }

    }

    function GetSellById($id)
    {
        return Sell::where("id",$id)->first();
    }

    function GetSellsByUserId($userId,$orderFiled,$isAsc)
    {
        return Sell::where("userId",$userId)->orderBy($orderFiled,$isAsc)->get();
    }

    function GetSellsByCompanyId($companyId,$orderFiled,$isAsc)
    {
        return Sell::where("companyId",$companyId)->orderBy($orderFiled,$isAsc)->get()
            ;
    }

    function updateSellInfo(Sell $model)
    {
        return $model->save();
    }



    /**将未删除且未过期的供应产品存入缓存（包含未审核、已审核、已发布的产品）
     * @return mixed
     */
    function GetSellsFromCache()
    {

        $list = Cache::get("SellsCollection");
        if($list!=null)
        {
            return $list;
        }
        $newList = Sell::where("endDate",">",Carbon::now())->get();
        Cache::put("SellsCollection",$newList,$this->CachePeriod);
        return $newList;
    }

    function UpdateSellCache()
    {
        try
        {
            $newList = Sell::where("endDate",">",Carbon::now())->get();
            Cache::put("SellsCollection",$newList,$this->CachePeriod);
            return true;
        }catch (\Exception $e)
        {
            return false;
        }
    }

    function FilterProductPager()
    {

    }

}