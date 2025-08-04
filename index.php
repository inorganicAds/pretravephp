<!-- index.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urban Explorer Essentials - Your City Break Companion</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc; /* Light gray background */
            color: #334155; /* Darker text */
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem;
        }
        .nav-link {
            @apply text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition duration-300 ease-in-out;
        }
        .btn-primary {
            @apply bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out;
        }
        .card {
            @apply bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 ease-in-out hover:scale-105;
        }
    </style>
</head>
<body class="antialiased">
    <header class="bg-white shadow-sm py-4">
        <div class="container flex justify-between items-center">
            <div class="flex-shrink-0">
                <a href="index.html" class="text-2xl font-bold text-blue-800">
                    Urban<span class="text-blue-600">Essentials</span>
                </a>
            </div>
            <nav class="hidden md:block">
                <ul class="flex space-x-4">
                    <li><a href="index.html" class="nav-link">Home</a></li>
                    <li><a href="shop.html" class="nav-link">Shop</a></li>
                    <li><a href="blog.html" class="nav-link">Blog</a></li>
                    <li><a href="about.html" class="nav-link">About Us</a></li>
                    <li><a href="contact.html" class="nav-link">Contact</a></li>
                    <li><a href="faq.html" class="nav-link">FAQ</a></li>
                </ul>
            </nav>
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-700 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="md:hidden hidden bg-white shadow-md py-2">
            <ul class="flex flex-col items-center space-y-2">
                <li><a href="index.html" class="nav-link">Home</a></li>
                <li><a href="shop.html" class="nav-link">Shop</a></li>
                <li><a href="blog.html" class="nav-link">Blog</a></li>
                <li><a href="about.html" class="nav-link">About Us</a></li>
                <li><a href="contact.html" class="nav-link">Contact</a></li>
                <li><a href="faq.html" class="nav-link">FAQ</a></li>
            </ul>
        </div>
    </header>

    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>

    <main class="container py-8">
        <section class="text-center py-16 bg-gradient-to-r from-blue-500 to-indigo-600 text-white rounded-xl shadow-lg mb-12">
            <h1 class="text-5xl font-extrabold mb-4 leading-tight">Navigate Cities with Confidence</h1>
            <p class="text-xl mb-8">Your curated collection of travel essentials for the modern urban explorer.</p>
            <a href="shop.html" class="btn-primary text-lg">Explore Our Essentials</a>
        </section>

        <section class="mb-12">
            <h2 class="text-4xl font-bold text-center mb-10 text-blue-800">Featured Categories</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="card p-6 text-center">
                    <img src="https://placehold.co/300x200/4F46E5/FFFFFF?text=Anti-Theft+Bags" alt="Anti-Theft Bags" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-2xl font-semibold text-blue-700 mb-2">Secure & Smart Bags</h3>
                    <p class="text-gray-600">Keep your valuables safe with slash-resistant and RFID-blocking designs.</p>
                    <a href="shop.html#bags" class="text-blue-600 hover:underline mt-4 inline-block">Shop Now &rarr;</a>
                </div>
                <div class="card p-6 text-center">
                    <img src="https://placehold.co/300x200/EF4444/FFFFFF?text=Portable+Chargers" alt="Portable Chargers" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-2xl font-semibold text-blue-700 mb-2">Power & Tech</h3>
                    <p class="text-gray-600">Stay charged and connected with high-capacity portable chargers and adapters.</p>
                    <a href="shop.html#tech" class="text-blue-600 hover:underline mt-4 inline-block">Shop Now &rarr;</a>
                </div>
                <div class="card p-6 text-center">
                    <img src="https://placehold.co/300x200/22C55E/FFFFFF?text=Walking+Shoes" alt="Comfortable Walking Shoes" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-2xl font-semibold text-blue-700 mb-2">Comfortable Footwear</h3>
                    <p class="text-gray-600">Explore miles of city streets in ultimate comfort and style.</p>
                    <a href="shop.html#shoes" class="text-blue-600 hover:underline mt-4 inline-block">Shop Now &rarr;</a>
                </div>
            </div>
        </section>

        <section class="text-center py-12 bg-white rounded-xl shadow-lg">
            <h2 class="text-3xl font-bold mb-4 text-blue-800">Ready for Your Next Urban Adventure?</h2>
            <p class="text-gray-600 mb-6">Discover the gear that makes city exploration effortless and enjoyable.</p>
            <a href="shop.html" class="btn-primary">View All Products</a>
        </section>
    </main>

    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="container flex flex-col md:flex-row justify-between items-center text-center md:text-left">
            <div class="mb-4 md:mb-0">
                <h3 class="text-xl font-bold mb-2">UrbanEssentials</h3>
                <p class="text-gray-400">&copy; 2025 UrbanEssentials. All rights reserved.</p>
            </div>
            <nav class="mb-4 md:mb-0">
                <ul class="flex flex-wrap justify-center md:justify-end space-x-4">
                    <li><a href="privacy-policy.html" class="text-gray-400 hover:text-white text-sm">Privacy Policy</a></li>
                    <li><a href="terms-conditions.html" class="text-gray-400 hover:text-white text-sm">Terms & Conditions</a></li>
                    <li><a href="return-policy.html" class="text-gray-400 hover:text-white text-sm">Return Policy</a></li>
                    <li><a href="shipping-policy.html" class="text-gray-400 hover:text-white text-sm">Shipping Policy</a></li>
                </ul>
            </nav>
            <div class="text-gray-400 text-sm">
                <p>Contact Us: info@urbanessentials.com</p>
                <p>Follow Us: <a href="#" class="hover:text-white">Facebook</a> | <a href="#" class="hover:text-white">Instagram</a></p>
            </div>
        </div>
    </footer>
