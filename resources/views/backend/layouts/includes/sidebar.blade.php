<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('backend') }}/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Syndron</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{route('dashboard')}}">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
       
        <li class="menu-label">Workflow</li>
        <li>
            <a href="{{route('organizations.index')}}">
                <div class="parent-icon"><i class='bx bx-list-ol'></i>
                </div>
                <div class="menu-title">Organizations</div>
            </a>
        </li>
        <li>
            <a href="{{route('products.index')}}">
                <div class="parent-icon"><i class='bx bx-category'></i>
                </div>
                <div class="menu-title">Products</div>
            </a>
        </li>
        <li>
            <a href="{{route('purchases.index')}}">
                <div class="parent-icon"><i class='bx bx-arrow-to-right
'></i>
                </div>
                <div class="menu-title">Purchases</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>