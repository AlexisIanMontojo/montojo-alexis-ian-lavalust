<!DOCTYPE html>
<html>
<head>
    <title>Product Management</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            padding: 30px;
        }

        .container {
            max-width: 1100px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
        }

        h1 {
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 15px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background: #f1f1f1;
        }

        .edit {
            color: blue;
        }

        .delete {
            color: red;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Product Management</h1>

    <a href="<?= site_url('products/create') ?>" class="btn">
        + Add Product
    </a>

    <a href="<?= site_url('logout') ?>" class="btn">
        Logout
    </a>

    <table>

        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Created At</th>
                <th>Actions</th>
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

                    <td>
                        <?= htmlspecialchars($product['created_at']) ?>
                    </td>

                    <td>

                        <a
                            class="edit"
                            href="<?= site_url('products/edit/' . $product['id']) ?>"
                        >
                            Edit
                        </a>

                        |

                        <a
                            class="delete"
                            href="<?= site_url('products/delete/' . $product['id']) ?>"
                            onclick="return confirm('Delete this product?')"
                        >
                            Delete
                        </a>

                    </td>

                </tr>

            <?php endforeach; ?>

        <?php else: ?>

            <tr>
                <td colspan="7">
                    No products found.
                </td>
            </tr>

        <?php endif; ?>

        </tbody>

    </table>

</div>

</body>
</html>