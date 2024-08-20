<?php 
class Invoice{
    private $invoiceId;
    private $clientDetails;
    private $title;
    private $items = [
        // ['description' => 'item 1', 'quantity' => 1, 'unitPrice' => 100, 'total' => 100],
        // ['description' => 'item 2', 'quantity' => 2, 'unitPrice' => 50, 'total' => 100]
    ];
    private $taxRate = 0;
    private $discountAmount = 0;
    private $subTotal = 0;
    private $total = 0;

    public function __construct($invoiceId, $title){
        $this->invoiceId = $invoiceId;
        $this->title = $title;
    }

    public function setClientDetails($name, $address) {
        $this->clientDetails = [
            'name' => $name,
            'address' => $address
        ];
    }

    public function addItem($description, $quantity, $unitPrice) {
        $this->items[] = [
            'description' => $description,
            'quantity' => $quantity,
            'unitPrice' => $unitPrice,
            'total' => $quantity * $unitPrice
        ];
        $this->subTotal += $quantity * $unitPrice;
    }

    public function addTax($taxRate) {
        $this->taxRate = $taxRate;
        $this->total = $this->subTotal + ($this->subTotal * ($taxRate / 100));
    }

    public function addDiscount($discountAmount) {
        $this->discountAmount = $discountAmount;
        $this->total -= $discountAmount;
    }

    public function generate() {
        echo "<div class='invoice'>";
        echo "<h1>Invoice #$this->invoiceId</h1>";
        echo "<h2>$this->title</h2>";
        echo "<p>Client Details:</p>";
        echo "<ul>";
        echo "<li>Name: " . $this->clientDetails['name'] . "</li>";
        echo "<li>Address: " . $this->clientDetails['address'] . "</li>";
        echo "</ul>";
        echo "<table>";
        echo "<tr><th>Description</th><th>Quantity</th><th>Unit Price</th><th>Total</th></tr>";
        foreach ($this->items as $item) {
            echo "<tr>";
            echo "<td>" . $item['description'] . "</td>";
            echo "<td>" . $item['quantity'] . "</td>";
            echo "<td>" . $item['unitPrice'] . "</td>";
            echo "<td>" . $item['total'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<p>Subtotal: $this->subTotal</p>";
        echo "<p>Tax ($this->taxRate%): " . ($this->subTotal * ($this->taxRate / 100)) . "</p>";
        echo "<p>Discount: -$this->discountAmount</p>";
        echo "<p class='total'>Total: $this->total</p>";
        echo "</div>";
    }


}

//  $invoice = new Invoice(123, 'Invoice for Services Rendered');
    // $invoice->setClientDetails('John Doe', '123 Main St');
    // $invoice->addItem('Service 1', 2, 100);
    // $invoice->addItem('Service 2', 3, 50);
    // $invoice->addTax(10);
    // $invoice->addDiscount(50);
    // $invoice->generate();