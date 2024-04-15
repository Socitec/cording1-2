  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <img class="footer-logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/footer_logo.png" alt="logo">
      <div class="link-box">
        <a class="link" href="https://color-with.com/" target="_blank" rel="noopener noreferrer">
          <p class="link-text">
            運営会社
          </p>
        </a>
        <a class="link" href="https://color-with.com/privacy-policy" target="_blank" rel="noopener noreferrer">
          <p class="link-text">
            プライバシーポリシー
          </p>
        </a>
        <a class="link" href="<?php echo home_url(); ?>/commerce">
          <p class="link-text">
            特定商取引法に基づく表記
          </p>
        </a>
      </div>
      <div class="copyright-area">
        <p class="copyright-text">
          © 2023 Color WiTh Inc.
        </p>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <!-- <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/javascript/script.js"></script> -->
  <?php wp_footer(); ?>
  </body>

</html>