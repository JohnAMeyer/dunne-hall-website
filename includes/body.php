<script type="text/javascript" src="library/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="library/bootstrap.min.js"></script>

<script type="text/javascript">
	$(function(){
		$(".home-link").click(function(){
			location.href = "";
		});

		if($(document).height()  == $(window).height()){
			$("footer").css("position","absolute").css("bottom","0px");
		}else{
			$("footer").css("position","initial").css("bottom","initial");
		}
		$(window).resize(function(){
			if($(document).height()  == $(this).height()){
				$("footer").css("position","absolute").css("bottom","0px");
			}else{
				$("footer").css("position","initial").css("bottom","initial");
			}
		});
	});
</script>