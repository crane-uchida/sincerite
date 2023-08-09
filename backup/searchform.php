<form class="flex" id="form" action="<?php echo esc_url( home_url('/') ); ?>" method="get">
  <input id="s-box" name="s" type="text" placeholder="キーワードを入力"/>
  <button type="submit" id="s-btn-area">
    <div id="s-btn">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/search-icon.svg" alt="">
    </div>
  </button>
</form>