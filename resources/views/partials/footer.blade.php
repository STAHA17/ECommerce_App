<!-- resources/views/partials/footer.blade.php -->
<footer class="footer text-center text-lg-start mt-5">
    <div class="container p-4">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Contact Us</h5>
                <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-envelope"></i> Email: abc@gmail.com</li>
                    <li><i class="fas fa-phone"></i> Phone: +92 333 - *******</li>
                    <li><i class="fas fa-map-marker-alt"></i> Address: 123 Main St, Islamabad, Pakistan</li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Follow Us</h5>
                <ul class="list-unstyled">
                    <li><a href="https://www.facebook.com/"><i class="fab fa-facebook"></i> Facebook</a></li>
                    <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i> Instagram</a></li>
                    <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i> LinkedIn</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">Location</h5>
                <p>123 Main St, City/Town, State</p>
                <div id="map-footer" style="height: 200px;"></div>
            </div>
        </div>
    </div>
    <div class="text-center p-3 bg-light">© 2024 E-Commerce Website</div>

    <!-- Google Maps API Script -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
    <script>
        function initMap() {
            // Default location (New York City)
            var defaultLocation = { lat: 40.712776, lng: -74.005974 };
            var map = new google.maps.Map(document.getElementById('map-footer'), {
                zoom: 14,
                center: defaultLocation
            });
            var marker = new google.maps.Marker({
                position: defaultLocation,
                map: map
            });

            // Try HTML5 geolocation.
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var userLocation = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                    map.setCenter(userLocation);
                    marker.setPosition(userLocation);
                }, function() {
                    handleLocationError(true, map.getCenter());
                });
            } else {
                // Browser doesn't support Geolocation
                handleLocationError(false, map.getCenter());
            }
        }

        function handleLocationError(browserHasGeolocation, pos) {
            var infoWindow = new google.maps.InfoWindow({ map: map });
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                'Error: The Geolocation service failed.' :
                'Error: Your browser doesn\'t support geolocation.');
        }
    </script>
</footer>
