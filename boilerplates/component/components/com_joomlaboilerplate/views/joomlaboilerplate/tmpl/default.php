<?php
/**
 * @package    [PACKAGE_NAME]
 *
 * @author     [AUTHOR] <[AUTHOR_EMAIL]>
 * @copyright  [COPYRIGHT]
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       [AUTHOR_URL]
 */

use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Layout\FileLayout;

defined('_JEXEC') or die;

HTMLHelper::_('script', 'com_joomlaboilerplate/script.js', array('version' => 'auto', 'relative' => true));
HTMLHelper::_('stylesheet', 'com_joomlaboilerplate/style.css', array('version' => 'auto', 'relative' => true));

$layout = new FileLayout('joomlaboilerplate.page');
$data = array();
$data['text'] = 'Hello Joomla!';
echo $layout->render($data);
