
<!-- sp_menu ハンバーガーメニュー -->
 <div id="sp_menu">
  <div class="main_width">
    <div id="sp_menu_area">
      <div id="sp_gnavi" class="content_navi">
        <ul>
          <li><a href="/news/"><span>NEWS</span></a></li>
          <li><a href="/menu/"><span>MENU</span></a></li>
          <li><a href="/about/"><span>ABOUT</span></a></li>
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
    </div>
  </div>
</div><!-- / #sp_menu -->