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







