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

namespace naehkromanten\naehkroswap\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Event listener
 */
class main_listener implements EventSubscriberInterface
{
  static public function getSubscribedEvents()
  {
    return array(
        'core.user_setup' => 'load_language_on_setup',
    );
  }

  public function load_language_on_setup($event)
  {
    $lang_set_ext = $event['lang_set_ext'];
    $lang_set_ext[] = array(
        'ext_name' => 'naehkromanten/naehkroswap',
        'lang_set' => 'naehkroswap',
    );
    $event['lang_set_ext'] = $lang_set_ext;
  }
}
?>
