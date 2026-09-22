fetch("home.php").
then(respones=>respones.json()).
then(sulaf=>{


        if (!sulaf.authenticated){
                window.location.href="buy.html";
        }
  })