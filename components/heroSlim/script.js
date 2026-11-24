let heroSlimArray = [];


function setHeroSlimId() {
  let i = 0;
  const herosSlim = document.querySelectorAll(".heroSlim-component");
  if (herosSlim) {

    herosSlim.forEach((heroSlim) => {
      heroSlim.setAttribute("id", "heroSlim-component-" + i);
      heroSlimArray.push("heroSlim-component-" + i);
      i++;
    });
  }
}




function heroSlim() {
  setHeroSlimId();


  if (heroSlimArray.length) {
    heroSlimArray.forEach((item) => {
      let currentItem = document.querySelector("#" + item);
    });
  }
}

heroSlim();
