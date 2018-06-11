<?php include 'header.php';?>
    <div class="checkout_area section-padding-80">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-6">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="cart-page-heading mb-30">
                            <h5>Pendaftaran</h5>
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
                                        <label class="custom-control-label" for="customCheck1">Menyetujui segala kebijakan privasi dari kami</label>
                                    </div>
                                    <p>
                                        Secara default kamu terdata sebagai pembeli. Untuk melakukan pendaftaran sebagai penjual, hanya dilayani melalui e-mail: <b>contact@kuskus.com</b>
                                    </p>
                                </div>
                            </div>
                        <a href="#" class="btn essence-btn">Daftar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include 'footer.php';?>