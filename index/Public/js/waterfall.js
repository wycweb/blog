/**
 * Created by xiaoc on 2017-04-20.
 */
window.onload = function(){
    var wrap = document.getElementById("wrap");
    var about = document.getElementById("about");
    var frames = wrap.getElementsByClassName("frame");
    var article = document.getElementById("article");
    var prev = document.getElementById("prev");
    var next = document.getElementById("next");
    var num = Math.floor(about.offsetWidth / frames[0].offsetWidth);
    wrap.style.width = num * frames[0].offsetWidth + "px";
    var arr = [];
    for(var i = 0; i < frames.length; i++){
        if(i < num){
            arr[i] = frames[i].offsetHeight;
        }
        else {
            var minHeight = Math.min.apply(null,arr);
            //alert(minHeight);
            var index = findMinHeight(arr,minHeight);
            frames[i].style.position = "absolute";
            frames[i].style.top = minHeight + "px";
            frames[i].style.left = frames[index].offsetLeft + "px";
            arr[index] = arr[index] + frames[i].offsetHeight;
        }
    }
    var lastImg = frames[frames.length -1];
    wrap.style.height = lastImg.offsetTop + lastImg.offsetHeight + "px";
    function findMinHeight(arr,minHeight){
        for(var k in arr){
            if(arr[k] == minHeight){
                return k;
            }
        }
    }

    // bigImg开始
    var up = document.getElementById("up");
    var wrap_img = document.getElementById("wrap_img");
    var img = document.getElementById("img");
    var imgs = wrap.getElementsByTagName("img");
    var top = document.documentElement.clientHeight;
    var close = document.getElementById("close");


    //alert(imgs.length);
    var img_index = 0;
    var srcs = [];
    for(var i = 0; i < imgs.length; i++){
        imgs[i].index = i;
        srcs[i] = imgs[i].src.slice(imgs[i].src.lastIndexOf("kobe"));
        //console.log(srcs[i]);
        imgs[i].onclick = function(){
            //alert(this.src);
            img_index = this.index;
            up.style.display = "block";
            animate(wrap_img,{opacity: 100});
            document.documentElement.style.overflowY = "hidden"
            var src = this.src.slice(this.src.lastIndexOf("kobe"));
            //alert(src);
            img.src = "http://127.0.0.1/index/Public/" + src;
            wrap_img.style.paddingTop = (top - img.offsetHeight) / 2 + "px";
        }
    }
    close.onclick = function(){
        wrap_img.style.opacity = 0;
        document.documentElement.style.overflowY = "scroll";
        up.style.display = "none";
    }
    prev.onclick = function(){
        wrap_img.style.paddingTop = (top - img.offsetHeight) / 2 + "px";
        img_index --;
        if(img_index < 0){
            alert("到头啦");
            img_index ++;
        }
        else {
            img.src = "http://127.0.0.1/index/Public/" + srcs[img_index];
        }
    }
    next.onclick = function(){
        wrap_img.style.paddingTop = (top - img.offsetHeight) / 2 + "px";
        img_index ++;
        if(img_index > imgs.length - 1){
            alert("到头了")
            img_index --;
        }
        else {
            img.src = "http://127.0.0.1/index/Public/" + srcs[img_index];
        }
    }

}