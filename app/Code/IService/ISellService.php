<?php
/**
 * Created by PhpStorm.
 * User: 钧球
 * Date: 2017-05-24
 * Time: 11:21
 */
namespace App\Code\IService;

use App\Models\Member\Sell;

interface ISellService
{
    function CreateSell(Sell $sell);

    function updateSellsAccordingFilter($filterArray,$updateArray);

    function GetSellById($id);

    function GetSellsByUserId($userId);

    function GetSellsByCompanyId($companyId,$orderFiled="id",$isAsc=true);

    function updateSellInfo(Sell $model);

    function GetSellsByFilterFromCache($filterArray,$orderFiled,$isAsc);

    function UpdateSellCache();

}