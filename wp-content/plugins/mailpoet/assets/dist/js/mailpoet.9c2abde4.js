/*! For license information please see mailpoet.9c2abde4.js.LICENSE.txt */
"use strict";(self.webpackChunkMailPoet3=self.webpackChunkMailPoet3||[]).push([[740],{25105:function(e,i,t){t(76867);var n=t(65311),s=t.n(n);s()((e=>{e(document).on("click",".mailpoet-dismissible-notice .notice-dismiss",(function(){const i=e(this).closest(".mailpoet-dismissible-notice").data("notice");e.ajax(window.ajaxurl,{type:"POST",data:{action:"dismissed_notice_handler",type:i}})}))}));var a=s();a.fn.mailpoetSerializeObject=function(e){var i={},t={true:!0,false:!1,null:null};return a.each(this.serializeArray(),(function(n,s){var a=s.name,o=s.value,l=i,c=0,r=a.split("]["),u=r.length-1;if(/\[/.test(r[0])&&/\]$/.test(r[u])?(r[u]=r[u].replace(/\]$/,""),u=(r=r.shift().split("[").concat(r)).length-1):u=0,e&&(o&&!Number.isNaN(o)?o=+o:"undefined"===o?o=void 0:void 0!==t[o]&&(o=t[o])),u)for(;c<=u;c+=1)l[a=""===r[c]?l.length:r[c]]=c<u?l[a]||(r[c+1]&&isNaN(r[c+1])?{}:[]):o,l=l[a];else Array.isArray(i[a])?i[a].push(o):void 0!==i[a]?i[a]=[i[a],o]:i[a]=o})),i},t(7295)},65311:function(e){e.exports=jQuery}},function(e){e.O(0,[351],(function(){return 25105,e(e.s=25105)})),e.O()}]);