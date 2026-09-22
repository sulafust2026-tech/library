let button= document.getElementById("ss");
button.addEventListener("click",function (e) {
    e.preventDefault();
let  username=document.getElementById("name");
let  password=document.getElementById("pass");
let  user2={
    user : username.value,
    pass : password.value
    };
    fetch("hh.php",{
        method :"POST",
        headers :{
            "Content-Type" :"application/json"
        },
        body : JSON.stringify(user2)

    })
.then(s =>s.json())
.then(s1 =>{
    if(s1.Succes){
        window.location.href="home.html" ;
    }
else
{
    alert("falied");
}
})
})
