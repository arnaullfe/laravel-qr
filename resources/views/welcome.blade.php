<!DOCTYPE html>

<html>

<head>

    <title>How to Generate QR Code in Laravel 6? - HDTuto.com</title>

</head>

<body>

    

<div class="visible-print text-center">

    <h1>Laravel 6 - QR Code Generator Example</h1>

     

    {!! QrCode::size(150)->generate('http://192.168.1.36:8000/qr_page'); !!} 

    {!! QrCode::size(350)->generate('http://192.168.1.36:8000/qr_page'); !!} 
     


</div>

    

</body>

</html>
