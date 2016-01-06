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
        'core.page_header' => 'add_page_header_link',
    );
  }

  /* @var \phpbb\controller\helper */
  protected $helper;

  /* @var \phpbb\template\template */
  protected $template;

  /**
   * Constructor
   *
   * @param \phpbb\controller\helper $helper
   * @param \phpbb\template\template $template
   */
  public function __construct(\phpbb\controller\helper $helper, \phpbb\template\template $template)
  {
      $this->helper = $helper;
      $this->template = $template;
  }

  public function add_page_header_link($event)
  {
    $this->template->assign_vars(array(
      'U_SWAP' => $this->helper->route('naehkromanten_naehkroswap_route', array('name' => 'world')),
    ));
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
