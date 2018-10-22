

//打印出字体
function typeText() {
  var flag = null;
  var type = document.getElementById("site_info");
  var type_text = "一个人不可能在不同的时间踏入同一条河流......";
  var i =0
  flag=setInterval(function () {
    if (i<type_text.length) {
      i=i+1;
      type.innerHTML= type_text.substring(0, i);
    }
    else {
      clearInterval(flag);
    }
  },200);
}


//隐藏列表内的最后一个hr
function hideLastHr() {
  var hrs = document.getElementsByTagName("hr");
  hrs[hrs.length-1].style.display="none";
}


//小狗狗///////
var out = null;
function showDogSay() {
  var dogsay = document.getElementById("dog_say");
  dogsay.style.visibility="visible";
  var says = [
    "你好啊我是定荣宝宝!",
    "今天没有偷懒哦！",
    "每天都要坚持写日记哦！",
    "定荣宝宝是最可爱的宝宝哦....",
    "熟读唐诗三百首，下句是什么啊？",
    "嗯，接下来打算写点什么呢……",
    "记得每天都要给定荣宝宝打电话哦!",
    "今天的麦田很安静哦.....",
    "要给你讲个笑话吗？",
    "要记得不要熬夜哦，最怕黑烟圈了...",
    "要坚持写博客哦.....",
    "宝宝的生日快到了哦.....",
    "宝宝守护着主人的博客哦...",
  ]
  if (out==null) {
    dogsay.innerHTML=says[Math.random()*says.length|0];
    
    out = setTimeout(function () {
      dogsay.style.visibility="hidden";
      clearTimeout(out);
      out=null;
    }, 1500)
  }
}
///////////////////