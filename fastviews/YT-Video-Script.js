var c = 0;
            var t;
            var timer_is_on = 0;
            
            function timedCount() {
              // document.getElementById("txt").value = c;
              document.getElementById("txt").innerHTML = c;
              c = c + 1;
              t = setTimeout(timedCount, 1000);
              if(c<=5){ //condition timer
                  document.getElementById("btn").disabled = true
              }else{
                document.getElementById("btn").disabled = false
              }

            }
            
            function startCount() {
              if (!timer_is_on) {
                timer_is_on = 1;
                timedCount();
              }
            }
            
            function stopCount() {
              clearTimeout(t);
              timer_is_on = 0;
            }

var url = JSON.parse(localStorage.getItem('url'))
// console.log(url);

 // create youtube player
 var player;
 function onYouTubePlayerAPIReady() {
     player = new YT.Player('player', {
       height: '390',
       width: '640',
       videoId: url,
       events: {
         'onReady': onPlayerReady,
         'onStateChange': onPlayerStateChange
       }
     });
 }

 // autoplay video
 function onPlayerReady(event) {
     event.target.playVideo();
 }

 // when video ends
 function onPlayerStateChange(event) {        
if (event.data == YT.PlayerState.PLAYING)
         {  
            //  alert("Playing..");
         startCount();
        }
         else if (event.data == YT.PlayerState.PAUSED)
            { 
                // alert ("Paused.."); 
            stopCount();    
        }
         // else
         // alert ("Buffering/Video Ended");                
                      

 }