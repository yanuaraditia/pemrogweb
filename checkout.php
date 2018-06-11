<?php include 'header.php';?>
    <div class="breadcumb_area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>PAYMENT</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="checkout_area section-padding-80">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-6">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="cart-page-heading mb-30">
                            <h5>Alamat Penagihan</h5>
                        </div>

                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="first_name">Nama Depan <span>*</span></label>
                                    <input type="text" class="form-control" id="first_name" value="" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="last_name">Nama Belakang <span>*</span></label>
                                    <input type="text" class="form-control" id="last_name" value="" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="company">Nama Organisasi</label>
                                    <input type="text" class="form-control" id="company" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="country">Provinsi <span>*</span></label>
                                    <select class="w-100" id="country">
                                        <option value="usa">D.I Yogyakarta</option>
                                        <option value="uk">DKI Jakarta</option>
                                        <option value="ger">Banten</option>
                                        <option value="fra">Bali</option>
                                        <option value="ind">Jawa Barat</option>
                                        <option value="aus">Jawa Tengah</option>
                                        <option value="bra">Jawa Timur</option>
                                        <option value="cana">Lampung</option>
                                    </select>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="street_address">Alamat <span>*</span></label>
                                    <input type="text" class="form-control mb-3" id="street_address" value="">
                                    <input type="text" class="form-control" id="street_address2" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="postcode">Kode Pos <span>*</span></label>
                                    <input type="text" class="form-control" id="postcode" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="city">Kota/Kabupaten <span>*</span></label>
                                    <input type="text" class="form-control" id="city" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="state">Kecamatan <span>*</span></label>
                                    <input type="text" class="form-control" id="state" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="phone_number">Nomor Telepon <span>*</span></label>
                                    <input type="number" class="form-control" id="phone_number" min="0" value="">
                                </div>
                                <div class="col-12 mb-4">
                                    <label for="email_address">Alamat E-mail <span>*</span></label>
                                    <input type="email" class="form-control" id="email_address" value="">
                                </div>

                                <div class="col-12">
                                    <div class="custom-control custom-checkbox d-block mb-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Kebijakan dan privasi</label>
                                    </div>
                                    <div class="custom-control custom-checkbox d-block mb-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">Buat Akun</label>
                                    </div>
                                    <div class="custom-control custom-checkbox d-block">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                                        <label class="custom-control-label" for="customCheck3">Ikuti perkembangan dari kami</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 ml-lg-auto">
                    <div class="order-details-confirmation">

                        <div class="cart-page-heading">
                            <h5>Pesanan Kamu</h5>
                            <p>Detailnya:</p>
                        </div>

                        <ul class="order-details-form mb-4">
                            <li><span>Produk</span> <span>Total</span></li>
                            <li><span>NZXT Kraken AIO (Customize)</span> <span>Rp. 2500000</span></li>
                            <li><span>Subtotal</span> <span>Rp. 2500000</span></li>
                            <li><span>Pengiriman</span> <span>Gratis (Pos Indonesia)</span></li>
                            <li><span>Total</span> <span>Rp. 2500000</span></li>
                        </ul>

                        <div id="accordion" role="tablist" class="mb-4">
                            <div class="card">
                                <div class="card-header" role="tab" id="headingOne">
                                    <h6 class="mb-0">
                                        <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><i class="fa fa-circle-o mr-3"></i>Transfer Bank</a>
                                    </h6>
                                </div>

                                <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Rekening :<br/>
                                        BRI : 111xxxxxxxxx<br/>
                                        BCA : 200011xxxxxx<br/>
                                        Mandiri : 233323344xxxx<br/>
                                        Danamon : 3484xxx9444xx<br/>
                                        <br/>
                                        Transaksi akan diproses otomatis oleh sistem
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingTwo">
                                    <h6 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="fa fa-circle-o mr-3"></i>Bayar Ditempat</a>
                                    </h6>
                                </div>
                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Bayar ditempat hanya dilayani untuk lokasi D.I Yogyakarta dan Solo. Pengiriman berafiliasi dengan Go-Jek</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingThree">
                                    <h6 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="fa fa-circle-o mr-3"></i>Kartu Kredit</a>
                                    </h6>
                                </div>
                                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Pembayaran bisa melalui kartu kredit manapun</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="btn essence-btn">Bayar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include 'footer.php';?>