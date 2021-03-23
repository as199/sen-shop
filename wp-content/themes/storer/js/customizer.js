/* Customizer JS Upsale*/
( function( api ) {

    api.sectionConstructor['upsell'] = api.Section.extend( {

        // No events for this type of section.
        attachEvents: function () {},

        // Always make the section active.
        isContextuallyActive: function () {
            return true;
        }
    } );

} )( wp.customize );

jQuery(document).ready(function($){

    wp.customize.section( 'sidebar-widgets-front-page-fullwidth-sidebar' ).panel( 'homepage_option_panel' );
    wp.customize.section( 'sidebar-widgets-front-page-fullwidth-sidebar' ).priority( storer_customizer.key_sidebar );

    /* Home page redirect */
    wp.customize.panel( 'homepage_option_panel', function( section ){
        section.expanded.bind( function( isExpanded ) {
            if( isExpanded ){
                wp.customize.previewer.previewUrl.set( storer_customizer.home_url );
            }
        });
    });

    // Tygoraphy
	$('#_customize-input-storer_heading_font').change(function(){

		var currentfont = this.value;
        console.log('helllo');
		var data = {
            'action': 'storer_customizer_font_weight',
            'currentfont': currentfont,
            '_wpnonce': storer_customizer.ajax_nonce,
        };
 
        $.post( ajaxurl, data, function(response) {

            if( response ){

                $('#_customize-input-storer_heading_weight').empty();
                $('#_customize-input-storer_heading_weight').html(response);

            }

        });

	});	

	// Archive Layout Image Control
    $('.radio-image-buttenset').each(function(){
        
        id = $(this).attr('id');
        $( '[id='+id+']' ).buttonset();
    });

    function storer_reorder_sections( container ){

        var sections = [];
        var sectionName;
        $( container+' .control-section' ).each(function(){

            sectionName = $(this).attr('aria-owns');
            sectionName = sectionName.replace( "sub-accordion-section-", "");
            sections.push(sectionName);
        });
        var sections = sections.toString();

        var data = {
            'action': 'storer_reorder_home_section',
            'sections': sections,
            '_wpnonce': storer_customizer.ajax_nonce,
        };

        $.post( ajaxurl, data, function(response) {
            wp.customize.previewer.refresh();

        });

    }


    function storer_reorder_sections( container ){

        var sections = [];
        var sectionName;
        $( container+' .control-section' ).each(function(){

            sectionName = $(this).attr('aria-owns');
            sectionName = sectionName.replace( "sub-accordion-section-", "");
            sections.push(sectionName);
        });
        var sections = sections.toString();

        var data = {
            'action': 'storer_reorder_home_section',
            'sections': sections,
            '_wpnonce': storer_customizer.ajax_nonce,
        };

        $.post( ajaxurl, data, function(response) {
            wp.customize.previewer.refresh();

        });

    }

    $('#sub-accordion-panel-homepage_option_panel').sortable({
      axis: 'y',
      update: function( event, ui ) {

        storer_reorder_sections( '#sub-accordion-panel-homepage_option_panel' );

      },

    });

});