import { registerBlockType } from '@wordpress/blocks';
import { __ } from '@wordpress/i18n';
import { Fragment, useState } from '@wordpress/element';
import ServerSideRender from '@wordpress/server-side-render';
import { 
    useBlockProps, 
    InspectorControls, 
    BlockControls 
} from '@wordpress/block-editor';
import {
	PanelBody,
	SelectControl,
	ToggleControl,
	TextControl,
	Toolbar,
	ToolbarButton,
	ColorPicker,
	ColorPalette
} from '@wordpress/components';
import blockAttributes from './attributes.json';

registerBlockType( 'wcpcsup/block', {
    apiVersion: 2,

	title: __( 'ultimate', 'woocommerce-product-carousel-slider-and-ultimate' ),

	category: 'common',

    keywords: [ 'ultimate', 'call to action' ],

    icon: 'admin-comments',

    supports: {
		html: false
	},

    transforms: {

    },

    attributes: blockAttributes,

    edit({ attributes, setAttributes }){
        let {
			layout,
			theme,
			h_title_show,
			header_title,
			header_position,
			display_title,
			products_type,
			total_products,
			exclude_stock_out,
			display_sale_ribbon,
			sale_ribbon_text,
			sale_ribbon_position,
			display_featured_ribbon,
			feature_ribbon_text,
			featured_ribbon_position,
			display_sold_out_ribbon,
			sold_out_ribbon_text,
			sold_out_ribbon_position,
			display_discount_ribbon,
			discount_ribbon_position,
			display_price,
			display_ratings,
			display_cart,

			A_play,
			repeat_product,
			stop_hover,
			marquee,
			c_desktop,
			c_desktop_small,
			c_tablet,
			c_mobile,
			slide_speed,
			scrool_direction,
			nav_show,
			nav_position,
			carousel_pagination

		} = attributes;
		return(
            <Fragment>
                <div { ...useBlockProps() }>
                    <InspectorControls>

                        <PanelBody title={ __( 'Layout', 'woocommerce-product-carousel-slider-and-ultimate' ) } initialOpen={ false }>

							<SelectControl
								label={ __( 'Layout', 'woocommerce-product-carousel-slider-and-ultimate' ) }
								labelPosition='side'
								value={ layout }
								options={ [
									{ label: __( 'Carousel', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'carousel' },
									{ label: __( 'Grid', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'grid' },
								] }
								onChange={ newState => setAttributes( { layout: newState } ) }
							/>
							
							{/* <ColorPicker 
								name={ __( 'Laydsfsout', 'directorist' ) }
								color={ test }
								labelPosition='side'
								onChange={ newState => setAttributes( { test: newState } ) }
							/> */}

							<SelectControl
								label={ __( 'Theme', 'directorist' ) }
								labelPosition='side'
								value={ theme }
								options={ [
									{ label: __( 'Theme 1', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'theme_1' },
									{ label: __( 'Theme 2', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'theme_2' },
									{ label: __( 'Theme 3', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'theme_3' },
									{ label: __( 'Theme 4', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'theme_4' },
									{ label: __( 'Theme 5', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'theme_5' },
									{ label: __( 'Theme 6', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'theme_6' },
									{ label: __( 'Theme 7', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'theme_7' },
									{ label: __( 'Theme 8', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'theme_8' },
									{ label: __( 'Theme 9', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'theme_9' },
									{ label: __( 'Theme 10', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'theme_10' },
									{ label: __( 'Theme 11', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'theme_11' },
									{ label: __( 'Theme 12', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'theme_12' },
									{ label: __( 'Theme 13', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'theme_13' },
									{ label: __( 'Theme 14', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'theme_14' },
									{ label: __( 'Theme 15', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'theme_15' },
								] }
								onChange={ newState => setAttributes( { theme: newState } ) }
							/>

							<ToggleControl
								label={ __( 'Header Title', 'directorist' ) }
								checked={ h_title_show }
								onChange={ newState => setAttributes( { h_title_show: newState } ) }
							/>

							{ h_title_show ? <TextControl
								label={ __( 'Header Title', 'directorist' ) }
								type='text'
								value={ header_title }
								onChange={ newState => setAttributes( { header_title: newState } ) }
							/> : setAttributes( { header_title: '' } ) }

							{ h_title_show ? <SelectControl
								label={ __( 'Header position', 'woocommerce-product-carousel-slider-and-ultimate' ) }
								labelPosition='side'
								value={ header_position }
								options={ [
									{ label: __( 'Middle', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'middle' },
									{ label: __( 'Left', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'left' },
									{ label: __( 'Right', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'right' },
								] }
								onChange={ newState => setAttributes( { header_position: newState } ) }
							/> : setAttributes( { header_position: 'middle' } ) }

							<ToggleControl
								label={ __( 'Display Title', 'directorist' ) }
								checked={ display_title }
								onChange={ newState => setAttributes( { display_title: newState } ) }
							/>
							
                        </PanelBody>

						<PanelBody title={ __( 'Query', 'woocommerce-product-carousel-slider-and-ultimate' ) } initialOpen={ false }>

							<SelectControl
								label={ __( 'Product Type', 'woocommerce-product-carousel-slider-and-ultimate' ) }
								labelPosition='side'
								value={ products_type }
								options={ [
									{ label: __( 'Latest', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'latest' },
									{ label: __( 'Older', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'older' },
									{ label: __( 'Top Rated', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'top_rated' },
									{ label: __( 'Random', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'random' },
									{ label: __( 'On Sale', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'onsale' },
									{ label: __( 'Best Selling', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'bestselling' },
									{ label: __( 'Featured', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'featured' },
								] }
								onChange={ newState => setAttributes( { products_type: newState } ) }
							/>

							<TextControl
								label={ __( 'Total Products to Display', 'directorist' ) }
								type='text'
								value={ total_products }
								onChange={ newState => setAttributes( { total_products: newState } ) }
							/>

							<ToggleControl
								label={ __( 'Exclude Stock-out Products', 'directorist' ) }
								checked={ exclude_stock_out }
								onChange={ newState => setAttributes( { exclude_stock_out: newState } ) }
							/>

						</PanelBody>

						<PanelBody title={ __( 'Elements', 'woocommerce-product-carousel-slider-and-ultimate' ) } initialOpen={ false }>

							<ToggleControl
								label={ __( 'Display "Sale" Badge', 'directorist' ) }
								checked={ display_sale_ribbon }
								onChange={ newState => setAttributes( { display_sale_ribbon: newState } ) }
							/>

							<TextControl
								label={ __( 'Sale Ribbon Text', 'directorist' ) }
								type='text'
								value={ sale_ribbon_text }
								onChange={ newState => setAttributes( { sale_ribbon_text: newState } ) }
							/>

							<SelectControl
								label={ __( 'Sale Ribbon Position', 'woocommerce-product-carousel-slider-and-ultimate' ) }
								labelPosition='side'
								value={ sale_ribbon_position }
								options={ [
									{ label: __( 'Top Left', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'top_left' },
									{ label: __( 'Top Right', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'top_right' },
									{ label: __( 'Bottom Left', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'bottom_left' },
									{ label: __( 'Bottom Right', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'bottom_right' },
								] }
								onChange={ newState => setAttributes( { sale_ribbon_position: newState } ) }
							/>

							<ToggleControl
								label={ __( 'Display "Featured" Badge', 'directorist' ) }
								checked={ display_featured_ribbon }
								onChange={ newState => setAttributes( { display_featured_ribbon: newState } ) }
							/>

							<TextControl
								label={ __( 'Featured Ribbon Text', 'directorist' ) }
								type='text'
								value={ feature_ribbon_text }
								onChange={ newState => setAttributes( { feature_ribbon_text: newState } ) }
							/>

							<SelectControl
								label={ __( 'Featured Ribbon Position', 'woocommerce-product-carousel-slider-and-ultimate' ) }
								labelPosition='side'
								value={ featured_ribbon_position }
								options={ [
									{ label: __( 'Top Left', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'top_left' },
									{ label: __( 'Top Right', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'top_right' },
									{ label: __( 'Bottom Left', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'bottom_left' },
									{ label: __( 'Bottom Right', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'bottom_right' },
								] }
								onChange={ newState => setAttributes( { featured_ribbon_position: newState } ) }
							/>

							<ToggleControl
								label={ __( 'Display "Sold Out" Badge', 'directorist' ) }
								checked={ display_sold_out_ribbon }
								onChange={ newState => setAttributes( { display_sold_out_ribbon: newState } ) }
							/>

							<TextControl
								label={ __( 'Sold Out Ribbon Text', 'directorist' ) }
								type='text'
								value={ sold_out_ribbon_text }
								onChange={ newState => setAttributes( { sold_out_ribbon_text: newState } ) }
							/>

							<SelectControl
								label={ __( 'Sold Out Ribbon Position', 'woocommerce-product-carousel-slider-and-ultimate' ) }
								labelPosition='side'
								value={ sold_out_ribbon_position }
								options={ [
									{ label: __( 'Top Left', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'top_left' },
									{ label: __( 'Top Right', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'top_right' },
									{ label: __( 'Bottom Left', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'bottom_left' },
									{ label: __( 'Bottom Right', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'bottom_right' },
								] }
								onChange={ newState => setAttributes( { sold_out_ribbon_position: newState } ) }
							/>

							<ToggleControl
								label={ __( 'Display "Discount Percentage" Badge', 'directorist' ) }
								checked={ display_discount_ribbon }
								onChange={ newState => setAttributes( { display_discount_ribbon: newState } ) }
							/>

							<SelectControl
								label={ __( 'Discount Ribbon Position', 'woocommerce-product-carousel-slider-and-ultimate' ) }
								labelPosition='side'
								value={ discount_ribbon_position }
								options={ [
									{ label: __( 'Top Left', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'top_left' },
									{ label: __( 'Top Right', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'top_right' },
									{ label: __( 'Bottom Left', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'bottom_left' },
									{ label: __( 'Bottom Right', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'bottom_right' },
								] }
								onChange={ newState => setAttributes( { discount_ribbon_position: newState } ) }
							/>

							<ToggleControl
								label={ __( 'Display Product Price', 'directorist' ) }
								checked={ display_price }
								onChange={ newState => setAttributes( { display_price: newState } ) }
							/>

							<ToggleControl
								label={ __( 'Display Product Ratings', 'directorist' ) }
								checked={ display_ratings }
								onChange={ newState => setAttributes( { display_ratings: newState } ) }
							/>

							<ToggleControl
								label={ __( 'Display "Add to Cart" Button', 'directorist' ) }
								checked={ display_cart }
								onChange={ newState => setAttributes( { display_cart: newState } ) }
							/>

						</PanelBody>

						<PanelBody title={ __( 'Carousel', 'woocommerce-product-carousel-slider-and-ultimate' ) } initialOpen={ false }>

							<ToggleControl
								label={ __( 'Auto Play', 'directorist' ) }
								checked={ A_play }
								onChange={ newState => setAttributes( { A_play: newState } ) }
							/>

							<ToggleControl
								label={ __( 'Repeat Product', 'directorist' ) }
								checked={ repeat_product }
								onChange={ newState => setAttributes( { repeat_product: newState } ) }
							/>

							<ToggleControl
								label={ __( 'Stop on Hover', 'directorist' ) }
								checked={ stop_hover }
								onChange={ newState => setAttributes( { stop_hover: newState } ) }
							/>

							<ToggleControl
								label={ __( 'Marquee', 'directorist' ) }
								checked={ marquee }
								onChange={ newState => setAttributes( { marquee: newState } ) }
							/>

							<TextControl
								label={ __( 'Products Columns', 'directorist' ) }
								type='text'
								value={ c_desktop }
								onChange={ newState => setAttributes( { c_desktop: newState } ) }
							/>

							<TextControl
								label={ __( 'Laptop Columns', 'directorist' ) }
								type='text'
								value={ c_desktop_small }
								onChange={ newState => setAttributes( { c_desktop_small: newState } ) }
							/>

							<TextControl
								label={ __( 'Tablet Columns', 'directorist' ) }
								type='text'
								value={ c_tablet }
								onChange={ newState => setAttributes( { c_tablet: newState } ) }
							/>

							<TextControl
								label={ __( 'Mobile Columns', 'directorist' ) }
								type='text'
								value={ c_mobile }
								onChange={ newState => setAttributes( { c_mobile: newState } ) }
							/>

							<TextControl
								label={ __( 'Slide Speed', 'directorist' ) }
								type='text'
								value={ slide_speed }
								onChange={ newState => setAttributes( { slide_speed: newState } ) }
							/>

							<TextControl
								label={ __( 'Slide Timeout', 'directorist' ) }
								type='text'
								value={ slide_time }
								onChange={ newState => setAttributes( { slide_time: newState } ) }
							/>

							<SelectControl
								label={ __( 'Scroll Direction', 'woocommerce-product-carousel-slider-and-ultimate' ) }
								labelPosition='side'
								value={ scrool_direction }
								options={ [
									{ label: __( 'Right to Left', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'right_left' },
									{ label: __( 'Left to Right', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'left_right' }
								] }
								onChange={ newState => setAttributes( { scrool_direction: newState } ) }
							/>

							<ToggleControl
								label={ __( 'Enable Navigation', 'directorist' ) }
								checked={ nav_show }
								onChange={ newState => setAttributes( { nav_show: newState } ) }
							/>

							<SelectControl
								label={ __( 'Position', 'woocommerce-product-carousel-slider-and-ultimate' ) }
								labelPosition='side'
								value={ nav_position }
								options={ [
									{ label: __( 'Top Left', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'top-left' },
									{ label: __( 'Top Right', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'top-right' },
									{ label: __( 'Middle', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'middle' },
									{ label: __( 'Bottom Left', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'bottom-left' },
									{ label: __( 'Bottom Right', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'bottom-right' }

								] }
								onChange={ newState => setAttributes( { nav_position: newState } ) }
							/>

							<ToggleControl
								label={ __( 'Enable Pagination', 'directorist' ) }
								checked={ carousel_pagination }
								onChange={ newState => setAttributes( { carousel_pagination: newState } ) }
							/>

						</PanelBody>

                    </InspectorControls>
                
			    	<ServerSideRender block="wcpcsup/block" attributes={ attributes } />
                 </div>
            </Fragment>
		)
	},

    save( { attributes } ){

    }
} )