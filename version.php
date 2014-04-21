<?php
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Kaltura repository plug-in version file
 *
 * @package    repository_kaltura
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

if (!defined('MOODLE_INTERNAL')) {
    die('Direct access to this script is forbidden.');    ///  It must be included from a Moodle page
}

$plugin->version = 2013071808;
$plugin->component  = 'repository_kaltura';
$plugin->release    = 'Kaltura release 3.1.02 (RL: 2.5.1.7)';
$plugin->requires = 2013051400;
$plugin->maturity = MATURITY_STABLE;
$plugin->dependencies = array(
    'local_kaltura' => 2013041500
);
