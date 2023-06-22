function checkout (){
    yakin = confirm("Apakah kamu yakin ingin membatalkan order?")
    if (yakin) {
        window.location = "home.php";  
    }
}

function processCheckout() {
    var state = document.getElementById("inputState").value;
    var shippingCost = calculateShippingCost(state);
    orderSummary(shippingCost);
}

function orderSummary(shippingCost) {
  var firstName = document.getElementById("firstName").value;
  var lastName = document.getElementById("lastName").value;
  var email = document.getElementById("email").value;
  var city = document.getElementById("inputCity").value;
  var state = document.getElementById("inputState").value;
  var zip = document.getElementById("inputZip").value;
  var address = document.getElementById("specificaddress").value;
  var destination = state;
  // var shippingCost = calculateShippingCost(destination);

  document.getElementById("name").innerHTML="<b>" + firstName + lastName + "</b>";
  document.getElementById("contact").innerHTML="<b>" + email + "</b>";
  document.getElementById("address").innerHTML="<b>"  + address + ","+ city + ","+ state + ","+ zip + "</b>";
  document.getElementById("shipping").innerHTML = "<b>Shipping Cost: Rp " + shippingCost + "</b>";
}

function calculateShippingCost(destination) {
    var shippingCosts = {
        "Aceh": 150000,
        "Sumatera Utara": 100000,
        "Sumatera Barat": 120000,
        "Riau": 80000,
        "Kepulauan Riau": 90000,
        "Jambi": 90000,
        "Sumatera Selatan": 110000,
        "Bangka Belitung": 120000,
        "Bengkulu": 140000,
        "Lampung": 130000,
        "Banten": 50000,
        "DKI Jakarta": 0,
        "Jawa Barat": 60000,
        "Jawa Tengah": 70000,
        "DI Yogyakarta": 70000,
        "Jawa Timur": 80000,
        "Bali": 90000,
        "Nusa Tenggara Barat": 120000,
        "Nusa Tenggara Timur": 150000,
        "Kalimantan Barat": 110000,
        "Kalimantan Tengah": 130000,
        "Kalimantan Selatan": 120000,
        "Kalimantan Timur": 150000,
        "Kalimantan Utara": 140000,
        "Sulawesi Utara": 140000,
        "Sulawesi Tengah": 160000,
        "Sulawesi Selatan": 150000,
        "Sulawesi Tenggara": 170000,
        "Gorontalo": 160000,
        "Maluku": 180000,
        "Maluku Utara": 190000,
        "Papua Barat": 200000,
        "Papua": 210000,
    };
  
    var uppercaseDestination = destination.toUpperCase();
  
    if (shippingCosts.hasOwnProperty(uppercaseDestination)) {
      return shippingCosts[uppercaseDestination];
    } else {
      return "Tujuan tidak tersedia.";
    }
}
   
function total () {
    
}

function subscribe() {
  var emailInput = document.getElementById("emailInput");
  var email = emailInput.value;
  
  if (email.trim() === "") {
    alert("Mohon masukkan alamat email Anda.");
    return;
  }
  
  alert("Terimakasih telah berlangganan. Tunggu update artikel menarik lainnya.");
  
  // Menghapus isi input email
  emailInput.value = "";
}

// function sendComment() {
//   var commentInput = document.getElementById('comment');
//   var commentText = commentInput.value;

//   if (commentText.trim() !== '') {
//       var commentItem = document.createElement('div');
//       commentItem.className = 'alert alert-dark';
//       commentItem.textContent = commentText;

//       document.getElementById('commentList').appendChild(commentItem);
//       commentInput.value = '';
//   }
// }

// document.getElementById('sendBtn').addEventListener('click', sendComment);
