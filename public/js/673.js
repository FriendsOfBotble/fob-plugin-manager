"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[673],{744:(e,t)=>{t.Z=(e,t)=>{const n=e.__vccOpts||e;for(const[e,l]of t)n[e]=l;return n}},673:(e,t,n)=>{n.r(t),n.d(t,{default:()=>$});var l=n(311),o={class:"spinner-border spinner-border-sm me-2",role:"status"};const a={},r=(0,n(744).Z)(a,[["render",function(e,t){return(0,l.openBlock)(),(0,l.createElementBlock)("span",o)}]]);var c={class:"card mb-3"},s=(0,l.createElementVNode)("div",{class:"card-header"},[(0,l.createElementVNode)("h4",{class:"card-title"},"Install a new plugin")],-1),i={class:"card-body"},u=["onSubmit"],d={class:"mb-3"},p=["disabled"],m={key:1,xmlns:"http://www.w3.org/2000/svg",class:"icon",width:"24",height:"24",viewBox:"0 0 24 24","stroke-width":"2",stroke:"currentColor",fill:"none","stroke-linecap":"round","stroke-linejoin":"round"},h=[(0,l.createElementVNode)("path",{stroke:"none",d:"M0 0h24v24H0z",fill:"none"},null,-1),(0,l.createElementVNode)("path",{d:"M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2"},null,-1),(0,l.createElementVNode)("path",{d:"M7 11l5 5l5 -5"},null,-1),(0,l.createElementVNode)("path",{d:"M12 4l0 12"},null,-1)];const v={__name:"Installer",setup:function(e){var t=(0,l.ref)(null),n=(0,l.ref)(!1),o=function(){n.value=!0,$httpClient.make().post(route("plugin-manager.require-plugin",{name:t.value})).then((function(){return window.location.reload()})).finally((function(){return n.value=!1}))};return function(e,a){return(0,l.openBlock)(),(0,l.createElementBlock)("div",c,[s,(0,l.createElementVNode)("div",i,[(0,l.createElementVNode)("form",{onSubmit:(0,l.withModifiers)(o,["prevent"])},[(0,l.createElementVNode)("div",d,[(0,l.withDirectives)((0,l.createElementVNode)("input",{type:"text","onUpdate:modelValue":a[0]||(a[0]=function(e){return t.value=e}),class:"form-control",placeholder:"vendor/plugin-name",required:""},null,512),[[l.vModelText,t.value]])]),(0,l.createElementVNode)("button",{type:"submit",class:"btn btn-primary",disabled:n.value},[n.value?((0,l.openBlock)(),(0,l.createBlock)(r,{key:0})):((0,l.openBlock)(),(0,l.createElementBlock)("svg",m,h)),(0,l.createTextVNode)(" Install ")],8,p)],40,u)])])}}};var k={class:"list-group-item"},g={class:"row align-items-center"},f={class:"col"},E={class:"row align-items-center"},N={class:"col"},V={class:"mb-2"},w=["href"],b={class:"d-flex align-items-center gap-1"},B={class:"badge bg-green-lt"},y={class:"col-auto"},x=[(0,l.createStaticVNode)('<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 5l0 14"></path><path d="M18 11l-6 -6"></path><path d="M6 11l6 -6"></path></svg>',1)];const M={__name:"PluginItem",props:{plugin:{type:Object,required:!0}},emits:["updatePlugin"],setup:function(e){var t=function(e){return"v".concat(e.replace(/^v/,""))};return function(n,o){return(0,l.openBlock)(),(0,l.createElementBlock)("div",k,[(0,l.createElementVNode)("div",g,[(0,l.createElementVNode)("div",f,[(0,l.createElementVNode)("div",E,[(0,l.createElementVNode)("div",N,[(0,l.createElementVNode)("h4",V,[(0,l.createElementVNode)("a",{href:e.plugin.url,target:"_blank"},(0,l.toDisplayString)(e.plugin.name),9,w)]),(0,l.createElementVNode)("div",b,[(0,l.createElementVNode)("span",null,(0,l.toDisplayString)(t(e.plugin.version)),1),(0,l.createElementVNode)("span",B,(0,l.toDisplayString)(t(e.plugin.latest)),1)])]),(0,l.createElementVNode)("div",y,[(0,l.createElementVNode)("button",{class:"btn btn-sm btn-icon",onClick:o[0]||(o[0]=function(t){return n.$emit("updatePlugin",e.plugin)})},x)])])])])])}}};var C={class:"card"},_=(0,l.createElementVNode)("div",{class:"card-header"},[(0,l.createElementVNode)("div",null,[(0,l.createElementVNode)("h3",{class:"card-title"},[(0,l.createTextVNode)(" Updates "),(0,l.createElementVNode)("span",{class:"card-subtitle"}," Run a check for updates to your plugins. ")])])],-1),S={class:"card-body"},T=(0,l.createElementVNode)("p",null,[(0,l.createElementVNode)("strong",null,"Last update check:"),(0,l.createTextVNode)(),(0,l.createElementVNode)("span",{class:"text-muted"},"2 days ago")],-1),j={class:"btn-list"},z=["disabled"],P={key:1,xmlns:"http://www.w3.org/2000/svg",class:"icon",width:"24",height:"24",viewBox:"0 0 24 24","stroke-width":"2",stroke:"currentColor",fill:"none","stroke-linecap":"round","stroke-linejoin":"round"},D=[(0,l.createElementVNode)("path",{stroke:"none",d:"M0 0h24v24H0z",fill:"none"},null,-1),(0,l.createElementVNode)("path",{d:"M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4"},null,-1),(0,l.createElementVNode)("path",{d:"M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4"},null,-1)],H=(0,l.createElementVNode)("svg",{xmlns:"http://www.w3.org/2000/svg",class:"icon",width:"24",height:"24",viewBox:"0 0 24 24","stroke-width":"2",stroke:"currentColor",fill:"none","stroke-linecap":"round","stroke-linejoin":"round"},[(0,l.createElementVNode)("path",{stroke:"none",d:"M0 0h24v24H0z",fill:"none"}),(0,l.createElementVNode)("path",{d:"M7 4v16l13 -8z"})],-1),I={key:0,class:"list-group list-group-flush mt-3"};const U={__name:"Updater",setup:function(e){var t=(0,l.ref)(!1),n=(0,l.ref)([]),o=function(){t.value=!0,$httpClient.make().post(route("plugin-manager.check-for-updates")).then((function(e){var t=e.data;n.value=[],JSON.parse(t.data).installed.forEach((function(e){["semver-safe-update","update-possible"].includes(e["latest-status"])&&n.value.push(e)})),n.value.length<1&&Botble.showSuccess("Everything is up to date.")})).finally((function(){return t.value=!1}))},a=function(){},c=function(e){$httpClient.make().post(route("plugin-manager.update-plugin",{name:e.name})).then((function(){return window.location.reload()}))};return function(e,s){return(0,l.openBlock)(),(0,l.createElementBlock)("div",C,[_,(0,l.createElementVNode)("div",S,[T,(0,l.createElementVNode)("div",j,[(0,l.createElementVNode)("button",{type:"button",class:"btn",onClick:o,disabled:t.value},[t.value?((0,l.openBlock)(),(0,l.createBlock)(r,{key:0})):((0,l.openBlock)(),(0,l.createElementBlock)("svg",P,D)),(0,l.createTextVNode)(" Check for updates ")],8,z),(0,l.createElementVNode)("button",{type:"button",class:"btn",onClick:a},[H,(0,l.createTextVNode)(" Run global update ")])]),n.value.length>0?((0,l.openBlock)(),(0,l.createElementBlock)("div",I,[((0,l.openBlock)(!0),(0,l.createElementBlock)(l.Fragment,null,(0,l.renderList)(n.value,(function(e){return(0,l.openBlock)(),(0,l.createBlock)(M,{key:e.name,plugin:e,onUpdatePlugin:c},null,8,["plugin"])})),128))])):(0,l.createCommentVNode)("",!0)])])}}},$={__name:"PluginManager",setup:function(e){return function(e,t){return(0,l.openBlock)(),(0,l.createElementBlock)("div",null,[(0,l.createVNode)(v),(0,l.createVNode)(U)])}}}}}]);