   function validationFunction() {
    //this function will check for all the fields of the feedback form
    var form = document.getElementById("feedback-form");
    form.onsubmit = function () {
        var error = document.getElementById("error");
        var inputs = form.getElementsByTagName("input");
        var fn = form.getElementsByName("fname").value;
        var fl = form.getElementsByName("lname").value;
        var city = form.getElementsByName("city").value;
        var age = form.getElementsByName("age").value;
        var  valid = true;
    // checked if null or not
        for(var i = 0 ; i < inputs.length ; i++){

            if (inputs[i].type === "text" || inputs[i].type === "email" || inputs[i].type === "number"  ){

                if (inputs[i].value.trim() === "" && inputs[i].name !== "pname"){
                    inputs[i].style.borderColor = "red";
                    valid = false;
                }
            // if the feilds dose not empty
                else {
         // checked for names in not numbers:
         if(isNaN(fn)){
         fn.style.borderColor = "";
         }else{
        fn.style.borderColor = "red";
          document.getElementsByName("fname").innerText = "please enter a text";
            valid = false;
         }
        if(isNaN(ln)){
         ln.style.borderColor = "";
         }else{
        ln.style.borderColor = "red";
          document.getElementsByName("lname").innerText = "please enter a text";
            valid = false;
         }
        if(isNaN(city)){
         city.style.borderColor = "";
         }else{
        city.style.borderColor = "red";
          document.getElementsByName("city").innerText = "please enter a text";
            valid = false;
         }

        // check if age is between 10 and 100
      if (isNaN(age) || age < 10 || age > 100) {
      age.style.borderColor = "red";
          document.getElementsByName("age").innerText = "please enter a text";
            valid = false;}    
            else {
          age.style.borderColor = "";}
                } } }

        //gender
        var  gender_male = document.getElementById("gender_male");
        var  gender_female = document.getElementById("gender_female");
        if ( !gender_male.checked && !gender_female.checked ){
            document.getElementById("gender_error").innerText = "please select one";
            valid = false;
        }else {
            document.getElementById("gender_error").innerText = "";
        }

        //interest check
        var yes = document.getElementById("yes");
        var no  = document.getElementById("no");
        if ( !yes.checked && !no.checked ){
            document.getElementById("interest_error").innerText = "please select one";
            valid = false;
        }else {
            document.getElementById("interest_error").innerText = "";
        }

        //check if he choose yes and make reason empty
        if (inputs[7].checked && inputs[9].value.trim() === ""){
            inputs[9].style.borderColor = "red";
            valid = false;
        }else{
            inputs[9].style.borderColor = "";

        }

        //Check boxes check
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        var value1 = false;
        var value2 = false;
        for (var k = 0 ; k < 8 ; k++){

            if (checkboxes[k].checked)
                value1 = true;

        }

        for (var j = 8 ; j < 17 ; j++){

            if (checkboxes[j].checked)
                value2 = true;

        }
        if (value1 === false  || value2 === false){

            error.innerText = "Please fill input correctly";
            error.style.color = "red";
            if (value1 === false ){
                document.getElementById("checkError1").innerText = "at least one selected"
                valid = false;

            }else {
                document.getElementById("checkError1").innerText = "";


            }

            if (value2 === false){
                document.getElementById("checkError2").innerText = "at least one selected"
                valid = false;
            }else{
                document.getElementById("checkError2").innerText = ""

            }

        }else{
            document.getElementById("checkError1").innerText = "";
            document.getElementById("checkError2").innerText = "";

            error.innerText = "";

        }

        if (valid === true){
            error.style.color = "";
            error.innerText = "";

            return true;

        }else{
            error.style.color = "red";
            error.innerText = "please fill required fields correctly";
            return false;
        }

    }

}