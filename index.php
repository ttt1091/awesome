<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
  <?php wp_head(); ?>
</head>
<body>
<section class="hero">
  <div class="hero-body">
    <div class="container">
      <h1 class="title has-text-light">
        <?php bloginfo( 'name' ); ?>
      </h1>
      <h2 class="subtitle is-6 has-text-light">
        星を詠む力
      </h2>
    </div>
  </div>
  <div class="dust"></div>
  <a href="#content01" class="downIcons is-flex is-flex-direction-column is-justify-content-center">
    <svg class="triple-flash-one" style="max-width: 100%;" width="10" height="10" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <circle cx="5" cy="5" r="5" fill="#FFF"/>
    </svg>
    <svg class="triple-flash-two" style="max-width: 100%;" width="10" height="10" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <circle cx="5" cy="5" r="5" fill="#FFF"/>
      <feGaussianBlur stdDeviation="10"/>
    </svg>
    <svg class="triple-flash-three" style="max-width: 100%;" width="10" height="10" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <circle cx="5" cy="5" r="5" fill="#FFF"/>
      <feGaussianBlur stdDeviation="10"/>
    </svg>
</a>
</section>

<section class="section main-container">
  <div id="content01" class="container" tabindex="-1">
    <a href="#content02">content01</a>
    <div>https://www.willstyle.co.jp/blog/1449/</div>
  <div>
</section>

<section class="section main-container">
  <div id="content02" class="container" tabindex="-1">
    <a href="#content01">content2</a>
  <div>
</section>


<script>
      var scroll = new SmoothScroll();
      var options = {
        speed: 50,
        offset: 0,
				easing: 'easeOutQuad'
			};
			var smoothScrollWithoutHash = function (selector, settings) {
				var clickHandler = function (event) {
					var toggle = event.target.closest( selector );
					if ( !toggle || toggle.tagName.toLowerCase() !== 'a' ) return;
					var anchor = document.querySelector( toggle.hash );
					if ( !anchor ) return;
					event.preventDefault();
					scroll.animateScroll( anchor, toggle, options || {} );
				};
				window.addEventListener('click', clickHandler, false );
			};
			smoothScrollWithoutHash( 'a[href*="#"]' );
</script>

</body>
</html>
