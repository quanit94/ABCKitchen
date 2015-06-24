$(document).ready(function() {
	$('#login_content').hide();
	$('#button_login').click(function() {
		$('#login_content').toggle('slide');
		if($('#button_login').hasClass('arrow-right')){
			$('#button_login').removeClass('arrow-right').addClass('arrow-left');		
		}else{
			$('#button_login').removeClass('arrow-left').addClass('arrow-right');	
		}
	});

	
});

var qs = (function(a) {
    if (a == "") return {};
    var b = {};
    for (var i = 0; i < a.length; ++i)
    {
        var p=a[i].split('=', 2);
        if (p.length == 1)
            b[p[0]] = "";
        else
            b[p[0]] = decodeURIComponent(p[1].replace(/\+/g, " "));
    }
    return b;
})(window.location.search.substr(1).split('&'));