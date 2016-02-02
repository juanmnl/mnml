
// jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});

// Google maps goodness
jQuery(window).load(function() {
  "use strict";

  if (document.getElementById('map-canvas')) {

    var gLatitude = -0.210279;
    var gLongitude = -78.485529;
    var gZoom = 17;
    var gTitle = 'MunchiesUIO';
    var gDescription = 'Valladolid 152 y Pontevedra (esquina)';

    var latlng = new google.maps.LatLng(gLatitude, gLongitude);

    var settings = {
      zoom: parseInt(gZoom),
      center: latlng,
      scrollwheel: false,
      draggable: false,
      mapTypeControl: true,
      mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
      navigationControl: true,
      navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var map = new google.maps.Map(document.getElementById("map-canvas"), settings);

    var companyLogo = new google.maps.MarkerImage('img/logo-marker.png',
                                                  new google.maps.Size(60,120),
                                                  new google.maps.Point(0,0),
                                                  new google.maps.Point(30,100));

    var companyMarker = new google.maps.Marker({
      position: latlng,
           map: map,
          icon: companyLogo,
         title: gTitle
    });

    var contentString = '<div id="content-map">'+
        '<h3>' + gTitle + '</h3>'+
        '<p>' + gDescription + '</p>'+
        '</div>';

    var infowindow = new google.maps.InfoWindow({
      content: contentString
    });

    google.maps.event.addListener(companyMarker, 'click', function() {
      infowindow.open(map,companyMarker);
    });

  }

});
