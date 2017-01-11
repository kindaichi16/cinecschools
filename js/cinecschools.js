// JavaScript Document
(function($) {
  $(".list-group-item").click(function(){
    $(this).toggleClass("icon");
  });
	
	//check page name
	function getPageName(url) {
		if(!url || (url && url.length === 0)) {
			return "";
		}
		var index = url.lastIndexOf("/") + 1;
		var filenameWithExtension = url.substr(index);
		var basename = filenameWithExtension.split(/[.?&#]+/)[0];
		
		// Handle '/mypage/' type paths
		if(basename.length === 0) {
			url = url.substr(0,index-1);
			basename = getPageName(url);
		}
		return basename ? basename : "";
	}	
		
	var url = jQuery(location).attr('href');
	var thisPageName = getPageName(url);
	//alert(thisPageName);
	
	//only load fancybox if not in gallery page
	if (thisPageName != "gallery")
	{    
		// Initialize the Lightbox automatically for any links to images with extensions .jpg, .jpeg, .png or .gif
    $("a[href$='.jpg'], a[href$='.png'], a[href$='.jpeg'], a[href$='.gif']").fancybox();
 
    // Initialize the Lightbox and add rel="gallery" to all gallery images when the gallery is set up using [gallery link="file"] so that a Lightbox Gallery exists
    $(".gallery a[href$='.jpg'], .gallery a[href$='.png'], .gallery a[href$='.jpeg'], .gallery a[href$='.gif']").attr('rel','gallery').fancybox();
	}
	
	// Initialize the Lightbox for any links with the 'fancybox' class
	$(".fancybox").fancybox();

	// Initalize the Lightbox for any links with the 'video' class and provide improved video embed support
	$(".video").fancybox({
			maxWidth        : 800,
			maxHeight       : 600,
			fitToView       : false,
			width           : '70%',
			height          : '70%',
			autoSize        : false,
			closeClick      : false,
			openEffect      : 'none',
			closeEffect     : 'none'
	});
		
	//$("#wpbgallery li img").addClass("img-responsive");
	
})(jQuery);