</body>
</html>
```html
<!-- shop.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop - Urban Explorer Essentials</title>
    <!-- Tailwind CSS CDN -->
    <script src="[https://cdn.tailwindcss.com](https://cdn.tailwindcss.com)"></script>
    <link href="[https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap](https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap)" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc; /* Light gray background */
            color: #334155; /* Darker text */
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem;
        }
        .nav-link {
            @apply text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition duration-300 ease-in-out;
        }
        .btn-primary {
            @apply bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out;
        }
        .card {
            @apply bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 ease-in-out hover:scale-105;
        }
    </style>
</head>
<body class="antialiased">
    <header class="bg-white shadow-sm py-4">
        <div class="container flex justify-between items-center">
            <div class="flex-shrink-0">
                <a href="index.html" class="text-2xl font-bold text-blue-800">
                    Urban<span class="text-blue-600">Essentials</span>
                </a>
            </div>
            <nav class="hidden md:block">
                <ul class="flex space-x-4">
                    <li><a href="index.html" class="nav-link">Home</a></li>
                    <li><a href="shop.html" class="nav-link">Shop</a></li>
                    <li><a href="blog.html" class="nav-link">Blog</a></li>
                    <li><a href="about.html" class="nav-link">About Us</a></li>
                    <li><a href="contact.html" class="nav-link">Contact</a></li>
                    <li><a href="faq.html" class="nav-link">FAQ</a></li>
                </ul>
            </nav>
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-700 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="[http://www.w3.org/2000/svg](http://www.w3.org/2000/svg)">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="md:hidden hidden bg-white shadow-md py-2">
            <ul class="flex flex-col items-center space-y-2">
                <li><a href="index.html" class="nav-link">Home</a></li>
                <li><a href="shop.html" class="nav-link">Shop</a></li>
                <li><a href="blog.html" class="nav-link">Blog</a></li>
                <li><a href="about.html" class="nav-link">About Us</a></li>
                <li><a href="contact.html" class="nav-link">Contact</a></li>
                <li><a href="faq.html" class="nav-link">FAQ</a></li>
            </ul>
        </div>
    </header>

    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>

    <main class="container py-8">
        <h1 class="text-4xl font-bold text-blue-800 mb-8 text-center">Our Urban Essentials Collection</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            <!-- Product Card 1: Anti-Theft Backpack -->
            <div class="card">
                <img src="[https://placehold.co/400x300/4F46E5/FFFFFF?text=Anti-Theft+Backpack](https://placehold.co/400x300/4F46E5/FFFFFF?text=Anti-Theft+Backpack)" alt="Anti-Theft Backpack" class="w-full h-48 object-cover rounded-t-xl">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-blue-700 mb-2">Secure City Backpack</h3>
                    <p class="text-gray-600 text-sm mb-4">Slash-resistant, RFID-blocking, and smart organization for peace of mind.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold text-green-600">$89.99</span>
                        <a href="product-detail.html?id=1" class="btn-primary text-sm">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Product Card 2: Portable Power Bank -->
            <div class="card">
                <img src="[https://placehold.co/400x300/EF4444/FFFFFF?text=Portable+Charger](https://placehold.co/400x300/EF4444/FFFFFF?text=Portable+Charger)" alt="Portable Charger" class="w-full h-48 object-cover rounded-t-xl">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-blue-700 mb-2">Ultra-Compact Power Bank</h3>
                    <p class="text-gray-600 text-sm mb-4">Keep your devices charged on the go with this high-capacity charger.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold text-green-600">$34.99</span>
                        <a href="product-detail.html?id=2" class="btn-primary text-sm">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Product Card 3: Comfortable Walking Shoes -->
            <div class="card">
                <img src="[https://placehold.co/400x300/22C55E/FFFFFF?text=Walking+Shoes](https://placehold.co/400x300/22C55E/FFFFFF?text=Walking+Shoes)" alt="Comfortable Walking Shoes" class="w-full h-48 object-cover rounded-t-xl">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-blue-700 mb-2">CloudWalk City Sneakers</h3>
                    <p class="text-gray-600 text-sm mb-4">Experience all-day comfort for endless city exploration.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold text-green-600">$119.99</span>
                        <a href="product-detail.html?id=3" class="btn-primary text-sm">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Product Card 4: RFID Blocking Wallet -->
            <div class="card">
                <img src="[https://placehold.co/400x300/F97316/FFFFFF?text=RFID+Wallet](https://placehold.co/400x300/F97316/FFFFFF?text=RFID+Wallet)" alt="RFID Blocking Wallet" class="w-full h-48 object-cover rounded-t-xl">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-blue-700 mb-2">Slim RFID Wallet</h3>
                    <p class="text-gray-600 text-sm mb-4">Protect your cards from digital theft in a sleek design.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold text-green-600">$29.99</span>
                        <a href="product-detail.html?id=4" class="btn-primary text-sm">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Product Card 5: Collapsible Water Bottle -->
            <div class="card">
                <img src="[https://placehold.co/400x300/6366F1/FFFFFF?text=Water+Bottle](https://placehold.co/400x300/6366F1/FFFFFF?text=Water+Bottle)" alt="Collapsible Water Bottle" class="w-full h-48 object-cover rounded-t-xl">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-blue-700 mb-2">Collapsible Hydration Bottle</h3>
                    <p class="text-gray-600 text-sm mb-4">Stay hydrated on the go, collapses for easy packing.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold text-green-600">$19.99</span>
                        <a href="product-detail.html?id=5" class="btn-primary text-sm">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Product Card 6: Travel First Aid Kit -->
            <div class="card">
                <img src="[https://placehold.co/400x300/10B981/FFFFFF?text=First+Aid+Kit](https://placehold.co/400x300/10B981/FFFFFF?text=First+Aid+Kit)" alt="Travel First Aid Kit" class="w-full h-48 object-cover rounded-t-xl">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-blue-700 mb-2">Compact First Aid Kit</h3>
                    <p class="text-gray-600 text-sm mb-4">Essential for minor scrapes and emergencies during your travels.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold text-green-600">$14.99</span>
                        <a href="product-detail.html?id=6" class="btn-primary text-sm">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="container flex flex-col md:flex-row justify-between items-center text-center md:text-left">
            <div class="mb-4 md:mb-0">
                <h3 class="text-xl font-bold mb-2">UrbanEssentials</h3>
                <p class="text-gray-400">&copy; 2025 UrbanEssentials. All rights reserved.</p>
            </div>
            <nav class="mb-4 md:mb-0">
                <ul class="flex flex-wrap justify-center md:justify-end space-x-4">
                    <li><a href="privacy-policy.html" class="text-gray-400 hover:text-white text-sm">Privacy Policy</a></li>
                    <li><a href="terms-conditions.html" class="text-gray-400 hover:text-white text-sm">Terms & Conditions</a></li>
                    <li><a href="return-policy.html" class="text-gray-400 hover:text-white text-sm">Return Policy</a></li>
                    <li><a href="shipping-policy.html" class="text-gray-400 hover:text-white text-sm">Shipping Policy</a></li>
                </ul>
            </nav>
            <div class="text-gray-400 text-sm">
                <p>Contact Us: info@urbanessentials.com</p>
                <p>Follow Us: <a href="#" class="hover:text-white">Facebook</a> | <a href="#" class="hover:text-white">Instagram</a></p>
            </div>
        </div>
    </footer>
</body>
</html>
```html
<!-- product-detail.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail - Urban Explorer Essentials</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc; /* Light gray background */
            color: #334155; /* Darker text */
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem;
        }
        .nav-link {
            @apply text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition duration-300 ease-in-out;
        }
        .btn-primary {
            @apply bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out;
        }
        .card {
            @apply bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 ease-in-out hover:scale-105;
        }
    </style>
</head>
<body class="antialiased">
    <header class="bg-white shadow-sm py-4">
        <div class="container flex justify-between items-center">
            <div class="flex-shrink-0">
                <a href="index.html" class="text-2xl font-bold text-blue-800">
                    Urban<span class="text-blue-600">Essentials</span>
                </a>
            </div>
            <nav class="hidden md:block">
                <ul class="flex space-x-4">
                    <li><a href="index.html" class="nav-link">Home</a></li>
                    <li><a href="shop.html" class="nav-link">Shop</a></li>
                    <li><a href="blog.html" class="nav-link">Blog</a></li>
                    <li><a href="about.html" class="nav-link">About Us</a></li>
                    <li><a href="contact.html" class="nav-link">Contact</a></li>
                    <li><a href="faq.html" class="nav-link">FAQ</a></li>
                </ul>
            </nav>
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-700 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="md:hidden hidden bg-white shadow-md py-2">
            <ul class="flex flex-col items-center space-y-2">
                <li><a href="index.html" class="nav-link">Home</a></li>
                <li><a href="shop.html" class="nav-link">Shop</a></li>
                <li><a href="blog.html" class="nav-link">Blog</a></li>
                <li><a href="about.html" class="nav-link">About Us</a></li>
                <li><a href="contact.html" class="nav-link">Contact</a></li>
                <li><a href="faq.html" class="nav-link">FAQ</a></li>
            </ul>
        </div>
    </header>

    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>

    <main class="container py-8">
        <div class="bg-white rounded-xl shadow-lg p-8 md:flex md:space-x-8">
            <div class="md:w-1/2">
                <img src="https://placehold.co/600x400/3B82F6/FFFFFF?text=Product+Detail" alt="Sample Product" class="w-full h-auto rounded-lg mb-6 md:mb-0">
            </div>
            <div class="md:w-1/2">
                <h1 class="text-4xl font-bold text-blue-800 mb-4">Sample Product Name</h1>
                <p class="text-2xl font-semibold text-green-600 mb-6">$99.99</p>
                <p class="text-gray-700 leading-relaxed mb-8">This is a detailed description for the sample product. It highlights its features, benefits, and why it's an essential item for your urban adventures. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <button class="btn-primary text-lg w-full">Add to Cart</button>

                <div class="mt-8">
                    <h2 class="text-2xl font-semibold text-blue-700 mb-4">Key Features:</h2>
                    <ul class="list-disc list-inside text-gray-700 space-y-2">
                        <li>Durable and high-quality material</li>
                        <li>Ergonomic design for comfort</li>
                        <li>Multi-functional compartments</li>
                        <li>Lightweight and easy to carry</li>
                        <li>Perfect for urban and city travel</li>
                    </ul>
                </div>
            </div>
        </div>

        <section class="mt-12">
            <h2 class="text-3xl font-bold text-blue-800 mb-6 text-center">Customer Reviews</h2>
            <div class="bg-white rounded-xl shadow-lg p-6">
                <div class="mb-6 pb-4 border-b border-gray-200">
                    <p class="font-semibold text-blue-700">Jane Doe <span class="text-yellow-500">&#9733;&#9733;&#9733;&#9733;&#9734;</span></p>
                    <p class="text-gray-600 text-sm mb-2">Reviewed on July 28, 2025</p>
                    <p class="text-gray-700">"Absolutely love this product! It made my last city trip so much easier and stress-free. Highly recommend for any urban explorer."</p>
                </div>
                <div>
                    <p class="font-semibold text-blue-700">John Smith <span class="text-yellow-500">&#9733;&#9733;&#9733;&#9733;&#9733;</span></p>
                    <p class="text-gray-600 text-sm mb-2">Reviewed on July 25, 2025</p>
                    <p class="text-gray-700">"Fantastic quality and very practical. It's exactly what I needed for my daily commutes and weekend getaways."</p>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="container flex flex-col md:flex-row justify-between items-center text-center md:text-left">
            <div class="mb-4 md:mb-0">
                <h3 class="text-xl font-bold mb-2">UrbanEssentials</h3>
                <p class="text-gray-400">&copy; 2025 UrbanEssentials. All rights reserved.</p>
            </div>
            <nav class="mb-4 md:mb-0">
                <ul class="flex flex-wrap justify-center md:justify-end space-x-4">
                    <li><a href="privacy-policy.html" class="text-gray-400 hover:text-white text-sm">Privacy Policy</a></li>
                    <li><a href="terms-conditions.html" class="text-gray-400 hover:text-white text-sm">Terms & Conditions</a></li>
                    <li><a href="return-policy.html" class="text-gray-400 hover:text-white text-sm">Return Policy</a></li>
                    <li><a href="shipping-policy.html" class="text-gray-400 hover:text-white text-sm">Shipping Policy</a></li>
                </ul>
            </nav>
            <div class="text-gray-400 text-sm">
                <p>Contact Us: info@urbanessentials.com</p>
                <p>Follow Us: <a href="#" class="hover:text-white">Facebook</a> | <a href="#" class="hover:text-white">Instagram</a></p>
            </div>
        </div>
    </footer>
