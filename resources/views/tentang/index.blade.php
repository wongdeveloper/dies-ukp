@extends('layouts.app')

@section('title')
    Tentang | TRTD UKP 60th
@endsection
<style>

    .ucapan-content{
        min-height:500px !important ;
    }




    /* ===================== CARD UCAPAN FOTO =========== */

    .haft-card-galeri-pink{
        min-width: 300px !important; 
        min-height: 200px !important;
        background-color: #D02762 !important;
        border-radius: 0px !important;
    }

    .haft-card-galeri-yellow{
        min-width: 300px !important; 
        min-height: 200px !important;
        border-radius: 0px !important;
        background-color: #F6AD3C !important;
    }
    .haft-card-galeri-blue{
        min-width: 300px !important; 
        min-height: 200px !important;
        border-radius: 0px !important;
        background-color: #1B325E !important;
    }
    /* ================================================ */

    /* ========================= HAFT BTN ================== */
    .haft-btn-pink {
        background-color: #D02762 !important;
        color:#FFFCF5 !important;
        width: 235px !important;
        height:50px !important;
        border-radius: 30px !important;
        
        
    }
    .haft-btn-pink p{
        font-size: 15pt !important;
        font-weight: bold !important;
    }

    .haft-btn-yellow {
        background-color: #F6AD3C !important;
        color:#FFFCF5 !important;
        width: 235px !important;
        height:50px !important;
        border-radius: 30px !important;
        
        
    }
    .haft-btn-yellow p{
        font-size: 15pt !important;
        font-weight: bold !important;
    }
    /* ================================================ */

    /* ===================== CARD UCAPAN VIP =============== */

    .haft-card-vip-pink{
        min-width: 300px !important; 
        min-height: 200px !important;
        background-color: #D02762 !important;
        border-radius: 0px !important;
    }

    .haft-card-vip-yellow{
        min-width: 300px !important; 
        min-height: 200px !important;
        border-radius: 0px !important;
        background-color: #F6AD3C !important;
    }
    .haft-card-vip-blue{
        min-width: 300px !important; 
        min-height: 200px !important;
        border-radius: 0px !important;
        background-color: #1B325E !important;
    }
    .haft-vip-card-img{
        border-radius:100px;
        background-color: #FFFCF5 !important;
        width: 75px !important;
        min-height: 75px !important;
    }

    .haft-card-img{
        background-color: #FFFCF5 !important;
        min-height: 200px;
    }

    .haft-card-text{
        color: #FFFCF5 !important;
    }
    .haft-card-text p{
        font-size: 8pt !important;
    }
    
    .haft-vip-card-text{
        color: #FFFCF5 !important;
    }
    .haft-vip-card-text p {
        font-size: 8pt !important;
        font-style: italic;
    }
    .haft-vip-card-wish{
        color: #FFFCF5 !important;
    }
    .wish{
        font-size: 12pt !important;
    }
    /* ============================================ */

    /* HAFT MODAL */
    .haft-header-modal{
        width: 100%;
        background-color: #1B325E !important;
        color:#fff !important;
        font-weight: bold !important;
        height: 65px !important;
        font-size: 14pt !important;
        
    }
    .haft-modal-btn{
        cursor: pointer;
        background-color: #D02762!important;
        border: 2px solid white !important;
        color: white !important;
        border-radius: 20px !important;
        min-width: 80px !important;
        min-height: 45px !important;
    }
    .haft-modal-btn:hover{
        cursor: pointer;
        background-color: white !important;
        border: 2px solid #D02762 !important;
        color: #D02762 !important;
        border-radius: 20px !important;
        
    }
    


    /* =================== */

    /* CARD KEGIATAN TRTD */

    .haft-article-card{
        min-width: 100% !important;
        width: auto !important;
        min-height: 250px !important;
        background-color: #FFFCF5;
        border-radius: 15px !important;
    }
    .article-img{
        border-radius: 30px !important;
        min-width: 30px !important;
        max-width: 200px !important;
        min-height: 200px !important;
        background-color: #1B325E !important;
    }
   
    .link-article a{
        text-decoration: none !important;
        font-weight: bold !important;
        color: #D02762 !important;
    }


    /* ========================= */
    /* ISI TENTANG */
        .container-isi-blue{
            background-color: #1B325E !important;
            width: auto !important;
            min-height: 300px !important;
        }
        .container-isi-pink{
            background-color: #D02762 !important;
            width: auto !important;
            min-height: 300px !important;
        }
        .container-isi-yellow{
            background-color: #F6AD3C !important;
            width: auto !important;
            min-height: 300px !important;
        }
        .container-img{
            background-color: #fff;
            min-height: 300px !important;
        }
        .container-teks{
            color: #fff !important;
        }

    /* ================= */



    @media only screen and (max-width: 1200px) {
      
    }
    @media only screen and (max-width: 997px) {
        
    }
    @media only screen and (max-width: 527px) {
        
    }
    @media only screen and (max-width: 391px) {
        
        
    }
    
