/*
Theme Name: Leon
Description: Responsive Coming Soon Template
Author: Erilisdesign
Theme URI: https://preview.erilisdesign.com/html/leon
Author URI: https://themeforest.net/user/erilisdesign
Version: 2.0.0
License: https://themeforest.net/licenses/standard
*/

/*------------------------------------------------------------------
[Table of contents]

1. Preloader
2. Backgrounds
3. Navigation
4. Lightbox
5. Slider
6. Countdown
7. Mailchimp
8. Contact Form
-------------------------------------------------------------------*/

/*------------------------------------------------------------------
This is a premium product available exclusively on Themeforest.
You can see it at this address http://themeforest.net/user/erilisdesign/portfolio
This file is minified/crypted only for the "live preview", you will find an expanded, commented and accurate file in your download pack.
Thanks!
-------------------------------------------------------------------*/
!function(e){"use strict";var t=e("body"),o=e("a.scrollto"),a=(e(".home-block"),e(".content-block")),n=e(".close-content-block"),i=e(".global-overlay"),s=e("#preloader"),l=1200,r=500;function c(){return Math.max(e(window).width(),window.innerWidth)}function d(){var o=e(".bg-image-holder");if(o.length>0&&o.each(function(){var t=e(this).children("img").attr("src");e(this).css("background-image","url("+t+")").children("img").hide()}),i.hasClass("slideshow-background")&&i.vegas({preload:!0,timer:!1,delay:5e3,transition:"fade",transitionDuration:1e3,slides:[{src:"demo/images/image-15.jpg"},{src:"demo/images/image-16.jpg"},{src:"demo/images/image-17.jpg"},{src:"demo/images/image-4.jpg"}]}),i.hasClass("slideshow-zoom-background")&&i.vegas({preload:!0,timer:!1,delay:7e3,transition:"zoomOut",transitionDuration:4e3,slides:[{src:"demo/images/image-4.jpg"},{src:"demo/images/image-16.jpg"},{src:"demo/images/image-17.jpg"},{src:"demo/images/image-15.jpg"}]}),i.hasClass("slideshow-video-background")&&i.vegas({preload:!0,timer:!1,delay:5e3,transition:"fade",transitionDuration:1e3,slides:[{src:"demo/images/image-15.jpg"},{src:"demo/video/marine.jpg",video:{src:["demo/video/marine.mp4","demo/video/marine.webm","demo/video/marine.ogv"],loop:!1,mute:!0}},{src:"demo/images/image-16.jpg"},{src:"demo/images/image-17.jpg"}]}),i.hasClass("kenburns-background")){i.vegas({preload:!0,transition:"swirlLeft",transitionDuration:4e3,timer:!1,delay:1e4,slides:[{src:"demo/images/image-15.jpg",valign:"center"},{src:"demo/images/image-14.jpg",valign:"center"},{src:"demo/images/image-17.jpg",valign:"center"}],walk:function(e){}})}if(e("#youtube-background").length>0){var a=[{videoURL:"iXkJmJa4NvE",showControls:!1,containment:".overlay-video",autoPlay:!0,mute:!0,startAt:0,opacity:1,loop:!0,showYTLogo:!1,realfullscreen:!0,addRaster:!0}];e(".player").YTPlaylist(a,!0)}if(e("#youtube-multiple-background").length>0){a=[{videoURL:"CG20eBusRg0",showControls:!1,containment:".overlay-video",autoPlay:!0,mute:!0,startAt:0,opacity:1,loop:!1,showYTLogo:!1,realfullscreen:!0,addRaster:!0},{videoURL:"iXkJmJa4NvE",showControls:!1,containment:".overlay-video",autoPlay:!0,mute:!0,startAt:0,opacity:1,loop:!1,showYTLogo:!1,realfullscreen:!0,addRaster:!0}];e(".player").YTPlaylist(a,!0)}t.hasClass("mobile")&&e(".video-wrapper").css("display","none"),e("[data-gradient-bg]").each(function(t,o){var a=e(this),n="granim-"+t,i=(i=(i=a.attr("data-gradient-bg")).replace(" ","")).replace(/'/g,'"');i=JSON.parse(i),a.prepend('<canvas id="'+n+'"></canvas>');new Granim({element:"#"+n,name:"basic-gradient",direction:"left-right",opacity:[1,1],isPausedWhenNotInView:!0,states:{"default-state":{gradients:i}}})})}function u(){t.removeClass("has-content-block-open"),o.off("click"),o.on("click",function(o){if(""!==this.hash){o.preventDefault();var n=this.hash;if(c()>=1200){if(!e(n).parents(".content-block").length>0)return;t.hasClass("has-content-block-open")||t.hasClass("layout-alternative")||t.addClass("has-content-block-open");var i=document.querySelector(n).offsetTop;a.find(".content-block-inner").animate({scrollTop:i},800)}else e(n).length>0&&e(window).scrollTop(e(n).offset().top)}}),n.off("click"),n.on("click",function(e){e.preventDefault(),t.hasClass("layout-alternative")||c()>=1200&&(t.removeClass("has-content-block-open"),setTimeout(function(){a.find(".content-block-inner").scrollTop(0)},500))})}function m(){if(!e().featherlight)return console.log("Featherlight: featherlight not defined."),!0;e.extend(e.featherlight.defaults,{closeIcon:'<i class="fas fa-times"></i>'}),e.extend(e.featherlightGallery.defaults,{previousIcon:'<i class="fas fa-chevron-left"></i>',nextIcon:'<i class="fas fa-chevron-right"></i>'}),e.featherlight.prototype.afterOpen=function(){t.addClass("featherlight-open")},e.featherlight.prototype.afterContent=function(){var t=this.$currentTarget.attr("data-title"),o=this.$currentTarget.attr("data-text");if(t||o){this.$instance.find(".caption").remove();t=t?'<h4 class="title-gallery">'+t+"</h4>":"",o=o?'<p class="text-gallery">'+o+"</p>":"";e('<div class="caption">').html(t+o).appendTo(this.$instance.find(".featherlight-content"))}},e.featherlight.prototype.afterClose=function(){t.removeClass("featherlight-open")},e("a.open-popup-link").featherlight({targetAttr:"href",variant:"featherlight-popup",beforeOpen:function(){g(),p()}})}function f(){var t=e(".slider");t.length>0&&(c()>=992&&Math.max(e(window).height(),window.innerHeight)>=768?t.hasClass("slick-initialized")||t.slick({slidesToShow:1,infinite:!0,nextArrow:'<button type="button" class="slick-next"><i class="fas fa-angle-right"></i></button>',prevArrow:'<button type="button" class="slick-prev"><i class="fas fa-angle-left"></i></button>'}):t.hasClass("slick-initialized")&&t.slick("unslick"))}function h(){var t=e(".countdown[data-countdown]");t.length>0&&t.each(function(){var t=e(this),o=t.data("countdown");t.countdown(o,function(e){t.html(e.strftime('<div class="countdown-container row"><div class="countdown-item col-6 col-sm"><div class="number">%-D</div><span>Day%!d</span></div><div class="countdown-item col-6 col-sm"><div class="number">%H</div><span>Hours</span></div><div class="countdown-item col-6 col-sm"><div class="number">%M</div><span>Minutes</span></div><div class="countdown-item col-6 col-sm"><div class="number">%S</div><span>Seconds</span></div></div>'))})})}function g(){var t=e(".subscribe-form");if(t.length<1)return!0;t.each(function(){var t=e(this),o=t.find(".subscribe-form-result");t.find("form").validate({submitHandler:function(t){o.fadeOut(500),e(t).ajaxSubmit({target:o,dataType:"json",resetForm:!0,success:function(a){alert("ok2"),o.html(a.message).fadeIn(500),"error"!=a.alert&&(e(t).clearForm(),setTimeout(function(){o.fadeOut(500)},5e3))}})}})})}function p(){var t=e(".contact-form");if(t.length<1)return!0;t.each(function(){var t=e(this),o=t.find(".contact-form-result");t.find("form").validate({submitHandler:function(t){o.fadeOut(500),e(t).ajaxSubmit({target:o,dataType:"json",success:function(a){o.html(a.message).fadeIn(500),"error"!=a.alert&&(e(t).clearForm(),setTimeout(function(){o.fadeOut(500)},5e3))}})}})})}function v(){if(c()>=1200){var o=e(".content-block-inner");e(document).on("mouseenter",".site-header,.home-block",function(){(t.hasClass("has-content-block-open")||t.hasClass("layout-alternative"))&&e(document).on("mousewheel DOMMouseScroll",function(e){e.preventDefault&&e.preventDefault(),e.stopPropagation();var t=e.originalEvent.wheelDelta||-e.originalEvent.detail;t>0&&t<100&&(t=100),t<0&&t>-100&&(t=-100),o.scrollTop(o.scrollTop()-t)})}),e(document).on("mouseleave",".site-header,.home-block",function(){e(document).off("mousewheel DOMMouseScroll")}),e(document).on("keydown",function(e){(t.hasClass("has-content-block-open")||t.hasClass("layout-alternative"))&&(40==e.which?o.scrollTop(o.scrollTop()- -20):38==e.which&&o.scrollTop(o.scrollTop()-20))})}else e(document).off("mouseenter mouseleave",".site-header,.home-block")}v(),jQuery(document).ready(function(e){e("html, body").scrollTop(0),d(),u(),m(),f(),h(),g(),p()}),e(window).on("load",function(){e(window).scroll(),s.delay(l).fadeOut(r)}),e(window).on("resize",function(){u(),f(),v()})}(jQuery);