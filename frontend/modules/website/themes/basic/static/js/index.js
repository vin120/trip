(function(_n){_n._isDebug=0;_n.event={inited:false,TEMP_ON:1,TEMP_TRIGGER:2,_temp:[],on:function(eventName,callback){this._temp.push({type:this.TEMP_ON,eventName:eventName,callback:callback});},trigger:function(eventName,eventType,data){this._temp.push({type:this.TEMP_TRIGGER,eventName:eventName,eventType:eventType,data:data});}};_n.on=function(eventName,callback){return this.event.on(eventName,callback);};_n.trigger=function(eventName,eventType,data){if(data==null){data=void 0;}
if(typeof eventType!=='string'){data=eventType;eventType='default';}
return this.event.trigger(eventName,eventType,data);};return _n;})(this.M=this.mclub=this.mclub||{});this.M.vars=this.phpvars={};
;/*! jQuery v1.10.2 | (c) 2005, 2013 jQuery Foundation, Inc. | jquery.org/license
*/
(function(e,t){var n,r,i=typeof t,o=e.location,a=e.document,s=a.documentElement,l=e.jQuery,u=e.$,c={},p=[],f="1.10.2",d=p.concat,h=p.push,g=p.slice,m=p.indexOf,y=c.toString,v=c.hasOwnProperty,b=f.trim,x=function(e,t){return new x.fn.init(e,t,r)},w=/[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,T=/\S+/g,C=/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,N=/^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]*))$/,k=/^<(\w+)\s*\/?>(?:<\/\1>|)$/,E=/^[\],:{}\s]*$/,S=/(?:^|:|,)(?:\s*\[)+/g,A=/\\(?:["\\\/bfnrt]|u[\da-fA-F]{4})/g,j=/"[^"\\\r\n]*"|true|false|null|-?(?:\d+\.|)\d+(?:[eE][+-]?\d+|)/g,D=/^-ms-/,L=/-([\da-z])/gi,H=function(e,t){return t.toUpperCase()},q=function(e){(a.addEventListener||"load"===e.type||"complete"===a.readyState)&&(_(),x.ready())},_=function(){a.addEventListener?(a.removeEventListener("DOMContentLoaded",q,!1),e.removeEventListener("load",q,!1)):(a.detachEvent("onreadystatechange",q),e.detachEvent("onload",q))};x.fn=x.prototype={jquery:f,constructor:x,init:function(e,n,r){var i,o;if(!e)return this;if("string"==typeof e){if(i="<"===e.charAt(0)&&">"===e.charAt(e.length-1)&&e.length>=3?[null,e,null]:N.exec(e),!i||!i[1]&&n)return!n||n.jquery?(n||r).find(e):this.constructor(n).find(e);if(i[1]){if(n=n instanceof x?n[0]:n,x.merge(this,x.parseHTML(i[1],n&&n.nodeType?n.ownerDocument||n:a,!0)),k.test(i[1])&&x.isPlainObject(n))for(i in n)x.isFunction(this[i])?this[i](n[i]):this.attr(i,n[i]);return this}if(o=a.getElementById(i[2]),o&&o.parentNode){if(o.id!==i[2])return r.find(e);this.length=1,this[0]=o}return this.context=a,this.selector=e,this}return e.nodeType?(this.context=this[0]=e,this.length=1,this):x.isFunction(e)?r.ready(e):(e.selector!==t&&(this.selector=e.selector,this.context=e.context),x.makeArray(e,this))},selector:"",length:0,toArray:function(){return g.call(this)},get:function(e){return null==e?this.toArray():0>e?this[this.length+e]:this[e]},pushStack:function(e){var t=x.merge(this.constructor(),e);return t.prevObject=this,t.context=this.context,t},each:function(e,t){return x.each(this,e,t)},ready:function(e){return x.ready.promise().done(e),this},slice:function(){return this.pushStack(g.apply(this,arguments))},first:function(){return this.eq(0)},last:function(){return this.eq(-1)},eq:function(e){var t=this.length,n=+e+(0>e?t:0);return this.pushStack(n>=0&&t>n?[this[n]]:[])},map:function(e){return this.pushStack(x.map(this,function(t,n){return e.call(t,n,t)}))},end:function(){return this.prevObject||this.constructor(null)},push:h,sort:[].sort,splice:[].splice},x.fn.init.prototype=x.fn,x.extend=x.fn.extend=function(){var e,n,r,i,o,a,s=arguments[0]||{},l=1,u=arguments.length,c=!1;for("boolean"==typeof s&&(c=s,s=arguments[1]||{},l=2),"object"==typeof s||x.isFunction(s)||(s={}),u===l&&(s=this,--l);u>l;l++)if(null!=(o=arguments[l]))for(i in o)e=s[i],r=o[i],s!==r&&(c&&r&&(x.isPlainObject(r)||(n=x.isArray(r)))?(n?(n=!1,a=e&&x.isArray(e)?e:[]):a=e&&x.isPlainObject(e)?e:{},s[i]=x.extend(c,a,r)):r!==t&&(s[i]=r));return s},x.extend({expando:"jQuery"+(f+Math.random()).replace(/\D/g,""),noConflict:function(t){return e.$===x&&(e.$=u),t&&e.jQuery===x&&(e.jQuery=l),x},isReady:!1,readyWait:1,holdReady:function(e){e?x.readyWait++:x.ready(!0)},ready:function(e){if(e===!0?!--x.readyWait:!x.isReady){if(!a.body)return setTimeout(x.ready);x.isReady=!0,e!==!0&&--x.readyWait>0||(n.resolveWith(a,[x]),x.fn.trigger&&x(a).trigger("ready").off("ready"))}},isFunction:function(e){return"function"===x.type(e)},isArray:Array.isArray||function(e){return"array"===x.type(e)},isWindow:function(e){return null!=e&&e==e.window},isNumeric:function(e){return!isNaN(parseFloat(e))&&isFinite(e)},type:function(e){return null==e?e+"":"object"==typeof e||"function"==typeof e?c[y.call(e)]||"object":typeof e},isPlainObject:function(e){var n;if(!e||"object"!==x.type(e)||e.nodeType||x.isWindow(e))return!1;try{if(e.constructor&&!v.call(e,"constructor")&&!v.call(e.constructor.prototype,"isPrototypeOf"))return!1}catch(r){return!1}if(x.support.ownLast)for(n in e)return v.call(e,n);for(n in e);return n===t||v.call(e,n)},isEmptyObject:function(e){var t;for(t in e)return!1;return!0},error:function(e){throw Error(e)},parseHTML:function(e,t,n){if(!e||"string"!=typeof e)return null;"boolean"==typeof t&&(n=t,t=!1),t=t||a;var r=k.exec(e),i=!n&&[];return r?[t.createElement(r[1])]:(r=x.buildFragment([e],t,i),i&&x(i).remove(),x.merge([],r.childNodes))},parseJSON:function(n){return e.JSON&&e.JSON.parse?e.JSON.parse(n):null===n?n:"string"==typeof n&&(n=x.trim(n),n&&E.test(n.replace(A,"@").replace(j,"]").replace(S,"")))?Function("return "+n)():(x.error("Invalid JSON: "+n),t)},parseXML:function(n){var r,i;if(!n||"string"!=typeof n)return null;try{e.DOMParser?(i=new DOMParser,r=i.parseFromString(n,"text/xml")):(r=new ActiveXObject("Microsoft.XMLDOM"),r.async="false",r.loadXML(n))}catch(o){r=t}return r&&r.documentElement&&!r.getElementsByTagName("parsererror").length||x.error("Invalid XML: "+n),r},noop:function(){},globalEval:function(t){t&&x.trim(t)&&(e.execScript||function(t){e.eval.call(e,t)})(t)},camelCase:function(e){return e.replace(D,"ms-").replace(L,H)},nodeName:function(e,t){return e.nodeName&&e.nodeName.toLowerCase()===t.toLowerCase()},each:function(e,t,n){var r,i=0,o=e.length,a=M(e);if(n){if(a){for(;o>i;i++)if(r=t.apply(e[i],n),r===!1)break}else for(i in e)if(r=t.apply(e[i],n),r===!1)break}else if(a){for(;o>i;i++)if(r=t.call(e[i],i,e[i]),r===!1)break}else for(i in e)if(r=t.call(e[i],i,e[i]),r===!1)break;return e},trim:b&&!b.call("\ufeff\u00a0")?function(e){return null==e?"":b.call(e)}:function(e){return null==e?"":(e+"").replace(C,"")},makeArray:function(e,t){var n=t||[];return null!=e&&(M(Object(e))?x.merge(n,"string"==typeof e?[e]:e):h.call(n,e)),n},inArray:function(e,t,n){var r;if(t){if(m)return m.call(t,e,n);for(r=t.length,n=n?0>n?Math.max(0,r+n):n:0;r>n;n++)if(n in t&&t[n]===e)return n}return-1},merge:function(e,n){var r=n.length,i=e.length,o=0;if("number"==typeof r)for(;r>o;o++)e[i++]=n[o];else while(n[o]!==t)e[i++]=n[o++];return e.length=i,e},grep:function(e,t,n){var r,i=[],o=0,a=e.length;for(n=!!n;a>o;o++)r=!!t(e[o],o),n!==r&&i.push(e[o]);return i},map:function(e,t,n){var r,i=0,o=e.length,a=M(e),s=[];if(a)for(;o>i;i++)r=t(e[i],i,n),null!=r&&(s[s.length]=r);else for(i in e)r=t(e[i],i,n),null!=r&&(s[s.length]=r);return d.apply([],s)},guid:1,proxy:function(e,n){var r,i,o;return"string"==typeof n&&(o=e[n],n=e,e=o),x.isFunction(e)?(r=g.call(arguments,2),i=function(){return e.apply(n||this,r.concat(g.call(arguments)))},i.guid=e.guid=e.guid||x.guid++,i):t},access:function(e,n,r,i,o,a,s){var l=0,u=e.length,c=null==r;if("object"===x.type(r)){o=!0;for(l in r)x.access(e,n,l,r[l],!0,a,s)}else if(i!==t&&(o=!0,x.isFunction(i)||(s=!0),c&&(s?(n.call(e,i),n=null):(c=n,n=function(e,t,n){return c.call(x(e),n)})),n))for(;u>l;l++)n(e[l],r,s?i:i.call(e[l],l,n(e[l],r)));return o?e:c?n.call(e):u?n(e[0],r):a},now:function(){return(new Date).getTime()},swap:function(e,t,n,r){var i,o,a={};for(o in t)a[o]=e.style[o],e.style[o]=t[o];i=n.apply(e,r||[]);for(o in t)e.style[o]=a[o];return i}}),x.ready.promise=function(t){if(!n)if(n=x.Deferred(),"complete"===a.readyState)setTimeout(x.ready);else if(a.addEventListener)a.addEventListener("DOMContentLoaded",q,!1),e.addEventListener("load",q,!1);else{a.attachEvent("onreadystatechange",q),e.attachEvent("onload",q);var r=!1;try{r=null==e.frameElement&&a.documentElement}catch(i){}r&&r.doScroll&&function o(){if(!x.isReady){try{r.doScroll("left")}catch(e){return setTimeout(o,50)}_(),x.ready()}}()}return n.promise(t)},x.each("Boolean Number String Function Array Date RegExp Object Error".split(" "),function(e,t){c["[object "+t+"]"]=t.toLowerCase()});function M(e){var t=e.length,n=x.type(e);return x.isWindow(e)?!1:1===e.nodeType&&t?!0:"array"===n||"function"!==n&&(0===t||"number"==typeof t&&t>0&&t-1 in e)}r=x(a),function(e,t){var n,r,i,o,a,s,l,u,c,p,f,d,h,g,m,y,v,b="sizzle"+-new Date,w=e.document,T=0,C=0,N=st(),k=st(),E=st(),S=!1,A=function(e,t){return e===t?(S=!0,0):0},j=typeof t,D=1<<31,L={}.hasOwnProperty,H=[],q=H.pop,_=H.push,M=H.push,O=H.slice,F=H.indexOf||function(e){var t=0,n=this.length;for(;n>t;t++)if(this[t]===e)return t;return-1},B="checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",P="[\\x20\\t\\r\\n\\f]",R="(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",W=R.replace("w","w#"),$="\\["+P+"*("+R+")"+P+"*(?:([*^$|!~]?=)"+P+"*(?:(['\"])((?:\\\\.|[^\\\\])*?)\\3|("+W+")|)|)"+P+"*\\]",I=":("+R+")(?:\\(((['\"])((?:\\\\.|[^\\\\])*?)\\3|((?:\\\\.|[^\\\\()[\\]]|"+$.replace(3,8)+")*)|.*)\\)|)",z=RegExp("^"+P+"+|((?:^|[^\\\\])(?:\\\\.)*)"+P+"+$","g"),X=RegExp("^"+P+"*,"+P+"*"),U=RegExp("^"+P+"*([>+~]|"+P+")"+P+"*"),V=RegExp(P+"*[+~]"),Y=RegExp("="+P+"*([^\\]'\"]*)"+P+"*\\]","g"),J=RegExp(I),G=RegExp("^"+W+"$"),Q={ID:RegExp("^#("+R+")"),CLASS:RegExp("^\\.("+R+")"),TAG:RegExp("^("+R.replace("w","w*")+")"),ATTR:RegExp("^"+$),PSEUDO:RegExp("^"+I),CHILD:RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\("+P+"*(even|odd|(([+-]|)(\\d*)n|)"+P+"*(?:([+-]|)"+P+"*(\\d+)|))"+P+"*\\)|)","i"),bool:RegExp("^(?:"+B+")$","i"),needsContext:RegExp("^"+P+"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\("+P+"*((?:-\\d)?\\d*)"+P+"*\\)|)(?=[^-]|$)","i")},K=/^[^{]+\{\s*\[native \w/,Z=/^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,et=/^(?:input|select|textarea|button)$/i,tt=/^h\d$/i,nt=/'|\\/g,rt=RegExp("\\\\([\\da-f]{1,6}"+P+"?|("+P+")|.)","ig"),it=function(e,t,n){var r="0x"+t-65536;return r!==r||n?t:0>r?String.fromCharCode(r+65536):String.fromCharCode(55296|r>>10,56320|1023&r)};try{M.apply(H=O.call(w.childNodes),w.childNodes),H[w.childNodes.length].nodeType}catch(ot){M={apply:H.length?function(e,t){_.apply(e,O.call(t))}:function(e,t){var n=e.length,r=0;while(e[n++]=t[r++]);e.length=n-1}}}function at(e,t,n,i){var o,a,s,l,u,c,d,m,y,x;if((t?t.ownerDocument||t:w)!==f&&p(t),t=t||f,n=n||[],!e||"string"!=typeof e)return n;if(1!==(l=t.nodeType)&&9!==l)return[];if(h&&!i){if(o=Z.exec(e))if(s=o[1]){if(9===l){if(a=t.getElementById(s),!a||!a.parentNode)return n;if(a.id===s)return n.push(a),n}else if(t.ownerDocument&&(a=t.ownerDocument.getElementById(s))&&v(t,a)&&a.id===s)return n.push(a),n}else{if(o[2])return M.apply(n,t.getElementsByTagName(e)),n;if((s=o[3])&&r.getElementsByClassName&&t.getElementsByClassName)return M.apply(n,t.getElementsByClassName(s)),n}if(r.qsa&&(!g||!g.test(e))){if(m=d=b,y=t,x=9===l&&e,1===l&&"object"!==t.nodeName.toLowerCase()){c=mt(e),(d=t.getAttribute("id"))?m=d.replace(nt,"\\$&"):t.setAttribute("id",m),m="[id='"+m+"'] ",u=c.length;while(u--)c[u]=m+yt(c[u]);y=V.test(e)&&t.parentNode||t,x=c.join(",")}if(x)try{return M.apply(n,y.querySelectorAll(x)),n}catch(T){}finally{d||t.removeAttribute("id")}}}return kt(e.replace(z,"$1"),t,n,i)}function st(){var e=[];function t(n,r){return e.push(n+=" ")>o.cacheLength&&delete t[e.shift()],t[n]=r}return t}function lt(e){return e[b]=!0,e}function ut(e){var t=f.createElement("div");try{return!!e(t)}catch(n){return!1}finally{t.parentNode&&t.parentNode.removeChild(t),t=null}}function ct(e,t){var n=e.split("|"),r=e.length;while(r--)o.attrHandle[n[r]]=t}function pt(e,t){var n=t&&e,r=n&&1===e.nodeType&&1===t.nodeType&&(~t.sourceIndex||D)-(~e.sourceIndex||D);if(r)return r;if(n)while(n=n.nextSibling)if(n===t)return-1;return e?1:-1}function ft(e){return function(t){var n=t.nodeName.toLowerCase();return"input"===n&&t.type===e}}function dt(e){return function(t){var n=t.nodeName.toLowerCase();return("input"===n||"button"===n)&&t.type===e}}function ht(e){return lt(function(t){return t=+t,lt(function(n,r){var i,o=e([],n.length,t),a=o.length;while(a--)n[i=o[a]]&&(n[i]=!(r[i]=n[i]))})})}s=at.isXML=function(e){var t=e&&(e.ownerDocument||e).documentElement;return t?"HTML"!==t.nodeName:!1},r=at.support={},p=at.setDocument=function(e){var n=e?e.ownerDocument||e:w,i=n.defaultView;return n!==f&&9===n.nodeType&&n.documentElement?(f=n,d=n.documentElement,h=!s(n),i&&i.attachEvent&&i!==i.top&&i.attachEvent("onbeforeunload",function(){p()}),r.attributes=ut(function(e){return e.className="i",!e.getAttribute("className")}),r.getElementsByTagName=ut(function(e){return e.appendChild(n.createComment("")),!e.getElementsByTagName("*").length}),r.getElementsByClassName=ut(function(e){return e.innerHTML="<div class='a'></div><div class='a i'></div>",e.firstChild.className="i",2===e.getElementsByClassName("i").length}),r.getById=ut(function(e){return d.appendChild(e).id=b,!n.getElementsByName||!n.getElementsByName(b).length}),r.getById?(o.find.ID=function(e,t){if(typeof t.getElementById!==j&&h){var n=t.getElementById(e);return n&&n.parentNode?[n]:[]}},o.filter.ID=function(e){var t=e.replace(rt,it);return function(e){return e.getAttribute("id")===t}}):(delete o.find.ID,o.filter.ID=function(e){var t=e.replace(rt,it);return function(e){var n=typeof e.getAttributeNode!==j&&e.getAttributeNode("id");return n&&n.value===t}}),o.find.TAG=r.getElementsByTagName?function(e,n){return typeof n.getElementsByTagName!==j?n.getElementsByTagName(e):t}:function(e,t){var n,r=[],i=0,o=t.getElementsByTagName(e);if("*"===e){while(n=o[i++])1===n.nodeType&&r.push(n);return r}return o},o.find.CLASS=r.getElementsByClassName&&function(e,n){return typeof n.getElementsByClassName!==j&&h?n.getElementsByClassName(e):t},m=[],g=[],(r.qsa=K.test(n.querySelectorAll))&&(ut(function(e){e.innerHTML="<select><option selected=''></option></select>",e.querySelectorAll("[selected]").length||g.push("\\["+P+"*(?:value|"+B+")"),e.querySelectorAll(":checked").length||g.push(":checked")}),ut(function(e){var t=n.createElement("input");t.setAttribute("type","hidden"),e.appendChild(t).setAttribute("t",""),e.querySelectorAll("[t^='']").length&&g.push("[*^$]="+P+"*(?:''|\"\")"),e.querySelectorAll(":enabled").length||g.push(":enabled",":disabled"),e.querySelectorAll("*,:x"),g.push(",.*:")})),(r.matchesSelector=K.test(y=d.webkitMatchesSelector||d.mozMatchesSelector||d.oMatchesSelector||d.msMatchesSelector))&&ut(function(e){r.disconnectedMatch=y.call(e,"div"),y.call(e,"[s!='']:x"),m.push("!=",I)}),g=g.length&&RegExp(g.join("|")),m=m.length&&RegExp(m.join("|")),v=K.test(d.contains)||d.compareDocumentPosition?function(e,t){var n=9===e.nodeType?e.documentElement:e,r=t&&t.parentNode;return e===r||!(!r||1!==r.nodeType||!(n.contains?n.contains(r):e.compareDocumentPosition&&16&e.compareDocumentPosition(r)))}:function(e,t){if(t)while(t=t.parentNode)if(t===e)return!0;return!1},A=d.compareDocumentPosition?function(e,t){if(e===t)return S=!0,0;var i=t.compareDocumentPosition&&e.compareDocumentPosition&&e.compareDocumentPosition(t);return i?1&i||!r.sortDetached&&t.compareDocumentPosition(e)===i?e===n||v(w,e)?-1:t===n||v(w,t)?1:c?F.call(c,e)-F.call(c,t):0:4&i?-1:1:e.compareDocumentPosition?-1:1}:function(e,t){var r,i=0,o=e.parentNode,a=t.parentNode,s=[e],l=[t];if(e===t)return S=!0,0;if(!o||!a)return e===n?-1:t===n?1:o?-1:a?1:c?F.call(c,e)-F.call(c,t):0;if(o===a)return pt(e,t);r=e;while(r=r.parentNode)s.unshift(r);r=t;while(r=r.parentNode)l.unshift(r);while(s[i]===l[i])i++;return i?pt(s[i],l[i]):s[i]===w?-1:l[i]===w?1:0},n):f},at.matches=function(e,t){return at(e,null,null,t)},at.matchesSelector=function(e,t){if((e.ownerDocument||e)!==f&&p(e),t=t.replace(Y,"='$1']"),!(!r.matchesSelector||!h||m&&m.test(t)||g&&g.test(t)))try{var n=y.call(e,t);if(n||r.disconnectedMatch||e.document&&11!==e.document.nodeType)return n}catch(i){}return at(t,f,null,[e]).length>0},at.contains=function(e,t){return(e.ownerDocument||e)!==f&&p(e),v(e,t)},at.attr=function(e,n){(e.ownerDocument||e)!==f&&p(e);var i=o.attrHandle[n.toLowerCase()],a=i&&L.call(o.attrHandle,n.toLowerCase())?i(e,n,!h):t;return a===t?r.attributes||!h?e.getAttribute(n):(a=e.getAttributeNode(n))&&a.specified?a.value:null:a},at.error=function(e){throw Error("Syntax error, unrecognized expression: "+e)},at.uniqueSort=function(e){var t,n=[],i=0,o=0;if(S=!r.detectDuplicates,c=!r.sortStable&&e.slice(0),e.sort(A),S){while(t=e[o++])t===e[o]&&(i=n.push(o));while(i--)e.splice(n[i],1)}return e},a=at.getText=function(e){var t,n="",r=0,i=e.nodeType;if(i){if(1===i||9===i||11===i){if("string"==typeof e.textContent)return e.textContent;for(e=e.firstChild;e;e=e.nextSibling)n+=a(e)}else if(3===i||4===i)return e.nodeValue}else for(;t=e[r];r++)n+=a(t);return n},o=at.selectors={cacheLength:50,createPseudo:lt,match:Q,attrHandle:{},find:{},relative:{">":{dir:"parentNode",first:!0}," ":{dir:"parentNode"},"+":{dir:"previousSibling",first:!0},"~":{dir:"previousSibling"}},preFilter:{ATTR:function(e){return e[1]=e[1].replace(rt,it),e[3]=(e[4]||e[5]||"").replace(rt,it),"~="===e[2]&&(e[3]=" "+e[3]+" "),e.slice(0,4)},CHILD:function(e){return e[1]=e[1].toLowerCase(),"nth"===e[1].slice(0,3)?(e[3]||at.error(e[0]),e[4]=+(e[4]?e[5]+(e[6]||1):2*("even"===e[3]||"odd"===e[3])),e[5]=+(e[7]+e[8]||"odd"===e[3])):e[3]&&at.error(e[0]),e},PSEUDO:function(e){var n,r=!e[5]&&e[2];return Q.CHILD.test(e[0])?null:(e[3]&&e[4]!==t?e[2]=e[4]:r&&J.test(r)&&(n=mt(r,!0))&&(n=r.indexOf(")",r.length-n)-r.length)&&(e[0]=e[0].slice(0,n),e[2]=r.slice(0,n)),e.slice(0,3))}},filter:{TAG:function(e){var t=e.replace(rt,it).toLowerCase();return"*"===e?function(){return!0}:function(e){return e.nodeName&&e.nodeName.toLowerCase()===t}},CLASS:function(e){var t=N[e+" "];return t||(t=RegExp("(^|"+P+")"+e+"("+P+"|$)"))&&N(e,function(e){return t.test("string"==typeof e.className&&e.className||typeof e.getAttribute!==j&&e.getAttribute("class")||"")})},ATTR:function(e,t,n){return function(r){var i=at.attr(r,e);return null==i?"!="===t:t?(i+="","="===t?i===n:"!="===t?i!==n:"^="===t?n&&0===i.indexOf(n):"*="===t?n&&i.indexOf(n)>-1:"$="===t?n&&i.slice(-n.length)===n:"~="===t?(" "+i+" ").indexOf(n)>-1:"|="===t?i===n||i.slice(0,n.length+1)===n+"-":!1):!0}},CHILD:function(e,t,n,r,i){var o="nth"!==e.slice(0,3),a="last"!==e.slice(-4),s="of-type"===t;return 1===r&&0===i?function(e){return!!e.parentNode}:function(t,n,l){var u,c,p,f,d,h,g=o!==a?"nextSibling":"previousSibling",m=t.parentNode,y=s&&t.nodeName.toLowerCase(),v=!l&&!s;if(m){if(o){while(g){p=t;while(p=p[g])if(s?p.nodeName.toLowerCase()===y:1===p.nodeType)return!1;h=g="only"===e&&!h&&"nextSibling"}return!0}if(h=[a?m.firstChild:m.lastChild],a&&v){c=m[b]||(m[b]={}),u=c[e]||[],d=u[0]===T&&u[1],f=u[0]===T&&u[2],p=d&&m.childNodes[d];while(p=++d&&p&&p[g]||(f=d=0)||h.pop())if(1===p.nodeType&&++f&&p===t){c[e]=[T,d,f];break}}else if(v&&(u=(t[b]||(t[b]={}))[e])&&u[0]===T)f=u[1];else while(p=++d&&p&&p[g]||(f=d=0)||h.pop())if((s?p.nodeName.toLowerCase()===y:1===p.nodeType)&&++f&&(v&&((p[b]||(p[b]={}))[e]=[T,f]),p===t))break;return f-=i,f===r||0===f%r&&f/r>=0}}},PSEUDO:function(e,t){var n,r=o.pseudos[e]||o.setFilters[e.toLowerCase()]||at.error("unsupported pseudo: "+e);return r[b]?r(t):r.length>1?(n=[e,e,"",t],o.setFilters.hasOwnProperty(e.toLowerCase())?lt(function(e,n){var i,o=r(e,t),a=o.length;while(a--)i=F.call(e,o[a]),e[i]=!(n[i]=o[a])}):function(e){return r(e,0,n)}):r}},pseudos:{not:lt(function(e){var t=[],n=[],r=l(e.replace(z,"$1"));return r[b]?lt(function(e,t,n,i){var o,a=r(e,null,i,[]),s=e.length;while(s--)(o=a[s])&&(e[s]=!(t[s]=o))}):function(e,i,o){return t[0]=e,r(t,null,o,n),!n.pop()}}),has:lt(function(e){return function(t){return at(e,t).length>0}}),contains:lt(function(e){return function(t){return(t.textContent||t.innerText||a(t)).indexOf(e)>-1}}),lang:lt(function(e){return G.test(e||"")||at.error("unsupported lang: "+e),e=e.replace(rt,it).toLowerCase(),function(t){var n;do if(n=h?t.lang:t.getAttribute("xml:lang")||t.getAttribute("lang"))return n=n.toLowerCase(),n===e||0===n.indexOf(e+"-");while((t=t.parentNode)&&1===t.nodeType);return!1}}),target:function(t){var n=e.location&&e.location.hash;return n&&n.slice(1)===t.id},root:function(e){return e===d},focus:function(e){return e===f.activeElement&&(!f.hasFocus||f.hasFocus())&&!!(e.type||e.href||~e.tabIndex)},enabled:function(e){return e.disabled===!1},disabled:function(e){return e.disabled===!0},checked:function(e){var t=e.nodeName.toLowerCase();return"input"===t&&!!e.checked||"option"===t&&!!e.selected},selected:function(e){return e.parentNode&&e.parentNode.selectedIndex,e.selected===!0},empty:function(e){for(e=e.firstChild;e;e=e.nextSibling)if(e.nodeName>"@"||3===e.nodeType||4===e.nodeType)return!1;return!0},parent:function(e){return!o.pseudos.empty(e)},header:function(e){return tt.test(e.nodeName)},input:function(e){return et.test(e.nodeName)},button:function(e){var t=e.nodeName.toLowerCase();return"input"===t&&"button"===e.type||"button"===t},text:function(e){var t;return"input"===e.nodeName.toLowerCase()&&"text"===e.type&&(null==(t=e.getAttribute("type"))||t.toLowerCase()===e.type)},first:ht(function(){return[0]}),last:ht(function(e,t){return[t-1]}),eq:ht(function(e,t,n){return[0>n?n+t:n]}),even:ht(function(e,t){var n=0;for(;t>n;n+=2)e.push(n);return e}),odd:ht(function(e,t){var n=1;for(;t>n;n+=2)e.push(n);return e}),lt:ht(function(e,t,n){var r=0>n?n+t:n;for(;--r>=0;)e.push(r);return e}),gt:ht(function(e,t,n){var r=0>n?n+t:n;for(;t>++r;)e.push(r);return e})}},o.pseudos.nth=o.pseudos.eq;for(n in{radio:!0,checkbox:!0,file:!0,password:!0,image:!0})o.pseudos[n]=ft(n);for(n in{submit:!0,reset:!0})o.pseudos[n]=dt(n);function gt(){}gt.prototype=o.filters=o.pseudos,o.setFilters=new gt;function mt(e,t){var n,r,i,a,s,l,u,c=k[e+" "];if(c)return t?0:c.slice(0);s=e,l=[],u=o.preFilter;while(s){(!n||(r=X.exec(s)))&&(r&&(s=s.slice(r[0].length)||s),l.push(i=[])),n=!1,(r=U.exec(s))&&(n=r.shift(),i.push({value:n,type:r[0].replace(z," ")}),s=s.slice(n.length));for(a in o.filter)!(r=Q[a].exec(s))||u[a]&&!(r=u[a](r))||(n=r.shift(),i.push({value:n,type:a,matches:r}),s=s.slice(n.length));if(!n)break}return t?s.length:s?at.error(e):k(e,l).slice(0)}function yt(e){var t=0,n=e.length,r="";for(;n>t;t++)r+=e[t].value;return r}function vt(e,t,n){var r=t.dir,o=n&&"parentNode"===r,a=C++;return t.first?function(t,n,i){while(t=t[r])if(1===t.nodeType||o)return e(t,n,i)}:function(t,n,s){var l,u,c,p=T+" "+a;if(s){while(t=t[r])if((1===t.nodeType||o)&&e(t,n,s))return!0}else while(t=t[r])if(1===t.nodeType||o)if(c=t[b]||(t[b]={}),(u=c[r])&&u[0]===p){if((l=u[1])===!0||l===i)return l===!0}else if(u=c[r]=[p],u[1]=e(t,n,s)||i,u[1]===!0)return!0}}function bt(e){return e.length>1?function(t,n,r){var i=e.length;while(i--)if(!e[i](t,n,r))return!1;return!0}:e[0]}function xt(e,t,n,r,i){var o,a=[],s=0,l=e.length,u=null!=t;for(;l>s;s++)(o=e[s])&&(!n||n(o,r,i))&&(a.push(o),u&&t.push(s));return a}function wt(e,t,n,r,i,o){return r&&!r[b]&&(r=wt(r)),i&&!i[b]&&(i=wt(i,o)),lt(function(o,a,s,l){var u,c,p,f=[],d=[],h=a.length,g=o||Nt(t||"*",s.nodeType?[s]:s,[]),m=!e||!o&&t?g:xt(g,f,e,s,l),y=n?i||(o?e:h||r)?[]:a:m;if(n&&n(m,y,s,l),r){u=xt(y,d),r(u,[],s,l),c=u.length;while(c--)(p=u[c])&&(y[d[c]]=!(m[d[c]]=p))}if(o){if(i||e){if(i){u=[],c=y.length;while(c--)(p=y[c])&&u.push(m[c]=p);i(null,y=[],u,l)}c=y.length;while(c--)(p=y[c])&&(u=i?F.call(o,p):f[c])>-1&&(o[u]=!(a[u]=p))}}else y=xt(y===a?y.splice(h,y.length):y),i?i(null,a,y,l):M.apply(a,y)})}function Tt(e){var t,n,r,i=e.length,a=o.relative[e[0].type],s=a||o.relative[" "],l=a?1:0,c=vt(function(e){return e===t},s,!0),p=vt(function(e){return F.call(t,e)>-1},s,!0),f=[function(e,n,r){return!a&&(r||n!==u)||((t=n).nodeType?c(e,n,r):p(e,n,r))}];for(;i>l;l++)if(n=o.relative[e[l].type])f=[vt(bt(f),n)];else{if(n=o.filter[e[l].type].apply(null,e[l].matches),n[b]){for(r=++l;i>r;r++)if(o.relative[e[r].type])break;return wt(l>1&&bt(f),l>1&&yt(e.slice(0,l-1).concat({value:" "===e[l-2].type?"*":""})).replace(z,"$1"),n,r>l&&Tt(e.slice(l,r)),i>r&&Tt(e=e.slice(r)),i>r&&yt(e))}f.push(n)}return bt(f)}function Ct(e,t){var n=0,r=t.length>0,a=e.length>0,s=function(s,l,c,p,d){var h,g,m,y=[],v=0,b="0",x=s&&[],w=null!=d,C=u,N=s||a&&o.find.TAG("*",d&&l.parentNode||l),k=T+=null==C?1:Math.random()||.1;for(w&&(u=l!==f&&l,i=n);null!=(h=N[b]);b++){if(a&&h){g=0;while(m=e[g++])if(m(h,l,c)){p.push(h);break}w&&(T=k,i=++n)}r&&((h=!m&&h)&&v--,s&&x.push(h))}if(v+=b,r&&b!==v){g=0;while(m=t[g++])m(x,y,l,c);if(s){if(v>0)while(b--)x[b]||y[b]||(y[b]=q.call(p));y=xt(y)}M.apply(p,y),w&&!s&&y.length>0&&v+t.length>1&&at.uniqueSort(p)}return w&&(T=k,u=C),x};return r?lt(s):s}l=at.compile=function(e,t){var n,r=[],i=[],o=E[e+" "];if(!o){t||(t=mt(e)),n=t.length;while(n--)o=Tt(t[n]),o[b]?r.push(o):i.push(o);o=E(e,Ct(i,r))}return o};function Nt(e,t,n){var r=0,i=t.length;for(;i>r;r++)at(e,t[r],n);return n}function kt(e,t,n,i){var a,s,u,c,p,f=mt(e);if(!i&&1===f.length){if(s=f[0]=f[0].slice(0),s.length>2&&"ID"===(u=s[0]).type&&r.getById&&9===t.nodeType&&h&&o.relative[s[1].type]){if(t=(o.find.ID(u.matches[0].replace(rt,it),t)||[])[0],!t)return n;e=e.slice(s.shift().value.length)}a=Q.needsContext.test(e)?0:s.length;while(a--){if(u=s[a],o.relative[c=u.type])break;if((p=o.find[c])&&(i=p(u.matches[0].replace(rt,it),V.test(s[0].type)&&t.parentNode||t))){if(s.splice(a,1),e=i.length&&yt(s),!e)return M.apply(n,i),n;break}}}return l(e,f)(i,t,!h,n,V.test(e)),n}r.sortStable=b.split("").sort(A).join("")===b,r.detectDuplicates=S,p(),r.sortDetached=ut(function(e){return 1&e.compareDocumentPosition(f.createElement("div"))}),ut(function(e){return e.innerHTML="<a href='#'></a>","#"===e.firstChild.getAttribute("href")})||ct("type|href|height|width",function(e,n,r){return r?t:e.getAttribute(n,"type"===n.toLowerCase()?1:2)}),r.attributes&&ut(function(e){return e.innerHTML="<input/>",e.firstChild.setAttribute("value",""),""===e.firstChild.getAttribute("value")})||ct("value",function(e,n,r){return r||"input"!==e.nodeName.toLowerCase()?t:e.defaultValue}),ut(function(e){return null==e.getAttribute("disabled")})||ct(B,function(e,n,r){var i;return r?t:(i=e.getAttributeNode(n))&&i.specified?i.value:e[n]===!0?n.toLowerCase():null}),x.find=at,x.expr=at.selectors,x.expr[":"]=x.expr.pseudos,x.unique=at.uniqueSort,x.text=at.getText,x.isXMLDoc=at.isXML,x.contains=at.contains}(e);var O={};function F(e){var t=O[e]={};return x.each(e.match(T)||[],function(e,n){t[n]=!0}),t}x.Callbacks=function(e){e="string"==typeof e?O[e]||F(e):x.extend({},e);var n,r,i,o,a,s,l=[],u=!e.once&&[],c=function(t){for(r=e.memory&&t,i=!0,a=s||0,s=0,o=l.length,n=!0;l&&o>a;a++)if(l[a].apply(t[0],t[1])===!1&&e.stopOnFalse){r=!1;break}n=!1,l&&(u?u.length&&c(u.shift()):r?l=[]:p.disable())},p={add:function(){if(l){var t=l.length;(function i(t){x.each(t,function(t,n){var r=x.type(n);"function"===r?e.unique&&p.has(n)||l.push(n):n&&n.length&&"string"!==r&&i(n)})})(arguments),n?o=l.length:r&&(s=t,c(r))}return this},remove:function(){return l&&x.each(arguments,function(e,t){var r;while((r=x.inArray(t,l,r))>-1)l.splice(r,1),n&&(o>=r&&o--,a>=r&&a--)}),this},has:function(e){return e?x.inArray(e,l)>-1:!(!l||!l.length)},empty:function(){return l=[],o=0,this},disable:function(){return l=u=r=t,this},disabled:function(){return!l},lock:function(){return u=t,r||p.disable(),this},locked:function(){return!u},fireWith:function(e,t){return!l||i&&!u||(t=t||[],t=[e,t.slice?t.slice():t],n?u.push(t):c(t)),this},fire:function(){return p.fireWith(this,arguments),this},fired:function(){return!!i}};return p},x.extend({Deferred:function(e){var t=[["resolve","done",x.Callbacks("once memory"),"resolved"],["reject","fail",x.Callbacks("once memory"),"rejected"],["notify","progress",x.Callbacks("memory")]],n="pending",r={state:function(){return n},always:function(){return i.done(arguments).fail(arguments),this},then:function(){var e=arguments;return x.Deferred(function(n){x.each(t,function(t,o){var a=o[0],s=x.isFunction(e[t])&&e[t];i[o[1]](function(){var e=s&&s.apply(this,arguments);e&&x.isFunction(e.promise)?e.promise().done(n.resolve).fail(n.reject).progress(n.notify):n[a+"With"](this===r?n.promise():this,s?[e]:arguments)})}),e=null}).promise()},promise:function(e){return null!=e?x.extend(e,r):r}},i={};return r.pipe=r.then,x.each(t,function(e,o){var a=o[2],s=o[3];r[o[1]]=a.add,s&&a.add(function(){n=s},t[1^e][2].disable,t[2][2].lock),i[o[0]]=function(){return i[o[0]+"With"](this===i?r:this,arguments),this},i[o[0]+"With"]=a.fireWith}),r.promise(i),e&&e.call(i,i),i},when:function(e){var t=0,n=g.call(arguments),r=n.length,i=1!==r||e&&x.isFunction(e.promise)?r:0,o=1===i?e:x.Deferred(),a=function(e,t,n){return function(r){t[e]=this,n[e]=arguments.length>1?g.call(arguments):r,n===s?o.notifyWith(t,n):--i||o.resolveWith(t,n)}},s,l,u;if(r>1)for(s=Array(r),l=Array(r),u=Array(r);r>t;t++)n[t]&&x.isFunction(n[t].promise)?n[t].promise().done(a(t,u,n)).fail(o.reject).progress(a(t,l,s)):--i;return i||o.resolveWith(u,n),o.promise()}}),x.support=function(t){var n,r,o,s,l,u,c,p,f,d=a.createElement("div");if(d.setAttribute("className","t"),d.innerHTML="  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>",n=d.getElementsByTagName("*")||[],r=d.getElementsByTagName("a")[0],!r||!r.style||!n.length)return t;s=a.createElement("select"),u=s.appendChild(a.createElement("option")),o=d.getElementsByTagName("input")[0],r.style.cssText="top:1px;float:left;opacity:.5",t.getSetAttribute="t"!==d.className,t.leadingWhitespace=3===d.firstChild.nodeType,t.tbody=!d.getElementsByTagName("tbody").length,t.htmlSerialize=!!d.getElementsByTagName("link").length,t.style=/top/.test(r.getAttribute("style")),t.hrefNormalized="/a"===r.getAttribute("href"),t.opacity=/^0.5/.test(r.style.opacity),t.cssFloat=!!r.style.cssFloat,t.checkOn=!!o.value,t.optSelected=u.selected,t.enctype=!!a.createElement("form").enctype,t.html5Clone="<:nav></:nav>"!==a.createElement("nav").cloneNode(!0).outerHTML,t.inlineBlockNeedsLayout=!1,t.shrinkWrapBlocks=!1,t.pixelPosition=!1,t.deleteExpando=!0,t.noCloneEvent=!0,t.reliableMarginRight=!0,t.boxSizingReliable=!0,o.checked=!0,t.noCloneChecked=o.cloneNode(!0).checked,s.disabled=!0,t.optDisabled=!u.disabled;try{delete d.test}catch(h){t.deleteExpando=!1}o=a.createElement("input"),o.setAttribute("value",""),t.input=""===o.getAttribute("value"),o.value="t",o.setAttribute("type","radio"),t.radioValue="t"===o.value,o.setAttribute("checked","t"),o.setAttribute("name","t"),l=a.createDocumentFragment(),l.appendChild(o),t.appendChecked=o.checked,t.checkClone=l.cloneNode(!0).cloneNode(!0).lastChild.checked,d.attachEvent&&(d.attachEvent("onclick",function(){t.noCloneEvent=!1}),d.cloneNode(!0).click());for(f in{submit:!0,change:!0,focusin:!0})d.setAttribute(c="on"+f,"t"),t[f+"Bubbles"]=c in e||d.attributes[c].expando===!1;d.style.backgroundClip="content-box",d.cloneNode(!0).style.backgroundClip="",t.clearCloneStyle="content-box"===d.style.backgroundClip;for(f in x(t))break;return t.ownLast="0"!==f,x(function(){var n,r,o,s="padding:0;margin:0;border:0;display:block;box-sizing:content-box;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;",l=a.getElementsByTagName("body")[0];l&&(n=a.createElement("div"),n.style.cssText="border:0;width:0;height:0;position:absolute;top:0;left:-9999px;margin-top:1px",l.appendChild(n).appendChild(d),d.innerHTML="<table><tr><td></td><td>t</td></tr></table>",o=d.getElementsByTagName("td"),o[0].style.cssText="padding:0;margin:0;border:0;display:none",p=0===o[0].offsetHeight,o[0].style.display="",o[1].style.display="none",t.reliableHiddenOffsets=p&&0===o[0].offsetHeight,d.innerHTML="",d.style.cssText="box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;padding:1px;border:1px;display:block;width:4px;margin-top:1%;position:absolute;top:1%;",x.swap(l,null!=l.style.zoom?{zoom:1}:{},function(){t.boxSizing=4===d.offsetWidth}),e.getComputedStyle&&(t.pixelPosition="1%"!==(e.getComputedStyle(d,null)||{}).top,t.boxSizingReliable="4px"===(e.getComputedStyle(d,null)||{width:"4px"}).width,r=d.appendChild(a.createElement("div")),r.style.cssText=d.style.cssText=s,r.style.marginRight=r.style.width="0",d.style.width="1px",t.reliableMarginRight=!parseFloat((e.getComputedStyle(r,null)||{}).marginRight)),typeof d.style.zoom!==i&&(d.innerHTML="",d.style.cssText=s+"width:1px;padding:1px;display:inline;zoom:1",t.inlineBlockNeedsLayout=3===d.offsetWidth,d.style.display="block",d.innerHTML="<div></div>",d.firstChild.style.width="5px",t.shrinkWrapBlocks=3!==d.offsetWidth,t.inlineBlockNeedsLayout&&(l.style.zoom=1)),l.removeChild(n),n=d=o=r=null)}),n=s=l=u=r=o=null,t
}({});var B=/(?:\{[\s\S]*\}|\[[\s\S]*\])$/,P=/([A-Z])/g;function R(e,n,r,i){if(x.acceptData(e)){var o,a,s=x.expando,l=e.nodeType,u=l?x.cache:e,c=l?e[s]:e[s]&&s;if(c&&u[c]&&(i||u[c].data)||r!==t||"string"!=typeof n)return c||(c=l?e[s]=p.pop()||x.guid++:s),u[c]||(u[c]=l?{}:{toJSON:x.noop}),("object"==typeof n||"function"==typeof n)&&(i?u[c]=x.extend(u[c],n):u[c].data=x.extend(u[c].data,n)),a=u[c],i||(a.data||(a.data={}),a=a.data),r!==t&&(a[x.camelCase(n)]=r),"string"==typeof n?(o=a[n],null==o&&(o=a[x.camelCase(n)])):o=a,o}}function W(e,t,n){if(x.acceptData(e)){var r,i,o=e.nodeType,a=o?x.cache:e,s=o?e[x.expando]:x.expando;if(a[s]){if(t&&(r=n?a[s]:a[s].data)){x.isArray(t)?t=t.concat(x.map(t,x.camelCase)):t in r?t=[t]:(t=x.camelCase(t),t=t in r?[t]:t.split(" ")),i=t.length;while(i--)delete r[t[i]];if(n?!I(r):!x.isEmptyObject(r))return}(n||(delete a[s].data,I(a[s])))&&(o?x.cleanData([e],!0):x.support.deleteExpando||a!=a.window?delete a[s]:a[s]=null)}}}x.extend({cache:{},noData:{applet:!0,embed:!0,object:"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"},hasData:function(e){return e=e.nodeType?x.cache[e[x.expando]]:e[x.expando],!!e&&!I(e)},data:function(e,t,n){return R(e,t,n)},removeData:function(e,t){return W(e,t)},_data:function(e,t,n){return R(e,t,n,!0)},_removeData:function(e,t){return W(e,t,!0)},acceptData:function(e){if(e.nodeType&&1!==e.nodeType&&9!==e.nodeType)return!1;var t=e.nodeName&&x.noData[e.nodeName.toLowerCase()];return!t||t!==!0&&e.getAttribute("classid")===t}}),x.fn.extend({data:function(e,n){var r,i,o=null,a=0,s=this[0];if(e===t){if(this.length&&(o=x.data(s),1===s.nodeType&&!x._data(s,"parsedAttrs"))){for(r=s.attributes;r.length>a;a++)i=r[a].name,0===i.indexOf("data-")&&(i=x.camelCase(i.slice(5)),$(s,i,o[i]));x._data(s,"parsedAttrs",!0)}return o}return"object"==typeof e?this.each(function(){x.data(this,e)}):arguments.length>1?this.each(function(){x.data(this,e,n)}):s?$(s,e,x.data(s,e)):null},removeData:function(e){return this.each(function(){x.removeData(this,e)})}});function $(e,n,r){if(r===t&&1===e.nodeType){var i="data-"+n.replace(P,"-$1").toLowerCase();if(r=e.getAttribute(i),"string"==typeof r){try{r="true"===r?!0:"false"===r?!1:"null"===r?null:+r+""===r?+r:B.test(r)?x.parseJSON(r):r}catch(o){}x.data(e,n,r)}else r=t}return r}function I(e){var t;for(t in e)if(("data"!==t||!x.isEmptyObject(e[t]))&&"toJSON"!==t)return!1;return!0}x.extend({queue:function(e,n,r){var i;return e?(n=(n||"fx")+"queue",i=x._data(e,n),r&&(!i||x.isArray(r)?i=x._data(e,n,x.makeArray(r)):i.push(r)),i||[]):t},dequeue:function(e,t){t=t||"fx";var n=x.queue(e,t),r=n.length,i=n.shift(),o=x._queueHooks(e,t),a=function(){x.dequeue(e,t)};"inprogress"===i&&(i=n.shift(),r--),i&&("fx"===t&&n.unshift("inprogress"),delete o.stop,i.call(e,a,o)),!r&&o&&o.empty.fire()},_queueHooks:function(e,t){var n=t+"queueHooks";return x._data(e,n)||x._data(e,n,{empty:x.Callbacks("once memory").add(function(){x._removeData(e,t+"queue"),x._removeData(e,n)})})}}),x.fn.extend({queue:function(e,n){var r=2;return"string"!=typeof e&&(n=e,e="fx",r--),r>arguments.length?x.queue(this[0],e):n===t?this:this.each(function(){var t=x.queue(this,e,n);x._queueHooks(this,e),"fx"===e&&"inprogress"!==t[0]&&x.dequeue(this,e)})},dequeue:function(e){return this.each(function(){x.dequeue(this,e)})},delay:function(e,t){return e=x.fx?x.fx.speeds[e]||e:e,t=t||"fx",this.queue(t,function(t,n){var r=setTimeout(t,e);n.stop=function(){clearTimeout(r)}})},clearQueue:function(e){return this.queue(e||"fx",[])},promise:function(e,n){var r,i=1,o=x.Deferred(),a=this,s=this.length,l=function(){--i||o.resolveWith(a,[a])};"string"!=typeof e&&(n=e,e=t),e=e||"fx";while(s--)r=x._data(a[s],e+"queueHooks"),r&&r.empty&&(i++,r.empty.add(l));return l(),o.promise(n)}});var z,X,U=/[\t\r\n\f]/g,V=/\r/g,Y=/^(?:input|select|textarea|button|object)$/i,J=/^(?:a|area)$/i,G=/^(?:checked|selected)$/i,Q=x.support.getSetAttribute,K=x.support.input;x.fn.extend({attr:function(e,t){return x.access(this,x.attr,e,t,arguments.length>1)},removeAttr:function(e){return this.each(function(){x.removeAttr(this,e)})},prop:function(e,t){return x.access(this,x.prop,e,t,arguments.length>1)},removeProp:function(e){return e=x.propFix[e]||e,this.each(function(){try{this[e]=t,delete this[e]}catch(n){}})},addClass:function(e){var t,n,r,i,o,a=0,s=this.length,l="string"==typeof e&&e;if(x.isFunction(e))return this.each(function(t){x(this).addClass(e.call(this,t,this.className))});if(l)for(t=(e||"").match(T)||[];s>a;a++)if(n=this[a],r=1===n.nodeType&&(n.className?(" "+n.className+" ").replace(U," "):" ")){o=0;while(i=t[o++])0>r.indexOf(" "+i+" ")&&(r+=i+" ");n.className=x.trim(r)}return this},removeClass:function(e){var t,n,r,i,o,a=0,s=this.length,l=0===arguments.length||"string"==typeof e&&e;if(x.isFunction(e))return this.each(function(t){x(this).removeClass(e.call(this,t,this.className))});if(l)for(t=(e||"").match(T)||[];s>a;a++)if(n=this[a],r=1===n.nodeType&&(n.className?(" "+n.className+" ").replace(U," "):"")){o=0;while(i=t[o++])while(r.indexOf(" "+i+" ")>=0)r=r.replace(" "+i+" "," ");n.className=e?x.trim(r):""}return this},toggleClass:function(e,t){var n=typeof e;return"boolean"==typeof t&&"string"===n?t?this.addClass(e):this.removeClass(e):x.isFunction(e)?this.each(function(n){x(this).toggleClass(e.call(this,n,this.className,t),t)}):this.each(function(){if("string"===n){var t,r=0,o=x(this),a=e.match(T)||[];while(t=a[r++])o.hasClass(t)?o.removeClass(t):o.addClass(t)}else(n===i||"boolean"===n)&&(this.className&&x._data(this,"__className__",this.className),this.className=this.className||e===!1?"":x._data(this,"__className__")||"")})},hasClass:function(e){var t=" "+e+" ",n=0,r=this.length;for(;r>n;n++)if(1===this[n].nodeType&&(" "+this[n].className+" ").replace(U," ").indexOf(t)>=0)return!0;return!1},val:function(e){var n,r,i,o=this[0];{if(arguments.length)return i=x.isFunction(e),this.each(function(n){var o;1===this.nodeType&&(o=i?e.call(this,n,x(this).val()):e,null==o?o="":"number"==typeof o?o+="":x.isArray(o)&&(o=x.map(o,function(e){return null==e?"":e+""})),r=x.valHooks[this.type]||x.valHooks[this.nodeName.toLowerCase()],r&&"set"in r&&r.set(this,o,"value")!==t||(this.value=o))});if(o)return r=x.valHooks[o.type]||x.valHooks[o.nodeName.toLowerCase()],r&&"get"in r&&(n=r.get(o,"value"))!==t?n:(n=o.value,"string"==typeof n?n.replace(V,""):null==n?"":n)}}}),x.extend({valHooks:{option:{get:function(e){var t=x.find.attr(e,"value");return null!=t?t:e.text}},select:{get:function(e){var t,n,r=e.options,i=e.selectedIndex,o="select-one"===e.type||0>i,a=o?null:[],s=o?i+1:r.length,l=0>i?s:o?i:0;for(;s>l;l++)if(n=r[l],!(!n.selected&&l!==i||(x.support.optDisabled?n.disabled:null!==n.getAttribute("disabled"))||n.parentNode.disabled&&x.nodeName(n.parentNode,"optgroup"))){if(t=x(n).val(),o)return t;a.push(t)}return a},set:function(e,t){var n,r,i=e.options,o=x.makeArray(t),a=i.length;while(a--)r=i[a],(r.selected=x.inArray(x(r).val(),o)>=0)&&(n=!0);return n||(e.selectedIndex=-1),o}}},attr:function(e,n,r){var o,a,s=e.nodeType;if(e&&3!==s&&8!==s&&2!==s)return typeof e.getAttribute===i?x.prop(e,n,r):(1===s&&x.isXMLDoc(e)||(n=n.toLowerCase(),o=x.attrHooks[n]||(x.expr.match.bool.test(n)?X:z)),r===t?o&&"get"in o&&null!==(a=o.get(e,n))?a:(a=x.find.attr(e,n),null==a?t:a):null!==r?o&&"set"in o&&(a=o.set(e,r,n))!==t?a:(e.setAttribute(n,r+""),r):(x.removeAttr(e,n),t))},removeAttr:function(e,t){var n,r,i=0,o=t&&t.match(T);if(o&&1===e.nodeType)while(n=o[i++])r=x.propFix[n]||n,x.expr.match.bool.test(n)?K&&Q||!G.test(n)?e[r]=!1:e[x.camelCase("default-"+n)]=e[r]=!1:x.attr(e,n,""),e.removeAttribute(Q?n:r)},attrHooks:{type:{set:function(e,t){if(!x.support.radioValue&&"radio"===t&&x.nodeName(e,"input")){var n=e.value;return e.setAttribute("type",t),n&&(e.value=n),t}}}},propFix:{"for":"htmlFor","class":"className"},prop:function(e,n,r){var i,o,a,s=e.nodeType;if(e&&3!==s&&8!==s&&2!==s)return a=1!==s||!x.isXMLDoc(e),a&&(n=x.propFix[n]||n,o=x.propHooks[n]),r!==t?o&&"set"in o&&(i=o.set(e,r,n))!==t?i:e[n]=r:o&&"get"in o&&null!==(i=o.get(e,n))?i:e[n]},propHooks:{tabIndex:{get:function(e){var t=x.find.attr(e,"tabindex");return t?parseInt(t,10):Y.test(e.nodeName)||J.test(e.nodeName)&&e.href?0:-1}}}}),X={set:function(e,t,n){return t===!1?x.removeAttr(e,n):K&&Q||!G.test(n)?e.setAttribute(!Q&&x.propFix[n]||n,n):e[x.camelCase("default-"+n)]=e[n]=!0,n}},x.each(x.expr.match.bool.source.match(/\w+/g),function(e,n){var r=x.expr.attrHandle[n]||x.find.attr;x.expr.attrHandle[n]=K&&Q||!G.test(n)?function(e,n,i){var o=x.expr.attrHandle[n],a=i?t:(x.expr.attrHandle[n]=t)!=r(e,n,i)?n.toLowerCase():null;return x.expr.attrHandle[n]=o,a}:function(e,n,r){return r?t:e[x.camelCase("default-"+n)]?n.toLowerCase():null}}),K&&Q||(x.attrHooks.value={set:function(e,n,r){return x.nodeName(e,"input")?(e.defaultValue=n,t):z&&z.set(e,n,r)}}),Q||(z={set:function(e,n,r){var i=e.getAttributeNode(r);return i||e.setAttributeNode(i=e.ownerDocument.createAttribute(r)),i.value=n+="","value"===r||n===e.getAttribute(r)?n:t}},x.expr.attrHandle.id=x.expr.attrHandle.name=x.expr.attrHandle.coords=function(e,n,r){var i;return r?t:(i=e.getAttributeNode(n))&&""!==i.value?i.value:null},x.valHooks.button={get:function(e,n){var r=e.getAttributeNode(n);return r&&r.specified?r.value:t},set:z.set},x.attrHooks.contenteditable={set:function(e,t,n){z.set(e,""===t?!1:t,n)}},x.each(["width","height"],function(e,n){x.attrHooks[n]={set:function(e,r){return""===r?(e.setAttribute(n,"auto"),r):t}}})),x.support.hrefNormalized||x.each(["href","src"],function(e,t){x.propHooks[t]={get:function(e){return e.getAttribute(t,4)}}}),x.support.style||(x.attrHooks.style={get:function(e){return e.style.cssText||t},set:function(e,t){return e.style.cssText=t+""}}),x.support.optSelected||(x.propHooks.selected={get:function(e){var t=e.parentNode;return t&&(t.selectedIndex,t.parentNode&&t.parentNode.selectedIndex),null}}),x.each(["tabIndex","readOnly","maxLength","cellSpacing","cellPadding","rowSpan","colSpan","useMap","frameBorder","contentEditable"],function(){x.propFix[this.toLowerCase()]=this}),x.support.enctype||(x.propFix.enctype="encoding"),x.each(["radio","checkbox"],function(){x.valHooks[this]={set:function(e,n){return x.isArray(n)?e.checked=x.inArray(x(e).val(),n)>=0:t}},x.support.checkOn||(x.valHooks[this].get=function(e){return null===e.getAttribute("value")?"on":e.value})});var Z=/^(?:input|select|textarea)$/i,et=/^key/,tt=/^(?:mouse|contextmenu)|click/,nt=/^(?:focusinfocus|focusoutblur)$/,rt=/^([^.]*)(?:\.(.+)|)$/;function it(){return!0}function ot(){return!1}function at(){try{return a.activeElement}catch(e){}}x.event={global:{},add:function(e,n,r,o,a){var s,l,u,c,p,f,d,h,g,m,y,v=x._data(e);if(v){r.handler&&(c=r,r=c.handler,a=c.selector),r.guid||(r.guid=x.guid++),(l=v.events)||(l=v.events={}),(f=v.handle)||(f=v.handle=function(e){return typeof x===i||e&&x.event.triggered===e.type?t:x.event.dispatch.apply(f.elem,arguments)},f.elem=e),n=(n||"").match(T)||[""],u=n.length;while(u--)s=rt.exec(n[u])||[],g=y=s[1],m=(s[2]||"").split(".").sort(),g&&(p=x.event.special[g]||{},g=(a?p.delegateType:p.bindType)||g,p=x.event.special[g]||{},d=x.extend({type:g,origType:y,data:o,handler:r,guid:r.guid,selector:a,needsContext:a&&x.expr.match.needsContext.test(a),namespace:m.join(".")},c),(h=l[g])||(h=l[g]=[],h.delegateCount=0,p.setup&&p.setup.call(e,o,m,f)!==!1||(e.addEventListener?e.addEventListener(g,f,!1):e.attachEvent&&e.attachEvent("on"+g,f))),p.add&&(p.add.call(e,d),d.handler.guid||(d.handler.guid=r.guid)),a?h.splice(h.delegateCount++,0,d):h.push(d),x.event.global[g]=!0);e=null}},remove:function(e,t,n,r,i){var o,a,s,l,u,c,p,f,d,h,g,m=x.hasData(e)&&x._data(e);if(m&&(c=m.events)){t=(t||"").match(T)||[""],u=t.length;while(u--)if(s=rt.exec(t[u])||[],d=g=s[1],h=(s[2]||"").split(".").sort(),d){p=x.event.special[d]||{},d=(r?p.delegateType:p.bindType)||d,f=c[d]||[],s=s[2]&&RegExp("(^|\\.)"+h.join("\\.(?:.*\\.|)")+"(\\.|$)"),l=o=f.length;while(o--)a=f[o],!i&&g!==a.origType||n&&n.guid!==a.guid||s&&!s.test(a.namespace)||r&&r!==a.selector&&("**"!==r||!a.selector)||(f.splice(o,1),a.selector&&f.delegateCount--,p.remove&&p.remove.call(e,a));l&&!f.length&&(p.teardown&&p.teardown.call(e,h,m.handle)!==!1||x.removeEvent(e,d,m.handle),delete c[d])}else for(d in c)x.event.remove(e,d+t[u],n,r,!0);x.isEmptyObject(c)&&(delete m.handle,x._removeData(e,"events"))}},trigger:function(n,r,i,o){var s,l,u,c,p,f,d,h=[i||a],g=v.call(n,"type")?n.type:n,m=v.call(n,"namespace")?n.namespace.split("."):[];if(u=f=i=i||a,3!==i.nodeType&&8!==i.nodeType&&!nt.test(g+x.event.triggered)&&(g.indexOf(".")>=0&&(m=g.split("."),g=m.shift(),m.sort()),l=0>g.indexOf(":")&&"on"+g,n=n[x.expando]?n:new x.Event(g,"object"==typeof n&&n),n.isTrigger=o?2:3,n.namespace=m.join("."),n.namespace_re=n.namespace?RegExp("(^|\\.)"+m.join("\\.(?:.*\\.|)")+"(\\.|$)"):null,n.result=t,n.target||(n.target=i),r=null==r?[n]:x.makeArray(r,[n]),p=x.event.special[g]||{},o||!p.trigger||p.trigger.apply(i,r)!==!1)){if(!o&&!p.noBubble&&!x.isWindow(i)){for(c=p.delegateType||g,nt.test(c+g)||(u=u.parentNode);u;u=u.parentNode)h.push(u),f=u;f===(i.ownerDocument||a)&&h.push(f.defaultView||f.parentWindow||e)}d=0;while((u=h[d++])&&!n.isPropagationStopped())n.type=d>1?c:p.bindType||g,s=(x._data(u,"events")||{})[n.type]&&x._data(u,"handle"),s&&s.apply(u,r),s=l&&u[l],s&&x.acceptData(u)&&s.apply&&s.apply(u,r)===!1&&n.preventDefault();if(n.type=g,!o&&!n.isDefaultPrevented()&&(!p._default||p._default.apply(h.pop(),r)===!1)&&x.acceptData(i)&&l&&i[g]&&!x.isWindow(i)){f=i[l],f&&(i[l]=null),x.event.triggered=g;try{i[g]()}catch(y){}x.event.triggered=t,f&&(i[l]=f)}return n.result}},dispatch:function(e){e=x.event.fix(e);var n,r,i,o,a,s=[],l=g.call(arguments),u=(x._data(this,"events")||{})[e.type]||[],c=x.event.special[e.type]||{};if(l[0]=e,e.delegateTarget=this,!c.preDispatch||c.preDispatch.call(this,e)!==!1){s=x.event.handlers.call(this,e,u),n=0;while((o=s[n++])&&!e.isPropagationStopped()){e.currentTarget=o.elem,a=0;while((i=o.handlers[a++])&&!e.isImmediatePropagationStopped())(!e.namespace_re||e.namespace_re.test(i.namespace))&&(e.handleObj=i,e.data=i.data,r=((x.event.special[i.origType]||{}).handle||i.handler).apply(o.elem,l),r!==t&&(e.result=r)===!1&&(e.preventDefault(),e.stopPropagation()))}return c.postDispatch&&c.postDispatch.call(this,e),e.result}},handlers:function(e,n){var r,i,o,a,s=[],l=n.delegateCount,u=e.target;if(l&&u.nodeType&&(!e.button||"click"!==e.type))for(;u!=this;u=u.parentNode||this)if(1===u.nodeType&&(u.disabled!==!0||"click"!==e.type)){for(o=[],a=0;l>a;a++)i=n[a],r=i.selector+" ",o[r]===t&&(o[r]=i.needsContext?x(r,this).index(u)>=0:x.find(r,this,null,[u]).length),o[r]&&o.push(i);o.length&&s.push({elem:u,handlers:o})}return n.length>l&&s.push({elem:this,handlers:n.slice(l)}),s},fix:function(e){if(e[x.expando])return e;var t,n,r,i=e.type,o=e,s=this.fixHooks[i];s||(this.fixHooks[i]=s=tt.test(i)?this.mouseHooks:et.test(i)?this.keyHooks:{}),r=s.props?this.props.concat(s.props):this.props,e=new x.Event(o),t=r.length;while(t--)n=r[t],e[n]=o[n];return e.target||(e.target=o.srcElement||a),3===e.target.nodeType&&(e.target=e.target.parentNode),e.metaKey=!!e.metaKey,s.filter?s.filter(e,o):e},props:"altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "),fixHooks:{},keyHooks:{props:"char charCode key keyCode".split(" "),filter:function(e,t){return null==e.which&&(e.which=null!=t.charCode?t.charCode:t.keyCode),e}},mouseHooks:{props:"button buttons clientX clientY fromElement offsetX offsetY pageX pageY screenX screenY toElement".split(" "),filter:function(e,n){var r,i,o,s=n.button,l=n.fromElement;return null==e.pageX&&null!=n.clientX&&(i=e.target.ownerDocument||a,o=i.documentElement,r=i.body,e.pageX=n.clientX+(o&&o.scrollLeft||r&&r.scrollLeft||0)-(o&&o.clientLeft||r&&r.clientLeft||0),e.pageY=n.clientY+(o&&o.scrollTop||r&&r.scrollTop||0)-(o&&o.clientTop||r&&r.clientTop||0)),!e.relatedTarget&&l&&(e.relatedTarget=l===e.target?n.toElement:l),e.which||s===t||(e.which=1&s?1:2&s?3:4&s?2:0),e}},special:{load:{noBubble:!0},focus:{trigger:function(){if(this!==at()&&this.focus)try{return this.focus(),!1}catch(e){}},delegateType:"focusin"},blur:{trigger:function(){return this===at()&&this.blur?(this.blur(),!1):t},delegateType:"focusout"},click:{trigger:function(){return x.nodeName(this,"input")&&"checkbox"===this.type&&this.click?(this.click(),!1):t},_default:function(e){return x.nodeName(e.target,"a")}},beforeunload:{postDispatch:function(e){e.result!==t&&(e.originalEvent.returnValue=e.result)}}},simulate:function(e,t,n,r){var i=x.extend(new x.Event,n,{type:e,isSimulated:!0,originalEvent:{}});r?x.event.trigger(i,null,t):x.event.dispatch.call(t,i),i.isDefaultPrevented()&&n.preventDefault()}},x.removeEvent=a.removeEventListener?function(e,t,n){e.removeEventListener&&e.removeEventListener(t,n,!1)}:function(e,t,n){var r="on"+t;e.detachEvent&&(typeof e[r]===i&&(e[r]=null),e.detachEvent(r,n))},x.Event=function(e,n){return this instanceof x.Event?(e&&e.type?(this.originalEvent=e,this.type=e.type,this.isDefaultPrevented=e.defaultPrevented||e.returnValue===!1||e.getPreventDefault&&e.getPreventDefault()?it:ot):this.type=e,n&&x.extend(this,n),this.timeStamp=e&&e.timeStamp||x.now(),this[x.expando]=!0,t):new x.Event(e,n)},x.Event.prototype={isDefaultPrevented:ot,isPropagationStopped:ot,isImmediatePropagationStopped:ot,preventDefault:function(){var e=this.originalEvent;this.isDefaultPrevented=it,e&&(e.preventDefault?e.preventDefault():e.returnValue=!1)},stopPropagation:function(){var e=this.originalEvent;this.isPropagationStopped=it,e&&(e.stopPropagation&&e.stopPropagation(),e.cancelBubble=!0)},stopImmediatePropagation:function(){this.isImmediatePropagationStopped=it,this.stopPropagation()}},x.each({mouseenter:"mouseover",mouseleave:"mouseout"},function(e,t){x.event.special[e]={delegateType:t,bindType:t,handle:function(e){var n,r=this,i=e.relatedTarget,o=e.handleObj;return(!i||i!==r&&!x.contains(r,i))&&(e.type=o.origType,n=o.handler.apply(this,arguments),e.type=t),n}}}),x.support.submitBubbles||(x.event.special.submit={setup:function(){return x.nodeName(this,"form")?!1:(x.event.add(this,"click._submit keypress._submit",function(e){var n=e.target,r=x.nodeName(n,"input")||x.nodeName(n,"button")?n.form:t;r&&!x._data(r,"submitBubbles")&&(x.event.add(r,"submit._submit",function(e){e._submit_bubble=!0}),x._data(r,"submitBubbles",!0))}),t)},postDispatch:function(e){e._submit_bubble&&(delete e._submit_bubble,this.parentNode&&!e.isTrigger&&x.event.simulate("submit",this.parentNode,e,!0))},teardown:function(){return x.nodeName(this,"form")?!1:(x.event.remove(this,"._submit"),t)}}),x.support.changeBubbles||(x.event.special.change={setup:function(){return Z.test(this.nodeName)?(("checkbox"===this.type||"radio"===this.type)&&(x.event.add(this,"propertychange._change",function(e){"checked"===e.originalEvent.propertyName&&(this._just_changed=!0)}),x.event.add(this,"click._change",function(e){this._just_changed&&!e.isTrigger&&(this._just_changed=!1),x.event.simulate("change",this,e,!0)})),!1):(x.event.add(this,"beforeactivate._change",function(e){var t=e.target;Z.test(t.nodeName)&&!x._data(t,"changeBubbles")&&(x.event.add(t,"change._change",function(e){!this.parentNode||e.isSimulated||e.isTrigger||x.event.simulate("change",this.parentNode,e,!0)}),x._data(t,"changeBubbles",!0))}),t)},handle:function(e){var n=e.target;return this!==n||e.isSimulated||e.isTrigger||"radio"!==n.type&&"checkbox"!==n.type?e.handleObj.handler.apply(this,arguments):t},teardown:function(){return x.event.remove(this,"._change"),!Z.test(this.nodeName)}}),x.support.focusinBubbles||x.each({focus:"focusin",blur:"focusout"},function(e,t){var n=0,r=function(e){x.event.simulate(t,e.target,x.event.fix(e),!0)};x.event.special[t]={setup:function(){0===n++&&a.addEventListener(e,r,!0)},teardown:function(){0===--n&&a.removeEventListener(e,r,!0)}}}),x.fn.extend({on:function(e,n,r,i,o){var a,s;if("object"==typeof e){"string"!=typeof n&&(r=r||n,n=t);for(a in e)this.on(a,n,r,e[a],o);return this}if(null==r&&null==i?(i=n,r=n=t):null==i&&("string"==typeof n?(i=r,r=t):(i=r,r=n,n=t)),i===!1)i=ot;else if(!i)return this;return 1===o&&(s=i,i=function(e){return x().off(e),s.apply(this,arguments)},i.guid=s.guid||(s.guid=x.guid++)),this.each(function(){x.event.add(this,e,i,r,n)})},one:function(e,t,n,r){return this.on(e,t,n,r,1)},off:function(e,n,r){var i,o;if(e&&e.preventDefault&&e.handleObj)return i=e.handleObj,x(e.delegateTarget).off(i.namespace?i.origType+"."+i.namespace:i.origType,i.selector,i.handler),this;if("object"==typeof e){for(o in e)this.off(o,n,e[o]);return this}return(n===!1||"function"==typeof n)&&(r=n,n=t),r===!1&&(r=ot),this.each(function(){x.event.remove(this,e,r,n)})},trigger:function(e,t){return this.each(function(){x.event.trigger(e,t,this)})},triggerHandler:function(e,n){var r=this[0];return r?x.event.trigger(e,n,r,!0):t}});var st=/^.[^:#\[\.,]*$/,lt=/^(?:parents|prev(?:Until|All))/,ut=x.expr.match.needsContext,ct={children:!0,contents:!0,next:!0,prev:!0};x.fn.extend({find:function(e){var t,n=[],r=this,i=r.length;if("string"!=typeof e)return this.pushStack(x(e).filter(function(){for(t=0;i>t;t++)if(x.contains(r[t],this))return!0}));for(t=0;i>t;t++)x.find(e,r[t],n);return n=this.pushStack(i>1?x.unique(n):n),n.selector=this.selector?this.selector+" "+e:e,n},has:function(e){var t,n=x(e,this),r=n.length;return this.filter(function(){for(t=0;r>t;t++)if(x.contains(this,n[t]))return!0})},not:function(e){return this.pushStack(ft(this,e||[],!0))},filter:function(e){return this.pushStack(ft(this,e||[],!1))},is:function(e){return!!ft(this,"string"==typeof e&&ut.test(e)?x(e):e||[],!1).length},closest:function(e,t){var n,r=0,i=this.length,o=[],a=ut.test(e)||"string"!=typeof e?x(e,t||this.context):0;for(;i>r;r++)for(n=this[r];n&&n!==t;n=n.parentNode)if(11>n.nodeType&&(a?a.index(n)>-1:1===n.nodeType&&x.find.matchesSelector(n,e))){n=o.push(n);break}return this.pushStack(o.length>1?x.unique(o):o)},index:function(e){return e?"string"==typeof e?x.inArray(this[0],x(e)):x.inArray(e.jquery?e[0]:e,this):this[0]&&this[0].parentNode?this.first().prevAll().length:-1},add:function(e,t){var n="string"==typeof e?x(e,t):x.makeArray(e&&e.nodeType?[e]:e),r=x.merge(this.get(),n);return this.pushStack(x.unique(r))},addBack:function(e){return this.add(null==e?this.prevObject:this.prevObject.filter(e))}});function pt(e,t){do e=e[t];while(e&&1!==e.nodeType);return e}x.each({parent:function(e){var t=e.parentNode;return t&&11!==t.nodeType?t:null},parents:function(e){return x.dir(e,"parentNode")},parentsUntil:function(e,t,n){return x.dir(e,"parentNode",n)},next:function(e){return pt(e,"nextSibling")},prev:function(e){return pt(e,"previousSibling")},nextAll:function(e){return x.dir(e,"nextSibling")},prevAll:function(e){return x.dir(e,"previousSibling")},nextUntil:function(e,t,n){return x.dir(e,"nextSibling",n)},prevUntil:function(e,t,n){return x.dir(e,"previousSibling",n)},siblings:function(e){return x.sibling((e.parentNode||{}).firstChild,e)},children:function(e){return x.sibling(e.firstChild)},contents:function(e){return x.nodeName(e,"iframe")?e.contentDocument||e.contentWindow.document:x.merge([],e.childNodes)}},function(e,t){x.fn[e]=function(n,r){var i=x.map(this,t,n);return"Until"!==e.slice(-5)&&(r=n),r&&"string"==typeof r&&(i=x.filter(r,i)),this.length>1&&(ct[e]||(i=x.unique(i)),lt.test(e)&&(i=i.reverse())),this.pushStack(i)}}),x.extend({filter:function(e,t,n){var r=t[0];return n&&(e=":not("+e+")"),1===t.length&&1===r.nodeType?x.find.matchesSelector(r,e)?[r]:[]:x.find.matches(e,x.grep(t,function(e){return 1===e.nodeType}))},dir:function(e,n,r){var i=[],o=e[n];while(o&&9!==o.nodeType&&(r===t||1!==o.nodeType||!x(o).is(r)))1===o.nodeType&&i.push(o),o=o[n];return i},sibling:function(e,t){var n=[];for(;e;e=e.nextSibling)1===e.nodeType&&e!==t&&n.push(e);return n}});function ft(e,t,n){if(x.isFunction(t))return x.grep(e,function(e,r){return!!t.call(e,r,e)!==n});if(t.nodeType)return x.grep(e,function(e){return e===t!==n});if("string"==typeof t){if(st.test(t))return x.filter(t,e,n);t=x.filter(t,e)}return x.grep(e,function(e){return x.inArray(e,t)>=0!==n})}function dt(e){var t=ht.split("|"),n=e.createDocumentFragment();if(n.createElement)while(t.length)n.createElement(t.pop());return n}var ht="abbr|article|aside|audio|bdi|canvas|data|datalist|details|figcaption|figure|footer|header|hgroup|mark|meter|nav|output|progress|section|summary|time|video",gt=/ jQuery\d+="(?:null|\d+)"/g,mt=RegExp("<(?:"+ht+")[\\s/>]","i"),yt=/^\s+/,vt=/<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi,bt=/<([\w:]+)/,xt=/<tbody/i,wt=/<|&#?\w+;/,Tt=/<(?:script|style|link)/i,Ct=/^(?:checkbox|radio)$/i,Nt=/checked\s*(?:[^=]|=\s*.checked.)/i,kt=/^$|\/(?:java|ecma)script/i,Et=/^true\/(.*)/,St=/^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g,At={option:[1,"<select multiple='multiple'>","</select>"],legend:[1,"<fieldset>","</fieldset>"],area:[1,"<map>","</map>"],param:[1,"<object>","</object>"],thead:[1,"<table>","</table>"],tr:[2,"<table><tbody>","</tbody></table>"],col:[2,"<table><tbody></tbody><colgroup>","</colgroup></table>"],td:[3,"<table><tbody><tr>","</tr></tbody></table>"],_default:x.support.htmlSerialize?[0,"",""]:[1,"X<div>","</div>"]},jt=dt(a),Dt=jt.appendChild(a.createElement("div"));At.optgroup=At.option,At.tbody=At.tfoot=At.colgroup=At.caption=At.thead,At.th=At.td,x.fn.extend({text:function(e){return x.access(this,function(e){return e===t?x.text(this):this.empty().append((this[0]&&this[0].ownerDocument||a).createTextNode(e))},null,e,arguments.length)},append:function(){return this.domManip(arguments,function(e){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var t=Lt(this,e);t.appendChild(e)}})},prepend:function(){return this.domManip(arguments,function(e){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var t=Lt(this,e);t.insertBefore(e,t.firstChild)}})},before:function(){return this.domManip(arguments,function(e){this.parentNode&&this.parentNode.insertBefore(e,this)})},after:function(){return this.domManip(arguments,function(e){this.parentNode&&this.parentNode.insertBefore(e,this.nextSibling)})},remove:function(e,t){var n,r=e?x.filter(e,this):this,i=0;for(;null!=(n=r[i]);i++)t||1!==n.nodeType||x.cleanData(Ft(n)),n.parentNode&&(t&&x.contains(n.ownerDocument,n)&&_t(Ft(n,"script")),n.parentNode.removeChild(n));return this},empty:function(){var e,t=0;for(;null!=(e=this[t]);t++){1===e.nodeType&&x.cleanData(Ft(e,!1));while(e.firstChild)e.removeChild(e.firstChild);e.options&&x.nodeName(e,"select")&&(e.options.length=0)}return this},clone:function(e,t){return e=null==e?!1:e,t=null==t?e:t,this.map(function(){return x.clone(this,e,t)})},html:function(e){return x.access(this,function(e){var n=this[0]||{},r=0,i=this.length;if(e===t)return 1===n.nodeType?n.innerHTML.replace(gt,""):t;if(!("string"!=typeof e||Tt.test(e)||!x.support.htmlSerialize&&mt.test(e)||!x.support.leadingWhitespace&&yt.test(e)||At[(bt.exec(e)||["",""])[1].toLowerCase()])){e=e.replace(vt,"<$1></$2>");try{for(;i>r;r++)n=this[r]||{},1===n.nodeType&&(x.cleanData(Ft(n,!1)),n.innerHTML=e);n=0}catch(o){}}n&&this.empty().append(e)},null,e,arguments.length)},replaceWith:function(){var e=x.map(this,function(e){return[e.nextSibling,e.parentNode]}),t=0;return this.domManip(arguments,function(n){var r=e[t++],i=e[t++];i&&(r&&r.parentNode!==i&&(r=this.nextSibling),x(this).remove(),i.insertBefore(n,r))},!0),t?this:this.remove()},detach:function(e){return this.remove(e,!0)},domManip:function(e,t,n){e=d.apply([],e);var r,i,o,a,s,l,u=0,c=this.length,p=this,f=c-1,h=e[0],g=x.isFunction(h);if(g||!(1>=c||"string"!=typeof h||x.support.checkClone)&&Nt.test(h))return this.each(function(r){var i=p.eq(r);g&&(e[0]=h.call(this,r,i.html())),i.domManip(e,t,n)});if(c&&(l=x.buildFragment(e,this[0].ownerDocument,!1,!n&&this),r=l.firstChild,1===l.childNodes.length&&(l=r),r)){for(a=x.map(Ft(l,"script"),Ht),o=a.length;c>u;u++)i=l,u!==f&&(i=x.clone(i,!0,!0),o&&x.merge(a,Ft(i,"script"))),t.call(this[u],i,u);if(o)for(s=a[a.length-1].ownerDocument,x.map(a,qt),u=0;o>u;u++)i=a[u],kt.test(i.type||"")&&!x._data(i,"globalEval")&&x.contains(s,i)&&(i.src?x._evalUrl(i.src):x.globalEval((i.text||i.textContent||i.innerHTML||"").replace(St,"")));l=r=null}return this}});function Lt(e,t){return x.nodeName(e,"table")&&x.nodeName(1===t.nodeType?t:t.firstChild,"tr")?e.getElementsByTagName("tbody")[0]||e.appendChild(e.ownerDocument.createElement("tbody")):e}function Ht(e){return e.type=(null!==x.find.attr(e,"type"))+"/"+e.type,e}function qt(e){var t=Et.exec(e.type);return t?e.type=t[1]:e.removeAttribute("type"),e}function _t(e,t){var n,r=0;for(;null!=(n=e[r]);r++)x._data(n,"globalEval",!t||x._data(t[r],"globalEval"))}function Mt(e,t){if(1===t.nodeType&&x.hasData(e)){var n,r,i,o=x._data(e),a=x._data(t,o),s=o.events;if(s){delete a.handle,a.events={};for(n in s)for(r=0,i=s[n].length;i>r;r++)x.event.add(t,n,s[n][r])}a.data&&(a.data=x.extend({},a.data))}}function Ot(e,t){var n,r,i;if(1===t.nodeType){if(n=t.nodeName.toLowerCase(),!x.support.noCloneEvent&&t[x.expando]){i=x._data(t);for(r in i.events)x.removeEvent(t,r,i.handle);t.removeAttribute(x.expando)}"script"===n&&t.text!==e.text?(Ht(t).text=e.text,qt(t)):"object"===n?(t.parentNode&&(t.outerHTML=e.outerHTML),x.support.html5Clone&&e.innerHTML&&!x.trim(t.innerHTML)&&(t.innerHTML=e.innerHTML)):"input"===n&&Ct.test(e.type)?(t.defaultChecked=t.checked=e.checked,t.value!==e.value&&(t.value=e.value)):"option"===n?t.defaultSelected=t.selected=e.defaultSelected:("input"===n||"textarea"===n)&&(t.defaultValue=e.defaultValue)}}x.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},function(e,t){x.fn[e]=function(e){var n,r=0,i=[],o=x(e),a=o.length-1;for(;a>=r;r++)n=r===a?this:this.clone(!0),x(o[r])[t](n),h.apply(i,n.get());return this.pushStack(i)}});function Ft(e,n){var r,o,a=0,s=typeof e.getElementsByTagName!==i?e.getElementsByTagName(n||"*"):typeof e.querySelectorAll!==i?e.querySelectorAll(n||"*"):t;if(!s)for(s=[],r=e.childNodes||e;null!=(o=r[a]);a++)!n||x.nodeName(o,n)?s.push(o):x.merge(s,Ft(o,n));return n===t||n&&x.nodeName(e,n)?x.merge([e],s):s}function Bt(e){Ct.test(e.type)&&(e.defaultChecked=e.checked)}x.extend({clone:function(e,t,n){var r,i,o,a,s,l=x.contains(e.ownerDocument,e);if(x.support.html5Clone||x.isXMLDoc(e)||!mt.test("<"+e.nodeName+">")?o=e.cloneNode(!0):(Dt.innerHTML=e.outerHTML,Dt.removeChild(o=Dt.firstChild)),!(x.support.noCloneEvent&&x.support.noCloneChecked||1!==e.nodeType&&11!==e.nodeType||x.isXMLDoc(e)))for(r=Ft(o),s=Ft(e),a=0;null!=(i=s[a]);++a)r[a]&&Ot(i,r[a]);if(t)if(n)for(s=s||Ft(e),r=r||Ft(o),a=0;null!=(i=s[a]);a++)Mt(i,r[a]);else Mt(e,o);return r=Ft(o,"script"),r.length>0&&_t(r,!l&&Ft(e,"script")),r=s=i=null,o},buildFragment:function(e,t,n,r){var i,o,a,s,l,u,c,p=e.length,f=dt(t),d=[],h=0;for(;p>h;h++)if(o=e[h],o||0===o)if("object"===x.type(o))x.merge(d,o.nodeType?[o]:o);else if(wt.test(o)){s=s||f.appendChild(t.createElement("div")),l=(bt.exec(o)||["",""])[1].toLowerCase(),c=At[l]||At._default,s.innerHTML=c[1]+o.replace(vt,"<$1></$2>")+c[2],i=c[0];while(i--)s=s.lastChild;if(!x.support.leadingWhitespace&&yt.test(o)&&d.push(t.createTextNode(yt.exec(o)[0])),!x.support.tbody){o="table"!==l||xt.test(o)?"<table>"!==c[1]||xt.test(o)?0:s:s.firstChild,i=o&&o.childNodes.length;while(i--)x.nodeName(u=o.childNodes[i],"tbody")&&!u.childNodes.length&&o.removeChild(u)}x.merge(d,s.childNodes),s.textContent="";while(s.firstChild)s.removeChild(s.firstChild);s=f.lastChild}else d.push(t.createTextNode(o));s&&f.removeChild(s),x.support.appendChecked||x.grep(Ft(d,"input"),Bt),h=0;while(o=d[h++])if((!r||-1===x.inArray(o,r))&&(a=x.contains(o.ownerDocument,o),s=Ft(f.appendChild(o),"script"),a&&_t(s),n)){i=0;while(o=s[i++])kt.test(o.type||"")&&n.push(o)}return s=null,f},cleanData:function(e,t){var n,r,o,a,s=0,l=x.expando,u=x.cache,c=x.support.deleteExpando,f=x.event.special;for(;null!=(n=e[s]);s++)if((t||x.acceptData(n))&&(o=n[l],a=o&&u[o])){if(a.events)for(r in a.events)f[r]?x.event.remove(n,r):x.removeEvent(n,r,a.handle);
u[o]&&(delete u[o],c?delete n[l]:typeof n.removeAttribute!==i?n.removeAttribute(l):n[l]=null,p.push(o))}},_evalUrl:function(e){return x.ajax({url:e,type:"GET",dataType:"script",async:!1,global:!1,"throws":!0})}}),x.fn.extend({wrapAll:function(e){if(x.isFunction(e))return this.each(function(t){x(this).wrapAll(e.call(this,t))});if(this[0]){var t=x(e,this[0].ownerDocument).eq(0).clone(!0);this[0].parentNode&&t.insertBefore(this[0]),t.map(function(){var e=this;while(e.firstChild&&1===e.firstChild.nodeType)e=e.firstChild;return e}).append(this)}return this},wrapInner:function(e){return x.isFunction(e)?this.each(function(t){x(this).wrapInner(e.call(this,t))}):this.each(function(){var t=x(this),n=t.contents();n.length?n.wrapAll(e):t.append(e)})},wrap:function(e){var t=x.isFunction(e);return this.each(function(n){x(this).wrapAll(t?e.call(this,n):e)})},unwrap:function(){return this.parent().each(function(){x.nodeName(this,"body")||x(this).replaceWith(this.childNodes)}).end()}});var Pt,Rt,Wt,$t=/alpha\([^)]*\)/i,It=/opacity\s*=\s*([^)]*)/,zt=/^(top|right|bottom|left)$/,Xt=/^(none|table(?!-c[ea]).+)/,Ut=/^margin/,Vt=RegExp("^("+w+")(.*)$","i"),Yt=RegExp("^("+w+")(?!px)[a-z%]+$","i"),Jt=RegExp("^([+-])=("+w+")","i"),Gt={BODY:"block"},Qt={position:"absolute",visibility:"hidden",display:"block"},Kt={letterSpacing:0,fontWeight:400},Zt=["Top","Right","Bottom","Left"],en=["Webkit","O","Moz","ms"];function tn(e,t){if(t in e)return t;var n=t.charAt(0).toUpperCase()+t.slice(1),r=t,i=en.length;while(i--)if(t=en[i]+n,t in e)return t;return r}function nn(e,t){return e=t||e,"none"===x.css(e,"display")||!x.contains(e.ownerDocument,e)}function rn(e,t){var n,r,i,o=[],a=0,s=e.length;for(;s>a;a++)r=e[a],r.style&&(o[a]=x._data(r,"olddisplay"),n=r.style.display,t?(o[a]||"none"!==n||(r.style.display=""),""===r.style.display&&nn(r)&&(o[a]=x._data(r,"olddisplay",ln(r.nodeName)))):o[a]||(i=nn(r),(n&&"none"!==n||!i)&&x._data(r,"olddisplay",i?n:x.css(r,"display"))));for(a=0;s>a;a++)r=e[a],r.style&&(t&&"none"!==r.style.display&&""!==r.style.display||(r.style.display=t?o[a]||"":"none"));return e}x.fn.extend({css:function(e,n){return x.access(this,function(e,n,r){var i,o,a={},s=0;if(x.isArray(n)){for(o=Rt(e),i=n.length;i>s;s++)a[n[s]]=x.css(e,n[s],!1,o);return a}return r!==t?x.style(e,n,r):x.css(e,n)},e,n,arguments.length>1)},show:function(){return rn(this,!0)},hide:function(){return rn(this)},toggle:function(e){return"boolean"==typeof e?e?this.show():this.hide():this.each(function(){nn(this)?x(this).show():x(this).hide()})}}),x.extend({cssHooks:{opacity:{get:function(e,t){if(t){var n=Wt(e,"opacity");return""===n?"1":n}}}},cssNumber:{columnCount:!0,fillOpacity:!0,fontWeight:!0,lineHeight:!0,opacity:!0,order:!0,orphans:!0,widows:!0,zIndex:!0,zoom:!0},cssProps:{"float":x.support.cssFloat?"cssFloat":"styleFloat"},style:function(e,n,r,i){if(e&&3!==e.nodeType&&8!==e.nodeType&&e.style){var o,a,s,l=x.camelCase(n),u=e.style;if(n=x.cssProps[l]||(x.cssProps[l]=tn(u,l)),s=x.cssHooks[n]||x.cssHooks[l],r===t)return s&&"get"in s&&(o=s.get(e,!1,i))!==t?o:u[n];if(a=typeof r,"string"===a&&(o=Jt.exec(r))&&(r=(o[1]+1)*o[2]+parseFloat(x.css(e,n)),a="number"),!(null==r||"number"===a&&isNaN(r)||("number"!==a||x.cssNumber[l]||(r+="px"),x.support.clearCloneStyle||""!==r||0!==n.indexOf("background")||(u[n]="inherit"),s&&"set"in s&&(r=s.set(e,r,i))===t)))try{u[n]=r}catch(c){}}},css:function(e,n,r,i){var o,a,s,l=x.camelCase(n);return n=x.cssProps[l]||(x.cssProps[l]=tn(e.style,l)),s=x.cssHooks[n]||x.cssHooks[l],s&&"get"in s&&(a=s.get(e,!0,r)),a===t&&(a=Wt(e,n,i)),"normal"===a&&n in Kt&&(a=Kt[n]),""===r||r?(o=parseFloat(a),r===!0||x.isNumeric(o)?o||0:a):a}}),e.getComputedStyle?(Rt=function(t){return e.getComputedStyle(t,null)},Wt=function(e,n,r){var i,o,a,s=r||Rt(e),l=s?s.getPropertyValue(n)||s[n]:t,u=e.style;return s&&(""!==l||x.contains(e.ownerDocument,e)||(l=x.style(e,n)),Yt.test(l)&&Ut.test(n)&&(i=u.width,o=u.minWidth,a=u.maxWidth,u.minWidth=u.maxWidth=u.width=l,l=s.width,u.width=i,u.minWidth=o,u.maxWidth=a)),l}):a.documentElement.currentStyle&&(Rt=function(e){return e.currentStyle},Wt=function(e,n,r){var i,o,a,s=r||Rt(e),l=s?s[n]:t,u=e.style;return null==l&&u&&u[n]&&(l=u[n]),Yt.test(l)&&!zt.test(n)&&(i=u.left,o=e.runtimeStyle,a=o&&o.left,a&&(o.left=e.currentStyle.left),u.left="fontSize"===n?"1em":l,l=u.pixelLeft+"px",u.left=i,a&&(o.left=a)),""===l?"auto":l});function on(e,t,n){var r=Vt.exec(t);return r?Math.max(0,r[1]-(n||0))+(r[2]||"px"):t}function an(e,t,n,r,i){var o=n===(r?"border":"content")?4:"width"===t?1:0,a=0;for(;4>o;o+=2)"margin"===n&&(a+=x.css(e,n+Zt[o],!0,i)),r?("content"===n&&(a-=x.css(e,"padding"+Zt[o],!0,i)),"margin"!==n&&(a-=x.css(e,"border"+Zt[o]+"Width",!0,i))):(a+=x.css(e,"padding"+Zt[o],!0,i),"padding"!==n&&(a+=x.css(e,"border"+Zt[o]+"Width",!0,i)));return a}function sn(e,t,n){var r=!0,i="width"===t?e.offsetWidth:e.offsetHeight,o=Rt(e),a=x.support.boxSizing&&"border-box"===x.css(e,"boxSizing",!1,o);if(0>=i||null==i){if(i=Wt(e,t,o),(0>i||null==i)&&(i=e.style[t]),Yt.test(i))return i;r=a&&(x.support.boxSizingReliable||i===e.style[t]),i=parseFloat(i)||0}return i+an(e,t,n||(a?"border":"content"),r,o)+"px"}function ln(e){var t=a,n=Gt[e];return n||(n=un(e,t),"none"!==n&&n||(Pt=(Pt||x("<iframe frameborder='0' width='0' height='0'/>").css("cssText","display:block !important")).appendTo(t.documentElement),t=(Pt[0].contentWindow||Pt[0].contentDocument).document,t.write("<!doctype html><html><body>"),t.close(),n=un(e,t),Pt.detach()),Gt[e]=n),n}function un(e,t){var n=x(t.createElement(e)).appendTo(t.body),r=x.css(n[0],"display");return n.remove(),r}x.each(["height","width"],function(e,n){x.cssHooks[n]={get:function(e,r,i){return r?0===e.offsetWidth&&Xt.test(x.css(e,"display"))?x.swap(e,Qt,function(){return sn(e,n,i)}):sn(e,n,i):t},set:function(e,t,r){var i=r&&Rt(e);return on(e,t,r?an(e,n,r,x.support.boxSizing&&"border-box"===x.css(e,"boxSizing",!1,i),i):0)}}}),x.support.opacity||(x.cssHooks.opacity={get:function(e,t){return It.test((t&&e.currentStyle?e.currentStyle.filter:e.style.filter)||"")?.01*parseFloat(RegExp.$1)+"":t?"1":""},set:function(e,t){var n=e.style,r=e.currentStyle,i=x.isNumeric(t)?"alpha(opacity="+100*t+")":"",o=r&&r.filter||n.filter||"";n.zoom=1,(t>=1||""===t)&&""===x.trim(o.replace($t,""))&&n.removeAttribute&&(n.removeAttribute("filter"),""===t||r&&!r.filter)||(n.filter=$t.test(o)?o.replace($t,i):o+" "+i)}}),x(function(){x.support.reliableMarginRight||(x.cssHooks.marginRight={get:function(e,n){return n?x.swap(e,{display:"inline-block"},Wt,[e,"marginRight"]):t}}),!x.support.pixelPosition&&x.fn.position&&x.each(["top","left"],function(e,n){x.cssHooks[n]={get:function(e,r){return r?(r=Wt(e,n),Yt.test(r)?x(e).position()[n]+"px":r):t}}})}),x.expr&&x.expr.filters&&(x.expr.filters.hidden=function(e){return 0>=e.offsetWidth&&0>=e.offsetHeight||!x.support.reliableHiddenOffsets&&"none"===(e.style&&e.style.display||x.css(e,"display"))},x.expr.filters.visible=function(e){return!x.expr.filters.hidden(e)}),x.each({margin:"",padding:"",border:"Width"},function(e,t){x.cssHooks[e+t]={expand:function(n){var r=0,i={},o="string"==typeof n?n.split(" "):[n];for(;4>r;r++)i[e+Zt[r]+t]=o[r]||o[r-2]||o[0];return i}},Ut.test(e)||(x.cssHooks[e+t].set=on)});var cn=/%20/g,pn=/\[\]$/,fn=/\r?\n/g,dn=/^(?:submit|button|image|reset|file)$/i,hn=/^(?:input|select|textarea|keygen)/i;x.fn.extend({serialize:function(){return x.param(this.serializeArray())},serializeArray:function(){return this.map(function(){var e=x.prop(this,"elements");return e?x.makeArray(e):this}).filter(function(){var e=this.type;return this.name&&!x(this).is(":disabled")&&hn.test(this.nodeName)&&!dn.test(e)&&(this.checked||!Ct.test(e))}).map(function(e,t){var n=x(this).val();return null==n?null:x.isArray(n)?x.map(n,function(e){return{name:t.name,value:e.replace(fn,"\r\n")}}):{name:t.name,value:n.replace(fn,"\r\n")}}).get()}}),x.param=function(e,n){var r,i=[],o=function(e,t){t=x.isFunction(t)?t():null==t?"":t,i[i.length]=encodeURIComponent(e)+"="+encodeURIComponent(t)};if(n===t&&(n=x.ajaxSettings&&x.ajaxSettings.traditional),x.isArray(e)||e.jquery&&!x.isPlainObject(e))x.each(e,function(){o(this.name,this.value)});else for(r in e)gn(r,e[r],n,o);return i.join("&").replace(cn,"+")};function gn(e,t,n,r){var i;if(x.isArray(t))x.each(t,function(t,i){n||pn.test(e)?r(e,i):gn(e+"["+("object"==typeof i?t:"")+"]",i,n,r)});else if(n||"object"!==x.type(t))r(e,t);else for(i in t)gn(e+"["+i+"]",t[i],n,r)}x.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "),function(e,t){x.fn[t]=function(e,n){return arguments.length>0?this.on(t,null,e,n):this.trigger(t)}}),x.fn.extend({hover:function(e,t){return this.mouseenter(e).mouseleave(t||e)},bind:function(e,t,n){return this.on(e,null,t,n)},unbind:function(e,t){return this.off(e,null,t)},delegate:function(e,t,n,r){return this.on(t,e,n,r)},undelegate:function(e,t,n){return 1===arguments.length?this.off(e,"**"):this.off(t,e||"**",n)}});var mn,yn,vn=x.now(),bn=/\?/,xn=/#.*$/,wn=/([?&])_=[^&]*/,Tn=/^(.*?):[ \t]*([^\r\n]*)\r?$/gm,Cn=/^(?:about|app|app-storage|.+-extension|file|res|widget):$/,Nn=/^(?:GET|HEAD)$/,kn=/^\/\//,En=/^([\w.+-]+:)(?:\/\/([^\/?#:]*)(?::(\d+)|)|)/,Sn=x.fn.load,An={},jn={},Dn="*/".concat("*");try{yn=o.href}catch(Ln){yn=a.createElement("a"),yn.href="",yn=yn.href}mn=En.exec(yn.toLowerCase())||[];function Hn(e){return function(t,n){"string"!=typeof t&&(n=t,t="*");var r,i=0,o=t.toLowerCase().match(T)||[];if(x.isFunction(n))while(r=o[i++])"+"===r[0]?(r=r.slice(1)||"*",(e[r]=e[r]||[]).unshift(n)):(e[r]=e[r]||[]).push(n)}}function qn(e,n,r,i){var o={},a=e===jn;function s(l){var u;return o[l]=!0,x.each(e[l]||[],function(e,l){var c=l(n,r,i);return"string"!=typeof c||a||o[c]?a?!(u=c):t:(n.dataTypes.unshift(c),s(c),!1)}),u}return s(n.dataTypes[0])||!o["*"]&&s("*")}function _n(e,n){var r,i,o=x.ajaxSettings.flatOptions||{};for(i in n)n[i]!==t&&((o[i]?e:r||(r={}))[i]=n[i]);return r&&x.extend(!0,e,r),e}x.fn.load=function(e,n,r){if("string"!=typeof e&&Sn)return Sn.apply(this,arguments);var i,o,a,s=this,l=e.indexOf(" ");return l>=0&&(i=e.slice(l,e.length),e=e.slice(0,l)),x.isFunction(n)?(r=n,n=t):n&&"object"==typeof n&&(a="POST"),s.length>0&&x.ajax({url:e,type:a,dataType:"html",data:n}).done(function(e){o=arguments,s.html(i?x("<div>").append(x.parseHTML(e)).find(i):e)}).complete(r&&function(e,t){s.each(r,o||[e.responseText,t,e])}),this},x.each(["ajaxStart","ajaxStop","ajaxComplete","ajaxError","ajaxSuccess","ajaxSend"],function(e,t){x.fn[t]=function(e){return this.on(t,e)}}),x.extend({active:0,lastModified:{},etag:{},ajaxSettings:{url:yn,type:"GET",isLocal:Cn.test(mn[1]),global:!0,processData:!0,async:!0,contentType:"application/x-www-form-urlencoded; charset=UTF-8",accepts:{"*":Dn,text:"text/plain",html:"text/html",xml:"application/xml, text/xml",json:"application/json, text/javascript"},contents:{xml:/xml/,html:/html/,json:/json/},responseFields:{xml:"responseXML",text:"responseText",json:"responseJSON"},converters:{"* text":String,"text html":!0,"text json":x.parseJSON,"text xml":x.parseXML},flatOptions:{url:!0,context:!0}},ajaxSetup:function(e,t){return t?_n(_n(e,x.ajaxSettings),t):_n(x.ajaxSettings,e)},ajaxPrefilter:Hn(An),ajaxTransport:Hn(jn),ajax:function(e,n){"object"==typeof e&&(n=e,e=t),n=n||{};var r,i,o,a,s,l,u,c,p=x.ajaxSetup({},n),f=p.context||p,d=p.context&&(f.nodeType||f.jquery)?x(f):x.event,h=x.Deferred(),g=x.Callbacks("once memory"),m=p.statusCode||{},y={},v={},b=0,w="canceled",C={readyState:0,getResponseHeader:function(e){var t;if(2===b){if(!c){c={};while(t=Tn.exec(a))c[t[1].toLowerCase()]=t[2]}t=c[e.toLowerCase()]}return null==t?null:t},getAllResponseHeaders:function(){return 2===b?a:null},setRequestHeader:function(e,t){var n=e.toLowerCase();return b||(e=v[n]=v[n]||e,y[e]=t),this},overrideMimeType:function(e){return b||(p.mimeType=e),this},statusCode:function(e){var t;if(e)if(2>b)for(t in e)m[t]=[m[t],e[t]];else C.always(e[C.status]);return this},abort:function(e){var t=e||w;return u&&u.abort(t),k(0,t),this}};if(h.promise(C).complete=g.add,C.success=C.done,C.error=C.fail,p.url=((e||p.url||yn)+"").replace(xn,"").replace(kn,mn[1]+"//"),p.type=n.method||n.type||p.method||p.type,p.dataTypes=x.trim(p.dataType||"*").toLowerCase().match(T)||[""],null==p.crossDomain&&(r=En.exec(p.url.toLowerCase()),p.crossDomain=!(!r||r[1]===mn[1]&&r[2]===mn[2]&&(r[3]||("http:"===r[1]?"80":"443"))===(mn[3]||("http:"===mn[1]?"80":"443")))),p.data&&p.processData&&"string"!=typeof p.data&&(p.data=x.param(p.data,p.traditional)),qn(An,p,n,C),2===b)return C;l=p.global,l&&0===x.active++&&x.event.trigger("ajaxStart"),p.type=p.type.toUpperCase(),p.hasContent=!Nn.test(p.type),o=p.url,p.hasContent||(p.data&&(o=p.url+=(bn.test(o)?"&":"?")+p.data,delete p.data),p.cache===!1&&(p.url=wn.test(o)?o.replace(wn,"$1_="+vn++):o+(bn.test(o)?"&":"?")+"_="+vn++)),p.ifModified&&(x.lastModified[o]&&C.setRequestHeader("If-Modified-Since",x.lastModified[o]),x.etag[o]&&C.setRequestHeader("If-None-Match",x.etag[o])),(p.data&&p.hasContent&&p.contentType!==!1||n.contentType)&&C.setRequestHeader("Content-Type",p.contentType),C.setRequestHeader("Accept",p.dataTypes[0]&&p.accepts[p.dataTypes[0]]?p.accepts[p.dataTypes[0]]+("*"!==p.dataTypes[0]?", "+Dn+"; q=0.01":""):p.accepts["*"]);for(i in p.headers)C.setRequestHeader(i,p.headers[i]);if(p.beforeSend&&(p.beforeSend.call(f,C,p)===!1||2===b))return C.abort();w="abort";for(i in{success:1,error:1,complete:1})C[i](p[i]);if(u=qn(jn,p,n,C)){C.readyState=1,l&&d.trigger("ajaxSend",[C,p]),p.async&&p.timeout>0&&(s=setTimeout(function(){C.abort("timeout")},p.timeout));try{b=1,u.send(y,k)}catch(N){if(!(2>b))throw N;k(-1,N)}}else k(-1,"No Transport");function k(e,n,r,i){var c,y,v,w,T,N=n;2!==b&&(b=2,s&&clearTimeout(s),u=t,a=i||"",C.readyState=e>0?4:0,c=e>=200&&300>e||304===e,r&&(w=Mn(p,C,r)),w=On(p,w,C,c),c?(p.ifModified&&(T=C.getResponseHeader("Last-Modified"),T&&(x.lastModified[o]=T),T=C.getResponseHeader("etag"),T&&(x.etag[o]=T)),204===e||"HEAD"===p.type?N="nocontent":304===e?N="notmodified":(N=w.state,y=w.data,v=w.error,c=!v)):(v=N,(e||!N)&&(N="error",0>e&&(e=0))),C.status=e,C.statusText=(n||N)+"",c?h.resolveWith(f,[y,N,C]):h.rejectWith(f,[C,N,v]),C.statusCode(m),m=t,l&&d.trigger(c?"ajaxSuccess":"ajaxError",[C,p,c?y:v]),g.fireWith(f,[C,N]),l&&(d.trigger("ajaxComplete",[C,p]),--x.active||x.event.trigger("ajaxStop")))}return C},getJSON:function(e,t,n){return x.get(e,t,n,"json")},getScript:function(e,n){return x.get(e,t,n,"script")}}),x.each(["get","post"],function(e,n){x[n]=function(e,r,i,o){return x.isFunction(r)&&(o=o||i,i=r,r=t),x.ajax({url:e,type:n,dataType:o,data:r,success:i})}});function Mn(e,n,r){var i,o,a,s,l=e.contents,u=e.dataTypes;while("*"===u[0])u.shift(),o===t&&(o=e.mimeType||n.getResponseHeader("Content-Type"));if(o)for(s in l)if(l[s]&&l[s].test(o)){u.unshift(s);break}if(u[0]in r)a=u[0];else{for(s in r){if(!u[0]||e.converters[s+" "+u[0]]){a=s;break}i||(i=s)}a=a||i}return a?(a!==u[0]&&u.unshift(a),r[a]):t}function On(e,t,n,r){var i,o,a,s,l,u={},c=e.dataTypes.slice();if(c[1])for(a in e.converters)u[a.toLowerCase()]=e.converters[a];o=c.shift();while(o)if(e.responseFields[o]&&(n[e.responseFields[o]]=t),!l&&r&&e.dataFilter&&(t=e.dataFilter(t,e.dataType)),l=o,o=c.shift())if("*"===o)o=l;else if("*"!==l&&l!==o){if(a=u[l+" "+o]||u["* "+o],!a)for(i in u)if(s=i.split(" "),s[1]===o&&(a=u[l+" "+s[0]]||u["* "+s[0]])){a===!0?a=u[i]:u[i]!==!0&&(o=s[0],c.unshift(s[1]));break}if(a!==!0)if(a&&e["throws"])t=a(t);else try{t=a(t)}catch(p){return{state:"parsererror",error:a?p:"No conversion from "+l+" to "+o}}}return{state:"success",data:t}}x.ajaxSetup({accepts:{script:"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},contents:{script:/(?:java|ecma)script/},converters:{"text script":function(e){return x.globalEval(e),e}}}),x.ajaxPrefilter("script",function(e){e.cache===t&&(e.cache=!1),e.crossDomain&&(e.type="GET",e.global=!1)}),x.ajaxTransport("script",function(e){if(e.crossDomain){var n,r=a.head||x("head")[0]||a.documentElement;return{send:function(t,i){n=a.createElement("script"),n.async=!0,e.scriptCharset&&(n.charset=e.scriptCharset),n.src=e.url,n.onload=n.onreadystatechange=function(e,t){(t||!n.readyState||/loaded|complete/.test(n.readyState))&&(n.onload=n.onreadystatechange=null,n.parentNode&&n.parentNode.removeChild(n),n=null,t||i(200,"success"))},r.insertBefore(n,r.firstChild)},abort:function(){n&&n.onload(t,!0)}}}});var Fn=[],Bn=/(=)\?(?=&|$)|\?\?/;x.ajaxSetup({jsonp:"callback",jsonpCallback:function(){var e=Fn.pop()||x.expando+"_"+vn++;return this[e]=!0,e}}),x.ajaxPrefilter("json jsonp",function(n,r,i){var o,a,s,l=n.jsonp!==!1&&(Bn.test(n.url)?"url":"string"==typeof n.data&&!(n.contentType||"").indexOf("application/x-www-form-urlencoded")&&Bn.test(n.data)&&"data");return l||"jsonp"===n.dataTypes[0]?(o=n.jsonpCallback=x.isFunction(n.jsonpCallback)?n.jsonpCallback():n.jsonpCallback,l?n[l]=n[l].replace(Bn,"$1"+o):n.jsonp!==!1&&(n.url+=(bn.test(n.url)?"&":"?")+n.jsonp+"="+o),n.converters["script json"]=function(){return s||x.error(o+" was not called"),s[0]},n.dataTypes[0]="json",a=e[o],e[o]=function(){s=arguments},i.always(function(){e[o]=a,n[o]&&(n.jsonpCallback=r.jsonpCallback,Fn.push(o)),s&&x.isFunction(a)&&a(s[0]),s=a=t}),"script"):t});var Pn,Rn,Wn=0,$n=e.ActiveXObject&&function(){var e;for(e in Pn)Pn[e](t,!0)};function In(){try{return new e.XMLHttpRequest}catch(t){}}function zn(){try{return new e.ActiveXObject("Microsoft.XMLHTTP")}catch(t){}}x.ajaxSettings.xhr=e.ActiveXObject?function(){return!this.isLocal&&In()||zn()}:In,Rn=x.ajaxSettings.xhr(),x.support.cors=!!Rn&&"withCredentials"in Rn,Rn=x.support.ajax=!!Rn,Rn&&x.ajaxTransport(function(n){if(!n.crossDomain||x.support.cors){var r;return{send:function(i,o){var a,s,l=n.xhr();if(n.username?l.open(n.type,n.url,n.async,n.username,n.password):l.open(n.type,n.url,n.async),n.xhrFields)for(s in n.xhrFields)l[s]=n.xhrFields[s];n.mimeType&&l.overrideMimeType&&l.overrideMimeType(n.mimeType),n.crossDomain||i["X-Requested-With"]||(i["X-Requested-With"]="XMLHttpRequest");try{for(s in i)l.setRequestHeader(s,i[s])}catch(u){}l.send(n.hasContent&&n.data||null),r=function(e,i){var s,u,c,p;try{if(r&&(i||4===l.readyState))if(r=t,a&&(l.onreadystatechange=x.noop,$n&&delete Pn[a]),i)4!==l.readyState&&l.abort();else{p={},s=l.status,u=l.getAllResponseHeaders(),"string"==typeof l.responseText&&(p.text=l.responseText);try{c=l.statusText}catch(f){c=""}s||!n.isLocal||n.crossDomain?1223===s&&(s=204):s=p.text?200:404}}catch(d){i||o(-1,d)}p&&o(s,c,p,u)},n.async?4===l.readyState?setTimeout(r):(a=++Wn,$n&&(Pn||(Pn={},x(e).unload($n)),Pn[a]=r),l.onreadystatechange=r):r()},abort:function(){r&&r(t,!0)}}}});var Xn,Un,Vn=/^(?:toggle|show|hide)$/,Yn=RegExp("^(?:([+-])=|)("+w+")([a-z%]*)$","i"),Jn=/queueHooks$/,Gn=[nr],Qn={"*":[function(e,t){var n=this.createTween(e,t),r=n.cur(),i=Yn.exec(t),o=i&&i[3]||(x.cssNumber[e]?"":"px"),a=(x.cssNumber[e]||"px"!==o&&+r)&&Yn.exec(x.css(n.elem,e)),s=1,l=20;if(a&&a[3]!==o){o=o||a[3],i=i||[],a=+r||1;do s=s||".5",a/=s,x.style(n.elem,e,a+o);while(s!==(s=n.cur()/r)&&1!==s&&--l)}return i&&(a=n.start=+a||+r||0,n.unit=o,n.end=i[1]?a+(i[1]+1)*i[2]:+i[2]),n}]};function Kn(){return setTimeout(function(){Xn=t}),Xn=x.now()}function Zn(e,t,n){var r,i=(Qn[t]||[]).concat(Qn["*"]),o=0,a=i.length;for(;a>o;o++)if(r=i[o].call(n,t,e))return r}function er(e,t,n){var r,i,o=0,a=Gn.length,s=x.Deferred().always(function(){delete l.elem}),l=function(){if(i)return!1;var t=Xn||Kn(),n=Math.max(0,u.startTime+u.duration-t),r=n/u.duration||0,o=1-r,a=0,l=u.tweens.length;for(;l>a;a++)u.tweens[a].run(o);return s.notifyWith(e,[u,o,n]),1>o&&l?n:(s.resolveWith(e,[u]),!1)},u=s.promise({elem:e,props:x.extend({},t),opts:x.extend(!0,{specialEasing:{}},n),originalProperties:t,originalOptions:n,startTime:Xn||Kn(),duration:n.duration,tweens:[],createTween:function(t,n){var r=x.Tween(e,u.opts,t,n,u.opts.specialEasing[t]||u.opts.easing);return u.tweens.push(r),r},stop:function(t){var n=0,r=t?u.tweens.length:0;if(i)return this;for(i=!0;r>n;n++)u.tweens[n].run(1);return t?s.resolveWith(e,[u,t]):s.rejectWith(e,[u,t]),this}}),c=u.props;for(tr(c,u.opts.specialEasing);a>o;o++)if(r=Gn[o].call(u,e,c,u.opts))return r;return x.map(c,Zn,u),x.isFunction(u.opts.start)&&u.opts.start.call(e,u),x.fx.timer(x.extend(l,{elem:e,anim:u,queue:u.opts.queue})),u.progress(u.opts.progress).done(u.opts.done,u.opts.complete).fail(u.opts.fail).always(u.opts.always)}function tr(e,t){var n,r,i,o,a;for(n in e)if(r=x.camelCase(n),i=t[r],o=e[n],x.isArray(o)&&(i=o[1],o=e[n]=o[0]),n!==r&&(e[r]=o,delete e[n]),a=x.cssHooks[r],a&&"expand"in a){o=a.expand(o),delete e[r];for(n in o)n in e||(e[n]=o[n],t[n]=i)}else t[r]=i}x.Animation=x.extend(er,{tweener:function(e,t){x.isFunction(e)?(t=e,e=["*"]):e=e.split(" ");var n,r=0,i=e.length;for(;i>r;r++)n=e[r],Qn[n]=Qn[n]||[],Qn[n].unshift(t)},prefilter:function(e,t){t?Gn.unshift(e):Gn.push(e)}});function nr(e,t,n){var r,i,o,a,s,l,u=this,c={},p=e.style,f=e.nodeType&&nn(e),d=x._data(e,"fxshow");n.queue||(s=x._queueHooks(e,"fx"),null==s.unqueued&&(s.unqueued=0,l=s.empty.fire,s.empty.fire=function(){s.unqueued||l()}),s.unqueued++,u.always(function(){u.always(function(){s.unqueued--,x.queue(e,"fx").length||s.empty.fire()})})),1===e.nodeType&&("height"in t||"width"in t)&&(n.overflow=[p.overflow,p.overflowX,p.overflowY],"inline"===x.css(e,"display")&&"none"===x.css(e,"float")&&(x.support.inlineBlockNeedsLayout&&"inline"!==ln(e.nodeName)?p.zoom=1:p.display="inline-block")),n.overflow&&(p.overflow="hidden",x.support.shrinkWrapBlocks||u.always(function(){p.overflow=n.overflow[0],p.overflowX=n.overflow[1],p.overflowY=n.overflow[2]}));for(r in t)if(i=t[r],Vn.exec(i)){if(delete t[r],o=o||"toggle"===i,i===(f?"hide":"show"))continue;c[r]=d&&d[r]||x.style(e,r)}if(!x.isEmptyObject(c)){d?"hidden"in d&&(f=d.hidden):d=x._data(e,"fxshow",{}),o&&(d.hidden=!f),f?x(e).show():u.done(function(){x(e).hide()}),u.done(function(){var t;x._removeData(e,"fxshow");for(t in c)x.style(e,t,c[t])});for(r in c)a=Zn(f?d[r]:0,r,u),r in d||(d[r]=a.start,f&&(a.end=a.start,a.start="width"===r||"height"===r?1:0))}}function rr(e,t,n,r,i){return new rr.prototype.init(e,t,n,r,i)}x.Tween=rr,rr.prototype={constructor:rr,init:function(e,t,n,r,i,o){this.elem=e,this.prop=n,this.easing=i||"swing",this.options=t,this.start=this.now=this.cur(),this.end=r,this.unit=o||(x.cssNumber[n]?"":"px")},cur:function(){var e=rr.propHooks[this.prop];return e&&e.get?e.get(this):rr.propHooks._default.get(this)},run:function(e){var t,n=rr.propHooks[this.prop];return this.pos=t=this.options.duration?x.easing[this.easing](e,this.options.duration*e,0,1,this.options.duration):e,this.now=(this.end-this.start)*t+this.start,this.options.step&&this.options.step.call(this.elem,this.now,this),n&&n.set?n.set(this):rr.propHooks._default.set(this),this}},rr.prototype.init.prototype=rr.prototype,rr.propHooks={_default:{get:function(e){var t;return null==e.elem[e.prop]||e.elem.style&&null!=e.elem.style[e.prop]?(t=x.css(e.elem,e.prop,""),t&&"auto"!==t?t:0):e.elem[e.prop]},set:function(e){x.fx.step[e.prop]?x.fx.step[e.prop](e):e.elem.style&&(null!=e.elem.style[x.cssProps[e.prop]]||x.cssHooks[e.prop])?x.style(e.elem,e.prop,e.now+e.unit):e.elem[e.prop]=e.now}}},rr.propHooks.scrollTop=rr.propHooks.scrollLeft={set:function(e){e.elem.nodeType&&e.elem.parentNode&&(e.elem[e.prop]=e.now)}},x.each(["toggle","show","hide"],function(e,t){var n=x.fn[t];x.fn[t]=function(e,r,i){return null==e||"boolean"==typeof e?n.apply(this,arguments):this.animate(ir(t,!0),e,r,i)}}),x.fn.extend({fadeTo:function(e,t,n,r){return this.filter(nn).css("opacity",0).show().end().animate({opacity:t},e,n,r)},animate:function(e,t,n,r){var i=x.isEmptyObject(e),o=x.speed(t,n,r),a=function(){var t=er(this,x.extend({},e),o);(i||x._data(this,"finish"))&&t.stop(!0)};return a.finish=a,i||o.queue===!1?this.each(a):this.queue(o.queue,a)},stop:function(e,n,r){var i=function(e){var t=e.stop;delete e.stop,t(r)};return"string"!=typeof e&&(r=n,n=e,e=t),n&&e!==!1&&this.queue(e||"fx",[]),this.each(function(){var t=!0,n=null!=e&&e+"queueHooks",o=x.timers,a=x._data(this);if(n)a[n]&&a[n].stop&&i(a[n]);else for(n in a)a[n]&&a[n].stop&&Jn.test(n)&&i(a[n]);for(n=o.length;n--;)o[n].elem!==this||null!=e&&o[n].queue!==e||(o[n].anim.stop(r),t=!1,o.splice(n,1));(t||!r)&&x.dequeue(this,e)})},finish:function(e){return e!==!1&&(e=e||"fx"),this.each(function(){var t,n=x._data(this),r=n[e+"queue"],i=n[e+"queueHooks"],o=x.timers,a=r?r.length:0;for(n.finish=!0,x.queue(this,e,[]),i&&i.stop&&i.stop.call(this,!0),t=o.length;t--;)o[t].elem===this&&o[t].queue===e&&(o[t].anim.stop(!0),o.splice(t,1));for(t=0;a>t;t++)r[t]&&r[t].finish&&r[t].finish.call(this);delete n.finish})}});function ir(e,t){var n,r={height:e},i=0;for(t=t?1:0;4>i;i+=2-t)n=Zt[i],r["margin"+n]=r["padding"+n]=e;return t&&(r.opacity=r.width=e),r}x.each({slideDown:ir("show"),slideUp:ir("hide"),slideToggle:ir("toggle"),fadeIn:{opacity:"show"},fadeOut:{opacity:"hide"},fadeToggle:{opacity:"toggle"}},function(e,t){x.fn[e]=function(e,n,r){return this.animate(t,e,n,r)}}),x.speed=function(e,t,n){var r=e&&"object"==typeof e?x.extend({},e):{complete:n||!n&&t||x.isFunction(e)&&e,duration:e,easing:n&&t||t&&!x.isFunction(t)&&t};return r.duration=x.fx.off?0:"number"==typeof r.duration?r.duration:r.duration in x.fx.speeds?x.fx.speeds[r.duration]:x.fx.speeds._default,(null==r.queue||r.queue===!0)&&(r.queue="fx"),r.old=r.complete,r.complete=function(){x.isFunction(r.old)&&r.old.call(this),r.queue&&x.dequeue(this,r.queue)},r},x.easing={linear:function(e){return e},swing:function(e){return.5-Math.cos(e*Math.PI)/2}},x.timers=[],x.fx=rr.prototype.init,x.fx.tick=function(){var e,n=x.timers,r=0;for(Xn=x.now();n.length>r;r++)e=n[r],e()||n[r]!==e||n.splice(r--,1);n.length||x.fx.stop(),Xn=t},x.fx.timer=function(e){e()&&x.timers.push(e)&&x.fx.start()},x.fx.interval=13,x.fx.start=function(){Un||(Un=setInterval(x.fx.tick,x.fx.interval))},x.fx.stop=function(){clearInterval(Un),Un=null},x.fx.speeds={slow:600,fast:200,_default:400},x.fx.step={},x.expr&&x.expr.filters&&(x.expr.filters.animated=function(e){return x.grep(x.timers,function(t){return e===t.elem}).length}),x.fn.offset=function(e){if(arguments.length)return e===t?this:this.each(function(t){x.offset.setOffset(this,e,t)});var n,r,o={top:0,left:0},a=this[0],s=a&&a.ownerDocument;if(s)return n=s.documentElement,x.contains(n,a)?(typeof a.getBoundingClientRect!==i&&(o=a.getBoundingClientRect()),r=or(s),{top:o.top+(r.pageYOffset||n.scrollTop)-(n.clientTop||0),left:o.left+(r.pageXOffset||n.scrollLeft)-(n.clientLeft||0)}):o},x.offset={setOffset:function(e,t,n){var r=x.css(e,"position");"static"===r&&(e.style.position="relative");var i=x(e),o=i.offset(),a=x.css(e,"top"),s=x.css(e,"left"),l=("absolute"===r||"fixed"===r)&&x.inArray("auto",[a,s])>-1,u={},c={},p,f;l?(c=i.position(),p=c.top,f=c.left):(p=parseFloat(a)||0,f=parseFloat(s)||0),x.isFunction(t)&&(t=t.call(e,n,o)),null!=t.top&&(u.top=t.top-o.top+p),null!=t.left&&(u.left=t.left-o.left+f),"using"in t?t.using.call(e,u):i.css(u)}},x.fn.extend({position:function(){if(this[0]){var e,t,n={top:0,left:0},r=this[0];return"fixed"===x.css(r,"position")?t=r.getBoundingClientRect():(e=this.offsetParent(),t=this.offset(),x.nodeName(e[0],"html")||(n=e.offset()),n.top+=x.css(e[0],"borderTopWidth",!0),n.left+=x.css(e[0],"borderLeftWidth",!0)),{top:t.top-n.top-x.css(r,"marginTop",!0),left:t.left-n.left-x.css(r,"marginLeft",!0)}}},offsetParent:function(){return this.map(function(){var e=this.offsetParent||s;while(e&&!x.nodeName(e,"html")&&"static"===x.css(e,"position"))e=e.offsetParent;return e||s})}}),x.each({scrollLeft:"pageXOffset",scrollTop:"pageYOffset"},function(e,n){var r=/Y/.test(n);x.fn[e]=function(i){return x.access(this,function(e,i,o){var a=or(e);return o===t?a?n in a?a[n]:a.document.documentElement[i]:e[i]:(a?a.scrollTo(r?x(a).scrollLeft():o,r?o:x(a).scrollTop()):e[i]=o,t)},e,i,arguments.length,null)}});function or(e){return x.isWindow(e)?e:9===e.nodeType?e.defaultView||e.parentWindow:!1}x.each({Height:"height",Width:"width"},function(e,n){x.each({padding:"inner"+e,content:n,"":"outer"+e},function(r,i){x.fn[i]=function(i,o){var a=arguments.length&&(r||"boolean"!=typeof i),s=r||(i===!0||o===!0?"margin":"border");return x.access(this,function(n,r,i){var o;return x.isWindow(n)?n.document.documentElement["client"+e]:9===n.nodeType?(o=n.documentElement,Math.max(n.body["scroll"+e],o["scroll"+e],n.body["offset"+e],o["offset"+e],o["client"+e])):i===t?x.css(n,r,s):x.style(n,r,i,s)},n,a?i:t,a,null)}})}),x.fn.size=function(){return this.length},x.fn.andSelf=x.fn.addBack,"object"==typeof module&&module&&"object"==typeof module.exports?module.exports=x:(e.jQuery=e.$=x,"function"==typeof define&&define.amd&&define("jquery",[],function(){return x}))})(window);

;/*! jQuery UI - v1.10.4 - 2014-01-17
* http://jqueryui.com
* Includes: jquery.ui.core.js, jquery.ui.widget.js, jquery.ui.mouse.js, jquery.ui.position.js, jquery.ui.accordion.js, jquery.ui.autocomplete.js, jquery.ui.button.js, jquery.ui.datepicker.js, jquery.ui.dialog.js, jquery.ui.draggable.js, jquery.ui.droppable.js, jquery.ui.effect.js, jquery.ui.effect-blind.js, jquery.ui.effect-bounce.js, jquery.ui.effect-clip.js, jquery.ui.effect-drop.js, jquery.ui.effect-explode.js, jquery.ui.effect-fade.js, jquery.ui.effect-fold.js, jquery.ui.effect-highlight.js, jquery.ui.effect-pulsate.js, jquery.ui.effect-scale.js, jquery.ui.effect-shake.js, jquery.ui.effect-slide.js, jquery.ui.effect-transfer.js, jquery.ui.menu.js, jquery.ui.progressbar.js, jquery.ui.resizable.js, jquery.ui.selectable.js, jquery.ui.slider.js, jquery.ui.sortable.js, jquery.ui.spinner.js, jquery.ui.tabs.js, jquery.ui.tooltip.js
* Copyright 2014 jQuery Foundation and other contributors; Licensed MIT */
(function($,undefined){var uuid=0,runiqueId=/^ui-id-\d+$/;$.ui=$.ui||{};$.extend($.ui,{version:"1.10.4",keyCode:{BACKSPACE:8,COMMA:188,DELETE:46,DOWN:40,END:35,ENTER:13,ESCAPE:27,HOME:36,LEFT:37,NUMPAD_ADD:107,NUMPAD_DECIMAL:110,NUMPAD_DIVIDE:111,NUMPAD_ENTER:108,NUMPAD_MULTIPLY:106,NUMPAD_SUBTRACT:109,PAGE_DOWN:34,PAGE_UP:33,PERIOD:190,RIGHT:39,SPACE:32,TAB:9,UP:38}});$.fn.extend({focus:(function(orig){return function(delay,fn){return typeof delay==="number"?this.each(function(){var elem=this;setTimeout(function(){$(elem).focus();if(fn){fn.call(elem);}},delay);}):orig.apply(this,arguments);};})($.fn.focus),scrollParent:function(){var scrollParent;if(($.ui.ie&&(/(static|relative)/).test(this.css("position")))||(/absolute/).test(this.css("position"))){scrollParent=this.parents().filter(function(){return(/(relative|absolute|fixed)/).test($.css(this,"position"))&&(/(auto|scroll)/).test($.css(this,"overflow")+$.css(this,"overflow-y")+$.css(this,"overflow-x"));}).eq(0);}else{scrollParent=this.parents().filter(function(){return(/(auto|scroll)/).test($.css(this,"overflow")+$.css(this,"overflow-y")+$.css(this,"overflow-x"));}).eq(0);}
return(/fixed/).test(this.css("position"))||!scrollParent.length?$(document):scrollParent;},zIndex:function(zIndex){if(zIndex!==undefined){return this.css("zIndex",zIndex);}
if(this.length){var elem=$(this[0]),position,value;while(elem.length&&elem[0]!==document){position=elem.css("position");if(position==="absolute"||position==="relative"||position==="fixed"){value=parseInt(elem.css("zIndex"),10);if(!isNaN(value)&&value!==0){return value;}}
elem=elem.parent();}}
return 0;},uniqueId:function(){return this.each(function(){if(!this.id){this.id="ui-id-"+(++uuid);}});},removeUniqueId:function(){return this.each(function(){if(runiqueId.test(this.id)){$(this).removeAttr("id");}});}});function focusable(element,isTabIndexNotNaN){var map,mapName,img,nodeName=element.nodeName.toLowerCase();if("area"===nodeName){map=element.parentNode;mapName=map.name;if(!element.href||!mapName||map.nodeName.toLowerCase()!=="map"){return false;}
img=$("img[usemap=#"+mapName+"]")[0];return!!img&&visible(img);}
return(/input|select|textarea|button|object/.test(nodeName)?!element.disabled:"a"===nodeName?element.href||isTabIndexNotNaN:isTabIndexNotNaN)&&visible(element);}
function visible(element){return $.expr.filters.visible(element)&&!$(element).parents().addBack().filter(function(){return $.css(this,"visibility")==="hidden";}).length;}
$.extend($.expr[":"],{data:$.expr.createPseudo?$.expr.createPseudo(function(dataName){return function(elem){return!!$.data(elem,dataName);};}):function(elem,i,match){return!!$.data(elem,match[3]);},focusable:function(element){return focusable(element,!isNaN($.attr(element,"tabindex")));},tabbable:function(element){var tabIndex=$.attr(element,"tabindex"),isTabIndexNaN=isNaN(tabIndex);return(isTabIndexNaN||tabIndex>=0)&&focusable(element,!isTabIndexNaN);}});if(!$("<a>").outerWidth(1).jquery){$.each(["Width","Height"],function(i,name){var side=name==="Width"?["Left","Right"]:["Top","Bottom"],type=name.toLowerCase(),orig={innerWidth:$.fn.innerWidth,innerHeight:$.fn.innerHeight,outerWidth:$.fn.outerWidth,outerHeight:$.fn.outerHeight};function reduce(elem,size,border,margin){$.each(side,function(){size-=parseFloat($.css(elem,"padding"+this))||0;if(border){size-=parseFloat($.css(elem,"border"+this+"Width"))||0;}
if(margin){size-=parseFloat($.css(elem,"margin"+this))||0;}});return size;}
$.fn["inner"+name]=function(size){if(size===undefined){return orig["inner"+name].call(this);}
return this.each(function(){$(this).css(type,reduce(this,size)+"px");});};$.fn["outer"+name]=function(size,margin){if(typeof size!=="number"){return orig["outer"+name].call(this,size);}
return this.each(function(){$(this).css(type,reduce(this,size,true,margin)+"px");});};});}
if(!$.fn.addBack){$.fn.addBack=function(selector){return this.add(selector==null?this.prevObject:this.prevObject.filter(selector));};}
if($("<a>").data("a-b","a").removeData("a-b").data("a-b")){$.fn.removeData=(function(removeData){return function(key){if(arguments.length){return removeData.call(this,$.camelCase(key));}else{return removeData.call(this);}};})($.fn.removeData);}
$.ui.ie=!!/msie [\w.]+/.exec(navigator.userAgent.toLowerCase());$.support.selectstart="onselectstart"in document.createElement("div");$.fn.extend({disableSelection:function(){return this.bind(($.support.selectstart?"selectstart":"mousedown")+".ui-disableSelection",function(event){event.preventDefault();});},enableSelection:function(){return this.unbind(".ui-disableSelection");}});$.extend($.ui,{plugin:{add:function(module,option,set){var i,proto=$.ui[module].prototype;for(i in set){proto.plugins[i]=proto.plugins[i]||[];proto.plugins[i].push([option,set[i]]);}},call:function(instance,name,args){var i,set=instance.plugins[name];if(!set||!instance.element[0].parentNode||instance.element[0].parentNode.nodeType===11){return;}
for(i=0;i<set.length;i++){if(instance.options[set[i][0]]){set[i][1].apply(instance.element,args);}}}},hasScroll:function(el,a){if($(el).css("overflow")==="hidden"){return false;}
var scroll=(a&&a==="left")?"scrollLeft":"scrollTop",has=false;if(el[scroll]>0){return true;}
el[scroll]=1;has=(el[scroll]>0);el[scroll]=0;return has;}});})(jQuery);(function($,undefined){var uuid=0,slice=Array.prototype.slice,_cleanData=$.cleanData;$.cleanData=function(elems){for(var i=0,elem;(elem=elems[i])!=null;i++){try{$(elem).triggerHandler("remove");}catch(e){}}
_cleanData(elems);};$.widget=function(name,base,prototype){var fullName,existingConstructor,constructor,basePrototype,proxiedPrototype={},namespace=name.split(".")[0];name=name.split(".")[1];fullName=namespace+"-"+name;if(!prototype){prototype=base;base=$.Widget;}
$.expr[":"][fullName.toLowerCase()]=function(elem){return!!$.data(elem,fullName);};$[namespace]=$[namespace]||{};existingConstructor=$[namespace][name];constructor=$[namespace][name]=function(options,element){if(!this._createWidget){return new constructor(options,element);}
if(arguments.length){this._createWidget(options,element);}};$.extend(constructor,existingConstructor,{version:prototype.version,_proto:$.extend({},prototype),_childConstructors:[]});basePrototype=new base();basePrototype.options=$.widget.extend({},basePrototype.options);$.each(prototype,function(prop,value){if(!$.isFunction(value)){proxiedPrototype[prop]=value;return;}
proxiedPrototype[prop]=(function(){var _super=function(){return base.prototype[prop].apply(this,arguments);},_superApply=function(args){return base.prototype[prop].apply(this,args);};return function(){var __super=this._super,__superApply=this._superApply,returnValue;this._super=_super;this._superApply=_superApply;returnValue=value.apply(this,arguments);this._super=__super;this._superApply=__superApply;return returnValue;};})();});constructor.prototype=$.widget.extend(basePrototype,{widgetEventPrefix:existingConstructor?(basePrototype.widgetEventPrefix||name):name},proxiedPrototype,{constructor:constructor,namespace:namespace,widgetName:name,widgetFullName:fullName});if(existingConstructor){$.each(existingConstructor._childConstructors,function(i,child){var childPrototype=child.prototype;$.widget(childPrototype.namespace+"."+childPrototype.widgetName,constructor,child._proto);});delete existingConstructor._childConstructors;}else{base._childConstructors.push(constructor);}
$.widget.bridge(name,constructor);};$.widget.extend=function(target){var input=slice.call(arguments,1),inputIndex=0,inputLength=input.length,key,value;for(;inputIndex<inputLength;inputIndex++){for(key in input[inputIndex]){value=input[inputIndex][key];if(input[inputIndex].hasOwnProperty(key)&&value!==undefined){if($.isPlainObject(value)){target[key]=$.isPlainObject(target[key])?$.widget.extend({},target[key],value):$.widget.extend({},value);}else{target[key]=value;}}}}
return target;};$.widget.bridge=function(name,object){var fullName=object.prototype.widgetFullName||name;$.fn[name]=function(options){var isMethodCall=typeof options==="string",args=slice.call(arguments,1),returnValue=this;options=!isMethodCall&&args.length?$.widget.extend.apply(null,[options].concat(args)):options;if(isMethodCall){this.each(function(){var methodValue,instance=$.data(this,fullName);if(!instance){return $.error("cannot call methods on "+name+" prior to initialization; "+"attempted to call method '"+options+"'");}
if(!$.isFunction(instance[options])||options.charAt(0)==="_"){return $.error("no such method '"+options+"' for "+name+" widget instance");}
methodValue=instance[options].apply(instance,args);if(methodValue!==instance&&methodValue!==undefined){returnValue=methodValue&&methodValue.jquery?returnValue.pushStack(methodValue.get()):methodValue;return false;}});}else{this.each(function(){var instance=$.data(this,fullName);if(instance){instance.option(options||{})._init();}else{$.data(this,fullName,new object(options,this));}});}
return returnValue;};};$.Widget=function(){};$.Widget._childConstructors=[];$.Widget.prototype={widgetName:"widget",widgetEventPrefix:"",defaultElement:"<div>",options:{disabled:false,create:null},_createWidget:function(options,element){element=$(element||this.defaultElement||this)[0];this.element=$(element);this.uuid=uuid++;this.eventNamespace="."+this.widgetName+this.uuid;this.options=$.widget.extend({},this.options,this._getCreateOptions(),options);this.bindings=$();this.hoverable=$();this.focusable=$();if(element!==this){$.data(element,this.widgetFullName,this);this._on(true,this.element,{remove:function(event){if(event.target===element){this.destroy();}}});this.document=$(element.style?element.ownerDocument:element.document||element);this.window=$(this.document[0].defaultView||this.document[0].parentWindow);}
this._create();this._trigger("create",null,this._getCreateEventData());this._init();},_getCreateOptions:$.noop,_getCreateEventData:$.noop,_create:$.noop,_init:$.noop,destroy:function(){this._destroy();this.element.unbind(this.eventNamespace).removeData(this.widgetName).removeData(this.widgetFullName).removeData($.camelCase(this.widgetFullName));this.widget().unbind(this.eventNamespace).removeAttr("aria-disabled").removeClass(this.widgetFullName+"-disabled "+"ui-state-disabled");this.bindings.unbind(this.eventNamespace);this.hoverable.removeClass("ui-state-hover");this.focusable.removeClass("ui-state-focus");},_destroy:$.noop,widget:function(){return this.element;},option:function(key,value){var options=key,parts,curOption,i;if(arguments.length===0){return $.widget.extend({},this.options);}
if(typeof key==="string"){options={};parts=key.split(".");key=parts.shift();if(parts.length){curOption=options[key]=$.widget.extend({},this.options[key]);for(i=0;i<parts.length-1;i++){curOption[parts[i]]=curOption[parts[i]]||{};curOption=curOption[parts[i]];}
key=parts.pop();if(arguments.length===1){return curOption[key]===undefined?null:curOption[key];}
curOption[key]=value;}else{if(arguments.length===1){return this.options[key]===undefined?null:this.options[key];}
options[key]=value;}}
this._setOptions(options);return this;},_setOptions:function(options){var key;for(key in options){this._setOption(key,options[key]);}
return this;},_setOption:function(key,value){this.options[key]=value;if(key==="disabled"){this.widget().toggleClass(this.widgetFullName+"-disabled ui-state-disabled",!!value).attr("aria-disabled",value);this.hoverable.removeClass("ui-state-hover");this.focusable.removeClass("ui-state-focus");}
return this;},enable:function(){return this._setOption("disabled",false);},disable:function(){return this._setOption("disabled",true);},_on:function(suppressDisabledCheck,element,handlers){var delegateElement,instance=this;if(typeof suppressDisabledCheck!=="boolean"){handlers=element;element=suppressDisabledCheck;suppressDisabledCheck=false;}
if(!handlers){handlers=element;element=this.element;delegateElement=this.widget();}else{element=delegateElement=$(element);this.bindings=this.bindings.add(element);}
$.each(handlers,function(event,handler){function handlerProxy(){if(!suppressDisabledCheck&&(instance.options.disabled===true||$(this).hasClass("ui-state-disabled"))){return;}
return(typeof handler==="string"?instance[handler]:handler).apply(instance,arguments);}
if(typeof handler!=="string"){handlerProxy.guid=handler.guid=handler.guid||handlerProxy.guid||$.guid++;}
var match=event.match(/^(\w+)\s*(.*)$/),eventName=match[1]+instance.eventNamespace,selector=match[2];if(selector){delegateElement.delegate(selector,eventName,handlerProxy);}else{element.bind(eventName,handlerProxy);}});},_off:function(element,eventName){eventName=(eventName||"").split(" ").join(this.eventNamespace+" ")+this.eventNamespace;element.unbind(eventName).undelegate(eventName);},_delay:function(handler,delay){function handlerProxy(){return(typeof handler==="string"?instance[handler]:handler).apply(instance,arguments);}
var instance=this;return setTimeout(handlerProxy,delay||0);},_hoverable:function(element){this.hoverable=this.hoverable.add(element);this._on(element,{mouseenter:function(event){$(event.currentTarget).addClass("ui-state-hover");},mouseleave:function(event){$(event.currentTarget).removeClass("ui-state-hover");}});},_focusable:function(element){this.focusable=this.focusable.add(element);this._on(element,{focusin:function(event){$(event.currentTarget).addClass("ui-state-focus");},focusout:function(event){$(event.currentTarget).removeClass("ui-state-focus");}});},_trigger:function(type,event,data){var prop,orig,callback=this.options[type];data=data||{};event=$.Event(event);event.type=(type===this.widgetEventPrefix?type:this.widgetEventPrefix+type).toLowerCase();event.target=this.element[0];orig=event.originalEvent;if(orig){for(prop in orig){if(!(prop in event)){event[prop]=orig[prop];}}}
this.element.trigger(event,data);return!($.isFunction(callback)&&callback.apply(this.element[0],[event].concat(data))===false||event.isDefaultPrevented());}};$.each({show:"fadeIn",hide:"fadeOut"},function(method,defaultEffect){$.Widget.prototype["_"+method]=function(element,options,callback){if(typeof options==="string"){options={effect:options};}
var hasOptions,effectName=!options?method:options===true||typeof options==="number"?defaultEffect:options.effect||defaultEffect;options=options||{};if(typeof options==="number"){options={duration:options};}
hasOptions=!$.isEmptyObject(options);options.complete=callback;if(options.delay){element.delay(options.delay);}
if(hasOptions&&$.effects&&$.effects.effect[effectName]){element[method](options);}else if(effectName!==method&&element[effectName]){element[effectName](options.duration,options.easing,callback);}else{element.queue(function(next){$(this)[method]();if(callback){callback.call(element[0]);}
next();});}};});})(jQuery);(function($,undefined){var mouseHandled=false;$(document).mouseup(function(){mouseHandled=false;});$.widget("ui.mouse",{version:"1.10.4",options:{cancel:"input,textarea,button,select,option",distance:1,delay:0},_mouseInit:function(){var that=this;this.element.bind("mousedown."+this.widgetName,function(event){return that._mouseDown(event);}).bind("click."+this.widgetName,function(event){if(true===$.data(event.target,that.widgetName+".preventClickEvent")){$.removeData(event.target,that.widgetName+".preventClickEvent");event.stopImmediatePropagation();return false;}});this.started=false;},_mouseDestroy:function(){this.element.unbind("."+this.widgetName);if(this._mouseMoveDelegate){$(document).unbind("mousemove."+this.widgetName,this._mouseMoveDelegate).unbind("mouseup."+this.widgetName,this._mouseUpDelegate);}},_mouseDown:function(event){if(mouseHandled){return;}
(this._mouseStarted&&this._mouseUp(event));this._mouseDownEvent=event;var that=this,btnIsLeft=(event.which===1),elIsCancel=(typeof this.options.cancel==="string"&&event.target.nodeName?$(event.target).closest(this.options.cancel).length:false);if(!btnIsLeft||elIsCancel||!this._mouseCapture(event)){return true;}
this.mouseDelayMet=!this.options.delay;if(!this.mouseDelayMet){this._mouseDelayTimer=setTimeout(function(){that.mouseDelayMet=true;},this.options.delay);}
if(this._mouseDistanceMet(event)&&this._mouseDelayMet(event)){this._mouseStarted=(this._mouseStart(event)!==false);if(!this._mouseStarted){event.preventDefault();return true;}}
if(true===$.data(event.target,this.widgetName+".preventClickEvent")){$.removeData(event.target,this.widgetName+".preventClickEvent");}
this._mouseMoveDelegate=function(event){return that._mouseMove(event);};this._mouseUpDelegate=function(event){return that._mouseUp(event);};$(document).bind("mousemove."+this.widgetName,this._mouseMoveDelegate).bind("mouseup."+this.widgetName,this._mouseUpDelegate);event.preventDefault();mouseHandled=true;return true;},_mouseMove:function(event){if($.ui.ie&&(!document.documentMode||document.documentMode<9)&&!event.button){return this._mouseUp(event);}
if(this._mouseStarted){this._mouseDrag(event);return event.preventDefault();}
if(this._mouseDistanceMet(event)&&this._mouseDelayMet(event)){this._mouseStarted=(this._mouseStart(this._mouseDownEvent,event)!==false);(this._mouseStarted?this._mouseDrag(event):this._mouseUp(event));}
return!this._mouseStarted;},_mouseUp:function(event){$(document).unbind("mousemove."+this.widgetName,this._mouseMoveDelegate).unbind("mouseup."+this.widgetName,this._mouseUpDelegate);if(this._mouseStarted){this._mouseStarted=false;if(event.target===this._mouseDownEvent.target){$.data(event.target,this.widgetName+".preventClickEvent",true);}
this._mouseStop(event);}
return false;},_mouseDistanceMet:function(event){return(Math.max(Math.abs(this._mouseDownEvent.pageX-event.pageX),Math.abs(this._mouseDownEvent.pageY-event.pageY))>=this.options.distance);},_mouseDelayMet:function(){return this.mouseDelayMet;},_mouseStart:function(){},_mouseDrag:function(){},_mouseStop:function(){},_mouseCapture:function(){return true;}});})(jQuery);(function($,undefined){$.ui=$.ui||{};var cachedScrollbarWidth,max=Math.max,abs=Math.abs,round=Math.round,rhorizontal=/left|center|right/,rvertical=/top|center|bottom/,roffset=/[\+\-]\d+(\.[\d]+)?%?/,rposition=/^\w+/,rpercent=/%$/,_position=$.fn.position;function getOffsets(offsets,width,height){return[parseFloat(offsets[0])*(rpercent.test(offsets[0])?width/100:1),parseFloat(offsets[1])*(rpercent.test(offsets[1])?height/100:1)];}
function parseCss(element,property){return parseInt($.css(element,property),10)||0;}
function getDimensions(elem){var raw=elem[0];if(raw.nodeType===9){return{width:elem.width(),height:elem.height(),offset:{top:0,left:0}};}
if($.isWindow(raw)){return{width:elem.width(),height:elem.height(),offset:{top:elem.scrollTop(),left:elem.scrollLeft()}};}
if(raw.preventDefault){return{width:0,height:0,offset:{top:raw.pageY,left:raw.pageX}};}
return{width:elem.outerWidth(),height:elem.outerHeight(),offset:elem.offset()};}
$.position={scrollbarWidth:function(){if(cachedScrollbarWidth!==undefined){return cachedScrollbarWidth;}
var w1,w2,div=$("<div style='display:block;position:absolute;width:50px;height:50px;overflow:hidden;'><div style='height:100px;width:auto;'></div></div>"),innerDiv=div.children()[0];$("body").append(div);w1=innerDiv.offsetWidth;div.css("overflow","scroll");w2=innerDiv.offsetWidth;if(w1===w2){w2=div[0].clientWidth;}
div.remove();return(cachedScrollbarWidth=w1-w2);},getScrollInfo:function(within){var overflowX=within.isWindow||within.isDocument?"":within.element.css("overflow-x"),overflowY=within.isWindow||within.isDocument?"":within.element.css("overflow-y"),hasOverflowX=overflowX==="scroll"||(overflowX==="auto"&&within.width<within.element[0].scrollWidth),hasOverflowY=overflowY==="scroll"||(overflowY==="auto"&&within.height<within.element[0].scrollHeight);return{width:hasOverflowY?$.position.scrollbarWidth():0,height:hasOverflowX?$.position.scrollbarWidth():0};},getWithinInfo:function(element){var withinElement=$(element||window),isWindow=$.isWindow(withinElement[0]),isDocument=!!withinElement[0]&&withinElement[0].nodeType===9;return{element:withinElement,isWindow:isWindow,isDocument:isDocument,offset:withinElement.offset()||{left:0,top:0},scrollLeft:withinElement.scrollLeft(),scrollTop:withinElement.scrollTop(),width:isWindow?withinElement.width():withinElement.outerWidth(),height:isWindow?withinElement.height():withinElement.outerHeight()};}};$.fn.position=function(options){if(!options||!options.of){return _position.apply(this,arguments);}
options=$.extend({},options);var atOffset,targetWidth,targetHeight,targetOffset,basePosition,dimensions,target=$(options.of),within=$.position.getWithinInfo(options.within),scrollInfo=$.position.getScrollInfo(within),collision=(options.collision||"flip").split(" "),offsets={};dimensions=getDimensions(target);if(target[0].preventDefault){options.at="left top";}
targetWidth=dimensions.width;targetHeight=dimensions.height;targetOffset=dimensions.offset;basePosition=$.extend({},targetOffset);$.each(["my","at"],function(){var pos=(options[this]||"").split(" "),horizontalOffset,verticalOffset;if(pos.length===1){pos=rhorizontal.test(pos[0])?pos.concat(["center"]):rvertical.test(pos[0])?["center"].concat(pos):["center","center"];}
pos[0]=rhorizontal.test(pos[0])?pos[0]:"center";pos[1]=rvertical.test(pos[1])?pos[1]:"center";horizontalOffset=roffset.exec(pos[0]);verticalOffset=roffset.exec(pos[1]);offsets[this]=[horizontalOffset?horizontalOffset[0]:0,verticalOffset?verticalOffset[0]:0];options[this]=[rposition.exec(pos[0])[0],rposition.exec(pos[1])[0]];});if(collision.length===1){collision[1]=collision[0];}
if(options.at[0]==="right"){basePosition.left+=targetWidth;}else if(options.at[0]==="center"){basePosition.left+=targetWidth/2;}
if(options.at[1]==="bottom"){basePosition.top+=targetHeight;}else if(options.at[1]==="center"){basePosition.top+=targetHeight/2;}
atOffset=getOffsets(offsets.at,targetWidth,targetHeight);basePosition.left+=atOffset[0];basePosition.top+=atOffset[1];return this.each(function(){var collisionPosition,using,elem=$(this),elemWidth=elem.outerWidth(),elemHeight=elem.outerHeight(),marginLeft=parseCss(this,"marginLeft"),marginTop=parseCss(this,"marginTop"),collisionWidth=elemWidth+marginLeft+parseCss(this,"marginRight")+scrollInfo.width,collisionHeight=elemHeight+marginTop+parseCss(this,"marginBottom")+scrollInfo.height,position=$.extend({},basePosition),myOffset=getOffsets(offsets.my,elem.outerWidth(),elem.outerHeight());if(options.my[0]==="right"){position.left-=elemWidth;}else if(options.my[0]==="center"){position.left-=elemWidth/2;}
if(options.my[1]==="bottom"){position.top-=elemHeight;}else if(options.my[1]==="center"){position.top-=elemHeight/2;}
position.left+=myOffset[0];position.top+=myOffset[1];if(!$.support.offsetFractions){position.left=round(position.left);position.top=round(position.top);}
collisionPosition={marginLeft:marginLeft,marginTop:marginTop};$.each(["left","top"],function(i,dir){if($.ui.position[collision[i]]){$.ui.position[collision[i]][dir](position,{targetWidth:targetWidth,targetHeight:targetHeight,elemWidth:elemWidth,elemHeight:elemHeight,collisionPosition:collisionPosition,collisionWidth:collisionWidth,collisionHeight:collisionHeight,offset:[atOffset[0]+myOffset[0],atOffset[1]+myOffset[1]],my:options.my,at:options.at,within:within,elem:elem});}});if(options.using){using=function(props){var left=targetOffset.left-position.left,right=left+targetWidth-elemWidth,top=targetOffset.top-position.top,bottom=top+targetHeight-elemHeight,feedback={target:{element:target,left:targetOffset.left,top:targetOffset.top,width:targetWidth,height:targetHeight},element:{element:elem,left:position.left,top:position.top,width:elemWidth,height:elemHeight},horizontal:right<0?"left":left>0?"right":"center",vertical:bottom<0?"top":top>0?"bottom":"middle"};if(targetWidth<elemWidth&&abs(left+right)<targetWidth){feedback.horizontal="center";}
if(targetHeight<elemHeight&&abs(top+bottom)<targetHeight){feedback.vertical="middle";}
if(max(abs(left),abs(right))>max(abs(top),abs(bottom))){feedback.important="horizontal";}else{feedback.important="vertical";}
options.using.call(this,props,feedback);};}
elem.offset($.extend(position,{using:using}));});};$.ui.position={fit:{left:function(position,data){var within=data.within,withinOffset=within.isWindow?within.scrollLeft:within.offset.left,outerWidth=within.width,collisionPosLeft=position.left-data.collisionPosition.marginLeft,overLeft=withinOffset-collisionPosLeft,overRight=collisionPosLeft+data.collisionWidth-outerWidth-withinOffset,newOverRight;if(data.collisionWidth>outerWidth){if(overLeft>0&&overRight<=0){newOverRight=position.left+overLeft+data.collisionWidth-outerWidth-withinOffset;position.left+=overLeft-newOverRight;}else if(overRight>0&&overLeft<=0){position.left=withinOffset;}else{if(overLeft>overRight){position.left=withinOffset+outerWidth-data.collisionWidth;}else{position.left=withinOffset;}}}else if(overLeft>0){position.left+=overLeft;}else if(overRight>0){position.left-=overRight;}else{position.left=max(position.left-collisionPosLeft,position.left);}},top:function(position,data){var within=data.within,withinOffset=within.isWindow?within.scrollTop:within.offset.top,outerHeight=data.within.height,collisionPosTop=position.top-data.collisionPosition.marginTop,overTop=withinOffset-collisionPosTop,overBottom=collisionPosTop+data.collisionHeight-outerHeight-withinOffset,newOverBottom;if(data.collisionHeight>outerHeight){if(overTop>0&&overBottom<=0){newOverBottom=position.top+overTop+data.collisionHeight-outerHeight-withinOffset;position.top+=overTop-newOverBottom;}else if(overBottom>0&&overTop<=0){position.top=withinOffset;}else{if(overTop>overBottom){position.top=withinOffset+outerHeight-data.collisionHeight;}else{position.top=withinOffset;}}}else if(overTop>0){position.top+=overTop;}else if(overBottom>0){position.top-=overBottom;}else{position.top=max(position.top-collisionPosTop,position.top);}}},flip:{left:function(position,data){var within=data.within,withinOffset=within.offset.left+within.scrollLeft,outerWidth=within.width,offsetLeft=within.isWindow?within.scrollLeft:within.offset.left,collisionPosLeft=position.left-data.collisionPosition.marginLeft,overLeft=collisionPosLeft-offsetLeft,overRight=collisionPosLeft+data.collisionWidth-outerWidth-offsetLeft,myOffset=data.my[0]==="left"?-data.elemWidth:data.my[0]==="right"?data.elemWidth:0,atOffset=data.at[0]==="left"?data.targetWidth:data.at[0]==="right"?-data.targetWidth:0,offset=-2*data.offset[0],newOverRight,newOverLeft;if(overLeft<0){newOverRight=position.left+myOffset+atOffset+offset+data.collisionWidth-outerWidth-withinOffset;if(newOverRight<0||newOverRight<abs(overLeft)){position.left+=myOffset+atOffset+offset;}}
else if(overRight>0){newOverLeft=position.left-data.collisionPosition.marginLeft+myOffset+atOffset+offset-offsetLeft;if(newOverLeft>0||abs(newOverLeft)<overRight){position.left+=myOffset+atOffset+offset;}}},top:function(position,data){var within=data.within,withinOffset=within.offset.top+within.scrollTop,outerHeight=within.height,offsetTop=within.isWindow?within.scrollTop:within.offset.top,collisionPosTop=position.top-data.collisionPosition.marginTop,overTop=collisionPosTop-offsetTop,overBottom=collisionPosTop+data.collisionHeight-outerHeight-offsetTop,top=data.my[1]==="top",myOffset=top?-data.elemHeight:data.my[1]==="bottom"?data.elemHeight:0,atOffset=data.at[1]==="top"?data.targetHeight:data.at[1]==="bottom"?-data.targetHeight:0,offset=-2*data.offset[1],newOverTop,newOverBottom;if(overTop<0){newOverBottom=position.top+myOffset+atOffset+offset+data.collisionHeight-outerHeight-withinOffset;if((position.top+myOffset+atOffset+offset)>overTop&&(newOverBottom<0||newOverBottom<abs(overTop))){position.top+=myOffset+atOffset+offset;}}
else if(overBottom>0){newOverTop=position.top-data.collisionPosition.marginTop+myOffset+atOffset+offset-offsetTop;if((position.top+myOffset+atOffset+offset)>overBottom&&(newOverTop>0||abs(newOverTop)<overBottom)){position.top+=myOffset+atOffset+offset;}}}},flipfit:{left:function(){$.ui.position.flip.left.apply(this,arguments);$.ui.position.fit.left.apply(this,arguments);},top:function(){$.ui.position.flip.top.apply(this,arguments);$.ui.position.fit.top.apply(this,arguments);}}};(function(){var testElement,testElementParent,testElementStyle,offsetLeft,i,body=document.getElementsByTagName("body")[0],div=document.createElement("div");testElement=document.createElement(body?"div":"body");testElementStyle={visibility:"hidden",width:0,height:0,border:0,margin:0,background:"none"};if(body){$.extend(testElementStyle,{position:"absolute",left:"-1000px",top:"-1000px"});}
for(i in testElementStyle){testElement.style[i]=testElementStyle[i];}
testElement.appendChild(div);testElementParent=body||document.documentElement;testElementParent.insertBefore(testElement,testElementParent.firstChild);div.style.cssText="position: absolute; left: 10.7432222px;";offsetLeft=$(div).offset().left;$.support.offsetFractions=offsetLeft>10&&offsetLeft<11;testElement.innerHTML="";testElementParent.removeChild(testElement);})();}(jQuery));(function($,undefined){var uid=0,hideProps={},showProps={};hideProps.height=hideProps.paddingTop=hideProps.paddingBottom=hideProps.borderTopWidth=hideProps.borderBottomWidth="hide";showProps.height=showProps.paddingTop=showProps.paddingBottom=showProps.borderTopWidth=showProps.borderBottomWidth="show";$.widget("ui.accordion",{version:"1.10.4",options:{active:0,animate:{},collapsible:false,event:"click",header:"> li > :first-child,> :not(li):even",heightStyle:"auto",icons:{activeHeader:"ui-icon-triangle-1-s",header:"ui-icon-triangle-1-e"},activate:null,beforeActivate:null},_create:function(){var options=this.options;this.prevShow=this.prevHide=$();this.element.addClass("ui-accordion ui-widget ui-helper-reset").attr("role","tablist");if(!options.collapsible&&(options.active===false||options.active==null)){options.active=0;}
this._processPanels();if(options.active<0){options.active+=this.headers.length;}
this._refresh();},_getCreateEventData:function(){return{header:this.active,panel:!this.active.length?$():this.active.next(),content:!this.active.length?$():this.active.next()};},_createIcons:function(){var icons=this.options.icons;if(icons){$("<span>").addClass("ui-accordion-header-icon ui-icon "+icons.header).prependTo(this.headers);this.active.children(".ui-accordion-header-icon").removeClass(icons.header).addClass(icons.activeHeader);this.headers.addClass("ui-accordion-icons");}},_destroyIcons:function(){this.headers.removeClass("ui-accordion-icons").children(".ui-accordion-header-icon").remove();},_destroy:function(){var contents;this.element.removeClass("ui-accordion ui-widget ui-helper-reset").removeAttr("role");this.headers.removeClass("ui-accordion-header ui-accordion-header-active ui-helper-reset ui-state-default ui-corner-all ui-state-active ui-state-disabled ui-corner-top").removeAttr("role").removeAttr("aria-expanded").removeAttr("aria-selected").removeAttr("aria-controls").removeAttr("tabIndex").each(function(){if(/^ui-accordion/.test(this.id)){this.removeAttribute("id");}});this._destroyIcons();contents=this.headers.next().css("display","").removeAttr("role").removeAttr("aria-hidden").removeAttr("aria-labelledby").removeClass("ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content ui-accordion-content-active ui-state-disabled").each(function(){if(/^ui-accordion/.test(this.id)){this.removeAttribute("id");}});if(this.options.heightStyle!=="content"){contents.css("height","");}},_setOption:function(key,value){if(key==="active"){this._activate(value);return;}
if(key==="event"){if(this.options.event){this._off(this.headers,this.options.event);}
this._setupEvents(value);}
this._super(key,value);if(key==="collapsible"&&!value&&this.options.active===false){this._activate(0);}
if(key==="icons"){this._destroyIcons();if(value){this._createIcons();}}
if(key==="disabled"){this.headers.add(this.headers.next()).toggleClass("ui-state-disabled",!!value);}},_keydown:function(event){if(event.altKey||event.ctrlKey){return;}
var keyCode=$.ui.keyCode,length=this.headers.length,currentIndex=this.headers.index(event.target),toFocus=false;switch(event.keyCode){case keyCode.RIGHT:case keyCode.DOWN:toFocus=this.headers[(currentIndex+1)%length];break;case keyCode.LEFT:case keyCode.UP:toFocus=this.headers[(currentIndex-1+length)%length];break;case keyCode.SPACE:case keyCode.ENTER:this._eventHandler(event);break;case keyCode.HOME:toFocus=this.headers[0];break;case keyCode.END:toFocus=this.headers[length-1];break;}
if(toFocus){$(event.target).attr("tabIndex",-1);$(toFocus).attr("tabIndex",0);toFocus.focus();event.preventDefault();}},_panelKeyDown:function(event){if(event.keyCode===$.ui.keyCode.UP&&event.ctrlKey){$(event.currentTarget).prev().focus();}},refresh:function(){var options=this.options;this._processPanels();if((options.active===false&&options.collapsible===true)||!this.headers.length){options.active=false;this.active=$();}else if(options.active===false){this._activate(0);}else if(this.active.length&&!$.contains(this.element[0],this.active[0])){if(this.headers.length===this.headers.find(".ui-state-disabled").length){options.active=false;this.active=$();}else{this._activate(Math.max(0,options.active-1));}}else{options.active=this.headers.index(this.active);}
this._destroyIcons();this._refresh();},_processPanels:function(){this.headers=this.element.find(this.options.header).addClass("ui-accordion-header ui-helper-reset ui-state-default ui-corner-all");this.headers.next().addClass("ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom").filter(":not(.ui-accordion-content-active)").hide();},_refresh:function(){var maxHeight,options=this.options,heightStyle=options.heightStyle,parent=this.element.parent(),accordionId=this.accordionId="ui-accordion-"+
(this.element.attr("id")||++uid);this.active=this._findActive(options.active).addClass("ui-accordion-header-active ui-state-active ui-corner-top").removeClass("ui-corner-all");this.active.next().addClass("ui-accordion-content-active").show();this.headers.attr("role","tab").each(function(i){var header=$(this),headerId=header.attr("id"),panel=header.next(),panelId=panel.attr("id");if(!headerId){headerId=accordionId+"-header-"+i;header.attr("id",headerId);}
if(!panelId){panelId=accordionId+"-panel-"+i;panel.attr("id",panelId);}
header.attr("aria-controls",panelId);panel.attr("aria-labelledby",headerId);}).next().attr("role","tabpanel");this.headers.not(this.active).attr({"aria-selected":"false","aria-expanded":"false",tabIndex:-1}).next().attr({"aria-hidden":"true"}).hide();if(!this.active.length){this.headers.eq(0).attr("tabIndex",0);}else{this.active.attr({"aria-selected":"true","aria-expanded":"true",tabIndex:0}).next().attr({"aria-hidden":"false"});}
this._createIcons();this._setupEvents(options.event);if(heightStyle==="fill"){maxHeight=parent.height();this.element.siblings(":visible").each(function(){var elem=$(this),position=elem.css("position");if(position==="absolute"||position==="fixed"){return;}
maxHeight-=elem.outerHeight(true);});this.headers.each(function(){maxHeight-=$(this).outerHeight(true);});this.headers.next().each(function(){$(this).height(Math.max(0,maxHeight-
$(this).innerHeight()+$(this).height()));}).css("overflow","auto");}else if(heightStyle==="auto"){maxHeight=0;this.headers.next().each(function(){maxHeight=Math.max(maxHeight,$(this).css("height","").height());}).height(maxHeight);}},_activate:function(index){var active=this._findActive(index)[0];if(active===this.active[0]){return;}
active=active||this.active[0];this._eventHandler({target:active,currentTarget:active,preventDefault:$.noop});},_findActive:function(selector){return typeof selector==="number"?this.headers.eq(selector):$();},_setupEvents:function(event){var events={keydown:"_keydown"};if(event){$.each(event.split(" "),function(index,eventName){events[eventName]="_eventHandler";});}
this._off(this.headers.add(this.headers.next()));this._on(this.headers,events);this._on(this.headers.next(),{keydown:"_panelKeyDown"});this._hoverable(this.headers);this._focusable(this.headers);},_eventHandler:function(event){var options=this.options,active=this.active,clicked=$(event.currentTarget),clickedIsActive=clicked[0]===active[0],collapsing=clickedIsActive&&options.collapsible,toShow=collapsing?$():clicked.next(),toHide=active.next(),eventData={oldHeader:active,oldPanel:toHide,newHeader:collapsing?$():clicked,newPanel:toShow};event.preventDefault();if((clickedIsActive&&!options.collapsible)||(this._trigger("beforeActivate",event,eventData)===false)){return;}
options.active=collapsing?false:this.headers.index(clicked);this.active=clickedIsActive?$():clicked;this._toggle(eventData);active.removeClass("ui-accordion-header-active ui-state-active");if(options.icons){active.children(".ui-accordion-header-icon").removeClass(options.icons.activeHeader).addClass(options.icons.header);}
if(!clickedIsActive){clicked.removeClass("ui-corner-all").addClass("ui-accordion-header-active ui-state-active ui-corner-top");if(options.icons){clicked.children(".ui-accordion-header-icon").removeClass(options.icons.header).addClass(options.icons.activeHeader);}
clicked.next().addClass("ui-accordion-content-active");}},_toggle:function(data){var toShow=data.newPanel,toHide=this.prevShow.length?this.prevShow:data.oldPanel;this.prevShow.add(this.prevHide).stop(true,true);this.prevShow=toShow;this.prevHide=toHide;if(this.options.animate){this._animate(toShow,toHide,data);}else{toHide.hide();toShow.show();this._toggleComplete(data);}
toHide.attr({"aria-hidden":"true"});toHide.prev().attr("aria-selected","false");if(toShow.length&&toHide.length){toHide.prev().attr({"tabIndex":-1,"aria-expanded":"false"});}else if(toShow.length){this.headers.filter(function(){return $(this).attr("tabIndex")===0;}).attr("tabIndex",-1);}
toShow.attr("aria-hidden","false").prev().attr({"aria-selected":"true",tabIndex:0,"aria-expanded":"true"});},_animate:function(toShow,toHide,data){var total,easing,duration,that=this,adjust=0,down=toShow.length&&(!toHide.length||(toShow.index()<toHide.index())),animate=this.options.animate||{},options=down&&animate.down||animate,complete=function(){that._toggleComplete(data);};if(typeof options==="number"){duration=options;}
if(typeof options==="string"){easing=options;}
easing=easing||options.easing||animate.easing;duration=duration||options.duration||animate.duration;if(!toHide.length){return toShow.animate(showProps,duration,easing,complete);}
if(!toShow.length){return toHide.animate(hideProps,duration,easing,complete);}
total=toShow.show().outerHeight();toHide.animate(hideProps,{duration:duration,easing:easing,step:function(now,fx){fx.now=Math.round(now);}});toShow.hide().animate(showProps,{duration:duration,easing:easing,complete:complete,step:function(now,fx){fx.now=Math.round(now);if(fx.prop!=="height"){adjust+=fx.now;}else if(that.options.heightStyle!=="content"){fx.now=Math.round(total-toHide.outerHeight()-adjust);adjust=0;}}});},_toggleComplete:function(data){var toHide=data.oldPanel;toHide.removeClass("ui-accordion-content-active").prev().removeClass("ui-corner-top").addClass("ui-corner-all");if(toHide.length){toHide.parent()[0].className=toHide.parent()[0].className;}
this._trigger("activate",null,data);}});})(jQuery);(function($,undefined){$.widget("ui.autocomplete",{version:"1.10.4",defaultElement:"<input>",options:{appendTo:null,autoFocus:false,delay:300,minLength:1,position:{my:"left top",at:"left bottom",collision:"none"},source:null,change:null,close:null,focus:null,open:null,response:null,search:null,select:null},requestIndex:0,pending:0,_create:function(){var suppressKeyPress,suppressKeyPressRepeat,suppressInput,nodeName=this.element[0].nodeName.toLowerCase(),isTextarea=nodeName==="textarea",isInput=nodeName==="input";this.isMultiLine=isTextarea?true:isInput?false:this.element.prop("isContentEditable");this.valueMethod=this.element[isTextarea||isInput?"val":"text"];this.isNewMenu=true;this.element.addClass("ui-autocomplete-input").attr("autocomplete","off");this._on(this.element,{keydown:function(event){if(this.element.prop("readOnly")){suppressKeyPress=true;suppressInput=true;suppressKeyPressRepeat=true;return;}
suppressKeyPress=false;suppressInput=false;suppressKeyPressRepeat=false;var keyCode=$.ui.keyCode;switch(event.keyCode){case keyCode.PAGE_UP:suppressKeyPress=true;this._move("previousPage",event);break;case keyCode.PAGE_DOWN:suppressKeyPress=true;this._move("nextPage",event);break;case keyCode.UP:suppressKeyPress=true;this._keyEvent("previous",event);break;case keyCode.DOWN:suppressKeyPress=true;this._keyEvent("next",event);break;case keyCode.ENTER:case keyCode.NUMPAD_ENTER:if(this.menu.active){suppressKeyPress=true;event.preventDefault();this.menu.select(event);}
break;case keyCode.TAB:if(this.menu.active){this.menu.select(event);}
break;case keyCode.ESCAPE:if(this.menu.element.is(":visible")){this._value(this.term);this.close(event);event.preventDefault();}
break;default:suppressKeyPressRepeat=true;this._searchTimeout(event);break;}},keypress:function(event){if(suppressKeyPress){suppressKeyPress=false;if(!this.isMultiLine||this.menu.element.is(":visible")){event.preventDefault();}
return;}
if(suppressKeyPressRepeat){return;}
var keyCode=$.ui.keyCode;switch(event.keyCode){case keyCode.PAGE_UP:this._move("previousPage",event);break;case keyCode.PAGE_DOWN:this._move("nextPage",event);break;case keyCode.UP:this._keyEvent("previous",event);break;case keyCode.DOWN:this._keyEvent("next",event);break;}},input:function(event){if(suppressInput){suppressInput=false;event.preventDefault();return;}
this._searchTimeout(event);},focus:function(){this.selectedItem=null;this.previous=this._value();},blur:function(event){if(this.cancelBlur){delete this.cancelBlur;return;}
clearTimeout(this.searching);this.close(event);this._change(event);}});this._initSource();this.menu=$("<ul>").addClass("ui-autocomplete ui-front").appendTo(this._appendTo()).menu({role:null}).hide().data("ui-menu");this._on(this.menu.element,{mousedown:function(event){event.preventDefault();this.cancelBlur=true;this._delay(function(){delete this.cancelBlur;});var menuElement=this.menu.element[0];if(!$(event.target).closest(".ui-menu-item").length){this._delay(function(){var that=this;this.document.one("mousedown",function(event){if(event.target!==that.element[0]&&event.target!==menuElement&&!$.contains(menuElement,event.target)){that.close();}});});}},menufocus:function(event,ui){if(this.isNewMenu){this.isNewMenu=false;if(event.originalEvent&&/^mouse/.test(event.originalEvent.type)){this.menu.blur();this.document.one("mousemove",function(){$(event.target).trigger(event.originalEvent);});return;}}
var item=ui.item.data("ui-autocomplete-item");if(false!==this._trigger("focus",event,{item:item})){if(event.originalEvent&&/^key/.test(event.originalEvent.type)){this._value(item.value);}}else{this.liveRegion.text(item.value);}},menuselect:function(event,ui){var item=ui.item.data("ui-autocomplete-item"),previous=this.previous;if(this.element[0]!==this.document[0].activeElement){this.element.focus();this.previous=previous;this._delay(function(){this.previous=previous;this.selectedItem=item;});}
if(false!==this._trigger("select",event,{item:item})){this._value(item.value);}
this.term=this._value();this.close(event);this.selectedItem=item;}});this.liveRegion=$("<span>",{role:"status","aria-live":"polite"}).addClass("ui-helper-hidden-accessible").insertBefore(this.element);this._on(this.window,{beforeunload:function(){this.element.removeAttr("autocomplete");}});},_destroy:function(){clearTimeout(this.searching);this.element.removeClass("ui-autocomplete-input").removeAttr("autocomplete");this.menu.element.remove();this.liveRegion.remove();},_setOption:function(key,value){this._super(key,value);if(key==="source"){this._initSource();}
if(key==="appendTo"){this.menu.element.appendTo(this._appendTo());}
if(key==="disabled"&&value&&this.xhr){this.xhr.abort();}},_appendTo:function(){var element=this.options.appendTo;if(element){element=element.jquery||element.nodeType?$(element):this.document.find(element).eq(0);}
if(!element){element=this.element.closest(".ui-front");}
if(!element.length){element=this.document[0].body;}
return element;},_initSource:function(){var array,url,that=this;if($.isArray(this.options.source)){array=this.options.source;this.source=function(request,response){response($.ui.autocomplete.filter(array,request.term));};}else if(typeof this.options.source==="string"){url=this.options.source;this.source=function(request,response){if(that.xhr){that.xhr.abort();}
that.xhr=$.ajax({url:url,data:request,dataType:"json",success:function(data){response(data);},error:function(){response([]);}});};}else{this.source=this.options.source;}},_searchTimeout:function(event){clearTimeout(this.searching);this.searching=this._delay(function(){if(this.term!==this._value()){this.selectedItem=null;this.search(null,event);}},this.options.delay);},search:function(value,event){value=value!=null?value:this._value();this.term=this._value();if(value.length<this.options.minLength){return this.close(event);}
if(this._trigger("search",event)===false){return;}
return this._search(value);},_search:function(value){this.pending++;this.element.addClass("ui-autocomplete-loading");this.cancelSearch=false;this.source({term:value},this._response());},_response:function(){var index=++this.requestIndex;return $.proxy(function(content){if(index===this.requestIndex){this.__response(content);}
this.pending--;if(!this.pending){this.element.removeClass("ui-autocomplete-loading");}},this);},__response:function(content){if(content){content=this._normalize(content);}
this._trigger("response",null,{content:content});if(!this.options.disabled&&content&&content.length&&!this.cancelSearch){this._suggest(content);this._trigger("open");}else{this._close();}},close:function(event){this.cancelSearch=true;this._close(event);},_close:function(event){if(this.menu.element.is(":visible")){this.menu.element.hide();this.menu.blur();this.isNewMenu=true;this._trigger("close",event);}},_change:function(event){if(this.previous!==this._value()){this._trigger("change",event,{item:this.selectedItem});}},_normalize:function(items){if(items.length&&items[0].label&&items[0].value){return items;}
return $.map(items,function(item){if(typeof item==="string"){return{label:item,value:item};}
return $.extend({label:item.label||item.value,value:item.value||item.label},item);});},_suggest:function(items){var ul=this.menu.element.empty();this._renderMenu(ul,items);this.isNewMenu=true;this.menu.refresh();ul.show();this._resizeMenu();ul.position($.extend({of:this.element},this.options.position));if(this.options.autoFocus){this.menu.next();}},_resizeMenu:function(){var ul=this.menu.element;ul.outerWidth(Math.max(ul.width("").outerWidth()+1,this.element.outerWidth()));},_renderMenu:function(ul,items){var that=this;$.each(items,function(index,item){that._renderItemData(ul,item);});},_renderItemData:function(ul,item){return this._renderItem(ul,item).data("ui-autocomplete-item",item);},_renderItem:function(ul,item){return $("<li>").append($("<a>").text(item.label)).appendTo(ul);},_move:function(direction,event){if(!this.menu.element.is(":visible")){this.search(null,event);return;}
if(this.menu.isFirstItem()&&/^previous/.test(direction)||this.menu.isLastItem()&&/^next/.test(direction)){this._value(this.term);this.menu.blur();return;}
this.menu[direction](event);},widget:function(){return this.menu.element;},_value:function(){return this.valueMethod.apply(this.element,arguments);},_keyEvent:function(keyEvent,event){if(!this.isMultiLine||this.menu.element.is(":visible")){this._move(keyEvent,event);event.preventDefault();}}});$.extend($.ui.autocomplete,{escapeRegex:function(value){return value.replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g,"\\$&");},filter:function(array,term){var matcher=new RegExp($.ui.autocomplete.escapeRegex(term),"i");return $.grep(array,function(value){return matcher.test(value.label||value.value||value);});}});$.widget("ui.autocomplete",$.ui.autocomplete,{options:{messages:{noResults:"No search results.",results:function(amount){return amount+(amount>1?" results are":" result is")+" available, use up and down arrow keys to navigate.";}}},__response:function(content){var message;this._superApply(arguments);if(this.options.disabled||this.cancelSearch){return;}
if(content&&content.length){message=this.options.messages.results(content.length);}else{message=this.options.messages.noResults;}
this.liveRegion.text(message);}});}(jQuery));(function($,undefined){var lastActive,baseClasses="ui-button ui-widget ui-state-default ui-corner-all",typeClasses="ui-button-icons-only ui-button-icon-only ui-button-text-icons ui-button-text-icon-primary ui-button-text-icon-secondary ui-button-text-only",formResetHandler=function(){var form=$(this);setTimeout(function(){form.find(":ui-button").button("refresh");},1);},radioGroup=function(radio){var name=radio.name,form=radio.form,radios=$([]);if(name){name=name.replace(/'/g,"\\'");if(form){radios=$(form).find("[name='"+name+"']");}else{radios=$("[name='"+name+"']",radio.ownerDocument).filter(function(){return!this.form;});}}
return radios;};$.widget("ui.button",{version:"1.10.4",defaultElement:"<button>",options:{disabled:null,text:true,label:null,icons:{primary:null,secondary:null}},_create:function(){this.element.closest("form").unbind("reset"+this.eventNamespace).bind("reset"+this.eventNamespace,formResetHandler);if(typeof this.options.disabled!=="boolean"){this.options.disabled=!!this.element.prop("disabled");}else{this.element.prop("disabled",this.options.disabled);}
this._determineButtonType();this.hasTitle=!!this.buttonElement.attr("title");var that=this,options=this.options,toggleButton=this.type==="checkbox"||this.type==="radio",activeClass=!toggleButton?"ui-state-active":"";if(options.label===null){options.label=(this.type==="input"?this.buttonElement.val():this.buttonElement.html());}
this._hoverable(this.buttonElement);this.buttonElement.addClass(baseClasses).attr("role","button").bind("mouseenter"+this.eventNamespace,function(){if(options.disabled){return;}
if(this===lastActive){$(this).addClass("ui-state-active");}}).bind("mouseleave"+this.eventNamespace,function(){if(options.disabled){return;}
$(this).removeClass(activeClass);}).bind("click"+this.eventNamespace,function(event){if(options.disabled){event.preventDefault();event.stopImmediatePropagation();}});this._on({focus:function(){this.buttonElement.addClass("ui-state-focus");},blur:function(){this.buttonElement.removeClass("ui-state-focus");}});if(toggleButton){this.element.bind("change"+this.eventNamespace,function(){that.refresh();});}
if(this.type==="checkbox"){this.buttonElement.bind("click"+this.eventNamespace,function(){if(options.disabled){return false;}});}else if(this.type==="radio"){this.buttonElement.bind("click"+this.eventNamespace,function(){if(options.disabled){return false;}
$(this).addClass("ui-state-active");that.buttonElement.attr("aria-pressed","true");var radio=that.element[0];radioGroup(radio).not(radio).map(function(){return $(this).button("widget")[0];}).removeClass("ui-state-active").attr("aria-pressed","false");});}else{this.buttonElement.bind("mousedown"+this.eventNamespace,function(){if(options.disabled){return false;}
$(this).addClass("ui-state-active");lastActive=this;that.document.one("mouseup",function(){lastActive=null;});}).bind("mouseup"+this.eventNamespace,function(){if(options.disabled){return false;}
$(this).removeClass("ui-state-active");}).bind("keydown"+this.eventNamespace,function(event){if(options.disabled){return false;}
if(event.keyCode===$.ui.keyCode.SPACE||event.keyCode===$.ui.keyCode.ENTER){$(this).addClass("ui-state-active");}}).bind("keyup"+this.eventNamespace+" blur"+this.eventNamespace,function(){$(this).removeClass("ui-state-active");});if(this.buttonElement.is("a")){this.buttonElement.keyup(function(event){if(event.keyCode===$.ui.keyCode.SPACE){$(this).click();}});}}
this._setOption("disabled",options.disabled);this._resetButton();},_determineButtonType:function(){var ancestor,labelSelector,checked;if(this.element.is("[type=checkbox]")){this.type="checkbox";}else if(this.element.is("[type=radio]")){this.type="radio";}else if(this.element.is("input")){this.type="input";}else{this.type="button";}
if(this.type==="checkbox"||this.type==="radio"){ancestor=this.element.parents().last();labelSelector="label[for='"+this.element.attr("id")+"']";this.buttonElement=ancestor.find(labelSelector);if(!this.buttonElement.length){ancestor=ancestor.length?ancestor.siblings():this.element.siblings();this.buttonElement=ancestor.filter(labelSelector);if(!this.buttonElement.length){this.buttonElement=ancestor.find(labelSelector);}}
this.element.addClass("ui-helper-hidden-accessible");checked=this.element.is(":checked");if(checked){this.buttonElement.addClass("ui-state-active");}
this.buttonElement.prop("aria-pressed",checked);}else{this.buttonElement=this.element;}},widget:function(){return this.buttonElement;},_destroy:function(){this.element.removeClass("ui-helper-hidden-accessible");this.buttonElement.removeClass(baseClasses+" ui-state-active "+typeClasses).removeAttr("role").removeAttr("aria-pressed").html(this.buttonElement.find(".ui-button-text").html());if(!this.hasTitle){this.buttonElement.removeAttr("title");}},_setOption:function(key,value){this._super(key,value);if(key==="disabled"){this.element.prop("disabled",!!value);if(value){this.buttonElement.removeClass("ui-state-focus");}
return;}
this._resetButton();},refresh:function(){var isDisabled=this.element.is("input, button")?this.element.is(":disabled"):this.element.hasClass("ui-button-disabled");if(isDisabled!==this.options.disabled){this._setOption("disabled",isDisabled);}
if(this.type==="radio"){radioGroup(this.element[0]).each(function(){if($(this).is(":checked")){$(this).button("widget").addClass("ui-state-active").attr("aria-pressed","true");}else{$(this).button("widget").removeClass("ui-state-active").attr("aria-pressed","false");}});}else if(this.type==="checkbox"){if(this.element.is(":checked")){this.buttonElement.addClass("ui-state-active").attr("aria-pressed","true");}else{this.buttonElement.removeClass("ui-state-active").attr("aria-pressed","false");}}},_resetButton:function(){if(this.type==="input"){if(this.options.label){this.element.val(this.options.label);}
return;}
var buttonElement=this.buttonElement.removeClass(typeClasses),buttonText=$("<span></span>",this.document[0]).addClass("ui-button-text").html(this.options.label).appendTo(buttonElement.empty()).text(),icons=this.options.icons,multipleIcons=icons.primary&&icons.secondary,buttonClasses=[];if(icons.primary||icons.secondary){if(this.options.text){buttonClasses.push("ui-button-text-icon"+(multipleIcons?"s":(icons.primary?"-primary":"-secondary")));}
if(icons.primary){buttonElement.prepend("<span class='ui-button-icon-primary ui-icon "+icons.primary+"'></span>");}
if(icons.secondary){buttonElement.append("<span class='ui-button-icon-secondary ui-icon "+icons.secondary+"'></span>");}
if(!this.options.text){buttonClasses.push(multipleIcons?"ui-button-icons-only":"ui-button-icon-only");if(!this.hasTitle){buttonElement.attr("title",$.trim(buttonText));}}}else{buttonClasses.push("ui-button-text-only");}
buttonElement.addClass(buttonClasses.join(" "));}});$.widget("ui.buttonset",{version:"1.10.4",options:{items:"button, input[type=button], input[type=submit], input[type=reset], input[type=checkbox], input[type=radio], a, :data(ui-button)"},_create:function(){this.element.addClass("ui-buttonset");},_init:function(){this.refresh();},_setOption:function(key,value){if(key==="disabled"){this.buttons.button("option",key,value);}
this._super(key,value);},refresh:function(){var rtl=this.element.css("direction")==="rtl";this.buttons=this.element.find(this.options.items).filter(":ui-button").button("refresh").end().not(":ui-button").button().end().map(function(){return $(this).button("widget")[0];}).removeClass("ui-corner-all ui-corner-left ui-corner-right").filter(":first").addClass(rtl?"ui-corner-right":"ui-corner-left").end().filter(":last").addClass(rtl?"ui-corner-left":"ui-corner-right").end().end();},_destroy:function(){this.element.removeClass("ui-buttonset");this.buttons.map(function(){return $(this).button("widget")[0];}).removeClass("ui-corner-left ui-corner-right").end().button("destroy");}});}(jQuery));(function($,undefined){$.extend($.ui,{datepicker:{version:"1.10.4"}});var PROP_NAME="datepicker",instActive;function Datepicker(){this._curInst=null;this._keyEvent=false;this._disabledInputs=[];this._datepickerShowing=false;this._inDialog=false;this._mainDivId="ui-datepicker-div";this._inlineClass="ui-datepicker-inline";this._appendClass="ui-datepicker-append";this._triggerClass="ui-datepicker-trigger";this._dialogClass="ui-datepicker-dialog";this._disableClass="ui-datepicker-disabled";this._unselectableClass="ui-datepicker-unselectable";this._currentClass="ui-datepicker-current-day";this._dayOverClass="ui-datepicker-days-cell-over";this.regional=[];this.regional[""]={closeText:"Done",prevText:"Prev",nextText:"Next",currentText:"Today",monthNames:["January","February","March","April","May","June","July","August","September","October","November","December"],monthNamesShort:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],dayNames:["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],dayNamesShort:["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],dayNamesMin:["Su","Mo","Tu","We","Th","Fr","Sa"],weekHeader:"Wk",dateFormat:"mm/dd/yy",firstDay:0,isRTL:false,showMonthAfterYear:false,yearSuffix:""};this._defaults={showOn:"focus",showAnim:"fadeIn",showOptions:{},defaultDate:null,appendText:"",buttonText:"...",buttonImage:"",buttonImageOnly:false,hideIfNoPrevNext:false,navigationAsDateFormat:false,gotoCurrent:false,changeMonth:false,changeYear:false,yearRange:"c-10:c+10",showOtherMonths:false,selectOtherMonths:false,showWeek:false,calculateWeek:this.iso8601Week,shortYearCutoff:"+10",minDate:null,maxDate:null,duration:"fast",beforeShowDay:null,beforeShow:null,onSelect:null,onChangeMonthYear:null,onClose:null,numberOfMonths:1,showCurrentAtPos:0,stepMonths:1,stepBigMonths:12,altField:"",altFormat:"",constrainInput:true,showButtonPanel:false,autoSize:false,disabled:false};$.extend(this._defaults,this.regional[""]);this.dpDiv=bindHover($("<div id='"+this._mainDivId+"' class='ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all'></div>"));}
$.extend(Datepicker.prototype,{markerClassName:"hasDatepicker",maxRows:4,_widgetDatepicker:function(){return this.dpDiv;},setDefaults:function(settings){extendRemove(this._defaults,settings||{});return this;},_attachDatepicker:function(target,settings){var nodeName,inline,inst;nodeName=target.nodeName.toLowerCase();inline=(nodeName==="div"||nodeName==="span");if(!target.id){this.uuid+=1;target.id="dp"+this.uuid;}
inst=this._newInst($(target),inline);inst.settings=$.extend({},settings||{});if(nodeName==="input"){this._connectDatepicker(target,inst);}else if(inline){this._inlineDatepicker(target,inst);}},_newInst:function(target,inline){var id=target[0].id.replace(/([^A-Za-z0-9_\-])/g,"\\\\$1");return{id:id,input:target,selectedDay:0,selectedMonth:0,selectedYear:0,drawMonth:0,drawYear:0,inline:inline,dpDiv:(!inline?this.dpDiv:bindHover($("<div class='"+this._inlineClass+" ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all'></div>")))};},_connectDatepicker:function(target,inst){var input=$(target);inst.append=$([]);inst.trigger=$([]);if(input.hasClass(this.markerClassName)){return;}
this._attachments(input,inst);input.addClass(this.markerClassName).keydown(this._doKeyDown).keypress(this._doKeyPress).keyup(this._doKeyUp);this._autoSize(inst);$.data(target,PROP_NAME,inst);if(inst.settings.disabled){this._disableDatepicker(target);}},_attachments:function(input,inst){var showOn,buttonText,buttonImage,appendText=this._get(inst,"appendText"),isRTL=this._get(inst,"isRTL");if(inst.append){inst.append.remove();}
if(appendText){inst.append=$("<span class='"+this._appendClass+"'>"+appendText+"</span>");input[isRTL?"before":"after"](inst.append);}
input.unbind("focus",this._showDatepicker);if(inst.trigger){inst.trigger.remove();}
showOn=this._get(inst,"showOn");if(showOn==="focus"||showOn==="both"){input.focus(this._showDatepicker);}
if(showOn==="button"||showOn==="both"){buttonText=this._get(inst,"buttonText");buttonImage=this._get(inst,"buttonImage");inst.trigger=$(this._get(inst,"buttonImageOnly")?$("<img/>").addClass(this._triggerClass).attr({src:buttonImage,alt:buttonText,title:buttonText}):$("<button type='button'></button>").addClass(this._triggerClass).html(!buttonImage?buttonText:$("<img/>").attr({src:buttonImage,alt:buttonText,title:buttonText})));input[isRTL?"before":"after"](inst.trigger);inst.trigger.click(function(){if($.datepicker._datepickerShowing&&$.datepicker._lastInput===input[0]){$.datepicker._hideDatepicker();}else if($.datepicker._datepickerShowing&&$.datepicker._lastInput!==input[0]){$.datepicker._hideDatepicker();$.datepicker._showDatepicker(input[0]);}else{$.datepicker._showDatepicker(input[0]);}
return false;});}
if(showOn==="div"){buttonText=this._get(inst,"buttonText");buttonImage=this._get(inst,"buttonImage");inst.trigger=$(this._get(inst,"buttonImageOnly")?$("<div/>").addClass(this._triggerClass).attr({src:buttonImage,alt:buttonText,title:buttonText}):$("<button type='button'></button>").addClass(this._triggerClass).html(!buttonImage?buttonText:$("<div/>").attr({src:buttonImage,alt:buttonText,title:buttonText})));input[isRTL?"before":"after"](inst.trigger);inst.trigger.click(function(){if($.datepicker._datepickerShowing&&$.datepicker._lastInput===input[0]){$.datepicker._hideDatepicker();}else if($.datepicker._datepickerShowing&&$.datepicker._lastInput!==input[0]){$.datepicker._hideDatepicker();$.datepicker._showDatepicker(input[0]);}else{$.datepicker._showDatepicker(input[0]);}
return false;});}},_autoSize:function(inst){if(this._get(inst,"autoSize")&&!inst.inline){var findMax,max,maxI,i,date=new Date(2009,12-1,20),dateFormat=this._get(inst,"dateFormat");if(dateFormat.match(/[DM]/)){findMax=function(names){max=0;maxI=0;for(i=0;i<names.length;i++){if(names[i].length>max){max=names[i].length;maxI=i;}}
return maxI;};date.setMonth(findMax(this._get(inst,(dateFormat.match(/MM/)?"monthNames":"monthNamesShort"))));date.setDate(findMax(this._get(inst,(dateFormat.match(/DD/)?"dayNames":"dayNamesShort")))+20-date.getDay());}
inst.input.attr("size",this._formatDate(inst,date).length);}},_inlineDatepicker:function(target,inst){var divSpan=$(target);if(divSpan.hasClass(this.markerClassName)){return;}
divSpan.addClass(this.markerClassName).append(inst.dpDiv);$.data(target,PROP_NAME,inst);this._setDate(inst,this._getDefaultDate(inst),true);this._updateDatepicker(inst);this._updateAlternate(inst);if(inst.settings.disabled){this._disableDatepicker(target);}
inst.dpDiv.css("display","block");},_dialogDatepicker:function(input,date,onSelect,settings,pos){var id,browserWidth,browserHeight,scrollX,scrollY,inst=this._dialogInst;if(!inst){this.uuid+=1;id="dp"+this.uuid;this._dialogInput=$("<input type='text' id='"+id+"' style='position: absolute; top: -100px; width: 0px;'/>");this._dialogInput.keydown(this._doKeyDown);$("body").append(this._dialogInput);inst=this._dialogInst=this._newInst(this._dialogInput,false);inst.settings={};$.data(this._dialogInput[0],PROP_NAME,inst);}
extendRemove(inst.settings,settings||{});date=(date&&date.constructor===Date?this._formatDate(inst,date):date);this._dialogInput.val(date);this._pos=(pos?(pos.length?pos:[pos.pageX,pos.pageY]):null);if(!this._pos){browserWidth=document.documentElement.clientWidth;browserHeight=document.documentElement.clientHeight;scrollX=document.documentElement.scrollLeft||document.body.scrollLeft;scrollY=document.documentElement.scrollTop||document.body.scrollTop;this._pos=[(browserWidth/2)-100+scrollX,(browserHeight/2)-150+scrollY];}
this._dialogInput.css("left",(this._pos[0]+20)+"px").css("top",this._pos[1]+"px");inst.settings.onSelect=onSelect;this._inDialog=true;this.dpDiv.addClass(this._dialogClass);this._showDatepicker(this._dialogInput[0]);if($.blockUI){$.blockUI(this.dpDiv);}
$.data(this._dialogInput[0],PROP_NAME,inst);return this;},_destroyDatepicker:function(target){var nodeName,$target=$(target),inst=$.data(target,PROP_NAME);if(!$target.hasClass(this.markerClassName)){return;}
nodeName=target.nodeName.toLowerCase();$.removeData(target,PROP_NAME);if(nodeName==="input"){inst.append.remove();inst.trigger.remove();$target.removeClass(this.markerClassName).unbind("focus",this._showDatepicker).unbind("keydown",this._doKeyDown).unbind("keypress",this._doKeyPress).unbind("keyup",this._doKeyUp);}else if(nodeName==="div"||nodeName==="span"){$target.removeClass(this.markerClassName).empty();}},_enableDatepicker:function(target){var nodeName,inline,$target=$(target),inst=$.data(target,PROP_NAME);if(!$target.hasClass(this.markerClassName)){return;}
nodeName=target.nodeName.toLowerCase();if(nodeName==="input"){target.disabled=false;inst.trigger.filter("button").each(function(){this.disabled=false;}).end().filter("img").css({opacity:"1.0",cursor:""});}else if(nodeName==="div"||nodeName==="span"){inline=$target.children("."+this._inlineClass);inline.children().removeClass("ui-state-disabled");inline.find("select.ui-datepicker-month, select.ui-datepicker-year").prop("disabled",false);}
this._disabledInputs=$.map(this._disabledInputs,function(value){return(value===target?null:value);});},_disableDatepicker:function(target){var nodeName,inline,$target=$(target),inst=$.data(target,PROP_NAME);if(!$target.hasClass(this.markerClassName)){return;}
nodeName=target.nodeName.toLowerCase();if(nodeName==="input"){target.disabled=true;inst.trigger.filter("button").each(function(){this.disabled=true;}).end().filter("img").css({opacity:"0.5",cursor:"default"});}else if(nodeName==="div"||nodeName==="span"){inline=$target.children("."+this._inlineClass);inline.children().addClass("ui-state-disabled");inline.find("select.ui-datepicker-month, select.ui-datepicker-year").prop("disabled",true);}
this._disabledInputs=$.map(this._disabledInputs,function(value){return(value===target?null:value);});this._disabledInputs[this._disabledInputs.length]=target;},_isDisabledDatepicker:function(target){if(!target){return false;}
for(var i=0;i<this._disabledInputs.length;i++){if(this._disabledInputs[i]===target){return true;}}
return false;},_getInst:function(target){try{return $.data(target,PROP_NAME);}
catch(err){throw"Missing instance data for this datepicker";}},_optionDatepicker:function(target,name,value){var settings,date,minDate,maxDate,inst=this._getInst(target);if(arguments.length===2&&typeof name==="string"){return(name==="defaults"?$.extend({},$.datepicker._defaults):(inst?(name==="all"?$.extend({},inst.settings):this._get(inst,name)):null));}
settings=name||{};if(typeof name==="string"){settings={};settings[name]=value;}
if(inst){if(this._curInst===inst){this._hideDatepicker();}
date=this._getDateDatepicker(target,true);minDate=this._getMinMaxDate(inst,"min");maxDate=this._getMinMaxDate(inst,"max");extendRemove(inst.settings,settings);if(minDate!==null&&settings.dateFormat!==undefined&&settings.minDate===undefined){inst.settings.minDate=this._formatDate(inst,minDate);}
if(maxDate!==null&&settings.dateFormat!==undefined&&settings.maxDate===undefined){inst.settings.maxDate=this._formatDate(inst,maxDate);}
if("disabled"in settings){if(settings.disabled){this._disableDatepicker(target);}else{this._enableDatepicker(target);}}
this._attachments($(target),inst);this._autoSize(inst);this._setDate(inst,date);this._updateAlternate(inst);this._updateDatepicker(inst);}},_changeDatepicker:function(target,name,value){this._optionDatepicker(target,name,value);},_refreshDatepicker:function(target){var inst=this._getInst(target);if(inst){this._updateDatepicker(inst);}},_setDateDatepicker:function(target,date){var inst=this._getInst(target);if(inst){this._setDate(inst,date);this._updateDatepicker(inst);this._updateAlternate(inst);}},_getDateDatepicker:function(target,noDefault){var inst=this._getInst(target);if(inst&&!inst.inline){this._setDateFromField(inst,noDefault);}
return(inst?this._getDate(inst):null);},_doKeyDown:function(event){var onSelect,dateStr,sel,inst=$.datepicker._getInst(event.target),handled=true,isRTL=inst.dpDiv.is(".ui-datepicker-rtl");inst._keyEvent=true;if($.datepicker._datepickerShowing){switch(event.keyCode){case 9:$.datepicker._hideDatepicker();handled=false;break;case 13:sel=$("td."+$.datepicker._dayOverClass+":not(."+
$.datepicker._currentClass+")",inst.dpDiv);if(sel[0]){$.datepicker._selectDay(event.target,inst.selectedMonth,inst.selectedYear,sel[0]);}
onSelect=$.datepicker._get(inst,"onSelect");if(onSelect){dateStr=$.datepicker._formatDate(inst);onSelect.apply((inst.input?inst.input[0]:null),[dateStr,inst]);}else{$.datepicker._hideDatepicker();}
return false;case 27:$.datepicker._hideDatepicker();break;case 33:$.datepicker._adjustDate(event.target,(event.ctrlKey?-$.datepicker._get(inst,"stepBigMonths"):-$.datepicker._get(inst,"stepMonths")),"M");break;case 34:$.datepicker._adjustDate(event.target,(event.ctrlKey?+$.datepicker._get(inst,"stepBigMonths"):+$.datepicker._get(inst,"stepMonths")),"M");break;case 35:if(event.ctrlKey||event.metaKey){$.datepicker._clearDate(event.target);}
handled=event.ctrlKey||event.metaKey;break;case 36:if(event.ctrlKey||event.metaKey){$.datepicker._gotoToday(event.target);}
handled=event.ctrlKey||event.metaKey;break;case 37:if(event.ctrlKey||event.metaKey){$.datepicker._adjustDate(event.target,(isRTL?+1:-1),"D");}
handled=event.ctrlKey||event.metaKey;if(event.originalEvent.altKey){$.datepicker._adjustDate(event.target,(event.ctrlKey?-$.datepicker._get(inst,"stepBigMonths"):-$.datepicker._get(inst,"stepMonths")),"M");}
break;case 38:if(event.ctrlKey||event.metaKey){$.datepicker._adjustDate(event.target,-7,"D");}
handled=event.ctrlKey||event.metaKey;break;case 39:if(event.ctrlKey||event.metaKey){$.datepicker._adjustDate(event.target,(isRTL?-1:+1),"D");}
handled=event.ctrlKey||event.metaKey;if(event.originalEvent.altKey){$.datepicker._adjustDate(event.target,(event.ctrlKey?+$.datepicker._get(inst,"stepBigMonths"):+$.datepicker._get(inst,"stepMonths")),"M");}
break;case 40:if(event.ctrlKey||event.metaKey){$.datepicker._adjustDate(event.target,+7,"D");}
handled=event.ctrlKey||event.metaKey;break;default:handled=false;}}else if(event.keyCode===36&&event.ctrlKey){$.datepicker._showDatepicker(this);}else{handled=false;}
if(handled){event.preventDefault();event.stopPropagation();}},_doKeyPress:function(event){var chars,chr,inst=$.datepicker._getInst(event.target);if($.datepicker._get(inst,"constrainInput")){chars=$.datepicker._possibleChars($.datepicker._get(inst,"dateFormat"));chr=String.fromCharCode(event.charCode==null?event.keyCode:event.charCode);return event.ctrlKey||event.metaKey||(chr<" "||!chars||chars.indexOf(chr)>-1);}},_doKeyUp:function(event){var date,inst=$.datepicker._getInst(event.target);if(inst.input.val()!==inst.lastVal){try{date=$.datepicker.parseDate($.datepicker._get(inst,"dateFormat"),(inst.input?inst.input.val():null),$.datepicker._getFormatConfig(inst));if(date){$.datepicker._setDateFromField(inst);$.datepicker._updateAlternate(inst);$.datepicker._updateDatepicker(inst);}}
catch(err){}}
return true;},_showDatepicker:function(input){input=input.target||input;if(input.nodeName.toLowerCase()!=="input"){input=$("input",input.parentNode)[0];}
if($.datepicker._isDisabledDatepicker(input)||$.datepicker._lastInput===input){return;}
var inst,beforeShow,beforeShowSettings,isFixed,offset,showAnim,duration;inst=$.datepicker._getInst(input);if($.datepicker._curInst&&$.datepicker._curInst!==inst){$.datepicker._curInst.dpDiv.stop(true,true);if(inst&&$.datepicker._datepickerShowing){$.datepicker._hideDatepicker($.datepicker._curInst.input[0]);}}
beforeShow=$.datepicker._get(inst,"beforeShow");beforeShowSettings=beforeShow?beforeShow.apply(input,[input,inst]):{};if(beforeShowSettings===false){return;}
extendRemove(inst.settings,beforeShowSettings);inst.lastVal=null;$.datepicker._lastInput=input;$.datepicker._setDateFromField(inst);if($.datepicker._inDialog){input.value="";}
if(!$.datepicker._pos){$.datepicker._pos=$.datepicker._findPos(input);$.datepicker._pos[1]+=input.offsetHeight;}
isFixed=false;$(input).parents().each(function(){isFixed|=$(this).css("position")==="fixed";return!isFixed;});offset={left:$.datepicker._pos[0],top:$.datepicker._pos[1]};$.datepicker._pos=null;inst.dpDiv.empty();inst.dpDiv.css({position:"absolute",display:"block",top:"-1000px"});$.datepicker._updateDatepicker(inst);offset=$.datepicker._checkOffset(inst,offset,isFixed);inst.dpDiv.css({position:($.datepicker._inDialog&&$.blockUI?"static":(isFixed?"fixed":"absolute")),display:"none",left:offset.left+"px",top:offset.top+"px"});if(!inst.inline){showAnim=$.datepicker._get(inst,"showAnim");duration=$.datepicker._get(inst,"duration");inst.dpDiv.zIndex($(input).zIndex()+1);$.datepicker._datepickerShowing=true;if($.effects&&$.effects.effect[showAnim]){inst.dpDiv.show(showAnim,$.datepicker._get(inst,"showOptions"),duration);}else{inst.dpDiv[showAnim||"show"](showAnim?duration:null);}
if($.datepicker._shouldFocusInput(inst)){inst.input.focus();}
$.datepicker._curInst=inst;}},_updateDatepicker:function(inst){this.maxRows=4;instActive=inst;inst.dpDiv.empty().append(this._generateHTML(inst));this._attachHandlers(inst);inst.dpDiv.find("."+this._dayOverClass+" a").mouseover();var origyearshtml,numMonths=this._getNumberOfMonths(inst),cols=numMonths[1],width=17;inst.dpDiv.removeClass("ui-datepicker-multi-2 ui-datepicker-multi-3 ui-datepicker-multi-4").width("");if(cols>1){inst.dpDiv.addClass("ui-datepicker-multi-"+cols).css("width",(width*cols)+"em");}
inst.dpDiv[(numMonths[0]!==1||numMonths[1]!==1?"add":"remove")+"Class"]("ui-datepicker-multi");inst.dpDiv[(this._get(inst,"isRTL")?"add":"remove")+"Class"]("ui-datepicker-rtl");if(inst===$.datepicker._curInst&&$.datepicker._datepickerShowing&&$.datepicker._shouldFocusInput(inst)){inst.input.focus();}
if(inst.yearshtml){origyearshtml=inst.yearshtml;setTimeout(function(){if(origyearshtml===inst.yearshtml&&inst.yearshtml){inst.dpDiv.find("select.ui-datepicker-year:first").replaceWith(inst.yearshtml);}
origyearshtml=inst.yearshtml=null;},0);}},_shouldFocusInput:function(inst){return inst.input&&inst.input.is(":visible")&&!inst.input.is(":disabled")&&!inst.input.is(":focus");},_checkOffset:function(inst,offset,isFixed){var dpWidth=inst.dpDiv.outerWidth(),dpHeight=inst.dpDiv.outerHeight(),inputWidth=inst.input?inst.input.outerWidth():0,inputHeight=inst.input?inst.input.outerHeight():0,viewWidth=document.documentElement.clientWidth+(isFixed?0:$(document).scrollLeft()),viewHeight=document.documentElement.clientHeight+(isFixed?0:$(document).scrollTop());offset.left-=(this._get(inst,"isRTL")?(dpWidth-inputWidth):0);offset.left-=(isFixed&&offset.left===inst.input.offset().left)?$(document).scrollLeft():0;offset.top-=(isFixed&&offset.top===(inst.input.offset().top+inputHeight))?$(document).scrollTop():0;offset.left-=Math.min(offset.left,(offset.left+dpWidth>viewWidth&&viewWidth>dpWidth)?Math.abs(offset.left+dpWidth-viewWidth):0);offset.top-=Math.min(offset.top,(offset.top+dpHeight>viewHeight&&viewHeight>dpHeight)?Math.abs(dpHeight+inputHeight):0);return offset;},_findPos:function(obj){var position,inst=this._getInst(obj),isRTL=this._get(inst,"isRTL");while(obj&&(obj.type==="hidden"||obj.nodeType!==1||$.expr.filters.hidden(obj))){obj=obj[isRTL?"previousSibling":"nextSibling"];}
position=$(obj).offset();return[position.left,position.top];},_hideDatepicker:function(input){var showAnim,duration,postProcess,onClose,inst=this._curInst;if(!inst||(input&&inst!==$.data(input,PROP_NAME))){return;}
if(this._datepickerShowing){showAnim=this._get(inst,"showAnim");duration=this._get(inst,"duration");postProcess=function(){$.datepicker._tidyDialog(inst);};if($.effects&&($.effects.effect[showAnim]||$.effects[showAnim])){inst.dpDiv.hide(showAnim,$.datepicker._get(inst,"showOptions"),duration,postProcess);}else{inst.dpDiv[(showAnim==="slideDown"?"slideUp":(showAnim==="fadeIn"?"fadeOut":"hide"))]((showAnim?duration:null),postProcess);}
if(!showAnim){postProcess();}
this._datepickerShowing=false;onClose=this._get(inst,"onClose");if(onClose){onClose.apply((inst.input?inst.input[0]:null),[(inst.input?inst.input.val():""),inst]);}
this._lastInput=null;if(this._inDialog){this._dialogInput.css({position:"absolute",left:"0",top:"-100px"});if($.blockUI){$.unblockUI();$("body").append(this.dpDiv);}}
this._inDialog=false;}},_tidyDialog:function(inst){inst.dpDiv.removeClass(this._dialogClass).unbind(".ui-datepicker-calendar");},_checkExternalClick:function(event){if(!$.datepicker._curInst){return;}
var $target=$(event.target),inst=$.datepicker._getInst($target[0]);if((($target[0].id!==$.datepicker._mainDivId&&$target.parents("#"+$.datepicker._mainDivId).length===0&&!$target.hasClass($.datepicker.markerClassName)&&!$target.closest("."+$.datepicker._triggerClass).length&&$.datepicker._datepickerShowing&&!($.datepicker._inDialog&&$.blockUI)))||($target.hasClass($.datepicker.markerClassName)&&$.datepicker._curInst!==inst)){$.datepicker._hideDatepicker();}},_adjustDate:function(id,offset,period){var target=$(id),inst=this._getInst(target[0]);if(this._isDisabledDatepicker(target[0])){return;}
this._adjustInstDate(inst,offset+
(period==="M"?this._get(inst,"showCurrentAtPos"):0),period);this._updateDatepicker(inst);},_gotoToday:function(id){var date,target=$(id),inst=this._getInst(target[0]);if(this._get(inst,"gotoCurrent")&&inst.currentDay){inst.selectedDay=inst.currentDay;inst.drawMonth=inst.selectedMonth=inst.currentMonth;inst.drawYear=inst.selectedYear=inst.currentYear;}else{date=new Date();inst.selectedDay=date.getDate();inst.drawMonth=inst.selectedMonth=date.getMonth();inst.drawYear=inst.selectedYear=date.getFullYear();}
this._notifyChange(inst);this._adjustDate(target);},_selectMonthYear:function(id,select,period){var target=$(id),inst=this._getInst(target[0]);inst["selected"+(period==="M"?"Month":"Year")]=inst["draw"+(period==="M"?"Month":"Year")]=parseInt(select.options[select.selectedIndex].value,10);this._notifyChange(inst);this._adjustDate(target);},_selectDay:function(id,month,year,td){var inst,target=$(id);if($(td).hasClass(this._unselectableClass)||this._isDisabledDatepicker(target[0])){return;}
inst=this._getInst(target[0]);inst.selectedDay=inst.currentDay=$("a",td).html();inst.selectedMonth=inst.currentMonth=month;inst.selectedYear=inst.currentYear=year;this._selectDate(id,this._formatDate(inst,inst.currentDay,inst.currentMonth,inst.currentYear));},_clearDate:function(id){var target=$(id);this._selectDate(target,"");},_selectDate:function(id,dateStr){var onSelect,target=$(id),inst=this._getInst(target[0]);dateStr=(dateStr!=null?dateStr:this._formatDate(inst));if(inst.input){inst.input.val(dateStr);}
this._updateAlternate(inst);onSelect=this._get(inst,"onSelect");if(onSelect){onSelect.apply((inst.input?inst.input[0]:null),[dateStr,inst]);}else if(inst.input){inst.input.trigger("change");}
if(inst.inline){this._updateDatepicker(inst);}else{this._hideDatepicker();this._lastInput=inst.input[0];if(typeof(inst.input[0])!=="object"){inst.input.focus();}
this._lastInput=null;}},_updateAlternate:function(inst){var altFormat,date,dateStr,altField=this._get(inst,"altField");if(altField){altFormat=this._get(inst,"altFormat")||this._get(inst,"dateFormat");date=this._getDate(inst);dateStr=this.formatDate(altFormat,date,this._getFormatConfig(inst));$(altField).each(function(){$(this).val(dateStr);});}},noWeekends:function(date){var day=date.getDay();return[(day>0&&day<6),""];},iso8601Week:function(date){var time,checkDate=new Date(date.getTime());checkDate.setDate(checkDate.getDate()+4-(checkDate.getDay()||7));time=checkDate.getTime();checkDate.setMonth(0);checkDate.setDate(1);return Math.floor(Math.round((time-checkDate)/86400000)/7)+1;},parseDate:function(format,value,settings){if(format==null||value==null){throw"Invalid arguments";}
value=(typeof value==="object"?value.toString():value+"");if(value===""){return null;}
var iFormat,dim,extra,iValue=0,shortYearCutoffTemp=(settings?settings.shortYearCutoff:null)||this._defaults.shortYearCutoff,shortYearCutoff=(typeof shortYearCutoffTemp!=="string"?shortYearCutoffTemp:new Date().getFullYear()%100+parseInt(shortYearCutoffTemp,10)),dayNamesShort=(settings?settings.dayNamesShort:null)||this._defaults.dayNamesShort,dayNames=(settings?settings.dayNames:null)||this._defaults.dayNames,monthNamesShort=(settings?settings.monthNamesShort:null)||this._defaults.monthNamesShort,monthNames=(settings?settings.monthNames:null)||this._defaults.monthNames,year=-1,month=-1,day=-1,doy=-1,literal=false,date,lookAhead=function(match){var matches=(iFormat+1<format.length&&format.charAt(iFormat+1)===match);if(matches){iFormat++;}
return matches;},getNumber=function(match){var isDoubled=lookAhead(match),size=(match==="@"?14:(match==="!"?20:(match==="y"&&isDoubled?4:(match==="o"?3:2)))),digits=new RegExp("^\\d{1,"+size+"}"),num=value.substring(iValue).match(digits);if(!num){throw"Missing number at position "+iValue;}
iValue+=num[0].length;return parseInt(num[0],10);},getName=function(match,shortNames,longNames){var index=-1,names=$.map(lookAhead(match)?longNames:shortNames,function(v,k){return[[k,v]];}).sort(function(a,b){return-(a[1].length-b[1].length);});$.each(names,function(i,pair){var name=pair[1];if(value.substr(iValue,name.length).toLowerCase()===name.toLowerCase()){index=pair[0];iValue+=name.length;return false;}});if(index!==-1){return index+1;}else{throw"Unknown name at position "+iValue;}},checkLiteral=function(){if(value.charAt(iValue)!==format.charAt(iFormat)){throw"Unexpected literal at position "+iValue;}
iValue++;};for(iFormat=0;iFormat<format.length;iFormat++){if(literal){if(format.charAt(iFormat)==="'"&&!lookAhead("'")){literal=false;}else{checkLiteral();}}else{switch(format.charAt(iFormat)){case"d":day=getNumber("d");break;case"D":getName("D",dayNamesShort,dayNames);break;case"o":doy=getNumber("o");break;case"m":month=getNumber("m");break;case"M":month=getName("M",monthNamesShort,monthNames);break;case"y":year=getNumber("y");break;case"@":date=new Date(getNumber("@"));year=date.getFullYear();month=date.getMonth()+1;day=date.getDate();break;case"!":date=new Date((getNumber("!")-this._ticksTo1970)/10000);year=date.getFullYear();month=date.getMonth()+1;day=date.getDate();break;case"'":if(lookAhead("'")){checkLiteral();}else{literal=true;}
break;default:checkLiteral();}}}
if(iValue<value.length){extra=value.substr(iValue);if(!/^\s+/.test(extra)){throw"Extra/unparsed characters found in date: "+extra;}}
if(year===-1){year=new Date().getFullYear();}else if(year<100){year+=new Date().getFullYear()-new Date().getFullYear()%100+
(year<=shortYearCutoff?0:-100);}
if(doy>-1){month=1;day=doy;do{dim=this._getDaysInMonth(year,month-1);if(day<=dim){break;}
month++;day-=dim;}while(true);}
date=this._daylightSavingAdjust(new Date(year,month-1,day));if(date.getFullYear()!==year||date.getMonth()+1!==month||date.getDate()!==day){throw"Invalid date";}
return date;},ATOM:"yy-mm-dd",COOKIE:"D, dd M yy",ISO_8601:"yy-mm-dd",RFC_822:"D, d M y",RFC_850:"DD, dd-M-y",RFC_1036:"D, d M y",RFC_1123:"D, d M yy",RFC_2822:"D, d M yy",RSS:"D, d M y",TICKS:"!",TIMESTAMP:"@",W3C:"yy-mm-dd",_ticksTo1970:(((1970-1)*365+Math.floor(1970/4)-Math.floor(1970/100)+
Math.floor(1970/400))*24*60*60*10000000),formatDate:function(format,date,settings){if(!date){return"";}
var iFormat,dayNamesShort=(settings?settings.dayNamesShort:null)||this._defaults.dayNamesShort,dayNames=(settings?settings.dayNames:null)||this._defaults.dayNames,monthNamesShort=(settings?settings.monthNamesShort:null)||this._defaults.monthNamesShort,monthNames=(settings?settings.monthNames:null)||this._defaults.monthNames,lookAhead=function(match){var matches=(iFormat+1<format.length&&format.charAt(iFormat+1)===match);if(matches){iFormat++;}
return matches;},formatNumber=function(match,value,len){var num=""+value;if(lookAhead(match)){while(num.length<len){num="0"+num;}}
return num;},formatName=function(match,value,shortNames,longNames){return(lookAhead(match)?longNames[value]:shortNames[value]);},output="",literal=false;if(date){for(iFormat=0;iFormat<format.length;iFormat++){if(literal){if(format.charAt(iFormat)==="'"&&!lookAhead("'")){literal=false;}else{output+=format.charAt(iFormat);}}else{switch(format.charAt(iFormat)){case"d":output+=formatNumber("d",date.getDate(),2);break;case"D":output+=formatName("D",date.getDay(),dayNamesShort,dayNames);break;case"o":output+=formatNumber("o",Math.round((new Date(date.getFullYear(),date.getMonth(),date.getDate()).getTime()-new Date(date.getFullYear(),0,0).getTime())/86400000),3);break;case"m":output+=formatNumber("m",date.getMonth()+1,2);break;case"M":output+=formatName("M",date.getMonth(),monthNamesShort,monthNames);break;case"y":output+=(lookAhead("y")?date.getFullYear():(date.getYear()%100<10?"0":"")+date.getYear()%100);break;case"@":output+=date.getTime();break;case"!":output+=date.getTime()*10000+this._ticksTo1970;break;case"'":if(lookAhead("'")){output+="'";}else{literal=true;}
break;default:output+=format.charAt(iFormat);}}}}
return output;},_possibleChars:function(format){var iFormat,chars="",literal=false,lookAhead=function(match){var matches=(iFormat+1<format.length&&format.charAt(iFormat+1)===match);if(matches){iFormat++;}
return matches;};for(iFormat=0;iFormat<format.length;iFormat++){if(literal){if(format.charAt(iFormat)==="'"&&!lookAhead("'")){literal=false;}else{chars+=format.charAt(iFormat);}}else{switch(format.charAt(iFormat)){case"d":case"m":case"y":case"@":chars+="0123456789";break;case"D":case"M":return null;case"'":if(lookAhead("'")){chars+="'";}else{literal=true;}
break;default:chars+=format.charAt(iFormat);}}}
return chars;},_get:function(inst,name){return inst.settings[name]!==undefined?inst.settings[name]:this._defaults[name];},_setDateFromField:function(inst,noDefault){if(inst.input.val()===inst.lastVal){return;}
var dateFormat=this._get(inst,"dateFormat"),dates=inst.lastVal=inst.input?inst.input.val():null,defaultDate=this._getDefaultDate(inst),date=defaultDate,settings=this._getFormatConfig(inst);try{date=this.parseDate(dateFormat,dates,settings)||defaultDate;}catch(event){dates=(noDefault?"":dates);}
inst.selectedDay=date.getDate();inst.drawMonth=inst.selectedMonth=date.getMonth();inst.drawYear=inst.selectedYear=date.getFullYear();inst.currentDay=(dates?date.getDate():0);inst.currentMonth=(dates?date.getMonth():0);inst.currentYear=(dates?date.getFullYear():0);this._adjustInstDate(inst);},_getDefaultDate:function(inst){return this._restrictMinMax(inst,this._determineDate(inst,this._get(inst,"defaultDate"),new Date()));},_determineDate:function(inst,date,defaultDate){var offsetNumeric=function(offset){var date=new Date();date.setDate(date.getDate()+offset);return date;},offsetString=function(offset){try{return $.datepicker.parseDate($.datepicker._get(inst,"dateFormat"),offset,$.datepicker._getFormatConfig(inst));}
catch(e){}
var date=(offset.toLowerCase().match(/^c/)?$.datepicker._getDate(inst):null)||new Date(),year=date.getFullYear(),month=date.getMonth(),day=date.getDate(),pattern=/([+\-]?[0-9]+)\s*(d|D|w|W|m|M|y|Y)?/g,matches=pattern.exec(offset);while(matches){switch(matches[2]||"d"){case"d":case"D":day+=parseInt(matches[1],10);break;case"w":case"W":day+=parseInt(matches[1],10)*7;break;case"m":case"M":month+=parseInt(matches[1],10);day=Math.min(day,$.datepicker._getDaysInMonth(year,month));break;case"y":case"Y":year+=parseInt(matches[1],10);day=Math.min(day,$.datepicker._getDaysInMonth(year,month));break;}
matches=pattern.exec(offset);}
return new Date(year,month,day);},newDate=(date==null||date===""?defaultDate:(typeof date==="string"?offsetString(date):(typeof date==="number"?(isNaN(date)?defaultDate:offsetNumeric(date)):new Date(date.getTime()))));newDate=(newDate&&newDate.toString()==="Invalid Date"?defaultDate:newDate);if(newDate){newDate.setHours(0);newDate.setMinutes(0);newDate.setSeconds(0);newDate.setMilliseconds(0);}
return this._daylightSavingAdjust(newDate);},_daylightSavingAdjust:function(date){if(!date){return null;}
date.setHours(date.getHours()>12?date.getHours()+2:0);return date;},_setDate:function(inst,date,noChange){var clear=!date,origMonth=inst.selectedMonth,origYear=inst.selectedYear,newDate=this._restrictMinMax(inst,this._determineDate(inst,date,new Date()));inst.selectedDay=inst.currentDay=newDate.getDate();inst.drawMonth=inst.selectedMonth=inst.currentMonth=newDate.getMonth();inst.drawYear=inst.selectedYear=inst.currentYear=newDate.getFullYear();if((origMonth!==inst.selectedMonth||origYear!==inst.selectedYear)&&!noChange){this._notifyChange(inst);}
this._adjustInstDate(inst);if(inst.input){inst.input.val(clear?"":this._formatDate(inst));}},_getDate:function(inst){var startDate=(!inst.currentYear||(inst.input&&inst.input.val()==="")?null:this._daylightSavingAdjust(new Date(inst.currentYear,inst.currentMonth,inst.currentDay)));return startDate;},_attachHandlers:function(inst){var stepMonths=this._get(inst,"stepMonths"),id="#"+inst.id.replace(/\\\\/g,"\\");inst.dpDiv.find("[data-handler]").map(function(){var handler={prev:function(){$.datepicker._adjustDate(id,-stepMonths,"M");},next:function(){$.datepicker._adjustDate(id,+stepMonths,"M");},hide:function(){$.datepicker._hideDatepicker();},today:function(){$.datepicker._gotoToday(id);},selectDay:function(){$.datepicker._selectDay(id,+this.getAttribute("data-month"),+this.getAttribute("data-year"),this);return false;},selectMonth:function(){$.datepicker._selectMonthYear(id,this,"M");return false;},selectYear:function(){$.datepicker._selectMonthYear(id,this,"Y");return false;}};$(this).bind(this.getAttribute("data-event"),handler[this.getAttribute("data-handler")]);});},_generateHTML:function(inst){var maxDraw,prevText,prev,nextText,next,currentText,gotoDate,controls,buttonPanel,firstDay,showWeek,dayNames,dayNamesMin,monthNames,monthNamesShort,beforeShowDay,showOtherMonths,selectOtherMonths,defaultDate,html,dow,row,group,col,selectedDate,cornerClass,calender,thead,day,daysInMonth,leadDays,curRows,numRows,printDate,dRow,tbody,daySettings,otherMonth,unselectable,tempDate=new Date(),today=this._daylightSavingAdjust(new Date(tempDate.getFullYear(),tempDate.getMonth(),tempDate.getDate())),isRTL=this._get(inst,"isRTL"),showButtonPanel=this._get(inst,"showButtonPanel"),hideIfNoPrevNext=this._get(inst,"hideIfNoPrevNext"),navigationAsDateFormat=this._get(inst,"navigationAsDateFormat"),numMonths=this._getNumberOfMonths(inst),showCurrentAtPos=this._get(inst,"showCurrentAtPos"),stepMonths=this._get(inst,"stepMonths"),isMultiMonth=(numMonths[0]!==1||numMonths[1]!==1),currentDate=this._daylightSavingAdjust((!inst.currentDay?new Date(9999,9,9):new Date(inst.currentYear,inst.currentMonth,inst.currentDay))),minDate=this._getMinMaxDate(inst,"min"),maxDate=this._getMinMaxDate(inst,"max"),drawMonth=inst.drawMonth-showCurrentAtPos,drawYear=inst.drawYear;if(drawMonth<0){drawMonth+=12;drawYear--;}
if(maxDate){maxDraw=this._daylightSavingAdjust(new Date(maxDate.getFullYear(),maxDate.getMonth()-(numMonths[0]*numMonths[1])+1,maxDate.getDate()));maxDraw=(minDate&&maxDraw<minDate?minDate:maxDraw);while(this._daylightSavingAdjust(new Date(drawYear,drawMonth,1))>maxDraw){drawMonth--;if(drawMonth<0){drawMonth=11;drawYear--;}}}
inst.drawMonth=drawMonth;inst.drawYear=drawYear;prevText=this._get(inst,"prevText");prevText=(!navigationAsDateFormat?prevText:this.formatDate(prevText,this._daylightSavingAdjust(new Date(drawYear,drawMonth-stepMonths,1)),this._getFormatConfig(inst)));prev=(this._canAdjustMonth(inst,-1,drawYear,drawMonth)?"<a class='ui-datepicker-prev ui-corner-all' data-handler='prev' data-event='click'"+" title='"+prevText+"'><span class='ui-icon ui-icon-circle-triangle-"+(isRTL?"e":"w")+"'>"+prevText+"</span></a>":(hideIfNoPrevNext?"":"<a class='ui-datepicker-prev ui-corner-all ui-state-disabled' title='"+prevText+"'><span class='ui-icon ui-icon-circle-triangle-"+(isRTL?"e":"w")+"'>"+prevText+"</span></a>"));nextText=this._get(inst,"nextText");nextText=(!navigationAsDateFormat?nextText:this.formatDate(nextText,this._daylightSavingAdjust(new Date(drawYear,drawMonth+stepMonths,1)),this._getFormatConfig(inst)));next=(this._canAdjustMonth(inst,+1,drawYear,drawMonth)?"<a class='ui-datepicker-next ui-corner-all' data-handler='next' data-event='click'"+" title='"+nextText+"'><span class='ui-icon ui-icon-circle-triangle-"+(isRTL?"w":"e")+"'>"+nextText+"</span></a>":(hideIfNoPrevNext?"":"<a class='ui-datepicker-next ui-corner-all ui-state-disabled' title='"+nextText+"'><span class='ui-icon ui-icon-circle-triangle-"+(isRTL?"w":"e")+"'>"+nextText+"</span></a>"));currentText=this._get(inst,"currentText");gotoDate=(this._get(inst,"gotoCurrent")&&inst.currentDay?currentDate:today);currentText=(!navigationAsDateFormat?currentText:this.formatDate(currentText,gotoDate,this._getFormatConfig(inst)));controls=(!inst.inline?"<button type='button' class='ui-datepicker-close ui-state-default ui-priority-primary ui-corner-all' data-handler='hide' data-event='click'>"+
this._get(inst,"closeText")+"</button>":"");buttonPanel=(showButtonPanel)?"<div class='ui-datepicker-buttonpane ui-widget-content'>"+(isRTL?controls:"")+
(this._isInRange(inst,gotoDate)?"<button type='button' class='ui-datepicker-current ui-state-default ui-priority-secondary ui-corner-all' data-handler='today' data-event='click'"+">"+currentText+"</button>":"")+(isRTL?"":controls)+"</div>":"";firstDay=parseInt(this._get(inst,"firstDay"),10);firstDay=(isNaN(firstDay)?0:firstDay);showWeek=this._get(inst,"showWeek");dayNames=this._get(inst,"dayNames");dayNamesMin=this._get(inst,"dayNamesMin");monthNames=this._get(inst,"monthNames");monthNamesShort=this._get(inst,"monthNamesShort");beforeShowDay=this._get(inst,"beforeShowDay");showOtherMonths=this._get(inst,"showOtherMonths");selectOtherMonths=this._get(inst,"selectOtherMonths");defaultDate=this._getDefaultDate(inst);html="";dow;for(row=0;row<numMonths[0];row++){group="";this.maxRows=4;for(col=0;col<numMonths[1];col++){selectedDate=this._daylightSavingAdjust(new Date(drawYear,drawMonth,inst.selectedDay));cornerClass=" ui-corner-all";calender="";if(isMultiMonth){calender+="<div class='ui-datepicker-group";if(numMonths[1]>1){switch(col){case 0:calender+=" ui-datepicker-group-first";cornerClass=" ui-corner-"+(isRTL?"right":"left");break;case numMonths[1]-1:calender+=" ui-datepicker-group-last";cornerClass=" ui-corner-"+(isRTL?"left":"right");break;default:calender+=" ui-datepicker-group-middle";cornerClass="";break;}}
calender+="'>";}
calender+="<div class='ui-datepicker-header ui-widget-header ui-helper-clearfix"+cornerClass+"'>"+
(/all|left/.test(cornerClass)&&row===0?(isRTL?next:prev):"")+
(/all|right/.test(cornerClass)&&row===0?(isRTL?prev:next):"")+
this._generateMonthYearHeader(inst,drawMonth,drawYear,minDate,maxDate,row>0||col>0,monthNames,monthNamesShort)+"</div><table class='ui-datepicker-calendar'><thead>"+"<tr>";thead=(showWeek?"<th class='ui-datepicker-week-col'>"+this._get(inst,"weekHeader")+"</th>":"");for(dow=0;dow<7;dow++){day=(dow+firstDay)%7;thead+="<th"+((dow+firstDay+6)%7>=5?" class='ui-datepicker-week-end'":"")+">"+"<span title='"+dayNames[day]+"'>"+dayNamesMin[day]+"</span></th>";}
calender+=thead+"</tr></thead><tbody>";daysInMonth=this._getDaysInMonth(drawYear,drawMonth);if(drawYear===inst.selectedYear&&drawMonth===inst.selectedMonth){inst.selectedDay=Math.min(inst.selectedDay,daysInMonth);}
leadDays=(this._getFirstDayOfMonth(drawYear,drawMonth)-firstDay+7)%7;curRows=Math.ceil((leadDays+daysInMonth)/7);numRows=(isMultiMonth?this.maxRows>curRows?this.maxRows:curRows:curRows);this.maxRows=numRows;printDate=this._daylightSavingAdjust(new Date(drawYear,drawMonth,1-leadDays));for(dRow=0;dRow<numRows;dRow++){calender+="<tr>";tbody=(!showWeek?"":"<td class='ui-datepicker-week-col'>"+
this._get(inst,"calculateWeek")(printDate)+"</td>");for(dow=0;dow<7;dow++){daySettings=(beforeShowDay?beforeShowDay.apply((inst.input?inst.input[0]:null),[printDate]):[true,""]);otherMonth=(printDate.getMonth()!==drawMonth);unselectable=(otherMonth&&!selectOtherMonths)||!daySettings[0]||(minDate&&printDate<minDate)||(maxDate&&printDate>maxDate);tbody+="<td class='"+
((dow+firstDay+6)%7>=5?" ui-datepicker-week-end":"")+
(otherMonth?" ui-datepicker-other-month":"")+
((printDate.getTime()===selectedDate.getTime()&&drawMonth===inst.selectedMonth&&inst._keyEvent)||(defaultDate.getTime()===printDate.getTime()&&defaultDate.getTime()===selectedDate.getTime())?" "+this._dayOverClass:"")+
(unselectable?" "+this._unselectableClass+" ui-state-disabled":"")+
(otherMonth&&!showOtherMonths?"":" "+daySettings[1]+
(printDate.getTime()===currentDate.getTime()?" "+this._currentClass:"")+
(printDate.getTime()===today.getTime()?" ui-datepicker-today":""))+"'"+
((!otherMonth||showOtherMonths)&&daySettings[2]?" title='"+daySettings[2].replace(/'/g,"&#39;")+"'":"")+
(unselectable?"":" data-handler='selectDay' data-event='click' data-month='"+printDate.getMonth()+"' data-year='"+printDate.getFullYear()+"'")+">"+
(otherMonth&&!showOtherMonths?"&#xa0;":(unselectable?"<span class='ui-state-default'>"+printDate.getDate()+"</span>":"<a class='ui-state-default"+
(printDate.getTime()===today.getTime()?" ui-state-highlight":"")+
(printDate.getTime()===currentDate.getTime()?" ui-state-active":"")+
(otherMonth?" ui-priority-secondary":"")+"' href='#'>"+printDate.getDate()+"</a>"))+"</td>";printDate.setDate(printDate.getDate()+1);printDate=this._daylightSavingAdjust(printDate);}
calender+=tbody+"</tr>";}
drawMonth++;if(drawMonth>11){drawMonth=0;drawYear++;}
calender+="</tbody></table>"+(isMultiMonth?"</div>"+
((numMonths[0]>0&&col===numMonths[1]-1)?"<div class='ui-datepicker-row-break'></div>":""):"");group+=calender;}
html+=group;}
html+=buttonPanel;inst._keyEvent=false;return html;},_generateMonthYearHeader:function(inst,drawMonth,drawYear,minDate,maxDate,secondary,monthNames,monthNamesShort){var inMinYear,inMaxYear,month,years,thisYear,determineYear,year,endYear,changeMonth=this._get(inst,"changeMonth"),changeYear=this._get(inst,"changeYear"),showMonthAfterYear=this._get(inst,"showMonthAfterYear"),html="<div class='ui-datepicker-title'>",monthHtml="";if(secondary||!changeMonth){monthHtml+="<span class='ui-datepicker-month'>"+monthNames[drawMonth]+"</span>";}else{inMinYear=(minDate&&minDate.getFullYear()===drawYear);inMaxYear=(maxDate&&maxDate.getFullYear()===drawYear);monthHtml+="<select class='ui-datepicker-month' data-handler='selectMonth' data-event='change'>";for(month=0;month<12;month++){if((!inMinYear||month>=minDate.getMonth())&&(!inMaxYear||month<=maxDate.getMonth())){monthHtml+="<option value='"+month+"'"+
(month===drawMonth?" selected='selected'":"")+">"+monthNamesShort[month]+"</option>";}}
monthHtml+="</select>";}
if(!showMonthAfterYear){html+=monthHtml+(secondary||!(changeMonth&&changeYear)?"&#xa0;":"");}
if(!inst.yearshtml){inst.yearshtml="";if(secondary||!changeYear){html+="<span class='ui-datepicker-year'>"+drawYear+"</span>";}else{years=this._get(inst,"yearRange").split(":");thisYear=new Date().getFullYear();determineYear=function(value){var year=(value.match(/c[+\-].*/)?drawYear+parseInt(value.substring(1),10):(value.match(/[+\-].*/)?thisYear+parseInt(value,10):parseInt(value,10)));return(isNaN(year)?thisYear:year);};year=determineYear(years[0]);endYear=Math.max(year,determineYear(years[1]||""));year=(minDate?Math.max(year,minDate.getFullYear()):year);endYear=(maxDate?Math.min(endYear,maxDate.getFullYear()):endYear);inst.yearshtml+="<select class='ui-datepicker-year' data-handler='selectYear' data-event='change'>";for(;year<=endYear;year++){inst.yearshtml+="<option value='"+year+"'"+
(year===drawYear?" selected='selected'":"")+">"+year+"</option>";}
inst.yearshtml+="</select>";html+=inst.yearshtml;inst.yearshtml=null;}}
html+=this._get(inst,"yearSuffix");if(showMonthAfterYear){html+=(secondary||!(changeMonth&&changeYear)?"&#xa0;":"")+monthHtml;}
html+="</div>";return html;},_adjustInstDate:function(inst,offset,period){var year=inst.drawYear+(period==="Y"?offset:0),month=inst.drawMonth+(period==="M"?offset:0),day=Math.min(inst.selectedDay,this._getDaysInMonth(year,month))+(period==="D"?offset:0),date=this._restrictMinMax(inst,this._daylightSavingAdjust(new Date(year,month,day)));inst.selectedDay=date.getDate();inst.drawMonth=inst.selectedMonth=date.getMonth();inst.drawYear=inst.selectedYear=date.getFullYear();if(period==="M"||period==="Y"){this._notifyChange(inst);}},_restrictMinMax:function(inst,date){var minDate=this._getMinMaxDate(inst,"min"),maxDate=this._getMinMaxDate(inst,"max"),newDate=(minDate&&date<minDate?minDate:date);return(maxDate&&newDate>maxDate?maxDate:newDate);},_notifyChange:function(inst){var onChange=this._get(inst,"onChangeMonthYear");if(onChange){onChange.apply((inst.input?inst.input[0]:null),[inst.selectedYear,inst.selectedMonth+1,inst]);}},_getNumberOfMonths:function(inst){var numMonths=this._get(inst,"numberOfMonths");return(numMonths==null?[1,1]:(typeof numMonths==="number"?[1,numMonths]:numMonths));},_getMinMaxDate:function(inst,minMax){return this._determineDate(inst,this._get(inst,minMax+"Date"),null);},_getDaysInMonth:function(year,month){return 32-this._daylightSavingAdjust(new Date(year,month,32)).getDate();},_getFirstDayOfMonth:function(year,month){return new Date(year,month,1).getDay();},_canAdjustMonth:function(inst,offset,curYear,curMonth){var numMonths=this._getNumberOfMonths(inst),date=this._daylightSavingAdjust(new Date(curYear,curMonth+(offset<0?offset:numMonths[0]*numMonths[1]),1));if(offset<0){date.setDate(this._getDaysInMonth(date.getFullYear(),date.getMonth()));}
return this._isInRange(inst,date);},_isInRange:function(inst,date){var yearSplit,currentYear,minDate=this._getMinMaxDate(inst,"min"),maxDate=this._getMinMaxDate(inst,"max"),minYear=null,maxYear=null,years=this._get(inst,"yearRange");if(years){yearSplit=years.split(":");currentYear=new Date().getFullYear();minYear=parseInt(yearSplit[0],10);maxYear=parseInt(yearSplit[1],10);if(yearSplit[0].match(/[+\-].*/)){minYear+=currentYear;}
if(yearSplit[1].match(/[+\-].*/)){maxYear+=currentYear;}}
return((!minDate||date.getTime()>=minDate.getTime())&&(!maxDate||date.getTime()<=maxDate.getTime())&&(!minYear||date.getFullYear()>=minYear)&&(!maxYear||date.getFullYear()<=maxYear));},_getFormatConfig:function(inst){var shortYearCutoff=this._get(inst,"shortYearCutoff");shortYearCutoff=(typeof shortYearCutoff!=="string"?shortYearCutoff:new Date().getFullYear()%100+parseInt(shortYearCutoff,10));return{shortYearCutoff:shortYearCutoff,dayNamesShort:this._get(inst,"dayNamesShort"),dayNames:this._get(inst,"dayNames"),monthNamesShort:this._get(inst,"monthNamesShort"),monthNames:this._get(inst,"monthNames")};},_formatDate:function(inst,day,month,year){if(!day){inst.currentDay=inst.selectedDay;inst.currentMonth=inst.selectedMonth;inst.currentYear=inst.selectedYear;}
var date=(day?(typeof day==="object"?day:this._daylightSavingAdjust(new Date(year,month,day))):this._daylightSavingAdjust(new Date(inst.currentYear,inst.currentMonth,inst.currentDay)));return this.formatDate(this._get(inst,"dateFormat"),date,this._getFormatConfig(inst));}});function bindHover(dpDiv){var selector="button, .ui-datepicker-prev, .ui-datepicker-next, .ui-datepicker-calendar td a";return dpDiv.delegate(selector,"mouseout",function(){$(this).removeClass("ui-state-hover");if(this.className.indexOf("ui-datepicker-prev")!==-1){$(this).removeClass("ui-datepicker-prev-hover");}
if(this.className.indexOf("ui-datepicker-next")!==-1){$(this).removeClass("ui-datepicker-next-hover");}}).delegate(selector,"mouseover",function(){if(!$.datepicker._isDisabledDatepicker(instActive.inline?dpDiv.parent()[0]:instActive.input[0])){$(this).parents(".ui-datepicker-calendar").find("a").removeClass("ui-state-hover");$(this).addClass("ui-state-hover");if(this.className.indexOf("ui-datepicker-prev")!==-1){$(this).addClass("ui-datepicker-prev-hover");}
if(this.className.indexOf("ui-datepicker-next")!==-1){$(this).addClass("ui-datepicker-next-hover");}}});}
function extendRemove(target,props){$.extend(target,props);for(var name in props){if(props[name]==null){target[name]=props[name];}}
return target;}
$.fn.datepicker=function(options){if(!this.length){return this;}
if(!$.datepicker.initialized){$(document).mousedown($.datepicker._checkExternalClick);$.datepicker.initialized=true;}
if($("#"+$.datepicker._mainDivId).length===0){$("body").append($.datepicker.dpDiv);}
var otherArgs=Array.prototype.slice.call(arguments,1);if(typeof options==="string"&&(options==="isDisabled"||options==="getDate"||options==="widget")){return $.datepicker["_"+options+"Datepicker"].apply($.datepicker,[this[0]].concat(otherArgs));}
if(options==="option"&&arguments.length===2&&typeof arguments[1]==="string"){return $.datepicker["_"+options+"Datepicker"].apply($.datepicker,[this[0]].concat(otherArgs));}
return this.each(function(){typeof options==="string"?$.datepicker["_"+options+"Datepicker"].apply($.datepicker,[this].concat(otherArgs)):$.datepicker._attachDatepicker(this,options);});};$.datepicker=new Datepicker();$.datepicker.initialized=false;$.datepicker.uuid=new Date().getTime();$.datepicker.version="1.10.4";})(jQuery);(function($,undefined){var sizeRelatedOptions={buttons:true,height:true,maxHeight:true,maxWidth:true,minHeight:true,minWidth:true,width:true},resizableRelatedOptions={maxHeight:true,maxWidth:true,minHeight:true,minWidth:true};$.widget("ui.dialog",{version:"1.10.4",options:{appendTo:"body",autoOpen:true,buttons:[],closeOnEscape:true,closeText:"close",dialogClass:"",draggable:true,hide:null,height:"auto",maxHeight:null,maxWidth:null,minHeight:150,minWidth:150,modal:false,position:{my:"center",at:"center",of:window,collision:"fit",using:function(pos){var topOffset=$(this).css(pos).offset().top;if(topOffset<0){$(this).css("top",pos.top-topOffset);}}},resizable:true,show:null,title:null,width:300,beforeClose:null,close:null,drag:null,dragStart:null,dragStop:null,focus:null,open:null,resize:null,resizeStart:null,resizeStop:null},_create:function(){this.originalCss={display:this.element[0].style.display,width:this.element[0].style.width,minHeight:this.element[0].style.minHeight,maxHeight:this.element[0].style.maxHeight,height:this.element[0].style.height};this.originalPosition={parent:this.element.parent(),index:this.element.parent().children().index(this.element)};this.originalTitle=this.element.attr("title");this.options.title=this.options.title||this.originalTitle;this._createWrapper();this.element.show().removeAttr("title").addClass("ui-dialog-content ui-widget-content").appendTo(this.uiDialog);this._createTitlebar();this._createButtonPane();if(this.options.draggable&&$.fn.draggable){this._makeDraggable();}
if(this.options.resizable&&$.fn.resizable){this._makeResizable();}
this._isOpen=false;},_init:function(){if(this.options.autoOpen){this.open();}},_appendTo:function(){var element=this.options.appendTo;if(element&&(element.jquery||element.nodeType)){return $(element);}
return this.document.find(element||"body").eq(0);},_destroy:function(){var next,originalPosition=this.originalPosition;this._destroyOverlay();this.element.removeUniqueId().removeClass("ui-dialog-content ui-widget-content").css(this.originalCss).detach();this.uiDialog.stop(true,true).remove();if(this.originalTitle){this.element.attr("title",this.originalTitle);}
next=originalPosition.parent.children().eq(originalPosition.index);if(next.length&&next[0]!==this.element[0]){next.before(this.element);}else{originalPosition.parent.append(this.element);}},widget:function(){return this.uiDialog;},disable:$.noop,enable:$.noop,close:function(event){var activeElement,that=this;if(!this._isOpen||this._trigger("beforeClose",event)===false){return;}
this._isOpen=false;this._destroyOverlay();if(!this.opener.filter(":focusable").focus().length){try{activeElement=this.document[0].activeElement;if(activeElement&&activeElement.nodeName.toLowerCase()!=="body"){$(activeElement).blur();}}catch(error){}}
this._hide(this.uiDialog,this.options.hide,function(){that._trigger("close",event);});},isOpen:function(){return this._isOpen;},moveToTop:function(){this._moveToTop();},_moveToTop:function(event,silent){var moved=!!this.uiDialog.nextAll(":visible").insertBefore(this.uiDialog).length;if(moved&&!silent){this._trigger("focus",event);}
return moved;},open:function(){var that=this;if(this._isOpen){if(this._moveToTop()){this._focusTabbable();}
return;}
this._isOpen=true;this.opener=$(this.document[0].activeElement);this._size();this._position();this._createOverlay();this._moveToTop(null,true);this._show(this.uiDialog,this.options.show,function(){that._focusTabbable();that._trigger("focus");});this._trigger("open");},_focusTabbable:function(){var hasFocus=this.element.find("[autofocus]");if(!hasFocus.length){hasFocus=this.element.find(":tabbable");}
if(!hasFocus.length){hasFocus=this.uiDialogButtonPane.find(":tabbable");}
if(!hasFocus.length){hasFocus=this.uiDialogTitlebarClose.filter(":tabbable");}
if(!hasFocus.length){hasFocus=this.uiDialog;}
hasFocus.eq(0).focus();},_keepFocus:function(event){function checkFocus(){var activeElement=this.document[0].activeElement,isActive=this.uiDialog[0]===activeElement||$.contains(this.uiDialog[0],activeElement);if(!isActive){this._focusTabbable();}}
event.preventDefault();checkFocus.call(this);this._delay(checkFocus);},_createWrapper:function(){this.uiDialog=$("<div>").addClass("ui-dialog ui-widget ui-widget-content ui-corner-all ui-front "+
this.options.dialogClass).hide().attr({tabIndex:-1,role:"dialog"}).appendTo(this._appendTo());this._on(this.uiDialog,{keydown:function(event){if(this.options.closeOnEscape&&!event.isDefaultPrevented()&&event.keyCode&&event.keyCode===$.ui.keyCode.ESCAPE){event.preventDefault();this.close(event);return;}
if(event.keyCode!==$.ui.keyCode.TAB){return;}
var tabbables=this.uiDialog.find(":tabbable"),first=tabbables.filter(":first"),last=tabbables.filter(":last");if((event.target===last[0]||event.target===this.uiDialog[0])&&!event.shiftKey){first.focus(1);event.preventDefault();}else if((event.target===first[0]||event.target===this.uiDialog[0])&&event.shiftKey){last.focus(1);event.preventDefault();}},mousedown:function(event){if(this._moveToTop(event)){this._focusTabbable();}}});if(!this.element.find("[aria-describedby]").length){this.uiDialog.attr({"aria-describedby":this.element.uniqueId().attr("id")});}},_createTitlebar:function(){var uiDialogTitle;this.uiDialogTitlebar=$("<div>").addClass("ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix").prependTo(this.uiDialog);this._on(this.uiDialogTitlebar,{mousedown:function(event){if(!$(event.target).closest(".ui-dialog-titlebar-close")){this.uiDialog.focus();}}});this.uiDialogTitlebarClose=$("<button type='button'></button>").button({label:this.options.closeText,icons:{primary:"ui-icon-closethick"},text:false}).addClass("ui-dialog-titlebar-close").appendTo(this.uiDialogTitlebar);this._on(this.uiDialogTitlebarClose,{click:function(event){event.preventDefault();this.close(event);}});uiDialogTitle=$("<span>").uniqueId().addClass("ui-dialog-title").prependTo(this.uiDialogTitlebar);this._title(uiDialogTitle);this.uiDialog.attr({"aria-labelledby":uiDialogTitle.attr("id")});},_title:function(title){if(!this.options.title){title.html("&#160;");}
title.text(this.options.title);},_createButtonPane:function(){this.uiDialogButtonPane=$("<div>").addClass("ui-dialog-buttonpane ui-widget-content ui-helper-clearfix");this.uiButtonSet=$("<div>").addClass("ui-dialog-buttonset").appendTo(this.uiDialogButtonPane);this._createButtons();},_createButtons:function(){var that=this,buttons=this.options.buttons;this.uiDialogButtonPane.remove();this.uiButtonSet.empty();if($.isEmptyObject(buttons)||($.isArray(buttons)&&!buttons.length)){this.uiDialog.removeClass("ui-dialog-buttons");return;}
$.each(buttons,function(name,props){var click,buttonOptions;props=$.isFunction(props)?{click:props,text:name}:props;props=$.extend({type:"button"},props);click=props.click;props.click=function(){click.apply(that.element[0],arguments);};buttonOptions={icons:props.icons,text:props.showText};delete props.icons;delete props.showText;$("<button></button>",props).button(buttonOptions).appendTo(that.uiButtonSet);});this.uiDialog.addClass("ui-dialog-buttons");this.uiDialogButtonPane.appendTo(this.uiDialog);},_makeDraggable:function(){var that=this,options=this.options;function filteredUi(ui){return{position:ui.position,offset:ui.offset};}
this.uiDialog.draggable({cancel:".ui-dialog-content, .ui-dialog-titlebar-close",handle:".ui-dialog-titlebar",containment:"document",start:function(event,ui){$(this).addClass("ui-dialog-dragging");that._blockFrames();that._trigger("dragStart",event,filteredUi(ui));},drag:function(event,ui){that._trigger("drag",event,filteredUi(ui));},stop:function(event,ui){options.position=[ui.position.left-that.document.scrollLeft(),ui.position.top-that.document.scrollTop()];$(this).removeClass("ui-dialog-dragging");that._unblockFrames();that._trigger("dragStop",event,filteredUi(ui));}});},_makeResizable:function(){var that=this,options=this.options,handles=options.resizable,position=this.uiDialog.css("position"),resizeHandles=typeof handles==="string"?handles:"n,e,s,w,se,sw,ne,nw";function filteredUi(ui){return{originalPosition:ui.originalPosition,originalSize:ui.originalSize,position:ui.position,size:ui.size};}
this.uiDialog.resizable({cancel:".ui-dialog-content",containment:"document",alsoResize:this.element,maxWidth:options.maxWidth,maxHeight:options.maxHeight,minWidth:options.minWidth,minHeight:this._minHeight(),handles:resizeHandles,start:function(event,ui){$(this).addClass("ui-dialog-resizing");that._blockFrames();that._trigger("resizeStart",event,filteredUi(ui));},resize:function(event,ui){that._trigger("resize",event,filteredUi(ui));},stop:function(event,ui){options.height=$(this).height();options.width=$(this).width();$(this).removeClass("ui-dialog-resizing");that._unblockFrames();that._trigger("resizeStop",event,filteredUi(ui));}}).css("position",position);},_minHeight:function(){var options=this.options;return options.height==="auto"?options.minHeight:Math.min(options.minHeight,options.height);},_position:function(){var isVisible=this.uiDialog.is(":visible");if(!isVisible){this.uiDialog.show();}
this.uiDialog.position(this.options.position);if(!isVisible){this.uiDialog.hide();}},_setOptions:function(options){var that=this,resize=false,resizableOptions={};$.each(options,function(key,value){that._setOption(key,value);if(key in sizeRelatedOptions){resize=true;}
if(key in resizableRelatedOptions){resizableOptions[key]=value;}});if(resize){this._size();this._position();}
if(this.uiDialog.is(":data(ui-resizable)")){this.uiDialog.resizable("option",resizableOptions);}},_setOption:function(key,value){var isDraggable,isResizable,uiDialog=this.uiDialog;if(key==="dialogClass"){uiDialog.removeClass(this.options.dialogClass).addClass(value);}
if(key==="disabled"){return;}
this._super(key,value);if(key==="appendTo"){this.uiDialog.appendTo(this._appendTo());}
if(key==="buttons"){this._createButtons();}
if(key==="closeText"){this.uiDialogTitlebarClose.button({label:""+value});}
if(key==="draggable"){isDraggable=uiDialog.is(":data(ui-draggable)");if(isDraggable&&!value){uiDialog.draggable("destroy");}
if(!isDraggable&&value){this._makeDraggable();}}
if(key==="position"){this._position();}
if(key==="resizable"){isResizable=uiDialog.is(":data(ui-resizable)");if(isResizable&&!value){uiDialog.resizable("destroy");}
if(isResizable&&typeof value==="string"){uiDialog.resizable("option","handles",value);}
if(!isResizable&&value!==false){this._makeResizable();}}
if(key==="title"){this._title(this.uiDialogTitlebar.find(".ui-dialog-title"));}},_size:function(){var nonContentHeight,minContentHeight,maxContentHeight,options=this.options;this.element.show().css({width:"auto",minHeight:0,maxHeight:"none",height:0});if(options.minWidth>options.width){options.width=options.minWidth;}
nonContentHeight=this.uiDialog.css({height:"auto",width:options.width}).outerHeight();minContentHeight=Math.max(0,options.minHeight-nonContentHeight);maxContentHeight=typeof options.maxHeight==="number"?Math.max(0,options.maxHeight-nonContentHeight):"none";if(options.height==="auto"){this.element.css({minHeight:minContentHeight,maxHeight:maxContentHeight,height:"auto"});}else{this.element.height(Math.max(0,options.height-nonContentHeight));}
if(this.uiDialog.is(":data(ui-resizable)")){this.uiDialog.resizable("option","minHeight",this._minHeight());}},_blockFrames:function(){this.iframeBlocks=this.document.find("iframe").map(function(){var iframe=$(this);return $("<div>").css({position:"absolute",width:iframe.outerWidth(),height:iframe.outerHeight()}).appendTo(iframe.parent()).offset(iframe.offset())[0];});},_unblockFrames:function(){if(this.iframeBlocks){this.iframeBlocks.remove();delete this.iframeBlocks;}},_allowInteraction:function(event){if($(event.target).closest(".ui-dialog").length){return true;}
return!!$(event.target).closest(".ui-datepicker").length;},_createOverlay:function(){if(!this.options.modal){return;}
var that=this,widgetFullName=this.widgetFullName;if(!$.ui.dialog.overlayInstances){this._delay(function(){if($.ui.dialog.overlayInstances){this.document.bind("focusin.dialog",function(event){if(!that._allowInteraction(event)){event.preventDefault();$(".ui-dialog:visible:last .ui-dialog-content").data(widgetFullName)._focusTabbable();}});}});}
this.overlay=$("<div>").addClass("ui-widget-overlay ui-front").appendTo(this._appendTo());this._on(this.overlay,{mousedown:"_keepFocus"});$.ui.dialog.overlayInstances++;},_destroyOverlay:function(){if(!this.options.modal){return;}
if(this.overlay){$.ui.dialog.overlayInstances--;if(!$.ui.dialog.overlayInstances){this.document.unbind("focusin.dialog");}
this.overlay.remove();this.overlay=null;}}});$.ui.dialog.overlayInstances=0;if($.uiBackCompat!==false){$.widget("ui.dialog",$.ui.dialog,{_position:function(){var position=this.options.position,myAt=[],offset=[0,0],isVisible;if(position){if(typeof position==="string"||(typeof position==="object"&&"0"in position)){myAt=position.split?position.split(" "):[position[0],position[1]];if(myAt.length===1){myAt[1]=myAt[0];}
$.each(["left","top"],function(i,offsetPosition){if(+myAt[i]===myAt[i]){offset[i]=myAt[i];myAt[i]=offsetPosition;}});position={my:myAt[0]+(offset[0]<0?offset[0]:"+"+offset[0])+" "+
myAt[1]+(offset[1]<0?offset[1]:"+"+offset[1]),at:myAt.join(" ")};}
position=$.extend({},$.ui.dialog.prototype.options.position,position);}else{position=$.ui.dialog.prototype.options.position;}
isVisible=this.uiDialog.is(":visible");if(!isVisible){this.uiDialog.show();}
this.uiDialog.position(position);if(!isVisible){this.uiDialog.hide();}}});}}(jQuery));(function($,undefined){$.widget("ui.draggable",$.ui.mouse,{version:"1.10.4",widgetEventPrefix:"drag",options:{addClasses:true,appendTo:"parent",axis:false,connectToSortable:false,containment:false,cursor:"auto",cursorAt:false,grid:false,handle:false,helper:"original",iframeFix:false,opacity:false,refreshPositions:false,revert:false,revertDuration:500,scope:"default",scroll:true,scrollSensitivity:20,scrollSpeed:20,snap:false,snapMode:"both",snapTolerance:20,stack:false,zIndex:false,drag:null,start:null,stop:null},_create:function(){if(this.options.helper==="original"&&!(/^(?:r|a|f)/).test(this.element.css("position"))){this.element[0].style.position="relative";}
if(this.options.addClasses){this.element.addClass("ui-draggable");}
if(this.options.disabled){this.element.addClass("ui-draggable-disabled");}
this._mouseInit();},_destroy:function(){this.element.removeClass("ui-draggable ui-draggable-dragging ui-draggable-disabled");this._mouseDestroy();},_mouseCapture:function(event){var o=this.options;if(this.helper||o.disabled||$(event.target).closest(".ui-resizable-handle").length>0){return false;}
this.handle=this._getHandle(event);if(!this.handle){return false;}
$(o.iframeFix===true?"iframe":o.iframeFix).each(function(){$("<div class='ui-draggable-iframeFix' style='background: #fff;'></div>").css({width:this.offsetWidth+"px",height:this.offsetHeight+"px",position:"absolute",opacity:"0.001",zIndex:1000}).css($(this).offset()).appendTo("body");});return true;},_mouseStart:function(event){var o=this.options;this.helper=this._createHelper(event);this.helper.addClass("ui-draggable-dragging");this._cacheHelperProportions();if($.ui.ddmanager){$.ui.ddmanager.current=this;}
this._cacheMargins();this.cssPosition=this.helper.css("position");this.scrollParent=this.helper.scrollParent();this.offsetParent=this.helper.offsetParent();this.offsetParentCssPosition=this.offsetParent.css("position");this.offset=this.positionAbs=this.element.offset();this.offset={top:this.offset.top-this.margins.top,left:this.offset.left-this.margins.left};this.offset.scroll=false;$.extend(this.offset,{click:{left:event.pageX-this.offset.left,top:event.pageY-this.offset.top},parent:this._getParentOffset(),relative:this._getRelativeOffset()});this.originalPosition=this.position=this._generatePosition(event);this.originalPageX=event.pageX;this.originalPageY=event.pageY;(o.cursorAt&&this._adjustOffsetFromHelper(o.cursorAt));this._setContainment();if(this._trigger("start",event)===false){this._clear();return false;}
this._cacheHelperProportions();if($.ui.ddmanager&&!o.dropBehaviour){$.ui.ddmanager.prepareOffsets(this,event);}
this._mouseDrag(event,true);if($.ui.ddmanager){$.ui.ddmanager.dragStart(this,event);}
return true;},_mouseDrag:function(event,noPropagation){if(this.offsetParentCssPosition==="fixed"){this.offset.parent=this._getParentOffset();}
this.position=this._generatePosition(event);this.positionAbs=this._convertPositionTo("absolute");if(!noPropagation){var ui=this._uiHash();if(this._trigger("drag",event,ui)===false){this._mouseUp({});return false;}
this.position=ui.position;}
if(!this.options.axis||this.options.axis!=="y"){this.helper[0].style.left=this.position.left+"px";}
if(!this.options.axis||this.options.axis!=="x"){this.helper[0].style.top=this.position.top+"px";}
if($.ui.ddmanager){$.ui.ddmanager.drag(this,event);}
return false;},_mouseStop:function(event){var that=this,dropped=false;if($.ui.ddmanager&&!this.options.dropBehaviour){dropped=$.ui.ddmanager.drop(this,event);}
if(this.dropped){dropped=this.dropped;this.dropped=false;}
if(this.options.helper==="original"&&!$.contains(this.element[0].ownerDocument,this.element[0])){return false;}
if((this.options.revert==="invalid"&&!dropped)||(this.options.revert==="valid"&&dropped)||this.options.revert===true||($.isFunction(this.options.revert)&&this.options.revert.call(this.element,dropped))){$(this.helper).animate(this.originalPosition,parseInt(this.options.revertDuration,10),function(){if(that._trigger("stop",event)!==false){that._clear();}});}else{if(this._trigger("stop",event)!==false){this._clear();}}
return false;},_mouseUp:function(event){$("div.ui-draggable-iframeFix").each(function(){this.parentNode.removeChild(this);});if($.ui.ddmanager){$.ui.ddmanager.dragStop(this,event);}
return $.ui.mouse.prototype._mouseUp.call(this,event);},cancel:function(){if(this.helper.is(".ui-draggable-dragging")){this._mouseUp({});}else{this._clear();}
return this;},_getHandle:function(event){return this.options.handle?!!$(event.target).closest(this.element.find(this.options.handle)).length:true;},_createHelper:function(event){var o=this.options,helper=$.isFunction(o.helper)?$(o.helper.apply(this.element[0],[event])):(o.helper==="clone"?this.element.clone().removeAttr("id"):this.element);if(!helper.parents("body").length){helper.appendTo((o.appendTo==="parent"?this.element[0].parentNode:o.appendTo));}
if(helper[0]!==this.element[0]&&!(/(fixed|absolute)/).test(helper.css("position"))){helper.css("position","absolute");}
return helper;},_adjustOffsetFromHelper:function(obj){if(typeof obj==="string"){obj=obj.split(" ");}
if($.isArray(obj)){obj={left:+obj[0],top:+obj[1]||0};}
if("left"in obj){this.offset.click.left=obj.left+this.margins.left;}
if("right"in obj){this.offset.click.left=this.helperProportions.width-obj.right+this.margins.left;}
if("top"in obj){this.offset.click.top=obj.top+this.margins.top;}
if("bottom"in obj){this.offset.click.top=this.helperProportions.height-obj.bottom+this.margins.top;}},_getParentOffset:function(){var po=this.offsetParent.offset();if(this.cssPosition==="absolute"&&this.scrollParent[0]!==document&&$.contains(this.scrollParent[0],this.offsetParent[0])){po.left+=this.scrollParent.scrollLeft();po.top+=this.scrollParent.scrollTop();}
if((this.offsetParent[0]===document.body)||(this.offsetParent[0].tagName&&this.offsetParent[0].tagName.toLowerCase()==="html"&&$.ui.ie)){po={top:0,left:0};}
return{top:po.top+(parseInt(this.offsetParent.css("borderTopWidth"),10)||0),left:po.left+(parseInt(this.offsetParent.css("borderLeftWidth"),10)||0)};},_getRelativeOffset:function(){if(this.cssPosition==="relative"){var p=this.element.position();return{top:p.top-(parseInt(this.helper.css("top"),10)||0)+this.scrollParent.scrollTop(),left:p.left-(parseInt(this.helper.css("left"),10)||0)+this.scrollParent.scrollLeft()};}else{return{top:0,left:0};}},_cacheMargins:function(){this.margins={left:(parseInt(this.element.css("marginLeft"),10)||0),top:(parseInt(this.element.css("marginTop"),10)||0),right:(parseInt(this.element.css("marginRight"),10)||0),bottom:(parseInt(this.element.css("marginBottom"),10)||0)};},_cacheHelperProportions:function(){this.helperProportions={width:this.helper.outerWidth(),height:this.helper.outerHeight()};},_setContainment:function(){var over,c,ce,o=this.options;if(!o.containment){this.containment=null;return;}
if(o.containment==="window"){this.containment=[$(window).scrollLeft()-this.offset.relative.left-this.offset.parent.left,$(window).scrollTop()-this.offset.relative.top-this.offset.parent.top,$(window).scrollLeft()+$(window).width()-this.helperProportions.width-this.margins.left,$(window).scrollTop()+($(window).height()||document.body.parentNode.scrollHeight)-this.helperProportions.height-this.margins.top];return;}
if(o.containment==="document"){this.containment=[0,0,$(document).width()-this.helperProportions.width-this.margins.left,($(document).height()||document.body.parentNode.scrollHeight)-this.helperProportions.height-this.margins.top];return;}
if(o.containment.constructor===Array){this.containment=o.containment;return;}
if(o.containment==="parent"){o.containment=this.helper[0].parentNode;}
c=$(o.containment);ce=c[0];if(!ce){return;}
over=c.css("overflow")!=="hidden";this.containment=[(parseInt(c.css("borderLeftWidth"),10)||0)+(parseInt(c.css("paddingLeft"),10)||0),(parseInt(c.css("borderTopWidth"),10)||0)+(parseInt(c.css("paddingTop"),10)||0),(over?Math.max(ce.scrollWidth,ce.offsetWidth):ce.offsetWidth)-(parseInt(c.css("borderRightWidth"),10)||0)-(parseInt(c.css("paddingRight"),10)||0)-this.helperProportions.width-this.margins.left-this.margins.right,(over?Math.max(ce.scrollHeight,ce.offsetHeight):ce.offsetHeight)-(parseInt(c.css("borderBottomWidth"),10)||0)-(parseInt(c.css("paddingBottom"),10)||0)-this.helperProportions.height-this.margins.top-this.margins.bottom];this.relative_container=c;},_convertPositionTo:function(d,pos){if(!pos){pos=this.position;}
var mod=d==="absolute"?1:-1,scroll=this.cssPosition==="absolute"&&!(this.scrollParent[0]!==document&&$.contains(this.scrollParent[0],this.offsetParent[0]))?this.offsetParent:this.scrollParent;if(!this.offset.scroll){this.offset.scroll={top:scroll.scrollTop(),left:scroll.scrollLeft()};}
return{top:(pos.top+
this.offset.relative.top*mod+
this.offset.parent.top*mod-
((this.cssPosition==="fixed"?-this.scrollParent.scrollTop():this.offset.scroll.top)*mod)),left:(pos.left+
this.offset.relative.left*mod+
this.offset.parent.left*mod-
((this.cssPosition==="fixed"?-this.scrollParent.scrollLeft():this.offset.scroll.left)*mod))};},_generatePosition:function(event){var containment,co,top,left,o=this.options,scroll=this.cssPosition==="absolute"&&!(this.scrollParent[0]!==document&&$.contains(this.scrollParent[0],this.offsetParent[0]))?this.offsetParent:this.scrollParent,pageX=event.pageX,pageY=event.pageY;if(!this.offset.scroll){this.offset.scroll={top:scroll.scrollTop(),left:scroll.scrollLeft()};}
if(this.originalPosition){if(this.containment){if(this.relative_container){co=this.relative_container.offset();containment=[this.containment[0]+co.left,this.containment[1]+co.top,this.containment[2]+co.left,this.containment[3]+co.top];}
else{containment=this.containment;}
if(event.pageX-this.offset.click.left<containment[0]){pageX=containment[0]+this.offset.click.left;}
if(event.pageY-this.offset.click.top<containment[1]){pageY=containment[1]+this.offset.click.top;}
if(event.pageX-this.offset.click.left>containment[2]){pageX=containment[2]+this.offset.click.left;}
if(event.pageY-this.offset.click.top>containment[3]){pageY=containment[3]+this.offset.click.top;}}
if(o.grid){top=o.grid[1]?this.originalPageY+Math.round((pageY-this.originalPageY)/o.grid[1])*o.grid[1]:this.originalPageY;pageY=containment?((top-this.offset.click.top>=containment[1]||top-this.offset.click.top>containment[3])?top:((top-this.offset.click.top>=containment[1])?top-o.grid[1]:top+o.grid[1])):top;left=o.grid[0]?this.originalPageX+Math.round((pageX-this.originalPageX)/o.grid[0])*o.grid[0]:this.originalPageX;pageX=containment?((left-this.offset.click.left>=containment[0]||left-this.offset.click.left>containment[2])?left:((left-this.offset.click.left>=containment[0])?left-o.grid[0]:left+o.grid[0])):left;}}
return{top:(pageY-
this.offset.click.top-
this.offset.relative.top-
this.offset.parent.top+
(this.cssPosition==="fixed"?-this.scrollParent.scrollTop():this.offset.scroll.top)),left:(pageX-
this.offset.click.left-
this.offset.relative.left-
this.offset.parent.left+
(this.cssPosition==="fixed"?-this.scrollParent.scrollLeft():this.offset.scroll.left))};},_clear:function(){this.helper.removeClass("ui-draggable-dragging");if(this.helper[0]!==this.element[0]&&!this.cancelHelperRemoval){this.helper.remove();}
this.helper=null;this.cancelHelperRemoval=false;},_trigger:function(type,event,ui){ui=ui||this._uiHash();$.ui.plugin.call(this,type,[event,ui]);if(type==="drag"){this.positionAbs=this._convertPositionTo("absolute");}
return $.Widget.prototype._trigger.call(this,type,event,ui);},plugins:{},_uiHash:function(){return{helper:this.helper,position:this.position,originalPosition:this.originalPosition,offset:this.positionAbs};}});$.ui.plugin.add("draggable","connectToSortable",{start:function(event,ui){var inst=$(this).data("ui-draggable"),o=inst.options,uiSortable=$.extend({},ui,{item:inst.element});inst.sortables=[];$(o.connectToSortable).each(function(){var sortable=$.data(this,"ui-sortable");if(sortable&&!sortable.options.disabled){inst.sortables.push({instance:sortable,shouldRevert:sortable.options.revert});sortable.refreshPositions();sortable._trigger("activate",event,uiSortable);}});},stop:function(event,ui){var inst=$(this).data("ui-draggable"),uiSortable=$.extend({},ui,{item:inst.element});$.each(inst.sortables,function(){if(this.instance.isOver){this.instance.isOver=0;inst.cancelHelperRemoval=true;this.instance.cancelHelperRemoval=false;if(this.shouldRevert){this.instance.options.revert=this.shouldRevert;}
this.instance._mouseStop(event);this.instance.options.helper=this.instance.options._helper;if(inst.options.helper==="original"){this.instance.currentItem.css({top:"auto",left:"auto"});}}else{this.instance.cancelHelperRemoval=false;this.instance._trigger("deactivate",event,uiSortable);}});},drag:function(event,ui){var inst=$(this).data("ui-draggable"),that=this;$.each(inst.sortables,function(){var innermostIntersecting=false,thisSortable=this;this.instance.positionAbs=inst.positionAbs;this.instance.helperProportions=inst.helperProportions;this.instance.offset.click=inst.offset.click;if(this.instance._intersectsWith(this.instance.containerCache)){innermostIntersecting=true;$.each(inst.sortables,function(){this.instance.positionAbs=inst.positionAbs;this.instance.helperProportions=inst.helperProportions;this.instance.offset.click=inst.offset.click;if(this!==thisSortable&&this.instance._intersectsWith(this.instance.containerCache)&&$.contains(thisSortable.instance.element[0],this.instance.element[0])){innermostIntersecting=false;}
return innermostIntersecting;});}
if(innermostIntersecting){if(!this.instance.isOver){this.instance.isOver=1;this.instance.currentItem=$(that).clone().removeAttr("id").appendTo(this.instance.element).data("ui-sortable-item",true);this.instance.options._helper=this.instance.options.helper;this.instance.options.helper=function(){return ui.helper[0];};event.target=this.instance.currentItem[0];this.instance._mouseCapture(event,true);this.instance._mouseStart(event,true,true);this.instance.offset.click.top=inst.offset.click.top;this.instance.offset.click.left=inst.offset.click.left;this.instance.offset.parent.left-=inst.offset.parent.left-this.instance.offset.parent.left;this.instance.offset.parent.top-=inst.offset.parent.top-this.instance.offset.parent.top;inst._trigger("toSortable",event);inst.dropped=this.instance.element;inst.currentItem=inst.element;this.instance.fromOutside=inst;}
if(this.instance.currentItem){this.instance._mouseDrag(event);}}else{if(this.instance.isOver){this.instance.isOver=0;this.instance.cancelHelperRemoval=true;this.instance.options.revert=false;this.instance._trigger("out",event,this.instance._uiHash(this.instance));this.instance._mouseStop(event,true);this.instance.options.helper=this.instance.options._helper;this.instance.currentItem.remove();if(this.instance.placeholder){this.instance.placeholder.remove();}
inst._trigger("fromSortable",event);inst.dropped=false;}}});}});$.ui.plugin.add("draggable","cursor",{start:function(){var t=$("body"),o=$(this).data("ui-draggable").options;if(t.css("cursor")){o._cursor=t.css("cursor");}
t.css("cursor",o.cursor);},stop:function(){var o=$(this).data("ui-draggable").options;if(o._cursor){$("body").css("cursor",o._cursor);}}});$.ui.plugin.add("draggable","opacity",{start:function(event,ui){var t=$(ui.helper),o=$(this).data("ui-draggable").options;if(t.css("opacity")){o._opacity=t.css("opacity");}
t.css("opacity",o.opacity);},stop:function(event,ui){var o=$(this).data("ui-draggable").options;if(o._opacity){$(ui.helper).css("opacity",o._opacity);}}});$.ui.plugin.add("draggable","scroll",{start:function(){var i=$(this).data("ui-draggable");if(i.scrollParent[0]!==document&&i.scrollParent[0].tagName!=="HTML"){i.overflowOffset=i.scrollParent.offset();}},drag:function(event){var i=$(this).data("ui-draggable"),o=i.options,scrolled=false;if(i.scrollParent[0]!==document&&i.scrollParent[0].tagName!=="HTML"){if(!o.axis||o.axis!=="x"){if((i.overflowOffset.top+i.scrollParent[0].offsetHeight)-event.pageY<o.scrollSensitivity){i.scrollParent[0].scrollTop=scrolled=i.scrollParent[0].scrollTop+o.scrollSpeed;}else if(event.pageY-i.overflowOffset.top<o.scrollSensitivity){i.scrollParent[0].scrollTop=scrolled=i.scrollParent[0].scrollTop-o.scrollSpeed;}}
if(!o.axis||o.axis!=="y"){if((i.overflowOffset.left+i.scrollParent[0].offsetWidth)-event.pageX<o.scrollSensitivity){i.scrollParent[0].scrollLeft=scrolled=i.scrollParent[0].scrollLeft+o.scrollSpeed;}else if(event.pageX-i.overflowOffset.left<o.scrollSensitivity){i.scrollParent[0].scrollLeft=scrolled=i.scrollParent[0].scrollLeft-o.scrollSpeed;}}}else{if(!o.axis||o.axis!=="x"){if(event.pageY-$(document).scrollTop()<o.scrollSensitivity){scrolled=$(document).scrollTop($(document).scrollTop()-o.scrollSpeed);}else if($(window).height()-(event.pageY-$(document).scrollTop())<o.scrollSensitivity){scrolled=$(document).scrollTop($(document).scrollTop()+o.scrollSpeed);}}
if(!o.axis||o.axis!=="y"){if(event.pageX-$(document).scrollLeft()<o.scrollSensitivity){scrolled=$(document).scrollLeft($(document).scrollLeft()-o.scrollSpeed);}else if($(window).width()-(event.pageX-$(document).scrollLeft())<o.scrollSensitivity){scrolled=$(document).scrollLeft($(document).scrollLeft()+o.scrollSpeed);}}}
if(scrolled!==false&&$.ui.ddmanager&&!o.dropBehaviour){$.ui.ddmanager.prepareOffsets(i,event);}}});$.ui.plugin.add("draggable","snap",{start:function(){var i=$(this).data("ui-draggable"),o=i.options;i.snapElements=[];$(o.snap.constructor!==String?(o.snap.items||":data(ui-draggable)"):o.snap).each(function(){var $t=$(this),$o=$t.offset();if(this!==i.element[0]){i.snapElements.push({item:this,width:$t.outerWidth(),height:$t.outerHeight(),top:$o.top,left:$o.left});}});},drag:function(event,ui){var ts,bs,ls,rs,l,r,t,b,i,first,inst=$(this).data("ui-draggable"),o=inst.options,d=o.snapTolerance,x1=ui.offset.left,x2=x1+inst.helperProportions.width,y1=ui.offset.top,y2=y1+inst.helperProportions.height;for(i=inst.snapElements.length-1;i>=0;i--){l=inst.snapElements[i].left;r=l+inst.snapElements[i].width;t=inst.snapElements[i].top;b=t+inst.snapElements[i].height;if(x2<l-d||x1>r+d||y2<t-d||y1>b+d||!$.contains(inst.snapElements[i].item.ownerDocument,inst.snapElements[i].item)){if(inst.snapElements[i].snapping){(inst.options.snap.release&&inst.options.snap.release.call(inst.element,event,$.extend(inst._uiHash(),{snapItem:inst.snapElements[i].item})));}
inst.snapElements[i].snapping=false;continue;}
if(o.snapMode!=="inner"){ts=Math.abs(t-y2)<=d;bs=Math.abs(b-y1)<=d;ls=Math.abs(l-x2)<=d;rs=Math.abs(r-x1)<=d;if(ts){ui.position.top=inst._convertPositionTo("relative",{top:t-inst.helperProportions.height,left:0}).top-inst.margins.top;}
if(bs){ui.position.top=inst._convertPositionTo("relative",{top:b,left:0}).top-inst.margins.top;}
if(ls){ui.position.left=inst._convertPositionTo("relative",{top:0,left:l-inst.helperProportions.width}).left-inst.margins.left;}
if(rs){ui.position.left=inst._convertPositionTo("relative",{top:0,left:r}).left-inst.margins.left;}}
first=(ts||bs||ls||rs);if(o.snapMode!=="outer"){ts=Math.abs(t-y1)<=d;bs=Math.abs(b-y2)<=d;ls=Math.abs(l-x1)<=d;rs=Math.abs(r-x2)<=d;if(ts){ui.position.top=inst._convertPositionTo("relative",{top:t,left:0}).top-inst.margins.top;}
if(bs){ui.position.top=inst._convertPositionTo("relative",{top:b-inst.helperProportions.height,left:0}).top-inst.margins.top;}
if(ls){ui.position.left=inst._convertPositionTo("relative",{top:0,left:l}).left-inst.margins.left;}
if(rs){ui.position.left=inst._convertPositionTo("relative",{top:0,left:r-inst.helperProportions.width}).left-inst.margins.left;}}
if(!inst.snapElements[i].snapping&&(ts||bs||ls||rs||first)){(inst.options.snap.snap&&inst.options.snap.snap.call(inst.element,event,$.extend(inst._uiHash(),{snapItem:inst.snapElements[i].item})));}
inst.snapElements[i].snapping=(ts||bs||ls||rs||first);}}});$.ui.plugin.add("draggable","stack",{start:function(){var min,o=this.data("ui-draggable").options,group=$.makeArray($(o.stack)).sort(function(a,b){return(parseInt($(a).css("zIndex"),10)||0)-(parseInt($(b).css("zIndex"),10)||0);});if(!group.length){return;}
min=parseInt($(group[0]).css("zIndex"),10)||0;$(group).each(function(i){$(this).css("zIndex",min+i);});this.css("zIndex",(min+group.length));}});$.ui.plugin.add("draggable","zIndex",{start:function(event,ui){var t=$(ui.helper),o=$(this).data("ui-draggable").options;if(t.css("zIndex")){o._zIndex=t.css("zIndex");}
t.css("zIndex",o.zIndex);},stop:function(event,ui){var o=$(this).data("ui-draggable").options;if(o._zIndex){$(ui.helper).css("zIndex",o._zIndex);}}});})(jQuery);(function($,undefined){function isOverAxis(x,reference,size){return(x>reference)&&(x<(reference+size));}
$.widget("ui.droppable",{version:"1.10.4",widgetEventPrefix:"drop",options:{accept:"*",activeClass:false,addClasses:true,greedy:false,hoverClass:false,scope:"default",tolerance:"intersect",activate:null,deactivate:null,drop:null,out:null,over:null},_create:function(){var proportions,o=this.options,accept=o.accept;this.isover=false;this.isout=true;this.accept=$.isFunction(accept)?accept:function(d){return d.is(accept);};this.proportions=function(){if(arguments.length){proportions=arguments[0];}else{return proportions?proportions:proportions={width:this.element[0].offsetWidth,height:this.element[0].offsetHeight};}};$.ui.ddmanager.droppables[o.scope]=$.ui.ddmanager.droppables[o.scope]||[];$.ui.ddmanager.droppables[o.scope].push(this);(o.addClasses&&this.element.addClass("ui-droppable"));},_destroy:function(){var i=0,drop=$.ui.ddmanager.droppables[this.options.scope];for(;i<drop.length;i++){if(drop[i]===this){drop.splice(i,1);}}
this.element.removeClass("ui-droppable ui-droppable-disabled");},_setOption:function(key,value){if(key==="accept"){this.accept=$.isFunction(value)?value:function(d){return d.is(value);};}
$.Widget.prototype._setOption.apply(this,arguments);},_activate:function(event){var draggable=$.ui.ddmanager.current;if(this.options.activeClass){this.element.addClass(this.options.activeClass);}
if(draggable){this._trigger("activate",event,this.ui(draggable));}},_deactivate:function(event){var draggable=$.ui.ddmanager.current;if(this.options.activeClass){this.element.removeClass(this.options.activeClass);}
if(draggable){this._trigger("deactivate",event,this.ui(draggable));}},_over:function(event){var draggable=$.ui.ddmanager.current;if(!draggable||(draggable.currentItem||draggable.element)[0]===this.element[0]){return;}
if(this.accept.call(this.element[0],(draggable.currentItem||draggable.element))){if(this.options.hoverClass){this.element.addClass(this.options.hoverClass);}
this._trigger("over",event,this.ui(draggable));}},_out:function(event){var draggable=$.ui.ddmanager.current;if(!draggable||(draggable.currentItem||draggable.element)[0]===this.element[0]){return;}
if(this.accept.call(this.element[0],(draggable.currentItem||draggable.element))){if(this.options.hoverClass){this.element.removeClass(this.options.hoverClass);}
this._trigger("out",event,this.ui(draggable));}},_drop:function(event,custom){var draggable=custom||$.ui.ddmanager.current,childrenIntersection=false;if(!draggable||(draggable.currentItem||draggable.element)[0]===this.element[0]){return false;}
this.element.find(":data(ui-droppable)").not(".ui-draggable-dragging").each(function(){var inst=$.data(this,"ui-droppable");if(inst.options.greedy&&!inst.options.disabled&&inst.options.scope===draggable.options.scope&&inst.accept.call(inst.element[0],(draggable.currentItem||draggable.element))&&$.ui.intersect(draggable,$.extend(inst,{offset:inst.element.offset()}),inst.options.tolerance)){childrenIntersection=true;return false;}});if(childrenIntersection){return false;}
if(this.accept.call(this.element[0],(draggable.currentItem||draggable.element))){if(this.options.activeClass){this.element.removeClass(this.options.activeClass);}
if(this.options.hoverClass){this.element.removeClass(this.options.hoverClass);}
this._trigger("drop",event,this.ui(draggable));return this.element;}
return false;},ui:function(c){return{draggable:(c.currentItem||c.element),helper:c.helper,position:c.position,offset:c.positionAbs};}});$.ui.intersect=function(draggable,droppable,toleranceMode){if(!droppable.offset){return false;}
var draggableLeft,draggableTop,x1=(draggable.positionAbs||draggable.position.absolute).left,y1=(draggable.positionAbs||draggable.position.absolute).top,x2=x1+draggable.helperProportions.width,y2=y1+draggable.helperProportions.height,l=droppable.offset.left,t=droppable.offset.top,r=l+droppable.proportions().width,b=t+droppable.proportions().height;switch(toleranceMode){case"fit":return(l<=x1&&x2<=r&&t<=y1&&y2<=b);case"intersect":return(l<x1+(draggable.helperProportions.width/2)&&x2-(draggable.helperProportions.width/2)<r&&t<y1+(draggable.helperProportions.height/2)&&y2-(draggable.helperProportions.height/2)<b);case"pointer":draggableLeft=((draggable.positionAbs||draggable.position.absolute).left+(draggable.clickOffset||draggable.offset.click).left);draggableTop=((draggable.positionAbs||draggable.position.absolute).top+(draggable.clickOffset||draggable.offset.click).top);return isOverAxis(draggableTop,t,droppable.proportions().height)&&isOverAxis(draggableLeft,l,droppable.proportions().width);case"touch":return((y1>=t&&y1<=b)||(y2>=t&&y2<=b)||(y1<t&&y2>b))&&((x1>=l&&x1<=r)||(x2>=l&&x2<=r)||(x1<l&&x2>r));default:return false;}};$.ui.ddmanager={current:null,droppables:{"default":[]},prepareOffsets:function(t,event){var i,j,m=$.ui.ddmanager.droppables[t.options.scope]||[],type=event?event.type:null,list=(t.currentItem||t.element).find(":data(ui-droppable)").addBack();droppablesLoop:for(i=0;i<m.length;i++){if(m[i].options.disabled||(t&&!m[i].accept.call(m[i].element[0],(t.currentItem||t.element)))){continue;}
for(j=0;j<list.length;j++){if(list[j]===m[i].element[0]){m[i].proportions().height=0;continue droppablesLoop;}}
m[i].visible=m[i].element.css("display")!=="none";if(!m[i].visible){continue;}
if(type==="mousedown"){m[i]._activate.call(m[i],event);}
m[i].offset=m[i].element.offset();m[i].proportions({width:m[i].element[0].offsetWidth,height:m[i].element[0].offsetHeight});}},drop:function(draggable,event){var dropped=false;$.each(($.ui.ddmanager.droppables[draggable.options.scope]||[]).slice(),function(){if(!this.options){return;}
if(!this.options.disabled&&this.visible&&$.ui.intersect(draggable,this,this.options.tolerance)){dropped=this._drop.call(this,event)||dropped;}
if(!this.options.disabled&&this.visible&&this.accept.call(this.element[0],(draggable.currentItem||draggable.element))){this.isout=true;this.isover=false;this._deactivate.call(this,event);}});return dropped;},dragStart:function(draggable,event){draggable.element.parentsUntil("body").bind("scroll.droppable",function(){if(!draggable.options.refreshPositions){$.ui.ddmanager.prepareOffsets(draggable,event);}});},drag:function(draggable,event){if(draggable.options.refreshPositions){$.ui.ddmanager.prepareOffsets(draggable,event);}
$.each($.ui.ddmanager.droppables[draggable.options.scope]||[],function(){if(this.options.disabled||this.greedyChild||!this.visible){return;}
var parentInstance,scope,parent,intersects=$.ui.intersect(draggable,this,this.options.tolerance),c=!intersects&&this.isover?"isout":(intersects&&!this.isover?"isover":null);if(!c){return;}
if(this.options.greedy){scope=this.options.scope;parent=this.element.parents(":data(ui-droppable)").filter(function(){return $.data(this,"ui-droppable").options.scope===scope;});if(parent.length){parentInstance=$.data(parent[0],"ui-droppable");parentInstance.greedyChild=(c==="isover");}}
if(parentInstance&&c==="isover"){parentInstance.isover=false;parentInstance.isout=true;parentInstance._out.call(parentInstance,event);}
this[c]=true;this[c==="isout"?"isover":"isout"]=false;this[c==="isover"?"_over":"_out"].call(this,event);if(parentInstance&&c==="isout"){parentInstance.isout=false;parentInstance.isover=true;parentInstance._over.call(parentInstance,event);}});},dragStop:function(draggable,event){draggable.element.parentsUntil("body").unbind("scroll.droppable");if(!draggable.options.refreshPositions){$.ui.ddmanager.prepareOffsets(draggable,event);}}};})(jQuery);(function($,undefined){var dataSpace="ui-effects-";$.effects={effect:{}};
/*!
 * jQuery Color Animations v2.1.2
 * https://github.com/jquery/jquery-color
 *
 * Copyright 2013 jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 *
 * Date: Wed Jan 16 08:47:09 2013 -0600
 */
(function(jQuery,undefined){var stepHooks="backgroundColor borderBottomColor borderLeftColor borderRightColor borderTopColor color columnRuleColor outlineColor textDecorationColor textEmphasisColor",rplusequals=/^([\-+])=\s*(\d+\.?\d*)/,stringParsers=[{re:/rgba?\(\s*(\d{1,3})\s*,\s*(\d{1,3})\s*,\s*(\d{1,3})\s*(?:,\s*(\d?(?:\.\d+)?)\s*)?\)/,parse:function(execResult){return[execResult[1],execResult[2],execResult[3],execResult[4]];}},{re:/rgba?\(\s*(\d+(?:\.\d+)?)\%\s*,\s*(\d+(?:\.\d+)?)\%\s*,\s*(\d+(?:\.\d+)?)\%\s*(?:,\s*(\d?(?:\.\d+)?)\s*)?\)/,parse:function(execResult){return[execResult[1]*2.55,execResult[2]*2.55,execResult[3]*2.55,execResult[4]];}},{re:/#([a-f0-9]{2})([a-f0-9]{2})([a-f0-9]{2})/,parse:function(execResult){return[parseInt(execResult[1],16),parseInt(execResult[2],16),parseInt(execResult[3],16)];}},{re:/#([a-f0-9])([a-f0-9])([a-f0-9])/,parse:function(execResult){return[parseInt(execResult[1]+execResult[1],16),parseInt(execResult[2]+execResult[2],16),parseInt(execResult[3]+execResult[3],16)];}},{re:/hsla?\(\s*(\d+(?:\.\d+)?)\s*,\s*(\d+(?:\.\d+)?)\%\s*,\s*(\d+(?:\.\d+)?)\%\s*(?:,\s*(\d?(?:\.\d+)?)\s*)?\)/,space:"hsla",parse:function(execResult){return[execResult[1],execResult[2]/100,execResult[3]/100,execResult[4]];}}],color=jQuery.Color=function(color,green,blue,alpha){return new jQuery.Color.fn.parse(color,green,blue,alpha);},spaces={rgba:{props:{red:{idx:0,type:"byte"},green:{idx:1,type:"byte"},blue:{idx:2,type:"byte"}}},hsla:{props:{hue:{idx:0,type:"degrees"},saturation:{idx:1,type:"percent"},lightness:{idx:2,type:"percent"}}}},propTypes={"byte":{floor:true,max:255},"percent":{max:1},"degrees":{mod:360,floor:true}},support=color.support={},supportElem=jQuery("<p>")[0],colors,each=jQuery.each;supportElem.style.cssText="background-color:rgba(1,1,1,.5)";support.rgba=supportElem.style.backgroundColor.indexOf("rgba")>-1;each(spaces,function(spaceName,space){space.cache="_"+spaceName;space.props.alpha={idx:3,type:"percent",def:1};});function clamp(value,prop,allowEmpty){var type=propTypes[prop.type]||{};if(value==null){return(allowEmpty||!prop.def)?null:prop.def;}
value=type.floor?~~value:parseFloat(value);if(isNaN(value)){return prop.def;}
if(type.mod){return(value+type.mod)%type.mod;}
return 0>value?0:type.max<value?type.max:value;}
function stringParse(string){var inst=color(),rgba=inst._rgba=[];string=string.toLowerCase();each(stringParsers,function(i,parser){var parsed,match=parser.re.exec(string),values=match&&parser.parse(match),spaceName=parser.space||"rgba";if(values){parsed=inst[spaceName](values);inst[spaces[spaceName].cache]=parsed[spaces[spaceName].cache];rgba=inst._rgba=parsed._rgba;return false;}});if(rgba.length){if(rgba.join()==="0,0,0,0"){jQuery.extend(rgba,colors.transparent);}
return inst;}
return colors[string];}
color.fn=jQuery.extend(color.prototype,{parse:function(red,green,blue,alpha){if(red===undefined){this._rgba=[null,null,null,null];return this;}
if(red.jquery||red.nodeType){red=jQuery(red).css(green);green=undefined;}
var inst=this,type=jQuery.type(red),rgba=this._rgba=[];if(green!==undefined){red=[red,green,blue,alpha];type="array";}
if(type==="string"){return this.parse(stringParse(red)||colors._default);}
if(type==="array"){each(spaces.rgba.props,function(key,prop){rgba[prop.idx]=clamp(red[prop.idx],prop);});return this;}
if(type==="object"){if(red instanceof color){each(spaces,function(spaceName,space){if(red[space.cache]){inst[space.cache]=red[space.cache].slice();}});}else{each(spaces,function(spaceName,space){var cache=space.cache;each(space.props,function(key,prop){if(!inst[cache]&&space.to){if(key==="alpha"||red[key]==null){return;}
inst[cache]=space.to(inst._rgba);}
inst[cache][prop.idx]=clamp(red[key],prop,true);});if(inst[cache]&&jQuery.inArray(null,inst[cache].slice(0,3))<0){inst[cache][3]=1;if(space.from){inst._rgba=space.from(inst[cache]);}}});}
return this;}},is:function(compare){var is=color(compare),same=true,inst=this;each(spaces,function(_,space){var localCache,isCache=is[space.cache];if(isCache){localCache=inst[space.cache]||space.to&&space.to(inst._rgba)||[];each(space.props,function(_,prop){if(isCache[prop.idx]!=null){same=(isCache[prop.idx]===localCache[prop.idx]);return same;}});}
return same;});return same;},_space:function(){var used=[],inst=this;each(spaces,function(spaceName,space){if(inst[space.cache]){used.push(spaceName);}});return used.pop();},transition:function(other,distance){var end=color(other),spaceName=end._space(),space=spaces[spaceName],startColor=this.alpha()===0?color("transparent"):this,start=startColor[space.cache]||space.to(startColor._rgba),result=start.slice();end=end[space.cache];each(space.props,function(key,prop){var index=prop.idx,startValue=start[index],endValue=end[index],type=propTypes[prop.type]||{};if(endValue===null){return;}
if(startValue===null){result[index]=endValue;}else{if(type.mod){if(endValue-startValue>type.mod/2){startValue+=type.mod;}else if(startValue-endValue>type.mod/2){startValue-=type.mod;}}
result[index]=clamp((endValue-startValue)*distance+startValue,prop);}});return this[spaceName](result);},blend:function(opaque){if(this._rgba[3]===1){return this;}
var rgb=this._rgba.slice(),a=rgb.pop(),blend=color(opaque)._rgba;return color(jQuery.map(rgb,function(v,i){return(1-a)*blend[i]+a*v;}));},toRgbaString:function(){var prefix="rgba(",rgba=jQuery.map(this._rgba,function(v,i){return v==null?(i>2?1:0):v;});if(rgba[3]===1){rgba.pop();prefix="rgb(";}
return prefix+rgba.join()+")";},toHslaString:function(){var prefix="hsla(",hsla=jQuery.map(this.hsla(),function(v,i){if(v==null){v=i>2?1:0;}
if(i&&i<3){v=Math.round(v*100)+"%";}
return v;});if(hsla[3]===1){hsla.pop();prefix="hsl(";}
return prefix+hsla.join()+")";},toHexString:function(includeAlpha){var rgba=this._rgba.slice(),alpha=rgba.pop();if(includeAlpha){rgba.push(~~(alpha*255));}
return"#"+jQuery.map(rgba,function(v){v=(v||0).toString(16);return v.length===1?"0"+v:v;}).join("");},toString:function(){return this._rgba[3]===0?"transparent":this.toRgbaString();}});color.fn.parse.prototype=color.fn;function hue2rgb(p,q,h){h=(h+1)%1;if(h*6<1){return p+(q-p)*h*6;}
if(h*2<1){return q;}
if(h*3<2){return p+(q-p)*((2/3)-h)*6;}
return p;}
spaces.hsla.to=function(rgba){if(rgba[0]==null||rgba[1]==null||rgba[2]==null){return[null,null,null,rgba[3]];}
var r=rgba[0]/255,g=rgba[1]/255,b=rgba[2]/255,a=rgba[3],max=Math.max(r,g,b),min=Math.min(r,g,b),diff=max-min,add=max+min,l=add*0.5,h,s;if(min===max){h=0;}else if(r===max){h=(60*(g-b)/diff)+360;}else if(g===max){h=(60*(b-r)/diff)+120;}else{h=(60*(r-g)/diff)+240;}
if(diff===0){s=0;}else if(l<=0.5){s=diff/add;}else{s=diff/(2-add);}
return[Math.round(h)%360,s,l,a==null?1:a];};spaces.hsla.from=function(hsla){if(hsla[0]==null||hsla[1]==null||hsla[2]==null){return[null,null,null,hsla[3]];}
var h=hsla[0]/360,s=hsla[1],l=hsla[2],a=hsla[3],q=l<=0.5?l*(1+s):l+s-l*s,p=2*l-q;return[Math.round(hue2rgb(p,q,h+(1/3))*255),Math.round(hue2rgb(p,q,h)*255),Math.round(hue2rgb(p,q,h-(1/3))*255),a];};each(spaces,function(spaceName,space){var props=space.props,cache=space.cache,to=space.to,from=space.from;color.fn[spaceName]=function(value){if(to&&!this[cache]){this[cache]=to(this._rgba);}
if(value===undefined){return this[cache].slice();}
var ret,type=jQuery.type(value),arr=(type==="array"||type==="object")?value:arguments,local=this[cache].slice();each(props,function(key,prop){var val=arr[type==="object"?key:prop.idx];if(val==null){val=local[prop.idx];}
local[prop.idx]=clamp(val,prop);});if(from){ret=color(from(local));ret[cache]=local;return ret;}else{return color(local);}};each(props,function(key,prop){if(color.fn[key]){return;}
color.fn[key]=function(value){var vtype=jQuery.type(value),fn=(key==="alpha"?(this._hsla?"hsla":"rgba"):spaceName),local=this[fn](),cur=local[prop.idx],match;if(vtype==="undefined"){return cur;}
if(vtype==="function"){value=value.call(this,cur);vtype=jQuery.type(value);}
if(value==null&&prop.empty){return this;}
if(vtype==="string"){match=rplusequals.exec(value);if(match){value=cur+parseFloat(match[2])*(match[1]==="+"?1:-1);}}
local[prop.idx]=value;return this[fn](local);};});});color.hook=function(hook){var hooks=hook.split(" ");each(hooks,function(i,hook){jQuery.cssHooks[hook]={set:function(elem,value){var parsed,curElem,backgroundColor="";if(value!=="transparent"&&(jQuery.type(value)!=="string"||(parsed=stringParse(value)))){value=color(parsed||value);if(!support.rgba&&value._rgba[3]!==1){curElem=hook==="backgroundColor"?elem.parentNode:elem;while((backgroundColor===""||backgroundColor==="transparent")&&curElem&&curElem.style){try{backgroundColor=jQuery.css(curElem,"backgroundColor");curElem=curElem.parentNode;}catch(e){}}
value=value.blend(backgroundColor&&backgroundColor!=="transparent"?backgroundColor:"_default");}
value=value.toRgbaString();}
try{elem.style[hook]=value;}catch(e){}}};jQuery.fx.step[hook]=function(fx){if(!fx.colorInit){fx.start=color(fx.elem,hook);fx.end=color(fx.end);fx.colorInit=true;}
jQuery.cssHooks[hook].set(fx.elem,fx.start.transition(fx.end,fx.pos));};});};color.hook(stepHooks);jQuery.cssHooks.borderColor={expand:function(value){var expanded={};each(["Top","Right","Bottom","Left"],function(i,part){expanded["border"+part+"Color"]=value;});return expanded;}};colors=jQuery.Color.names={aqua:"#00ffff",black:"#000000",blue:"#0000ff",fuchsia:"#ff00ff",gray:"#808080",green:"#008000",lime:"#00ff00",maroon:"#800000",navy:"#000080",olive:"#808000",purple:"#800080",red:"#ff0000",silver:"#c0c0c0",teal:"#008080",white:"#ffffff",yellow:"#ffff00",transparent:[null,null,null,0],_default:"#ffffff"};})(jQuery);(function(){var classAnimationActions=["add","remove","toggle"],shorthandStyles={border:1,borderBottom:1,borderColor:1,borderLeft:1,borderRight:1,borderTop:1,borderWidth:1,margin:1,padding:1};$.each(["borderLeftStyle","borderRightStyle","borderBottomStyle","borderTopStyle"],function(_,prop){$.fx.step[prop]=function(fx){if(fx.end!=="none"&&!fx.setAttr||fx.pos===1&&!fx.setAttr){jQuery.style(fx.elem,prop,fx.end);fx.setAttr=true;}};});function getElementStyles(elem){var key,len,style=elem.ownerDocument.defaultView?elem.ownerDocument.defaultView.getComputedStyle(elem,null):elem.currentStyle,styles={};if(style&&style.length&&style[0]&&style[style[0]]){len=style.length;while(len--){key=style[len];if(typeof style[key]==="string"){styles[$.camelCase(key)]=style[key];}}}else{for(key in style){if(typeof style[key]==="string"){styles[key]=style[key];}}}
return styles;}
function styleDifference(oldStyle,newStyle){var diff={},name,value;for(name in newStyle){value=newStyle[name];if(oldStyle[name]!==value){if(!shorthandStyles[name]){if($.fx.step[name]||!isNaN(parseFloat(value))){diff[name]=value;}}}}
return diff;}
if(!$.fn.addBack){$.fn.addBack=function(selector){return this.add(selector==null?this.prevObject:this.prevObject.filter(selector));};}
$.effects.animateClass=function(value,duration,easing,callback){var o=$.speed(duration,easing,callback);return this.queue(function(){var animated=$(this),baseClass=animated.attr("class")||"",applyClassChange,allAnimations=o.children?animated.find("*").addBack():animated;allAnimations=allAnimations.map(function(){var el=$(this);return{el:el,start:getElementStyles(this)};});applyClassChange=function(){$.each(classAnimationActions,function(i,action){if(value[action]){animated[action+"Class"](value[action]);}});};applyClassChange();allAnimations=allAnimations.map(function(){this.end=getElementStyles(this.el[0]);this.diff=styleDifference(this.start,this.end);return this;});animated.attr("class",baseClass);allAnimations=allAnimations.map(function(){var styleInfo=this,dfd=$.Deferred(),opts=$.extend({},o,{queue:false,complete:function(){dfd.resolve(styleInfo);}});this.el.animate(this.diff,opts);return dfd.promise();});$.when.apply($,allAnimations.get()).done(function(){applyClassChange();$.each(arguments,function(){var el=this.el;$.each(this.diff,function(key){el.css(key,"");});});o.complete.call(animated[0]);});});};$.fn.extend({addClass:(function(orig){return function(classNames,speed,easing,callback){return speed?$.effects.animateClass.call(this,{add:classNames},speed,easing,callback):orig.apply(this,arguments);};})($.fn.addClass),removeClass:(function(orig){return function(classNames,speed,easing,callback){return arguments.length>1?$.effects.animateClass.call(this,{remove:classNames},speed,easing,callback):orig.apply(this,arguments);};})($.fn.removeClass),toggleClass:(function(orig){return function(classNames,force,speed,easing,callback){if(typeof force==="boolean"||force===undefined){if(!speed){return orig.apply(this,arguments);}else{return $.effects.animateClass.call(this,(force?{add:classNames}:{remove:classNames}),speed,easing,callback);}}else{return $.effects.animateClass.call(this,{toggle:classNames},force,speed,easing);}};})($.fn.toggleClass),switchClass:function(remove,add,speed,easing,callback){return $.effects.animateClass.call(this,{add:add,remove:remove},speed,easing,callback);}});})();(function(){$.extend($.effects,{version:"1.10.4",save:function(element,set){for(var i=0;i<set.length;i++){if(set[i]!==null){element.data(dataSpace+set[i],element[0].style[set[i]]);}}},restore:function(element,set){var val,i;for(i=0;i<set.length;i++){if(set[i]!==null){val=element.data(dataSpace+set[i]);if(val===undefined){val="";}
element.css(set[i],val);}}},setMode:function(el,mode){if(mode==="toggle"){mode=el.is(":hidden")?"show":"hide";}
return mode;},getBaseline:function(origin,original){var y,x;switch(origin[0]){case"top":y=0;break;case"middle":y=0.5;break;case"bottom":y=1;break;default:y=origin[0]/original.height;}
switch(origin[1]){case"left":x=0;break;case"center":x=0.5;break;case"right":x=1;break;default:x=origin[1]/original.width;}
return{x:x,y:y};},createWrapper:function(element){if(element.parent().is(".ui-effects-wrapper")){return element.parent();}
var props={width:element.outerWidth(true),height:element.outerHeight(true),"float":element.css("float")},wrapper=$("<div></div>").addClass("ui-effects-wrapper").css({fontSize:"100%",background:"transparent",border:"none",margin:0,padding:0}),size={width:element.width(),height:element.height()},active=document.activeElement;try{active.id;}catch(e){active=document.body;}
element.wrap(wrapper);if(element[0]===active||$.contains(element[0],active)){$(active).focus();}
wrapper=element.parent();if(element.css("position")==="static"){wrapper.css({position:"relative"});element.css({position:"relative"});}else{$.extend(props,{position:element.css("position"),zIndex:element.css("z-index")});$.each(["top","left","bottom","right"],function(i,pos){props[pos]=element.css(pos);if(isNaN(parseInt(props[pos],10))){props[pos]="auto";}});element.css({position:"relative",top:0,left:0,right:"auto",bottom:"auto"});}
element.css(size);return wrapper.css(props).show();},removeWrapper:function(element){var active=document.activeElement;if(element.parent().is(".ui-effects-wrapper")){element.parent().replaceWith(element);if(element[0]===active||$.contains(element[0],active)){$(active).focus();}}
return element;},setTransition:function(element,list,factor,value){value=value||{};$.each(list,function(i,x){var unit=element.cssUnit(x);if(unit[0]>0){value[x]=unit[0]*factor+unit[1];}});return value;}});function _normalizeArguments(effect,options,speed,callback){if($.isPlainObject(effect)){options=effect;effect=effect.effect;}
effect={effect:effect};if(options==null){options={};}
if($.isFunction(options)){callback=options;speed=null;options={};}
if(typeof options==="number"||$.fx.speeds[options]){callback=speed;speed=options;options={};}
if($.isFunction(speed)){callback=speed;speed=null;}
if(options){$.extend(effect,options);}
speed=speed||options.duration;effect.duration=$.fx.off?0:typeof speed==="number"?speed:speed in $.fx.speeds?$.fx.speeds[speed]:$.fx.speeds._default;effect.complete=callback||options.complete;return effect;}
function standardAnimationOption(option){if(!option||typeof option==="number"||$.fx.speeds[option]){return true;}
if(typeof option==="string"&&!$.effects.effect[option]){return true;}
if($.isFunction(option)){return true;}
if(typeof option==="object"&&!option.effect){return true;}
return false;}
$.fn.extend({effect:function(){var args=_normalizeArguments.apply(this,arguments),mode=args.mode,queue=args.queue,effectMethod=$.effects.effect[args.effect];if($.fx.off||!effectMethod){if(mode){return this[mode](args.duration,args.complete);}else{return this.each(function(){if(args.complete){args.complete.call(this);}});}}
function run(next){var elem=$(this),complete=args.complete,mode=args.mode;function done(){if($.isFunction(complete)){complete.call(elem[0]);}
if($.isFunction(next)){next();}}
if(elem.is(":hidden")?mode==="hide":mode==="show"){elem[mode]();done();}else{effectMethod.call(elem[0],args,done);}}
return queue===false?this.each(run):this.queue(queue||"fx",run);},show:(function(orig){return function(option){if(standardAnimationOption(option)){return orig.apply(this,arguments);}else{var args=_normalizeArguments.apply(this,arguments);args.mode="show";return this.effect.call(this,args);}};})($.fn.show),hide:(function(orig){return function(option){if(standardAnimationOption(option)){return orig.apply(this,arguments);}else{var args=_normalizeArguments.apply(this,arguments);args.mode="hide";return this.effect.call(this,args);}};})($.fn.hide),toggle:(function(orig){return function(option){if(standardAnimationOption(option)||typeof option==="boolean"){return orig.apply(this,arguments);}else{var args=_normalizeArguments.apply(this,arguments);args.mode="toggle";return this.effect.call(this,args);}};})($.fn.toggle),cssUnit:function(key){var style=this.css(key),val=[];$.each(["em","px","%","pt"],function(i,unit){if(style.indexOf(unit)>0){val=[parseFloat(style),unit];}});return val;}});})();(function(){var baseEasings={};$.each(["Quad","Cubic","Quart","Quint","Expo"],function(i,name){baseEasings[name]=function(p){return Math.pow(p,i+2);};});$.extend(baseEasings,{Sine:function(p){return 1-Math.cos(p*Math.PI/2);},Circ:function(p){return 1-Math.sqrt(1-p*p);},Elastic:function(p){return p===0||p===1?p:-Math.pow(2,8*(p-1))*Math.sin(((p-1)*80-7.5)*Math.PI/15);},Back:function(p){return p*p*(3*p-2);},Bounce:function(p){var pow2,bounce=4;while(p<((pow2=Math.pow(2,--bounce))-1)/11){}
return 1/Math.pow(4,3-bounce)-7.5625*Math.pow((pow2*3-2)/22-p,2);}});$.each(baseEasings,function(name,easeIn){$.easing["easeIn"+name]=easeIn;$.easing["easeOut"+name]=function(p){return 1-easeIn(1-p);};$.easing["easeInOut"+name]=function(p){return p<0.5?easeIn(p*2)/2:1-easeIn(p*-2+2)/2;};});})();})(jQuery);(function($,undefined){var rvertical=/up|down|vertical/,rpositivemotion=/up|left|vertical|horizontal/;$.effects.effect.blind=function(o,done){var el=$(this),props=["position","top","bottom","left","right","height","width"],mode=$.effects.setMode(el,o.mode||"hide"),direction=o.direction||"up",vertical=rvertical.test(direction),ref=vertical?"height":"width",ref2=vertical?"top":"left",motion=rpositivemotion.test(direction),animation={},show=mode==="show",wrapper,distance,margin;if(el.parent().is(".ui-effects-wrapper")){$.effects.save(el.parent(),props);}else{$.effects.save(el,props);}
el.show();wrapper=$.effects.createWrapper(el).css({overflow:"hidden"});distance=wrapper[ref]();margin=parseFloat(wrapper.css(ref2))||0;animation[ref]=show?distance:0;if(!motion){el.css(vertical?"bottom":"right",0).css(vertical?"top":"left","auto").css({position:"absolute"});animation[ref2]=show?margin:distance+margin;}
if(show){wrapper.css(ref,0);if(!motion){wrapper.css(ref2,margin+distance);}}
wrapper.animate(animation,{duration:o.duration,easing:o.easing,queue:false,complete:function(){if(mode==="hide"){el.hide();}
$.effects.restore(el,props);$.effects.removeWrapper(el);done();}});};})(jQuery);(function($,undefined){$.effects.effect.bounce=function(o,done){var el=$(this),props=["position","top","bottom","left","right","height","width"],mode=$.effects.setMode(el,o.mode||"effect"),hide=mode==="hide",show=mode==="show",direction=o.direction||"up",distance=o.distance,times=o.times||5,anims=times*2+(show||hide?1:0),speed=o.duration/anims,easing=o.easing,ref=(direction==="up"||direction==="down")?"top":"left",motion=(direction==="up"||direction==="left"),i,upAnim,downAnim,queue=el.queue(),queuelen=queue.length;if(show||hide){props.push("opacity");}
$.effects.save(el,props);el.show();$.effects.createWrapper(el);if(!distance){distance=el[ref==="top"?"outerHeight":"outerWidth"]()/3;}
if(show){downAnim={opacity:1};downAnim[ref]=0;el.css("opacity",0).css(ref,motion?-distance*2:distance*2).animate(downAnim,speed,easing);}
if(hide){distance=distance/Math.pow(2,times-1);}
downAnim={};downAnim[ref]=0;for(i=0;i<times;i++){upAnim={};upAnim[ref]=(motion?"-=":"+=")+distance;el.animate(upAnim,speed,easing).animate(downAnim,speed,easing);distance=hide?distance*2:distance/2;}
if(hide){upAnim={opacity:0};upAnim[ref]=(motion?"-=":"+=")+distance;el.animate(upAnim,speed,easing);}
el.queue(function(){if(hide){el.hide();}
$.effects.restore(el,props);$.effects.removeWrapper(el);done();});if(queuelen>1){queue.splice.apply(queue,[1,0].concat(queue.splice(queuelen,anims+1)));}
el.dequeue();};})(jQuery);(function($,undefined){$.effects.effect.clip=function(o,done){var el=$(this),props=["position","top","bottom","left","right","height","width"],mode=$.effects.setMode(el,o.mode||"hide"),show=mode==="show",direction=o.direction||"vertical",vert=direction==="vertical",size=vert?"height":"width",position=vert?"top":"left",animation={},wrapper,animate,distance;$.effects.save(el,props);el.show();wrapper=$.effects.createWrapper(el).css({overflow:"hidden"});animate=(el[0].tagName==="IMG")?wrapper:el;distance=animate[size]();if(show){animate.css(size,0);animate.css(position,distance/2);}
animation[size]=show?distance:0;animation[position]=show?0:distance/2;animate.animate(animation,{queue:false,duration:o.duration,easing:o.easing,complete:function(){if(!show){el.hide();}
$.effects.restore(el,props);$.effects.removeWrapper(el);done();}});};})(jQuery);(function($,undefined){$.effects.effect.drop=function(o,done){var el=$(this),props=["position","top","bottom","left","right","opacity","height","width"],mode=$.effects.setMode(el,o.mode||"hide"),show=mode==="show",direction=o.direction||"left",ref=(direction==="up"||direction==="down")?"top":"left",motion=(direction==="up"||direction==="left")?"pos":"neg",animation={opacity:show?1:0},distance;$.effects.save(el,props);el.show();$.effects.createWrapper(el);distance=o.distance||el[ref==="top"?"outerHeight":"outerWidth"](true)/2;if(show){el.css("opacity",0).css(ref,motion==="pos"?-distance:distance);}
animation[ref]=(show?(motion==="pos"?"+=":"-="):(motion==="pos"?"-=":"+="))+
distance;el.animate(animation,{queue:false,duration:o.duration,easing:o.easing,complete:function(){if(mode==="hide"){el.hide();}
$.effects.restore(el,props);$.effects.removeWrapper(el);done();}});};})(jQuery);(function($,undefined){$.effects.effect.explode=function(o,done){var rows=o.pieces?Math.round(Math.sqrt(o.pieces)):3,cells=rows,el=$(this),mode=$.effects.setMode(el,o.mode||"hide"),show=mode==="show",offset=el.show().css("visibility","hidden").offset(),width=Math.ceil(el.outerWidth()/cells),height=Math.ceil(el.outerHeight()/rows),pieces=[],i,j,left,top,mx,my;function childComplete(){pieces.push(this);if(pieces.length===rows*cells){animComplete();}}
for(i=0;i<rows;i++){top=offset.top+i*height;my=i-(rows-1)/2;for(j=0;j<cells;j++){left=offset.left+j*width;mx=j-(cells-1)/2;el.clone().appendTo("body").wrap("<div></div>").css({position:"absolute",visibility:"visible",left:-j*width,top:-i*height}).parent().addClass("ui-effects-explode").css({position:"absolute",overflow:"hidden",width:width,height:height,left:left+(show?mx*width:0),top:top+(show?my*height:0),opacity:show?0:1}).animate({left:left+(show?0:mx*width),top:top+(show?0:my*height),opacity:show?1:0},o.duration||500,o.easing,childComplete);}}
function animComplete(){el.css({visibility:"visible"});$(pieces).remove();if(!show){el.hide();}
done();}};})(jQuery);(function($,undefined){$.effects.effect.fade=function(o,done){var el=$(this),mode=$.effects.setMode(el,o.mode||"toggle");el.animate({opacity:mode},{queue:false,duration:o.duration,easing:o.easing,complete:done});};})(jQuery);(function($,undefined){$.effects.effect.fold=function(o,done){var el=$(this),props=["position","top","bottom","left","right","height","width"],mode=$.effects.setMode(el,o.mode||"hide"),show=mode==="show",hide=mode==="hide",size=o.size||15,percent=/([0-9]+)%/.exec(size),horizFirst=!!o.horizFirst,widthFirst=show!==horizFirst,ref=widthFirst?["width","height"]:["height","width"],duration=o.duration/2,wrapper,distance,animation1={},animation2={};$.effects.save(el,props);el.show();wrapper=$.effects.createWrapper(el).css({overflow:"hidden"});distance=widthFirst?[wrapper.width(),wrapper.height()]:[wrapper.height(),wrapper.width()];if(percent){size=parseInt(percent[1],10)/100*distance[hide?0:1];}
if(show){wrapper.css(horizFirst?{height:0,width:size}:{height:size,width:0});}
animation1[ref[0]]=show?distance[0]:size;animation2[ref[1]]=show?distance[1]:0;wrapper.animate(animation1,duration,o.easing).animate(animation2,duration,o.easing,function(){if(hide){el.hide();}
$.effects.restore(el,props);$.effects.removeWrapper(el);done();});};})(jQuery);(function($,undefined){$.effects.effect.highlight=function(o,done){var elem=$(this),props=["backgroundImage","backgroundColor","opacity"],mode=$.effects.setMode(elem,o.mode||"show"),animation={backgroundColor:elem.css("backgroundColor")};if(mode==="hide"){animation.opacity=0;}
$.effects.save(elem,props);elem.show().css({backgroundImage:"none",backgroundColor:o.color||"#ffff99"}).animate(animation,{queue:false,duration:o.duration,easing:o.easing,complete:function(){if(mode==="hide"){elem.hide();}
$.effects.restore(elem,props);done();}});};})(jQuery);(function($,undefined){$.effects.effect.pulsate=function(o,done){var elem=$(this),mode=$.effects.setMode(elem,o.mode||"show"),show=mode==="show",hide=mode==="hide",showhide=(show||mode==="hide"),anims=((o.times||5)*2)+(showhide?1:0),duration=o.duration/anims,animateTo=0,queue=elem.queue(),queuelen=queue.length,i;if(show||!elem.is(":visible")){elem.css("opacity",0).show();animateTo=1;}
for(i=1;i<anims;i++){elem.animate({opacity:animateTo},duration,o.easing);animateTo=1-animateTo;}
elem.animate({opacity:animateTo},duration,o.easing);elem.queue(function(){if(hide){elem.hide();}
done();});if(queuelen>1){queue.splice.apply(queue,[1,0].concat(queue.splice(queuelen,anims+1)));}
elem.dequeue();};})(jQuery);(function($,undefined){$.effects.effect.puff=function(o,done){var elem=$(this),mode=$.effects.setMode(elem,o.mode||"hide"),hide=mode==="hide",percent=parseInt(o.percent,10)||150,factor=percent/100,original={height:elem.height(),width:elem.width(),outerHeight:elem.outerHeight(),outerWidth:elem.outerWidth()};$.extend(o,{effect:"scale",queue:false,fade:true,mode:mode,complete:done,percent:hide?percent:100,from:hide?original:{height:original.height*factor,width:original.width*factor,outerHeight:original.outerHeight*factor,outerWidth:original.outerWidth*factor}});elem.effect(o);};$.effects.effect.scale=function(o,done){var el=$(this),options=$.extend(true,{},o),mode=$.effects.setMode(el,o.mode||"effect"),percent=parseInt(o.percent,10)||(parseInt(o.percent,10)===0?0:(mode==="hide"?0:100)),direction=o.direction||"both",origin=o.origin,original={height:el.height(),width:el.width(),outerHeight:el.outerHeight(),outerWidth:el.outerWidth()},factor={y:direction!=="horizontal"?(percent/100):1,x:direction!=="vertical"?(percent/100):1};options.effect="size";options.queue=false;options.complete=done;if(mode!=="effect"){options.origin=origin||["middle","center"];options.restore=true;}
options.from=o.from||(mode==="show"?{height:0,width:0,outerHeight:0,outerWidth:0}:original);options.to={height:original.height*factor.y,width:original.width*factor.x,outerHeight:original.outerHeight*factor.y,outerWidth:original.outerWidth*factor.x};if(options.fade){if(mode==="show"){options.from.opacity=0;options.to.opacity=1;}
if(mode==="hide"){options.from.opacity=1;options.to.opacity=0;}}
el.effect(options);};$.effects.effect.size=function(o,done){var original,baseline,factor,el=$(this),props0=["position","top","bottom","left","right","width","height","overflow","opacity"],props1=["position","top","bottom","left","right","overflow","opacity"],props2=["width","height","overflow"],cProps=["fontSize"],vProps=["borderTopWidth","borderBottomWidth","paddingTop","paddingBottom"],hProps=["borderLeftWidth","borderRightWidth","paddingLeft","paddingRight"],mode=$.effects.setMode(el,o.mode||"effect"),restore=o.restore||mode!=="effect",scale=o.scale||"both",origin=o.origin||["middle","center"],position=el.css("position"),props=restore?props0:props1,zero={height:0,width:0,outerHeight:0,outerWidth:0};if(mode==="show"){el.show();}
original={height:el.height(),width:el.width(),outerHeight:el.outerHeight(),outerWidth:el.outerWidth()};if(o.mode==="toggle"&&mode==="show"){el.from=o.to||zero;el.to=o.from||original;}else{el.from=o.from||(mode==="show"?zero:original);el.to=o.to||(mode==="hide"?zero:original);}
factor={from:{y:el.from.height/original.height,x:el.from.width/original.width},to:{y:el.to.height/original.height,x:el.to.width/original.width}};if(scale==="box"||scale==="both"){if(factor.from.y!==factor.to.y){props=props.concat(vProps);el.from=$.effects.setTransition(el,vProps,factor.from.y,el.from);el.to=$.effects.setTransition(el,vProps,factor.to.y,el.to);}
if(factor.from.x!==factor.to.x){props=props.concat(hProps);el.from=$.effects.setTransition(el,hProps,factor.from.x,el.from);el.to=$.effects.setTransition(el,hProps,factor.to.x,el.to);}}
if(scale==="content"||scale==="both"){if(factor.from.y!==factor.to.y){props=props.concat(cProps).concat(props2);el.from=$.effects.setTransition(el,cProps,factor.from.y,el.from);el.to=$.effects.setTransition(el,cProps,factor.to.y,el.to);}}
$.effects.save(el,props);el.show();$.effects.createWrapper(el);el.css("overflow","hidden").css(el.from);if(origin){baseline=$.effects.getBaseline(origin,original);el.from.top=(original.outerHeight-el.outerHeight())*baseline.y;el.from.left=(original.outerWidth-el.outerWidth())*baseline.x;el.to.top=(original.outerHeight-el.to.outerHeight)*baseline.y;el.to.left=(original.outerWidth-el.to.outerWidth)*baseline.x;}
el.css(el.from);if(scale==="content"||scale==="both"){vProps=vProps.concat(["marginTop","marginBottom"]).concat(cProps);hProps=hProps.concat(["marginLeft","marginRight"]);props2=props0.concat(vProps).concat(hProps);el.find("*[width]").each(function(){var child=$(this),c_original={height:child.height(),width:child.width(),outerHeight:child.outerHeight(),outerWidth:child.outerWidth()};if(restore){$.effects.save(child,props2);}
child.from={height:c_original.height*factor.from.y,width:c_original.width*factor.from.x,outerHeight:c_original.outerHeight*factor.from.y,outerWidth:c_original.outerWidth*factor.from.x};child.to={height:c_original.height*factor.to.y,width:c_original.width*factor.to.x,outerHeight:c_original.height*factor.to.y,outerWidth:c_original.width*factor.to.x};if(factor.from.y!==factor.to.y){child.from=$.effects.setTransition(child,vProps,factor.from.y,child.from);child.to=$.effects.setTransition(child,vProps,factor.to.y,child.to);}
if(factor.from.x!==factor.to.x){child.from=$.effects.setTransition(child,hProps,factor.from.x,child.from);child.to=$.effects.setTransition(child,hProps,factor.to.x,child.to);}
child.css(child.from);child.animate(child.to,o.duration,o.easing,function(){if(restore){$.effects.restore(child,props2);}});});}
el.animate(el.to,{queue:false,duration:o.duration,easing:o.easing,complete:function(){if(el.to.opacity===0){el.css("opacity",el.from.opacity);}
if(mode==="hide"){el.hide();}
$.effects.restore(el,props);if(!restore){if(position==="static"){el.css({position:"relative",top:el.to.top,left:el.to.left});}else{$.each(["top","left"],function(idx,pos){el.css(pos,function(_,str){var val=parseInt(str,10),toRef=idx?el.to.left:el.to.top;if(str==="auto"){return toRef+"px";}
return val+toRef+"px";});});}}
$.effects.removeWrapper(el);done();}});};})(jQuery);(function($,undefined){$.effects.effect.shake=function(o,done){var el=$(this),props=["position","top","bottom","left","right","height","width"],mode=$.effects.setMode(el,o.mode||"effect"),direction=o.direction||"left",distance=o.distance||20,times=o.times||3,anims=times*2+1,speed=Math.round(o.duration/anims),ref=(direction==="up"||direction==="down")?"top":"left",positiveMotion=(direction==="up"||direction==="left"),animation={},animation1={},animation2={},i,queue=el.queue(),queuelen=queue.length;$.effects.save(el,props);el.show();$.effects.createWrapper(el);animation[ref]=(positiveMotion?"-=":"+=")+distance;animation1[ref]=(positiveMotion?"+=":"-=")+distance*2;animation2[ref]=(positiveMotion?"-=":"+=")+distance*2;el.animate(animation,speed,o.easing);for(i=1;i<times;i++){el.animate(animation1,speed,o.easing).animate(animation2,speed,o.easing);}
el.animate(animation1,speed,o.easing).animate(animation,speed/2,o.easing).queue(function(){if(mode==="hide"){el.hide();}
$.effects.restore(el,props);$.effects.removeWrapper(el);done();});if(queuelen>1){queue.splice.apply(queue,[1,0].concat(queue.splice(queuelen,anims+1)));}
el.dequeue();};})(jQuery);(function($,undefined){$.effects.effect.slide=function(o,done){var el=$(this),props=["position","top","bottom","left","right","width","height"],mode=$.effects.setMode(el,o.mode||"show"),show=mode==="show",direction=o.direction||"left",ref=(direction==="up"||direction==="down")?"top":"left",positiveMotion=(direction==="up"||direction==="left"),distance,animation={};$.effects.save(el,props);el.show();distance=o.distance||el[ref==="top"?"outerHeight":"outerWidth"](true);$.effects.createWrapper(el).css({overflow:"hidden"});if(show){el.css(ref,positiveMotion?(isNaN(distance)?"-"+distance:-distance):distance);}
animation[ref]=(show?(positiveMotion?"+=":"-="):(positiveMotion?"-=":"+="))+
distance;el.animate(animation,{queue:false,duration:o.duration,easing:o.easing,complete:function(){if(mode==="hide"){el.hide();}
$.effects.restore(el,props);$.effects.removeWrapper(el);done();}});};})(jQuery);(function($,undefined){$.effects.effect.transfer=function(o,done){var elem=$(this),target=$(o.to),targetFixed=target.css("position")==="fixed",body=$("body"),fixTop=targetFixed?body.scrollTop():0,fixLeft=targetFixed?body.scrollLeft():0,endPosition=target.offset(),animation={top:endPosition.top-fixTop,left:endPosition.left-fixLeft,height:target.innerHeight(),width:target.innerWidth()},startPosition=elem.offset(),transfer=$("<div class='ui-effects-transfer'></div>").appendTo(document.body).addClass(o.className).css({top:startPosition.top-fixTop,left:startPosition.left-fixLeft,height:elem.innerHeight(),width:elem.innerWidth(),position:targetFixed?"fixed":"absolute"}).animate(animation,o.duration,o.easing,function(){transfer.remove();done();});};})(jQuery);(function($,undefined){$.widget("ui.menu",{version:"1.10.4",defaultElement:"<ul>",delay:300,options:{icons:{submenu:"ui-icon-carat-1-e"},menus:"ul",position:{my:"left top",at:"right top"},role:"menu",blur:null,focus:null,select:null},_create:function(){this.activeMenu=this.element;this.mouseHandled=false;this.element.uniqueId().addClass("ui-menu ui-widget ui-widget-content ui-corner-all").toggleClass("ui-menu-icons",!!this.element.find(".ui-icon").length).attr({role:this.options.role,tabIndex:0}).bind("click"+this.eventNamespace,$.proxy(function(event){if(this.options.disabled){event.preventDefault();}},this));if(this.options.disabled){this.element.addClass("ui-state-disabled").attr("aria-disabled","true");}
this._on({"mousedown .ui-menu-item > a":function(event){event.preventDefault();},"click .ui-state-disabled > a":function(event){event.preventDefault();},"click .ui-menu-item:has(a)":function(event){var target=$(event.target).closest(".ui-menu-item");if(!this.mouseHandled&&target.not(".ui-state-disabled").length){this.select(event);if(!event.isPropagationStopped()){this.mouseHandled=true;}
if(target.has(".ui-menu").length){this.expand(event);}else if(!this.element.is(":focus")&&$(this.document[0].activeElement).closest(".ui-menu").length){this.element.trigger("focus",[true]);if(this.active&&this.active.parents(".ui-menu").length===1){clearTimeout(this.timer);}}}},"mouseenter .ui-menu-item":function(event){var target=$(event.currentTarget);target.siblings().children(".ui-state-active").removeClass("ui-state-active");this.focus(event,target);},mouseleave:"collapseAll","mouseleave .ui-menu":"collapseAll",focus:function(event,keepActiveItem){var item=this.active||this.element.children(".ui-menu-item").eq(0);if(!keepActiveItem){this.focus(event,item);}},blur:function(event){this._delay(function(){if(!$.contains(this.element[0],this.document[0].activeElement)){this.collapseAll(event);}});},keydown:"_keydown"});this.refresh();this._on(this.document,{click:function(event){if(!$(event.target).closest(".ui-menu").length){this.collapseAll(event);}
this.mouseHandled=false;}});},_destroy:function(){this.element.removeAttr("aria-activedescendant").find(".ui-menu").addBack().removeClass("ui-menu ui-widget ui-widget-content ui-corner-all ui-menu-icons").removeAttr("role").removeAttr("tabIndex").removeAttr("aria-labelledby").removeAttr("aria-expanded").removeAttr("aria-hidden").removeAttr("aria-disabled").removeUniqueId().show();this.element.find(".ui-menu-item").removeClass("ui-menu-item").removeAttr("role").removeAttr("aria-disabled").children("a").removeUniqueId().removeClass("ui-corner-all ui-state-hover").removeAttr("tabIndex").removeAttr("role").removeAttr("aria-haspopup").children().each(function(){var elem=$(this);if(elem.data("ui-menu-submenu-carat")){elem.remove();}});this.element.find(".ui-menu-divider").removeClass("ui-menu-divider ui-widget-content");},_keydown:function(event){var match,prev,character,skip,regex,preventDefault=true;function escape(value){return value.replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g,"\\$&");}
switch(event.keyCode){case $.ui.keyCode.PAGE_UP:this.previousPage(event);break;case $.ui.keyCode.PAGE_DOWN:this.nextPage(event);break;case $.ui.keyCode.HOME:this._move("first","first",event);break;case $.ui.keyCode.END:this._move("last","last",event);break;case $.ui.keyCode.UP:this.previous(event);break;case $.ui.keyCode.DOWN:this.next(event);break;case $.ui.keyCode.LEFT:this.collapse(event);break;case $.ui.keyCode.RIGHT:if(this.active&&!this.active.is(".ui-state-disabled")){this.expand(event);}
break;case $.ui.keyCode.ENTER:case $.ui.keyCode.SPACE:this._activate(event);break;case $.ui.keyCode.ESCAPE:this.collapse(event);break;default:preventDefault=false;prev=this.previousFilter||"";character=String.fromCharCode(event.keyCode);skip=false;clearTimeout(this.filterTimer);if(character===prev){skip=true;}else{character=prev+character;}
regex=new RegExp("^"+escape(character),"i");match=this.activeMenu.children(".ui-menu-item").filter(function(){return regex.test($(this).children("a").text());});match=skip&&match.index(this.active.next())!==-1?this.active.nextAll(".ui-menu-item"):match;if(!match.length){character=String.fromCharCode(event.keyCode);regex=new RegExp("^"+escape(character),"i");match=this.activeMenu.children(".ui-menu-item").filter(function(){return regex.test($(this).children("a").text());});}
if(match.length){this.focus(event,match);if(match.length>1){this.previousFilter=character;this.filterTimer=this._delay(function(){delete this.previousFilter;},1000);}else{delete this.previousFilter;}}else{delete this.previousFilter;}}
if(preventDefault){event.preventDefault();}},_activate:function(event){if(!this.active.is(".ui-state-disabled")){if(this.active.children("a[aria-haspopup='true']").length){this.expand(event);}else{this.select(event);}}},refresh:function(){var menus,icon=this.options.icons.submenu,submenus=this.element.find(this.options.menus);this.element.toggleClass("ui-menu-icons",!!this.element.find(".ui-icon").length);submenus.filter(":not(.ui-menu)").addClass("ui-menu ui-widget ui-widget-content ui-corner-all").hide().attr({role:this.options.role,"aria-hidden":"true","aria-expanded":"false"}).each(function(){var menu=$(this),item=menu.prev("a"),submenuCarat=$("<span>").addClass("ui-menu-icon ui-icon "+icon).data("ui-menu-submenu-carat",true);item.attr("aria-haspopup","true").prepend(submenuCarat);menu.attr("aria-labelledby",item.attr("id"));});menus=submenus.add(this.element);menus.children(":not(.ui-menu-item):has(a)").addClass("ui-menu-item").attr("role","presentation").children("a").uniqueId().addClass("ui-corner-all").attr({tabIndex:-1,role:this._itemRole()});menus.children(":not(.ui-menu-item)").each(function(){var item=$(this);if(!/[^\-\u2014\u2013\s]/.test(item.text())){item.addClass("ui-widget-content ui-menu-divider");}});menus.children(".ui-state-disabled").attr("aria-disabled","true");if(this.active&&!$.contains(this.element[0],this.active[0])){this.blur();}},_itemRole:function(){return{menu:"menuitem",listbox:"option"}[this.options.role];},_setOption:function(key,value){if(key==="icons"){this.element.find(".ui-menu-icon").removeClass(this.options.icons.submenu).addClass(value.submenu);}
this._super(key,value);},focus:function(event,item){var nested,focused;this.blur(event,event&&event.type==="focus");this._scrollIntoView(item);this.active=item.first();focused=this.active.children("a").addClass("ui-state-focus");if(this.options.role){this.element.attr("aria-activedescendant",focused.attr("id"));}
this.active.parent().closest(".ui-menu-item").children("a:first").addClass("ui-state-active");if(event&&event.type==="keydown"){this._close();}else{this.timer=this._delay(function(){this._close();},this.delay);}
nested=item.children(".ui-menu");if(nested.length&&event&&(/^mouse/.test(event.type))){this._startOpening(nested);}
this.activeMenu=item.parent();this._trigger("focus",event,{item:item});},_scrollIntoView:function(item){var borderTop,paddingTop,offset,scroll,elementHeight,itemHeight;if(this._hasScroll()){borderTop=parseFloat($.css(this.activeMenu[0],"borderTopWidth"))||0;paddingTop=parseFloat($.css(this.activeMenu[0],"paddingTop"))||0;offset=item.offset().top-this.activeMenu.offset().top-borderTop-paddingTop;scroll=this.activeMenu.scrollTop();elementHeight=this.activeMenu.height();itemHeight=item.height();if(offset<0){this.activeMenu.scrollTop(scroll+offset);}else if(offset+itemHeight>elementHeight){this.activeMenu.scrollTop(scroll+offset-elementHeight+itemHeight);}}},blur:function(event,fromFocus){if(!fromFocus){clearTimeout(this.timer);}
if(!this.active){return;}
this.active.children("a").removeClass("ui-state-focus");this.active=null;this._trigger("blur",event,{item:this.active});},_startOpening:function(submenu){clearTimeout(this.timer);if(submenu.attr("aria-hidden")!=="true"){return;}
this.timer=this._delay(function(){this._close();this._open(submenu);},this.delay);},_open:function(submenu){var position=$.extend({of:this.active},this.options.position);clearTimeout(this.timer);this.element.find(".ui-menu").not(submenu.parents(".ui-menu")).hide().attr("aria-hidden","true");submenu.show().removeAttr("aria-hidden").attr("aria-expanded","true").position(position);},collapseAll:function(event,all){clearTimeout(this.timer);this.timer=this._delay(function(){var currentMenu=all?this.element:$(event&&event.target).closest(this.element.find(".ui-menu"));if(!currentMenu.length){currentMenu=this.element;}
this._close(currentMenu);this.blur(event);this.activeMenu=currentMenu;},this.delay);},_close:function(startMenu){if(!startMenu){startMenu=this.active?this.active.parent():this.element;}
startMenu.find(".ui-menu").hide().attr("aria-hidden","true").attr("aria-expanded","false").end().find("a.ui-state-active").removeClass("ui-state-active");},collapse:function(event){var newItem=this.active&&this.active.parent().closest(".ui-menu-item",this.element);if(newItem&&newItem.length){this._close();this.focus(event,newItem);}},expand:function(event){var newItem=this.active&&this.active.children(".ui-menu ").children(".ui-menu-item").first();if(newItem&&newItem.length){this._open(newItem.parent());this._delay(function(){this.focus(event,newItem);});}},next:function(event){this._move("next","first",event);},previous:function(event){this._move("prev","last",event);},isFirstItem:function(){return this.active&&!this.active.prevAll(".ui-menu-item").length;},isLastItem:function(){return this.active&&!this.active.nextAll(".ui-menu-item").length;},_move:function(direction,filter,event){var next;if(this.active){if(direction==="first"||direction==="last"){next=this.active
[direction==="first"?"prevAll":"nextAll"](".ui-menu-item").eq(-1);}else{next=this.active
[direction+"All"](".ui-menu-item").eq(0);}}
if(!next||!next.length||!this.active){next=this.activeMenu.children(".ui-menu-item")[filter]();}
this.focus(event,next);},nextPage:function(event){var item,base,height;if(!this.active){this.next(event);return;}
if(this.isLastItem()){return;}
if(this._hasScroll()){base=this.active.offset().top;height=this.element.height();this.active.nextAll(".ui-menu-item").each(function(){item=$(this);return item.offset().top-base-height<0;});this.focus(event,item);}else{this.focus(event,this.activeMenu.children(".ui-menu-item")
[!this.active?"first":"last"]());}},previousPage:function(event){var item,base,height;if(!this.active){this.next(event);return;}
if(this.isFirstItem()){return;}
if(this._hasScroll()){base=this.active.offset().top;height=this.element.height();this.active.prevAll(".ui-menu-item").each(function(){item=$(this);return item.offset().top-base+height>0;});this.focus(event,item);}else{this.focus(event,this.activeMenu.children(".ui-menu-item").first());}},_hasScroll:function(){return this.element.outerHeight()<this.element.prop("scrollHeight");},select:function(event){this.active=this.active||$(event.target).closest(".ui-menu-item");var ui={item:this.active};if(!this.active.has(".ui-menu").length){this.collapseAll(event,true);}
this._trigger("select",event,ui);}});}(jQuery));(function($,undefined){$.widget("ui.progressbar",{version:"1.10.4",options:{max:100,value:0,change:null,complete:null},min:0,_create:function(){this.oldValue=this.options.value=this._constrainedValue();this.element.addClass("ui-progressbar ui-widget ui-widget-content ui-corner-all").attr({role:"progressbar","aria-valuemin":this.min});this.valueDiv=$("<div class='ui-progressbar-value ui-widget-header ui-corner-left'></div>").appendTo(this.element);this._refreshValue();},_destroy:function(){this.element.removeClass("ui-progressbar ui-widget ui-widget-content ui-corner-all").removeAttr("role").removeAttr("aria-valuemin").removeAttr("aria-valuemax").removeAttr("aria-valuenow");this.valueDiv.remove();},value:function(newValue){if(newValue===undefined){return this.options.value;}
this.options.value=this._constrainedValue(newValue);this._refreshValue();},_constrainedValue:function(newValue){if(newValue===undefined){newValue=this.options.value;}
this.indeterminate=newValue===false;if(typeof newValue!=="number"){newValue=0;}
return this.indeterminate?false:Math.min(this.options.max,Math.max(this.min,newValue));},_setOptions:function(options){var value=options.value;delete options.value;this._super(options);this.options.value=this._constrainedValue(value);this._refreshValue();},_setOption:function(key,value){if(key==="max"){value=Math.max(this.min,value);}
this._super(key,value);},_percentage:function(){return this.indeterminate?100:100*(this.options.value-this.min)/(this.options.max-this.min);},_refreshValue:function(){var value=this.options.value,percentage=this._percentage();this.valueDiv.toggle(this.indeterminate||value>this.min).toggleClass("ui-corner-right",value===this.options.max).width(percentage.toFixed(0)+"%");this.element.toggleClass("ui-progressbar-indeterminate",this.indeterminate);if(this.indeterminate){this.element.removeAttr("aria-valuenow");if(!this.overlayDiv){this.overlayDiv=$("<div class='ui-progressbar-overlay'></div>").appendTo(this.valueDiv);}}else{this.element.attr({"aria-valuemax":this.options.max,"aria-valuenow":value});if(this.overlayDiv){this.overlayDiv.remove();this.overlayDiv=null;}}
if(this.oldValue!==value){this.oldValue=value;this._trigger("change");}
if(value===this.options.max){this._trigger("complete");}}});})(jQuery);(function($,undefined){function num(v){return parseInt(v,10)||0;}
function isNumber(value){return!isNaN(parseInt(value,10));}
$.widget("ui.resizable",$.ui.mouse,{version:"1.10.4",widgetEventPrefix:"resize",options:{alsoResize:false,animate:false,animateDuration:"slow",animateEasing:"swing",aspectRatio:false,autoHide:false,containment:false,ghost:false,grid:false,handles:"e,s,se",helper:false,maxHeight:null,maxWidth:null,minHeight:10,minWidth:10,zIndex:90,resize:null,start:null,stop:null},_create:function(){var n,i,handle,axis,hname,that=this,o=this.options;this.element.addClass("ui-resizable");$.extend(this,{_aspectRatio:!!(o.aspectRatio),aspectRatio:o.aspectRatio,originalElement:this.element,_proportionallyResizeElements:[],_helper:o.helper||o.ghost||o.animate?o.helper||"ui-resizable-helper":null});if(this.element[0].nodeName.match(/canvas|textarea|input|select|button|img/i)){this.element.wrap($("<div class='ui-wrapper' style='overflow: hidden;'></div>").css({position:this.element.css("position"),width:this.element.outerWidth(),height:this.element.outerHeight(),top:this.element.css("top"),left:this.element.css("left")}));this.element=this.element.parent().data("ui-resizable",this.element.data("ui-resizable"));this.elementIsWrapper=true;this.element.css({marginLeft:this.originalElement.css("marginLeft"),marginTop:this.originalElement.css("marginTop"),marginRight:this.originalElement.css("marginRight"),marginBottom:this.originalElement.css("marginBottom")});this.originalElement.css({marginLeft:0,marginTop:0,marginRight:0,marginBottom:0});this.originalResizeStyle=this.originalElement.css("resize");this.originalElement.css("resize","none");this._proportionallyResizeElements.push(this.originalElement.css({position:"static",zoom:1,display:"block"}));this.originalElement.css({margin:this.originalElement.css("margin")});this._proportionallyResize();}
this.handles=o.handles||(!$(".ui-resizable-handle",this.element).length?"e,s,se":{n:".ui-resizable-n",e:".ui-resizable-e",s:".ui-resizable-s",w:".ui-resizable-w",se:".ui-resizable-se",sw:".ui-resizable-sw",ne:".ui-resizable-ne",nw:".ui-resizable-nw"});if(this.handles.constructor===String){if(this.handles==="all"){this.handles="n,e,s,w,se,sw,ne,nw";}
n=this.handles.split(",");this.handles={};for(i=0;i<n.length;i++){handle=$.trim(n[i]);hname="ui-resizable-"+handle;axis=$("<div class='ui-resizable-handle "+hname+"'></div>");axis.css({zIndex:o.zIndex});if("se"===handle){axis.addClass("ui-icon ui-icon-gripsmall-diagonal-se");}
this.handles[handle]=".ui-resizable-"+handle;this.element.append(axis);}}
this._renderAxis=function(target){var i,axis,padPos,padWrapper;target=target||this.element;for(i in this.handles){if(this.handles[i].constructor===String){this.handles[i]=$(this.handles[i],this.element).show();}
if(this.elementIsWrapper&&this.originalElement[0].nodeName.match(/textarea|input|select|button/i)){axis=$(this.handles[i],this.element);padWrapper=/sw|ne|nw|se|n|s/.test(i)?axis.outerHeight():axis.outerWidth();padPos=["padding",/ne|nw|n/.test(i)?"Top":/se|sw|s/.test(i)?"Bottom":/^e$/.test(i)?"Right":"Left"].join("");target.css(padPos,padWrapper);this._proportionallyResize();}
if(!$(this.handles[i]).length){continue;}}};this._renderAxis(this.element);this._handles=$(".ui-resizable-handle",this.element).disableSelection();this._handles.mouseover(function(){if(!that.resizing){if(this.className){axis=this.className.match(/ui-resizable-(se|sw|ne|nw|n|e|s|w)/i);}
that.axis=axis&&axis[1]?axis[1]:"se";}});if(o.autoHide){this._handles.hide();$(this.element).addClass("ui-resizable-autohide").mouseenter(function(){if(o.disabled){return;}
$(this).removeClass("ui-resizable-autohide");that._handles.show();}).mouseleave(function(){if(o.disabled){return;}
if(!that.resizing){$(this).addClass("ui-resizable-autohide");that._handles.hide();}});}
this._mouseInit();},_destroy:function(){this._mouseDestroy();var wrapper,_destroy=function(exp){$(exp).removeClass("ui-resizable ui-resizable-disabled ui-resizable-resizing").removeData("resizable").removeData("ui-resizable").unbind(".resizable").find(".ui-resizable-handle").remove();};if(this.elementIsWrapper){_destroy(this.element);wrapper=this.element;this.originalElement.css({position:wrapper.css("position"),width:wrapper.outerWidth(),height:wrapper.outerHeight(),top:wrapper.css("top"),left:wrapper.css("left")}).insertAfter(wrapper);wrapper.remove();}
this.originalElement.css("resize",this.originalResizeStyle);_destroy(this.originalElement);return this;},_mouseCapture:function(event){var i,handle,capture=false;for(i in this.handles){handle=$(this.handles[i])[0];if(handle===event.target||$.contains(handle,event.target)){capture=true;}}
return!this.options.disabled&&capture;},_mouseStart:function(event){var curleft,curtop,cursor,o=this.options,iniPos=this.element.position(),el=this.element;this.resizing=true;if((/absolute/).test(el.css("position"))){el.css({position:"absolute",top:el.css("top"),left:el.css("left")});}else if(el.is(".ui-draggable")){el.css({position:"absolute",top:iniPos.top,left:iniPos.left});}
this._renderProxy();curleft=num(this.helper.css("left"));curtop=num(this.helper.css("top"));if(o.containment){curleft+=$(o.containment).scrollLeft()||0;curtop+=$(o.containment).scrollTop()||0;}
this.offset=this.helper.offset();this.position={left:curleft,top:curtop};this.size=this._helper?{width:this.helper.width(),height:this.helper.height()}:{width:el.width(),height:el.height()};this.originalSize=this._helper?{width:el.outerWidth(),height:el.outerHeight()}:{width:el.width(),height:el.height()};this.originalPosition={left:curleft,top:curtop};this.sizeDiff={width:el.outerWidth()-el.width(),height:el.outerHeight()-el.height()};this.originalMousePosition={left:event.pageX,top:event.pageY};this.aspectRatio=(typeof o.aspectRatio==="number")?o.aspectRatio:((this.originalSize.width/this.originalSize.height)||1);cursor=$(".ui-resizable-"+this.axis).css("cursor");$("body").css("cursor",cursor==="auto"?this.axis+"-resize":cursor);el.addClass("ui-resizable-resizing");this._propagate("start",event);return true;},_mouseDrag:function(event){var data,el=this.helper,props={},smp=this.originalMousePosition,a=this.axis,prevTop=this.position.top,prevLeft=this.position.left,prevWidth=this.size.width,prevHeight=this.size.height,dx=(event.pageX-smp.left)||0,dy=(event.pageY-smp.top)||0,trigger=this._change[a];if(!trigger){return false;}
data=trigger.apply(this,[event,dx,dy]);this._updateVirtualBoundaries(event.shiftKey);if(this._aspectRatio||event.shiftKey){data=this._updateRatio(data,event);}
data=this._respectSize(data,event);this._updateCache(data);this._propagate("resize",event);if(this.position.top!==prevTop){props.top=this.position.top+"px";}
if(this.position.left!==prevLeft){props.left=this.position.left+"px";}
if(this.size.width!==prevWidth){props.width=this.size.width+"px";}
if(this.size.height!==prevHeight){props.height=this.size.height+"px";}
el.css(props);if(!this._helper&&this._proportionallyResizeElements.length){this._proportionallyResize();}
if(!$.isEmptyObject(props)){this._trigger("resize",event,this.ui());}
return false;},_mouseStop:function(event){this.resizing=false;var pr,ista,soffseth,soffsetw,s,left,top,o=this.options,that=this;if(this._helper){pr=this._proportionallyResizeElements;ista=pr.length&&(/textarea/i).test(pr[0].nodeName);soffseth=ista&&$.ui.hasScroll(pr[0],"left")?0:that.sizeDiff.height;soffsetw=ista?0:that.sizeDiff.width;s={width:(that.helper.width()-soffsetw),height:(that.helper.height()-soffseth)};left=(parseInt(that.element.css("left"),10)+(that.position.left-that.originalPosition.left))||null;top=(parseInt(that.element.css("top"),10)+(that.position.top-that.originalPosition.top))||null;if(!o.animate){this.element.css($.extend(s,{top:top,left:left}));}
that.helper.height(that.size.height);that.helper.width(that.size.width);if(this._helper&&!o.animate){this._proportionallyResize();}}
$("body").css("cursor","auto");this.element.removeClass("ui-resizable-resizing");this._propagate("stop",event);if(this._helper){this.helper.remove();}
return false;},_updateVirtualBoundaries:function(forceAspectRatio){var pMinWidth,pMaxWidth,pMinHeight,pMaxHeight,b,o=this.options;b={minWidth:isNumber(o.minWidth)?o.minWidth:0,maxWidth:isNumber(o.maxWidth)?o.maxWidth:Infinity,minHeight:isNumber(o.minHeight)?o.minHeight:0,maxHeight:isNumber(o.maxHeight)?o.maxHeight:Infinity};if(this._aspectRatio||forceAspectRatio){pMinWidth=b.minHeight*this.aspectRatio;pMinHeight=b.minWidth/this.aspectRatio;pMaxWidth=b.maxHeight*this.aspectRatio;pMaxHeight=b.maxWidth/this.aspectRatio;if(pMinWidth>b.minWidth){b.minWidth=pMinWidth;}
if(pMinHeight>b.minHeight){b.minHeight=pMinHeight;}
if(pMaxWidth<b.maxWidth){b.maxWidth=pMaxWidth;}
if(pMaxHeight<b.maxHeight){b.maxHeight=pMaxHeight;}}
this._vBoundaries=b;},_updateCache:function(data){this.offset=this.helper.offset();if(isNumber(data.left)){this.position.left=data.left;}
if(isNumber(data.top)){this.position.top=data.top;}
if(isNumber(data.height)){this.size.height=data.height;}
if(isNumber(data.width)){this.size.width=data.width;}},_updateRatio:function(data){var cpos=this.position,csize=this.size,a=this.axis;if(isNumber(data.height)){data.width=(data.height*this.aspectRatio);}else if(isNumber(data.width)){data.height=(data.width/this.aspectRatio);}
if(a==="sw"){data.left=cpos.left+(csize.width-data.width);data.top=null;}
if(a==="nw"){data.top=cpos.top+(csize.height-data.height);data.left=cpos.left+(csize.width-data.width);}
return data;},_respectSize:function(data){var o=this._vBoundaries,a=this.axis,ismaxw=isNumber(data.width)&&o.maxWidth&&(o.maxWidth<data.width),ismaxh=isNumber(data.height)&&o.maxHeight&&(o.maxHeight<data.height),isminw=isNumber(data.width)&&o.minWidth&&(o.minWidth>data.width),isminh=isNumber(data.height)&&o.minHeight&&(o.minHeight>data.height),dw=this.originalPosition.left+this.originalSize.width,dh=this.position.top+this.size.height,cw=/sw|nw|w/.test(a),ch=/nw|ne|n/.test(a);if(isminw){data.width=o.minWidth;}
if(isminh){data.height=o.minHeight;}
if(ismaxw){data.width=o.maxWidth;}
if(ismaxh){data.height=o.maxHeight;}
if(isminw&&cw){data.left=dw-o.minWidth;}
if(ismaxw&&cw){data.left=dw-o.maxWidth;}
if(isminh&&ch){data.top=dh-o.minHeight;}
if(ismaxh&&ch){data.top=dh-o.maxHeight;}
if(!data.width&&!data.height&&!data.left&&data.top){data.top=null;}else if(!data.width&&!data.height&&!data.top&&data.left){data.left=null;}
return data;},_proportionallyResize:function(){if(!this._proportionallyResizeElements.length){return;}
var i,j,borders,paddings,prel,element=this.helper||this.element;for(i=0;i<this._proportionallyResizeElements.length;i++){prel=this._proportionallyResizeElements[i];if(!this.borderDif){this.borderDif=[];borders=[prel.css("borderTopWidth"),prel.css("borderRightWidth"),prel.css("borderBottomWidth"),prel.css("borderLeftWidth")];paddings=[prel.css("paddingTop"),prel.css("paddingRight"),prel.css("paddingBottom"),prel.css("paddingLeft")];for(j=0;j<borders.length;j++){this.borderDif[j]=(parseInt(borders[j],10)||0)+(parseInt(paddings[j],10)||0);}}
prel.css({height:(element.height()-this.borderDif[0]-this.borderDif[2])||0,width:(element.width()-this.borderDif[1]-this.borderDif[3])||0});}},_renderProxy:function(){var el=this.element,o=this.options;this.elementOffset=el.offset();if(this._helper){this.helper=this.helper||$("<div style='overflow:hidden;'></div>");this.helper.addClass(this._helper).css({width:this.element.outerWidth()-1,height:this.element.outerHeight()-1,position:"absolute",left:this.elementOffset.left+"px",top:this.elementOffset.top+"px",zIndex:++o.zIndex});this.helper.appendTo("body").disableSelection();}else{this.helper=this.element;}},_change:{e:function(event,dx){return{width:this.originalSize.width+dx};},w:function(event,dx){var cs=this.originalSize,sp=this.originalPosition;return{left:sp.left+dx,width:cs.width-dx};},n:function(event,dx,dy){var cs=this.originalSize,sp=this.originalPosition;return{top:sp.top+dy,height:cs.height-dy};},s:function(event,dx,dy){return{height:this.originalSize.height+dy};},se:function(event,dx,dy){return $.extend(this._change.s.apply(this,arguments),this._change.e.apply(this,[event,dx,dy]));},sw:function(event,dx,dy){return $.extend(this._change.s.apply(this,arguments),this._change.w.apply(this,[event,dx,dy]));},ne:function(event,dx,dy){return $.extend(this._change.n.apply(this,arguments),this._change.e.apply(this,[event,dx,dy]));},nw:function(event,dx,dy){return $.extend(this._change.n.apply(this,arguments),this._change.w.apply(this,[event,dx,dy]));}},_propagate:function(n,event){$.ui.plugin.call(this,n,[event,this.ui()]);(n!=="resize"&&this._trigger(n,event,this.ui()));},plugins:{},ui:function(){return{originalElement:this.originalElement,element:this.element,helper:this.helper,position:this.position,size:this.size,originalSize:this.originalSize,originalPosition:this.originalPosition};}});$.ui.plugin.add("resizable","animate",{stop:function(event){var that=$(this).data("ui-resizable"),o=that.options,pr=that._proportionallyResizeElements,ista=pr.length&&(/textarea/i).test(pr[0].nodeName),soffseth=ista&&$.ui.hasScroll(pr[0],"left")?0:that.sizeDiff.height,soffsetw=ista?0:that.sizeDiff.width,style={width:(that.size.width-soffsetw),height:(that.size.height-soffseth)},left=(parseInt(that.element.css("left"),10)+(that.position.left-that.originalPosition.left))||null,top=(parseInt(that.element.css("top"),10)+(that.position.top-that.originalPosition.top))||null;that.element.animate($.extend(style,top&&left?{top:top,left:left}:{}),{duration:o.animateDuration,easing:o.animateEasing,step:function(){var data={width:parseInt(that.element.css("width"),10),height:parseInt(that.element.css("height"),10),top:parseInt(that.element.css("top"),10),left:parseInt(that.element.css("left"),10)};if(pr&&pr.length){$(pr[0]).css({width:data.width,height:data.height});}
that._updateCache(data);that._propagate("resize",event);}});}});$.ui.plugin.add("resizable","containment",{start:function(){var element,p,co,ch,cw,width,height,that=$(this).data("ui-resizable"),o=that.options,el=that.element,oc=o.containment,ce=(oc instanceof $)?oc.get(0):(/parent/.test(oc))?el.parent().get(0):oc;if(!ce){return;}
that.containerElement=$(ce);if(/document/.test(oc)||oc===document){that.containerOffset={left:0,top:0};that.containerPosition={left:0,top:0};that.parentData={element:$(document),left:0,top:0,width:$(document).width(),height:$(document).height()||document.body.parentNode.scrollHeight};}
else{element=$(ce);p=[];$(["Top","Right","Left","Bottom"]).each(function(i,name){p[i]=num(element.css("padding"+name));});that.containerOffset=element.offset();that.containerPosition=element.position();that.containerSize={height:(element.innerHeight()-p[3]),width:(element.innerWidth()-p[1])};co=that.containerOffset;ch=that.containerSize.height;cw=that.containerSize.width;width=($.ui.hasScroll(ce,"left")?ce.scrollWidth:cw);height=($.ui.hasScroll(ce)?ce.scrollHeight:ch);that.parentData={element:ce,left:co.left,top:co.top,width:width,height:height};}},resize:function(event){var woset,hoset,isParent,isOffsetRelative,that=$(this).data("ui-resizable"),o=that.options,co=that.containerOffset,cp=that.position,pRatio=that._aspectRatio||event.shiftKey,cop={top:0,left:0},ce=that.containerElement;if(ce[0]!==document&&(/static/).test(ce.css("position"))){cop=co;}
if(cp.left<(that._helper?co.left:0)){that.size.width=that.size.width+(that._helper?(that.position.left-co.left):(that.position.left-cop.left));if(pRatio){that.size.height=that.size.width/that.aspectRatio;}
that.position.left=o.helper?co.left:0;}
if(cp.top<(that._helper?co.top:0)){that.size.height=that.size.height+(that._helper?(that.position.top-co.top):that.position.top);if(pRatio){that.size.width=that.size.height*that.aspectRatio;}
that.position.top=that._helper?co.top:0;}
that.offset.left=that.parentData.left+that.position.left;that.offset.top=that.parentData.top+that.position.top;woset=Math.abs((that._helper?that.offset.left-cop.left:(that.offset.left-cop.left))+that.sizeDiff.width);hoset=Math.abs((that._helper?that.offset.top-cop.top:(that.offset.top-co.top))+that.sizeDiff.height);isParent=that.containerElement.get(0)===that.element.parent().get(0);isOffsetRelative=/relative|absolute/.test(that.containerElement.css("position"));if(isParent&&isOffsetRelative){woset-=Math.abs(that.parentData.left);}
if(woset+that.size.width>=that.parentData.width){that.size.width=that.parentData.width-woset;if(pRatio){that.size.height=that.size.width/that.aspectRatio;}}
if(hoset+that.size.height>=that.parentData.height){that.size.height=that.parentData.height-hoset;if(pRatio){that.size.width=that.size.height*that.aspectRatio;}}},stop:function(){var that=$(this).data("ui-resizable"),o=that.options,co=that.containerOffset,cop=that.containerPosition,ce=that.containerElement,helper=$(that.helper),ho=helper.offset(),w=helper.outerWidth()-that.sizeDiff.width,h=helper.outerHeight()-that.sizeDiff.height;if(that._helper&&!o.animate&&(/relative/).test(ce.css("position"))){$(this).css({left:ho.left-cop.left-co.left,width:w,height:h});}
if(that._helper&&!o.animate&&(/static/).test(ce.css("position"))){$(this).css({left:ho.left-cop.left-co.left,width:w,height:h});}}});$.ui.plugin.add("resizable","alsoResize",{start:function(){var that=$(this).data("ui-resizable"),o=that.options,_store=function(exp){$(exp).each(function(){var el=$(this);el.data("ui-resizable-alsoresize",{width:parseInt(el.width(),10),height:parseInt(el.height(),10),left:parseInt(el.css("left"),10),top:parseInt(el.css("top"),10)});});};if(typeof(o.alsoResize)==="object"&&!o.alsoResize.parentNode){if(o.alsoResize.length){o.alsoResize=o.alsoResize[0];_store(o.alsoResize);}
else{$.each(o.alsoResize,function(exp){_store(exp);});}}else{_store(o.alsoResize);}},resize:function(event,ui){var that=$(this).data("ui-resizable"),o=that.options,os=that.originalSize,op=that.originalPosition,delta={height:(that.size.height-os.height)||0,width:(that.size.width-os.width)||0,top:(that.position.top-op.top)||0,left:(that.position.left-op.left)||0},_alsoResize=function(exp,c){$(exp).each(function(){var el=$(this),start=$(this).data("ui-resizable-alsoresize"),style={},css=c&&c.length?c:el.parents(ui.originalElement[0]).length?["width","height"]:["width","height","top","left"];$.each(css,function(i,prop){var sum=(start[prop]||0)+(delta[prop]||0);if(sum&&sum>=0){style[prop]=sum||null;}});el.css(style);});};if(typeof(o.alsoResize)==="object"&&!o.alsoResize.nodeType){$.each(o.alsoResize,function(exp,c){_alsoResize(exp,c);});}else{_alsoResize(o.alsoResize);}},stop:function(){$(this).removeData("resizable-alsoresize");}});$.ui.plugin.add("resizable","ghost",{start:function(){var that=$(this).data("ui-resizable"),o=that.options,cs=that.size;that.ghost=that.originalElement.clone();that.ghost.css({opacity:0.25,display:"block",position:"relative",height:cs.height,width:cs.width,margin:0,left:0,top:0}).addClass("ui-resizable-ghost").addClass(typeof o.ghost==="string"?o.ghost:"");that.ghost.appendTo(that.helper);},resize:function(){var that=$(this).data("ui-resizable");if(that.ghost){that.ghost.css({position:"relative",height:that.size.height,width:that.size.width});}},stop:function(){var that=$(this).data("ui-resizable");if(that.ghost&&that.helper){that.helper.get(0).removeChild(that.ghost.get(0));}}});$.ui.plugin.add("resizable","grid",{resize:function(){var that=$(this).data("ui-resizable"),o=that.options,cs=that.size,os=that.originalSize,op=that.originalPosition,a=that.axis,grid=typeof o.grid==="number"?[o.grid,o.grid]:o.grid,gridX=(grid[0]||1),gridY=(grid[1]||1),ox=Math.round((cs.width-os.width)/gridX)*gridX,oy=Math.round((cs.height-os.height)/gridY)*gridY,newWidth=os.width+ox,newHeight=os.height+oy,isMaxWidth=o.maxWidth&&(o.maxWidth<newWidth),isMaxHeight=o.maxHeight&&(o.maxHeight<newHeight),isMinWidth=o.minWidth&&(o.minWidth>newWidth),isMinHeight=o.minHeight&&(o.minHeight>newHeight);o.grid=grid;if(isMinWidth){newWidth=newWidth+gridX;}
if(isMinHeight){newHeight=newHeight+gridY;}
if(isMaxWidth){newWidth=newWidth-gridX;}
if(isMaxHeight){newHeight=newHeight-gridY;}
if(/^(se|s|e)$/.test(a)){that.size.width=newWidth;that.size.height=newHeight;}else if(/^(ne)$/.test(a)){that.size.width=newWidth;that.size.height=newHeight;that.position.top=op.top-oy;}else if(/^(sw)$/.test(a)){that.size.width=newWidth;that.size.height=newHeight;that.position.left=op.left-ox;}else{if(newHeight-gridY>0){that.size.height=newHeight;that.position.top=op.top-oy;}else{that.size.height=gridY;that.position.top=op.top+os.height-gridY;}
if(newWidth-gridX>0){that.size.width=newWidth;that.position.left=op.left-ox;}else{that.size.width=gridX;that.position.left=op.left+os.width-gridX;}}}});})(jQuery);(function($,undefined){$.widget("ui.selectable",$.ui.mouse,{version:"1.10.4",options:{appendTo:"body",autoRefresh:true,distance:0,filter:"*",tolerance:"touch",selected:null,selecting:null,start:null,stop:null,unselected:null,unselecting:null},_create:function(){var selectees,that=this;this.element.addClass("ui-selectable");this.dragged=false;this.refresh=function(){selectees=$(that.options.filter,that.element[0]);selectees.addClass("ui-selectee");selectees.each(function(){var $this=$(this),pos=$this.offset();$.data(this,"selectable-item",{element:this,$element:$this,left:pos.left,top:pos.top,right:pos.left+$this.outerWidth(),bottom:pos.top+$this.outerHeight(),startselected:false,selected:$this.hasClass("ui-selected"),selecting:$this.hasClass("ui-selecting"),unselecting:$this.hasClass("ui-unselecting")});});};this.refresh();this.selectees=selectees.addClass("ui-selectee");this._mouseInit();this.helper=$("<div class='ui-selectable-helper'></div>");},_destroy:function(){this.selectees.removeClass("ui-selectee").removeData("selectable-item");this.element.removeClass("ui-selectable ui-selectable-disabled");this._mouseDestroy();},_mouseStart:function(event){var that=this,options=this.options;this.opos=[event.pageX,event.pageY];if(this.options.disabled){return;}
this.selectees=$(options.filter,this.element[0]);this._trigger("start",event);$(options.appendTo).append(this.helper);this.helper.css({"left":event.pageX,"top":event.pageY,"width":0,"height":0});if(options.autoRefresh){this.refresh();}
this.selectees.filter(".ui-selected").each(function(){var selectee=$.data(this,"selectable-item");selectee.startselected=true;if(!event.metaKey&&!event.ctrlKey){selectee.$element.removeClass("ui-selected");selectee.selected=false;selectee.$element.addClass("ui-unselecting");selectee.unselecting=true;that._trigger("unselecting",event,{unselecting:selectee.element});}});$(event.target).parents().addBack().each(function(){var doSelect,selectee=$.data(this,"selectable-item");if(selectee){doSelect=(!event.metaKey&&!event.ctrlKey)||!selectee.$element.hasClass("ui-selected");selectee.$element.removeClass(doSelect?"ui-unselecting":"ui-selected").addClass(doSelect?"ui-selecting":"ui-unselecting");selectee.unselecting=!doSelect;selectee.selecting=doSelect;selectee.selected=doSelect;if(doSelect){that._trigger("selecting",event,{selecting:selectee.element});}else{that._trigger("unselecting",event,{unselecting:selectee.element});}
return false;}});},_mouseDrag:function(event){this.dragged=true;if(this.options.disabled){return;}
var tmp,that=this,options=this.options,x1=this.opos[0],y1=this.opos[1],x2=event.pageX,y2=event.pageY;if(x1>x2){tmp=x2;x2=x1;x1=tmp;}
if(y1>y2){tmp=y2;y2=y1;y1=tmp;}
this.helper.css({left:x1,top:y1,width:x2-x1,height:y2-y1});this.selectees.each(function(){var selectee=$.data(this,"selectable-item"),hit=false;if(!selectee||selectee.element===that.element[0]){return;}
if(options.tolerance==="touch"){hit=(!(selectee.left>x2||selectee.right<x1||selectee.top>y2||selectee.bottom<y1));}else if(options.tolerance==="fit"){hit=(selectee.left>x1&&selectee.right<x2&&selectee.top>y1&&selectee.bottom<y2);}
if(hit){if(selectee.selected){selectee.$element.removeClass("ui-selected");selectee.selected=false;}
if(selectee.unselecting){selectee.$element.removeClass("ui-unselecting");selectee.unselecting=false;}
if(!selectee.selecting){selectee.$element.addClass("ui-selecting");selectee.selecting=true;that._trigger("selecting",event,{selecting:selectee.element});}}else{if(selectee.selecting){if((event.metaKey||event.ctrlKey)&&selectee.startselected){selectee.$element.removeClass("ui-selecting");selectee.selecting=false;selectee.$element.addClass("ui-selected");selectee.selected=true;}else{selectee.$element.removeClass("ui-selecting");selectee.selecting=false;if(selectee.startselected){selectee.$element.addClass("ui-unselecting");selectee.unselecting=true;}
that._trigger("unselecting",event,{unselecting:selectee.element});}}
if(selectee.selected){if(!event.metaKey&&!event.ctrlKey&&!selectee.startselected){selectee.$element.removeClass("ui-selected");selectee.selected=false;selectee.$element.addClass("ui-unselecting");selectee.unselecting=true;that._trigger("unselecting",event,{unselecting:selectee.element});}}}});return false;},_mouseStop:function(event){var that=this;this.dragged=false;$(".ui-unselecting",this.element[0]).each(function(){var selectee=$.data(this,"selectable-item");selectee.$element.removeClass("ui-unselecting");selectee.unselecting=false;selectee.startselected=false;that._trigger("unselected",event,{unselected:selectee.element});});$(".ui-selecting",this.element[0]).each(function(){var selectee=$.data(this,"selectable-item");selectee.$element.removeClass("ui-selecting").addClass("ui-selected");selectee.selecting=false;selectee.selected=true;selectee.startselected=true;that._trigger("selected",event,{selected:selectee.element});});this._trigger("stop",event);this.helper.remove();return false;}});})(jQuery);(function($,undefined){var numPages=5;$.widget("ui.slider",$.ui.mouse,{version:"1.10.4",widgetEventPrefix:"slide",options:{animate:false,distance:0,max:100,min:0,orientation:"horizontal",range:false,step:1,value:0,values:null,change:null,slide:null,start:null,stop:null},_create:function(){this._keySliding=false;this._mouseSliding=false;this._animateOff=true;this._handleIndex=null;this._detectOrientation();this._mouseInit();this.element.addClass("ui-slider"+" ui-slider-"+this.orientation+" ui-widget"+" ui-widget-content"+" ui-corner-all");this._refresh();this._setOption("disabled",this.options.disabled);this._animateOff=false;},_refresh:function(){this._createRange();this._createHandles();this._setupEvents();this._refreshValue();},_createHandles:function(){var i,handleCount,options=this.options,existingHandles=this.element.find(".ui-slider-handle").addClass("ui-state-default ui-corner-all"),handle="<a class='ui-slider-handle ui-state-default ui-corner-all' href='#'></a>",handles=[];handleCount=(options.values&&options.values.length)||1;if(existingHandles.length>handleCount){existingHandles.slice(handleCount).remove();existingHandles=existingHandles.slice(0,handleCount);}
for(i=existingHandles.length;i<handleCount;i++){handles.push(handle);}
this.handles=existingHandles.add($(handles.join("")).appendTo(this.element));this.handle=this.handles.eq(0);this.handles.each(function(i){$(this).data("ui-slider-handle-index",i);});},_createRange:function(){var options=this.options,classes="";if(options.range){if(options.range===true){if(!options.values){options.values=[this._valueMin(),this._valueMin()];}else if(options.values.length&&options.values.length!==2){options.values=[options.values[0],options.values[0]];}else if($.isArray(options.values)){options.values=options.values.slice(0);}}
if(!this.range||!this.range.length){this.range=$("<div></div>").appendTo(this.element);classes="ui-slider-range"+" ui-widget-header ui-corner-all";}else{this.range.removeClass("ui-slider-range-min ui-slider-range-max").css({"left":"","bottom":""});}
this.range.addClass(classes+
((options.range==="min"||options.range==="max")?" ui-slider-range-"+options.range:""));}else{if(this.range){this.range.remove();}
this.range=null;}},_setupEvents:function(){var elements=this.handles.add(this.range).filter("a");this._off(elements);this._on(elements,this._handleEvents);this._hoverable(elements);this._focusable(elements);},_destroy:function(){this.handles.remove();if(this.range){this.range.remove();}
this.element.removeClass("ui-slider"+" ui-slider-horizontal"+" ui-slider-vertical"+" ui-widget"+" ui-widget-content"+" ui-corner-all");this._mouseDestroy();},_mouseCapture:function(event){var position,normValue,distance,closestHandle,index,allowed,offset,mouseOverHandle,that=this,o=this.options;if(o.disabled){return false;}
this.elementSize={width:this.element.outerWidth(),height:this.element.outerHeight()};this.elementOffset=this.element.offset();position={x:event.pageX,y:event.pageY};normValue=this._normValueFromMouse(position);distance=this._valueMax()-this._valueMin()+1;this.handles.each(function(i){var thisDistance=Math.abs(normValue-that.values(i));if((distance>thisDistance)||(distance===thisDistance&&(i===that._lastChangedValue||that.values(i)===o.min))){distance=thisDistance;closestHandle=$(this);index=i;}});allowed=this._start(event,index);if(allowed===false){return false;}
this._mouseSliding=true;this._handleIndex=index;closestHandle.addClass("ui-state-active").focus();offset=closestHandle.offset();mouseOverHandle=!$(event.target).parents().addBack().is(".ui-slider-handle");this._clickOffset=mouseOverHandle?{left:0,top:0}:{left:event.pageX-offset.left-(closestHandle.width()/2),top:event.pageY-offset.top-
(closestHandle.height()/2)-
(parseInt(closestHandle.css("borderTopWidth"),10)||0)-
(parseInt(closestHandle.css("borderBottomWidth"),10)||0)+
(parseInt(closestHandle.css("marginTop"),10)||0)};if(!this.handles.hasClass("ui-state-hover")){this._slide(event,index,normValue);}
this._animateOff=true;return true;},_mouseStart:function(){return true;},_mouseDrag:function(event){var position={x:event.pageX,y:event.pageY},normValue=this._normValueFromMouse(position);this._slide(event,this._handleIndex,normValue);return false;},_mouseStop:function(event){this.handles.removeClass("ui-state-active");this._mouseSliding=false;this._stop(event,this._handleIndex);this._change(event,this._handleIndex);this._handleIndex=null;this._clickOffset=null;this._animateOff=false;return false;},_detectOrientation:function(){this.orientation=(this.options.orientation==="vertical")?"vertical":"horizontal";},_normValueFromMouse:function(position){var pixelTotal,pixelMouse,percentMouse,valueTotal,valueMouse;if(this.orientation==="horizontal"){pixelTotal=this.elementSize.width;pixelMouse=position.x-this.elementOffset.left-(this._clickOffset?this._clickOffset.left:0);}else{pixelTotal=this.elementSize.height;pixelMouse=position.y-this.elementOffset.top-(this._clickOffset?this._clickOffset.top:0);}
percentMouse=(pixelMouse/pixelTotal);if(percentMouse>1){percentMouse=1;}
if(percentMouse<0){percentMouse=0;}
if(this.orientation==="vertical"){percentMouse=1-percentMouse;}
valueTotal=this._valueMax()-this._valueMin();valueMouse=this._valueMin()+percentMouse*valueTotal;return this._trimAlignValue(valueMouse);},_start:function(event,index){var uiHash={handle:this.handles[index],value:this.value()};if(this.options.values&&this.options.values.length){uiHash.value=this.values(index);uiHash.values=this.values();}
return this._trigger("start",event,uiHash);},_slide:function(event,index,newVal){var otherVal,newValues,allowed;if(this.options.values&&this.options.values.length){otherVal=this.values(index?0:1);if((this.options.values.length===2&&this.options.range===true)&&((index===0&&newVal>otherVal)||(index===1&&newVal<otherVal))){newVal=otherVal;}
if(newVal!==this.values(index)){newValues=this.values();newValues[index]=newVal;allowed=this._trigger("slide",event,{handle:this.handles[index],value:newVal,values:newValues});otherVal=this.values(index?0:1);if(allowed!==false){this.values(index,newVal);}}}else{if(newVal!==this.value()){allowed=this._trigger("slide",event,{handle:this.handles[index],value:newVal});if(allowed!==false){this.value(newVal);}}}},_stop:function(event,index){var uiHash={handle:this.handles[index],value:this.value()};if(this.options.values&&this.options.values.length){uiHash.value=this.values(index);uiHash.values=this.values();}
this._trigger("stop",event,uiHash);},_change:function(event,index){if(!this._keySliding&&!this._mouseSliding){var uiHash={handle:this.handles[index],value:this.value()};if(this.options.values&&this.options.values.length){uiHash.value=this.values(index);uiHash.values=this.values();}
this._lastChangedValue=index;this._trigger("change",event,uiHash);}},value:function(newValue){if(arguments.length){this.options.value=this._trimAlignValue(newValue);this._refreshValue();this._change(null,0);return;}
return this._value();},values:function(index,newValue){var vals,newValues,i;if(arguments.length>1){this.options.values[index]=this._trimAlignValue(newValue);this._refreshValue();this._change(null,index);return;}
if(arguments.length){if($.isArray(arguments[0])){vals=this.options.values;newValues=arguments[0];for(i=0;i<vals.length;i+=1){vals[i]=this._trimAlignValue(newValues[i]);this._change(null,i);}
this._refreshValue();}else{if(this.options.values&&this.options.values.length){return this._values(index);}else{return this.value();}}}else{return this._values();}},_setOption:function(key,value){var i,valsLength=0;if(key==="range"&&this.options.range===true){if(value==="min"){this.options.value=this._values(0);this.options.values=null;}else if(value==="max"){this.options.value=this._values(this.options.values.length-1);this.options.values=null;}}
if($.isArray(this.options.values)){valsLength=this.options.values.length;}
$.Widget.prototype._setOption.apply(this,arguments);switch(key){case"orientation":this._detectOrientation();this.element.removeClass("ui-slider-horizontal ui-slider-vertical").addClass("ui-slider-"+this.orientation);this._refreshValue();break;case"value":this._animateOff=true;this._refreshValue();this._change(null,0);this._animateOff=false;break;case"values":this._animateOff=true;this._refreshValue();for(i=0;i<valsLength;i+=1){this._change(null,i);}
this._animateOff=false;break;case"min":case"max":this._animateOff=true;this._refreshValue();this._animateOff=false;break;case"range":this._animateOff=true;this._refresh();this._animateOff=false;break;}},_value:function(){var val=this.options.value;val=this._trimAlignValue(val);return val;},_values:function(index){var val,vals,i;if(arguments.length){val=this.options.values[index];val=this._trimAlignValue(val);return val;}else if(this.options.values&&this.options.values.length){vals=this.options.values.slice();for(i=0;i<vals.length;i+=1){vals[i]=this._trimAlignValue(vals[i]);}
return vals;}else{return[];}},_trimAlignValue:function(val){if(val<=this._valueMin()){return this._valueMin();}
if(val>=this._valueMax()){return this._valueMax();}
var step=(this.options.step>0)?this.options.step:1,valModStep=(val-this._valueMin())%step,alignValue=val-valModStep;if(Math.abs(valModStep)*2>=step){alignValue+=(valModStep>0)?step:(-step);}
return parseFloat(alignValue.toFixed(5));},_valueMin:function(){return this.options.min;},_valueMax:function(){return this.options.max;},_refreshValue:function(){var lastValPercent,valPercent,value,valueMin,valueMax,oRange=this.options.range,o=this.options,that=this,animate=(!this._animateOff)?o.animate:false,_set={};if(this.options.values&&this.options.values.length){this.handles.each(function(i){valPercent=(that.values(i)-that._valueMin())/(that._valueMax()-that._valueMin())*100;_set[that.orientation==="horizontal"?"left":"bottom"]=valPercent+"%";$(this).stop(1,1)[animate?"animate":"css"](_set,o.animate);if(that.options.range===true){if(that.orientation==="horizontal"){if(i===0){that.range.stop(1,1)[animate?"animate":"css"]({left:valPercent+"%"},o.animate);}
if(i===1){that.range[animate?"animate":"css"]({width:(valPercent-lastValPercent)+"%"},{queue:false,duration:o.animate});}}else{if(i===0){that.range.stop(1,1)[animate?"animate":"css"]({bottom:(valPercent)+"%"},o.animate);}
if(i===1){that.range[animate?"animate":"css"]({height:(valPercent-lastValPercent)+"%"},{queue:false,duration:o.animate});}}}
lastValPercent=valPercent;});}else{value=this.value();valueMin=this._valueMin();valueMax=this._valueMax();valPercent=(valueMax!==valueMin)?(value-valueMin)/(valueMax-valueMin)*100:0;_set[this.orientation==="horizontal"?"left":"bottom"]=valPercent+"%";this.handle.stop(1,1)[animate?"animate":"css"](_set,o.animate);if(oRange==="min"&&this.orientation==="horizontal"){this.range.stop(1,1)[animate?"animate":"css"]({width:valPercent+"%"},o.animate);}
if(oRange==="max"&&this.orientation==="horizontal"){this.range[animate?"animate":"css"]({width:(100-valPercent)+"%"},{queue:false,duration:o.animate});}
if(oRange==="min"&&this.orientation==="vertical"){this.range.stop(1,1)[animate?"animate":"css"]({height:valPercent+"%"},o.animate);}
if(oRange==="max"&&this.orientation==="vertical"){this.range[animate?"animate":"css"]({height:(100-valPercent)+"%"},{queue:false,duration:o.animate});}}},_handleEvents:{keydown:function(event){var allowed,curVal,newVal,step,index=$(event.target).data("ui-slider-handle-index");switch(event.keyCode){case $.ui.keyCode.HOME:case $.ui.keyCode.END:case $.ui.keyCode.PAGE_UP:case $.ui.keyCode.PAGE_DOWN:case $.ui.keyCode.UP:case $.ui.keyCode.RIGHT:case $.ui.keyCode.DOWN:case $.ui.keyCode.LEFT:event.preventDefault();if(!this._keySliding){this._keySliding=true;$(event.target).addClass("ui-state-active");allowed=this._start(event,index);if(allowed===false){return;}}
break;}
step=this.options.step;if(this.options.values&&this.options.values.length){curVal=newVal=this.values(index);}else{curVal=newVal=this.value();}
switch(event.keyCode){case $.ui.keyCode.HOME:newVal=this._valueMin();break;case $.ui.keyCode.END:newVal=this._valueMax();break;case $.ui.keyCode.PAGE_UP:newVal=this._trimAlignValue(curVal+((this._valueMax()-this._valueMin())/numPages));break;case $.ui.keyCode.PAGE_DOWN:newVal=this._trimAlignValue(curVal-((this._valueMax()-this._valueMin())/numPages));break;case $.ui.keyCode.UP:case $.ui.keyCode.RIGHT:if(curVal===this._valueMax()){return;}
newVal=this._trimAlignValue(curVal+step);break;case $.ui.keyCode.DOWN:case $.ui.keyCode.LEFT:if(curVal===this._valueMin()){return;}
newVal=this._trimAlignValue(curVal-step);break;}
this._slide(event,index,newVal);},click:function(event){event.preventDefault();},keyup:function(event){var index=$(event.target).data("ui-slider-handle-index");if(this._keySliding){this._keySliding=false;this._stop(event,index);this._change(event,index);$(event.target).removeClass("ui-state-active");}}}});}(jQuery));(function($,undefined){function isOverAxis(x,reference,size){return(x>reference)&&(x<(reference+size));}
function isFloating(item){return(/left|right/).test(item.css("float"))||(/inline|table-cell/).test(item.css("display"));}
$.widget("ui.sortable",$.ui.mouse,{version:"1.10.4",widgetEventPrefix:"sort",ready:false,options:{appendTo:"parent",axis:false,connectWith:false,containment:false,cursor:"auto",cursorAt:false,dropOnEmpty:true,forcePlaceholderSize:false,forceHelperSize:false,grid:false,handle:false,helper:"original",items:"> *",opacity:false,placeholder:false,revert:false,scroll:true,scrollSensitivity:20,scrollSpeed:20,scope:"default",tolerance:"intersect",zIndex:1000,activate:null,beforeStop:null,change:null,deactivate:null,out:null,over:null,receive:null,remove:null,sort:null,start:null,stop:null,update:null},_create:function(){var o=this.options;this.containerCache={};this.element.addClass("ui-sortable");this.refresh();this.floating=this.items.length?o.axis==="x"||isFloating(this.items[0].item):false;this.offset=this.element.offset();this._mouseInit();this.ready=true;},_destroy:function(){this.element.removeClass("ui-sortable ui-sortable-disabled");this._mouseDestroy();for(var i=this.items.length-1;i>=0;i--){this.items[i].item.removeData(this.widgetName+"-item");}
return this;},_setOption:function(key,value){if(key==="disabled"){this.options[key]=value;this.widget().toggleClass("ui-sortable-disabled",!!value);}else{$.Widget.prototype._setOption.apply(this,arguments);}},_mouseCapture:function(event,overrideHandle){var currentItem=null,validHandle=false,that=this;if(this.reverting){return false;}
if(this.options.disabled||this.options.type==="static"){return false;}
this._refreshItems(event);$(event.target).parents().each(function(){if($.data(this,that.widgetName+"-item")===that){currentItem=$(this);return false;}});if($.data(event.target,that.widgetName+"-item")===that){currentItem=$(event.target);}
if(!currentItem){return false;}
if(this.options.handle&&!overrideHandle){$(this.options.handle,currentItem).find("*").addBack().each(function(){if(this===event.target){validHandle=true;}});if(!validHandle){return false;}}
this.currentItem=currentItem;this._removeCurrentsFromItems();return true;},_mouseStart:function(event,overrideHandle,noActivation){var i,body,o=this.options;this.currentContainer=this;this.refreshPositions();this.helper=this._createHelper(event);this._cacheHelperProportions();this._cacheMargins();this.scrollParent=this.helper.scrollParent();this.offset=this.currentItem.offset();this.offset={top:this.offset.top-this.margins.top,left:this.offset.left-this.margins.left};$.extend(this.offset,{click:{left:event.pageX-this.offset.left,top:event.pageY-this.offset.top},parent:this._getParentOffset(),relative:this._getRelativeOffset()});this.helper.css("position","absolute");this.cssPosition=this.helper.css("position");this.originalPosition=this._generatePosition(event);this.originalPageX=event.pageX;this.originalPageY=event.pageY;(o.cursorAt&&this._adjustOffsetFromHelper(o.cursorAt));this.domPosition={prev:this.currentItem.prev()[0],parent:this.currentItem.parent()[0]};if(this.helper[0]!==this.currentItem[0]){this.currentItem.hide();}
this._createPlaceholder();if(o.containment){this._setContainment();}
if(o.cursor&&o.cursor!=="auto"){body=this.document.find("body");this.storedCursor=body.css("cursor");body.css("cursor",o.cursor);this.storedStylesheet=$("<style>*{ cursor: "+o.cursor+" !important; }</style>").appendTo(body);}
if(o.opacity){if(this.helper.css("opacity")){this._storedOpacity=this.helper.css("opacity");}
this.helper.css("opacity",o.opacity);}
if(o.zIndex){if(this.helper.css("zIndex")){this._storedZIndex=this.helper.css("zIndex");}
this.helper.css("zIndex",o.zIndex);}
if(this.scrollParent[0]!==document&&this.scrollParent[0].tagName!=="HTML"){this.overflowOffset=this.scrollParent.offset();}
this._trigger("start",event,this._uiHash());if(!this._preserveHelperProportions){this._cacheHelperProportions();}
if(!noActivation){for(i=this.containers.length-1;i>=0;i--){this.containers[i]._trigger("activate",event,this._uiHash(this));}}
if($.ui.ddmanager){$.ui.ddmanager.current=this;}
if($.ui.ddmanager&&!o.dropBehaviour){$.ui.ddmanager.prepareOffsets(this,event);}
this.dragging=true;this.helper.addClass("ui-sortable-helper");this._mouseDrag(event);return true;},_mouseDrag:function(event){var i,item,itemElement,intersection,o=this.options,scrolled=false;this.position=this._generatePosition(event);this.positionAbs=this._convertPositionTo("absolute");if(!this.lastPositionAbs){this.lastPositionAbs=this.positionAbs;}
if(this.options.scroll){if(this.scrollParent[0]!==document&&this.scrollParent[0].tagName!=="HTML"){if((this.overflowOffset.top+this.scrollParent[0].offsetHeight)-event.pageY<o.scrollSensitivity){this.scrollParent[0].scrollTop=scrolled=this.scrollParent[0].scrollTop+o.scrollSpeed;}else if(event.pageY-this.overflowOffset.top<o.scrollSensitivity){this.scrollParent[0].scrollTop=scrolled=this.scrollParent[0].scrollTop-o.scrollSpeed;}
if((this.overflowOffset.left+this.scrollParent[0].offsetWidth)-event.pageX<o.scrollSensitivity){this.scrollParent[0].scrollLeft=scrolled=this.scrollParent[0].scrollLeft+o.scrollSpeed;}else if(event.pageX-this.overflowOffset.left<o.scrollSensitivity){this.scrollParent[0].scrollLeft=scrolled=this.scrollParent[0].scrollLeft-o.scrollSpeed;}}else{if(event.pageY-$(document).scrollTop()<o.scrollSensitivity){scrolled=$(document).scrollTop($(document).scrollTop()-o.scrollSpeed);}else if($(window).height()-(event.pageY-$(document).scrollTop())<o.scrollSensitivity){scrolled=$(document).scrollTop($(document).scrollTop()+o.scrollSpeed);}
if(event.pageX-$(document).scrollLeft()<o.scrollSensitivity){scrolled=$(document).scrollLeft($(document).scrollLeft()-o.scrollSpeed);}else if($(window).width()-(event.pageX-$(document).scrollLeft())<o.scrollSensitivity){scrolled=$(document).scrollLeft($(document).scrollLeft()+o.scrollSpeed);}}
if(scrolled!==false&&$.ui.ddmanager&&!o.dropBehaviour){$.ui.ddmanager.prepareOffsets(this,event);}}
this.positionAbs=this._convertPositionTo("absolute");if(!this.options.axis||this.options.axis!=="y"){this.helper[0].style.left=this.position.left+"px";}
if(!this.options.axis||this.options.axis!=="x"){this.helper[0].style.top=this.position.top+"px";}
for(i=this.items.length-1;i>=0;i--){item=this.items[i];itemElement=item.item[0];intersection=this._intersectsWithPointer(item);if(!intersection){continue;}
if(item.instance!==this.currentContainer){continue;}
if(itemElement!==this.currentItem[0]&&this.placeholder[intersection===1?"next":"prev"]()[0]!==itemElement&&!$.contains(this.placeholder[0],itemElement)&&(this.options.type==="semi-dynamic"?!$.contains(this.element[0],itemElement):true)){this.direction=intersection===1?"down":"up";if(this.options.tolerance==="pointer"||this._intersectsWithSides(item)){this._rearrange(event,item);}else{break;}
this._trigger("change",event,this._uiHash());break;}}
this._contactContainers(event);if($.ui.ddmanager){$.ui.ddmanager.drag(this,event);}
this._trigger("sort",event,this._uiHash());this.lastPositionAbs=this.positionAbs;return false;},_mouseStop:function(event,noPropagation){if(!event){return;}
if($.ui.ddmanager&&!this.options.dropBehaviour){$.ui.ddmanager.drop(this,event);}
if(this.options.revert){var that=this,cur=this.placeholder.offset(),axis=this.options.axis,animation={};if(!axis||axis==="x"){animation.left=cur.left-this.offset.parent.left-this.margins.left+(this.offsetParent[0]===document.body?0:this.offsetParent[0].scrollLeft);}
if(!axis||axis==="y"){animation.top=cur.top-this.offset.parent.top-this.margins.top+(this.offsetParent[0]===document.body?0:this.offsetParent[0].scrollTop);}
this.reverting=true;$(this.helper).animate(animation,parseInt(this.options.revert,10)||500,function(){that._clear(event);});}else{this._clear(event,noPropagation);}
return false;},cancel:function(){if(this.dragging){this._mouseUp({target:null});if(this.options.helper==="original"){this.currentItem.css(this._storedCSS).removeClass("ui-sortable-helper");}else{this.currentItem.show();}
for(var i=this.containers.length-1;i>=0;i--){this.containers[i]._trigger("deactivate",null,this._uiHash(this));if(this.containers[i].containerCache.over){this.containers[i]._trigger("out",null,this._uiHash(this));this.containers[i].containerCache.over=0;}}}
if(this.placeholder){if(this.placeholder[0].parentNode){this.placeholder[0].parentNode.removeChild(this.placeholder[0]);}
if(this.options.helper!=="original"&&this.helper&&this.helper[0].parentNode){this.helper.remove();}
$.extend(this,{helper:null,dragging:false,reverting:false,_noFinalSort:null});if(this.domPosition.prev){$(this.domPosition.prev).after(this.currentItem);}else{$(this.domPosition.parent).prepend(this.currentItem);}}
return this;},serialize:function(o){var items=this._getItemsAsjQuery(o&&o.connected),str=[];o=o||{};$(items).each(function(){var res=($(o.item||this).attr(o.attribute||"id")||"").match(o.expression||(/(.+)[\-=_](.+)/));if(res){str.push((o.key||res[1]+"[]")+"="+(o.key&&o.expression?res[1]:res[2]));}});if(!str.length&&o.key){str.push(o.key+"=");}
return str.join("&");},toArray:function(o){var items=this._getItemsAsjQuery(o&&o.connected),ret=[];o=o||{};items.each(function(){ret.push($(o.item||this).attr(o.attribute||"id")||"");});return ret;},_intersectsWith:function(item){var x1=this.positionAbs.left,x2=x1+this.helperProportions.width,y1=this.positionAbs.top,y2=y1+this.helperProportions.height,l=item.left,r=l+item.width,t=item.top,b=t+item.height,dyClick=this.offset.click.top,dxClick=this.offset.click.left,isOverElementHeight=(this.options.axis==="x")||((y1+dyClick)>t&&(y1+dyClick)<b),isOverElementWidth=(this.options.axis==="y")||((x1+dxClick)>l&&(x1+dxClick)<r),isOverElement=isOverElementHeight&&isOverElementWidth;if(this.options.tolerance==="pointer"||this.options.forcePointerForContainers||(this.options.tolerance!=="pointer"&&this.helperProportions[this.floating?"width":"height"]>item[this.floating?"width":"height"])){return isOverElement;}else{return(l<x1+(this.helperProportions.width/2)&&x2-(this.helperProportions.width/2)<r&&t<y1+(this.helperProportions.height/2)&&y2-(this.helperProportions.height/2)<b);}},_intersectsWithPointer:function(item){var isOverElementHeight=(this.options.axis==="x")||isOverAxis(this.positionAbs.top+this.offset.click.top,item.top,item.height),isOverElementWidth=(this.options.axis==="y")||isOverAxis(this.positionAbs.left+this.offset.click.left,item.left,item.width),isOverElement=isOverElementHeight&&isOverElementWidth,verticalDirection=this._getDragVerticalDirection(),horizontalDirection=this._getDragHorizontalDirection();if(!isOverElement){return false;}
return this.floating?(((horizontalDirection&&horizontalDirection==="right")||verticalDirection==="down")?2:1):(verticalDirection&&(verticalDirection==="down"?2:1));},_intersectsWithSides:function(item){var isOverBottomHalf=isOverAxis(this.positionAbs.top+this.offset.click.top,item.top+(item.height/2),item.height),isOverRightHalf=isOverAxis(this.positionAbs.left+this.offset.click.left,item.left+(item.width/2),item.width),verticalDirection=this._getDragVerticalDirection(),horizontalDirection=this._getDragHorizontalDirection();if(this.floating&&horizontalDirection){return((horizontalDirection==="right"&&isOverRightHalf)||(horizontalDirection==="left"&&!isOverRightHalf));}else{return verticalDirection&&((verticalDirection==="down"&&isOverBottomHalf)||(verticalDirection==="up"&&!isOverBottomHalf));}},_getDragVerticalDirection:function(){var delta=this.positionAbs.top-this.lastPositionAbs.top;return delta!==0&&(delta>0?"down":"up");},_getDragHorizontalDirection:function(){var delta=this.positionAbs.left-this.lastPositionAbs.left;return delta!==0&&(delta>0?"right":"left");},refresh:function(event){this._refreshItems(event);this.refreshPositions();return this;},_connectWith:function(){var options=this.options;return options.connectWith.constructor===String?[options.connectWith]:options.connectWith;},_getItemsAsjQuery:function(connected){var i,j,cur,inst,items=[],queries=[],connectWith=this._connectWith();if(connectWith&&connected){for(i=connectWith.length-1;i>=0;i--){cur=$(connectWith[i]);for(j=cur.length-1;j>=0;j--){inst=$.data(cur[j],this.widgetFullName);if(inst&&inst!==this&&!inst.options.disabled){queries.push([$.isFunction(inst.options.items)?inst.options.items.call(inst.element):$(inst.options.items,inst.element).not(".ui-sortable-helper").not(".ui-sortable-placeholder"),inst]);}}}}
queries.push([$.isFunction(this.options.items)?this.options.items.call(this.element,null,{options:this.options,item:this.currentItem}):$(this.options.items,this.element).not(".ui-sortable-helper").not(".ui-sortable-placeholder"),this]);function addItems(){items.push(this);}
for(i=queries.length-1;i>=0;i--){queries[i][0].each(addItems);}
return $(items);},_removeCurrentsFromItems:function(){var list=this.currentItem.find(":data("+this.widgetName+"-item)");this.items=$.grep(this.items,function(item){for(var j=0;j<list.length;j++){if(list[j]===item.item[0]){return false;}}
return true;});},_refreshItems:function(event){this.items=[];this.containers=[this];var i,j,cur,inst,targetData,_queries,item,queriesLength,items=this.items,queries=[[$.isFunction(this.options.items)?this.options.items.call(this.element[0],event,{item:this.currentItem}):$(this.options.items,this.element),this]],connectWith=this._connectWith();if(connectWith&&this.ready){for(i=connectWith.length-1;i>=0;i--){cur=$(connectWith[i]);for(j=cur.length-1;j>=0;j--){inst=$.data(cur[j],this.widgetFullName);if(inst&&inst!==this&&!inst.options.disabled){queries.push([$.isFunction(inst.options.items)?inst.options.items.call(inst.element[0],event,{item:this.currentItem}):$(inst.options.items,inst.element),inst]);this.containers.push(inst);}}}}
for(i=queries.length-1;i>=0;i--){targetData=queries[i][1];_queries=queries[i][0];for(j=0,queriesLength=_queries.length;j<queriesLength;j++){item=$(_queries[j]);item.data(this.widgetName+"-item",targetData);items.push({item:item,instance:targetData,width:0,height:0,left:0,top:0});}}},refreshPositions:function(fast){if(this.offsetParent&&this.helper){this.offset.parent=this._getParentOffset();}
var i,item,t,p;for(i=this.items.length-1;i>=0;i--){item=this.items[i];if(item.instance!==this.currentContainer&&this.currentContainer&&item.item[0]!==this.currentItem[0]){continue;}
t=this.options.toleranceElement?$(this.options.toleranceElement,item.item):item.item;if(!fast){item.width=t.outerWidth();item.height=t.outerHeight();}
p=t.offset();item.left=p.left;item.top=p.top;}
if(this.options.custom&&this.options.custom.refreshContainers){this.options.custom.refreshContainers.call(this);}else{for(i=this.containers.length-1;i>=0;i--){p=this.containers[i].element.offset();this.containers[i].containerCache.left=p.left;this.containers[i].containerCache.top=p.top;this.containers[i].containerCache.width=this.containers[i].element.outerWidth();this.containers[i].containerCache.height=this.containers[i].element.outerHeight();}}
return this;},_createPlaceholder:function(that){that=that||this;var className,o=that.options;if(!o.placeholder||o.placeholder.constructor===String){className=o.placeholder;o.placeholder={element:function(){var nodeName=that.currentItem[0].nodeName.toLowerCase(),element=$("<"+nodeName+">",that.document[0]).addClass(className||that.currentItem[0].className+" ui-sortable-placeholder").removeClass("ui-sortable-helper");if(nodeName==="tr"){that.currentItem.children().each(function(){$("<td>&#160;</td>",that.document[0]).attr("colspan",$(this).attr("colspan")||1).appendTo(element);});}else if(nodeName==="img"){element.attr("src",that.currentItem.attr("src"));}
if(!className){element.css("visibility","hidden");}
return element;},update:function(container,p){if(className&&!o.forcePlaceholderSize){return;}
if(!p.height()){p.height(that.currentItem.innerHeight()-parseInt(that.currentItem.css("paddingTop")||0,10)-parseInt(that.currentItem.css("paddingBottom")||0,10));}
if(!p.width()){p.width(that.currentItem.innerWidth()-parseInt(that.currentItem.css("paddingLeft")||0,10)-parseInt(that.currentItem.css("paddingRight")||0,10));}}};}
that.placeholder=$(o.placeholder.element.call(that.element,that.currentItem));that.currentItem.after(that.placeholder);o.placeholder.update(that,that.placeholder);},_contactContainers:function(event){var i,j,dist,itemWithLeastDistance,posProperty,sizeProperty,base,cur,nearBottom,floating,innermostContainer=null,innermostIndex=null;for(i=this.containers.length-1;i>=0;i--){if($.contains(this.currentItem[0],this.containers[i].element[0])){continue;}
if(this._intersectsWith(this.containers[i].containerCache)){if(innermostContainer&&$.contains(this.containers[i].element[0],innermostContainer.element[0])){continue;}
innermostContainer=this.containers[i];innermostIndex=i;}else{if(this.containers[i].containerCache.over){this.containers[i]._trigger("out",event,this._uiHash(this));this.containers[i].containerCache.over=0;}}}
if(!innermostContainer){return;}
if(this.containers.length===1){if(!this.containers[innermostIndex].containerCache.over){this.containers[innermostIndex]._trigger("over",event,this._uiHash(this));this.containers[innermostIndex].containerCache.over=1;}}else{dist=10000;itemWithLeastDistance=null;floating=innermostContainer.floating||isFloating(this.currentItem);posProperty=floating?"left":"top";sizeProperty=floating?"width":"height";base=this.positionAbs[posProperty]+this.offset.click[posProperty];for(j=this.items.length-1;j>=0;j--){if(!$.contains(this.containers[innermostIndex].element[0],this.items[j].item[0])){continue;}
if(this.items[j].item[0]===this.currentItem[0]){continue;}
if(floating&&!isOverAxis(this.positionAbs.top+this.offset.click.top,this.items[j].top,this.items[j].height)){continue;}
cur=this.items[j].item.offset()[posProperty];nearBottom=false;if(Math.abs(cur-base)>Math.abs(cur+this.items[j][sizeProperty]-base)){nearBottom=true;cur+=this.items[j][sizeProperty];}
if(Math.abs(cur-base)<dist){dist=Math.abs(cur-base);itemWithLeastDistance=this.items[j];this.direction=nearBottom?"up":"down";}}
if(!itemWithLeastDistance&&!this.options.dropOnEmpty){return;}
if(this.currentContainer===this.containers[innermostIndex]){return;}
itemWithLeastDistance?this._rearrange(event,itemWithLeastDistance,null,true):this._rearrange(event,null,this.containers[innermostIndex].element,true);this._trigger("change",event,this._uiHash());this.containers[innermostIndex]._trigger("change",event,this._uiHash(this));this.currentContainer=this.containers[innermostIndex];this.options.placeholder.update(this.currentContainer,this.placeholder);this.containers[innermostIndex]._trigger("over",event,this._uiHash(this));this.containers[innermostIndex].containerCache.over=1;}},_createHelper:function(event){var o=this.options,helper=$.isFunction(o.helper)?$(o.helper.apply(this.element[0],[event,this.currentItem])):(o.helper==="clone"?this.currentItem.clone():this.currentItem);if(!helper.parents("body").length){$(o.appendTo!=="parent"?o.appendTo:this.currentItem[0].parentNode)[0].appendChild(helper[0]);}
if(helper[0]===this.currentItem[0]){this._storedCSS={width:this.currentItem[0].style.width,height:this.currentItem[0].style.height,position:this.currentItem.css("position"),top:this.currentItem.css("top"),left:this.currentItem.css("left")};}
if(!helper[0].style.width||o.forceHelperSize){helper.width(this.currentItem.width());}
if(!helper[0].style.height||o.forceHelperSize){helper.height(this.currentItem.height());}
return helper;},_adjustOffsetFromHelper:function(obj){if(typeof obj==="string"){obj=obj.split(" ");}
if($.isArray(obj)){obj={left:+obj[0],top:+obj[1]||0};}
if("left"in obj){this.offset.click.left=obj.left+this.margins.left;}
if("right"in obj){this.offset.click.left=this.helperProportions.width-obj.right+this.margins.left;}
if("top"in obj){this.offset.click.top=obj.top+this.margins.top;}
if("bottom"in obj){this.offset.click.top=this.helperProportions.height-obj.bottom+this.margins.top;}},_getParentOffset:function(){this.offsetParent=this.helper.offsetParent();var po=this.offsetParent.offset();if(this.cssPosition==="absolute"&&this.scrollParent[0]!==document&&$.contains(this.scrollParent[0],this.offsetParent[0])){po.left+=this.scrollParent.scrollLeft();po.top+=this.scrollParent.scrollTop();}
if(this.offsetParent[0]===document.body||(this.offsetParent[0].tagName&&this.offsetParent[0].tagName.toLowerCase()==="html"&&$.ui.ie)){po={top:0,left:0};}
return{top:po.top+(parseInt(this.offsetParent.css("borderTopWidth"),10)||0),left:po.left+(parseInt(this.offsetParent.css("borderLeftWidth"),10)||0)};},_getRelativeOffset:function(){if(this.cssPosition==="relative"){var p=this.currentItem.position();return{top:p.top-(parseInt(this.helper.css("top"),10)||0)+this.scrollParent.scrollTop(),left:p.left-(parseInt(this.helper.css("left"),10)||0)+this.scrollParent.scrollLeft()};}else{return{top:0,left:0};}},_cacheMargins:function(){this.margins={left:(parseInt(this.currentItem.css("marginLeft"),10)||0),top:(parseInt(this.currentItem.css("marginTop"),10)||0)};},_cacheHelperProportions:function(){this.helperProportions={width:this.helper.outerWidth(),height:this.helper.outerHeight()};},_setContainment:function(){var ce,co,over,o=this.options;if(o.containment==="parent"){o.containment=this.helper[0].parentNode;}
if(o.containment==="document"||o.containment==="window"){this.containment=[0-this.offset.relative.left-this.offset.parent.left,0-this.offset.relative.top-this.offset.parent.top,$(o.containment==="document"?document:window).width()-this.helperProportions.width-this.margins.left,($(o.containment==="document"?document:window).height()||document.body.parentNode.scrollHeight)-this.helperProportions.height-this.margins.top];}
if(!(/^(document|window|parent)$/).test(o.containment)){ce=$(o.containment)[0];co=$(o.containment).offset();over=($(ce).css("overflow")!=="hidden");this.containment=[co.left+(parseInt($(ce).css("borderLeftWidth"),10)||0)+(parseInt($(ce).css("paddingLeft"),10)||0)-this.margins.left,co.top+(parseInt($(ce).css("borderTopWidth"),10)||0)+(parseInt($(ce).css("paddingTop"),10)||0)-this.margins.top,co.left+(over?Math.max(ce.scrollWidth,ce.offsetWidth):ce.offsetWidth)-(parseInt($(ce).css("borderLeftWidth"),10)||0)-(parseInt($(ce).css("paddingRight"),10)||0)-this.helperProportions.width-this.margins.left,co.top+(over?Math.max(ce.scrollHeight,ce.offsetHeight):ce.offsetHeight)-(parseInt($(ce).css("borderTopWidth"),10)||0)-(parseInt($(ce).css("paddingBottom"),10)||0)-this.helperProportions.height-this.margins.top];}},_convertPositionTo:function(d,pos){if(!pos){pos=this.position;}
var mod=d==="absolute"?1:-1,scroll=this.cssPosition==="absolute"&&!(this.scrollParent[0]!==document&&$.contains(this.scrollParent[0],this.offsetParent[0]))?this.offsetParent:this.scrollParent,scrollIsRootNode=(/(html|body)/i).test(scroll[0].tagName);return{top:(pos.top+
this.offset.relative.top*mod+
this.offset.parent.top*mod-
((this.cssPosition==="fixed"?-this.scrollParent.scrollTop():(scrollIsRootNode?0:scroll.scrollTop()))*mod)),left:(pos.left+
this.offset.relative.left*mod+
this.offset.parent.left*mod-
((this.cssPosition==="fixed"?-this.scrollParent.scrollLeft():scrollIsRootNode?0:scroll.scrollLeft())*mod))};},_generatePosition:function(event){var top,left,o=this.options,pageX=event.pageX,pageY=event.pageY,scroll=this.cssPosition==="absolute"&&!(this.scrollParent[0]!==document&&$.contains(this.scrollParent[0],this.offsetParent[0]))?this.offsetParent:this.scrollParent,scrollIsRootNode=(/(html|body)/i).test(scroll[0].tagName);if(this.cssPosition==="relative"&&!(this.scrollParent[0]!==document&&this.scrollParent[0]!==this.offsetParent[0])){this.offset.relative=this._getRelativeOffset();}
if(this.originalPosition){if(this.containment){if(event.pageX-this.offset.click.left<this.containment[0]){pageX=this.containment[0]+this.offset.click.left;}
if(event.pageY-this.offset.click.top<this.containment[1]){pageY=this.containment[1]+this.offset.click.top;}
if(event.pageX-this.offset.click.left>this.containment[2]){pageX=this.containment[2]+this.offset.click.left;}
if(event.pageY-this.offset.click.top>this.containment[3]){pageY=this.containment[3]+this.offset.click.top;}}
if(o.grid){top=this.originalPageY+Math.round((pageY-this.originalPageY)/o.grid[1])*o.grid[1];pageY=this.containment?((top-this.offset.click.top>=this.containment[1]&&top-this.offset.click.top<=this.containment[3])?top:((top-this.offset.click.top>=this.containment[1])?top-o.grid[1]:top+o.grid[1])):top;left=this.originalPageX+Math.round((pageX-this.originalPageX)/o.grid[0])*o.grid[0];pageX=this.containment?((left-this.offset.click.left>=this.containment[0]&&left-this.offset.click.left<=this.containment[2])?left:((left-this.offset.click.left>=this.containment[0])?left-o.grid[0]:left+o.grid[0])):left;}}
return{top:(pageY-
this.offset.click.top-
this.offset.relative.top-
this.offset.parent.top+
((this.cssPosition==="fixed"?-this.scrollParent.scrollTop():(scrollIsRootNode?0:scroll.scrollTop())))),left:(pageX-
this.offset.click.left-
this.offset.relative.left-
this.offset.parent.left+
((this.cssPosition==="fixed"?-this.scrollParent.scrollLeft():scrollIsRootNode?0:scroll.scrollLeft())))};},_rearrange:function(event,i,a,hardRefresh){a?a[0].appendChild(this.placeholder[0]):i.item[0].parentNode.insertBefore(this.placeholder[0],(this.direction==="down"?i.item[0]:i.item[0].nextSibling));this.counter=this.counter?++this.counter:1;var counter=this.counter;this._delay(function(){if(counter===this.counter){this.refreshPositions(!hardRefresh);}});},_clear:function(event,noPropagation){this.reverting=false;var i,delayedTriggers=[];if(!this._noFinalSort&&this.currentItem.parent().length){this.placeholder.before(this.currentItem);}
this._noFinalSort=null;if(this.helper[0]===this.currentItem[0]){for(i in this._storedCSS){if(this._storedCSS[i]==="auto"||this._storedCSS[i]==="static"){this._storedCSS[i]="";}}
this.currentItem.css(this._storedCSS).removeClass("ui-sortable-helper");}else{this.currentItem.show();}
if(this.fromOutside&&!noPropagation){delayedTriggers.push(function(event){this._trigger("receive",event,this._uiHash(this.fromOutside));});}
if((this.fromOutside||this.domPosition.prev!==this.currentItem.prev().not(".ui-sortable-helper")[0]||this.domPosition.parent!==this.currentItem.parent()[0])&&!noPropagation){delayedTriggers.push(function(event){this._trigger("update",event,this._uiHash());});}
if(this!==this.currentContainer){if(!noPropagation){delayedTriggers.push(function(event){this._trigger("remove",event,this._uiHash());});delayedTriggers.push((function(c){return function(event){c._trigger("receive",event,this._uiHash(this));};}).call(this,this.currentContainer));delayedTriggers.push((function(c){return function(event){c._trigger("update",event,this._uiHash(this));};}).call(this,this.currentContainer));}}
function delayEvent(type,instance,container){return function(event){container._trigger(type,event,instance._uiHash(instance));};}
for(i=this.containers.length-1;i>=0;i--){if(!noPropagation){delayedTriggers.push(delayEvent("deactivate",this,this.containers[i]));}
if(this.containers[i].containerCache.over){delayedTriggers.push(delayEvent("out",this,this.containers[i]));this.containers[i].containerCache.over=0;}}
if(this.storedCursor){this.document.find("body").css("cursor",this.storedCursor);this.storedStylesheet.remove();}
if(this._storedOpacity){this.helper.css("opacity",this._storedOpacity);}
if(this._storedZIndex){this.helper.css("zIndex",this._storedZIndex==="auto"?"":this._storedZIndex);}
this.dragging=false;if(this.cancelHelperRemoval){if(!noPropagation){this._trigger("beforeStop",event,this._uiHash());for(i=0;i<delayedTriggers.length;i++){delayedTriggers[i].call(this,event);}
this._trigger("stop",event,this._uiHash());}
this.fromOutside=false;return false;}
if(!noPropagation){this._trigger("beforeStop",event,this._uiHash());}
this.placeholder[0].parentNode.removeChild(this.placeholder[0]);if(this.helper[0]!==this.currentItem[0]){this.helper.remove();}
this.helper=null;if(!noPropagation){for(i=0;i<delayedTriggers.length;i++){delayedTriggers[i].call(this,event);}
this._trigger("stop",event,this._uiHash());}
this.fromOutside=false;return true;},_trigger:function(){if($.Widget.prototype._trigger.apply(this,arguments)===false){this.cancel();}},_uiHash:function(_inst){var inst=_inst||this;return{helper:inst.helper,placeholder:inst.placeholder||$([]),position:inst.position,originalPosition:inst.originalPosition,offset:inst.positionAbs,item:inst.currentItem,sender:_inst?_inst.element:null};}});})(jQuery);(function($){function modifier(fn){return function(){var previous=this.element.val();fn.apply(this,arguments);this._refresh();if(previous!==this.element.val()){this._trigger("change");}};}
$.widget("ui.spinner",{version:"1.10.4",defaultElement:"<input>",widgetEventPrefix:"spin",options:{culture:null,icons:{down:"ui-icon-triangle-1-s",up:"ui-icon-triangle-1-n"},incremental:true,max:null,min:null,numberFormat:null,page:10,step:1,change:null,spin:null,start:null,stop:null},_create:function(){this._setOption("max",this.options.max);this._setOption("min",this.options.min);this._setOption("step",this.options.step);if(this.value()!==""){this._value(this.element.val(),true);}
this._draw();this._on(this._events);this._refresh();this._on(this.window,{beforeunload:function(){this.element.removeAttr("autocomplete");}});},_getCreateOptions:function(){var options={},element=this.element;$.each(["min","max","step"],function(i,option){var value=element.attr(option);if(value!==undefined&&value.length){options[option]=value;}});return options;},_events:{keydown:function(event){if(this._start(event)&&this._keydown(event)){event.preventDefault();}},keyup:"_stop",focus:function(){this.previous=this.element.val();},blur:function(event){if(this.cancelBlur){delete this.cancelBlur;return;}
this._stop();this._refresh();if(this.previous!==this.element.val()){this._trigger("change",event);}},mousewheel:function(event,delta){if(!delta){return;}
if(!this.spinning&&!this._start(event)){return false;}
this._spin((delta>0?1:-1)*this.options.step,event);clearTimeout(this.mousewheelTimer);this.mousewheelTimer=this._delay(function(){if(this.spinning){this._stop(event);}},100);event.preventDefault();},"mousedown .ui-spinner-button":function(event){var previous;previous=this.element[0]===this.document[0].activeElement?this.previous:this.element.val();function checkFocus(){var isActive=this.element[0]===this.document[0].activeElement;if(!isActive){this.element.focus();this.previous=previous;this._delay(function(){this.previous=previous;});}}
event.preventDefault();checkFocus.call(this);this.cancelBlur=true;this._delay(function(){delete this.cancelBlur;checkFocus.call(this);});if(this._start(event)===false){return;}
this._repeat(null,$(event.currentTarget).hasClass("ui-spinner-up")?1:-1,event);},"mouseup .ui-spinner-button":"_stop","mouseenter .ui-spinner-button":function(event){if(!$(event.currentTarget).hasClass("ui-state-active")){return;}
if(this._start(event)===false){return false;}
this._repeat(null,$(event.currentTarget).hasClass("ui-spinner-up")?1:-1,event);},"mouseleave .ui-spinner-button":"_stop"},_draw:function(){var uiSpinner=this.uiSpinner=this.element.addClass("ui-spinner-input").attr("autocomplete","off").wrap(this._uiSpinnerHtml()).parent().append(this._buttonHtml());this.element.attr("role","spinbutton");this.buttons=uiSpinner.find(".ui-spinner-button").attr("tabIndex",-1).button().removeClass("ui-corner-all");if(this.buttons.height()>Math.ceil(uiSpinner.height()*0.5)&&uiSpinner.height()>0){uiSpinner.height(uiSpinner.height());}
if(this.options.disabled){this.disable();}},_keydown:function(event){var options=this.options,keyCode=$.ui.keyCode;switch(event.keyCode){case keyCode.UP:this._repeat(null,1,event);return true;case keyCode.DOWN:this._repeat(null,-1,event);return true;case keyCode.PAGE_UP:this._repeat(null,options.page,event);return true;case keyCode.PAGE_DOWN:this._repeat(null,-options.page,event);return true;}
return false;},_uiSpinnerHtml:function(){return"<span class='ui-spinner ui-widget ui-widget-content ui-corner-all'></span>";},_buttonHtml:function(){return""+"<a class='ui-spinner-button ui-spinner-up ui-corner-tr'>"+"<span class='ui-icon "+this.options.icons.up+"'>&#9650;</span>"+"</a>"+"<a class='ui-spinner-button ui-spinner-down ui-corner-br'>"+"<span class='ui-icon "+this.options.icons.down+"'>&#9660;</span>"+"</a>";},_start:function(event){if(!this.spinning&&this._trigger("start",event)===false){return false;}
if(!this.counter){this.counter=1;}
this.spinning=true;return true;},_repeat:function(i,steps,event){i=i||500;clearTimeout(this.timer);this.timer=this._delay(function(){this._repeat(40,steps,event);},i);this._spin(steps*this.options.step,event);},_spin:function(step,event){var value=this.value()||0;if(!this.counter){this.counter=1;}
value=this._adjustValue(value+step*this._increment(this.counter));if(!this.spinning||this._trigger("spin",event,{value:value})!==false){this._value(value);this.counter++;}},_increment:function(i){var incremental=this.options.incremental;if(incremental){return $.isFunction(incremental)?incremental(i):Math.floor(i*i*i/50000-i*i/500+17*i/200+1);}
return 1;},_precision:function(){var precision=this._precisionOf(this.options.step);if(this.options.min!==null){precision=Math.max(precision,this._precisionOf(this.options.min));}
return precision;},_precisionOf:function(num){var str=num.toString(),decimal=str.indexOf(".");return decimal===-1?0:str.length-decimal-1;},_adjustValue:function(value){var base,aboveMin,options=this.options;base=options.min!==null?options.min:0;aboveMin=value-base;aboveMin=Math.round(aboveMin/options.step)*options.step;value=base+aboveMin;value=parseFloat(value.toFixed(this._precision()));if(options.max!==null&&value>options.max){return options.max;}
if(options.min!==null&&value<options.min){return options.min;}
return value;},_stop:function(event){if(!this.spinning){return;}
clearTimeout(this.timer);clearTimeout(this.mousewheelTimer);this.counter=0;this.spinning=false;this._trigger("stop",event);},_setOption:function(key,value){if(key==="culture"||key==="numberFormat"){var prevValue=this._parse(this.element.val());this.options[key]=value;this.element.val(this._format(prevValue));return;}
if(key==="max"||key==="min"||key==="step"){if(typeof value==="string"){value=this._parse(value);}}
if(key==="icons"){this.buttons.first().find(".ui-icon").removeClass(this.options.icons.up).addClass(value.up);this.buttons.last().find(".ui-icon").removeClass(this.options.icons.down).addClass(value.down);}
this._super(key,value);if(key==="disabled"){if(value){this.element.prop("disabled",true);this.buttons.button("disable");}else{this.element.prop("disabled",false);this.buttons.button("enable");}}},_setOptions:modifier(function(options){this._super(options);this._value(this.element.val());}),_parse:function(val){if(typeof val==="string"&&val!==""){val=window.Globalize&&this.options.numberFormat?Globalize.parseFloat(val,10,this.options.culture):+val;}
return val===""||isNaN(val)?null:val;},_format:function(value){if(value===""){return"";}
return window.Globalize&&this.options.numberFormat?Globalize.format(value,this.options.numberFormat,this.options.culture):value;},_refresh:function(){this.element.attr({"aria-valuemin":this.options.min,"aria-valuemax":this.options.max,"aria-valuenow":this._parse(this.element.val())});},_value:function(value,allowAny){var parsed;if(value!==""){parsed=this._parse(value);if(parsed!==null){if(!allowAny){parsed=this._adjustValue(parsed);}
value=this._format(parsed);}}
this.element.val(value);this._refresh();},_destroy:function(){this.element.removeClass("ui-spinner-input").prop("disabled",false).removeAttr("autocomplete").removeAttr("role").removeAttr("aria-valuemin").removeAttr("aria-valuemax").removeAttr("aria-valuenow");this.uiSpinner.replaceWith(this.element);},stepUp:modifier(function(steps){this._stepUp(steps);}),_stepUp:function(steps){if(this._start()){this._spin((steps||1)*this.options.step);this._stop();}},stepDown:modifier(function(steps){this._stepDown(steps);}),_stepDown:function(steps){if(this._start()){this._spin((steps||1)*-this.options.step);this._stop();}},pageUp:modifier(function(pages){this._stepUp((pages||1)*this.options.page);}),pageDown:modifier(function(pages){this._stepDown((pages||1)*this.options.page);}),value:function(newVal){if(!arguments.length){return this._parse(this.element.val());}
modifier(this._value).call(this,newVal);},widget:function(){return this.uiSpinner;}});}(jQuery));(function($,undefined){var tabId=0,rhash=/#.*$/;function getNextTabId(){return++tabId;}
function isLocal(anchor){anchor=anchor.cloneNode(false);return anchor.hash.length>1&&decodeURIComponent(anchor.href.replace(rhash,""))===decodeURIComponent(location.href.replace(rhash,""));}
$.widget("ui.tabs",{version:"1.10.4",delay:300,options:{active:null,collapsible:false,event:"click",heightStyle:"content",hide:null,show:null,activate:null,beforeActivate:null,beforeLoad:null,load:null},_create:function(){var that=this,options=this.options;this.running=false;this.element.addClass("ui-tabs ui-widget ui-widget-content ui-corner-all").toggleClass("ui-tabs-collapsible",options.collapsible).delegate(".ui-tabs-nav > li","mousedown"+this.eventNamespace,function(event){if($(this).is(".ui-state-disabled")){event.preventDefault();}}).delegate(".ui-tabs-anchor","focus"+this.eventNamespace,function(){if($(this).closest("li").is(".ui-state-disabled")){this.blur();}});this._processTabs();options.active=this._initialActive();if($.isArray(options.disabled)){options.disabled=$.unique(options.disabled.concat($.map(this.tabs.filter(".ui-state-disabled"),function(li){return that.tabs.index(li);}))).sort();}
if(this.options.active!==false&&this.anchors.length){this.active=this._findActive(options.active);}else{this.active=$();}
this._refresh();if(this.active.length){this.load(options.active);}},_initialActive:function(){var active=this.options.active,collapsible=this.options.collapsible,locationHash=location.hash.substring(1);if(active===null){if(locationHash){this.tabs.each(function(i,tab){if($(tab).attr("aria-controls")===locationHash){active=i;return false;}});}
if(active===null){active=this.tabs.index(this.tabs.filter(".ui-tabs-active"));}
if(active===null||active===-1){active=this.tabs.length?0:false;}}
if(active!==false){active=this.tabs.index(this.tabs.eq(active));if(active===-1){active=collapsible?false:0;}}
if(!collapsible&&active===false&&this.anchors.length){active=0;}
return active;},_getCreateEventData:function(){return{tab:this.active,panel:!this.active.length?$():this._getPanelForTab(this.active)};},_tabKeydown:function(event){var focusedTab=$(this.document[0].activeElement).closest("li"),selectedIndex=this.tabs.index(focusedTab),goingForward=true;if(this._handlePageNav(event)){return;}
switch(event.keyCode){case $.ui.keyCode.RIGHT:case $.ui.keyCode.DOWN:selectedIndex++;break;case $.ui.keyCode.UP:case $.ui.keyCode.LEFT:goingForward=false;selectedIndex--;break;case $.ui.keyCode.END:selectedIndex=this.anchors.length-1;break;case $.ui.keyCode.HOME:selectedIndex=0;break;case $.ui.keyCode.SPACE:event.preventDefault();clearTimeout(this.activating);this._activate(selectedIndex);return;case $.ui.keyCode.ENTER:event.preventDefault();clearTimeout(this.activating);this._activate(selectedIndex===this.options.active?false:selectedIndex);return;default:return;}
event.preventDefault();clearTimeout(this.activating);selectedIndex=this._focusNextTab(selectedIndex,goingForward);if(!event.ctrlKey){focusedTab.attr("aria-selected","false");this.tabs.eq(selectedIndex).attr("aria-selected","true");this.activating=this._delay(function(){this.option("active",selectedIndex);},this.delay);}},_panelKeydown:function(event){if(this._handlePageNav(event)){return;}
if(event.ctrlKey&&event.keyCode===$.ui.keyCode.UP){event.preventDefault();this.active.focus();}},_handlePageNav:function(event){if(event.altKey&&event.keyCode===$.ui.keyCode.PAGE_UP){this._activate(this._focusNextTab(this.options.active-1,false));return true;}
if(event.altKey&&event.keyCode===$.ui.keyCode.PAGE_DOWN){this._activate(this._focusNextTab(this.options.active+1,true));return true;}},_findNextTab:function(index,goingForward){var lastTabIndex=this.tabs.length-1;function constrain(){if(index>lastTabIndex){index=0;}
if(index<0){index=lastTabIndex;}
return index;}
while($.inArray(constrain(),this.options.disabled)!==-1){index=goingForward?index+1:index-1;}
return index;},_focusNextTab:function(index,goingForward){index=this._findNextTab(index,goingForward);this.tabs.eq(index).focus();return index;},_setOption:function(key,value){if(key==="active"){this._activate(value);return;}
if(key==="disabled"){this._setupDisabled(value);return;}
this._super(key,value);if(key==="collapsible"){this.element.toggleClass("ui-tabs-collapsible",value);if(!value&&this.options.active===false){this._activate(0);}}
if(key==="event"){this._setupEvents(value);}
if(key==="heightStyle"){this._setupHeightStyle(value);}},_tabId:function(tab){return tab.attr("aria-controls")||"ui-tabs-"+getNextTabId();},_sanitizeSelector:function(hash){return hash?hash.replace(/[!"$%&'()*+,.\/:;<=>?@\[\]\^`{|}~]/g,"\\$&"):"";},refresh:function(){var options=this.options,lis=this.tablist.children(":has(a[href])");options.disabled=$.map(lis.filter(".ui-state-disabled"),function(tab){return lis.index(tab);});this._processTabs();if(options.active===false||!this.anchors.length){options.active=false;this.active=$();}else if(this.active.length&&!$.contains(this.tablist[0],this.active[0])){if(this.tabs.length===options.disabled.length){options.active=false;this.active=$();}else{this._activate(this._findNextTab(Math.max(0,options.active-1),false));}}else{options.active=this.tabs.index(this.active);}
this._refresh();},_refresh:function(){this._setupDisabled(this.options.disabled);this._setupEvents(this.options.event);this._setupHeightStyle(this.options.heightStyle);this.tabs.not(this.active).attr({"aria-selected":"false",tabIndex:-1});this.panels.not(this._getPanelForTab(this.active)).hide().attr({"aria-expanded":"false","aria-hidden":"true"});if(!this.active.length){this.tabs.eq(0).attr("tabIndex",0);}else{this.active.addClass("ui-tabs-active ui-state-active").attr({"aria-selected":"true",tabIndex:0});this._getPanelForTab(this.active).show().attr({"aria-expanded":"true","aria-hidden":"false"});}},_processTabs:function(){var that=this;this.tablist=this._getList().addClass("ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all").attr("role","tablist");this.tabs=this.tablist.find("> li:has(a[href])").addClass("ui-state-default ui-corner-top").attr({role:"tab",tabIndex:-1});this.anchors=this.tabs.map(function(){return $("a",this)[0];}).addClass("ui-tabs-anchor").attr({role:"presentation",tabIndex:-1});this.panels=$();this.anchors.each(function(i,anchor){var selector,panel,panelId,anchorId=$(anchor).uniqueId().attr("id"),tab=$(anchor).closest("li"),originalAriaControls=tab.attr("aria-controls");if(isLocal(anchor)){selector=anchor.hash;panel=that.element.find(that._sanitizeSelector(selector));}else{panelId=that._tabId(tab);selector="#"+panelId;panel=that.element.find(selector);if(!panel.length){panel=that._createPanel(panelId);panel.insertAfter(that.panels[i-1]||that.tablist);}
panel.attr("aria-live","polite");}
if(panel.length){that.panels=that.panels.add(panel);}
if(originalAriaControls){tab.data("ui-tabs-aria-controls",originalAriaControls);}
tab.attr({"aria-controls":selector.substring(1),"aria-labelledby":anchorId});panel.attr("aria-labelledby",anchorId);});this.panels.addClass("ui-tabs-panel ui-widget-content ui-corner-bottom").attr("role","tabpanel");},_getList:function(){return this.tablist||this.element.find("ol,ul").eq(0);},_createPanel:function(id){return $("<div>").attr("id",id).addClass("ui-tabs-panel ui-widget-content ui-corner-bottom").data("ui-tabs-destroy",true);},_setupDisabled:function(disabled){if($.isArray(disabled)){if(!disabled.length){disabled=false;}else if(disabled.length===this.anchors.length){disabled=true;}}
for(var i=0,li;(li=this.tabs[i]);i++){if(disabled===true||$.inArray(i,disabled)!==-1){$(li).addClass("ui-state-disabled").attr("aria-disabled","true");}else{$(li).removeClass("ui-state-disabled").removeAttr("aria-disabled");}}
this.options.disabled=disabled;},_setupEvents:function(event){var events={click:function(event){event.preventDefault();}};if(event){$.each(event.split(" "),function(index,eventName){events[eventName]="_eventHandler";});}
this._off(this.anchors.add(this.tabs).add(this.panels));this._on(this.anchors,events);this._on(this.tabs,{keydown:"_tabKeydown"});this._on(this.panels,{keydown:"_panelKeydown"});this._focusable(this.tabs);this._hoverable(this.tabs);},_setupHeightStyle:function(heightStyle){var maxHeight,parent=this.element.parent();if(heightStyle==="fill"){maxHeight=parent.height();maxHeight-=this.element.outerHeight()-this.element.height();this.element.siblings(":visible").each(function(){var elem=$(this),position=elem.css("position");if(position==="absolute"||position==="fixed"){return;}
maxHeight-=elem.outerHeight(true);});this.element.children().not(this.panels).each(function(){maxHeight-=$(this).outerHeight(true);});this.panels.each(function(){$(this).height(Math.max(0,maxHeight-
$(this).innerHeight()+$(this).height()));}).css("overflow","auto");}else if(heightStyle==="auto"){maxHeight=0;this.panels.each(function(){maxHeight=Math.max(maxHeight,$(this).height("").height());}).height(maxHeight);}},_eventHandler:function(event){var options=this.options,active=this.active,anchor=$(event.currentTarget),tab=anchor.closest("li"),clickedIsActive=tab[0]===active[0],collapsing=clickedIsActive&&options.collapsible,toShow=collapsing?$():this._getPanelForTab(tab),toHide=!active.length?$():this._getPanelForTab(active),eventData={oldTab:active,oldPanel:toHide,newTab:collapsing?$():tab,newPanel:toShow};event.preventDefault();if(tab.hasClass("ui-state-disabled")||tab.hasClass("ui-tabs-loading")||this.running||(clickedIsActive&&!options.collapsible)||(this._trigger("beforeActivate",event,eventData)===false)){return;}
options.active=collapsing?false:this.tabs.index(tab);this.active=clickedIsActive?$():tab;if(this.xhr){this.xhr.abort();}
if(!toHide.length&&!toShow.length){$.error("jQuery UI Tabs: Mismatching fragment identifier.");}
if(toShow.length){this.load(this.tabs.index(tab),event);}
this._toggle(event,eventData);},_toggle:function(event,eventData){var that=this,toShow=eventData.newPanel,toHide=eventData.oldPanel;this.running=true;function complete(){that.running=false;that._trigger("activate",event,eventData);}
function show(){eventData.newTab.closest("li").addClass("ui-tabs-active ui-state-active");if(toShow.length&&that.options.show){that._show(toShow,that.options.show,complete);}else{toShow.show();complete();}}
if(toHide.length&&this.options.hide){this._hide(toHide,this.options.hide,function(){eventData.oldTab.closest("li").removeClass("ui-tabs-active ui-state-active");show();});}else{eventData.oldTab.closest("li").removeClass("ui-tabs-active ui-state-active");toHide.hide();show();}
toHide.attr({"aria-expanded":"false","aria-hidden":"true"});eventData.oldTab.attr("aria-selected","false");if(toShow.length&&toHide.length){eventData.oldTab.attr("tabIndex",-1);}else if(toShow.length){this.tabs.filter(function(){return $(this).attr("tabIndex")===0;}).attr("tabIndex",-1);}
toShow.attr({"aria-expanded":"true","aria-hidden":"false"});eventData.newTab.attr({"aria-selected":"true",tabIndex:0});},_activate:function(index){var anchor,active=this._findActive(index);if(active[0]===this.active[0]){return;}
if(!active.length){active=this.active;}
anchor=active.find(".ui-tabs-anchor")[0];this._eventHandler({target:anchor,currentTarget:anchor,preventDefault:$.noop});},_findActive:function(index){return index===false?$():this.tabs.eq(index);},_getIndex:function(index){if(typeof index==="string"){index=this.anchors.index(this.anchors.filter("[href$='"+index+"']"));}
return index;},_destroy:function(){if(this.xhr){this.xhr.abort();}
this.element.removeClass("ui-tabs ui-widget ui-widget-content ui-corner-all ui-tabs-collapsible");this.tablist.removeClass("ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all").removeAttr("role");this.anchors.removeClass("ui-tabs-anchor").removeAttr("role").removeAttr("tabIndex").removeUniqueId();this.tabs.add(this.panels).each(function(){if($.data(this,"ui-tabs-destroy")){$(this).remove();}else{$(this).removeClass("ui-state-default ui-state-active ui-state-disabled "+"ui-corner-top ui-corner-bottom ui-widget-content ui-tabs-active ui-tabs-panel").removeAttr("tabIndex").removeAttr("aria-live").removeAttr("aria-busy").removeAttr("aria-selected").removeAttr("aria-labelledby").removeAttr("aria-hidden").removeAttr("aria-expanded").removeAttr("role");}});this.tabs.each(function(){var li=$(this),prev=li.data("ui-tabs-aria-controls");if(prev){li.attr("aria-controls",prev).removeData("ui-tabs-aria-controls");}else{li.removeAttr("aria-controls");}});this.panels.show();if(this.options.heightStyle!=="content"){this.panels.css("height","");}},enable:function(index){var disabled=this.options.disabled;if(disabled===false){return;}
if(index===undefined){disabled=false;}else{index=this._getIndex(index);if($.isArray(disabled)){disabled=$.map(disabled,function(num){return num!==index?num:null;});}else{disabled=$.map(this.tabs,function(li,num){return num!==index?num:null;});}}
this._setupDisabled(disabled);},disable:function(index){var disabled=this.options.disabled;if(disabled===true){return;}
if(index===undefined){disabled=true;}else{index=this._getIndex(index);if($.inArray(index,disabled)!==-1){return;}
if($.isArray(disabled)){disabled=$.merge([index],disabled).sort();}else{disabled=[index];}}
this._setupDisabled(disabled);},load:function(index,event){index=this._getIndex(index);var that=this,tab=this.tabs.eq(index),anchor=tab.find(".ui-tabs-anchor"),panel=this._getPanelForTab(tab),eventData={tab:tab,panel:panel};if(isLocal(anchor[0])){return;}
this.xhr=$.ajax(this._ajaxSettings(anchor,event,eventData));if(this.xhr&&this.xhr.statusText!=="canceled"){tab.addClass("ui-tabs-loading");panel.attr("aria-busy","true");this.xhr.success(function(response){setTimeout(function(){panel.html(response);that._trigger("load",event,eventData);},1);}).complete(function(jqXHR,status){setTimeout(function(){if(status==="abort"){that.panels.stop(false,true);}
tab.removeClass("ui-tabs-loading");panel.removeAttr("aria-busy");if(jqXHR===that.xhr){delete that.xhr;}},1);});}},_ajaxSettings:function(anchor,event,eventData){var that=this;return{url:anchor.attr("href"),beforeSend:function(jqXHR,settings){return that._trigger("beforeLoad",event,$.extend({jqXHR:jqXHR,ajaxSettings:settings},eventData));}};},_getPanelForTab:function(tab){var id=$(tab).attr("aria-controls");return this.element.find(this._sanitizeSelector("#"+id));}});})(jQuery);(function($){var increments=0;function addDescribedBy(elem,id){var describedby=(elem.attr("aria-describedby")||"").split(/\s+/);describedby.push(id);elem.data("ui-tooltip-id",id).attr("aria-describedby",$.trim(describedby.join(" ")));}
function removeDescribedBy(elem){var id=elem.data("ui-tooltip-id"),describedby=(elem.attr("aria-describedby")||"").split(/\s+/),index=$.inArray(id,describedby);if(index!==-1){describedby.splice(index,1);}
elem.removeData("ui-tooltip-id");describedby=$.trim(describedby.join(" "));if(describedby){elem.attr("aria-describedby",describedby);}else{elem.removeAttr("aria-describedby");}}
$.widget("ui.tooltip",{version:"1.10.4",options:{content:function(){var title=$(this).attr("title")||"";return $("<a>").text(title).html();},hide:true,items:"[title]:not([disabled])",position:{my:"left top+15",at:"left bottom",collision:"flipfit flip"},show:true,tooltipClass:null,track:false,close:null,open:null},_create:function(){this._on({mouseover:"open",focusin:"open"});this.tooltips={};this.parents={};if(this.options.disabled){this._disable();}},_setOption:function(key,value){var that=this;if(key==="disabled"){this[value?"_disable":"_enable"]();this.options[key]=value;return;}
this._super(key,value);if(key==="content"){$.each(this.tooltips,function(id,element){that._updateContent(element);});}},_disable:function(){var that=this;$.each(this.tooltips,function(id,element){var event=$.Event("blur");event.target=event.currentTarget=element[0];that.close(event,true);});this.element.find(this.options.items).addBack().each(function(){var element=$(this);if(element.is("[title]")){element.data("ui-tooltip-title",element.attr("title")).attr("title","");}});},_enable:function(){this.element.find(this.options.items).addBack().each(function(){var element=$(this);if(element.data("ui-tooltip-title")){element.attr("title",element.data("ui-tooltip-title"));}});},open:function(event){var that=this,target=$(event?event.target:this.element).closest(this.options.items);if(!target.length||target.data("ui-tooltip-id")){return;}
if(target.attr("title")){target.data("ui-tooltip-title",target.attr("title"));}
target.data("ui-tooltip-open",true);if(event&&event.type==="mouseover"){target.parents().each(function(){var parent=$(this),blurEvent;if(parent.data("ui-tooltip-open")){blurEvent=$.Event("blur");blurEvent.target=blurEvent.currentTarget=this;that.close(blurEvent,true);}
if(parent.attr("title")){parent.uniqueId();that.parents[this.id]={element:this,title:parent.attr("title")};parent.attr("title","");}});}
this._updateContent(target,event);},_updateContent:function(target,event){var content,contentOption=this.options.content,that=this,eventType=event?event.type:null;if(typeof contentOption==="string"){return this._open(event,target,contentOption);}
content=contentOption.call(target[0],function(response){if(!target.data("ui-tooltip-open")){return;}
that._delay(function(){if(event){event.type=eventType;}
this._open(event,target,response);});});if(content){this._open(event,target,content);}},_open:function(event,target,content){var tooltip,events,delayedShow,positionOption=$.extend({},this.options.position);if(!content){return;}
tooltip=this._find(target);if(tooltip.length){tooltip.find(".ui-tooltip-content").html(content);return;}
if(target.is("[title]")){if(event&&event.type==="mouseover"){target.attr("title","");}else{target.removeAttr("title");}}
tooltip=this._tooltip(target);addDescribedBy(target,tooltip.attr("id"));tooltip.find(".ui-tooltip-content").html(content);function position(event){positionOption.of=event;if(tooltip.is(":hidden")){return;}
tooltip.position(positionOption);}
if(this.options.track&&event&&/^mouse/.test(event.type)){this._on(this.document,{mousemove:position});position(event);}else{tooltip.position($.extend({of:target},this.options.position));}
tooltip.hide();this._show(tooltip,this.options.show);if(this.options.show&&this.options.show.delay){delayedShow=this.delayedShow=setInterval(function(){if(tooltip.is(":visible")){position(positionOption.of);clearInterval(delayedShow);}},$.fx.interval);}
this._trigger("open",event,{tooltip:tooltip});events={keyup:function(event){if(event.keyCode===$.ui.keyCode.ESCAPE){var fakeEvent=$.Event(event);fakeEvent.currentTarget=target[0];this.close(fakeEvent,true);}},remove:function(){this._removeTooltip(tooltip);}};if(!event||event.type==="mouseover"){events.mouseleave="close";}
if(!event||event.type==="focusin"){events.focusout="close";}
this._on(true,target,events);},close:function(event){var that=this,target=$(event?event.currentTarget:this.element),tooltip=this._find(target);if(this.closing){return;}
clearInterval(this.delayedShow);if(target.data("ui-tooltip-title")){target.attr("title",target.data("ui-tooltip-title"));}
removeDescribedBy(target);tooltip.stop(true);this._hide(tooltip,this.options.hide,function(){that._removeTooltip($(this));});target.removeData("ui-tooltip-open");this._off(target,"mouseleave focusout keyup");if(target[0]!==this.element[0]){this._off(target,"remove");}
this._off(this.document,"mousemove");if(event&&event.type==="mouseleave"){$.each(this.parents,function(id,parent){$(parent.element).attr("title",parent.title);delete that.parents[id];});}
this.closing=true;this._trigger("close",event,{tooltip:tooltip});this.closing=false;},_tooltip:function(element){var id="ui-tooltip-"+increments++,tooltip=$("<div>").attr({id:id,role:"tooltip"}).addClass("ui-tooltip ui-widget ui-corner-all ui-widget-content "+
(this.options.tooltipClass||""));$("<div>").addClass("ui-tooltip-content").appendTo(tooltip);tooltip.appendTo(this.document[0].body);this.tooltips[id]=element;return tooltip;},_find:function(target){var id=target.data("ui-tooltip-id");return id?$("#"+id):$();},_removeTooltip:function(tooltip){tooltip.remove();delete this.tooltips[tooltip.attr("id")];},_destroy:function(){var that=this;$.each(this.tooltips,function(id,element){var event=$.Event("blur");event.target=event.currentTarget=element[0];that.close(event,true);$("#"+id).remove();if(element.data("ui-tooltip-title")){element.attr("title",element.data("ui-tooltip-title"));element.removeData("ui-tooltip-title");}});}});}(jQuery));
;/*
* jQuery Form Plugin; v20130903
* http://jquery.malsup.com/form/
* Copyright (c) 2013 M. Alsup; Dual licensed: MIT/GPL
* https://github.com/malsup/form#copyright-and-license
*/
;(function(e){"use strict";function t(t){var r=t.data;t.isDefaultPrevented()||(t.preventDefault(),e(this).ajaxSubmit(r))}function r(t){var r=t.target,a=e(r);if(!a.is("[type=submit],[type=image]")){var n=a.closest("[type=submit]");if(0===n.length)return;r=n[0]}var i=this;if(i.clk=r,"image"==r.type)if(void 0!==t.offsetX)i.clk_x=t.offsetX,i.clk_y=t.offsetY;else if("function"==typeof e.fn.offset){var o=a.offset();i.clk_x=t.pageX-o.left,i.clk_y=t.pageY-o.top}else i.clk_x=t.pageX-r.offsetLeft,i.clk_y=t.pageY-r.offsetTop;setTimeout(function(){i.clk=i.clk_x=i.clk_y=null},100)}function a(){if(e.fn.ajaxSubmit.debug){var t="[jquery.form] "+Array.prototype.join.call(arguments,"");window.console&&window.console.log?window.console.log(t):window.opera&&window.opera.postError&&window.opera.postError(t)}}var n={};n.fileapi=void 0!==e("<input type='file'/>").get(0).files,n.formdata=void 0!==window.FormData;var i=!!e.fn.prop;e.fn.attr2=function(){if(!i)return this.attr.apply(this,arguments);var e=this.prop.apply(this,arguments);return e&&e.jquery||"string"==typeof e?e:this.attr.apply(this,arguments)},e.fn.ajaxSubmit=function(t){function r(r){var a,n,i=e.param(r,t.traditional).split("&"),o=i.length,s=[];for(a=0;o>a;a++)i[a]=i[a].replace(/\+/g," "),n=i[a].split("="),s.push([decodeURIComponent(n[0]),decodeURIComponent(n[1])]);return s}function o(a){for(var n=new FormData,i=0;a.length>i;i++)n.append(a[i].name,a[i].value);if(t.extraData){var o=r(t.extraData);for(i=0;o.length>i;i++)o[i]&&n.append(o[i][0],o[i][1])}t.data=null;var s=e.extend(!0,{},e.ajaxSettings,t,{contentType:!1,processData:!1,cache:!1,type:u||"POST"});t.uploadProgress&&(s.xhr=function(){var r=e.ajaxSettings.xhr();return r.upload&&r.upload.addEventListener("progress",function(e){var r=0,a=e.loaded||e.position,n=e.total;e.lengthComputable&&(r=Math.ceil(100*(a/n))),t.uploadProgress(e,a,n,r)},!1),r}),s.data=null;var l=s.beforeSend;return s.beforeSend=function(e,t){t.data=n,l&&l.call(this,e,t)},e.ajax(s)}function s(r){function n(e){var t=null;try{e.contentWindow&&(t=e.contentWindow.document)}catch(r){a("cannot get iframe.contentWindow document: "+r)}if(t)return t;try{t=e.contentDocument?e.contentDocument:e.document}catch(r){a("cannot get iframe.contentDocument: "+r),t=e.document}return t}function o(){function t(){try{var e=n(g).readyState;a("state = "+e),e&&"uninitialized"==e.toLowerCase()&&setTimeout(t,50)}catch(r){a("Server abort: ",r," (",r.name,")"),s(D),j&&clearTimeout(j),j=void 0}}var r=f.attr2("target"),i=f.attr2("action");w.setAttribute("target",d),(!u||/post/i.test(u))&&w.setAttribute("method","POST"),i!=m.url&&w.setAttribute("action",m.url),m.skipEncodingOverride||u&&!/post/i.test(u)||f.attr({encoding:"multipart/form-data",enctype:"multipart/form-data"}),m.timeout&&(j=setTimeout(function(){T=!0,s(k)},m.timeout));var o=[];try{if(m.extraData)for(var l in m.extraData)m.extraData.hasOwnProperty(l)&&(e.isPlainObject(m.extraData[l])&&m.extraData[l].hasOwnProperty("name")&&m.extraData[l].hasOwnProperty("value")?o.push(e('<input type="hidden" name="'+m.extraData[l].name+'">').val(m.extraData[l].value).appendTo(w)[0]):o.push(e('<input type="hidden" name="'+l+'">').val(m.extraData[l]).appendTo(w)[0]));m.iframeTarget||v.appendTo("body"),g.attachEvent?g.attachEvent("onload",s):g.addEventListener("load",s,!1),setTimeout(t,15);try{w.submit()}catch(c){var p=document.createElement("form").submit;p.apply(w)}}finally{w.setAttribute("action",i),r?w.setAttribute("target",r):f.removeAttr("target"),e(o).remove()}}function s(t){if(!x.aborted&&!F){if(M=n(g),M||(a("cannot access response document"),t=D),t===k&&x)return x.abort("timeout"),S.reject(x,"timeout"),void 0;if(t==D&&x)return x.abort("server abort"),S.reject(x,"error","server abort"),void 0;if(M&&M.location.href!=m.iframeSrc||T){g.detachEvent?g.detachEvent("onload",s):g.removeEventListener("load",s,!1);var r,i="success";try{if(T)throw"timeout";var o="xml"==m.dataType||M.XMLDocument||e.isXMLDoc(M);if(a("isXml="+o),!o&&window.opera&&(null===M.body||!M.body.innerHTML)&&--O)return a("requeing onLoad callback, DOM not available"),setTimeout(s,250),void 0;var u=M.body?M.body:M.documentElement;x.responseText=u?u.innerHTML:null,x.responseXML=M.XMLDocument?M.XMLDocument:M,o&&(m.dataType="xml"),x.getResponseHeader=function(e){var t={"content-type":m.dataType};return t[e.toLowerCase()]},u&&(x.status=Number(u.getAttribute("status"))||x.status,x.statusText=u.getAttribute("statusText")||x.statusText);var l=(m.dataType||"").toLowerCase(),c=/(json|script|text)/.test(l);if(c||m.textarea){var f=M.getElementsByTagName("textarea")[0];if(f)x.responseText=f.value,x.status=Number(f.getAttribute("status"))||x.status,x.statusText=f.getAttribute("statusText")||x.statusText;else if(c){var d=M.getElementsByTagName("pre")[0],h=M.getElementsByTagName("body")[0];d?x.responseText=d.textContent?d.textContent:d.innerText:h&&(x.responseText=h.textContent?h.textContent:h.innerText)}}else"xml"==l&&!x.responseXML&&x.responseText&&(x.responseXML=X(x.responseText));try{E=_(x,l,m)}catch(b){i="parsererror",x.error=r=b||i}}catch(b){a("error caught: ",b),i="error",x.error=r=b||i}x.aborted&&(a("upload aborted"),i=null),x.status&&(i=x.status>=200&&300>x.status||304===x.status?"success":"error"),"success"===i?(m.success&&m.success.call(m.context,E,"success",x),S.resolve(x.responseText,"success",x),p&&e.event.trigger("ajaxSuccess",[x,m])):i&&(void 0===r&&(r=x.statusText),m.error&&m.error.call(m.context,x,i,r),S.reject(x,"error",r),p&&e.event.trigger("ajaxError",[x,m,r])),p&&e.event.trigger("ajaxComplete",[x,m]),p&&!--e.active&&e.event.trigger("ajaxStop"),m.complete&&m.complete.call(m.context,x,i),F=!0,m.timeout&&clearTimeout(j),setTimeout(function(){m.iframeTarget?v.attr("src",m.iframeSrc):v.remove(),x.responseXML=null},100)}}}var l,c,m,p,d,v,g,x,b,y,T,j,w=f[0],S=e.Deferred();if(S.abort=function(e){x.abort(e)},r)for(c=0;h.length>c;c++)l=e(h[c]),i?l.prop("disabled",!1):l.removeAttr("disabled");if(m=e.extend(!0,{},e.ajaxSettings,t),m.context=m.context||m,d="jqFormIO"+(new Date).getTime(),m.iframeTarget?(v=e(m.iframeTarget),y=v.attr2("name"),y?d=y:v.attr2("name",d)):(v=e('<iframe name="'+d+'" src="'+m.iframeSrc+'" />'),v.css({position:"absolute",top:"-1000px",left:"-1000px"})),g=v[0],x={aborted:0,responseText:null,responseXML:null,status:0,statusText:"n/a",getAllResponseHeaders:function(){},getResponseHeader:function(){},setRequestHeader:function(){},abort:function(t){var r="timeout"===t?"timeout":"aborted";a("aborting upload... "+r),this.aborted=1;try{g.contentWindow.document.execCommand&&g.contentWindow.document.execCommand("Stop")}catch(n){}v.attr("src",m.iframeSrc),x.error=r,m.error&&m.error.call(m.context,x,r,t),p&&e.event.trigger("ajaxError",[x,m,r]),m.complete&&m.complete.call(m.context,x,r)}},p=m.global,p&&0===e.active++&&e.event.trigger("ajaxStart"),p&&e.event.trigger("ajaxSend",[x,m]),m.beforeSend&&m.beforeSend.call(m.context,x,m)===!1)return m.global&&e.active--,S.reject(),S;if(x.aborted)return S.reject(),S;b=w.clk,b&&(y=b.name,y&&!b.disabled&&(m.extraData=m.extraData||{},m.extraData[y]=b.value,"image"==b.type&&(m.extraData[y+".x"]=w.clk_x,m.extraData[y+".y"]=w.clk_y)));var k=1,D=2,A=e("meta[name=csrf-token]").attr("content"),L=e("meta[name=csrf-param]").attr("content");L&&A&&(m.extraData=m.extraData||{},m.extraData[L]=A),m.forceSync?o():setTimeout(o,10);var E,M,F,O=50,X=e.parseXML||function(e,t){return window.ActiveXObject?(t=new ActiveXObject("Microsoft.XMLDOM"),t.async="false",t.loadXML(e)):t=(new DOMParser).parseFromString(e,"text/xml"),t&&t.documentElement&&"parsererror"!=t.documentElement.nodeName?t:null},C=e.parseJSON||function(e){return window.eval("("+e+")")},_=function(t,r,a){var n=t.getResponseHeader("content-type")||"",i="xml"===r||!r&&n.indexOf("xml")>=0,o=i?t.responseXML:t.responseText;return i&&"parsererror"===o.documentElement.nodeName&&e.error&&e.error("parsererror"),a&&a.dataFilter&&(o=a.dataFilter(o,r)),"string"==typeof o&&("json"===r||!r&&n.indexOf("json")>=0?o=C(o):("script"===r||!r&&n.indexOf("javascript")>=0)&&e.globalEval(o)),o};return S}if(!this.length)return a("ajaxSubmit: skipping submit process - no element selected"),this;var u,l,c,f=this;"function"==typeof t?t={success:t}:void 0===t&&(t={}),u=t.type||this.attr2("method"),l=t.url||this.attr2("action"),c="string"==typeof l?e.trim(l):"",c=c||window.location.href||"",c&&(c=(c.match(/^([^#]+)/)||[])[1]),t=e.extend(!0,{url:c,success:e.ajaxSettings.success,type:u||e.ajaxSettings.type,iframeSrc:/^https/i.test(window.location.href||"")?"javascript:false":"about:blank"},t);var m={};if(this.trigger("form-pre-serialize",[this,t,m]),m.veto)return a("ajaxSubmit: submit vetoed via form-pre-serialize trigger"),this;if(t.beforeSerialize&&t.beforeSerialize(this,t)===!1)return a("ajaxSubmit: submit aborted via beforeSerialize callback"),this;var p=t.traditional;void 0===p&&(p=e.ajaxSettings.traditional);var d,h=[],v=this.formToArray(t.semantic,h);if(t.data&&(t.extraData=t.data,d=e.param(t.data,p)),t.beforeSubmit&&t.beforeSubmit(v,this,t)===!1)return a("ajaxSubmit: submit aborted via beforeSubmit callback"),this;if(this.trigger("form-submit-validate",[v,this,t,m]),m.veto)return a("ajaxSubmit: submit vetoed via form-submit-validate trigger"),this;var g=e.param(v,p);d&&(g=g?g+"&"+d:d),"GET"==t.type.toUpperCase()?(t.url+=(t.url.indexOf("?")>=0?"&":"?")+g,t.data=null):t.data=g;var x=[];if(t.resetForm&&x.push(function(){f.resetForm()}),t.clearForm&&x.push(function(){f.clearForm(t.includeHidden)}),!t.dataType&&t.target){var b=t.success||function(){};x.push(function(r){var a=t.replaceTarget?"replaceWith":"html";e(t.target)[a](r).each(b,arguments)})}else t.success&&x.push(t.success);if(t.success=function(e,r,a){for(var n=t.context||this,i=0,o=x.length;o>i;i++)x[i].apply(n,[e,r,a||f,f])},t.error){var y=t.error;t.error=function(e,r,a){var n=t.context||this;y.apply(n,[e,r,a,f])}}if(t.complete){var T=t.complete;t.complete=function(e,r){var a=t.context||this;T.apply(a,[e,r,f])}}var j=e("input[type=file]:enabled",this).filter(function(){return""!=e(this).val()}),w=j.length>0,S="multipart/form-data",k=f.attr("enctype")==S||f.attr("encoding")==S,D=n.fileapi&&n.formdata;a("fileAPI :"+D);var A,L=(w||k)&&!D;t.iframe!==!1&&(t.iframe||L)?t.closeKeepAlive?e.get(t.closeKeepAlive,function(){A=s(v)}):A=s(v):A=(w||k)&&D?o(v):e.ajax(t),f.removeData("jqxhr").data("jqxhr",A);for(var E=0;h.length>E;E++)h[E]=null;return this.trigger("form-submit-notify",[this,t]),this},e.fn.ajaxForm=function(n){if(n=n||{},n.delegation=n.delegation&&e.isFunction(e.fn.on),!n.delegation&&0===this.length){var i={s:this.selector,c:this.context};return!e.isReady&&i.s?(a("DOM not ready, queuing ajaxForm"),e(function(){e(i.s,i.c).ajaxForm(n)}),this):(a("terminating; zero elements found by selector"+(e.isReady?"":" (DOM not ready)")),this)}return n.delegation?(e(document).off("submit.form-plugin",this.selector,t).off("click.form-plugin",this.selector,r).on("submit.form-plugin",this.selector,n,t).on("click.form-plugin",this.selector,n,r),this):this.ajaxFormUnbind().bind("submit.form-plugin",n,t).bind("click.form-plugin",n,r)},e.fn.ajaxFormUnbind=function(){return this.unbind("submit.form-plugin click.form-plugin")},e.fn.formToArray=function(t,r){var a=[];if(0===this.length)return a;var i=this[0],o=t?i.getElementsByTagName("*"):i.elements;if(!o)return a;var s,u,l,c,f,m,p;for(s=0,m=o.length;m>s;s++)if(f=o[s],l=f.name,l&&!f.disabled)if(t&&i.clk&&"image"==f.type)i.clk==f&&(a.push({name:l,value:e(f).val(),type:f.type}),a.push({name:l+".x",value:i.clk_x},{name:l+".y",value:i.clk_y}));else if(c=e.fieldValue(f,!0),c&&c.constructor==Array)for(r&&r.push(f),u=0,p=c.length;p>u;u++)a.push({name:l,value:c[u]});else if(n.fileapi&&"file"==f.type){r&&r.push(f);var d=f.files;if(d.length)for(u=0;d.length>u;u++)a.push({name:l,value:d[u],type:f.type});else a.push({name:l,value:"",type:f.type})}else null!==c&&c!==void 0&&(r&&r.push(f),a.push({name:l,value:c,type:f.type,required:f.required}));if(!t&&i.clk){var h=e(i.clk),v=h[0];l=v.name,l&&!v.disabled&&"image"==v.type&&(a.push({name:l,value:h.val()}),a.push({name:l+".x",value:i.clk_x},{name:l+".y",value:i.clk_y}))}return a},e.fn.formSerialize=function(t){return e.param(this.formToArray(t))},e.fn.fieldSerialize=function(t){var r=[];return this.each(function(){var a=this.name;if(a){var n=e.fieldValue(this,t);if(n&&n.constructor==Array)for(var i=0,o=n.length;o>i;i++)r.push({name:a,value:n[i]});else null!==n&&n!==void 0&&r.push({name:this.name,value:n})}}),e.param(r)},e.fn.fieldValue=function(t){for(var r=[],a=0,n=this.length;n>a;a++){var i=this[a],o=e.fieldValue(i,t);null===o||void 0===o||o.constructor==Array&&!o.length||(o.constructor==Array?e.merge(r,o):r.push(o))}return r},e.fieldValue=function(t,r){var a=t.name,n=t.type,i=t.tagName.toLowerCase();if(void 0===r&&(r=!0),r&&(!a||t.disabled||"reset"==n||"button"==n||("checkbox"==n||"radio"==n)&&!t.checked||("submit"==n||"image"==n)&&t.form&&t.form.clk!=t||"select"==i&&-1==t.selectedIndex))return null;if("select"==i){var o=t.selectedIndex;if(0>o)return null;for(var s=[],u=t.options,l="select-one"==n,c=l?o+1:u.length,f=l?o:0;c>f;f++){var m=u[f];if(m.selected){var p=m.value;if(p||(p=m.attributes&&m.attributes.value&&!m.attributes.value.specified?m.text:m.value),l)return p;s.push(p)}}return s}return e(t).val()},e.fn.clearForm=function(t){return this.each(function(){e("input,select,textarea",this).clearFields(t)})},e.fn.clearFields=e.fn.clearInputs=function(t){var r=/^(?:color|date|datetime|email|month|number|password|range|search|tel|text|time|url|week)$/i;return this.each(function(){var a=this.type,n=this.tagName.toLowerCase();r.test(a)||"textarea"==n?this.value="":"checkbox"==a||"radio"==a?this.checked=!1:"select"==n?this.selectedIndex=-1:"file"==a?/MSIE/.test(navigator.userAgent)?e(this).replaceWith(e(this).clone(!0)):e(this).val(""):t&&(t===!0&&/hidden/.test(a)||"string"==typeof t&&e(this).is(t))&&(this.value="")})},e.fn.resetForm=function(){return this.each(function(){("function"==typeof this.reset||"object"==typeof this.reset&&!this.reset.nodeType)&&this.reset()})},e.fn.enable=function(e){return void 0===e&&(e=!0),this.each(function(){this.disabled=!e})},e.fn.selected=function(t){return void 0===t&&(t=!0),this.each(function(){var r=this.type;if("checkbox"==r||"radio"==r)this.checked=t;else if("option"==this.tagName.toLowerCase()){var a=e(this).parent("select");t&&a[0]&&"select-one"==a[0].type&&a.find("option").selected(!1),this.selected=t}})},e.fn.ajaxSubmit.debug=!1})("undefined"!=typeof jQuery?jQuery:window.Zepto);
;/*! jQuery Validation Plugin - v1.11.1 - 3/22/2013\n* https://github.com/jzaefferer/jquery-validation
* Copyright (c) 2013 Jörn Zaefferer; Licensed MIT */(function(t){t.extend(t.fn,{validate:function(e){if(!this.length)return e&&e.debug&&window.console&&console.warn("Nothing selected, can't validate, returning nothing."),void 0;var i=t.data(this[0],"validator");return i?i:(this.attr("novalidate","novalidate"),i=new t.validator(e,this[0]),t.data(this[0],"validator",i),i.settings.onsubmit&&(this.validateDelegate(":submit","click",function(e){i.settings.submitHandler&&(i.submitButton=e.target),t(e.target).hasClass("cancel")&&(i.cancelSubmit=!0),void 0!==t(e.target).attr("formnovalidate")&&(i.cancelSubmit=!0)}),this.submit(function(e){function s(){var s;return i.settings.submitHandler?(i.submitButton&&(s=t("<input type='hidden'/>").attr("name",i.submitButton.name).val(t(i.submitButton).val()).appendTo(i.currentForm)),i.settings.submitHandler.call(i,i.currentForm,e),i.submitButton&&s.remove(),!1):!0}return i.settings.debug&&e.preventDefault(),i.cancelSubmit?(i.cancelSubmit=!1,s()):i.form()?i.pendingRequest?(i.formSubmitted=!0,!1):s():(i.focusInvalid(),!1)})),i)},valid:function(){if(t(this[0]).is("form"))return this.validate().form();var e=!0,i=t(this[0].form).validate();return this.each(function(){e=e&&i.element(this)}),e},removeAttrs:function(e){var i={},s=this;return t.each(e.split(/\s/),function(t,e){i[e]=s.attr(e),s.removeAttr(e)}),i},rules:function(e,i){var s=this[0];if(e){var r=t.data(s.form,"validator").settings,n=r.rules,a=t.validator.staticRules(s);switch(e){case"add":t.extend(a,t.validator.normalizeRule(i)),delete a.messages,n[s.name]=a,i.messages&&(r.messages[s.name]=t.extend(r.messages[s.name],i.messages));break;case"remove":if(!i)return delete n[s.name],a;var u={};return t.each(i.split(/\s/),function(t,e){u[e]=a[e],delete a[e]}),u}}var o=t.validator.normalizeRules(t.extend({},t.validator.classRules(s),t.validator.attributeRules(s),t.validator.dataRules(s),t.validator.staticRules(s)),s);if(o.required){var l=o.required;delete o.required,o=t.extend({required:l},o)}return o}}),t.extend(t.expr[":"],{blank:function(e){return!t.trim(""+t(e).val())},filled:function(e){return!!t.trim(""+t(e).val())},unchecked:function(e){return!t(e).prop("checked")}}),t.validator=function(e,i){this.settings=t.extend(!0,{},t.validator.defaults,e),this.currentForm=i,this.init()},t.validator.format=function(e,i){return 1===arguments.length?function(){var i=t.makeArray(arguments);return i.unshift(e),t.validator.format.apply(this,i)}:(arguments.length>2&&i.constructor!==Array&&(i=t.makeArray(arguments).slice(1)),i.constructor!==Array&&(i=[i]),t.each(i,function(t,i){e=e.replace(RegExp("\\{"+t+"\\}","g"),function(){return i})}),e)},t.extend(t.validator,{defaults:{messages:{},groups:{},rules:{},errorClass:"error",validClass:"valid",errorElement:"label",focusInvalid:!0,errorContainer:t([]),errorLabelContainer:t([]),onsubmit:!0,ignore:":hidden",ignoreTitle:!1,onfocusin:function(t){this.lastActive=t,this.settings.focusCleanup&&!this.blockFocusCleanup&&(this.settings.unhighlight&&this.settings.unhighlight.call(this,t,this.settings.errorClass,this.settings.validClass),this.addWrapper(this.errorsFor(t)).hide())},onfocusout:function(t){this.checkable(t)||!(t.name in this.submitted)&&this.optional(t)||this.element(t)},onkeyup:function(t,e){(9!==e.which||""!==this.elementValue(t))&&(t.name in this.submitted||t===this.lastElement)&&this.element(t)},onclick:function(t){t.name in this.submitted?this.element(t):t.parentNode.name in this.submitted&&this.element(t.parentNode)},highlight:function(e,i,s){"radio"===e.type?this.findByName(e.name).addClass(i).removeClass(s):t(e).addClass(i).removeClass(s)},unhighlight:function(e,i,s){"radio"===e.type?this.findByName(e.name).removeClass(i).addClass(s):t(e).removeClass(i).addClass(s)}},setDefaults:function(e){t.extend(t.validator.defaults,e)},messages:{required:"This field is required.",remote:"Please fix this field.",email:"Please enter a valid email address.",url:"Please enter a valid URL.",date:"Please enter a valid date.",dateISO:"Please enter a valid date (ISO).",number:"Please enter a valid number.",digits:"Please enter only digits.",creditcard:"Please enter a valid credit card number.",equalTo:"Please enter the same value again.",maxlength:t.validator.format("Please enter no more than {0} characters."),minlength:t.validator.format("Please enter at least {0} characters."),rangelength:t.validator.format("Please enter a value between {0} and {1} characters long."),range:t.validator.format("Please enter a value between {0} and {1}."),max:t.validator.format("Please enter a value less than or equal to {0}."),min:t.validator.format("Please enter a value greater than or equal to {0}.")},autoCreateRanges:!1,prototype:{init:function(){function e(e){var i=t.data(this[0].form,"validator"),s="on"+e.type.replace(/^validate/,"");i.settings[s]&&i.settings[s].call(i,this[0],e)}this.labelContainer=t(this.settings.errorLabelContainer),this.errorContext=this.labelContainer.length&&this.labelContainer||t(this.currentForm),this.containers=t(this.settings.errorContainer).add(this.settings.errorLabelContainer),this.submitted={},this.valueCache={},this.pendingRequest=0,this.pending={},this.invalid={},this.reset();var i=this.groups={};t.each(this.settings.groups,function(e,s){"string"==typeof s&&(s=s.split(/\s/)),t.each(s,function(t,s){i[s]=e})});var s=this.settings.rules;t.each(s,function(e,i){s[e]=t.validator.normalizeRule(i)}),t(this.currentForm).validateDelegate(":text, [type='password'], [type='file'], select, textarea, [type='number'], [type='search'] ,[type='tel'], [type='url'], [type='email'], [type='datetime'], [type='date'], [type='month'], [type='week'], [type='time'], [type='datetime-local'], [type='range'], [type='color'] ","focusin focusout keyup",e).validateDelegate("[type='radio'], [type='checkbox'], select, option","click",e),this.settings.invalidHandler&&t(this.currentForm).bind("invalid-form.validate",this.settings.invalidHandler)},form:function(){return this.checkForm(),t.extend(this.submitted,this.errorMap),this.invalid=t.extend({},this.errorMap),this.valid()||t(this.currentForm).triggerHandler("invalid-form",[this]),this.showErrors(),this.valid()},checkForm:function(){this.prepareForm();for(var t=0,e=this.currentElements=this.elements();e[t];t++)this.check(e[t]);return this.valid()},element:function(e){e=this.validationTargetFor(this.clean(e)),this.lastElement=e,this.prepareElement(e),this.currentElements=t(e);var i=this.check(e)!==!1;return i?delete this.invalid[e.name]:this.invalid[e.name]=!0,this.numberOfInvalids()||(this.toHide=this.toHide.add(this.containers)),this.showErrors(),i},showErrors:function(e){if(e){t.extend(this.errorMap,e),this.errorList=[];for(var i in e)this.errorList.push({message:e[i],element:this.findByName(i)[0]});this.successList=t.grep(this.successList,function(t){return!(t.name in e)})}this.settings.showErrors?this.settings.showErrors.call(this,this.errorMap,this.errorList):this.defaultShowErrors()},resetForm:function(){t.fn.resetForm&&t(this.currentForm).resetForm(),this.submitted={},this.lastElement=null,this.prepareForm(),this.hideErrors(),this.elements().removeClass(this.settings.errorClass).removeData("previousValue")},numberOfInvalids:function(){return this.objectLength(this.invalid)},objectLength:function(t){var e=0;for(var i in t)e++;return e},hideErrors:function(){this.addWrapper(this.toHide).hide()},valid:function(){return 0===this.size()},size:function(){return this.errorList.length},focusInvalid:function(){if(this.settings.focusInvalid)try{t(this.findLastActive()||this.errorList.length&&this.errorList[0].element||[]).filter(":visible").focus().trigger("focusin")}catch(e){}},findLastActive:function(){var e=this.lastActive;return e&&1===t.grep(this.errorList,function(t){return t.element.name===e.name}).length&&e},elements:function(){var e=this,i={};return t(this.currentForm).find("input, select, textarea").not(":submit, :reset, :image, [disabled]").not(this.settings.ignore).filter(function(){return!this.name&&e.settings.debug&&window.console&&console.error("%o has no name assigned",this),this.name in i||!e.objectLength(t(this).rules())?!1:(i[this.name]=!0,!0)})},clean:function(e){return t(e)[0]},errors:function(){var e=this.settings.errorClass.replace(" ",".");return t(this.settings.errorElement+"."+e,this.errorContext)},reset:function(){this.successList=[],this.errorList=[],this.errorMap={},this.toShow=t([]),this.toHide=t([]),this.currentElements=t([])},prepareForm:function(){this.reset(),this.toHide=this.errors().add(this.containers)},prepareElement:function(t){this.reset(),this.toHide=this.errorsFor(t)},elementValue:function(e){var i=t(e).attr("type"),s=t(e).val();return"radio"===i||"checkbox"===i?t("input[name='"+t(e).attr("name")+"']:checked").val():"string"==typeof s?s.replace(/\r/g,""):s},check:function(e){e=this.validationTargetFor(this.clean(e));var i,s=t(e).rules(),r=!1,n=this.elementValue(e);for(var a in s){var u={method:a,parameters:s[a]};try{if(i=t.validator.methods[a].call(this,n,e,u.parameters),"dependency-mismatch"===i){r=!0;continue}if(r=!1,"pending"===i)return this.toHide=this.toHide.not(this.errorsFor(e)),void 0;if(!i)return this.formatAndAdd(e,u),!1}catch(o){throw this.settings.debug&&window.console&&console.log("Exception occurred when checking element "+e.id+", check the '"+u.method+"' method.",o),o}}return r?void 0:(this.objectLength(s)&&this.successList.push(e),!0)},customDataMessage:function(e,i){return t(e).data("msg-"+i.toLowerCase())||e.attributes&&t(e).attr("data-msg-"+i.toLowerCase())},customMessage:function(t,e){var i=this.settings.messages[t];return i&&(i.constructor===String?i:i[e])},findDefined:function(){for(var t=0;arguments.length>t;t++)if(void 0!==arguments[t])return arguments[t];return void 0},defaultMessage:function(e,i){return this.findDefined(this.customMessage(e.name,i),this.customDataMessage(e,i),!this.settings.ignoreTitle&&e.title||void 0,t.validator.messages[i],"<strong>Warning: No message defined for "+e.name+"</strong>")},formatAndAdd:function(e,i){var s=this.defaultMessage(e,i.method),r=/\$?\{(\d+)\}/g;"function"==typeof s?s=s.call(this,i.parameters,e):r.test(s)&&(s=t.validator.format(s.replace(r,"{$1}"),i.parameters)),this.errorList.push({message:s,element:e}),this.errorMap[e.name]=s,this.submitted[e.name]=s},addWrapper:function(t){return this.settings.wrapper&&(t=t.add(t.parent(this.settings.wrapper))),t},defaultShowErrors:function(){var t,e;for(t=0;this.errorList[t];t++){var i=this.errorList[t];this.settings.highlight&&this.settings.highlight.call(this,i.element,this.settings.errorClass,this.settings.validClass),this.showLabel(i.element,i.message)}if(this.errorList.length&&(this.toShow=this.toShow.add(this.containers)),this.settings.success)for(t=0;this.successList[t];t++)this.showLabel(this.successList[t]);if(this.settings.unhighlight)for(t=0,e=this.validElements();e[t];t++)this.settings.unhighlight.call(this,e[t],this.settings.errorClass,this.settings.validClass);this.toHide=this.toHide.not(this.toShow),this.hideErrors(),this.addWrapper(this.toShow).show()},validElements:function(){return this.currentElements.not(this.invalidElements())},invalidElements:function(){return t(this.errorList).map(function(){return this.element})},showLabel:function(e,i){var s=this.errorsFor(e);s.length?(s.removeClass(this.settings.validClass).addClass(this.settings.errorClass),s.html(i)):(s=t("<"+this.settings.errorElement+">").attr("for",this.idOrName(e)).addClass(this.settings.errorClass).html(i||""),this.settings.wrapper&&(s=s.hide().show().wrap("<"+this.settings.wrapper+"/>").parent()),this.labelContainer.append(s).length||(this.settings.errorPlacement?this.settings.errorPlacement(s,t(e)):s.insertAfter(e))),!i&&this.settings.success&&(s.text(""),"string"==typeof this.settings.success?s.addClass(this.settings.success):this.settings.success(s,e)),this.toShow=this.toShow.add(s)},errorsFor:function(e){var i=this.idOrName(e);return this.errors().filter(function(){return t(this).attr("for")===i})},idOrName:function(t){return this.groups[t.name]||(this.checkable(t)?t.name:t.id||t.name)},validationTargetFor:function(t){return this.checkable(t)&&(t=this.findByName(t.name).not(this.settings.ignore)[0]),t},checkable:function(t){return/radio|checkbox/i.test(t.type)},findByName:function(e){return t(this.currentForm).find("[name='"+e+"']")},getLength:function(e,i){switch(i.nodeName.toLowerCase()){case"select":return t("option:selected",i).length;case"input":if(this.checkable(i))return this.findByName(i.name).filter(":checked").length}return e.length},depend:function(t,e){return this.dependTypes[typeof t]?this.dependTypes[typeof t](t,e):!0},dependTypes:{"boolean":function(t){return t},string:function(e,i){return!!t(e,i.form).length},"function":function(t,e){return t(e)}},optional:function(e){var i=this.elementValue(e);return!t.validator.methods.required.call(this,i,e)&&"dependency-mismatch"},startRequest:function(t){this.pending[t.name]||(this.pendingRequest++,this.pending[t.name]=!0)},stopRequest:function(e,i){this.pendingRequest--,0>this.pendingRequest&&(this.pendingRequest=0),delete this.pending[e.name],i&&0===this.pendingRequest&&this.formSubmitted&&this.form()?(t(this.currentForm).submit(),this.formSubmitted=!1):!i&&0===this.pendingRequest&&this.formSubmitted&&(t(this.currentForm).triggerHandler("invalid-form",[this]),this.formSubmitted=!1)},previousValue:function(e){return t.data(e,"previousValue")||t.data(e,"previousValue",{old:null,valid:!0,message:this.defaultMessage(e,"remote")})}},classRuleSettings:{required:{required:!0},email:{email:!0},url:{url:!0},date:{date:!0},dateISO:{dateISO:!0},number:{number:!0},digits:{digits:!0},creditcard:{creditcard:!0}},addClassRules:function(e,i){e.constructor===String?this.classRuleSettings[e]=i:t.extend(this.classRuleSettings,e)},classRules:function(e){var i={},s=t(e).attr("class");return s&&t.each(s.split(" "),function(){this in t.validator.classRuleSettings&&t.extend(i,t.validator.classRuleSettings[this])}),i},attributeRules:function(e){var i={},s=t(e),r=s[0].getAttribute("type");for(var n in t.validator.methods){var a;"required"===n?(a=s.get(0).getAttribute(n),""===a&&(a=!0),a=!!a):a=s.attr(n),/min|max/.test(n)&&(null===r||/number|range|text/.test(r))&&(a=Number(a)),a?i[n]=a:r===n&&"range"!==r&&(i[n]=!0)}return i.maxlength&&/-1|2147483647|524288/.test(i.maxlength)&&delete i.maxlength,i},dataRules:function(e){var i,s,r={},n=t(e);for(i in t.validator.methods)s=n.data("rule-"+i.toLowerCase()),void 0!==s&&(r[i]=s);return r},staticRules:function(e){var i={},s=t.data(e.form,"validator");return s.settings.rules&&(i=t.validator.normalizeRule(s.settings.rules[e.name])||{}),i},normalizeRules:function(e,i){return t.each(e,function(s,r){if(r===!1)return delete e[s],void 0;if(r.param||r.depends){var n=!0;switch(typeof r.depends){case"string":n=!!t(r.depends,i.form).length;break;case"function":n=r.depends.call(i,i)}n?e[s]=void 0!==r.param?r.param:!0:delete e[s]}}),t.each(e,function(s,r){e[s]=t.isFunction(r)?r(i):r}),t.each(["minlength","maxlength"],function(){e[this]&&(e[this]=Number(e[this]))}),t.each(["rangelength","range"],function(){var i;e[this]&&(t.isArray(e[this])?e[this]=[Number(e[this][0]),Number(e[this][1])]:"string"==typeof e[this]&&(i=e[this].split(/[\s,]+/),e[this]=[Number(i[0]),Number(i[1])]))}),t.validator.autoCreateRanges&&(e.min&&e.max&&(e.range=[e.min,e.max],delete e.min,delete e.max),e.minlength&&e.maxlength&&(e.rangelength=[e.minlength,e.maxlength],delete e.minlength,delete e.maxlength)),e},normalizeRule:function(e){if("string"==typeof e){var i={};t.each(e.split(/\s/),function(){i[this]=!0}),e=i}return e},addMethod:function(e,i,s){t.validator.methods[e]=i,t.validator.messages[e]=void 0!==s?s:t.validator.messages[e],3>i.length&&t.validator.addClassRules(e,t.validator.normalizeRule(e))},methods:{required:function(e,i,s){if(!this.depend(s,i))return"dependency-mismatch";if("select"===i.nodeName.toLowerCase()){var r=t(i).val();return r&&r.length>0}return this.checkable(i)?this.getLength(e,i)>0:t.trim(e).length>0},email:function(t,e){return this.optional(e)||/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i.test(t)},url:function(t,e){return this.optional(e)||/^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(t)},date:function(t,e){return this.optional(e)||!/Invalid|NaN/.test(""+new Date(t))},dateISO:function(t,e){return this.optional(e)||/^\d{4}[\/\-]\d{1,2}[\/\-]\d{1,2}$/.test(t)},number:function(t,e){return this.optional(e)||/^-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$/.test(t)},digits:function(t,e){return this.optional(e)||/^\d+$/.test(t)},creditcard:function(t,e){if(this.optional(e))return"dependency-mismatch";if(/[^0-9 \-]+/.test(t))return!1;var i=0,s=0,r=!1;t=t.replace(/\D/g,"");for(var n=t.length-1;n>=0;n--){var a=t.charAt(n);s=parseInt(a,10),r&&(s*=2)>9&&(s-=9),i+=s,r=!r}return 0===i%10},minlength:function(e,i,s){var r=t.isArray(e)?e.length:this.getLength(t.trim(e),i);return this.optional(i)||r>=s},maxlength:function(e,i,s){var r=t.isArray(e)?e.length:this.getLength(t.trim(e),i);return this.optional(i)||s>=r},rangelength:function(e,i,s){var r=t.isArray(e)?e.length:this.getLength(t.trim(e),i);return this.optional(i)||r>=s[0]&&s[1]>=r},min:function(t,e,i){return this.optional(e)||t>=i},max:function(t,e,i){return this.optional(e)||i>=t},range:function(t,e,i){return this.optional(e)||t>=i[0]&&i[1]>=t},equalTo:function(e,i,s){var r=t(s);return this.settings.onfocusout&&r.unbind(".validate-equalTo").bind("blur.validate-equalTo",function(){t(i).valid()}),e===r.val()},remote:function(e,i,s){if(this.optional(i))return"dependency-mismatch";var r=this.previousValue(i);if(this.settings.messages[i.name]||(this.settings.messages[i.name]={}),r.originalMessage=this.settings.messages[i.name].remote,this.settings.messages[i.name].remote=r.message,s="string"==typeof s&&{url:s}||s,r.old===e)return r.valid;r.old=e;var n=this;this.startRequest(i);var a={};return a[i.name]=e,t.ajax(t.extend(!0,{url:s,mode:"abort",port:"validate"+i.name,dataType:"json",data:a,success:function(s){n.settings.messages[i.name].remote=r.originalMessage;var a=s===!0||"true"===s;if(a){var u=n.formSubmitted;n.prepareElement(i),n.formSubmitted=u,n.successList.push(i),delete n.invalid[i.name],n.showErrors()}else{var o={},l=s||n.defaultMessage(i,"remote");o[i.name]=r.message=t.isFunction(l)?l(e):l,n.invalid[i.name]=!0,n.showErrors(o)}r.valid=a,n.stopRequest(i,a)}},s)),"pending"}}}),t.format=t.validator.format})(jQuery),function(t){var e={};if(t.ajaxPrefilter)t.ajaxPrefilter(function(t,i,s){var r=t.port;"abort"===t.mode&&(e[r]&&e[r].abort(),e[r]=s)});else{var i=t.ajax;t.ajax=function(s){var r=("mode"in s?s:t.ajaxSettings).mode,n=("port"in s?s:t.ajaxSettings).port;return"abort"===r?(e[n]&&e[n].abort(),e[n]=i.apply(this,arguments),e[n]):i.apply(this,arguments)}}}(jQuery),function(t){t.extend(t.fn,{validateDelegate:function(e,i,s){return this.bind(i,function(i){var r=t(i.target);return r.is(e)?s.apply(r,arguments):void 0})}})}(jQuery);
;(function($){$.extend($.validator.messages,{required:"必填字段",remote:"该邮箱已被注册，请使用其他邮箱注册",email:"请输入正确格式的电子邮件",url:"请输入合法的网址",date:"请输入合法的日期",dateISO:"请输入合法的日期 (ISO).",number:"请输入合法的数字",digits:"只能输入整数",creditcard:"请输入合法的信用卡号",equalTo:"请再次输入相同的值",accept:"请输入拥有合法后缀名的字符串",maxlength:$.validator.format("请输入一个长度最多是 {0} 的字符串"),minlength:$.validator.format("请输入一个长度最少是 {0} 的字符串"),rangelength:$.validator.format("请输入一个长度介于 {0} 和 {1} 之间的字符串"),range:$.validator.format("请输入一个介于 {0} 和 {1} 之间的值"),max:$.validator.format("请输入一个最大为 {0} 的值"),min:$.validator.format("请输入一个最小为 {0} 的值")});}(jQuery));;
/*!
 * jQuery Cookie Plugin v1.4.0
 * https://github.com/carhartl/jquery-cookie
 *
 * Copyright 2013 Klaus Hartl
 * Released under the MIT license
 */
(function(factory) {
	if (typeof define === 'function' && define.amd) {
		define(['jquery'], factory);
	} else {
		factory(jQuery);
	}
}(function($) {
	var pluses = /\+/g;

	function encode(s) {
		return config.raw ? s : encodeURIComponent(s);
	}

	function decode(s) {
		return config.raw ? s : decodeURIComponent(s);
	}

	function stringifyCookieValue(value) {
		return encode(config.json ? JSON.stringify(value) : String(value));
	}

	function parseCookieValue(s) {
		if (s.indexOf('"') === 0) {
			s = s.slice(1, -1).replace(/\\"/g, '"').replace(/\\\\/g, '\\');
		}
		try {
			s = decodeURIComponent(s.replace(pluses, ' '));
		} catch (e) {
			return;
		}
		try {
			return config.json ? JSON.parse(s) : s;
		} catch (e) {}
	}

	function read(s, converter) {
		var value = config.raw ? s : parseCookieValue(s);
		return $.isFunction(converter) ? converter(value) : value;
	}
	var config = $.cookie = function(key, value, options) {
			if (value !== undefined && !$.isFunction(value)) {
				options = $.extend({}, config.defaults, options);
				if (typeof options.expires === 'number') {
					var days = options.expires,
						t = options.expires = new Date();
					t.setDate(t.getDate() + days);
				}
				return (document.cookie = [encode(key), '=', stringifyCookieValue(value), options.expires ? '; expires=' + options.expires.toUTCString() : '', options.path ? '; path=' + options.path : '', options.domain ? '; domain=' + options.domain : '', options.secure ? '; secure' : ''].join(''));
			}
			var result = key ? undefined : {};
			var cookies = document.cookie ? document.cookie.split('; ') : [];
			for (var i = 0, l = cookies.length; i < l; i++) {
				var parts = cookies[i].split('=');
				var name = decode(parts.shift());
				var cookie = parts.join('=');
				if (key && key === name) {
					result = read(cookie, value);
					break;
				}
				if (!key && (cookie = read(cookie)) !== undefined) {
					result[name] = cookie;
				}
			}
			return result;
		};
	config.defaults = {};
	$.removeCookie = function(key, options) {
		if ($.cookie(key) !== undefined) {
			$.cookie(key, '', $.extend({}, options, {
				expires: -1
			}));
			return true;
		}
		return false;
	};
}));;
jQuery(function($) {
	$.datepicker.regional['zh-CN'] = {
		closeText: '关闭',
		prevText: '&#x3C;上月',
		nextText: '下月&#x3E;',
		currentText: '今天',
		monthNames: ['一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月'],
		monthNamesShort: ['一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月'],
		dayNames: ['星期日', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六'],
		dayNamesShort: ['周日', '周一', '周二', '周三', '周四', '周五', '周六'],
		dayNamesMin: ['日', '一', '二', '三', '四', '五', '六'],
		weekHeader: '周',
		dateFormat: 'yy/mm/dd',
		firstDay: 1,
		isRTL: false,
		showMonthAfterYear: true,
		yearSuffix: '年'
	};
	$.datepicker.setDefaults($.datepicker.regional['zh-CN']);
});;
var senseluxuryFed = {
	loadIndexFun: function() {
		var _this = this;
		_this.commonFun();
		if ($("#about").val() === "about") return false;
		_this.indexFun();
		_this.indexFunV1();
	},
	loadListFun: function() {
		var _this = this;
		_this.commonFun();
		_this.listFun();
		_this.weixinFun();
		_this.commonFun.fixedFun('.tm_left', 'fixed');
	},
	loadDetailFun: function() {
		var _this = this;
		_this.commonFun();
		_this.detailFun();
		_this.weixinFun();
		_this.commonFun.fixedFun('.data-fiexd', 'fiexd');
	},
	loadFqaFun: function() {
		var _this = this;
		_this.commonFun();
		_this.FqaFun();
	},
	loadDetailFunV1: function() {
		var _this = this;
		_this.detailFunV1();
		_this.commonFunV1.fixedFunRight('.double_fixed', 'fixed');
		_this.commonFunV1.fixedFun('.yybgs', 'fixed');
		var _this = this;
		_this.commonFun.loginFun();
		_this.commonFun.loginRegFun();
		_this.Autocomplete('#AutoSearch');
		_this.commonFun.ShouCan();
		_this.commonFun.ShouCanFun($.cookie("willdata"));
		_this.commonFun.closeShouCan();
		_this.commonFun.zixunSubmit();
		_this.commonFun.sideBarFun();
	}
};
senseluxuryFed.commonFunV1 = function() {}
senseluxuryFed.indexFunV1 = function() {
	var _this = senseluxuryFed.indexFunV1;
}
senseluxuryFed.detailFunV1 = function() {
	var _this = this,
		deFun = _this.detailFunV1;
	deFun.fixedMenuFun();
	deFun.fixedMenuFunA('#mapsA', '3');
	deFun.dateFun();
	deFun.picSlide('#dt_slides', '.tabLabel');
	var $queryPrice = $('.query-price');
	$queryPrice.find('.room-c').hover(function() {
		var $this = $(this);
		$this.find('.room-c-list').show();
	}, function() {
		$(this).find('.room-c-list').hide();
	});
	$('.room-c-list').on('click', 'li', function() {
		var _index = $(this).index();
		$queryPrice.find('span').html($(this).html());
		$(this).parent('.room-c-list').hide();
		$queryPrice.siblings('.price-tabcont').hide();
		$queryPrice.siblings('.price-tabcont').eq(_index).show();
	});
	var $infoText = $('.info-cont');
	$infoText.on('click', '.more', function() {
		var $this = $(this);
		if ($this.hasClass('open')) {
			$this.removeClass('open').html('【' + MESSAGE.show_more_details + ' + 】');
			$this.siblings('.info-text').css('height', '172px');
		} else {
			$this.addClass('open').html('【' + MESSAGE.show_less_details + ' - 】');
			$this.siblings('.info-text').css('height', 'auto');
		};
		deFun.fixedMenuFun();
	});
	$('.detail-content_double_fw').find('a').hover(function() {
		$(this).next('p').css('opacity', '0');
		$(this).next('p').css('display', 'block');
		$(this).next('p').animate({
			opacity: 1
		}, 500, 'linear');
	}, function() {
		$(this).next('p').css('display', 'none');
	});
	$('.no-ss-bj_right').hover(function() {
		$('.detail-ss-bj-left').animate({
			width: 0
		}, 120, 'linear', function() {
			$('.detail-ss-bj-s').animate({
				left: -500
			}, 20, 'linear');
			$('.detail-ss-bj-left').animate({
				left: -500
			}, 20, 'linear');
		});
	}, function() {
		$(".detail-ss-bj-left ,.detail-ss-bj-s,.detail-ss-bj-left").stop(false, false);
		$('.detail-ss-bj-left').css('width', '190px');
		$('.detail-ss-bj-left').css('left', '0px');
		$('.detail-ss-bj-s').css('left', '0px');
		$('.detail-ss-bj-left').css('opacity', '1');
	});
}
senseluxuryFed.detailFunV1.picSlide = function(id, page) {
	var $content = $(id),
		$prevBtn = $content.find('.prev'),
		$nextBtn = $content.find('.next'),
		$tab_body = $content.find('.tab_body'),
		slideWidth = $tab_body.find('li').width(),
		liLength = $tab_body.find('li').length,
		iNow = 0,
		$pageBtn = $(page);
	$tab_body.append($tab_body.html());
	$nextBtn.off().click(function() {
		if (!$tab_body.is(":animated")) {
			iNow++;
			if (iNow >= liLength) {
				iNow = 0;
			}
			$tab_body.stop(true, true).animate({
				'margin-left': -iNow * slideWidth + 'px'
			}, 500);
			pageFun();
		}
	});
	$prevBtn.off().click(function() {
		if (!$tab_body.is(":animated")) {
			iNow--;
			if (iNow <= -1) {
				iNow = liLength - 1;
			}
			$tab_body.stop(true, true).animate({
				'margin-left': -iNow * slideWidth + 'px'
			}, 500);
			pageFun();
		}
	});
	pageFun();

	function pageFun() {
		if ($pageBtn.length) {
			var pageHtml = $tab_body.find('li').eq(iNow).attr('data-label-text'),
				numb = pageHtml.split('/');
			$pageBtn.find('a').html('<i>' + numb[0] + '</i>' + '/' + numb[1]);
			$pageBtn.siblings('.tabCon').find('li').eq(numb[0] - 1).addClass('active').siblings('li').removeClass('active');
			$pageBtn.siblings('.tabCon').on('click', 'li', function() {
				iNow = $(this).index();
				$(this).addClass('active').siblings('li').removeClass('active');
				$tab_body.stop(true, true).animate({
					'margin-left': -iNow * slideWidth + 'px'
				}, 500);
				var pageHtml1 = $tab_body.find('li').eq(iNow).attr('data-label-text');
				numb = pageHtml1.split('/');
				$pageBtn.find('a').html('<i>' + numb[0] + '</i>' + '/' + numb[1]);
			});
		}
	}
}
senseluxuryFed.detailFunV1.fixedMenuFun = function() {
	$('.yybgs').find('li').off().on('click', 'a', function() {
		var _index = $(this).parent('li').index();
		var _h = $('.detail-texts').find(".detail-content").eq(_index).offset().top
		$('html,body').animate({
			scrollTop: _h - $('.detail-texts').find(".detail-tab").height()
		}, 500);
		return false;
	});
}
senseluxuryFed.detailFunV1.fixedMenuFunA = function(className, linumb) {
	$(className).on('click', function() {
		var _h = $('.detail-texts').find(".detail-content").eq(linumb).offset().top
		$('html,body').animate({
			scrollTop: _h - $('.detail-texts').find(".detail-tab").height()
		}, 500);
		return false;
	});
}
senseluxuryFed.detailFunV1.dateFun = function() {
	var comFun = senseluxuryFed.commonFunV1,
		$dateBox = $('.Date-box'),
		domain = $('#domain').val();
	comFun.datepickerFun('#start');
	comFun.datepickerFun('#start1');
	if (getCookie("c_start_time")) {
		$("#start").val(getCookie("c_start_time"));
		$("#book_start").val(getCookie("c_start_time"));
	}
	$("#start").on('change', function() {
		setCookie("c_start_time", $(this).val(), '7d');
		$("#book_start").val(getCookie("c_start_time"));
	});
	if (getCookie("c_end_time")) {
		$("#start1").val(getCookie("c_end_time"));
		$("#book_end").val(getCookie("c_end_time"));
	}
	$("#start1").on('change', function() {
		setCookie("c_end_time", $(this).val(), '7d');
		$("#book_end").val(getCookie("c_end_time"));
	});

	function datetime_to_unix(datetime) {
		var arr = datetime.split("/");
		var now = new Date(Date.UTC(arr[0], arr[1] - 1, arr[2]));
		return parseInt(now.getTime() / 86400000);
	}

	function unix_to_datetime(unix) {
		var now = new Date(parseInt(unix) * 86400000),
			text = '';
		return text = now.getFullYear() + '/' + setData((now.getMonth() + 1)) + '/' + setData(now.getDate());
	};

	function setData(numb) {
		if (numb < 9) {
			return numb = '0' + numb
		} else {
			return numb;
		};
	};
	$dateBox.find('.room-c').hover(function() {
		$(this).find('.room-c-list').show();
	}, function() {
		$(this).find('.room-c-list').hide();
	});
	$dateBox.find('#start').change(function() {
		var qsDate = $dateBox.find('#start').val(),
			textVal = $dateBox.find('.room-c span').attr('data-val'),
			flag = $dateBox.find('.room-c span').attr('data-flag'),
			days = $dateBox.find('.room-c span').attr('date_diff'),
			pidVal = $('#pid').val(),
			qsDateTime = datetime_to_unix(qsDate),
			endTime = parseInt(qsDateTime) + parseInt(days),
			endDay = null;
		if ($('#start1').val() == '') {
			endDay = unix_to_datetime(endTime).split(' ')[0];
			$('#start1').val(endDay);
			$('#start1').trigger("change");
		} else {
			endDay = $('#start1').val();
		};
		$.ajax({
			url: domain + '/web/detail/countcost',
			type: "GET",
			data: {
				pid: pidVal,
				start: qsDate,
				end: endDay,
				bedroom: textVal,
				flag: flag
			},
			dataType: "jsonp",
			jsonpCallback: 'jsonp',
			success: function(data) {
				if (parseInt(data) == -1) {
					$('#cost').html('参数错误');
				} else {
					$('#cost').html('¥' + data.price);
					$('#service').html('¥' + data.service_fee);
					$('#tax').html('¥' + data.tax);
					$('#total').html('¥' + data.total);
					if (data.mini_stay > data.day_diff) {
						$("#price_cal_notice").html("提示：您预订的期间最短入住天数要求为" + data.mini_stay + "天，小于该天数将无法预订成功");
					} else {
						$("#price_cal_notice").html("");
					}
				}
			}
		});
	});
	$dateBox.find('#start1').change(function() {
		var qsDate = $dateBox.find('#start').val(),
			textVal = $dateBox.find('.room-c span').attr('data-val'),
			flag = $dateBox.find('.room-c span').attr('data-flag'),
			days = $dateBox.find('.room-c span').attr('date_diff'),
			pidVal = $('#pid').val(),
			endDay = $('#start1').val();
		if (qsDate == '') {
			return false;
		} else {
			$.ajax({
				url: domain + '/web/detail/countcost',
				type: "GET",
				data: {
					pid: pidVal,
					start: qsDate,
					end: endDay,
					bedroom: textVal,
					flag: flag
				},
				dataType: "jsonp",
				jsonpCallback: 'jsonp',
				success: function(data) {
					$('#cost').html('¥' + data.price);
					$('#service').html('¥' + data.service_fee);
					$('#tax').html('¥' + data.tax);
					$('#total').html('¥' + data.total);
					if (data.mini_stay > data.day_diff) {
						$("#price_cal_notice").html("提示：您预订的期间最短入住天数要求为" + data.mini_stay + "天，小于该天数将无法预订成功");
					} else {
						$("#price_cal_notice").html("");
					}
				}
			});
		}
	});
	$dateBox.find('.room-c-list').on('click', 'li', function() {
		var qsDate = $dateBox.find('#start').val(),
			jsDate = $dateBox.find('#start1').val(),
			textVal = $(this).attr('data-val'),
			flag = $(this).attr('data-flag'),
			dateDiffVal = $(this).attr('date_diff'),
			pidVal = $('#pid').val(),
			spanCont = $dateBox.find('.room-c span');
		spanCont.text($(this).text());
		spanCont.attr({
			'data-val': textVal,
			'date_diff': dateDiffVal,
			'data-flag': flag
		});
		if (qsDate == '' || jsDate == '') {
			alert('请选择起住日期和离开日期！')
			return false;
		} else {
			if (datetime_to_unix(qsDate) >= datetime_to_unix(jsDate)) {
				alert('离开日期应该在起住日期之后！')
			} else {
				$.ajax({
					url: domain + '/web/detail/countcost',
					type: "GET",
					data: {
						pid: pidVal,
						start: qsDate,
						end: jsDate,
						bedroom: textVal,
						flag: flag,
					},
					dataType: "jsonp",
					jsonpCallback: 'jsonp',
					success: function(data) {
						if (parseInt(data) == -1) {
							$('#cost').html('参数错误');
						} else {
							$('#cost').html('¥' + data.price);
							$('#service').html('¥' + data.service_fee);
							$('#tax').html('¥' + data.tax);
							$('#total').html('¥' + data.total);
							if (data.mini_stay > data.day_diff) {
								$("#price_cal_notice").html("提示：您预订的期间最短入住天数要求为" + data.mini_stay + "天，小于该天数将无法预订成功");
							} else {
								$("#price_cal_notice").html("");
							}
						}
					}
				});
			}
		}
	});
	var init_get_price = function() {
			var qsDate = $dateBox.find('#start').val(),
				jsDate = $dateBox.find('#start1').val(),
				textVal = $("#bedroom_show").attr('data-val'),
				flag = $("#bedroom_show").attr('data-flag'),
				pidVal = $('#pid').val();
			if (qsDate == '' || jsDate == '') {
				return false;
			} else {
				if (datetime_to_unix(qsDate) >= datetime_to_unix(jsDate)) {} else {
					$.ajax({
						url: domain + '/web/detail/countcost',
						type: "GET",
						data: {
							pid: pidVal,
							start: qsDate,
							end: jsDate,
							bedroom: textVal,
							flag: flag,
						},
						dataType: "jsonp",
						jsonpCallback: 'jsonp',
						success: function(data) {
							if (parseInt(data) == -1) {
								$('#cost').html('参数错误');
							} else {
								$('#cost').html('¥' + data.price);
								$('#service').html('¥' + data.service_fee);
								$('#tax').html('¥' + data.tax);
								$('#total').html('¥' + data.total);
								if (data.mini_stay > data.day_diff) {
									$("#price_cal_notice").html("提示：您预订的期间最短入住天数要求为" + data.mini_stay + "天，小于该天数将无法预订成功");
								} else {
									$("#price_cal_notice").html("");
								}
							}
						}
					});
				}
			}
		}
	init_get_price();
};
senseluxuryFed.commonFunV1.loginFun = function() {
	var $cont = $('.userlink'),
		$loginCont = $('.Cuser_dialog');
	$cont.on('click', '.login-btn', function() {
		$('.Cmask').show();
		$loginCont.show();
		$loginCont.find('.signintab').trigger('click');
	});
	$cont.on('click', '.reg-btn', function() {
		$('.Cmask').show();
		$loginCont.show();
		$loginCont.find('.signuptab').trigger('click');
	});
	$loginCont.on('click', '.close', function() {
		$('.Cmask').hide();
		$loginCont.hide();
	});
	$loginCont.on('click', '.signuptab', function() {
		$(this).addClass('curr').siblings('a').removeClass('curr');
		$loginCont.find('.signup_area').removeClass('Ldn').siblings('.signin_area').addClass('Ldn');
	});
	$loginCont.on('click', '.signintab', function() {
		$(this).addClass('curr').siblings('a').removeClass('curr');
		$loginCont.find('.signin_area').removeClass('Ldn').siblings('.signup_area').addClass('Ldn');
	});
};
senseluxuryFed.commonFunV1.datepickerFun = function(id) {
	var _text = '请选择入住选择日期';
	if (id == '#rz_time_end') {
		_text = '请选择退房结束日期';
	}
	$(id).datepicker({
		showOn: "div",
		buttonImage: "",
		buttonImageOnly: true,
		buttonText: _text,
		minDate: 0,
		onClose: function(selectedDate) {
			if (id == '#start1') {}
			if (id == "#start") {
				$("#start1").datepicker("option", "minDate", selectedDate);
			}
			if (id == "#rz_time_start") {
				$("#rz_time_end").datepicker("option", "minDate", selectedDate);
				$("#rz_time_end").datepicker("show");
			}
			if (id == "#rz_time_end") {}
			if (id == "#inquire_end") {}
			if (id == "#inquireus_start") {
				$("#inquireus_end").datepicker("option", "minDate", selectedDate);
			}
			if (id == "#inquireus_end") {}
			if (id == "#book_start") {
				$("#book_end").datepicker("option", "minDate", selectedDate);
			}
			if (id == "#book_end") {}
		}
	});
};
senseluxuryFed.commonFunV1.fixedFun = function(obj, className) {
	try {
		var dom = $(obj),
			h = $(obj).offset().top,
			isIE6 = window.XMLHttpRequest ? false : true,
			pageName = pageID,
			leftHeight = $('.TM_mbox').find('.tm_left').height();
	} catch (e) {}
	if (!dom.length) return false;
	if (!isIE6) {
		$(window).on('scroll', function() {
			var windowTop = $(window).scrollTop();
			if (windowTop >= h) {
				dom.addClass(className);
			} else {
				dom.removeClass(className);
			};
		});
	}
};
senseluxuryFed.commonFunV1.fixedFun = function(obj, className) {
	try {
		var dom = $(obj),
			h = $(obj).offset().top,
			isIE6 = window.XMLHttpRequest ? false : true,
			pageName = pageID,
			leftHeight = $('.TM_mbox').find('.tm_left').height();
	} catch (e) {}
	if (!dom.length) return false;
	if (!isIE6) {
		$(window).on('scroll', function() {
			var windowTop = $(window).scrollTop();
			if (windowTop >= h) {
				dom.addClass(className);
			} else {
				dom.removeClass(className);
			};
		});
	}
};
senseluxuryFed.commonFunV1.fixedFunRight = function(obj, className) {
	try {
		var dom = $(obj),
			h = $(obj).offset().top,
			uh = $('.yybgs').offset().top,
			isIE6 = window.XMLHttpRequest ? false : true,
			pageName = pageID,
			leftHeight = $('.TM_mbox').find('.tm_left').height();
	} catch (e) {}
	if (!dom.length) return false;
	if (!isIE6) {
		$(window).on('scroll', function() {
			var windowTop = $(window).scrollTop();
			if (windowTop >= h) {
				dom.addClass(className);
				if (windowTop >= uh) {
					dom.removeClass(className);
					dom.css('top', '520px');
				} else {
					dom.css('top', '0px');
				}
			} else {
				dom.removeClass(className);
				dom.css('top', '0px');
			};
		});
	}
};
senseluxuryFed.commonFunV1.relativeFun = function(obj, className) {
	try {
		var dom = $(obj),
			h = $(obj).offset().top,
			isIE6 = window.XMLHttpRequest ? false : true,
			pageName = pageID;
	} catch (e) {}
	if (!dom.length) return false;
	if (!isIE6) {
		$(window).on('scroll', function() {
			var windowTop = $(window).scrollTop();
			if (windowTop >= h) {
				if (windowTop > $('.detail-info').height() - $('.double_fixed').height()) {
					dom.stop(true);
					dom.animate({
						top: ($('.detail-info').height() - $('.double_fixed').height())
					}, 50);
				} else {
					dom.stop(true);
					dom.animate({
						top: (windowTop - h - 399)
					}, (windowTop - h) * 0.3);
				}
			} else {
				dom.stop(true);
				dom.css('top', '0px');
			};
		});
	}
};
senseluxuryFed.commonFun = function() {
	var _this = this,
		$topBar = $('.topbar'),
		$header = $('.header'),
		$winW = $(window).width();
	$topBar.find('.rssarea').hover(function() {
		$(this).find('.rssbox').show();
	}, function() {
		$(this).find('.rssbox').hide();
	});
	if ($header.find('.navlink1').length) {
		var li0 = $header.find('.navlink1').offset().left,
			li1 = $header.find('.navlink2').offset().left;
		$header.find('.termini').width($winW).css('left', '-' + li0 + 'px');
		$header.find('.theme-box').width($winW).css('left', '-' + li1 + 'px');
		$header.find('.nav .items').on('mouseenter', 'li', function() {
			$this = $(this);
			$this.addClass('cur').find('.dropbox').show();
		});
	}
	$header.find('.nav .items').on('mouseleave', 'li', function(e) {
		var $dropbox, $el, $self;
		$self = $(this);
		$self.removeClass('cur');
		$dropbox = $self.find('.dropbox');
		$el = $(e.relatedTarget);
		if ($el.hasClass('ui-datepicker') || $el.parents('.ui-datepicker').length) {
			return void 0;
		}
		if ($dropbox.length) {
			$dropbox.hide();
		}
	});
	$('.clause_more').on('click', function() {
		var $this = $(this);
		if ($this.hasClass('open')) {
			$this.removeClass('open').html('【查看全部声明 + 】');
			$(".clause_text").hide();
		} else {
			$this.addClass('open').html('【收起全部声明 - 】');
			$(".clause_text").show();
		};
	});
	$(function() {
		_this.commonFun.loginFun();
		_this.commonFun.loginRegFun();
		_this.Autocomplete('#AutoSearch');
		_this.commonFun.ShouCan();
		_this.commonFun.ShouCanFun($.cookie("willdata"));
		_this.commonFun.closeShouCan();
		_this.commonFun.zixunSubmit();
		_this.commonFun.sideBarFun();
	});
};
senseluxuryFed.commonFun.sideBarFun = function() {
	var $sideCont = $('#side-bar'),
		$window = $(window),
		winH = $window.height();
	$sideCont.find('.items li').hover(function() {
		var $this = $(this);
		$this.find('.list').show();
	}, function() {
		var $this = $(this);
		$this.find('.list').hide();
	});
	$window.scroll(function() {
		var scrTop = $(window).scrollTop();
		var topbar = parseInt($('.IN_main').css('height'));
		var winhei = parseInt($(window).height());
		var _top = $('#side-bar').offset().top;
		var _search = $('.D1Search').offset().top;
		if (scrTop < topbar) {
			$('#side-bar').css('display', 'none');
		} else {
			$('#side-bar').css('display', 'block');
			$('#side-bar').css('z-index', 10);
		}
		if (scrTop > winhei) {
			$sideCont.find('.goTop').show();
		} else {
			$sideCont.find('.goTop').hide();
		}
	});
	$sideCont.find('.items').on('click', '.goTop a', function() {
		$('html,body').animate({
			scrollTop: 0
		}, 500);
	});
};
senseluxuryFed.commonFun.fixedFun = function(obj, className) {
	try {
		var dom = $(obj),
			h = $(obj).offset().top,
			isIE6 = window.XMLHttpRequest ? false : true,
			pageName = pageID,
			leftHeight = $('.TM_mbox').find('.tm_left').height();
	} catch (e) {}
	if (!dom.length) return false;
	if (!isIE6) {
		$(window).on('scroll', function() {
			var windowTop = $(window).scrollTop();
			if (windowTop >= h) {
				dom.addClass(className);
				if (pageName == 'detail' || pageName == 'bankdetail') {
					if (windowTop > ($('.like-wp').offset().top - 510)) {
						dom.removeClass(className).addClass('absiexd');
						dom.css('bottom', '20px');
					} else {
						dom.removeClass('absiexd').addClass(className);
						dom.css('bottom', 'auto');
					};
				} else {
					if (windowTop > ($('.Cfoot').offset().top - leftHeight)) {
						dom.removeClass(className).addClass('absiexd');
						dom.css('bottom', '20px');
					} else {
						dom.removeClass('absiexd').addClass(className);
						dom.css('bottom', 'auto');
					};
				};
			} else {
				dom.removeClass(className);
			};
		});
	}
};
senseluxuryFed.commonFun.loginFun = function() {
	var $cont = $('.userlink'),
		$loginCont = $('.Cuser_dialog');
	$cont.on('click', '.login-btn', function() {
		$('.Cmask').show();
		$loginCont.show();
		$loginCont.find('.signintab').trigger('click');
	});
	$cont.on('click', '.reg-btn', function() {
		$('.Cmask').show();
		$loginCont.show();
		$loginCont.find('.signuptab').trigger('click');
	});
	$loginCont.on('click', '.close', function() {
		$('.Cmask').hide();
		$loginCont.hide();
	});
	$loginCont.on('click', '.signuptab', function() {
		$(this).addClass('curr').siblings('a').removeClass('curr');
		$loginCont.find('.signup_area').removeClass('Ldn').siblings('.signin_area').addClass('Ldn');
	});
	$loginCont.on('click', '.signintab', function() {
		$(this).addClass('curr').siblings('a').removeClass('curr');
		$loginCont.find('.signin_area').removeClass('Ldn').siblings('.signup_area').addClass('Ldn');
	});
};
senseluxuryFed.commonFun.loginRegFun = function() {
	var $centent = $('.signin_area'),
		emailInput = $centent.find('.input1[name = "username"]'),
		submitBtn = $centent.find('.Cbtn_middle_yellow');
	$("#register_select span").each(function(i) {
		$(this).on('click', function() {
			$("#register_select span").removeClass('register_check');
			$(this).addClass('register_check');
			if (i == 1) {
				$(".registerByPhone").hide();
				$(".registerByEmail").show();
			} else {
				$(".registerByEmail").hide()
				$(".registerByPhone").show();
			}
		});
	});
	var mark;
	$("#registerByPhoneForm").click(function() {
		var data = {
			username: $(".registerByPhone .phonenumber").val(),
			password: $(".registerByPhone input[name='password']").val(),
			repassword: $(".registerByPhone input[name='repassword']").val(),
			code: $(".registerByPhone input[name='registerByCode']").val()
		};
		if (!data.username) {
			alert("请输入手机号！")
			return;
		}
		if (data.password != data.repassword || !data.password || !data.repassword) {
			alert("两次密码不一致！");
			return;
		}
		$.ajax({
			data: {
				pwd: data.password,
				phone: data.username,
				code: data.code,
				imported: $(".registerByPhone input[name='imported']").val(),
				mark: mark
			},
			type: 'post',
			url: "/activity/double/register",
			dataType: 'json',
			success: function(data) {
				if (data.code) {
					$('.Cuser_dialog').find('.close').trigger('click');
					alert("注册成功！");
					window.location.reload();
				} else {
					alert(data.msg);
				}
			}
		});
	});
	$("#getCode").click(function() {
		if ($(this).attr("clock") != 0) {
			return;
		}
		var $that = $(this);
		var phone_number = $(this).parent().parent().parent().find(".phonenumber").val();
		var data = {
			'phone': phone_number
		};
		$(this).val("验证码获取中。。。");
		if (phone_number.match(/^(0|86|17951)?(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/)) {
			$.ajax({
				type: 'POST',
				url: '/activity/double/phone_verify',
				data: data,
				dataType: 'json',
				success: function(data) {
					if (!data.code) {
						alert(data.msg);
						$that.attr('clock', 0);
						clearInterval(t);
						$that.val("获取验证码");
						return;
					}
					$that.attr('clock', 1);
					mark = data.mark;
					var seconds = 0;
					var t = setInterval(function() {
						seconds += 1;
						$that.val(50 - seconds + "秒后重新获取验证码");
						if (seconds == 50) {
							$that.attr('clock', 0);
							clearInterval(t);
							$that.val("获取验证码");
						}
					}, 1000);
				}
			})
		} else {
			alert("请输入合适的手机号！");
			$that.attr('clock', 0);
			$that.val("获取验证码");
		}
	});
	$("#validation_phone").click(function() {
		var code = $(this).parent().parent().find(".code").val();
		var phone_number = $(this).parent().parent().parent().find(".phonenumber").val();
		if (!code) {
			alert("请输入验证码！");
			return;
		}
		if (phone_number.match(/^1[3|4|5|8][0-9]\d{4,8}$/)) {
			var data = {
				mark: mark,
				code: code,
				phone: phone_number
			};
			$.ajax({
				type: 'POST',
				url: '/activity/double/phone_available',
				data: data,
				dataType: 'json',
				success: function(data) {
					if (data.code) {
						$(".registerCode").hide(function() {
							$(".registerPwd").show();
						});
					} else {
						alert("验证码错误！")
					}
				}
			});
		}
	});
	$('.Cuser_dialog .signin_area form').validate({
		rules: {
			username: {
				required: true
			},
			password: {
				required: true,
				minlength: 6,
				maxlength: 16
			}
		},
		errorPlacement: function(error, element) {
			var $element;
			$element = $(element);
			$element.parents('.item').find('.msg').show().css({
				"display": "block"
			});
			$element.parents('.item').find('.inputbox').css({
				"border": "1px solid red"
			});
		},
		submitHandler: function(form) {
			var $self;
			$self = $(form);
			$self.ajaxSubmit(function(data) {
				if (typeof data === 'string') {
					data = $.parseJSON(data);
				}
				if (data.success !== 1) {} else {
					$('.Cuser_dialog').find('.close').trigger('click');
					var html = '<div class="userName"><a title="' + data.username + '" href="/ucenter">我的账户</a><span>|</span><a  href="/web/user/logout">退出</a></div>'
					$(html).insertBefore('.userlink_lg');
					$('.userlink_lg').remove();
					$('.detail-app').find('.my-pl span').html('');
					$('#top_textarea').val('').css('color', '#333');
					window.location.reload();
				}
			});
		}
	});
	$('.Cuser_dialog .signup_area form').validate({
		rules: {
			username: {
				required: true,
				email: true,
				remote: {
					url: '/web/user/checkusername',
					type: 'post',
					data: {
						'username': function() {
							return $('.Cuser_dialog .signup_area input[name=username]').val();
						}
					}
				}
			},
			password: {
				required: true,
				minlength: 6,
				maxlength: 16
			},
			repassword: {
				required: true,
				minlength: 6,
				maxlength: 16,
				equalTo: "#regpassword"
			}
		},
		messages: {
			username: {
				email: "邮箱不正确",
				remote: "邮箱已被注册"
			},
		},
		success: function() {
			$('.msg').remove();
		},
		errorPlacement: function(error, element) {
			var $element;
			$element = $(element);
			if ($element.parents('.item').find('.msg')) {
				$('.msg').remove();
			}
			$element.parents('.item').append('<span class="msg err Lcfl Ldn" style="display: none;"><label for="username" class="error"></label></span>');
			$element.parents('.item').find('.msg').css('display', 'block');
			$element.parents('.item').find('.msg').html(error);
		},
		submitHandler: function(form) {
			var $self;
			$self = $(form);
			$self.ajaxSubmit(function(data) {
				if (typeof data === 'string') {
					data = $.parseJSON(data);
				}
				if (data.success !== 1) {} else {
					$('.Cuser_dialog').find('.close').trigger('click');
					$('.userlink_lg').html('<div class="userName"><a title="' + data.username + '" href="/ucenter">我的账户</a><span>|</span><a  href="/web/user/logout">退出</a></div>');
					$('.detail-app').find('.my-pl span').html('');
					$('#top_textarea').val('').css('color', '#333');
				}
			});
		}
	});
	$('.userlink').find('.rssbox').on('click', 'button.btn1', function() {
		var text = $(this).siblings('.input1').val();
		$('.signup_area').find('input[name="username"]').val(text);
		$(this).val('').parents('.rssbox').hide();
		$('.userlink').find('.reg-btn').trigger('click');
		return false;
	});
};
senseluxuryFed.indexFun = function() {
	var _this = senseluxuryFed.indexFun,
		comFunV1 = senseluxuryFed.commonFunV1;
	_this.banSlideFun('#in_slides');
	_this.searchFixde();
	_this.ajaxLoadXilie();
	_this.ajaxLoadTheme();
	// _this.imgList(".con3",'getcityproductlist');
	// _this.imgList2(".con4",'getsubjectlist');
	comFunV1.datepickerFun('#rz_time_start');
	comFunV1.datepickerFun('#rz_time_end');
	_this.peopleNumb();
};
senseluxuryFed.indexFun.peopleNumb = function() {
	$('#people_numb').hover(function() {
		$(this).find('div').show();
	}, function() {
		$(this).find('div').hide();
	});
	$('#people_numb').find('div a').click(function() {
		$('#people_numb').find('p').html($(this).html());
		$('#people_numb').find('input').val($(this).html());
		$('#people_numb').find('div').hide();
		if ($(this).attr('class') == 'cleans') {
			$('#people_numb').find('p').html('选择入住人数');
			$('#people_numb').find('input').val('');
		}
	});
};
senseluxuryFed.indexFun.imgList = function(obj, cat) {
	var obj = obj,
		_this = $(obj),
		sctop = 0,
		fobj = '.slV1_I_L_con_div',
		forID = 0,
		dataID = new Array(606, 77, 762, 85, 26, 25),
		dbg = 0;

	function db_list(isID) {
		var isdataID = '',
			classshow = '';
		if (isID > 0) {
			isdataID = isID;
			classshow = ' slV1_cur';
		} else {
			isdataID = dataID[0];
		}
		if (dataID == '') return false;
		if (dbg == 1) return false;
		$.ajax({
			url: 'getcityproductlist/' + isdataID + '/jsonp/jsonp',
			type: "POST",
			dataType: "jsonp",
			jsonpCallback: 'jsonp',
			success: function(data) {
				var data = data['data'];
				var html = "";
				html += '<ul class="slV1_I_L_con_ul' + classshow + '">';
				for (var i = 0; i < data.length; i++) {
					var price = (data[i]['price'] > 100) ? '¥<span>' + data[i]['price'] + '</span>/' + MESSAGE.night : '<span style="font-size: small">' + MESSAGE.inquire_rate + '</span>';
					html += '<li>';
					if (data[i]["is_panorama"]) {
						html += '<a href="javascript:void(0)"><div class="panorama"><span>全景</span></div></a>'
					}
					html += '<div><a href="' + data[i]['href'] + '"><img src="' + data[i]['data_url'] + '"></a></div>';
					html += '<div class="con">'
					html += '<a class="title slV1_fs3" href="' + data[i]['href'] + '">' + data[i]['title'] + '</a>';
					html += '<span class="dsp slV1_fs5">' + data[i]['name'] + '</span>';
					html += '<strong class="slV1_fs3">' + price + '</strong>';
					if (data[i]['rate_per_person'] > 0) {
						html += '<span class="Lflr slV1_fs5">' + MESSAGE.perperson + ' ￥' + data[i]['rate_per_person'] + '/' + MESSAGE.night + '</span>';
					}
					html += '</div>';
					html += '<div class="icons"><div class="icon-ws"><span class="iconfont-home">&#xe606;</span>' + data[i]['bedroom'] + '</div>';
					html += '<div class="icon-yc"><span class="iconfont-home">&#xe60e;</span>' + data[i]['shower_room'] + '</div>';
					var pool = (data[i]['pool'] != 0) ? '<div class="icon-wsj"><span class="iconfont-home">&#xe607;</span> ' + data[i]['pool'] + '</div>' : '';
					html += pool;
					html += '</div></li>';
				}
				html += '</ul>';
				$('.con3').find('.ul_main').append(html);
				for (var i = 0; i <= dataID.length; i++) {
					if (dataID[i] == isdataID) {
						dataID.shift(i);
					}
				}
				db_list(0);
			}
		});
	}
	_this.find(fobj).on('click', 'ul li', function() {
		dbg = 1;
		if (db_is_array(dataID, $(this).attr('data-id'))) {
			dbg = 0;
			db_list($(this).attr('data-id'));
		} else {
			dbg = 0;
			db_list(0);
		}
		var _index = $(this).index();
		_this.find(fobj + ' ul li').removeClass('cur jieji_1s jieji_2s jieji_3s jieji_4s jieji_5s jieji_6s jieji_7s');
		$(this).addClass('cur ' + 'jieji_' + (_index + 1) + 's');
		$("#site-name").html($(this).find('p').eq(0).html());
		$(".index-tab1A").attr('href', '/destinations/' + $(this).attr('data-id'));
		_this.find('.slV1_I_L_con_ul').removeClass('slV1_cur');
		_this.find('.slV1_I_L_con_ul').animate({
			'opacity': '0'
		}, 100);
		_this.find('.slV1_I_L_con_ul').eq($(this).index()).addClass('slV1_cur');
		_this.find('.slV1_I_L_con_ul').eq($(this).index()).animate({
			'opacity': '1'
		}, 100);
	})

	function db_is_array(arr, str) {
		for (var i = 0; i <= arr.length; i++) {
			if (arr[i] == str) return true;
		}
		return false;
	}
	$(window).bind('scroll', function() {
		if (_this.offset() && _this.offset().top < (($(window).height() + $(window).scrollTop()) + 500)) {
			if (sctop == '0') {
				sctop = '1';
				db_list(0);
			}
		}
	})
}
senseluxuryFed.indexFun.imgList2 = function(obj, cat) {
	var obj = obj,
		_this = $(obj),
		sctop = 0,
		fobj = '.slV1_I_L_con_div',
		forID = 0,
		dataID = new Array('27', '38', '20', '22', '327')
		dbg = 0;

	function db_list(isID) {
		var isdataID = '',
			classshow = '';
		if (isID > 0) {
			isdataID = isID;
			classshow = ' slV1_cur';
		} else {
			isdataID = dataID[0];
		}
		if (dataID == '') return false;
		if (dbg == 1) return false;
		$.ajax({
			url: 'getsubjectlist/' + isdataID + '/jsonp/jsonp',
			type: "POST",
			dataType: "jsonp",
			jsonpCallback: 'jsonp',
			success: function(data) {
				var data = data['data'];
				var html = "";
				html += '<ul class="slV1_I_L_con_ul' + classshow + '">';
				for (var i = 0; i < data.length; i++) {
					var price = (data[i]['price'] > 100) ? '¥<span>' + data[i]['price'] + '</span>/' + MESSAGE.night : '<span style="font-size: small">' + MESSAGE.inquire_rate + '</span>';
					html += '<li>';
					if (data[i]["is_panorama"]) {
						html += '<a href="javascript:void(0)"><div class="panorama"><span>全景</span></div></a>'
					}
					html += '<div><a href="' + data[i]['href'] + '"><img src="' + data[i]['data_url'] + '"></a></div>';
					html += '<div class="con">'
					html += '<a class="title slV1_fs3" href="' + data[i]['href'] + '">' + data[i]['title'] + '</a>';
					html += '<span class="dsp slV1_fs5">' + data[i]['parent_name'] + " " + data[i]['name'] + '</span>';
					html += '<strong class="slV1_fs3">' + price + '</strong>';
					if (data[i]['rate_per_person'] > 0) {
						html += '<span class="Lflr slV1_fs5">' + MESSAGE.perperson + ' ￥' + data[i]['rate_per_person'] + '/' + MESSAGE.night + '</span>';
					}
					html += '</div>';
					html += '<div class="icons"><div class="icon-ws"><span class="iconfont-home">&#xe606;</span>' + data[i]['bedroom'] + '</div>';
					html += '<div class="icon-yc"><span class="iconfont-home">&#xe60e;</span>' + data[i]['shower_room'] + '</div>';
					var pool = (data[i]['pool'] != 0) ? '<div class="icon-wsj"><span class="iconfont-home">&#xe607;</span> ' + data[i]['pool'] + '</div>' : '';
					html += pool;
					html += '</div></li>';
				}
				html += '</ul>';
				$('.con4').find('.ul_main').append(html);
				for (var i = 0; i <= dataID.length; i++) {
					if (dataID[i] == isdataID) {
						dataID.shift(i);
					}
				}
				db_list(0);
			}
		});
	}
	_this.find(fobj).on('click', 'ul li', function() {
		dbg = 1;
		if (db_is_array(dataID, $(this).attr('data-id'))) {
			dbg = 0;
			db_list($(this).attr('data-id'));
		} else {
			dbg = 0;
			db_list(0);
		}
		_this.find(fobj + ' ul li').removeClass('cur');
		$(this).addClass('cur');
		_this.find('.slV1_I_L_con_ul').removeClass('slV1_cur');
		_this.find('.slV1_I_L_con_ul').animate({
			'opacity': '0'
		}, 100);
		_this.find('.slV1_I_L_con_ul').eq($(this).index()).addClass('slV1_cur');
		_this.find('.slV1_I_L_con_ul').eq($(this).index()).animate({
			'opacity': '1'
		}, 100);
		$("#site-name1").html($(this).attr('data-name'));
		$(".index-tab2A").attr('href', '/subject/' + $(this).attr('data-id'));
		_this.find('.slV1_I_L_con_div ul li').css('height', '94px');
		$(this).css('height', '160px');
	})

	function db_is_array(arr, str) {
		for (var i = 0; i <= arr.length; i++) {
			if (arr[i] == str) return true;
		}
		return false;
	}
	$(window).bind('scroll', function() {
		if (_this.offset() && _this.offset().top < (($(window).height() + $(window).scrollTop()) + 500)) {
			if (sctop == '0') {
				sctop = '1';
				db_list(0);
			}
		}
	})
}
senseluxuryFed.indexFun.searchFixde = function() {
	var comFun = senseluxuryFed.commonFun,
		$fixMenu = $('.D1Search'),
		menuTop = $fixMenu.offset() ? $fixMenu.offset().top : -1;
	if (menuTop === -1) return false;
	$(window).scroll(function() {
		var winTop = $(window).scrollTop();
		if (winTop > menuTop) {
			$fixMenu.addClass('fiexd');
		} else {
			$fixMenu.removeClass('fiexd');
		};
	});
};
senseluxuryFed.indexFun.ajaxLoadXilie = function() {
	var $xlCont = $('.index-lvyou');
	$xlCont.find('.index-tab1').on('click', 'li', function() {
		var $this = $(this),
			dataId = $this.attr('data-id'),
			siteTitle = $this.attr('data-name');
		var domain = "/";
		$this.addClass('cur').siblings('li').removeClass('cur');
		$.ajax({
			url: domain + 'getcityproductlist/' + dataId + '/jsonp/jsonp',
			type: "GET",
			dataType: "jsonp",
			jsonpCallback: 'jsonp',
			success: function(data) {
				var sData = data;
				console.log(sData);
				addHtmlFun(sData.data);
				$('#site-name').html(siteTitle);
			}
		});
	});

	function addHtmlFun(data) {
		var html = "";
		html += '<ul>';
		for (var i = 0; i < data.length; i++) {
			var price = (data[i]['price'] > 100) ? '¥' + data[i]['price'] + '/' + MESSAGE.night : '<span style="font-size: small">' + MESSAGE.inquire_rate + '</span>';
			html += '<li>';
			html += '<div class="zhu-len Lposa">' + price + '</div>';
			html += '<div><a href="' + data[i]['href'] + '"><img src="' + data[i]['data_url'] + '"></a></div>';
			html += '<div class="Lpl10 Lpr10 Lmt10"><a href="' + data[i]['href'] + '" class="Lfz16">' + data[i]['title'] + '</a></div>';
			html += '<div class="Lc999 Lpl10 Lpr10">' + data[i]['parent_name'] + " " + data[i]['name'] + '</div>';
			html += '<div class="divyy"><span>' + data[i]['tag'] + '</span></div>';
			html += '</li>';
		}
		html += '</ul>';
		$('#con_tab_1').html(html);
		$('.index-tab1A').attr("href", '/discounts/' + $('.index-tab1').find('.cur').attr("data-id"));
	};
	$('#con_tab_1').on('click', 'li .newsicon2', function() {
		var $this = $(this);
		$this.addClass('newsicon3');
	});
};
senseluxuryFed.indexFun.ajaxLoadTheme = function() {
	var $xlCont = $('.index-lvyou');
	$xlCont.find('.index-tab2').on('click', 'li', function() {
		var $this = $(this),
			dataId = $this.attr('data-id'),
			siteTitle = $this.attr('data-name');
		var domain = "/";
		$this.css('height', 190).siblings('li').css('height', 92);
		$this.addClass('cur').siblings('li').removeClass('cur');
		$.ajax({
			url: domain + 'getsubjectlist/' + dataId + '/jsonp/jsonp',
			type: "GET",
			dataType: "jsonp",
			jsonpCallback: 'jsonp',
			success: function(data) {
				var sData = data;
				console.log(sData);
				addHtmlFun(sData.data);
				$('#site-name1').html(siteTitle);
			}
		});
	});

	function addHtmlFun(data) {
		var html = "";
		html += '<ul>';
		for (var i = 0; i < data.length; i++) {
			var price = (data[i]['price'] > 100) ? '¥' + data[i]['price'] + '/' + MESSAGE.night : '<span style="font-size: small">' + MESSAGE.inquire_rate + '</span>';
			html += '<li><div class="zhu-len Lposa">' + price + '</div><div><a href="' + data[i]['href'] + '"><img src="' + data[i]['data_url'] + '"></a></div><div class="Lpl10 Lpr10 Lmt10"><a href="' + data[i]['href'] + '" class="Lfz16">' + data[i]['title'] + '</a></div><div class="Lc999 Lpl10 Lpr10">' + data[i]['parent_name'] + " " + data[i]['name'] + '</div><div class="divyy"><span>' + data[i]['tag'] + '</span></div></li>';
		}
		html += '</ul>';
		$('#con_tabs_1').html(html);
		$('.index-tab2A').attr("href", '/discounts/' + $('.index-tab2').find('.cur').attr("data-id"));
	};
	$('#con_tab_1').on('click', 'li .newsicon2', function() {
		var $this = $(this),
			id = $this.attr('data-id');
		$this.addClass('newsicon3');
		_this.setCookie($this, id, 'default');
	});
};
senseluxuryFed.weixinFun = function() {
	$('.Cflowwidget').find('a.wx').hover(function() {
		$(this).children('.qrcode').show();
	}, function() {
		$(this).children('.qrcode').hide();
	});
};
senseluxuryFed.listFun = function() {
	var _this = senseluxuryFed.listFun;
	_this.priceSlide('#slider-range');
	_this.houseSlide('#slider-range1');
	_this.classFun('.class-search');
	_this.priceTipFun();
	_this.hotSlideFun('#likeCont');
	_this.mapFun();
	var $pageCont = $('.page-list'),
		iNowNumb = $pageCont.attr('date-page-now'),
		allNumb = $pageCont.attr('date-page-all');
	senseluxuryFed.getPageFun(iNowNumb, allNumb);
	$pageCont.on('click', '.pageNumb', function() {
		var pageIndex = $(this).attr('data-num');
		senseluxuryFed.pageClickFun(parseInt(pageIndex));
		iNowNumb = parseInt(pageIndex);
		return false;
	});
	$pageCont.on('click', '.prve', function() {
		senseluxuryFed.pageClickFun(parseInt(iNowNumb) - 1);
		iNowNumb = parseInt(iNowNumb) - 1;
		return false;
	});
	$pageCont.on('click', '.next', function() {
		senseluxuryFed.pageClickFun(parseInt(iNowNumb) + 1);
		iNowNumb = parseInt(iNowNumb) + 1;
		return false;
	});
};
senseluxuryFed.detailFun = function() {
	var _this = this,
		deFun = _this.detailFun;
	_this.indexFun.picSlide('#dt_slides', '.tabLabel');
	deFun.dateFun();
	deFun.fixedMenuFun();
	deFun.likeSlideFun('#likeCont');
	deFun.zixunPop();
	deFun.yudingPop();
	deFun.commentFun();
	var $queryPrice = $('.query-price');
	$queryPrice.find('.room-c').hover(function() {
		var $this = $(this);
		$this.find('.room-c-list').show();
	}, function() {
		$(this).find('.room-c-list').hide();
	});
	$('.room-c-list').on('click', 'li', function() {
		var _index = $(this).index();
		$queryPrice.find('span').html($(this).html());
		$(this).parent('.room-c-list').hide();
		$queryPrice.siblings('.price-tabcont').hide();
		$queryPrice.siblings('.price-tabcont').eq(_index).show();
	});
	$('.price-tabcont').find('.bz-cont').on('click', 'a', function() {
		var $this = $(this);
		if ($this.hasClass('show')) {
			$this.parent('.bz-cont').siblings('.price-tab').find('tbody tr').hide().siblings('tr').eq(0).show();
			$this.removeClass('show').html('【' + MESSAGE.show_more_rates + ' + 】');
		} else {
			$this.parent('.bz-cont').siblings('.price-tab').find('tr').show();
			$this.addClass('show').html('【' + MESSAGE.show_less_rates + ' - 】');
		}
		return false;
	});
	var $infoText = $('.info-cont');
	$infoText.on('click', '.more', function() {
		var $this = $(this);
		if ($this.hasClass('open')) {
			$this.removeClass('open').html('【' + MESSAGE.show_more_details + ' + 】');
			$this.siblings('.info-text').css('height', '72px');
		} else {
			$this.addClass('open').html('【' + MESSAGE.show_less_details + ' - 】');
			$this.siblings('.info-text').css('height', '113px');
		};
		deFun.fixedMenuFun();
	});
	var $infoTop = $('.de-info');
	$infoTop.find('.add').on('click', 'a', function() {
		$('.detail-type').find('li').eq(3).children('a').trigger('click');
	});
	var villa = $("#extend_code").val();

	function SignInViewModel() {
		var self = this;
		self.CalendarArray = ko.observableArray([]);
		self.CalendarEndArray = ko.observableArray([]);
		self.SignInDate = ko.observableArray([]);
		self.year = ko.observable("");
		self.month = ko.observable("");
		self.isFirstInit = true;
		self.toDays = '2014-07-27';
		self.intervalMonth = 1;
		self.IsToday = function(day) {
			return day == self.currentDay && self.month() == self.currentMonth && self.year() == self.currentYear;
		}
		self.SetCurrentDate = function(date) {
			self.currentYear = date.getFullYear();
			self.currentDay = date.getDate();
			self.currentMonth = date.getMonth() + 1;
			self.year(date.getFullYear());
			self.month(date.getMonth() + 1);
		}
		self.SignIn = function() {}
		self.Init = function() {
			if (arguments[0]) {
				self.toDays = arguments[0];
			}
			if (arguments[1]) {
				self.intervalMonth = arguments[1];
			}
			if (self.isFirstInit) {
				self.isFirstInit = false;
				var todayDate = self.toDays;
				var todays = todayDate.split("-");
				self.SetCurrentDate(new Date(todays[0], todays[1] - 1, todays[2]));
			}
			$.ajax({
				url: "/web/detail/getUnavailableDates/villa/" + villa,
				dataType: "json",
				data: {
					"year": self.year(),
					"month": self.month(),
					"timestamp": Date.parse(new Date())
				},
				success: function(_result) {
					if (self.isFirstInit) {
						self.isFirstInit = false;
						var todayDate = self.toDays;
						var todays = todayDate.split("-");
						self.SetCurrentDate(new Date(todays[0], todays[1] - 1, todays[2]));
					}
					if (null == _result) {
						_result = [];
					}
					self.SignInDate(_result);
					self.SetCalendarDays(self.year(), self.month());
				}
			});
			self.SetCalendarDays(self.year(), self.month());
		}
		self.SetCalendarDays = function(year, month) {
			var nowDate = new Date(year, month - 1, 1);
			var day = nowDate.getDay() == 0 ? 7 : nowDate.getDay();
			nowDate = new Date(year, month, 0);
			var monthDays = nowDate.getDate();
			var monthDaysArray = new Array();
			for (var i = 1; i < day; i++) {
				monthDaysArray.push("");
			}
			for (var i = 1; i <= monthDays; i++) {
				monthDaysArray.push(i);
			}
			var rows = parseInt((monthDays + day - 1) / 7) + ((monthDays + day - 1) % 7 == 0 ? 0 : 1);
			var monthDaysEndArray = new Array();
			for (var i = 1; i <= 6 * 7 - (monthDays + day - 1); i++) {
				monthDaysEndArray.push(i);
			}
			self.CalendarArray(monthDaysArray);
			self.CalendarEndArray(monthDaysEndArray);
		}
		self.SetSignInDate = function(signInDate) {
			for (var i = 0; i < self.SignInDate().length; i++) {
				if (self.SignInDate()[i] == signInDate) return true;
			}
			return false;
		}
		self.prevMonth = function() {
			var tempDate = new Date(self.year(), self.month() - self.intervalMonth - 1);
			self.year(tempDate.getFullYear());
			self.month(tempDate.getMonth() + 1);
			self.Init();
		}
		self.nextMonth = function() {
			var tempDate = new Date(self.year(), self.month() - self.intervalMonth + (2 * self.intervalMonth - 1));
			self.year(tempDate.getFullYear());
			self.month(tempDate.getMonth() + 1);
			self.Init();
		}
	}
	if (villa != "") {
		var firstDayOfMonth = $("#first_day_of_month").val();
		var firstDayOfNextMonth = $("#first_day_of_next_month").val();
		$("#prev").on("click", function() {
			viewModel_1.prevMonth();
			viewModel_2.prevMonth();
		})
		$("#next").on("click", function() {
			viewModel_1.nextMonth();
			viewModel_2.nextMonth();
		})
		var viewModel_1 = new SignInViewModel();
		viewModel_1.Init(firstDayOfMonth, 2);
		ko.applyBindings(viewModel_1, $("#signInCalendar_1")[0]);
		var viewModel_2 = new SignInViewModel();
		viewModel_2.Init(firstDayOfNextMonth, 2);
		ko.applyBindings(viewModel_2, $("#signInCalendar_2")[0]);
	}
};
senseluxuryFed.detailFun.zixunPop = function() {
	var comFun = senseluxuryFed.commonFun,
		$zxCont = $('.zxDialog'),
		_this = senseluxuryFed;;
	$('#seek-btn').click(function() {
		$('.Cmask').show();
		$zxCont.show();
		if (getCookie("c_start_time")) {
			$("#inquireus_start").val(getCookie("c_start_time"));
		}
		$("#inquireus_start").on('change', function() {
			setCookie("c_start_time", $(this).val(), '7d');
		});
		if (getCookie("c_end_time")) {
			$("#inquireus_end").val(getCookie("c_end_time"));
		}
		$("#inquireus_end").on('change', function() {
			setCookie("c_end_time", $(this).val(), '7d');
		});
	});
	$zxCont.on('click', '.close', function() {
		$('.Cmask').hide();
		$zxCont.hide();
	});
	$('.zxDialog form').validate({
		rules: {
			'Inquire[user_name]': {
				required: true
			},
			'Inquire[user_email]': {
				required: true,
				email: true
			}
		},
		errorPlacement: function(error, element) {
			var $element;
			$element = $(element);
			$element.parents('.inputbox').find('.msg').html(error);
		},
		submitHandler: function(form) {
			var $self, pidId = $('#pid').val(),
				$thisBtn = $('.d-Icon-r').find('.favorite');
			$self = $(form);
			$self.find('.msg').html('&nbsp;');
			$self.ajaxSubmit(function(data) {
				var $msg;
				if (typeof data === 'string') {
					data = $.parseJSON(data);
				}
				$msg = $self.find('>.msg');
				if (data.success !== 1) {
					$self.find('>.msg').removeClass('suc').addClass('err').html(data.message);
				} else {
					$self.resetForm();
					$self.find('>.msg').removeClass('err').addClass('suc').html(data.message);
					setTimeout(function() {
						$('.Cconsult_dialog .close').click();
						$msg.fadeOut();
						$msg.html('&nbsp;');
						return $msg.show();
					}, 3000);
				}
			});
		}
	});
};
senseluxuryFed.detailFun.yudingPop = function() {
	var comFun = senseluxuryFed.commonFun,
		$orderCont = $('.orderDialog'),
		_this = senseluxuryFed;;
	comFun.datepickerFun('#book_start');
	comFun.datepickerFun('#book_end');
	if (getCookie("c_start_time")) {
		$("#book_start").val(getCookie("c_start_time"));
		$("#start").val(getCookie("c_start_time"));
	}
	$("#book_start").on('change', function() {
		setCookie("c_start_time", $(this).val(), '7d');
		$("#start").val(getCookie("c_start_time"));
	});
	if (getCookie("c_end_time")) {
		$("#book_end").val(getCookie("c_end_time"));
		$("#start1").val(getCookie("c_end_time"));
	}
	$("#book_end").on('change', function() {
		setCookie("c_end_time", $(this).val(), '7d');
		$("#start1").val(getCookie("c_end_time"));
	});
	$('#order-btn').click(function() {
		$('.Cmask').show();
		$orderCont.show();
	});
	$orderCont.on('click', '.close', function() {
		$('.Cmask').hide();
		$orderCont.hide();
	});
	$('.orderDialog form').validate({
		rules: {
			'book_user_name': {
				required: true
			},
			'book_user_email': {
				required: true,
				email: true
			}
		},
		errorPlacement: function(error, element) {
			var $element;
			$element = $(element);
			$element.parents('.inputbox').find('.msg').html(error);
		},
		submitHandler: function(form) {
			var $self, pidId = $('#pid').val(),
				$thisBtn = $('.d-Icon-r').find('.favorite');
			$self = $(form);
			$self.find('.msg').html('&nbsp;');
			$self.ajaxSubmit(function(data) {
				var $msg;
				if (typeof data === 'string') {
					data = $.parseJSON(data);
				}
				$msg = $self.find('>.msg');
				if (data.success !== 1) {
					$self.find('>.msg').removeClass('suc').addClass('err').html(data.message);
				} else {
					$self.resetForm();
					$self.find('>.msg').removeClass('err').addClass('suc').html(data.message);
					setTimeout(function() {
						$('.Cconsult_dialog .close').click();
						$msg.fadeOut();
						$msg.html('&nbsp;');
						window.location.href = data.redirect;
						return $msg.show();
					}, 50);
				}
			});
		}
	});
};
senseluxuryFed.detailFun.dateFun = function() {
	var comFun = senseluxuryFed.commonFun,
		$dateBox = $('.Date-box'),
		domain = $('#domain').val();
	comFun.datepickerFun('#start');
	comFun.datepickerFun('#start1');
	if (getCookie("c_start_time")) {
		$("#start").val(getCookie("c_start_time"));
		$("#book_start").val(getCookie("c_start_time"));
	}
	$("#start").on('change', function() {
		setCookie("c_start_time", $(this).val(), '1d');
		$("#book_start").val(getCookie("c_start_time"));
	});
	if (getCookie("c_end_time")) {
		$("#start1").val(getCookie("c_end_time"));
		$("#book_end").val(getCookie("c_end_time"));
	}
	$("#start1").on('change', function() {
		setCookie("c_end_time", $(this).val(), '1d');
		$("#book_end").val(getCookie("c_end_time"));
	});

	function datetime_to_unix(datetime) {
		var arr = datetime.split("/");
		var now = new Date(Date.UTC(arr[0], arr[1] - 1, arr[2]));
		return parseInt(now.getTime() / 86400000);
	}

	function unix_to_datetime(unix) {
		var now = new Date(parseInt(unix) * 86400000),
			text = '';
		return text = now.getFullYear() + '/' + setData((now.getMonth() + 1)) + '/' + setData(now.getDate());
	};

	function setData(numb) {
		if (numb < 9) {
			return numb = '0' + numb
		} else {
			return numb;
		};
	};
	$dateBox.find('.room-c').hover(function() {
		$(this).find('.room-c-list').show();
	}, function() {
		$(this).find('.room-c-list').hide();
	});
	$dateBox.find('#start').change(function() {
		var qsDate = $dateBox.find('#start').val(),
			textVal = $dateBox.find('.room-c span').attr('data-val'),
			flag = $dateBox.find('.room-c span').attr('data-flag'),
			days = $dateBox.find('.room-c span').attr('date_diff'),
			pidVal = $('#pid').val(),
			qsDateTime = datetime_to_unix(qsDate),
			endTime = parseInt(qsDateTime) + parseInt(days),
			endDay = null;
		if ($('#start1').val() == '') {
			endDay = unix_to_datetime(endTime).split(' ')[0];
			$('#start1').val(endDay);
			$('#start1').trigger("change");
		} else {
			endDay = $('#start1').val();
		};
		$.ajax({
			url: domain + '/web/detail/countcost',
			type: "GET",
			data: {
				pid: pidVal,
				start: qsDate,
				end: endDay,
				bedroom: textVal,
				flag: flag
			},
			dataType: "jsonp",
			jsonpCallback: 'jsonp',
			success: function(data) {
				if (parseInt(data) == -1) {
					$('#cost').html('参数错误');
				} else {
					$('#cost').html('¥' + data.price);
					$('#service').html('¥' + data.service_fee);
					$('#tax').html('¥' + data.tax);
					$('#total').html('¥' + data.total);
					if (data.mini_stay > data.day_diff) {
						$("#price_cal_notice").html("提示：您预订的期间最短入住天数要求为" + data.mini_stay + "天，小于该天数将无法预订成功");
					} else {
						$("#price_cal_notice").html("");
					}
				}
			}
		});
	});
	$dateBox.find('#start1').change(function() {
		var qsDate = $dateBox.find('#start').val(),
			textVal = $dateBox.find('.room-c span').attr('data-val'),
			days = $dateBox.find('.room-c span').attr('date_diff'),
			pidVal = $('#pid').val(),
			flag = $dateBox.find('.room-c span').attr('data-flag'),
			endDay = $('#start1').val();
		if (qsDate == '') {
			return false;
		} else {
			$.ajax({
				url: domain + '/web/detail/countcost',
				type: "GET",
				data: {
					pid: pidVal,
					start: qsDate,
					end: endDay,
					bedroom: textVal,
					flag: flag,
				},
				dataType: "jsonp",
				jsonpCallback: 'jsonp',
				success: function(data) {
					$('#cost').html('¥' + data.price);
					$('#service').html('¥' + data.service_fee);
					$('#tax').html('¥' + data.tax);
					$('#total').html('¥' + data.total);
					if (data.mini_stay > data.day_diff) {
						$("#price_cal_notice").html("提示：您预订的期间最短入住天数要求为" + data.mini_stay + "天，小于该天数将无法预订成功");
					} else {
						$("#price_cal_notice").html("");
					}
				}
			});
		}
	});
	$dateBox.find('.room-c-list').on('click', 'li', function() {
		var qsDate = $dateBox.find('#start').val(),
			jsDate = $dateBox.find('#start1').val(),
			textVal = $(this).attr('data-val'),
			flag = $(this).attr('data-flag'),
			dateDiffVal = $(this).attr('date_diff'),
			pidVal = $('#pid').val(),
			spanCont = $dateBox.find('.room-c span');
		spanCont.text($(this).text());
		spanCont.attr({
			'data-val': textVal,
			'date_diff': dateDiffVal,
			'data-flag': flag,
		});
		if (qsDate == '' || jsDate == '') {
			alert('请选择起住日期和离开日期！')
			return false;
		} else {
			if (datetime_to_unix(qsDate) >= datetime_to_unix(jsDate)) {
				alert('离开日期应该在起住日期之后！')
			} else {
				$.ajax({
					url: domain + '/web/detail/countcost',
					type: "GET",
					data: {
						pid: pidVal,
						start: qsDate,
						end: jsDate,
						bedroom: textVal,
						flag: flag,
					},
					dataType: "jsonp",
					jsonpCallback: 'jsonp',
					success: function(data) {
						if (parseInt(data) == -1) {
							$('#cost').html('参数错误');
						} else {
							$('#cost').html('¥' + data.price);
							$('#service').html('¥' + data.service_fee);
							$('#tax').html('¥' + data.tax);
							$('#total').html('¥' + data.total);
							if (data.mini_stay > data.day_diff) {
								$("#price_cal_notice").html("提示：您预订的期间最短入住天数要求为" + data.mini_stay + "天，小于该天数将无法预订成功");
							} else {
								$("#price_cal_notice").html("");
							}
						}
					}
				});
			}
		}
	});
	var init_get_price = function() {
			var qsDate = $dateBox.find('#start').val(),
				jsDate = $dateBox.find('#start1').val(),
				textVal = $("#bedroom_show").attr('data-val'),
				flag = $("#bedroom_show").attr('data-flag'),
				pidVal = $('#pid').val();
			if (qsDate == '' || jsDate == '') {
				return false;
			} else {
				if (datetime_to_unix(qsDate) >= datetime_to_unix(jsDate)) {
					alert('离开日期应该在起住日期之后！')
				} else {
					$.ajax({
						url: domain + '/web/detail/countcost',
						type: "GET",
						data: {
							pid: pidVal,
							start: qsDate,
							end: jsDate,
							bedroom: textVal,
							flag: flag,
						},
						dataType: "jsonp",
						jsonpCallback: 'jsonp',
						success: function(data) {
							if (parseInt(data) == -1) {
								$('#cost').html('参数错误');
							} else {
								$('#cost').html('¥' + data.price);
								$('#service').html('¥' + data.service_fee);
								$('#tax').html('¥' + data.tax);
								$('#total').html('¥' + data.total);
								if (data.mini_stay > data.day_diff) {
									$("#price_cal_notice").html("提示：您预订的期间最短入住天数要求为" + data.mini_stay + "天，小于该天数将无法预订成功");
								} else {
									$("#price_cal_notice").html("");
								}
							}
						}
					});
				}
			}
		}
	init_get_price();
};
senseluxuryFed.listFun.hotSlideFun = function(id) {
	$item = $(id);
	var $ul = $item.find("ul");
	var $prev = $item.find(".prev").eq(0);
	var $next = $item.find(".next").eq(0);
	var isSliding = false;
	$prev.click(function(event) {
		if (isSliding) return false;
		var $li = $item.find("ul li");
		var $last = $li.eq($li.length - 1);
		var $first = $li.eq(0);
		$last.insertBefore($first);
		$ul.css({
			"left": "-274px"
		});
		$ul.animate({
			"left": "0px"
		}, 500, function() {
			$ul.css({
				"left": "",
				"right": ""
			});
			isSliding = false;
		});
		isSliding = true;
		return false;
	});
	$next.click(function(event) {
		if (isSliding) return false;
		$ul.animate({
			"right": "274px"
		}, 500, function() {
			var $li = $item.find("ul li");
			var $first = $li.eq(0);
			var $last = $li.eq($li.length - 1);
			$first.insertAfter($last);
			$ul.css({
				"left": "",
				"right": ""
			});
			isSliding = false;
		});
		isSliding = true;
		return false;
	});
	$ul.find("[style='display:none;']").remove();
	$ul.append($ul.html());
};
senseluxuryFed.listFun.priceTipFun = function() {
	var $searchNav = $('.search-result-hd'),
		tipVal = '',
		domain = $('#domain').val();
	$searchNav.find('.items').on('click', '.price a', function() {
		var $this = $(this).parent('li');
		if ($this.hasClass('cur')) {
			$this.find('.list').hide();
			$this.removeClass('cur');
		} else {
			$this.find('.list').show();
			$this.addClass('cur');
		};
	});
	$searchNav.find('.list').on('click', 'span', function() {
		var $this = $(this);
		tipVal = $this.attr('data-price');
		$this.parents('li').attr('data-tip', tipVal);
		$this.parents('li').children('a').html($this.html() + '<i></i>');
		$this.parent('.list').hide();
		$searchNav.find('.price').removeClass('cur');
		paixuFun(tipVal);
	});

	function paixuFun(val) {
		var $pageName = $('#pageName').val(),
			$mddCont = $('.class-search'),
			_this = senseluxuryFed,
			$subId = $('#subId').val(),
			$destina_as = $mddCont.find('.sele-items').eq(0).find('a.cur'),
			$destina_arr = [],
			$destina_val = '',
			$style_as = $mddCont.find('.sele-items').eq(1).find('a.cur'),
			$style_arr = [],
			$style_val = '',
			$minPrice = $('#slider-range').attr('iNowMin'),
			$maxPrice = $('#slider-range').attr('iNowMax'),
			$minRoom = $('#slider-range1').attr('iNowMin'),
			$maxRoom = $('#slider-range1').attr('iNowMax');
		$destina_as.each(function(i) {
			$destina_arr.push($(this).attr('c_id'));
		});
		$destina_val = $destina_arr.join('|');
		$style_as.each(function(i) {
			$style_arr.push($(this).attr('tag_id'));
		});
		$style_val = $style_arr.join('|');
		switch ($pageName) {
		case 'subject':
			$.ajax({
				url: domain + '/subject_list/' + $subId,
				type: "POST",
				data: {
					destination: $destina_val,
					order: val,
					styles: $style_val,
					min_bedroom: $minRoom,
					max_bedroom: $maxRoom,
					min_price: $minPrice,
					'max_price': $maxPrice
				},
				dataType: "jsonp",
				jsonpCallback: 'jsonp',
				success: function(data) {
					if (data['code'] == 200) {
						_this.getSearchList(data['val'], $pageName);
					};
				}
			});
			break;
		case 'destinations':
			$.ajax({
				url: domain + '/destinations_list/' + $subId,
				type: "POST",
				data: {
					order: val,
					styles: $style_val,
					min_bedroom: $minRoom,
					max_bedroom: $maxRoom,
					min_price: $minPrice,
					'max_price': $maxPrice
				},
				dataType: "jsonp",
				jsonpCallback: 'jsonp',
				success: function(data) {
					if (data['code'] == 200) {
						_this.getSearchList(data['val'], $pageName);
					};
				}
			});
			break;
		};
	};
};
senseluxuryFed.listFun.mapFun = function() {
	var $mapBtn = $('.search-result-hd').find('.items .map'),
		mapHtml = '<div id="map_canvas"></div>',
		$mapCont = $('#map-warp'),
		domain = $('#domain').val();
	$mapBtn.on('click', 'a', function() {
		$mapCont.fadeIn(400, 'swing', function() {
			var $pageName = $('#pageName').val(),
				$mddCont = $('.class-search'),
				_this = senseluxuryFed,
				$subId = $('#subId').val(),
				$destina_as = $mddCont.find('.sele-items').eq(0).find('a.cur'),
				$destina_arr = [],
				$destina_val = '',
				$style_as = $mddCont.find('.sele-items').eq(1).find('a.cur'),
				$style_arr = [],
				$style_val = '',
				priceTip = $('.search-result-hd').find('.price').attr('data-tip') || '',
				$minPrice = $('#slider-range').attr('iNowMin') || '',
				$maxPrice = $('#slider-range').attr('iNowMax') || '',
				$minRoom = $('#slider-range1').attr('iNowMin') || '',
				$maxRoom = $('#slider-range1').attr('iNowMax') || '',
				pageNum = $('.page-list').attr('date-page-now');
			$destina_as.each(function(i) {
				$destina_arr.push($(this).attr('c_id'));
			});
			$destina_val = $destina_arr.join('|');
			$style_as.each(function(i) {
				$style_arr.push($(this).attr('tag_id'));
			});
			$style_val = $style_arr.join('|');
			switch ($pageName) {
			case 'subject':
				$.ajax({
					url: domain + '/subject_list/' + $subId + '?page=' + pageNum,
					type: "POST",
					data: {
						destination: $destina_val,
						order: priceTip,
						styles: $style_val,
						min_bedroom: $minRoom,
						max_bedroom: $maxRoom,
						min_price: $minPrice,
						'max_price': $maxPrice
					},
					dataType: "jsonp",
					jsonpCallback: 'jsonp',
					success: function(data) {
						if (data['code'] == 200) {
							initialize(data['val']['data']);
						};
					}
				});
				break;
			case 'destinations':
				$.ajax({
					url: domain + '/destinations_list/' + $subId + '?page=' + pageNum,
					type: "POST",
					data: {
						order: priceTip,
						styles: $style_val,
						min_bedroom: $minRoom,
						max_bedroom: $maxRoom,
						min_price: $minPrice,
						'max_price': $maxPrice
					},
					dataType: "jsonp",
					jsonpCallback: 'jsonp',
					success: function(data) {
						if (data['code'] == 200) {
							initialize(data['val']['data']);
						};
					}
				});
				break;
			};
		});
	});
	$mapCont.on('click', '.close', function() {
		$mapCont.hide();
	});

	function initialize(data) {
		var myMap;
		var aData = data,
			locations = [],
			_this = senseluxuryFed;
		var lat, lon, a_len = 0;
		for (var i = 0; i < aData.length; i++) {
			if (aData[i]['longitude'] != '' && aData[i]['latitude'] != '') {
				if (a_len == 0) {
					lat = aData[i]['latitude'];
					lon = aData[i]['longitude'];
				}
				a_len = a_len + 1;
				locations.push(aData[i]['latitude'] + ',' + aData[i]['longitude']);
			};
		};
		var latlng = new google.maps.LatLng(lat, lon);
		var myOptions = {
			zoom: 12,
			center: latlng,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		myMap = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
		for (var i = 0; i < locations.length; i++) {
			mapMarker(i, locations[i]);
		};

		function mapMarker(index, locations) {
			var loc = locations.split(',');
			var marker = new google.maps.Marker({
				position: new google.maps.LatLng(loc[0], loc[1]),
				map: myMap,
				title: aData[i]['title']
			});
			var infowindow = new google.maps.InfoWindow({
				content: '<div class="search-result-map"><ul class="items-list"><li><a target="_blank" href="' + aData[i]['url'] + '" class="pic"><img src="' + aData[i]['imageUrl'] + '" /> </a><div class="msg-text"><h3 class="tit"><a target="_blank" href="' + aData[i]['url'] + '">' + aData[i]['title'] + '</a></h3><div class="add-type"><p class="address"><span>' + aData[i]['address'] + '</span> </p><p class="type-text">' + aData[i]['memo'] + '</p></div><div class="serve-type"><p class="ms">' + aData[i]['subject'].join('<span>|</span>') + ' </p></div><div class="inner"><a target="_blank" href="' + aData[i]['url'] + '" class="xq-btn">查看详情</i></a><p class="price">¥' + aData[i]['price'] + '/<small>晚起</small><span>人均¥' + aData[i]['perCapita'] + '/晚起</span></p></div></div></li></ul></div>',
				size: new google.maps.Size(200, 200)
			});
			google.maps.event.addListener(marker, 'click', function() {
				infowindow.open(myMap, marker);
			});
		};
	};
};
senseluxuryFed.detailFun.likeSlideFun = function(id) {
	senseluxuryFed.listFun.hotSlideFun(id);
};
senseluxuryFed.commonFun.datepickerFun = function(id, type) {
	if (type != 'button') {
		type = 'div';
	} else {
		type = 'button';
	}
	$(id).datepicker({
		showOn: type,
		buttonImage: "http://www.senseluxury.com/statics/web/antarctica/img/calendar_icon.png",
		buttonImageOnly: true,
		minDate: 0,
		onClose: function(selectedDate) {
			if (id == '#start1') {
				$("#start").datepicker("option", "maxDate", selectedDate);
			}
			if (id == "#start") {
				$("#start1").datepicker("option", "minDate", selectedDate);
			}
			if (id == "#inquire_start") {
				$("#inquire_end").datepicker("option", "minDate", selectedDate);
			}
			if (id == "#inquire_end") {
				$("#inquire_start").datepicker("option", "maxDate", selectedDate);
			}
			if (id == "#inquireus_start") {
				$("#inquireus_end").datepicker("option", "minDate", selectedDate);
			}
			if (id == "#inquireus_end") {
				$("#inquireus_start").datepicker("option", "maxDate", selectedDate);
			}
			if (id == "#book_start") {
				$("#book_end").datepicker("option", "minDate", selectedDate);
			}
			if (id == "#book_end") {
				$("#book_start").datepicker("option", "maxDate", selectedDate);
			}
		}
	});
};
senseluxuryFed.commonFun.zixunSubmit = function() {
	var comFun = senseluxuryFed.commonFun;
	comFun.datepickerFun('#inquire_start', 'button');
	comFun.datepickerFun('#inquire_end', 'button');
	if (getCookie("c_start_time")) {
		$("#inquire_start").val(getCookie("c_start_time"));
	}
	$("#inquire_start").on('change', function() {
		setCookie("c_start_time", $(this).val(), '1d');
	});
	if (getCookie("c_end_time")) {
		$("#inquire_end").val(getCookie("c_end_time"));
	}
	$("#inquire_end").on('change', function() {
		setCookie("c_end_time", $(this).val(), '1d');
	});
	$('.header .will form').validate({
		rules: {
			'Inquire[user_name]': {
				required: true
			},
			'Inquire[user_email]': {
				required: true,
				email: true
			}
		},
		errorPlacement: function(error, element) {
			var $element;
			$element = $(element);
			$element.parents('.inputbox').find('.msg').html(error);
		},
		submitHandler: function(form) {
			var $self;
			$self = $(form);
			$self.find('.msg').html('&nbsp;');
			$self.ajaxSubmit(function(data) {
				var $msg;
				if (typeof data === 'string') {
					data = $.parseJSON(data);
				}
				$msg = $self.find('.consult>.msg');
				if (data.success !== 1) {
					$msg.removeClass('suc').addClass('err').html(data.message);
				} else {
					$self.resetForm();
					willdata = [];
					$.cookie('willdata', willdata);
					comFun.ShouCanFun(willdata);
					if ($('.favorite').length) {
						$('.favorite').removeClass('curr');
					};
					$msg.removeClass('err').addClass('suc').html('提交成功');
					setTimeout(function() {
						return $msg.fadeOut(function() {
							return $(this).html('&nbsp');
						}).fadeIn();
					}, 3000);
				}
			});
		}
	});
};
senseluxuryFed.setCookie = function($this, idVal, pageID) {
	var $item, $self, data, id, will_item, willdata, _i, _j, _len, _len1;
	var _this = senseluxuryFed;
	$self = $this;
	willdata = $.cookie('willdata') || [];
	id = idVal;
	if ($self.hasClass('curr')) {
		$self.removeClass('curr');
		for (_i = 0, _len = willdata.length; _i < _len; _i++) {
			will_item = willdata[_i];
			if (will_item['p_id'] === id) {
				willdata.splice($.inArray(willdata[_i], willdata), 1);
				break;
			}
		}
	} else {
		for (_j = 0, _len1 = willdata.length; _j < _len1; _j++) {
			will_item = willdata[_j];
			if (will_item['p_id'] === id) {
				return false;
			}
		}
		if (pageID == 'detail') {
			$item = $('.jg-left');
			data = {
				id: idVal,
				links: window.location.href,
				img: $item.find('#dt_slides .tab_body').children('li').eq(0).find('img').attr('src'),
				title: $item.find('.de-info .tit').text(),
				address: $item.find('.add span').html(),
				typeText: $('#p_memo').val()
			};
		} else {
			$item = $self.parents('li');
			data = {
				id: $self.attr('data-id'),
				links: $item.find('.pic').attr('href'),
				img: $item.find('.pic img').attr('src'),
				title: $item.find('.tit a').html(),
				address: $item.find('.address span').html(),
				typeText: $item.find('.type-text').html()
			};
		}
		$self.addClass('curr');
		willdata.push(data);
	};
	$.cookie('willdata', willdata, {
		expires: 365,
		path: '/'
	});
	_this.commonFun.ShouCanFun(willdata);
};
senseluxuryFed.commonFun.ShouCan = function() {
	$.cookie.json = true;
	var $searchResult = $('.search-result-cm'),
		_this = senseluxuryFed,
		pageIdVal = pageID;
	if (pageIdVal == 'detail') {
		var $thisBtn = $('.jg-right').find('.favorite');
		$thisBtn.click(function() {
			var $this = $(this),
				pid = $('#pid').val();
			_this.setCookie($this, pid, 'detail');
			return false;
		});
	} else if (pageIdVal = 'default') {} else {
		$searchResult.on('click', '.items-list .favorite', function() {
			var $this = $(this),
				id = $this.attr('data-id');
			_this.setCookie($this, id, 'subject');
			return false;
		});
	}
};
senseluxuryFed.commonFun.ShouCanFun = function(data) {
	var arrVal = data || [],
		$headerCont = $('.header'),
		$navCont = $headerCont.find('.nav'),
		$navListCont = $navCont.find('.navlink5'),
		shouCanHtmlList = '',
		pageIdVal = pageID;
	if (arrVal.length > 0) {
		$navListCont.find('.ma').html(COMMON_MESSAGE.favorate + ' (' + arrVal.length + ')');
		$navListCont.find('.notice').addClass('Ldn');
		$navListCont.find('.consult').removeClass('Ldn');
		for (i in arrVal) {
			var links = arrVal[i]['links'],
				picSrc = arrVal[i]['img'],
				title = arrVal[i]['title'],
				address = arrVal[i]['address'],
				type = arrVal[i]['typeText'];
			shouCanHtmlList += '<div id="willitem-' + arrVal[i]['p_id'] + '" data-id="' + arrVal[i]['p_id'] + '" class="willitem Lmt10"><a href="javascript:void(0);" class="close"></a> <a href="' + links + '" class="img"><img src="' + picSrc + '" width="140" height="66"></a> <b><a href="' + links + '">' + title + '</a></b> <p>' + address + '<br>' + type + '</p> <input type="hidden" name="product_id[]" value="' + arrVal[i]['p_id'] + '"></div>'
			if (pageIdVal == 'detail') {
				var $this = $('.jg-right').find('.favorite'),
					pid = $('#pid').val();
				if (pid == arrVal[i]['p_id']) {
					$this.addClass('curr');
				};
			} else {
				var $this = $('.favorite[data-id = ' + arrVal[i]['p_id'] + ']');
				$this.addClass('curr');
			}
		}
		$('#shoucanList').html($(shouCanHtmlList));
	} else {
		$navListCont.find('.ma').html(COMMON_MESSAGE.favorate + ' (0)');
		$('#shoucanList').html('');
		$navListCont.find('.notice').removeClass('Ldn');
		$navListCont.find('.consult').addClass('Ldn');
	};
};
senseluxuryFed.commonFun.closeShouCan = function() {
	$('#shoucanList').on('click', '.willitem .close', function() {
		var $item, $self, data, id, will_item, willdata, _i, _j, _len, _len1;
		_this = senseluxuryFed, pageIdVal = pageID;
		$self = $(this);
		id = $self.parent('.willitem').attr('data-id');
		if (pageIdVal == 'detail') {
			var $this = $('.jg-right').find('.favorite'),
				pid = $('#pid').val();
			if (pid == id) {
				$this.removeClass('curr');
			};
		} else {
			$('.favorite[data-id = ' + id + ']').removeClass('curr');
		}
		willdata = $.cookie('willdata') || [];
		for (_i = 0, _len = willdata.length; _i < _len; _i++) {
			will_item = willdata[_i];
			if (will_item['p_id'] === id) {
				willdata.splice($.inArray(willdata[_i], willdata), 1);
				break;
			}
		}
		$.cookie('willdata', willdata, {
			expires: 365,
			path: '/'
		});
		_this.commonFun.ShouCanFun(willdata);
	});
};
senseluxuryFed.getSearchList = function(data, pageName) {
	var aData = data['data'],
		_this = this,
		aHtml = '',
		subId = $('#subId').val(),
		searchResult = $('.search-result-cm'),
		dataIdArr = [];
	aHtml += '<ul class="items-list">';
	for (var i = 0; i < aData.length; i++) {
		aHtml += '<li>';
		aHtml += '<a class="tag t_l" href="' + aData[i]['url'] + '#bspj-tit" title="' + MESSAGE.reviews + '（' + aData[i]['comments'] + '）"><img src="/resource/img/js_images/comments.png"/>' + aData[i]['comments'] + '<div class = "comment_tip">评论</div></a>'
		aHtml += '<a class="tag t_r" href="javascript:void(0);" title="' + MESSAGE.stayed + aData[i]['been'] + '"><img src="/resource/img/js_images/been_orange.png"/>' + aData[i]['been'] + '<div class = "been_tip">去过</div></a>';
		aHtml += '<a href="' + aData[i]['url'] + '" class="pic"><img alt="度假别墅-' + aData[i]['title'] + '" class="lazy" data-original="' + aData[i]['imageUrl'] + '" /> </a>';
		aHtml += '<div class="msg-text">';
		aHtml += '<h3 class="tit"><a href="' + aData[i]['url'] + '">' + aData[i]['title'] + '</a></h3>';
		aHtml += '<div class="add-type"><p class="address"><span>' + aData[i]['address'] + '</span> </p><p class="type-text">' + aData[i]['memo'] + '</p></div>';
		aHtml += '<div class="serve-type"><p class="ms">' + aData[i]['subject'].join('<span>|</span>') + ' </p><p class="fw">' + MESSAGE.service + '：' + aData[i]['server'] + '</p></div>';
		aHtml += '<div class="inner">';
		aHtml += '<a href="' + aData[i]['url'] + '" class="xq-btn">' + MESSAGE.book + '</a>';
		aHtml += '<a href="javascript:void(0);" data-id="' + aData[i]['id'] + '" class="icon favorite"></a>';
		if (aData[i]['price'] > 100) {
			aHtml += '<p class="price">¥' + aData[i]['price'] + '/<small>' + MESSAGE.night + '</small><span>' + MESSAGE.percaptial + '¥' + aData[i]['perCapita'] + '/' + MESSAGE.night + '</span></p>';
		} else {
			aHtml += MESSAGE.inquire_rate;
		}
		aHtml += '</div></div>';
		if (aData[i]['discount_ratio'] < 1 || aData[i]['is_discount'] == 1) {
			aHtml += '<span class="xsyh-icon">';
			if (aData[i]['is_discount'] == 1) {
				var di = aData[i]['discount_info'].split("#");
				aHtml += "<p>" + di[0] + "</p>";
			} else {
				var discout = parseInt((1 - aData[i]['discount_ratio']).toFixed(2) * 100);
				aHtml += "<font>" + discout + "%<em></em>OFF</font>";
			}
			aHtml += '<p>' + MESSAGE.promotion + '</p>';
			aHtml += '</span>';
		}
		aHtml += '</li>';
	}
	aHtml += '</ul>';
	searchResult.html('').html(aHtml);
	_this.getPageFun(data['page'], data['pageTotal']);
	$("#total").html(data['total']);
	$("#limitInfo").html(data['limitInfo']);
	$("img.lazy").lazyload({
		effect: "fadeIn",
	});
};
senseluxuryFed.getPageFun = function(iNow, total) {
	var _this = this,
		iNowNumb = iNow,
		allPages = total,
		pageHtml = '',
		pageName = $('#pageName').val(),
		subId = $('#subId').val(),
		$pageCont = $('.page-list'),
		showPageNum = 11;
	$pageCont.attr({
		'date-page-now': iNowNumb,
		'date-page-all': allPages
	});
	if (allPages <= 1) {
		$pageCont.html('');
	} else {
		iNowNumb = iNowNumb < 1 ? 1 : iNowNumb;
		if (iNowNumb <= 5) {
			pageHtml += (iNowNumb <= 1 ? '' : '<a href="javascript:void(0);" class="prve"><img src= "/resource/img/js_images/pageprev.png"/></a>');
			var end = allPages - 1 >= 5 ? 5 : allPages - 1;
			for (var i = 1; i <= end; i++) {
				switch (pageName) {
				case 'subject':
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/subject/' + subId + '/?page=' + i + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				case 'destinations':
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/destinations/' + subId + '/?page=' + i + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				case 'search':
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/search/?q=' + subId + '/?page=' + i + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				case 'discount':
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/discounts/' + subId + '/?page=' + i + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				case 'article':
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/article' + '?page=' + i + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				case 'place':
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/place.html' + '?page=' + i + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				case 'view':
					var artId = $('#artId').val();
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/view' + '/' + '?page=' + i + '&id=' + artId + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				case 'shop':
					var artId = $('#artId').val();
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/shop' + '/' + '?page=' + i + '&id=' + artId + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				case 'food':
					var artId = $('#artId').val();
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/food' + '/' + '?page=' + i + '&id=' + artId + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				case 'entertainment':
					var artId = $('#artId').val();
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/entertainment' + '/' + '?page=' + i + '&id=' + artId + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				case 'foods':
					var desId = $('#des_id').val();
					var desName = $('#des_name').val();
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/food/' + desName + '-' + desId + '-' + i + '.html' + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				case 'views':
					var desId = $('#des_id').val();
					var desName = $('#des_name').val();
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/sight/' + desName + '-' + desId + '-' + i + '.html' + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				case 'shops':
					var desId = $('#des_id').val();
					var desName = $('#des_name').val();
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/shop/' + desName + '-' + desId + '-' + i + '.html' + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				case 'entertainments':
					var desId = $('#des_id').val();
					var desName = $('#des_name').val();
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/entertainment/' + desName + '-' + desId + '-' + i + '.html' + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				};
			}
			if (allPages > 6) {
				pageHtml += '<span>···</span>';
			}
			switch (pageName) {
			case 'subject':
				pageHtml += '<a href="/subject/' + subId + '/?page=' + allPages + '" class="pageNumb" data-num="' + allPages + '">' + allPages + '</a>';
				break;
			case 'destinations':
				pageHtml += '<a href="/destinations/' + subId + '/?page=' + allPages + '" class="pageNumb" data-num="' + allPages + '">' + allPages + '</a>';
				break;
			case 'search':
				pageHtml += '<a href="/search/?q=' + subId + '/?page=' + allPages + '" class="pageNumb" data-num="' + allPages + '">' + allPages + '</a>';
				break;
			case 'discount':
				pageHtml += '<a href="/discounts/' + subId + '/?page=' + allPages + '" class="pageNumb" data-num="' + allPages + '">' + allPages + '</a>';
				break;
			case 'article':
				pageHtml += '<a href="/article' + '?page=' + allPages + '" class="pageNumb" data-num="' + allPages + '">' + allPages + '</a>';
				break;
			case 'place':
				pageHtml += '<a href="/place.html' + '?page=' + allPages + '" class="pageNumb" data-num="' + allPages + '">' + allPages + '</a>';
				break;
			case 'view':
				var artId = $('#artId').val();
				pageHtml += '<a href="/view' + '/' + '?page=' + allPages + '&id=' + artId + '" class="pageNumb" data-num="' + allPages + '">' + allPages + '</a>';
				break;
			case 'shop':
				var artId = $('#artId').val();
				pageHtml += '<a href="/shop' + '/' + '?page=' + allPages + '&id=' + artId + '" class="pageNumb" data-num="' + allPages + '">' + allPages + '</a>';
				break;
			case 'food':
				var artId = $('#artId').val();
				pageHtml += '<a href="/food' + '/' + '?page=' + allPages + '&id=' + artId + '" class="pageNumb" data-num="' + allPages + '">' + allPages + '</a>';
				break;
			case 'entertainment':
				var artId = $('#artId').val();
				pageHtml += '<a href="/entertainment' + '/' + '?page=' + allPages + '&id=' + artId + '" class="pageNumb" data-num="' + allPages + '">' + allPages + '</a>';
				break;
			case 'foods':
				var desId = $('#des_id').val();
				var desName = $('#des_name').val();
				pageHtml += '<a href="/food/' + desName + '-' + desId + '-' + allPages + '.html' + '" class="pageNumb" data-num="' + allPages + '">' + allPages + '</a>';
				break;
			case 'views':
				var desId = $('#des_id').val();
				var desName = $('#des_name').val();
				pageHtml += '<a href="/sight/' + desName + '-' + desId + '-' + allPages + '.html' + '" class="pageNumb" data-num="' + allPages + '">' + allPages + '</a>';
				break;
			case 'shops':
				var desId = $('#des_id').val();
				var desName = $('#des_name').val();
				pageHtml += '<a href="/shop/' + desName + '-' + desId + '-' + allPages + '.html' + '" class="pageNumb" data-num="' + allPages + '">' + allPages + '</a>';
				break;
			case 'entertainments':
				var desId = $('#des_id').val();
				var desName = $('#des_name').val();
				pageHtml += '<a href="/entertainment/' + desName + '-' + desId + '-' + allPages + '.html' + '" class="pageNumb" data-num="' + allPages + '">' + allPages + '</a>';
				break;
			};
			pageHtml += (iNowNumb == allPages ? '' : '<a href="javascript:void(0);" class="next"><img src= "/resource/img/js_images/pagenext.png" /></a>');
		} else if (iNowNumb >= allPages - 4) {
			pageHtml += (iNowNumb <= 1 ? '' : '<a href="javascript:void(0);" class="prve"><img src= "/resource/img/js_images/pageprev.png"/></a>');
			switch (pageName) {
			case 'subject':
				pageHtml += '<a href="/subject/' + subId + '/?page=' + '1' + '" class="pageNumb" data-num="' + '1' + '">' + '1' + '</a>';
				break;
			case 'destinations':
				pageHtml += '<a href="/destinations/' + subId + '/?page=' + '1' + '" class="pageNumb" data-num="' + '1' + '">' + '1' + '</a>';
				break;
			case 'search':
				pageHtml += '<a href="/search/?q=' + subId + '/?page=' + '1' + '" class="pageNumb" data-num="' + '1' + '">' + '1' + '</a>';
				break;
			case 'discount':
				pageHtml += '<a href="/discounts/' + subId + '/?page=' + '1' + '" class="pageNumb" data-num="' + '1' + '">' + '1' + '</a>';
				break;
			case 'article':
				pageHtml += '<a href="/article' + '?page=' + '1' + '" class="pageNumb" data-num="' + '1' + '">' + '1' + '</a>';
				break;
			case 'place':
				pageHtml += '<a href="/place.html' + '?page=' + '1' + '" class="pageNumb" data-num="' + '1' + '">' + '1' + '</a>';
				break;
			case 'view':
				var artId = $('#artId').val();
				pageHtml += '<a href="/view' + '/' + '?page=' + '1' + '&id=' + artId + '" class="pageNumb" data-num="' + '1' + '">' + '1' + '</a>';
				break;
			case 'shop':
				var artId = $('#artId').val();
				pageHtml += '<a href="/shop' + '/' + '?page=' + '1' + '&id=' + artId + '" class="pageNumb" data-num="' + '1' + '">' + '1' + '</a>';
				break;
			case 'food':
				var artId = $('#artId').val();
				pageHtml += '<a href="/food' + '/' + '?page=' + '1' + '&id=' + artId + '" class="pageNumb" data-num="' + '1' + '">' + '1' + '</a>';
				break;
			case 'entertainment':
				var artId = $('#artId').val();
				pageHtml += '<a href="/entertainment' + '/' + '?page=' + '1' + '&id=' + artId + '" class="pageNumb" data-num="' + '1' + '">' + '1' + '</a>';
				break;
			case 'foods':
				var desId = $('#des_id').val();
				var desName = $('#des_name').val();
				pageHtml += '<a href="/food/' + desName + '-' + desId + '-' + '1' + '.html' + '" class="pageNumb" data-num="' + '1' + '">' + '1' + '</a>';
				break;
			case 'views':
				var desId = $('#des_id').val();
				var desName = $('#des_name').val();
				pageHtml += '<a href="/sight/' + desName + '-' + desId + '-' + '1' + '.html' + '" class="pageNumb" data-num="' + '1' + '">' + '1' + '</a>';
				break;
			case 'shops':
				var desId = $('#des_id').val();
				var desName = $('#des_name').val();
				pageHtml += '<a href="/shop/' + desName + '-' + desId + '-' + '1' + '.html' + '" class="pageNumb" data-num="' + '1' + '">' + '1' + '</a>';
				break;
			case 'entertainments':
				var desId = $('#des_id').val();
				var desName = $('#des_name').val();
				pageHtml += '<a href="/entertainment/' + desName + '-' + desId + '-' + allPages + '.html' + '" class="pageNumb" data-num="' + '1' + '">' + '1' + '</a>';
				break;
			};
			if (allPages > 6) {
				pageHtml += '<span>···</span>';
			}
			var start = allPages - 4 > 2 ? allPages - 4 : 2;
			for (var i = start; i <= allPages; i++) {
				switch (pageName) {
				case 'subject':
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/subject/' + subId + '/?page=' + i + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				case 'destinations':
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/destinations/' + subId + '/?page=' + i + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				case 'search':
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/search/?q=' + subId + '/?page=' + i + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				case 'discount':
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/discounts/' + subId + '/?page=' + i + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				case 'article':
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/article' + '?page=' + i + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				case 'place':
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/place.html' + '?page=' + i + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				case 'view':
					var artId = $('#artId').val();
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/view' + '/' + '?page=' + i + '&id=' + artId + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				case 'shop':
					var artId = $('#artId').val();
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/shop' + '/' + '?page=' + i + '&id=' + artId + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				case 'food':
					var artId = $('#artId').val();
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/food' + '/' + '?page=' + i + '&id=' + artId + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				case 'entertainment':
					var artId = $('#artId').val();
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/entertainment' + '/' + '?page=' + i + '&id=' + artId + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				case 'foods':
					var desId = $('#des_id').val();
					var desName = $('#des_name').val();
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/food/' + desName + '-' + desId + '-' + i + '.html' + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				case 'views':
					var desId = $('#des_id').val();
					var desName = $('#des_name').val();
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/sight/' + desName + '-' + desId + '-' + i + '.html' + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				case 'shops':
					var desId = $('#des_id').val();
					var desName = $('#des_name').val();
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/shop/' + desName + '-' + desId + '-' + i + '.html' + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				case 'entertainments':
					var desId = $('#des_id').val();
					var desName = $('#des_name').val();
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/entertainment/' + desName + '-' + desId + '-' + i + '.html' + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				};
			}
			pageHtml += (iNowNumb == allPages ? '' : '<a href="javascript:void(0);" class="next"><img src= "/resource/img/js_images/pagenext.png"/></a>');
		} else if (allPages >= 9 && iNowNumb >= 6 && iNowNumb <= allPages - 5) {
			pageHtml += (iNowNumb <= 1 ? '' : '<a href="javascript:void(0);" class="prve"><img src= "/resource/img/js_images/pageprev.png"/></a>');
			switch (pageName) {
			case 'subject':
				pageHtml += '<a href="/subject/' + subId + '/?page=' + '1' + '" class="pageNumb" data-num="' + '1' + '">' + '1' + '</a>';
				break;
			case 'destinations':
				pageHtml += '<a href="/destinations/' + subId + '/?page=' + '1' + '" class="pageNumb" data-num="' + '1' + '">' + '1' + '</a>';
				break;
			case 'search':
				pageHtml += '<a href="/search/?q=' + subId + '/?page=' + '1' + '" class="pageNumb" data-num="' + '1' + '">' + '1' + '</a>';
				break;
			case 'discount':
				pageHtml += '<a href="/discounts/' + subId + '/?page=' + '1' + '" class="pageNumb" data-num="' + '1' + '">' + '1' + '</a>';
				break;
			case 'article':
				pageHtml += '<a href="/article' + '?page=' + '1' + '" class="pageNumb" data-num="' + '1' + '">' + '1' + '</a>';
				break;
			case 'place':
				pageHtml += '<a href="/place.html' + '?page=' + '1' + '" class="pageNumb" data-num="' + '1' + '">' + '1' + '</a>';
				break;
			case 'view':
				var artId = $('#artId').val();
				pageHtml += '<a href="/view' + '/' + '?page=' + '1' + '&id=' + artId + '" class="pageNumb" data-num="' + '1' + '">' + '1' + '</a>';
				break;
			case 'shop':
				var artId = $('#artId').val();
				pageHtml += '<a href="/shop' + '/' + '?page=' + '1' + '&id=' + artId + '" class="pageNumb" data-num="' + '1' + '">' + '1' + '</a>';
				break;
			case 'food':
				var artId = $('#artId').val();
				pageHtml += '<a href="/food' + '/' + '?page=' + '1' + '&id=' + artId + '" class="pageNumb" data-num="' + '1' + '">' + '1' + '</a>';
				break;
			case 'entertainment':
				var artId = $('#artId').val();
				pageHtml += '<a href="/entertainment' + '/' + '?page=' + '1' + '&id=' + artId + '" class="pageNumb" data-num="' + '1' + '">' + '1' + '</a>';
				break;
			case 'foods':
				var desId = $('#des_id').val();
				var desName = $('#des_name').val();
				pageHtml += '<a href="/food/' + desName + '-' + desId + '-' + '1' + '.html' + '" class="pageNumb" data-num="' + '1' + '">' + '1' + '</a>';
				break;
			case 'views':
				var desId = $('#des_id').val();
				var desName = $('#des_name').val();
				pageHtml += '<a href="/sight/' + desName + '-' + desId + '-' + '1' + '.html' + '" class="pageNumb" data-num="' + '1' + '">' + '1' + '</a>';
				break;
			case 'shops':
				var desId = $('#des_id').val();
				var desName = $('#des_name').val();
				pageHtml += '<a href="/shop/' + desName + '-' + desId + '-' + '1' + '.html' + '" class="pageNumb" data-num="' + '1' + '">' + '1' + '</a>';
				break;
			case 'entertainments':
				var desId = $('#des_id').val();
				var desName = $('#des_name').val();
				pageHtml += '<a href="/entertainment/' + desName + '-' + desId + '-' + allPages + '.html' + '" class="pageNumb" data-num="' + '1' + '">' + '1' + '</a>';
				break;
			};
			pageHtml += '<span>···</span>';
			for (var i = iNowNumb - 2; i <= iNowNumb + 2; i++) {
				switch (pageName) {
				case 'subject':
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/subject/' + subId + '/?page=' + i + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				case 'destinations':
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/destinations/' + subId + '/?page=' + i + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				case 'search':
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/search/?q=' + subId + '/?page=' + i + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				case 'discount':
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/discounts/' + subId + '/?page=' + i + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				case 'article':
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/article' + '?page=' + i + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				case 'place':
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/place.html' + '?page=' + i + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				case 'view':
					var artId = $('#artId').val();
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/view' + '/' + '?page=' + i + '&id=' + artId + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				case 'shop':
					var artId = $('#artId').val();
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/shop' + '/' + '?page=' + i + '&id=' + artId + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				case 'food':
					var artId = $('#artId').val();
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/food' + '/' + '?page=' + i + '&id=' + artId + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				case 'entertainment':
					var artId = $('#artId').val();
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/entertainment' + '/' + '?page=' + i + '&id=' + artId + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				case 'foods':
					var desId = $('#des_id').val();
					var desName = $('#des_name').val();
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/food/' + desName + '-' + desId + '-' + i + '.html' + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				case 'views':
					var desId = $('#des_id').val();
					var desName = $('#des_name').val();
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/sight/' + desName + '-' + desId + '-' + i + '.html' + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				case 'shops':
					var desId = $('#des_id').val();
					var desName = $('#des_name').val();
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/shop/' + desName + '-' + desId + '-' + i + '.html' + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				case 'entertainments':
					var desId = $('#des_id').val();
					var desName = $('#des_name').val();
					if (i == iNowNumb) {
						pageHtml += '<b>' + i + '</b>';
					} else {
						pageHtml += '<a href="/entertainment/' + desName + '-' + desId + '-' + i + '.html' + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
					}
					break;
				};
			}
			pageHtml += '<span>···</span>';
			switch (pageName) {
			case 'subject':
				pageHtml += '<a href="/subject/' + subId + '/?page=' + allPages + '" class="pageNumb" data-num="' + allPages + '">' + allPages + '</a>';
				break;
			case 'destinations':
				pageHtml += '<a href="/destinations/' + subId + '/?page=' + allPages + '" class="pageNumb" data-num="' + allPages + '">' + allPages + '</a>';
				break;
			case 'search':
				pageHtml += '<a href="/search/?q=' + subId + '/?page=' + allPages + '" class="pageNumb" data-num="' + allPages + '">' + allPages + '</a>';
				break;
			case 'discount':
				pageHtml += '<a href="/discounts/' + subId + '/?page=' + allPages + '" class="pageNumb" data-num="' + allPages + '">' + allPages + '</a>';
				break;
			case 'article':
				pageHtml += '<a href="/article' + '?page=' + allPages + '" class="pageNumb" data-num="' + allPages + '">' + allPages + '</a>';
				break;
			case 'place':
				pageHtml += '<a href="/place.html' + '?page=' + allPages + '" class="pageNumb" data-num="' + allPages + '">' + allPages + '</a>';
				break;
			case 'view':
				var artId = $('#artId').val();
				pageHtml += '<a href="/view' + '/' + '?page=' + allPages + '&id=' + artId + '" class="pageNumb" data-num="' + allPages + '">' + allPages + '</a>';
				break;
			case 'shop':
				var artId = $('#artId').val();
				pageHtml += '<a href="/shop' + '/' + '?page=' + allPages + '&id=' + artId + '" class="pageNumb" data-num="' + allPages + '">' + allPages + '</a>';
				break;
			case 'food':
				var artId = $('#artId').val();
				pageHtml += '<a href="/food' + '/' + '?page=' + allPages + '&id=' + artId + '" class="pageNumb" data-num="' + allPages + '">' + allPages + '</a>';
				break;
			case 'entertainment':
				var artId = $('#artId').val();
				pageHtml += '<a href="/entertainment' + '/' + '?page=' + allPages + '&id=' + artId + '" class="pageNumb" data-num="' + allPages + '">' + allPages + '</a>';
				break;
			case 'foods':
				var desId = $('#des_id').val();
				var desName = $('#des_name').val();
				pageHtml += '<a href="/food/' + desName + '-' + desId + '-' + allPages + '.html' + '" class="pageNumb" data-num="' + allPages + '">' + allPages + '</a>';
				break;
			case 'views':
				var desId = $('#des_id').val();
				var desName = $('#des_name').val();
				pageHtml += '<a href="/sight/' + desName + '-' + desId + '-' + allPages + '.html' + '" class="pageNumb" data-num="' + allPages + '">' + allPages + '</a>';
				break;
			case 'shops':
				var desId = $('#des_id').val();
				var desName = $('#des_name').val();
				pageHtml += '<a href="/shop/' + desName + '-' + desId + '-' + allPages + '.html' + '" class="pageNumb" data-num="' + allPages + '">' + allPages + '</a>';
				break;
			case 'entertainments':
				var desId = $('#des_id').val();
				var desName = $('#des_name').val();
				pageHtml += '<a href="/entertainment/' + desName + '-' + desId + '-' + allPages + '.html' + '" class="pageNumb" data-num="' + allPages + '">' + allPages + '</a>';
				break;
			};
			pageHtml += (iNowNumb == allPages ? '' : '<a href="javascript:void(0);" class="next"><img src= "/resource/img/js_images/pagenext.png"/></a>');
		}
		$pageCont.html('').html(pageHtml);
	}
};
senseluxuryFed.pageClickFun = function(pageNum) {
	var href = window.location.href,
		$pageName = $('#pageName').val(),
		$mddCont = $('.class-search'),
		$TM_mbox_top = $('.TM_mbox').offset().top,
		_this = senseluxuryFed,
		$subId = $('#subId').val(),
		$destina_as = $mddCont.find('.sele-items').eq(0).find('a.cur'),
		$destina_arr = [],
		$destina_val = '',
		$style_as = $mddCont.find('.sele-items').eq(1).find('a.cur'),
		$style_arr = [],
		$style_val = '',
		$minPrice = $('#slider-range').attr('iNowMin'),
		$maxPrice = $('#slider-range').attr('iNowMax'),
		$minRoom = $('#slider-range1').attr('iNowMin'),
		$maxRoom = $('#slider-range1').attr('iNowMax'),
		priceTip = $('.search-result-hd').find('.price').attr('data-tip') || '',
		domain = $('#domain').val();
	$destina_as.each(function(i) {
		$destina_arr.push($(this).attr('c_id'));
	});
	$destina_val = $destina_arr.join('|');
	$style_as.each(function(i) {
		$style_arr.push($(this).attr('tag_id'));
	});
	$style_val = $style_arr.join('|');
	switch ($pageName) {
	case 'subject':
		$.ajax({
			url: domain + '/subject_list/' + $subId + '?page=' + pageNum,
			type: "POST",
			data: {
				destination: $destina_val,
				order: priceTip,
				styles: $style_val,
				min_bedroom: $minRoom,
				max_bedroom: $maxRoom,
				min_price: $minPrice,
				'max_price': $maxPrice
			},
			dataType: "jsonp",
			jsonpCallback: 'jsonp',
			success: function(data) {
				if (data['code'] == 200) {
					$('html,body').animate({
						scrollTop: $TM_mbox_top
					}, 200, function() {
						_this.getSearchList(data['val'], $pageName);
					});
				};
			}
		});
		break;
	case 'destinations':
		$.ajax({
			url: domain + '/destinations_list/' + $subId + '?page=' + pageNum,
			type: "POST",
			data: {
				order: priceTip,
				styles: $style_val,
				min_bedroom: $minRoom,
				max_bedroom: $maxRoom,
				min_price: $minPrice,
				'max_price': $maxPrice
			},
			dataType: "jsonp",
			jsonpCallback: 'jsonp',
			success: function(data) {
				if (data['code'] == 200) {
					$('html,body').animate({
						scrollTop: $TM_mbox_top
					}, 200, function() {
						_this.getSearchList(data['val'], $pageName);
					});
				};
			}
		});
		break;
	case 'search':
		$.ajax({
			url: domain + '/search_list?q=' + $subId + '&page=' + pageNum,
			type: "POST",
			data: {
				min_bedroom: $minRoom,
				max_bedroom: $maxRoom,
				min_price: $minPrice,
				'max_price': $maxPrice
			},
			dataType: "jsonp",
			jsonpCallback: 'jsonp',
			success: function(data) {
				if (data['code'] == 200) {
					$('html,body').animate({
						scrollTop: $TM_mbox_top
					}, 200, function() {
						_this.getSearchList(data['val'], $pageName);
					});
				};
			}
		});
		break;
	case 'discount':
		$.ajax({
			url: domain + '/discount_list/' + $subId + '?page=' + pageNum,
			type: "POST",
			data: {},
			dataType: "jsonp",
			jsonpCallback: 'jsonp',
			success: function(data) {
				if (data['code'] == 200) {
					$('html,body').animate({
						scrollTop: $TM_mbox_top
					}, 200, function() {
						_this.getSearchList(data['val'], $pageName);
					});
				};
			}
		});
		break;
	};
};
senseluxuryFed.detailFun.fixedMenuFun = function() {
	var $menuCont = $('.detail-type'),
		menuTop = 710,
		arrTop = [],
		$fixMenu = $('#fixed-menu');
	if ($(".dtit_date").length > 0) {
		menuTop = 1120;
	}
	$('.floor-index').each(function(i) {
		arrTop.push($(this).offset().top - 150);
	});
	arrTop[0] = $('#dt_slides').offset().top - 88;
	$(window).scroll(function() {
		var winTop = $(window).scrollTop();
		if (winTop > menuTop) {
			$fixMenu.show();
		} else {
			$fixMenu.hide();
		};
		for (i in arrTop) {
			if (winTop > arrTop[i] - 150) {
				$fixMenu.find('.detail-type li').eq(i).addClass('cur').siblings('li').removeClass('cur');
			};
		};
	});
	$menuCont.find('li').off().on('click', 'a', function() {
		var _index = $(this).parent('li').index();
		$('html,body').animate({
			scrollTop: arrTop[_index]
		}, 500);
		return false;
	});
	$('.facility-btn').click(function() {
		var facilityTop = $('#facility').offset().top;
		$('html,body').animate({
			scrollTop: facilityTop - 88
		}, 500);
		return false;
	});
	$('.server-btn').click(function() {
		var serverTop = $('#server').offset().top;
		$('html,body').animate({
			scrollTop: serverTop - 88
		}, 500);
		return false;
	});
};
senseluxuryFed.listFun.priceSlide = function(obj) {
	var $slideId1 = $(obj),
		slideArrType = $slideId1.attr('data-slider-type'),
		slideArr1 = [parseInt($slideId1.attr('data-slider-min')), parseInt($slideId1.attr('data-slider-max')), parseInt($slideId1.attr('data-slider-step'))];
	$slideId1.slider({
		range: true,
		step: slideArr1[2],
		min: slideArr1[0],
		max: slideArr1[1],
		values: [slideArr1[0], slideArr1[1]],
		slide: function(event, ui) {
			var $price_area, $self, lock, max_price;
			$self = $(this);
			$price_area = $self.parents('.slider_box').find('label small');
			max_price = parseInt($self.data('sliderMax'));
			if (parseInt(ui.values[1]) == max_price) {
				$price_area.html("¥" + ui.values[0] + "-¥" + ui.values[1] + "+");
			} else {
				$price_area.html("¥" + ui.values[0] + "-¥" + ui.values[1]);
			}
		},
		change: function(event, ui) {
			var $self, max_price, suffix;
			$self = $(this);
			max_price = parseInt($self.data('sliderMax'));
			if (parseInt(ui.values[1]) == max_price) {
				suffix = "+";
			} else {
				suffix = "";
			}
			$slideId1.siblings('label').find('small').html("¥" + $slideId1.slider("values", 0) + "-¥" + $slideId1.slider("values", 1) + suffix);
			$slideId1.attr('iNowMin', $slideId1.slider("values", 0));
			$slideId1.attr('iNowMax', $slideId1.slider("values", 1));
			var $mddCont = $('.class-search'),
				$pageName = $('#pageName').val(),
				_this = senseluxuryFed,
				$subId = $('#subId').val(),
				$destina_as = $mddCont.find('.sele-items').eq(0).find('a.cur'),
				$destina_arr = [],
				$destina_val = '',
				$style_as = $mddCont.find('.sele-items').eq(1).find('a.cur'),
				$style_arr = [],
				$style_val = '',
				$minRoom = $('#slider-range1').attr('iNowMin'),
				$maxRoom = $('#slider-range1').attr('iNowMax'),
				priceTip = $('.search-result-hd').find('.price').attr('data-tip') || '',
				domain = $('#domain').val();
			$destina_as.each(function(i) {
				$destina_arr.push($(this).attr('c_id'));
			});
			$destina_val = $destina_arr.join('|');
			$style_as.each(function(i) {
				$style_arr.push($(this).attr('tag_id'));
			});
			$style_val = $style_arr.join('|');
			switch ($pageName) {
			case 'subject':
				$.ajax({
					url: domain + '/subject_list/' + $subId,
					type: "POST",
					data: {
						destination: $destina_val,
						order: priceTip,
						styles: $style_val,
						min_bedroom: $minRoom,
						max_bedroom: $maxRoom,
						min_price: $slideId1.slider("values", 0),
						'max_price': $slideId1.slider("values", 1)
					},
					dataType: "jsonp",
					jsonpCallback: 'jsonp',
					success: function(data) {
						if (data['code'] == 200) {
							_this.getSearchList(data['val'], $pageName);
						};
					}
				});
				break;
			case 'destinations':
				$.ajax({
					url: domain + '/destinations_list/' + $subId,
					type: "POST",
					data: {
						order: priceTip,
						styles: $style_val,
						min_bedroom: $minRoom,
						max_bedroom: $maxRoom,
						min_price: $slideId1.slider("values", 0),
						'max_price': $slideId1.slider("values", 1)
					},
					dataType: "jsonp",
					jsonpCallback: 'jsonp',
					success: function(data) {
						if (data['code'] == 200) {
							_this.getSearchList(data['val'], $pageName);
						};
					}
				});
				break;
			case 'search':
				$.ajax({
					url: domain + '/search_list?q=' + $subId,
					type: "POST",
					data: {
						min_bedroom: $minRoom,
						max_bedroom: $maxRoom,
						min_price: $slideId1.slider("values", 0),
						'max_price': $slideId1.slider("values", 1)
					},
					dataType: "jsonp",
					jsonpCallback: 'jsonp',
					success: function(data) {
						if (data['code'] == 200) {
							_this.getSearchList(data['val'], $pageName);
						};
					}
				});
				break;
			};
		}
	});
};
senseluxuryFed.listFun.houseSlide = function(obj) {
	var $slideId1 = $(obj),
		slideArrType = $slideId1.attr('data-slider-type'),
		slideArr1 = [parseInt($slideId1.attr('data-slider-min')), parseInt($slideId1.attr('data-slider-max')), parseInt($slideId1.attr('data-slider-step'))];
	$slideId1.slider({
		range: true,
		step: slideArr1[2],
		min: slideArr1[0],
		max: slideArr1[1],
		values: [slideArr1[0], slideArr1[1]],
		slide: function(event, ui) {
			var $bedroom_area, $self, lock, max_bedroom;
			$self = $(this);
			$bedroom_area = $self.parents('.slider_box').find('label small');
			max_bedroom = parseInt($self.data('sliderMax'));
			$bedroom_area.html(ui.values[0] + "-" + ui.values[1]);
		},
		change: function(event, ui) {
			$slideId1.siblings('label').html("卧室：" + $slideId1.slider("values", 0) + "-" + $slideId1.slider("values", 1));
			$slideId1.attr('iNowMin', $slideId1.slider("values", 0));
			$slideId1.attr('iNowMax', $slideId1.slider("values", 1));
			var $mddCont = $('.class-search'),
				$pageName = $('#pageName').val(),
				_this = senseluxuryFed,
				$subId = $('#subId').val(),
				$destina_as = $mddCont.find('.sele-items').eq(0).find('a.cur'),
				$destina_arr = [],
				$destina_val = '',
				$style_as = $mddCont.find('.sele-items').eq(1).find('a.cur'),
				$style_arr = [],
				$style_val = '',
				$minRoom = $('#slider-range1').attr('iNowMin'),
				$maxRoom = $('#slider-range1').attr('iNowMax'),
				$minPrice = $('#slider-range').attr('iNowMin'),
				$maxPrice = $('#slider-range').attr('iNowMax'),
				priceTip = $('.search-result-hd').find('.price').attr('data-tip') || '',
				domain = $('#domain').val();
			$destina_as.each(function(i) {
				$destina_arr.push($(this).attr('c_id'));
			});
			$destina_val = $destina_arr.join('|');
			$style_as.each(function(i) {
				$style_arr.push($(this).attr('tag_id'));
			});
			$style_val = $style_arr.join('|');
			switch ($pageName) {
			case 'subject':
				$.ajax({
					url: domain + '/subject_list/' + $subId,
					type: "POST",
					data: {
						destination: $destina_val,
						order: priceTip,
						styles: $style_val,
						min_bedroom: $slideId1.slider("values", 0),
						max_bedroom: $slideId1.slider("values", 1),
						min_price: $minPrice,
						'max_price': $maxPrice
					},
					dataType: "jsonp",
					jsonpCallback: 'jsonp',
					success: function(data) {
						if (data['code'] == 200) {
							_this.getSearchList(data['val'], $pageName);
						};
					}
				});
				break;
			case 'destinations':
				$.ajax({
					url: domain + '/destinations_list/' + $subId,
					type: "POST",
					data: {
						order: priceTip,
						styles: $style_val,
						min_bedroom: $slideId1.slider("values", 0),
						max_bedroom: $slideId1.slider("values", 1),
						min_price: $minPrice,
						'max_price': $maxPrice
					},
					dataType: "jsonp",
					jsonpCallback: 'jsonp',
					success: function(data) {
						if (data['code'] == 200) {
							_this.getSearchList(data['val'], $pageName);
						};
					}
				});
				break;
			case 'search':
				$.ajax({
					url: domain + '/search_list?q=' + $subId,
					type: "POST",
					data: {
						min_bedroom: $minRoom,
						max_bedroom: $maxRoom,
						min_price: $minPrice,
						'max_price': $maxPrice
					},
					dataType: "jsonp",
					jsonpCallback: 'jsonp',
					success: function(data) {
						if (data['code'] == 200) {
							_this.getSearchList(data['val'], $pageName);
						};
					}
				});
				break;
			};
		}
	});
};
senseluxuryFed.listFun.classFun = function(obj) {
	var $this = $(obj);
	$this.find('.sele-items').on('click', 'dt', function() {
		$(this).parent('.sele-items').toggleClass('curr');
	});
	$this.find('.sele-items').on('click', 'dd a', function() {
		$(this).toggleClass('cur');
		var $mddCont = $('.class-search'),
			$pageName = $('#pageName').val(),
			_this = senseluxuryFed,
			$subId = $('#subId').val(),
			$destina_as = $mddCont.find('.sele-items').eq(0).find('a.cur'),
			$destina_arr = [],
			$destina_val = '',
			$style_as = $mddCont.find('.sele-items').eq(1).find('a.cur'),
			$style_arr = [],
			$style_val = '',
			$minRoom = $('#slider-range1').attr('iNowMin'),
			$maxRoom = $('#slider-range1').attr('iNowMax'),
			$minPrice = $('#slider-range1').attr('iNowMin'),
			$maxPrice = $('#slider-range1').attr('iNowMax'),
			priceTip = $('.search-result-hd').find('.price').attr('data-tip') || '',
			domain = $('#domain').val();
		$destina_as.each(function(i) {
			$destina_arr.push($(this).attr('c_id'));
		});
		$destina_val = $destina_arr.join('|');
		$style_as.each(function(i) {
			$style_arr.push($(this).attr('tag_id'));
		});
		$style_val = $style_arr.join('|');
		switch ($pageName) {
		case 'subject':
			$.ajax({
				url: domain + '/subject_list/' + $subId,
				type: "POST",
				data: {
					destination: $destina_val,
					order: priceTip,
					styles: $style_val,
					min_bedroom: $minRoom,
					max_bedroom: $maxRoom,
					min_price: $minPrice,
					'max_price': $maxPrice
				},
				dataType: "jsonp",
				jsonpCallback: 'jsonp',
				success: function(data) {
					if (data['code'] == 200) {
						_this.getSearchList(data['val']);
					};
				}
			});
			break;
		case 'destinations':
			$.ajax({
				url: domain + '/destinations_list/' + $subId,
				type: "POST",
				data: {
					destination: $destina_val,
					order: priceTip,
					styles: $style_val,
					min_bedroom: $minRoom,
					max_bedroom: $maxRoom,
					min_price: $minPrice,
					'max_price': $maxPrice
				},
				dataType: "jsonp",
				jsonpCallback: 'jsonp',
				success: function(data) {
					if (data['code'] == 200) {
						_this.getSearchList(data['val']);
					};
				}
			});
			break;
		};
	});
};
senseluxuryFed.indexFun.banSlideFun = function(obj) {
	var $this = $(obj),
		$winW = $(window).width();
	$ulItems = $this.find('.slides'), lis = $ulItems.find('li').length, iNow = 0, timer = null;
	$this.hover(function() {
		$(this).find('.prev').show();
		$(this).find('.next').show();
	}, function() {
		$(this).find('.prev').hide();
		$(this).find('.next').hide();
	});
	$ulItems.find('li').css('height', $winW * 3 / 8 + 'px');
	$this.on('click', '.next', function() {
		if (iNow < lis - 1) {
			iNow++;
		} else(iNow = 0);
		$ulItems.find('li').eq(iNow).stop(true, true).fadeIn().siblings('li').fadeOut();
		return false;
	});
	$this.on('click', '.prev', function() {
		if (iNow > 0) {
			iNow--;
		} else(iNow = lis - 1);
		$ulItems.find('li').eq(iNow).stop(true, true).fadeIn().siblings('li').fadeOut();
		return false;
	});
	timer = setInterval(function() {
		$this.find('.next').trigger('click');
	}, 3000);
	$this.hover(function() {
		clearInterval(timer);
	}, function() {
		timer = setInterval(function() {
			$this.find('.next').trigger('click');
		}, 3000);
	});
};
senseluxuryFed.Autocomplete = function(obj) {
	var $inputId = $(obj),
		comFun = senseluxuryFed.commonFun,
		domain = $('#domain').val(),
		gourl = 0;
	if (getCookieCn("destination") && getCookieCn("destination") != "undefined") {
		$inputId.val(getCookieCn("destination"));
		$inputId.attr('data-type', getCookieCn("destination-type"));
		$("#AutoSearch").attr('data-id', getCookieCn("destination-id"))
	}
	if (getCookie("c_start_time") && getCookie("c_start_time") != "undefined") {
		var date = new Date(getCookie("c_start_time"));
		if (date <= new Date()) {
			date.setDate(new Date().getDate() + 3);
		}
		date = formatDate(date);
		setCookie("c_start_time", date, '7d');
		$('#rz_time_start').val(date);
		$('#rz_time_start').attr("data-valname", date);
	}
	if (getCookie("c_end_time") && getCookie("c_end_time") != "undefined") {
		var date = new Date(getCookie("c_start_time"));
		if (date.getDate() <= (new Date()).getDate() + 3) {
			date.setDate((new Date()).getDate() + 6);
		}
		date = formatDate(date);
		setCookie("c_end_time", date, '7d');
		$('#rz_time_end').val(date);
		$('#rz_time_end').attr("data-valname", date);
	}
	if (getCookie("c_guest_amount") && getCookie("c_guest_amount") != "undefined") {
		$('#people_numb').find('input').val(getCookie("c_guest_amount"))
		$('#people_numb').find('input').attr("data-valname", getCookie("c_guest_amount"));
	}
	var _keyWord = $.trim($("#AutoSearch").val());
	var _nilKeyWord = '未能检索到相关结果';
	$('.D1main .txt-input').click(function() {
		var _this = $(this);
		if (_this.val() == '目的地/别墅') {
			_this.val('');
		}
	})
	$('.D1main .txt-input').blur(function() {
		var _this = $(this);
		if (_this.val() == '') {
			_this.val('');
		}
	})
	$('.D1main ul .li1 b.clear').on('click', function() {
		$('#AutoSearch').val("");
	});
	$('#AutoSearch').click(function() {
		var _this = $(this);
		if ($(this).val() != '') {
			$('.D1main ul .li1 b.clear').css('display', 'inline');
		} else {
			$('.D1main ul .li1 b.clear').css('display', 'none');
		}
		var getStr = getCookieCn("dest_history");
		var getArr = getStr.split(',');
		var thisItem;
		var pushed = 0;
		var sHtml = "";
		for (var i in getArr) {
			if (pushed <= 9) {
				thisItem = getArr[i].split('_');
				if (thisItem.length == 4) {
					sHtml += '<li data-id="' + thisItem[3] + '" data-type="' + thisItem[2] + '"><span>' + thisItem[0] + '</span> <b>' + thisItem[1] + '</b></li>';
				}
				if (thisItem.length == 3) {
					sHtml += '<li  data-id="' + thisItem[2] + '" data-type="' + thisItem[1] + '"><span>' + thisItem[0] + '</span></li>';
				}
				pushed++;
			}
		}
		if (getArr[0] != "") {
			$('.defList>.history').css('display', 'block');
			$('.defList').css('display', 'block');
			$('.defList>ul').empty();
			$('.defList>ul').append($(sHtml));
		} else {
			$('.defList').css('display', 'block');
			$('.defList>ul').empty();
		}
	});
	$('.des-input').on("click", "ul li", function() {
		keyw = $(this).text();
		$inputId.val($(this).text());
		$inputId.attr('data-id', $(this).attr('data-id'));
		$inputId.attr('data-type', $(this).attr('data-type'));
		$('.autoList').remove();
		$('.defList').css('display', 'none');
		$(obj).siblings('.s-btn').trigger('click');
	});
	$('.des-input').on("click", "p span", function() {
		keyw = $(this).text();
		$inputId.val($(this).text());
		$inputId.attr('data-id', $(this).attr('data-id'));
		$inputId.attr('data-type', $(this).attr('data-type'));
		$('.autoList').remove();
		$('.defList').css('display', 'none');
	});
	$('.des-input').mouseleave(function() {
		$('.defList>ul').empty();
		$('.des-input .autoList').remove();
		$('.defList').css('display', 'none');
	})
	$(document).on('propertychange oninput', '.D1main .txt-input', function() {
		var _this = $(this);
		if (_this.val() == _keyWord) {
			_this.val('');
		}
		if (_this.val() == _nilKeyWord) {
			_this.val('');
		}
		if (_this.attr('data-id') && _this.attr('data-id') != '') {
			_this.attr('data-id', '');
		}
		if (_this.attr('data-type') && _this.attr('data-type') != '') {
			_this.attr('data-type', '');
		}
	});
	var searchById = function(val) {
			var vId = parseInt(val.substr(1, val.length));
			if (isNaN(vId)) return;
			window.location = "/villa/" + vId;
		};
	$('.search-btn').on('click', '.btn', function() {
		var keyVal = $inputId.val(),
			guestAmount = $('#people_numb').find('input').val(),
			startTime = $('#rz_time_start').val(),
			endTime = $('#rz_time_end').val(),
			tourl = '';
		guestAmount = guestAmount == "不限" ? "" : guestAmount == "10+" ? 11 : guestAmount;
		var cookieArr;
		if (getCookieCn("dest_history")) {
			cookieArr = getCookieCn("dest_history").split(',');
		} else {
			cookieArr = [];
		}
		if ($("#AutoSearch").attr('data-type') == '1') {
			var thisArr = $.trim($("#AutoSearch").val()).split(' ');
			var thisPush = thisArr[0] + '_' + thisArr[1] + '_' + $("#AutoSearch").attr('data-type') + '_' + $("#AutoSearch").attr('data-id');
			if (cookieArr.indexOf(thisPush) == -1) {
				cookieArr.push(thisPush);
			}
		} else {
			var thisStr = $.trim($inputId.val()) + '_' + $("#AutoSearch").attr('data-type') + '_' + $("#AutoSearch").attr('data-id');
			if (cookieArr.indexOf(thisStr) == -1) {
				cookieArr.push(thisStr);
			}
		}
		var cookieStr = cookieArr.join(',');
		setCookieCn("dest_history", cookieStr, 30);
		if (keyVal.substr(0, 1) === "#") searchById(keyVal);
		if (startTime == $('#rz_time_start').attr('data-valname')) {
			startTime = false;
		} else {
			setCookie("c_start_time", startTime, '7d');
		}
		if (endTime == $('#rz_time_end').attr('data-valname')) {
			endTime = false;
		} else {
			setCookie('c_end_time', endTime, '7d');
		}
		if (guestAmount == $('#people_numb').find('input').attr('data-valname')) {
			guestAmount = false;
		} else {
			setCookie('c_guest_amount', guestAmount, '7d');
		}
		if (endTime && !startTime) {
			$(".li2 .ui-datepicker-trigger").css('outline', '1px solid red');
			return false;
		}
		var d_id = $("#AutoSearch").attr('data-id');
		if ($("#AutoSearch").attr('data-type') == '1') {
			tourl += '/villa/' + d_id;
			tourl += startTime ? '/checkin/' + startTime.replace('/', '').replace('/', '') : '';
			tourl += endTime ? '/checkout/' + endTime.replace('/', '').replace('/', '') : '';
		} else {
			tourl = '/destinations/' + d_id;
			tourl += guestAmount ? '/pn/' + guestAmount : '';
			tourl += startTime ? '/checkin/' + startTime.replace('/', '').replace('/', '') : '';
			tourl += endTime ? '/checkout/' + endTime.replace('/', '').replace('/', '') : '';
		}
		var t = $inputId.attr('data-type');
		var d_name = $inputId.attr('data-valname')
		if (t && keyVal != d_name && keyVal != "") {
			setCookieCn("destination", $inputId.val(), 7);
			setCookieCn("destination-type", t, 7);
			setCookieCn("destination-id", $("#AutoSearch").attr('data-id'), 7);
			window.open(tourl);
		} else {
			$inputId.val("");
		}
	});
	var keyw = '';
	var tipsHtml = '';
	$inputId.on('keyup', $inputId, function(e) {
		var val = $(this).val();
		if (val) {
			$('.D1main ul .li1 b.clear').css('display', 'inline');
		} else {
			$('.D1main ul .li1 b.clear').css('display', 'none');
		}
		var getStr = getCookieCn("dest_history");
		var getArr = getStr.split(',');
		var thisItem;
		var pushed = 0;
		var sHtml = "";
		for (var i in getArr) {
			if (pushed <= 9) {
				thisItem = getArr[i].split('_');
				if (thisItem.length == 4) {
					sHtml += '<li data-id="' + thisItem[3] + '" data-type="' + thisItem[2] + '"><span>' + thisItem[0] + '</span> <b>' + thisItem[1] + '</b></li>';
				}
				if (thisItem.length == 3) {
					sHtml += '<li  data-id="' + thisItem[2] + '" data-type="' + thisItem[1] + '"><span>' + thisItem[0] + '</span></li>';
				}
				pushed++;
			}
		}
		if ($(this).val() == '') {
			$('.des-input .autoList').remove();
			if (getArr[0] != "") {
				console.info(1);
				$('.defList>.history').css('display', 'block');
				$('.defList').css('display', 'block');
				$('.defList>ul').empty();
				$('.defList>ul').append($(sHtml));
			} else {
				$('.defList').css('display', 'block');
				$('.defList>ul').empty();
			}
		} else {
			$('.defList').css('display', 'none');
		}
		keyw = "";
		$(".ll_input_tip").hide();
		$inputId.parent().css('outline', '0px solid red');
		if (val == _nilKeyWord) {
			$(this).val('');
			return false;
		}
		e = e || event;
		if (val.substr(0, 1) === "#") {
			if (e.keyCode === 13) searchById(val);
			$('.des-input .autoList').remove();
			return;
		}
		if (e.which == 13 && $("#AutoSearch").attr('data-id') > 0) {
			$("#AutoSearch").val(keyw);
			$('.des-input .autoList').remove();
			$('#rz_time_start').focus();
			$("#rz_time_start").datepicker('show');
			return false;
		}
		$.ajax({
			url: domain + '/search_suggest/?q=' + encodeURIComponent(val),
			type: "POST",
			dataType: "jsonp",
			jsonpCallback: 'aaa',
			success: function(data) {
				var sHtml = '';
				sHtml += '<div class="autoList"><ul>';
				var num = 0;
				for (var i in data) {
					num++;
					sHtml += '<li data-id="' + data[i]['data_id'] + '" data-type="' + data[i]['type'] + '">' + data[i]['keywords'] + '</li>';
				}
				if (num == 0) {
					sHtml += '<li data-id="-1">未能检索到相关结果</li>';
				}
				sHtml += '</ul></div>';
				if (data != '') {
					$("#AutoSearch").attr('data-id', data[0]['data_id']);
					$("#AutoSearch").attr('data-type', data[0]['type']);
					keyw = data[0]['keywords'];
					tipsHtml = sHtml;
				}
				if ($('.autoList').length) {
					$('.autoList').remove();
					$('.des-input').append($(sHtml));
				} else {
					$('.des-input').append($(sHtml));
				};
				$(obj).siblings('.s-btn').click(function() {
					if (!$inputId.attr('data-id') && $('.autoList').length == 0) {
						return;
					} else if (!$inputId.attr('data-id')) {
						var obj = $('.des-input').find('.autoList ul li').eq(0);
						$inputId.val(obj.text());
						$inputId.attr('data-id', obj.attr('data-id'));
						$inputId.attr('data-type', obj.attr('data-type'));
					}
					window.location.href = domain + '/search/?q=' + $inputId.val() + '&id=' + $inputId.attr('data-id') + '&type=' + $inputId.attr('data-type');
				});
			}
		});
	});
	$('#clear_history').on('click', function() {
		$('#AutoSearch').val('');
		delCookie('dest_history');
		delCookie("destination");
		delCookie("c_start_time");
		delCookie("c_end_time");
		delCookie("c_guest_amount");
		$('.defList>ul').empty();
		$('.defList>ul').css('display', 'none');
		$('.defList>.history').css('display', 'none');
	});
};
senseluxuryFed.FqaFun = function() {
	var $fqaCont = $('.fqa-main');
	$fqaCont.find('.fqa-menu').on('click', 'li a', function() {
		var $this = $(this),
			_index = $this.parent('li').index();
		$this.parent('li').siblings('li').children('a').removeClass('cur');
		$this.addClass('cur');
		$fqaCont.find('.fqtab-cont').eq(_index).show().siblings('.fqtab-cont').hide();
	});
};
senseluxuryFed.detailFun.getCommentList = function(data) {
	var aData = data['data'],
		_this = senseluxuryFed.detailFun,
		aHtml = '',
		commentCont = $('.detail-app');
	for (i in aData) {
		aHtml += '<li> <div class="com-top"><i class="rx-icon"></i><span class="hes">' + aData[i]["userName"] + '</span><span class="hus">' + aData[i]["addTime"] + '</span></div><div class="yhlf-bg"><div class="yhrt-bg"><p>' + aData[i]["info"] + '</p></div></div></li>';
	}
	commentCont.find('ul').html('').html(aHtml);
	_this.comGetPageFun(data['page'], data['pageTotal']);
};
senseluxuryFed.detailFun.comGetPageFun = function(iNow, total) {
	var _this = this,
		iNow = iNow,
		allPage = total,
		pageHtml = '',
		$pageCont = $('.page-list');
	$pageCont.attr({
		'date-page-now': iNow,
		'date-page-all': allPage
	});
	if (allPage <= 1) {
		$pageCont.html('');
	} else {
		if (iNow == 1) {
			pageHtml += '';
		} else {
			pageHtml += '<a href="javascript:void(0);" class="prve"><img src= "/resource/img/js_images/pageprev.png"/></a>';
		};
		for (var i = 0; i < allPage; i++) {
			if ((i + 1) == iNow) {
				pageHtml += '<b>' + (i + 1) + '</b>';
			} else {
				pageHtml += 'a href="javacript:void(0);" class="pageNumb" data-num="' + (i + 1) + '">' + (i + 1) + '</a>';
			}
		};
		if (iNow == allPage) {
			pageHtml += '';
		} else {
			pageHtml += '<a href="javascript:void(0);" class="next"><img src= "/resource/img/js_images/pagenext.png" /></a>';
		};
		$pageCont.html('').html(pageHtml);
	}
};
senseluxuryFed.detailFun.comPageClickFun = function(pageNum) {
	var _this = senseluxuryFed.detailFun,
		$subId = $('#pid').val(),
		domain = $('#domain').val();
	$.ajax({
		url: domain + '/detail_review/' + $subId + '?page=' + pageNum,
		type: "GET",
		dataType: "jsonp",
		jsonpCallback: 'jsonp',
		success: function(data) {
			if (data['code'] == 200) {
				_this.getCommentList(data['val']);
				$('.detail-type').find('.items li').eq(4).children('a').trigger('click');
			};
		}
	});
};
senseluxuryFed.detailFun.setcommentFun = function(infoText) {
	var text = infoText,
		_this = senseluxuryFed.detailFun,
		$subId = $('#pid').val(),
		domain = $('#domain').val();;
	$.ajax({
		url: domain + '/detail_addreview/' + $subId,
		type: "POST",
		data: {
			info: text
		},
		dataType: "jsonp",
		jsonpCallback: 'jsonp',
		success: function(data) {
			$('#top_textarea').val(data['msg']).css('color', '#f00');
			if (data['code'] == 200) {
				_this.comPageClickFun(0);
				$('#top_textarea').val('');
			};
		}
	});
};
senseluxuryFed.detailFun.commentFun = function() {
	var _this = senseluxuryFed.detailFun,
		$commentCont = $('.detail-app'),
		$textarea = $('#top_textarea'),
		$pageCont = $('.page-list'),
		iNowNumb = $pageCont.attr('date-page-now'),
		allNumb = $pageCont.attr('date-page-all');
	_this.comGetPageFun(iNowNumb, allNumb);
	$commentCont.find('.login-btn').click(function() {
		$('.userlink').find('.login-btn').trigger('click');
	});
	$commentCont.find('.reg-btn').click(function() {
		$('.userlink').find('.reg-btn').trigger('click');
	});
	$pageCont.on('click', '.pageNumb', function() {
		var pageIndex = $(this).attr('data-num');
		_this.comPageClickFun(parseInt(pageIndex));
		iNowNumb = parseInt(pageIndex);
		return false;
	});
	$pageCont.on('click', '.prve', function() {
		_this.comPageClickFun(parseInt(iNowNumb) - 1);
		iNowNumb = parseInt(iNowNumb) - 1;
		return false;
	});
	$pageCont.on('click', '.next', function() {
		_this.comPageClickFun(parseInt(iNowNumb) + 1);
		iNowNumb = parseInt(iNowNumb) + 1;
		return false;
	});
	$textarea.focus(function() {
		var text = $(this).val();
		if (text == '内容不能为空！' || text == '内容不能小于10个字符！') {
			$('#top_textarea').val('').css('color', '#333');
		};
	});
	$commentCont.find('.fbplBtn').on('click', 'a', function() {
		var _text = $textarea.val();
		if (_text == '内容不能为空！' || _text == '内容不能小于10个字符！') {
			_text = '';
		}
		if (_text == '') {
			$textarea.val('内容不能为空！').css('color', '#f00');
		} else if (_text.length < 10) {
			$textarea.val('内容不能小于10个字符！').css('color', '#f00');
		} else {
			_this.setcommentFun(_text);
		}
		return false;
	});
};

function wrapAuto() {
	var wrapHeight = $('.botInfo').height();
	var wrapWidth = $(window).width();
	$('.djInfo,.enjoy,.leftBg,.rightBg').height(wrapHeight);
	$('.leftBg,.rightBg').width((wrapWidth - 1100) / 2);
};
$(function() {
	wrapAuto();
	var price_1 = 0,
		price_2 = 0,
		sumPrice = 0;
	sumPrice = parseFloat($('#addPrice_3').val()) + parseFloat($('#addPrice_4').val()) + parseFloat($('#addPrice_5').val());
	if (sumPrice > 0) {
		$('.zj i').text(sumPrice);
		$('#sumPrice').val(sumPrice);
	}
	$('.f-price').click(function() {
		price_1 = $(this).find('input').attr('data-value');
		var f_rate = $("#f-rate").val();
		if ($(this).hasClass('cur')) {
			$("#addPrice_1").val(0);
			$(this).removeClass('cur');
			price_1 = -price_1;
		} else {
			$("#addPrice_1").val(f_rate);
			$(this).addClass('cur');
			price_1 = price_1;
		}
		price_2 = parseFloat(price_2) + parseFloat(price_1);
		sumPrice = parseFloat($('#addPrice_3').val()) + parseFloat($('#addPrice_4').val()) + parseFloat($('#addPrice_5').val()) + parseFloat(price_2);
		if (sumPrice > 0) {
			$('.zj i').text(sumPrice);
			$('#sumPrice').val(sumPrice);
		}
	});
	$('#submit_inquire').click(function() {
		var input = $("<input>").attr("type", "hidden").attr("name", "t").val("inquire");
		$("#order_form").append($(input));
		$("#order_form").submit();
	});
	$('#pay_next').click(function() {
		$("#order_form").submit();
	});
	$('.select-c').hover(function() {
		$(this).find('.select-c-list').show();
	}, function() {
		$(this).find('.select-c-list').hide();
	});
	var countPrice = function() {
			var url = $("#count-url").val();
			var bookStart = $('#book_start').val();
			var bookEnd = $('#book_end').val();
			var pidVal = $('#pid').val();
			var roomNumb = $('#book_bedroom').val();
			if (bookStart == '' || bookEnd == '') {} else {
				bookStart = bookStart.replace(/\//g, '-');
				bookEnd = bookEnd.replace(/\//g, '-');
				var startTime = new Date(Date.parse(bookStart)).getTime();
				var endTime = new Date(Date.parse(bookEnd)).getTime();
				var dates = Math.abs((startTime - endTime)) / (1000 * 60 * 60 * 24);
				$.ajax({
					url: url,
					type: "get",
					dataType: "json",
					data: {
						pid: pidVal,
						start: bookStart,
						end: bookEnd,
						bedroom: roomNumb
					},
					success: function(data) {
						if (data == '-1') {
							$('.sumPriceCon').html('<span>总价：</span><p><span class="f12">参数错误！</span></p>')
						} else {
							$('.sumPriceCon').find('p b').html(data.price);
							if (data.min_stay > dates) {
								$('#booking_price_notice').html("提示：您预订的期间最短入住天数要求为" + data.min_stay + "天，小于该天数将无法预订成功");
							} else {
								$('#booking_price_notice').html("");
							}
							$('.sumPriceCon').find('p i').html(dates);
						};
					}
				});
			}
		}
	$('.select-c-list').eq(0).find('li').click(function() {
		var liVal = $(this).text();
		$(this).parents('.select-c-list').hide().siblings('span').text(liVal);
		var value = $(this).attr('data-val');
		$('#book_bedroom').val(value);
		countPrice();
	});
	$('.select-c-list').eq(1).find('li').click(function() {
		var liVal = $(this).text();
		$(this).parents('.select-c-list').hide().siblings('span').text(liVal);
		$('#book_adult').val(liVal);
		countPrice();
	});
	$('.select-c-list').eq(2).find('li').click(function() {
		var liVal = $(this).text();
		$(this).parents('.select-c-list').hide().siblings('span').text(liVal);
		$('#book_child').val(liVal);
		countPrice();
	});
});
window.onresize = function() {
	wrapAuto();
};

function setCookie(name, value, time, fun) {
	delCookie(name);
	var strsec = getsec(time);
	var exp = new Date();
	exp.setTime(exp.getTime() + strsec * 1);
	document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString() + ";path=/";
	if (fun) {
		fun();
	}
};

function __setCookie(name, value, fun) {
	delCookie(name);
	var exp = new Date();
	document.cookie = name + "=" + escape(value) + ";path=/";
	if (fun) {
		fun();
	}
};

function getCookieCn(c_name) {
	if (document.cookie.length > 0) {
		c_start = document.cookie.indexOf(c_name + "=");
		if (c_start != -1) {
			c_start = c_start + c_name.length + 1;
			c_end = document.cookie.indexOf(";", c_start);
			if (c_end == -1) c_end = document.cookie.length
			return unescape(document.cookie.substring(c_start, c_end));
		}
	}
	return "";
}

function setCookieCn(c_name, value, expiredays) {
	var exdate = new Date();
	exdate.setDate(exdate.getDate() + expiredays);
	document.cookie = c_name + "=" + escape(value) + ((expiredays == null) ? "" : "; expires=" + exdate.toGMTString()) + "; path=/";
}

function getsec(str) {
	var str1 = str.substr(0, str.length - 1) * 1;
	var str2 = str.substr(str.length - 1, str.length);
	if (str2 == "s") {
		return str1 * 1000;
	} else if (str2 == "h") {
		return str1 * 60 * 60 * 1000;
	} else if (str2 == "d") {
		return str1 * 24 * 60 * 60 * 1000;
	}
};

function getCookie(name) {
	var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
	if (arr = document.cookie.match(reg)) return (arr[2]);
	else return null;
};

function delCookie(name) {
	var exp = new Date();
	exp.setTime(exp.getTime() - 1);
	var cval = getCookie(name);
	if (cval != null) document.cookie = name + "=" + cval + ";expires=" + exp.toGMTString();
};
$(".immbook").click(function() {
	$("#order-btn").trigger("click");
});
$("ul").delegate('li[class="available"]', 'click', function() {
	$("#order-btn").trigger("click");
});
$(function() {
	var index = 0;
	var speed = 750;
	var $ul = $(".index-say .say-slider .slider-ul");
	var $arrowDown = $(".index-say .say-slider .slider-point .arrow-down");
	var $a = $(".index-say .say-slider .slider-point .point-list a");
	var slideTo = function(index, $this) {
			var arrowDownLeft = -778 + index * 244.25;
			$arrowDown.animate({
				"left": arrowDownLeft + "px"
			}, speed, function() {
				$a.removeClass("active");
				$this.addClass("active");
			});
			var ulLeft = 1100 * index;
			$ul.animate({
				"left": -ulLeft + "px"
			}, speed, function() {});
		};
	$a.mouseenter(function(event) {
		$arrowDown.stop();
		$ul.stop();
		var $this = $(this);
		index = $this.data().index;
		slideTo(index, $this);
	});
});
(function() {
	setInterval(autoA, 7000);
	var n = 0;
	var dir = 0;

	function autoA() {
		var len = $(".testimotial-btn li").length;
		if (n >= len - 1 && dir == 1) dir = 0;
		else if (n <= 0) dir = 1;
		if (dir == 0) n--;
		else n++;
		$(".testimotial-btn li").removeClass("active");
		$(".testimotial-btn li").eq(n).addClass("active");
		$(".testimotial-box").attr("style", "transform:translate3d(" + (-n * 730) + "px,0,0);transition-duration:0.5s")
	}
	$(".testimotial-btn li").click(function() {
		var index = $(this).index();
		n = index;
		$(".testimotial-btn li").removeClass("active")
		$(this).addClass("active");
		$(".testimotial-box").attr("style", "transform:translate3d(" + (-index * 730) + "px,0,0);transition-duration:0.5s")
	})
})()
$(".icons-up-arrow").click(function() {
	nums = nums < (-lenght / 3) ? (-lenght / 3) : nums >= 0 ? 0 : nums + 1;
	autoS();
})
$(".icons-down-arrow").click(function() {
	nums = nums > 0 ? (-lenght / 3) : nums - 1;
	autoS();
})
var nums = 0;
var lenght

function autoS() {
	lenght = $(".testimontial-right-item").length;
	if (nums < -lenght / 3) {
		nums = 0;
		$(".testimotial-container").css("position", "static");
	}
	if (nums == -1) {
		$(".testimotial-container").css("position", "absolute");
	}
	if (nums == (-lenght / 3) + 1) {}
	$(".testimotial-container").css("top", 147 * 3 * nums + 'px');
}

function ajaxGetD() {
	var limit = $(".testimotial-container").attr('data-limit');
	var size = 51;
	var html = "";
	$.ajax({
		type: 'get',
		data: {
			'limit': limit,
			'size': size
		},
		url: rooturl,
		dataType: 'jsonp',
		jsonpCallback: 'jsonp',
		success: function(data) {
			if (data && data.code == "200") {
				$(".testimotial-container").attr('data-limit', limit - 0 + 1);
				$.each(data.val, function(i, item) {
					if (item.headerimg == "" || item.headerimg == null) {
						item.headerimg = '/resource/img/js_images/morentouxiang_03.png';
					}
					item.u_name = item.u_name == "" ? '第六感别墅度假用户' : item.u_name;
					html += ' <div class="testimontial-right-item">' + '<div><img class="testimotial-right-avatar" src="' + item.headerimg + '" alt="">' + '<div class="testimotial-right-c">' + '<p>' + item.u_name + '</p>' + '<a href="http://www.senseluxury.com/villa/' + item.pid + '_' + item.title_en + '"><p class="color-ff8 testimotial-left-l"><i class="icon-laction"></i>' + item.p_title + ' | ' + item.des + '</p></a>' + '</div>' + '<p class="testimotial-right-info">"' + item.info + '" </p>' + ' </div></div>'
				})
				$(".testimotial-container").append(html);
			}
		}
	})
}
var formatDate = function(date) {
		var y = date.getFullYear();
		var m = date.getMonth() + 1;
		m = m < 10 ? '0' + m : m;
		var d = date.getDate();
		d = d < 10 ? ('0' + d) : d;
		return y + '/' + m + '/' + d;
	};;
(function(a) {
	a.fn.scrollLoading = function(b) {
		var c = {
			attr: "data-url",
			container: a(window),
			callback: a.noop
		};
		var d = a.extend({}, c, b || {});
		d.cache = [];
		a(this).each(function() {
			var h = this.nodeName.toLowerCase(),
				g = a(this).attr(d.attr);
			var i = {
				obj: a(this),
				tag: h,
				url: g
			};
			d.cache.push(i)
		});
		var f = function(g) {
				if (a.isFunction(d.callback)) {
					d.callback.call(g.get(0))
				}
			};
		var e = function() {
				var g = d.container.height();
				if (d.container.get(0) === window) {
					contop = a(window).scrollTop()
				} else {
					contop = d.container.offset().top
				}
				a.each(d.cache, function(m, n) {
					var p = n.obj,
						j = n.tag,
						k = n.url,
						l, h;
					if (p) {
						l = p.offset().top - contop, h = l + p.height();
						if ((l >= 0 && l < g) || (h > 0 && h <= g)) {
							if (k) {
								if (j === "img") {
									f(p.attr("src", k))
								} else {
									p.load(k, {}, function() {
										f(p)
									})
								}
							} else {
								f(p)
							}
							n.obj = null
						}
					}
				})
			};
		e();
		d.container.bind("scroll", e)
	}
})(jQuery);