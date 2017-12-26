
<!DOCTYPE html>
<html lang="en">
<?php include 'theme/header.php'; ?>

<body>
  <div class="header-main-wrap">navbar</div>
  <div id="body-main-wrap" style="transform: none;">body-main
    <div class="slide-main-wrap">slide</div>
    <div class="contain-main-wrap">container
      <div class="div-contain-box">
        <?=$this->section('content')?>
        <?=$this->section('content')?>
      </div>
    </div>
  </div>

</body>

</html>
