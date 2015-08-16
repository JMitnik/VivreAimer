$(document).ready(function(){
	console.log('dog')
    $('[data-toggle="popover"]').popover(); 
    $('.qtag').click(function(){
    	$('#viewdetails').collapse('toggle');
    });
});