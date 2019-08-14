<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
</div>
<div class="blog-content-right">
    <?$APPLICATION->IncludeComponent("bitrix:search.form", "search", Array(
        "PAGE" => "#SITE_DIR#search/index.php",	// Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
        "USE_SUGGEST" => "N",	// Показывать подсказку с поисковыми фразами
    ),
        false
    );?>
    <!--start-twitter-weight-->
    <div class="twitter-weights">
        <h3>Tweet Widget</h3>
        <div class="twitter-weight-grid">
            <h4><span> </span>John Doe</h4>
            <p>Lorem ipsum dolor sit amet, consectetur elit,labore et dolore magna aliqua. <a href="#">http://t.co/h12k</a></p>
            <i><a href="#">2 days ago</a></i>
        </div>
        <div class="twitter-weight-grid">
            <h4><span> </span>John Doe</h4>
            <p>Lorem ipsum dolor sit amet, consectetur elit,labore et dolore magna aliqua. <a href="#">http://t.co/h12k</a></p>
            <i><a href="#">2 days ago</a></i>
        </div>
        <a class="twittbtn" href="#">See all Tweets</a>
    </div>
    <!--//End-twitter-weight-->
    <!-- start-tag-weight-->
    <?$APPLICATION->IncludeComponent("bitrix:search.tags.cloud", "tags", Array(
	"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "N",	// Искать только в активных по дате документах
		"COLOR_NEW" => "3E74E6",	// Цвет более позднего тега (пример: "C0C0C0")
		"COLOR_OLD" => "C0C0C0",	// Цвет более раннего тега (пример: "FEFEFE")
		"COLOR_TYPE" => "Y",	// Плавное изменение цвета
		"FILTER_NAME" => "",	// Дополнительный фильтр
		"FONT_MAX" => "15",	// Максимальный размер шрифта (px)
		"FONT_MIN" => "10",	// Минимальный  размер шрифта (px)
		"PAGE_ELEMENTS" => "20",	// Количество тегов
		"PERIOD" => "",	// Период выборки тегов (дней)
		"PERIOD_NEW_TAGS" => "",	// Период,  в течение которого считать тег новым (дней)
		"SHOW_CHAIN" => "Y",	// Показывать цепочку навигации
		"SORT" => "CNT",	// Сортировка тегов
		"TAGS_INHERIT" => "Y",	// Сужать область поиска
		"URL_SEARCH" => "/search/index.php",	// Путь к странице поиска (от корня сайта)
		"WIDTH" => "100%",	// Ширина облака тегов (пример: "100%" или "100px", "100pt", "100in")
		"arrFILTER" => "",	// Ограничение области поиска
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
    <!---- //End-tag-weight---->
</div>
<div class="clearfix"> </div>

</div>
</div>
<!-- /Blog -->

<div class="footer">
    <div class="col-md-3 foot-1">
        <h4>Quick Links</h4>
        <ul>
            <li><a href="#">||   Lorem Ipsum passage</a></li>
            <li><a href="#">||   Finibus Bonorum et</a></li>
            <li><a href="#">||   Treatise on the theory</a></li>
        </ul>
    </div>
    <div class="col-md-3 foot-1">
        <h4>Favorite Resources</h4>
        <ul>
            <li><a href="#">||   Characteristic words</a></li>
            <li><a href="#">||   combined with a handful</a></li>
            <li><a href="#">||   which looks reasonable</a></li>
        </ul>
    </div>
    <div class="col-md-3 foot-1">
        <h4>About Us</h4>
        <ul>
            <li><a href="#">||  Even slightly believable</a></li>
            <li><a href="#">||  Hidden in the middle</a></li>
            <li><a href="#">||  Ipsum therefore always</a></li>
        </ul>
    </div>
    <div class="col-md-3 foot-1">
        <h4>Custom Menu</h4>
        <ul>
            <li><a href="#">||  Internet tend to repeat</a></li>
            <li><a href="#">||  Alteration in some form</a></li>
            <li><a href="#">||  This book is a treatise</a></li>
        </ul>
    </div>

    <div class="clearfix"> </div>
    <div class="copyright">
        <p>Copyrights © 2015 Voguish All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts</a></p>
    </div>
</div>
</div>
</body>
</html>