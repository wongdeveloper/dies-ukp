<style>
    #header-profile {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        position: relative;
        overflow: hidden;
    }
    .haft-btn{
        cursor: pointer;
        background-color: #D02762 !important;
        border: 1px solid white !important;
        color: white !important;
    }
    .haft-btn:hover{
        cursor: pointer;
        background-color: white !important;
        border: 1px solid #D02762 !important;
        color: #D02762 !important;
    }
    #header-profile img {
        max-width: fit-content;
        max-height: 50px;
        width: auto;
        height: auto;
        position: absolute;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }
</style>
<div class="app-header__logo" style="background-color:#1B325E" >
    <div class="d-flex justify-content-center align-items-center">
        
        <!-- <img src="#" class="logo-src" height="auto" width="150" alt=""> -->
    </div>
    
    <div class="header__pane ml-auto">
        <div>
            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic is-active" data-class="closed-sidebar" style="color:black"> 
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
</div>
<div class="app-header__mobile-menu" style="background-color:#1B325E">
    <div>
        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav" style="color:black">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
    </div>
</div>
<div class="app-header__menu" style="background-color:#1B325E">
    <span>
        <div class="widget-content m-0 p-0">
            <a href="#" class="btn-shadow p-2 btn  btn-sm" title="Logout" id="logout" style="background-color:white; color:black;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-closed" viewBox="0 0 16 16">
                    <path d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2zm1 13h8V2H4v13z"/>
                    <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0z"/>             
                </svg>
            </a>
        </div>
    </span>
</div>
<div class="app-header__content" style="background-color:#1B325E">
    <div class="app-header-right">
        <div class="header-btn-lg pr-0">
            <div class="widget-content p-0">
                <div class="widget-content-wrapper">
                    <div class="widget-content-right ml-3">
                        <a href="#" class="p-2 btn haft-btn" title="Logout" id="logout" style="">
                            Keluar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>