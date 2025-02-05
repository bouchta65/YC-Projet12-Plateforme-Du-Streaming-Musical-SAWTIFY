<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SawtiFy - Neon Music Experience</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes neonPulse {
            0% { filter: brightness(1); }
            50% { filter: brightness(1.2); }
            100% { filter: brightness(1); }
        }
        .neon-pulse {
            animation: neonPulse 2s infinite;
        }
        .neon-text-shadow {
            text-shadow: 0 0 10px currentColor;
        }
        .neon-box-shadow {
            box-shadow: 0 0 20px -5px currentColor;
        }
    </style>
</head>
<body class="bg-black min-h-screen text-white relative overflow-x-hidden">
    <!-- Animated background elements -->
    <div class="fixed inset-0 bg-[radial-gradient(circle_at_50%_50%,rgba(37,1,87,0.3),rgba(0,0,0,1))]"></div>
    <div class="fixed inset-0 bg-[linear-gradient(to_right,rgba(0,0,0,0.9),transparent,rgba(0,0,0,0.9))]"></div>
    
    <div class="container mx-auto px-4 py-6 relative z-10">
        <!-- Enhanced Header with Neon Effect -->
        <header class="flex flex-col md:flex-row justify-between items-center mb-16 space-y-4 md:space-y-0 bg-black/40 backdrop-blur-xl rounded-3xl p-6 border border-purple-500/20">
            <div class="flex items-center justify-center w-full md:w-auto group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-cyan-400 mr-3 transform group-hover:scale-110 transition-all neon-pulse" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/>
                </svg>
                <h1 class="text-4xl font-bold text-cyan-400 neon-text-shadow">Sawti<span class="text-purple-400">Fy</span></h1>
            </div>
            <nav class="flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-6 w-full md:w-auto">
                <div class="flex justify-center space-x-4 w-full md:w-auto">
                <button 
                    onclick="showAuthPopup('signup')"
                    class="bg-purple-950/30 text-purple-400 hover:bg-purple-900/40 px-6 py-2 rounded-full transition backdrop-blur-lg border border-purple-500/50 neon-text-shadow hover:neon-box-shadow">
                    Sign Up
                </button>
                <button 
                    onclick="showAuthPopup('login')"
                    class="bg-cyan-950/30 text-cyan-400 hover:bg-cyan-900/40 px-6 py-2 rounded-full transition backdrop-blur-lg border border-cyan-500/50 neon-text-shadow hover:neon-box-shadow">
                    Log In
                </button>
                </div>
            </nav>
        </header>

        <main class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Enhanced Hero Section -->
            <section class="text-center md:text-left space-y-8">
                <h2 class="text-5xl md:text-7xl font-black leading-tight">
                    Feel The <br/> 
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-purple-400 to-pink-400 neon-text-shadow">Digital Beat</span>
                </h2>
                <p class="text-lg md:text-xl text-gray-400 max-w-xl mx-auto md:mx-0">
                    Enter a new dimension of sound. Where music meets the future.
                </p>
                <div class="flex justify-center md:justify-start space-x-4">
                    <button class="bg-cyan-950/30 text-cyan-400 hover:bg-cyan-900/40 font-bold px-8 py-4 rounded-full transition backdrop-blur-lg border border-cyan-500/50 neon-text-shadow hover:neon-box-shadow transform hover:scale-105">
                        Start Your Journey
                    </button>

                </div>
            </section>

            <!-- Enhanced Music Categories -->
            <section class="relative">
                <div class="grid grid-cols-2 md:grid-cols-3 gap-6 relative z-10">
                    <div class="group bg-black/60 rounded-3xl overflow-hidden backdrop-blur-lg transform transition-all hover:scale-105 border border-cyan-500/20 hover:border-cyan-500/50">
                        <div class="h-48 md:h-64 flex items-end p-4 relative">
                            <img src="public/assets/albumImages/gnawa.png" alt="Electronic" class="absolute inset-0 w-full h-full object-cover opacity-60 group-hover:opacity-80 transition-opacity">
                            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent"></div>
                            <div class="relative z-10">
                                <h3 class="text-xl font-bold mb-2 text-cyan-400 neon-text-shadow">traditionnel </h3>
                                <p class="text-sm text-gray-400">Future sounds</p>
                            </div>
                        </div>
                    </div>
                    <div class="group bg-black/60 rounded-3xl overflow-hidden backdrop-blur-lg transform transition-all hover:scale-105 border border-purple-500/20 hover:border-purple-500/50">
                        <div class="h-48 md:h-64 flex items-end p-4 relative">
                            <img src="public/assets/albumImages/jazz.png" alt="Synthwave" class="absolute inset-0 w-full h-full object-cover opacity-60 group-hover:opacity-80 transition-opacity">
                            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent"></div>
                            <div class="relative z-10">
                                <h3 class="text-xl font-bold mb-2 text-purple-400 neon-text-shadow">Jazz</h3>
                                <p class="text-sm text-gray-400">Retro vibes</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2 md:col-span-1 group bg-black/60 rounded-3xl overflow-hidden backdrop-blur-lg transform transition-all hover:scale-105 border border-pink-500/20 hover:border-pink-500/50">
                        <div class="h-48 md:h-64 flex items-end p-4 relative">
                            <img src="public/assets/albumImages/pop.png" alt="Cyberpunk" class="absolute inset-0 w-full h-full object-cover opacity-60 group-hover:opacity-80 transition-opacity">
                            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent"></div>
                            <div class="relative z-10">
                                <h3 class="text-xl font-bold mb-2 text-pink-400 neon-text-shadow">POP</h3>
                                <p class="text-sm text-gray-400">Digital rebels</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- Enhanced Features Section -->
        <section class="mt-24 text-center">
            <h3 class="text-4xl md:text-5xl font-bold mb-12 text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-purple-400 to-pink-400 neon-text-shadow">Future of Sound</h3>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-black/60 p-8 rounded-3xl transition-all transform hover:scale-105 backdrop-blur-lg border border-cyan-500/20 hover:border-cyan-500/50 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-cyan-400 mb-6 neon-text-shadow group-hover:neon-pulse" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/>
                    </svg>
                    <h4 class="text-2xl font-bold mb-4 text-cyan-400 neon-text-shadow">AI-Enhanced</h4>
                    <p class="text-gray-400">Smart playlists that evolve with your taste</p>
                </div>
                <div class="bg-black/60 p-8 rounded-3xl transition-all transform hover:scale-105 backdrop-blur-lg border border-purple-500/20 hover:border-purple-500/50 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-purple-400 mb-6 neon-text-shadow group-hover:neon-pulse" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <h4 class="text-2xl font-bold mb-4 text-purple-400 neon-text-shadow">HD Audio</h4>
                    <p class="text-gray-400">Crystal clear sound quality that defies reality</p>
                </div>
                <div class="bg-black/60 p-8 rounded-3xl transition-all transform hover:scale-105 backdrop-blur-lg border border-pink-500/20 hover:border-pink-500/50 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-pink-400 mb-6 neon-text-shadow group-hover:neon-pulse" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <h4 class="text-2xl font-bold mb-4 text-pink-400 neon-text-shadow">Virtual Stage</h4>
                    <p class="text-gray-400">Live concerts in immersive digital spaces</p>
                </div>
            </div>
        </section>
    </div>

    <!-- Add this at the end of the body before closing </body> -->
    <div id="authPopup" class="fixed inset-0 flex hidden items-center justify-center bg-black/80 backdrop-blur-xl z-50 min-h-screen">    
    <div class="w-full max-w-md bg-black/70 backdrop-blur-lg rounded-3xl overflow-hidden relative neon-box-shadow border border-cyan-500/30">
        <div class="p-8 text-center">
            <div class="flex items-center justify-center mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-cyan-400 mr-2 neon-pulse" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/>
                </svg>
                <h1 class="text-3xl font-bold text-cyan-400 neon-text-shadow">SawtiFy</h1>
            </div>

            <div class="mb-6 flex justify-center space-x-4">
                <button 
                    id="loginBtn" 
                    onclick="toggleForm('login')"
                    class="px-6 py-2 rounded-full bg-cyan-500/20 text-cyan-400 border border-cyan-500/50 transition-all duration-300 hover:bg-cyan-500/30 neon-text-shadow"
                >
                    Login
                </button>
                <button 
                    id="signupBtn" 
                    onclick="toggleForm('signup')"
                    class="px-6 py-2 rounded-full bg-purple-500/20 text-purple-400 border border-purple-500/50 transition-all duration-300 hover:bg-purple-500/30 neon-text-shadow"
                >
                    Sign Up
                </button>
            </div>

            <form id="loginForm" class="space-y-5">
                <div class="relative">
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-3 top-1/2 transform -translate-y-1/2 text-cyan-400/80 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    <input 
                        type="email" 
                        placeholder="Email" 
                        class="w-full pl-10 pr-4 py-3 rounded-full bg-black/40 border border-cyan-500/30 text-cyan-400 focus:outline-none focus:border-cyan-500 focus:ring-2 focus:ring-cyan-500/30 transition-all"
                    />
                </div>

                <div class="relative">
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-3 top-1/2 transform -translate-y-1/2 text-cyan-400/80 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                    <input 
                        type="password" 
                        placeholder="Password" 
                        class="w-full pl-10 pr-4 py-3 rounded-full bg-black/40 border border-cyan-500/30 text-cyan-400 focus:outline-none focus:border-cyan-500 focus:ring-2 focus:ring-cyan-500/30 transition-all"
                    />
                </div>

                <button 
                    class="w-full py-3 bg-cyan-500/80 text-white rounded-full hover:bg-cyan-500 transition duration-300 transform hover:scale-[1.02] neon-text-shadow"
                >
                    Login
                </button>
            </form>

            <form id="signupForm" class="space-y-5 hidden">
                <div class="relative">
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-3 top-1/2 transform -translate-y-1/2 text-purple-400/80 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                    <input 
                        type="text" 
                        placeholder="Username" 
                        class="w-full pl-10 pr-4 py-3 rounded-full bg-black/40 border border-purple-500/30 text-purple-400 focus:outline-none focus:border-purple-500 focus:ring-2 focus:ring-purple-500/30 transition-all"
                    />
                </div>
                <div class="relative">
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-3 top-1/2 transform -translate-y-1/2 text-cyan-400/80 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    <input 
                        type="email" 
                        placeholder="Email" 
                        class="w-full pl-10 pr-4 py-3 rounded-full bg-black/40 border border-cyan-500/30 text-cyan-400 focus:outline-none focus:border-cyan-500 focus:ring-2 focus:ring-cyan-500/30 transition-all"
                    />
                </div>

                <div class="relative">
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-3 top-1/2 transform -translate-y-1/2 text-cyan-400/80 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                    <input 
                        type="password" 
                        placeholder="Password" 
                        class="w-full pl-10 pr-4 py-3 rounded-full bg-black/40 border border-cyan-500/30 text-cyan-400 focus:outline-none focus:border-cyan-500 focus:ring-2 focus:ring-cyan-500/30 transition-all"
                    />
                </div>

                
                <button 
                    class="w-full py-3 bg-purple-500/80 text-white rounded-full hover:bg-purple-500 transition duration-300 transform hover:scale-[1.02] neon-text-shadow"
                >
                    Create Account
                </button>
            </form>

            <div class="mt-8 pt-6 border-t border-cyan-500/20">
                <div class="text-cyan-400/80 text-sm mb-4">What are you waiting for ?</div>
                <div class="flex justify-center space-x-5">
                </div>
            </div>
            
            <button onclick="hideAuthPopup()" class="absolute top-4 right-4 text-cyan-400/80 hover:text-cyan-500 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>
</div>

<script src="public/assets/js/index.js"></script>


</body>
</html> 


