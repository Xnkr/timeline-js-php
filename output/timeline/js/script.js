$(document).ready(function() {
    var max_fields      = 20; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><p>Event '+x+':</p><input type="number" min="0" max="9999" name="start_date_year[]" placeholder="Start Date Year" required /><input type="number" min="0" max="12" name="start_date_month[]" placeholder="Start Date Month" required /><input type="number" min="0" max="9999" name="end_date_year[]" placeholder="End Date Year"required /><input type="number" min="0" max="12" name="end_date_month[]" placeholder="End Date Month"required /><input type="text" name="event_media_caption[]" placeholder="Event Media Caption"required/><input type="text" name="event_media_url[]" placeholder="Event Media URL"required/><input type="text" name="event_text_headline[]" placeholder="Event Text Headline"required/><input type="text" name="event_text_text[]" placeholder="Event Text"required/><input type="text" name="bg_value[]" placeholder="Event Background"required/><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
		if(x==max_fields){
			$(add_button).css('display', 'none');
		}
    });
	
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); 
		$(add_button).css('display', 'inline');
		x--;
    })
});