<!doctype html>
<html>
  <head>
    <title>Калькулятор расчета стоимости москитной сетки</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link href="style-calc.css" rel="stylesheet">
  </head>

  <body> 

		<div class="container-fluid">
			<div class="row">
				<div class="col">
					<h2 class="text-center">Калькулятор расчета стоимости москитной сетки</h2>
					<form id="net-calc">

						<div id="type-wrap" class="quest-section">
							<div><b>Вид сетки (полотно)</b></div>
							<div class="custom-control custom-radio">
							  <input type="radio" id="standard-type" name="net-type" class="custom-control-input">
							  <label class="custom-control-label" for="standard-type">Стандартная</label>
							</div>
							<div class="custom-control custom-radio">
							  <input type="radio" id="anticat-type" name="net-type" class="custom-control-input">
							  <label class="custom-control-label" for="anticat-type">Антикошка</label>
							</div>
							<div class="custom-control custom-radio">
							  <input type="radio" id="antidust-type" name="net-type" class="custom-control-input">
							  <label class="custom-control-label" for="antidust-type">Антипыль</label>
							</div>
						</div>

						<div id="color-wrap" class="quest-section">
							<div><b>Цвет</b></div>
							<div class="custom-control custom-radio">
							  <input type="radio" id="white-color" name="net-color" class="custom-control-input">
							  <label class="custom-control-label" for="white-color">Белый</label>
							</div>
							<div class="custom-control custom-radio">
							  <input type="radio" id="brown-color" name="net-color" class="custom-control-input">
							  <label class="custom-control-label" for="brown-color">Коричневый</label>
							</div>
						</div>

						<div id="power-wrap" class="quest-section">
							<div><b>Усиление</b></div>
							<div class="custom-control custom-radio">
							  <input type="radio" id="power-no" name="net-power" class="custom-control-input">
							  <label class="custom-control-label" for="power-no">Нет (с поперечиной)</label>
							</div>
							<div class="custom-control custom-radio">
							  <input type="radio" id="power-yes" name="net-power" class="custom-control-input">
							  <label class="custom-control-label" for="power-yes">Есть (без поперечины)</label>
							</div>
						</div>

						<div id="fastening-wrap" class="quest-section">
							<div><b>Крепление</b></div>
							<div class="custom-control custom-radio">
							  <input type="radio" id="standard-fastening" name="net-fastening" class="custom-control-input">
							  <label class="custom-control-label" for="standard-fastening">Стандартное</label>
							</div>
							<div class="custom-control custom-radio">
							  <input type="radio" id="metal-fastening" name="net-fastening" class="custom-control-input">
							  <label class="custom-control-label" for="metal-fastening">Металл</label>
							</div>
							<div class="custom-control custom-radio">
							  <input type="radio" id="pvh-fastening" name="net-fastening" class="custom-control-input">
							  <label class="custom-control-label" for="pvh-fastening">ПВХ</label>
							</div>
							<div class="custom-control custom-radio">
							  <input type="radio" id="plung-fastening" name="net-fastening" class="custom-control-input">
							  <label class="custom-control-label" for="plung-fastening">Плунжер</label>
							</div>
							<div class="custom-control custom-radio">
							  <input type="radio" id="hook-fastening" name="net-fastening" class="custom-control-input">
							  <label class="custom-control-label" for="hook-fastening">Крючки</label>
							</div>
						</div>

						<div id="size-wrap" class="quest-section">
							<div class="form-group">
							  <label for="width-net"><b>Ширина сетки (мм)</b></label>
							  <input type="text" class="form-control" id="width-net">
							</div>
							
							<div class="form-group">
							  <label for="height-net"><b>Высота сетки (мм)</b></label>
							  <input type="text" class="form-control" id="height-net">
							</div>
						</div>

						<div id="size-wrap" class="quest-section">
							<div class="form-group">
							  <label for="net-quantity"><b>Количество</b></label>
							  <input type="number" class="form-control" id="net-quantity" name="net-quatity">
							</div>			
						</div>

					  <button id="btn-calc" type="submit" class="btn btn-primary">Рассчитать</button>

						<p id="final-sum-wrap">
							<b>Итоговая сумма:</b>&nbsp;
							<span id="final-sum">1250</span> руб.
						</p>
						


					</form>
				</div>
			</div>
		</div>



	
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<!-- My Own Js-scripts -->
	<script src="data.js"></script>	
	<script src="main.js"></script>


	</body>	
	</html>

