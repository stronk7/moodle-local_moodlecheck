<?php
// This file is part of Moodle - http://moodle.org/
//
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
 * Strings for local_moodlecheck
 *
 * @package    local_moodlecheck
 * @copyright  2012 Marina Glancy
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Moodle PHPdoc check';
$string['path'] = 'Path(s)';
$string['path_help'] = 'Specify one or more files and/or directories to check as local paths from Moodle installation directory';
$string['check'] = 'Check';
$string['checkallrules'] = 'Check over all rules';
$string['checkselectedrules'] = 'Check over selected rules (click "Show Advanced" button to see the list)';
$string['error_default'] = 'Error: {$a}';

$string['rule_filephpdocpresent'] = 'File-level phpdocs block is present';
$string['error_filephpdocpresent'] = 'File-level phpdocs block is not found';

$string['rule_classesdocumented'] = 'All classes are documented';
$string['error_classesdocumented'] = 'Class <b>{$a->class}</b> at line <b>{$a->line}</b> is not documented';
$string['rule_functionsdocumented'] = 'All functions are documented';
$string['error_functionsdocumented'] = 'Function <b>{$a->function}</b> at line <b>{$a->line}</b> is not documented';
$string['rule_variablesdocumented'] = 'All variables are documented';
$string['error_variablesdocumented'] = 'Variable <b>{$a->variable}</b> at line <b>{$a->line}</b> is not documented';
$string['rule_constsdocumented'] = 'All constants are documented';
$string['error_constsdocumented'] = 'Constant <b>{$a->object}</b> at line <b>{$a->line}</b> is not documented';
$string['rule_definesdocumented'] = 'All define statements are documented';
$string['error_definesdocumented'] = 'Define statement for <b>{$a->object}</b> at line <b>{$a->line}</b> is not documented';

$string['rule_noinlinephpdocs'] = 'There are no comments starting with three or more slashes';
$string['error_noinlinephpdocs'] = 'Found comment starting with three or more slashes at line <b>{$a->line}</b>';

$string['error_phpdocsfistline'] = 'No one-line description found in phpdocs for <b>{$a->object}</b> at line <b>{$a->line}</b>';
$string['rule_phpdocsfistline'] = 'File-level phpdocs block and class phpdocs should have one-line short description';

$string['error_functionarguments'] = 'Phpdocs for function <b>{$a->function}</b> at line <b>{$a->line}</b> has incomplete parameters list';
$string['rule_functionarguments'] = 'Phpdocs for functions properly define all parameters';

$string['error_variableshasvar'] = 'Phpdocs for variable <b>{$a->variable}</b> at line <b>{$a->line}</b> does not contain @var or incorrect';
$string['rule_variableshasvar'] = 'Phpdocs for variables contain @var with variable type and name';

$string['error_definedoccorrect'] = 'Phpdocs for define statement must start with constant name and dash: <b>{$a->object}</b> at line <b>{$a->line}</b>';
$string['rule_definedoccorrect'] = 'Check syntax for define statement';

$string['error_packagespecified'] = 'Package is not specified for <b>{$a->object}</b> at line <b>{$a->line}</b>. It is also not specified in file-level phpdocs';
$string['rule_packagespecified'] = 'All functions (which are not methods) and classes have package specified or inherited';

$string['rule_packagevalid'] = 'Package tag is valid';
$string['error_packagevalid'] = 'Package <b>{$a->package}</b> at line <b>{$a->line}</b> is not valid';

$string['rule_categoryvalid'] = 'Category tag is valid';
$string['error_categoryvalid'] = 'Category <b>{$a->category}</b> at line <b>{$a->line}</b> is not valid';

$string['rule_classeshavecopyright'] = 'All classes have @copyright tag';
$string['error_classeshavecopyright'] = 'Class <b>{$a->object}</b> at line <b>{$a->line}</b> does not have @copyright tag';

$string['rule_filehascopyright'] = 'Files have @copyright tag';
$string['error_filehascopyright'] = 'File-level phpdocs block does not have @copyright tag at line <b>{$a->line}</b>';