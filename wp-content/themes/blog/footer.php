  <footer class="footer">
    <div class="footer__flex wrapper">
      <section class="footer__item">
        <h3 class="footer__title">About</h3>
        <p>
          テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
          テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
          テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
        </p>
        <ul class="footer__about-list">
          <li><a href="<?php echo esc_url(home_url('/profile/')); ?>" class="arrow">プロフィール詳細</a></li>
          <li><a href="<?php echo esc_url(home_url('/contact/')); ?>" class="arrow">お問い合わせ</a></li>
        </ul>
      </section>

      <section class="footer__item">
        <h3 class="footer__title">Menu</h3>
        <ul class="footer__menu-list">
          <li><a href="<?php echo esc_url(home_url('/category/news/')); ?>">NEW</a></li>
          <li><a href="<?php echo esc_url(home_url('/category/column/')); ?>">COLUMN</a></li>
          <li><a href="<?php echo esc_url(home_url('/category/hotel/')); ?>">HOTEL</a></li>
        </ul>
      </section>

      <section class="footer__item">
        <h3 class="footer__title">Twitter</h3>
        <a class="twitter-timeline" data-height="315" href="https://twitter.com/TwitterJP?ref_src=twsrc%5Etfw">Tweets by TwitterJP</a>
      </section>
    </div>

    <p class="footer__copyright">&copy; Travel & Blog</p>
  </footer>

  <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
  <script src="scripts/main.js"></script>
  <?php wp_footer() ?>
  </body>

  </html>