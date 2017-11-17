$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
	var fields = {"education":"Education", "skill":"Skill", "work":"Work Experience"};
  
    var field_count = {"education":1,"skill":1,"work":1}; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
	//$(wrapper).on("click",".add_field_button",function(e){
        e.preventDefault();
		find_super_class = $(this).parent('div').attr('class');		
		button_wrapper = $('.'+find_super_class +'> .input_fields_wrap');	
		x = field_count[find_super_class];
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
			if(find_super_class=="skill"){
				$(button_wrapper).append('<div><input type="text" name="'+find_super_class+'[]" placeholder="'+fields[find_super_class]+' '+x+'"/><a href="#" class="remove_field"><i class="fa fa-trash-o" aria-hidden="true"></i></a></div>'); //add input box
			}
			else if(find_super_class=="education"){
				$(button_wrapper).append('<div><input name="'+find_super_class+'[]" placeholder="College/University '+x+'" type="text" /><input type="text" name="edu_qual[]" placeholder="Qualification '+x+'"><input type="text" name="edu_desc[]" placeholder="Education Description '+x+'"><a href="#" class="remove_field"><i class="fa fa-trash-o" aria-hidden="true"></i></a></div>'); //add input box
				
			}
			else{
				$(button_wrapper).append('<div><input name="'+find_super_class+'[]" placeholder="'+fields[find_super_class]+' '+x+' Title" type="text" /><span></span><input name="work_year[]" placeholder="Work Experience '+x+' Duration" type="text" /><span></span><input name="'+find_super_class+'_desc[]" placeholder="'+fields[find_super_class]+' '+x+' Description" type="text" /><a href="#" class="remove_field"><i class="fa fa-trash-o" aria-hidden="true"></i></a></div>'); //add input box
			}
        }
		field_count[find_super_class] = x;
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault();
		curr_field = $(this).parents().eq(2).attr('class');
		$(this).parent('div').remove(); 
		field_count[curr_field]--;
    });
});