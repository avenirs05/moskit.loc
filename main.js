jQuery(document).ready(function () {  

	$('#btn-calc').click(function(e) {
			e.preventDefault();

			var res;
			var quantity = $('#net-quantity').val();
			var square = $('#width-net').val() * $('#height-net').val() / 1000000;

			if (square < 1) {
						square = 1;
			}
			
			if ( $('#standard-type').prop('checked') ) {
						res = square * 500 * quantity;
			}

			if ( $('#anticat-type').prop('checked') ) {
						res = square * 1000 * quantity;
			}

			if ( $('#antidust-type').prop('checked') ) {
						res = square * 1500 * quantity;
			}

			if ( $('#power-yes').prop('checked') ) {
						res = res * 2;
			}

			$('#final-sum').text(res);

	});

});