<?php
/**
 * The action module zh-cn file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     action
 * @version     $Id: zh-cn.php 4955 2013-07-02 01:47:21Z chencongzhi520@gmail.com $
 * @link        http://www.zentao.net
 */
global $config;

$lang->action->common     = '系统日志';
$lang->action->product    = $lang->productCommon;
$lang->action->project    = '项目';
$lang->action->execution  = $lang->executionCommon;
$lang->action->objectType = '对象类型';
$lang->action->objectID   = '对象ID';
$lang->action->objectName = '对象名称';
$lang->action->actor      = '操作者';
$lang->action->action     = '动作';
$lang->action->actionID   = '记录ID';
$lang->action->date       = '日期';
$lang->action->extra      = '附加值';

$lang->action->trash       = '回收站';
$lang->action->undelete    = '还原';
$lang->action->hideOne     = '隐藏';
$lang->action->hideAll     = '全部隐藏';
$lang->action->editComment = '修改备注';
$lang->action->create      = '添加备注';
$lang->action->comment     = '备注';

$lang->action->undeleteAction = '还原数据';
$lang->action->hideOneAction  = '隐藏数据';

$lang->action->trashTips      = '提示：为了保证系统的完整性，禅道系统的删除都是标记删除。';
$lang->action->textDiff       = '文本格式';
$lang->action->original       = '原始格式';
$lang->action->confirmHideAll = '您确定要全部隐藏这些记录吗？';
$lang->action->needEdit       = '要还原%s的名称或代号已经存在，请编辑更改。';
$lang->action->historyEdit    = '历史记录编辑不能为空。';
$lang->action->noDynamic      = '暂时没有动态。';

$lang->action->history = new stdclass();
$lang->action->history->action = '关联日志';
$lang->action->history->field  = '字段';
$lang->action->history->old    = '旧值';
$lang->action->history->new    = '新值';
$lang->action->history->diff   = '不同';

$lang->action->dynamic = new stdclass();
$lang->action->dynamic->today      = '今天';
$lang->action->dynamic->yesterday  = '昨天';
$lang->action->dynamic->twoDaysAgo = '前天';
$lang->action->dynamic->thisWeek   = '本周';
$lang->action->dynamic->lastWeek   = '上周';
$lang->action->dynamic->thisMonth  = '本月';
$lang->action->dynamic->lastMonth  = '上月';
$lang->action->dynamic->all        = '所有';
$lang->action->dynamic->hidden     = '已隐藏';
$lang->action->dynamic->search     = '搜索';

$lang->action->periods['all']       = $lang->action->dynamic->all;
$lang->action->periods['today']     = $lang->action->dynamic->today;
$lang->action->periods['yesterday'] = $lang->action->dynamic->yesterday;
$lang->action->periods['thisweek']  = $lang->action->dynamic->thisWeek;
$lang->action->periods['lastweek']  = $lang->action->dynamic->lastWeek;
$lang->action->periods['thismonth'] = $lang->action->dynamic->thisMonth;
$lang->action->periods['lastmonth'] = $lang->action->dynamic->lastMonth;

$lang->action->objectTypes['product']     = $lang->productCommon;
$lang->action->objectTypes['branch']      = '分支';
$lang->action->objectTypes['story']       = $lang->SRCommon;
$lang->action->objectTypes['design']      = '设计';
$lang->action->objectTypes['productplan'] = '计划';
$lang->action->objectTypes['release']     = '发布';
$lang->action->objectTypes['program']     = '项目集';
$lang->action->objectTypes['project']     = '项目';
$lang->action->objectTypes['execution']   = $config->systemMode == 'new' ? '执行' : $lang->executionCommon;
$lang->action->objectTypes['task']        = '任务';
$lang->action->objectTypes['build']       = '版本';
$lang->action->objectTypes['job']         = '构建';
$lang->action->objectTypes['bug']         = 'Bug';
$lang->action->objectTypes['case']        = '用例';
$lang->action->objectTypes['caseresult']  = '用例结果';
$lang->action->objectTypes['stepresult']  = '用例步骤';
$lang->action->objectTypes['caselib']     = '用例库';
$lang->action->objectTypes['testsuite']   = '套件';
$lang->action->objectTypes['testtask']    = '测试单';
$lang->action->objectTypes['testreport']  = '报告';
$lang->action->objectTypes['doc']         = '文档';
$lang->action->objectTypes['doclib']      = '文档库';
$lang->action->objectTypes['todo']        = '待办';
$lang->action->objectTypes['risk']        = '风险';
$lang->action->objectTypes['issue']       = '问题';
$lang->action->objectTypes['module']      = '模块';
$lang->action->objectTypes['user']        = '用户';
$lang->action->objectTypes['stakeholder'] = '干系人';
$lang->action->objectTypes['budget']      = '费用估算';
$lang->action->objectTypes['entry']       = '应用';
$lang->action->objectTypes['webhook']     = 'Webhook';
$lang->action->objectTypes['team']        = '团队';
$lang->action->objectTypes['whitelist']   = '白名单';

