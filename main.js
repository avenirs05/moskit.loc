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

			if ( $('#linen-content option').filter(':selected').val() == 'linen-standard' ) {
						res = (square * rate.linen.standard * quantity) + 
						getProfileSum() +  getColorSum() + getHandleSum() + getFasteningSum() + getScrewsSum();
			}

			if ( $('#linen-content option').filter(':selected').val() == 'linen-antikat' ) {			
						res = (square * rate.linen.anticat * quantity) + 
						getProfileSum() +  getColorSum() + getHandleSum() + getFasteningSum() + getScrewsSum();
			}

			if ( $('#linen-content option').filter(':selected').val() == 'linen-antidust' ) {
						res = (square * rate.linen.antidust * quantity) + 
						getProfileSum() +  getColorSum() + getHandleSum() + getFasteningSum() + getScrewsSum();
			}

			if ( $('#linen-content option').filter(':selected').val() == 'linen-maxivision' ) {
						res = (square * rate.linen.maxivision * quantity) + 
						getProfileSum() +  getColorSum() + getHandleSum() + getFasteningSum() + getScrewsSum();
			}





			
			


			$('#final-sum').text(res);

	});

});