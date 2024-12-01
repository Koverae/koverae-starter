
<nav class="navbar navbar-expand-md w-100 navbar-light d-block d-print-none k-sticky">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
                
        <!-- Logo -->
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href="{{ Route::subdomainRoute('dashboard') }}" wire:navigate>
                <i class="bi bi-chevron-left icon"></i>
                <img src="{{ asset('assets/images/apps/'.current_module()->icon.'.png') }}" alt="Ndako Logo" class="rounded navbar-brand-image logo">
                {{ current_module()->short_name }}
            </a>
        </h1>
        <!-- Logo End -->
        
        <!-- Navbar Buttons -->
        <div class="flex-row navbar-nav order-md-last">
            <div class="d-md-flex d-flex">
                <!-- Translate -->
                <div class="nav-item dropdown d-md-flex me-3">
                    <a href="#" class="px-0 nav-link" data-bs-toggle="dropdown" id="dropdownMenuButton" title="Translate" data-bs-toggle="tooltip" data-bs-placement="bottom">
                        <i class="bi bi-translate" style="font-size: 16px;"></i>
                    </a>
                </div>
                <!-- Translate End -->
                <!-- Chat & Notifications -->
                <div class="nav-item dropdown d-none d-md-flex me-3">
                    <a href="#" class="px-0 nav-link" data-bs-toggle="dropdown" id="dropdownMenuButton" title="Show notifications" data-bs-toggle="tooltip" data-bs-placement="bottom">
                        <i class="bi bi-chat" style="font-size: 16px;"></i>
                        <span class="badge bg-green"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                        <div class="card">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="border-0 nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">All</button>
                            <button class="border-0 nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Chats</button>
                            <button class="border-0 nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Alerts</button>
                            </div>
                            <div class="tab-content" style="width: 500px;">
                                <!-- ALL -->
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="list-group list-group-flush list-group-hoverable">
                                        <div class="list-group-item">
                                            <div class="row align-items-center">
                                                <div class="col-auto"><span class="status-dot status-dot-animated bg-red d-block"></span></div>
                                                <div class="col text-truncate">
                                                    <a href="#" class="text-body d-block">Example 1</a>
                                                    <div class="d-block text-muted text-truncate mt-n1">
                                                        Change deprecated html tags to text decoration classes (#29604)
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="list-group-item-actions">
                                                    <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="row align-items-center">
                                                <img src="{{asset('assets/images/illustrations/kwame-bot/kwame-2.svg')}}" class=" rounded-circle" style="width: 70px; height: 70px;" alt="image">
                                                <div class="col text-truncate">
                                                    <a href="#" class="text-body d-block">Example 1</a>
                                                    <div class="d-block text-muted text-truncate mt-n1">
                                                        Change deprecated html tags to text decoration classes (#29604)
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="list-group-item-actions">
                                                    <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- CHATS -->
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="list-group list-group-flush list-group-hoverable">
                                    <div class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col-auto"><span class="status-dot status-dot-animated bg-red d-block"></span></div>
                                            <div class="col text-truncate">
                                                <a href="#" class="text-body d-block">Example 1</a>
                                                <div class="d-block text-muted text-truncate mt-n1">
                                                    Change deprecated html tags to text decoration classes (#29604)
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#" class="list-group-item-actions">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- CHANNEL -->
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="list-group list-group-flush list-group-hoverable">
                                    <div class="list-group-item">
                                        <div class="row align-items-center">
                                            <img src="{{asset('assets/images/illustrations/kwame-bot/kwame-2.svg')}}" class=" rounded-circle" style="width: 70px; height: 70px;" alt="image">
                                            <div class="col text-truncate">
                                                <a href="#" class="text-body d-block">Example 1</a>
                                                <div class="d-block text-muted text-truncate mt-n1">
                                                    Change deprecated html tags to text decoration classes (#29604)
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#" class="list-group-item-actions">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Chat & Notifications End -->

                <!-- User's Avatar -->
                <div class="nav-item dropdown">
                    <a href="#" class="p-0 nav-link d-flex lh-1 text-reset" data-bs-toggle="dropdown" aria-label="Open user menu">
                        <span class="avatar avatar-sm" style="background-image: url(./assets/images/default/avatar-1.png)"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <a href="#" class="dropdown-item kover-navlink">Documentation</a>
                        <a href="#" class="dropdown-item kover-navlink divider">Support</a>
                        <a href="#" class="dropdown-item kover-navlink">Dark Mode</a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item kover-navlink">My Preferences</a>
                        <a href="#" class="dropdown-item kover-navlink">My Databases</a>
                        <a href="#" class="dropdown-item kover-navlink">My Subscription</a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item kover-navlink">Install the App</a>
                        <!-- Authentication -->
                        <form method="POST" action="{{ Route::subdomainRoute('logout')}}">
                            @csrf
                            <span  onclick="event.preventDefault(); this.closest('form').submit();" class="cursor-pointer kover-navlink dropdown-item">
                                Log Out
                            </span>
                        </form>
                        <!-- Authentication End -->
                    </div>
                </div>
                <!-- User's Avatar End -->
            </div>
        </div>
        <!-- Navbar Buttons End -->

        <!-- Navbar Menu -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
                <ul class="navbar-nav">
                    <!-- Navbar Menu -->
                    <livewire:app::navbar.navbar-manager :key="time()" :menu="request('menu')" />
                    <!-- Navbar Menu -->
                </ul>
            </div>
        </div>
        <!-- Navbar Menu End -->

    </div>

    <!-- Controls Panel -->
    <!-- Controls Panel End -->

</nav>