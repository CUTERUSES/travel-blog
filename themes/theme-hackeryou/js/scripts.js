$(function(){
	//your jQuery here
});

// var container = document.querySelector('#homeContainer');
// var msnry;
// // initialize Masonry after all images have loaded
// imagesLoaded( container, function() {
//   msnry = new Masonry( container, {
//   	itemSelector: 'article.post'
//   });
// });

var container = document.querySelector('#homeContainer');
var msnry;
// initialize Masonry after all images have loaded
imagesLoaded( container, function() {
  msnry = new Masonry( container );
});