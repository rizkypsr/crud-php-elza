const keyword = document.getElementById("keyword");
const container = document.getElementById("dataContainer");

keyword.addEventListener("keyup", (e) => {
  let xhr = new XMLHttpRequest();

  xhr.onreadystatechange = () => {
    if (xhr.readyState == 4 && xhr.status == 200) {
      container.innerHTML = xhr.responseText;
    }
  };

  xhr.open("GET", `user.php?keyword=${keyword.value}`, true);
  xhr.send();
});
