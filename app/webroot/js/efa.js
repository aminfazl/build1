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
			dataType:"text",		
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
				newElement.insertBefore($(this));
				var request= $.ajax({
						type: "POST",
						url:$(this).attr("href"),//,
						dataType:"text",
						data: firstDiv.children(".ajaxForm").children(".Inputs").children(1).children("form").serialize()
					});				
				request.done(function(data){
							if(data == "0")
							{
								alert("Saving error! Please try again!")
							}					
							else
							{
								var selectedIndex = newLink.parent().children("select")[0].selectedIndex;
								newLink.parent().children("select").append(new Option(firstDiv.children(".ajaxForm").children(".Inputs").children(1).children("form").children("input").val(), data, true, true));
								//newLink.parent().children("select")[0].selectedIndex = selectedIndex;
								//firstDiv.children(".ajaxForm").children(".Inputs").children(1).children("form").children("select").add(new Option()
								newElement.remove();
								firstDiv.children(".ajaxForm").hide();
								newLink.show();
							}			
					});
				request.fail(function(jqXHR, textStatus) {
					alert( "The action has failed" );
				});				
			});
		});  	
   	});	 
	
	$(".statusForm").hide();
	$("a.newStatus").click(function(event){
		var newElement = $("<p class='wait'>Wait</p>");
		var newLink = $(this);
		var firstDiv = newLink.parent().parent(); 
		//newElement.insertAfter( $(this));
		$(this).hide();
		$.ajax({
			url:$(this).attr("href"),//,
			dataType:"text"
		}).done(function(data){
			newElement.remove();
			firstDiv.children(".statusForm").show();
			firstDiv.children(".statusForm").children(".statusInputs").html(data);
			
			$("a.statusCancel").click(function(event){
				firstDiv.children(".statusForm").hide();
				newLink.show();
			});
		
			$("a.statusSubmit").click(function(event){
				newElement.insertBefore($(this));
				var request= $.ajax({
						type: "POST",
						url:$(this).attr("href"),
						contentType:"application/x-www-form-urlencoded; charset=utf-8",
						dataType:"text",    	
						data: firstDiv.children(".statusForm").children(".statusInputs").children(1).children("form").serialize(),
					});				
				request.done(function(data){
							if(data == "0")
							{
								alert("Saving error! Please try again!")
							}					
							else
							{
								var selectedIndex = newLink.parent().children("select")[0].selectedIndex;
								//alert("n");
								newLink.parent().children("select").append(new Option(firstDiv.children(".statusForm").children(".statusInputs").children(1).children("form").children("input").val(), data, true, true));
								//newLink.parent().children("select")[0].selectedIndex = selectedIndex;
							
								newElement.remove();
								firstDiv.children(".statusForm").hide();
								newLink.show();
							}			
					});
					request.fail(function(jqXHR, textStatus) {
						alert( "The action has failed" );
				});				
				
			});
		});  	
   	});
	
	$(".channelForm").hide();
  	$("a.newChannel").click(function(event){
		var newElement = $("<p class='wait'>Wait</p>");
		var newLink = $(this);
		var firstDiv = newLink.parent().parent(); 
		newElement.insertAfter( $(this));
		$(this).hide();
		$.ajax({
			url:$(this).attr("href"),//,
			dataType:"text"
		}).done(function(data){
			newElement.remove();
			firstDiv.children(".channelForm").show();
			firstDiv.children(".channelForm").children(".channelInputs").html(data);
			
			$("a.channelCancel").click(function(event){
				firstDiv.children(".channelForm").hide();
				newLink.show();
			});
		
			$("a.channelSubmit").click(function(event){
				newElement.insertBefore($(this));
				var request= $.ajax({
						type: "POST",
						url:$(this).attr("href"),
						dataType:"text",
						data: firstDiv.children(".channelForm").children(".channelInputs").children(1).children("form").serialize()
					});				
				request.done(function(data){
							if(data == "0")
							{
								alert("Saving error! Please try again!")
							}					
							else
							{
								var selectedIndex = newLink.parent().children("select")[0].selectedIndex;
								newLink.parent().children("select").append(new Option(firstDiv.children(".channelForm").children(".channelInputs").children(1).children("form").children("input").val(), data, true, true));
								//newLink.parent().children("select")[0].selectedIndex = selectedIndex;
							
								newElement.remove();
								firstDiv.children(".channelForm").hide();
								newLink.show();
							}			
					});
				request.fail(function(jqXHR, textStatus) {
					alert( "The action has failed" );
				});				
			});
		});  	
   	});	
	
	$(".disabilityForm").hide();
  	$("a.newDisability").click(function(event){
		var newElement = $("<p class='wait'>Wait</p>");
		var newLink = $(this);
		var firstDiv = newLink.parent().parent(); 
		newElement.insertAfter( $(this));
		$(this).hide();
		$.ajax({
			url:$(this).attr("href"),//,
			dataType:"text"
		}).done(function(data){
			newElement.remove();
			firstDiv.children(".disabilityForm").show();
			firstDiv.children(".disabilityForm").children(".disabilityInputs").html(data);
			
			$("a.disabilityCancel").click(function(event){
				firstDiv.children(".disabilityForm").hide();
				newLink.show();
			});
		
			$("a.disabilitySubmit").click(function(event){
				newElement.insertBefore($(this));
				var request= $.ajax({
						type: "POST",
						url:$(this).attr("href"),
						dataType:"text",
						data: firstDiv.children(".disabilityForm").children(".disabilityInputs").children(1).children("form").serialize()
					});				
				request.done(function(data){
							if(data == "0")
							{
								alert("Saving error! Please try again!")
							}					
							else
							{
								var selectedIndex = newLink.parent().children("select")[0].selectedIndex;
								newLink.parent().children("select").append(new Option(firstDiv.children(".disabilityForm").children(".disabilityInputs").children(1).children("form").children("input").val(), data, true, true));
								//newLink.parent().children("select")[0].selectedIndex = selectedIndex;
							
								newElement.remove();
								firstDiv.children(".disabilityForm").hide();
								newLink.show();
							}			
					});
				request.fail(function(jqXHR, textStatus) {
					alert( "The action has failed" );
				});				
			});
		});  	
   	});	
	
	$(".prioritylevelForm").hide();
  	$("a.newPrioritylevel").click(function(event){
		var newElement = $("<p class='wait'>Wait</p>");
		var newLink = $(this);
		var firstDiv = newLink.parent().parent(); 
		newElement.insertAfter( $(this));
		$(this).hide();
		$.ajax({
			url:$(this).attr("href"),//,
			dataType:"text"
		}).done(function(data){
			newElement.remove();
			firstDiv.children(".prioritylevelForm").show();
			firstDiv.children(".prioritylevelForm").children(".prioritylevelInputs").html(data);
			
			$("a.prioritylevelCancel").click(function(event){
				firstDiv.children(".prioritylevelForm").hide();
				newLink.show();
			});
		
			$("a.prioritylevelSubmit").click(function(event){
				newElement.insertBefore($(this));
				var request= $.ajax({
						type: "POST",
						url:$(this).attr("href"),
						dataType:"text",
						data: firstDiv.children(".prioritylevelForm").children(".prioritylevelInputs").children(1).children("form").serialize()
					});				
				request.done(function(data){
							if(data == "0")
							{
								alert("Saving error! Please try again!")
							}					
							else
							{
								var selectedIndex = newLink.parent().children("select")[0].selectedIndex;
								newLink.parent().children("select").append(new Option(firstDiv.children(".prioritylevelForm").children(".prioritylevelInputs").children(1).children("form").children("input").val(), data, true, true));
								//newLink.parent().children("select")[0].selectedIndex = selectedIndex;
							
								newElement.remove();
								firstDiv.children(".prioritylevelForm").hide();
								newLink.show();
							}			
					});
				request.fail(function(jqXHR, textStatus) {
					alert( "The action has failed" );
				});				
			});
		});  	
   	});	 
	
	$(".fundingsourceForm").hide();
  	$("a.newFundingsource").click(function(event){
		var newElement = $("<p class='wait'>Wait</p>");
		var newLink = $(this);
		var firstDiv = newLink.parent().parent(); 
		newElement.insertAfter( $(this));
		$(this).hide();
		$.ajax({
			url:$(this).attr("href"),//,
			dataType:"text"
		}).done(function(data){
			newElement.remove();
			firstDiv.children(".fundingsourceForm").show();
			firstDiv.children(".fundingsourceForm").children(".fundingsourceInputs").html(data);
			
			$("a.fundingsourceCancel").click(function(event){
				firstDiv.children(".fundingsourceForm").hide();
				newLink.show();
			});
		
			$("a.fundingsourceSubmit").click(function(event){
				newElement.insertBefore($(this));
				var request= $.ajax({
						type: "POST",
						url:$(this).attr("href"),
						dataType:"text",
						data: firstDiv.children(".fundingsourceForm").children(".fundingsourceInputs").children(1).children("form").serialize()
					});				
				request.done(function(data){
							if(data == "0")
							{
								alert("Saving error! Please try again!")
							}					
							else
							{
								var selectedIndex = newLink.parent().children("select")[0].selectedIndex;
								newLink.parent().children("select").append(new Option(firstDiv.children(".fundingsourceForm").children(".fundingsourceInputs").children(1).children("form").children("input").val(), data, true, true));
								//newLink.parent().children("select")[0].selectedIndex = selectedIndex;
							
								newElement.remove();
								firstDiv.children(".fundingsourceForm").hide();
								newLink.show();
							}			
					});
				request.fail(function(jqXHR, textStatus) {
					alert( "The action has failed" );
				});				
			});
		});  	
   	});	 
	
	$(".religionForm").hide();
  	$("a.newReligion").click(function(event){
		var newElement = $("<p class='wait'>Wait</p>");
		var newLink = $(this);
		var firstDiv = newLink.parent().parent(); 
		newElement.insertAfter( $(this));
		$(this).hide();
		$.ajax({
			url:$(this).attr("href"),//,
			dataType:"text"
		}).done(function(data){
			newElement.remove();
			firstDiv.children(".religionForm").show();
			firstDiv.children(".religionForm").children(".religionInputs").html(data);
			
			$("a.religionCancel").click(function(event){
				firstDiv.children(".religionForm").hide();
				newLink.show();
			});
		
			$("a.religionSubmit").click(function(event){
				newElement.insertBefore($(this));
				var request= $.ajax({
						type: "POST",
						url:$(this).attr("href"),
						dataType:"text",
						data: firstDiv.children(".religionForm").children(".religionInputs").children(1).children("form").serialize()
					});				
				request.done(function(data){
							if(data == "0")
							{
								alert("Saving error! Please try again!")
							}					
							else
							{
								var selectedIndex = newLink.parent().children("select")[0].selectedIndex;
								newLink.parent().children("select").append(new Option(firstDiv.children(".religionForm").children(".religionInputs").children(1).children("form").children("input").val(), data, true, true));
								//newLink.parent().children("select")[0].selectedIndex = selectedIndex;
							
								newElement.remove();
								firstDiv.children(".religionForm").hide();
								newLink.show();
							}			
					});
				request.fail(function(jqXHR, textStatus) {
					alert( "The action has failed" );
				});				
			});
		});  	
   	});	  	
	
	$(".volunteerstatusForm").hide();
	$("a.newVolunteerstatus").click(function(event){
		var newElement = $("<p class='wait'>Wait</p>");
		var newLink = $(this);
		var firstDiv = newLink.parent().parent(); 
		//newElement.insertAfter( $(this));
		$(this).hide();
		$.ajax({
			url:$(this).attr("href"),//,
			dataType:"text"
		}).done(function(data){
			newElement.remove();
			firstDiv.children(".volunteerstatusForm").show();
			firstDiv.children(".volunteerstatusForm").children(".volunteerstatusInputs").html(data);
			
			$("a.volunteerstatusCancel").click(function(event){
				firstDiv.children(".volunteerstatusForm").hide();
				newLink.show();
			});
		
			$("a.volunteerstatusSubmit").click(function(event){
				newElement.insertBefore($(this));
				var request= $.ajax({
						type: "POST",
						url:$(this).attr("href"),
						dataType:"text",
						data: firstDiv.children(".volunteerstatusForm").children(".volunteerstatusInputs").children(1).children("form").serialize()
					});				
				request.done(function(data){
							if(data == "0")
							{
								alert("Saving error! Please try again!")
							}					
							else
							{
								var selectedIndex = newLink.parent().children("select")[0].selectedIndex;
								//alert("n");
								newLink.parent().children("select").append(new Option(firstDiv.children(".volunteerstatusForm").children(".volunteerstatusInputs").children(1).children("form").children("input").val(), data, true, true));
								//newLink.parent().children("select")[0].selectedIndex = selectedIndex;
							
								newElement.remove();
								firstDiv.children(".volunteerstatusForm").hide();
								newLink.show();
							}			
					});
					request.fail(function(jqXHR, textStatus) {
						alert( "The action has failed" );
				});				
			});
		});  	
   	});
	
	$(".eventtypeForm").hide();
	$("a.newEventtype").click(function(event){
		var newElement = $("<p class='wait'>Wait</p>");
		var newLink = $(this);
		var firstDiv = newLink.parent().parent(); 
		//newElement.insertAfter( $(this));
		$(this).hide();
		$.ajax({
			url:$(this).attr("href"),//,
			dataType:"text"
		}).done(function(data){
			newElement.remove();
			firstDiv.children(".eventtypeForm").show();
			firstDiv.children(".eventtypeForm").children(".eventtypeInputs").html(data);
			
			$("a.eventtypeCancel").click(function(event){
				firstDiv.children(".eventtypeForm").hide();
				newLink.show();
			});
		
			$("a.eventtypeSubmit").click(function(event){
				newElement.insertBefore($(this));
				var request= $.ajax({
						type: "POST",
						url:$(this).attr("href"),
						dataType:"text",
						data: firstDiv.children(".eventtypeForm").children(".eventtypeInputs").children(1).children("form").serialize()
					});				
				request.done(function(data){
							if(data == "0")
							{
								alert("Saving error! Please try again!")
							}					
							else
							{
								var selectedIndex = newLink.parent().children("select")[0].selectedIndex;
								//alert("n");
								newLink.parent().children("select").append(new Option(firstDiv.children(".eventtypeForm").children(".eventtypeInputs").children(1).children("form").children("input").val(), data, true, true));
								//newLink.parent().children("select")[0].selectedIndex = selectedIndex;
							
								newElement.remove();
								firstDiv.children(".eventtypeForm").hide();
								newLink.show();
							}			
					});
					request.fail(function(jqXHR, textStatus) {
						alert( "The action has failed" );
				});				
			});
		});  	
   	});
	
	
		$(".venueForm").hide();
	$("a.newVenue").click(function(event){
		var newElement = $("<p class='wait'>Wait</p>");
		var newLink = $(this);
		var firstDiv = newLink.parent().parent(); 
		//newElement.insertAfter( $(this));
		$(this).hide();
		$.ajax({
			url:$(this).attr("href"),//,
			dataType:"text"
		}).done(function(data){
			newElement.remove();
			firstDiv.children(".venueForm").show();
			firstDiv.children(".venueForm").children(".venueInputs").html(data);
			
			$("a.venueCancel").click(function(event){
				firstDiv.children(".venueForm").hide();
				newLink.show();
			});
		
			$("a.venueSubmit").click(function(event){
				newElement.insertBefore($(this));
				var request= $.ajax({
						type: "POST",
						url:$(this).attr("href"),
						dataType:"text",
						data: firstDiv.children(".venueeForm").children(".venueInputs").children(1).children("form").serialize()
					});				
				request.done(function(data){
							if(data == "0")
							{
								alert("Saving error! Please try again!")
							}					
							else
							{
								var selectedIndex = newLink.parent().children("select")[0].selectedIndex;
								//alert("n");
								newLink.parent().children("select").append(new Option(firstDiv.children(".venueForm").children(".venueInputs").children(1).children("form").children("input").val(), data, true, true));
								//newLink.parent().children("select")[0].selectedIndex = selectedIndex;
							
								newElement.remove();
								firstDiv.children(".venueForm").hide();
								newLink.show();
							}			
					});
					request.fail(function(jqXHR, textStatus) {
						alert( "The action has failed" );
				});				
			});
		});  	
   	});
 });
	










