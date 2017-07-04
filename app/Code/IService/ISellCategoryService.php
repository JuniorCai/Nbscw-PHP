<?php
/**
 * Created by PhpStorm.
 * User: 钧球
 * Date: 2017-05-24
 * Time: 11:21
 */
namespace App\Code\IService;

use App\Models\Member\SellCategory;

interface ISellCategoryService
{
    function CreateCategory($category);

    function updateCategoryAccordingFilter($filterArray,$updateArray);

    function GetCategoryById($id);

    function GetCategoryFromCache();

    function updateCategory(SellCategory $category);

    function GetCategoryByFilter($filterArray);

    function UpdateCategoryCache();

}