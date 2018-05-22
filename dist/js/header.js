(function() {
  let headerItem = document.getElementsByClassName("header--item");
  let page = window.location.pathname;
  let pages = ["/index", "/about", "/visit", "/explore", "/support"];

  for (i = 0; i < pages.length; i++) {
    if (page.includes(pages[i])) {
      headerItem[i].classList.add("header--text--hover");
    }
  }

  if (page === "/") {
    headerItem[0].classList.add("header--text--hover");
  }

})();