$(function(){
	//your jQuery here
});

var container = document.querySelector('#homeContainer');
var msnry = new Masonry( container, {
  // options
  // columnWidth: 200,
  itemSelector: 'article.post'
});