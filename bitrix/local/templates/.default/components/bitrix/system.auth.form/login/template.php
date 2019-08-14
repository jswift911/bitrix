<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

CJSCore::Init();
?>
<!--ШАБЛОН ДЛЯ АВТОРИЗОВАННЫХ ПОЛЬЗОВАТЕЛЕЙ-->
<div class="login-right">

<?
if ($arResult['SHOW_ERRORS'] == 'Y' && $arResult['ERROR'])
	ShowMessage($arResult['ERROR_MESSAGE']);
?>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Профиль пользователя</h3>
        </div>
        <div class="panel-body">
            Добро пожаловать, <b><?=$arResult['USER_NAME'];?></b><br>
            Ваш профиль: [<b><a href="<?=$arResult['PROFILE_URL'];?>"><?=$arResult['USER_LOGIN'];?></a></b>]<br>
            <a href="<?echo $APPLICATION->GetCurPageParam("logout=yes", array(
                "login",
                "logout",
                "register",
                "forgot_password",
                "change_password"));?>"><?=GetMessage('AUTH_LOGOUT_BUTTON');?></a>
        </div>
    </div>

</div>
