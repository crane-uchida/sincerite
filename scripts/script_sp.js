// JavaScript Document

$(function(){
	
	
	$("#sp_nav_btn").click(function(){
		
		$(".menu_sp").slideToggle("slow");
	});
	
	
	$("#main_menu_01").click(function(){
		
		$("#mm01_second").toggleClass("second_up");
	});
	
	$("#main_menu_02").click(function(){
		
		$("#mm02_second").toggleClass("second_up");
	});
	
	$("#main_menu_03").click(function(){
		
		$("#mm03_second").toggleClass("second_up");
	});
	
	
});