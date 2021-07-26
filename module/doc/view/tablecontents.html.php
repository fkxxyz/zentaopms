<?php
/**
 * The table contents view file of doc module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2021 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Fangzhou Hu <hufangzhou@easycorp.ltd>
 * @package     doc
 * @version     $Id$
 * @link        https://www.zentao.net
 */
?>
<?php include '../../common/view/header.html.php';?>
<?php js::set('moduleTree', $moduleTree);?>
<?php
$sideLibs = array();
foreach($lang->doclib->tabList as $libType => $typeName) $sideLibs[$libType] = $this->doc->getLimitLibs($libType);
$allModules = $this->loadModel('tree')->getDocStructure();

$sideSubLibs = array();
$sideSubLibs['product']   = $this->doc->getSubLibGroups('product', array_keys($sideLibs['product']));
$sideSubLibs['execution'] = $this->doc->getSubLibGroups('execution', array_keys($sideLibs['execution']));
if($this->methodName != 'browse')
{
    $browseType = '';
    $moduleID   = '';
}
if(empty($type)) $type = 'product';
?>
<div class="main-content" >
  <div class="cell" id="<?php echo $type;?>">
    <div class="detail">
      <div class="detail-title"><?php echo $lang->doc->tableContents;?></div>
    </div>
    <div class="detail">
      <?php if($moduleTree):?>
      <?php if($type == 'book'):?>
      <?php include './bookside.html.php';?>
      <?php else:?>
      <?php echo $moduleTree;?>
      <?php endif;?>
      <?php else:?>
      <div class="no-content"><img src="<?php echo $config->webRoot . 'theme/default/images/main/no_content.png'?>"/></div>
      <div class="notice text-muted"><?php echo $this->lang->doc->noDoc;?></div>
      <div class="no-content-button">
        <?php
        $html = '';
        if($type == 'book')
        {
            $html = html::a(helper::createLink('doc', 'createLib', "type=$type&objectID=$objectID"), '<i class="icon icon-plus"></i>' . $this->lang->doc->createBook, '', 'class="btn btn-info btn-wide iframe"');
        }
        elseif($libID)
        {
            $html  = "<div class='dropdown' id='createDropdown'>";
            $html .= "<button class='btn btn-info btn-wide' type='button' data-toggle='dropdown'><i class='icon icon-plus'></i>" . $this->lang->doc->createAB . " <span class='caret'></span></button>";
            $html .= "<ul class='dropdown-menu' style='left:0px'>";
            foreach($this->lang->doc->typeList as $typeKey => $typeName)
            {
                $class = strpos($this->config->doc->officeTypes, $typeKey) !== false ? 'iframe' : '';
                $html .= "<li>";
                $html .= html::a(helper::createLink('doc', 'create', "objectType=$type&objectID=$objectID&libID=$libID&moduleID=0&type=$typeKey", '', $class ? true : false), $typeName, '', "class='$class' data-app='{$this->app->openApp}'");
                $html .= "</li>";

            }
            $html .= "</ul></div>";
        }

        echo $html;
        ?>
        <?php
        if($type == 'book')
        {
            common::printLink('doc', 'manageBook', "bookID=$libID", $lang->doc->manageBook, '', "class='btn btn-info btn-wide'");
        }
        else
        {
            common::printLink('tree', 'browse', "rootID=$libID&view=doc", $lang->doc->manageType, '', "class='btn btn-info btn-wide iframe'", '', true);
        }
        ?>
      </div>
      <?php endif;?>
    </div>
    <div class="text-center action">
      <?php
      if($type == 'book')
      {
          //common::printLink('doc', 'editLib', "rootID=$libID", $lang->doc->editBook, '', "class='btn btn-info btn-wide iframe'", '', true);
          //common::printLink('doc', 'manageBook', "bookID=$libID", $lang->doc->manageBook, '', "class='btn btn-info btn-wide'");
      }
      else
      {
          //common::printLink('tree', 'browse', "rootID=$libID&view=doc", $lang->doc->manageType, '', "class='btn btn-info btn-wide iframe'", '', true);
          //common::printLink('doc', 'editLib', "rootID=$libID", $lang->doc->editLib, '', "class='btn btn-info btn-wide iframe'", '', true);
          //common::printLink('doc', 'deleteLib', "rootID=$libID", $lang->doc->deleteLib, 'hiddenwin', "class='btn btn-info btn-wide'");
      }
      ?>
      <hr class="space-sm" />
    </div>
  </div>
</div>
<?php include '../../common/view/footer.html.php';?>