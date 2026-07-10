<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Angler Egypt · Admin Console</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/admin.css">
</head>
<body>
<?php include '../includes/navbar.php'; ?>

<div class="app-shell">

  <aside class="sidebar">
    <div class="brand">
      <div class="brand-mark">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M3 12C6 6 11 4 15 6C15 6 13 9 13 12C13 15 15 18 15 18C11 20 6 18 3 12Z" fill="currentColor"/>
          <circle cx="7" cy="11" r="0.9" fill="#fff"/>
          <path d="M15 12L21 8V16L15 12Z" fill="currentColor"/>
        </svg>
      </div>
      <div class="brand-text">
        <span class="brand-name">Angler Egypt</span>
        <span class="brand-sub">Admin Console</span>
      </div>
    </div>

    <nav class="nav">
      <a href="#" class="nav-item active" data-page="overview">
        <span class="nav-icon">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><rect x="3" y="3" width="7" height="7" rx="1.5" stroke="currentColor" stroke-width="1.8"/><rect x="14" y="3" width="7" height="7" rx="1.5" stroke="currentColor" stroke-width="1.8"/><rect x="3" y="14" width="7" height="7" rx="1.5" stroke="currentColor" stroke-width="1.8"/><rect x="14" y="14" width="7" height="7" rx="1.5" stroke="currentColor" stroke-width="1.8"/></svg>
        </span>
        Overview
      </a>
      <a href="#" class="nav-item" data-page="users">
        <span class="nav-icon">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="8" r="3.4" stroke="currentColor" stroke-width="1.8"/><path d="M4.5 20c1.4-4 4-6 7.5-6s6.1 2 7.5 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
        </span>
        Users
      </a>
      <a href="#" class="nav-item" data-page="spots">
        <span class="nav-icon">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M12 21s7-6.5 7-11.5A7 7 0 0 0 5 9.5C5 14.5 12 21 12 21Z" stroke="currentColor" stroke-width="1.8"/><circle cx="12" cy="9.5" r="2.3" stroke="currentColor" stroke-width="1.8"/></svg>
        </span>
        Spots
      </a>
      <a href="#" class="nav-item" data-page="species">
        <span class="nav-icon">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M3 12C6 7 10.5 5 14 6.8C14 6.8 12.2 9.4 12.2 12C12.2 14.6 14 17.2 14 17.2C10.5 19 6 17 3 12Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M14 12L20 8.5V15.5L14 12Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/></svg>
        </span>
        Species
      </a>
      <a href="#" class="nav-item" data-page="products">
        <span class="nav-icon">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M20 7l-8-4-8 4 8 4 8-4z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M4 7v10l8 4 8-4V7" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M12 11v10" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
        </span>
        Products
      </a>
    </nav>

    <div class="sidebar-footer">
      <div class="admin-profile">
        <div class="avatar avatar-admin">AE</div>
        <div class="admin-info">
          <span class="admin-name">Admin Root</span>
          <span class="admin-role">Main Office</span>
        </div>
      </div>
      <a href="../auth/logout.php" class="logout-link" id="logoutBtn">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/><path d="M16 17l5-5-5-5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/><path d="M21 12H9" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
        Logout
      </a>
    </div>
  </aside>

  <main class="main">

    <!-- PAGE: OVERVIEW -->
    <div class="page-section active" id="page-overview">
      <header class="page-header">
        <div>
          <h1>System Overview</h1>
          <p>Real-time performance of the Angler Egypt platform.</p>
        </div>
        <button class="btn-primary" id="exportBtn">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M12 3v12" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/><path d="M7 10l5 5 5-5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/><path d="M4 19h16" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
          Export Report
        </button>
      </header>

      <section class="stat-grid">
        <div class="stat-card">
          <div class="stat-top">
            <div>
              <span class="stat-label">Total Users</span>
              <div class="stat-value-row">
                <span class="stat-value" id="statTotalUsers">12,842</span>
                <span class="stat-delta up">+12%</span>
              </div>
            </div>
            <div class="stat-icon icon-blue">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><circle cx="9" cy="8" r="3.2" stroke="currentColor" stroke-width="1.8"/><circle cx="17" cy="9" r="2.4" stroke="currentColor" stroke-width="1.8"/><path d="M2.8 19c1.2-3.6 3.6-5.4 6.2-5.4s5 1.8 6.2 5.4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/><path d="M15.5 14c2.2 0 4 1.7 4.8 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
            </div>
          </div>
          <div class="stat-bar"><span style="width:78%"></span></div>
        </div>

        <div class="stat-card">
          <div class="stat-top">
            <div>
              <span class="stat-label">Active Spots</span>
              <div class="stat-value-row">
                <span class="stat-value" id="statActiveSpots">418</span>
                <span class="stat-delta up">+5%</span>
              </div>
            </div>
            <div class="stat-icon icon-blue">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="8.4" stroke="currentColor" stroke-width="1.8"/><path d="M15.5 8.5L13 13l-4.5 2.5L11 11l4.5-2.5Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/></svg>
            </div>
          </div>
          <div class="stat-bar"><span style="width:52%"></span></div>
        </div>

        <div class="stat-card status-card">
          <div class="stat-top">
            <span class="stat-label">System Status</span>
            <span class="live-pill"><span class="live-dot"></span>LIVE</span>
          </div>
          <div class="stat-value status-value">Operational</div>
          <div class="status-bars" id="statusBars"></div>
        </div>
      </section>

      <section class="panel">
        <div class="panel-header">
          <h2>Recent Signups</h2>
          <a href="#" class="view-all">View All Users</a>
        </div>
        <div class="table-wrap">
          <table class="signups-table">
            <thead>
              <tr>
                <th>User Name</th>
                <th>Email Address</th>
                <th>Location</th>
                <th>Status</th>
                <th class="col-action">Action</th>
              </tr>
            </thead>
            <tbody id="signupsBody"></tbody>
          </table>
        </div>
        <div class="pagination" id="pagination">
          <button class="page-arrow" id="prevPage" aria-label="Previous page">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M15 18l-6-6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </button>
          <div class="page-numbers" id="pageNumbers"></div>
          <button class="page-arrow" id="nextPage" aria-label="Next page">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M9 18l6-6-6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </button>
        </div>
      </section>
    </div>

    
    <div class="page-section" id="page-users">
      <header class="page-header">
        <div>
          <h1>Users Management</h1>
          <p>Manage all registered anglers and their accounts.</p>
        </div>
      </header>
      <section class="panel">
        <div class="panel-header">
          <h2>All Users</h2>
          <button class="btn-add" data-modal="userModal" data-mode="add">
            <svg viewBox="0 0 24 24" fill="none"><path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/></svg>
            Add New User
          </button>
        </div>
        <div class="table-wrap">
          <table class="signups-table">
            <thead>
              <tr>
                <th>User Name</th>
                <th>Email Address</th>
                <th>Location</th>
                <th>Status</th>
                <th class="col-action">Action</th>
              </tr>
            </thead>
            <tbody id="usersBody"></tbody>
          </table>
        </div>
      </section>
    </div>

    
    <div class="page-section" id="page-spots">
      <header class="page-header">
        <div>
          <h1>Fishing Spots</h1>
          <p>Manage locations, marine spots, and coordinates.</p>
        </div>
      </header>
      <section class="panel">
        <div class="panel-header">
          <h2>All Spots</h2>
          <button class="btn-add" data-modal="spotModal" data-mode="add">
            <svg viewBox="0 0 24 24" fill="none"><path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/></svg>
            Add New Spot
          </button>
        </div>
        <div class="table-wrap">
          <table class="signups-table">
            <thead>
              <tr>
                <th>Spot Name</th>
                <th>Region</th>
                <th>Water Type</th>
                <th>Rating</th>
                <th class="col-action">Action</th>
              </tr>
            </thead>
            <tbody id="spotsBody"></tbody>
          </table>
        </div>
      </section>
    </div>

    
    <div class="page-section" id="page-species">
      <header class="page-header">
        <div>
          <h1>Fish Species</h1>
          <p>Manage the database of marine species.</p>
        </div>
      </header>
      <section class="panel">
        <div class="panel-header">
          <h2>All Species</h2>
          <button class="btn-add" data-modal="speciesModal" data-mode="add">
            <svg viewBox="0 0 24 24" fill="none"><path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/></svg>
            Add New Species
          </button>
        </div>
        <div class="table-wrap">
          <table class="signups-table">
            <thead>
              <tr>
                <th>Species Name</th>
                <th>Habitat Type</th>
                <th>Avg. Size</th>
                <th>Conservation Status</th>
                <th class="col-action">Action</th>
              </tr>
            </thead>
            <tbody id="speciesBody"></tbody>
          </table>
        </div>
      </section>
    </div>

    
    <div class="page-section" id="page-products">
      <header class="page-header">
        <div>
          <h1>Products</h1>
          <p>Manage fishing gear, equipment, and accessories.</p>
        </div>
      </header>
      <section class="panel">
        <div class="panel-header">
          <h2>All Products</h2>
          <button class="btn-add" data-modal="productModal" data-mode="add">
            <svg viewBox="0 0 24 24" fill="none"><path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/></svg>
            Add New Product
          </button>
        </div>
        <div class="table-wrap">
          <table class="signups-table">
            <thead>
              <tr>
                <th>Product Name</th>
                <th>Category</th>
                <th>Price (EGP)</th>
                <th>Stock</th>
                <th class="col-action">Action</th>
              </tr>
            </thead>
            <tbody id="productsBody"></tbody>
          </table>
        </div>
      </section>
    </div>

    
    <?php include '../includes/footer.php'; ?>

  </main>
