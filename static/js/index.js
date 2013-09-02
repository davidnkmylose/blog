function loginWeibo(){
    var panel = document.getElementById("weibo-panel");
    panel.style.display = "block";
    WB2.anyWhere(function(W){
        W.widget.connectButton({
            id: "weibo-panel",  
            type:"3,1",
            callback : {
                login:function(o){  //登录后的回调函数
                },  
                logout:function(){  //退出后的回调函数
                }
            }
        });
    });
}
setTimeout(loginWeibo,2000);
