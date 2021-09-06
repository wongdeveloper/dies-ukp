@extends('layouts.app-en')

@section('title')
    ABOUT | TRTD UKP 60th
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
            background-color: #db880a !important;
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
                    <h1>About TRTD</h1>
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
                                    <h1>The Meaning of TRTD</h1>
                                </div>
                            </div>
                            <div class="row pt-3">
                                <div class="col" style="text-align: justify">
                                    <p>
                                        On September 22, 2021. Petra Christian University (PCU) will celebrate
                                        it's 60th anniversary. This celebration is entitled The Rock Turns Diamond
                                        (TRTD). Petra, the Rock, comes to it's diamond anniversary. TRTD celebration takes 
                                        "Delightful Petra, Delighted World" as it's theme. This theme has two meanings. First,
                                        PCU is joyful and makes the world feel this joy. This theme also has hopes that 
                                        PCU that lives the LIGHT values can also sow the values into the society through teaching-learning, 
                                        research, and community outreach programs.
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
                                    <h1>Forms of TRTD Programs</h1>
                                </div>
                            </div>
                            <div class="row pt-3">
                                <div class="col" style="text-align: justify">
                                    <p>
                                        This 60th anniversary celebration consists of three stages,namely preparation years (2019-2020), welcoming years (2020-2021), and celebration years (2021-2022).
                                        Throughout 2019-2020, TRTD Commitee made a campaign about the celebration and it's theme through various media such as logo application, PCU history on social media, and others.
                                        In 2020-2021, PCU is holding diverse programs to welcome the anniversary, such as :
                                    </p>
                                    <table style="color:#FFF">
                                        <tr>
                                          <td>1. Publications of 60+ books of the civitas academica.</td>
                                        </tr>
                                        <tr>
                                          <td>2. Coaching and choosing 60 pre-startups,</td>
                                        </tr>
                                        <tr>
                                            <td>3. Seminar and discussion about nation and nationalism with the local and nationals leaders,</td>
                                        </tr>
                                        <tr>
                                            <td>4. Various international conferences,</td>
                                        </tr>
                                        <tr>
                                            <td>5. O.F. Patty Award for culture-arts category. Wasis Sastroedjo Cup for employees sprorts competition, and Jones Syaranamual Cup for students sports competition.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6. Short video making for PCU's history</td>
                                        </tr>
                                    </table>
                                    <P class="pt-3">
                                        and many other programs from each Faculty, Study Program, and Units in PCU. The spread of Covid-19 has produced new practices in this celebration such as virtual confrences, eletronic sports, and digital competition.
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
                                    <h1>The Peak of TRTD Celebration</h1>
                                </div>
                            </div>
                            <div class="row pt-3">
                                <div class="col">
                                    <p>
                                        The Committe has prepared the peak of this 60th anniversary celebration on the beginning of academic year 2021/2022, exactly on September 22, 2021. It is started with opening programs such as Celebration and Talk on 60+ books,
                                        pre-Startups Super 60 launching, wishes website, 60secondUptaker challenge, talkshow, commemoration statue, and others. 
                                    </p>
                                    <p class="pt-3">
                                        All programs, all glory to Him.
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
                                        On September 22, 2021. Petra Christian University (PCU) will celebrate
                                        it's 60th anniversary. This celebration is entitled The Rock Turns Diamond
                                        (TRTD). Petra, the Rock, comes to it's diamond anniversary. TRTD celebration takes 
                                        "Delightful Petra, Delighted World" as it's theme. This theme has two meanings. First,
                                        PCU is joyful and makes the world feel this joy. This theme also has hopes that 
                                        PCU that lives the LIGHT values can also sow the values into the society through teaching-learning, 
                                        research, and community outreach programs.
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
                                    Forms of TRTD Programs
                                </h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p >
                                    <p style="font-size: 0.7rem">
                                        This 60th anniversary celebration consists of three stages,namely preparation years (2019-2020), welcoming years (2020-2021), and celebration years (2021-2022).
                                        Throughout 2019-2020, TRTD Commitee made a campaign about the celebration and it's theme through various media such as logo application, PCU history on social media, and others.
                                        In 2020-2021, PCU is holding diverse programs to welcome the anniversary, such as :
                                    </p>
                                    <table style="color:#FFF;font-size: 0.7rem" >
                                        <tr>
                                          <td>1. Publications of 60+ books of the civitas academica.</td>
                                        </tr>
                                        <tr>
                                          <td>2. Coaching and choosing 60 pre-startups,</td>
                                        </tr>
                                        <tr>
                                            <td>3. Seminar and discussion about nation and nationalism with the local and nationals leaders,</td>
                                        </tr>
                                        <tr>
                                            <td>4. Various international conferences,</td>
                                        </tr>
                                        <tr>
                                            <td>5. O.F. Patty Award for culture-arts category. Wasis Sastroedjo Cup for employees sprorts competition, and Jones Syaranamual Cup for students sports competition.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6. Short video making for PCU's history</td>
                                        </tr>
                                    </table>
                                    <P class="pt-3" style="font-size: 0.7rem">
                                        and many other programs from each Faculty, Study Program, and Units in PCU. The spread of Covid-19 has produced new practices in this celebration such as virtual confrences, eletronic sports, and digital competition.
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
                                <h1 style="font-size: 1.2rem">The Peak of TRTD Celebration</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p style="font-size: 0.7rem">
                                    The Committe has prepared the peak of this 60th anniversary celebration on the beginning of academic year 2021/2022, exactly on September 22, 2021. It is started with opening programs such as Celebration and Talk on 60+ books,
                                    pre-Startups Super 60 launching, wishes website, 60secondUptaker challenge, talkshow, commemoration statue, and others.
                                </p>
                                <p class="pt-3" style="font-size: 0.7rem">
                                    All programs, all glory to Him.
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