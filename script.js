function toggleMenu() {
  const menu = document.querySelector(".menu-links");
  const icon = document.querySelector(".hamburger-icon");
  menu.classList.toggle("open");
  icon.classList.toggle("open");
}


function scrollToAbout(event) {
  event.preventDefault();

  // ดึง href ที่อยู่ในลิงก์ เช่น "#about"
  const targetId = event.currentTarget.getAttribute("href");
  const element = document.querySelector(targetId);

  if (element) {
    const value = 2;
    const yOffset = -window.innerHeight / value + element.offsetHeight / value;
    const y = element.getBoundingClientRect().top + window.pageYOffset + yOffset;
    window.scrollTo({ top: y, behavior: 'smooth' });
  }
}