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
						    <option class="standard">Стандарт</option>
						    <option class="antikat">Антикошка (Pet screen)</option>
						    <option class="antidust">Антипыль (Poll-tex)</option>
						    <option class="maxivision">Максимальный обзор (MaxiVision)</option>
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

