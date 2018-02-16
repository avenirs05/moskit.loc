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

			res = (square * getLinenSum() )        + 
														 getProfileSum()   +  
														 getColorSum()     + 
														 getHandleSum()    + 
														 getFasteningSum() + 
														 getFetrSum()      +
														 getScrewsSum(); 
						 
			res *= quantity;

			$('#final-sum').text(res);

	});

});