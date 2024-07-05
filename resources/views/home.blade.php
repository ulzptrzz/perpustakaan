<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <title>Perpustakaan Sekolah</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    {{-- Navbar --}}
    <header>
        <h2 class="logo">Wakanda</h2>
        <nav class="navigation">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
            <button class="btnLogin-popup">login</button>
        </nav>
    </header>
    {{-- section 1 --}}
    <section class="home">
        <div class="home-content">
            <h1>Wakanda Perpustakaan</h1>
            <p>Lorem ipsum dolor sit amet consectur adipising elit.<br>perferendis sint debits, tempora magni eos
                est amet, aliquam recusandae quisquam <br>commodi eius numquam velit suscipit. Animi.
            </p>
        </div>
    </section>
    {{-- section 1 selesai --}}
    {{-- section 2 --}}
    <section class="services">
        <h2>Komik</h2>
<<<<<<< HEAD
        {{-- RAK BUKU --}}
=======
           {{-- RAK BUKU --}}
>>>>>>> 968928160f9bc7d370153834b95f99b01c968e11
        <div class="bookshelf">
            <div class="card-container">
                <div class="card">
                    <img src="{{ asset('images/attack on titan.jpeg') }}" alt="">
                    <div class="rating">
                        4.8 <i class="fa fa-star checked"></i>
                    </div>
                    <div class="menu-title">
                        <h3>attack on titan</h3> 
                    </div>
                    <div class="description-menu">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>Suscipit voluptas nam iure nisi culpa harum.</p>
                    </div>
                    <div class="importation">
                        <button class="btnLogin-popup">Peminjaman</button>
                        <button class="btnLogin-popup">Pengembalian</button>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <img src="{{ asset('images/Detective Conan.jpeg') }}" alt="">
                    <div class="rating">
                        4.8 <i class="fa fa-star checked"></i>
                    </div>
                    <div class="menu-title">
                        <h3>Detective Conan</h3> 
                    </div>
                    <div class="description-menu">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>Suscipit voluptas nam iure nisi culpa harum.</p>
                    </div>
                    <div class="importation">
                        <button class="btnLogin-popup">Peminjaman</button>
                        <button class="btnLogin-popup">Pengembalian</button>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <img src="{{ asset('images/Energy Harvesting Power Supplies and Applications .jpeg') }}" alt="">
                    <div class="rating">
                        4.8 <i class="fa fa-star checked"></i>
                    </div>
                    <div class="menu-title">
                        <h3>Energy Harvesting Power Supplies and Applications</h3> 
                    </div>
                    <div class="description-menu">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>Suscipit voluptas nam iure nisi.</p>
                    </div>
                    <div class="importation">
                        <button class="btnLogin-popup">Peminjaman</button>
                        <button class="btnLogin-popup">Pengembalian</button>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <img src="{{ asset('images/MasterYourMinPower.jpeg') }}" alt="">
                    <div class="rating">
                        4.8 <i class="fa fa-star checked"></i>
                    </div>
                    <div class="menu-title">
                        <h3>Master Your MinPower</h3> 
                    </div>
                    <div class="description-menu">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>Suscipit voluptas nam iure nisi culpa harum.</p>
                    </div>
                    <div class="importation">
                        <button class="btnLogin-popup">Peminjaman</button>
                        <button class="btnLogin-popup">Pengembalian</button>
                    </div>
                </div>
            </div>
        </div>
        <h2>motivation</h2>
<<<<<<< HEAD
        {{-- RAK BUKU --}}
=======
         {{-- RAK BUKU --}}
