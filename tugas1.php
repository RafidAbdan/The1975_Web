<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arctile</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap');
        body {
            font-family: 'Roboto', sans-serif;
        }
        .-tracking-10 {
            letter-spacing: -0.625rem; /* Adjust the value as needed */
        }
    </style>
</head>
<body class="bg-black">
    <div class="flex justify-center ">
        <img class="w-full opacity-50 bg-fixed " src="./asset/3.jpg" alt="The 1975 band background image" srcset="">
        <div class="w-3/4 h-auto  z-10 absolute top-53 opacity-90 ">
            <div class="text-9xl text-white font-bold text-left -tracking-10">THE1975</div>
        </div>
    </div>
    <div class="w-2/3 h-auto  m-auto">
        <div class="flex text-white font-bold place-content-between">
            <section class="bg-black text-white py-15 px-2">
                <div class="w-full mx-auto grid md:grid-cols-2 gap-12 items-center">
                    <!-- Kiri: Teks deskripsi -->
                    <div>
                    <h2 class="text-[40px] font-bold mb-4">Who are The 1975?</h2>
                    <p class="text-white leading-relaxed mb-4">
                        The 1975 is an English pop rock band formed in 2002 in Wilmslow, Cheshire. 
                        Known for their unique sound blending 80s pop, electronic, and indie rock, 
                        they explore themes like modern romance, anxiety, and life in the digital age.
                    </p>
                    <p class="text-gray-400 leading-relaxed">
                        The band consists of Matty Healy, Adam Hann, Ross MacDonald, and George Daniel. 
                        Their music is not just sound—it's a visual and emotional experience.
                    </p>
                    </div>

                    <!-- Kanan: Gambar -->
                    <div class="overflow-hidden rounded-xl shadow-xl">
                    <img src="./asset/5.jpg" alt="The 1975" class="w-full object-cover opacity-90 grayscale " />
                    </div>

                </div>
            </section>
        </div>


        
    </div>
    <div class="w-2/3 h-auto m-auto">
        <div class="text-4xl font-bold text-white mt-15">Band Member</div>
            <a href="https://www.instagram.com/mattyugh/?hl=en" target="_blank" rel="noopener noreferrer">
                <div class="w-full h-50 mt-8 pt-2 bg-[url('./asset/P1.jpg')] bg-cover rounded-sm  object-cover hover:scale-105 ease-in duration-100">
                <div class="text-2xl font-bold text-white mt-32 ml-5">Matty Healy</div>
                <div class="text-sm text-white ml-5">Lead Vocalist, Guitarist</div>
            </div>
            </a>
            <a href="https://www.instagram.com/bedforddanes75/" target="_blank" rel="noopener noreferrer">
                <div class="w-full h-50 mt-8 pt-2 bg-[url('./asset/P2.jpg')] bg-cover rounded-sm  object-cover hover:scale-105 ease-in duration-100">
                <div class="text-2xl font-bold text-white mt-32 ml-5">George Daniel</div>
                <div class="text-sm text-white ml-5">Drummer</div>
            </div>
            </a>
            <a href="https://www.instagram.com/rass1975/" target="_blank" rel="noopener noreferrer">
                <div class="w-full h-50 mt-8 pt-2 bg-[url('./asset/P3.jpg')] bg-cover rounded-sm  object-cover hover:scale-105 ease-in duration-100">
                <div class="text-2xl font-bold text-white mt-32 ml-5">Ross MacDonald</div>
                <div class="text-sm text-white ml-5">Bassist</div>
            </div>
            </a>
            <a href="https://www.instagram.com/1975adam/" target="_blank" rel="noopener noreferrer">
                <div class="w-full h-50 mt-8 pt-2 bg-[url('./asset/P4.jpg')] bg-cover rounded-sm  object-cover hover:scale-105 ease-in duration-100">
                <div class="text-2xl font-bold text-white mt-32 ml-5">Adam Hann</div>
                <div class="text-sm text-white ml-5">Guitarist</div>
            </div>
            </a>
            
        </div>
    </div>
    <div class="w-2/3 h-auto m-auto">
        <div class="text-4xl font-bold text-white mt-15">Top Albums & Music</div>
        <div class="flex place-content-between mt-8 mb-8">
            <div class="w-70 h-50 bg-[url('./asset/A1.jpg')] bg-cover rounded-sm  object-cover hover:scale-105 ease-in duration-100" >
                <div class="text-xl font-bold text-white mt-30 ml-3">Being Funny In A Foreign Language</div>
                <div class="text-sm text-white ml-3">2022</div>
            </div>
            <div class="w-64 h-50 bg-[url('./asset/A2.jpg')] bg-cover rounded-sm  object-cover hover:scale-105 ease-in duration-100">
                <div class="text-xl font-bold text-white mt-35 ml-3">The 1975</div>
                <div class="text-sm text-white ml-3">2013</div>
            </div>
            <div class="w-64 h-50 bg-[url('./asset/A3.jpg')] bg-cover rounded-sm opacity-95 object-cover hover:scale-105 ease-in duration-100">
                <div class="text-sm font-bold text-white mt-35 ml-3">I Like It When You Sleep, For You Are So Beautiful Yet So Unaware Of It</div>
                <div class="text-sm text-white ml-3">2016</div>
            </div>
        </div>
        <div class="w-full h-auto">
            <div class="text-xl font-bold text-white">Top Music</div>
             <div class="space-y-6 mt-6">
            <!-- Song Item 1 -->
            <a href="https://open.spotify.com/track/1fDFHXcykq4iw8Gg7s5hG9?si=fa677309236948c3" target="_blank" rel="noopener noreferrer">
                <div class="flex items-center justify-between hover:bg-neutral-800 px-3 py-2 rounded">
                    <div class="flex items-center gap-4">
                        <span class="text-gray-400 w-4">1</span>
                        <img src="./asset/A1.jpg" alt="About You" class="w-12 h-12 object-cover rounded" />
                        <span class="text-white">About You</span>
                    </div>
                    <div class="flex items-center gap-6 text-sm text-gray-300">
                        <span>731,246,183</span>
                        <span>5:26</span>
                    </div>
                </div>
            </a>

            <!-- Song Item 2 -->
            <a href="https://open.spotify.com/track/4m0q0xQ2BNl9SCAGKyfiGZ?si=e7aeea1972114f8d" target="_blank" rel="noopener noreferrer">
                <div class="flex items-center justify-between hover:bg-neutral-800 px-3 py-2 rounded">
                    <div class="flex items-center gap-4">
                        <span class="text-gray-400 w-4">2</span>
                        <img src="./asset/A3.jpg" alt="Somebody Else" class="w-12 h-12 object-cover rounded" />
                        <span class="text-white">Somebody Else</span>
                    </div>
                    <div class="flex items-center gap-6 text-sm text-gray-300">
                        <span>928,528,344</span>
                        <span>5:47</span>
                    </div>
                </div>
            </a>

            <!-- Song Item 3 -->
            <a href="https://open.spotify.com/track/73jVPicY2G9YHmzgjk69ae?si=f8666a2651b8400b" target="_blank" rel="noopener noreferrer">
                <div class="flex items-center justify-between hover:bg-neutral-800 px-3 py-2 rounded">
                    <div class="flex items-center gap-4">
                        <span class="text-gray-400 w-4">3</span>
                        <img src="./asset/A2.jpg" alt="Robbers" class="w-12 h-12 object-cover rounded" />
                        <span class="text-white">Robbers</span>
                    </div>
                    <div class="flex items-center gap-6 text-sm text-gray-300">
                        <span>486,220,398</span>
                        <span>4:14</span>
                    </div>
                </div>
            </a>

            <!-- Song Item 4 -->
            <a href="https://open.spotify.com/track/3TgMcrV32NUKjEG2ujn9eh?si=cfaec680448c4542" target="_blank" rel="noopener noreferrer">
                <div class="flex items-center justify-between hover:bg-neutral-800 px-3 py-2 rounded">
                    <div class="flex items-center gap-4">
                        <span class="text-gray-400 w-4">4</span>
                        <img src="./asset/T5.jpg" alt="It's Not Living" class="w-12 h-12 object-cover rounded" />
                        <span class="text-white">It's Not Living (If It's Not With You)</span>
                    </div>
                    <div class="flex items-center gap-6 text-sm text-gray-300">
                        <span>392,036,316</span>
                        <span>4:08</span>
                    </div>
                </div>
            </a>

            <!-- Song Item 5 -->
            <a href="https://open.spotify.com/track/4WiiRw2PHMNQE0ad6y6GdD?si=cad2a16789d84b8d" target="_blank" rel="noopener noreferrer">
                <div class="flex items-center justify-between hover:bg-neutral-800 px-3 py-2 rounded">
                    <div class="flex items-center gap-4">
                        <span class="text-gray-400 w-4">5</span>
                        <img src="./asset/A2.jpg" alt="Chocolate" class="w-12 h-12 object-cover rounded" />
                        <span class="text-white">Chocolate</span>
                    </div>
                    <div class="flex items-center gap-6 text-sm text-gray-300">
                        <span>485,295,744</span>
                        <span>3:44</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <section class="bg-black text-white py-16 px-4">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl font-bold text-center mb-10">TOUR & TICKETS</h2>

            <div class="space-y-6">
            <div class="flex items-center justify-between border-t border-white/20 pt-4">
                <div>
                <h3 class="text-lg font-semibold">Tokyo, Japan</h3>
                <p class="text-sm text-gray-400">20 September 2025</p>
                </div>
                <a href="#" class="border border-white text-white px-4 py-2 text-sm hover:bg-white hover:text-black transition">Get Tickets</a>
            </div>

            <div class="flex items-center justify-between border-t border-white/20 pt-4">
                <div>
                <h3 class="text-lg font-semibold">Jakarta, Indonesia</h3>
                <p class="text-sm text-gray-400">24 September 2025</p>
                </div>
                <a href="#" class="border border-white text-white px-4 py-2 text-sm hover:bg-white hover:text-black transition">Get Tickets</a>
            </div>

            <div class="flex items-center justify-between border-t border-white/20 pt-4">
                <div>
                <h3 class="text-lg font-semibold">Sydney, Australia</h3>
                <p class="text-sm text-gray-400">29 September 2025</p>
                </div>
                <a href="#" class="border border-white text-white px-4 py-2 text-sm hover:bg-white hover:text-black transition">Get Tickets</a>
            </div>
            </div>
        </div>
    </section>

    
    
</body>
</html>