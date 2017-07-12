<?php
/**
 * Created by PhpStorm.
 * User: 钧球
 * Date: 2017-05-24
 * Time: 11:23
 */
namespace App\Code\Service;


use App\Code\IService\ISellService;
use App\Code\Repository\SellRepository;

use App\Models\Member\Sell;

class SellService implements ISellService
{

    protected $Repository;
    function __construct(SellRepository $repository)
    {
        $this->Repository = $repository;
    }

    function CreateSell(Sell $sell)
    {
        return $this->Repository->CreateSell($sell);
    }

    function updateSellsAccordingFilter($filterArray,$updateArray)
    {

        return $this->Repository->updateSellsAccordingFilter($filterArray,$updateArray);
    }

    function GetSellById($id)
    {
        return $this->Repository->GetSellById($id);
    }

    function GetSellsByUserId($userId,$orderFiled="id",$isAsc=true)
    {
        return $this->Repository->GetSellsByUserId($userId,$orderFiled,$isAsc);
    }

    function GetSellsByCompanyId($companyId,$orderFiled="id",$isAsc=true)
    {
        return $this->Repository->GetSellsByCompanyId($companyId,$orderFiled,$isAsc);
    }

    function updateSellInfo(Sell $model)
    {
        return $this->Repository->updateSellInfo($model);
    }

    function GetSellsByFilterFromCache($filterArray=null,$orderFiled="id",$isAsc=true)
    {
        $list = $this->Repository->GetSellsFromCache();
        $list = $isAsc?$list->sortBy($orderFiled):$list->sortByDesc($orderFiled);
        if ($filterArray == null || count($filterArray) == 0) {
            return $list;
        }
        return $list->where($filterArray);
    }

    function UpdateSellCache()
    {
        return $this->Repository->UpdateSellCache();
    }




}