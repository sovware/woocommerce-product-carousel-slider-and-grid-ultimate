/******/ (function() { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/blocks/wcc-ultimate-block.js":
/*!******************************************!*\
  !*** ./src/blocks/wcc-ultimate-block.js ***!
  \******************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/i18n */ "@wordpress/i18n");
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _wordpress_server_side_render__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @wordpress/server-side-render */ "@wordpress/server-side-render");
/* harmony import */ var _wordpress_server_side_render__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_wordpress_server_side_render__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var _attributes_json__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./attributes.json */ "./src/blocks/attributes.json");








function extra_js() {
  /* Style reset in buttons p tag */
  document.querySelectorAll('.wpcu-button p.woocommerce, p.product').forEach((el, id) => {
    el.setAttribute('style', 'none');
  });

  /* Lazy load */
  let lazyLoadContainer = document.querySelectorAll('.wpcu-lazy-load');
  if (lazyLoadContainer.length !== 0) {
    document.querySelectorAll('.wpcu-products').forEach(el => {
      el.classList.remove('wpcu-lazy-load');
    });
  }

  /* Theme buttons (.wpcu-product__action-icons--boxed) responsive fix */
  function btnResFix(selector, breakPoint) {
    var selectElement = document.querySelectorAll(selector);
    selectElement.forEach(elm => {
      if (elm.clientWidth < breakPoint) {
        elm.classList.add('wpcu-product__content--res-fix');
      }
    });
  }
  btnResFix('.wpcu-theme_8 .wpcu-product__content', 300);
  btnResFix('.wpcu-theme_7 .wpcu-product__content', 305);
  btnResFix('.wpcu-theme_10 .wpcu-product__content', 320);

  /* Theme 15 tweaks */
  var theme15items = document.querySelectorAll('.wpcu-theme_15 .wpcu-product__details__content');
  theme15items.forEach(element => {
    element.closest('.wpcu-product__content').style.paddingBottom = element.clientHeight - 45 + "px";
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
        prevEl: '.wpcu-carousel-nav__btn--prev'
      },
      pagination: {
        el: '.wpcu-carousel-pagination',
        type: 'bullets',
        clickable: true
      },
      breakpoints: checkData(JSON.parse(el.dataset.wpcuResponsive), {})
    });
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
    });
  });
}
(0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__.registerBlockType)('wcpcsup/block', {
  apiVersion: 2,
  title: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('WooCommerce Product Ultimate', 'woocommerce-product-carousel-slider-and-ultimate'),
  category: 'widgets',
  keywords: ['woocommerce', 'product', 'ultimate', 'wcc'],
  icon: 'slides',
  supports: {
    html: false
  },
  transforms: {},
  attributes: _attributes_json__WEBPACK_IMPORTED_MODULE_6__,
  edit(_ref) {
    let {
      attributes,
      setAttributes
    } = _ref;
    (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
      setTimeout(() => {
        extra_js();
      }, 5000);
    });
    let {
      layout,
      theme,
      h_title_show,
      header_title,
      header_position,
      display_title,
      products_type,
      total_products,
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
      c_desktop,
      c_desktop_small,
      c_tablet,
      c_mobile,
      slide_time,
      slide_speed,
      nav_show,
      nav_position,
      carousel_pagination,
      g_column,
      g_tablet,
      g_mobile,
      grid_pagination,
      img_crop,
      crop_image_width,
      crop_image_height
    } = attributes;
    return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", (0,_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_4__.useBlockProps)(), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_4__.InspectorControls, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.PanelBody, {
      title: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Layout', 'woocommerce-product-carousel-slider-and-ultimate'),
      initialOpen: false
    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.SelectControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Layout', 'woocommerce-product-carousel-slider-and-ultimate'),
      labelPosition: "side",
      value: layout,
      options: [{
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Carousel', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'carousel'
      }, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Grid', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'grid'
      }],
      onChange: newState => setAttributes({
        layout: newState
      })
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.SelectControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Theme', 'directorist'),
      labelPosition: "side",
      value: theme,
      options: [{
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Theme 1', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'theme_1'
      }, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Theme 2', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'theme_2'
      }, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Theme 3', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'theme_3'
      }],
      onChange: newState => setAttributes({
        theme: newState
      })
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.ToggleControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Header Title', 'directorist'),
      checked: h_title_show,
      onChange: newState => setAttributes({
        h_title_show: newState
      })
    }), h_title_show ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.TextControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Header Title', 'directorist'),
      type: "text",
      value: header_title,
      onChange: newState => setAttributes({
        header_title: newState
      })
    }) : setAttributes({
      header_title: ''
    }), h_title_show ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.SelectControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Header position', 'woocommerce-product-carousel-slider-and-ultimate'),
      labelPosition: "side",
      value: header_position,
      options: [{
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Middle', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'middle'
      }, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Left', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'left'
      }, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Right', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'right'
      }],
      onChange: newState => setAttributes({
        header_position: newState
      })
    }) : setAttributes({
      header_position: 'middle'
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.ToggleControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Display Title', 'directorist'),
      checked: display_title,
      onChange: newState => setAttributes({
        display_title: newState
      })
    })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.PanelBody, {
      title: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Query', 'woocommerce-product-carousel-slider-and-ultimate'),
      initialOpen: false
    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.SelectControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Product Type', 'woocommerce-product-carousel-slider-and-ultimate'),
      labelPosition: "side",
      value: products_type,
      options: [{
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Latest', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'latest'
      }, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Older', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'older'
      }, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Featured', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'featured'
      }],
      onChange: newState => setAttributes({
        products_type: newState
      })
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.TextControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Total Products to Display', 'directorist'),
      type: "text",
      value: total_products,
      onChange: newState => setAttributes({
        total_products: newState
      })
    })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.PanelBody, {
      title: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Elements', 'woocommerce-product-carousel-slider-and-ultimate'),
      initialOpen: false
    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.ToggleControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Display "Sale" Badge', 'directorist'),
      checked: display_sale_ribbon,
      onChange: newState => setAttributes({
        display_sale_ribbon: newState
      })
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.TextControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Sale Ribbon Text', 'directorist'),
      type: "text",
      value: sale_ribbon_text,
      onChange: newState => setAttributes({
        sale_ribbon_text: newState
      })
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.SelectControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Sale Ribbon Position', 'woocommerce-product-carousel-slider-and-ultimate'),
      labelPosition: "side",
      value: sale_ribbon_position,
      options: [{
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Top Left', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'top_left'
      }, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Top Right', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'top_right'
      }, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Bottom Left', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'bottom_left'
      }, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Bottom Right', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'bottom_right'
      }],
      onChange: newState => setAttributes({
        sale_ribbon_position: newState
      })
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.ToggleControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Display "Featured" Badge', 'directorist'),
      checked: display_featured_ribbon,
      onChange: newState => setAttributes({
        display_featured_ribbon: newState
      })
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.TextControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Featured Ribbon Text', 'directorist'),
      type: "text",
      value: feature_ribbon_text,
      onChange: newState => setAttributes({
        feature_ribbon_text: newState
      })
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.SelectControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Featured Ribbon Position', 'woocommerce-product-carousel-slider-and-ultimate'),
      labelPosition: "side",
      value: featured_ribbon_position,
      options: [{
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Top Left', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'top_left'
      }, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Top Right', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'top_right'
      }, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Bottom Left', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'bottom_left'
      }, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Bottom Right', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'bottom_right'
      }],
      onChange: newState => setAttributes({
        featured_ribbon_position: newState
      })
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.ToggleControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Display "Sold Out" Badge', 'directorist'),
      checked: display_sold_out_ribbon,
      onChange: newState => setAttributes({
        display_sold_out_ribbon: newState
      })
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.TextControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Sold Out Ribbon Text', 'directorist'),
      type: "text",
      value: sold_out_ribbon_text,
      onChange: newState => setAttributes({
        sold_out_ribbon_text: newState
      })
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.SelectControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Sold Out Ribbon Position', 'woocommerce-product-carousel-slider-and-ultimate'),
      labelPosition: "side",
      value: sold_out_ribbon_position,
      options: [{
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Top Left', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'top_left'
      }, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Top Right', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'top_right'
      }, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Bottom Left', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'bottom_left'
      }, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Bottom Right', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'bottom_right'
      }],
      onChange: newState => setAttributes({
        sold_out_ribbon_position: newState
      })
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.ToggleControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Display "Discount Percentage" Badge', 'directorist'),
      checked: display_discount_ribbon,
      onChange: newState => setAttributes({
        display_discount_ribbon: newState
      })
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.SelectControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Discount Ribbon Position', 'woocommerce-product-carousel-slider-and-ultimate'),
      labelPosition: "side",
      value: discount_ribbon_position,
      options: [{
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Top Left', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'top_left'
      }, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Top Right', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'top_right'
      }, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Bottom Left', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'bottom_left'
      }, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Bottom Right', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'bottom_right'
      }],
      onChange: newState => setAttributes({
        discount_ribbon_position: newState
      })
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.ToggleControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Display Product Price', 'directorist'),
      checked: display_price,
      onChange: newState => setAttributes({
        display_price: newState
      })
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.ToggleControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Display Product Ratings', 'directorist'),
      checked: display_ratings,
      onChange: newState => setAttributes({
        display_ratings: newState
      })
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.ToggleControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Display "Add to Cart" Button', 'directorist'),
      checked: display_cart,
      onChange: newState => setAttributes({
        display_cart: newState
      })
    })), layout == 'carousel' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.PanelBody, {
      title: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Carousel', 'woocommerce-product-carousel-slider-and-ultimate'),
      initialOpen: false
    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.ToggleControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Auto Play', 'directorist'),
      checked: A_play,
      onChange: newState => setAttributes({
        A_play: newState
      })
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.ToggleControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Repeat Product', 'directorist'),
      checked: repeat_product,
      onChange: newState => setAttributes({
        repeat_product: newState
      })
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.TextControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Products Columns', 'directorist'),
      type: "text",
      value: c_desktop,
      onChange: newState => setAttributes({
        c_desktop: newState
      })
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.TextControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Laptop Columns', 'directorist'),
      type: "text",
      value: c_desktop_small,
      onChange: newState => setAttributes({
        c_desktop_small: newState
      })
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.TextControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Tablet Columns', 'directorist'),
      type: "text",
      value: c_tablet,
      onChange: newState => setAttributes({
        c_tablet: newState
      })
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.TextControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Mobile Columns', 'directorist'),
      type: "text",
      value: c_mobile,
      onChange: newState => setAttributes({
        c_mobile: newState
      })
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.TextControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Slide Speed', 'directorist'),
      type: "text",
      value: slide_speed,
      onChange: newState => setAttributes({
        slide_speed: newState
      })
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.TextControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Slide Timeout', 'directorist'),
      type: "text",
      value: slide_time,
      onChange: newState => setAttributes({
        slide_time: newState
      })
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.ToggleControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Enable Navigation', 'directorist'),
      checked: nav_show,
      onChange: newState => setAttributes({
        nav_show: newState
      })
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.SelectControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Position', 'woocommerce-product-carousel-slider-and-ultimate'),
      labelPosition: "side",
      value: nav_position,
      options: [{
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Top Left', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'top-left'
      }, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Top Right', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'top-right'
      }, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Middle', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'middle'
      }, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Bottom Left', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'bottom-left'
      }, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Bottom Right', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'bottom-right'
      }],
      onChange: newState => setAttributes({
        nav_position: newState
      })
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.ToggleControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Enable Pagination', 'directorist'),
      checked: carousel_pagination,
      onChange: newState => setAttributes({
        carousel_pagination: newState
      })
    })) : '', layout == 'grid' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.PanelBody, {
      title: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Grid', 'woocommerce-product-carousel-slider-and-ultimate'),
      initialOpen: false
    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.TextControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Grid Columns', 'directorist'),
      type: "text",
      value: g_column,
      onChange: newState => setAttributes({
        g_column: newState
      })
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.TextControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Select Columns for Tablet', 'directorist'),
      type: "text",
      value: g_tablet,
      onChange: newState => setAttributes({
        g_tablet: newState
      })
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.TextControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Select Columns for Mobile', 'directorist'),
      type: "text",
      value: g_mobile,
      onChange: newState => setAttributes({
        g_mobile: newState
      })
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.ToggleControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Display Pagination', 'directorist'),
      checked: grid_pagination,
      onChange: newState => setAttributes({
        grid_pagination: newState
      })
    })) : '', (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.PanelBody, {
      title: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Image', 'woocommerce-product-carousel-slider-and-ultimate'),
      initialOpen: false
    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.ToggleControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Image Resize & Crop', 'directorist'),
      checked: img_crop,
      onChange: newState => setAttributes({
        img_crop: newState
      })
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.TextControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Cropping Width', 'directorist'),
      type: "text",
      value: crop_image_width,
      onChange: newState => setAttributes({
        crop_image_width: newState
      })
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.TextControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Cropping Height', 'directorist'),
      type: "text",
      value: crop_image_height,
      onChange: newState => setAttributes({
        crop_image_height: newState
      })
    }))), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)((_wordpress_server_side_render__WEBPACK_IMPORTED_MODULE_3___default()), {
      block: "wcpcsup/block",
      attributes: attributes
    })));
  }
});

