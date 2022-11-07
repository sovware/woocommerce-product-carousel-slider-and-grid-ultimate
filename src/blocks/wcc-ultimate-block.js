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
	ToolbarButton
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
			layout
		} = attributes;
		return(
            <Fragment>
                <div { ...useBlockProps() }>
                    <InspectorControls>
                        <PanelBody title={ __( 'Layout', 'woocommerce-product-carousel-slider-and-ultimate' ) } initialOpen={ true }>
                        <SelectControl
							label={ __( 'Layout', 'directorist' ) }
							labelPosition='side'
							value={ layout }
							options={ [
								{ label: __( 'Carousel', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'carousel' },
								{ label: __( 'Grid', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'grid' },
							] }
							onChange={ newState => setAttributes( { layout: newState } ) }
						/>
                        </PanelBody>
                    </InspectorControls>
                
			     <ServerSideRender block="wcpcsup/block"/>
                 </div>
            </Fragment>
		)
	},

    save( { attributes } ){

    }
} )