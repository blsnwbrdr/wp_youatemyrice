jQuery(document).ready(function() {
  "use strict";

// AFFIX NAVBAR TO TOP ON SCROLL
  
//  var affixElement = '#navbar';
//
//  jQuery(affixElement).affix({
//    offset: {
//      top: function () {
//        return (this.top = jQuery(affixElement).offset().top);
//      },
//    }
//  });
  
  var sticky = new Waypoint.Sticky({
    element: jQuery('#navbar')[0]
  });
  
  
// SCROLL REVEAL
  
    window.sr = ScrollReveal();
    sr.reveal('.sr_default', {
      duration: 1000,
    });


});
