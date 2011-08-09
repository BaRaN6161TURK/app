$(document).ready(function() {
	iPadImprovements.init();
});

iPadImprovements = {
	
	handleOrientation: function() {
		if ( Orientation.getOrientation() == 'portrait' ) {
			$("meta[name=viewport]").attr( 'content', 'width=1024, initial-scale=1.09, minimum-scale=0.75, maximum-scale=2.5' );
		} else {
			$("meta[name=viewport]").attr( 'content', 'width=1024, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.5' );
		}
	},
	
	init: function() {
		
		//onload add proper viewport
		iPadImprovements.handleOrientation();
		
		//onload scroll to main content
		wikiaMainContent = $('#WikiaMainContent').offset();
		window.scrollTo( 0, wikiaMainContent.top );

		//global nav fix: first click opens nav,  second redirects to a hub
		$( "#WikiaHeader #GlobalNavigation > li > a" ).live( 'click', function( event ) {
			if ( !$( this ).next().hasClass( 'show' ) ) {
				$( this ).next().addClass( 'show' );
				event.preventDefault();
			};
		});

		//wiki nav fix: first click opens nav, second redirects to a desired page
		$('#WikiHeader nav > ul > li > a').live('click', function() {
			subnav = $( this ).next( 'ul.subnav' );
			if ( $( subnav ).length ) {
				if ( $( subnav ).css( 'display' ) != 'block' ) {
					$( subnav ).css( 'display', 'block' );
					event.preventDefault();
				};
			};
		});
	}
};