>>>>>>> 968928160f9bc7d370153834b95f99b01c968e11
        <div class="bookshelf">
            <div class="card-container">
                <div class="card">
                    <img src="{{ asset('images/attack on titan.jpeg') }}" alt="">
                    <div class="rating">
                        4.8 <i class="fa fa-star checked"></i>
                    </div>
                    <div class="menu-title">
                        <h3>attack on titan</h3> 
                    </div>
                    <div class="description-menu">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>Suscipit voluptas nam iure nisi culpa harum.</p>
                    </div>
                    <div class="importation">
                        <button class="btnLogin-popup">Peminjaman</button>
                        <button class="btnLogin-popup">Pengembalian</button>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <img src="{{ asset('images/Detective Conan.jpeg') }}" alt="">
                    <div class="rating">
                        4.8 <i class="fa fa-star checked"></i>
                    </div>
                    <div class="menu-title">
                        <h3>Detective Conan</h3> 
                    </div>
                    <div class="description-menu">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>Suscipit voluptas nam iure nisi culpa harum.</p>
                    </div>
                    <div class="importation">
                        <button class="btnLogin-popup">Peminjaman</button>
                        <button class="btnLogin-popup">Pengembalian</button>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <img src="{{ asset('images/Energy Harvesting Power Supplies and Applications .jpeg') }}" alt="">
                    <div class="rating">
                        4.8 <i class="fa fa-star checked"></i>
                    </div>
                    <div class="menu-title">
                        <h3>Energy Harvesting Power Supplies and Applications</h3> 
                    </div>
                    <div class="description-menu">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>Suscipit voluptas nam iure nisi.</p>
                    </div>
                    <div class="importation">
                        <button class="btnLogin-popup">Peminjaman</button>
                        <button class="btnLogin-popup">Pengembalian</button>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <img src="{{ asset('images/MasterYourMinPower.jpeg') }}" alt="">
                    <div class="rating">
                        4.8 <i class="fa fa-star checked"></i>
                    </div>
                    <div class="menu-title">
                        <h3>Master Your MinPower</h3> 
                    </div>
                    <div class="description-menu">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>Suscipit voluptas nam iure nisi culpa harum.</p>
                    </div>
                    <div class="importation">
                        <button class="btnLogin-popup">Peminjaman</button>
                        <button class="btnLogin-popup">Pengembalian</button>
                    </div>
                </div>
            </div>
        </div>
        <h2>horor</h2>
<<<<<<< HEAD
        {{-- RAK BUKU --}}
=======
         {{-- RAK BUKU --}}
>>>>>>> 968928160f9bc7d370153834b95f99b01c968e11
        <div class="bookshelf">
            <div class="card-container">
                <div class="card">
                    <img src="{{ asset('images/attack on titan.jpeg') }}" alt="">
                    <div class="rating">
                        4.8 <i class="fa fa-star checked"></i>
                    </div>
                    <div class="menu-title">
                        <h3>attack on titan</h3> 
                    </div>
                    <div class="description-menu">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>Suscipit voluptas nam iure nisi culpa harum.</p>
                    </div>
                    <div class="importation">
                        <button class="btnLogin-popup">Peminjaman</button>
                        <button class="btnLogin-popup">Pengembalian</button>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <img src="{{ asset('images/Detective Conan.jpeg') }}" alt="">
                    <div class="rating">
                        4.8 <i class="fa fa-star checked"></i>
                    </div>
                    <div class="menu-title">
                        <h3>Detective Conan</h3> 
                    </div>
                    <div class="description-menu">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>Suscipit voluptas nam iure nisi culpa harum.</p>
                    </div>
                    <div class="importation">
                        <button class="btnLogin-popup">Peminjaman</button>
                        <button class="btnLogin-popup">Pengembalian</button>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <img src="{{ asset('images/Energy Harvesting Power Supplies and Applications .jpeg') }}" alt="">
                    <div class="rating">
                        4.8 <i class="fa fa-star checked"></i>
                    </div>
                    <div class="menu-title">
                        <h3>Energy Harvesting Power Supplies and Applications</h3> 
                    </div>
                    <div class="description-menu">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>Suscipit voluptas nam iure nisi.</p>
                    </div>
                    <div class="importation">
                        <button class="btnLogin-popup">Peminjaman</button>
                        <button class="btnLogin-popup">Pengembalian</button>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <img src="{{ asset('images/MasterYourMinPower.jpeg') }}" alt="">
                    <div class="rating">
                        4.8 <i class="fa fa-star checked"></i>
                    </div>
                    <div class="menu-title">
                        <h3>Master Your MinPower</h3> 
                    </div>
                    <div class="description-menu">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>Suscipit voluptas nam iure nisi culpa harum.</p>
                    </div>
                    <div class="importation">
                        <button class="btnLogin-popup">Peminjaman</button>
                        <button class="btnLogin-popup">Pengembalian</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
 {{-- section 2 selesai --}}
    <script src="https://unpkg.com/akar-icons-fonts"></script>
</body>

</html>
