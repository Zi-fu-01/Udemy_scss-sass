
<header>
    <div class="hd_inner">
        <div class="hd_navi">
            <ul>
                <li><a href="/news/"><span>NEWS</span></a></li>
                <li><a href="/menu/"><span>MENU</span></a></li>
                <li><a href="/about/"><span>ABOUT</span></a></li>
            </ul>
            <div class="hd_logo">
                <a href="/">
                <!-- 条件分岐 -->
                <?php
                $now_folder = dirname($_SERVER['SCRIPT_NAME']); //実行されているPHPファイルのディレクトリ名を取得
                if ($now_folder == "/news" || $now_folder == "/menu" || $now_folder == "/about"|| $now_folder == "/news/detail") {//下層ページの時?>
                    <p><img src="/img/logo_green.png" width ="100" height="64" alt="佐渡の南インドカレー亜夢路"></p>
                <?php } else {//トップページの時?>
                    <h1><img src="/img/logo_white.png" width ="100" height="64" alt="佐渡の南インドカレー亜夢路"></h1>
                <?php } ?>    
            </a>
            </div>
            <ul>
                <li>
                    <!-- 条件分岐 -->
                    <?php
                    $now_folder = dirname($_SERVER['SCRIPT_NAME']); //実行されているPHPファイルのディレクトリ名を取得
                    if ($now_folder == "/news" || $now_folder == "/menu" || $now_folder == "/about"|| $now_folder == "/news/detail") {//下層ページの時?>                        
                        <a href="/#access">
                    <?php } else {//トップページの時?>
                        <a href="#access"><!-- スムーススクロールが出来る -->    
                        <?php } ?> 
                        <span>ACCESS</span>
                    </a>
                </li>
                <li><a href=""><span>CONTACT</span></a></li>
            </ul>
        </div>

        <div class="hd_tel">
            <p><span class="tel_number">01-2345-6789</span></p><!-- 電話アイコンは疑似要素 -->
            <p><span class="small">営業時間 10:30〜16:00（不定休）</span></p>
        </div>      
    
        <!-- ハンバーガーメニュー-->
        <div id="sp_menu_btn">
            <div class="sp_btn_cont">
                <span class="border01"></span>
                <span class="border02"></span>
                <span class="border03"></span>
            </div>
        </div>
    </div>
</header><!-- / header -->