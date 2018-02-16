	// Считает профиль рамки
	function getProfileSum () {
			if ( $('#profile-content option').filter(':selected').val() == 'profile-standard' ) {
						return profileStandardRate;
			}
			if ( $('#profile-content option').filter(':selected').val() == 'profile-powerfull' ) {
						return profilePowerfullRate;
			}
			if ( $('#profile-content option').filter(':selected').val() == 'profile-vertex' ) {
						return profileVertexRate;
			}
	}