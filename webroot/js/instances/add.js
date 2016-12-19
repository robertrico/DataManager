function FieldCreator(types){
	this.current = 2;
	this.current_types = types;
	this.buildInput = function(label_text,input_type,input_name,placeholder){
		var outer = $('<div/>');
		outer.addClass("col-sm-6");

		var inner = $('<div/>');
		inner.addClass("input");

		var name_label = $('<label/>');
		name_label.text(label_text);

		var input;
		if(input_type == "text"){
			input = $('<input/>');
		}else{
			input = $('<select/>');
			$.each(this.current_types,function(i,e){
				var opt = $('<option/>');
				opt.text(e);
				opt.val(i);
				input.append(opt);
			});
		}
		inner.addClass(input_type);
		input.addClass("form-control");
		input.attr('type',input_type);
		input.attr('name','schema['+input_name+'][]');
		input.attr('placeholder',placeholder);
		input.attr('id','schema-'+input_name+this.current);
		
		inner.append(name_label);
		inner.append(input);
		outer.append(inner);
		return outer;
	}
	this.incrementFieldCount = function(){
		this.current++;
	}
};
$(document).ready(function(){
	var field_creator = new FieldCreator(input_types);
console.log(field_creator);
	$('#addSchemaField').click(function(){
		$('#fieldValue').append(field_creator.buildInput('Name','text','fields','Enter Field Name'));
		$('#fieldValue').append(field_creator.buildInput('Type','select','types','Select Type'));
		field_creator.incrementFieldCount();
	});
});
