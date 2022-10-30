const form = document.getElementById("form");
const addbrand = document.getElementById("addbrand");
const addcategory = document.getElementById("addcategory");
const addproduct = document.getElementById("addproduct");

form.addEventListener("Add brand", e => {
  e.preventDefault();
  checkInputs();
});

function checkInputs() {
  //Get the value the form field.
  const addbrandValue = addbrand.value.trim(); //trim to delete blanc space.
  const addcategory = addcategory.value.trim();
  const addproduct = addproduct.value.trim();


  if (addbrandValue === "") {
    setErrorInput(addbrand, " Brand name required.");
  } else {
    setSuccessInput(addbrand);
  }

  //###################################
  if (addcategoryValue === "") {
    setErrorInput(addcategory, "Brand category cannot be empty.");
  } else {
    setSuccessInput(addcategory);
  }

  //###################################
  if (addprouctValue === "") {
    setErrorInput(addproduct, "Brand product cannot be empty.");
  } else {
    setSuccessInput(addproduct);
  }

}

function setErrorInput(input, errorMessage) {
  const formControl = input.parentElement;
  const small = formControl.querySelector("small");

  small.innerText = errorMessage;
  formControl.className = "form__control error";
}

function setSuccessInput(input) {
  const formControl = input.parentElement;
  formControl.className = "form__control success";
}

