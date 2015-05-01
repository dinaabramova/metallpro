<?php
/**
 * Created by PhpStorm.
 * User: Dina
 * Date: 29.04.2015
 * Time: 21:38
 */
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
?>
<div class="type_section">
    <? $APPLICATION->IncludeComponent(
        "bitrix:catalog.section.list",
        "section_types",
        array(
            "VIEW_MODE" => "LINE",
            "SHOW_PARENT_NAME" => "Y",
            "IBLOCK_TYPE" => "catalog",
            "IBLOCK_ID" => "4",
            "SECTION_ID" => $_REQUEST["SECTION_ID"],
            "SECTION_CODE" => "",
            "SECTION_URL" => "",
            "COUNT_ELEMENTS" => "N",
            "TOP_DEPTH" => "1",
            "SECTION_FIELDS" => array(
                0 => "",
                1 => "",
            ),
            "SECTION_USER_FIELDS" => array(
                0 => "",
                1 => "",
            ),
            "ADD_SECTIONS_CHAIN" => "Y",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "36000000",
            "CACHE_GROUPS" => "Y"
        ),
        false
    ); ?>
</div>
<div class="type_section">
    <? $APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "countries",
        array(
            "DISPLAY_DATE" => "N",
            "DISPLAY_NAME" => "N",
            "DISPLAY_PICTURE" => "N",
            "DISPLAY_PREVIEW_TEXT" => "N",
            "AJAX_MODE" => "N",
            "IBLOCK_TYPE" => "catalog",
            "IBLOCK_ID" => "3",
            "NEWS_COUNT" => "20",
            "SORT_BY1" => "SORT",
            "SORT_ORDER1" => "ASC",
            "SORT_BY2" => "ACTIVE_FROM",
            "SORT_ORDER2" => "DESC",
            "FILTER_NAME" => "",
            "FIELD_CODE" => array(
                0 => "",
                1 => "",
            ),
            "PROPERTY_CODE" => array(
                0 => "",
                1 => "",
            ),
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "PREVIEW_TRUNCATE_LEN" => "",
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "SET_TITLE" => "N",
            "SET_BROWSER_TITLE" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_STATUS_404" => "N",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "INCLUDE_SUBSECTIONS" => "Y",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "36000000",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "PAGER_TEMPLATE" => ".default",
            "DISPLAY_TOP_PAGER" => "N",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "PAGER_TITLE" => "Новости",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_ADDITIONAL" => ""
        ),
        false
    ); ?>
</div>
<div id="catalog_settings">
    <span>Настройка древа каталога</span>

    <div class='pop_up'>
        <div id="choose_sect">
            <p>Отображение сечений по:</p>
            <a href="#" data-type="country">Страна</a>
            <a href="#" data-type="section">Тип сечения</a>
        </div>
        <div id="units">
            <p>Единицы измерения</p></br>
            <div class="wrap_units" id="unit_one">
                <h5>Длина</h5>
                <a href="#" id="mm">Мм</a>
                <a href="#" id="cm">См</a>
            </div>
            <div class="wrap_units" id="unit_two">
                <h5 id="weight">Вес</h5>
                <a href="#" id="kg">Кг</a>
                <a href="#" id="tn">Тонна</a>
            </div>
        </div>
    </div>

</div>
<? $APPLICATION->IncludeComponent("bitrix:menu", "left_catalog", Array(
    "ROOT_MENU_TYPE" => "left",    // Тип меню для первого уровня
    "MAX_LEVEL" => "2",    // Уровень вложенности меню
    "CHILD_MENU_TYPE" => "left",    // Тип меню для остальных уровней
    "USE_EXT" => "Y",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
    "DELAY" => "N",    // Откладывать выполнение шаблона меню
    "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
    "MENU_CACHE_TYPE" => "N",    // Тип кеширования
    "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
    "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
    "MENU_CACHE_GET_VARS" => "",    // Значимые переменные запроса
),
    false
); ?>