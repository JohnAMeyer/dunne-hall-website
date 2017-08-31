<script type="text/javascript">
$.get("<?php echo $root; ?>etc/mailchimp_rss.php",function(data){
	$("#mailchimp").html($($.parseXML(data)).find("description:eq(1)").html().replace(/^[\s\S]*?<body(.*?)>([\s\S]*?)<\/body>[\s\S]*?$/,"<div$1>$2</div>"));
	$(window).resize();
})
</script>