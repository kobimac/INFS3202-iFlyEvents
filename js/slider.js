// Creates an image gallery and loads all of the images into the gallery without the need for hardcoding images.
// This JavaScript has been self written

$(document).ready(function() {

// Sets the file location prefix. This remains constant for all images in the gallery. Eliminates the need for repetition in code.
var location = "img/gallery/";

    $.ajax({
        url : location,
        success: function (data) {
            $(data).find("a").attr("href", function (i, val) {
                if(!val.match(/1.(jpe?g|png|gif)$/)){
                    if( val.match(/\.(jpe?g|png|gif)$/) ) { 
                        $(".carousel-inner").append( '<div class = "item"><img src="'+location+val+'" ></div>' );
                    }
                
                } 
            });
        }
    });
	
});	