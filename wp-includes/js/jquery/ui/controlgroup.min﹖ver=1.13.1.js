/*!
 * jQuery UI Controlgroup 1.13.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */
!function(t){"use strict";"function"==typeof define&&define.amd?define(["jquery","./core"],t):t(jQuery)}(function(r){"use strict";var s=/ui-corner-([a-z]){2,6}/g;return r.widget("ui.controlgroup",{version:"1.13.1",defaultElement:"<div>",options:{direction:"horizontal",disabled:null,onlyVisible:!0,items:{button:"input[type=button], input[type=submit], input[type=reset], button, a",controlgroupLabel:".ui-controlgroup-label",checkboxradio:"input[type='checkbox'], input[type='radio']",selectmenu:"select",spinner:".ui-spinner-input"}},_create:function(){this._enhance()},_enhance:function(){this.element.attr("role","toolbar"),this.refresh()},_destroy:function(){this._callChildMethod("destroy"),this.childWidgets.removeData("ui-controlgroup-data"),this.element.removeAttr("role"),this.options.items.controlgroupLabel&&this.element.find(this.options.items.controlgroupLabel).find(".ui-controlgroup-label-contents").contents().unwrap()},_initWidgets:function(){var s=this,l=[];r.each(this.options.items,function(n,t){var e,o={};if(t)return"controlgroupLabel"===n?((e=s.element.find(t)).each(function(){var t=r(this);t.children(".ui-controlgroup-label-contents").length||t.contents().wrapAll("<span class='ui-controlgroup-label-contents'></span>")}),s._addClass(e,null,"ui-widget ui-widget-content ui-state-default"),void(l=l.concat(e.get()))):void(r.fn[n]&&(o=s["_"+n+"Options"]?s["_"+n+"Options"]("middle"):{classes:{}},s.element.find(t).each(function(){var t=r(this),e=t[n]("instance"),i=r.widget.extend({},o);"button"===n&&t.parent(".ui-spinner").length||((e=e||t[n]()[n]("instance"))&&(i.classes=s._resolveClassesValues(i.classes,e)),t[n](i),i=t[n]("widget"),r.data(i[0],"ui-controlgroup-data",e||t[n]("instance")),l.push(i[0]))})))}),this.childWidgets=r(r.uniqueSort(l)),this._addClass(this.childWidgets,"ui-controlgroup-item")},_callChildMethod:function(e){this.childWidgets.each(function(){var t=r(this).data("ui-controlgroup-data");t&&t[e]&&t[e]()})},_updateCornerClass:function(t,e){e=this._buildSimpleOptions(e,"label").classes.label;this._removeClass(t,null,"ui-corner-top ui-corner-bottom ui-corner-left ui-corner-right ui-corner-all"),this._addClass(t,null,e)},_buildSimpleOptions:function(t,e){var i="vertical"===this.options.direction,n={classes:{}};return n.classes[e]={middle:"",first:"ui-corner-"+(i?"top":"left"),last:"ui-corner-"+(i?"bottom":"right"),only:"ui-corner-all"}[t],n},_spinnerOptions:function(t){t=this._buildSimpleOptions(t,"ui-spinner");return t.classes["ui-spinner-up"]="",t.classes["ui-spinner-down"]="",t},_buttonOptions:function(t){return this._buildSimpleOptions(t,"ui-button")},_checkboxradioOptions:function(t){return this._buildSimpleOptions(t,"ui-checkboxradio-label")},_selectmenuOptions:function(t){var e="vertical"===this.options.direction;return{width:e&&"auto",classes:{middle:{"ui-selectmenu-button-open":"","ui-selectmenu-button-closed":""},first:{"ui-selectmenu-button-open":"ui-corner-"+(e?"top":"tl"),"ui-selectmenu-button-closed":"ui-corner-"+(e?"top":"left")},last:{"ui-selectmenu-button-open":e?"":"ui-corner-tr","ui-selectmenu-button-closed":"ui-corner-"+(e?"bottom":"right")},only:{"ui-selectmenu-button-open":"ui-corner-top","ui-selectmenu-button-closed":"ui-corner-all"}}[t]}},_resolveClassesValues:function(i,n){var o={};return r.each(i,function(t){var e=n.options.classes[t]||"",e=String.prototype.trim.call(e.replace(s,""));o[t]=(e+" "+i[t]).replace(/\s+/g," ")}),o},_setOption:function(t,e){"direction"===t&&this._removeClass("ui-controlgroup-"+this.options.direction),this._super(t,e),"disabled"===t?this._callChildMethod(e?"disable":"enable"):this.refresh()},refresh:function(){var o,s=this;this._addClass("ui-controlgroup ui-controlgroup-"+this.options.direction),"horizontal"===this.options.direction&&this._addClass(null,"ui-helper-clearfix"),this._initWidgets(),o=this.childWidgets,(o=this.options.onlyVisible?o.filter(":visible"):o).length&&(r.each(["first","last"],function(t,e){var i,n=o[e]().data("ui-controlgroup-data");n&&s["_"+n.widgetName+"Options"]?((i=s["_"+n.widgetName+"Options"](1===o.length?"only":e)).classes=s._resolveClassesValues(i.classes,n),n.element[n.widgetName](i)):s._updateCornerClass(o[e](),e)}),this._callChildMethod("refresh"))}})});