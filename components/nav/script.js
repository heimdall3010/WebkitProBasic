let navArray = [];

function setNavId() {
  let i = 0;
  const navs = document.querySelectorAll(".nav-component");
  if (navs) {

    navs.forEach((nav) => {
      nav.setAttribute("id", "nav-component-" + i);
      navArray.push("nav-component-" + i);
      i++;
    });
  }
}


function modeToggler(item) {

  const toggleSunIcons = item.querySelectorAll(".nav-mode-switcher-icon-sun");
  const toggleMoonIcons = item.querySelectorAll(".nav-mode-switcher-icon-moon");
  const body = document.querySelector("body");

  if (toggleSunIcons) {
    toggleSunIcons.forEach((sun) => {
      sun.addEventListener("click", () => {

        body.classList.remove("lightmode");
        body.classList.add("darkmode");

        toggleSunIcons.forEach((sun) => {
          sun.classList.remove("active");
        })

        toggleMoonIcons.forEach((moon) => {
          moon.classList.add("active");
        })
      })
    })

  }

  if (toggleMoonIcons) {
    toggleMoonIcons.forEach((moon) => {
      moon.addEventListener("click", () => {

        body.classList.add("lightmode");
        body.classList.remove("darkmode");

        toggleMoonIcons.forEach((moon) => {
          moon.classList.remove("active");
        })

        toggleSunIcons.forEach((sun) => {
          sun.classList.add("active");
        })
      })
    })

  }
}



function navToggler(item) {

  const hamburger = item.querySelector("#hamburger");

  if (hamburger) {
    const navContainer = item.querySelector("#nav-container");
    const backdrop = document.querySelector('.backdrop');

    const navMainLevel = item.querySelector(".nav-main-level");
    const menuSubLevels = item.querySelectorAll(".nav-sub-level");

    function openNav() {
      hamburger.classList.add("is-active");
      navContainer.classList.add("nav-container-active");
      backdrop.classList.add("backdrop-active");
      navMainLevel.classList.add("nav-main-level-active");
      backdrop.style.zIndex = 1000;
    }

    function closeNav() {
      hamburger.classList.remove("is-active");
      navContainer.classList.remove("nav-container-active");
      backdrop.classList.remove("backdrop-active");
      navMainLevel.classList.remove("nav-main-level-active");
      setTimeout(() => {
        backdrop.style.zIndex = -1000;
      }, 500);
    }




    hamburger.addEventListener("click", () => {

      if (hamburger.classList.contains("is-active")) {

        if (menuSubLevels) {
          menuSubLevels.forEach(item => {
            item.classList.remove("nav-sub-level-active");
          });
        }
        closeNav();
      }
      else {
        openNav();
      }
    });

    backdrop.addEventListener("click", () => {

      if (backdrop.classList.contains("backdrop-active")) {
        closeNav();
      }
    });

  }
}


function setActiveNavItem(item) {
  // Helper to remove trailing slash for consistent comparisons
  const normalizePath = path => path.replace(/\/$/, "");
  const currentPath = normalizePath(window.location.pathname);

  // Remove any previously set active classes
  item.querySelectorAll("#nav-main li.nav-main-item-active")
    .forEach(li => li.classList.remove("nav-main-item-active"));

  // Select all anchor tags in the nav
  const navAnchors = item.querySelectorAll("#nav-main a");
  let matchedAnchor = null;

  // Loop through each anchor to find one with a matching pathname.
  for (let anchor of navAnchors) {
    const hrefAttr = anchor.getAttribute("href");
    // Skip if no valid href or it's a dummy link
    if (!hrefAttr || hrefAttr === "#") continue;

    // Build a normalized pathname from the anchor's href
    const linkPath = normalizePath(new URL(anchor.href, window.location.origin).pathname);
    if (linkPath === currentPath) {
      matchedAnchor = anchor;
      break;
    }
  }

  if (matchedAnchor) { // No match found, exit

    // Get the closest li for the matched anchor (works for submenu items as well)
    const activeItem = matchedAnchor.closest("li");
    if (activeItem) {
      activeItem.classList.add("nav-main-item-active");
    }
  }
}

