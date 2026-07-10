// ============================================================
// Angler Egypt · Admin Dashboard
// ============================================================

// ---- Mock Data ----
const SIGNUPS = [
  { name: "Ahmed Mahmoud", email: "ahmed.m@cairomail.eg", location: "Cairo, Egypt", status: "active" },
  { name: "Mostafa Aly", email: "m.aly88@alexnet.com", location: "Alexandria, Egypt", status: "active" },
  { name: "Zainab Hassan", email: "zainab.h@redsea.org", location: "Hurghada, Egypt", status: "pending" },
  { name: "Omar El-Sayed", email: "omar.els@sinai.eg", location: "Sharm El-Sheikh, Egypt", status: "active" },
  { name: "Nour Rizk", email: "nour.rizk@aswan.com.eg", location: "Aswan, Egypt", status: "banned" },
  { name: "Sara Ibrahim", email: "sara.ibrahim@giza.eg", location: "Giza, Egypt", status: "active" },
  { name: "Youssef Adel", email: "y.adel@luxormail.eg", location: "Luxor, Egypt", status: "pending" },
  { name: "Mariam Fathy", email: "mariam.f@delta.eg", location: "Mansoura, Egypt", status: "active" },
  { name: "Karim Nasser", email: "karim.n@portsaid.eg", location: "Port Said, Egypt", status: "active" },
  { name: "Hana Tarek", email: "hana.tarek@suez.eg", location: "Suez, Egypt", status: "banned" },
  { name: "Amr Fouad", email: "amr.fouad@tanta.eg", location: "Tanta, Egypt", status: "active" },
  { name: "Dina Samir", email: "dina.samir@ismailia.eg", location: "Ismailia, Egypt", status: "pending" },
];

const USERS = [...SIGNUPS];

const SPOTS = [
  { name: "Blue Hole", region: "Dahab, South Sinai", type: "Red Sea", rating: 4.9 },
  { name: "Lake Nasser", region: "Aswan", type: "Freshwater Lake", rating: 4.7 },
  { name: "Alexandria Corniche", region: "Alexandria", type: "Mediterranean Sea", rating: 4.2 },
  { name: "Fayoum Lakes (Wadi El Rayan)", region: "Fayoum", type: "Freshwater", rating: 4.5 },
  { name: "Marsa Alam Reefs", region: "Red Sea", type: "Red Sea", rating: 4.8 },
  { name: "El Alamein Coast", region: "Matrouh", type: "Mediterranean Sea", rating: 4.3 },
  { name: "Sahl Hasheesh", region: "Hurghada", type: "Red Sea", rating: 4.6 },
  { name: "Nile River - Luxor", region: "Luxor", type: "River Nile", rating: 4.4 }
];

const SPECIES = [
  { name: "Nile Perch", type: "Freshwater", avgSize: "15-30 kg", status: "common" },
  { name: "Red Sea Emperor", type: "Saltwater", avgSize: "5-15 kg", status: "rare" },
  { name: "Tilapia (Bolty)", type: "Freshwater", avgSize: "0.5-2 kg", status: "common" },
  { name: "Gilt-head Bream", type: "Saltwater", avgSize: "1-3 kg", status: "common" },
  { name: "Blue Marlin", type: "Saltwater", avgSize: "100-300 kg", status: "rare" },
  { name: "Mormyrid (Elephantfish)", type: "Freshwater", avgSize: "1-5 kg", status: "endangered" },
  { name: "Dorado (Mahi-Mahi)", type: "Saltwater", avgSize: "10-20 kg", status: "common" },
  { name: "Grouper (Hamour)", type: "Saltwater", avgSize: "5-25 kg", status: "common" }
];

const PRODUCTS = [
  { name: "Carbon Fiber Rod 2.4m", category: "Rods", price: 1250, stock: 45 },
  { name: "Shimano Reel 3000", category: "Reels", price: 2800, stock: 28 },
  { name: "Braided Line 300m", category: "Lines", price: 450, stock: 120 },
  { name: "Live Bait Worms (Pack)", category: "Baits", price: 85, stock: 200 },
  { name: "Tackle Box Pro", category: "Tackle", price: 650, stock: 65 },
  { name: "Fishing Hat UV Protection", category: "Accessories", price: 180, stock: 90 },
  { name: "Telescopic Rod 1.8m", category: "Rods", price: 750, stock: 55 },
  { name: "Daiwa Reel 2500", category: "Reels", price: 1950, stock: 32 },
  { name: "Monofilament Line 500m", category: "Lines", price: 220, stock: 150 },
  { name: "Artificial Lures Set", category: "Baits", price: 320, stock: 80 }
];

