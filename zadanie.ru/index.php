<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link href='css/rub.css' rel='stylesheet' type='text/css'>
	<title>Тестовое задание</title>
</head>
<body>
<div id="form_ansver"></div>
<div class="container">
	<div class="jumbotron">
		<div class="container">
			<div class="row">
				<div class="jum_linkdiv"><a href="#" class="jum_link"> Главная </a>・ <a href="#" class="jum_link"> Услуги</a> ・ <a href="#" class="jum_link"> Диллерам</a></div>
			</div>
			<div class="row">
				<div class="col-lg-2"></div>
				<div class="col-lg-7 jim_title">Оптовая продажа сайтов для творчества</div>
				<div class="col-lg-2"></div>
			</div>
			<div class="row">
				<div class="col-lg-2"></div>
				<div class="col-lg-7 jim_text">Гармонический интервал синхронно диссонирует композиционный рефрен,
					таким образом, сходные законы контрастирующего развития характерны и для процессов в психике</div>
				<div class="col-lg-2"></div>
			</div>
			<div class="row">
				<div class="col-lg-2"></div>
				<div class="col-lg-7 jim_button"><a class="btn zakaz_button" href="#form_pad">ЗАКАЗАТЬ ЗВОНОК</a></div>
				<div class="col-lg-2"></div>
			</div>

		</div>
	</div>
	<div class="container">
	<div class="row">
		<div class="col-lg-2"></div>
		<div class="col-lg-7 block_title">Почему Redstar Agency?</div>
		<div class="col-lg-2"></div>
	</div>
	<div class="row">
		<div class="col-lg-6">

			<div class="item">
				<div class="item_image"> <img src="content/icons/icon1.png" align="left"></div>
				<div class="item_title"> Собственное производство в России </div>
				<div class="item_text"> Позволяет поставлять сайты в самые короткие сроки</div>
			</div>

			<div class="item">
				<div class="item_image"><img src="content/icons/icon2.png"  align="left"></div>
				<div class="item_title"> Постоянное наличие сайтов на складе </div>
				<div class="item_text"> Понравившегося сайт не придётся ждать неделями</div>
			</div>

			<div class="item">
				<div class="item_image"><img src="content/icons/icon3.png" align="left"></div>
				<div class="item_title"> Прямые поставки в любой город России </div>
				<div class="item_text"> Не важно, где вы находитесь. Мы доставим сайт в любое удобное вам место.</div>
			</div>
		</div>
		<div class="col-lg-6">

			<div class="item">
				<div class="item_image"><img src="content/icons/icon4.png" align="left"></div>
				<div class="item_title"> Проведём мастер-классы </div>
				<div class="item_text"> Это весело</div>
			</div>

			<div class="item">
				<div class="item_image"><img src="content/icons/icon5.png" align="left"></div>
				<div class="item_title"> Постоянное обновление систем обеспечения </div>
				<div class="item_text"> Всегда можно найти чем привлечь новую аудиторию</div>
			</div>

			<div class="item">
				<div class="item_image"><img src="content/icons/icon6.png"	align="left"></div>
				<div class="item_title"> Персональный менеджер </div>
				<div class="item_text"> Всегда в курсе деталей вашего проекта и ему не нужно объяснять по нескольку раз одно и то же</div>
			</div>
		</div>
	</div>
<? include('php/arCatalog.php'); ?>
	</div>
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-8 jim_button"><a class="btn see_all" href="#">ПОКАЗАТЬ ПОЛНЫЙ КАТАЛОГ</a></div>
			<div class="col-lg-2"></div></div>
	<div class="row back_email">
	<div class="text-center">
	<div class="title">Узнать условия сотрудничества</div>
	<div class="titletext">
	Мы рады любым клиентам: розничным магазинам, интернет магазинам, крупным торговым сетям.
	Для каждого клиента мы подберем оптимальные условия работы. Свяжитесь с нами, мы обязательно договоримся.
	</div>
		<div class="row ">
<div class="col-lg-2"></div>
			<div class="col-lg-7">
	<div class="form_pad">
		<div class="form_inner">
			<form  id="form" method="post">
				<div class="input_title col-lg-12">Имя<br>
				<input class="input" name="name">
				</div>
				<div class="input_title col-lg-12">Телефон<br>
				<input class="input" id="phone" name="phone">
				</div>
				<div class="input_title col-lg-12">E-mail <br>
				<input class="input" id="email" name="email">
				</div>
		        <input class="submit" type="submit"value="Отправить заявку">
			</form>
		</div>
	</div>
				</div>
			<div class="col-lg-2"></div>
</div>
	</div>
	</div>
</div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="js/jquery.maskedinput.min.js"></script>
<script src="js/inputmask.js"></script>
<script src="js/site.js"></script>
</html>
