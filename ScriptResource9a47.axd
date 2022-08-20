﻿// (c) 2010 CodePlex Foundation
(function(){var b="ExtendedFilteredTextBox";function a(){var c="filtered",b="processKey",d="keypress",a=null;Type.registerNamespace("Sys.Extended.UI");Sys.Extended.UI.FilteredTextBoxBehavior=function(c){var b=this;Sys.Extended.UI.FilteredTextBoxBehavior.initializeBase(b,[c]);b._keypressHandler=a;b._changeHandler=a;b._intervalID=a;b._filterType=Sys.Extended.UI.FilterTypes.Custom;b._filterMode=Sys.Extended.UI.FilterModes.ValidChars;b._validChars=a;b._invalidChars=a;b._filterInterval=250;b.charTypes={};b.charTypes.LowercaseLetters="abcdefghijklmnopqrstuvwxyz";b.charTypes.UppercaseLetters="ABCDEFGHIJKLMNOPQRSTUVWXYZ";b.charTypes.Numbers="0123456789"};Sys.Extended.UI.FilteredTextBoxBehavior.prototype={initialize:function(){var a=this;Sys.Extended.UI.FilteredTextBoxBehavior.callBaseMethod(a,"initialize");var b=a.get_element();a._keypressHandler=Function.createDelegate(a,a._onkeypress);$addHandler(b,d,a._keypressHandler);a._changeHandler=Function.createDelegate(a,a._onchange);$addHandler(b,"change",a._changeHandler);var c=Function.createDelegate(a,a._intervalCallback);a._intervalID=window.setInterval(c,a._filterInterval)},dispose:function(){var b=this,c=b.get_element();$removeHandler(c,d,b._keypressHandler);b._keypressHandler=a;$removeHandler(c,"change",b._changeHandler);b._changeHandler=a;window.clearInterval(b._intervalID);Sys.Extended.UI.FilteredTextBoxBehavior.callBaseMethod(b,"dispose")},_getValidChars:function(){var a=this;if(a._validChars)return a._validChars;a._validChars="";for(type in a.charTypes){var b=Sys.Extended.UI.FilterTypes.toString(a._filterType);if(b.indexOf(type)!=-1)a._validChars+=a.charTypes[type]}return a._validChars},_getInvalidChars:function(){var a=this;if(!a._invalidChars)a._invalidChars=a.charTypes.Custom;return a._invalidChars},_onkeypress:function(a){var b;if((a.rawEvent.charCode==0||a.rawEvent.keyCode==a.rawEvent.which&&a.rawEvent.charCode==undefined)&&(a.rawEvent.keyCode==Sys.UI.Key.pageUp||a.rawEvent.keyCode==Sys.UI.Key.pageDown||a.rawEvent.keyCode==Sys.UI.Key.up||a.rawEvent.keyCode==Sys.UI.Key.down||a.rawEvent.keyCode==Sys.UI.Key.left||a.rawEvent.keyCode==Sys.UI.Key.right||a.rawEvent.keyCode==Sys.UI.Key.home||a.rawEvent.keyCode==Sys.UI.Key.end||a.rawEvent.keyCode==46)||a.ctrlKey)return;if(a.rawEvent.keyIdentifier){if(a.rawEvent.ctrlKey||a.rawEvent.altKey||a.rawEvent.metaKey)return;if(a.rawEvent.keyIdentifier.substring(0,2)!="U+")return;b=a.rawEvent.charCode;if(b==63272)return}else b=a.charCode;if(b&&b>=32){var c=String.fromCharCode(b);!this._processKey(c)&&a.preventDefault()}},_processKey:function(c){var b=this,a="",d=false;if(b._filterMode==Sys.Extended.UI.FilterModes.ValidChars){a=b._getValidChars();d=a&&a.length>0&&a.indexOf(c)==-1}else{a=b._getInvalidChars();d=a&&a.length>0&&a.indexOf(c)>-1}var e=new Sys.Extended.UI.FilteredTextBoxProcessKeyEventArgs(c,Sys.Extended.UI.TextBoxWrapper.get_Wrapper(b.get_element()).get_Value(),d);b.raiseProcessKey(e);if(e.get_allowKey())return true;b.raiseFiltered(new Sys.Extended.UI.FilteredTextBoxEventArgs(c));return false},_onchange:function(){for(var b=Sys.Extended.UI.TextBoxWrapper.get_Wrapper(this.get_element()),d=b.get_Value()||"",c=new Sys.StringBuilder,a=0;a<d.length;a++){var e=d.substring(a,a+1);this._processKey(e)&&c.append(e)}b.get_Value()!=c.toString()&&b.set_Value(c.toString())},_intervalCallback:function(){this._changeHandler()},get_ValidChars:function(){return this.charTypes.Custom},set_ValidChars:function(c){var b=this;if(b._validChars!=a||b.charTypes.Custom!=c){b.charTypes.Custom=c;b._validChars=a;b.raisePropertyChanged("ValidChars")}},get_InvalidChars:function(){return this.charTypes.Custom},set_InvalidChars:function(c){var b=this;if(b._invalidChars!=a||b.charTypes.Custom!=c){b.charTypes.Custom=c;b._invalidChars=a;b.raisePropertyChanged("InvalidChars")}},get_FilterType:function(){return this._filterType},set_FilterType:function(c){var b=this;if(b._validChars!=a||b._filterType!=c){b._filterType=c;b._validChars=a;b.raisePropertyChanged("FilterType")}},get_FilterMode:function(){return this._filterMode},set_FilterMode:function(c){var b=this;if(b._validChars!=a||b._invalidChars!=a||b._filterMode!=c){b._filterMode=c;b._validChars=a;b._invalidChars=a;b.raisePropertyChanged("FilterMode")}},get_FilterInterval:function(){return this._filterInterval},set_FilterInterval:function(a){if(this._filterInterval!=a){this._filterInterval=a;this.raisePropertyChanged("FilterInterval")}},add_processKey:function(a){this.get_events().addHandler(b,a)},remove_processKey:function(a){this.get_events().removeHandler(b,a)},raiseProcessKey:function(c){var a=this.get_events().getHandler(b);a&&a(this,c)},add_filtered:function(a){this.get_events().addHandler(c,a)},remove_filtered:function(a){this.get_events().removeHandler(c,a)},raiseFiltered:function(b){var a=this.get_events().getHandler(c);a&&a(this,b)}};Sys.Extended.UI.FilteredTextBoxBehavior.registerClass("Sys.Extended.UI.FilteredTextBoxBehavior",Sys.Extended.UI.BehaviorBase);Sys.registerComponent(Sys.Extended.UI.FilteredTextBoxBehavior,{name:"filteredTextBox"});Sys.Extended.UI.FilterTypes=function(){throw Error.invalidOperation();};Sys.Extended.UI.FilterTypes.prototype={Custom:1,Numbers:2,UppercaseLetters:4,LowercaseLetters:8};Sys.Extended.UI.FilterTypes.registerEnum("Sys.Extended.UI.FilterTypes",true);Sys.Extended.UI.FilterModes=function(){throw Error.invalidOperation();};Sys.Extended.UI.FilterModes.prototype={ValidChars:1,InvalidChars:2};Sys.Extended.UI.FilterModes.registerEnum("Sys.Extended.UI.FilterModes",true);Sys.Extended.UI.FilteredTextBoxProcessKeyEventArgs=function(d,c,b){var a=this;Sys.Extended.UI.FilteredTextBoxProcessKeyEventArgs.initializeBase(a);a._key=d;a._text=c;a._shouldFilter=b;a._allowKey=!b};Sys.Extended.UI.FilteredTextBoxProcessKeyEventArgs.prototype={get_key:function(){return this._key},get_text:function(){return this._text},get_shouldFilter:function(){return this._shouldFilter},get_allowKey:function(){return this._allowKey},set_allowKey:function(a){this._allowKey=a}};Sys.Extended.UI.FilteredTextBoxProcessKeyEventArgs.registerClass("Sys.Extended.UI.FilteredTextBoxProcessKeyEventArgs",Sys.EventArgs);Sys.Extended.UI.FilteredTextBoxEventArgs=function(a){Sys.Extended.UI.FilteredTextBoxEventArgs.initializeBase(this);this._key=a};Sys.Extended.UI.FilteredTextBoxEventArgs.prototype={get_key:function(){return this._key}};Sys.Extended.UI.FilteredTextBoxEventArgs.registerClass("Sys.Extended.UI.FilteredTextBoxEventArgs",Sys.EventArgs)}if(window.Sys&&Sys.loader)Sys.loader.registerScript(b,["ExtendedBase","ExtendedCommon"],a);else a()})();