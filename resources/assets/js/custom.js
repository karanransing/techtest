$(document).ready(function() {
	    $("#registerbtn").click(function(){
	    	alert('jsdfhkj');
	    $.ajax({url: "demo_test.txt", success: function(result){
	        $("#div1").html(result);
	    }});
	});
});