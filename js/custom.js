var resizeId;var lastModal;var customizerEnabled=1;var defaultColor;var originalNavigationCode;var navigationIsTouchingBrand;var responsiveNavigationTriggered=false;$(document).ready(function(c){originalNavigationCode=c(".primary-nav").html();if(c("body").hasClass("navigation-fixed")){fixedNavigation(true)}else{fixedNavigation(false)}if(customizerEnabled==1){c.getScript("assets/misc/customizer.js",function(e,g,f){loadColor("load_default_color")})}if(c(".tse-scrollable").length){c(".tse-scrollable").TrackpadScrollEmulator()}if(c(".date-picker").length){c(".date-picker").datepicker()}heroSectionHeight();c("select").on("rendered.bs.select",function(){c("head").append(c('<link rel="stylesheet" type="text/css">').attr("href","assets/css/bootstrap-select.min.css"));if(!viewport.is("xs")){c(".search-form.vertical").css("top",(c(".hero-section").height()/2)-(c(".search-form .wrapper").height()/2))}trackpadScroll("initialize")});if(!viewport.is("xs")){c(".search-form.vertical").css("top",(c(".hero-section").height()/2)-(c(".search-form .wrapper").height()/2));trackpadScroll("initialize")}if(c(".social-share").length){socialShare()}if(c(".count-down").length){var a=new Date();c(".count-down").countdown({until:new Date(a.getFullYear(),a.getMonth(),a.getDate()+2),padZeroes:true,format:"HMS"})}if(c("input[type=checkbox]").length>0){c("input").iCheck()}if(c("input[type=radio]").length>0){c("input").iCheck()}c('.main-nav a[href^="#"], a[href^="#"].scroll').on("click",function(h){h.preventDefault();if(c(this).hasClass("to-top")){c("html, body").stop().animate({scrollTop:0},2000,"swing")}else{var g=this.hash,f=c(g);c("html, body").stop().animate({scrollTop:f.offset().top},2000,"swing",function(){window.location.hash=g})}});c("[data-modal-external-file], .quick-detail").live("click",function(g){g.preventDefault();var h,f;if(c(this).closest(".item").attr("data-id")){h=c(this).closest(".item").attr("data-id");f="modal_item.php"}else{h=c(this).attr("data-target");f=c(this).attr("data-modal-external-file")}if(c(this).attr("data-close-modal")=="true"){lastModal.modal("hide");setTimeout(function(){openModal(h,f)},400)}else{openModal(h,f)}});c(document).on("show.bs.modal",".modal",function(){var e=1040+(10*c(".modal:visible").length);c(this).css("z-index",e);setTimeout(function(){c(".modal-backdrop").not(".modal-stack").css("z-index",e-1).addClass("modal-stack")},0)});c(".item.item-row").each(function(){var g="map"+c(this).attr("data-id");var f;c(this).find(".map").attr("id",g);var e=c(this).attr("data-latitude");var h=c(this).attr("data-longitude");if(c(this).attr("data-address")){f=c(this).attr("data-address")}else{f=false}simpleMap(e,h,g,false,f)});c(document).on("click",function(f){if(f.target.className=="controls-more"){c(".controls-more.show").removeClass("show");c(f.target).addClass("show")}else{c(".controls-more.show").each(function(){c(this).removeClass("show")})}});c(".nav-btn").on("click",function(){c(this).toggleClass("active");c(".primary-nav").toggleClass("show")});c(".duplicate").live("click",function(h){h.preventDefault();var g=c(this).attr("href");var f=c(g)[0].parentElement;c(f).append(c(g)[0].outerHTML)});if(c("input[type=file].with-preview").length){c("input.file-upload-input").MultiFile({list:".file-upload-previews"})}if(c(".ui-slider").length>0){c(".ui-slider").each(function(){if(c("body").hasClass("rtl")){var i="rtl"}else{i="ltr"}var h;if(c(this).attr("data-step")){h=parseInt(c(this).attr("data-step"))}else{h=10}var j=c(this).attr("id");var f=c("#"+j);var g=parseInt(c(this).attr("data-value-min"));var e=parseInt(c(this).attr("data-value-max"));c(this).noUiSlider({start:[g,e],connect:true,direction:i,range:{min:g,max:e},step:h});if(c(this).attr("data-value-type")=="price"){if(c(this).attr("data-currency-placement")=="before"){c(this).Link("lower").to(c(this).children(".values").children(".value-min"),null,wNumb({prefix:c(this).attr("data-currency"),decimals:0,thousand:"."}));c(this).Link("upper").to(c(this).children(".values").children(".value-max"),null,wNumb({prefix:c(this).attr("data-currency"),decimals:0,thousand:"."}))}else{if(c(this).attr("data-currency-placement")=="after"){c(this).Link("lower").to(c(this).children(".values").children(".value-min"),null,wNumb({postfix:c(this).attr("data-currency"),decimals:0,thousand:" "}));c(this).Link("upper").to(c(this).children(".values").children(".value-max"),null,wNumb({postfix:c(this).attr("data-currency"),decimals:0,thousand:" "}))}}}else{c(this).Link("lower").to(c(this).children(".values").children(".value-min"),null,wNumb({decimals:0}));c(this).Link("upper").to(c(this).children(".values").children(".value-max"),null,wNumb({decimals:0}))}})}if(c(".calendar").length){var a=new Date();var d=a.getMonth();for(var b=1;b<=12;b++){c(".calendar-wrapper").append('<div id="month_'+b+'" class="month"></div>');c("#month_"+b).zabuto_calendar({ajax:{url:"assets/php/calendar.php",modal:true},action:function(){var e=c("#"+this.id).data("date");c("#modal-date").val(e);return checkDate(this.id)},language:"en",month:b,show_previous:false,show_next:false,today:true,nav_icon:{prev:'<i class="arrow_left"></i>',next:'<i class="arrow_right"></i>'}})}c(".calendar-wrapper").owlCarousel({items:2,nav:true,autoHeight:true,navText:[],startPosition:d})}c(".form-email .btn[type='submit']").on("click",function(){var e=c(this);var f=c(this).closest("form");e.prepend("<div class='status'></div>");f.validate({submitHandler:function(){c.post("assets/external/email.php",f.serialize(),function(g){e.find(".status").append(g);f.addClass("submitted")});return false}})});equalHeight(".container");ratingPassive("body");bgTransfer();responsiveNavigation()});$(window).load(function(){initializeOwl()});$(window).resize(function(){clearTimeout(resizeId);resizeId=setTimeout(doneResizing,250)});function heroSectionHeight(){if($(".hero-section").length>0){if(viewport.is("xs")){$(".map-wrapper").height($(window).height()-25);$(".hero-section").height($(".hero-section .map-wrapper").height()+$(".hero-section .search-form").height()+$(".hero-section .results").height()+40);$(".has-background").css("min-height",$(window).height()-$("#page-header").height()+"px")}else{if($("body").hasClass("navigation-fixed")){$(".hero-section.full-screen").height($(window).height()-$("#page-header nav").height());$(".hero-section .map-wrapper").css("height","100%")}else{$(".hero-section.full-screen").height($(window).height()-$("#page-header").height());$(".hero-section .map-wrapper").css("height","100%");if($(".map-wrapper").length>0){reloadMap()}}}if(!viewport.is("xs")){$(".search-form.vertical").css("top",($(".hero-section").height()/2)-($(".search-form .wrapper").height()/2))}}}function openModal(a,c){$("body").append('<div class="modal modal-external fade" id="'+a+'" tabindex="-1" role="dialog" aria-labelledby="'+a+'"><i class="loading-icon fa fa-circle-o-notch fa-spin"></i></div>');$("#"+a+".modal").on("show.bs.modal",function(){var d=$(this);lastModal=d;$.ajax({url:"assets/external/"+c,method:"POST",data:{id:a},success:function(f){d.append(f);$("head").append($('<link rel="stylesheet" type="text/css">').attr("href","assets/css/bootstrap-select.min.css"));$(".selectpicker").selectpicker();if($("input[type=file]").length){$.getScript("assets/js/jQuery.MultiFile.min.js",function(g,i,h){$("input.file-upload-input").MultiFile({list:".file-upload-previews"})})}d.find(".gallery").addClass("owl-carousel");ratingPassive(".modal");var e=d.find(".gallery img:first")[0];if(e){$(e).load(function(){b(d)})}else{b(d)}socialShare();d.on("hidden.bs.modal",function(){$(lastClickedMarker).removeClass("active");$(".pac-container").remove();d.remove()})},error:function(f){console.log(f)}})});$("#"+a+".modal").modal("show");function b(d){setTimeout(function(){if(d.find(".map").length){if(d.find(".modal-dialog").attr("data-address")){simpleMap(0,0,"map-modal",d.find(".modal-dialog").attr("data-marker-drag"),d.find(".modal-dialog").attr("data-address"))}else{simpleMap(d.find(".modal-dialog").attr("data-latitude"),d.find(".modal-dialog").attr("data-longitude"),"map-modal",d.find(".modal-dialog").attr("data-marker-drag"))}}initializeOwl();initializeFitVids();initializeReadMore();d.addClass("show")},200)}}function bgTransfer(){if(viewport.is("xs")){}$(".bg-transfer").each(function(){$(this).css("background-image","url("+$(this).find("img").attr("src")+")")})}function ratingPassive(a){$(a).find(".rating-passive").each(function(){for(var b=0;b<5;b++){if(b<$(this).attr("data-rating")){$(this).find(".stars").append("<figure class='active fa fa-star'></figure>")}else{$(this).find(".stars").append("<figure class='fa fa-star'></figure>")}}})}function socialShare(){var a=1;if(a==1){$("head").append($('<link rel="stylesheet" type="text/css">').attr("href","assets/css/jssocials.css"));$("head").append($('<link rel="stylesheet" type="text/css">').attr("href","assets/css/jssocials-theme-minima.css"));$.getScript("assets/js/jssocials.min.js",function(b,d,c){$(".social-share").jsSocials({shares:["twitter","facebook","googleplus","linkedin","pinterest"]})})}}function initializeFitVids(){if($(".video").length>0){$(".video").fitVids()}}function initializeOwl(){if($(".owl-carousel").length){$(".owl-carousel").each(function(){var g=parseInt($(this).attr("data-owl-items"),10);if(!g){g=1}var a=parseInt($(this).attr("data-owl-nav"),2);if(!a){a=0}var h=parseInt($(this).attr("data-owl-dots"),2);if(!h){h=0}var b=parseInt($(this).attr("data-owl-center"),2);if(!b){b=0}var f=parseInt($(this).attr("data-owl-loop"),2);if(!f){f=0}var d=parseInt($(this).attr("data-owl-margin"),2);if(!d){d=0}var j=parseInt($(this).attr("data-owl-auto-width"),2);if(!j){j=0}var k=$(this).attr("data-owl-nav-container");if(!k){k=0}var c=$(this).attr("data-owl-autoplay");if(!c){c=0}var e=$(this).attr("data-owl-fadeout");if(!e){e=0}else{e="fadeOut"}if($("body").hasClass("rtl")){var i=true}else{i=false}$(this).owlCarousel({navContainer:k,animateOut:e,autoplaySpeed:2000,autoplay:c,autoheight:1,center:b,loop:f,margin:d,autoWidth:j,items:g,nav:a,dots:h,autoHeight:true,rtl:i,navText:[]});if($(this).find(".owl-item").length==1){$(this).find(".owl-nav").css({opacity:0,"pointer-events":"none"})}})}}function trackpadScroll(a){if(a=="initialize"){if($(".results-wrapper").find("form").length){if(!viewport.is("xs")){$(".results-wrapper .results").height($(".results-wrapper").height()-$(".results-wrapper .form")[0].clientHeight)}}}else{if(a=="recalculate"){setTimeout(function(){if($(".tse-scrollable").length){$(".tse-scrollable").TrackpadScrollEmulator("recalculate")}},1000)}}}function doneResizing(){var b=$(".container");for(var a=0;a<b.length;a++){equalHeight(b)}responsiveNavigation();heroSectionHeight()}function responsiveNavigation(){if(viewport.is("xs")){$("body").addClass("nav-btn-only");if($("body").hasClass("nav-btn-only")&&responsiveNavigationTriggered==false){responsiveNavigationTriggered=true;$(".primary-nav .has-child").children("a").attr("data-toggle","collapse");$(".primary-nav .has-child").find(".nav-wrapper").addClass("collapse");$(".mega-menu .heading").each(function(a){$(this).wrap("<a href='#mega-menu-collapse-"+a+"'></a>");$(this).parent().attr("data-toggle","collapse");$(this).parent().addClass("has-child");$(this).parent().attr("aria-controls","mega-menu-collapse-"+a)});$(".mega-menu ul").each(function(a){$(this).attr("id","mega-menu-collapse-"+a);$(this).addClass("collapse")})}}else{navigationIsTouchingBrand=false;responsiveNavigationTriggered=false;$("body").removeClass("nav-btn-only");$(".primary-nav").html("");$(".primary-nav").html(originalNavigationCode)}}function equalHeight(b){if(!viewport.is("xs")){var a=0,c=0,f=new Array(),e,d=0;$(b).find(".equal-height").each(function(){e=$(this);$(e).height("auto");topPostion=e.position().top;if(c!=topPostion){for(currentDiv=0;currentDiv<f.length;currentDiv++){f[currentDiv].height(a)}f.length=0;c=topPostion;a=e.height();f.push(e)}else{f.push(e);a=(a<e.height())?(e.height()):(a)}for(currentDiv=0;currentDiv<f.length;currentDiv++){f[currentDiv].height(a)}})}}var viewport=(function(){var d=["xs","sm","md","lg"];var a=function(){return window.getComputedStyle(document.body,":before").content.replace(/"/g,"")};var c=function(e){if(d.indexOf(e)==-1){throw"no valid viewport name given"}return a()==e};var b=function(e){if(d.indexOf(e)==-1){throw"no valid viewport name given"}return d.indexOf(a())>=d.indexOf(e)};return{is:c,isEqualOrGreaterThan:b}})();function rating(b){var c='<span class="stars"><i class="fa fa-star s1" data-score="1"></i><i class="fa fa-star s2" data-score="2"></i><i class="fa fa-star s3" data-score="3"></i><i class="fa fa-star s4" data-score="4"></i><i class="fa fa-star s5" data-score="5"></i><i class="fa fa-star s6" data-score="6"></i><i class="fa fa-star s7" data-score="7"></i><i class="fa fa-star s8" data-score="8"></i><i class="fa fa-star s9" data-score="9"></i><i class="fa fa-star s10" data-score="10"></i></span>';if(!b){b=""}$.each($(b+" .star-rating"),function(d){$(this).append(c);if($(this).hasClass("active")){$(this).append('<input readonly hidden="" name="score_'+$(this).attr("data-name")+'" id="score_'+$(this).attr("data-name")+'">')}var g=$(this).attr("data-rating");for(var h=0;h<g;h++){var f=h+1;console.log("a");$(this).children(".stars").children(".s"+f).addClass("active")}});var a=$(".star-rating.active i");a.mouseenter(function(){for(var e=0;e<$(this).attr("data-score");e++){var d=e+1;$(this).parent().children(".s"+d).addClass("hover")}}).mouseleave(function(){for(var e=0;e<$(this).attr("data-score");e++){var d=e+1;$(this).parent().children(".s"+d).removeClass("hover")}});a.on("click",function(){$(this).parents(".star-rating").find("input").val($(this).attr("data-score"));$(this).parent().children(".fa").removeClass("active");for(var e=0;e<$(this).attr("data-score");e++){var d=e+1;$(this).parent().children(".s"+d).addClass("active")}return false})}function initializeReadMore(){$.ajax({type:"GET",url:"assets/js/readmore.min.js",success:a,dataType:"script",cache:true});function a(){var c;var b=$(".read-more");if(b.attr("data-collapse-height")){c=parseInt(b.attr("data-collapse-height"),10)}else{c=55}b.readmore({speed:500,collapsedHeight:c,blockCSS:"display: inline-block; width: auto; min-width: 120px;",moreLink:'<a href="#" class="btn btn-primary btn-xs btn-light-frame btn-framed btn-rounded">More<i class="icon_plus"></i></a>',lessLink:'<a href="#" class="btn btn-primary btn-xs btn-light-frame btn-framed btn-rounded">Less<i class="icon_minus-06"></i></a>'})}}function fixedNavigation(b){if(b==true){$("body").addClass("navigation-fixed");var a=$("#page-header").height();$("#page-header").css("position","fixed");$("#page-content").css({"-webkit-transform":"translateY("+a+"px)","-moz-transform":"translateY("+a+"px)","-ms-transform":"translateY("+a+"px)","-o-transform":"translateY("+a+"px)",transform:"translateY("+a+"px)"})}else{if(b==false){$("body").removeClass("navigation-fixed");$("#page-header").css("position","relative");$("#page-content").css({"-webkit-transform":"translateY(0px)","-moz-transform":"translateY(0px)","-ms-transform":"translateY(0px)","-o-transform":"translateY(0px)",transform:"translateY(0px)"})}}}if(!viewport.is("xs")){var messagesArray=[];$("[data-toggle=popover]").popover({template:'<div class="popover" role="tooltip"><div class="close"><i class="fa fa-close"></i></div><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'});$(".popover .close").live("click",function(){$(this).closest(".popover").popover("hide")});$("[data-show-after-time]").each(function(){var b=$(this);setTimeout(function(){if(b.attr("data-toggle")=="popover"){b.popover("show")}else{for(var c=0;c<messagesArray.length;c++){$(messagesArray[c]).css("bottom",parseInt($(messagesArray[c]).css("bottom"))+b.context.clientHeight+10)}messagesArray.push(b);b.addClass("show");if(b.attr("data-close-after-time")){setTimeout(function(){a()},b.attr("data-close-after-time"))}}},b.attr("data-show-after-time"));$(this).find(".close").on("click",function(){a()});function a(){b.removeClass("show");setTimeout(function(){b.remove()},400)}})}$("[data-show-after-scroll]").each(function(){var c=$(this);var a=c.attr("data-show-after-scroll");var b=$(this).offset().top;$(window).scroll(function(){var d=$(window).scrollTop();if(d>=a){c.addClass("show")}else{c.removeClass("show")}})});