</style>
@section('content')
<div class="ucapan-content">
    
    {{-- BUAT NON HP --}}
        <div class="container-fluid pb-5 ucapan-teks d-none d-md-block">
            <div class="row pt-5 title">
                <div class="col-2"></div>        
                <div class="col-4">
                    <h1>Tentang TRTD</h1>
                </div>
                <div class="col-6"></div>
                
            </div>
            <div class="row line-pink">
                <div class="col-2"></div>
                <div class="col-3">
                    <hr style="border: 2px solid; opacity: 5; color: #D02762;">
                </div>
            </div>
            <div class="row pt-4">
                <div class="col container-isi-blue">
                    <div class="row">
                        <div class="col-2">
                            {{-- BUAT JARAK --}}
                        </div>
                        {{-- <div class="col-3 container-img">

                        </div> --}}
                        <div class="col-9 pt-4 container-teks">
                            <div class="row">
                                <div class="col">
                                    <h1>Sejarah TRTD</h1>
                                </div>
                            </div>
                            <div class="row pt-3">
                                <div class="col" style="text-align: justify">
                                    <p>
                                        Pada tanggal 22 September 2021, UK Petra akan merayakan ulang tahunnya yang ke 60. 
                                        Perayaan ulang tahun ini bertajuk <span style="font-style: italic">The Rock Turns Diamond!</span> (TRTD). 
                                        Petra, Sang Batu Karang, mencapai ulang tahun berliannya. 
                                        Perayaan TRTD ini mengambil tema “<span style="font-style: italic">De<span style="font-weight:bold">light</span>ful Petra, De<span style="font-weight:bold">light</span>ed World </span>”. 
                                        Tema ini memiliki dua makna. Pertama, UK Petra yang penuh sukacita membuat dunia turut bergembira.  
                                        Tema ini juga berisi harapan UK Petra yang dipenuhi dengan nilai LIGHT dapat menyemai nilai-nilai 
                                        tersebut di dalam masyarakat melalui pengajaran, penelitian, dan pengabdiannya.
                                    </p>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-1"></div>
                    </div>
                    
                </div>
            </div>
            <div class="row pt-4">
                <div class="col container-isi-pink" >
                    <div class="row">
                        <div class="col-2">
                            {{-- BUAT JARAK --}}
                        </div>
                        <div class="col-9 pt-4 pb-4 container-teks">
                            <div class="row">
                                <div class="col">
                                    <h1>Bentuk Kegiatan TRTD</h1>
                                </div>
                            </div>
                            <div class="row pt-3">
                                <div class="col" style="text-align: justify">
                                    <p>
                                        Perayaan 60 tahun ini dibagi menjadi tiga tahap, yaitu tahun persiapan (2019-2020), 
                                        tahun penyambutan (2020-2021), dan tahun perayaan (2021-2022). 
                                        Sepanjang 2019-2020, Panitia TRTD mengkampanyekan perayaan dan tema ini melalui berbagai 
                                        media seperti aplikasi logo, sejarah UK Petra di media sosial, dan lain-lain. 
                                        Pada tahun 2020-2021, UK Petra menyelenggarakan berbagai program dan kegiatan untuk 
                                        menyambut perayaan ulang tahun ini seperti: 
                                    </p>
                                    <table style="color:#FFF">
                                        <tr>
                                          <td>1. Penerbitan 60+ buku karya sivitas akademika, </td>
                                        </tr>
                                        <tr>
                                          <td>2. Pembimbingan dan pemilihan 60 pre-startups,</td>
                                        </tr>
                                        <tr>
                                            <td>3. Seminar dan diskusi kebangsaan bersama para pemimpin daerah dan nasional,</td>
                                        </tr>
                                        <tr>
                                            <td>4. Berbagai konferensi ilmiah internasional,</td>
                                        </tr>
                                        <tr>
                                            <td>5. O.F. Patty Award untuk seni-budaya, Wasis Sastroredjo Cup untuk olahraga pegawai, 
                                                dan Jones Syaranamual Cup untuk olahraga mahasiswa,
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6. Pembuatan video pendek reka-ulang sejarah UK Petra</td>
                                        </tr>
                                    </table>
                                    <P class="pt-3">
                                        dan masih banyak lagi dari tiap fakultas, program studi, 
                                        program, dan unit di lingkungan UK Petra. Adanya pandemi Covid-19 menghasilkan 
                                        praktik-praktik baru dalam perayaan seperti virtual conference, 
                                        electronic sports, dan digital competition. 

                                    </P>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-3 container-img">

                        </div> --}}
                        <div class="col-1">
                            {{-- BUAT JARAK --}}
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col container-isi-yellow">
                    <div class="row">
                        <div class="col-2">
                            {{-- BUAT JARAK --}}
                        </div>
                        {{-- <div class="col-3 container-img">

                        </div> --}}
                        <div class="col-9 pt-4 pb-4 container-teks">
                            <div class="row">
                                <div class="col">
                                    <h1>Puncak Kegiatan TRTD</h1>
                                </div>
                            </div>
                            <div class="row pt-3">
                                <div class="col">
                                    <p>
                                        Puncaknya, pada awal tahun akademik 2021-2022, 
                                        Panitia TRTD mempersiapkan acara Dies Natalis ke 60 pada 
                                        tanggal 22 September 2021 nanti dan menghela 
                                        kegiatan-kegiatan pembukanya seperti Selebrasi & Bincang 60+ buku, 
                                        peluncuran pre-startups Super 60, web ucapan selamat, 
                                        60secondUptaker chalenge, talkshow, patung peringatan, dan lain-lain. 
                                    </p>
                                    <p class="pt-3">
                                        Segala kegiatan, segala kemuliaan, hanya bagi Dia.
                                    </p>
                                    <p class="pt-3">
                                        The Rock Turns Diamond!
                                    </p>
                                    <p>
                                        Delightful Petra, Delighted World
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div>
                </div>
            </div>
        </div>
    {{-- ---------------- --}}
    {{-- BUAT HP --}}
    <div class="container-fluid pb-5 ucapan-teks d-block d-md-none">
        <div class="row pt-5 title">
            <div class="col">
                <h1>Tentang TRTD</h1>
            </div>
            
        </div>
        <div class="row line-pink">
            <div class="col-6">
                <hr style="border: 2px solid; opacity: 5; color: #D02762;">
            </div>
        </div>
        <div class="row pt-4">
            <div class="col container-isi-blue">
                <div class="row">
                    <div class="col-1">
                        {{-- BUAT JARAK --}}
                    </div>
                    {{-- <div class="col-5 container-img">

                    </div> --}}
                    <div class="col-11 pt-5 container-teks">
                        <div class="row">
                            <div class="col">
                                <h1 style="font-size: 1.2rem">Sejarah TRTD</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col" style="text-align: justify">
                                <p style="font-size: 0.7rem">
                                    Pada tanggal 22 September 2021, UK Petra akan merayakan ulang tahunnya yang ke 60. 
                                    Perayaan ulang tahun ini bertajuk <span style="font-style: italic">The Rock Turns Diamond!</span> (TRTD). 
                                    Petra, Sang Batu Karang, mencapai ulang tahun berliannya. 
                                    Perayaan TRTD ini mengambil tema “<span style="font-style: italic">De<span style="font-weight:bold">light</span>ful Petra, De<span style="font-weight:bold">light</span>ed World </span>”. 
                                    Tema ini memiliki dua makna. Pertama, UK Petra yang penuh sukacita membuat dunia turut bergembira.  
                                    Tema ini juga berisi harapan UK Petra yang dipenuhi dengan nilai LIGHT dapat menyemai nilai-nilai 
                                    tersebut di dalam masyarakat melalui pengajaran, penelitian, dan pengabdiannya.
                                </p>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
        </div>
        <div class="row pt-4">
            <div class="col container-isi-pink" style="text-align: justify">
                <div class="row">
                    <div class="col-1">
                        {{-- BUAT JARAK --}}
                    </div>
                    <div class="col-11 pt-5 container-teks">
                        <div class="row">
                            <div class="col">
                                <h1 style="font-size: 1.2rem">
                                    Bentuk Kegiatan TRTD
                                </h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p >
                                    <p style="font-size: 0.7rem">
                                        Perayaan 60 tahun ini dibagi menjadi tiga tahap, yaitu tahun persiapan (2019-2020), 
                                        tahun penyambutan (2020-2021), dan tahun perayaan (2021-2022). 
                                        Sepanjang 2019-2020, Panitia TRTD mengkampanyekan perayaan dan tema ini melalui berbagai 
                                        media seperti aplikasi logo, sejarah UK Petra di media sosial, dan lain-lain. 
                                        Pada tahun 2020-2021, UK Petra menyelenggarakan berbagai program dan kegiatan untuk 
                                        menyambut perayaan ulang tahun ini seperti: 
                                    </p>
                                    <table style="color:#FFF;font-size: 0.7rem" >
                                        <tr>
                                          <td>1. Penerbitan 60+ buku karya sivitas akademika, </td>
                                        </tr>
                                        <tr>
                                          <td>2. Pembimbingan dan pemilihan 60 pre-startups,</td>
                                        </tr>
                                        <tr>
                                            <td>3. Seminar dan diskusi kebangsaan bersama para pemimpin daerah dan nasional,</td>
                                        </tr>
                                        <tr>
                                            <td>4. Berbagai konferensi ilmiah internasional,</td>
                                        </tr>
                                        <tr>
                                            <td>5. O.F. Patty Award untuk seni-budaya, Wasis Sastroredjo Cup untuk olahraga pegawai, 
                                                dan Jones Syaranamual Cup untuk olahraga mahasiswa,
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6. Pembuatan video pendek reka-ulang sejarah UK Petra</td>
                                        </tr>
                                    </table>
                                    <P class="pt-3" style="font-size: 0.7rem">
                                        dan masih banyak lagi dari tiap fakultas, program studi, 
                                        program, dan unit di lingkungan UK Petra. Adanya pandemi Covid-19 menghasilkan 
                                        praktik-praktik baru dalam perayaan seperti virtual conference, 
                                        electronic sports, dan digital competition. 

                                    </P>
                                </p>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-5 container-img">

                    </div> --}}
                    {{-- <div class="col-1">
                        {{-- BUAT JARAK 
                    </div> --}}
                    
                </div>
            </div>
        </div>
        <div class="row pt-4 pb-4">
            <div class="col container-isi-yellow">
                <div class="row">
                    <div class="col-1">
                        {{-- BUAT JARAK --}}
                    </div>
                    {{-- <div class="col-5 container-img">

                    </div> --}}
                    <div class="col-11 pt-5 container-teks">
                        <div class="row">
                            <div class="col">
                                <h1 style="font-size: 1.2rem">Puncak Kegiatan TRTD</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p style="font-size: 0.7rem">
                                    Puncaknya, pada awal tahun akademik 2021-2022, 
                                    Panitia TRTD mempersiapkan acara Dies Natalis ke 60 pada 
                                    tanggal 22 September 2021 nanti dan menghela 
                                    kegiatan-kegiatan pembukanya seperti Selebrasi & Bincang 60+ buku, 
                                    peluncuran pre-startups Super 60, web ucapan selamat, 
                                    60secondUptaker chalenge, talkshow, patung peringatan, dan lain-lain. 
                                </p>
                                <p class="pt-3" style="font-size: 0.7rem">
                                    Segala kegiatan, segala kemuliaan, hanya bagi Dia.
                                </p>
                                <p class="pt-3" style="font-size: 0.7rem">
                                    The Rock Turns Diamond!
                                </p>
                                <p style="font-size: 0.7rem">
                                    Delightful Petra, Delighted World
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    {{-- ---------------- --}}
    

   

</div>







    
@endsection

@section('js')

@endsection