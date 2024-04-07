const comment = document.querySelector("#jscomment");
const order = document.querySelector("#jsorder");
const FORMAEAT = document.querySelector("#jseat");
const FORMCOMMENT = document.querySelector("#jsotziv");

order.addEventListener("click", (event) => {
  event.preventDefault();
  if (FORMAEAT.style.display == "none") {
    FORMAEAT.removeAttribute("style");
    FORMCOMMENT.setAttribute("style", "display: none");
  }
});

comment.addEventListener("click", (event) => {
  event.preventDefault();
  if (FORMCOMMENT.style.display == "none") {
    FORMCOMMENT.removeAttribute("style");
    FORMAEAT.setAttribute("style", "display: none");
  }
});
