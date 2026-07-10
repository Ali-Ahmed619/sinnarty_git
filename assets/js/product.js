const chips = document.querySelectorAll('.chip');
const productsGrid = document.querySelector('.products-grid');
const products = Array.from(document.querySelectorAll('.product-card'));
const sortSelect = document.querySelector('.sort-select');


chips.forEach(chip => {
  chip.addEventListener('click', () => {
    chips.forEach(c => c.classList.remove('active'));
    chip.classList.add('active');

    const filterCategory = chip.textContent.trim().toLowerCase();

    products.forEach(product => {
      const specText = product.querySelector('.card-spec').textContent.toLowerCase();
      if (filterCategory === 'all' || specText.includes(filterCategory)) {
        product.style.display = '';
      } else {
        product.style.display = 'none';
      }
    });
  });
});

const getPrice = (product) => {
  const priceText = product.querySelector('.card-price').textContent;
  return parseFloat(priceText.replace(/EGP|,|\s/g, ''));
};

const getRating = (product) => {
  const ratingText = product.querySelector('.card-rating span').textContent;
  return parseFloat(ratingText);
};

sortSelect.addEventListener('change', (e) => {
  const selectedOption = e.target.value;

  if (selectedOption.includes("Price: Low to High")) {
    products.sort((a, b) => getPrice(a) - getPrice(b));
  } 
  else if (selectedOption.includes("Price: High to Low")) {
    products.sort((a, b) => getPrice(b) - getPrice(a));
  } 
  else if (selectedOption.includes("Highest Rated")) {
    products.sort((a, b) => getRating(b) - getRating(a));
  } 
  else {
  
    return;
  }


  products.forEach(product => productsGrid.appendChild(product));
});