</div>




<div class="modal-overlay" id="userModal">
  <div class="modal">
    <div class="modal-header">
      <h2 id="userModalTitle">Add New User</h2>
      <button class="modal-close" data-close="userModal">&times;</button>
    </div>
    <form class="modal-form" id="userForm">
      <div class="form-group">
        <label>User Name</label>
        <input type="text" name="name" required placeholder="Enter full name">
      </div>
      <div class="form-group">
        <label>Email Address</label>
        <input type="email" name="email" required placeholder="email@example.com">
      </div>
      <div class="form-group">
        <label>Location</label>
        <input type="text" name="location" required placeholder="City, Egypt">
      </div>
      <div class="form-group">
        <label>Status</label>
        <select name="status" required>
          <option value="active">Active</option>
          <option value="pending">Pending</option>
          <option value="banned">Banned</option>
        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn-cancel" data-close="userModal">Cancel</button>
        <button type="submit" class="btn-submit" id="userSubmitBtn">Add User</button>
      </div>
    </form>
  </div>
</div>


<div class="modal-overlay" id="spotModal">
  <div class="modal">
    <div class="modal-header">
      <h2 id="spotModalTitle">Add New Spot</h2>
      <button class="modal-close" data-close="spotModal">&times;</button>
    </div>
    <form class="modal-form" id="spotForm">
      <div class="form-group">
        <label>Spot Name</label>
        <input type="text" name="name" required placeholder="Enter spot name">
      </div>
      <div class="form-group">
        <label>Region</label>
        <input type="text" name="region" required placeholder="City, Governorate">
      </div>
      <div class="form-group">
        <label>Water Type</label>
        <select name="type" required>
          <option value="Red Sea">Red Sea</option>
          <option value="Mediterranean Sea">Mediterranean Sea</option>
          <option value="Freshwater Lake">Freshwater Lake</option>
          <option value="Freshwater">Freshwater</option>
          <option value="River Nile">River Nile</option>
        </select>
      </div>
      <div class="form-group">
        <label>Rating (1-5)</label>
        <input type="number" name="rating" min="1" max="5" step="0.1" required placeholder="4.5">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn-cancel" data-close="spotModal">Cancel</button>
        <button type="submit" class="btn-submit" id="spotSubmitBtn">Add Spot</button>
      </div>
    </form>
  </div>