const ROWS_PER_PAGE = 5;
let currentPage = 1;
const totalPages = Math.ceil(SIGNUPS.length / ROWS_PER_PAGE);

// ---- Edit/Delete State ----
let currentEditMode = null; // { type: 'user'|'spot'|'species'|'product', index: number }
let pendingDelete = null;   // { type: 'user'|'spot'|'species'|'product', index: number, name: string }

const AVATAR_COLORS = [
  "linear-gradient(135deg,#3b7dd8,#7c6ff0)",
  "linear-gradient(135deg,#1fa971,#3b7dd8)",
  "linear-gradient(135deg,#e5484d,#f0a35a)",
  "linear-gradient(135deg,#7c6ff0,#3b7dd8)",
  "linear-gradient(135deg,#f0a35a,#e5484d)",
];

// ---- Helper Functions ----
function initials(name) {
  return name.split(" ").map(p => p[0]).join("").slice(0, 2).toUpperCase();
}

function statusBadge(status) {
  const map = {
    active: { label: "Active", cls: "badge-active" },
    pending: { label: "Pending", cls: "badge-pending" },
    banned: { label: "Banned", cls: "badge-banned" },
  };
  const s = map[status] || map.active;
  return `<span class="badge ${s.cls}">${s.label}</span>`;
}

function actionButtons(name, index, type) {
  return `
    <div class="action-group">
      <button class="action-btn-edit" data-action="edit" data-index="${index}" data-type="${type}" aria-label="Edit ${name}">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
          <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M18.5 2.5a2.12 2.12 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </button>
      <button class="action-btn-delete" data-action="delete" data-index="${index}" data-type="${type}" data-name="${name}" aria-label="Delete ${name}">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
          <path d="M3 6h18" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </button>
    </div>
  `;
}

// ---- Get array by type ----
function getArrayByType(type) {
  switch(type) {
    case 'user': return USERS;
    case 'spot': return SPOTS;
    case 'species': return SPECIES;
    case 'product': return PRODUCTS;
    default: return [];
  }
}

// ---- Render Functions ----
function renderSignups() {
  const tbody = document.getElementById("signupsBody");
  const start = (currentPage - 1) * ROWS_PER_PAGE;
  const pageRows = SIGNUPS.slice(start, start + ROWS_PER_PAGE);

  tbody.innerHTML = pageRows.map((user, i) => `
    <tr>
      <td>
        <div class="user-cell">
          <div class="avatar avatar-sm" style="background:${AVATAR_COLORS[i % AVATAR_COLORS.length]}">${initials(user.name)}</div>
          <span class="user-name">${user.name}</span>
        </div>
      </td>
      <td>${user.email}</td>
      <td>${user.location}</td>
      <td>${statusBadge(user.status)}</td>
      <td class="col-action">${actionButtons(user.name, start + i, 'user')}</td>
    </tr>
  `).join("");

  wireActionButtons(tbody);
}

function renderUsers() {
  const tbody = document.getElementById("usersBody");
  if (!tbody) return;
  tbody.innerHTML = USERS.map((user, i) => `
    <tr>
      <td>
        <div class="user-cell">
          <div class="avatar avatar-sm" style="background:${AVATAR_COLORS[i % AVATAR_COLORS.length]}">${initials(user.name)}</div>
          <span class="user-name">${user.name}</span>
        </div>
      </td>
      <td>${user.email}</td>
      <td>${user.location}</td>
      <td>${statusBadge(user.status)}</td>
      <td class="col-action">${actionButtons(user.name, i, 'user')}</td>
    </tr>
  `).join("");
  wireActionButtons(tbody);
}

function renderSpots() {
  const tbody = document.getElementById("spotsBody");
  if (!tbody) return;
  tbody.innerHTML = SPOTS.map((spot, i) => `
    <tr>
      <td><span class="user-name">${spot.name}</span></td>
      <td>${spot.region}</td>
      <td>${spot.type}</td>
      <td><span class="badge badge-active">★ ${spot.rating}</span></td>
      <td class="col-action">${actionButtons(spot.name, i, 'spot')}</td>
    </tr>
  `).join("");
  wireActionButtons(tbody);
}

