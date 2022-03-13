<?php
$url_encode = urlencode(get_permalink());
$title_encode = urlencode(get_the_title()) . '｜' . get_bloginfo('name');
?>

<div class="sns">
  <ul class="sns__inner">
    <li class="sns-items">
      <!-- Twitter -->
      <a class="btn--twitter" href="//twitter.com/intent/tweet?url=<?php echo $url_encode ?>&text=<?php echo $title_encode ?>&tw_p=tweetbutton &hashtags=テスト#タグ" target="_blank">
        <i class="fab fa-twitter"></i>

      </a>
    </li>
    <li class="sns-items">
      <!-- Facebook -->
      <a class="btn--facebook" href="//www.facebook.com/sharer.php?src=bm&u=<?php echo $url_encode; ?>&t=<?php echo $title_encode; ?>" target="_blank">
        <i class="fab fa-facebook-f"></i>
      </a>
    </li>
    <li class="sns-items">
      <!-- Line -->
      <a class="btn--line" href="//social-plugins.line.me/lineit/share?url=<?php echo $url_encode; ?>" target="_blank">
      </a>

      <i class="fab fa-line"></i>
      </a>
    </li>
    <li class="sns-items">
      <!-- はてな -->
      <a href="http://b.hatena.ne.jp/entry/<?php echo $url_encode; ?>" target="blank">
        <i class="fab fa-hatena"></i>
      </a>
    </li>
  </ul>

</div>