<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Корзина");
?><?$APPLICATION->IncludeComponent("bitrix:sale.basket.basket", "cart", Array(
	"ACTION_VARIABLE" => "basketAction",	// Название переменной действия
		"ADDITIONAL_PICT_PROP_4" => "-",	// Дополнительная картинка [Каталог товаров]
		"ADDITIONAL_PICT_PROP_5" => "-",	// Дополнительная картинка [Торговое предложение]
		"AUTO_CALCULATION" => "Y",	// Автопересчет корзины
		"BASKET_IMAGES_SCALING" => "adaptive",	// Режим отображения изображений товаров
		"COLUMNS_LIST_EXT" => array(	// Выводимые колонки
			0 => "PREVIEW_PICTURE",
			1 => "DISCOUNT",
			2 => "DELETE",
			3 => "DELAY",
			4 => "TYPE",
			5 => "SUM",
		),
		"COLUMNS_LIST_MOBILE" => array(	// Колонки, отображаемые на мобильных устройствах
			0 => "PREVIEW_PICTURE",
			1 => "DISCOUNT",
			2 => "DELETE",
			3 => "DELAY",
			4 => "TYPE",
			5 => "SUM",
		),
		"COMPATIBLE_MODE" => "Y",	// Включить режим совместимости
		"CORRECT_RATIO" => "Y",	// Автоматически рассчитывать количество товара кратное коэффициенту
		"DEFERRED_REFRESH" => "N",	// Использовать механизм отложенной актуализации данных товаров с провайдером
		"DISCOUNT_PERCENT_POSITION" => "bottom-right",	// Расположение процента скидки
		"DISPLAY_MODE" => "extended",	// Режим отображения корзины
		"EMPTY_BASKET_HINT_PATH" => "/",	// Путь к странице для продолжения покупок
		"GIFTS_BLOCK_TITLE" => "Выберите один из подарков",	// Текст заголовка "Подарки"
		"GIFTS_CONVERT_CURRENCY" => "N",	// Показывать цены в одной валюте
		"GIFTS_HIDE_BLOCK_TITLE" => "N",	// Скрыть заголовок "Подарки"
		"GIFTS_HIDE_NOT_AVAILABLE" => "N",	// Не отображать товары, которых нет на складах
		"GIFTS_MESS_BTN_BUY" => "Выбрать",	// Текст кнопки "Выбрать"
		"GIFTS_MESS_BTN_DETAIL" => "Подробнее",	// Текст кнопки "Подробнее"
		"GIFTS_PAGE_ELEMENT_COUNT" => "4",	// Количество элементов в строке
		"GIFTS_PLACE" => "BOTTOM",	// Вывод блока "Подарки"
		"GIFTS_PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
		"GIFTS_PRODUCT_QUANTITY_VARIABLE" => "quantity",	// Название переменной, в которой передается количество товара
		"GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",	// Показывать процент скидки
		"GIFTS_SHOW_OLD_PRICE" => "N",	// Показывать старую цену
		"GIFTS_TEXT_LABEL_GIFT" => "Подарок",	// Текст метки "Подарка"
		"HIDE_COUPON" => "N",	// Спрятать поле ввода купона
		"LABEL_PROP" => "",	// Свойства меток товара
		"OFFERS_PROPS" => "",	// Свойства, влияющие на пересчет корзины
		"PATH_TO_ORDER" => "/personal/order/make/",	// Страница оформления заказа
		"PRICE_DISPLAY_MODE" => "Y",	// Отображать цену в отдельной колонке
		"PRICE_VAT_SHOW_VALUE" => "N",	// Отображать значение НДС
		"PRODUCT_BLOCKS_ORDER" => "props,sku,columns",	// Порядок отображения блоков товара
		"QUANTITY_FLOAT" => "Y",	// Использовать дробное значение количества
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"SHOW_DISCOUNT_PERCENT" => "Y",	// Показывать процент скидки рядом с изображением
		"SHOW_FILTER" => "Y",	// Отображать фильтр товаров
		"SHOW_RESTORE" => "Y",	// Разрешить восстановление удалённых товаров
		"TEMPLATE_THEME" => "blue",	// Цветовая тема
		"TOTAL_BLOCK_DISPLAY" => array(	// Отображение блока с общей информацией по корзине
			0 => "top",
		),
		"USE_DYNAMIC_SCROLL" => "Y",	// Использовать динамическую подгрузку товаров
		"USE_ENHANCED_ECOMMERCE" => "N",	// Отправлять данные электронной торговли в Google и Яндекс
		"USE_GIFTS" => "Y",	// Показывать блок "Подарки"
		"USE_PREPAYMENT" => "N",	// Использовать предавторизацию для оформления заказа (PayPal Express Checkout)
		"USE_PRICE_ANIMATION" => "Y",	// Использовать анимацию цен
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>