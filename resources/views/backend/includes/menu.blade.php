<div class="leftside-menu">

    <!-- LOGO -->
    <a href="{{ route('dashboard') }}" class="logo text-center logo-light">
        <span class="logo-lg">
            <img src="{{ asset('/') }}backend/assets/images/logo.png" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('/') }}backend/assets/images/logo_sm.png" alt="" height="16">
        </span>
    </a>

    <!-- LOGO -->
    <a href="{{ route('dashboard') }}" class="logo text-center logo-dark">
        <span class="logo-lg">
            <img src="{{ asset('/') }}backend/assets/images/logo-dark.png" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('/') }}backend/assets/images/logo_sm_dark.png" alt="" height="16">
        </span>
    </a>

    <div class="h-100" id="leftside-menu-container" data-simplebar>

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title side-nav-item">Menu Options</li>
            <li class="side-nav-item {{ request()->is('dashboard') ? 'menuitem-active' : '' }}">
                <a href="{{ route('dashboard') }}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Dashboard </span>
                </a>
            </li>

            <li class="side-nav-title side-nav-item">Only for admin</li>
         
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#Tv" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span>Tv</span>
                </a>
                <div class="collapse" id="Tv">
                    <ul class="side-nav-second-level">
                        

                        {{-- <li>
                            <a data-bs-toggle="collapse" href="#tv" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span>Tv</span>
                            </a> --}}
                            {{-- <div class="collapse" id="tv">
                            <ul class="side-nav-third-level"> --}}
                                <li>
                                    <a href="{{route('manage-tv')}}">Manage Tv Info</a>
                                </li>
                            {{-- </ul>
                            </div> --}}
                        {{-- </li> --}}

                        
                       
                    </ul>
                </div>

{{--                
                       </ul>
                </div>
            </li> --}}


            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#PNP" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span>Print News Paper</span>
                </a>
                <div class="collapse" id="PNP">
                    <ul class="side-nav-second-level">
                        

                        {{-- <li>
                            <a data-bs-toggle="collapse" href="#pnp" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span>Print News Paper</span>
                            </a> --}}
                            {{-- <div class="collapse" id="pnp">
                            <ul class="side-nav-third-level"> --}}
                                <li>
                                    <a href="{{route('manage-print-news-paper')}}">Manage Print News Paper Info</a>
                                </li>
                            {{-- </ul>
                            </div> --}}
                        {{-- </li> --}}

                        
                       
                    </ul>
                </div>

{{--                
                       </ul>
                </div>
            </li> --}}


            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#ONP" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span>Online News Paper</span>
                </a>
                <div class="collapse" id="ONP">
                    <ul class="side-nav-second-level">
                        

                        {{-- <li>
                            <a data-bs-toggle="collapse" href="#onp" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span>Online News Paper</span>
                            </a> --}}
                            {{-- <div class="collapse" id="onp">
                            <ul class="side-nav-third-level"> --}}
                                <li>
                                    <a href="{{route('manage-online-news-paper')}}">Manage Online News Paper Info</a>
                                </li>
                            {{-- </ul>
                            </div> --}}
                        {{-- </li> --}}

                        
                       
                    </ul>
                </div>

