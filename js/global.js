function searchSite(){
	var query = $('.search').val();
	var navWidth = $('.main-navigation').css('width');	
	//console.log(query);
	if(query === ''){
		//empty query, clear results
		$('.searchResults').css('display', 'none');
	}
	else{
		var ajaxData={
			searchTerm:$('#searchInput').val()
		};
		$.ajax({url:"/includes/searchAjax.php?action=search"
			,data:ajaxData
			,success:function(result){
			$('#searchResults').html('');
			console.log(result);
			var obj = jQuery.parseJSON(result);


			$.each(obj,function() {
				$.each(this,function(){
					//search results code here
					for (var prop in this){
						var type = prop.substr(2);
						break;
					}
					var picURI = this.picURI;
					var name;
					var description;
					var folder;
					var id;
					var url;
					switch(type) {
					    case 'employees':
					    	folder = 'emp';
							name = this.first + ' ' + this.last;
							description = this.cellPhone;
							id=this.idemployees;
							url='/employee/'+id;
					        break;
					    case 'equipment':
					    	folder = 'equip';
					        name = this.name;
					        description = this.type;
							id=this.idequipment;
							url='/equipment/'+id;
					        break;
				        case 'jobs':
				        	folder = 'jobs';
				       		name = this.destinationCity + ' - ' + this.weight;
				       		description = this.startDate; 
							id=this.idjobs;
							url='/job/'+id;
					        break;
					}
					console.log(this);
					$('#searchResults').append('<a href="'+url+'"><div class="col-xs-12 searchResult"><div class="col-xs-12 col-md-1"><img src="/img/'+folder+'/'+picURI+'"></div><div class="col-xs-12 col-md-3 title">'+name+'</div><div class="col-xs-12 col-md-8">'+description+'</div></div></a>');
				});
			});
			$('.searchResults').css('display', 'inline');
			$('.searchResults').css('left', navWidth);
			$('.searchResults').css('width', 'calc(100% - ' + navWidth + ')');
	  	}});
	}
}
