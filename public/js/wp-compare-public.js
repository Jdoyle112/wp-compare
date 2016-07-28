(function( $ ) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	
	$(document).ready(function(){

		var checkboxValues = JSON.parse(localStorage.getItem('checkboxValues')) || {};
		var $checkboxes = $("#compare :checkbox");
		var inputValues = JSON.parse(localStorage.getItem('inputValues')) || {};

		// when add button pressed, add checked input to form
		$('.add-page').click(function(){
			var val = $('.add-page').val();
		 	var input = "<label><input type='checkbox' value="+val+" id="+val+" name='checks[]' checked> "+val+"<br></label>";
		 	$('#compare #submit').before(input);
		 	// set local storage
		    checkboxValues[val] = true;
		    inputValues[val] = input;
		  	localStorage.setItem("checkboxValues", JSON.stringify(checkboxValues));
		  	localStorage.setItem("inputValues", JSON.stringify(inputValues));
		});

		$(document).on("change", "#compare :checkbox", function(){
			// local storage for inputs
			var $checkboxes = $("#compare :checkbox");
		  $checkboxes.each(function(){
		    checkboxValues[this.id] = this.checked;
		  });
		  localStorage.setItem("checkboxValues", JSON.stringify(checkboxValues));
		  gatherInputs();
		});

		// insert inputs into form
		$.each(inputValues, function(key, value) {
		  	$('#compare #submit').before(value);
		});

		$.each(checkboxValues, function(key, value) {
			//console.log(value);
		  $("#" + key).prop('checked', value);
		});


		function gatherInputs(){
			$("#compare :checkbox").each(function(){
				var id = $(this).attr('id');
				var val = $(this).val();
				inputValues[id] = "<input type='checkbox' value="+val+" id="+id+"> "+val+"";
				//console.log(localStorage.getItem(id));
			});
			localStorage.setItem("inputValues", JSON.stringify(inputValues));
		}

		// reset values when compare button is pressed 
		$('#submit').click(function(){
			localStorage.clear();
		});
	}); 

})( jQuery );









