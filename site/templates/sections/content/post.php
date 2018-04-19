
<script id="entry-template-post" type="text/x-handlebars-template">
{{#each obj}}
<div class="content-top">
    <div class="content-image-header">
        
    </div>
</div>
<div class="content-main">
    <div class="contain-title primary-color">
        <h1 class="title-font">{{title}}</h1>
    </div>
    <div class="contain-widget">
        <div class="contain-author">
        </div> 
        <div class="contain-tag">
            tag
        </div> 
    </div>
    <div class="contain-post">
        {{content}}
    </div>
</div>
<div class="content-footer"></div>
{{/each}}
</script>

<!--display entry-->
<input type="hidden" id="content_val" value="<?php echo $_GET['content']; ?>">
<div id="entry-post"></div>
<div class=''></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.11/handlebars.min.js"></script>
<script src="../templates/sections/content/post.js"></script>