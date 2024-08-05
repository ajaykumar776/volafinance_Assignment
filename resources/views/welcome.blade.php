<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Component</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    .fullscreen-bg {
    background: url('images/cover.jpg') no-repeat center center;
    background-size: cover; /* Ensures the image covers the entire container */
    background-attachment: fixed; /* Keeps the background image fixed when scrolling */
    color: white;
    height: 100vh; /* Full viewport height */
    width: 100%; /* Full width */
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    position: relative;
}

.header-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.2); /* Semi-transparent overlay */
    z-index: 1; /* Ensure overlay is above the background image */
}

  </style>
</head>
<body class="bg-background text-foreground antialiased">
  <header class="bg-white shadow">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
      <div class="text-2xl font-bold">Vola Finance</div>
      <nav class="space-x-6">
        <a href="#" class="text-gray-700">Home</a>
        <a href="#" class="text-gray-700">Product</a>
        <a href="#" class="text-gray-700">Pricing</a>
        <a href="#" class="text-gray-700">Contact</a>
      </nav>
      <div class="space-x-4">
        <a href="#" class="text-gray-700">Login</a>
        <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded">Become a member</a>
      </div>
    </div>
  </header>
  <main class="fullscreen-bg">
    <div class="header-overlay"></div>
    <div class="container mx-auto text-center text-white">
      <h1 class="text-4xl font-bold" style="color: white;">Creating a Beautiful & Useful Solutions</h1>
      <p class="mt-4">
        We know how large objects will act, but things on a small scale just do not act that way.
      </p>
      <div class="mt-8 space-x-4">
        <a href="#" class="bg-blue-500 text-white px-6 py-3 rounded">Get Quote Now</a>
        <a href="#" class="bg-transparent border border-white text-white px-6 py-3 rounded">Learn More</a>
      </div>
    </div>
</main>


  <section class="container mx-auto py-12 px-6 grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white p-6 rounded shadow">
      <div class="flex items-center space-x-4">
        <svg class="w-12 h-12 text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="12" cy="12" r="8"></circle>
          <line x1="3" y1="3" x2="6" y2="6"></line>
          <line x1="21" y1="3" x2="18" y2="6"></line>
          <line x1="3" y1="21" x2="6" y2="18"></line>
          <line x1="21" y1="21" x2="18" y2="18"></line>
        </svg>
        <div>
          <h2 class="text-xl font-bold">Investment Trading</h2>
          <p class="text-gray-600">The quick fox jumps over the lazy dog</p>
        </div>
      </div>
    </div>
    <div class="bg-white p-6 rounded shadow">
      <div class="flex items-center space-x-4">
        <svg class="w-12 h-12 text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M19 5c-1.5 0-2.8 1.4-3 2-3.5-1.5-11-.3-11 5 0 1.8 0 3 2 4.5V20h4v-2h3v2h4v-4c1-.5 1.7-1 2-2h2v-4h-2c0-1-.5-1.5-1-2h0V5z"></path>
          <path d="M2 9v1c0 1.1.9 2 2 2h1"></path>
          <path d="M16 11h0"></path>
        </svg>
        <div>
          <h2 class="text-xl font-bold">Raising Funds</h2>
          <p class="text-gray-600">The quick fox jumps over the lazy dog</p>
        </div>
      </div>
    </div>
    <div class="bg-blue-500 p-6 rounded shadow text-white">
      <div class="flex items-center space-x-4">
        <svg class="w-12 h-12 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <rect width="16" height="20" x="4" y="2" rx="2"></rect>
          <line x1="8" y1="6" x2="16" y2="6"></line>
          <line x1="16" y1="14" x2="16" y2="18"></line>
          <path d="M16 10h.01"></path>
          <path d="M12 10h.01"></path>
          <path d="M8 10h.01"></path>
          <path d="M12 14h.01"></path>
          <path d="M8 14h.01"></path>
          <path d="M12 18h.01"></path>
          <path d="M8 18h.01"></path>
        </svg>
        <div>
          <h2 class="text-xl font-bold">Financial Analysis</h2>
          <p class="text-gray-200">The quick fox jumps over the lazy dog</p>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
