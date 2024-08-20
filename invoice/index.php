<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Builder</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php 
    require_once 'class.invoice.php';
    $invoice = new Invoice(1234,"Invoice for Services Rendered!!!!");
    $invoice->setClientDetails('John Doe', '123 Main St');
    $invoice->addItem('Service 1', 2, 100);
    $invoice->addItem('Service 2', 3, 50);
    $invoice->addItem('Service 3', 1, 200);
    $invoice->addTax(10);
    $invoice->addDiscount(50);
    $invoice->generate();
    ?>

    <button onclick="printInvoice()">Print</button>
</body>
<script>
    function printInvoice(){
        window.print();
    }
</script>
</html>