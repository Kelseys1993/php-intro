$(document).ready(function() {

	$("#shape1").on("click", function(e){
		  e.preventDefault();
		  apc_clear_cache();
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


// 	$("#submit").submit(function(e) {
// 		 window.location.reload(false); 
//     $("#circleForm").css("display", "block");
   
   
// })


	});