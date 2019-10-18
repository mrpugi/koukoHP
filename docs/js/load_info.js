$(function(){
  $.getJSON("infolist.json",function(data){
    var len=Object.keys(data).length;
    var keylist=Object.keys(data);
    var i=1;
    keylist.slice().reverse().forEach(function(key){
      //$(".articles").text("al;kjdf");
      $(".articles").append("<div class=\"article article"+i+"\"></div>");
      $(".article"+i).load("article/info"+key+".html");
      i++;
    });

  });
});
