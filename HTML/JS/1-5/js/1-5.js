var a = new Array()
a = [35, 33, 94, 12, 100, 13, 74]
function max() {
    // var a=document.getElementById('array').innerHTML;
    ans = Math.max(...a)
    document.getElementById('max').innerHTML = "=[" + ans + "]"
}
function min() {
    ans = Math.min(...a)
    document.getElementById('min').innerHTML = "=[" + ans + "]"
}
function sort() {
    ans = a.sort(function(a,b){return a-b});
    document.getElementById('sort').innerHTML = "=[" + ans + "]"
}
function search() {
    ans=a.indexOf(34)
    if (ans==(-1)){
        document.getElementById("search").innerHTML="=找不到34值"
    }
    else{
        document.getElementById("search").innerHTML="index="+ans;
    }
}
function reverse() {
    ans = a.sort(function(a,b){return b-a});
    document.getElementById('reverse').innerHTML = "=[" + ans + "]"
}
function plass() {
    ans=a.indexOf(66)
    if (ans==(-1)){
        a.push(66)
        document.getElementById("plass").innerHTML="=["+a+"]";
    }
    else{
        document.getElementById("plass").innerHTML="=有66了啦";
    }
}
function minus() {
    ans=a.indexOf(66)
    if (ans==(-1)){
        document.getElementById("minus").innerHTML="=沒有66了啦";
    }
    else{
        a.pop(66)
        document.getElementById("minus").innerHTML="=["+a+"]";
    }
}
function del() {
    var num="";
    num= Math.round((a.length)/2)
    console.log(num)
    delete a[num]
    document.getElementById("del").innerHTML="=["+a+"]";
}