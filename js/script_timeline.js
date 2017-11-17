$(document).ready(function() {
    var max_fields      = 20; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><p>Event '+x+':</p><input type="number" min="0" max="9999" name="start_date_year[]" placeholder="Event Start Year" required /><input type="number" min="0" max="12" name="start_date_month[]" placeholder="Event Start Month" required /><input type="number" min="0" max="9999" name="end_date_year[]" placeholder="Event End Year"required /><input type="number" min="0" max="12" name="end_date_month[]" placeholder="Event End Month"required /><input type="text" name="event_media_caption[]" placeholder="Event Media Caption"/><input type="text" name="event_media_url[]" placeholder="Event Media URL"required/><input type="text" name="event_text_headline[]" placeholder="Event Headline"required/><input type="text" name="event_text_text[]" placeholder="Event Text"required/><input type="text" name="bg_value[]" placeholder="Event Background URL/Color Code"required/><a href="#" class="remove_field"><i class="fa fa-trash-o" aria-hidden="true"></i></a></div>'); //add input box
        }
		if(x==max_fields){
			$(add_button).css('display', 'none');
		}
    });
	$('[data-toggle="tooltip"]').tooltip();  
	$('.back').click(function(){
		var id = this.id;
		// Selecting image source
		var element_src = id;
		// AJAX request
		$.ajax({
				url: 'removefile.php',
				type: 'post',
				data: {path: element_src},
				success: function(response){
				    // Changing image source when remove
					if(response == 1){		
							parent.history.back();
					}
					else{
						alert("Something went wrong! Try again later");
					}
				}
		});
		return false;
	});
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); 
		$(add_button).css('display', 'inline');
		x--;
    })
});