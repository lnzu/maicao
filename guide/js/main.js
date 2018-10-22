
change();

//随机显示颜色
function change() {
	var classes = ["#00d67a","#ffab63","#c2b5fa","#7de6c2","#ffe668","#fffff","#eee","#ff6369","#b0e063","#ffbfbf"]

	var b = document.getElementsByTagName("button");

	for (var i = 0; i < b.length; i++) {
	b[i].style.background=classes[Math.random()*classes.length|0];
	}
}

//回车键搜索
document.onkeydown=function (event) {
	if (event.keyCode==13) {
		search();
	}
	
}

function search() {
	var s = document.getElementById("search").value;
	if (s.length!=0) {
		var reg = new RegExp("[A-Za-z0-9]\\.[A-Za-z0-9]","gi");
		var isok = reg.test(s)
		if (!isok) {
			window.location.href="https://m.baidu.com/s?word="+document.getElementById("search").value;
		}else {
		window.location.href="http://"+document.getElementById("search").value;
		}
	}
}