function MainMenu(iid,vp,edit_url,add_url){
	this.instanceId = iid;
	this.viewPort = vp;
	this.edit_url = edit_url;
	this.add_url = add_url;

	this.viewLead = function(id){
		var url =this.edit_url+"/"+this.instanceId+"/"+id; 
		$.ajax({
			url:url,
			context : this
		}).done(function(result){
			this.viewPort.html(result);
		});
	}

	this.addLead = function(id){
		var url =this.add_url+"/"+this.instanceId+"/"+id; 
		$.ajax({
			url:url,
			context : this
		}).done(function(result){
			this.viewPort.html(result);
		});
	}
}

function AddMenu(id,add_url){
	this.instanceId = id;
	this.add_url = add_url;

	this.add = function(add){
		var url =this.add_url+"/"+this.instanceId+"/"+id; 
		$.ajax({
			url:url,
			data:add,
			type : "POST",
			context : this
		}).done(function(result){
			console.log(result);
		});
	}
}
