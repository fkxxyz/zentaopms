<?php
$lang->mainNav->menuOrder = array();

$lang->mainNav->menuOrder[5]  = 'my';
$lang->mainNav->menuOrder[20] = 'project';
$lang->mainNav->menuOrder[35] = 'doc';
$lang->mainNav->menuOrder[45] = 'system';
$lang->mainNav->menuOrder[65] = 'admin';


/* My menu. */
$lang->my->menu           = new stdclass();
$lang->my->menu->index    = array('link' => "$lang->dashboard|my|index");
$lang->my->menu->calendar = array('link' => "$lang->calendar|my|calendar|", 'subModule' => 'todo', 'alias' => 'todo');
$lang->my->menu->task     = array('link' => "{$lang->task->common}|my|task|", 'subModule' => 'task');

/* My menu order. */
$lang->my->menuOrder     = array();
$lang->my->menuOrder[5]  = 'index';
$lang->my->menuOrder[10] = 'calendar';
$lang->my->menuOrder[15] = 'task';

$lang->my->dividerMenu = ',calendar,';

$lang->project->target = '目标';

/* Scrum menu. */
$lang->scrum->menu            = new stdclass();
$lang->scrum->menu->index     = array('link' => "{$lang->dashboard}|project|index|project=%s");
$lang->scrum->menu->execution = array('link' => "$lang->executionKanban|project|execution|status=all&projectID=%s", 'exclude' => 'execution-testreport');
$lang->scrum->menu->story     = array('link' => "{$lang->project->target}|projectstory|story|projectID=%s", 'subModule' => 'projectstory,tree', 'alias' => 'story,track');
$lang->scrum->menu->doc       = array('link' => "{$lang->doc->common}|doc|tableContents|type=project&objectID=%s", 'subModule' => 'doc');
$lang->scrum->menu->dynamic   = array('link' => "$lang->dynamic|project|dynamic|project=%s");
$lang->scrum->menu->settings  = array('link' => "$lang->settings|project|view|project=%s", 'subModule' => 'stakeholder', 'alias' => 'edit,manageproducts,group,managemembers,manageview,managepriv,whitelist,addwhitelist,team');

$lang->scrum->dividerMenu = ',execution,settings,';

/* Scrum menu order. */
$lang->scrum->menuOrder     = array();
$lang->scrum->menuOrder[5]  = 'index';
$lang->scrum->menuOrder[10] = 'execution';
$lang->scrum->menuOrder[15] = 'story';
$lang->scrum->menuOrder[20] = 'doc';
$lang->scrum->menuOrder[25] = 'dynamic';
$lang->scrum->menuOrder[30] = 'settings';

$lang->scrum->menu->doc['subMenu'] = new stdclass();

$lang->scrum->menu->settings['subMenu']              = new stdclass();
$lang->scrum->menu->settings['subMenu']->view        = array('link' => "$lang->overview|project|view|project=%s", 'alias' => 'edit');
$lang->scrum->menu->settings['subMenu']->members     = array('link' => "{$lang->team->common}|project|team|project=%s", 'alias' => 'managemembers,team');
$lang->scrum->menu->settings['subMenu']->whitelist   = array('link' => "{$lang->whitelist}|project|whitelist|project=%s", 'subModule' => 'personnel');
