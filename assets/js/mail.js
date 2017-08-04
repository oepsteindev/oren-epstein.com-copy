$(function (){
	
	$("#submit").click(function(e){
		
		e.preventDefault();
		
		alert("init");
		var first_name = $("#first_name").val();
		var last_name = $("#last_name").val();
		var email = $("#email").val();
		var comment = $("#comments").val();
				
		
	
		
		$.ajax({
            timeout: 10000,
            url: "mailit.php",
            type: "post",
            dataType: 'json',
            data: {first_name:first_name, last_name: last_name, email:email, comments:comment,}, //this could be name, phone, domain, email, etc..
            tryCount : 0,
            retryLimit : 3,
            success:function(resp)
            {
	            alert(JSON.stringify(resp));
	            
	            //resp = JSON.stringify(resp);
	            //alert(resp.success);
	           if(resp.success==true){
		           $("#msg").html("<span style='color:green'>Your message has been sent, thanks!</span>");
	           }else{
		           $("#msg").html("<span style='color:red'>Your message failed to send. Please correct the following: " + resp.reason)+"</span>";
	           }
	           
				
										
            },
            error:function(xhr, textStatus, errorThrown)
            {
                if (textStatus == 'timeout')
                {
                    this.tryCount++;
                    if (this.tryCount <= this.retryLimit)
                    {
                        $.ajax(this);
                        return;
                    }
                }
               $("#response").html("There has been an error");

            }

            
            
          })
            
            
       })
            
 	});