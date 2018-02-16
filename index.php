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
						
						<div id="type-net-wrap" class="form-group quest-section">
						  <label>Вид сетки (полотно)</label>
						  <select name="type-net" class="form-control" id="type-net-content">
						    <option value="type-net-standard" class="standard">Стандарт</option>
						    <option value="type-net-antikat" class="antikat">Антикошка (Pet screen)</option>
						    <option value="type-net-antidust" class="antidust">Антипыль (Poll-tex)</option>
						    <option value="type-net-maxivision" class="maxivision">Максимальный обзор (MaxiVision)</option>
						  </select>
						</div>

						<div id="profile-frame" class="form-group quest-section">
						  <label>Профиль рамки</label>
						  <select name="profile-frame" class="form-control" id="profile-frame-content">
						    <option class="standard">Стандарт</option>
						    <option class="powerfull">Усиленая (без импоста)</option>
						    <option class="vertex">VERTEX</option>						    
						  </select>
						</div>

						<div id="color-frame" class="form-group quest-section">
						  <label>Цвет рамки (профиля)</label>
						  <select name="color-frame" class="form-control" id="color-frame-content">
						    <option class="white-not-vertex">Белый</option>
						    <option class="brown-not-vertex">Коричневый</option>
						    <option class="white-vertex">Белый (VERTEX)</option>		
						    <option class="brown-vertex">Коричневый (VERTEX)</option>
						    <option class="grey-vertex">Серый (VERTEX)</option>						    
						    <option class="gold-oak-vertex">Золотой дуб (VERTEX)</option>			
						    <option class="mahogany-vertex">Махагон (VERTEX)</option>
						    <option class="stained-oak-vertex">Мореный дуб (VERTEX)</option>
						    <option class="ral">RAL (аэрозольная краска)</option>							    
						  </select>
						</div>

						<div id="handle" class="form-group quest-section">
						  <label>Ручка</label>
						  <select name="handle" class="form-control" id="handle-content">
						    <option class="pvh-simple">ПВХ</option>
						    <option class="pvh-transparent">ПВХ прозрачная</option>						    
						    <option class="pvh-brown">ПВХ коричневая</option>		
						    <option class="metal">Металл</option>							    
						  </select>
						</div>

						<div id="fastening" class="form-group quest-section">
						  <label>Крепление</label>
						  <select name="fastening" class="form-control" id="fastening-content">
						    <option class="pvh-2-pairs">ПВХ (2 пары)</option>
						    <option class="metal-2-pairs">Металл (2 пары)</option>						    
						    <option class="plunger-4">Плунжер (4 шт)</option>		
						    <option class="baran-4">Барашек (4 шт)</option>
						    <option class="metal-inside">Металл (внутреннее)</option>		
						    <option class="vertex-9-mm">VERTEX (наплав 9 мм)</option>		
						    <option class="vertex-13-mm">VERTEX (наплав 13 мм)</option>								    
						  </select>
						</div>

						<div id="fetr" class="quest-section">
							<div><b>Фетр</b></div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="fetr" id="fetr-yes" value="fetr-yes">
							  <label class="form-check-label" for="fetr-yes">Нужен</label>
							</div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="fetr" id="fetr-no" value="fetr-no">
							  <label class="form-check-label" for="fetr-no">Не нужен</label>
							</div>
						</div>

						<div id="screws" class="quest-section">
							<div><b>Саморезы</b></div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="screws" id="screws-yes" value="screws-yes">
							  <label class="form-check-label" for="fetr-yes">Нужны</label>
							</div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="screws" id="screws-no" value="screws-no">
							  <label class="form-check-label" for="fetr-no">Не нужны</label>
							</div>
						</div>

						<div id="size-wrap" class="quest-section">
						 <div class="form-group">
						   <label for="width-net"><b>Ширина сетки (мм)</b></label>
						   <input type="text" class="form-control" id="width-net" value="1">
						 </div>

						 <div class="form-group">
						   <label for="height-net"><b>Высота сетки (мм)</b></label>
						   <input type="text" class="form-control" id="height-net" value="1">
						 </div>
						</div>

						<div id="size-wrap" class="quest-section">
							<div class="form-group">
							  <label for="net-quantity"><b>Количество</b></label>
							  <input type="number" class="form-control" id="net-quantity" name="net-quatity" value="1">
							</div>			
						</div>

					  <button id="btn-calc" type="submit" class="btn btn-primary">Рассчитать</button>

						<p id="final-sum-wrap">
							<b>Итоговая сумма:</b>&nbsp;
							<span id="final-sum">0</span> руб.
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

