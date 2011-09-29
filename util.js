$('#username-clear').show();
$('#username-username').hide();
$('#username-clear').focus(function() {
	$(this).hide();
	$('#username-username').show().focus();
});
$('#username-username').blur(function() {
	if($(this).val() == '') {
		$('#username-clear').show();
		$(this).hide();
	}
});
$('#password-clear').show();
$('#password-password').hide();
$('#password-clear').focus(function() {
	$(this).hide();
	$('#password-password').show().focus();
});
$('#password-password').blur(function() {
	if($(this).val() == '') {
		$('#password-clear').show();
		$(this).hide();
	}
});


function bob(elem,dist,time,dir) {
	elem.animate({top:dir+'='+dist},time,function() {
		bob(elem,dist,time,dir=='+'?'-':'+');
	});
}

bob($("#cloud1"),10,900,'-');
bob($("#cloud2"),10,900,'+');
$("#cloud3").delay(450);
bob($("#cloud3"),10,900,'-');

$("#logo span").hover(function() {
	$(this).stop({clearQueue:true})
			.animate({top:'-0.3em'},{duration:200});
},function() {
	$(this).animate({top:'0.15em'},{duration:300}).animate({top:'0em'},{duration:200});
});