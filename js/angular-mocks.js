(function(k,m){m.mock={};m.mock.$BrowserProvider=function(){this.$get=function(){return new m.mock.$Browser()}};m.mock.$Browser=function(){var o=this;this.isMock=true;o.$$url="http://server/";o.$$lastUrl=o.$$url;o.pollFns=[];var q=0;var p=[];o.$$incOutstandingRequestCount=function(){q++};o.$$completeOutstandingRequest=function(r){try{r()}finally{q--;if(!q){while(p.length){p.pop()()}}}};o.notifyWhenNoOutstandingRequests=function(r){if(q){p.push(r)}else{r()}};o.onUrlChange=function(r){o.pollFns.push(function(){if(o.$$lastUrl!==o.$$url||o.$$state!==o.$$lastState){o.$$lastUrl=o.$$url;o.$$lastState=o.$$state;r(o.$$url,o.$$state)}});return r};o.$$applicationDestroyed=m.noop;o.$$checkUrlChange=m.noop;o.deferredFns=[];o.deferredNextId=0;o.defer=function(s,r){r=r||0;o.deferredFns.push({time:(o.defer.now+r),fn:s,id:o.deferredNextId});o.deferredFns.sort(function(u,t){return u.time-t.time});return o.deferredNextId++};o.defer.now=0;o.defer.cancel=function(s){var r;m.forEach(o.deferredFns,function(u,t){if(u.id===s){r=t}});if(m.isDefined(r)){o.deferredFns.splice(r,1);return true}return false};o.defer.flush=function(s){var r;if(m.isDefined(s)){r=o.defer.now+s}else{if(o.deferredFns.length){r=o.deferredFns[o.deferredFns.length-1].time}else{throw new Error("No deferred tasks to be flushed")}}while(o.deferredFns.length&&o.deferredFns[0].time<=r){o.defer.now=o.deferredFns[0].time;o.deferredFns.shift().fn()}o.defer.now=r};o.$$baseHref="/";o.baseHref=function(){return this.$$baseHref}};m.mock.$Browser.prototype={poll:function l(){m.forEach(this.pollFns,function(o){o()})},url:function(o,p,q){if(m.isUndefined(q)){q=null}if(o){this.$$url=o;this.$$state=m.copy(q);return this}return this.$$url},state:function(){return this.$$state}};m.mock.$ExceptionHandlerProvider=function(){var o;this.mode=function(p){switch(p){case"log":case"rethrow":var q=[];o=function(r){if(arguments.length===1){q.push(r)}else{q.push([].slice.call(arguments,0))}if(p==="rethrow"){throw r}};o.errors=q;break;default:throw new Error("Unknown mode '"+p+"', only 'log'/'rethrow' modes are allowed!")}};this.$get=function(){return o};this.mode("rethrow")};m.mock.$LogProvider=function(){var o=true;function p(s,r,q){return s.concat(Array.prototype.slice.call(r,q))}this.debugEnabled=function(q){if(m.isDefined(q)){o=q;return this}else{return o}};this.$get=function(){var q={log:function(){q.log.logs.push(p([],arguments,0))},warn:function(){q.warn.logs.push(p([],arguments,0))},info:function(){q.info.logs.push(p([],arguments,0))},error:function(){q.error.logs.push(p([],arguments,0))},debug:function(){if(o){q.debug.logs.push(p([],arguments,0))}}};q.reset=function(){q.log.logs=[];q.info.logs=[];q.warn.logs=[];q.error.logs=[];q.debug.logs=[]};q.assertEmpty=function(){var r=[];m.forEach(["error","warn","info","log","debug"],function(s){m.forEach(q[s].logs,function(t){m.forEach(t,function(u){r.push("MOCK $log ("+s+"): "+String(u)+"\n"+(u.stack||""))})})});if(r.length){r.unshift("Expected $log to be empty! Either a message was logged unexpectedly, or an expected log message was not checked and removed:");r.push("");throw new Error(r.join("\n---------\n"))}};q.reset();return q}};m.mock.$IntervalProvider=function(){this.$get=["$browser","$rootScope","$q","$$q",function(p,o,s,q){var u=[],r=0,t=0;var v=function(E,z,C,B){var y=arguments.length>4,D=y?Array.prototype.slice.call(arguments,4):[],w=0,x=(m.isDefined(B)&&!B),F=(x?q:s).defer(),G=F.promise;C=(m.isDefined(C))?C:0;G.then(null,function(){},(!y)?E:function(){E.apply(null,D)});G.$$intervalId=r;function A(){F.notify(w++);if(C>0&&w>=C){var H;F.resolve(w);m.forEach(u,function(J,I){if(J.id===G.$$intervalId){H=I}});if(m.isDefined(H)){u.splice(H,1)}}if(x){p.defer.flush()}else{o.$apply()}}u.push({nextTime:(t+z),delay:z,fn:A,id:r,deferred:F});u.sort(function(I,H){return I.nextTime-H.nextTime});r++;return G};v.cancel=function(x){if(!x){return false}var w;m.forEach(u,function(z,y){if(z.id===x.$$intervalId){w=y}});if(m.isDefined(w)){u[w].deferred.promise.then(undefined,function(){});u[w].deferred.reject("canceled");u.splice(w,1);return true}return false};v.flush=function(x){t+=x;while(u.length&&u[0].nextTime<=t){var w=u[0];w.fn();w.nextTime+=w.delay;u.sort(function(z,y){return z.nextTime-y.nextTime})}return x};return v}]};function c(t){var q=/^(-?\d{4})-?(\d\d)-?(\d\d)(?:T(\d\d)(?::?(\d\d)(?::?(\d\d)(?:\.(\d{3}))?)?)?(Z|([+-])(\d\d):?(\d\d)))?$/;var s;if((s=t.match(q))){var r=new Date(0),p=0,o=0;if(s[9]){p=i(s[9]+s[10]);o=i(s[9]+s[11])}r.setUTCFullYear(i(s[1]),i(s[2])-1,i(s[3]));r.setUTCHours(i(s[4]||0)-p,i(s[5]||0)-o,i(s[6]||0),i(s[7]||0));return r}return t}function i(o){return parseInt(o,10)}function d(p,q,o){var r="";if(p<0){r="-";p=-p}p=""+p;while(p.length<q){p="0"+p}if(o){p=p.substr(p.length-q)}return r+p}m.mock.TzDate=function(t,r){var o=new Date(0);if(m.isString(r)){var p=r;o.origDate=c(r);r=o.origDate.getTime();if(isNaN(r)){throw {name:"Illegal Argument",message:"Arg '"+p+"' passed into TzDate constructor is not a valid date string"}}}else{o.origDate=new Date(r)}var s=new Date(r).getTimezoneOffset();o.offsetDiff=s*60*1000-t*1000*60*60;o.date=new Date(r+o.offsetDiff);o.getTime=function(){return o.date.getTime()-o.offsetDiff};o.toLocaleDateString=function(){return o.date.toLocaleDateString()};o.getFullYear=function(){return o.date.getFullYear()};o.getMonth=function(){return o.date.getMonth()};o.getDate=function(){return o.date.getDate()};o.getHours=function(){return o.date.getHours()};o.getMinutes=function(){return o.date.getMinutes()};o.getSeconds=function(){return o.date.getSeconds()};o.getMilliseconds=function(){return o.date.getMilliseconds()};o.getTimezoneOffset=function(){return t*60};o.getUTCFullYear=function(){return o.origDate.getUTCFullYear()};o.getUTCMonth=function(){return o.origDate.getUTCMonth()};o.getUTCDate=function(){return o.origDate.getUTCDate()};o.getUTCHours=function(){return o.origDate.getUTCHours()};o.getUTCMinutes=function(){return o.origDate.getUTCMinutes()};o.getUTCSeconds=function(){return o.origDate.getUTCSeconds()};o.getUTCMilliseconds=function(){return o.origDate.getUTCMilliseconds()};o.getDay=function(){return o.date.getDay()};if(o.toISOString){o.toISOString=function(){return d(o.origDate.getUTCFullYear(),4)+"-"+d(o.origDate.getUTCMonth()+1,2)+"-"+d(o.origDate.getUTCDate(),2)+"T"+d(o.origDate.getUTCHours(),2)+":"+d(o.origDate.getUTCMinutes(),2)+":"+d(o.origDate.getUTCSeconds(),2)+"."+d(o.origDate.getUTCMilliseconds(),3)+"Z"}}var q=["getUTCDay","getYear","setDate","setFullYear","setHours","setMilliseconds","setMinutes","setMonth","setSeconds","setTime","setUTCDate","setUTCFullYear","setUTCHours","setUTCMilliseconds","setUTCMinutes","setUTCMonth","setUTCSeconds","setYear","toDateString","toGMTString","toJSON","toLocaleFormat","toLocaleString","toLocaleTimeString","toSource","toString","toTimeString","toUTCString","valueOf"];m.forEach(q,function(u){o[u]=function(){throw new Error("Method '"+u+"' is not implemented in the TzDate mock")}});return o};m.mock.TzDate.prototype=Date.prototype;m.mock.animate=m.module("ngAnimateMock",["ng"]).info({angularVersion:"1.6.4"}).config(["$provide",function(o){o.factory("$$forceReflow",function(){function p(){p.totalReflows++}p.totalReflows=0;return p});o.factory("$$animateAsyncRun",function(){var p=[];var q=function(){return function(r){p.push(r)}};q.flush=function(){if(p.length===0){return false}for(var r=0;r<p.length;r++){p[r]()}p=[];return true};return q});o.decorator("$$animateJs",["$delegate",function(r){var q=[];var p=function(){var s=r.apply(r,arguments);if(s){q.push(s)}return s};p.$closeAndFlush=function(){q.forEach(function(s){s.end()});q=[]};return p}]);o.decorator("$animateCss",["$delegate",function(q){var p=[];var r=function(u,t){var s=q(u,t);p.push(s);return s};r.$closeAndFlush=function(){p.forEach(function(s){s.end()});p=[]};return r}]);o.decorator("$animate",["$delegate","$timeout","$browser","$$rAF","$animateCss","$$animateJs","$$forceReflow","$$animateAsyncRun","$rootScope",function(s,q,y,u,r,v,w,t,x){var p={queue:[],cancel:s.cancel,on:s.on,off:s.off,pin:s.pin,get reflowsfunction(){return w.totalReflows},enabled:s.enabled,closeAndFlush:function(){this.flush(true);r.$closeAndFlush();v.$closeAndFlush();this.flush()},flush:function(A){x.$digest();var z,B=false;do{z=false;if(u.queue.length){u.flush();z=B=true}if(t.flush()){z=B=true}}while(z);if(!B&&!A){throw new Error("No pending animations ready to be closed or flushed")}x.$digest()}};m.forEach(["animate","enter","leave","move","addClass","removeClass","setClass"],function(z){p[z]=function(){p.queue.push({event:z,element:arguments[0],options:arguments[arguments.length-1],args:arguments});return s[z].apply(s,arguments)}});return p}])}]);m.mock.dump=function(o){return p(o);function p(s){var r;if(m.isElement(s)){s=m.element(s);r=m.element("<div></div>");m.forEach(s,function(t){r.append(m.element(t).clone())});r=r.html()}else{if(m.isArray(s)){r=[];m.forEach(s,function(t){r.push(p(t))});r="[ "+r.join(", ")+" ]"}else{if(m.isObject(s)){if(m.isFunction(s.$eval)&&m.isFunction(s.$apply)){r=q(s)}else{if(s instanceof Error){r=s.stack||(""+s.name+": "+s.message)}else{r=m.toJson(s,true)}}}else{r=String(s)}}}return r}function q(t,u){u=u||"  ";var s=[u+"Scope("+t.$id+"): {"];for(var r in t){if(Object.prototype.hasOwnProperty.call(t,r)&&!r.match(/^(\$|this)/)){s.push("  "+r+": "+m.toJson(t[r]))}}var v=t.$$childHead;while(v){s.push(q(v,u+"  "));v=v.$$nextSibling}s.push("}");return s.join("\n"+u)}};m.mock.$httpBackendDecorator=["$rootScope","$timeout","$delegate",j];function j(z,s,t,B){var A=[],q=[],x=[],u=m.bind(x,x.push),o=m.copy,r=t.$$originalHttpBackend||t;function w(C,D,F,E){if(m.isFunction(C)){return C}return function(){return m.isNumber(C)?[C,D,F,E]:[200,C,D,F]}}function y(C,E,L,Q,H,P,J,M,D,O){var R=new f(),F=q[0],N=false;R.$$events=D;R.upload.$$events=O;function I(T){return(m.isString(T)||m.isFunction(T)||T instanceof RegExp)?T:m.toJson(T)}function S(T){if(!B&&P){if(P.then){P.then(V)}else{s(V,P)}}return U;function U(){var W=T.response(C,E,L,H,T.params(E));R.$$respHeaders=W[2];Q(o(W[0]),o(W[1]),R.getAllResponseHeaders(),o(W[3]||""))}function V(){for(var W=0,X=x.length;W<X;W++){if(x[W]===U){x.splice(W,1);Q(-1,undefined,"");break}}}}if(F&&F.match(C,E)){if(!F.matchData(L)){throw new Error("Expected "+F+" with different data\nEXPECTED: "+I(F.data)+"\nGOT:      "+L)}if(!F.matchHeaders(H)){throw new Error("Expected "+F+" with different headers\nEXPECTED: "+I(F.headers)+"\nGOT:      "+I(H))}q.shift();if(F.response){x.push(S(F));return}N=true}var K=-1,G;while((G=A[++K])){if(G.match(C,E,L,H||{})){if(G.response){(B?B.defer:u)(S(G))}else{if(G.passThrough){r(C,E,L,Q,H,P,J,M,D,O)}else{throw new Error("No response defined !")}}return}}throw N?new Error("No response defined !"):new Error("Unexpected request: "+C+" "+E+"\n"+(F?"Expected "+F:"No more request expected"))}y.when=function(I,C,G,H,F){g(arguments,1,"url");var E=new e(I,C,G,H,F),D={respond:function(J,K,M,L){E.passThrough=undefined;E.response=w(J,K,M,L);return D}};if(B){D.passThrough=function(){E.response=undefined;E.passThrough=true;return D}}A.push(E);return D};p("when");y.whenRoute=function(E,C){var D=v(C);return y.when(E,D.regexp,undefined,undefined,D.keys)};function v(D){var C={regexp:D},E=C.keys=[];if(!D||!m.isString(D)){return C}D=D.replace(/([().])/g,"\\$1").replace(/(\/)?:(\w+)([?*])?/g,function(G,I,H,J){var F=J==="?"?J:null;var K=J==="*"?J:null;E.push({name:H,optional:!!F});I=I||"";return""+(F?"":I)+"(?:"+(F?I:"")+(K&&"(.+?)"||"([^/]+)")+(F||"")+")"+(F||"")}).replace(/([/$*])/g,"\\$1");C.regexp=new RegExp("^"+D,"i");return C}y.expect=function(I,D,G,H,F){g(arguments,1,"url");var C=new e(I,D,G,H,F),E={respond:function(J,K,M,L){C.response=w(J,K,M,L);return E}};q.push(C);return E};p("expect");y.expectRoute=function(E,C){var D=v(C);return y.expect(E,D.regexp,undefined,undefined,D.keys)};y.flush=function(E,D,F){if(F!==false){z.$digest()}D=D||0;if(D>=x.length){throw new Error("No pending request to flush !")}if(m.isDefined(E)&&E!==null){while(E--){var C=x.splice(D,1);if(!C.length){throw new Error("No more pending request to flush !")}C[0]()}}else{while(x.length>D){x.splice(D,1)[0]()}}y.verifyNoOutstandingExpectation(F)};y.verifyNoOutstandingExpectation=function(C){if(C!==false){z.$digest()}if(q.length){throw new Error("Unsatisfied requests: "+q.join(", "))}};y.verifyNoOutstandingRequest=function(C){if(C!==false){z.$digest()}if(x.length){throw new Error("Unflushed requests: "+x.length)}};y.resetExpectations=function(){q.length=0;x.length=0};y.$$originalHttpBackend=r;return y;function p(C){m.forEach(["GET","DELETE","JSONP","HEAD"],function(D){y[C+D]=function(E,G,F){g(arguments,0,"url");if(m.isUndefined(E)){E=null}return y[C](D,E,undefined,G,F)}});m.forEach(["PUT","POST","PATCH"],function(D){y[C+D]=function(E,G,H,F){g(arguments,0,"url");if(m.isUndefined(E)){E=null}return y[C](D,E,G,H,F)}})}}function g(q,p,o){if(q.length>p&&m.isUndefined(q[p])){throw new Error("Undefined argument `"+o+"`; the argument is provided but not defined")}}function e(u,o,r,s,q){function t(v){var w=v.slice(v.indexOf("?")+1).split("&");return w.sort()}function p(v){return(o.slice(0,o.indexOf("?"))===v.slice(0,v.indexOf("?"))&&t(o).join()===t(v).join())}this.data=r;this.headers=s;this.match=function(v,w,y,x){if(u!==v){return false}if(!this.matchUrl(w)){return false}if(m.isDefined(y)&&!this.matchData(y)){return false}if(m.isDefined(x)&&!this.matchHeaders(x)){return false}return true};this.matchUrl=function(v){if(!o){return true}if(m.isFunction(o.test)){return o.test(v)}if(m.isFunction(o)){return o(v)}return(o===v||p(v))};this.matchHeaders=function(v){if(m.isUndefined(s)){return true}if(m.isFunction(s)){return s(v)}return m.equals(s,v)};this.matchData=function(v){if(m.isUndefined(r)){return true}if(r&&m.isFunction(r.test)){return r.test(v)}if(r&&m.isFunction(r)){return r(v)}if(r&&!m.isString(r)){return m.equals(m.fromJson(m.toJson(r)),m.fromJson(v))}return r==v};this.toString=function(){return u+" "+o};this.params=function(w){return m.extend(v(),y());function y(){var E={};if(!o||!m.isFunction(o.test)||!q||q.length===0){return E}var A=o.exec(w);if(!A){return E}for(var C=1,z=A.length;C<z;++C){var B=q[C-1];var D=A[C];if(B&&D){E[B.name||B]=D}}return E}function v(){var B={},z,A,C=w.indexOf("?")>-1?w.substring(w.indexOf("?")+1):"";m.forEach(C.split("&"),function(D){if(D){z=D.replace(/\+/g,"%20").split("=");A=x(z[0]);if(m.isDefined(A)){var E=m.isDefined(z[1])?x(z[1]):true;if(!hasOwnProperty.call(B,A)){B[A]=E}else{if(m.isArray(B[A])){B[A].push(E)}else{B[A]=[B[A],E]}}}}});return B}function x(z){try{return decodeURIComponent(z)}catch(A){}}}}function h(){return new f()}function f(){f.$$lastInstance=this;this.open=function(q,o,p){this.$$method=q;this.$$url=o;this.$$async=p;this.$$reqHeaders={};this.$$respHeaders={}};this.send=function(o){this.$$data=o};this.setRequestHeader=function(o,p){this.$$reqHeaders[o]=p};this.getResponseHeader=function(o){var p=this.$$respHeaders[o];if(p){return p}o=m.lowercase(o);p=this.$$respHeaders[o];if(p){return p}p=undefined;m.forEach(this.$$respHeaders,function(q,r){if(!p&&m.lowercase(r)===o){p=q}});return p};this.getAllResponseHeaders=function(){var o=[];m.forEach(this.$$respHeaders,function(q,p){o.push(p+": "+q)});return o.join("\n")};this.abort=m.noop;this.$$events={};this.addEventListener=function(o,p){if(m.isUndefined(this.$$events[o])){this.$$events[o]=[]}this.$$events[o].push(p)};this.upload={$$events:{},addEventListener:this.addEventListener}}m.mock.$TimeoutDecorator=["$delegate","$browser",function(q,o){q.flush=function(r){o.defer.flush(r)};q.verifyNoPendingTasks=function(){if(o.deferredFns.length){throw new Error("Deferred tasks to flush ("+o.deferredFns.length+"): "+p(o.deferredFns))}};function p(s){var r=[];m.forEach(s,function(t){r.push("{id: "+t.id+", time: "+t.time+"}")});return r.join(", ")}return q}];m.mock.$RAFDecorator=["$delegate",function(p){var o=function(r){var q=o.queue.length;o.queue.push(r);return function(){o.queue.splice(q,1)}};o.queue=[];o.supported=p.supported;o.flush=function(){if(o.queue.length===0){throw new Error("No rAF callbacks present")}var r=o.queue.length;for(var q=0;q<r;q++){o.queue[q]()}o.queue=o.queue.slice(q)};return o}];var b;m.mock.$RootElementProvider=function(){this.$get=["$injector",function(o){b=m.element("<div ng-app></div>").data("$injector",o);return b}]};function a(o){m.mock.$ControllerDecorator=["$delegate",function(p){return function(w,u,s,t){if(s&&typeof s==="object"){var v=o.preAssignBindingsEnabled();var r=p(w,u,true,t);if(v){m.extend(r.instance,s)}var q=r();if(!v||q!==r.instance){m.extend(q,s)}return q}return p(w,u,s,t)}}];return m.mock.$ControllerDecorator}m.mock.$ComponentControllerProvider=["$compileProvider",function n(o){this.$get=["$controller","$injector","$rootScope",function(q,r,p){return function s(t,y,z,w){var x=r.get(t+"Directive");var v=x.filter(function(A){return A.controller&&A.controllerAs&&A.restrict==="E"});if(v.length===0){throw new Error("No component found")}if(v.length>1){throw new Error("Too many components found")}var u=v[0];y=y||{};y.$scope=y.$scope||p.$new(true);return q(u.controller,y,z,w||u.controllerAs)}}]}];m.module("ngMock",["ng"]).provider({$browser:m.mock.$BrowserProvider,$exceptionHandler:m.mock.$ExceptionHandlerProvider,$log:m.mock.$LogProvider,$interval:m.mock.$IntervalProvider,$rootElement:m.mock.$RootElementProvider,$componentController:m.mock.$ComponentControllerProvider}).config(["$provide","$compileProvider",function(p,o){p.decorator("$timeout",m.mock.$TimeoutDecorator);p.decorator("$$rAF",m.mock.$RAFDecorator);p.decorator("$rootScope",m.mock.$RootScopeDecorator);p.decorator("$controller",a(o));p.decorator("$httpBackend",m.mock.$httpBackendDecorator)}]).info({angularVersion:"1.6.4"});m.module("ngMockE2E",["ng"]).config(["$provide",function(o){o.decorator("$httpBackend",m.mock.e2e.$httpBackendDecorator)}]).info({angularVersion:"1.6.4"});m.mock.e2e={};m.mock.e2e.$httpBackendDecorator=["$rootScope","$timeout","$delegate","$browser",j];m.mock.$RootScopeDecorator=["$delegate",function(p){var q=Object.getPrototypeOf(p);q.$countChildScopes=r;q.$countWatchers=o;return p;function r(){var t=0;var u=[this.$$childHead];var s;while(u.length){s=u.shift();while(s){t+=1;u.push(s.$$childHead);s=s.$$nextSibling}}return t}function o(){var t=this.$$watchers?this.$$watchers.length:0;var u=[this.$$childHead];var s;while(u.length){s=u.shift();while(s){t+=s.$$watchers?s.$$watchers.length:0;u.push(s.$$childHead);s=s.$$nextSibling}}return t}}];(function(p){if(!p){return}var o=null,s=new u(),t=[],r=function(){return !!o};m.mock.$$annotate=m.injector.$$annotate;m.injector.$$annotate=function(w){if(typeof w==="function"&&!w.$inject){t.push(w)}return m.mock.$$annotate.apply(this,arguments)};var q=k.module=m.mock.module=function(){var w=Array.prototype.slice.call(arguments,0);return r()?x():x;function x(){if(o.$injector){throw new Error("Injector already created, can not register a module!")}else{var z,y=o.$modules||(o.$modules=[]);m.forEach(w,function(A){if(m.isObject(A)&&!m.isArray(A)){z=["$provide",function(B){m.forEach(A,function(D,C){B.value(C,D)})}]}else{z=A}if(o.$providerInjector){o.$providerInjector.invoke(z)}else{y.push(z)}})}}};q.$$beforeAllHook=(k.before||k.beforeAll);q.$$afterAllHook=(k.after||k.afterAll);q.$$currentSpec=function(w){if(arguments.length===0){return w}o=w};q.sharedInjector=function(){if(!(q.$$beforeAllHook&&q.$$afterAllHook)){throw Error("sharedInjector() cannot be used unless your test runner defines beforeAll/afterAll")}var w=false;q.$$beforeAllHook(function(){if(s.shared){s.sharedError=Error("sharedInjector() cannot be called inside a context that has already called sharedInjector()");throw s.sharedError}w=true;o=this;s.shared=true});q.$$afterAllHook(function(){if(w){s=new u();q.$$cleanup()}else{s.sharedError=null}})};q.$$beforeEach=function(){if(s.shared&&o&&o!==this){var w=o;o=this;m.forEach(["$injector","$modules","$providerInjector","$injectorStrict"],function(x){o[x]=w[x];w[x]=null})}else{o=this;b=null;t=[]}};q.$$afterEach=function(){if(s.cleanupAfterEach()){q.$$cleanup()}};q.$$cleanup=function(){var A=o.$injector;t.forEach(function(B){delete B.$inject});o.$injector=null;o.$modules=null;o.$providerInjector=null;o=null;if(A){var z=A.get("$rootElement");var y=z&&z[0];var x=!b?[]:[b[0]];if(y&&(!b||y!==b[0])){x.push(y)}m.element.cleanData(x);var w=A.get("$rootScope");if(w&&w.$destroy){w.$destroy()}}m.forEach(m.element.fragments,function(C,B){delete m.element.fragments[B]});f.$$lastInstance=null;m.forEach(m.callbacks,function(C,B){delete m.callbacks[B]});m.callbacks.$$counter=0};(k.beforeEach||k.setup)(q.$$beforeEach);(k.afterEach||k.teardown)(q.$$afterEach);var v=function v(x,w){this.message=x.message;this.name=x.name;if(x.line){this.line=x.line}if(x.sourceId){this.sourceId=x.sourceId}if(x.stack&&w){this.stack=x.stack+"\n"+w.stack}if(x.stackArray){this.stackArray=x.stackArray}};v.prototype=Error.prototype;k.inject=m.mock.inject=function(){var w=Array.prototype.slice.call(arguments,0);var y=new Error("Declaration Location");if(!y.stack){try{throw y}catch(z){}}return r()?x.call(o):x;function x(){var A=o.$modules||[];var D=!!o.$injectorStrict;A.unshift(["$injector",function(G){o.$providerInjector=G}]);A.unshift("ngMock");A.unshift("ng");var F=o.$injector;if(!F){if(D){m.forEach(A,function(G){if(typeof G==="function"){m.injector.$$annotate(G)}})}F=o.$injector=m.injector(A,D);o.$injectorStrict=D}for(var B=0,C=w.length;B<C;B++){if(o.$injectorStrict){F.annotate(w[B])}try{F.invoke(w[B]||m.noop,this)}catch(E){if(E.stack&&y){throw new v(E,y)}throw E}finally{y=null}}}};m.mock.inject.strictDi=function(x){x=arguments.length?!!x:true;return r()?w():w;function w(){if(x!==o.$injectorStrict){if(o.$injector){throw new Error("Injector already created, can not modify strict annotations")}else{o.$injectorStrict=x}}}};function u(){this.shared=false;this.sharedError=null;this.cleanupAfterEach=function(){return !this.shared||this.sharedError}}})(k.jasmine||k.mocha);"use strict";(function(){k.browserTrigger=function t(D,w,L){if(D&&!D.nodeName){D=D[0]}if(!D){return}L=L||{};var H=L.relatedTarget||D;var M=L.keys;var K=L.x;var I=L.y;var z=(D.type)?D.type.toLowerCase():null,J=D.nodeName.toLowerCase();if(!w){w={text:"change",textarea:"change",hidden:"change",password:"change",button:"click",submit:"click",reset:"click",image:"click",checkbox:"click",radio:"click","select-one":"change","select-multiple":"change",_default_:"click"}[z||"_default_"]}if(J==="option"){D.parentNode.value=D.value;D=D.parentNode;w="change"}M=M||[];function C(x){return M.indexOf(x)!==-1}var N;if(/transitionend/.test(w)){if(k.WebKitTransitionEvent){N=new k.WebKitTransitionEvent(w,L);N.initEvent(w,false,true)}else{try{N=new k.TransitionEvent(w,L)}catch(E){N=k.document.createEvent("TransitionEvent");N.initTransitionEvent(w,null,null,null,L.elapsedTime||0)}}}else{if(/animationend/.test(w)){if(k.WebKitAnimationEvent){N=new k.WebKitAnimationEvent(w,L);N.initEvent(w,false,true)}else{try{N=new k.AnimationEvent(w,L)}catch(E){N=k.document.createEvent("AnimationEvent");N.initAnimationEvent(w,null,null,null,L.elapsedTime||0)}}}else{if(/touch/.test(w)&&u()){N=q(D,w,K,I)}else{if(/key/.test(w)){N=k.document.createEvent("Events");N.initEvent(w,L.bubbles,L.cancelable);N.view=k;N.ctrlKey=C("ctrl");N.altKey=C("alt");N.shiftKey=C("shift");N.metaKey=C("meta");N.keyCode=L.keyCode;N.charCode=L.charCode;N.which=L.which}else{N=k.document.createEvent("MouseEvents");K=K||0;I=I||0;N.initMouseEvent(w,true,true,k,0,K,I,K,I,C("ctrl"),C("alt"),C("shift"),C("meta"),0,H)}}}}N.$manualTimeStamp=L.timeStamp;if(!N){return}var G=N.preventDefault,B=D.ownerDocument.defaultView,v=true,A,F=B.angular||{};F["ff-684208-preventDefault"]=false;N.preventDefault=function(){v=false;return G.apply(N,arguments)};if(!L.bubbles||s()||o(D)){D.dispatchEvent(N)}else{r(D,N)}A=!(F["ff-684208-preventDefault"]||!v);delete F["ff-684208-preventDefault"];return A};function u(){if("_cached" in u){return u._cached}if(!k.document.createTouch||!k.document.createTouchList){u._cached=false;return false}try{k.document.createEvent("TouchEvent")}catch(v){u._cached=false;return false}u._cached=true;return true}function q(z,w,v,D){var C=new k.Event(w);v=v||0;D=D||0;var B=k.document.createTouch(k,z,Date.now(),v,D,v,D);var A=k.document.createTouchList(B);C.touches=A;return C}function s(){if("_cached" in s){return s._cached}s._cached=false;var w=k.document;if(w){var v=w.createElement("div"),y=v.cloneNode();v.appendChild(y);v.addEventListener("e",function(){s._cached=true});var x=k.document.createEvent("Events");x.initEvent("e",true,true);y.dispatchEvent(x)}return s._cached}function r(w,y){var v=false;var x=y.stopPropagation;y.stopPropagation=function(){v=true;x.apply(y,arguments)};p(y,w);do{w.dispatchEvent(y)}while(!v&&(w=w.parentNode))}function p(v,w){v._target=w;Object.defineProperty(v,"target",{get:function(){return this._target}})}function o(v){while((v=v.parentNode)){if(v===k){return true}}return false}})()})(window,window.angular);