/***/ }),

/***/ "@wordpress/block-editor":
/*!*************************************!*\
  !*** external ["wp","blockEditor"] ***!
  \*************************************/
/***/ (function(module) {

module.exports = window["wp"]["blockEditor"];

/***/ }),

/***/ "@wordpress/blocks":
/*!********************************!*\
  !*** external ["wp","blocks"] ***!
  \********************************/
/***/ (function(module) {

module.exports = window["wp"]["blocks"];

/***/ }),

/***/ "@wordpress/components":
/*!************************************!*\
  !*** external ["wp","components"] ***!
  \************************************/
/***/ (function(module) {

module.exports = window["wp"]["components"];

/***/ }),

/***/ "@wordpress/element":
/*!*********************************!*\
  !*** external ["wp","element"] ***!
  \*********************************/
/***/ (function(module) {

module.exports = window["wp"]["element"];

/***/ }),

/***/ "@wordpress/i18n":
/*!******************************!*\
  !*** external ["wp","i18n"] ***!
  \******************************/
/***/ (function(module) {

module.exports = window["wp"]["i18n"];

/***/ }),

/***/ "@wordpress/server-side-render":
/*!******************************************!*\
  !*** external ["wp","serverSideRender"] ***!
  \******************************************/
/***/ (function(module) {

module.exports = window["wp"]["serverSideRender"];

/***/ }),

