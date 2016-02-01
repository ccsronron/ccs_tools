<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Movie | Home</title>
	<script type="text/javascript" src="libraries/jquery/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="libraries/jquery/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="libraries/media_element/mediaelement-and-player.min.js"></script>
	<link rel="stylesheet" href="libraries/media_element/mediaelementplayer.css" />
</head>
<body>
	
	
<video id="player1" src="media/ep1/ep1.mp4" width="250" height="220" poster="assets/img/poster.jpg" controls="controls" preload="none"></video>
<br><span id="mode"></span>
<br><span id="time"></span>
<br><span id="counter"></span>
<br>
<input type="button" value="play" id="play">

<script type="text/javascript">
function myFunction() {
    setInterval(function(){ alert("Hello"); }, 3000);
}
$(document).ready(function(){
	function display(){
		$('audio,video').mediaelementplayer({
			success: function(player, node) {
				setInterval(
					function(){ 
						display(); 
						var time = player.currentTime;
						$('#time').html('Time: ' + time.toFixed(0));
						var mode = player.pluginType;
						$('#mode').html('Mode: ' + mode);
					}, 1000
				);
			}
		});
	}
	display();
	//play video
	$('#play').live("click",function() {
		$(this).attr("id","stop").val("stop");
		$('video, audio').each(function() {
			  $(this)[0].player.play();
		});
	});
	//stop the video
	$('#stop').live("click",function() {
		$(this).attr("id","resume").val("resume");
		$('video, audio').each(function() {
			  $(this)[0].player.pause();
		});
	});
	//resume the video
	$('#resume').live("click",function() {
		$(this).attr("id","stop").val("stop");
		$('video, audio').each(function() {
			  $(this)[0].player.play();  
		});
	});
	
	
});
</script>

</body>
</html>