</body>
</html>
```html
<!-- blog.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Urban Explorer Essentials</title>
    <!-- Tailwind CSS CDN -->
    <script src="[https://cdn.tailwindcss.com](https://cdn.tailwindcss.com)"></script>
    <link href="[https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap](https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap)" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc; /* Light gray background */
            color: #334155; /* Darker text */
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem;
        }
        .nav-link {
            @apply text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition duration-300 ease-in-out;
        }
        .btn-primary {
            @apply bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out;
        }
        .card {
            @apply bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 ease-in-out hover:scale-105;
        }
    </style>
</head>
<body class="antialiased">
    <header class="bg-white shadow-sm py-4">
        <div class="container flex justify-between items-center">
            <div class="flex-shrink-0">
                <a href="index.html" class="text-2xl font-bold text-blue-800">
                    Urban<span class="text-blue-600">Essentials</span>
                </a>
            </div>
            <nav class="hidden md:block">
                <ul class="flex space-x-4">
                    <li><a href="index.html" class="nav-link">Home</a></li>
                    <li><a href="shop.html" class="nav-link">Shop</a></li>
                    <li><a href="blog.html" class="nav-link">Blog</a></li>
                    <li><a href="about.html" class="nav-link">About Us</a></li>
                    <li><a href="contact.html" class="nav-link">Contact</a></li>
                    <li><a href="faq.html" class="nav-link">FAQ</a></li>
                </ul>
            </nav>
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-700 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="[http://www.w3.org/2000/svg](http://www.w3.org/2000/svg)">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="md:hidden hidden bg-white shadow-md py-2">
            <ul class="flex flex-col items-center space-y-2">
                <li><a href="index.html" class="nav-link">Home</a></li>
                <li><a href="shop.html" class="nav-link">Shop</a></li>
                <li><a href="blog.html" class="nav-link">Blog</a></li>
                <li><a href="about.html" class="nav-link">About Us</a></li>
                <li><a href="contact.html" class="nav-link">Contact</a></li>
                <li><a href="faq.html" class="nav-link">FAQ</a></li>
            </ul>
        </div>
    </header>

    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>

    <main class="container py-8">
        <h1 class="text-4xl font-bold text-blue-800 mb-8 text-center">Urban Explorer Blog</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Blog Post 1 -->
            <div class="card">
                <img src="[https://placehold.co/600x300/3B82F6/FFFFFF?text=City+Travel+Tips](https://placehold.co/600x300/3B82F6/FFFFFF?text=City+Travel+Tips)" alt="City Travel Tips" class="w-full h-48 object-cover rounded-t-xl">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold text-blue-700 mb-2">5 Must-Know Tips for Navigating Any Major City</h2>
                    <p class="text-gray-600 text-sm mb-4">Learn how to make your urban adventures seamless and enjoyable, from public transport to hidden gems.</p>
                    <a href="#" class="text-blue-600 hover:underline">Read More &rarr;</a>
                </div>
            </div>

            <!-- Blog Post 2 -->
            <div class="card">
                <img src="[https://placehold.co/600x300/EF4444/FFFFFF?text=Packing+Light](https://placehold.co/600x300/EF4444/FFFFFF?text=Packing+Light)" alt="Packing Light" class="w-full h-48 object-cover rounded-t-xl">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold text-blue-700 mb-2">The Art of Packing Light for a Weekend City Break</h2>
                    <p class="text-gray-600 text-sm mb-4">Discover essential items that save space without compromising on style or functionality.</p>
                    <a href="#" class="text-blue-600 hover:underline">Read More &rarr;</a>
                </div>
            </div>

            <!-- Blog Post 3 -->
            <div class="card">
                <img src="[https://placehold.co/600x300/22C55E/FFFFFF?text=Safety+Tips](https://placehold.co/600x300/22C55E/FFFFFF?text=Safety+Tips)" alt="Urban Safety Tips" class="w-full h-48 object-cover rounded-t-xl">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold text-blue-700 mb-2">Staying Safe: Essential Urban Travel Safety Tips</h2>
                    <p class="text-gray-600 text-sm mb-4">Practical advice and products to help you stay secure while exploring new cities.</p>
                    <a href="#" class="text-blue-600 hover:underline">Read More &rarr;</a>
                </div>
            </div>

            <!-- Blog Post 4 -->
            <div class="card">
                <img src="[https://placehold.co/600x300/F97316/FFFFFF?text=Best+Shoes](https://placehold.co/600x300/F97316/FFFFFF?text=Best+Shoes)" alt="Best Walking Shoes for Cities" class="w-full h-48 object-cover rounded-t-xl">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold text-blue-700 mb-2">Walk the City: Our Top Picks for Comfortable Urban Footwear</h2>
                    <p class="text-gray-600 text-sm mb-4">A comprehensive guide to finding the perfect shoes for endless city exploration.</p>
                    <a href="#" class="text-blue-600 hover:underline">Read More &rarr;</a>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="container flex flex-col md:flex-row justify-between items-center text-center md:text-left">
            <div class="mb-4 md:mb-0">
                <h3 class="text-xl font-bold mb-2">UrbanEssentials</h3>
                <p class="text-gray-400">&copy; 2025 UrbanEssentials. All rights reserved.</p>
            </div>
            <nav class="mb-4 md:mb-0">
                <ul class="flex flex-wrap justify-center md:justify-end space-x-4">
                    <li><a href="privacy-policy.html" class="text-gray-400 hover:text-white text-sm">Privacy Policy</a></li>
                    <li><a href="terms-conditions.html" class="text-gray-400 hover:text-white text-sm">Terms & Conditions</a></li>
                    <li><a href="return-policy.html" class="text-gray-400 hover:text-white text-sm">Return Policy</a></li>
                    <li><a href="shipping-policy.html" class="text-gray-400 hover:text-white text-sm">Shipping Policy</a></li>
                </ul>
            </nav>
            <div class="text-gray-400 text-sm">
                <p>Contact Us: info@urbanessentials.com</p>
                <p>Follow Us: <a href="#" class="hover:text-white">Facebook</a> | <a href="#" class="hover:text-white">Instagram</a></p>
            </div>
        </div>
    </footer>
</body>
</html>
```html
<!-- about.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Urban Explorer Essentials</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc; /* Light gray background */
            color: #334155; /* Darker text */
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem;
        }
        .nav-link {
            @apply text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition duration-300 ease-in-out;
        }
        .btn-primary {
            @apply bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out;
        }
        .card {
            @apply bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 ease-in-out hover:scale-105;
        }
    </style>
