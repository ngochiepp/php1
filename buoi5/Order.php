<?php

class Order {
    // Thuộc tính
    public $orderId;
    public $orderDate;
    public $customerName;
    public $products;

    // Constructor với property promotion
    public function __construct(
        string $orderId,
        string $orderDate,
        string $customerName,
        array $products = []
    ) {
        $this->orderId = $orderId;
        $this->orderDate = $orderDate;
        $this->customerName = $customerName;
        $this->products = $products;
    }

    // Phương thức thêm sản phẩm
    public function addProduct( $product) {
        $this->products[] = $product;
    }

    // Phương thức tính tổng giá trị đơn hàng
    public function getTotalPrice() {
        $totalPrice = 0;
        foreach ($this->products as $product) {
            $totalPrice += $product['price'];
        }
        return $totalPrice;
    }

    // Phương thức hiển thị thông tin đơn hàng
    public function getOrderInfo() {
        echo "Order ID: " . $this->orderId . "\n";
        echo "Order Date: " . $this->orderDate . "\n";
        echo "Customer Name: " . $this->customerName . "\n";
        echo "Products:\n";
        foreach ($this->products as $product) {
            echo "- " . $product['name'] . ": " . $product['price'] . "\n";
        }
        echo "Total Price: " . $this->getTotalPrice() . "\n";
    }
}

// Tạo đối tượng từ lớp Order với mảng sản phẩm
$order = new Order("ORD123", "2024-07-13", "Alice Smith", [
    ["name" => "Product A", "price" => 100.0],
    ["name" => "Product B", "price" => 200.0]
]);

// Thêm một sản phẩm vào đối tượng order
$order->addProduct(["name" => "Product C", "price" => 150.0]);

// Hiển thị thông tin chi tiết của đơn hàng
$order->getOrderInfo();

?>