/***/ "./src/blocks/attributes.json":
/*!************************************!*\
  !*** ./src/blocks/attributes.json ***!
  \************************************/
/***/ (function(module) {

module.exports = JSON.parse('{"layout":{"type":"string","default":"carousel"},"theme":{"type":"string","default":"theme_1"},"h_title_show":{"type":"boolean","default":false},"header_title":{"type":"string","default":""},"header_position":{"type":"string","default":"middle"},"display_title":{"type":"boolean","default":true},"products_type":{"type":"string","default":"latest"},"total_products":{"type":"string","default":"12"},"display_sale_ribbon":{"type":"boolean","default":false},"sale_ribbon_text":{"type":"string","default":"Sale!"},"sale_ribbon_position":{"type":"string","default":"top_left"},"display_featured_ribbon":{"type":"boolean","default":false},"feature_ribbon_text":{"type":"string","default":"Featured!"},"featured_ribbon_position":{"type":"string","default":"top_right"},"display_sold_out_ribbon":{"type":"boolean","default":false},"sold_out_ribbon_text":{"type":"string","default":"Sold Out!"},"sold_out_ribbon_position":{"type":"string","default":"bottom_left"},"display_discount_ribbon":{"type":"boolean","default":false},"discount_ribbon_position":{"type":"string","default":"bottom_right"},"display_price":{"type":"boolean","default":true},"display_ratings":{"type":"boolean","default":true},"display_cart":{"type":"boolean","default":true},"A_play":{"type":"boolean","default":true},"repeat_product":{"type":"boolean","default":true},"c_desktop":{"type":"string","default":"2"},"c_desktop_small":{"type":"string","default":"2"},"c_tablet":{"type":"string","default":"2"},"c_mobile":{"type":"string","default":"1"},"slide_speed":{"type":"string","default":"2000"},"slide_time":{"type":"string","default":"2000"},"nav_show":{"type":"boolean","default":true},"nav_position":{"type":"string","default":"bottom-right"},"carousel_pagination":{"type":"boolean","default":false},"g_column":{"type":"string","default":"3"},"g_tablet":{"type":"string","default":"2"},"g_mobile":{"type":"string","default":"1"},"grid_pagination":{"type":"boolean","default":true},"img_crop":{"type":"boolean","default":true},"crop_image_width":{"type":"string","default":"350"},"crop_image_height":{"type":"string","default":"250"}}');

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	!function() {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = function(module) {
/******/ 			var getter = module && module.__esModule ?
/******/ 				function() { return module['default']; } :
/******/ 				function() { return module; };
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	!function() {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = function(exports, definition) {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	!function() {
/******/ 		__webpack_require__.o = function(obj, prop) { return Object.prototype.hasOwnProperty.call(obj, prop); }
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
!function() {
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _blocks_wcc_ultimate_block_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./blocks/wcc-ultimate-block.js */ "./src/blocks/wcc-ultimate-block.js");

}();
/******/ })()
;
//# sourceMappingURL=index.js.map