function setActiveNavItemOnePager(item) {
  const navItems = item.querySelectorAll('#nav-main li');
  const sections = document.querySelectorAll('section');

  function onScroll() {
    let currentSection = '';

    sections.forEach(section => {
      const sectionTop = section.offsetTop;
      if (window.scrollY >= sectionTop - 175) {
        currentSection = section.getAttribute('id');
      }
    });

    navItems.forEach(item => {
      let link = item.querySelector("a");
      item.classList.remove('nav-main-item-active');
      if (link.getAttribute('href') === `#${currentSection}`) {
        item.classList.add('nav-main-item-active');
      }
    });
  }

  window.addEventListener('scroll', onScroll);
}


function addArrowToSubLevels(item) {
  const navItems = item.querySelectorAll("#nav-main li");

  navItems.forEach(item => {
    const subMenu = item.querySelector("ul");
    if (subMenu) {
      item.classList.add("has-nav-submenu");
      if (!item.querySelector(".nav-submenu-control-next")) {
        const arrow = document.createElement("div");
        arrow.classList.add("nav-submenu-control-next");
        arrow.innerHTML = `
        <svg viewBox="0 -4.5 20 20" xmlns="http://www.w3.org/2000/svg">
        <path d="M.292.366c-.39.405-.39 1.06 0 1.464l8.264 8.563c.78.81 2.047.81 2.827 0l8.325-8.625c.385-.4.39-1.048.01-1.454a.976.976 0 0 0-1.425-.011l-7.617 7.893a.975.975 0 0 1-1.414 0L1.705.366a.974.974 0 0 0-1.413 0" fill="#000" fill-rule="evenodd"/>
        </svg>
        `

        item.insertBefore(arrow, subMenu);
      }
    }
  });
}


function cleanUrlAfterLanguageChange(item) {
  let url = window.location.href;

  let langIndex = url.indexOf("?lang");

  if (langIndex !== -1) {
    let newUrl = url.substring(0, langIndex);
    window.location.href = newUrl;
  }
}


function changeLanguage(item) {
  const pageArray = [
    ["home", "start"],
    ["about-us", "ueber-uns"],
    ["projects", "projekte"],
    ["team", "team"],
    ["career", "karriere"],
    ["contact", "kontakt"],
    ["blog", "blog"],
    ["post", "post"],
    ["404", "404"],
    ["post/unlocking-the-power-of-machine-learning-how-ai-is-shaping-our-future", "post/die-macht-des-maschinellen-lernens-entfesseln-wie-ki-unsere-zukunft-gestaltet"],
    ["post/a-revolution-in-healthcare-how-ai-is-transforming-medicine", "post/revolution-im-gesundheitswesen-wie-ki-die-medizin-veraendert"],
    ["post/neural-networks-as-drivers-of-new-business-models", "post/neuronale-netze-als-motor-neuer-geschaeftsmodelle"],
    ["post/shaping-change-key-trends-defining-tomorrows-business-world", "post/den-wandel-gestalten-wichtige-trends-die-die-geschaeftswelt-von-morgen-praegen"],
    ["post/accelerate-your-development-how-vite-js-and-node-js-are-revolutionizing-modern-javascript-development", "post/beschleunigen-sie-ihre-entwicklung-wie-vite-js-und-node-js-die-moderne-javascript-entwicklung-revolutionieren"],
  ]

  const languageSelectors = item.querySelectorAll(".language-selector");
  let currentUrl = window.location.pathname;
  let sourceUrl = "../";
  let targetUrl = "";
  let nameOfDetailPage = "post";

  if (languageSelectors) {
    languageSelectors.forEach((langSelector) =>
      langSelector.addEventListener("change", () => {
        let lang = langSelector.value;

        if (lang == "en") {
          pageArray.forEach((pair) => {
            if (currentUrl.includes(pair[1])) {
              if (currentUrl.includes(nameOfDetailPage)) {
                targetUrl = currentUrl.replace("/de/", "/en/").replace(pair[1], pair[0]);
                targetUrl += (targetUrl.includes('?') ? '&' : '?') + "lang=" + lang;
              } else {
                targetUrl = sourceUrl + "en/" + pair[0] + ".php" + "?lang=" + lang;
              }

            }
          });
        }

        if (lang == "de") {
          pageArray.forEach((pair) => {
            if (currentUrl.includes(pair[0])) {
              if (currentUrl.includes(nameOfDetailPage)) {
                targetUrl = currentUrl.replace("/en/", "/de/").replace(pair[0], pair[1]);
                targetUrl += (targetUrl.includes('?') ? '&' : '?') + "lang=" + lang;
              } else {
                targetUrl = sourceUrl + "de/" + pair[1] + ".php" + "?lang=" + lang;
              }

            }
          });
        }
        window.location.href = targetUrl;
      })
    );
  }

  cleanUrlAfterLanguageChange(item);
}

