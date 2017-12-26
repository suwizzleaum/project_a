
<!DOCTYPE html>
<html lang="en">
<?php include 'theme/header.php'; ?>

<body>
<div id='site' class='relative' style='transform: none;'>
  <div id='site-wrap' class='relative' style='transform: none;'>

    <div id="header-main-wrap" class='relative'></div>
        <div id="main-nav-wrap" class='fixed'>navbar2</div>
    </div>

    <div id="body-main-wrap" style="transform: none;">body-main
        <div id="slide-main-wrap" >slide
          
        </div>
        <div id="contain-main-wrap">container
        <div class="div-contain-box">
        <?=$this->section('content')?>
        <?=$this->section('content')?>
        <?=$this->section('content')?>
        </div>
        </div>
    </div>

  </div>
</div>
</body>

</html>
