let calloutParralaxArray = [];

function setCalloutParallaxId() {
  let i = 0;
  const calloutQuotes = document.querySelectorAll(".calloutParallax-component");
  if (calloutQuotes) {

    calloutQuotes.forEach((calloutParallax) => {
      calloutParallax.setAttribute("id", "calloutParallax-component-" + i);
      calloutParralaxArray.push("calloutParallax-component-" + i);
      i++;
    });
  }
}



function calloutParallax() {
  setCalloutParallaxId();

  if (calloutParralaxArray.length) {
    calloutParralaxArray.forEach((item) => {
      let currentItem = document.querySelector("#" + item);
    });
  }
}

calloutParallax();
