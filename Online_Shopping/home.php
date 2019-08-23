<head>
<script>
function abc()
{
var arr=new Array("usepics/neck.jpg","usepics/ban7.jpg","usepics/ban5.jpg","usepics/ban1.jpg","usepics/akkriti-banner.jpg");
var ind=eval(document.f1.h1.value);
document.img.src=arr[ind];
document.f1.h1.value=ind+1;
if(document.f1.h1.value==5)
{
document.f1.h1.value=0;
}
}
setInterval("abc()",3000);
</script>
</head>
<body>
<div id="RightPart">
  <div id="Page"><img src="usepics/akkriti-banner.jpg" alt="" width="669" height="210" name="img"/>
  <form name="f1">
  <input type="hidden" name="h1" value="0" />
  </form>
  <div><br/><center><h2><font face="Lucida Handwriting"  color="#00CCFF">Latest Fashion News</font></h2></center></div>
 <table border="0">
 <tr><td> 
<img src="usepics/news1.jpg" width="150" height="180"/>
</td>
<td colspan="2">
<font face="Lucida Handwriting" size="+1" color="#99CC33">
YAju FAshion</font><br>
<font face="Comic Sans MS"><strong> A new bride dress</strong></font></td>
</tr>
<tr>
<td>
<br>
<img src="usepics/news2.jpg" /><br>
<font face="Comic Sans MS"><strong>D
</strong></font></td>

<td>
<img src="usepics/news3.jpg" /><br>


</td>
</tr>
</table>
  </div>
  </div>
  </body>