/* 用来描述操作历史记录。*/
$lang->action->desc = new stdclass();
$lang->action->desc->common         = '$date, <strong>$action</strong> by <strong>$actor</strong>。' . "\n";
$lang->action->desc->extra          = '$date, <strong>$action</strong> as <strong>$extra</strong> by <strong>$actor</strong>。' . "\n";
$lang->action->desc->opened         = '$date, 由 <strong>$actor</strong> 创建。' . "\n";
$lang->action->desc->openedbysystem = '$date, 由系统创建。' . "\n";
$lang->action->desc->created        = '$date, 由 <strong>$actor</strong> 创建。' . "\n";
$lang->action->desc->added          = '$date, 由 <strong>$actor</strong> 添加。' . "\n";
$lang->action->desc->changed        = '$date, 由 <strong>$actor</strong> 变更。' . "\n";
$lang->action->desc->edited         = '$date, 由 <strong>$actor</strong> 编辑。' . "\n";
$lang->action->desc->assigned       = '$date, 由 <strong>$actor</strong> 指派给 <strong>$extra</strong>。' . "\n";
$lang->action->desc->closed         = '$date, 由 <strong>$actor</strong> 关闭。' . "\n";
$lang->action->desc->closedbysystem = '$date, 由系统关闭。' . "\n";
$lang->action->desc->deleted        = '$date, 由 <strong>$actor</strong> 删除。' . "\n";
$lang->action->desc->deletedfile    = '$date, 由 <strong>$actor</strong> 删除了附件：<strong><i>$extra</i></strong>。' . "\n";
$lang->action->desc->editfile       = '$date, 由 <strong>$actor</strong> 编辑了附件：<strong><i>$extra</i></strong>。' . "\n";
$lang->action->desc->erased         = '$date, 由 <strong>$actor</strong> 删除。' . "\n";
$lang->action->desc->undeleted      = '$date, 由 <strong>$actor</strong> 还原。' . "\n";
$lang->action->desc->hidden         = '$date, 由 <strong>$actor</strong> 隐藏。' . "\n";
$lang->action->desc->commented      = '$date, 由 <strong>$actor</strong> 添加备注。' . "\n";
$lang->action->desc->activated      = '$date, 由 <strong>$actor</strong> 激活。' . "\n";
$lang->action->desc->blocked        = '$date, 由 <strong>$actor</strong> 阻塞。' . "\n";
$lang->action->desc->moved          = '$date, 由 <strong>$actor</strong> 移动，之前为 "$extra"。' . "\n";
$lang->action->desc->confirmed      = '$date, 由 <strong>$actor</strong> 确认' . $lang->SRCommon . '变动，最新版本为<strong>#$extra</strong>。' . "\n";
$lang->action->desc->caseconfirmed  = '$date, 由 <strong>$actor</strong> 确认用例变动，最新版本为<strong>#$extra</strong>。' . "\n";
$lang->action->desc->bugconfirmed   = '$date, 由 <strong>$actor</strong> 确认Bug。' . "\n";
$lang->action->desc->frombug        = '$date, 由 <strong>$actor</strong> Bug转化而来，Bug编号为 <strong>$extra</strong>。';
$lang->action->desc->started        = '$date, 由 <strong>$actor</strong> 启动。' . "\n";
$lang->action->desc->restarted      = '$date, 由 <strong>$actor</strong> 继续。' . "\n";
$lang->action->desc->delayed        = '$date, 由 <strong>$actor</strong> 延期。' . "\n";
$lang->action->desc->suspended      = '$date, 由 <strong>$actor</strong> 挂起。' . "\n";
$lang->action->desc->recordestimate = '$date, 由 <strong>$actor</strong> 记录工时，消耗 <strong>$extra</strong> 小时。';
$lang->action->desc->editestimate   = '$date, 由 <strong>$actor</strong> 编辑工时。';
$lang->action->desc->deleteestimate = '$date, 由 <strong>$actor</strong> 删除工时。';
$lang->action->desc->canceled       = '$date, 由 <strong>$actor</strong> 取消。' . "\n";
$lang->action->desc->svncommited    = '$date, 由 <strong>$actor</strong> 提交代码，版本为<strong>#$extra</strong>。' . "\n";
$lang->action->desc->gitcommited    = '$date, 由 <strong>$actor</strong> 提交代码，版本为<strong>#$extra</strong>。' . "\n";
$lang->action->desc->finished       = '$date, 由 <strong>$actor</strong> 完成。' . "\n";
$lang->action->desc->paused         = '$date, 由 <strong>$actor</strong> 暂停。' . "\n";
$lang->action->desc->verified       = '$date, 由 <strong>$actor</strong> 验收。' . "\n";
$lang->action->desc->diff1          = '修改了 <strong><i>%s</i></strong>，旧值为 "%s"，新值为 "%s"。<br />' . "\n";
$lang->action->desc->diff2          = '修改了 <strong><i>%s</i></strong>，区别为：' . "\n" . "<blockquote class='textdiff'>%s</blockquote>" . "\n<blockquote class='original'>%s</blockquote>";
$lang->action->desc->diff3          = '将文件名 %s 改为 %s 。' . "\n";
$lang->action->desc->linked2bug     = '$date 由 <strong>$actor</strong> 关联到版本 <strong>$extra</strong>';
$lang->action->desc->resolved       = '$date, 由 <strong>$actor</strong> 解决。' . "\n";
$lang->action->desc->managed        = '$date, 由 <strong>$actor</strong> 维护。' . "\n";