</head>
<body class="antialiased">
    <header class="bg-white shadow-sm py-4">
        <div class="container flex justify-between items-center">
            <div class="flex-shrink-0">
                <a href="index.html" class="text-2xl font-bold text-blue-800">
                    Urban<span class="text-blue-600">Essentials</span>
                </a>
            </div>
            <nav class="hidden md:block">
                <ul class="flex space-x-4">
                    <li><a href="index.html" class="nav-link">Home</a></li>
                    <li><a href="shop.html" class="nav-link">Shop</a></li>
                    <li><a href="blog.html" class="nav-link">Blog</a></li>
                    <li><a href="about.html" class="nav-link">About Us</a></li>
                    <li><a href="contact.html" class="nav-link">Contact</a></li>
                    <li><a href="faq.html" class="nav-link">FAQ</a></li>
                </ul>
            </nav>
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-700 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="md:hidden hidden bg-white shadow-md py-2">
            <ul class="flex flex-col items-center space-y-2">
                <li><a href="index.html" class="nav-link">Home</a></li>
                <li><a href="shop.html" class="nav-link">Shop</a></li>
                <li><a href="blog.html" class="nav-link">Blog</a></li>
                <li><a href="about.html" class="nav-link">About Us</a></li>
                <li><a href="contact.html" class="nav-link">Contact</a></li>
                <li><a href="faq.html" class="nav-link">FAQ</a></li>
            </ul>
        </div>
    </header>

    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>

    <main class="container py-8">
        <h1 class="text-4xl font-bold text-blue-800 mb-8 text-center">About UrbanEssentials</h1>

        <div class="bg-white rounded-xl shadow-lg p-8 leading-relaxed text-gray-700">
            <p class="mb-4">Welcome to UrbanEssentials, your trusted companion for navigating the vibrant streets of the USA's greatest cities. We believe that exploring a new urban landscape should be an exhilarating and seamless experience, free from worries about security, connectivity, or comfort.</p>

            <p class="mb-4">Our journey began with a simple observation: city travelers often face unique challenges. From crowded public transport to long days of sightseeing, the right gear can make all the difference. That's why we meticulously curate a collection of high-quality, innovative products designed specifically for the urban explorer.</p>

            <h2 class="text-2xl font-semibold text-blue-700 mt-8 mb-4">Our Mission</h2>
            <p class="mb-4">Our mission is to empower you to explore every corner of the city with confidence and ease. We handpick items that combine functionality, durability, and style, ensuring you're always prepared for whatever your urban adventure throws your way.</p>

            <h2 class="text-2xl font-semibold text-blue-700 mt-8 mb-4">What We Offer</h2>
            <ul class="list-disc list-inside mb-4 space-y-2">
                <li><strong>Secure & Smart Bags:</strong> Anti-theft designs, hidden pockets, and RFID protection to keep your valuables safe.</li>
                <li><strong>Power & Tech Essentials:</strong> Portable chargers, universal adapters, and clever organizers to keep you connected.</li>
                <li><strong>Comfortable Footwear:</strong> Stylish and supportive shoes designed for endless walking and city exploration.</li>
                <li><strong>Health & Safety Kits:</strong> Compact first-aid, reusable water bottles, and hygiene essentials for peace of mind.</li>
            </ul>

            <p>At UrbanEssentials, we're more than just a store; we're a community of passionate travelers dedicated to making your city breaks unforgettable. Thank you for choosing us to be a part of your next urban adventure!</p>
        </div>
    </main>

    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="container flex flex-col md:flex-row justify-between items-center text-center md:text-left">
            <div class="mb-4 md:mb-0">
                <h3 class="text-xl font-bold mb-2">UrbanEssentials</h3>
                <p class="text-gray-400">&copy; 2025 UrbanEssentials. All rights reserved.</p>
            </div>
            <nav class="mb-4 md:mb-0">
                <ul class="flex flex-wrap justify-center md:justify-end space-x-4">
                    <li><a href="privacy-policy.html" class="text-gray-400 hover:text-white text-sm">Privacy Policy</a></li>
                    <li><a href="terms-conditions.html" class="text-gray-400 hover:text-white text-sm">Terms & Conditions</a></li>
                    <li><a href="return-policy.html" class="text-gray-400 hover:text-white text-sm">Return Policy</a></li>
                    <li><a href="shipping-policy.html" class="text-gray-400 hover:text-white text-sm">Shipping Policy</a></li>
                </ul>
            </nav>
            <div class="text-gray-400 text-sm">
                <p>Contact Us: info@urbanessentials.com</p>
                <p>Follow Us: <a href="#" class="hover:text-white">Facebook</a> | <a href="#" class="hover:text-white">Instagram</a></p>
            </div>
        </div>
    </footer>
</body>
</html>
```html
<!-- contact.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Urban Explorer Essentials</title>
    <!-- Tailwind CSS CDN -->
    <script src="[https://cdn.tailwindcss.com](https://cdn.tailwindcss.com)"></script>
    <link href="[https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap](https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap)" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc; /* Light gray background */
            color: #334155; /* Darker text */
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem;
        }
        .nav-link {
            @apply text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition duration-300 ease-in-out;
        }
        .btn-primary {
            @apply bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out;
        }
        .card {
            @apply bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 ease-in-out hover:scale-105;
        }
    </style>
</head>
<body class="antialiased">
    <header class="bg-white shadow-sm py-4">
        <div class="container flex justify-between items-center">
            <div class="flex-shrink-0">
                <a href="index.html" class="text-2xl font-bold text-blue-800">
                    Urban<span class="text-blue-600">Essentials</span>
                </a>
            </div>
            <nav class="hidden md:block">
                <ul class="flex space-x-4">
                    <li><a href="index.html" class="nav-link">Home</a></li>
                    <li><a href="shop.html" class="nav-link">Shop</a></li>
                    <li><a href="blog.html" class="nav-link">Blog</a></li>
                    <li><a href="about.html" class="nav-link">About Us</a></li>
                    <li><a href="contact.html" class="nav-link">Contact</a></li>
                    <li><a href="faq.html" class="nav-link">FAQ</a></li>
                </ul>
            </nav>
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-700 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="[http://www.w3.org/2000/svg](http://www.w3.org/2000/svg)">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="md:hidden hidden bg-white shadow-md py-2">
            <ul class="flex flex-col items-center space-y-2">
                <li><a href="index.html" class="nav-link">Home</a></li>
                <li><a href="shop.html" class="nav-link">Shop</a></li>
                <li><a href="blog.html" class="nav-link">Blog</a></li>
                <li><a href="about.html" class="nav-link">About Us</a></li>
                <li><a href="contact.html" class="nav-link">Contact</a></li>
                <li><a href="faq.html" class="nav-link">FAQ</a></li>
            </ul>
        </div>
    </header>

    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>

    <main class="container py-8">
        <h1 class="text-4xl font-bold text-blue-800 mb-8 text-center">Contact Us</h1>

        <div class="bg-white rounded-xl shadow-lg p-8">
            <p class="mb-6 text-gray-700 leading-relaxed">Have a question, feedback, or need assistance? We're here to help! Please fill out the form below or reach out to us directly using the contact details provided.</p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h2 class="text-2xl font-semibold text-blue-700 mb-4">Get in Touch</h2>
                    <form action="#" method="POST" class="space-y-4">
                        <div>
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                            <input type="text" id="name" name="name" class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500" required>
                        </div>
                        <div>
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                            <input type="email" id="email" name="email" class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500" required>
                        </div>
                        <div>
                            <label for="subject" class="block text-gray-700 text-sm font-bold mb-2">Subject:</label>
                            <input type="text" id="subject" name="subject" class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500" required>
                        </div>
                        <div>
                            <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Message:</label>
                            <textarea id="message" name="message" rows="5" class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500" required></textarea>
                        </div>
                        <button type="submit" class="btn-primary">Send Message</button>
                    </form>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold text-blue-700 mb-4">Our Details</h2>
                    <p class="text-gray-700 mb-2"><strong>Email:</strong> info@urbanessentials.com</p>
                    <p class="text-gray-700 mb-2"><strong>Phone:</strong> +1 (555) 123-4567</p>
                    <p class="text-gray-700 mb-2"><strong>Address:</strong> 123 City Explorer Lane, Suite 100, Metropolis, USA 12345</p>

                    <h3 class="text-xl font-semibold text-blue-700 mt-6 mb-3">Business Hours:</h3>
                    <p class="text-gray-700">Monday - Friday: 9:00 AM - 5:00 PM (EST)</p>
                    <p class="text-gray-700">Saturday: 10:00 AM - 2:00 PM (EST)</p>
                    <p class="text-gray-700">Sunday: Closed</p>

                    <h3 class="text-xl font-semibold text-blue-700 mt-6 mb-3">Follow Us:</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-blue-600 hover:text-blue-800 transition duration-300 ease-in-out">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33V22C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="text-blue-600 hover:text-blue-800 transition duration-300 ease-in-out">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 4.29 2.768 7.93 6.602 9.206-.05.11-.08.22-.08.332 0 .09.03.18.08.26l.004.008c.05.08.08.16.08.26V22h7.828c.05-.08.08-.16.08-.26l.004-.008c.05-.08.08-.17.08-.262 0-.112-.03-.222-.08-.332C19.232 19.93 22 16.29 22 12c0-5.523-4.477-10-10-10zM12 20.4c-4.64 0-8.4-3.76-8.4-8.4s3.76-8.4 8.4-8.4 8.4 3.76 8.4 8.4-3.76 8.4-8.4 8.4zM12 6.5c-3.033 0-5.5 2.467-5.5 5.5s2.467 5.5 5.5 5.5 5.5-2.467 5.5-5.5-2.467-5.5-5.5-5.5zM12 15.5c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5 3.5-3.5 3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="container flex flex-col md:flex-row justify-between items-center text-center md:text-left">
            <div class="mb-4 md:mb-0">
                <h3 class="text-xl font-bold mb-2">UrbanEssentials</h3>
                <p class="text-gray-400">&copy; 2025 UrbanEssentials. All rights reserved.</p>
            </div>
            <nav class="mb-4 md:mb-0">
                <ul class="flex flex-wrap justify-center md:justify-end space-x-4">
                    <li><a href="privacy-policy.html" class="text-gray-400 hover:text-white text-sm">Privacy Policy</a></li>
                    <li><a href="terms-conditions.html" class="text-gray-400 hover:text-white text-sm">Terms & Conditions</a></li>
                    <li><a href="return-policy.html" class="text-gray-400 hover:text-white text-sm">Return Policy</a></li>
                    <li><a href="shipping-policy.html" class="text-gray-400 hover:text-white text-sm">Shipping Policy</a></li>
                </ul>
            </nav>
            <div class="text-gray-400 text-sm">
                <p>Contact Us: info@urbanessentials.com</p>
                <p>Follow Us: <a href="#" class="hover:text-white">Facebook</a> | <a href="#" class="hover:text-white">Instagram</a></p>
            </div>
        </div>
    </footer>
</body>
</html>
```html
<!-- privacy-policy.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy - Urban Explorer Essentials</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc; /* Light gray background */
            color: #334155; /* Darker text */
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem;
        }
        .nav-link {
            @apply text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition duration-300 ease-in-out;
        }
        .btn-primary {
            @apply bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out;
        }
        .card {
            @apply bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 ease-in-out hover:scale-105;
        }
    </style>
