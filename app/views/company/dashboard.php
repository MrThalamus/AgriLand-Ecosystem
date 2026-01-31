<!DOCTYPE html>

<html>

<head>

    <title>Company Dashboard - Agri Equipment Rentals</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>

        :root {

            --primary: #166534;

            --primary-light: #22c55e;

            --primary-bg: #f0fdf4;

            --accent: #ea580c;

            --accent-light: #fb923c;

            --accent-bg: #fff7ed;

            --dark: #1e293b;

            --gray-600: #475569;

            --gray-400: #94a3b8;

            --gray-200: #e2e8f0;

            --gray-100: #f1f5f9;

            --white: #ffffff;

            --danger: #dc2626;

            --warning: #f59e0b;

            --info: #0ea5e9;

        }



        * {

            margin: 0;

            padding: 0;

            box-sizing: border-box;

        }



        body {

            font-family: 'Poppins', sans-serif;

            background: var(--gray-100);

            color: var(--dark);

            line-height: 1.6;

        }



        /* Navbar */

        .navbar {

            background: var(--white);

            padding: 15px 40px;

            display: flex;

            justify-content: space-between;

            align-items: center;

            box-shadow: 0 2px 10px rgba(0,0,0,0.08);

            position: sticky;

            top: 0;

            z-index: 100;

        }



        .logo {

            display: flex;

            align-items: center;

            gap: 10px;

            font-size: 22px;

            font-weight: 700;

            color: var(--primary);

        }



        .logo svg {

            width: 36px;

            height: 36px;

        }



        .nav-links {

            display: flex;

            align-items: center;

            gap: 30px;

        }



        .nav-links a {

            text-decoration: none;

            color: var(--gray-600);

            font-weight: 500;

            transition: color 0.3s;

        }



        .nav-links a:hover {

            color: var(--primary);

        }



        .btn-logout {

            background: linear-gradient(135deg, var(--danger), #b91c1c);

            color: white;

            padding: 10px 24px;

            border-radius: 8px;

            text-decoration: none;

            font-weight: 600;

            transition: transform 0.3s, box-shadow 0.3s;

        }



        .btn-logout:hover {

            transform: translateY(-2px);

            box-shadow: 0 4px 15px rgba(220, 38, 38, 0.4);

        }



        /* Hero Section */

        .hero {

            height: 280px;

            background: linear-gradient(135deg, rgba(22, 101, 52, 0.85), rgba(22, 101, 52, 0.7)),

                        url('https://images.unsplash.com/photo-1530836369250-ef72a3f5cda8?w=1920&q=80');

            background-size: cover;

            background-position: center;

            display: flex;

            align-items: center;

            justify-content: center;

            flex-direction: column;

            color: white;

            text-align: center;

        }



        .hero h1 {

            font-size: 2.5rem;

            font-weight: 700;

            margin-bottom: 10px;

            text-shadow: 0 2px 10px rgba(0,0,0,0.3);

        }



        .hero p {

            font-size: 1.1rem;

            opacity: 0.95;

        }



        .hero-badge {

            background: var(--accent);

            color: white;

            padding: 6px 16px;

            border-radius: 20px;

            font-size: 14px;

            font-weight: 600;

            margin-top: 15px;

        }



        /* Main Container */

        .main-container {

            max-width: 1300px;

            margin: -50px auto 40px;

            padding: 0 20px;

            position: relative;

            z-index: 10;

        }



        /* Top Section - Form + List */

        .top-section {

            display: flex;

            gap: 25px;

            margin-bottom: 40px;

        }



        /* Form Section */

        .form-section {

            flex: 1;

            background: var(--white);

            padding: 30px;

            border-radius: 16px;

            box-shadow: 0 4px 20px rgba(0,0,0,0.08);

            height: fit-content;

        }



        .form-section h3 {

            color: var(--primary);

            font-size: 1.3rem;

            margin-bottom: 5px;

            display: flex;

            align-items: center;

            gap: 10px;

        }



        .form-section h3 svg {

            width: 24px;

            height: 24px;

        }



        .form-subtitle {

            color: var(--gray-400);

            font-size: 14px;

            margin-bottom: 25px;

        }



        .form-group {

            margin-bottom: 18px;

        }



        .form-group label {

            display: block;

            font-weight: 500;

            color: var(--dark);

            margin-bottom: 6px;

            font-size: 14px;

        }



        input, textarea {

            width: 100%;

            padding: 12px 16px;

            border: 2px solid var(--gray-200);

            border-radius: 10px;

            font-family: inherit;

            font-size: 15px;

            transition: border-color 0.3s, box-shadow 0.3s;

        }



        input:focus, textarea:focus {

            outline: none;

            border-color: var(--primary-light);

            box-shadow: 0 0 0 4px rgba(34, 197, 94, 0.15);

        }



        textarea {

            resize: vertical;

            min-height: 100px;

        }



        .btn-post {

            width: 100%;

            background: linear-gradient(135deg, var(--primary), var(--primary-light));

            color: white;

            padding: 14px;

            border: none;

            border-radius: 10px;

            font-size: 16px;

            font-weight: 600;

            cursor: pointer;

            transition: transform 0.3s, box-shadow 0.3s;

            display: flex;

            align-items: center;

            justify-content: center;

            gap: 8px;

        }



        .btn-post:hover {

            transform: translateY(-2px);

            box-shadow: 0 6px 20px rgba(22, 101, 52, 0.35);

        }



        /* List Section */

        .list-section {

            flex: 2;

            background: var(--white);

            padding: 30px;

            border-radius: 16px;

            box-shadow: 0 4px 20px rgba(0,0,0,0.08);

        }



        .list-section h3 {

            color: var(--dark);

            font-size: 1.3rem;

            margin-bottom: 20px;

            display: flex;

            align-items: center;

            gap: 10px;

        }



        table {

            width: 100%;

            border-collapse: collapse;

        }



        th {

            background: var(--primary-bg);

            color: var(--primary);

            padding: 14px 16px;

            text-align: left;

            font-weight: 600;

            font-size: 14px;

            border-bottom: 2px solid var(--primary-light);

        }



        td {

            padding: 16px;

            border-bottom: 1px solid var(--gray-200);

            vertical-align: middle;

        }



        tr:hover {

            background: var(--gray-100);

        }



        .instrument-name {

            font-weight: 600;

            color: var(--dark);

        }



        .instrument-category {

            color: var(--gray-400);

            font-size: 13px;

        }



        .price-tag {

            font-weight: 600;

            color: var(--primary);

        }



        .badge {

            display: inline-block;

            padding: 5px 12px;

            border-radius: 20px;

            font-size: 12px;

            font-weight: 600;

        }



        .badge-available {

            background: var(--primary-bg);

            color: var(--primary);

        }



        .badge-rented {

            background: var(--accent-bg);

            color: var(--accent);

        }



        .btn-edit {

            background: var(--warning);

            color: white;

            padding: 8px 16px;

            border: none;

            border-radius: 6px;

            font-size: 13px;

            font-weight: 500;

            cursor: pointer;

            transition: background 0.3s;

        }



        .btn-edit:hover {

            background: #d97706;

        }



        .btn-delete {

            background: var(--danger);

            color: white;

            padding: 8px 16px;

            border-radius: 6px;

            font-size: 13px;

            font-weight: 500;

            text-decoration: none;

            margin-left: 8px;

            transition: background 0.3s;

        }



        .btn-delete:hover {

            background: #b91c1c;

        }



        /* Orders Section */

        .orders-section {

            margin-top: 40px;

        }



        .section-header {

            display: flex;

            align-items: center;

            gap: 12px;

            margin-bottom: 20px;

            padding: 20px 25px;

            border-radius: 12px;

        }



        .section-header.purchase {

            background: linear-gradient(135deg, #0ea5e9, #0284c7);

            color: white;

        }



        .section-header.rental {

            background: linear-gradient(135deg, var(--accent), #c2410c);

            color: white;

        }



        .section-header svg {

            width: 28px;

            height: 28px;

        }



        .section-header h2 {

            font-size: 1.4rem;

            font-weight: 600;

        }



        .orders-table {

            background: var(--white);

            border-radius: 16px;

            overflow: hidden;

            box-shadow: 0 4px 20px rgba(0,0,0,0.08);

        }



        .orders-table th {

            background: var(--gray-100);

            color: var(--dark);

            border-bottom: 2px solid var(--gray-200);

        }



        .orders-table.purchase th {

            border-bottom-color: var(--info);

        }



        .orders-table.rental th {

            border-bottom-color: var(--accent);

        }



        .btn-done {

            background: linear-gradient(135deg, var(--primary), var(--primary-light));

            color: white;

            padding: 8px 20px;

            border-radius: 6px;

            text-decoration: none;

            font-weight: 600;

            font-size: 13px;

            transition: transform 0.3s, box-shadow 0.3s;

            display: inline-block;

        }



        .btn-done:hover {

            transform: translateY(-2px);

            box-shadow: 0 4px 12px rgba(22, 101, 52, 0.4);

        }



        .empty-row {

            text-align: center;

            padding: 40px !important;

            color: var(--gray-400);

        }



        /* Modal */

        .modal {

            display: none;

            position: fixed;

            z-index: 1000;

            left: 0;

            top: 0;

            width: 100%;

            height: 100%;

            background: rgba(0,0,0,0.6);

            backdrop-filter: blur(4px);

        }



        .modal-content {

            background: var(--white);

            margin: 5% auto;

            padding: 35px;

            width: 500px;

            max-width: 90%;

            border-radius: 20px;

            position: relative;

            box-shadow: 0 20px 60px rgba(0,0,0,0.3);

            animation: modalSlide 0.3s ease;

        }



        @keyframes modalSlide {

            from {

                opacity: 0;

                transform: translateY(-30px);

            }

            to {

                opacity: 1;

                transform: translateY(0);

            }

        }



        .close-btn {

            position: absolute;

            right: 20px;

            top: 15px;

            font-size: 28px;

            cursor: pointer;

            color: var(--gray-400);

            transition: color 0.3s;

            line-height: 1;

        }



        .close-btn:hover {

            color: var(--danger);

        }



        .modal-content h3 {

            color: var(--primary);

            margin-bottom: 10px;

            font-size: 1.4rem;

        }



        .modal-content hr {

            border: none;

            border-top: 2px solid var(--gray-200);

            margin-bottom: 25px;

        }



        .btn-update {

            width: 100%;

            background: linear-gradient(135deg, var(--info), #0284c7);

            color: white;

            padding: 14px;

            border: none;

            border-radius: 10px;

            font-size: 16px;

            font-weight: 600;

            cursor: pointer;

            transition: transform 0.3s, box-shadow 0.3s;

        }



        .btn-update:hover {

            transform: translateY(-2px);

            box-shadow: 0 6px 20px rgba(14, 165, 233, 0.4);

        }



        /* Responsive */

        @media (max-width: 900px) {

            .top-section {

                flex-direction: column;

            }

            

            .navbar {

                padding: 15px 20px;

            }

            

            .nav-links {

                gap: 15px;

            }

        }

        .logo-icon {

            width: 40px; height: 40px;

            background: linear-gradient(135deg, #2d5a3d 0%, #4a7c59 100%);

            border-radius: 12px;

            display: flex; align-items: center; justify-content: center;

            box-shadow: 0 8px 20px rgba(45, 90, 61, 0.4);

        }



        .logo-icon svg { width: 24px; height: 24px; fill: #fff; }

    </style>

</head>

<body>



<!-- Navbar -->

<nav class="navbar">

    <div class="logo">

        <div class="logo-icon">

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>

              </div>

        <span class="logo-text">AgriLand-Ecosystem</span>

    </div>

    <div class="nav-links">

        <a href="index.php?url=company_dashboard">Dashboard</a>

        <a href="#my-instruments">My Instruments</a>

        <a href="#orders">Orders</a>

        <a href="index.php?url=logout" class="btn-logout">Logout</a>

    </div>

</nav>



<!-- Hero Section -->

<section class="hero">

    <h1>Welcome, <?php echo $_SESSION['user_name']; ?></h1>

    <p>Manage your agricultural equipment and rental orders</p>

    <span class="hero-badge">Equipment Rental Company</span>

</section>



<!-- Main Container -->

<div class="main-container">

    

    <!-- Top Section: Form + Instruments List -->

    <div class="top-section">

        

        <!-- Post New Machinery Form -->

        <div class="form-section">

            <h3>

                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                    <circle cx="12" cy="12" r="10"/>

                    <line x1="12" y1="8" x2="12" y2="16"/>

                    <line x1="8" y1="12" x2="16" y2="12"/>

                </svg>

                Post New Machinery

            </h3>

            <p class="form-subtitle">Add equipment to your rental inventory</p>

            

            <form action="index.php?url=add_instrument" method="POST">

                <div class="form-group">

                    <label>Instrument Name</label>

                    <input type="text" name="name" placeholder="e.g. Tractor, Harvester" required>

                </div>

                <div class="form-group">

                    <label>Category</label>

                    <input type="text" name="category" placeholder="e.g. Harvesting, Plowing">

                </div>

                <div class="form-group">

                    <label>Rental Price Per Day (৳)</label>

                    <input type="number" name="rental_price" placeholder="Enter daily rental price" required>

                </div>

                <div class="form-group">

                    <label>Selling Price (৳) - Optional</label>

                    <input type="number" name="selling_price" placeholder="Enter selling price if for sale">

                </div>

                <div class="form-group">

                    <label>Description</label>

                    <textarea name="description" placeholder="Describe the machine, its condition, features..."></textarea>

                </div>

                <button type="submit" class="btn-post">

                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                        <line x1="12" y1="5" x2="12" y2="19"/>

                        <line x1="5" y1="12" x2="19" y2="12"/>

                    </svg>

                    Post Instrument

                </button>

            </form>

        </div>



        <!-- My Posted Instruments -->

        <div class="list-section" id="my-instruments">

            <h3>

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2">

                    <rect x="3" y="3" width="7" height="7"/>

                    <rect x="14" y="3" width="7" height="7"/>

                    <rect x="14" y="14" width="7" height="7"/>

                    <rect x="3" y="14" width="7" height="7"/>

                </svg>

                My Posted Instruments

            </h3>

            <table>

                <thead>

                    <tr>

                        <th>Machine Name</th>

                        <th>Rental Price/Day</th>

                        <th>Buy Price</th>

                        <th>Status</th>

                        <th>Actions</th>

                    </tr>

                </thead>

                <tbody>

                    <?php if(!empty($myInstruments)): ?>

                        <?php foreach($myInstruments as $item): ?>

                            <tr>

                                <td>

                                    <span class="instrument-name"><?php echo htmlspecialchars($item['name']); ?></span><br>

                                    <span class="instrument-category"><?php echo htmlspecialchars($item['category']); ?></span>

                                </td>

                                <td><span class="price-tag">৳<?php echo $item['rental_price']; ?></span></td>

                                <td><span class="price-tag">৳<?php echo $item['selling_price'] > 0 ? $item['selling_price'] : 'N/A'; ?></span></td>

                                <td>

                                    <span class="badge <?php echo $item['availability'] == 'available' ? 'badge-available' : 'badge-rented'; ?>">

                                        <?php echo ucfirst($item['availability']); ?>

                                    </span>

                                </td>

                                <td>

                                    <button class="btn-edit" onclick='openEditModal(<?php echo json_encode($item); ?>)'>Edit</button>

                                    <a href="index.php?url=delete_instrument&id=<?php echo $item['id']; ?>" 

                                       class="btn-delete" 

                                       onclick="return confirm('Are you sure you want to delete this instrument?')">Delete</a>

                                </td>

                            </tr>

                        <?php endforeach; ?>

                    <?php else: ?>

                        <tr><td colspan="5" class="empty-row">No instruments found. Add one now!</td></tr>

                    <?php endif; ?>

                </tbody>

            </table>

        </div>

    </div>



    <!-- Orders Section -->

    <div class="orders-section" id="orders">

        

        <!-- Pending Purchase Orders -->

        <div class="section-header purchase">

            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                <circle cx="9" cy="21" r="1"/>

                <circle cx="20" cy="21" r="1"/>

                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/>

            </svg>

            <h2>Pending Purchase Orders</h2>

        </div>

        <table class="orders-table purchase">

            <thead>

                <tr>

                    <th>Instrument Name</th>

                    <th>Landowner Name</th>

                    <th>District</th>

                    <th>Phone Number</th>

                    <th>Quantity</th>

                    <th>Total Price</th>

                    <th style="text-align: center;">Action</th>

                </tr>

            </thead>

            <tbody>

                <?php if(!empty($purchaseOrders)): ?>

                    <?php foreach($purchaseOrders as $order): ?>

                    <tr>

                        <td><?= htmlspecialchars($order['instrument_name']) ?></td>

                        <td><?= htmlspecialchars($order['customer_name']) ?></td>

                        <td><?= htmlspecialchars($order['district']) ?></td>

                        <td><?= htmlspecialchars($order['phone']) ?></td>

                        <td><span class="price-tag"><?= isset($order['quantity']) ? $order['quantity'] : 1 ?></span></td>

                        <td><span class="price-tag">৳<?= number_format($order['purchase_price'], 2) ?></span></td>

                        <td><span class="price-tag" style="color: #0ea5e9; font-size: 1.1em;">৳<?= number_format($order['purchase_price'] * (isset($order['quantity']) ? $order['quantity'] : 1), 2) ?></span></td>

                        <td style="text-align: center;">

                            <a href="index.php?url=complete_order&id=<?= $order['id'] ?>&type=buy" 

                               class="btn-done"

                               onclick="return confirm('Mark this order as Done?')">Done</a>

                        </td>

                    </tr>

                    <?php endforeach; ?>

                <?php else: ?>

                    <tr><td colspan="8" class="empty-row">No pending purchase orders.</td></tr>

                <?php endif; ?>

            </tbody>

        </table>



        <br><br>



        <!-- Pending Rental Requests -->

        <div class="section-header rental">

            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                <path d="M18 8h1a4 4 0 0 1 0 8h-1"/>

                <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/>

                <line x1="6" y1="1" x2="6" y2="4"/>

                <line x1="10" y1="1" x2="10" y2="4"/>

                <line x1="14" y1="1" x2="14" y2="4"/>

            </svg>

            <h2>Pending Rental Requests</h2>

        </div>

        <table class="orders-table rental">

            <thead>

                <tr>

                    <th>Instrument Name</th>

                    <th>Landowner Name</th>

                    <th>District</th>

                    <th>Phone Number</th>

                    <th>Quantity</th>

                    <th>Days</th>

                    <th>Price/Day</th>

                    <th>Total Price</th>

                    <th style="text-align: center;">Action</th>

                </tr>

            </thead>

            <tbody>

                <?php if(!empty($rentalOrders)): ?>

                    <?php foreach($rentalOrders as $rent): ?>

                    <tr>

                        <td><?= htmlspecialchars($rent['instrument_name']) ?></td>

                        <td><?= htmlspecialchars($rent['customer_name']) ?></td>

                        <td><?= htmlspecialchars($rent['district']) ?></td>

                        <td><?= htmlspecialchars($rent['phone']) ?></td>

                        <td><span class="price-tag"><?= isset($rent['quantity']) ? $rent['quantity'] : 1 ?></span></td>

                        <td><span class="price-tag"><?= isset($rent['rental_days']) ? $rent['rental_days'] : 1 ?> days</span></td>

                        <td><span class="price-tag">৳<?= number_format($rent['rental_price'], 2) ?>/day</span></td>

                        <td><span class="price-tag" style="color: #ea580c; font-size: 1.1em;">৳<?= number_format($rent['rental_price'] * (isset($rent['rental_days']) ? $rent['rental_days'] : 1) * (isset($rent['quantity']) ? $rent['quantity'] : 1), 2) ?></span></td>

                        <td style="text-align: center;">

                            <a href="index.php?url=complete_order&id=<?= $rent['id'] ?>&type=rent" 

                               class="btn-done"

                               onclick="return confirm('Mark this rental as Done?')">Done</a>

                        </td>

                    </tr>

                    <?php endforeach; ?>

                <?php else: ?>

                    <tr><td colspan="9" class="empty-row">No pending rental requests.</td></tr>

                <?php endif; ?>

            </tbody>

        </table>

    </div>

</div>



<!-- Edit Modal -->

<div id="editModal" class="modal">

    <div class="modal-content">

        <span class="close-btn" onclick="closeModal()">&times;</span>

        <h3>Edit Instrument</h3>

        <hr>

        <form action="index.php?url=edit_instrument" method="POST">

            <input type="hidden" name="id" id="edit_id">

            

            <div class="form-group">

                <label>Name:</label>

                <input type="text" name="name" id="edit_name" required>

            </div>

            

            <div class="form-group">

                <label>Category:</label>

                <input type="text" name="category" id="edit_cat">

            </div>

            

            <div class="form-group">

                <label>Rental Price (৳):</label>

                <input type="number" name="rental_price" id="edit_rprice" required>

            </div>

            

            <div class="form-group">

                <label>Selling Price (৳):</label>

                <input type="number" name="selling_price" id="edit_sprice">

            </div>

            

            <div class="form-group">

                <label>Description:</label>

                <textarea name="description" id="edit_desc"></textarea>

            </div>

            

            <button type="submit" class="btn-update">Update Changes</button>

        </form>

    </div>

</div>



<script>

    function openEditModal(item) {

        document.getElementById('edit_id').value = item.id;

        document.getElementById('edit_name').value = item.name;

        document.getElementById('edit_cat').value = item.category;

        document.getElementById('edit_rprice').value = item.rental_price;

        document.getElementById('edit_sprice').value = item.selling_price;

        document.getElementById('edit_desc').value = item.description;

        

        document.getElementById('editModal').style.display = "block";

    }



    function closeModal() {

        document.getElementById('editModal').style.display = "none";

    }



    window.onclick = function(event) {

        let modal = document.getElementById('editModal');

        if (event.target == modal) {

            modal.style.display = "none";

        }

    }

</script>



</body>

</html>

