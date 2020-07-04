<template>
  <div class="wrapper">
    <div class="h_iframe">
        <img class="ratio" src="http://placehold.it/16x9" />
        <iframe src="https://player.vimeo.com/video/407899200?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1&amp;loop=1&amp;autopause=0" frameborder="0" allowfullscreen></iframe>
    </div>
</div>
</template>

<script>
export default {
    
}
</script>
<style>
   .h_iframe {
        position:relative;
    }
    .h_iframe .ratio {
        display:block;
        width:100%;
        height:auto;
    }
    .h_iframe iframe {
        position:absolute;
        top:0;
        left:0;
        width:100%;
        height:100%;
    }
</style>

