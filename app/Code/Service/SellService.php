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

    function GetSellsByUserId($userId)
    {
        return $this->Repository->GetSellsByUserId($userId);
    }

    function GetSellsByCompanyId($companyId)
    {
        return $this->Repository->GetSellsByCompanyId($companyId);
    }

    function updateSellInfo(Sell $model)
    {
        return $this->Repository->updateSellInfo($model);
    }

    function GetSellsByFilter($filterArray=null)
    {
        $list = $this->Repository->GetSellsByFilter($filterArray);
        if(count($list)>0)
        {
            return $list;
        }
        return null;
    }



}