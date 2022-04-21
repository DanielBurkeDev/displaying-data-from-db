function postData() {

    let formData = new FormData(document.forms.updateProfileForm);

  
  // send it out
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "db/update-profile.php");
  xhr.send(formData);

  

}

