<?php

require_once '../config/params.php';

/**
 * Производит рендер шаблона
 *
 * @param string $file
 * @param array $variables
 *
 * @return bool|mixed|string
 */

function renderPhp ($file, array $input =[]) {
	include  '../templates/' . $file;
}

