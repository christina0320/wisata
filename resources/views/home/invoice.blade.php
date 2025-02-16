<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Invoice</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
      }
      .container {
        width: 80%;
        margin: 10px auto;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
      .header {
        background-color: #c27803;
        color: white;
        padding: 20px 10px 10px 10px; /* Added larger padding at the top */
        text-align: left;
        font-size: 18px;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }
      .header span {
        color: green;
      }
      .header .invoice-info {
        color: #000;
        font-weight: bold;
        background-color: #d1d5db;
        padding: 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
      }
      .header button {
        background-color: blue;
        color: white;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
      }
      .section-title {
        background-color: #d3b8ae;
        padding: 10px;
        font-weight: bold;
        margin-top: 20px;
      }
      .info,
      .order-list,
      .bank-info {
        padding: 10px;
      }
      .info p,
      .order-list p,
      .bank-info p {
        margin: 10px 0;
      }
      .order-list table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
      }
      .order-list th,
      .order-list td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
      }
      .order-list th {
        background-color: #fff;
      }
      .total {
        background-color: #9ca3af;
        padding: 10px;
        text-align: left;
        font-weight: bold;
      }

      .bank-info p {
        background-color: #d1d5db;
        padding: 10px;
      }
      .bank-info button {
        background-color: #d3b8ae;
        border: none;
        padding: 10px;
        margin-top: 10px;
        width: 100%;
        text-align: left;
        cursor: pointer;
      }
      .content {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
      }
      .content > div {
        box-sizing: border-box;
      }
      .left-column {
        flex: 1;
        min-width: 300px;
      }
      .right-column {
        flex: 2;
        min-width: 300px;
      }
      .info p {
        margin-bottom: 15px; /* Added margin to each row */
      }
      .info p span {
        display: inline-block;
        width: 200px; /* Adjust width as needed */
        margin-left: 10px;
      }
      .section-title.no-margin {
        margin-bottom: 10px; /* Reduced margin below the section title */
      }
      @media (max-width: 768px) {
        .container {
          width: 95%;
        }
        .header {
          flex-direction: column;
          align-items: flex-start;
        }
        .header .invoice-info {
          flex-direction: column;
          align-items: flex-start;
        }
        .header button {
          margin-top: 10px;
        }
        .content {
          flex-direction: column;
        }
        .info p span {
          width: auto; /* Adjust width for smaller screens */
        }
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="header">
        <div class="invoice-info">
          <div>Nomor invoice: <span>INV-2024/10/29-a21un</span></div>
          <button>Cetak</button>
        </div>
      </div>
      <div class="content">
        <div class="left-column">
          <div class="section-title">Informasi Reservasi</div>
          <div class="info">
            <p>ID Reservasi: <span>RSV-oo0getu</span></p>
            <p>Nama Pelanggan: <span>Karin</span></p>
            <p>Email: <span>Karina@gmail.com</span></p>
            <p>Nomor Meja: <span>3</span></p>
            <p>Tanggal Reservasi: <span>2024-10-29</span></p>
            <p>Metode Pembayaran: <span>Transfer Bank</span></p>
          </div>
        </div>
        <div class="right-column">
          <div class="section-title">List Pesanan</div>
          <div class="order-list">
            <table>
              <tr>
                <th style="background-color: #fff">ID Pesanan</th>
                <th style="background-color: #fff">Nama Menu</th>
                <th style="background-color: #fff">Quantity</th>
                <th style="background-color: #fff">Subtotal</th>
              </tr>
              <tr>
                <td>PSN-1</td>
                <td>Special Tea</td>
                <td>2</td>
                <td>200.000</td>
              </tr>
              <tr>
                <td>PSN-2</td>
                <td>Wagyu Steak</td>
                <td>1</td>
                <td>250.000</td>
              </tr>
            </table>
          </div>
          <div class="total">Total</div>
          <div
            class="section-title no-margin"
            style="background-color: #9ca3af"
          >
            Nomor Rekening Restoran
          </div>
          <div class="bank-info">
            <p style="background-color: #d1d5db">
              Silahkan melakukan pembayaran melalui salah satu rekening bank
              yang sudah disediakan
            </p>
            <button>BCA: 8735089xxx (a.n Tasya Tuanaya)</button>
            <button>BRI: 034101000743xxx (a.n Tasya Tuanaya)</button>
            <button>MANDIRI: 1410013032xxx (a.n Tasya Tuanaya)</button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