function renderSpecies() {
  const tbody = document.getElementById("speciesBody");
  if (!tbody) return;

  const statusMap = {
    common: { label: "Common", cls: "badge-active" },
    rare: { label: "Rare", cls: "badge-pending" },
    endangered: { label: "Endangered", cls: "badge-banned" }
  };

  tbody.innerHTML = SPECIES.map((specie, i) => {
    const s = statusMap[specie.status] || statusMap.common;
    return `
      <tr>
        <td><span class="user-name">${specie.name}</span></td>
        <td>${specie.type}</td>
        <td>${specie.avgSize}</td>
        <td><span class="badge ${s.cls}">${s.label}</span></td>
        <td class="col-action">${actionButtons(specie.name, i, 'species')}</td>
      </tr>
    `;
  }).join("");
  wireActionButtons(tbody);
}

function renderProducts() {
  const tbody = document.getElementById("productsBody");
  if (!tbody) return;
  tbody.innerHTML = PRODUCTS.map((product, i) => `
    <tr>
      <td><span class="user-name">${product.name}</span></td>
      <td>${product.category}</td>
      <td>${product.price.toLocaleString()} EGP</td>
      <td><span class="badge ${product.stock > 50 ? 'badge-active' : 'badge-pending'}">${product.stock} units</span></td>
      <td class="col-action">${actionButtons(product.name, i, 'product')}</td>
    </tr>
  `).join("");
  wireActionButtons(tbody);
}

// ---- Wire Action Buttons (Edit + Delete) ----
function wireActionButtons(container) {
  // Edit button → open modal pre-filled
  container.querySelectorAll(".action-btn-edit").forEach(btn => {
    btn.addEventListener("click", () => {
      const type = btn.dataset.type;
      const index = parseInt(btn.dataset.index);
      openEditModal(type, index);
    });
  });

  // Delete button → show confirmation modal
  container.querySelectorAll(".action-btn-delete").forEach(btn => {
    btn.addEventListener("click", () => {
      const type = btn.dataset.type;
      const index = parseInt(btn.dataset.index);
      const name = btn.dataset.name;
      openDeleteConfirm(type, index, name);
    });
  });
}

// ---- Open Edit Modal (pre-fill form with existing data) ----
function openEditModal(type, index) {
  const arr = getArrayByType(type);
  const item = arr[index];
  if (!item) return;

  currentEditMode = { type, index };

  const modalMap = {
    user: 'userModal',
    spot: 'spotModal',
    species: 'speciesModal',
    product: 'productModal'
  };

  const titleMap = {
    user: 'Edit User',
    spot: 'Edit Spot',
    species: 'Edit Species',
    product: 'Edit Product'
  };

  const submitTextMap = {
    user: 'Save Changes',
    spot: 'Save Changes',
    species: 'Save Changes',
    product: 'Save Changes'
  };

  const modal = document.getElementById(modalMap[type]);
  const titleEl = document.getElementById(`${type}ModalTitle`);
  const submitBtn = document.getElementById(`${type}SubmitBtn`);
  const form = document.getElementById(`${type}Form`);

  if (titleEl) titleEl.textContent = titleMap[type];
  if (submitBtn) submitBtn.textContent = submitTextMap[type];

  // Pre-fill form fields
  if (type === 'user') {
    form.name.value = item.name;
    form.email.value = item.email;
    form.location.value = item.location;
    form.status.value = item.status;
  } else if (type === 'spot') {
    form.name.value = item.name;
    form.region.value = item.region;
    form.type.value = item.type;
    form.rating.value = item.rating;
  } else if (type === 'species') {
    form.name.value = item.name;
    form.type.value = item.type;
    form.avgSize.value = item.avgSize;
    form.status.value = item.status;
  } else if (type === 'product') {
    form.name.value = item.name;
    form.category.value = item.category;
    form.price.value = item.price;
    form.stock.value = item.stock;
  }

  modal.classList.add("active");
}

// ---- Open Delete Confirmation Modal ----
function openDeleteConfirm(type, index, name) {
  pendingDelete = { type, index, name };
  document.getElementById("deleteItemName").textContent = name;
  document.getElementById("deleteConfirmModal").classList.add("active");
}

// ---- Execute Delete ----
function executeDelete() {
  if (!pendingDelete) return;
  const { type, index, name } = pendingDelete;
  const arr = getArrayByType(type);
  arr.splice(index, 1);

  // Also remove from SIGNUPS if it's a user
  if (type === 'user') {
    const signupIndex = SIGNUPS.findIndex(s => s === arr[index] || s.name === name);
    // Since we already spliced, we need to find by name
    const idx = SIGNUPS.findIndex(s => s.name === name);
    if (idx !== -1) SIGNUPS.splice(idx, 1);
  }

  // Re-render tables
  if (type === 'user') { renderUsers(); renderSignups(); renderPagination(); }
  else if (type === 'spot') renderSpots();
  else if (type === 'species') renderSpecies();
  else if (type === 'product') renderProducts();

  showToast(`🗑️ "${name}" has been deleted.`);
  pendingDelete = null;
  document.getElementById("deleteConfirmModal").classList.remove("active");
}

