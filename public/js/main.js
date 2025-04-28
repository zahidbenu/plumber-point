$(document).ready(function() {
    $('.testimonial').slick({
        dots: true,
        arrows: false,
        slideToShow: 1,
        slideToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,

    });

    function initializeMap() {
        const myLocation = { lat: 40.7128, lng: -74.0060 }; // Example: New York City
    
        const map = new google.maps.Map(document.getElementById('map'), {
          center: myLocation,
          zoom: 14,
          mapTypeId: 'satellite',  // Satellite view
          streetViewControl: true  // Enable the little man for Street View
        });
    
        // Optional: Marker
        new google.maps.Marker({
          position: myLocation,
          map: map,
          title: "You are here!"
        });
      }
    
      // Initialize the map
      initializeMap();
});