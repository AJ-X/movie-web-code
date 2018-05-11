    function mover(){
		var element=document.getElementById("bd");		
		element.style.display="block";
	}
	function mout(){
	    var element=document.getElementById("bd");		
		element.style.display="none";
	}
	function bckover(){
		var bck=document.getElementById("bhd");
		bck.style.background="#fff";
	}
    function bckout(){
		var bck=document.getElementById("bhd");
		bck.style.background="#f3f3f3";
	}
	function navmover(){
		var element=document.getElementById("navlt");		
		element.style.display="block";
	}
	function navmout(){
		var element=document.getElementById("navlt");		
		element.style.display="none";
	}
	window.onload=function(){
        var change=document.getElementById("change"),
            picture=document.getElementById('picture').getElementsByTagName("li"),
            list=document.getElementById('list').getElementsByTagName('li'),
           index=0,
           timer=null;
           timer=setInterval(autoPlay,2000);
           change.onmouseover = function () {
                clearInterval(timer);
           }
           change.onmouseout = function () {
                timer = setInterval(autoPlay, 2000);
           }
        for(var i=0;i<list.length;i++){
            list[i].onmouseover=function(){
            clearInterval(timer); 
            index=this.innerText-1;
            changePic(index);
        }
    }
    function autoPlay(){
        if(++index>=picture.length) index=0;
        changePic(index);
    }
    function changePic(curIndex){
        for(var i=0;i<picture.length;++i){
            picture[i].style.display="none";
            list[i].className="";
        }
        picture[curIndex].style.display="block";
        list[curIndex].className="on";
        }
    }
    function ltchange(){
        var element=document.getElementById("hotrtnone");
        element.style.display="block";
        var x=document.getElementById("li1");
        x.style.background="#2ed2c1";
        var y=document.getElementById("a1");
        y.style="font-size:21px;";
        y.style.color="#fff";
        var z=document.getElementById("li2");
        z.style.background="#f1f1f1";
        var w=document.getElementById("a2");       
        w.style="font-size:20px;";
        w.style.color="#000";
        var v=document.getElementById("hotrt");
        v.style.height="340px";
        var d=document.getElementById("hotrtdown");
        d.style="margin-top:75px";
        var ad=document.getElementById("ad");
        ad.style="margin-top:110px";
    }
    function rtchange(){
        var element=document.getElementById("hotrtnone");
        element.style.display="none";
        var x=document.getElementById("li2");
        x.style.background="#2ed2c1";
        var y=document.getElementById("a2");
        y.style="font-size:21px;";
        y.style.color="#fff";
        var z=document.getElementById("li1");
        z.style.background="#f1f1f1";
        var w=document.getElementById("a1");
        w.style="font-size:20px;";
        w.style.color="#000";
        var v=document.getElementById("hotrt");
        v.style.height="92px";
        var d=document.getElementById("hotrtdown");
        d.style="margin-top:110px";
        var ad=document.getElementById("ad");
        ad.style="margin-top:358px";
    }
    function footerchange1(){
    	var element=document.getElementById("footerconrt1");
    	element.style.display="block";
    	var x=document.getElementById("footerconrt2");
    	x.src="Public/img/f_wx_h.png";
    }
    function footerchange2(){
    	var element=document.getElementById("footerconrt1");
    	element.style.display="none";
    	var x=document.getElementById("footerconrt2");
    	x.src="Public/img/f_wx.png";
    }
    function footerchange3(){
    	var element=document.getElementById("footerconrt3");
    	element.style.display="block";
    	var x=document.getElementById("footerconrt4");
    	x.src="Public/img/f_wpr_h.png";
    }
    function footerchange4(){
    	var element=document.getElementById("footerconrt3");
    	element.style.display="none";
    	var x=document.getElementById("footerconrt4");
    	x.src="Public/img/f_wpr.png";
    }
    function hidemover(){
    	var element=document.getElementById("hide");
    	element.style.display="block";
    }
    function hidemout(){
    	var element=document.getElementById("hide");
    	element.style.display="none";
    }
    function hide1mover(){
    	var element=document.getElementById("hide1");
    	element.style.display="block";
    }
    function hide1mout(){
    	var element=document.getElementById("hide1");
    	element.style.display="none";
    }