/* 用来描述和父子任务相关的操作历史记录。*/
$lang->action->desc->createchildren     = '$date, 由 <strong>$actor</strong> 创建子任务 <strong>$extra</strong>。' . "\n";
$lang->action->desc->linkchildtask      = '$date, 由 <strong>$actor</strong> 关联子任务 <strong>$extra</strong>。' . "\n";
$lang->action->desc->unlinkchildrentask = '$date, 由 <strong>$actor</strong> 移除子任务 <strong>$extra</strong>。' . "\n";
$lang->action->desc->linkparenttask     = '$date, 由 <strong>$actor</strong> 关联到父任务 <strong>$extra</strong>。' . "\n";
$lang->action->desc->unlinkparenttask   = '$date, 由 <strong>$actor</strong> 从父任务<strong>$extra</strong>取消关联。' . "\n";
$lang->action->desc->deletechildrentask = '$date, 由 <strong>$actor</strong> 删除子任务<strong>$extra</strong>。' . "\n";

/* 用来描述和父子需求相关的操作历史记录。*/
$lang->action->desc->createchildrenstory = '$date, 由 <strong>$actor</strong> 创建子需求 <strong>$extra</strong>。' . "\n";
$lang->action->desc->linkchildstory      = '$date, 由 <strong>$actor</strong> 关联子需求 <strong>$extra</strong>。' . "\n";
$lang->action->desc->unlinkchildrenstory = '$date, 由 <strong>$actor</strong> 移除子需求 <strong>$extra</strong>。' . "\n";
$lang->action->desc->linkparentstory     = '$date, 由 <strong>$actor</strong> 关联到父需求 <strong>$extra</strong>。' . "\n";
$lang->action->desc->unlinkparentstory   = '$date, 由 <strong>$actor</strong> 从父需求<strong>$extra</strong>取消关联。' . "\n";
$lang->action->desc->deletechildrenstory = '$date, 由 <strong>$actor</strong> 删除子需求<strong>$extra</strong>。' . "\n";

/* 关联用例和移除用例时的历史操作记录。*/
$lang->action->desc->linkrelatedcase   = '$date, 由 <strong>$actor</strong> 关联相关用例 <strong>$extra</strong>。' . "\n";
$lang->action->desc->unlinkrelatedcase = '$date, 由 <strong>$actor</strong> 移除相关用例 <strong>$extra</strong>。' . "\n";

