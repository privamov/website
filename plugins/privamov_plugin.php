<?php

/**
 * Priva'Mov plugin.
 *
 * @author Vincent Primault
 */
class Privamov_Plugin
{
	public function before_render(&$twig_vars, &$twig, &$template)
	{
        $basedir = rtrim(str_replace('index.php', '', $_SERVER['PHP_SELF']), '/');
        $path = str_replace($basedir, '', $_SERVER['REQUEST_URI']);
        $twig_vars['request_path'] = $path;
        $twig_vars['request_url'] = $_SERVER['REQUEST_URI'];
	}
}