<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=196199780565306";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<aside class="module rounded blackhaze" id="facebook">
	<header>
        <i class="icon-facebook circle facebook"></i>
		<h1>Facebook</h1>
	</header>

    <div class="fb-like-box" data-href="http://www.facebook.com/<?= $params->username ?>" data-width="250" data-height="425" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
</aside>