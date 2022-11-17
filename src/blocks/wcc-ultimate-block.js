import { registerBlockType } from '@wordpress/blocks';
import { __ } from '@wordpress/i18n';
import { Fragment, useState, useEffect } from '@wordpress/element';
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

function extra_js() {
	/* Style reset in buttons p tag */
	document.querySelectorAll('.wpcu-button p.woocommerce, p.product').forEach((el, id) => {
		el.setAttribute('style', 'none');
	});

	/* Lazy load */
	let lazyLoadContainer = document.querySelectorAll('.wpcu-lazy-load');
	if (lazyLoadContainer.length !== 0) {
		document.querySelectorAll('.wpcu-products').forEach((el) => {
			el.classList.remove('wpcu-lazy-load');
		})
	}

	/* Theme buttons (.wpcu-product__action-icons--boxed) responsive fix */
	function btnResFix(selector, breakPoint) {
		var selectElement = document.querySelectorAll(selector);
		selectElement.forEach(elm => {
			if (elm.clientWidth < breakPoint) {
				elm.classList.add('wpcu-product__content--res-fix');
			}
		})
	}
	btnResFix('.wpcu-theme_8 .wpcu-product__content', 300);
	btnResFix('.wpcu-theme_7 .wpcu-product__content', 305);
	btnResFix('.wpcu-theme_10 .wpcu-product__content', 320);


	/* Theme 15 tweaks */
	var theme15items = document.querySelectorAll('.wpcu-theme_15 .wpcu-product__details__content');
	theme15items.forEach(element => {
		element.closest('.wpcu-product__content').style.paddingBottom = (element.clientHeight - 45) + "px";
	});

	/* Check WPCU Carousel Data */
	let checkData = function (data, value) {
		return typeof data === 'undefined' ? value : data;
	};
	/* WPCU Carousel */
	let wpcuCarousel = document.querySelectorAll('.wpcu-carousel');
	wpcuCarousel.forEach(function (el) {
		let swiper = new Swiper(el, {
			slidesPerView: checkData(parseInt(el.dataset.wpcuItems), 4),
			spaceBetween: checkData(parseInt(el.dataset.wpcuMargin), 30),
			loop: checkData(JSON.parse(el.dataset.wpcuLoop.toLowerCase()), false),
			slidesPerGroup: checkData(parseInt(el.dataset.wpcuPerslide), 4),
			speed: checkData(parseInt(el.dataset.wpcuSpeed), 3000),
			autoplay: checkData(JSON.parse(el.dataset.wpcuAutoplay), {}),
			navigation: {
				nextEl: '.wpcu-carousel-nav__btn--next',
				prevEl: '.wpcu-carousel-nav__btn--prev',
			},
			pagination: {
				el: '.wpcu-carousel-pagination',
				type: 'bullets',
				clickable: true
			},
			breakpoints: checkData(JSON.parse(el.dataset.wpcuResponsive), {})
		})
	});

	/* Add to cart icon for theme-4, theme-5 and theme-11 */
	jQuery(".wpcu-theme_4 .woocommerce a, .wpcu-theme_5 .woocommerce a, .wpcu-theme_9 .woocommerce a").html(`
	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1056" height="896" preserveAspectRatio="xMidYMid meet" viewBox="-3.63064 -66.0327 1030.76 1000.035" style="-ms-transform: rotate(180deg); -webkit-transform: rotate(180deg); transform: rotate(180deg);"><path d="M1022.74 17.3604l-83.4072 503.777c-7.44043 65.3115 -66.9766 118.432 -132.721 118.432h-70.6562v85.2803c0 130.16 -92.8477 236.032 -222.976 236.032c-130.096 0 -224.943 -105.872 -224.943 -236.032v-85.2803h-76.6719 c-65.7441 0 -125.28 -53.1201 -132.528 -117.056l-77.2803 -504.16c-2.97559 -26.5596 2.22461 -47.5039 15.4082 -62.2881c12.4316 -13.9043 30.5273 -20.9766 53.7432 -20.9766h873.568c32.9121 0 51.7764 13.2158 61.8408 24.3203 c9.21582 10.208 19.6475 28.1436 16.623 57.9512zM352.049 724.865c0 94.8477 66.127 172.031 160.943 172.031c94.816 0 158.977 -77.1836 158.977 -172.031v-85.2803h-319.92zM947.168 -0.446289l-872.498 -0.449219c-5.50391 0 -11.0078 2.94434 -9.71191 10.6885 l77.248 504.096c3.83984 33.4404 35.5039 61.6807 69.1523 61.6807h76.6885v-72.9277c-19.0723 -11.0723 -32.0479 -31.4883 -32.0479 -55.1367c0 -35.3438 28.6562 -64 64 -64s64 28.6562 64 64c0 23.6162 -12.9277 44 -31.9521 55.0879v72.9922h319.904v-72.9922 c-19.0078 -11.0879 -31.9521 -31.4883 -31.9521 -55.0879c0 -35.3438 28.6562 -64 64 -64s64 28.6562 64 64c0 23.6484 -12.9756 44.0645 -32.0479 55.1523v72.9277h70.6562c33.6641 0 65.3125 -28.2559 69.4082 -63.4395l83.3438 -503.28 c0.400391 -4.0957 -2.81543 -9.31152 -12.1914 -9.31152z"/></svg>
`);


	/* Marquee wrapper value */
	var wpcuStyles = document.createElement('style');
	document.head.append(wpcuStyles);
	wpcuStyles.innerHTML = `
	.wpcu-carousel--marquee .swiper-wrapper{
		animation: wpcuMarquee var(--wpcu-marqueeSpeed) linear infinite running;
	}
	@keyframes wpcuMarquee {
		0% {
			transform: translate(0, 0);
		}
		100% {
			transform: translate(var(--wpcu-marqueeItemsWidth), 0);
		}
	}
`;
	var wpcuMarqueeCarousel = document.querySelectorAll('.wpcu-carousel--marquee');
	wpcuMarqueeCarousel.forEach(elm => {
		var wpcuMarqueeCarouselItem = elm.querySelectorAll('.wpcu-product:not(.swiper-slide-duplicate)');
		wpcuMarqueeCarouselItem.forEach(elmnt => {
			var wpcuMarqueeWrapperWidth = wpcuMarqueeCarouselItem.length * (elmnt.offsetWidth + checkData(parseInt(elm.dataset.wpcuMargin)));
			elm.style.setProperty('--wpcu-marqueeItemsWidth', `-${wpcuMarqueeWrapperWidth}px`);
			elm.style.setProperty('--wpcu-marqueeSpeed', `${checkData(parseInt(elm.dataset.wpcuSpeed))}ms`);
		})
	});
}
registerBlockType( 'wcpcsup/block', {
    apiVersion: 2,

	title: __( 'WooCommerce Product Ultimate', 'woocommerce-product-carousel-slider-and-ultimate' ),

	category: 'widgets',

    keywords: [ 'woocommerce', 'product', 'ultimate', 'wcc' ],

    icon: 'slides',

    supports: {
		html: false
	},

    transforms: {

    },

    attributes: blockAttributes,

    edit({ attributes, setAttributes }){
		
			useEffect( () => {
				setTimeout(() => {
					extra_js();
				}, 5000 );
			} );

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
			slide_time,
			slide_speed,
			scrool_direction,
			nav_show,
			nav_position,
			carousel_pagination,
			g_column,
			g_tablet,
			g_mobile,
			grid_pagination,
			img_crop,
			crop_image_width,
			crop_image_height,
			img_hover_effect,
			img_animation
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

						<PanelBody title={ __( 'Grid', 'woocommerce-product-carousel-slider-and-ultimate' ) } initialOpen={ false }>

							<TextControl
								label={ __( 'Grid Columns', 'directorist' ) }
								type='text'
								value={ g_column }
								onChange={ newState => setAttributes( { g_column: newState } ) }
							/>

							<TextControl
								label={ __( 'Select Columns for Tablet', 'directorist' ) }
								type='text'
								value={ g_tablet }
								onChange={ newState => setAttributes( { g_tablet: newState } ) }
							/>

							<TextControl
								label={ __( 'Select Columns for Mobile', 'directorist' ) }
								type='text'
								value={ g_mobile }
								onChange={ newState => setAttributes( { g_mobile: newState } ) }
							/>

							<ToggleControl
								label={ __( 'Display Pagination', 'directorist' ) }
								checked={ grid_pagination }
								onChange={ newState => setAttributes( { grid_pagination: newState } ) }
							/>

						</PanelBody>

						<PanelBody title={ __( 'Image', 'woocommerce-product-carousel-slider-and-ultimate' ) } initialOpen={ false }>

							<ToggleControl
								label={ __( 'Image Resize & Crop', 'directorist' ) }
								checked={ img_crop }
								onChange={ newState => setAttributes( { img_crop: newState } ) }
							/>

							<TextControl
								label={ __( 'Cropping Width', 'directorist' ) }
								type='text'
								value={ crop_image_width }
								onChange={ newState => setAttributes( { crop_image_width: newState } ) }
							/>

							<TextControl
								label={ __( 'Cropping Height', 'directorist' ) }
								type='text'
								value={ crop_image_height }
								onChange={ newState => setAttributes( { crop_image_height: newState } ) }
							/>

							<ToggleControl
								label={ __( 'Image Hover Effect', 'directorist' ) }
								checked={ img_hover_effect }
								onChange={ newState => setAttributes( { img_hover_effect: newState } ) }
							/>

							<SelectControl
								label={ __( 'Image Animation', 'woocommerce-product-carousel-slider-and-ultimate' ) }
								labelPosition='side'
								value={ img_animation }
								options={ [
									{ label: __( 'Zoom In', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'zoom-in' },
									{ label: __( 'Zoom Out', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'zoom-out' },
									{ label: __( 'Blur In', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'blur-in' },
									{ label: __( 'Blur Out', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'blur-out' },
									{ label: __( 'Grayscale In', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'grayscale-in' },
									{ label: __( 'Grayscale Out', 'woocommerce-product-carousel-slider-and-ultimate' ), value: 'grayscale-out' }
								] }
								onChange={ newState => setAttributes( { img_animation: newState } ) }
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
} );

