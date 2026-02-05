jQuery( document ).ready( function( $ ) {
	
	// Send the postMessage
	const message = {
	  sessionOpen: true,
	};

	var currentHostname = window.location.hostname;
	var PLATFORM_DOMAIN;
	
	// Determine PLATFORM_DOMAIN based on the current hostname
	if (currentHostname === 'spines.com') {
	  PLATFORM_DOMAIN = 'dash.spines.com';
	} else if (currentHostname === 'staging.spines.com') {
	  PLATFORM_DOMAIN = 'dashstage.spines.com';
	} else if (currentHostname === 'dev.spines.com') {
	  PLATFORM_DOMAIN = 'dashdev.spines.com';
	}
	
	if (PLATFORM_DOMAIN) {
	  window.parent.postMessage(message, 'https://' + PLATFORM_DOMAIN);
	}

	var shortlisted_agents = [], shortlisted_agents_json = '';
	var ajaxurl            = window.location.origin + '/wp-admin/admin-ajax.php';
	var current_user_id    = parseInt( $( 'input[type="hidden"][id="current_user_id"]' ).val() );
	var is_user_logged_in  = ( 0 === current_user_id ) ? false : true;

	// URL parameters.
	var url_params = new URLSearchParams( window.location.search );

	// Toggle dropdown menu visibility and classes.
	$( document ).on( 'click', '.book-category-dropdown__header', function() {
		if ( $( '.book-category-dropdown__menu' ).hasClass( 'open' ) ) {
			$( '.book-category-dropdown__menu' ).removeClass( 'open' );
			$( '.book-category-dropdown__arrow' ).removeClass( 'arrow-up' );
		} else {
			$( '.book-category-dropdown__menu' ).addClass( 'open' );
			$( '.book-category-dropdown__arrow' ).addClass( 'arrow-up' );
		}
	} );

	// Handle selection of options.
	$( '.book-category-dropdown__menu' ).on( 'click', 'li', function() {
		const $selectedOption = $( this );
		const optionValue     = $selectedOption.data( 'value' );

		if ( optionValue ) {
			$( '.book-category-dropdown__toggle' ).text( $selectedOption.text() );
			$( '.book-category-dropdown__menu' ).removeClass( 'open' );
			$( '.book-category-dropdown__arrow' ).removeClass( 'arrow-up' );
			$( 'input[name="genre"]' ).val( optionValue );
		}
	} );

	/**
	 * Filter the agents based on genre.
	 */
	if ( $( '.clients-genres-listing__genre-link' ).length ) {
		$( document ).on( 'click', '.clients-genres-listing__genre-link', function() {
			var genre = $( this ).data( 'slug' );
			$( 'input[name="genre"]' ).val( genre );
			$( '.agent-filter-result__button--submit' ).click();
		} );
	}

	// Close the dropdown if user clicks outside of it.
	$( document ).on( 'click', function( event ) {
		if ( ! $( '.book-category-dropdown__header' ).is( event.target ) && ! $( '.book-category-dropdown__menu' ).is( event.target ) && ! $( '.book-category-dropdown__menu' ).has( event.target ).length ) {
			$( '.book-category-dropdown__menu' ).removeClass( 'open' );
			$( '.book-category-dropdown__arrow' ).removeClass( 'arrow-up' );
		}
	} );

	// Toggle dropdown menu visibility and classes.
	$( document ).on( 'click', '.location-custom-dropdown__header', function() {
		if ( $( '.location-custom-dropdown__menu' ).hasClass( 'open' ) ) {
			$( '.location-custom-dropdown__menu' ).removeClass( 'open' );
			$( '.location-custom-dropdown__arrow' ).removeClass( 'arrow-up' );
		} else {
			$( '.location-custom-dropdown__menu' ).addClass( 'open' );
			$( '.location-custom-dropdown__arrow' ).addClass( 'arrow-up' );
		}
	} );

	// Handle selection of options.
	$( '.location-custom-dropdown__menu' ).on( 'click', 'li', function() {
		const $selectedOption = $( this );
		const optionValue     = $selectedOption.data( 'value' );
		if ( optionValue ) {
			$( '.location-custom-dropdown__toggle' ).text( $selectedOption.text() );
			$( '.location-custom-dropdown__menu' ).removeClass( 'open' );
			$( '.location-custom-dropdown__arrow' ).removeClass( 'arrow-up' );
			$( 'input[name="location"]' ).val( optionValue );
		}
	} );

	// Close the dropdown if user clicks outside of it.
	$( document ).on( 'click', function( event ) {
		if ( ! $( '.location-custom-dropdown__header' ).is( event.target ) && ! $( '.location-custom-dropdown__menu' ).is( event.target ) && ! $( '.location-custom-dropdown__menu' ).has( event.target ).length ) {
			$( '.location-custom-dropdown__menu' ).removeClass( 'open' );
			$( '.location-custom-dropdown__arrow' ).removeClass( 'arrow-up' );
		}
	} );

	// Toggle between list view and grid view
	var $itemBlocks = $('.agent-filter-result__item-blocks');
	var $buttonGroup = $('.agent-filter-result__button-group');

	$( document ).on( 'click', '.agent-filter-result__list-view', function( e ) {
		e.preventDefault();
		$itemBlocks.removeClass( 'gridView' ).addClass( 'listView' );
		$buttonGroup.hide(); // Hide button group on list view click.

		// Toggle active class.
		$( '.agent-filter-result__list-view' ).addClass( 'active' );
		$( '.agent-filter-result__grid-view' ).removeClass( 'active' );
		localStorage.setItem( 'agents_layout', 'list' ); // Set the view type to the local storage.
		activate_shortlisted_agents(); // Activate all the shortlisted agents.
		submit_shortlisted_agents( '' );
		
	} );

	$( document ).on( 'click', '.agent-filter-result__grid-view', function( e ) {
		e.preventDefault();
		$itemBlocks.removeClass( 'listView' ).addClass( 'gridView' );
		$buttonGroup.show(); // Show button group on grid view click.

		// Toggle active class.
		$( '.agent-filter-result__grid-view' ).addClass( 'active' );
		$( '.agent-filter-result__list-view' ).removeClass( 'active' );
		localStorage.setItem( 'agents_layout', 'grid' ); // Set the view type to the local storage.
		activate_shortlisted_agents(); // Activate all the shortlisted agents.
		submit_shortlisted_agents( '' );
	} );

	// Information Icon Click base hide/show dropdown
	var $moreInfoLinks = $('.agent-filter-result__more-info-link');
	var $buttonGroups = $('.agent-filter-result__button-group');

	$moreInfoLinks.each(function(index) {
		$(this).on('click', function(event) {
			event.preventDefault();

			var $currentGroup = $buttonGroups.eq(index);

			if ($currentGroup.css('display') === 'inline-flex') {
				$currentGroup.hide();
			} else {
				// Hide all other button groups
				$buttonGroups.each(function(idx) {
					if (idx !== index) {
						$(this).hide();
					}
				});
				// Show the clicked button group
				$currentGroup.css('display', 'inline-flex');
			}
		});
	});

	// Close button groups when clicking outside
	$(document).on('click', function(event) {
		var $itemBlocks = $('.agent-filter-result__item-blocks');
		
		if ($itemBlocks.hasClass('listView')) {
			if (!isDescendant($buttonGroups, event.target) && !isDescendant($moreInfoLinks, event.target)) {
				$buttonGroups.each(function() {
					$(this).hide();
				});
			}
		} else if ($itemBlocks.hasClass('gridView')) {
			if (!isDescendant($buttonGroups, event.target) && !isDescendant($moreInfoLinks, event.target)) {
				$buttonGroups.each(function() {
					$(this).css('display', 'flex');
				});
			}
		}
	});

	function isDescendant($elements, target) {
		var isDescendant = false;
		$elements.each(function() {
			if ($(this).has(target).length > 0) {
				isDescendant = true;
				return false; // break out of the each loop
			}
		});
		return isDescendant;
	}

	// Mark the agents favourite.
	if ( $( '.agent-filter-result__favourite-icon' ).length ) {
		$( document ).on( 'click', '.agent-filter-result__favourite-icon, .agent-filter-result__favourite-link', function() {
			var this_fav_link = $( this );
			var agent_id      = this_fav_link.parents( '.agent-filter-result__item-blocks-column' ).data( 'agentid' );

			// Return, if the agent ID is missing.
			if ( -1 === is_valid_number( agent_id ) ) {
				return false;
			}

			// Uncheck the shortlisted agents when not on the shortlisted page.
			if ( null === url_params.get( 'shortlisted' ) ) {
				// Check if the agent is already shortlisted.
				if ( this_fav_link.hasClass( 'active' ) ) {
					shortlisted_agents = jQuery.grep( shortlisted_agents, function( value ) {
						return value !== agent_id;
					} );
					shortlisted_agents.push( agent_id );
					var agent_shortlisted = parseInt(this_fav_link.find('.value').text(), 10);
					// this_fav_link.find('.value').text(agent_shortlisted -= 1);
					// this_fav_link.removeClass( 'active' ); // Deactivate this agent.
				} else {
					shortlisted_agents.push( agent_id );
					var agent_shortlisted = parseInt(this_fav_link.find('.value').text(), 10);
					// this_fav_link.find('.value').text(agent_shortlisted += 1);
					// this_fav_link.addClass( 'active' ); // Activate this agent.
				}


				// Nirav do ajax here.
				if ( ! is_user_logged_in ) {
					showModal( $( '#shortlist-modal-login' ) );
				} else {
					submit_shortlisted_agents( agent_id );
				}
				
				// return false;
				// // Save the shortlisted agents in local storage.
				// shortlisted_agents_json = JSON.stringify( shortlisted_agents );
				// localStorage.setItem( 'shortlisted_agents', shortlisted_agents_json );
				// $( '.short-list-area .icon-heading p span.count' ).text( shortlisted_agents.length ) // Update the count of shortlisted agents.

				// // Open the shortlisted agents popup at the bottom.
				// if ( 0 < shortlisted_agents.length && $.isArray( shortlisted_agents ) ) {
				// 	$( '.short-list-area' ).addClass( 'show' );
				// } else {
				// 	$( '.short-list-area' ).removeClass( 'show' ); // Hide the shortlisted agents popup.
				//}
			} else {
				var confirm_unshortlist_agent = confirm( 'Are you sure to deshortlist this agent? Click OK to confirm.' );

				if ( true === confirm_unshortlist_agent ) {
					deshortlist_agent( agent_id, this_fav_link );
				}
			}
		} );
	}

	// Remove all the shortlisted agents.
	if ( $( '.remove-shortlist-item' ).length ) {
		$( document ).on( 'click', '.remove-shortlist-item', function() {
			var remove_all_shortlisted_agents_cnf = confirm( 'Are you sure to remove all the shortlisted agents? Click OK to proceed.' );

			// If canceled, then return;
			if ( false === remove_all_shortlisted_agents_cnf ) {
				return false;
			}

			localStorage.removeItem( 'shortlisted_agents' ); // Empty the local storage.
			$( '.short-list-area' ).removeClass( 'show' ); // Hide the shortlisted agents popup.
			shortlisted_agents = []; // Remove all the shortlisted agents from the global array.

			// Remove the active class from all the activated agents.
			$( '.agent-filter-result__item-blocks-column' ).each( function() {

				var agent_shortlisted = parseInt($( this ).find( '.agent-filter-result__favourite-link').find('.value').text(), 10);
				if( true === jQuery('.agent-filter-result__grid-view').hasClass('active') ) {
					agent_shortlisted = parseInt($( this ).find('.agent-filter-result__favourite-icon').find('.value').text(), 10);
				} 

				$( this ).find( '.agent-filter-result__favourite-icon' ).find('.value').text(agent_shortlisted -= 1);
				$( this ).find( '.agent-filter-result__favourite-link' ).find('.value').text(agent_shortlisted -= 1);
				$( this ).find( '.agent-filter-result__favourite-icon' ).removeClass( 'active' );
				$( this ).find( '.agent-filter-result__favourite-link' ).removeClass( 'active' );
			} );
		} );
	}

	// Event listener for clicking on save shortlist button
	$( document ).on( 'click', '.save-shortlisted-agents a', function() {

		// If the user is not logged in, the user ID is 0.
		if ( ! is_user_logged_in ) {
			showModal( $( '#shortlist-modal-login' ) );
		} else {
			showModal( $( '#shortlist-modal' ) );
			jQuery('.shortlist-modal__submit-button').trigger('click');
		}
	} );

	// Event listener for clicking on popup overlay
	// $( document ).on('mouseup touchstart', function(event) {
	// 	var container = $(".shortlist-modal");
	// 	var dialog    = $(".shortlist-modal__dialog");

	// 	console.log(event.target);
	// 	closeModal( $( '#shortlist-modal-login' ) );

	// 	if ( container.is( event.target ) && container.has( event.target ).length === 0 || dialog.is( event.target ) && dialog.has( event.target ).length === 0 ) {
	// 		// closeModal( $( '#shortlist-modal' ) );
	// 		closeModal( $( '#shortlist-modal-login' ) );
	// 	}
	// } );

	// Event listener for clicking on close button inside modal.
	$( document ).on( 'click', '.shortlist-modal__close-button', function() {
		if ( $( '#shortlist-modal-login' ).is( ':visible' ) ) {
			closeModal( $( '#shortlist-modal-login' ) );
		}

		if ( $( '#shortlist-modal' ).is( ':visible' ) ) {
			closeModal( $( '#shortlist-modal' ) );
		}

		if ( $( '#shortlist-modal-email' ).is( ':visible' ) ) {
			closeModal( $( '#shortlist-modal-email' ) );
		}
		unblock_element( $( '.agent-filter-result__item-blocks' ) );
	} );

	/**
	 * Validate the input email.
	 */
	$( document ).on( 'input', '#shortlist-email', function() {
		if ( validateEmail( $( '#shortlist-email' ).val().trim() ) ) {
			$( '.shortlist-modal__submit-button' ).removeAttr( 'disabled' ).removeClass( 'shortlist-modal__submit-button--disabled' );
		} else {
			$( '.shortlist-modal__submit-button' ).attr( 'disabled', 'disabled' ).addClass( 'shortlist-modal__submit-button--disabled' );
		}
	} );

	// Submit the shortlisted agents.
	$( document ).on( 'click', '.shortlist-modal__submit-button', function() {
		submit_shortlisted_agents(); // Fire the AJAX to submit the shortlisted agents request.
	} );

	// Show shortlisted agents.
	if ( $( 'input[name="shortlisted"]' ).length ) {
		$( document ).on( 'click', 'input[name="shortlisted"]', function() {
			var this_input = $( this );
			block_element( $( '.agent-filter-result__item-blocks' ) ); // Block the list.

			// If the user is not logged in, the user ID is 0.
			if ( ! is_user_logged_in ) {
				showModal( $( '#shortlist-modal-login' ) );
				return false;
			} else {
				var reload_uri = '';
				if ( this_input.is( ':checked' ) ) {
					reload_uri = window.location.origin + window.location.pathname + '?shortlisted=1';
				} else {
					reload_uri = window.location.origin + window.location.pathname;
					
				}
				window.location.href = reload_uri;
			}
		} );
	}

	// Activate all the shortlisted agents.
	if ( null === url_params.get( 'shortlisted' ) ) {
		activate_shortlisted_agents();
	}

	// Set the agents layout active.
	set_agents_layout_active();

	/**
	 * Deshortlist agent from users page.
	 *
	 * @param {number} agent_id Agent post ID. 
	 */
	function deshortlist_agent( agent_id, current_agent_fav_link ) {
		// Fire the ajax to save the shortlisted agents.
		$.ajax( {
			dataType: 'JSON',
			url: ajaxurl,
			type: 'POST',
			data: {
				action: 'deshortlisted_agent',
				agent_id: agent_id,
				user_id: current_user_id,
			},
			beforeSend: function() {
				block_element( $( '.agent-filter-result__item-blocks' ) );
			},
			success: function( response ) {
				if ( 1 === is_valid_string( response.data.code ) && 'agent-deshortlisted' === response.data.code ) {
					current_agent_fav_link.parents( '.agent-filter-result__item-blocks-column' ).remove();
					location.reload();
				}
			},
			complete: function() {
				// unblock_element( $( '.agent-filter-result__item-blocks' ) );
			}
		} );
	}

	/**
	 * Block element.
	 *
	 * @param {string} element
	 */
	function block_element( element ) {
		element.addClass( 'non-clickable' );
	}

	/**
	 * Unblock element.
	 *
	 * @param {string} element
	 */
	function unblock_element( element ) {
		element.removeClass( 'non-clickable' );
	}

	/**
	 * Set the agents layout active.
	 */
	function set_agents_layout_active() {
		var agents_layout = localStorage.getItem( 'agents_layout' );

		// If the agents layout is not set.
		if ( null === agents_layout ) {
			$( '.agent-filter-result__grid-view' ).click();
		} else {
			if ( 'list' === agents_layout ) {
				$( '.agent-filter-result__list-view' ).click();
			} else if ( 'grid' === agents_layout ) {
				$( '.agent-filter-result__grid-view' ).click();
			}
		}
	}

	/**
	 * Submit shortlisted agents.
	 */
	function submit_shortlisted_agents( agent_id ) {
		// Fire the ajax to save the shortlisted agents.
		$.ajax( {
			dataType: 'JSON',
			url: ajaxurl,
			type: 'POST',
			data: {
				action: 'submit_shortlisted_agents',
				shortlisted_agents: shortlisted_agents,
				email: $( '#shortlist-email' ).val(),
				user_id: current_user_id,
				agent_id: agent_id,
			},
			beforeSend: function() {
				block_element( $( '.agent-filter-result__item-blocks' ) );
				// $( '.shortlist-modal__submit-button' ).text( 'Saving... Please wait...' ).attr( 'disabled', 'disabled' ).addClass( 'shortlist-modal__submit-button--disabled' );
			},
			success: function( response ) {
				if ( 1 === is_valid_string( response.data.code ) && 'shortlisted-agents-submitted' === response.data.code ) {
					// closeModal( $( '#shortlist-modal' ) ); // Close the current modal.
					// showModal( $( '#shortlist-modal-email' ) ); // Show the success modal.
					localStorage.removeItem( 'shortlisted_agents' ); // Empty the local storage.
					$( '.short-list-area' ).removeClass( 'show' ); // Hide the shortlisted agents popup.
					shortlisted_agents = []; // Remove all the shortlisted agents from the global array.
					$( '.agent-filter-result__item-blocks-column' ).each( function() { // Remove the active class from all the activated agents.
						// $( this ).find( '.agent-filter-result__favourite-icon' ).removeClass( 'active' );
						// $( this ).find( '.agent-filter-result__favourite-link' ).removeClass( 'active' );
						
						var agent_shortlisted = parseInt($( this ).find( '.agent-filter-result__favourite-link').find('.value').text(), 10);
						if( true === jQuery('.agent-filter-result__grid-view').hasClass('active') ) {
							agent_shortlisted = parseInt($( this ).find('.agent-filter-result__favourite-icon').find('.value').text(), 10);
						}
						if ( $( this ).find( '.agent-filter-result__favourite-icon.agent_id_' + agent_id ).hasClass( 'active' ) ) {
							console.log( "yes", agent_id );
							$( this ).find( '.agent-filter-result__favourite-icon.agent_id_' + agent_id ).removeClass( 'active' );
							$( this ).find( '.agent-filter-result__favourite-link.agent_id_' + agent_id ).removeClass( 'active' );
						} else {
							console.log( "no", agent_id );
							$( this ).find( '.agent-filter-result__favourite-icon.agent_id_' + agent_id ).addClass( 'active' );
							$( this ).find( '.agent-filter-result__favourite-link.agent_id_' + agent_id ).addClass( 'active' );
						}
						if( 1 === response.data.flag ) {
							$( this ).find( '.agent-filter-result__favourite-icon' ).find('.value.agent_id_' + agent_id ).text(response.data.shortlisted_agents);
							$( this ).find( '.agent-filter-result__favourite-link' ).find('.value.agent_id_' + agent_id ).text(response.data.shortlisted_agents);
							// if ( $( '.agent-filter-result__item-blocks' ).hasClass( 'gridView' ) ) {
							// 	$( this ).find( '.agent-filter-result__favourite-icon' ).find('.value.agent_id_' + agent_id ).text(agent_shortlisted -= 1);
							// } else {
							// 	$( this ).find( '.agent-filter-result__favourite-link' ).find('.value.agent_id_' + agent_id ).text(agent_shortlisted -= 1);
							// }
							
							
						} else {
							$( this ).find( '.agent-filter-result__favourite-icon' ).find('.value.agent_id_' + agent_id ).text(response.data.shortlisted_agents);
							$( this ).find( '.agent-filter-result__favourite-link' ).find('.value.agent_id_' + agent_id ).text(response.data.shortlisted_agents);
							// if ( $( '.agent-filter-result__item-blocks' ).hasClass( 'gridView' ) ) {
							// 	$( this ).find( '.agent-filter-result__favourite-icon' ).find('.value.agent_id_' + agent_id ).text(agent_shortlisted += 1);
							// } else {
							// 	$( this ).find( '.agent-filter-result__favourite-link' ).find('.value.agent_id_' + agent_id ).text(agent_shortlisted += 1);
							// }
						}
						

						// $( this ).find( '.agent-filter-result__favourite-icon' ).find('.value').text(agent_shortlisted -= 1);
						// $( this ).find( '.agent-filter-result__favourite-link' ).find('.value').text(agent_shortlisted -= 1);
					} );

					// Close the success  odal after 5 seconds.
					// setTimeout( function() {
					// 	// closeModal( $( '#shortlist-modal-email' ) ); // Close the success modal.
					// 	location.reload();
					// }, 5000 );
				}
			},
			complete: function() {
				unblock_element( $( '.agent-filter-result__item-blocks' ) );
				// $( '.shortlist-modal__submit-button' ).text( 'Save' ).removeAttr( 'disabled' ).removeClass( 'shortlist-modal__submit-button--disabled' );
			}
		} );
	}

	// Function to show modal and add class to body
	function showModal($modal) {
		$modal.show();
		$( 'body' ).addClass('modal-open');
		addBackdrop();
	}

	// Function to close modal and remove class from body
	function closeModal($modal) {
		$modal.hide();
		$( 'body' ).removeClass('modal-open');
		removeBackdrop();
	}

	// Function to add modal backdrop
	function addBackdrop() {
		var $backdrop = $( '<div class="modal-backdrop"></div>' );
		$( '.shortlist-modal-login, .shortlist-modal, .shortlist-modal-email' ).append( $backdrop );
	}

	// Function to remove modal backdrop
	function removeBackdrop() {
		$('.modal-backdrop').remove();
	}

	/**
	 * Validate the email.
	 *
	 * @param {*} email 
	 * @returns 
	 */
	function validateEmail( email ) {
		var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

		return emailPattern.test( email );
	};

	/**
	 * Activate all the shortlisted agents.
	 */
	function activate_shortlisted_agents() {
		var shortlisted_agents_json_locally_stored = localStorage.getItem( 'shortlisted_agents' );

		if ( null !== shortlisted_agents_json_locally_stored && 0 < shortlisted_agents_json_locally_stored.length ) {
			var shortlisted_agents_arr_locally_stored = $.parseJSON( shortlisted_agents_json_locally_stored );
			shortlisted_agents                        = shortlisted_agents_arr_locally_stored;

			if ( true === $.isArray( shortlisted_agents_arr_locally_stored ) && 0 < shortlisted_agents_arr_locally_stored.length ) {
				$( '.agent-filter-result__item-blocks-column' ).each( function() {
					var this_agent    = $( this );
					var this_agent_id = this_agent.data( 'agentid' );

					// If the agent ID happens to be locally stored, activate it.
					if ( -1 !== $.inArray( this_agent_id, shortlisted_agents_arr_locally_stored ) ) {
						this_agent.find( '.agent-filter-result__favourite-icon' ).addClass( 'active' );
						this_agent.find( '.agent-filter-result__favourite-link' ).addClass( 'active' );
						// var agent_shortlisted = parseInt(this_agent.find( '.agent-filter-result__favourite-link').find('.value').text(), 10);
						// if( true === jQuery('.agent-filter-result__grid-view').hasClass('active') ) {
						// 	agent_shortlisted = parseInt(this_agent.find('.agent-filter-result__favourite-icon').find('.value').text(), 10);
						// } 
						
						// this_agent.find( '.agent-filter-result__favourite-icon' ).find('.value').text(agent_shortlisted += 1);
						// this_agent.find( '.agent-filter-result__favourite-link' ).find('.value').text(agent_shortlisted += 1);
					}
				} );

				// Open the shortlisted agents popup at the bottom.
				$( '.short-list-area .icon-heading p span.count' ).text( shortlisted_agents_arr_locally_stored.length ) // Update the count of shortlisted agents.
				$( '.short-list-area' ).addClass( 'show' );
				// submit_shortlisted_agents( this_agent_id );
			}
		}
	}

	/**
	 * Check if a number is valid.
	 * 
	 * @param {number} data 
	 */
	function is_valid_number( data ) {

		return ( '' === data || undefined === data || isNaN( data ) || 0 === data ) ? -1 :1;
	}

	/**
	 * Check if a string is valid.
	 *
	 * @param {string} $data
	 */
	function is_valid_string( data ) {

		return ( '' === data || undefined === data || ! isNaN( data ) || 0 === data ) ? -1 : 1;
	}
} );
