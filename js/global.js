function searchSite(){
	var query = $('.search').val();
	var navWidth = $('.main-navigation').css('width');	
	console.log(query);
	if(query === ''){
		//empty query, clear results
		$('.searchResults').css('display', 'none');
	}
	else{
		$.ajax({url:"siteSearch.php",success:function(result){
			//POPULATE AND PARSE RESULTS HERE
			$('.searchResults').css('display', 'inline');
			$('.searchResults').css('left', navWidth);
			$('.searchResults').css('width', 'calc(100% - ' + navWidth + ')');
	  	}});
	}
}