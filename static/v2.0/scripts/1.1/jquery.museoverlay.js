/*
 ADOBE CONFIDENTIAL
 ___________________

 Copyright 2011 Adobe Systems Incorporated
 All Rights Reserved.

 NOTICE:  All information contained herein is, and remains
 the property of Adobe Systems Incorporated and its suppliers,
 if any.  The intellectual and technical concepts contained
 herein are proprietary to Adobe Systems Incorporated and its
 suppliers and may be covered by U.S. and Foreign Patents,
 patents in process, and are protected by trade secret or copyright law.
 Dissemination of this information or reproduction of this material
 is strictly forbidden unless prior written permission is obtained
 from Adobe Systems Incorporated.
*/
(function(a){a.fn.museOverlay=function(c){var b=a.extend({autoOpen:!0,offsetLeft:0,offsetTop:0,$overlaySlice:a(),$overlayWedge:a(),duration:300,overlayExtraWidth:0,overlayExtraHeight:0},c);return this.each(function(){var f=a(this).data("museOverlay");if(f&&f[c]!==void 0)return f[c].apply(this,Array.prototype.slice.call(arguments,1));var d=a("<div></div>").appendTo("body").css({position:"absolute",top:0,left:0,zIndex:100001}).hide(),g=a("<div></div>").append(b.$overlaySlice).appendTo(d).css({position:"absolute",
top:0,left:0}),h=a(this).css({position:"fixed",left:"50%",top:"50%",marginLeft:b.offsetLeft,marginTop:b.offsetTop}).appendTo(d),i="visible",j={isOpen:!1,open:function(){if(!j.isOpen){d.show();g.bind("click",j.close);g.css({opacity:0}).stop(!0);h.css({opacity:0}).stop(!0);g.bind("click",j.close).animate({opacity:0.99},{queue:!1,duration:b.duration,complete:function(){g.css({opacity:""});h.animate({opacity:1},{queue:!1,duration:b.duration,complete:function(){h.css({opacity:""})}})}});a(document).bind("keydown",
j.onKeyDown);i=a("body").css("overflow");a("body").css("overflow","hidden");j.doLayout();j.isOpen=!0;var f=a(window).width(),c=a(window).height(),l=null;a(window).bind("resize",function(){var b=a(window).width(),d=a(window).height();if((f!=b||c!=d)&&l==null)clearTimeout(l),l=setTimeout(function(){j.doLayout();f=a(window).width();c=a(window).height();l=null},10)})}},close:function(){a(".Container",h).each(function(){Muse.Utils.detachIframesAndObjectsToPauseMedia(a(this))});g.unbind("click",j.close);
a(window).unbind("resize",j.doLayout);a(document).unbind("keydown",j.onKeyDown);if(b.onClose)b.onClose();g.css({opacity:0.99}).stop(!0);h.css({opacity:0.99}).stop(!0);h.animate({opacity:0},{queue:!1,duration:b.duration,complete:function(){g.animate({opacity:0},{queue:!1,duration:b.duration,complete:function(){d.hide();h.css({opacity:""});g.css({opacity:""})}})}});a("body").css("overflow",i);j.isOpen=!1},onKeyDown:function(a){a.keyCode===27&&j.close()},doLayout:function(){d.css({width:0,height:0});
b.$overlayWedge.css({width:0,height:0});d.css({width:a(document).width()+5,height:a(document).height()});b.$overlayWedge.css({width:a(document).width()-b.overlayExtraWidth+5,height:a(document).height()-b.overlayExtraHeight})}};h.data("museOverlay",j);b.autoShow&&j.open()})}})(jQuery);
