<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("forgot");
?><?$APPLICATION->IncludeComponent("bitrix:main.auth.forgotpasswd", "forgotpasswd", Array(
	"AUTH_AUTH_URL" => "/auth/",	// Страница для авторизации
		"AUTH_REGISTER_URL" => "/auth/registration.php",	// Страница для регистрации
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>