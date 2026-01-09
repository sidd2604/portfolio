<!DOCTYPE html>
<html lang="en">
@include('common.head')
<body class="font-sans antialiased text-gray-900 bg-white">

    @include('common.header')

    <!-- Hero Section -->
    <section id="home" class="relative min-h-screen flex items-center pt-20 overflow-hidden">
        <!-- Background Decor -->
        <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-bl from-blue-50 to-green-50 -z-10 rounded-bl-full opacity-50"></div>
        
        <div class="container mx-auto px-6 flex flex-col-reverse md:flex-row items-center gap-12">
            <!-- Text Content -->
            <div class="flex-1 space-y-6 text-center md:text-left">
                <div class="inline-block px-4 py-1.5 bg-blue-100 text-blue-700 rounded-full text-sm font-semibold mb-2">
                    Available for Freelance Projects
                </div>
                <h1 class="text-4xl md:text-6xl font-bold text-gray-900 leading-tight">
                    Crafting Digital <br />
                    <span class="bg-gradient-to-r from-blue-600 to-green-500 bg-clip-text text-transparent">
                        Masterpieces
                    </span>
                </h1>
                <p class="text-lg text-gray-600 max-w-lg mx-auto md:mx-0">
                    I build high-performance websites, mobile apps, and desktop software. 
                    Expert in SEO and full-stack development.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                    <a href="#contact" class="px-8 py-3 bg-gradient-to-r from-blue-600 to-green-500 text-white rounded-lg font-medium shadow-lg hover:shadow-xl hover:scale-105 transition-all flex items-center justify-center gap-2">
                        Start a Project <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                    <a href="#projects" class="px-8 py-3 bg-white text-gray-800 border border-gray-200 rounded-lg font-medium hover:bg-gray-50 transition-all shadow-sm">
                        View Portfolio
                    </a>
                </div>
            </div>

            <!-- Image Content -->
            <div class="flex-1 relative">
                <div class="relative z-10 rounded-2xl overflow-hidden shadow-2xl transform hover:scale-[1.02] transition-transform duration-500">
                    <img src="https://images.unsplash.com/photo-1707528041466-83a325f01a3c" alt="Modern Workspace" class="w-full h-full object-cover"/>
                </div>
                <!-- Floating Card -->
                <div class="absolute -bottom-6 -left-6 bg-white p-4 rounded-xl shadow-lg z-20 hidden md:block animate-bounce" style="animation-duration: 3s;">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center text-green-600">
                            <span class="font-bold">5+</span>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500">Years Experience</p>
                            <p class="font-bold text-gray-800">Professional</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center gap-16">
                <div class="flex-1 relative order-2 md:order-1">
                    <div class="relative z-10 rounded-2xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1546514714-df0ccc50d7bf" alt="Developer working" class="w-full h-auto object-cover"/>
                    </div>
                    <div class="absolute -top-6 -left-6 w-24 h-24 bg-blue-100 rounded-full -z-0 opacity-50"></div>
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-green-100 rounded-full -z-0 opacity-50"></div>
                </div>
                
                <div class="flex-1 order-1 md:order-2">
                    <h4 class="text-blue-600 font-bold mb-2 uppercase tracking-wider">About Me</h4>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                        I Create Digital Solutions That <span class="text-blue-600">Solve Problems</span>
                    </h2>
                    <p class="text-gray-600 mb-6 leading-relaxed text-lg">
                        Hello! I'm a passionate Full Stack Developer with a knack for building efficient, scalable, and user-friendly applications. With a strong foundation in both frontend and backend technologies, I bridge the gap between design and functionality.
                    </p>
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        Whether you need a sleek portfolio, a complex e-commerce platform, or a custom internal tool, I have the skills to deliver high-quality results. I pride myself on clean code, modern design patterns, and excellent communication.
                    </p>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="flex items-center gap-2"><i data-lucide="check-circle" class="text-green-500 w-5 h-5"></i><span class="text-gray-700 font-medium">Full Stack Development</span></div>
                        <div class="flex items-center gap-2"><i data-lucide="check-circle" class="text-green-500 w-5 h-5"></i><span class="text-gray-700 font-medium">UI/UX Design</span></div>
                        <div class="flex items-center gap-2"><i data-lucide="check-circle" class="text-green-500 w-5 h-5"></i><span class="text-gray-700 font-medium">Database Management</span></div>
                        <div class="flex items-center gap-2"><i data-lucide="check-circle" class="text-green-500 w-5 h-5"></i><span class="text-gray-700 font-medium">API Integration</span></div>
                        <div class="flex items-center gap-2"><i data-lucide="check-circle" class="text-green-500 w-5 h-5"></i><span class="text-gray-700 font-medium">SEO Optimization</span></div>
                        <div class="flex items-center gap-2"><i data-lucide="check-circle" class="text-green-500 w-5 h-5"></i><span class="text-gray-700 font-medium">Responsive Design</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">My Services</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-blue-600 to-green-500 mx-auto rounded-full"></div>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto">
                    I offer a comprehensive range of digital services to help your business grow and succeed online.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Service 1 -->
                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <div class="w-14 h-14 rounded-lg flex items-center justify-center mb-6 text-blue-600 bg-blue-50 group-hover:scale-110 transition-transform">
                        <i data-lucide="code" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Web Development</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Custom websites built with HTML, Tailwind, React, or Laravel. Fast, responsive, and SEO-friendly.
                    </p>
                </div>
                <!-- Service 2 -->
                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <div class="w-14 h-14 rounded-lg flex items-center justify-center mb-6 text-green-600 bg-green-50 group-hover:scale-110 transition-transform">
                        <i data-lucide="smartphone" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Mobile Apps</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Native and cross-platform mobile applications using React Native. iOS and Android compatible.
                    </p>
                </div>
                <!-- Service 3 -->
                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <div class="w-14 h-14 rounded-lg flex items-center justify-center mb-6 text-purple-600 bg-purple-50 group-hover:scale-110 transition-transform">
                        <i data-lucide="monitor" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Desktop Apps</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Powerful desktop applications built with Electron. Cross-platform solutions for Windows and macOS.
                    </p>
                </div>
                <!-- Service 4 -->
                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <div class="w-14 h-14 rounded-lg flex items-center justify-center mb-6 text-orange-600 bg-orange-50 group-hover:scale-110 transition-transform">
                        <i data-lucide="search" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">SEO Optimization</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Improve your ranking on Google. Technical SEO, content strategy, and performance optimization.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20 bg-white relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0 opacity-5">
            <img src="https://images.unsplash.com/photo-1644088379091-d574269d422f" alt="bg" class="w-full h-full object-cover" />
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="flex flex-col md:flex-row gap-16 items-center">
                <div class="flex-1">
                     <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Technical Expertise</h2>
                     <p className="text-gray-600 mb-8 leading-relaxed">
                       I have invested years in mastering the modern web stack. From building responsive layouts with HTML/CSS to creating complex backend logic with PHP and MySQL, I have the tools to bring any idea to life.
                     </p>
                     <div class="grid grid-cols-2 gap-4">
                        <div class="p-4 bg-blue-50 rounded-lg border border-blue-100">
                          <h4 class="font-bold text-blue-800">Frontend</h4>
                          <p class="text-sm text-blue-600">React, Tailwind, Next.js</p>
                        </div>
                        <div class="p-4 bg-green-50 rounded-lg border border-green-100">
                          <h4 class="font-bold text-green-800">Backend</h4>
                          <p class="text-sm text-green-600">PHP, Laravel, MySQL</p>
                        </div>
                        <div class="p-4 bg-purple-50 rounded-lg border border-purple-100">
                          <h4 class="font-bold text-purple-800">Apps</h4>
                          <p class="text-sm text-purple-600">React Native, Electron</p>
                        </div>
                     </div>
                </div>

                <div class="flex-1 w-full">
                    <div class="flex flex-wrap gap-4">
                        <!-- Skill Card: HTML5 -->
                        <div class="px-6 py-3 rounded-xl bg-orange-50 text-orange-700 font-bold shadow-sm border border-orange-100 hover:bg-gradient-to-r hover:from-orange-500 hover:to-red-500 hover:text-white hover:shadow-lg hover:-translate-y-1 transition-all duration-300 cursor-default">
                            <span class="flex items-center gap-2"><i data-lucide="file-code-2" class="w-4 h-4"></i> HTML5</span>
                        </div>
                        
                        <!-- Skill Card: CSS3 -->
                        <div class="px-6 py-3 rounded-xl bg-blue-50 text-blue-700 font-bold shadow-sm border border-blue-100 hover:bg-gradient-to-r hover:from-blue-500 hover:to-cyan-500 hover:text-white hover:shadow-lg hover:-translate-y-1 transition-all duration-300 cursor-default">
                            <span class="flex items-center gap-2"><i data-lucide="palette" class="w-4 h-4"></i> CSS3</span>
                        </div>

                        <!-- Skill Card: JavaScript -->
                        <div class="px-6 py-3 rounded-xl bg-yellow-50 text-yellow-700 font-bold shadow-sm border border-yellow-100 hover:bg-gradient-to-r hover:from-yellow-400 hover:to-orange-500 hover:text-white hover:shadow-lg hover:-translate-y-1 transition-all duration-300 cursor-default">
                            <span class="flex items-center gap-2"><i data-lucide="file-json" class="w-4 h-4"></i> JavaScript</span>
                        </div>

                        <!-- Skill Card: PHP -->
                        <div class="px-6 py-3 rounded-xl bg-indigo-50 text-indigo-700 font-bold shadow-sm border border-indigo-100 hover:bg-gradient-to-r hover:from-indigo-500 hover:to-purple-500 hover:text-white hover:shadow-lg hover:-translate-y-1 transition-all duration-300 cursor-default">
                            <span class="flex items-center gap-2"><i data-lucide="server" class="w-4 h-4"></i> PHP</span>
                        </div>

                        <!-- Skill Card: MySQL -->
                        <div class="px-6 py-3 rounded-xl bg-cyan-50 text-cyan-700 font-bold shadow-sm border border-cyan-100 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-blue-600 hover:text-white hover:shadow-lg hover:-translate-y-1 transition-all duration-300 cursor-default">
                            <span class="flex items-center gap-2"><i data-lucide="database" class="w-4 h-4"></i> MySQL</span>
                        </div>

                        <!-- Skill Card: Laravel -->
                        <div class="px-6 py-3 rounded-xl bg-red-50 text-red-700 font-bold shadow-sm border border-red-100 hover:bg-gradient-to-r hover:from-red-500 hover:to-pink-600 hover:text-white hover:shadow-lg hover:-translate-y-1 transition-all duration-300 cursor-default">
                            <span class="flex items-center gap-2"><i data-lucide="layers" class="w-4 h-4"></i> Laravel</span>
                        </div>

                        <!-- Skill Card: React -->
                        <div class="px-6 py-3 rounded-xl bg-sky-50 text-sky-700 font-bold shadow-sm border border-sky-100 hover:bg-gradient-to-r hover:from-sky-400 hover:to-blue-500 hover:text-white hover:shadow-lg hover:-translate-y-1 transition-all duration-300 cursor-default">
                            <span class="flex items-center gap-2"><i data-lucide="atom" class="w-4 h-4"></i> React</span>
                        </div>

                         <!-- Skill Card: Next.js -->
                         <div class="px-6 py-3 rounded-xl bg-gray-50 text-gray-700 font-bold shadow-sm border border-gray-100 hover:bg-gradient-to-r hover:from-gray-700 hover:to-gray-900 hover:text-white hover:shadow-lg hover:-translate-y-1 transition-all duration-300 cursor-default">
                            <span class="flex items-center gap-2"><i data-lucide="zap" class="w-4 h-4"></i> Next.js</span>
                        </div>

                        <!-- Skill Card: React Native -->
                        <div class="px-6 py-3 rounded-xl bg-blue-50 text-blue-700 font-bold shadow-sm border border-blue-100 hover:bg-gradient-to-r hover:from-blue-600 hover:to-indigo-600 hover:text-white hover:shadow-lg hover:-translate-y-1 transition-all duration-300 cursor-default">
                            <span class="flex items-center gap-2"><i data-lucide="smartphone" class="w-4 h-4"></i> React Native</span>
                        </div>

                        <!-- Skill Card: Electron -->
                        <div class="px-6 py-3 rounded-xl bg-teal-50 text-teal-700 font-bold shadow-sm border border-teal-100 hover:bg-gradient-to-r hover:from-teal-500 hover:to-emerald-600 hover:text-white hover:shadow-lg hover:-translate-y-1 transition-all duration-300 cursor-default">
                            <span class="flex items-center gap-2"><i data-lucide="monitor" class="w-4 h-4"></i> Electron</span>
                        </div>

                         <!-- Skill Card: Tailwind -->
                         <div class="px-6 py-3 rounded-xl bg-cyan-50 text-cyan-700 font-bold shadow-sm border border-cyan-100 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-blue-500 hover:text-white hover:shadow-lg hover:-translate-y-1 transition-all duration-300 cursor-default">
                            <span class="flex items-center gap-2"><i data-lucide="wind" class="w-4 h-4"></i> Tailwind</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Featured Projects</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-blue-600 to-green-500 mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Project 1 -->
                <div class="group relative bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1556742049-0cfed4f7a07d" alt="E-Commerce" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700"/>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-8">
                        <span class="text-blue-400 text-sm font-semibold mb-2">Web Development</span>
                        <h3 class="text-2xl font-bold text-white mb-2">E-Commerce Platform</h3>
                        <p class="text-gray-300 mb-4">A full-featured online store with payment integration and admin dashboard.</p>
                        <div class="flex gap-2 mb-6">
                            <span class="px-2 py-1 bg-white/20 text-white text-xs rounded backdrop-blur-sm">Laravel</span>
                            <span class="px-2 py-1 bg-white/20 text-white text-xs rounded backdrop-blur-sm">MySQL</span>
                            <span class="px-2 py-1 bg-white/20 text-white text-xs rounded backdrop-blur-sm">Tailwind</span>
                        </div>
                        <div class="flex gap-4">
                            <button class="flex items-center gap-2 text-white hover:text-blue-400 transition-colors"><i data-lucide="external-link" class="w-4 h-4"></i> Live Demo</button>
                            <button class="flex items-center gap-2 text-white hover:text-blue-400 transition-colors"><i data-lucide="github" class="w-4 h-4"></i> Source Code</button>
                        </div>
                    </div>
                     <!-- Default view -->
                     <div class="p-6 md:hidden">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">E-Commerce Platform</h3>
                        <p class="text-gray-600 text-sm">A full-featured online store with payment integration and admin dashboard.</p>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="group relative bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1540350394557-8d14678e7f91" alt="Task App" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700"/>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-8">
                        <span class="text-blue-400 text-sm font-semibold mb-2">Mobile App</span>
                        <h3 class="text-2xl font-bold text-white mb-2">Task Management App</h3>
                        <p class="text-gray-300 mb-4">Productivity app for teams to track tasks and collaborate in real-time.</p>
                        <div class="flex gap-2 mb-6">
                            <span class="px-2 py-1 bg-white/20 text-white text-xs rounded backdrop-blur-sm">React Native</span>
                            <span class="px-2 py-1 bg-white/20 text-white text-xs rounded backdrop-blur-sm">Firebase</span>
                        </div>
                         <div class="flex gap-4">
                            <button class="flex items-center gap-2 text-white hover:text-blue-400 transition-colors"><i data-lucide="external-link" class="w-4 h-4"></i> Live Demo</button>
                            <button class="flex items-center gap-2 text-white hover:text-blue-400 transition-colors"><i data-lucide="github" class="w-4 h-4"></i> Source Code</button>
                        </div>
                    </div>
                    <!-- Default view -->
                    <div class="p-6 md:hidden">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Task Management App</h3>
                        <p class="text-gray-600 text-sm">Productivity app for teams to track tasks and collaborate in real-time.</p>
                    </div>
                </div>
            </div>
            
            <div class="mt-12 text-center">
                <button class="px-8 py-3 border-2 border-blue-600 text-blue-600 font-bold rounded-lg hover:bg-blue-600 hover:text-white transition-colors">
                    View All Projects
                </button>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-gradient-to-br from-blue-900 to-gray-900 text-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Client Testimonials</h2>
                <div class="w-20 h-1 bg-green-500 mx-auto rounded-full"></div>
                <p class="mt-4 text-gray-300 max-w-2xl mx-auto">
                    Don't just take my word for it. Here's what my clients have to say about working with me.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white/10 backdrop-blur-md p-8 rounded-2xl border border-white/10 hover:bg-white/20 transition-all">
                    <div class="flex gap-1 text-yellow-400 mb-4">
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                    </div>
                    <p class="text-gray-200 mb-6 italic">"Exceptional work! The website he built for our startup not only looks amazing but performs flawlessly. His attention to detail is unmatched."</p>
                    <div class="flex items-center gap-4">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330" alt="Sarah" class="w-12 h-12 rounded-full object-cover border-2 border-green-500" />
                        <div>
                            <h4 class="font-bold">Sarah Johnson</h4>
                            <p class="text-sm text-gray-400">CEO, TechStart</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 2 -->
                <div class="bg-white/10 backdrop-blur-md p-8 rounded-2xl border border-white/10 hover:bg-white/20 transition-all">
                    <div class="flex gap-1 text-yellow-400 mb-4">
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                    </div>
                    <p class="text-gray-200 mb-6 italic">"I was impressed by his ability to translate our vague requirements into a concrete, beautiful product. Highly recommended for any web project."</p>
                    <div class="flex items-center gap-4">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e" alt="Michael" class="w-12 h-12 rounded-full object-cover border-2 border-green-500" />
                        <div>
                            <h4 class="font-bold">Michael Chen</h4>
                            <p class="text-sm text-gray-400">Marketing Director</p>
                        </div>
                    </div>
                </div>
                 <!-- Testimonial 3 -->
                 <div class="bg-white/10 backdrop-blur-md p-8 rounded-2xl border border-white/10 hover:bg-white/20 transition-all">
                    <div class="flex gap-1 text-yellow-400 mb-4">
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                    </div>
                    <p class="text-gray-200 mb-6 italic">"Professional, timely, and skilled. He delivered the project ahead of schedule and the code quality was excellent. Will definitely hire again."</p>
                    <div class="flex items-center gap-4">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80" alt="Emily" class="w-12 h-12 rounded-full object-cover border-2 border-green-500" />
                        <div>
                            <h4 class="font-bold">Emily Davis</h4>
                            <p class="text-sm text-gray-400">Founder, CreativeStudio</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Get In Touch</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-blue-600 to-green-500 mx-auto rounded-full"></div>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto">
                    Have a project in mind? Let's discuss how we can work together to build something great.
                </p>
            </div>

            <div class="flex flex-col md:flex-row gap-12 max-w-5xl mx-auto">
                <!-- Contact Info -->
                <div class="flex-1 space-y-8">
                    <div class="bg-blue-50 p-6 rounded-xl flex items-start gap-4">
                        <div class="p-3 bg-blue-100 text-blue-600 rounded-lg">
                            <i data-lucide="mail" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-gray-900">Email Me</h4>
                            <p class="text-gray-600">hello@devfolio.com</p>
                            <p class="text-gray-500 text-sm mt-1">I usually reply within 24 hours.</p>
                        </div>
                    </div>

                    <div class="bg-green-50 p-6 rounded-xl flex items-start gap-4">
                        <div class="p-3 bg-green-100 text-green-600 rounded-lg">
                            <i data-lucide="phone" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-gray-900">Call Me</h4>
                            <p class="text-gray-600">+1 (555) 123-4567</p>
                            <p class="text-gray-500 text-sm mt-1">Mon-Fri, 9am - 6pm EST.</p>
                        </div>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-xl flex items-start gap-4">
                        <div class="p-3 bg-gray-200 text-gray-700 rounded-lg">
                            <i data-lucide="map-pin" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-gray-900">Location</h4>
                            <p class="text-gray-600">New York, NY, USA</p>
                            <p class="text-gray-500 text-sm mt-1">Available for remote work worldwide.</p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="flex-1 bg-white rounded-2xl shadow-lg border border-gray-100 p-8">
                    <form class="space-y-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Your Name</label>
                            <input type="text" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all" placeholder="John Doe">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Your Email</label>
                            <input type="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all" placeholder="john@example.com">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                            <textarea rows="4" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all resize-none" placeholder="Tell me about your project..."></textarea>
                        </div>
                        <button type="button" class="w-full py-3 bg-gradient-to-r from-blue-600 to-green-500 text-white font-bold rounded-lg hover:shadow-lg hover:scale-[1.02] transition-all flex items-center justify-center gap-2">
                            Send Message <i data-lucide="send" class="w-4 h-4"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-16 pb-8">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center md:items-start gap-8 mb-12">
                
                <div class="text-center md:text-left">
                    <h2 class="text-2xl font-bold bg-gradient-to-r from-blue-400 to-green-400 bg-clip-text text-transparent mb-4">
                        DevFolio
                    </h2>
                    <p class="text-gray-400 max-w-sm">
                        Building the future of the web, one pixel at a time. Let's create something amazing together.
                    </p>
                </div>

                <div class="flex gap-6">
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-blue-600 transition-colors">
                        <i data-lucide="github" class="w-5 h-5"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-blue-600 transition-colors">
                        <i data-lucide="linkedin" class="w-5 h-5"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-blue-600 transition-colors">
                        <i data-lucide="twitter" class="w-5 h-5"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-blue-600 transition-colors">
                        <i data-lucide="instagram" class="w-5 h-5"></i>
                    </a>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-gray-500 text-sm">
                    &copy; 2025 DevFolio. All rights reserved.
                </p>
                <p class="text-gray-500 text-sm flex items-center gap-1">
                    Made with <i data-lucide="heart" class="text-red-500 fill-current w-4 h-4"></i> and HTML & Tailwind
                </p>
            </div>
        </div>
    </footer>

    <!-- Init Icons -->
    <script>
        lucide.createIcons();

        // Simple Mobile Menu Toggle
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });

        // Sticky Header effect
        const header = document.getElementById('main-header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('bg-white/90', 'backdrop-blur-md', 'shadow-md', 'py-3');
                header.classList.remove('bg-transparent', 'py-5');
            } else {
                header.classList.remove('bg-white/90', 'backdrop-blur-md', 'shadow-md', 'py-3');
                header.classList.add('bg-transparent', 'py-5');
            }
        });
    </script>
</body>
</html>

