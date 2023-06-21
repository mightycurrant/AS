<?php
/* Smarty version 3.1.31, created on 2023-06-21 21:28:30
  from "cms_stylesheet:a_stylesheet" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64934f5e509393_41493581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40b8be0148f7ad50cf3c8872b592dbf0dd68afe4' => 
    array (
      0 => 'cms_stylesheet:a_stylesheet',
      1 => '1687375707',
      2 => 'cms_stylesheet',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64934f5e509393_41493581 (Smarty_Internal_Template $_smarty_tpl) {
?>
/* cmsms stylesheet: a_stylesheet modified: 21 June 2023 21:28:27 */
/*
 * -- BASE STYLES --
 * Most of these are inherited from Base, but I want to change a few.
 */
body {
  background-color: #111;
  color: #526066;
}

h2,
h3 {
  letter-spacing: 0.25em;
  text-transform: uppercase;
  font-weight: 600;
}

p {
  line-height: 1.6em;
}

#content .gallery{
    text-align: center;
}

.group{
    width: 300px;
}

.l-content a:link{
    color: white;
}

.l-content a:visited{
    color: white;
}

.l-content a:active{
    color: red;
}

/*
 * -- Layout Styles --
 */
 
.l-content {
  margin: 0 auto;
}

.l-box {
  padding: 0.5em 2em;
}

/*
 * -- MENU STYLES --
 * Make the menu have a very faint box-shadow.
 */
.pure-menu {
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
}

.pure-menu-link {
  padding: 0.5em 0.7em;
}

.pure-menu-item{
    height: 0%;
}
/*
 * -- BANNER --
 * The top banner with the headings. By using a combination
 * of `display: table;` and `display: table-cell;`, we can
 * vertically center the text.
 */

.banner {
  background: transparent
    url("https://24.media.tumblr.com/ccb268832580ac12951828a1c179de69/tumblr_mo2xbk8JUK1st5lhmo1_1280.jpg")
    0 0 no-repeat fixed;
  text-align: center;
  background-size: cover;
  filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='https://24.media.tumblr.com/ccb268832580ac12951828a1c179de69/tumblr_mo2xbk8JUK1st5lhmo1_1280.jpg', sizingMethod='scale');

  height: 200px;
  width: 100%;
  margin-bottom: 3em;
  display: table;
}

.banner-head {
  display: table-cell;
  vertical-align: middle;
  margin-bottom: 0;
  font-size: 2em;
  color: white;
  font-weight: 500;
  text-shadow: 0 1px 1px black;
}

#content{
    text-align: center;
}

#slides {
    text-align: center;
}

/*
 * -- PRICING TABLE WRAPPER --
 * This element wraps up all the pricing table elements
 */
.pricing-tables,
.information {
  max-width: 980px;
  margin: 0 auto;
}
.pricing-tables {
  margin-bottom: 3.125em;
  text-align: center;
}

/*
 * -- PRICING TABLE  --
 * Every pricing table has the .pricing-table class
 */
.pricing-table {
  border: 1px solid #ddd;
  margin: 0 0.5em 2em;
  padding: 0 0 3em;
}

/*
 * -- PRICING TABLE HEADER COLORS --
 * Choose a different color based on the type of pricing table.
 */
.pricing-table-free .pricing-table-header {
  background: #519251;
}

.pricing-table-biz .pricing-table-header {
  background: #2c4985;
}

/*
 * -- PRICING TABLE HEADER --
 * By default, a header is black/white, and has some styles for its <h2> name.
 */
.pricing-table-header {
  background: #111;
  color: #fff;
}
.pricing-table-header h2 {
  margin: 0;
  padding-top: 2em;
  font-size: 1em;
  font-weight: normal;
}

/*
 * -- PRICING TABLE PRICE --
 * Styles for the price and the corresponding <span>per month</span>
 */
.pricing-table-price {
  font-size: 6em;
  margin: 0.2em 0 0;
  font-weight: 100;
}
.pricing-table-price span {
  display: block;
  text-transform: uppercase;
  font-size: 0.2em;
  padding-bottom: 2em;
  font-weight: 400;
  color: rgba(255, 255, 255, 0.5);
  *color: #fff;
}

/*
 * -- PRICING TABLE LIST --
 * Each pricing table has a <ul> which is denoted by the .pricing-table-list class
 */
.pricing-table-list {
  list-style-type: none;
  margin: 0;
  padding: 0;
  text-align: center;
}

/*
 * -- PRICING TABLE LIST ELEMENTS --
 * Styles for the individual list elements within each pricing table
 */
.pricing-table-list li {
  padding: 0.8em 0;
  background: #f7f7f7;
  border-bottom: 1px solid #e7e7e7;
}

/*
 * -- PRICING TABLE BUTTON --
 * Styles for the "Choose" button at the bottom of a pricing table.
 * This inherits from Pure Button.
 */
.button-choose {
  border: 1px solid #ccc;
  background: #fff;
  color: #333;
  border-radius: 2em;
  font-weight: bold;
  position: relative;
  bottom: -1.5em;
}

.information-head {
  color: black;
  font-weight: 500;
}

.footer {
  background: #111;
  color: #888;
  text-align: center;
}
.footer a {
  color: #ddd;
}

/*
 * -- TABLET MEDIA QUERIES --
 * On tablets, we want to slightly adjust the size of the banner
 * text and add some vertical space between the various pricing tables
 */
@media (min-width: 767px) {
  .banner-head {
    font-size: 4em;
  }
  .pricing-table {
    margin-bottom: 0;
  }
}

/*
 * -- PHONE MEDIA QUERIES --
 * On phones, we want to reduce the height and font-size of the banner further
 */
@media (min-width: 480px) {
  .banner {
    height: 400px;
  }
  .banner-head {
    font-size: 3em;
  }
}
<?php }
}
