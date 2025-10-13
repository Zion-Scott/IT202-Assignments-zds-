const show = document.getElementById("ShowWelcome");
const welcome = document.getElementById("WelcomeText");


show.addEventListener("mouseover", () => {
  welcome.style.visibility = "visible";
});

show.addEventListener("mouseout", () => {
  welcome.style.visibility = "hidden";
});
