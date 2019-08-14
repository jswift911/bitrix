<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "Профиль");
$APPLICATION->SetPageProperty("title", "Профиль");
$APPLICATION->SetPageProperty("keywords", "Профиль");
$APPLICATION->SetPageProperty("description", "Профиль");
$APPLICATION->SetTitle("Профиль");
?><?$APPLICATION->IncludeComponent("bitrix:main.profile", "profile", Array(
	"CHECK_RIGHTS" => "N",	// Проверять права доступа
		"SEND_INFO" => "N",	// Генерировать почтовое событие
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"USER_PROPERTY" => "",	// Показывать доп. свойства
		"USER_PROPERTY_NAME" => "",	// Название закладки с доп. свойствами
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>