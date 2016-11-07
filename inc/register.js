$(document).ready(function(){
	
	$('#regForm').submit(function(e) {

		register();
		e.preventDefault();
		
	});
	
});


function register()
{
	hideshow('loading',1);
	error(0);
	
	$.ajax({
		type: "POST",
		url: "doReg.php",
		data: $('#regForm').serialize(),
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

$(document).ready(function(){
	
	$('#ckForm').submit(function(e) {

		ckont();
		e.preventDefault();
		
	});
	
});


function ckont()
{
	hideshow('loading',1);
	error(0);
	
	$.ajax({
		type: "POST",
		url: "doCKn.php",
		data: $('#ckForm').serialize(),
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

$(document).ready(function(){
	
	$('#cpForm').submit(function(e) {

		cpass();
		e.preventDefault();
		
	});
	
});


function cpass()
{
	hideshow('loading',1);
	error(0);
	
	$.ajax({
		type: "POST",
		url: "controller/doAct.php",
		data: $('#cpForm').serialize(),
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

$(document).ready(function(){
	
	$('#cprForm').submit(function(e) {

		cprof();
		e.preventDefault();
		
	});
	
});


function cprof()
{
	hideshow('loading',1);
	error(0);
	
	$.ajax({
		type: "POST",
		url: "doCPR.php",
		data: $('#cprForm').serialize(),
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
	hideshow('error',act);
	if(txt) $('#error').html(txt);
}