/* 用来显示动态信息。*/
$lang->action->label                        = new stdclass();
$lang->action->label->created               = '创建';
$lang->action->label->opened                = '创建';
$lang->action->label->openedbysystem        = '系统创建';
$lang->action->label->closedbysystem        = '系统关闭';
$lang->action->label->added                 = '添加';
$lang->action->label->changed               = '变更了';
$lang->action->label->edited                = '编辑了';
$lang->action->label->assigned              = '指派了';
$lang->action->label->closed                = '关闭了';
$lang->action->label->deleted               = '删除了';
$lang->action->label->deletedfile           = '删除附件';
$lang->action->label->editfile              = '编辑附件';
$lang->action->label->erased                = '删除了';
$lang->action->label->undeleted             = '还原了';
$lang->action->label->hidden                = '隐藏了';
$lang->action->label->commented             = '评论了';
$lang->action->label->communicated          = '沟通了';
$lang->action->label->activated             = '激活了';
$lang->action->label->blocked               = '阻塞了';
$lang->action->label->resolved              = '解决了';
$lang->action->label->reviewed              = '评审了';
$lang->action->label->moved                 = '移动了';
$lang->action->label->confirmed             = "确认了{$lang->SRCommon}";
$lang->action->label->bugconfirmed          = '确认了';
$lang->action->label->tostory               = "转{$lang->SRCommon}";
$lang->action->label->frombug               = "转{$lang->SRCommon}";
$lang->action->label->fromlib               = '从用例库导入';
$lang->action->label->totask                = '转任务';
$lang->action->label->svncommited           = '提交代码';
$lang->action->label->gitcommited           = '提交代码';
$lang->action->label->linked2plan           = "关联计划";
$lang->action->label->unlinkedfromplan      = "移除计划";
$lang->action->label->changestatus          = '修改状态';
$lang->action->label->marked                = '编辑了';
$lang->action->label->linked2execution      = "关联{$lang->executionCommon}";
$lang->action->label->unlinkedfromexecution = "移除{$lang->executionCommon}";
$lang->action->label->linked2project        = "关联项目";
$lang->action->label->unlinkedfromproject   = "移除项目";
$lang->action->label->unlinkedfrombuild     = "移除版本";
$lang->action->label->linked2release        = "关联发布";
$lang->action->label->unlinkedfromrelease   = "移除发布";
$lang->action->label->linkrelatedbug        = "关联了相关Bug";
$lang->action->label->unlinkrelatedbug      = "移除了相关Bug";
$lang->action->label->linkrelatedcase       = "关联了相关用例";
$lang->action->label->unlinkrelatedcase     = "移除了相关用例";
$lang->action->label->linkrelatedstory      = "关联了相关{$lang->SRCommon}";
$lang->action->label->unlinkrelatedstory    = "移除了相关{$lang->SRCommon}";
$lang->action->label->subdividestory        = "细分了{$lang->SRCommon}";
$lang->action->label->unlinkchildstory      = "移除了细分{$lang->SRCommon}";
$lang->action->label->started               = '开始了';
$lang->action->label->restarted             = '继续了';
$lang->action->label->recordestimate        = '记录了工时';
$lang->action->label->editestimate          = '编辑了工时';
$lang->action->label->canceled              = '取消了';
$lang->action->label->finished              = '完成了';
$lang->action->label->paused                = '暂停了';
$lang->action->label->verified              = '验收了';
$lang->action->label->delayed               = '延期';
$lang->action->label->suspended             = '挂起';
$lang->action->label->login                 = '登录系统';
$lang->action->label->logout                = "退出登录";
$lang->action->label->deleteestimate        = "删除了工时";
$lang->action->label->linked2build          = "关联了";
$lang->action->label->linked2bug            = "关联了";
$lang->action->label->linked2testtask       = "关联了";
$lang->action->label->unlinkedfromtesttask  = "移除了";
$lang->action->label->linkchildtask         = "关联子任务";
$lang->action->label->unlinkchildrentask    = "取消关联子任务";
$lang->action->label->linkparenttask        = "关联到父任务";
$lang->action->label->unlinkparenttask      = "从父任务取消关联";
$lang->action->label->batchcreate           = "批量创建任务";
$lang->action->label->createchildren        = "创建子任务";
$lang->action->label->managed               = "维护";
$lang->action->label->managedteam           = "维护了";
$lang->action->label->managedwhitelist      = "维护了";
$lang->action->label->deletechildrentask    = "删除子任务";
$lang->action->label->createchildrenstory   = "创建子需求";
$lang->action->label->linkchildstory        = "关联子需求";
$lang->action->label->unlinkchildrenstory   = "取消关联子需求";
$lang->action->label->linkparentstory       = "关联到父需求";
$lang->action->label->unlinkparentstory     = "从父需求取消关联";
$lang->action->label->deletechildrenstory   = "删除子需求";
$lang->action->label->tracked               = '跟踪了';
$lang->action->label->hangup                = '挂起了';
$lang->action->label->run                   = '执行了';

/* 动态信息按照对象分组 */
$lang->action->dynamicAction                    = new stdclass();
$lang->action->dynamicAction->todo['opened']    = '创建待办';
$lang->action->dynamicAction->todo['edited']    = '编辑待办';
$lang->action->dynamicAction->todo['erased']    = '删除待办';
$lang->action->dynamicAction->todo['finished']  = '完成待办';
$lang->action->dynamicAction->todo['activated'] = '激活待办';
$lang->action->dynamicAction->todo['closed']    = '关闭待办';
$lang->action->dynamicAction->todo['assigned']  = '指派待办';
$lang->action->dynamicAction->todo['undeleted'] = '还原待办';
$lang->action->dynamicAction->todo['hidden']    = '隐藏待办';

$lang->action->dynamicAction->program['create']   = '创建项目集';
$lang->action->dynamicAction->program['edit']     = '编辑项目集';
$lang->action->dynamicAction->program['activate'] = '激活项目集';
$lang->action->dynamicAction->program['delete']   = '删除项目集';
$lang->action->dynamicAction->program['close']    = '关闭项目集';

