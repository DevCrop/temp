<?php
$MENU						  = new Menu();
$APP_NAME         		= $MENU->getSiteName();
$PAGE_TITLE				= $MENU->getPageTitle();
$MENU_ITEMS				= $MENU->getMenuItems();
$CUR_PAGE				  = $MENU->getCurPage();
$CUR_PAGE_LIST		= $MENU->getCurPageList();
$CUR_PAGE_INDEX		= $MENU->getCurPageIndex();
?>

<!DOCTYPE html>
<html lang="<?=$LOCALE?>">

<head>



    <?php
	include_once $STATIC_ROOT.'/inc/inc.titleMeta.php';
	include_once $STATIC_ROOT.'/inc/inc.css.php';
	include_once $STATIC_ROOT.'/inc/inc.script.php';
  ?>