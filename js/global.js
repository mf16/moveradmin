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
			console.log(result);
			//POPULATE AND PARSE RESULTS HERE
			$('.searchResults').css('display', 'inline');
			$('.searchResults').css('left', navWidth);
			$('.searchResults').css('width', 'calc(100% - ' + navWidth + ')');
	  	}});
	}
}
