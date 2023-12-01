const body = document.querySelector("body");
const darkLight = document.querySelector("#darkLight");
const sidebar = document.querySelector(".sidebar");
const submenuItems = document.querySelectorAll(".submenu_item");
const sidebarOpen = document.querySelector("#sidebarOpen");
const sidebarClose = document.querySelector(".collapse_sidebar");
const sidebarExpand = document.querySelector(".expand_sidebar");
sidebarOpen.addEventListener("click", () => sidebar.classList.toggle("close"));

sidebarClose.addEventListener("click", () => {
  sidebar.classList.add("close", "hoverable");
});
sidebarExpand.addEventListener("click", () => {
  sidebar.classList.remove("close", "hoverable");
});

sidebar.addEventListener("mouseenter", () => {
  if (sidebar.classList.contains("hoverable")) {
    sidebar.classList.remove("close");
  }
});
sidebar.addEventListener("mouseleave", () => {
  if (sidebar.classList.contains("hoverable")) {
    sidebar.classList.add("close");
  }
});

darkLight.addEventListener("click", () => {
  body.classList.toggle("dark");
  if (body.classList.contains("dark")) {
    document.setI
    darkLight.classList.replace("bx-sun", "bx-moon");
  } else {
    darkLight.classList.replace("bx-moon", "bx-sun");
  }
});

submenuItems.forEach((item, index) => {
  item.addEventListener("click", () => {
    item.classList.toggle("show_submenu");
    submenuItems.forEach((item2, index2) => {
      if (index !== index2) {
        item2.classList.remove("show_submenu");
      }
    });
  });
});

if (window.innerWidth < 768) {
  sidebar.classList.add("close");
} else {
  sidebar.classList.remove("close");
}
//    JavaScript for pop up 

function menujavapop() {
  document.getElementById("info-menujavapopup").style.display = "block";
}

function menuhtmlpop() {
  document.getElementById("info-menuhtmlpopup").style.display = "block";
}

function menujspop() {
  document.getElementById("info-menujspopup").style.display = "block";
}

function menuphppop() {
  document.getElementById("info-menuphppopup").style.display = "block";
}

function menupypop() {
  document.getElementById("info-menupypopup").style.display = "block";
}

function menusqlpop() {
  document.getElementById("info-menusqlpopup").style.display = "block";
}


function javapop() {
  document.getElementById("info-javapop").style.display = "block";
}
function htmlpop() {
  document.getElementById("info-htmlpop").style.display = "block";
}
function jspop() {
  document.getElementById("info-jspop").style.display = "block";
}
function phppop() {
  document.getElementById("info-phppop").style.display = "block";
}
function pypop() {
  document.getElementById("info-pypop").style.display = "block";
}
function sqlpop() {
  document.getElementById("info-sqlpop").style.display = "block";
}

function closePopupjava() {
  document.getElementById("info-menujavapopup" ).style.display = "none";
}

function closePopuphtml() {
  document.getElementById("info-menuhtmlpopup" ).style.display = "none";
}

function closePopupjs() {
  document.getElementById("info-menujspopup" ).style.display = "none";
}

function closePopupphp() {
  document.getElementById("info-menuphppopup").style.display = "none";
}

function closePopuppy() {
  document.getElementById("info-menupypopup").style.display = "none";
}

function closePopupsql() {
  document.getElementById("info-menusqlpopup" ).style.display = "none";
}

function exitbtnjava() {
  document.getElementById("info-javapop" ).style.display = "none";
}

function exitbtnhtml() {
  document.getElementById("info-htmlpop" ).style.display = "none";
}
function exitbtnjs() {
  document.getElementById("info-jspop" ).style.display = "none";
}
function exitbtnpy() {
  document.getElementById("info-pypop" ).style.display = "none";
}
function exitbtnphp() {
  document.getElementById("info-phppop" ).style.display = "none";
}
function exitbtnsql() {
  document.getElementById("info-sqlpop" ).style.display = "none";
}
function easybtn() {
  // Add your code here for the OK button action
}
function mediumbtn() {
  // Add your code here for the OK button action
}
function hardbtn() {
  // Add your code here for the OK button action
}
function javanxt() {
  // Add your code here for the OK button action
}