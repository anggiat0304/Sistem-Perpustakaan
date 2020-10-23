window.onload = function () {
    var keyword = document.getElementById('search');
    keyword.addEventListener('keyup',function() {
           var xhr = new XMLHttpRequest();
           xhr.onreadystatechange = function () {
               if (xhr.readyState == 4 && xhr.status == 200) {
                window.location = 'login/'+xhr.responseText;
               }
           }
           xhr.open('GET','cek/{{'+keyword.value+ '}}',true);
           xhr.send();
    });
}