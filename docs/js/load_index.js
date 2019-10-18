$(function(){
  //$(".article1").load("http://sindaikouko.php.xdomain.jp/article/5.html");
  //$(".article2").load("http://sindaikouko.php.xdomain.jp/article/4.html");
  $.getJSON("http://sindaikouko.php.xdomain.jp/titlelist.json",function(data){
    var len=Object.keys(data).length;
    var keylist=Object.keys(data);
    var i=1;
    keylist.slice(len-2).reverse().forEach(function(key){
      //$(".articles").text("al;kjdf");
      $(".articles").append("<div class=\"article article"+i+"\"></div>");
      $(".article"+i).load("http://sindaikouko.php.xdomain.jp/article/"+key+".html");
      i++;
    });
  });
});
