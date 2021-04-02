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
        subtitle
      </h2>
    </div>
  </div>
  <div class="dust"></div>
  <div class="downIcons is-flex is-flex-direction-column is-justify-content-center">
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
  </div>
</section>

<section class="section">
  <div class="container">
    content
  <div>
</section>

</body>
</html>
