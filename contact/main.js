function validateForm() {
    let ad = document.forms["form1"]["ad"].value;
    let soyad = document.forms["form1"]["soyad"].value;
    let mail = document.forms["form1"]["mail"].value;
    let pass = document.forms["form1"]["password"].value;

    var regex = /^[a-zA-Z0-9._-]+@([a-zA-Z0-9.-]+.)+([.])+[a-zA-Z0-9.-]{2,4}$/;

    if (ad == "") {
      alert('Ad boş geçilemez.');
      return false;
    }
    if (soyad == "") {
      alert('Soyad boş geçilemez.');
        return false;
      }
    if (regex.test(mail)==true)
	  {
      return true;
    }
	  else
	  {
      alert("Hata geçersiz mail adresi girdiniz!");
      return false;
    }
    if (pass == "") {
      alert('Şifre boş geçilemez.');
      return false;
      }
      
  }