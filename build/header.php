<div id="fb-root"></div>
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/<?= $fb_lang ?>/all.js#xfbml=1&appId=367108623351010";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<header class="row wellPic">
	<div onclick="location.href='<?= SITE_URL ?>'">
		<ul class="thumbnails">
			<li class="span8" style="margin:0px auto; float:none">
				<a href="<?= SITE_URL ?>" class="thumbnail">
					<img src="img/logo_hi.png" alt="adminizer_logo" title="adminizer_logo" />
				</a>
		   </li>
		</ul>
	</div>
</header>
<div class="container" style="position:relative;">
	<div class="bs-links">
		<ul class="quick-links">
			<li>
			<?if($lang_code == 'ru'){?>
				<span class="label label-info">Русская Версия</span>
			<?}else{?>
				<a href="./?ru=1" style="position:relative; top:3px">Русская Версия</a>
			<?}?>
			</li>
			<li>
			<?if($lang_code == 'en'){?>
				<span class="label label-info">English Version</span>
			<?}else{?>
				<a href="./?en=1" style="position:relative; top:3px">English Version</a>
			<?}?>
			</li>
		</ul>
		<ul class="quick-links">
			<li>
				<iframe class="github-btn" src="http://markdotto.github.com/github-buttons/github-btn.html?user=dr-dimitru&repo=Adminizer&type=watch&count=true&size=large" allowtransparency="true" frameborder="0" scrolling="0" width="130px" height="30px"></iframe>
			</li>
			<li>
				<iframe class="github-btn" src="http://markdotto.github.com/github-buttons/github-btn.html?user=dr-dimitru&repo=Adminizer&type=fork&count=true&size=large" allowtransparency="true" frameborder="0" scrolling="0" width="120px" height="30px"></iframe>
			</li>
		</ul>
		<ul class="quick-links">
			<li class="follow-btn">
				<a href="https://twitter.com/VeliovGroup" class="twitter-follow-button" data-link-color="#0069D6" data-show-count="true">Follow @VeliovGroup</a>
			</li>
			<li class="follow-btn">
				<a href="https://twitter.com/smart_egg" class="twitter-follow-button" data-link-color="#0069D6" data-show-count="true">Follow @smart_egg</a>
			</li>
			<li class="tweet-btn">
				<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?= SITE_URL ?>" data-count="horizontal" data-via="VeliovGroup" data-related="<?= $value['post_title']; ?>">Tweet</a>
			</li>
			<li class="g-plusone" data-size="medium" data-href="<?= SITE_URL ?>"></li>
			<li class="tweet-btn" style="top: -3px;">
				<div class="fb-like" data-href="<?= SITE_URL ?>" data-send="false" data-layout="button_count" data-width="120" data-show-faces="false"></div>
			</li>
		</ul>
	</div>
</div>