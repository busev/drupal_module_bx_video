<?php
/**
 * Created by PhpStorm.
 * User: busev
 * Date: 14.05.2018
 * Time: 9:59
 */
global $language;
?>
<div class="videoListDep">
	<ul>
		<?php foreach ($links as $link):?>
			<li>
				<p class="vDate"><?php print date("d.m.Y", $link->active_from); ?></p>
				<a class="depTitle" href="/<?php print $language->prefix; ?>/video/<?php print $link->code . '/' . $link->el_id; ?>"><?php print $link->name; ?></a>
				<div class="listImgWrap">
					<div class="listImgBord">
						<a href="/<?php print $language->prefix; ?>/video/<?php print $link->code . '/' . $link->el_id; ?>">
							<div class="play2"></div>
							<div class="listImgFrame">
								<img src="<?php print $link->preview_picture; ?>">
							</div>
						</a>
					</div>
					<div class="vidDown">
						<img src="/<?php print drupal_get_path('theme',$GLOBALS['theme']); ?>/images/videoMark.png" alt="<?php print $link->name; ?>">
						<a class="download" href="<?php print $link->url; ?>"><?php print t('Download');?></a>
						(<?php print format_size($link->size); ?>)
					</div>
				</div>
				<p><?php print $link->preview_text; ?></p>
			</li>
		<?php endforeach; ?>
	</ul>
</div>
<div class="videoPages"><div class="pages"><?php echo $paging;?></div></div>