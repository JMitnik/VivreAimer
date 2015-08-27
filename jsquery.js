$(document).ready(function(){
    $('[data-toggle="popover"]').popover(); 
    $('.qtag').click(function(){
    	var parent = $(this).parent();
    	var chosenSibling = parent.siblings('.collapse');
    	$(chosenSibling).collapse("toggle");
    });
});

