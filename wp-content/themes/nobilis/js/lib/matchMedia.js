window.matchMedia||(window.matchMedia=function(){"use strict";var e=window.styleMedia||window.media;if(!e){var i=document.createElement("style"),t=document.getElementsByTagName("script")[0],n=null;i.type="text/css";i.id="matchmediajs-test";t.parentNode.insertBefore(i,t);n="getComputedStyle"in window&&window.getComputedStyle(i,null)||i.currentStyle;e={matchMedium:function(t){var e="@media "+t+"{ #matchmediajs-test { width: 1px; } }";if(i.styleSheet){i.styleSheet.cssText=e}else{i.textContent=e}return n.width==="1px"}}}return function(t){return{matches:e.matchMedium(t||"all"),media:t||"all"}}}());