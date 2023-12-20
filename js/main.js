function playMusic() {
        var audioEle = document.getElementById("audio");
      if (audioEle.paused){
        audioEle.play();
      }else {
        audioEle.pause();
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
                window.open('http://wpa.qq.com/msgrd?v=3&uin=3353695243&site=qq&menu=yes')
            } else {
                player.play();
            }
        });
    }