</head>
<body class="antialiased">
    <header class="bg-white shadow-sm py-4">
        <div class="container flex justify-between items-center">
            <div class="flex-shrink-0">
                <a href="index.html" class="text-2xl font-bold text-blue-800">
                    Urban<span class="text-blue-600">Essentials</span>
                </a>
            </div>
            <nav class="hidden md:block">
                <ul class="flex space-x-4">
                    <li><a href="index.html" class="nav-link">Home</a></li>
                    <li><a href="shop.html" class="nav-link">Shop</a></li>
                    <li><a href="blog.html" class="nav-link">Blog</a></li>
                    <li><a href="about.html" class="nav-link">About Us</a></li>
                    <li><a href="contact.html" class="nav-link">Contact</a></li>
                    <li><a href="faq.html" class="nav-link">FAQ</a></li>
                </ul>
            </nav>
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-700 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="md:hidden hidden bg-white shadow-md py-2">
            <ul class="flex flex-col items-center space-y-2">
                <li><a href="index.html" class="nav-link">Home</a></li>
                <li><a href="shop.html" class="nav-link">Shop</a></li>
                <li><a href="blog.html" class="nav-link">Blog</a></li>
                <li><a href="about.html" class="nav-link">About Us</a></li>
                <li><a href="contact.html" class="nav-link">Contact</a></li>
                <li><a href="faq.html" class="nav-link">FAQ</a></li>
            </ul>
        </div>
    </header>

    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>

    <main class="container py-8">
        <h1 class="text-4xl font-bold text-blue-800 mb-8 text-center">Privacy Policy</h1>

        <div class="bg-white rounded-xl shadow-lg p-8 leading-relaxed text-gray-700">
            <p class="mb-4">At UrbanEssentials, we are committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website urbanessentials.com, including any other media form, media channel, mobile website, or mobile application related or connected thereto (collectively, the “Site”). Please read this privacy policy carefully. If you do not agree with the terms of this privacy policy, please do not access the Site.</p>

            <h2 class="text-2xl font-semibold text-blue-700 mt-8 mb-4">1. Collection of Your Information</h2>
            <p class="mb-4">We may collect information about you in a variety of ways. The information we may collect on the Site includes:</p>
            <h3 class="text-xl font-semibold text-blue-700 mt-4 mb-2">Personal Data</h3>
            <p class="mb-4">Personally identifiable information, such as your name, shipping address, email address, and telephone number, and demographic information, such as your age, gender, hometown, and interests, that you voluntarily give to us when you register with the Site or when you choose to participate in various activities related to the Site, such as online chat and message boards.</p>
            <h3 class="text-xl font-semibold text-blue-700 mt-4 mb-2">Derivative Data</h3>
            <p class="mb-4">Information our servers automatically collect when you access the Site, such as your IP address, your browser type, your operating system, your access times, and the pages you have viewed directly before and after accessing the Site.</p>

            <h2 class="text-2xl font-semibold text-blue-700 mt-8 mb-4">2. Use of Your Information</h2>
            <p class="mb-4">Having accurate information about you permits us to provide you with a smooth, efficient, and customized experience. Specifically, we may use information collected about you via the Site to:</p>
            <ul class="list-disc list-inside mb-4 space-y-2">
                <li>Create and manage your account.</li>
                <li>Process your transactions and send you related information, including purchase confirmations and invoices.</li>
                <li>Email you regarding your account or order.</li>
                <li>Fulfill and manage purchases, orders, payments, and other transactions related to the Site.</li>
                <li>Generate a personal profile about you to make future visits to the Site more personalized.</li>
                <li>Increase the efficiency and operation of the Site.</li>
                <li>Monitor and analyze usage and trends to improve your experience with the Site.</li>
                <li>Notify you of updates to the Site.</li>
                <li>Offer new products, services, mobile applications, and/or recommendations to you.</li>
                <li>Perform other business activities as needed.</li>
            </ul>

            <h2 class="text-2xl font-semibold text-blue-700 mt-8 mb-4">3. Disclosure of Your Information</h2>
            <p class="mb-4">We may share information we have collected about you in certain situations. Your information may be disclosed as follows:</p>
            <h3 class="text-xl font-semibold text-blue-700 mt-4 mb-2">By Law or to Protect Rights</h3>
            <p class="mb-4">If we believe the release of information about you is necessary to respond to legal process, to investigate or remedy potential violations of our policies, or to protect the rights, property, or safety of others, we may share your information as permitted or required by any applicable law, rule, or regulation.</p>
            <h3 class="text-xl font-semibold text-blue-700 mt-4 mb-2">Third-Party Service Providers</h3>
            <p class="mb-4">We may share your information with third parties that perform services for us or on our behalf, including payment processing, data analysis, email delivery, hosting services, customer service, and marketing assistance.</p>

            <h2 class="text-2xl font-semibold text-blue-700 mt-8 mb-4">4. Security of Your Information</h2>
            <p class="mb-4">We use administrative, technical, and physical security measures to help protect your personal information. While we have taken reasonable steps to secure the personal information you provide to us, please be aware that despite our efforts, no security measures are perfect or impenetrable, and no method of data transmission can be guaranteed against any interception or other type of misuse.</p>

            <h2 class="text-2xl font-semibold text-blue-700 mt-8 mb-4">5. Policy for Children</h2>
            <p class="mb-4">We do not knowingly solicit information from or market to children under the age of 13. If you become aware of any data we have collected from children under age 13, please contact us using the contact information provided below.</p>

            <h2 class="text-2xl font-semibold text-blue-700 mt-8 mb-4">6. Changes to This Privacy Policy</h2>
            <p class="mb-4">We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page. You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</p>

            <h2 class="text-2xl font-semibold text-blue-700 mt-8 mb-4">7. Contact Us</h2>
            <p class="mb-4">If you have questions or comments about this Privacy Policy, please contact us at: info@urbanessentials.com</p>
        </div>
    </main>

    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="container flex flex-col md:flex-row justify-between items-center text-center md:text-left">
            <div class="mb-4 md:mb-0">
                <h3 class="text-xl font-bold mb-2">UrbanEssentials</h3>
                <p class="text-gray-400">&copy; 2025 UrbanEssentials. All rights reserved.</p>
            </div>
            <nav class="mb-4 md:mb-0">
                <ul class="flex flex-wrap justify-center md:justify-end space-x-4">
                    <li><a href="privacy-policy.html" class="text-gray-400 hover:text-white text-sm">Privacy Policy</a></li>
                    <li><a href="terms-conditions.html" class="text-gray-400 hover:text-white text-sm">Terms & Conditions</a></li>
                    <li><a href="return-policy.html" class="text-gray-400 hover:text-white text-sm">Return Policy</a></li>
                    <li><a href="shipping-policy.html" class="text-gray-400 hover:text-white text-sm">Shipping Policy</a></li>
                </ul>
            </nav>
            <div class="text-gray-400 text-sm">
                <p>Contact Us: info@urbanessentials.com</p>
                <p>Follow Us: <a href="#" class="hover:text-white">Facebook</a> | <a href="#" class="hover:text-white">Instagram</a></p>
            </div>
        </div>
    </footer>
