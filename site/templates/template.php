
<!DOCTYPE html>
<html lang="en">
<?php include 'theme/header.php'; ?>

<body>
<div id='site' class='relative' style='transform: none;'>
  <div id='site-wrap' class='relative' style='transform: none;'>

    <div id="header-main-wrap" class='relative'></div>
        <div id="main-nav-wrap" class='fixed'>navbar2</div>
    </div>

    <div id="body-main-wrap"  style="transform: none;">
        <div id="slide-main-wrap" >slide
            <?=$this->insert('sections/slide')?>
        </div>
        <div class="row">
    <div class="col-sm-6 col-md-3 p-1">
      <div id="contain-side-left-wrap">
          <?=$this->insert('sections/side-left')?>
      </div>
    </div>
    <div class="col-sm-6 col-md-6 p-1">
    <div id="contain-main-wrap">
        <div class="div-contain-box">
            <?=$this->insert('sections/content')?>
        </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3 p-1">
    <div id="contain-side-left-wrap">
        right
    </div>
  </div>
  </div>

    </div>

  </div>
</div>
</body>

</html>
