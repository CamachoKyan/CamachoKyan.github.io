var scrollToSection = sectionId =>
  document.getElementById(sectionId).scrollIntoView({ behavior: "smooth" });

window.onload = () =>
  document.querySelectorAll("nav a").forEach(link =>
    link.addEventListener("click", event => {
      event.preventDefault();
      scrollToSection(link.hash.slice(1));
    })
  );
  window.onload = () =>
  document.querySelectorAll("nav a:not(.no-smooth-scroll)").forEach(link => {
    link.addEventListener("click", event => {
      event.preventDefault();
      scrollToSection(link.hash.slice(1));
    });
  });