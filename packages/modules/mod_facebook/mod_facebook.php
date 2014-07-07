<?php

echo KService::get('mod://site/facebook.html')
	->module($module)
	->attribs($attribs)
	->display();