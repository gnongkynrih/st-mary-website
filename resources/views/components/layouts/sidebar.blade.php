<aside class="w-64 h-screen bg-gray-800 text-white flex flex-col shadow-lg">
    <div class="p-6 text-2xl font-bold border-b border-gray-700">
        Admin Menu
    </div>
    <nav class="flex-1 p-4">
        <ul class="space-y-2">
            <li>
                <a href="/" class="block px-4 py-2 rounded hover:bg-gray-700 {{ request()->is('/') ? 'bg-gray-700' : '' }}">
                    Home
                </a>
            </li>
            <li>
                <a href="{{ route('about-us') }}" class="block px-4 py-2 rounded hover:bg-gray-700 {{ request()->routeIs('about-us') ? 'bg-gray-700' : '' }}">
                    About Us
                </a>
            </li>
            <li>
                <a href="{{ route('contact-us') }}" class="block px-4 py-2 rounded hover:bg-gray-700 {{ request()->routeIs('contact-us') ? 'bg-gray-700' : '' }}">
                    Contact Us
                </a>
            </li>
            <li class="mt-4 border-t border-gray-700 pt-4 text-gray-400 text-xs uppercase">Admin</li>
            <li>
                <a href="{{ route('admin.hero-slider-management') }}" class="block px-4 py-2 rounded hover:bg-gray-700 {{ request()->routeIs('admin.hero-slider-management') ? 'bg-gray-700' : '' }}">
                    Hero Slider Management
                </a>
            </li>
            <li>
                <a href="{{ route('admin.service-management') }}" class="block px-4 py-2 rounded hover:bg-gray-700 {{ request()->routeIs('admin.service-management') ? 'bg-gray-700' : '' }}">
                    Service Management
                </a>
            </li>
            <li>
                <a href="{{ route('admin.about-management') }}" class="block px-4 py-2 rounded hover:bg-gray-700 {{ request()->routeIs('admin.about-management') ? 'bg-gray-700' : '' }}">
                    About Management
                </a>
            </li>
            
            <li>
                <a href="{{ route('logout') }}" class="block px-4 py-2 rounded hover:bg-gray-700 {{ request()->routeIs('logout') ? 'bg-gray-700' : '' }}">
                    Logout
                </a>
            </li>
        </ul>
    </nav>
</aside>
