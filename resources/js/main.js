const scrollContainer = document.querySelector('.overflow-x-auto');
const scrollButtonRight = document.querySelector('#scroll-right');
const scrollButtonLeft = document.querySelector('#scroll-left');

scrollButtonRight.addEventListener('click', () => {
  scrollContainer.scrollBy({
    left: 200,
    behavior: 'smooth',
  });
});

scrollButtonLeft.addEventListener('click', () => {
  scrollContainer.scrollBy({
    left: -200,
    behavior: 'smooth',
  });
});
setInterval(function() {
    const container = document.querySelector('.overflow-x-auto');
    container.scrollBy({ left: 300, behavior: 'smooth' });
  }, 3000); // Setiap 3 detik
  