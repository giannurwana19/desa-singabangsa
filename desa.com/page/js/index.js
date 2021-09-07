AOS.init({
  once: true,
  duration: 1000, // durasi default
});

const year = document.getElementById('year');
year.innerHTML = new Date().getFullYear();
