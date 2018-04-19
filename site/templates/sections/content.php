    <script id="entry-template" type="text/x-handlebars-template">
        {{#each obj}}
          <div class="timeline-item-sponser">
                <div class="container-box-wrap">
                  <div class="contain-meta-top">

                    <h6><b><a href="/site/content/view.php?content={{secure_meta}}">{{title}}</a></b></h6>
                    <div id="contain-meta">
                        <span id="time">{{created_at}}</span>
                        <span id="writer">{{author}}</span>
                    </div>
                  
                  </div>
                  <hr>
                  <div class="contain-box-bodywrap">
                      <div class="contain-picture">
                        <img class="contain-image" src={{image}}>
                      </div>
                      <div class="contain-text">
                      <p>{{introduce}}</p>
                      </div>
                  </div>
                  <!--<div class="contain-meta-bottom">
                    <a href="#" class="btn btn-sm btn-outline-secondary"><span class="glyphicon glyphicon-heart"></span> B1</a>
                    <a href="#" class="btn btn-sm btn-outline-secondary"><span class="glyphicon glyphicon-heart"></span> B2</a>
                  </div>-->
                </div>
            
            </div>
        {{/each}}
    </script>

    <!--display entry-->
    <div id="entry"></div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.11/handlebars.min.js"></script>
<script src="templates/sections/content.js"></script>