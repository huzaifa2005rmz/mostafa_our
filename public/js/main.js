const showList = document.querySelector("#show_list"),
    List = document.querySelector("#list_modeli"),
    removeList = document.querySelector("#remove_list"),
    formGetData = document.querySelector(".form-get-data"),
    btnSubmitForm = document.querySelector(".add-product"),
    removeFormData = document.querySelector(".remove_formdata");
  const  inputsaerch_a = document.getElementById("saerch_input_a");


// navbar click btn 
showList.onclick = () => {
    List.style.right = "0";
}
// navbar remove btn 
removeList.onclick = () => {
    List.style.right = "-100000px";
}


// get form data show btn
btnSubmitForm.onclick = () => {
    formGetData.style.display = "block"
}
// get form data remove btn
removeFormData.onclick = () => {
    formGetData.style.display = "none"
}

