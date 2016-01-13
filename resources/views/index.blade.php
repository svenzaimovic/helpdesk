@extends('layouts.master')

@section('content')
<h1> Index page content </h1>

<script type="text/javascript" src="//d2qrdklrsxowl2.cloudfront.net/js/hapyak.js"></script>
<div style="width:720px;overflow:hidden;height:405px;position:relative;">
   <div id="hapyak-player-27287-2089"></div>
</div>
<script>
window.onYouTubeIframeAPIReady = function() {
   var ytPlayer = new YT.Player("hapyak-player-27287-2089", {
       height: "405",
       width: "720",
       videoId: "mKA4-MA-jPY",
       playerVars: {
           controls: /(iPhone|iPad)/i.test(navigator.userAgent) ? 0 : 2,
           html: 1,
           playsinline: 1,
           autohide: 1,
           modestbranding: 1,
           rel: 0,
           fs: 0,
           showinfo: 0,
           wmode: "opaque"
       }
   });
   hapyak.viewer({
       apiKey: "956a0837880d417788b9",
       projectId: 27287,
       resetVariables: true,
       player: ytPlayer,
       playerType: "youtube",
       width: 720,
       height: 405,
       autoplay: false
   });
};
</script>
<script src="//www.youtube.com/iframe_api"></script>


@stop