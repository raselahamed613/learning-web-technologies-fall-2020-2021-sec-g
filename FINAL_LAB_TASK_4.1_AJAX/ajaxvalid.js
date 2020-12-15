
function validateForm()
{
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let male = document.getElementById("genderOption1");
    let female = document.getElementById("genderOption2");
    let other = document.getElementById("genderOption3");
    let bloodGroup = document.getElementById("bloodGroup");
    let dobs = document.getElementById("dobs");
    let SSC = document.getElementById("Degree1");
    let HSC = document.getElementById("Degree2");
    let BSc = document.getElementById("Degree3");
    let picture = document.getElementById("picture").value;
    let hasError = false;

    if (name == "")
    {
        document.getElementById("nameDiv").innerHTML = "*required";
        hasError = true;
    }
    else
    {
        if (name.split(" ").length < 2 || !(name.toLowerCase() != name.toUpperCase()))
        {
            
            document.getElementById("nameDiv").innerHTML = "*invalid";
            hasError = true;
        }

    }



    if (email == "")
    {
        document.getElementById("emailDiv").innerHTML = "*required";
        hasError = true;
        
    }
    else
    {
        var at = email.indexOf("@");
        var dot = email.lastIndexOf("\.");
        if (!(email.length > 0 && at > 0 && email[at + 1] !== "." && dot > at + 1 && dot < email.length && email.indexOf(" ") === -1 && email.indexOf("..") === -1))
        {
            document.getElementById("emailDiv").innerHTML = "*invalid";
            hasError = true;
        }
        
    }


    
    if (!male.checked && !female.checked && !other.checked)
    {
        document.getElementById("genderDiv").innerHTML = "*required";
        hasError = true;

    }
    if (bloodGroup.value == "")
    {
        document.getElementById("bloodGroupDiv").innerHTML = "*required";
        hasError = true;

    }



    if (!SSC.checked && !HSC.checked && !BSc.checked)
    {
        document.getElementById("degreeDiv").innerHTML = "*required";
        hasError = true;
    }
    

    if (picture == "")
    {
        document.getElementById("pictureDiv").innerHTML = "*picture required";
        hasError = true;
    }

    if (hasError)
    {
        return false;
    }
    else
    {
        alert("Your form has been successfully submitted!");
    }



}


function clearField(divName)
{
    document.getElementById(divName).innerHTML = "";

}