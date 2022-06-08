<?php
/**
 * The create view file of jenkins module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2017 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html) or AGPL
 * @author      Gang Liu <liugang@cnezsoft.com>
 * @package     jenkins
 * @version     $Id$
 * @link        http://www.zentao.net
 */
?>
<?php include '../../common/view/header.html.php'; ?>
<div id='mainContent' class='main-row'>
  <div class='main-col main-content'>
    <div class='center-block'>
      <div class='main-header'>
        <h2><?php echo $lang->jenkins->lblCreate;?></h2>
      </div>
      <form id='jenkinsForm' method='post' class='form-ajax'>
        <table class='table table-form'>
          <tr>
            <th><?php echo $lang->jenkins->name; ?></th>
            <td class='required'><?php echo html::input('name', '', "class='form-control'"); ?></td>
            <td></td>
          </tr>
          <tr>
            <th><?php echo $lang->jenkins->url; ?></th>
            <td class='required'><?php echo html::input('url', '', "class='form-control'"); ?></td>
            <td></td>
          </tr>
          <tr>
            <th><?php echo $lang->jenkins->account;?></th>
            <td><?php echo html::input('account', '', "class='form-control'");?></td>
          </tr>
          <tr>
            <th><?php echo $lang->jenkins->token;?></th>
            <td><?php echo html::input('token', '', "class='form-control'");?></td>
            <td><?php echo $lang->jenkins->tokenFirst;?></td>
          </tr>
          <tr>
            <th><?php echo $lang->jenkins->password;?></th>
            <td><?php echo html::password('password', '', "class='form-control'");?></td>
            <td><?php echo $lang->jenkins->tips;?></td>
          </tr>
          <tr>
            <th></th>
            <td class='text-center form-actions'>
              <?php echo html::submitButton(); ?>
              <?php if(!isonlybody()) echo html::a(inlink('browse', ""), $lang->goback, '', 'class="btn btn-wide"');?>
            </td>
          </tr>
        </table>
      </form>
    </div>
  </div>
</div>
<?php include '../../common/view/footer.html.php'; ?>
