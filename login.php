<?php include 'header.php';?>
    <div class="checkout_area section-padding-80">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-6">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="cart-page-heading mb-30">
                            <h5>Masuk</h5>
                        </div>

                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="first_name">Nama Pengguna <span>*</span></label>
                                    <input type="text" class="form-control" id="first_name" value="painem" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="last_name">Password <span>*</span></label>
                                    <input type="password" class="form-control" id="last_name" value="tursinem" required>
                                </div>
                            </div>
                        <a href="dashboard.php" class="btn essence-btn">Masuk</a>
                        <a href="register.php" class="btn essence-btn alt">Daftar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include 'footer.php';?>