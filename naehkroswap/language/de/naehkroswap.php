<?php
/**
 *
 * This file is part of the phpBB Forum Software package.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * For full copyright and license information, please see
 * the docs/CREDITS.txt file.
 *
 */

  if (!defined('IN_PHPBB'))
  {
    exit;
  }

  if (empty($lang) || !is_array($lang))
  {
    $lang = array();
  }

  $lang = array_merge($lang, array(
    'SWAP'             => 'Swap Skript',
    'DEMO_GOODBYE'     => 'Goodbye %s!',
    'DEMO_HELLO'       => 'Hello %s!',
    'NO_AUTH_SPEAKING' => 'You must not try to talk to %s',
  ));

?>
