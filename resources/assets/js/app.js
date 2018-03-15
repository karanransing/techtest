
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});

$(document).ready(function() {
	$( '#registrationForm' ).on('submit', function(e) {
		$( '#registerbtn' ).prop('disabled', true);
        e.preventDefault();
	    var data = $(this).serialize();
	    $.ajax({
	    	url: "/registration", 
	    	data:data,
	    	type:"POST",
	    	dataType: "json",
	    	success: function(result){
	    		if(result.responseText == 'Success')
	    		{	$( '#registerbtn' ).prop('disabled', false);
					$(".print-error-msg").css('display','none');
					$(".print-success-msg").find("ul").append('<li>Registration Successfull!</li>');
					$(".print-success-msg").css('display','block');
					setTimeout(function(){ window.location.href="/login"; }, 4000);
	    		}
	    		else
	    		{	$( '#registerbtn' ).prop('disabled', false);
	    			printErrorMsg(result.error);
	    		}
	    	}
		});
	});

	function printErrorMsg (msg) {
		$(".print-error-msg").find("ul").html('');
		$(".print-error-msg").css('display','block');
		$.each( msg, function( key, value ) {
		$(".print-error-msg").find("ul").append('<li>'+value+'</li>');
		});
	}
});
