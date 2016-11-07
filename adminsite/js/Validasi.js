// JavaScript Document
		$(document).ready(function(){
			$('#addpenyakit').submit(function(e) {
				cekaddpenyakit();
				e.preventDefault();
			});
			$('#editpenyakit').submit(function(e) {
				cekeditpenyakit();
				e.preventDefault();
			});
			$('#addgejala').submit(function(e) {
				cekaddgejala();
				e.preventDefault();
			});
			$('#editgejala').submit(function(e) {
				cekeditgejala();
				e.preventDefault();
			});
			$('#addgp').submit(function(e) {
				cekaddgp();
				e.preventDefault();
			});
			$('#editgp').submit(function(e) {
				cekeditgp();
				e.preventDefault();
			});
			$('#addobat').submit(function(e) {
				cekaddobat();
				e.preventDefault();
			});
			$('#editobat').submit(function(e) {
				cekeditobat();
				e.preventDefault();
			});
			$('#addop').submit(function(e) {
				cekaddop();
				e.preventDefault();
			});
			$('#editop').submit(function(e) {
				cekeditop();
				e.preventDefault();
			});
			$('#addpertolongan').submit(function(e) {
				cekaddpertolongan();
				e.preventDefault();
			});
			$('#release').submit(function(e) {
				cekaddrelease();
				e.preventDefault();
			});
			$('#editpertolongan').submit(function(e) {
				cekeditpertolongan();
				e.preventDefault();
			});
			$('#ubahpassword').submit(function(e) {
				cekubahpassword();
				e.preventDefault();
			});
		});

		function cekaddpenyakit()
		{
			hideshow('loading',1);
			error(0);
	
			$.ajax({
				type: "POST",
				url: "do_act.php",
				data: $('#addpenyakit').serialize(),
				dataType: "json",
				success: function(msg){
			
					if(parseInt(msg.status)==1)
					{
						window.location=msg.txt;
					}
					else if(parseInt(msg.status)==0)
					{
						error(1,msg.txt);
					}
			
					hideshow('loading',0);
				}
			});
		}
		
		function cekeditpenyakit()
		{
			hideshow('loading',1);
			error(0);
	
			$.ajax({
				type: "POST",
				url: "do_act.php",
				data: $('#editpenyakit').serialize(),
				dataType: "json",
				success: function(msg){
			
					if(parseInt(msg.status)==1)
					{
						window.location=msg.txt;
					}
					else if(parseInt(msg.status)==0)
					{
						error(1,msg.txt);
					}
			
					hideshow('loading',0);
				}
			});
		}
		
		function cekaddgejala()
		{
			hideshow('loading',1);
			error(0);
	
			$.ajax({
				type: "POST",
				url: "do_act.php",
				data: $('#addgejala').serialize(),
				dataType: "json",
				success: function(msg){
			
					if(parseInt(msg.status)==1)
					{
						window.location=msg.txt;
					}
					else if(parseInt(msg.status)==0)
					{
						error(1,msg.txt);
					}
			
					hideshow('loading',0);
				}
			});
		}
		
		function cekeditgejala()
		{
			hideshow('loading',1);
			error(0);
	
			$.ajax({
				type: "POST",
				url: "do_act.php",
				data: $('#editgejala').serialize(),
				dataType: "json",
				success: function(msg){
			
					if(parseInt(msg.status)==1)
					{
						window.location=msg.txt;
					}
					else if(parseInt(msg.status)==0)
					{
						error(1,msg.txt);
					}
			
					hideshow('loading',0);
				}
			});
		}
		
		function cekaddgp()
		{
			hideshow('loading',1);
			error(0);
	
			$.ajax({
				type: "POST",
				url: "do_act.php",
				data: $('#addgp').serialize(),
				dataType: "json",
				success: function(msg){
			
					if(parseInt(msg.status)==1)
					{
						window.location=msg.txt;
					}
					else if(parseInt(msg.status)==0)
					{
						error(1,msg.txt);
					}
			
					hideshow('loading',0);
				}
			});
		}
		
		function cekeditgp()
		{
			hideshow('loading',1);
			error(0);
	
			$.ajax({
				type: "POST",
				url: "do_act.php",
				data: $('#editgp').serialize(),
				dataType: "json",
				success: function(msg){
			
					if(parseInt(msg.status)==1)
					{
						window.location=msg.txt;
					}
					else if(parseInt(msg.status)==0)
					{
						error(1,msg.txt);
					}
			
					hideshow('loading',0);
				}
			});
		}
		
		function cekaddobat()
		{
			hideshow('loading',1);
			error(0);
	
			$.ajax({
				type: "POST",
				url: "do_act.php",
				data: $('#addobat').serialize(),
				dataType: "json",
				success: function(msg){
			
					if(parseInt(msg.status)==1)
					{
						window.location=msg.txt;
					}
					else if(parseInt(msg.status)==0)
					{
						error(1,msg.txt);
					}
			
					hideshow('loading',0);
				}
			});
		}
		
		function cekeditobat()
		{
			hideshow('loading',1);
			error(0);
	
			$.ajax({
				type: "POST",
				url: "do_act.php",
				data: $('#editobat').serialize(),
				dataType: "json",
				success: function(msg){
			
					if(parseInt(msg.status)==1)
					{
						window.location=msg.txt;
					}
					else if(parseInt(msg.status)==0)
					{
						error(1,msg.txt);
					}
			
					hideshow('loading',0);
				}
			});
		}
		
		function cekaddop()
		{
			hideshow('loading',1);
			error(0);
	
			$.ajax({
				type: "POST",
				url: "do_act.php",
				data: $('#addop').serialize(),
				dataType: "json",
				success: function(msg){
			
					if(parseInt(msg.status)==1)
					{
						window.location=msg.txt;
					}
					else if(parseInt(msg.status)==0)
					{
						error(1,msg.txt);
					}
			
					hideshow('loading',0);
				}
			});
		}
		
		function cekeditop()
		{
			hideshow('loading',1);
			error(0);
	
			$.ajax({
				type: "POST",
				url: "do_act.php",
				data: $('#editop').serialize(),
				dataType: "json",
				success: function(msg){
			
					if(parseInt(msg.status)==1)
					{
						window.location=msg.txt;
					}
					else if(parseInt(msg.status)==0)
					{
						error(1,msg.txt);
					}
			
					hideshow('loading',0);
				}
			});
		}
		
		function cekaddpertolongan()
		{
			hideshow('loading',1);
			error(0);
	
			$.ajax({
				type: "POST",
				url: "do_act.php",
				data: $('#addpertolongan').serialize(),
				dataType: "json",
				success: function(msg){
			
					if(parseInt(msg.status)==1)
					{
						window.location=msg.txt;
					}
					else if(parseInt(msg.status)==0)
					{
						error(1,msg.txt);
					}
			
					hideshow('loading',0);
				}
			});
		}
		
		function cekaddrelease()
		{
			hideshow('loading',1);
			error(0);
	
			$.ajax({
				type: "POST",
				url: "do_act.php",
				data: $('#release').serialize(),
				dataType: "json",
				success: function(msg){
			
					if(parseInt(msg.status)==1)
					{
						window.location=msg.txt;
					}
					else if(parseInt(msg.status)==0)
					{
						error(1,msg.txt);
					}
			
					hideshow('loading',0);
				}
			});
		}
		
		function cekeditpertolongan()
		{
			hideshow('loading',1);
			error(0);
	
			$.ajax({
				type: "POST",
				url: "do_act.php",
				data: $('#editpertolongan').serialize(),
				dataType: "json",
				success: function(msg){
			
					if(parseInt(msg.status)==1)
					{
						window.location=msg.txt;
					}
					else if(parseInt(msg.status)==0)
					{
						error(1,msg.txt);
					}
			
					hideshow('loading',0);
				}
			});
		}
		
		function cekubahpassword()
		{
			hideshow('loading',1);
			error(0);
	
			$.ajax({
				type: "POST",
				url: "do_act.php",
				data: $('#ubahpassword').serialize(),
				dataType: "json",
				success: function(msg){
			
					if(parseInt(msg.status)==1)
					{
						window.location=msg.txt;
					}
					else if(parseInt(msg.status)==0)
					{
						error(1,msg.txt);
					}
			
					hideshow('loading',0);
				}
			});
		}
		
		function hideshow(el,act)
		{
			if(act) $('#'+el).css('visibility','visible');
			else $('#'+el).css('visibility','hidden');
		}

		function error(act,txt)
		{
			hideshow('error1',act);
			if(txt) $('#error1').html(txt);
		}
