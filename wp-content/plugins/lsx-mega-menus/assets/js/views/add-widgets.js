( function( wp, $ ) {

	'use strict';

	if ( ! wp || ! wp.customize ) { return; }

	// Set up our namespace.
	var api = wp.customize;

	api.LSXMM = api.LSXMM || {};

	/**
	 * wp.customize.LSXMM.AddWidgetsView
	 *
	 * View class for the add widgets section.
	 *
	 * @constructor
	 * @augments wp.Backbone.View
	 * @augments Backbone.View
	 */
	api.LSXMM.AddWidgetsView = wp.Backbone.View.extend({
		el: '.lsxmm-add-widgets',

		events: {
			'click .wp-widget': 'addToGrid',
			'input #lsxmm-widgets-filter': 'filterWidgets',
			'keyup #lsxmm-widgets-filter': 'filterWidgets'
		},

		parent: null,
		widgets: null,
		searchTerm: '',

		initialize: function( options ) {
			var self = this;

			this.parent = options.parent;

			this.widgets = api.Widgets.availableWidgets;

			this.listenTo( this.widgets, 'change', this.updateList );

			this.printWidget();
		},

		printWidget: function() {
			var self = this;
			this.widgets.each( function( widget ) {
				$( '<div class="wp-widget show" data-widget-id-base="' + widget.get( 'id_base' ) + '"><h3>' + widget.get( 'name' ) + '</h3><p>' + widget.get( 'description' ) + '</p></div>' ).appendTo( self.$el.find( '.lsxmm-widgets-list' ) );
			});
		},

		updateList: function() {
			this.widgets.each( function( widget ) {
				var widgetTpl = $( '.wp-widget[data-widget-id-base=' + widget.get( 'id_base' ) + ']' );
				widgetTpl.toggleClass( 'show', widget.get( 'search_matched' ) && ! widget.get( 'is_disabled' ) );
			} );
		},

		addToGrid: function( event ) {
			var widget = this.createWPWidget( $( event.currentTarget ).closest( '.wp-widget' ).attr( 'data-widget-id-base' ) );

			var newWidgetModel = new api.LSXMM.WidgetModel({
				id: widget.params.widget_id
			});

			this.parent.closeAddWidgets();

			this.parent.processWidget( newWidgetModel );
		},

		createWPWidget: function( widgetID ) {
			var sidebarWidgetsControl, settingId = 'sidebars_widgets[lsxmm-sidebar]', widget;

			sidebarWidgetsControl = api.control( settingId );

			// Creates a new widget
			widget = sidebarWidgetsControl.addWidget( widgetID );

			// Keep search results after adding a new widget
			this.widgets.doSearch( this.searchTerm );

			return widget;
		},

		filterWidgets: function( event ) {
			this.searchTerm = event.target.value;
			this.widgets.doSearch( this.searchTerm );
		},

		clearSearch: function() {
			this.widgets.doSearch( '' );
			this.$el.find( '#lsxmm-widgets-filter' ).val( '' );
		}
	});

} )( window.wp, jQuery );
