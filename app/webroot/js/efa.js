// JavaScript Document
 $(document).ready(function(){
  	$("a.linkNew").click(function(event){
		var newElement = $("<p class='wait'>Wait</p>");
		var newLink = $(this);
		var firstDiv = newLink.parent().parent(); 
		newElement.insertAfter( $(this));
		$(this).hide();
		$.ajax({
			url:$(this).attr("href"),//,
			dataType:"text"
			//data: { user:$("#user").val() , location: "Boston" }
		}).done(function(data){
			newElement.remove();
			firstDiv.children(".ajaxForm").show();
			firstDiv.children(".ajaxForm").children(".Inputs").html(data);
			
			$("a.linkCancel").click(function(event){
				firstDiv.children(".ajaxForm").hide();
				newLink.show();
			});
		
			$("a.linkSubmit").click(function(event){
				newLink.insertBefore($(this));
				var request= $.ajax({
						type: "POST",
						url:$(this).attr("href"),//,
						dataType:"text",
						data: firstDiv.children(".ajaxForm").children(".Inputs").children(1).children("form").serialize()
					});
					
				request.done(function(data){
							newElement.remove();
							firstDiv.children(".ajaxForm").hide();
							newLink.show();
					});
				request.fail(function(jqXHR, textStatus) {
					alert( "The action has failed" );
				});
					
			});

		});
   	
   	});
	
	
   
  
   	
 });
