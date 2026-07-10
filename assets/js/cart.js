// ===================== CONFIG =====================
const TAX_RATE = 0.14;

// Promo codes live here — add more codes/rates as needed.
const PROMO_CODES = {
  'SCCI15': 0.15
};

let appliedDiscountRate = 0;

// ===================== HELPERS =====================
function formatEGP(amount) {
  return 'EGP ' + Math.round(amount).toLocaleString('en-US');
}

// ===================== CORE CALCULATION =====================
// Single source of truth. Runs on every qty change, remove, or promo apply.
function recalculate() {
  let subtotal = 0;

  document.querySelectorAll('.cart-item').forEach(item => {
    if (item.style.display === 'none') return; // skip removed items

    const unitPrice = parseFloat(item.dataset.unitPrice);
    const qty = parseInt(item.querySelector('.qty-value').textContent, 10);
    const itemTotal = unitPrice * qty;

    item.querySelector('.item-price').textContent = formatEGP(itemTotal);
    subtotal += itemTotal;
  });

  const discount = subtotal * appliedDiscountRate;
  const afterDiscount = subtotal - discount;
  const tax = afterDiscount * TAX_RATE;
  const total = afterDiscount + tax;

  document.getElementById('subtotal-value').textContent = formatEGP(subtotal);
  document.getElementById('tax-value').textContent = formatEGP(tax);
  document.getElementById('total-value').textContent = formatEGP(total);

  const discountRow = document.getElementById('discount-row');
  if (appliedDiscountRate > 0) {
    discountRow.style.display = 'flex';
    document.getElementById('discount-value').textContent = '-' + formatEGP(discount);
  } else {
    discountRow.style.display = 'none';
  }
}

// ===================== QUANTITY CONTROLS =====================
document.querySelectorAll('.cart-item').forEach(item => {
  const minus = item.querySelector('.minus');
  const plus = item.querySelector('.plus');
  const value = item.querySelector('.qty-value');
  let qty = 1;

  plus.addEventListener('click', () => {
    qty++;
    value.textContent = qty;
    recalculate();
  });

  minus.addEventListener('click', () => {
    if (qty > 1) {
      qty--;
      value.textContent = qty;
      recalculate();
    }
  });
});

// ===================== REMOVE ITEM =====================
document.querySelectorAll('.remove-link').forEach(btn => {
  btn.addEventListener('click', () => {
    btn.closest('.cart-item').style.display = 'none';
    recalculate();
  });
});

// ===================== PROMO CODE =====================
const promoInput = document.getElementById('promo-input');
const promoBtn = document.getElementById('promo-btn');
const promoMessage = document.getElementById('promo-message');

promoBtn.addEventListener('click', () => {
  const code = promoInput.value.trim().toUpperCase();

  if (PROMO_CODES.hasOwnProperty(code)) {
    appliedDiscountRate = PROMO_CODES[code];
    promoInput.style.borderColor = 'var(--green)';
    promoMessage.textContent = `Code applied — ${appliedDiscountRate * 100}% off`;
    promoMessage.style.color = 'var(--green)';
  } else {
    appliedDiscountRate = 0;
    promoInput.style.borderColor = 'var(--red)';
    promoMessage.textContent = 'Invalid promo code';
    promoMessage.style.color = 'var(--red)';
  }

  recalculate();
});

// ===================== INITIAL RUN =====================
recalculate();