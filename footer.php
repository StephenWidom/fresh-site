<footer></footer>
<script>
function loadCSS(name){
	var fileref=document.createElement("link")
	fileref.setAttribute("rel", "stylesheet")
	fileref.setAttribute("type", "text/css")
	fileref.setAttribute("href", name)
	document.getElementsByTagName("head")[0].appendChild(fileref)
}
loadCSS('<?php echo site_url(); ?>/css/style.css');
loadCSS('http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800');
loadCSS('http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(function(){

}); // End ready
</script>
</body>
</html>