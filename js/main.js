function playMusic() {
        var audioEle = document.getElementById("audio");
      if (audioEle.paused){
        window.open('http://hentaiii.top')
      }else {
        window.open('http://hentaiii.top')
      }
    }
    
    $("#music").click(function(){
      play();
    });

    var player = document.getElementById("audio");
    play();
    function play(){
    swal("欢迎浏览啭脚主页\n请问是否观看猴子呢？", {
            buttons: {
                cancel: "是",
                allow: "否"
            }
        }).then(function(value) {
            if (value == "allow") {
                window.open('http://hentaiii.top')
            } else {
                player.play();
            }
        });
    }
