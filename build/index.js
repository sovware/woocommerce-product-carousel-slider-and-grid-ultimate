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








(0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__.registerBlockType)('wcpcsup/block', {
  apiVersion: 2,
  title: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('ultimate', 'woocommerce-product-carousel-slider-and-ultimate'),
  category: 'common',
  keywords: ['ultimate', 'call to action'],
  icon: 'admin-comments',
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
      }, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Theme 4', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'theme_4'
      }, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Theme 5', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'theme_5'
      }, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Theme 6', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'theme_6'
      }, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Theme 7', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'theme_7'
      }, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Theme 8', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'theme_8'
      }, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Theme 9', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'theme_9'
      }, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Theme 10', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'theme_10'
      }, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Theme 11', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'theme_11'
      }, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Theme 12', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'theme_12'
      }, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Theme 13', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'theme_13'
      }, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Theme 14', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'theme_14'
      }, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Theme 15', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'theme_15'
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
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Top Rated', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'top_rated'
      }, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Random', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'random'
      }, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('On Sale', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'onsale'
      }, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Best Selling', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'bestselling'
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
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.ToggleControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Exclude Stock-out Products', 'directorist'),
      checked: exclude_stock_out,
      onChange: newState => setAttributes({
        exclude_stock_out: newState
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
    })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.PanelBody, {
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
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.ToggleControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Stop on Hover', 'directorist'),
      checked: stop_hover,
      onChange: newState => setAttributes({
        stop_hover: newState
      })
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.ToggleControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Marquee', 'directorist'),
      checked: marquee,
      onChange: newState => setAttributes({
        marquee: newState
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
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__.SelectControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Scroll Direction', 'woocommerce-product-carousel-slider-and-ultimate'),
      labelPosition: "side",
      value: scrool_direction,
      options: [{
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Right to Left', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'right_left'
      }, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Left to Right', 'woocommerce-product-carousel-slider-and-ultimate'),
        value: 'left_right'
      }],
      onChange: newState => setAttributes({
        scrool_direction: newState
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
    }))), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)((_wordpress_server_side_render__WEBPACK_IMPORTED_MODULE_3___default()), {
      block: "wcpcsup/block",
      attributes: attributes
    })));
  },
  save(_ref2) {
    let {
      attributes
    } = _ref2;
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

module.exports = JSON.parse('{"layout":{"type":"string","default":"carousel"},"theme":{"type":"string","default":"theme_1"},"h_title_show":{"type":"boolean","default":false},"header_title":{"type":"string","default":""},"header_position":{"type":"string","default":"middle"},"display_title":{"type":"boolean","default":true},"products_type":{"type":"string","default":"latest"},"total_products":{"type":"string","default":"12"},"exclude_stock_out":{"type":"boolean","default":true},"display_sale_ribbon":{"type":"boolean","default":false},"sale_ribbon_text":{"type":"string","default":"Sale!"},"sale_ribbon_position":{"type":"string","default":"top_left"},"display_featured_ribbon":{"type":"boolean","default":false},"feature_ribbon_text":{"type":"string","default":"Featured!"},"featured_ribbon_position":{"type":"string","default":"top_right"},"display_sold_out_ribbon":{"type":"boolean","default":false},"sold_out_ribbon_text":{"type":"string","default":"Sold Out!"},"sold_out_ribbon_position":{"type":"string","default":"bottom_left"},"display_discount_ribbon":{"type":"boolean","default":false},"discount_ribbon_position":{"type":"string","default":"bottom_right"},"display_price":{"type":"boolean","default":true},"display_ratings":{"type":"boolean","default":true},"display_cart":{"type":"boolean","default":true},"A_play":{"type":"boolean","default":true},"repeat_product":{"type":"boolean","default":true},"stop_hover":{"type":"boolean","default":false},"marquee":{"type":"boolean","default":false},"c_desktop":{"type":"string","default":"2"},"c_desktop_small":{"type":"string","default":"2"},"c_tablet":{"type":"string","default":"2"},"c_mobile":{"type":"string","default":"1"},"slide_speed":{"type":"string","default":"2000"},"slide_time":{"type":"string","default":"2000"},"scrool_direction":{"type":"string","default":"right_left"},"nav_show":{"type":"boolean","default":true},"nav_position":{"type":"string","default":"bottom-right"},"carousel_pagination":{"type":"boolean","default":false}}');

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