/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
        if (location.hash) {
            setTimeout(function() {
                console.log('a[href='+window.location.hash+']');
                var x = -30;
                console.log(x);
                $('.nav-tabs li').removeClass('active');
                $('a[href='+window.location.hash+']').parent().addClass('active');
                $('.main-tabs.tab-pane').removeClass('in active');
                $(window.location.hash).addClass('active in'); 
                if (location.hash==="#otrosserv") {
                  $('#servicio3').addClass('active in');
                  $('a[href=#servicio3]').parent().addClass('active');
                  x=1000;
                }
                $('html, body').animate({
                    scrollTop: ($('.serviciospage').offset().top)+x
                }, 1000);
            }, 1000);
        }
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page

            $('.animar-izquierda').css('opacity',0);
            $('.animar-derecha').css('opacity',0);

$('.animar-izquierda').waypoint(function(direction) {
  jQuery(this).addClass('fadeInLeft').next();
},{offset:'75%'});
$('.animar-derecha').waypoint(function(direction) {
  jQuery(this).addClass('fadeInRight').next();
},{offset:'75%'});
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
        
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.