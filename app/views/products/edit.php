<!DOCTYPE html>
<html>

<head>
    <title>Edit Product</title>

    <style>
        body {
            font-family: Arial;
            background: #f4f6f8;
            padding: 30px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0 15px;
            box-sizing: border-box;
        }

        button {
            background: #28a745;
            color: white;
            border: none;
            padding: 12px 20px;
            cursor: pointer;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Edit Product</h1>

    <form
        method="POST"
        action="<?= site_url('products/update/' . $product['id']) ?>"
    >

        <label>Product Name</label>

        <input
            type="text"
            name="product_name"
            value="<?= htmlspecialchars($product['product_name']) ?>"
            required
        >

        <label>Description</label>

        <textarea
            name="description"
            rows="5"
        ><?= htmlspecialchars($product['description']) ?></textarea>

        <label>Price</label>

        <input
            type="number"
            name="price"
            step="0.01"
            value="<?= htmlspecialchars($product['price']) ?>"
            required
        >

        <label>Quantity</label>

        <input
            type="number"
            name="quantity"
            value="<?= htmlspecialchars($product['quantity']) ?>"
            required
        >

        <button type="submit">
            Update Product
        </button>

        <a href="<?= site_url('products') ?>">
            Cancel
        </a>

    </form>

</div>

</body>
</html>