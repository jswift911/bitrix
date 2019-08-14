<?
define("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Login");
?><?$APPLICATION->IncludeComponent("bitrix:system.auth.form", "login", Array(
	"FORGOT_PASSWORD_URL" => "/auth/",	// Страница забытого пароля
		"PROFILE_URL" => "/auth/profile.php",	// Страница профиля
		"REGISTER_URL" => "/auth/registration.php",	// Страница регистрации
		"SHOW_ERRORS" => "Y",	// Показывать ошибки
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>