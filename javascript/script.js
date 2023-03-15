// let deleteContact = document.querySelector(".delete");

// deleteContact.addEventListener("click", ()=>{
//     alert('Message supprimé');

// })

let editBtn= document.getElementById("editBtn");
let edittext = document.getElementById("edit");

editBtn.addEventListener("click", ()=>{
    // let url='ajax.php';
    // let url='./ajax.php'

    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = ()=>{
        
        if(xhr.readyState == 4 && (xhr.status == 200 || req.status == 0)){
            
            console.log(xhr);
            console.log(typeof xhr)
            
            let datas = xhr.response;
           
            console.log(typeof datas)
            console.log(datas)

                


        } else if(xhr.readyState < 4){
        console.log(xhr.readyState);
                // console.log("Une erreur est survenu");
        }
    }
    xhr.open('GET', './ajax.php', true);
    // console.log(xhr);

            
    xhr.send();



})

