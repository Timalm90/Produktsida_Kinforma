document.querySelectorAll(".product-bubble").forEach(bubble => {
  const product = bubble.dataset.product;
  const img = bubble.querySelector(".slide-img");
  const container = bubble.querySelector(".slide-container");

  const colors = ["Blue", "Green", "Sand"];
  let currentColor = "Blue";
  let currentIndex = 1;
  const maxIndex = 3;

  img.draggable = false;

  const updateImage = () => {
    img.src = `/components/product-images/${product}/${currentColor}/${currentIndex}.png`;
  };

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

  // CLICK SWATCH TO ACTIVATE
  bubble.querySelectorAll(".swatch").forEach(swatch => {
    if (!swatch.classList.contains("plus")) {
      swatch.addEventListener("click", () => {
        const color = swatch.dataset.color;
        if (!color) return;

        bubble.querySelectorAll(".swatch")
             .forEach(s => s.classList.remove("active"));

        swatch.classList.add("active");

        currentColor = color;
        currentIndex = 1;
        updateImage();
      });
    }
  });

  // POINTER SWIPE HANDLERS — outside swatch loop
  let startX = null;
  let pointerId = null;

  function onPointerDown(e) {
    if (e.target.closest(".arrow") || e.target.closest(".swatch")) return;
    startX = e.clientX;
    pointerId = e.pointerId;
    container.setPointerCapture(pointerId);
  }

  function onPointerUp(e) {
    if (pointerId === null || e.pointerId !== pointerId) return;
    const diff = e.clientX - startX;
    container.releasePointerCapture(pointerId);
    pointerId = null;

    if (Math.abs(diff) > 30) {
      currentIndex = diff > 0
        ? (currentIndex <= 1 ? maxIndex : currentIndex - 1)
        : (currentIndex >= maxIndex ? 1 : currentIndex + 1);
      updateImage();
    }
  }

  function onPointerCancel() {
    if (pointerId !== null) {
      container.releasePointerCapture(pointerId);
      pointerId = null;
    }
  }

  container.addEventListener("pointerdown", onPointerDown);
  container.addEventListener("pointerup", onPointerUp);
  container.addEventListener("pointercancel", onPointerCancel);
  container.addEventListener("pointerleave", onPointerUp);

  // INITIAL ACTIVE SWATCH — also outside swatch loop
  const defaultSwatch = bubble.querySelector(`.swatch[data-color="${currentColor}"]`);
  if (defaultSwatch) defaultSwatch.classList.add("active");

  updateImage();
});
