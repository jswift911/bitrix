<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>
<?
ShowMessage($arParams["~AUTH_RESULT"]);
ShowMessage($arResult['ERROR_MESSAGE']);
?>

<!--ШАБЛОН ДЛЯ НЕ АВТОРИЗОВАННЫХ ПОЛЬЗОВАТЕЛЕЙ-->
<div class="login-right">
    <? if ($arResult["AUTH_SERVICES"]): ?>
        <div class="bx-auth-title"><? echo GetMessage("AUTH_TITLE") ?></div>
    <? endif ?>
    <div class="bx-auth-note"><?= GetMessage("AUTH_PLEASE_AUTH") ?></div>

    <form name="form_auth" method="post" target="_top" action="<?= $arResult["AUTH_URL"] ?>">

        <input type="hidden" name="AUTH_FORM" value="Y"/>
        <input type="hidden" name="TYPE" value="AUTH"/>
        <? if (strlen($arResult["BACKURL"]) > 0): ?>
            <input type="hidden" name="backurl" value="<?= $arResult["BACKURL"] ?>"/>
        <? endif ?>
        <? foreach ($arResult["POST"] as $key => $value): ?>
            <input type="hidden" name="<?= $key ?>" value="<?= $value ?>"/>
        <? endforeach ?>
        <div>
            <span><?= GetMessage("AUTH_LOGIN") ?></span>
            <input class="bx-auth-input form-control" type="text" name="USER_LOGIN" maxlength="255"
                   value="<?= $arResult["LAST_LOGIN"] ?>"/>
        </div>
        <div>
            <span><?= GetMessage("AUTH_PASSWORD") ?></span>
            <input class="bx-auth-input form-control" type="password" name="USER_PASSWORD" maxlength="255"
                   autocomplete="off"/>
            <? if ($arResult["SECURE_AUTH"]): ?>
                <span class="bx-auth-secure" id="bx_auth_secure" title="<? echo GetMessage("AUTH_SECURE_NOTE") ?>"
                      style="display:none">
					<div class="bx-auth-secure-icon"></div>
				</span>
                <noscript>
				<span class="bx-auth-secure" title="<? echo GetMessage("AUTH_NONSECURE_NOTE") ?>">
					<div class="bx-auth-secure-icon bx-auth-secure-unlock"></div>
				</span>
                </noscript>
                <script type="text/javascript">
                    document.getElementById('bx_auth_secure').style.display = 'inline-block';
                </script>
            <? endif ?>
        </div>
        <? if ($arResult["CAPTCHA_CODE"]): ?>
            <div>
                <input type="hidden" name="captcha_sid" value="<? echo $arResult["CAPTCHA_CODE"] ?>"/>
                    <img src="/bitrix/tools/captcha.php?captcha_sid=<? echo $arResult["CAPTCHA_CODE"] ?>" width="180"
                         height="40" alt="CAPTCHA"/>
            </div>
            <div>
                <span><? echo GetMessage("AUTH_CAPTCHA_PROMT") ?>:</span>
                <input class="bx-auth-input form-control" type="text" name="captcha_word" maxlength="50" value=""
                           size="15"/>
            </div>
        <? endif; ?>

        <? if ($arResult["STORE_PASSWORD"] == "Y"): ?>
            <div>
                <input type="checkbox" id="USER_REMEMBER" name="USER_REMEMBER" value="Y"/><label
                        for="USER_REMEMBER">&nbsp;<?= GetMessage("AUTH_REMEMBER_ME") ?></label>
            </div>
        <? endif ?>
        <div>
            <input type="submit" class="btn btn-primary" name="Login"
                   value="<?= GetMessage("AUTH_AUTHORIZE") ?>"/>
        </div>


        <? if ($arParams["NOT_SHOW_LINKS"] != "Y"): ?>
            <noindex>
                <p>
                    <a href="<?= $arResult["AUTH_FORGOT_PASSWORD_URL"] ?>"
                       rel="nofollow"><?= GetMessage("AUTH_FORGOT_PASSWORD_2") ?></a>
                </p>
            </noindex>
        <? endif ?>

        <? if ($arParams["NOT_SHOW_LINKS"] != "Y" && $arResult["NEW_USER_REGISTRATION"] == "Y" && $arParams["AUTHORIZE_REGISTRATION"] != "Y"): ?>
            <noindex>
                <p>
                    <a href="<?= $arResult["AUTH_REGISTER_URL"] ?>"
                       rel="nofollow"><?= GetMessage("AUTH_REGISTER") ?></a><br/>
                    <?= GetMessage("AUTH_FIRST_ONE") ?>
                </p>
            </noindex>
        <? endif ?>

    </form>
</div>

<script type="text/javascript">
    <?if (strlen($arResult["LAST_LOGIN"]) > 0):?>
    try {
        document.form_auth.USER_PASSWORD.focus();
    } catch (e) {
    }
    <?else:?>
    try {
        document.form_auth.USER_LOGIN.focus();
    } catch (e) {
    }
    <?endif?>
</script>

<? if ($arResult["AUTH_SERVICES"]): ?>
    <?
    $APPLICATION->IncludeComponent("bitrix:socserv.auth.form", "",
        array(
            "AUTH_SERVICES" => $arResult["AUTH_SERVICES"],
            "CURRENT_SERVICE" => $arResult["CURRENT_SERVICE"],
            "AUTH_URL" => $arResult["AUTH_URL"],
            "POST" => $arResult["POST"],
            "SHOW_TITLES" => $arResult["FOR_INTRANET"] ? 'N' : 'Y',
            "FOR_SPLIT" => $arResult["FOR_INTRANET"] ? 'Y' : 'N',
            "AUTH_LINE" => $arResult["FOR_INTRANET"] ? 'N' : 'Y',
        ),
        $component,
        array("HIDE_ICONS" => "Y")
    );
    ?>
<? endif ?>
