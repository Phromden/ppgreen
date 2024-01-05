<?php
 include("includer/header1.php");
  include("includer/menu1.php");

?>
        

            <div class="mobile-menu-bg">
            </div>
            <div class="bellow-header">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 menu-vertical-area">
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-container col1-layout">
                <div class="main">
                    <div class="content-breadcrums">
                        <div class="container">
                            <div class="row">
                            </div>
                        </div>
                    </div>
                    <div class="container col-main-containter">
                        <div class="row">
                            <!-- Col main -->
                            <div class="col-main col-sm-24">
                                <div class="col-wrapper-main">
                                    <div class="qs-modal modal" id="cdz-qsiframe" tabindex="-1" role="dialog" style="display:none;">
                                        <div class="ajax-load-wrapper" style="display: none;">
                                            <div class="ajax-load-button">
                                                <div class="ajax-loader">Loading...</div>
                                            </div>
                                        </div>
                                        <div class="modal-dialog modal-lg animated zoomIn" role="document" style="display:none;"></div>
                                    </div>
                                    <div id="map-popup" class="map-popup" style="display:none;">
                                        <a href="#" class="map-popup-close" id="map-popup-close">x</a>
                                        <div class="map-popup-arrow"></div>
                                        <div class="map-popup-heading">
                                            <h2 id="map-popup-heading"></h2></div>
                                        <div class="map-popup-content" id="map-popup-content">
                                            <div class="map-popup-checkout">
                                                <form action="#" method="POST" id="product_addtocart_form_from_popup">
                                                    <input type="hidden" name="product" class="product_id" value="" id="map-popup-product-id" />
                                                    <div class="additional-addtocart-box">
                                                    </div>
                                                    <button type="button" title="Add to Cart" class="button btn-cart" id="map-popup-button"><span><span>Add to Cart</span></span>
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="map-popup-msrp" id="map-popup-msrp-box"><strong>Price:</strong> <span style="text-decoration:line-through;" id="map-popup-msrp"></span></div>
                                            <div class="map-popup-price" id="map-popup-price-box"><strong>Actual Price:</strong> <span id="map-popup-price"></span></div>
                                            <script type="text/javascript">
                                                //<![CDATA[
                                                document.observe("dom:loaded", Catalog.Map.bindProductForm);
                                                //]]>
                                            </script>
                                        </div>
                                        <div class="map-popup-text" id="map-popup-text">Our price is lower than the manufacturer's &quot;minimum advertised price.&quot; As a result, we cannot show you the price in catalog or the product page.
                                            <br />
                                            <br /> You have no obligation to purchase the product once you know the price. You can simply remove the item from your cart.</div>
                                        <div class="map-popup-text" id="map-popup-text-what-this">Our price is lower than the manufacturer's &quot;minimum advertised price.&quot; As a result, we cannot show you the price in catalog or the product page.
                                            <br />
                                            <br /> You have no obligation to purchase the product once you know the price. You can simply remove the item from your cart.</div>
                                    </div>
                                    <div class="page-title">
                                        <h1>Forgot Your Password?</h1>
                                    </div>
                                    <form action="http://magento1.codazon.com/fastest/customer/account/forgotpasswordpost/" method="post" id="form-validate">
                                        <div class="fieldset">
                                            <h2 class="legend">Retrieve your password here</h2>
                                            <p>Please enter your email address below. You will receive a link to reset your password.</p>
                                            <ul class="form-list">
                                                <li>
                                                    <div class="field">
                                                        <label for="email_address" class="required"><em>*</em>Email Address</label>
                                                        <div class="input-box">
                                                            <input type="text" name="email" alt="email" id="email_address" class="input-text required-entry validate-email" value="" />
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="buttons-set">
                                            <p class="required">* Required Fields</p>
                                            <p class="back-link"><a href="../login/index.html"><small>&laquo; </small>Back to Login</a></p>
                                            <button type="submit" title="Submit" class="button"><span><span>Submit</span></span>
                                            </button>
                                        </div>
                                    </form>
                                    <script type="text/javascript">
                                        //<![CDATA[
                                        var dataForm = new VarienForm('form-validate', true);
                                        //]]>
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade cdz-popup-wrapper" id="cdz-popup-content" role="dialog">
                <div class="modal-popup _show">
                    <div class="modal-dialog modal-inner-wrap">
                        <header class="modal-header">
                            <button type="button" class="action-close close" data-dismiss="modal"></button>
                        </header>

                        <div class="modal-content">
                            <div class="cdz-popup-content">
                                <div class="block-popup-content">
                                    <div class="widget widget-static-block">
                                        <div class="cdz-popup-newsletter">
                                            <div class="cdz-popup-newsletter-left">
                                                <div class="popup-banner">
                                                    <div class="banner">
                                                        <a href="#"><img class="img-responsive" src="../../../media/wysiwyg/codazon/drugpharmacy/home/banner-newsletter.jpg" alt="Banner 01" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cdz-popup-newsletter-right">
                                                <div class="popup-title">
                                                    <h3 class="text-uppercase"><span>Sign up Newsletter</span></h3>
                                                </div>
                                                <div class="popup-content">
                                                    <div class="popup-content-ads">
                                                        <p class="popup-content-title h3">Join YourStore's squad for 20% off</p>
                                                        <p class="popup-content-desc">and get all the latest news, trends and offs and offers straight to your inbox. Or get 15% off using code SQUAD15</p>
                                                        <div class="popup-content-newsletter">
                                                            <div class="block block-subscribe">
                                                                <div class="block-title">
                                                                    <strong><span>Newsletter</span></strong>
                                                                </div>
                                                                <form action="http://magento1.codazon.com/fastest/newsletter/subscriber/new/" method="post" id="newsletter-validate-detail_popup">
                                                                    <div class="block-content">
                                                                        <div class="form-subscribe-header">
                                                                            <label for="newsletter">Sign Up for Our Newsletter:</label>
                                                                        </div>
                                                                        <div class="input-box">
                                                                            <input type="text" name="email" id="newsletter_popup" title="Sign up for our newsletter" class="input-text required-entry validate-email" placeholder="Sign Up for Our Newsletter" />
                                                                        </div>
                                                                        <div class="actions">
                                                                            <button type="submit" title="Subscribe" class="button"><span><span>Subscribe</span></span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                                <script type="text/javascript">
                                                                    //<![CDATA[
                                                                    var newsletterSubscriberFormDetail_popup = new VarienForm('newsletter-validate-detail_popup');
                                                                    //]]>
                                                                </script>
                                                            </div>
                                                        </div>
                                                        <p class="popup-content-small">1 UK only; 2. Offar expiras 23:59(GMT) 10/02/16; 3.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                (function($) {
                    $(document).ready(function(e) {
                        var now = new Date();
                        var time = now.getTime();
                        var expireTime = time + 3600000;
                        now.setTime(expireTime);
                        if (!Mage.Cookies.get("cdz_popup")) {
                            document.cookie = 'cdz_popup=true; expires=' + now.toGMTString();
                            $('#cdz-popup-content').modal('show');
                        }
                    });
                })(jQuery);
            </script>
 <?php include("includer/footer.php");?>