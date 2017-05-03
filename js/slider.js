// Creates an image gallery and loads all of the images into the gallery without the need for hardcoding images.
// This JavaScript has been self written

$(document).ready(function() {

// Sets the file location prefix. This remains constant for all images in the gallery. Eliminates the need for repetition in code.
var location = "slider.php";

    $.ajax({
        url : location,
        success: function (data) {
            
            for (var i=0; i<data.length; i++) {
                var img = data[i];
                if (document.getElementById("active_image").src.endsWith(img)){
                    continue;
                }
                $(".carousel-inner").append( '<div class = "item"><img src="img/gallery/'+img+'" ></div>' );
            }
        }
    });
});