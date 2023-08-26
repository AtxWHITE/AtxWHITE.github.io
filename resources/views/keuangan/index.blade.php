<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="{{ asset('finance/css/style.css') }}">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <img src="{{ asset('frontend/assets/image/logo-70.png') }}" alt="">
                        </span>
                        <span class="title" style="font-weight: 700;">Finance</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="grid"></ion-icon>
                        </span>
                        <span class="title">Beranda</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="cash"></ion-icon>
                        </span>
                        <span class="title">Transaksi Customer</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="time-outline"></ion-icon>
                        </span>
                        <span class="title">Riwayat</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="wallet-outline"></ion-icon>
                        </span>
                        <span class="title">Pendapatan</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="notifikasi">
                    <ion-icon name="notifications-sharp"></ion-icon>
                </div>

                <div class="user">
                    <img src="{{'finance/imgs/customer01.jpg'}}" alt="">
                </div>

            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardMain">
                <div class="card">
                    <div class="title">Transaksi Bulanan</div>
                    <div class="bulan">April</div>
                </div>

            </div>
            <div class="cardBox">
                <div class="card" style="background-color: #3FC1C0;">
                    <div>
                        <div class="numbers">Rp 19.000.000,00</div>
                        <div class="cardName">Transaksi Masuk</div>
                    </div>
                </div>

                <div class="card" style="background-color: #04A6C2;">
                    <div>
                        <div class="numbers">Rp 4.500.000,00</div>
                        <div class="cardName">Transaksi Keluar</div>
                    </div>
                </div>

                <div class="card" style="background-color: #42A5F5;">
                    <div>
                        <div class="numbers">Rp. 14.500.000,00</div>
                        <div class="cardName">Total</div>
                    </div>
                </div>

            </div>

            <div class="cardMain">
                <div class="card">
                    <div class="title">Transaksi Mingguan</div>
                    <div class="bulan">Minggu Ke 1</div>
                </div>

            </div>
            <div class="cardBox">
                <div class="card" style="background-color: #3FC1C0;">
                    <div>
                        <div class="numbers">Rp 19.000.000,00</div>
                        <div class="cardName">Transaksi Masuk</div>
                    </div>
                </div>

                <div class="card" style="background-color: #04A6C2;">
                    <div>
                        <div class="numbers">Rp 4.500.000,00</div>
                        <div class="cardName">Transaksi Keluar</div>
                    </div>
                </div>

                <div class="card" style="background-color: #42A5F5;">
                    <div>
                        <div class="numbers">Rp. 14.500.000,00</div>
                        <div class="cardName">Total</div>
                    </div>
                </div>

            </div>

            <div class="cardMain">
                <div class="card">
                    <div class="title">Transaksi Harian</div>
                    <div class="bulan">10 April 2023</div>
                </div>

            </div>
            <div class="cardBox">
                <div class="card" style="background-color: #3FC1C0;">
                    <div>
                        <div class="numbers">Rp 19.000.000,00</div>
                        <div class="cardName">Transaksi Masuk</div>
                    </div>
                </div>

                <div class="card" style="background-color: #04A6C2;">
                    <div>
                        <div class="numbers">Rp 4.500.000,00</div>
                        <div class="cardName">Transaksi Keluar</div>
                    </div>
                </div>

                <div class="card" style="background-color: #42A5F5;">
                    <div>
                        <div class="numbers">Rp. 14.500.000,00</div>
                        <div class="cardName">Total</div>
                    </div>
                </div>

            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent Orders</h2>
                        <a href="#" class="btn">View All</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Price</td>
                                <td>Payment</td>
                                <td>Status</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Star Refrigerator</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>

                            <tr>
                                <td>Dell Laptop</td>
                                <td>$110</td>
                                <td>Due</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td>Apple Watch</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status return">Return</span></td>
                            </tr>

                            <tr>
                                <td>Addidas Shoes</td>
                                <td>$620</td>
                                <td>Due</td>
                                <td><span class="status inProgress">In Progress</span></td>
                            </tr>

                            <tr>
                                <td>Star Refrigerator</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>

                            <tr>
                                <td>Dell Laptop</td>
                                <td>$110</td>
                                <td>Due</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td>Apple Watch</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status return">Return</span></td>
                            </tr>

                            <tr>
                                <td>Addidas Shoes</td>
                                <td>$620</td>
                                <td>Due</td>
                                <td><span class="status inProgress">In Progress</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ================= New Customers ================ -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Recent Customers</h2>
                    </div>

                    <table>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="{{'finance/imgs/customer01.jpg'}}" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="{{'finance/imgs/customer01.jpg'}}" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="{{'finance/imgs/customer02.jpg'}}" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="{{'finance/imgs/customer01.jpg'}}" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="{{'finance/imgs/customer02.jpg'}}" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="{{'finance/imgs/customer01.jpg'}}" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="{{'finance/imgs/customer01.jpg'}}" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="{{'finance/imgs/customer02.jpg'}}" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="jobs">

        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="{{ asset('finance/js/main.js') }}"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>