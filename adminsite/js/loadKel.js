var sq;
$(document).ready(function(){
	function MakeArray(n){
		this.length=n;
		for(var i=1; i<=n; i++)
			this[i]=0;
		return this
	}
	
	nikel = new MakeArray(30);
		
		$("#nikel1").change(function(){
   	    	nikel[1] = $("#nikel1").val();
	
			$("#statproses").html("Loading data penduduk ...");
			$("#loadgif").show();
			$("#kel1").load("get_kel.php","nikel="+nikel[1]);
			$("#statproses").html("");
			$("#loadgif").hide();
   		});
		$("#nikel2").change(function(){
   	    	nikel[2] = $("#nikel2").val();
	
			$("#statproses").html("Loading data penduduk ...");
			$("#loadgif").show();
			$("#kel2").load("get_kel.php","nikel="+nikel[2]);
			$("#statproses").html("");
			$("#loadgif").hide();
   		});
		$("#nikel3").change(function(){
   	    	nikel[3] = $("#nikel3").val();
	
			$("#statproses").html("Loading data penduduk ...");
			$("#loadgif").show();
			$("#kel3").load("get_kel.php","nikel="+nikel[3]);
			$("#statproses").html("");
			$("#loadgif").hide();
   		});
		$("#nikel4").change(function(){
   	    	nikel[4] = $("#nikel4").val();
	
			$("#statproses").html("Loading data penduduk ...");
			$("#loadgif").show();
			$("#kel4").load("get_kel.php","nikel="+nikel[4]);
			$("#statproses").html("");
			$("#loadgif").hide();
   		});
		$("#nikel5").change(function(){
   	    	nikel[5] = $("#nikel5").val();
	
			$("#statproses").html("Loading data penduduk ...");
			$("#loadgif").show();
			$("#kel5").load("get_kel.php","nikel="+nikel[5]);
			$("#statproses").html("");
			$("#loadgif").hide();
   		});
		$("#nikel6").change(function(){
   	    	nikel[6] = $("#nikel6").val();
	
			$("#statproses").html("Loading data penduduk ...");
			$("#loadgif").show();
			$("#kel6").load("get_kel.php","nikel="+nikel[6]);
			$("#statproses").html("");
			$("#loadgif").hide();
   		});
		$("#nikel7").change(function(){
   	    	nikel[7] = $("#nikel7").val();
	
			$("#statproses").html("Loading data penduduk ...");
			$("#loadgif").show();
			$("#kel7").load("get_kel.php","nikel="+nikel[7]);
			$("#statproses").html("");
			$("#loadgif").hide();
   		});
		$("#nikel8").change(function(){
   	    	nikel[8] = $("#nikel8").val();
	
			$("#statproses").html("Loading data penduduk ...");
			$("#loadgif").show();
			$("#kel8").load("get_kel.php","nikel="+nikel[8]);
			$("#statproses").html("");
			$("#loadgif").hide();
   		});
		$("#nikel9").change(function(){
   	    	nikel[9] = $("#nikel9").val();
	
			$("#statproses").html("Loading data penduduk ...");
			$("#loadgif").show();
			$("#kel9").load("get_kel.php","nikel="+nikel[9]);
			$("#statproses").html("");
			$("#loadgif").hide();
   		});
		$("#nikel10").change(function(){
   	    	nikel[10] = $("#nikel10").val();
	
			$("#statproses").html("Loading data penduduk ...");
			$("#loadgif").show();
			$("#kel10").load("get_kel.php","nikel="+nikel[10]);
			$("#statproses").html("");
			$("#loadgif").hide();
   		});
		$("#addkel1").click(function(){
			sq = $("#sq").val();
			$("#tkel1").load("add_kel.php","sq="+sq);
   		});
		$("#addkel2").click(function(){
			sq = $("#sq").val();
			$("#tkel2").load("add_kel.php","sq="+sq);
   		});
		$("#addkel3").click(function(){
			sq = $("#sq").val();
			$("#tkel3").load("add_kel.php","sq="+sq);
   		});
		$("#addkel4").click(function(){
			sq = $("#sq").val();
			$("#tkel4").load("add_kel.php","sq="+sq);
   		});
		$("#addkel5").click(function(){
			sq = $("#sq").val();
			$("#tkel5").load("add_kel.php","sq="+sq);
   		});
		$("#addkel6").click(function(){
			sq = $("#sq").val();
			$("#tkel6").load("add_kel.php","sq="+sq);
   		});
		$("#addkel7").click(function(){
			sq = $("#sq").val();
			$("#tkel7").load("add_kel.php","sq="+sq);
   		});
		$("#addkel8").click(function(){
			sq = $("#sq").val();
			$("#tkel8").load("add_kel.php","sq="+sq);
   		});
		$("#addkel9").click(function(){
			sq = $("#sq").val();
			$("#tkel9").load("add_kel.php","sq="+sq);
   		});
		$("#addkel10").click(function(){
			sq = $("#sq").val();
			$("#tkel10").load("add_kel.php","sq="+sq);
   		});
});