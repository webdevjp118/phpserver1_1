document.addEventListener("DOMContentLoaded", () => {
    const element = document.getElementById("pageNav");
    const pageNav = document.getElementsByClassName("pageNav");
    for (let i = 0; i < pageNav.length; i++) {
        
        pageNav[i].style.backgroundColor = "red";
        break;
    }
});
