<!-- Header -->
    <header id="main-header" class="fixed top-0 left-0 w-full z-50 transition-all duration-300 bg-transparent py-5">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-green-500 bg-clip-text text-transparent">
                DevFolio
            </a>

            <!-- Desktop Nav -->
            <nav class="hidden md:flex space-x-8">
                <a href="#home" class="text-sm font-medium text-gray-800 hover:text-blue-600 transition-colors">Home</a>
                <a href="#about" class="text-sm font-medium text-gray-800 hover:text-blue-600 transition-colors">About</a>
                <a href="#services" class="text-sm font-medium text-gray-800 hover:text-blue-600 transition-colors">Services</a>
                <a href="#skills" class="text-sm font-medium text-gray-800 hover:text-blue-600 transition-colors">Skills</a>
                <a href="#projects" class="text-sm font-medium text-gray-800 hover:text-blue-600 transition-colors">Projects</a>
                <a href="#contact" class="text-sm font-medium text-gray-800 hover:text-blue-600 transition-colors">Contact</a>
            </nav>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="md:hidden text-gray-800">
                <i data-lucide="menu"></i>
            </button>
        </div>

        <!-- Mobile Nav Menu (Hidden by default) -->
        <div id="mobile-menu" class="hidden absolute top-full left-0 w-full bg-white shadow-lg flex flex-col items-center py-6 space-y-4 md:hidden">
            <a href="#home" class="text-gray-800 font-medium hover:text-blue-600">Home</a>
            <a href="#about" class="text-gray-800 font-medium hover:text-blue-600">About</a>
            <a href="#services" class="text-gray-800 font-medium hover:text-blue-600">Services</a>
            <a href="#skills" class="text-gray-800 font-medium hover:text-blue-600">Skills</a>
            <a href="#projects" class="text-gray-800 font-medium hover:text-blue-600">Projects</a>
            <a href="#contact" class="text-gray-800 font-medium hover:text-blue-600">Contact</a>
        </div>
    </header>