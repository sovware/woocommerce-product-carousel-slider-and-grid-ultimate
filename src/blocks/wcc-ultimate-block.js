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
			display_title
		} = attributes;
		return(
            <Fragment>
                <div { ...useBlockProps() }>
                    <InspectorControls>
                        <PanelBody title={ __( 'Layout', 'woocommerce-product-carousel-slider-and-ultimate' ) } initialOpen={ true }>

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

							<TextControl
								label={ __( 'Header Title', 'directorist' ) }
								type='text'
								value={ header_title }
								onChange={ newState => setAttributes( { header_title: newState } ) }
							/>

							<SelectControl
								label={ __( 'Header position', 'woocommerce-product-carousel-slider-and-ultimate' ) }
								labelPosition='side'
								value={ header_position }
								options={ [
									{ label: __( 'Middle', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'middle' },
									{ label: __( 'Left', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'left' },
									{ label: __( 'Right', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'right' },
								] }
								onChange={ newState => setAttributes( { header_position: newState } ) }
							/>

							<ToggleControl
								label={ __( 'Display Title', 'directorist' ) }
								checked={ display_title }
								onChange={ newState => setAttributes( { display_title: newState } ) }
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