function toggleTheme(){

let body = document.body

body.classList.toggle("dark")

localStorage.setItem("theme",
body.classList.contains("dark") ? "dark":"light")
}

window.onload=function(){

let theme = localStorage.getItem("theme")

if(theme==="dark"){
document.body.classList.add("dark")
}

}
