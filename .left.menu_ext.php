<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

global $APPLICATION;

$aMenuLinksExt = $APPLICATION->IncludeComponent("user:catalog.menu", "", array(
    "IS_SEF" => "N",
    "ID" => $_REQUEST["ID"],
    "IBLOCK_TYPE" => "catalog",
    "IBLOCK_ID" => "4",
    "VIEW_TYPE" => $_REQUEST['VIEW'] ? $_REQUEST['VIEW'] : 'section',
    "SECTION_URL" => "",
    "DEPTH_LEVEL" => "2",
    "CACHE_TYPE" => "A",
    "CACHE_TIME" => "3600"
),
    false
);

$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
