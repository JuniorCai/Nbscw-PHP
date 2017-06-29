<?php
/**
 * Created by PhpStorm.
 * User: 钧球
 * Date: 2017-05-24
 * Time: 10:47
 */

namespace App\Code\Repository;

use App\Models\Member\Sell;
use App\Models\Member\User;

class SellRepository
{

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

    function GetSellsByUserId($userId)
    {
        return Sell::where("userId",$userId)->get();
    }

    function GetSellsByCompanyId($companyId)
    {
        return Sell::where("companyId",$companyId)->get();
    }

    function updateSellInfo(Sell $model)
    {
        return $model->save();
    }
}