$lang->action->dynamicAction->project['create']   = '创建项目';
$lang->action->dynamicAction->project['edit']     = '编辑项目';
$lang->action->dynamicAction->project['start']    = '开始项目';
$lang->action->dynamicAction->project['suspend']  = '延期项目';
$lang->action->dynamicAction->project['activate'] = '激活项目';
$lang->action->dynamicAction->project['close']    = '关闭项目';

$lang->action->dynamicAction->product['opened']    = '创建' . $lang->productCommon;
$lang->action->dynamicAction->product['edited']    = '编辑' . $lang->productCommon;
$lang->action->dynamicAction->product['deleted']   = '删除' . $lang->productCommon;
$lang->action->dynamicAction->product['closed']    = '关闭' . $lang->productCommon;
$lang->action->dynamicAction->product['undeleted'] = '还原' . $lang->productCommon;
$lang->action->dynamicAction->product['hidden']    = '隐藏' . $lang->productCommon;

$lang->action->dynamicAction->productplan['opened'] = "创建计划";
$lang->action->dynamicAction->productplan['edited'] = "编辑计划";

$lang->action->dynamicAction->release['opened']       = '创建发布';
$lang->action->dynamicAction->release['edited']       = '编辑发布';
$lang->action->dynamicAction->release['changestatus'] = '修改发布状态';
$lang->action->dynamicAction->release['undeleted']    = '还原发布';
$lang->action->dynamicAction->release['hidden']       = '隐藏发布';

$lang->action->dynamicAction->story['opened']              = "创建{$lang->SRCommon}";
$lang->action->dynamicAction->story['edited']              = "编辑{$lang->SRCommon}";
$lang->action->dynamicAction->story['activated']           = "激活{$lang->SRCommon}";
$lang->action->dynamicAction->story['reviewed']            = "评审{$lang->SRCommon}";
$lang->action->dynamicAction->story['closed']              = "关闭{$lang->SRCommon}";
$lang->action->dynamicAction->story['assigned']            = "指派{$lang->SRCommon}";
$lang->action->dynamicAction->story['changed']             = "变更{$lang->SRCommon}";
$lang->action->dynamicAction->story['linked2plan']         = "{$lang->SRCommon}关联计划";
$lang->action->dynamicAction->story['unlinkedfromplan']    = "计划移除{$lang->SRCommon}";
$lang->action->dynamicAction->story['linked2release']      = "{$lang->SRCommon}关联发布";
$lang->action->dynamicAction->story['unlinkedfromrelease'] = "发布移除{$lang->SRCommon}";
$lang->action->dynamicAction->story['linked2build']        = "{$lang->SRCommon}关联版本";
$lang->action->dynamicAction->story['unlinkedfrombuild']   = "版本移除{$lang->SRCommon}";
$lang->action->dynamicAction->story['unlinkedfromproject'] = '移除项目';
$lang->action->dynamicAction->story['undeleted']           = "还原{$lang->SRCommon}";
$lang->action->dynamicAction->story['hidden']              = "隐藏{$lang->SRCommon}";

$lang->action->dynamicAction->execution['opened']                = '创建' . $lang->executionCommon;
$lang->action->dynamicAction->execution['edited']                = '编辑' . $lang->executionCommon;
$lang->action->dynamicAction->execution['deleted']               = '删除' . $lang->executionCommon;
$lang->action->dynamicAction->execution['started']               = '开始' . $lang->executionCommon;
$lang->action->dynamicAction->execution['delayed']               = '延期' . $lang->executionCommon;
$lang->action->dynamicAction->execution['suspended']             = '挂起' . $lang->executionCommon;
$lang->action->dynamicAction->execution['activated']             = '激活' . $lang->executionCommon;
$lang->action->dynamicAction->execution['closed']                = '关闭' . $lang->executionCommon;
$lang->action->dynamicAction->execution['managed']               = '维护' . $lang->executionCommon;
$lang->action->dynamicAction->execution['undeleted']             = '还原' . $lang->executionCommon;
$lang->action->dynamicAction->execution['hidden']                = '隐藏' . $lang->executionCommon;
$lang->action->dynamicAction->execution['moved']                 = '导入任务';
$lang->action->dynamicAction->execution['linked2execution']      = '关联' . $lang->SRCommon;
$lang->action->dynamicAction->execution['unlinkedfromexecution'] = '移除' . $lang->SRCommon;

