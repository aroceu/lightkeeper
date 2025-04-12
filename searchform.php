<!--
Search Form: This is not a real page, this is a file that has the HTML and PHP for the search form textbox so it doesn't have to be copied and pasted in full everywhere.
-->

<form role="search" method="get" id="searchform" action="<?php bloginfo('url'); ?>" / >
	<label class="hidden" for="s" ></label>
	<input type="text" value="" placeholder="Enter your query here..." name="s" id="s" class="textInput"/>
	<input type="submit" id="searchsubmit" value="Search" class="textInput"/>
	</form>