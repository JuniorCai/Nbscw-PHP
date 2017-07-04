<?php
/**
 * Created by PhpStorm.
 * User: 钧球
 * Date: 2017-05-24
 * Time: 11:23
 */
namespace App\Code\Service;


use App\Code\IService\ISellCategoryService;
use App\Code\Repository\SellCategoryRepository;

use App\Models\Member\SellCategory;

class SellCategoryService implements ISellCategoryService
{

    protected $Repository;
    function __construct(SellCategoryRepository $repository)
    {
        $this->Repository = $repository;
    }


    function CreateCategory($category)
    {
        return $this->Repository->CreateCategory($category);
    }

    function updateCategoryAccordingFilter($filterArray, $updateArray)
    {
        return $this->Repository->updateCategoryAccordingFilter($filterArray,$updateArray);
    }

    function GetCategoryById($id)
    {
        return $this->Repository->GetCategoryById($id);
    }

    function GetCategoryFromCache()
    {
        return $this->Repository->GetCategoryFromCache();
    }

    function updateCategory(SellCategory $category)
    {
        return $this->Repository->updateCategory($category);
    }

    function GetCategoryByFilter($filterArray)
    {
        return $this->Repository->GetCategoryByFilter($filterArray);
    }

    function UpdateCategoryCache()
    {
        return $this->Repository->UpdateCategoryCache();
    }
}