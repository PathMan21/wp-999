console.clear();
Splitting();

// darkmode


function toggleDarkmode() {
        if(document.body.classList.contains("darkmode")){
          document.body.classList.remove("darkmode");
            localStorage.setItem("theme","light");
        } else {

          document.body.classList.add("darkmode");
            localStorage.setItem("theme","dark");
        }

}

window.addEventListener('DOMContentLoaded',function () {
    let mode = (localStorage.getItem('theme'));
    if (mode == "dark") {
          document.body.classList.add("darkmode");
          document.getElementById('flexSwitchCheckChecked').checked = true;
    } else {
          document.body.classList.remove("darkmode");
          document.getElementById('flexSwitchCheckChecked').checked = false;
    }

});
