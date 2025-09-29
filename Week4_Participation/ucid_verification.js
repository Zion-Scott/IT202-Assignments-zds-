//regex for validating ucid
const regex = /[A-Za-z]+[0-9]{0,3}/;


let valid_id = ["zds","nba44","gts184","mdc8"];

const myform = document.getElementById("ucid_form");

myform.addEventListener("submit",function(buttonPress){
    const ucid_var = document.getElementById("ucid_id");

    if(!regex.test(ucid_var.value)) {
        alert("UCID DOES NOT CONFORM TO VALID FORMAT");
    }
    else {
        let found = false;
        for (let i = 0; i < valid_id.length; i++) {
            if (valid_id[i] == ucid_var.value) {
                found = true;
                alert("VALID UCID FORMAT AND UCID FOUND");
                break;
            }
        }

        if(!found) {
            alert("VALID UCID FORMAT BUT INVALID UCID")
        }
    }
})
