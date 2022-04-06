<head>
    <meta charset="utf-8">
    <title>亜夢路 | 佐渡の南インドカレー</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=0"><!-- レスポンシブ（画面に合わせて全体が縮小されない -->
    <meta name="description" content="佐渡の南インドカレー亜夢路">
    <meta property="og:type" content="website"/>
    <meta property="og:url" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:description" content="佐渡の南インドカレー亜夢路"/>
    <meta property="og:site_name" content="佐渡の南インドカレー亜夢路"/>
    <meta property="og:title" content="佐渡の南インドカレー亜夢路"/>
    <link rel="stylesheet" href="/css/common.css">
    <!-- 条件分岐でCSSを出し分け -->
    <?php
    $now_folder = dirname($_SERVER['SCRIPT_NAME']); //実行されているPHPファイルのディレクトリ名を取得
    if ($now_folder == "/news" || $now_folder == "/menu" || $now_folder == "/about"|| $now_folder == "/news/detail") {//下層ページの時?>
        <link rel="stylesheet" href="/css/lower.css">
    <?php } else {//トップページの時?>
        <link rel="stylesheet" href="/css/home.css">
    <?php } ?>   
   <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+English&family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <!-- jQueryの読み込み -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>