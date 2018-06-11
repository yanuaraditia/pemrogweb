<?php include 'header.php';?>
    <section class="single_product_details_area d-flex align-items-center">
        <div class="single_product_thumb clearfix">
            <div class="product_thumbnail_slides owl-carousel">
                <img src="https://sta3-nzxtcorporation.netdna-ssl.com/uploads/product_image/image/1710/large_f7fb938c59690e60.png" alt="">
                <img src="https://sta3-nzxtcorporation.netdna-ssl.com/uploads/product_image/image/1709/large_df72674e32f59df4.png" alt="">
                <img src="https://sta3-nzxtcorporation.netdna-ssl.com/uploads/product_image/image/1711/large_0695f3dec3adda85.png" alt="">
            </div>
        </div>

        <div class="single_product_desc clearfix">
            <span>AIO Watercooler - <a href="#">Andanam Computer</a></span>
            <a href="cart.html">
                <h2>NZXT Kraken X72 Custom</h2>
            </a>
            <p class="product-price"><span class="old-price">Rp.2950000</span> Rp.2800000</p>
            <p class="product-desc">The all-new Kraken Series features the most advanced controls ever to be included in an all-in-one liquid cooler. Through CAM’s software interface, users can fine-tune settings to ensure an optimal performance.</p>

            <form class="cart-form clearfix" method="post">
                <div class="select-box d-flex mt-50">
                    <select name="select" id="productSize" class="mr-5">
                        <option value="value">SOCKET: LGA1151</option>
                        <option value="value">SOCKET: LGA1155</option>
                        <option value="value">SOCKET: LGA2011</option>
                        <option value="value">SOCKET: LGA2033</option>
                        <option value="value">SOCKET: AM3</option>
                        <option value="value">SOCKET: AM4</option>
                        <option value="value">SOCKET: FM2</option>
                        <option value="value">SOCKET: TR4</option>
                    </select>
                    <select name="select" id="productColor">
                        <option value="value">Kit Color: Black</option>
                        <option value="value">Kit Color: White</option>
                    </select>
                </div>
                <div class="select-box d-flex mt-50">
                        <div class="widget color">
                            <p class="widget-title2 mb-30">Color</p>
                            <div class="widget-desc">
                                <ul class="d-flex">
                                    <li><a href="#" class="color1"></a></li>
                                    <li><a href="#" class="color2"></a></li>
                                    <li><a href="#" class="color3"></a></li>
                                    <li><a href="#" class="color4"></a></li>
                                    <li><a href="#" class="color5"></a></li>
                                    <li><a href="#" class="color6"></a></li>
                                    <li><a href="#" class="color7"></a></li>
                                    <li><a href="#" class="color8"></a></li>
                                    <li><a href="#" class="color9"></a></li>
                                    <li><a href="#" class="color10"></a></li>
                                </ul>
                            </div>
                        </div>
                </div>

                <div class="cart-fav-box d-flex align-items-center">
                    <button type="submit" name="addtocart" value="5" class="btn essence-btn">Add to cart</button>
                    <div class="product-favourite ml-4">
                        <a href="#" class="favme fa fa-heart"></a>
                    </div>
                </div>
            </form>
        </div>
    </section>
<?php include 'footer.php';?>
