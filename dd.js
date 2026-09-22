fetch (dd.php)
.then(s =>s.json()).
.then(s1 =>{
    
let sshow= document.getElementById("xx");
if(sshow && Array.isArray(s1)){
    sshow.innerHTML= "";

    for(let ss of s1)
        {

        sshow.innerHTML += `
        <tr>
        <td> ${ss.id}</td>
        <td>${ss.name}</td>
        <td>${ss.desc}</td>
        </tr>
        `;
    }
}
});