// ---- Pagination ----
function renderPagination() {
  const pageNumbers = document.getElementById("pageNumbers");
  pageNumbers.innerHTML = "";
  const newTotalPages = Math.ceil(SIGNUPS.length / ROWS_PER_PAGE) || 1;

  for (let p = 1; p <= newTotalPages; p++) {
    const btn = document.createElement("button");
    btn.className = "page-num" + (p === currentPage ? " active" : "");
    btn.textContent = p;
    btn.addEventListener("click", () => goToPage(p));
    pageNumbers.appendChild(btn);
  }

  document.getElementById("prevPage").disabled = currentPage === 1;
  document.getElementById("nextPage").disabled = currentPage === newTotalPages;
}

function goToPage(p) {
  const newTotalPages = Math.ceil(SIGNUPS.length / ROWS_PER_PAGE) || 1;
  currentPage = Math.min(Math.max(p, 1), newTotalPages);
  renderSignups();
  renderPagination();
}

// ---- Status Bars ----
function renderStatusBars() {
  const container = document.getElementById("statusBars");
  const heights = [40, 65, 50, 80, 60, 95, 70, 55];
  container.innerHTML = heights.map((h, i) => {
    const active = i >= heights.length - 3;
    return `<span style="height:${h}%; background:${active ? 'var(--blue-600)' : 'var(--blue-100)'}"></span>`;
  }).join("");
}

// ---- Animated Counter ----
function animateValue(el, end, duration = 900, formatter = (n) => n.toLocaleString()) {
  const start = 0;
  const startTime = performance.now();
  function tick(now) {
    const progress = Math.min((now - startTime) / duration, 1);
    const eased = 1 - Math.pow(1 - progress, 3);
    const value = Math.round(start + (end - start) * eased);
    el.textContent = formatter(value);
    if (progress < 1) requestAnimationFrame(tick);
  }
  requestAnimationFrame(tick);
}

// ---- Navigation ----
function wireNav() {
  const items = document.querySelectorAll(".nav-item");
  const pageSections = document.querySelectorAll(".page-section");

  items.forEach(item => {
    item.addEventListener("click", (e) => {
      e.preventDefault();
      items.forEach(i => i.classList.remove("active"));
      item.classList.add("active");
      const targetPage = item.getAttribute("data-page");
      pageSections.forEach(section => {
        section.classList.remove("active");
        if (section.id === `page-${targetPage}`) {
          section.classList.add("active");
        }
      });
    });
  });
}

// ---- Toast ----
let toastTimer;
function showToast(message) {
  const toast = document.getElementById("toast");
  toast.textContent = message;
  toast.classList.add("show");
  clearTimeout(toastTimer);
  toastTimer = setTimeout(() => toast.classList.remove("show"), 2600);
}

