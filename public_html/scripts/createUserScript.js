function createPDF() {
  let sTable = document.getElementById("tableDiv").innerHTML;

  let win = window.open("", "", "height=700,width=700");

  // win.document.write('<style>body{width:100%;height:auto}.img_circle{width:150px;border-radius:100px}.my_id{margin:0 auto;padding-top:5px;width:300px;height:auto;border:3px solid black;border-radius:10px;background:url(images/bgg-id.jpg);background-size:cover}table{font-size:14px}.address{width:100%;height:auto;background-color:#1c80a2;color:white}tr p{height:2px}</style>');
  win.document.write(
    "<style>.img_circle{width:150px;border-radius:100px}.my_id{margin:0 auto;padding-top:5px;width:300px;height:auto;border:3px solid black;border-radius:10px;background:url(images/bgg-id.jpg);background-size:cover}table{font-size:14px}.address{width:100%;height:auto;background-color:#1c80a2;color:white}</style>"
  );
  win.document.write(sTable);

  win.document.close(); // CLOSE THE CURRENT WINDOW.

  win.print(); // PRINT THE CONTENTS.
}

// Great help in parsing table values https://stackoverflow.com/questions/53965880/click-a-button-and-get-values-of-cells-in-same-row-with-javascript-or-jquery
function printingFun(x) {
  let td = x.parentNode;
  let voternumber =
    td.previousSibling.previousSibling.previousSibling.previousSibling
      .previousSibling.previousSibling;
  let name =
    td.previousSibling.previousSibling.previousSibling.previousSibling
      .previousSibling;
  let fathersname =
    td.previousSibling.previousSibling.previousSibling.previousSibling;
  let gender = td.previousSibling.previousSibling.previousSibling;
  let dob = td.previousSibling.previousSibling;
  let address = td.previousSibling;
  let photo = td.nextSibling;

  let voternumber_value = voternumber.innerHTML;
  let name_value = name.innerHTML;
  let fathersname_value = fathersname.innerHTML;
  let gender_value = gender.innerHTML;
  let dob_value = dob.innerHTML;
  let address_value = address.innerHTML;
  let photo_value = photo.innerHTML;
  // console.log(interpret_value);

  console.log(photo_value);

  let voterCard =
    '<div class="my_id"><center><h3 >Voters Council</h3></center><center> <img class="img_circle" src="';
  voterCard += photo_value;
  voterCard +=
    '"></center> <br><table width="100%"><tr><th><p align="right">Voter number:</p></th><td><p>';
  voterCard += voternumber_value;
  voterCard += '</p></td></tr><tr><th><p align="right">Name:</p></th><td><p>';
  voterCard += name_value;
  voterCard +=
    '</p></td></tr><tr><th><p align="right">Fathers Name:</p></th><td><p>';
  voterCard += fathersname_value;
  voterCard += '</p></td></tr><tr><th><p align="right">Gender:</p></th><td><p>';
  voterCard += gender_value;
  voterCard +=
    '</p></td></tr><tr><th><p align="right">Date of Birth:</p></th><td><p>';
  voterCard += dob_value;
  voterCard +=
    '</p></td></tr></table><center><div class="address"><b>Address:</b><p>';
  voterCard += address_value;
  voterCard += "</p></div></center></div>";

  $("#tableDiv").html(voterCard);

  createPDF();
}

function makeThatTable(jsonData) {
  let htmlRes = "<table class='table table-bordered' style='width:100%'>";
  htmlRes +=
    "<tr><th>Voter Number</th><th>Name</th><th>Father's Name</th><th>Gender</th><th>Date of Birth</th><th>Address</th></tr>";

  for (js of jsonData) {
    let temRow =
      "<tr>" +
      "<th>" +
      js.voternumber +
      "</th>" +
      "<th>" +
      js.name +
      "</th>" +
      "<th>" +
      js.fathersname +
      "</th>" +
      "<th>" +
      js.sex +
      "</th>" +
      "<th>" +
      js.dob +
      "</th>" +
      "<th>" +
      js.address +
      "</th>" +
      "<td><button class='tableRow' onclick='printingFun(this)'>Print</button></td>" +
      "<td style='display:none'> https://electionsignup.000webhostapp.com/uploads/" +
      js.photo +
      "</td>" +
      "</tr>";
    htmlRes += temRow;
  }
  htmlRes += "</table>";

  return htmlRes;
}

// When you hit search
$("#sendForTable").on("click", function(e) {
  console.log("Go clicked");
  document.getElementById("signUpForm").style.display = "none";
  // e.preventDefault();

  $.ajax({
    type: "POST",
    cache: true,
    url: "/searchForIt.php",
    data: { searchKey: document.getElementById("searchText").value }, //ajax parameters
    success: function(result) {
      console.log(result);
      let jsonData = JSON.parse(result);
      $("#searchResults").html(makeThatTable(jsonData));

      // document.getElementById('ddl2').style.display = 'inline';
      // document.getElementById('ddl3').style.display = 'inline';
      // document.getElementById('postingArchiveStatus').style.display = 'inline';
      // document.getElementById('age').style.display = 'inline';
    }
  });
});