$lang->action->dynamicAction->task['opened']              = '创建任务';
$lang->action->dynamicAction->task['edited']              = '编辑任务';
$lang->action->dynamicAction->task['commented']           = '备注任务';
$lang->action->dynamicAction->task['assigned']            = '指派任务';
$lang->action->dynamicAction->task['confirmed']           = "确认{$lang->SRCommon}变更";
$lang->action->dynamicAction->task['started']             = '开始任务';
$lang->action->dynamicAction->task['finished']            = '完成任务';
$lang->action->dynamicAction->task['recordestimate']      = '记录工时';
$lang->action->dynamicAction->task['editestimate']        = '编辑工时';
$lang->action->dynamicAction->task['deleteestimate']      = '删除工时';
$lang->action->dynamicAction->task['paused']              = '暂停任务';
$lang->action->dynamicAction->task['closed']              = '关闭任务';
$lang->action->dynamicAction->task['canceled']            = '取消任务';
$lang->action->dynamicAction->task['activated']           = '激活任务';
$lang->action->dynamicAction->task['createchildren']      = '创建子任务';
$lang->action->dynamicAction->task['unlinkparenttask']    = '从父任务取消关联';
$lang->action->dynamicAction->task['deletechildrentask']  = '删除子任务';
$lang->action->dynamicAction->task['linkparenttask']      = '关联到父任务';
$lang->action->dynamicAction->task['linkchildtask']       = '关联子任务';
$lang->action->dynamicAction->task['createchildrenstory'] = '创建子需求';
$lang->action->dynamicAction->task['unlinkparentstory']   = '从父需求取消关联';
$lang->action->dynamicAction->task['deletechildrenstory'] = '删除子需求';
$lang->action->dynamicAction->task['linkparentstory']     = '关联到父需求';
$lang->action->dynamicAction->task['linkchildstory']      = '关联子需求';
$lang->action->dynamicAction->task['undeleted']           = '还原任务';
$lang->action->dynamicAction->task['hidden']              = '隐藏任务';
$lang->action->dynamicAction->task['svncommited']         = 'SVN提交';
$lang->action->dynamicAction->task['gitcommited']         = 'GIT提交';

$lang->action->dynamicAction->build['opened']  = '创建版本';
$lang->action->dynamicAction->build['edited']  = '编辑版本';
$lang->action->dynamicAction->build['deleted'] = '删除版本';

$lang->action->dynamicAction->bug['opened']              = '创建Bug';
$lang->action->dynamicAction->bug['edited']              = '编辑Bug';
$lang->action->dynamicAction->bug['activated']           = '激活Bug';
$lang->action->dynamicAction->bug['assigned']            = '指派Bug';
$lang->action->dynamicAction->bug['closed']              = '关闭Bug';
$lang->action->dynamicAction->bug['bugconfirmed']        = '确认Bug';
$lang->action->dynamicAction->bug['resolved']            = '解决Bug';
$lang->action->dynamicAction->bug['undeleted']           = '还原Bug';
$lang->action->dynamicAction->bug['hidden']              = '隐藏Bug';
$lang->action->dynamicAction->bug['deleted']             = '删除Bug';
$lang->action->dynamicAction->bug['confirmed']           = "确认{$lang->SRCommon}变更";
$lang->action->dynamicAction->bug['tostory']             = "转{$lang->SRCommon}";
$lang->action->dynamicAction->bug['totask']              = '转任务';
$lang->action->dynamicAction->bug['linked2plan']         = "Bug关联计划";
$lang->action->dynamicAction->bug['unlinkedfromplan']    = "计划移除Bug";
$lang->action->dynamicAction->bug['linked2release']      = 'Bug关联发布';
$lang->action->dynamicAction->bug['unlinkedfromrelease'] = '发布移除Bug';
$lang->action->dynamicAction->bug['linked2bug']          = 'Bug关联版本';
$lang->action->dynamicAction->bug['unlinkedfrombuild']   = '版本移除Bug';

$lang->action->dynamicAction->testtask['opened']    = '创建测试单';
$lang->action->dynamicAction->testtask['edited']    = '编辑测试单';
$lang->action->dynamicAction->testtask['started']   = '启动测试单';
$lang->action->dynamicAction->testtask['activated'] = '激活测试单';
$lang->action->dynamicAction->testtask['closed']    = '完成测试单';
$lang->action->dynamicAction->testtask['blocked']   = '阻塞测试单';

$lang->action->dynamicAction->case['opened']    = '创建用例';
$lang->action->dynamicAction->case['edited']    = '编辑用例';
$lang->action->dynamicAction->case['deleted']   = '删除用例';
$lang->action->dynamicAction->case['undeleted'] = '还原用例';
$lang->action->dynamicAction->case['hidden']    = '隐藏用例';
$lang->action->dynamicAction->case['reviewed']  = '评审用例';
$lang->action->dynamicAction->case['confirmed'] = "确认{$lang->SRCommon}变更";
$lang->action->dynamicAction->case['fromlib']   = '从用例库导入';