//primary carer, secondary carer
 $(document).ready(function(){
	var newElementPrimary=null;
	$("#linkSearchPrimary").click(function(event){
		var SearchLink = $(this);
		var sibling = SearchLink.siblings("#linkNewCarerPrimary"); 
			if(newElementPrimary != null)
			{
				newElementPrimary.remove();
			}
			newElementPrimary = $("<p class='wait'>Wait</p>");
			newElementPrimary.insertAfter( $("#linkSearchPrimary"));
			$.ajax({
				type: "POST",
				url:$(SearchLink).attr("href"),//,
				dataType:"text",
				data:{"data[criteria]": $("#searchTextPrimary").val(), "data[formprefix]": "Family.primarycarer_ID" }  
			}).done(function(data){
				newElementPrimary.remove();
				newElementPrimary = $("<div>" +  data + "</div>");
				newElementPrimary.insertAfter( $(sibling));
				//newElement.insertAfter( $("a.linkSearch"));
			});
				
		});
   
   		$("#linkNewCarerPrimary").click(function(event){
			var NewLink = $(this);
			if(newElementPrimary != null)
			{
				newElementPrimary.remove();
			}
			newElementPrimary = $("<p class='wait'>Wait</p>");
			newElementPrimary.insertAfter( $(NewLink));
			$.ajax({
				type: "POST",
				url:$(NewLink).attr("href"),//,
				dataType:"text",
				data:{"data[formprefix]": "Family.Primarycarer." } 
			}).done(function(data){
				newElementPrimary.remove();
				newElementPrimary = $(data);
				newElementPrimary.insertAfter( $(NewLink));
			});
				
		});  
		
		var newElementSecondary=null;
		$("#linkSearchSecondary").click(function(event){
		var SearchLink = $(this);
		var sibling = SearchLink.siblings("#linkNewCarerSecondary"); 
			if(newElementSecondary != null)
			{
				newElementSecondary.remove();
			}
			newElementSecondary = $("<p class='wait'>Wait</p>");
			newElementSecondary.insertAfter( $("#linkSearchSecondary"));
			$.ajax({
				type: "POST",
				url:$(SearchLink).attr("href"),//,
				dataType:"text",
				data:{"data[criteria]": $("#searchTextSecondary").val(), "data[formprefix]": "Family.secondarycarer_ID" }  
			}).done(function(data){
				
				newElementSecondary.remove();
				newElementSecondary = $("<div>" +  data + "</div>");
				newElementSecondary.insertAfter( $(sibling));
				//newElement.insertAfter( $("a.linkSearch"));
			});
				
		});
   
		$("#linkNewCarerSecondary").click(function(event){
			var NewLink = $(this);
			if(newElementSecondary != null)
			{
				newElementSecondary.remove();
			}
			newElementSecondary = $("<p class='wait'>Wait</p>");
			newElementSecondary.insertAfter( $(NewLink));
			$.ajax({
				type: "POST",
				url:$(NewLink).attr("href"),//,
				dataType:"text",
				data:{"data[formprefix]": "Family.Secondarycarer." } 
			}).done(function(data){
				newElementSecondary.remove();
				newElementSecondary = $(data);
				newElementSecondary.insertAfter( $(NewLink));
			});
				
		});  
		
});


