$(document).ready(function() {

	$("#shape1").on("click", function(e){
		  e.preventDefault();
		$("#rectangleForm").hide();
		$("#squareForm").hide();
		$("#circleForm").show();
	
	})

	$("#shape2").on("click", function(e){
		 e.preventDefault();
		$("#circleForm").hide();
		$("#rectangleForm").hide();
		$("#squareForm").show();
	
	})

	$("#shape3").on("click", function(e){
		 e.preventDefault();
		$("#circleForm").hide();
		$("#squareForm").hide();
		$("#rectangleForm").show();
		
		})

	});