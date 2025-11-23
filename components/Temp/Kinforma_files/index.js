
// // Carusell - Javascript

    // Optional: Add smooth scroll with arrow keys
    // const carousel = document.querySelector('.carousel');
    // window.addEventListener('keydown', (e) => {
    //   if (e.key === 'ArrowRight') carousel.scrollBy({ left: 320, behavior: 'smooth' });
    //   if (e.key === 'ArrowLeft') carousel.scrollBy({ left: -320, behavior: 'smooth' });
    // });

const carousel = document.getElementById("carousel");
const items = Array.from(document.querySelectorAll(".carousel-item"));

function updateActiveItem() {
    const carouselRect = carousel.getBoundingClientRect();
    const centerX = carouselRect.left + carouselRect.width / 2;

    let closestItem = null;
    let closestDistance = Infinity;

    items.forEach(item => {
    const itemRect = item.getBoundingClientRect();
    const itemCenter = itemRect.left + itemRect.width / 2;
    const distance = Math.abs(centerX - itemCenter);
    if (distance < closestDistance) {
        closestDistance = distance;
        closestItem = item;
    }
    });

    items.forEach(item => item.classList.remove("active"));
    if (closestItem) closestItem.classList.add("active");
}

carousel.addEventListener("scroll", () => {
    requestAnimationFrame(updateActiveItem);
});

// Run on load
updateActiveItem();