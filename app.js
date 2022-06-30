function changeStyle() {
  const colors = ["#0A1388", "#0A4233", "#F69C10", "#A566F1", "#D9504C"];

  const navbar = document.getElementById("navbar");
  const randomNavbarColor = colors[Math.floor(Math.random() * colors.length)];
  navbar.style.backgroundColor = randomNavbarColor;

  const elements = document.getElementsByClassName("card");

  for (const element of elements) {
    const randomColor = colors[Math.floor(Math.random() * colors.length)];
    element.style.borderColor = randomColor;
  }

  setTimeout(changeStyle, 2000);
}

changeStyle();
