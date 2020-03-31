

!function(global,factory){if("function"==typeof define&&define.amd)define("/Plugin/slidepanel",["exports","jquery","Plugin"],factory);else if("undefined"!=typeof exports)factory(exports,require("jquery"),require("Plugin"));else{var mod={exports:{}};factory(mod.exports,global.jQuery,global.Plugin),global.PluginSlidepanel=mod.exports}}(this,function(exports,_jquery,_Plugin2){"use strict";Object.defineProperty(exports,"__esModule",{value:!0});var _jquery2=babelHelpers.interopRequireDefault(_jquery),_Plugin3=babelHelpers.interopRequireDefault(_Plugin2),SlidePanel=function(_Plugin){function SlidePanel(){return babelHelpers.classCallCheck(this,SlidePanel),babelHelpers.possibleConstructorReturn(this,(SlidePanel.__proto__||Object.getPrototypeOf(SlidePanel)).apply(this,arguments))}return babelHelpers.inherits(SlidePanel,_Plugin),babelHelpers.createClass(SlidePanel,[{key:"getName",value:function(){return"slidePanel"}},{key:"render",value:function(){void 0!==_jquery2.default.slidePanel&&(this.options.url||(this.options.url=this.$el.attr("href"),this.options.url=this.options.url&&this.options.url.replace(/.*(?=#[^\s]*$)/,"")),this.$el.data("slidePanelWrapAPI",this))}},{key:"show",value:function(){var options=this.options;_jquery2.default.slidePanel.show({url:options.url},options)}}],[{key:"getDefaults",value:function(){return{closeSelector:".slidePanel-close",mouseDragHandler:".slidePanel-handler",loading:{template:function(options){return'<div class="'+options.classes.loading+'">\n                    <div class="loader loader-default"></div>\n                  </div>'},showCallback:function(options){this.$el.addClass(options.classes.loading+"-show")},hideCallback:function(options){this.$el.removeClass(options.classes.loading+"-show")}}}}},{key:"api",value:function(){return"click|show"}}]),SlidePanel}(_Plugin3.default);_Plugin3.default.register("slidePanel",SlidePanel),exports.default=SlidePanel});