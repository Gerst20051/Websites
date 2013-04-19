window.$ && main() || (function(){
	var j = document.createElement("script");
	j.setAttribute("type","text/javascript");
	j.setAttribute("src","jquery.js");
	j.onload = main;
	j.onreadystatechange = function(){
		if (this.readyState == "complete" || this.readyState == "loaded") main();
	};
	(document.getElementsByTagName("head")[0] || document.documentElement).appendChild(j);
})();

function main(){
window.aC = {
title: "HnS Text",
init: function(){
	aC.dom();
},
dom: function(){
	$("article > header #logoaction").live('click',function(){
		var subject = $.trim($("#subject").val()), message = $.trim($("#message").val());
		if (subject == "" || message == "") return;
		$.post("http://hns.netai.net/text/ajax.php", {subject:subject,message:message,apikey:"hnsapi"}, function(response){
			if (typeof response.error === "undefined") {
				$("#subject").val('');
				$("#message").val('Enter your message here.');
				alert("Message has been sent!");
			}
		});
	});
	$("#message").live('focus',function(){
		if ($(this).val() == "Enter your message here.") $(this).val('');
	}).live('blur',function(){
		if ($.trim($(this).val()) == "") $(this).val('Enter your message here.');
	})
}
};

$(document).ready(window.aC.init);

return true;
}

(function(){
	window._gaq=[['_setAccount','UA-35797994-1'],['_trackPageview']];
	var ga=document.createElement('script');ga.type='text/javascript';ga.async=true;
	ga.src=('https:'==document.location.protocol?'https://ssl':'http://www')+'.google-analytics.com/ga.js';
	var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(ga,s);
})();