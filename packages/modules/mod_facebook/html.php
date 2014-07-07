<?php

class ModFacebookHtml extends ModDefaultHtml
{
	public function display()
	{
		$this->assign('params', $this->module->params);

		return parent::display();
	}
}