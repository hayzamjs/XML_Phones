function ifMacExists(){
  var searchAddress = document.getElementById('macID').value;
  var url = '/checkmac.php?id=' + btoa(searchAddress);

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      if(this.responseText == 'Sorry'){
          console.log('New entry!');
      }
      else{
         var xa = atob(this.responseText);
         var ya = xa.split('-LEZ4-');
         var namefinal = ya[0];
         var phonefinal = ya[1];
         var passwordfinal = ya[2];
         //console.log(namefinal + '-' + phonefinal + '-' + passwordfinal);
         document.getElementById('name').value = namefinal;
         document.getElementById('phone').value = phonefinal;
         document.getElementById('password').value = passwordfinal;
         document.getElementById('submit').value = 'Update Extension!';

      }

    }
  };

  xhttp.open("GET", url, true);
  xhttp.send();
}

function submitPhone(){

  var macAddress = document.getElementById('macID').value;
  var phoneName = document.getElementById('name').value;
  var phoneNumber = document.getElementById('phone').value;
  var phonePassword = document.getElementById('password').value;
  var e = document.getElementById('selectModel');
  var phoneModel = e.options[e.selectedIndex].value;

  if(macAddress == '' || phoneName == '' || phoneNumber == '' || phonePassword == ''){
    alert('Please fill all the input boxes!');
  }

else{
  var aggData = macAddress + '-LEZ4-' + phoneName + '-LEZ4-' + phoneNumber + '-LEZ4-' + phonePassword + '-LEZ4-' + phoneModel;
  aggData = btoa(aggData);
  var serverURL = '/new.php?data=' + aggData;
  window.location.href = serverURL;
}
}