$lang->action->dynamicAction->testreport['opened']    = '创建测试报告';
$lang->action->dynamicAction->testreport['edited']    = '编辑测试报告';
$lang->action->dynamicAction->testreport['deleted']   = '删除测试报告';
$lang->action->dynamicAction->testreport['undeleted'] = '还原测试报告';
$lang->action->dynamicAction->testreport['hidden']    = '隐藏测试报告';

$lang->action->dynamicAction->testsuite['opened']    = '创建测试套件';
$lang->action->dynamicAction->testsuite['edited']    = '编辑测试套件';
$lang->action->dynamicAction->testsuite['deleted']   = '删除测试套件';
$lang->action->dynamicAction->testsuite['undeleted'] = '还原测试套件';
$lang->action->dynamicAction->testsuite['hidden']    = '隐藏测试套件';

$lang->action->dynamicAction->caselib['opened']    = '创建用例库';
$lang->action->dynamicAction->caselib['edited']    = '编辑用例库';
$lang->action->dynamicAction->caselib['deleted']   = '删除用例库';
$lang->action->dynamicAction->caselib['undeleted'] = '还原用例库';
$lang->action->dynamicAction->caselib['hidden']    = '隐藏用例库';

$lang->action->dynamicAction->doclib['created'] = '创建文档库';
$lang->action->dynamicAction->doclib['edited']  = '编辑文档库';

$lang->action->dynamicAction->doc['created']   = '创建文档';
$lang->action->dynamicAction->doc['edited']    = '编辑文档';
$lang->action->dynamicAction->doc['commented'] = '备注文档';
$lang->action->dynamicAction->doc['deleted']   = '删除文档';
$lang->action->dynamicAction->doc['undeleted'] = '还原文档';
$lang->action->dynamicAction->doc['hidden']    = '隐藏文档';

$lang->action->dynamicAction->user['created']       = '创建用户';
$lang->action->dynamicAction->user['edited']        = '编辑用户';
$lang->action->dynamicAction->user['login']         = '用户登录';
$lang->action->dynamicAction->user['logout']        = '用户退出';
$lang->action->dynamicAction->user['undeleted']     = '还原用户';
$lang->action->dynamicAction->user['hidden']        = '隐藏用户';
$lang->action->dynamicAction->user['loginxuanxuan'] = '登录客户端';

$lang->action->dynamicAction->entry['created'] = '添加应用';
$lang->action->dynamicAction->entry['edited']  = '编辑应用';

/* 用来生成相应对象的链接。*/
$lang->action->label->product     = $lang->productCommon . '|product|view|productID=%s';
$lang->action->label->productplan = "计划|productplan|view|productID=%s";
$lang->action->label->release     = '发布|release|view|productID=%s';
$lang->action->label->story       = "{$lang->SRCommon}|story|view|storyID=%s";
$lang->action->label->program     = "项目集|program|product|programID=%s";
$lang->action->label->project     = "项目|project|index|projectID=%s";
if($config->systemMode == 'new')
{
    $lang->action->label->execution = "执行|execution|task|executionID=%s";
}
else
{
    $lang->action->label->execution = "$lang->executionCommon|execution|task|executionID=%s";
}
$lang->action->label->task        = '任务|task|view|taskID=%s';
$lang->action->label->build       = '版本|build|view|buildID=%s';
$lang->action->label->bug         = 'Bug|bug|view|bugID=%s';
$lang->action->label->case        = '用例|testcase|view|caseID=%s';
$lang->action->label->testtask    = '测试单|testtask|view|caseID=%s';
$lang->action->label->testsuite   = '测试套件|testsuite|view|suiteID=%s';
$lang->action->label->caselib     = '用例库|caselib|view|libID=%s';
$lang->action->label->todo        = '待办|todo|view|todoID=%s';
$lang->action->label->doclib      = '文档库|doc|objectLibs|type=&objectID=&libID=%s';
$lang->action->label->doc         = '文档|doc|view|docID=%s';
$lang->action->label->user        = '用户|user|view|account=%s';
$lang->action->label->testreport  = '报告|testreport|view|report=%s';
$lang->action->label->entry       = '应用|entry|browse|';
$lang->action->label->webhook     = 'Webhook|webhook|browse|';
$lang->action->label->space       = ' ';
$lang->action->label->risk        = '风险|risk|view|riskID=%s';
$lang->action->label->issue       = '问题|issue|view|issueID=%s';
$lang->action->label->design      = '设计|design|view|designID=%s';
$lang->action->label->stakeholder = '干系人|stakeholder|view|userID=%s';