function setTitlesOfSubmenus(item) {
  let activeSubLevels = item.querySelectorAll(".nav-sub-level");

  activeSubLevels?.forEach(subLevel => {
    let submenuTitleLink = subLevel.closest(".has-nav-submenu")?.querySelector("li a");

    if (submenuTitleLink) {
      const submenuTitleLI = document.createElement("li");
      submenuTitleLI.classList.add("nav-submenu-control-list-item-container");

      const submenuTitleDiv = document.createElement("div");
      submenuTitleDiv.classList.add("nav-submenu-control");
      submenuTitleDiv.innerHTML = `
        <div class="nav-submenu-control-title">${submenuTitleLink.innerText}</div>
        <div class="nav-submenu-control-back">
          <svg viewBox="0 -4.5 20 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M.292.366c-.39.405-.39 1.06 0 1.464l8.264 8.563c.78.81 2.047.81 2.827 0l8.325-8.625c.385-.4.39-1.048.01-1.454a.976.976 0 0 0-1.425-.011l-7.617 7.893a.975.975 0 0 1-1.414 0L1.705.366a.974.974 0 0 0-1.413 0" fill="#000" fill-rule="evenodd"/>
          </svg>
        </div>
      `;

      submenuTitleLI.appendChild(submenuTitleDiv);
      subLevel.prepend(submenuTitleLI);
    }
  });
}


function navTogglerSubMenuMobile(item) {
  const navMain = item.querySelector("#nav-main");

  if (navMain) {

    navMain.addEventListener("click", (event) => {
      const nextArrow = event.target.closest(".nav-submenu-control-next");
      const backArrow = event.target.closest(".nav-submenu-control-back");

      const navMainLevel = item.querySelector(".nav-main-level");
      const navSubLevels = item.querySelectorAll(".nav-sub-level");

      // Handle forward navigation
      if (nextArrow) {

        navMainLevel?.classList.remove("nav-main-level-active");
        navSubLevels?.forEach(sub => sub.classList.remove("nav-sub-level-active"));
        nextArrow?.parentElement.querySelector(".nav-sub-level")?.classList.add("nav-sub-level-active");
      }

      // Handle backward navigation
      if (backArrow) {

        let currentNavMenuSub = backArrow.closest(".nav-sub-level");
        let parentNavMenuSub = currentNavMenuSub?.parentElement.closest(".nav-sub-level");

        currentNavMenuSub?.classList.remove("nav-sub-level-active");

        parentNavMenuSub ? parentNavMenuSub.classList.add("nav-sub-level-active")
          : item.querySelector(".nav-main-level")?.classList.add("nav-main-level-active");
      }
    });
  }
}

function turnATagsWithoutHrefToPTags(item) {
  const aTags = item.querySelectorAll('a:not([href])');

  aTags.forEach(a => {
    const p = document.createElement('p');
    p.innerHTML = a.innerHTML;
    a.replaceWith(p);
  });
}


function nav() {

  setNavId();

  if (navArray.length) {
    navArray.forEach((item) => {

      let currentItem = document.querySelector("#" + item);

      navToggler(currentItem);
      modeToggler(currentItem);
      setActiveNavItem(currentItem);
      //setActiveNavItemOnePager(currentItem);
      addArrowToSubLevels(currentItem);
      changeLanguage(currentItem);
      navTogglerSubMenuMobile(currentItem);
      setTitlesOfSubmenus(currentItem);
      turnATagsWithoutHrefToPTags(currentItem);
    });
  }
}

nav();
