<!DOCTYPE html>
<html>

<head>
    <title>Add Product</title>

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
            background: #007bff;
            color: white;
            border: none;
            padding: 12px 20px;
            cursor: pointer;
        }

        a {
            margin-left: 10px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Add Product</h1>

    <form method="POST" action="<?= site_url('products/store') ?>">

        <label>Product Name</label>

        <input
            type="text"
            name="product_name"
            required
        >

        <label>Description</label>

        <textarea
            name="description"
            rows="5"
        ></textarea>

        <label>Price</label>

        <input
            type="number"
            name="price"
            step="0.01"
            min="0"
            required
        >

        <label>Quantity</label>

        <input
            type="number"
            name="quantity"
            min="0"
            required
        >

        <button type="submit">
            Save Product
        </button>

        <a href="<?= site_url('products') ?>">
            Cancel
        </a>

    </form>

</div>

</body>
</html>