const github = document.querySelector("#githubIcon");
const fb = document.querySelector("#facebookIcon");
const twitter = document.querySelector("#twitterIcon");
const ig = document.querySelector("#instagramIcon");
const gmail = document.querySelector("#gmailIcon");
const D_ol = document.querySelector(".D-ol");
const O_ol = document.querySelector(".O-ol");
const rangeInputs = document.querySelectorAll(".range-input");

rangeInputs.forEach((input) => {
  const value = input.parentElement.querySelector(".range-value");
  value.textContent = input.value;

  input.addEventListener("input", (event) => {
    value.textContent = event.target.value;
  });
});

function deleteRow(id) {
  if (confirm("Czy na pewno chcesz usunąć tego uzytkownika?")) {
  }
}
let alertshow = false;
setInterval(() => {
  document.title = alertshow ? "Oliwier Malinowski" : "Dawid Sowa";
  alertshow = !alertshow;
}, 5000);

function deleteTask(id) {
  if (confirm("Czy na pewno chcesz usunąć ten wiersz?")) {
    let select = new XMLHttpRequest();
    select.open("POST", "PHP_Files/Tasks/delete_task.php", true);
    select.setRequestHeader(
      "Content-type",
      "application/x-www-form-urlencoded"
    );
    select.onreadystatechange = function () {
      if (select.readyState === 4 && select.status === 200) {
        console.log(select.responseText);
        location.reload();
      }
    };
    select.send("id_zadania=" + id);
  }
}

let num = 0;
function createFunction() {
  if (num == 0) {
    let inputElement = document.createElement("input");
    let attributes = {
      type: "number",
      id: "user_id",
      class: "salto",
      name: "id_user",
      placeholder: "Wpisz id użytkownika",
    };

    for (let attr in attributes) {
      inputElement.setAttribute(attr, attributes[attr]);
    }

    let inputElement2 = document.createElement("input");
    let attributes3 = {
      type: "number",
      id: "task_id",
      class: "salto",
      name: "task_id",
      placeholder: "Wpisz id zadania",
    };

    let submitElement = document.createElement("input");
    let attributes2 = {
      type: "submit",
      name: "transfer-submit",
      class: "salto",
      value: "przenieś",
    };

    for (let attr in attributes3) {
      inputElement2.setAttribute(attr, attributes3[attr]);
    }

    for (let attr in attributes2) {
      submitElement.setAttribute(attr, attributes2[attr]);
    }

    const append = document.getElementById("transfer_form");
    append.appendChild(inputElement);
    append.appendChild(inputElement2);
    append.appendChild(submitElement);
    num += 1;
  } else {
    alert("nie mozesz tworzyc wiecej elementow");
  }
}

github.addEventListener("click", () => {
  D_ol.innerHTML = "<a href='https://github.com/FizekFront' target='_blank'>GitHub</a>";
  O_ol.innerHTML = "<a href='https://github.com/7Malina' target='_blank'>GitHub</a>";
});
fb.addEventListener("click", () => {
  D_ol.innerHTML =
    "<a href='https://www.facebook.com/profile.php?id=100009167656890' target='_blank'>Facebook</a>";
  O_ol.innerHTML =
    "<a href='https://www.facebook.com/oliwier.malinowski.121' target='_blank'>Facebook</a>";
});
twitter.addEventListener("click", () => {
  D_ol.innerHTML = "Brak";
  O_ol.innerHTML = "<a href='https://twitter.com/Oliwier23253749' target='_blank'>Twitter</a>";
});
ig.addEventListener("click", () => {
  D_ol.innerHTML = "<a href='https://instagram.com/dawids2005' target='_blank'>Instagram</a>";
  O_ol.innerHTML = "<a href='https://instagram.com/oliwier72' target='_blank'>Instagram</a>";
});
gmail.addEventListener("click", () => {
  D_ol.innerHTML = "<a href='https://www.gmail.com' target='_blank'>sowadawid34@gmail.com</a>";
  O_ol.innerHTML = "<a href='https://www.gmail.com' target='_blank'>oliwier.malinowski7@gmail.com</a>";
});