</div>


<div class="modal-overlay" id="speciesModal">
  <div class="modal">
    <div class="modal-header">
      <h2 id="speciesModalTitle">Add New Species</h2>
      <button class="modal-close" data-close="speciesModal">&times;</button>
    </div>
    <form class="modal-form" id="speciesForm">
      <div class="form-group">
        <label>Species Name</label>
        <input type="text" name="name" required placeholder="Enter species name">
      </div>
      <div class="form-group">
        <label>Habitat Type</label>
        <select name="type" required>
          <option value="Freshwater">Freshwater</option>
          <option value="Saltwater">Saltwater</option>
        </select>
      </div>
      <div class="form-group">
        <label>Average Size</label>
        <input type="text" name="avgSize" required placeholder="e.g., 5-15 kg">
      </div>
      <div class="form-group">
        <label>Conservation Status</label>
        <select name="status" required>
          <option value="common">Common</option>
          <option value="rare">Rare</option>
          <option value="endangered">Endangered</option>
        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn-cancel" data-close="speciesModal">Cancel</button>
        <button type="submit" class="btn-submit" id="speciesSubmitBtn">Add Species</button>
      </div>
    </form>
  </div>
</div>


<div class="modal-overlay" id="productModal">
  <div class="modal">
    <div class="modal-header">
      <h2 id="productModalTitle">Add New Product</h2>
      <button class="modal-close" data-close="productModal">&times;</button>
    </div>
    <form class="modal-form" id="productForm">
      <div class="form-group">
        <label>Product Name</label>
        <input type="text" name="name" required placeholder="Enter product name">
      </div>
      <div class="form-group">
        <label>Category</label>
        <select name="category" required>
          <option value="Rods">Rods</option>
          <option value="Reels">Reels</option>
          <option value="Lines">Lines</option>
          <option value="Baits">Baits</option>
          <option value="Tackle">Tackle</option>
          <option value="Accessories">Accessories</option>
        </select>
      </div>
      <div class="form-group">
        <label>Price (EGP)</label>
        <input type="number" name="price" min="0" step="0.01" required placeholder="250.00">
      </div>
      <div class="form-group">
        <label>Stock</label>
        <input type="number" name="stock" min="0" required placeholder="50">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn-cancel" data-close="productModal">Cancel</button>
        <button type="submit" class="btn-submit" id="productSubmitBtn">Add Product</button>
      </div>
    </form>
  </div>
</div>


<div class="modal-overlay" id="deleteConfirmModal">
  <div class="modal modal-delete">
    <div class="modal-header">
      <h2>Confirm Deletion</h2>
      <button class="modal-close" data-close="deleteConfirmModal">&times;</button>
    </div>
    <div class="modal-body-delete">
      <div class="delete-icon-wrap">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none">
          <path d="M3 6h18" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <p class="delete-message">Are you sure you want to delete <strong id="deleteItemName">this item</strong>?</p>
      <p class="delete-submessage">This action cannot be undone.</p>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn-cancel" data-close="deleteConfirmModal">Cancel</button>
      <button type="button" class="btn-delete-confirm" id="confirmDeleteBtn">Yes, Delete</button>
    </div>
  </div>
</div>

<button class="fab" id="fabAdd" aria-label="Add new">
  <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M12 5v14M5 12h14" stroke="#fff" stroke-width="2.4" stroke-linecap="round"/></svg>
</button>


<div class="toast" id="toast"></div>

<script src="../assets/js/admin.js"></script>
</body>
</html>