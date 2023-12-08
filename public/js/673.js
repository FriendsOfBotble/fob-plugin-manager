"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[673],{744:(e,t)=>{t.Z=(e,t)=>{const n=e.__vccOpts||e;for(const[e,l]of t)n[e]=l;return n}},673:(e,t,n)=>{n.r(t),n.d(t,{default:()=>$});var l=n(311),a={class:"spinner-border spinner-border-sm me-2",role:"status"};const o={},r=(0,n(744).Z)(o,[["render",function(e,t){return(0,l.openBlock)(),(0,l.createElementBlock)("span",a)}]]);var c={class:"card mb-3"},s=(0,l.createElementVNode)("div",{class:"card-header"},[(0,l.createElementVNode)("h4",{class:"card-title"},"Install a new plugin")],-1),i={class:"card-body"},d={class:"mb-3"},u=["disabled"],p={key:1,xmlns:"http://www.w3.org/2000/svg",class:"icon",width:"24",height:"24",viewBox:"0 0 24 24","stroke-width":"2",stroke:"currentColor",fill:"none","stroke-linecap":"round","stroke-linejoin":"round"},m=[(0,l.createElementVNode)("path",{stroke:"none",d:"M0 0h24v24H0z",fill:"none"},null,-1),(0,l.createElementVNode)("path",{d:"M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2"},null,-1),(0,l.createElementVNode)("path",{d:"M7 11l5 5l5 -5"},null,-1),(0,l.createElementVNode)("path",{d:"M12 4l0 12"},null,-1)];const h={__name:"Installer",setup:function(e){var t=(0,l.ref)(null),n=(0,l.ref)(!1),a=function(){n.value=!0,$httpClient.make().post(route("plugin-manager.require-plugin",{name:t.value})).then((function(){return window.location.reload()})).finally((function(){return n.value=!1}))};return function(e,o){return(0,l.openBlock)(),(0,l.createElementBlock)("div",c,[s,(0,l.createElementVNode)("div",i,[(0,l.createElementVNode)("form",{onSubmit:(0,l.withModifiers)(a,["prevent"])},[(0,l.createElementVNode)("div",d,[(0,l.withDirectives)((0,l.createElementVNode)("input",{type:"text","onUpdate:modelValue":o[0]||(o[0]=function(e){return t.value=e}),class:"form-control",placeholder:"vendor/plugin-name",required:""},null,512),[[l.vModelText,t.value]])]),(0,l.createElementVNode)("button",{type:"submit",class:"btn btn-primary",disabled:n.value},[n.value?((0,l.openBlock)(),(0,l.createBlock)(r,{key:0})):((0,l.openBlock)(),(0,l.createElementBlock)("svg",p,m)),(0,l.createTextVNode)(" Install ")],8,u)],32)])])}}};var v={class:"list-group-item"},k={class:"row align-items-center"},g={class:"col"},f={class:"row align-items-center"},E={class:"col"},N={class:"mb-2"},V=["href"],w={class:"d-flex align-items-center gap-1"},b={class:"badge bg-green-lt"},B={class:"col-auto"},y=[(0,l.createStaticVNode)('<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 5l0 14"></path><path d="M18 11l-6 -6"></path><path d="M6 11l6 -6"></path></svg>',1)];const C={__name:"PluginItem",props:{plugin:{type:Object,required:!0}},emits:["updatePlugin"],setup:function(e){var t=function(e){return"v".concat(e.replace(/^v/,""))};return function(n,a){return(0,l.openBlock)(),(0,l.createElementBlock)("div",v,[(0,l.createElementVNode)("div",k,[(0,l.createElementVNode)("div",g,[(0,l.createElementVNode)("div",f,[(0,l.createElementVNode)("div",E,[(0,l.createElementVNode)("h4",N,[(0,l.createElementVNode)("a",{href:e.plugin.url,target:"_blank"},(0,l.toDisplayString)(e.plugin.name),9,V)]),(0,l.createElementVNode)("div",w,[(0,l.createElementVNode)("span",null,(0,l.toDisplayString)(t(e.plugin.version)),1),(0,l.createElementVNode)("span",b,(0,l.toDisplayString)(t(e.plugin.latest)),1)])]),(0,l.createElementVNode)("div",B,[(0,l.createElementVNode)("button",{class:"btn btn-sm btn-icon",onClick:a[0]||(a[0]=function(t){return n.$emit("updatePlugin",e.plugin)})},y)])])])])])}}};var x={class:"card"},M=(0,l.createElementVNode)("div",{class:"card-header"},[(0,l.createElementVNode)("div",null,[(0,l.createElementVNode)("h3",{class:"card-title"},[(0,l.createTextVNode)(" Updates "),(0,l.createElementVNode)("span",{class:"card-subtitle"}," Run a check for updates to your plugins. ")])])],-1),_={class:"card-body"},S=(0,l.createElementVNode)("strong",null,"Last update check:",-1),U={class:"text-muted"},T={class:"btn-list"},j=["disabled"],z={key:1,xmlns:"http://www.w3.org/2000/svg",class:"icon",width:"24",height:"24",viewBox:"0 0 24 24","stroke-width":"2",stroke:"currentColor",fill:"none","stroke-linecap":"round","stroke-linejoin":"round"},D=[(0,l.createElementVNode)("path",{stroke:"none",d:"M0 0h24v24H0z",fill:"none"},null,-1),(0,l.createElementVNode)("path",{d:"M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4"},null,-1),(0,l.createElementVNode)("path",{d:"M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4"},null,-1)],P=(0,l.createElementVNode)("svg",{xmlns:"http://www.w3.org/2000/svg",class:"icon",width:"24",height:"24",viewBox:"0 0 24 24","stroke-width":"2",stroke:"currentColor",fill:"none","stroke-linecap":"round","stroke-linejoin":"round"},[(0,l.createElementVNode)("path",{stroke:"none",d:"M0 0h24v24H0z",fill:"none"}),(0,l.createElementVNode)("path",{d:"M7 4v16l13 -8z"})],-1),H={key:0,class:"list-group list-group-flush mt-3"};const I={__name:"Updater",props:{lastUpdateCheck:String},setup:function(e){var t=(0,l.ref)(!1),n=(0,l.ref)([]),a=function(){t.value=!0,$httpClient.make().post(route("plugin-manager.check-for-updates")).then((function(e){var t=e.data;n.value=[],JSON.parse(t.data).installed.forEach((function(e){["semver-safe-update","update-possible"].includes(e["latest-status"])&&n.value.push(e)})),n.value.length<1&&Botble.showSuccess("Everything is up to date.")})).finally((function(){return t.value=!1}))},o=function(){},c=function(e){$httpClient.make().post(route("plugin-manager.update-plugin",{name:e.name})).then((function(){return window.location.reload()}))};return function(s,i){return(0,l.openBlock)(),(0,l.createElementBlock)("div",x,[M,(0,l.createElementVNode)("div",_,[(0,l.createElementVNode)("p",null,[S,(0,l.createTextVNode)(),(0,l.createElementVNode)("span",U,(0,l.toDisplayString)(e.lastUpdateCheck),1)]),(0,l.createElementVNode)("div",T,[(0,l.createElementVNode)("button",{type:"button",class:"btn",onClick:a,disabled:t.value},[t.value?((0,l.openBlock)(),(0,l.createBlock)(r,{key:0})):((0,l.openBlock)(),(0,l.createElementBlock)("svg",z,D)),(0,l.createTextVNode)(" Check for updates ")],8,j),(0,l.createElementVNode)("button",{type:"button",class:"btn",onClick:o},[P,(0,l.createTextVNode)(" Run global update ")])]),n.value.length>0?((0,l.openBlock)(),(0,l.createElementBlock)("div",H,[((0,l.openBlock)(!0),(0,l.createElementBlock)(l.Fragment,null,(0,l.renderList)(n.value,(function(e){return(0,l.openBlock)(),(0,l.createBlock)(C,{key:e.name,plugin:e,onUpdatePlugin:c},null,8,["plugin"])})),128))])):(0,l.createCommentVNode)("",!0)])])}}},$={__name:"PluginManager",props:{lastUpdateCheck:String},setup:function(e){return function(t,n){return(0,l.openBlock)(),(0,l.createElementBlock)("div",null,[(0,l.createVNode)(h),(0,l.createVNode)(I,{"last-update-check":e.lastUpdateCheck},null,8,["last-update-check"])])}}}}}]);