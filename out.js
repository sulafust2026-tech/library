/*let logout= document.getElementById("lo");

if(logout) {
    logout.addEventListener("click", function () {


  fetch("out.php")
    
.then(s =>s.json())
.then(s1 =>{
    if(s1.Succes){
        window.location.replace("buy.html" );

    }
});
  });

}*/

let logout = document.getElementById("lo");

if(logout) {
    logout.addEventListener("click", function () {
        fetch("out.php")
        .then(s => s.json())
        .then(s1 => {
            if(s1.success){
                window.location.replace("buy.html");
            }
        });
    });
}


