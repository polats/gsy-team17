<html>
<head>
</head>
<body>
<div id="diva"><b>Score</b> some <i>goals</i></div>
<div id="soda">It's with some trepidation that I share my story over the Internet but I hope by telling my story someone somewhere who might be going through difficult circumstances will find some comfort.

When I was 16 my step father murdered my mother, murdered another person living with us at the time, and then committed suicide himself. When something of this nature happens, it pretty much blows up like an atomic bomb, any concept of normalcy, security, or sanity one might have previously viewed the world through. I still remember on that particular day, waking up to get ready to go to high school, turning on MTV for a few minutes, and noticing my step father get ready some documents while everybody else in the house was asleep. I thought nothing of it until I was pulled out of 1st period class just 90 minutes later. What goes through someone's mind before they are about to kill two people and themselves? Was I lucky to be spared that day? Would I have been if I was sick and stayed home? Questions abound but no answers because anybody that could answer is gone.

For me, the immediate aftermath was grief and shock. I had immigrated to America when I was 3 and most of my remaining relatives are overseas. Some of them flew over to take care of the funeral arrangements.</div>	
<script src="jquery.min.js"></script>
<script>

function GetSelectedText () {
if (window.getSelection) {  // all browsers, except IE before version 9
    var range = window.getSelection();
    var tvalue = range.toString();
//    alert(tvalue);
	var postData = {
	  'text':tvalue,
	  'ipadd':'<?php echo $_SERVER["REMOTE_ADDR"] ?>'
	};
    $.ajax({
		type: "POST",
		url: "store.php",
		data: postData,
		success: function(e){
			if(e=="done"){
				alert("added"+e);
			} else{
				alert("not added"+e);
		    }
		}
    });

} 
else {
    if (document.selection.createRange) { // Internet Explorer
        var range = document.selection.createRange ();
        alert (range.text);
    }
}
}

//var butn = document.getElementById("soda");
//butn.onclick = function(){

document.onclick = function(){
    GetSelectedText();
}

/*
document.selection.createRange().htmlText;

var range = window.getSelection().getRangeAt(0),
  content = range.extractContents(),
     span = document.createElement('SPAN');

span.appendChild(content);
var htmlContent = span.innerHTML;

range.insertNode(span);

alert(htmlContent);
*/
</script>
</body>
</html>