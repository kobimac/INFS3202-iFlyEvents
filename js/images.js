// Creates an image gallery and loads all of the images into the gallery without the need for hardcoding images.
// This JavaScript has been self written

$(document).ready(function() {

// Sets the file location prefix. This remains constant for all images in the gallery. Eliminates the need for repetition in code.
var location = "img/gallery/";

	$.ajax({
	    url : location,
	    success: function (data) {
	        $(data).find("a").attr("href", function (i, val) {
	            if( val.match(/\.(jpe?g|png|gif)$/) ) { 
	                $(".gallery_images").append( '<div class = "col-lg-3 col-md-4 col-xs-6 thumb"><a href="'+location+val+'" data-toggle="lightbox" data-gallery="example-gallery" class="thumbnail"><img class="img-responsive" src="'+location+val+'" class="img-fluid"></a></div>' );
	            } 
	        });
	    }
	});
	
});	