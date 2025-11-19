// bubble-slideshow.js
document.querySelectorAll(".product-bubble").forEach(bubble => {
  const product = bubble.dataset.product;
  const img = bubble.querySelector(".slide-img");
  const container = bubble.querySelector(".slide-container");

  const colors = ["Blue", "Green", "Sand"];
  let currentColor = "Blue";
  let currentIndex = 1;
  const maxIndex = 3;

  // Prevent native image dragging
  img.draggable = false;

  const updateImage = () => {
    img.src = `/components/product-images/${product}/${currentColor}/${currentIndex}.png`;
  };

  // Arrow handlers
  const prevBtn = bubble.querySelector(".prev");
  const nextBtn = bubble.querySelector(".next");
  prevBtn.addEventListener("click", () => {
    currentIndex = currentIndex <= 1 ? maxIndex : currentIndex - 1;
    updateImage();
  });
  nextBtn.addEventListener("click", () => {
    currentIndex = currentIndex >= maxIndex ? 1 : currentIndex + 1;
    updateImage();
  });

  // Swatch handlers
  bubble.querySelectorAll(".swatch").forEach(swatch => {
    if (!swatch.classList.contains("plus")) {
      swatch.addEventListener("click", () => {
        const color = swatch.dataset.color;
        if (!color) return;
        currentColor = color;
        currentIndex = 1;
        updateImage();
      });
    } else {
      // plus button behaviour placeholder (customize as needed)
      swatch.addEventListener("click", () => {
        console.log("Plus clicked for", product);
      });
    }
  });

  // POINTER-based swipe handling (works for touch & mouse & stylus)
  let startX = null;
  let pointerId = null;

  function onPointerDown(e) {
    // ignore if pointer started on an arrow or swatch
    if (e.target.closest(".arrow") || e.target.closest(".swatch")) return;

    startX = e.clientX;
    pointerId = e.pointerId;
    container.setPointerCapture(pointerId);
  }

  function onPointerUp(e) {
    if (pointerId === null) return;
    // ensure same pointer
    if (e.pointerId !== pointerId) return;

    const diff = e.clientX - startX;
    startX = null;
    try { container.releasePointerCapture(pointerId); } catch (err) {}
    pointerId = null;

    if (Math.abs(diff) > 30) {
      if (diff > 0) {
        // swipe right -> previous
        currentIndex = currentIndex <= 1 ? maxIndex : currentIndex - 1;
      } else {
        // swipe left -> next
        currentIndex = currentIndex >= maxIndex ? 1 : currentIndex + 1;
      }
      updateImage();
    }
  }

  function onPointerCancel() {
    if (pointerId !== null) {
      try { container.releasePointerCapture(pointerId); } catch (err) {}
      pointerId = null;
      startX = null;
    }
  }

  // attach pointer listeners to the container (not the image) to avoid missing pointerup
  container.addEventListener("pointerdown", onPointerDown);
  container.addEventListener("pointerup", onPointerUp);
  container.addEventListener("pointercancel", onPointerCancel);
  // also handle pointerleave so dragging off the element still completes
  container.addEventListener("pointerleave", onPointerUp);

  // initial load
  updateImage();
});
