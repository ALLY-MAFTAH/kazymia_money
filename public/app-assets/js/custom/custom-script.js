/*================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 5.0
	Author: PIXINVENT
	Author URL: https://themeforest.net/user/pixinvent/portfolio
================================================================================

NOTE:
------
PLACE HERE YOUR OWN JS CODES AND IF NEEDED.
WE WILL RELEASE FUTURE UPDATES SO IN ORDER TO NOT OVERWRITE YOUR CUSTOM SCRIPT IT'S BETTER LIKE THIS. */
// $.noConflict();

var baseUrl = "";
var userLocale = "";
var _htmlTag = "";
var _base = "";
var globalLang = {};


var alertSettings = {
		"info"		: { "icon"	: "fa fa-info-circle" }, 
		"success"	: { "icon"	: "fa fa-check-circle" }, 
		"warning"	: { "icon"	: "fa fa-exclamation-circle" }, 
		"danger"	: { "icon"	: "fa fa-minus-circle" }, 
};


$(document).ready(function() {
	
	_htmlTag = $("html");
	userLocale = _htmlTag.attr("lang");
	userLocale = userLocale.toLowerCase();

	_base = $("base");
	if ( _base ) {
		baseUrl = _base.attr("href");
	}
	
	

	$("ul.tabs").tabs();
	
	
	
	$("a.arptc-lang").on("click", function(){
		var lang = $(this).attr("id").replace("arptc-lang-", "");
		
		var changeLangCall = $.ajax({
			url: baseUrl + "system/changelanguage", 
			method: "POST",
			data: { locale: lang, authorize: true },
			dataType: "json",
		});

		changeLangCall.done( function ( data ) {
			window.location.reload(true);
		});
		
		changeLangCall.fail(function( jqXHR, textStatus ) {
			alert(jqXHR.responseText);
			alert(textStatus);
			
			// $('#pleaseWaitDialog').modal("hide");
		});
	});
	
	
	
	$(".change-current-account").on("click", function(){
		var _listItem = $(this);
		var _accountId = _listItem.data("account");
		
		var switchAccount = $.ajax({
			url: baseUrl + "system/switch-account", 
			method: "POST",
			data: { account: _accountId, authorize: true },
			dataType: "json",
		});
		
		switchAccount.done( function ( data ) {
			window.location.reload(true);
		});
		
		switchAccount.fail(function( jqXHR, textStatus ) {
			alert(jqXHR.responseText);
			alert(textStatus);
		});
	})
	
	
	
	var checkbox = $("table tbody tr th input");
	var selectAll = $("table input.select-all");
	
	checkbox.on("click", function () {
		$(this).parent().parent().parent().toggleClass("selected");
	})
	
	checkbox.on("click", function () {
		if ($(this).attr("checked")) {
			$(this).attr("checked", false);
		} 
		else {
			$(this).attr("checked", true);
		}
	})
	
	// Select Every Row on the table containing the checkbox.
	selectAll.on("click", function () {
		var _table = $(this);
		var _tableId = _table.data("table");
		
		checkbox = $("table#" + _tableId + " tbody tr th input");
		
		$(this).toggleClass("clicked");
		if (selectAll.hasClass("clicked")) {
			$("#" + _tableId + " tbody tr").addClass("selected");
		} 
		else {
			$("#" + _tableId + " tbody tr").removeClass("selected");
		}
		
		if ($("#" + _tableId + " tbody tr").hasClass("selected")) {
			checkbox.prop("checked", true);
		} 
		else {
			checkbox.prop("checked", false);
		}
	})
	
	
	
	$(".settings-webui-orientation").on("change", function(){
		var _orientation = $(this).val();
		
		var changeWebUI = $.ajax({
			url: baseUrl + "system/change-webui", 
			method: "POST",
			data: { orientation: _orientation, authorize: true },
			dataType: "json",
		});

		changeWebUI.done( function ( data ) {
			window.location.reload(true);
		});
		
		changeWebUI.fail(function( jqXHR, textStatus ) {
			alert(jqXHR.responseText);
			alert(textStatus);
		});
	});
	
	
});


/*

$(function() {

	_htmlTag = $("html");
	userLocale = _htmlTag.attr("lang");
	userLocale = userLocale.toLowerCase();

	_base = $("base");
	if ( _base ) {
		baseUrl = _base.attr("href");
	}
	
	
	$("a.arptc-lang").on("click", function(){
		var lang = $(this).attr("id").replace("arptc-lang-", "");
		
		var changeLangCall = $.ajax({
			url: baseUrl + "system/changelanguage", 
			method: "POST",
			data: { locale: lang, authorize: true },
			dataType: "json",
		});

		changeLangCall.done( function ( data ) {
			window.location.reload(true);
		});
		
		changeLangCall.fail(function( jqXHR, textStatus ) {
			alert(jqXHR.responseText);
			alert(textStatus);
			
			// $('#pleaseWaitDialog').modal("hide");
		});
	});

});

*/
