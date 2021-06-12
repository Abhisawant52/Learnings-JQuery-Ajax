$(document).ready(function() {
	
	/*
	$('#load-button').click(function(e){
	
		$.ajax({
			url:'Query/read.php',
			type:'POST',
			success:function(data){
				$("#result").html(data);
				//console.log(data);
			}
			
		});
		
	});
	*/
	function loadTable(){  //LOAD DATA TABLE
		$.ajax({
			url:'Query/read.php',
			type:'POST',
			success:function(data){
				$("#result").html(data);
				//document.getElementById('result').innerHTML = data;
				//console.log(data);
			}
			
		});
	}
	
	$('#submit-button').click(function(e){
		e.preventDefault();
		var name = $('#name').val();
		var mail = $('#mail').val();
		if( name == '' ||  mail == "" ){
				$('.errors').fadeIn();
				$('.errors').css({"background-color":"#ec4646"}).text("All Fields are Required.");
				setTimeout(function(){ $('.errors').fadeOut();}, 3000);
		}else{
		var emailReg =/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
		if(!(mail).match(emailReg)){
				$('.errors').fadeIn();
				$('.errors').css({"background-color":"#ec4646"}).text("Please Enter Correct Email ID* ");
				setTimeout(function(){ $('.errors').fadeOut();}, 3000);
		}else{	
		$.ajax({
			url:'Query/insert.php',
			type:'POST',
			data:{username:name , usermail:mail },
			success : function(data){
				if(data== 1){
					loadTable();
					$("#form1").trigger('reset');
					$('.errors').fadeIn();
					$('.errors').css({"background-color":"#29bb89"}).text("New record created successfully.");
					setTimeout(function(){ $('.errors').fadeOut();}, 3000);
				}else{
					$('.errors').fadeIn();
					$('.errors').css({"background-color":"#ec4646"}).text("Can't Save Records.");
					setTimeout(function(){ $('.errors').fadeOut();}, 3000);
				}
			}
		});
		}
	}
	});
	
	$(document).on('click','.btn-danger',function(){
		var Cid = $(this).data('id');
		//console.log(id);
		
		$.ajax({
			url:'Query/delete.php',
			type:'POST',
			data:{id:Cid},
			success: function(data){
				if(data== 1){
					loadTable();
					$("#form1").trigger('reset');
					$('.errors').fadeIn();
					$('.errors').css({"background-color":"#29bb89"}).text("Data Removed successfully.");
					setTimeout(function(){ $('.errors').fadeOut();}, 3000);
					$('#alert-text')
				}else{
					$('.errors').fadeIn();
					$('.errors').css({"background-color":"#ec4646"}).text("Can't Delete Records.");
					setTimeout(function(){ $('.errors').fadeOut();}, 3000);
				}
			}
		});
	});
	

	$(document).on('click','.btn-success',function(){
		
			
		//show model box
		$('#model').show();
		var editid = $(this).data('eid');
		//console.log(editid);
		$.ajax({
			url:'Query/Editdata.php',
			type:'POST',
			data:{Eid:editid},
			success: function(data){
				$('#model-form #respons').html(data);
			}
		});
	});
	$('#close-btn').click(function(){
		$('#model').fadeOut();
	});
	
	$(document).on('click','#Update-btn',function(){
		
		var name = $('#edit-name').val();
		var mail = $('#edit-mail').val();
		var UId = $('#edit-id').val();
		//console.log(UId , mail , name);
		if( name == '' ||  mail == "" ){
				$('.error').fadeIn();
				$('.error').css({"background-color":"#ec4646"}).text("All Fields are Required.");
				setTimeout(function(){ $('.error').fadeOut();}, 3000);
		}else{
		var emailReg =/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
		if(!(mail).match(emailReg)){
				$('.error').fadeIn();
				$('.error').css({"background-color":"#ec4646"}).text("Please Enter Correct Email ID*");
				setTimeout(function(){ $('.error').fadeOut();}, 3000);
		}else{	
		$.ajax({
			url:'Query/update.php',
			type:'POST',
			data:{username:name,usermail:mail,id:UId},
			success:function(data){
				if(data== 1){
					$('#model').fadeOut();
					loadTable();
					$('.errors').fadeIn();
					$('.errors').css({"background-color":"#29bb89"}).text("Data Updated.");
					setTimeout(function(){ $('.errors').fadeOut();}, 3000);
				}else{
					loadTable();
					$('.error').fadeIn();
					$('.error').css({"background-color":"#ec4646"}).text("Can't Update Records.");
					setTimeout(function(){ $('.errors').fadeOut();}, 3000);
				}
			}
		});
		}
	}
	});
	
	$(document).on('keyup','#search', function(){
		var txt = $('#search').val()
		//console.log(txt);
		
		$.ajax({
			url:'Query/search.php',
			type:'POST',
			data:{search:txt},
			success:function(data){
				$("#result").html(data);
				//console.log(data);
			}
			
		});
	});
	loadTable();
});