// ---- Modal Logic ----
function wireModals() {
  // Open modal (Add mode)
  document.querySelectorAll(".btn-add").forEach(btn => {
    btn.addEventListener("click", () => {
      const modalId = btn.getAttribute("data-modal");
      const modal = document.getElementById(modalId);
      if (modal) {
        // Reset to "Add" mode
        currentEditMode = null;
        const type = modalId.replace('Modal', '');
        const titleEl = document.getElementById(`${type}ModalTitle`);
        const submitBtn = document.getElementById(`${type}SubmitBtn`);
        const form = document.getElementById(`${type}Form`);

        const titleMap = {
          user: 'Add New User', spot: 'Add New Spot',
          species: 'Add New Species', product: 'Add New Product'
        };
        const submitMap = {
          user: 'Add User', spot: 'Add Spot',
          species: 'Add Species', product: 'Add Product'
        };

        if (titleEl) titleEl.textContent = titleMap[type];
        if (submitBtn) submitBtn.textContent = submitMap[type];
        if (form) form.reset();

        modal.classList.add("active");
      }
    });
  });

  // Close modal
  document.querySelectorAll("[data-close]").forEach(btn => {
    btn.addEventListener("click", () => {
      const modalId = btn.getAttribute("data-close");
      const modal = document.getElementById(modalId);
      if (modal) modal.classList.remove("active");
    });
  });

  // Close on overlay click
  document.querySelectorAll(".modal-overlay").forEach(overlay => {
    overlay.addEventListener("click", (e) => {
      if (e.target === overlay) overlay.classList.remove("active");
    });
  });

  // Confirm delete button
  document.getElementById("confirmDeleteBtn").addEventListener("click", executeDelete);

  // ---- Form Submissions (handle both Add and Edit) ----
  document.getElementById("userForm").addEventListener("submit", (e) => {
    e.preventDefault();
    const formData = new FormData(e.target);
    const data = {
      name: formData.get("name"),
      email: formData.get("email"),
      location: formData.get("location"),
      status: formData.get("status")
    };

    if (currentEditMode && currentEditMode.type === 'user') {
      USERS[currentEditMode.index] = data;
      const signupIdx = SIGNUPS.findIndex(s => s.name === USERS[currentEditMode.index].name || s === USERS[currentEditMode.index]);
      if (signupIdx !== -1) SIGNUPS[signupIdx] = data;
      renderUsers();
      renderSignups();
      showToast(`✅ User "${data.name}" updated successfully!`);
    } else {
      USERS.push(data);
      SIGNUPS.push(data);
      renderUsers();
      renderSignups();
      renderPagination();
      showToast(`✅ User "${data.name}" added successfully!`);
    }

    e.target.reset();
    currentEditMode = null;
    document.getElementById("userModal").classList.remove("active");
  });

  document.getElementById("spotForm").addEventListener("submit", (e) => {
    e.preventDefault();
    const formData = new FormData(e.target);
    const data = {
      name: formData.get("name"),
      region: formData.get("region"),
      type: formData.get("type"),
      rating: parseFloat(formData.get("rating"))
    };

    if (currentEditMode && currentEditMode.type === 'spot') {
      SPOTS[currentEditMode.index] = data;
      renderSpots();
      showToast(`✅ Spot "${data.name}" updated successfully!`);
    } else {
      SPOTS.push(data);
      renderSpots();
      showToast(`✅ Spot "${data.name}" added successfully!`);
    }

    e.target.reset();
    currentEditMode = null;
    document.getElementById("spotModal").classList.remove("active");
  });

  document.getElementById("speciesForm").addEventListener("submit", (e) => {
    e.preventDefault();
    const formData = new FormData(e.target);
    const data = {
      name: formData.get("name"),
      type: formData.get("type"),
      avgSize: formData.get("avgSize"),
      status: formData.get("status")
    };

    if (currentEditMode && currentEditMode.type === 'species') {
      SPECIES[currentEditMode.index] = data;
      renderSpecies();
      showToast(`✅ Species "${data.name}" updated successfully!`);
    } else {
      SPECIES.push(data);
      renderSpecies();
      showToast(`✅ Species "${data.name}" added successfully!`);
    }

    e.target.reset();
    currentEditMode = null;
    document.getElementById("speciesModal").classList.remove("active");
  });

  document.getElementById("productForm").addEventListener("submit", (e) => {
    e.preventDefault();
    const formData = new FormData(e.target);
    const data = {
      name: formData.get("name"),
      category: formData.get("category"),
      price: parseFloat(formData.get("price")),
      stock: parseInt(formData.get("stock"))
    };

    if (currentEditMode && currentEditMode.type === 'product') {
      PRODUCTS[currentEditMode.index] = data;
      renderProducts();
      showToast(`✅ Product "${data.name}" updated successfully!`);
    } else {
      PRODUCTS.push(data);
      renderProducts();
      showToast(`✅ Product "${data.name}" added successfully!`);
    }

    e.target.reset();
    currentEditMode = null;
    document.getElementById("productModal").classList.remove("active");
  });
}

// ---- Button Wiring ----
function wireButtons() {
  document.getElementById("exportBtn").addEventListener("click", () => {
    showToast("Generating report… connect this to your export endpoint.");
  });
  document.getElementById("fabAdd").addEventListener("click", () => {
    showToast("Add new — hook this up to your create-record flow.");
  });
  document.getElementById("logoutBtn").addEventListener("click", (e) => {
    e.preventDefault();
    showToast("Logout clicked — wire this up to your auth flow.");
  });
  document.getElementById("prevPage").addEventListener("click", () => goToPage(currentPage - 1));
  document.getElementById("nextPage").addEventListener("click", () => goToPage(currentPage + 1));
}

// ---- Init ----
document.addEventListener("DOMContentLoaded", () => {
  animateValue(document.getElementById("statTotalUsers"), 12842);
  animateValue(document.getElementById("statActiveSpots"), 418);
  renderStatusBars();
  renderSignups();
  renderPagination();
  renderUsers();
  renderSpots();
  renderSpecies();
  renderProducts();
  wireNav();
  wireButtons();
  wireModals();
});