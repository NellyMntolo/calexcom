$(function() {
    // Snazzy Map Style - https://snazzymaps.com/style/8097/wy
    var mapStyle = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}];

    // Create the map
    var map = new google.maps.Map($('.map-canvas')[0], {
        zoom: 17,
        zoomControl: false,
        scaleControl: false,
        scrollwheel: false,
        disableDoubleClickZoom: true,
        disableDefaultUI: true,
        styles: mapStyle,
        center: new google.maps.LatLng(25.051002, 121.5635139)
    });

    // Add a custom marker
    var markerIcon = {
        path: 'M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z',
        fillColor: '#4e97de',
        fillOpacity: 0.95,
        scale: 2,
        strokeColor: '#f8f8f8',
        strokeWeight: 2,
        anchor: new google.maps.Point(12, 24)
    };
    var marker = new google.maps.Marker({
        map: map,
        icon: markerIcon,
        position: new google.maps.LatLng(25.051002, 121.5635139)
    });

    // Set up handle bars
    // var template = Handlebars.compile($('#marker-content-template').html());

    // Set up a close delay for CSS animations
    // var info = null;
    // var closeDelayed = false;
    // var closeDelayHandler = function() {
    //     $(info.getWrapper()).removeClass('active');
    //     setTimeout(function() {
    //         closeDelayed = true;
    //         info.close();
    //     }, 300);
    // };
    // Add a Snazzy Info Window to the marker
    // info = new SnazzyInfoWindow({
    //     marker: marker,
    //     wrapperClass: 'custom-window',
    //     offset: {
    //         top: '-72px'
    //     },
    //     edgeOffset: {
    //         top: 50,
    //         right: 60,
    //         bottom: 50
    //     },
    //     border: false,
    //     closeButtonMarkup: '<button type="button" class="custom-close">&#215;</button>',
    //     content: template({
    //         title: 'Complex Styles',
    //         subtitle: 'For Snazzy Info Windows',
    //         bgImg: 'https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?dpr=1&auto=format&fit=crop&w=800&h=350&q=80&cs=tinysrgb&crop=',
    //         body: '<p><em>Photo by <a href="https://unsplash.com/@philipphenzler" target="_blank">Philipp Henzler</a>.</em></p>' +
    //               '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce imperdiet elit et nibh tincidunt elementum eget quis orci.</p>' +
    //               '<p>Ut magna est, lobortis ut mollis eu, vulputate id turpis.</p>' +
    //               '<p>Pellentesque id lacus quis orci consequat pellentesque non non purus. Mauris ligula dolor, volutpat quis blandit at, luctus luctus quam. In hac habitasse platea dictumst.</p>' +
    //               '<p>In hac habitasse platea dictumst. In hac habitasse platea dictumst.</p>' +
    //               '<p>Nam lorem dui, molestie nec elementum nec, lobortis sed lacus. Morbi nec tellus dolor. Etiam nec volutpat urna, pretium consectetur augue. In mattis, leo a ullamcorper venenatis, augue tortor cursus quam, nec mollis neque urna vitae lacus.</p>'
    //     }),
    //     callbacks: {
    //         open: function() {
    //             $(this.getWrapper()).addClass('open');
    //         },
    //         afterOpen: function() {
    //             var wrapper = $(this.getWrapper());
    //             wrapper.addClass('active');
    //             wrapper.find('.custom-close').on('click', closeDelayHandler);
    //         },
    //         beforeClose: function() {
    //             if (!closeDelayed) {
    //                 closeDelayHandler();
    //                 return false;
    //             }
    //             return true;
    //         },
    //         afterClose: function() {
    //             var wrapper = $(this.getWrapper());
    //             wrapper.find('.custom-close').off();
    //             wrapper.removeClass('open');
    //             closeDelayed = false;
    //         }
    //     }
    // });
    // Open the Snazzy Info Window
    // info.open();

});
