let btnClassOne = "";
let btnClassTwo = "";
let tabArray = [];

function setTabsId() {
  let i = 0;
  const tabs = document.querySelectorAll(".tab-component");
  if (tabs) {

    tabs.forEach((tab) => {
      tab.setAttribute("id", "tab-component-" + i);
      tabArray.push("tab-component-" + i);
      i++;
    });
  }
}

function getDefaultClassOfNavButtons(item) {
  const navButtonWrappers = item.querySelectorAll(".tabs-navigation-wrapper");
  let buttonClassName = "";

  navButtonWrappers.forEach((navButtonWrapper) => {
    const buttonObject = navButtonWrapper.querySelector('[class^="btn btn-"]');
    const classNames = buttonObject.className.split(' ');
    classNames.forEach((className) => {
      if (className.startsWith('btn-')) {
        buttonClassName = className;
      }
    });

  });

  btnClassOne = buttonClassName;
  if (btnClassOne.includes("-outline")) {
    btnClassTwo = btnClassOne.replace("-outline", "");
  } else {
    btnClassTwo = btnClassOne + "-outline";
  }

}

function tabNavButtonActiveState(item, oldClass, newClass) {
  const tabNavButtons = item.querySelectorAll(".tab-nav-button");
  tabNavButtons.forEach((tabNavButton) => {

    if (tabNavButton.classList.contains("tab-active")) {
      tabNavButton.classList.replace(oldClass, newClass);
      tabNavButton.setAttribute("style", "pointer-events:none");
    } else {
      tabNavButton.classList.replace(newClass, oldClass);
      tabNavButton.setAttribute("style", "pointer-events:all");
    }
  });

}

function tabsInitNav(item) {
  const tabsNavigation = item.querySelector(".tabs-navigation-wrapper");
  const tabsContainers = item.querySelectorAll(".tab-container");
  const tabsContainerHeadlines = item.querySelectorAll(".tab-container-headline");
  let tabsNavigationInnerHTMLContent = '<div class="btn-group">';
  let tabsNavButton = "";

  for (let i = 0; i < tabsContainers.length; i++) {

    if (i == 0) {
      tabsNavButton = `<button id="${item.getAttribute("id")}-navigation-${i}" class="btn btn-colored-outline tab-nav-button tab-active">${tabsContainerHeadlines[i].textContent}</button>`;
    } else {
      tabsNavButton = `<button id="${item.getAttribute("id")}-navigation-${i}" class="btn btn-colored-outline tab-nav-button">${tabsContainerHeadlines[i].textContent}</button>`;
    }
    tabsNavigationInnerHTMLContent += tabsNavButton;
  }

  tabsNavigationInnerHTMLContent += '</div>';
  tabsNavigation.innerHTML = tabsNavigationInnerHTMLContent;
  tabsContainers[0].classList.add("tab-active");
  getDefaultClassOfNavButtons(item)
  tabNavButtonActiveState(item, btnClassOne, btnClassTwo);
}


function tabsIdsForContainers(item) {
  const tabsContainers = item.querySelectorAll(".tab-container");

  tabsContainers.forEach((container, index) => {
    container.id = `${item.id}-container-${index}`;
  });
}


function tabToggler(item) {

  const tabButtons = item.querySelectorAll(".tab-nav-button");
  const tabContainers = item.querySelectorAll(".tab-container");

  for (let i = 0; i < tabButtons.length; i++) {
    tabButtons[i].addEventListener("click", function () {

      tabButtons.forEach((tabButton) => {
        tabButton.classList.remove("tab-active");
      });

      tabContainers.forEach((tabContainer) => {
        tabContainer.classList.remove("tab-active");
      });

      tabButtons[i].classList.add("tab-active");
      tabContainers[i].classList.add("tab-active");
      tabNavButtonActiveState(item, btnClassOne, btnClassTwo);
    });
  }
}


function tabs() {
  setTabsId();

  if (tabArray.length) {
    tabArray.forEach((item) => {
      let currentItem = document.querySelector("#" + item);
      tabsInitNav(currentItem);
      tabsIdsForContainers(currentItem);
      tabToggler(currentItem);
    });
  }
}

tabs();