</body>
</html>
```html
<!-- terms-conditions.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms & Conditions - Urban Explorer Essentials</title>
    <!-- Tailwind CSS CDN -->
    <script src="[https://cdn.tailwindcss.com](https://cdn.tailwindcss.com)"></script>
    <link href="[https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap](https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap)" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc; /* Light gray background */
            color: #334155; /* Darker text */
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem;
        }
        .nav-link {
            @apply text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition duration-300 ease-in-out;
        }
        .btn-primary {
            @apply bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out;
        }
        .card {
            @apply bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 ease-in-out hover:scale-105;
        }
    </style>
</head>
<body class="antialiased">
    <header class="bg-white shadow-sm py-4">
        <div class="container flex justify-between items-center">
            <div class="flex-shrink-0">
                <a href="index.html" class="text-2xl font-bold text-blue-800">
                    Urban<span class="text-blue-600">Essentials</span>
                </a>
            </div>
            <nav class="hidden md:block">
                <ul class="flex space-x-4">
                    <li><a href="index.html" class="nav-link">Home</a></li>
                    <li><a href="shop.html" class="nav-link">Shop</a></li>
                    <li><a href="blog.html" class="nav-link">Blog</a></li>
                    <li><a href="about.html" class="nav-link">About Us</a></li>
                    <li><a href="contact.html" class="nav-link">Contact</a></li>
                    <li><a href="faq.html" class="nav-link">FAQ</a></li>
                </ul>
            </nav>
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-700 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="[http://www.w3.org/2000/svg](http://www.w3.org/2000/svg)">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="md:hidden hidden bg-white shadow-md py-2">
            <ul class="flex flex-col items-center space-y-2">
                <li><a href="index.html" class="nav-link">Home</a></li>
                <li><a href="shop.html" class="nav-link">Shop</a></li>
                <li><a href="blog.html" class="nav-link">Blog</a></li>
                <li><a href="about.html" class="nav-link">About Us</a></li>
                <li><a href="contact.html" class="nav-link">Contact</a></li>
                <li><a href="faq.html" class="nav-link">FAQ</a></li>
            </ul>
        </div>
    </header>

    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>

    <main class="container py-8">
        <h1 class="text-4xl font-bold text-blue-800 mb-8 text-center">Terms & Conditions</h1>

        <div class="bg-white rounded-xl shadow-lg p-8 leading-relaxed text-gray-700">
            <p class="mb-4">Welcome to UrbanEssentials! These terms and conditions outline the rules and regulations for the use of UrbanEssentials' Website, located at urbanessentials.com.</p>

            <p class="mb-4">By accessing this website we assume you accept these terms and conditions. Do not continue to use UrbanEssentials if you do not agree to take all of the terms and conditions stated on this page.</p>

            <h2 class="text-2xl font-semibold text-blue-700 mt-8 mb-4">1. Intellectual Property Rights</h2>
            <p class="mb-4">Other than the content you own, under these Terms, UrbanEssentials and/or its licensors own all the intellectual property rights and materials contained in this Website. You are granted a limited license only for purposes of viewing the material contained on this Website.</p>

            <h2 class="text-2xl font-semibold text-blue-700 mt-8 mb-4">2. Restrictions</h2>
            <p class="mb-4">You are specifically restricted from all of the following:</p>
            <ul class="list-disc list-inside mb-4 space-y-2">
                <li>publishing any Website material in any other media;</li>
                <li>selling, sublicensing and/or otherwise commercializing any Website material;</li>
                <li>publicly performing and/or showing any Website material;</li>
                <li>using this Website in any way that is or may be damaging to this Website;</li>
                <li>using this Website in any way that impacts user access to this Website;</li>
                <li>using this Website contrary to applicable laws and regulations, or in any way may cause harm to the Website, or to any person or business entity;</li>
                <li>engaging in any data mining, data harvesting, data extracting or any other similar activity in relation to this Website;</li>
                <li>using this Website to engage in any advertising or marketing.</li>
            </ul>
            <p class="mb-4">Certain areas of this Website are restricted from being access by you and UrbanEssentials may further restrict access by you to any areas of this Website, at any time, in absolute discretion. Any user ID and password you may have for this Website are confidential and you must maintain confidentiality as well.</p>

            <h2 class="text-2xl font-semibold text-blue-700 mt-8 mb-4">3. Your Content</h2>
            <p class="mb-4">In these Website Standard Terms and Conditions, "Your Content" shall mean any audio, video text, images or other material you choose to display on this Website. By displaying Your Content, you grant UrbanEssentials a non-exclusive, worldwide irrevocable, sub licensable license to use, reproduce, adapt, publish, translate and distribute it in any and all media. Your Content must be your own and must not be invading any third-party’s rights. UrbanEssentials reserves the right to remove any of Your Content from this Website at any time without notice.</p>

            <h2 class="text-2xl font-semibold text-blue-700 mt-8 mb-4">4. No warranties</h2>
            <p class="mb-4">This Website is provided "as is," with all faults, and UrbanEssentials express no representations or warranties, of any kind related to this Website or the materials contained on this Website. Also, nothing contained on this Website shall be interpreted as advising you.</p>

            <h2 class="text-2xl font-semibold text-blue-700 mt-8 mb-4">5. Limitation of liability</h2>
            <p class="mb-4">In no event shall UrbanEssentials, nor any of its officers, directors and employees, be held liable for anything arising out of or in any way connected with your use of this Website whether such liability is under contract. UrbanEssentials, including its officers, directors and employees shall not be held liable for any indirect, consequential or special liability arising out of or in any way related to your use of this Website.</p>

            <h2 class="text-2xl font-semibold text-blue-700 mt-8 mb-4">6. Indemnification</h2>
            <p class="mb-4">You hereby indemnify to the fullest extent UrbanEssentials from and against any and/or all liabilities, costs, demands, causes of action, damages and expenses arising in any way related to your breach of any of the provisions of these Terms.</p>

            <h2 class="text-2xl font-semibold text-blue-700 mt-8 mb-4">7. Severability</h2>
            <p class="mb-4">If any provision of these Terms is found to be invalid under any applicable law, such provisions shall be deleted without affecting the remaining provisions herein.</p>

            <h2 class="text-2xl font-semibold text-blue-700 mt-8 mb-4">8. Variation of Terms</h2>
            <p class="mb-4">UrbanEssentials is permitted to revise these Terms at any time as it sees fit, and by using this Website you are expected to review these Terms on a regular basis.</p>

            <h2 class="text-2xl font-semibold text-blue-700 mt-8 mb-4">9. Assignment</h2>
            <p class="mb-4">The UrbanEssentials is allowed to assign, transfer, and subcontract its rights and/or obligations under these Terms without any notification. However, you are not allowed to assign, transfer, or subcontract any of your rights and/or obligations under these Terms.</p>

            <h2 class="text-2xl font-semibold text-blue-700 mt-8 mb-4">10. Entire Agreement</h2>
            <p class="mb-4">These Terms constitute the entire agreement between UrbanEssentials and you in relation to your use of this Website, and supersede all prior agreements and understandings.</p>

            <h2 class="text-2xl font-semibold text-blue-700 mt-8 mb-4">11. Governing Law & Jurisdiction</h2>
            <p class="mb-4">These Terms will be governed by and interpreted in accordance with the laws of the State of [Your State], and you submit to the non-exclusive jurisdiction of the state and federal courts located in [Your State] for the resolution of any disputes.</p>
        </div>
    </main>

    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="container flex flex-col md:flex-row justify-between items-center text-center md:text-left">
            <div class="mb-4 md:mb-0">
                <h3 class="text-xl font-bold mb-2">UrbanEssentials</h3>
                <p class="text-gray-400">&copy; 2025 UrbanEssentials. All rights reserved.</p>
            </div>
            <nav class="mb-4 md:mb-0">
                <ul class="flex flex-wrap justify-center md:justify-end space-x-4">
                    <li><a href="privacy-policy.html" class="text-gray-400 hover:text-white text-sm">Privacy Policy</a></li>
                    <li><a href="terms-conditions.html" class="text-gray-400 hover:text-white text-sm">Terms & Conditions</a></li>
                    <li><a href="return-policy.html" class="text-gray-400 hover:text-white text-sm">Return Policy</a></li>
                    <li><a href="shipping-policy.html" class="text-gray-400 hover:text-white text-sm">Shipping Policy</a></li>
                </ul>
            </nav>
            <div class="text-gray-400 text-sm">
                <p>Contact Us: info@urbanessentials.com</p>
                <p>Follow Us: <a href="#" class="hover:text-white">Facebook</a> | <a href="#" class="hover:text-white">Instagram</a></p>
            </div>
        </div>
    </footer>
</body>
</html>
```html
<!-- return-policy.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Policy - Urban Explorer Essentials</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc; /* Light gray background */
            color: #334155; /* Darker text */
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem;
        }
        .nav-link {
            @apply text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition duration-300 ease-in-out;
        }
        .btn-primary {
            @apply bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out;
        }
        .card {
            @apply bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 ease-in-out hover:scale-105;
        }
    </style>
