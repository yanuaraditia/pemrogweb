<?php include 'header.php';?>
    <div class="contact-area d-flex align-items-center">

        <div class="google-map">
            <div id="googleMap"></div>
        </div>
        <script>
        function myMap() {
        var mapProp= {
            center:new google.maps.LatLng(51.508742,-0.120850),
            zoom:5,
        };
        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
        }
        </script>

        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

        <div class="contact-info">
            <h2>Kuskus Group Ltd.</h2>
            <p>Bertujuan menyediakan tempat bagi para hardware enthusiast, melalui kuskus kami yakin apa yang mereka inginkan dapat dengan mudah ada di sini.</p>

            <div class="contact-address mt-50">
                <p><span>alamat:</span> Jl. Nusa Indah, Condongcatur, Sleman, Yogyakarta</p>
                <p><span>telepon:</span> +62 82243 3740 43</p>
                <p><a href="mailto:contact@kuskus.com">contact@kuskus.com</a></p>
                <p><span>Temlate : Essence Based</span>
            </div>
        </div>

    </div>

<?php include 'footer.php';?>