{{--                
                       </ul>
                </div>
            </li> --}}


          





 
          


            
                         


                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#TVN" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                            <i class="uil-home-alt"></i>
                            <span>Institute Type Name</span>
                        </a>
                        <div class="collapse" id="TVN">
                            <ul class="side-nav-second-level">
                                
        
                                {{-- <li>
                                    <a data-bs-toggle="collapse" href="#tvn" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                                        <i class="uil-home-alt"></i>
                                        <span>Tv Name</span>
                                    </a> --}}
                                    {{-- <div class="collapse" id="">
                                    <ul class="side-nav-third-level"> --}}
                                        <li>
                                            <a href="{{route('institute-type-name-info.create')}}">Add Institute Type Name Info</a>
                                            <a href="{{route('institute-type-name-info.index')}}"> Manage Institute Type Name Info</a>
        
                                        </li>
                                    {{-- </ul>
                                    </div> --}}
                                {{-- </li> --}}
        
                                
                               
                            </ul>
                        </div>


                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#IN" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span>Institute Name</span>
                            </a>
                            <div class="collapse" id="IN">
                                <ul class="side-nav-second-level">
                                    
            
                                    {{-- <li>
                                        <a data-bs-toggle="collapse" href="#tvn" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                                            <i class="uil-home-alt"></i>
                                            <span>Tv Name</span>
                                        </a> --}}
                                        {{-- <div class="collapse" id="">
                                        <ul class="side-nav-third-level"> --}}
                                            <li>
                                                <a href="{{route('institute-name-info.create')}}">Add Institute  Name Info</a>
                                                <a href="{{route('institute-name-info.index')}}"> Manage Institute  Name Info</a>
            
                                            </li>
                                        {{-- </ul>
                                        </div> --}}
                                    {{-- </li> --}}
            
                                    
                                   
                                </ul>
                            </div>

                            <li class="side-nav-item">
                                <a data-bs-toggle="collapse" href="#VN" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                                    <i class="uil-home-alt"></i>
                                    <span>Version Name</span>
                                </a>
                                <div class="collapse" id="VN">
                                    <ul class="side-nav-second-level">
                                        
                
                                        {{-- <li>
                                            <a data-bs-toggle="collapse" href="#tvn" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                                                <i class="uil-home-alt"></i>
                                                <span>Tv Name</span>
                                            </a> --}}
                                            {{-- <div class="collapse" id="">
                                            <ul class="side-nav-third-level"> --}}
                                                <li>
                                                    <a href="{{route('version-name-info.create')}}">Add Version Name Info</a>
                                                    <a href="{{route('version-name-info.index')}}"> Manage Version  Name Info</a>
                
                                                </li>
                                            {{-- </ul>
                                            </div> --}}
                                        {{-- </li> --}}
                
                                        
                                       
                                    </ul>
                                </div>


                                <li class="side-nav-item">
                                    <a data-bs-toggle="collapse" href="#PN" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                                        <i class="uil-home-alt"></i>
                                        <span>Page Name</span>
                                    </a>
                                    <div class="collapse" id="PN">
                                        <ul class="side-nav-second-level">
                                            
                    
                                            {{-- <li>
                                                <a data-bs-toggle="collapse" href="#tvn" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                                                    <i class="uil-home-alt"></i>
                                                    <span>Tv Name</span>
                                                </a> --}}
                                                {{-- <div class="collapse" id="">
                                                <ul class="side-nav-third-level"> --}}
                                                    <li>
                                                        <a href="{{route('page-name-info.create')}}">Add Page Name Info</a>
                                                        <a href="{{route('page-name-info.index')}}"> Manage Page Name Info</a>
                    
                                                    </li>
                                                {{-- </ul>
                                                </div> --}}
                                            {{-- </li> --}}
                    
                                            
                                           
                                        </ul>
                                    </div>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#Price" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span>Price</span>
                            </a>
                            <div class="collapse" id="Price">
                                <ul class="side-nav-second-level">
                                    
            
                                    {{-- <li>
                                        <a data-bs-toggle="collapse" href="#tvp" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                                            <i class="uil-home-alt"></i>
                                            <span>Tv Price</span>
                                        </a> --}}
                                        {{-- <div class="collapse" id="tvp">
                                        <ul class="side-nav-third-level"> --}}
                                            <li>
                                                <a href="{{route('price-info.create')}}">Add Price Info</a>
                                                <a href="{{route('price-info.index')}}">Manage Price Info</a>
            
                                            </li>
                                        {{-- </ul>
                                        </div> --}}
                                    {{-- </li>
             --}}
                                    
                                   
                                </ul>
                            </div>

                            
                       </ul>
                    </div>
                </li> 

        </ul>

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
