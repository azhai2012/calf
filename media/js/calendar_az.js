/*
=========================================================
 
 eg. 
   <input type="text" name="time1" id="time1" onclick="MyCalendar.SetDate(this)" value="2006-8-1"/>
   <input type="text" name="time2" id="time2" value="2006-8-1"/><input name="" type="button" onclick="MyCalendar.SetDate(this,document.getElementById('time2'))" value="ѡ��"/>

=========================================================
*/
  

function L_calendar(){}
L_calendar.prototype={
    _VersionInfo:"",
    Moveable:true,
    NewName:"",
    insertId:"",
    ClickObject:null,
    InputObject:null,
    InputDate:null,
    IsOpen:false,
    MouseX:0,
    MouseY:0,
    GetDateLayer:function(){
        if(window.parent){
            return window.parent.L_DateLayer;
            }
        else{return window.L_DateLayer;}
        },
    L_TheYear:new Date().getFullYear(), 
    L_TheMonth:new Date().getMonth()+1,
    L_WDay:new Array(39),
    MonHead:new Array(31,28,31,30,31,30,31,31,30,31,30,31),
    GetY:function(){
        var obj;
        if (arguments.length > 0){
            obj==arguments[0];
            }
        else{
            obj=this.ClickObject;
            }
        if(obj!=null){
            var y = obj.offsetTop;
            while (obj = obj.offsetParent) y += obj.offsetTop;
            return y;}
        else{return 0;}
        },
    GetX:function(){
        var obj;
        if (arguments.length > 0){
            obj==arguments[0];
           
            }
        else{
            obj=this.ClickObject;
            }
        if(obj!=null){
            var y = obj.offsetLeft;
            while (obj = obj.offsetParent) y += obj.offsetLeft;
            return y;}
        else{return 0;}
        },
    CreateHTML:function(){
        var htmlstr="";
        htmlstr+="<div id=\"L_calendar\">\r\n";
        htmlstr+="<span id=\"SelectYearLayer\" style=\"z-index: 9999;position: absolute;top: 3; left: 19;display: none\"></span>\r\n";
        htmlstr+="<span id=\"SelectMonthLayer\" style=\"z-index: 9999;position: absolute;top: 3; left: 78;display: none\"></span>\r\n";
        htmlstr+="<div id=\"L_calendar-year-month\"><div id=\"L_calendar-PrevM\" onclick=\"parent."+this.NewName+".PrevM()\" title=\"上一月\"><b>&lt;</b></div><div id=\"L_calendar-year\" onmouseover=\"\" onmouseout=\"style.backgroundColor=''\" onclick=\"parent."+this.NewName+".SelectYearInnerHTML('"+this.L_TheYear+"')\"></div><div id=\"L_calendar-month\" onmouseover=\"\" onmouseout=\"\" onclick=\"parent."+this.NewName+".SelectMonthInnerHTML('"+this.L_TheMonth+"')\"></div><div id=\"L_calendar-NextM\" onclick=\"parent."+this.NewName+".NextM()\" title=\"下一月\"><b>&gt;</b></div></div>\r\n";
        htmlstr+="<div id=\"L_calendar-week\"><ul onmouseup=\"StopMove()\"><li>日</li><li>一</li> <li>二</li><li>三</li><li>四</li><li>五</li><li>六</li></ul></div>\r\n";
        htmlstr+="<div id=\"L_calendar-day\">\r\n";
        htmlstr+="<ul>\r\n";
        for(var i=0;i<this.L_WDay.length;i++){
            htmlstr+="<li id=\"L_calendar-day_"+i+"\" style=\"this.style.background='#fff'\" onmouseover=\"this.style.background='#ccc'\" onmouseout=\"this.style.background='white'\"></li>\r\n";
            }
        htmlstr+="</ul>\r\n";
        htmlstr+="<span id=\"L_calendar-today\" onclick=\"parent."+this.NewName+".Today()\"><b>今天</b></span>\r\n";
        htmlstr+="</div>\r\n";
        //htmlstr+="<div id=\"L_calendar-control\"></div>\r\n";
        htmlstr+="</div>\r\n";
        htmlstr+="<script type=\"text/javascript\">\r\n";
        htmlstr+="var MouseX,MouseY;";
        htmlstr+="var Moveable="+this.Moveable+";\r\n";
        htmlstr+="var MoveaStart=false;\r\n";
        htmlstr+="document.onmousemove=function(e)\r\n";
        htmlstr+="{\r\n";
        htmlstr+="var DateLayer=parent.document.getElementById(\"L_DateLayer\");\r\n";
        htmlstr+="    e = window.event || e;\r\n";
        htmlstr+="var DateLayerLeft=DateLayer.style.posLeft || parseInt(DateLayer.style.left.replace(\"px\",\"\"));\r\n";
        htmlstr+="var DateLayerTop=DateLayer.style.posTop || parseInt(DateLayer.style.top.replace(\"px\",\"\"));\r\n";
        htmlstr+="if(MoveaStart){DateLayer.style.left=(DateLayerLeft+e.clientX-MouseX)+\"px\";DateLayer.style.top=(DateLayerTop+e.clientY-MouseY)+\"px\"}\r\n";
        htmlstr+=";\r\n";
        htmlstr+="}\r\n";
       
        htmlstr+="document.getElementById(\"L_calendar-week\").onmousedown=function(e){\r\n";
        htmlstr+="if(Moveable){MoveaStart=true;}\r\n";
        htmlstr+="    e = window.event || e;\r\n";
        htmlstr+=" MouseX = e.clientX;\r\n";
        htmlstr+=" MouseY = e.clientY;\r\n";
        htmlstr+="    }\r\n";
       
        htmlstr+="function StopMove(){\r\n";
        htmlstr+="MoveaStart=false;\r\n";
        htmlstr+="    }\r\n";
        htmlstr+="</scr"+"ipt>\r\n";
        var stylestr="";
        stylestr+="<style type=\"text/css\">";
        stylestr+="body{background:#fff;font-size:12px;margin:0px;padding:0px;text-align:left}\r\n";
        stylestr+="#L_calendar{border:1px solid #ccc;width:158px;padding:1px;height:180px;z-index:9998;text-align:center}\r\n";
        stylestr+="#L_calendar-year-month{height:23px;line-height:23px;z-index:9998;background-color:#6D84B7;color:#fff;}\r\n";
        stylestr+="#L_calendar-year{line-height:23px;width:60px;float:left;z-index:9998;position: absolute;top: 3; left: 19;cursor:default}\r\n";
        stylestr+="#L_calendar-month{line-height:23px;width:48px;float:left;z-index:9998;position: absolute;top: 3; left: 78;cursor:default}\r\n";
        stylestr+="#L_calendar-PrevM{position: absolute;top: 3; left: 5;cursor:pointer}"
        stylestr+="#L_calendar-NextM{position: absolute;top: 3; left: 145;cursor:pointer}"
        stylestr+="#L_calendar-week{height:23px;line-height:23px;z-index:9998;}\r\n";
        stylestr+="#L_calendar-day{height:136px;z-index:9998;}\r\n";
        stylestr+="#L_calendar-week ul{cursor:move;list-style:none;margin:0px;padding:0px;}\r\n";
        stylestr+="#L_calendar-week li{width:20px;height:20px;float:left;padding:0px;text-align:center;}\r\n";
        stylestr+="#L_calendar-day ul{list-style:none;margin:0px;padding:0px;}\r\n";
        stylestr+="#L_calendar-day li{cursor:pointer;width:20px;height:20px;margin:1px;float:left;padding:0px;}\r\n";
        stylestr+="#L_calendar-control{height:25px;z-index:9998;}\r\n";
        stylestr+="#L_calendar-today{cursor:pointer;float:left;width:63px;height:20px;line-height:20px;margin:1px;text-align:center;background:red}"
        stylestr+="</style>";
        var TempLateContent="<html>\r\n";
        TempLateContent+="<head>\r\n";
        TempLateContent+="<title></title>\r\n";
        TempLateContent+=stylestr;
        TempLateContent+="</head>\r\n";
        TempLateContent+="<body>\r\n";
        TempLateContent+=htmlstr;
        TempLateContent+="</body>\r\n";
        TempLateContent+="</html>\r\n";
        this.GetDateLayer().document.writeln(TempLateContent);
        this.GetDateLayer().document.close();
        },
    InsertHTML:function(id,htmlstr){
        var L_DateLayer=this.GetDateLayer();
        if(L_DateLayer){L_DateLayer.document.getElementById(id).innerHTML=htmlstr;}
        },
    WriteHead:function (yy,mm) //
    {
        this.InsertHTML("L_calendar-year",yy + "年");
        this.InsertHTML("L_calendar-month",mm + "月");
    },
    IsPinYear:function(year)          
    {
        if (0==year%4&&((year%100!=0)||(year%400==0))) return true;else return false;
    },
    GetMonthCount:function(year,month) 
    {
        var c=this.MonHead[month-1];if((month==2)&&this.IsPinYear(year)) c++;return c;
    },
    GetDOW:function(day,month,year)  
    {
        var dt=new Date(year,month-1,day).getDay()/7; return dt;
    },
    GetText:function(obj){
        if(obj.innerText){return obj.innerText}
        else{return obj.textContent}
        },
    PrevM:function()
    {
        if(this.L_TheMonth>1){this.L_TheMonth--}else{this.L_TheYear--;this.L_TheMonth=12;}
        this.SetDay(this.L_TheYear,this.L_TheMonth);
    },
    NextM:function() 
    {
        if(this.L_TheMonth==12){this.L_TheYear++;this.L_TheMonth=1}else{this.L_TheMonth++}
        this.SetDay(this.L_TheYear,this.L_TheMonth);
    },
    Today:function() //Today Button
    {
        var today;
        this.L_TheYear = new Date().getFullYear();
        this.L_TheMonth = new Date().getMonth()+1;
        today=new Date().getDate();
        if(this.InputObject){
        this.InputObject.value=this.L_TheYear + "-" + this.L_TheMonth + "-" + today;
        }
        this.CloseLayer();
    },
    SetDay:function (yy,mm)   
    {
        this.WriteHead(yy,mm);
    
        this.L_TheYear=yy;
        this.L_TheMonth=mm;
		
        for (var i = 0; i < 39; i++){this.L_WDay[i]=""}; 
        var day1 = 1,day2=1,firstday = new Date(yy,mm-1,1).getDay();
        for (i=0;i<firstday;i++)this.L_WDay[i]=this.GetMonthCount(mm==1?yy-1:yy,mm==1?12:mm-1)-firstday+i+1  

        for (i = firstday; day1 < this.GetMonthCount(yy,mm)+1; i++){this.L_WDay[i]=day1;day1++;}
 
        for (i=firstday+this.GetMonthCount(yy,mm);i<39;i++){this.L_WDay[i]=day2;day2++}
        for (i = 0; i < 39; i++)
        {
            var da=this.GetDateLayer().document.getElementById("L_calendar-day_"+i+"");
            var month,day;
            if (this.L_WDay[i]!="")
            {
                if(i<firstday){
                    da.innerHTML="<b style=\"color:#fff\">" + this.L_WDay[i] + "</b>";
                    month=(mm==1?12:mm-1);
				
                    day=this.L_WDay[i];
					
				
                }
                else if(i>=firstday+this.GetMonthCount(yy,mm)){
                    da.innerHTML="<b style=\"color:#fff\">" + this.L_WDay[i] + "</b>";
					//alert(mm);
                    month=(mm==1?mm+1:mm+1);
                    day=this.L_WDay[i];
					
				
                }
                else{
                    da.innerHTML="<b style=\"color:#000\">" + this.L_WDay[i] + "</b>";
                	da.innerHTML=this.L_WDay[i];
                    month=(mm==1?mm:mm);
                    day=this.L_WDay[i];
                    if(document.all){
                        da.onclick=Function("parent."+this.NewName+".DayClick("+month+","+day+")");
                    }
                    else{
                        da.setAttribute("onclick","parent."+this.NewName+".DayClick("+month+","+day+")");
                    }
                }
                da.title=month+"月"+day+"日";
			
                da.style.background=(yy == new Date().getFullYear()&&month==new Date().getMonth()+1&&day==new Date().getDate())? "#fff":"#fff";
            
                if(this.InputDate!=null){
                    if(yy==this.InputDate.getFullYear() && month== this.InputDate.getMonth() + 1 && day==this.InputDate.getDate()){
                        da.style.background="#ccc";
                        }
                    }
              }
        }
    },
    SelectYearInnerHTML:function (strYear) //��ݵ�������
    {
          if (strYear.match(/\D/)!=null){alert("日期格式不正确");return;}
          var m = (strYear) ? strYear : new Date().getFullYear();
        if (m < 1000 || m > 9999) {alert("1000-9999");return;}
        var n = m - 10;
        if (n < 1000) n = 1000;
        if (n + 26 > 9999) n = 9974;
        var s = "<select name=\"L_SelectYear\" id=\"L_SelectYear\" style='font-size: 12px' "
             s += "onblur='document.getElementById(\"SelectYearLayer\").style.display=\"none\"' "
             s += "onchange='document.getElementById(\"SelectYearLayer\").style.display=\"none\";"
             s += "parent."+this.NewName+".L_TheYear = this.value; parent."+this.NewName+".SetDay(parent."+this.NewName+".L_TheYear,parent."+this.NewName+".L_TheMonth)'>\r\n";
        var selectInnerHTML = s;
        for (var i = n; i < n + 26; i++)
        {
            if (i == m)
               {selectInnerHTML += "<option value='" + i + "' selected>" + i + "月" + "</option>\r\n";}
            else {selectInnerHTML += "<option value='" + i + "'>" + i + "月" + "</option>\r\n";}
         }
        selectInnerHTML += "</select>";
        var DateLayer=this.GetDateLayer();
        DateLayer.document.getElementById("SelectYearLayer").style.display="";
        DateLayer.document.getElementById("SelectYearLayer").innerHTML = selectInnerHTML;
        DateLayer.document.getElementById("L_SelectYear").focus();
        },
    SelectMonthInnerHTML:function (strMonth) //�·ݵ�������
    {
        if (strMonth.match(/\D/)!=null){alert("日期格式不正确");return;}
        var m = (strMonth) ? strMonth : new Date().getMonth() + 1;
         var s = "<select name=\"L_SelectYear\" id=\"L_SelectMonth\" style='font-size: 12px' "
             s += "onblur='document.getElementById(\"SelectMonthLayer\").style.display=\"none\"' "
             s += "onchange='document.getElementById(\"SelectMonthLayer\").style.display=\"none\";"
             s += "parent."+this.NewName+".L_TheMonth = this.value; parent."+this.NewName+".SetDay(parent."+this.NewName+".L_TheYear,parent."+this.NewName+".L_TheMonth)'>\r\n";
        var selectInnerHTML = s;
        for (var i = 1; i < 13; i++)
        {
            if (i == m)
               {selectInnerHTML += "<option value='"+i+"' selected>"+i+"月"+"</option>\r\n";}
            else {selectInnerHTML += "<option value='"+i+"'>"+i+"月"+"</option>\r\n";}
        }
        selectInnerHTML += "</select>";
        var DateLayer=this.GetDateLayer();
        DateLayer.document.getElementById("SelectMonthLayer").style.display="";
        DateLayer.document.getElementById("SelectMonthLayer").innerHTML = selectInnerHTML;
        DateLayer.document.getElementById("L_SelectMonth").focus();
    },
    DayClick:function(mm,dd) 
    {
        var yy=this.L_TheYear;
     
        if(mm<1){yy--;mm=12+mm;}
        else if(mm>12){yy++;mm=mm-12;}
        if (mm < 10){mm = "0" + mm;}
        if (this.ClickObject)
        {if (!dd) {return;}
        if ( dd < 10){dd = "0" + dd;}
        this.InputObject.value= yy + "-" + mm + "-" + dd ;
        this.CloseLayer();
         }
        else {this.CloseLayer(); alert("日期格式不正确");}
    },
    SetDate:function(){
        if (arguments.length < 1){alert("日期格式不正确");return;}
        else if (arguments.length > 2){alert("日期格式不正确");return;}
        this.InputObject=(arguments.length==1) ? arguments[0] : arguments[1];
        this.ClickObject=arguments[0];
        var reg = /^(\d+)-(\d{1,2})-(\d{1,2})$/;
        var r = this.InputObject.value.match(reg);
        if(r!=null){
            r[2]=r[2]-1;
            var d= new Date(r[1], r[2],r[3]);
            if(d.getFullYear()==r[1] && d.getMonth()==r[2] && d.getDate()==r[3]){
                this.InputDate=d;        //�����ⲿ���������
            }
            else this.InputDate="";
            this.L_TheYear=r[1];
            this.L_TheMonth=r[2]+1;
            }
        else{
            this.L_TheYear=new Date().getFullYear();
            this.L_TheMonth=new Date().getMonth() + 1
            }
        this.CreateHTML();
        var top=this.GetY();
        var left=this.GetX();
        var DateLayer=document.getElementById("L_DateLayer");
        DateLayer.style.top=top+this.ClickObject.clientHeight+5+"px";
        DateLayer.style.left=left+"px";
        DateLayer.style.display="block";
        if(document.all){
            this.GetDateLayer().document.getElementById("L_calendar").style.width="160px";
            this.GetDateLayer().document.getElementById("L_calendar").style.height="180px"
            }
        else{
            this.GetDateLayer().document.getElementById("L_calendar").style.width="154px";
            this.GetDateLayer().document.getElementById("L_calendar").style.height="180px"
            DateLayer.style.width="158px";
            DateLayer.style.height="250px";
            }
        //alert(DateLayer.style.display)
        this.SetDay(this.L_TheYear,this.L_TheMonth);
        },
    CloseLayer:function(){
        try{
            var DateLayer=document.getElementById("L_DateLayer");
            if((DateLayer.style.display=="" || DateLayer.style.display=="block") && arguments[0]!=this.ClickObject && arguments[0]!=this.InputObject){
                DateLayer.style.display="none";
            }
        }
        catch(e){}
        }
    }
   
document.writeln('<iframe id="L_DateLayer" name="L_DateLayer" frameborder="0" style="position:absolute;width:160px; height:200px;z-index:9998;display:none;"></iframe>');


var MyCalendar=new L_calendar();
MyCalendar.NewName="MyCalendar";
document.onclick=function(e)
{
	
	e = window.event || e;
    var srcElement = e.srcElement || e.target;
    MyCalendar.CloseLayer(srcElement);
}