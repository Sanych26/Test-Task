<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/">CONTACT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/orders">ORDERS</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<div class="container">
    <section class="orders-section">
        <div class="auto-container">
            <div class="sec-title d-flex mb-5">
                <div class="pull-left">
                    <h2>Orders Table</h2>
                    <div class="separator"></div>
                </div>
            </div>

            <div class="filter-cont row mb-4 d-flex">
                <div class="col d-flex">
                    <div class="col">
                        <input class="form-control" type="date" id="startDate" value="<?=date('Y-m-d', strtotime('-30 days')); ?>" placeholder="Start Date">
                    </div>
                    <div class="col">
                        <input class="form-control" type="date" id="endDate" value="<?=date('Y-m-d'); ?>" placeholder="End Date">
                    </div>
                    <div class="col">
                        <button class="btn btn-primary" id="applyDateFilter">Apply</button>
                    </div>
                </div>
                <div class="col">
                    <p>Rows: <span id="rowsCount"></span></p>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="ordersTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>FTD</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </section>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="/js/orders.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>