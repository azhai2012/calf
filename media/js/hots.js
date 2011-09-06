/* 
    Document   : hots
    Created on : 2011-9-6, 10:22:53
    Author     : azhai
    Description:
        Purpose of the JavaScript follows.
*/


 var Hots= {
     
      Sameheight:function(){
        var h=$('.abc-a').eq(0).height() / 2;  
        $('.hots-extra').eq(1).height(h+19);   
      }
     
 }

$(function(){ 

     Hots.Sameheight();
 });
 

