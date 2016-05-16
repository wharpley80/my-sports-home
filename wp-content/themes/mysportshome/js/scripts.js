jQuery(document).ready(function( $ ) {
	$(".view-img").on("click", function() {
		event.preventDefault();

		var id = $(this).parent('a').find('span').data('id');

    $('#imagepreview').attr('src', $('#imageresource' + id).attr('src')); // here asign the image to the modal when the user click the enlarge link
    $('#imagemodal').modal('show'); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function
	});
});