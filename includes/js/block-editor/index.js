!function c(i,l,u){function a(t,e){if(!l[t]){if(!i[t]){var r="function"==typeof require&&require;if(!e&&r)return r(t,!0);if(s)return s(t,!0);var n=new Error("Cannot find module '"+t+"'");throw n.code="MODULE_NOT_FOUND",n}var o=l[t]={exports:{}};i[t][0].call(o.exports,function(e){return a(i[t][1][e]||e)},o,o.exports,c,i,l,u)}return l[t].exports}for(var s="function"==typeof require&&require,e=0;e<u.length;e++)a(u[e]);return a}({1:[function(e,t,r){"use strict";var n=wp.element.Fragment,o=wp.editor.BlockControls,c=wp.components,i=c.SVG,l=c.Path;wp.hooks.addFilter("editor.BlockEdit","upfront-shortcodes/with-insert-shortcode-button",function(t){return function(e){return-1===SUBlockEditorSettings.supportedBlocks.indexOf(e.name)?React.createElement(t,e):React.createElement(n,null,React.createElement(t,e),React.createElement(o,{controls:[{icon:React.createElement(i,{viewBox:"0 0 20 20",xmlns:"http://www.w3.org/2000/svg"},React.createElement(l,{d:"m3 3h5.833v2.333h-3.5v9.334h3.5v2.333h-5.833zm8.167 0h5.833v14h-5.833v-2.333h3.5v-9.334h-3.5z"})),title:SUBlockEditorL10n.insertShortcode,onClick:function(){window.SUG.App.insert("block",{props:e})}}]}))}})},{}]},{},[1]);
//# sourceMappingURL=index.js.map
