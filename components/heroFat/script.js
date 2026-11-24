let heroFatArray = [];


function setHeroFatId() {
  let i = 0;
  const herosFat = document.querySelectorAll(".heroFat-component");
  if (herosFat) {

    herosFat.forEach((heroFat) => {
      heroFat.setAttribute("id", "heroFat-component-" + i);
      heroFatArray.push("heroFat-component-" + i);
      i++;
    });
  }
}

function handleJumpToMain() {
  const heroArrow = document.querySelector("#jump-to-main");

  function jumpToMain() {
    const sections = document.querySelectorAll("section");

    for (let section of sections) {
      if (section.getBoundingClientRect().top > 0) {
        window.scrollTo({
          top: window.scrollY + section.getBoundingClientRect().top - 100,
          behavior: "smooth"
        });
        break;
      }
    }
  }

  if (heroArrow) {
    heroArrow.addEventListener("click", jumpToMain);
  }
}


function switchingIcons(item) {
  const icons = item.querySelectorAll(".orbit-icon-container svg");

  if (!icons.length) return;


  let currentIndex = 0;

  const showIcon = (index) => {
    icons.forEach(icon => icon.classList.remove("svg-visible"));
    icons[index].classList.add("svg-visible");
  };

  showIcon(currentIndex);

  setInterval(() => {
    currentIndex++;

    if (currentIndex >= icons.length) {
      currentIndex = 0;
    }

    showIcon(currentIndex);
  }, 2000);
}



function heroFat() {
  setHeroFatId();
  handleJumpToMain();

  if (heroFatArray.length) {
    heroFatArray.forEach((item) => {
      let currentItem = document.querySelector("#" + item);
      switchingIcons(currentItem);
    });
  }
}

heroFat();
