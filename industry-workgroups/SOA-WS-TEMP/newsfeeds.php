<?php 
function rss_to_news_html($file_name, $category, $count, $details = FALSE, $moreURL = FALSE) {
	$rss = simplexml_load_file($file_name);
	ob_start();
	?>
		<table class="newsPosts" cellspacing="0" cellpadding="0">
	<?
	try {
		foreach ($rss->channel as $channel) 
		{
			foreach ($channel->item as $item) 
			{
				if ($count == 0) break;
				$then = strtotime($item->pubDate);
				$date = date("Y/m/d", $then);		
				$description = $item->description;
				$description = substr($description, 0, 300);
				$description = strip_tags($description, "<a>");
				$description .= "...";				
				$pluginExists = strpos($item->title, "Plugin:");
				if ($category != "")
				{
					foreach ($item->category as $categoryIterator)
				 	{
						if ($categoryIterator == $category)
						{
						?>  
							<tr>
								<td class="date" valign="top"><?=$date?></td>
								<td>
									<a class="link" href="<?=$item->link;?>" target="_blank"><?=$item->title;?></a> <br/>
									<? if ($details == TRUE) { ?>
										<div class="details"><?=$description;?></div>
									<? } ?>										
								</td>
							</tr>	 
							<?
							$count--;
						}
				 	}
				}
				else
				{
					?><tr>
						<td class="date"><?=$date?></td>
						<td><a class="link" href="<?=$item->link;?>"><?=$item->title;?></a><br/>
							<? if ($details == TRUE) { ?>
								<div class="details"><?=$description;?></div>
							<? } ?>
						</td>
					</tr> <?
					
					/*?><li><? if ($pluginImage != NULL){ ?>
						<img src="<?=$pluginImage;?>"/>
					<? } ?> 
						<a class="link" href="<?=$item->link;?>"><?=$item->title;?></a>
						<span class="posted"><?=$date?></span>
						<? if ($details == TRUE) { ?>
							<div class="details"><?=$description;?></div>
						<? } ?>
					  </li><? */
					$count--;
				}
			 
			}
		}
	}
	catch (Exception $e){
		echo '<!-- Error in NewsFeed - $file_name - '. $e->getMessage() . " -->";
	}		
	if ($moreURL != FALSE)
	{ ?>
		<tr>
			<td colspan="2" class="feedMore"><a href="<?=$moreURL;?>">More...</a></td>
		</tr>	
	<?}?>
		</table>
	<?
	$html = ob_get_contents();
	ob_end_clean();
	$html = mb_convert_encoding($html, "HTML-ENTITIES", "UTF-8");
	return $html;
}

function rss_to_small_news_html($file_name, $count) {
	$rss = simplexml_load_file($file_name);
	ob_start();
	?>
		<ul>
	<?
	try {
		foreach ($rss->channel as $channel) 
		{
			foreach ($channel->item as $item) 
			{
				if ($count == 0) break;
				$now = strtotime("now");
				$then = strtotime($item->pubDate);
				$date = date("Y/m/d", $then);						
				$description = $item->description;
				$description = substr($description, 0, 200);
				$description = strip_tags($description, "<a>");
				$description .= "...";
				$pluginExists = strpos($item->title, "Plugin:");
				if ($pluginExists)
				{
					$pluginExists += 7;
					if (strpos($item->title, "New ") === 0)
					{
						$liClass = "new";
					}
					if (strpos($item->title, "Updated ") === 0)
					{
						$liClass = "updated";
					}
					$item->title = trim(substr($item->title, $pluginExists));
					$titleExploded = explode("- v", $item->title, 2);
					if ($titleExploded[1] != "")
						$item->title = $titleExploded[0] . "v". $titleExploded[1] . "";
					else {
						$item->title = $titleExploded[0];
					}	
					
				}
				if ($category != "")
				{
					foreach ($item->category as $categoryIterator)
				 	{
						if ($categoryIterator == $category)
						{
						?>   
							<li><a class="link" href="<?=$item->link;?>" target="_blank"><?=$item->title;?>
	
							</a> <br/>
							<span class="posted"><?=$date?></span>
							<? if ($details == TRUE) { ?>
								<div class="details"><?=$description;?></div>
							<? } ?>		</li>					
							<?
							$count--;
						}
				 	}
				}
				else
				{
					?><li class="<?=$liClass;?>"><? if ($pluginImage != NULL){ ?>
						<img src="<?=$pluginImage;?>"/>
					<? } ?> 
						<a class="link" href="<?=$item->link;?>"><?=$item->title;?></a><br/>
						<span class="posted"><?=$date?></span>
						<? if ($details == TRUE) { ?>
							<div class="details"><?=$description;?></div>
						<? } ?>
					  </li><?
					$count--;
				}
			 
			}
		}
	}
	catch (Exception $e){
		echo '<!-- Error in NewsFeed - $file_name - '. $e->getMessage() . " -->";
	}		
	?>
		</ul>
	<?
	$html = ob_get_contents();
	ob_end_clean();
	$html = mb_convert_encoding($html, "HTML-ENTITIES", "UTF-8");
	return $html;
}
?>