</head>
<body class="antialiased">
    <header class="bg-white shadow-sm py-4">
        <div class="container flex justify-between items-center">
            <div class="flex-shrink-0">
                <a href="index.html" class="text-2xl font-bold text-blue-800">
                    Urban<span class="text-blue-600">Essentials</span>
                </a>
            </div>
            <nav class="hidden md:block">
                <ul class="flex space-x-4">
                    <li><a href="index.html" class="nav-link">Home</a></li>
                    <li><a href="shop.html" class="nav-link">Shop</a></li>
                    <li><a href="blog.html" class="nav-link">Blog</a></li>
                    <li><a href="about.html" class="nav-link">About Us</a></li>
                    <li><a href="contact.html" class="nav-link">Contact</a></li>
                    <li><a href="faq.html" class="nav-link">FAQ</a></li>
                </ul>
            </nav>
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-700 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="md:hidden hidden bg-white shadow-md py-2">
            <ul class="flex flex-col items-center space-y-2">
                <li><a href="index.html" class="nav-link">Home</a></li>
                <li><a href="shop.html" class="nav-link">Shop</a></li>
                <li><a href="blog.html" class="nav-link">Blog</a></li>
                <li><a href="about.html" class="nav-link">About Us</a></li>
                <li><a href="contact.html" class="nav-link">Contact</a></li>
                <li><a href="faq.html" class="nav-link">FAQ</a></li>
            </ul>
        </div>
    </header>

    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>

    <main class="container py-8">
        <h1 class="text-4xl font-bold text-blue-800 mb-8 text-center">Return Policy</h1>

        <div class="bg-white rounded-xl shadow-lg p-8 leading-relaxed text-gray-700">
            <p class="mb-4">At UrbanEssentials, your satisfaction is our priority. If you are not completely satisfied with your purchase, we're here to help. Please read our return policy carefully.</p>

            <h2 class="text-2xl font-semibold text-blue-700 mt-8 mb-4">1. Eligibility for Returns</h2>
            <ul class="list-disc list-inside mb-4 space-y-2">
                <li>Items must be returned within 30 days of the purchase date.</li>
                <li>Items must be unused, in their original packaging, and in the same condition that you received them.</li>
                <li>Proof of purchase (order number or receipt) is required for all returns.</li>
                <li>Certain items, such as personalized products or final sale items, may not be eligible for return. Please check product descriptions for specific exclusions.</li>
            </ul>

            <h2 class="text-2xl font-semibold text-blue-700 mt-8 mb-4">2. How to Initiate a Return</h2>
            <p class="mb-4">To initiate a return, please follow these steps:</p>
            <ol class="list-decimal list-inside mb-4 space-y-2">
                <li>Contact our customer service team at <a href="mailto:info@urbanessentials.com" class="text-blue-600 hover:underline">info@urbanessentials.com</a> or call us at +1 (555) 123-4567 to request a Return Merchandise Authorization (RMA) number.</li>
                <li>Clearly write the RMA number on the outside of the package.</li>
                <li>Ship the item(s) back to us at the address provided by our customer service team. You will be responsible for paying for your own shipping costs for returning your item. Shipping costs are non-refundable.</li>
            </ol>

            <h2 class="text-2xl font-semibold text-blue-700 mt-8 mb-4">3. Refunds</h2>
            <p class="mb-4">Once we receive your item, we will inspect it and notify you that we have received your returned item. We will immediately notify you on the status of your refund after inspecting the item. If your return is approved, we will initiate a refund to your original method of payment. You will receive the credit within a certain amount of days, depending on your card issuer's policies.</p>

            <h2 class="text-2xl font-semibold text-blue-700 mt-8 mb-4">4. Exchanges</h2>
            <p class="mb-4">If you need to exchange an item for a different size, color, or a different product, please contact our customer service team. Exchanges are subject to product availability. You may be responsible for shipping costs associated with exchanges.</p>

            <h2 class="text-2xl font-semibold text-blue-700 mt-8 mb-4">5. Damaged or Defective Items</h2>
            <p class="mb-4">If you receive a damaged or defective item, please contact us immediately upon receipt. We will arrange for a replacement or refund, and we will cover the return shipping costs for damaged or defective items.</p>

            <h2 class="text-2xl font-semibold text-blue-700 mt-8 mb-4">6. Contact Us</h2>
            <p class="mb-4">If you have any questions on how to return your item to us, contact us at <a href="mailto:info@urbanessentials.com" class="text-blue-600 hover:underline">info@urbanessentials.com</a>.</p>
        </div>
    </main>

    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="container flex flex-col md:flex-row justify-between items-center text-center md:text-left">
            <div class="mb-4 md:mb-0">
                <h3 class="text-xl font-bold mb-2">UrbanEssentials</h3>
                <p class="text-gray-400">&copy; 2025 UrbanEssentials. All rights reserved.</p>
            </div>
            <nav class="mb-4 md:mb-0">
                <ul class="flex flex-wrap justify-center md:justify-end space-x-4">
                    <li><a href="privacy-policy.html" class="text-gray-400 hover:text-white text-sm">Privacy Policy</a></li>
                    <li><a href="terms-conditions.html" class="text-gray-400 hover:text-white text-sm">Terms & Conditions</a></li>
                    <li><a href="return-policy.html" class="text-gray-400 hover:text-white text-sm">Return Policy</a></li>
                    <li><a href="shipping-policy.html" class="text-gray-400 hover:text-white text-sm">Shipping Policy</a></li>
                </ul>
            </nav>
            <div class="text-gray-400 text-sm">
                <p>Contact Us: info@urbanessentials.com</p>
                <p>Follow Us: <a href="#" class="hover:text-white">Facebook</a> | <a href="#" class="hover:text-white">Instagram</a></p>
            </div>
        </div>
    </footer>
</body>
</html>
```html
<!-- shipping-policy.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shipping Policy - Urban Explorer Essentials</title>
    <!-- Tailwind CSS CDN -->
    <script src="[https://cdn.tailwindcss.com](https://cdn.tailwindcss.com)"></script>
    <link href="[https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap](https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap)" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc; /* Light gray background */
            color: #334155; /* Darker text */
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem;
        }
        .nav-link {
            @apply text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition duration-300 ease-in-out;
        }
        .btn-primary {
            @apply bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out;
        }
        .card {
            @apply bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 ease-in-out hover:scale-105;
        }
    </style>
</head>
<body class="antialiased">
    <header class="bg-white shadow-sm py-4">
        <div class="container flex justify-between items-center">
            <div class="flex-shrink-0">
                <a href="index.html" class="text-2xl font-bold text-blue-800">
                    Urban<span class="text-blue-600">Essentials</span>
                </a>
            </div>
            <nav class="hidden md:block">
                <ul class="flex space-x-4">
                    <li><a href="index.html" class="nav-link">Home</a></li>
                    <li><a href="shop.html" class="nav-link">Shop</a></li>
                    <li><a href="blog.html" class="nav-link">Blog</a></li>
                    <li><a href="about.html" class="nav-link">About Us</a></li>
                    <li><a href="contact.html" class="nav-link">Contact</a></li>
                    <li><a href="faq.html" class="nav-link">FAQ</a></li>
                </ul>
            </nav>
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-700 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="[http://www.w3.org/2000/svg](http://www.w3.org/2000/svg)">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="md:hidden hidden bg-white shadow-md py-2">
            <ul class="flex flex-col items-center space-y-2">
                <li><a href="index.html" class="nav-link">Home</a></li>
                <li><a href="shop.html" class="nav-link">Shop</a></li>
                <li><a href="blog.html" class="nav-link">Blog</a></li>
                <li><a href="about.html" class="nav-link">About Us</a></li>
                <li><a href="contact.html" class="nav-link">Contact</a></li>
                <li><a href="faq.html" class="nav-link">FAQ</a></li>
            </ul>
        </div>
    </header>

    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>

    <main class="container py-8">
        <h1 class="text-4xl font-bold text-blue-800 mb-8 text-center">Shipping Policy</h1>

        <div class="bg-white rounded-xl shadow-lg p-8 leading-relaxed text-gray-700">
            <p class="mb-4">At UrbanEssentials, we are committed to delivering your city break essentials efficiently and reliably. Here's everything you need to know about our shipping process.</p>

            <h2 class="text-2xl font-semibold text-blue-700 mt-8 mb-4">1. Processing Time</h2>
            <p class="mb-4">All orders are processed within 1-2 business days (excluding weekends and holidays) after receiving your order confirmation email. You will receive another notification when your order has shipped.</p>
            <p class="mb-4">During peak seasons or promotional periods, processing times may be longer. We appreciate your patience.</p>

            <h2 class="text-2xl font-semibold text-blue-700 mt-8 mb-4">2. Shipping Rates and Delivery Estimates</h2>
            <p class="mb-4">Shipping charges for your order will be calculated and displayed at checkout.</p>
            <div class="overflow-x-auto mb-4">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                    <thead>
                        <tr class="bg-gray-100">
                        <th class="py-3 px-4 border-b text-left text-sm font-semibold text-gray-600">Shipping Method</th>
                        <th class="py-3 px-4 border-b text-left text-sm font-semibold text-gray-600">Estimated Delivery Time</th>
                        <th class="py-3 px-4 border-b text-left text-sm font-semibold text-gray-600">Cost</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-3 px-4 border-b text-gray-700">Standard Shipping</td>
                        <td class="py-3 px-4 border-b text-gray-700">3-7 business days</td>
                        <td class="py-3 px-4 border-b text-gray-700">$5.99 (Free for orders over $75)</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 border-b text-gray-700">Expedited Shipping</td>
                        <td class="py-3 px-4 border-b text-gray-700">2-3 business days</td>
                        <td class="py-3 px-4 border-b text-gray-700">$12.99</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 text-gray-700">Overnight Shipping</td>
                        <td class="py-3 px-4 text-gray-700">1 business day</td>
                        <td class="py-3 px-4 text-gray-700">$29.99</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="mb-4 text-sm text-gray-600">Delivery delays can occasionally occur. We do not ship to P.O. boxes.</p>

        <h2 class="text-2xl font-semibold text-blue-700 mt-8 mb-4">3. Shipping Confirmation and Order Tracking</h2>
        <p class="mb-4">You will receive a Shipping Confirmation email once your order has shipped, containing your tracking number(s). The tracking number will be active within 24 hours.</p>

        <h2 class="text-2xl font-semibold text-blue-700 mt-8 mb-4">4. International Shipping</h2>
        <p class="mb-4">At this time, UrbanEssentials only ships within the United States. We hope to expand our shipping capabilities to international destinations in the future.</p>

        <h2 class="text-2xl font-semibold text-blue-700 mt-8 mb-4">5. Customs, Duties, and Taxes</h2>
        <p class="mb-4">UrbanEssentials is not responsible for any customs and taxes applied to your order. All fees imposed during or after shipping are the responsibility of the customer (tariffs, taxes, etc.).</p>

        <h2 class="text-2xl font-semibold text-blue-700 mt-8 mb-4">6. Damages</h2>
        <p class="mb-4">UrbanEssentials is not liable for any products damaged or lost during shipping. If you received your order damaged, please contact the shipment carrier to file a claim. Please save all packaging materials and damaged goods before filing a claim.</p>

        <h2 class="text-2xl font-semibold text-blue-700 mt-8 mb-4">7. Contact Us</h2>
        <p class="mb-4">If you have any questions about our Shipping Policy, please contact us at <a href="mailto:info@urbanessentials.com" class="text-blue-600 hover:underline">info@urbanessentials.com</a>.</p>
    </div>
</main>

    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="container flex flex-col md:flex-row justify-between items-center text-center md:text-left">
            <div class="mb-4 md:mb-0">
                <h3 class="text-xl font-bold mb-2">UrbanEssentials</h3>
                <p class="text-gray-400">&copy; 2025 UrbanEssentials. All rights reserved.</p>
            </div>
            <nav class="mb-4 md:mb-0">
                <ul class="flex flex-wrap justify-center md:justify-end space-x-4">
                    <li><a href="privacy-policy.html" class="text-gray-400 hover:text-white text-sm">Privacy Policy</a></li>
                    <li><a href="terms-conditions.html" class="text-gray-400 hover:text-white text-sm">Terms & Conditions</a></li>
                    <li><a href="return-policy.html" class="text-gray-400 hover:text-white text-sm">Return Policy</a></li>
                    <li><a href="shipping-policy.html" class="text-gray-400 hover:text-white text-sm">Shipping Policy</a></li>
                </ul>
            </nav>
            <div class="text-gray-400 text-sm">
                <p>Contact Us: info@urbanessentials.com</p>
                <p>Follow Us: <a href="#" class="hover:text-white">Facebook</a> | <a href="#" class="hover:text-white">Instagram</a></p>
            </div>
        </div>
    </footer>
</body>
</html>
```html
<!-- faq.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - Urban Explorer Essentials</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc; /* Light gray background */
            color: #334155; /* Darker text */
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem;
        }
        .nav-link {
            @apply text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition duration-300 ease-in-out;
        }
        .btn-primary {
            @apply bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out;
        }
        .card {
            @apply bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 ease-in-out hover:scale-105;
        }
    </style>
