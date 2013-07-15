<html>
	<?php include 'header.php';?>
	<title>News: Investopedia</title>
	<body>
		<?php include 'navigation.php';?>
		<div id="PageContainerOuter">
			<div id="PageContainer">
				<div class="innerclear">
					</br></br>
					<h1>Investopedia News</h1>
					</br></br>

					<?php
				    $i=0;
				    $url = "http://news.google.com/?ned=us&topic=t&output=rss"; // url of google news
				    $xml = simplexml_load_file('http://finance.yahoo.com/news/provider-investopedia/rss'); //loading the document
				    $items = $xml->channel->item; //gets the title of the document.     
				    echo "<article  class=\"block_topic_post\">";
				    foreach($items as $item){ if($i<10){ echo "<div id=\"news$i\">";$i++;
				    ?>
				    <div style="float: left;width:600px;padding-top:10px; padding-bottom:10px;">
				    <?php
				    echo "<p class = \"publ_news\">".$item->pubDate."</p></br>";
				    echo "<a class=\"links_news\" href=\"".$item->link."\" target=\"_blank\">".$item->title."</a>";
				    echo "</br></br>";
				    echo "<p class=\"p_news\">".$item->description."</p></br>";
				    echo "</br></br>";
				    echo "</div>";
				    echo "</div>";

				    }
				    else
				    break;
				    }
				    echo "</article>";
					?>
				</div>
			</div>
		</div>
	</body>
</html>