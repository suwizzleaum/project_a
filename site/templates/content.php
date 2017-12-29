<?php $this->layout('template', ['title' => 'content']) ?>

          <div class="timeline-item">

                <div class="container-box-wrap">
                  <div class="contain-meta-top">
                    <h6> <?php echo $top; ?></h6>
                    <div id="contain-meta">
                        <span id="time"><?php echo $time; ?></span>
                        <span id="writer"><?php echo $writer; ?></span>
                    </div>
                  
                  </div>
                  <hr>
                  <div class="contain-box-bodywrap">
                      <div class="contain-picture">
                      <p><?php echo $picture; ?></p>
                      </div>
                      <div class="contain-text">
                      <p><?php echo $contain; ?></p>
                      </div>
                  </div>
                  <div class="contain-meta-bottom">
                    <a href="#" class="btn btn-sm btn-outline-secondary"><span class="glyphicon glyphicon-heart"></span> B1</a>
                    <a href="#" class="btn btn-sm btn-outline-secondary"><span class="glyphicon glyphicon-heart"></span> B2</a>
                  </div>
                </div>
                
        </div>