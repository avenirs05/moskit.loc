	// Считает профиль рамки
	function getProfileSum () {
			if ( $('#profile-content option').filter(':selected').val() == 'profile-standard' ) {
						return rate.profile.standard;
			}
			if ( $('#profile-content option').filter(':selected').val() == 'profile-powerfull' ) {
						return rate.profile.powerfull;
			}
			if ( $('#profile-content option').filter(':selected').val() == 'profile-vertex' ) {
						return rate.profile.vertex;
			}
	}

  // Считает цвет рамки
	function getColorSum () {
			if ( $('#color-content option').filter(':selected').val() == 'color-white-not-vertex' ) {
						return rate.color.whiteNotVertex;
			}
			if ( $('#color-content option').filter(':selected').val() == 'color-brown-not-vertex' ) {
						return rate.color.brownNotVertex;
			}
			if ( $('#color-content option').filter(':selected').val() == 'color-white-vertex' ) {
						return rate.color.whiteVertex;
			}
			if ( $('#color-content option').filter(':selected').val() == 'color-brown-vertex' ) {
						return rate.color.brownVertex;
			}
			if ( $('#color-content option').filter(':selected').val() == 'color-grey-vertex' ) {
						return rate.color.greyVertex;
			}
			if ( $('#color-content option').filter(':selected').val() == 'color-gold-oak-vertex' ) {
						return rate.color.goldOakVertex;
			}
			if ( $('#color-content option').filter(':selected').val() == 'color-mahogany-vertex' ) {
						return rate.color.mahoganyVertex;
			}
			if ( $('#color-content option').filter(':selected').val() == 'color-stained-oak-vertex' ) {
						return rate.color.stainedOakVertex;
			}
			if ( $('#color-content option').filter(':selected').val() == 'color-ral' ) {
						return rate.color.ral;
			}
	}

	// Ручка
	function getHandleSum () {
			if ( $('#handle-content option').filter(':selected').val() == 'handle-pvh-simple' ) {
						return rate.handle.pvhSimple;
			}
			if ( $('#handle-content option').filter(':selected').val() == 'handle-pvh-transparent' ) {
						return rate.handle.pvhTransparent;
			}
			if ( $('#handle-content option').filter(':selected').val() == 'handle-pvh-brown' ) {
						return rate.handle.pvhBrown;
			}
			if ( $('#handle-content option').filter(':selected').val() == 'handle-metal' ) {
						return rate.handle.metal;
			}
	}


	// Крепление
	function getFasteningSum () {
			if ( $('#fastening-content option').filter(':selected').val() == 'fastening-pvh-2-pairs' ) {
						return rate.fastening.pvh2Pairs;
			}
			if ( $('#fastening-content option').filter(':selected').val() == 'fastening-metal-2-pairs' ) {
						return rate.fastening.metal2Pairs;
			}
			if ( $('#fastening-content option').filter(':selected').val() == 'fastening-plunger-4' ) {
						return rate.fastening.plunger4;
			}
			if ( $('#fastening-content option').filter(':selected').val() == 'fastening-baran-4' ) {
						return rate.fastening.baran4;
			}
			if ( $('#fastening-content option').filter(':selected').val() == 'fastening-metal-inside' ) {
						return rate.fastening.metalInside;
			}
			if ( $('#fastening-content option').filter(':selected').val() == 'fastening-vertex-9-mm' ) {
						return rate.fastening.vertex9mm;
			}
			if ( $('#fastening-content option').filter(':selected').val() == 'fastening-vertex-13-mm' ) {
						return rate.fastening.vertex13mm;
			}
	}

	// Саморезы
	function getScrewsSum () {
			if ( $('#screws-yes').prop('checked') ) {
						return rate.screws.screwsYes;
			} else return rate.screws.screwsNo;
	}







