<script>

{

function createCookie(name,value,days)

{

if (days)

{

var date = new Date();

date.setTime(date.getTime()+(days*24*60*60*1000));

var expires = "; expires="+date.toGMTString();

}

else var expires = "";

document.cookie = name+"="+value+expires+"; path=/";

}

var q = window.location.search;

var errmsg = null;

 

if (q && q.length > 1) {

q = q.substring(1).split(/[=&]/);

for (var i = 0; i < q.length - 1; i += 2) {

if (q[i] == "errmsg") {

errmsg = unescape(q[i + 1]);

break;

}

if (q[i] == "host") {

createCookie('url',unescape(q[i+1]),0)

}

}

}

 

if (errmsg && errmsg.length > 0) {

errmsg = "<div id='errorbox'>\n" + errmsg + "\n</div>\n";

document.write(errmsg);

}

}

</script>
