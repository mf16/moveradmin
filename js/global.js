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
					switch(type) {
					    case 'employees':
					    	folder = 'emp';
							name = this.first + ' ' + this.last;
							description = this.cellPhone;
					        break;
					    case 'equipment':
					    	folder = 'equip';
					        name = this.name;
					        description = this.type;
					        break;
				        case 'jobs':
				        	folder = 'jobs';
				       		name = this.destinationCity + ' - ' + this.weight;
				       		description = this.startDate; 
					        break;
					}
					console.log(this);
					$('#searchResults').append('<div class="col-xs-12 searchResult"><div class="col-xs-12 col-md-1"><img src="/img/'+folder+'/'+picURI+'"></div><div class="col-xs-12 col-md-3 title">'+name+'</div><div class="col-xs-12 col-md-8">'+description+'</div></div>');
				});
			});
			$('.searchResults').css('display', 'inline');
			$('.searchResults').css('left', navWidth);
			$('.searchResults').css('width', 'calc(100% - ' + navWidth + ')');
	  	}});
	}
}
