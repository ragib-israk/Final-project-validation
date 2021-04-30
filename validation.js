function formValidation() {

   let fname = document.querySelector(".firstname");
   let lname= document.querySelector(".lastname");

   
   let gender = document.querySelector(".gender");
   let dof = document.querySelector(".dof");
   let address = document.querySelector(".address");
   let uname = document.querySelector(".uname");
   let password = document.querySelector(".password");
    let mail = document.querySelector(".mail");
     let mobo = document.querySelector(".mobo");
   

let rmail = document.querySelector(".rmail");



   if (fname.value == "") {
      document.querySelector("#fname").innerHTML = "input firstname!! <br>";
      return false;
   }
  



   if (lname.value == "") {
      document.querySelector("#lname").innerHTML = "input lastname!! <br>";
      return false;
   }
   


   if (gender.value == "") {
      document.querySelector("#gender").innerHTML = "input gender!! <br>";
      return false;
 }


   if (dof.value == "") {
      document.querySelector("#dof").innerHTML = "input dof!! <br>";
      return false;
   }
  


   if (address.value == "") {
      document.querySelector("#address").innerHTML = "input address!! <br>";
      return false;
   }


   if (uname.value == "") {
      document.querySelector("#uname").innerHTML = "input uname!! <br>";
      return false;
   }

   

    if (password.value == "") {
      document.querySelector("#password").innerHTML = "input password!! <br>";
      return false;
   }


    if (mail.value == "") {
      document.querySelector("#mail").innerHTML = "input mail!! <br>";
      return false;
   }


    if (mobo.value == "") {
      document.querySelector("#mobo").innerHTML = "input mobo !! <br>";
      return false;
   }



   if (rmail.value == "") {
      document.querySelector("#rmail").innerHTML = "input rmail!! <br>";
      return false;
   }
  

   
  









}

