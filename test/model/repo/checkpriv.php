#!/usr/bin/env php
<?php
include dirname(dirname(dirname(__FILE__))) . '/lib/init.php';
include dirname(dirname(dirname(__FILE__))) . '/class/repo.class.php';
su('admin');

/**

title=测试 repoModel->checkPriv();
cid=1
pid=1

*/

$checkPriv = new repoTest();
$repo = new stdclass();
$repo->acl = new stdclass();
$repo->acl->groups = '管理员';
$repo->acl->user   = 'admin';

$result = $checkPriv->checkPrivTest($repo);

r($result) && p($result) && e('0');