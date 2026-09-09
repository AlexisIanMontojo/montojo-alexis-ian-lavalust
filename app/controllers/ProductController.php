<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Controller: ProductController
 * 
 * Automatically generated via CLI.
 */
class ProductController extends Controller {
    public function __construct()
    {
        parent::__construct();
        $this->call->model('ProductModel', 'productModel');
    }

    // READ
    public function index()
    {
        $data['products'] = $this->productModel->getAllProducts();

        $this->call->view('products/index', $data);
    }

    // CREATE FORM
    public function create()
    {
        $this->call->view('products/create');
    }

    // STORE
    public function store()
    {
        $data = array(
            'product_name' => $_POST['product_name'],
            'description'  => $_POST['description'],
            'price'        => $_POST['price'],
            'quantity'     => $_POST['quantity']
        );

        $this->productModel->createProduct($data);

        redirect('/products');
    }

    // EDIT FORM
    public function edit($id)
    {
        $product = $this->productModel->getProduct($id);

        if (!$product) {
            show_404();
            return;
        }

        $data['product'] = $product;

        $this->call->view('products/edit', $data);
    }

    // UPDATE
    public function update($id)
    {
        $data = array(
            'product_name' => $_POST['product_name'],
            'description'  => $_POST['description'],
            'price'        => $_POST['price'],
            'quantity'     => $_POST['quantity']
        );

        $this->productModel->updateProduct($id, $data);

        redirect('/products');
    }

    // DELETE
    public function delete($id)
    {
        $this->productModel->deleteProduct($id);

        redirect('/products');
    }
}