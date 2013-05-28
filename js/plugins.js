window.log = function f(){ log.history = log.history || []; log.history.push(arguments); if(this.console) { var args = arguments, newarr; args.callee = args.callee.caller; newarr = [].slice.call(args); if (typeof console.log === 'object') log.apply.call(console.log, console, newarr); else console.log.apply(console, newarr);}};

(function(a){function b(){}for(var c="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,markTimeline,profile,profileEnd,time,timeEnd,trace,warn".split(","),d;!!(d=c.pop());){a[d]=a[d]||b;}})
(function(){try{console.log();return window.console;}catch(a){return (window.console={});}}());

// Getting and setting cookies
function cGet(name) {
  var b,
      cookies = document.cookie.split("; "),
      num = cookies.length; 
    do { 
      b = cookies[num - 1].split("="); 
      if (b[0] === name) { 
        return b[1] || ''; 
      } 
    } while(--num); 
    return null;
}

var sd_now = new Date().getTime();

function cSet(name, v, exp) { 
  document.cookie = name + "=" + v + "; path=/; domain=.scottdonaldson.net;" + ( (exp) ? "expires=" + new Date(sd_now + (exp*864e5)).toGMTString() : '');
}

/*!
* FitVids 1.0
*
* Copyright 2011, Chris Coyier - http://css-tricks.com + Dave Rupert - http://daverupert.com
* Credit to Thierry Koblentz - http://www.alistapart.com/articles/creating-intrinsic-ratios-for-video/
* Released under the WTFPL license - http://sam.zoy.org/wtfpl/
*
* Date: Thu Sept 01 18:00:00 2011 -0500
*/
(function( $ ){
  $.fn.fitVids = function( options ) {
    var settings = {
      customSelector: null
    }
    var div = document.createElement('div'),
        ref = document.getElementsByTagName('base')[0] || document.getElementsByTagName('script')[0];   
   div.className = 'fit-vids-style';
    div.innerHTML = '&shy;<style> \
.fluid-width-video-wrapper { \
width: 100%; \
position: relative; \
padding: 0; \
} \
\
.fluid-width-video-wrapper iframe, \
.fluid-width-video-wrapper object, \
.fluid-width-video-wrapper embed { \
position: absolute; \
top: 0; \
left: 0; \
width: 100%; \
height: 100%; \
} \
</style>';               
    ref.parentNode.insertBefore(div,ref);
    if ( options ) { $.extend( settings, options ); }
    return this.each(function(){
      var selectors = [
        "iframe[src^='http://player.vimeo.com']",
        "iframe[src^='http://www.youtube.com']",
        "iframe[src^='http://www.kickstarter.com']",
        "object",
        "embed"
      ];
      if (settings.customSelector) { selectors.push(settings.customSelector); }
	  var $allVideos = $(this).find(selectors.join(','));
	  $allVideos.each(function(){
        var $this = $(this);
        if (this.tagName.toLowerCase() == 'embed' && $this.parent('object').length || $this.parent('.fluid-width-video-wrapper').length) { return; }
        var height = this.tagName.toLowerCase() == 'object' ? $this.attr('height') : $this.height(),
            aspectRatio = height / $this.width();
        $this.wrap('<div class="fluid-width-video-wrapper"></div>').parent('.fluid-width-video-wrapper').css('padding-top', (aspectRatio * 100)+"%");
        $this.removeAttr('height').removeAttr('width');
      });
    });
  }
})( jQuery );

/*global jQuery */
/*!
* FitText.js 1.0
*
* Copyright 2011, Dave Rupert http://daverupert.com
* Released under the WTFPL license
* http://sam.zoy.org/wtfpl/
*
* Date: Thu May 05 14:23:00 2011 -0600
*/
(function( $ ){
$.fn.fitText = function( kompressor, options ) {
var settings = {
        'minFontSize' : Number.NEGATIVE_INFINITY,
        'maxFontSize' : Number.POSITIVE_INFINITY
      };
return this.each(function(){
var $this = $(this); // store the object
var compressor = kompressor || 1; // set the compressor
        if ( options ) {
          $.extend( settings, options );
        }        
var resizer = function () {
$this.css('font-size', Math.max(Math.min($this.width() / (compressor*10), parseFloat(settings.maxFontSize)), parseFloat(settings.minFontSize)));
};
resizer();
$(window).resize(resizer);      
});
};
})( jQuery );

// Icomoon in IE7
if ($('html').hasClass('lt-ie8')) {
  window.onload = function() {
    function addIcon(el, entity) {
      var html = el.innerHTML;
      el.innerHTML = '<span style="font-family: \'icomoon\'">' + entity + '</span>' + html;
    }
    var icons = {
        'icon-facebook' : '&#xe000;',
        'icon-twitter' : '&#xe001;',
        'icon-google-plus' : '&#xe002;',
        'icon-github' : '&#xe003;',
        'icon-linkedin' : '&#xe004;',
        'icon-lastfm' : '&#xe005;',
        'icon-envelope' : '&#xe006;'
      },
      els = document.getElementsByTagName('*'),
      i, attr, html, c, el;
    for (i = 0; i < els.length; i += 1) {
      el = els[i];
      attr = el.getAttribute('data-icon');
      if (attr) {
        addIcon(el, attr);
      }
      c = el.className;
      c = c.match(/icon-[^\s'"]+/);
      if (c && icons[c[0]]) {
        addIcon(el, icons[c[0]]);
      }
    }
  };
}