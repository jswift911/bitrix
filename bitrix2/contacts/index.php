<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
    <div class="contact">
        <div class="contact_info">
            <h2>get in touch</h2>
            <div class="contact-map">
                <iframe width="100%" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                        src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe>
                <br>
                <small>
                    <a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265"
                       style="color:#777777;text-align:left;font-size:13px;">View Larger Map</a></small>
            </div>
        </div>
        <div class="contact-form">
            <?$APPLICATION->IncludeComponent("bitrix:main.feedback", "contacts", Array(
	"EMAIL_TO" => "sale@bitrix2",	// E-mail, на который будет отправлено письмо
		"EVENT_MESSAGE_ID" => "",	// Почтовые шаблоны для отправки письма
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",	// Сообщение, выводимое пользователю после отправки
		"REQUIRED_FIELDS" => "",	// Обязательные поля для заполнения
		"USE_CAPTCHA" => "Y",	// Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
	),
	false
);?>
        </div>
        <div class="clearfix"></div>
    </div><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>