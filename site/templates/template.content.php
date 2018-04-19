<!DOCTYPE html>
<html lang="en">

<?php 
$PATH = $_SERVER['DOCUMENT_ROOT'].'/site';
$config = $PATH.'/config/config.php';
include($config);
include(THEME_HEADER_DIR);
?>

<body>
<div id='site' class='relative' style='transform: none;'>
  <div id='site-wrap' class='relative' style='transform: none;'>
<!-- TOPBAR  -->
    <div id="header-main-wrap" class='relative'></div>
        <div id="main-nav-wrap" class='fixed'>
            <div class="top-bar-nav">
            <?=$this->insert('sections/topbar')?>
            </div>
        </div>
  </div>                                                                                                                                                                          

<!-- MAIN CONTENT  -->
    <div id="body-main-wrap"  style="transform: none;">
        <div class="contain-main-wrap">
              <div class="td-contain-main">
                  <div class="contain-main-post">
                    <?=$this->insert('sections/content/post')?>
                  </div>
              </div>
        </div>
    </div>

  </div>
</div>
</body>

</html>
