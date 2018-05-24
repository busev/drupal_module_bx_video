<?php
/**
 * Created by PhpStorm.
 * User: busev
 * Date: 14.05.2018
 * Time: 9:59
 */
$path_parts = pathinfo($element['url']);
global $language;
$detail = '/'.$language->prefix.'/video/'.$element['code'].'/';
p($carousel[0]->el_id);
?>
<div class="videoBlock" itemscope itemtype="http://schema.org/Article">
	<div class="videoCentr">
		<div class="videoInfo">
			<div class="videoDate" itemprop="datePublished"><?php print date("d.m.Y", $element['active_from']); ?></div>
			<div class="videoSize">
				<a href="<?php print $element['url']; ?>"><?php print t('Download');?></a>
				( .<?php print ( $path_parts['extension'] . ' ' . format_size($element['size']) ); ?> )
			</div>
		</div>
		<div class="videoBord">
			<div class="videoFrame">
				<iframe class="embed-responsive__item" width="100%" height="100%" src="<?php print $element['youtube']; ?>?rel=0&amp;showinfo=0&amp;wmode=transparent&amp;html5=1" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	<div class="videoText">
		<p itemprop="articleBody"><?php print $element['detail_text']; ?></p>
		<p class="authorContentBlock" itemprop="author">ALUTECH Group</p>
	</div>
</div>
<div class="videoCarousWrap">
  <div class="allVideo"><?php print t('More videos on this section');?></div>
  <div id="videoCaruselBot" class="window-row table owl-carousel">
		<?foreach($carousel as $item):?>
      <div class="ph-el<?php print (( $item->el_id == $element['el_id']) ? ' active_video' : ''); ?>">
        <div class="vcimg">
          <a href="<?php print $detail . $item->el_id; ?>">
            <div class="imgBord">
              <div class="play"></div>
              <div class="imgFrame"><img src="<?php print $item->preview_picture; ?>"></div>
            </div>
            <span><?php print $item->name; ?></span>
          </a>
        </div>
      </div>
		<?endforeach;?>
  </div>
</div>