</head>
<body class="antialiased">
    <header class="bg-white shadow-sm py-4">
        <div class="container flex justify-between items-center">
            <div class="flex-shrink-0">
                <a href="index.html" class="text-2xl font-bold text-blue-800">
                    Urban<span class="text-blue-600">Essentials</span>
                </a>
            </div>
            <nav class="hidden md:block">
                <ul class="flex space-x-4">
                    <li><a href="index.html" class="nav-link">Home</a></li>
                    <li><a href="shop.html" class="nav-link">Shop</a></li>
                    <li><a href="blog.html" class="nav-link">Blog</a></li>
                    <li><a href="about.html" class="nav-link">About Us</a></li>
                    <li><a href="contact.html" class="nav-link">Contact</a></li>
                    <li><a href="faq.html" class="nav-link">FAQ</a></li>
                </ul>
            </nav>
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-700 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="md:hidden hidden bg-white shadow-md py-2">
            <ul class="flex flex-col items-center space-y-2">
                <li><a href="index.html" class="nav-link">Home</a></li>
                <li><a href="shop.html" class="nav-link">Shop</a></li>
                <li><a href="blog.html" class="nav-link">Blog</a></li>
                <li><a href="about.html" class="nav-link">About Us</a></li>
                <li><a href="contact.html" class="nav-link">Contact</a></li>
                <li><a href="faq.html" class="nav-link">FAQ</a></li>
            </ul>
        </div>
    </header>

    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>

    <main class="container py-8">
        <h1 class="text-4xl font-bold text-blue-800 mb-8 text-center">Frequently Asked Questions (FAQ)</h1>

        <div class="bg-white rounded-xl shadow-lg p-8">
            <div class="mb-6 pb-4 border-b border-gray-200">
                <h2 class="text-2xl font-semibold text-blue-700 mb-2">General Questions</h2>
                <h3 class="text-xl font-semibold text-gray-800 mt-4 mb-2">What is UrbanEssentials?</h3>
                <p class="text-gray-700 mb-2">UrbanEssentials is an online store specializing in curated travel essentials for urban explorers and city break enthusiasts in the USA. We offer products designed to enhance your comfort, safety, and convenience while navigating cities.</p>

                <h3 class="text-xl font-semibold text-gray-800 mt-4 mb-2">Where are you located?</h3>
                <p class="text-gray-700 mb-2">Our operations are based in the USA. For detailed contact information, please visit our <a href="contact.html" class="text-blue-600 hover:underline">Contact Us</a> page.</p>
            </div>

            <div class="mb-6 pb-4 border-b border-gray-200">
                <h2 class="text-2xl font-semibold text-blue-700 mb-2">Ordering & Payments</h2>
                <h3 class="text-xl font-semibold text-gray-800 mt-4 mb-2">What payment methods do you accept?</h3>
                <p class="text-gray-700 mb-2">We accept all major credit cards (Visa, Mastercard, American Express, Discover) and PayPal.</p>

                <h3 class="text-xl font-semibold text-gray-800 mt-4 mb-2">Is my payment information secure?</h3>
                <p class="text-gray-700 mb-2">Yes, absolutely. We use secure socket layer (SSL) technology to encrypt your personal and payment information during checkout. Your security is our top priority.</p>
            </div>

            <div class="mb-6 pb-4 border-b border-gray-200">
                <h2 class="text-2xl font-semibold text-blue-700 mb-2">Shipping & Returns</h2>
                <h3 class="text-xl font-semibold text-gray-800 mt-4 mb-2">How long does shipping take?</h3>
                <p class="text-gray-700 mb-2">Standard shipping typically takes 3-7 business days within the USA. Expedited and overnight options are also available. Please see our <a href="shipping-policy.html" class="text-blue-600 hover:underline">Shipping Policy</a> for more details.</p>

                <h3 class="text-xl font-semibold text-gray-800 mt-4 mb-2">Do you offer international shipping?</h3>
                <p class="text-gray-700 mb-2">Currently, we only ship within the United States.</p>

                <h3 class="text-xl font-semibold text-gray-800 mt-4 mb-2">What is your return policy?</h3>
                <p class="text-gray-700 mb-2">We offer a 30-day return policy for unused items in their original packaging. For full details on how to return an item and eligibility, please refer to our <a href="return-policy.html" class="text-blue-600 hover:underline">Return Policy</a>.</p>
            </div>

            <div>
                <h2 class="text-2xl font-semibold text-blue-700 mb-2">Product Information</h2>
                <h3 class="text-xl font-semibold text-gray-800 mt-4 mb-2">Are your anti-theft bags truly secure?</h3>
                <p class="text-gray-700 mb-2">Yes, our anti-theft bags feature multiple security elements such as slash-resistant fabric, RFID-blocking pockets, locking zippers, and secure straps to deter pickpockets and thieves. We source from reputable brands known for their security features.</p>

                <h3 class="text-xl font-semibold text-gray-800 mt-4 mb-2">How do I choose the right portable charger?</h3>
                <p class="text-gray-700 mb-2">Consider the capacity (mAh), number of ports, and size. For light use, a smaller capacity is fine. For charging multiple devices or laptops, opt for higher mAh. Check out our blog for a detailed guide on choosing the best power bank!</p>
            </div>
        </div>
    </main>

    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="container flex flex-col md:flex-row justify-between items-center text-center md:text-left">
            <div class="mb-4 md:mb-0">
                <h3 class="text-xl font-bold mb-2">UrbanEssentials</h3>
                <p class="text-gray-400">&copy; 2025 UrbanEssentials. All rights reserved.</p>
            </div>
            <nav class="mb-4 md:mb-0">
                <ul class="flex flex-wrap justify-center md:justify-end space-x-4">
                    <li><a href="privacy-policy.html" class="text-gray-400 hover:text-white text-sm">Privacy Policy</a></li>
                    <li><a href="terms-conditions.html" class="text-gray-400 hover:text-white text-sm">Terms & Conditions</a></li>
                    <li><a href="return-policy.html" class="text-gray-400 hover:text-white text-sm">Return Policy</a></li>
                    <li><a href="shipping-policy.html" class="text-gray-400 hover:text-white text-sm">Shipping Policy</a></li>
                </ul>
            </nav>
            <div class="text-gray-400 text-sm">
                <p>Contact Us: info@urbanessentials.com</p>
                <p>Follow Us: <a href="#" class="hover:text-white">Facebook</a> | <a href="#" class="hover:text-white">Instagram</a></p>
            </div>
        </div>
    </footer>
</body>
</html>
