(function(){var e;e={Main:function(){var e;return e={menu_extended:!1},this.init=function(e){$(window).on("scroll",this.onScroll),$(window).on("resize",this.onResize),this.eventHandler(e)},this.onScroll=function(){var e;e=$("#landing_cabin").height(),e>=$(window).scrollTop()&&$("#slider_container").css("top",$(window).scrollTop()+"px")},this.onResize=function(){ViejoOesteUtils.Global.setHeightSlider("#viejooeste_container_slider"),ViejoOesteUtils.Global.setHeight("#viejooeste_service"),ViejoOesteUtils.Global.setHeight("#viejooeste_spaces")},this.gallery_global=function(){$("#viejooeste_gallery_display").find("ul.items > li.global").fadeOut(1e3),$("#viejooeste_gallery_display").find("ul.items > li.espacios").fadeIn(1e3)},this.eventHandler=function(e){var i,o,t,a,n,s,l,r,d,c,f,u,v,_,p,h;return $("#testimonies").slick({dots:!1,autoplay:!0,autoplaySpeed:7e3,slidesToScroll:1,arrows:!1,infinite:!0,adaptiveHeight:!0}),$(".slider-cabin-container").magnificPopup({delegate:"> li > a",type:"image",gallery:{enabled:!0}}),$(".new-pool").magnificPopup({delegate:"> li > a",type:"image",gallery:{enabled:!0}}),$("#show_campaign").bind("click",function(e){return console.log("Hello"),e.preventDefault(),$(".cabin-detail > .rate > ul > li.hs:before").animate({top:"47px"},1e3,function(){return console.log("Ready"),!1}),!1}),$("#cotrafa").bind("click",function(){return $("#cotrafa-show").fadeIn("slow"),$("#coopantex-show").fadeOut("slow")}),$("#coopantex").bind("click",function(){return $("#coopantex-show").fadeIn("slow"),$("#cotrafa-show").fadeOut("slow")}),c=$("#viejooeste_menu"),c.bind("click",function(){e.menu_extended===!0?($("#viejooeste_navigator").hide(),$("header").css({"max-height":"170px","background-color":"rgba(92,92,92,.6)"}),e.menu_extended=!1,$("#viejooeste_menu_text").text("MENÚ"),$("#viejooeste_menu_icon").removeClass("fa-times").addClass("fa-bars")):($("#viejooeste_navigator").show(),$("header").css({"max-height":"380px","background-color":"rgba(92,92,92,.9)"}),e.menu_extended=!0,$("#viejooeste_menu_text").text("CERRAR"),$("#viejooeste_menu_icon").removeClass("fa-bars").addClass("fa-times"))}),l=$("#viejooeste_indicator"),l.bind("click",function(){return $("html, body").animate({scrollTop:500},1e3)}),v=$("#viejooeste_container_options_gallery").find("li").click(function(e){var i,o;switch(e.preventDefault(),v.removeClass("active"),i=$(this),i.hasClass("active")||i.addClass("active"),o=i.find("a").data("option")){case"global":$("#viejooeste_gallery_display").find("ul.items > li.global").fadeIn(1e3);break;case"espacios":$("#viejooeste_gallery_display").find("ul.items > li.global").fadeOut(1e3)($("#viejooeste_gallery_display").find("ul.items > li.espacios").fadeIn(1e3));break;case"cabanas":$("#viejooeste_gallery_display").find("ul.items > li.global").fadeOut(1e3)($("#viejooeste_gallery_display").find("ul.items > li.cabanas").fadeIn(1e3));break;case"restaurante":$("#viejooeste_gallery_display").find("ul.items > li.global").fadeOut(1e3)($("#viejooeste_gallery_display").find("ul.items > li.restaurante").fadeIn(1e3));break;default:console.log("Nothig")}}),e=$("#viejooeste_container_options").find("li").click(function(i){var o,t;return i.preventDefault(),e.removeClass("active"),t=$(this),t.hasClass("active")||t.addClass("active"),$(".cabin").each(function(e){$(this).addClass("cabin-hide").removeClass("cabin-show")}),o=t.find("a").data("cabin"),$("#cabin_"+o).removeClass("cabin-hide").addClass("cabin-show")}),$("#viejooeste_select_options").change(function(e){var i;return e.preventDefault(),$(".cabin").each(function(e){$(this).addClass("cabin-hide").removeClass("cabin-show")}),i=$(this).find("option:selected").val(),$("#cabin_"+i).removeClass("cabin-hide").addClass("cabin-show")}),d=$("#viejooeste_gallery_display").find("ul.items > li.item > a").click(function(e){var i;e.preventDefault(),i=$(this)}),d=$("#viejooeste_cabin_display").find("cabin").click(function(e){var i;e.preventDefault(),i=$(this)}),t=$("#viejooeste_change_photo_buitre"),t.find("#buitre_photos li").click(function(e){var i;e.preventDefault(),i=$(this).find("img").attr("src"),$("div#buitre_photo > img").fadeOut(100,function(){return t.find("div#buitre_photo > img").attr("src",i),t.find("div#buitre_photo > img").fadeIn(1e3)})}),r=$("#viejooeste_change_photo_indio"),r.find("#indio_photos li").click(function(e){var i;e.preventDefault(),i=$(this).find("img").attr("src"),$("div#indio_photo > img").fadeOut(100,function(){return r.find("div#indio_photo > img").attr("src",i),r.find("div#indio_photo > img").fadeIn(1e3)})}),p=$("#viejooeste_change_photo_rifle"),p.find("#rifle_photos li").click(function(e){var i;e.preventDefault(),i=$(this).find("img").attr("src"),$("div#rifle_photo > img").fadeOut(100,function(){return p.find("div#rifle_photo > img").attr("src",i),p.find("div#rifle_photo > img").fadeIn(1e3)})}),s=$("#viejooeste_change_photo_establo"),s.find("#establo_photos li").click(function(e){var i;e.preventDefault(),i=$(this).find("img").attr("src"),$("div#establo_photo > img").fadeOut(100,function(){return s.find("div#establo_photo > img").attr("src",i),s.find("div#establo_photo > img").fadeIn(1e3)})}),_=$("#viejooeste_change_photo_pistolero"),_.find("#pistolero_photos li").click(function(e){var i;e.preventDefault(),i=$(this).find("img").attr("src"),$("div#pistolero_photo > img").fadeOut(100,function(){return _.find("div#pistolero_photo > img").attr("src",i),_.find("div#pistolero_photo > img").fadeIn(1e3)})}),f=$("#viejooeste_change_photo_mineros"),f.find("#mineros_photos li").click(function(e){var i;e.preventDefault(),i=$(this).find("img").attr("src"),$("div#mineros_photo > img").fadeOut(100,function(){return f.find("div#mineros_photo > img").attr("src",i),f.find("div#mineros_photo > img").fadeIn(1e3)})}),a=$("#viejooeste_change_photo_caballos"),a.find("#caballos_photos li").click(function(e){var i;e.preventDefault(),i=$(this).find("img").attr("src"),$("div#caballos_photo > img").fadeOut(100,function(){return a.find("div#caballos_photo > img").attr("src",i),a.find("div#caballos_photo > img").fadeIn(1e3)})}),n=$("#viejooeste_change_photo_cacique"),n.find("#cacique_photos li").click(function(e){var i;e.preventDefault(),i=$(this).find("img").attr("src"),$("div#cacique_photo > img").fadeOut(100,function(){return n.find("div#cacique_photo > img").attr("src",i),n.find("div#cacique_photo > img").fadeIn(1e3)})}),o=$("#viejooeste_change_photo_barril"),o.find("#barril_photos li").click(function(e){var i;e.preventDefault(),i=$(this).find("img").attr("src"),$("div#barril_photo > img").fadeOut(100,function(){return o.find("div#barril_photo > img").attr("src",i),o.find("div#barril_photo > img").fadeIn(1e3)})}),u=$("#viejooeste_change_photo_oasis"),u.find("#oasis_photos li").click(function(e){var i;e.preventDefault(),i=$(this).find("img").attr("src"),$("div#oasis_photo > img").fadeOut(100,function(){return u.find("div#oasis_photo > img").attr("src",i),u.find("div#oasis_photo > img").fadeIn(1e3)})}),h=$("#viejooeste_change_photo_vaqueros"),h.find("#vaqueros_photos li").click(function(e){var i;e.preventDefault(),i=$(this).find("img").attr("src"),$("div#vaqueros_photo > img").fadeOut(100,function(){return h.find("div#vaqueros_photo > img").attr("src",i),h.find("div#vaqueros_photo > img").fadeIn(1e3)})}),i="stop",$("#viejooeste_play").trigger("play"),$("#viejooeste_audio").click(function(e){return e.preventDefault(),"play"===i?($("#viejooeste_play").trigger("play"),$("#viejooeste_audio").removeClass("fa-volume-off"),$("#viejooeste_audio").addClass("fa-volume-up"),i="stop"):($("#viejooeste_play").trigger("pause"),$("#viejooeste_audio").removeClass("fa-volume-up"),$("#viejooeste_audio").addClass("fa-volume-off"),i="play")})},this.init(e)}},$(function(){return window.main=new e.Main})}).call(this);
//# sourceMappingURL=viejooeste.js.map
