jQuery(document).ready(function () {  

	$('#btn-calc').click(function(e) {
			e.preventDefault();

			console.log( $('#type-net-wrap .standard').prop('checked') );

			var res;
			var quantity = $('#net-quantity').val();

			// Площадь в метрах (если длина и ширина в мм)
			var square = $('#width-net').val() * $('#height-net').val() / 1000000;

			var standardRate = 420;
			var antikatRate = 900;
			var antidustRate = 1250;
			var maxivisionRate = 700;


			if (square < 1) {
						square = 1;
			}

			if ( $('#type-net-content option').filter(':selected').val() == 'type-net-standard' ) {
						res = square * standardRate * quantity;
			}

			if ( $('#type-net-content option').filter(':selected').val() == 'type-net-antikat' ) {
						res = square * antikatRate * quantity;
			}

			if ( $('#type-net-content option').filter(':selected').val() == 'type-net-antidust' ) {
						res = square * antidustRate * quantity;
			}

			if ( $('#type-net-content option').filter(':selected').val() == 'type-net-maxivision' ) {
						res = square * maxivisionRate * quantity;
			}





			
			


			$('#final-sum').text(res);

	});

});