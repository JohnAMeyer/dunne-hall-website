<?php
$root = '/';
if(strpos(dirname(__FILE__),'DunneHallWebsite')!== false)
	$root = '/dunne';
?>
<script type="text/javascript" src="<?php echo $root ?>/library/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="<?php echo $root ?>/library/bootstrap.min.js"></script>

<script type="text/javascript">
	$(function(){
		$(".home-link").click(function(){
			location.href = "/<?php if(strpos(dirname(__FILE__),'DunneHallWebsite')!== false) echo 'dunne'; ?>";
		});
	});
</script>