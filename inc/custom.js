$(document).ready(function(){ 
	
	$("#basketItemsWrap li:first").hide();
	$("#slidingTopContent").hide();
	
	$("#slidingTopTrigger").live("click", function(event) {
      	$("#slidingTopContent").slideToggle("slow", function(){
			if ($("#slidingTopContent").is(":visible")) {
				$("#slidingTopFooterLeft").html('<img src="images/arrow-up.png" alt="Hide Basket" /> <a href="no-js.htm" onclick="return false;" id="slidingTopTrigger">Hide Basket</a>');
			} else {
				$("#slidingTopFooterLeft").html('<img src="images/arrow-down.png" alt="Show Basket" /> <a href="no-js.htm" onclick="return false;" id="slidingTopTrigger">Show Basket</a>');
			}
		});
    }); 
	





	$(".productPriceWrapRight a img").click(function() {
		var productIDValSplitter 	= (this.id).split("_");
		var productIDVal 			= productIDValSplitter[1];

		
		if ($("#slidingTopContent").is(":visible")) {

			$("#notificationsLoader").html('<img src="images/loader.gif">');
		
			$.ajax({  
			type: "POST",  
			url: "inc/functions.php",  
			data: { productID: productIDVal, action: "addToBasket"},  
			success: function(theResponse) {
				
				if( $("#productID_" + productIDVal).length > 0){
					$("#productID_" + productIDVal).animate({ opacity: 0 }, 500);
					$("#productID_" + productIDVal).before(theResponse).remove();
					$("#productID_" + productIDVal).animate({ opacity: 0 }, 500);
					$("#productID_" + productIDVal).animate({ opacity: 1 }, 500);
					$("#notificationsLoader").empty();
					
				} else {
					$("#basketItemsWrap li:first").before(theResponse);
					$("#basketItemsWrap li:first").hide();
					$("#basketItemsWrap li:first").show("slow");  
					$("#notificationsLoader").empty();			
				}
				
			}  
			}); 

		} else {
			
			$("#slidingTopContent").slideToggle("slow", function(){		
																 
				$("#slidingTopFooterLeft").html('<img src="images/arrow-up.png" alt="Hide Basket" /> <a href="aaa.htm" onclick="return false;" id="slidingTopTrigger">Hide Basket</a>');
				$("#notificationsLoader").html('<img src="images/loader.gif">');
			
				$.ajax({  
				type: "POST",  
				url: "inc/functions.php",  
				data: { productID: productIDVal, action: "addToBasket"},  
				success: function(theResponse) {
					
					if( $("#productID_" + productIDVal).length > 0){
						$("#productID_" + productIDVal).animate({ opacity: 0 }, 500);
						$("#productID_" + productIDVal).before(theResponse).remove();
						$("#productID_" + productIDVal).animate({ opacity: 0 }, 500);
						$("#productID_" + productIDVal).animate({ opacity: 1 }, 500);
						$("#notificationsLoader").empty();
						
					} else {
						$("#basketItemsWrap li:first").before(theResponse);
						$("#basketItemsWrap li:first").hide();
						$("#basketItemsWrap li:first").show("slow");  
						$("#notificationsLoader").empty();			
					}
					
				}  
				}); 
				
				
				$("#slidingTopTrigger").fadeTo(4000, 1, function(){
					$("#slidingTopContent").slideToggle("slow", function(){
						$("#slidingTopFooterLeft").html('<img src="images/arrow-down.png" alt="Show Basket" /> <a href="aaa.htm" onclick="return false;" id="slidingTopTrigger">Show Basket</a>');												 
					});
					
				});

			});												 
		}
				
	});
	
	
	
	$("#basketItemsWrap li img").live("click", function(event) { 
		var productIDValSplitter 	= (this.id).split("_");
		var productIDVal 			= productIDValSplitter[1];	
	
		$("#notificationsLoader").html('<img src="images/loader.gif">');
	
		$.ajax({  
		type: "POST",  
		url: "inc/functions.php",  
		data: { productID: productIDVal, action: "deleteFromBasket"},  
		success: function(theResponse) {
			
			$("#productID_" + productIDVal).hide("slow",  function() {
				$(this).remove();
			});
			$("#notificationsLoader").empty();
		
		}
					
		});  	
		
	});

});
