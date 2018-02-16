jQuery(document).ready(function () {  

	$('#btn-calc').click(function(e) {
			e.preventDefault();

			var res;
			var quantity = $('#quantity').val();

			// Площадь в метрах (если длина и ширина в мм)
			var square = $('#width-net').val() * $('#height-net').val() / 1000000;


			if (square < 1) {
						square = 1;
			}

			if ( $('#type-net-content option').filter(':selected').val() == 'type-net-standard' ) {
						res = (square * standardRate * quantity) + getProfileSum();
			}

			if ( $('#type-net-content option').filter(':selected').val() == 'type-net-antikat' ) {
						res = (square * antikatRate * quantity) + getProfileSum();
			}

			if ( $('#type-net-content option').filter(':selected').val() == 'type-net-antidust' ) {
						res = (square * antidustRate * quantity) + getProfileSum();
			}

			if ( $('#type-net-content option').filter(':selected').val() == 'type-net-maxivision' ) {
						res = (square * maxivisionRate * quantity) + getProfileSum();
			}





			
			


			$('#final-sum').text(res);

	});

});