/* Object type. */
$lang->action->search = new stdclass();
$lang->action->search->objectTypeList['']            = '';
$lang->action->search->objectTypeList['product']     = $lang->productCommon;
$lang->action->search->objectTypeList['program']     = '项目集';
$lang->action->search->objectTypeList['project']     = '项目';
$lang->action->search->objectTypeList['execution']   = '执行';
$lang->action->search->objectTypeList['bug']         = 'Bug';
$lang->action->search->objectTypeList['case']        = '用例';
$lang->action->search->objectTypeList['caseresult']  = '用例结果';
$lang->action->search->objectTypeList['stepresult']  = '用例步骤';
$lang->action->search->objectTypeList['story']       = "$lang->SRCommon/$lang->URCommon";
$lang->action->search->objectTypeList['task']        = '任务';
$lang->action->search->objectTypeList['testtask']    = '测试单';
$lang->action->search->objectTypeList['user']        = '用户';
$lang->action->search->objectTypeList['doc']         = '文档';
$lang->action->search->objectTypeList['doclib']      = '文档库';
$lang->action->search->objectTypeList['todo']        = '待办';
$lang->action->search->objectTypeList['build']       = '版本';
$lang->action->search->objectTypeList['release']     = '发布';
$lang->action->search->objectTypeList['productplan'] = '计划';
$lang->action->search->objectTypeList['branch']      = '分支';
$lang->action->search->objectTypeList['testsuite']   = '套件';
$lang->action->search->objectTypeList['caselib']     = '公共库';
$lang->action->search->objectTypeList['testreport']  = '报告';

/* 用来在动态显示中显示动作 */
$lang->action->search->label['']                      = '';
$lang->action->search->label['created']               = $lang->action->label->created;
$lang->action->search->label['opened']                = $lang->action->label->opened;
$lang->action->search->label['changed']               = $lang->action->label->changed;
$lang->action->search->label['edited']                = $lang->action->label->edited;
$lang->action->search->label['assigned']              = $lang->action->label->assigned;
$lang->action->search->label['closed']                = $lang->action->label->closed;
$lang->action->search->label['deleted']               = $lang->action->label->deleted;
$lang->action->search->label['deletedfile']           = $lang->action->label->deletedfile;
$lang->action->search->label['editfile']              = $lang->action->label->editfile;
$lang->action->search->label['erased']                = $lang->action->label->erased;
$lang->action->search->label['undeleted']             = $lang->action->label->undeleted;
$lang->action->search->label['hidden']                = $lang->action->label->hidden;
$lang->action->search->label['commented']             = $lang->action->label->commented;
$lang->action->search->label['activated']             = $lang->action->label->activated;
$lang->action->search->label['blocked']               = $lang->action->label->blocked;
$lang->action->search->label['resolved']              = $lang->action->label->resolved;
$lang->action->search->label['reviewed']              = $lang->action->label->reviewed;
$lang->action->search->label['moved']                 = $lang->action->label->moved;
$lang->action->search->label['confirmed']             = $lang->action->label->confirmed;
$lang->action->search->label['bugconfirmed']          = $lang->action->label->bugconfirmed;
$lang->action->search->label['tostory']               = $lang->action->label->tostory;
$lang->action->search->label['frombug']               = $lang->action->label->frombug;
$lang->action->search->label['totask']                = $lang->action->label->totask;
$lang->action->search->label['svncommited']           = $lang->action->label->svncommited;
$lang->action->search->label['gitcommited']           = $lang->action->label->gitcommited;
$lang->action->search->label['linked2plan']           = $lang->action->label->linked2plan;
$lang->action->search->label['unlinkedfromplan']      = $lang->action->label->unlinkedfromplan;
$lang->action->search->label['changestatus']          = $lang->action->label->changestatus;
$lang->action->search->label['marked']                = $lang->action->label->marked;
$lang->action->search->label['linked2project']        = $lang->action->label->linked2project;
$lang->action->search->label['unlinkedfromproject']   = $lang->action->label->unlinkedfromproject;
$lang->action->search->label['linked2execution']      = $lang->action->label->linked2execution;
$lang->action->search->label['unlinkedfromexecution'] = $lang->action->label->unlinkedfromexecution;
$lang->action->search->label['started']               = $lang->action->label->started;
$lang->action->search->label['restarted']             = $lang->action->label->restarted;
$lang->action->search->label['recordestimate']        = $lang->action->label->recordestimate;
$lang->action->search->label['editestimate']          = $lang->action->label->editestimate;
$lang->action->search->label['canceled']              = $lang->action->label->canceled;
$lang->action->search->label['finished']              = $lang->action->label->finished;
$lang->action->search->label['paused']                = $lang->action->label->paused;
$lang->action->search->label['verified']              = $lang->action->label->verified;
$lang->action->search->label['login']                 = $lang->action->label->login;
$lang->action->search->label['logout']                = $lang->action->label->logout;
