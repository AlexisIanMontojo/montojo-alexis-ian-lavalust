<!DOCTYPE html>
<html>
<head>
    <title>Products</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background: #f5f5f5;
        }

        h1 {
            margin-bottom: 20px;
        }

        .product-container {
            background: white;
            padding: 20px;
            border-radius: 8px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #333;
            color: white;
        }
    </style>
</head>

<body>

    <h1>Product List</h1>

    <div class="product-container">

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
            </thead>

            <tbody>

                <?php if (!empty($products)): ?>

                    <?php foreach ($products as $product): ?>

                        <tr>
                            <td>
                                <?= htmlspecialchars($product['id']) ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($product['product_name']) ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($product['description']) ?>
                            </td>

                            <td>
                                ₱<?= number_format($product['price'], 2) ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($product['quantity']) ?>
                            </td>
                        </tr>

                    <?php endforeach; ?>

                <?php else: ?>

                    <tr>
                        <td colspan="5">
                            No products available.
                        </td>
                    </tr>

                <?php endif; ?>

            </tbody>
        </table>

    </div>

</body>
</html>
```
