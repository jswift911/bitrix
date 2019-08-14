<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?><div class="main-head-section">
	<h3>Contacts</h3>
	<div class="contact-map">
		 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.8635507658746!2d2.3345624653458743!3d48.860812279287664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e267a32d441%3A0xb0088e1f7c07f451!2z0J_QuNGA0LDQvNC40LTQsCDQm9GD0LLRgNCw!5e0!3m2!1sru!2sru!4v1563452410887!5m2!1sru!2sru" width="600" height="151px" frameborder="0" style="border:0"></iframe>
	</div>
</div>
<div class="contact_top">
	<div class="col-md-8 contact_left">
		<h4>Contact Form</h4>
		<p>
			 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt dolor et tristique bibendum. Aenean sollicitudin vitae dolor ut posuere.
		</p>
		 <?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	"contact_form",
	Array(
		"EMAIL_TO" => "banan@mail.ru",
		"EVENT_MESSAGE_ID" => "",
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => "",
		"USE_CAPTCHA" => "N"
	)
);?>
	</div>
	<div class="col-md-4 company-right">
		<div class="company_ad">
			<h3>Contact Info</h3>
			 Lorem ipsum dolor sit amet, consectetur adipiscing elit velit justo. <address>
			<p>
				 email:<a href="#">info@display.com</a>
			</p>
			<p>
				 phone: 1.306.222.4545
			</p>
			<p>
				 222 2nd Ave South
			</p>
			<p>
				 Saskabush, SK S7M 1T6
			</p>
 </address>
		</div>
	</div>
	<div class="clearfix">
	</div>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>