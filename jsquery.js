$(document).ready(function(){
	console.log('dog')
    $('[data-toggle="popover"]').popover(); 
    $('.first').click(function(){
    	$('#viewdetails').collapse('toggle');
    });
});