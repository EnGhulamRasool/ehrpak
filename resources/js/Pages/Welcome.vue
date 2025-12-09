<template>
  <div class="min-h-screen bg-gray-50">
    <!-- Header Component -->
    <Header />

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-[#013220] to-[#015a38] text-white overflow-hidden">
      <div class="absolute inset-0 bg-black opacity-10"></div>
      <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-32">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <!-- Left Content -->
          <div class="space-y-8">
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight">
              Professional Assistance of Visas and Immigration
            </h1>
            <div class="space-y-4 text-gray-100">
              <p class="flex items-start text-lg">
                <span class="text-[#C5A247] mr-3 text-xl">●</span>
                <span>Expert guidance through every step of your visa application process with dedicated support</span>
              </p>
              <p class="flex items-start text-lg">
                <span class="text-[#C5A247] mr-3 text-xl">●</span>
                <span>Comprehensive immigration consulting services for individuals and families worldwide</span>
              </p>
            </div>
            <div class="flex flex-wrap gap-4 pt-4">
              <Link :href="route('candidate.register')" class="bg-[#C5A247] text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-[#B39140] transition-all transform hover:scale-105 shadow-lg">
                Get Started
              </Link>
              <Link :href="route('candidate.login')" class="bg-white text-[#013220] px-8 py-4 rounded-lg text-lg font-semibold hover:bg-gray-100 transition-all shadow-lg">
                Sign In
              </Link>
            </div>
          </div>

          <!-- Right Content - Contact Form -->
          <div class="bg-white rounded-2xl shadow-2xl p-8">
            <h2 class="text-3xl font-bold text-[#013220] mb-6 text-center">
              Request Free Consultation
            </h2>
            <form @submit.prevent="submitForm" class="space-y-5">
              <div>
                <input
                  v-model="form.name"
                  type="text"
                  placeholder="Enter Your Name"
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#C5A247] focus:border-transparent outline-none transition"
                  required
                />
              </div>
              <div>
                <input
                  v-model="form.email"
                  type="email"
                  placeholder="Enter Your Email"
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#C5A247] focus:border-transparent outline-none transition"
                  required
                />
              </div>
              <div>
                <input
                  v-model="form.phone"
                  type="tel"
                  placeholder="Enter Your Phone Number"
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#C5A247] focus:border-transparent outline-none transition"
                  required
                />
              </div>
              <div>
                <select
                  v-model="form.visaType"
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#C5A247] focus:border-transparent outline-none transition text-gray-700"
                  required
                >
                  <option value="">Visa For</option>
                  <option value="work">Work Visa</option>
                  <option value="study">Study Visa</option>
                  <option value="tourist">Tourist Visa</option>
                  <option value="business">Business Visa</option>
                  <option value="family">Family Visa</option>
                </select>
              </div>
              <button
                type="submit"
                class="w-full bg-[#C5A247] text-white py-4 rounded-lg font-bold text-lg hover:bg-[#B39140] transition-all transform hover:scale-105 shadow-lg"
              >
                SEND REQUEST
              </button>
            </form>
          </div>
        </div>
      </div>

      <!-- Decorative Elements -->
    </section>

    <!-- About Section -->
    <section class="py-20 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8">
          <h2 class="text-4xl md:text-5xl font-bold text-[#013220] mb-4">
            Connect with Registered & Best Immigration Consultant in Pakistan
          </h2>
          <div class="w-24 h-1 bg-[#C5A247] mx-auto rounded-full mb-8"></div>
        </div>

        <div class="max-w-5xl mx-auto space-y-6 text-gray-700 leading-relaxed">
          <p class="text-lg">
            <span class="font-semibold text-[#013220]">eHRPakConsultant Consultancy Services</span> is one of the most renowned and trusted immigration & study abroad consultants in Pakistan. We have a successful track record of more than a decade where we offer excellent education consultancy services in Student Visa and immigration consultancy services in Skilled visa, Business Migration visa, Family visa, Spouse visa, Visitor visa, and corporate entrepreneur work visa.
          </p>

          <p class="text-lg">
            We have offices in <span class="font-semibold text-[#013220]">Islamabad</span>. Where we offer Study Abroad services in multiple countries and Immigration services in countries like Australia, Canada, New Zealand, Germany and UK. We provide competitive, up-to-date, honest visa information and advice to clients who are interested to migrate abroad.
          </p>

          <p class="text-lg">
            We assess your profile thoroughly and guide you with selecting the most suitable visa category based on your credentials in order to prepare your visa application to get you the best results. We extend our expertise as Immigration and Education Consultants to keep you at ease throughout the process and strive to make the procedure a hassle-free process.
          </p>
        </div>

        <!-- Stats/Highlights -->
        <div class="mt-16 grid grid-cols-1 md:grid-cols-4 gap-6">
          <div class="text-center p-6 bg-gradient-to-br from-[#013220] to-[#015a38] rounded-xl shadow-lg text-white transform hover:scale-105 transition-all">
            <div class="text-4xl font-bold text-[#C5A247] mb-2">10+</div>
            <div class="text-sm uppercase tracking-wide">Years Experience</div>
          </div>
          <div class="text-center p-6 bg-gradient-to-br from-[#013220] to-[#015a38] rounded-xl shadow-lg text-white transform hover:scale-105 transition-all">
            <div class="text-4xl font-bold text-[#C5A247] mb-2">150+</div>
            <div class="text-sm uppercase tracking-wide">Countries Covered</div>
          </div>
          <div class="text-center p-6 bg-gradient-to-br from-[#013220] to-[#015a38] rounded-xl shadow-lg text-white transform hover:scale-105 transition-all">
            <div class="text-4xl font-bold text-[#C5A247] mb-2">5000+</div>
            <div class="text-sm uppercase tracking-wide">Happy Clients</div>
          </div>
          <div class="text-center p-6 bg-gradient-to-br from-[#013220] to-[#015a38] rounded-xl shadow-lg text-white transform hover:scale-105 transition-all">
            <div class="text-4xl font-bold text-[#C5A247] mb-2">98%</div>
            <div class="text-sm uppercase tracking-wide">Success Rate</div>
          </div>
        </div>
      </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-4xl font-bold text-[#013220] mb-4">Why Choose Us</h2>
          <p class="text-xl text-gray-600 max-w-2xl mx-auto">
            Comprehensive visa and immigration services tailored to your needs
          </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="bg-gradient-to-br from-[#013220] to-[#015a38] p-8 rounded-2xl shadow-xl transform hover:scale-105 transition-all text-white">
            <div class="text-[#C5A247] text-5xl mb-6">🌍</div>
            <h3 class="text-2xl font-bold mb-4">Global Coverage</h3>
            <p class="text-gray-100 leading-relaxed">
              We process visas for over 150 countries worldwide with expert knowledge of local requirements
            </p>
          </div>
          <div class="bg-gradient-to-br from-[#013220] to-[#015a38] p-8 rounded-2xl shadow-xl transform hover:scale-105 transition-all text-white">
            <div class="text-[#C5A247] text-5xl mb-6">⚡</div>
            <h3 class="text-2xl font-bold mb-4">Fast Processing</h3>
            <p class="text-gray-100 leading-relaxed">
              Quick turnaround times with priority handling and expedited services available
            </p>
          </div>
          <div class="bg-gradient-to-br from-[#013220] to-[#015a38] p-8 rounded-2xl shadow-xl transform hover:scale-105 transition-all text-white">
            <div class="text-[#C5A247] text-5xl mb-6">✓</div>
            <h3 class="text-2xl font-bold mb-4">Expert Support</h3>
            <p class="text-gray-100 leading-relaxed">
              Professional guidance from certified immigration consultants every step of the way
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Services Section -->
    <section class="py-20 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
          <h2 class="text-4xl md:text-5xl font-bold text-[#013220] mb-4">Our Services</h2>
          <div class="w-24 h-1 bg-[#C5A247] mx-auto rounded-full"></div>
        </div>

        <!-- Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Service 1: Australia Skilled Work Visa -->
          <div class="bg-white rounded-2xl shadow-lg overflow-hidden group hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
            <div class="relative h-64 overflow-hidden">
              <img src="/images/services/australia-work.jpg" alt="Australia Skilled Work Visa" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300" />
              <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
              <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2">
                <div class="w-16 h-16 bg-[#C5A247] rounded-full flex items-center justify-center shadow-lg">
                  <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                  </svg>
                </div>
              </div>
            </div>
            <div class="p-6">
              <h3 class="text-2xl font-bold text-[#013220] mb-3">Australia - Skilled Work Visa</h3>
              <p class="text-gray-600 mb-6 leading-relaxed">I'm a skilled person wants to immigrate to Australia with family</p>
              <button class="bg-[#013220] text-white px-6 py-2.5 rounded-lg font-semibold hover:bg-[#C5A247] transition-colors duration-300 w-full">
                Read More
              </button>
            </div>
          </div>

          <!-- Service 2: Student Visa -->
          <div class="bg-white rounded-2xl shadow-lg overflow-hidden group hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
            <div class="relative h-64 overflow-hidden">
              <img src="/images/services/student-visa.jpg" alt="Student Visa" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300" />
              <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
              <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2">
                <div class="w-16 h-16 bg-[#C5A247] rounded-full flex items-center justify-center shadow-lg">
                  <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                  </svg>
                </div>
              </div>
            </div>
            <div class="p-6">
              <h3 class="text-2xl font-bold text-[#013220] mb-3">Student Visa</h3>
              <p class="text-gray-600 mb-6 leading-relaxed">Opportunity for students in Pakistan to study abroad in 9 different destination</p>
              <button class="bg-[#013220] text-white px-6 py-2.5 rounded-lg font-semibold hover:bg-[#C5A247] transition-colors duration-300 w-full">
                Read More
              </button>
            </div>
          </div>

          <!-- Service 3: Partner & Family Visas -->
          <div class="bg-white rounded-2xl shadow-lg overflow-hidden group hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
            <div class="relative h-64 overflow-hidden">
              <img src="/images/services/family-visa.jpg" alt="Partner & Family Visas" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300" />
              <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
              <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2">
                <div class="w-16 h-16 bg-[#C5A247] rounded-full flex items-center justify-center shadow-lg">
                  <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                  </svg>
                </div>
              </div>
            </div>
            <div class="p-6">
              <h3 class="text-2xl font-bold text-[#013220] mb-3">Partner & Family Visas</h3>
              <p class="text-gray-600 mb-6 leading-relaxed">I want to sponsor my partner or family member</p>
              <button class="bg-[#013220] text-white px-6 py-2.5 rounded-lg font-semibold hover:bg-[#C5A247] transition-colors duration-300 w-full">
                Read More
              </button>
            </div>
          </div>

          <!-- Service 4: Canada Skilled Work Visa -->
          <div class="bg-white rounded-2xl shadow-lg overflow-hidden group hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
            <div class="relative h-64 overflow-hidden">
              <img src="/images/services/canada-work.jpg" alt="Canada Skilled Work Visa" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300" />
              <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
              <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2">
                <div class="w-16 h-16 bg-[#C5A247] rounded-full flex items-center justify-center shadow-lg">
                  <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                  </svg>
                </div>
              </div>
            </div>
            <div class="p-6">
              <h3 class="text-2xl font-bold text-[#013220] mb-3">Canada - Skilled Work Visa</h3>
              <p class="text-gray-600 mb-6 leading-relaxed">I want to apply for Canadian Citizenship</p>
              <button class="bg-[#013220] text-white px-6 py-2.5 rounded-lg font-semibold hover:bg-[#C5A247] transition-colors duration-300 w-full">
                Read More
              </button>
            </div>
          </div>

          <!-- Service 5: UK Innovator & Global Talent Visa -->
          <div class="bg-white rounded-2xl shadow-lg overflow-hidden group hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
            <div class="relative h-64 overflow-hidden">
              <img src="/images/services/uk-innovator.jpg" alt="UK Innovator Visa" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300" />
              <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
              <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2">
                <div class="w-16 h-16 bg-[#C5A247] rounded-full flex items-center justify-center shadow-lg">
                  <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                  </svg>
                </div>
              </div>
            </div>
            <div class="p-6">
              <h3 class="text-2xl font-bold text-[#013220] mb-3">UK- Innovator & Global Talent Visa</h3>
              <p class="text-gray-600 mb-6 leading-relaxed">Expert guidance for innovative entrepreneurs and talented professionals</p>
              <button class="bg-[#013220] text-white px-6 py-2.5 rounded-lg font-semibold hover:bg-[#C5A247] transition-colors duration-300 w-full">
                Read More
              </button>
            </div>
          </div>

          <!-- Service 6: Visit Visas -->
          <div class="bg-white rounded-2xl shadow-lg overflow-hidden group hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
            <div class="relative h-64 overflow-hidden">
              <img src="/images/services/visit-visa.jpg" alt="Visit Visas" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300" />
              <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
              <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2">
                <div class="w-16 h-16 bg-[#C5A247] rounded-full flex items-center justify-center shadow-lg">
                  <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                  </svg>
                </div>
              </div>
            </div>
            <div class="p-6">
              <h3 class="text-2xl font-bold text-[#013220] mb-3">Visit Visas</h3>
              <p class="text-gray-600 mb-6 leading-relaxed">Tourist and business visit visas for multiple countries worldwide</p>
              <button class="bg-[#013220] text-white px-6 py-2.5 rounded-lg font-semibold hover:bg-[#C5A247] transition-colors duration-300 w-full">
                Read More
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Process Section -->
    <section class="py-20 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
          <h2 class="text-4xl md:text-5xl font-bold text-[#013220] mb-4">Simple 4-Step Process</h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Our streamlined process makes visa application straightforward and stress-free
          </p>
        </div>

        <!-- Process Steps -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          <!-- Step 1: Consultation -->
          <div class="text-center group">
            <div class="relative mb-6">
              <div class="w-24 h-24 mx-auto bg-blue-100 rounded-full flex items-center justify-center transform group-hover:scale-110 transition-all duration-300 shadow-lg group-hover:shadow-xl">
                <svg class="w-12 h-12 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
              </div>
              <div class="absolute -top-2 -right-2 w-8 h-8 bg-[#C5A247] text-white rounded-full flex items-center justify-center font-bold text-sm shadow-lg">
                1
              </div>
            </div>
            <h3 class="text-xl font-bold text-[#013220] mb-3">Consultation</h3>
            <p class="text-gray-600 leading-relaxed">
              Free assessment of your profile and visa requirements
            </p>
          </div>

          <!-- Step 2: Documentation -->
          <div class="text-center group">
            <div class="relative mb-6">
              <div class="w-24 h-24 mx-auto bg-green-100 rounded-full flex items-center justify-center transform group-hover:scale-110 transition-all duration-300 shadow-lg group-hover:shadow-xl">
                <svg class="w-12 h-12 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
              </div>
              <div class="absolute -top-2 -right-2 w-8 h-8 bg-[#C5A247] text-white rounded-full flex items-center justify-center font-bold text-sm shadow-lg">
                2
              </div>
            </div>
            <h3 class="text-xl font-bold text-[#013220] mb-3">Documentation</h3>
            <p class="text-gray-600 leading-relaxed">
              Complete document preparation and verification
            </p>
          </div>

          <!-- Step 3: Submission -->
          <div class="text-center group">
            <div class="relative mb-6">
              <div class="w-24 h-24 mx-auto bg-purple-100 rounded-full flex items-center justify-center transform group-hover:scale-110 transition-all duration-300 shadow-lg group-hover:shadow-xl">
                <svg class="w-12 h-12 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                </svg>
              </div>
              <div class="absolute -top-2 -right-2 w-8 h-8 bg-[#C5A247] text-white rounded-full flex items-center justify-center font-bold text-sm shadow-lg">
                3
              </div>
            </div>
            <h3 class="text-xl font-bold text-[#013220] mb-3">Submission</h3>
            <p class="text-gray-600 leading-relaxed">
              Application submission and embassy appointment booking
            </p>
          </div>

          <!-- Step 4: Success -->
          <div class="text-center group">
            <div class="relative mb-6">
              <div class="w-24 h-24 mx-auto bg-orange-100 rounded-full flex items-center justify-center transform group-hover:scale-110 transition-all duration-300 shadow-lg group-hover:shadow-xl">
                <svg class="w-12 h-12 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
              </div>
              <div class="absolute -top-2 -right-2 w-8 h-8 bg-[#C5A247] text-white rounded-full flex items-center justify-center font-bold text-sm shadow-lg">
                4
              </div>
            </div>
            <h3 class="text-xl font-bold text-[#013220] mb-3">Success</h3>
            <p class="text-gray-600 leading-relaxed">
              Visa approval and travel preparation support
            </p>
          </div>
        </div>

        <!-- Process Timeline Visual -->
        <div class="mt-12 relative hidden lg:block">
          <div class="absolute top-1/2 left-0 right-0 h-1 bg-gradient-to-r from-blue-400 via-green-400 via-purple-400 to-orange-400 transform -translate-y-1/2"></div>
        </div>

        <!-- Call to Action -->
        <div class="mt-16 text-center">
          <p class="text-lg text-gray-600 mb-6">Ready to start your visa journey?</p>
          <Link :href="route('candidate.register')" class="inline-block bg-[#C5A247] text-white px-10 py-4 rounded-lg text-lg font-semibold hover:bg-[#B39140] transition-all transform hover:scale-105 shadow-lg">
            Get Free Consultation
          </Link>
        </div>
      </div>
    </section>
<!-- Free Online Visa Assessment Section -->
    <section class="py-20 bg-[#013220]">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <!-- Left Content -->
          <div class="text-white">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">
              Free Online Visa Assessment
            </h2>
            <p class="text-lg text-gray-100 mb-8 leading-relaxed">
              Contact us today by filling out our free online visa assessment and we will contact you.
            </p>

            <!-- Contact Information -->
            <div class="space-y-6">
              <div class="flex items-start space-x-4">
                <div class="flex-shrink-0">
                  <svg class="w-8 h-8 text-[#C5A247]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                  </svg>
                </div>
                <div>
                  <h3 class="text-2xl font-bold text-[#C5A247] mb-2">+923215331274</h3>
                  <p class="text-gray-300">Mon, Tue, Wed, Thu, Sat, Sun: 9:00am - 5:00pm</p>
                  <p class="text-gray-300">Fri: CLOSED</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Right Content - Assessment Form -->
          <div class="bg-white rounded-2xl shadow-2xl p-8">
            <h3 class="text-2xl font-bold text-[#013220] mb-6 text-center">
              Enter Your Information
            </h3>
            <form class="space-y-5">
              <div>
                <input

                  type="text"
                  placeholder="Your Name"
                  class="w-full px-4 py-3 bg-gray-100 border-0 rounded-lg focus:ring-2 focus:ring-[#C5A247] focus:bg-white outline-none transition"
                  required
                />
              </div>
              <div>
                <input

                  type="email"
                  placeholder="Email"
                  class="w-full px-4 py-3 bg-gray-100 border-0 rounded-lg focus:ring-2 focus:ring-[#C5A247] focus:bg-white outline-none transition"
                  required
                />
              </div>
              <div>
                <input

                  type="tel"
                  placeholder="Mobile No"
                  class="w-full px-4 py-3 bg-gray-100 border-0 rounded-lg focus:ring-2 focus:ring-[#C5A247] focus:bg-white outline-none transition"
                  required
                />
              </div>
              <div>
                <select

                  class="w-full px-4 py-3 bg-gray-100 border-0 rounded-lg focus:ring-2 focus:ring-[#C5A247] focus:bg-white outline-none transition text-gray-700"
                  required
                >
                  <option value="">Select Visa</option>
                  <option value="australia-skilled">Australia - Skilled Work Visa</option>
                  <option value="canada-skilled">Canada - Skilled Work Visa</option>
                  <option value="uk-innovator">UK - Innovator & Global Talent Visa</option>
                  <option value="student">Student Visa</option>
                  <option value="family">Partner & Family Visas</option>
                  <option value="visit">Visit Visas</option>
                </select>
              </div>
              <div>
                <textarea

                  placeholder="Message"
                  rows="4"
                  class="w-full px-4 py-3 bg-gray-100 border-0 rounded-lg focus:ring-2 focus:ring-[#C5A247] focus:bg-white outline-none transition resize-none"
                ></textarea>
              </div>
              <button
                type="submit"
                class="w-full bg-[#FF5722] text-white py-4 rounded-lg font-bold text-lg hover:bg-[#E64A19] transition-all transform hover:scale-105 shadow-lg uppercase"
              >
                Book My Free Assessment
              </button>
              <p class="text-sm text-gray-500 text-center">
                We will not spam your email.
              </p>
            </form>
          </div>
        </div>
      </div>
    </section>



    <!-- What Our Clients Say Section -->
    <section class="py-20 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
          <div class="inline-block bg-green-100 text-green-700 px-4 py-2 rounded-full text-sm font-semibold mb-4">
            📰 Success Stories
          </div>
          <h2 class="text-4xl md:text-5xl font-bold text-[#013220] mb-4">
            What Our Clients Say
          </h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Real experiences from thousands of satisfied clients who achieved their European dreams with our help.
          </p>
        </div>

        <!-- Testimonials Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <!-- Testimonial 1: Ahmad Hassan -->
          <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="flex items-start justify-between mb-4">
              <div class="flex items-center space-x-3">
                <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold text-lg">
                  AH
                </div>
                <div>
                  <h4 class="font-bold text-gray-900">Ahmad Hassan</h4>
                  <p class="text-sm text-gray-500">@ahmad_hassan • 2 weeks ago</p>
                </div>
              </div>
              <div class="flex text-yellow-400 text-sm">
                ⭐⭐⭐⭐⭐
              </div>
            </div>
            <p class="text-gray-700 leading-relaxed mb-4">
              "Just got my German tourist visa approved! 🇩🇪 The eHRPakConsultant team made everything so simple. From document preparation to embassy appointment - they handled it all professionally. Highly recommended! 👍"
            </p>
            <div class="flex items-center justify-between pt-4 border-t border-gray-100">
              <div class="flex items-center space-x-4 text-sm text-gray-500">
                <span class="flex items-center">❤️ 47</span>
                <span class="flex items-center">💬 12</span>
                <span class="flex items-center">🔗 8</span>
              </div>
              <span class="text-xs font-semibold text-blue-600 bg-blue-50 px-3 py-1 rounded-full">Tourist Visa</span>
            </div>
          </div>

          <!-- Testimonial 2: Sara Fatima -->
          <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="flex items-start justify-between mb-4">
              <div class="flex items-center space-x-3">
                <div class="w-12 h-12 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold text-lg">
                  SF
                </div>
                <div>
                  <h4 class="font-bold text-gray-900">Sara Fatima</h4>
                  <p class="text-sm text-gray-500">@sara_fatima • 1 month ago</p>
                </div>
              </div>
              <div class="flex text-yellow-400 text-sm">
                ⭐⭐⭐⭐⭐
              </div>
            </div>
            <p class="text-gray-700 leading-relaxed mb-4">
              "Exceptional service! Got my Netherlands business visa in just 10 days. 🇳🇱 The team guided me through every step and even helped with interview preparation. Worth every penny! 🇵🇰 ✈️"
            </p>
            <div class="flex items-center justify-between pt-4 border-t border-gray-100">
              <div class="flex items-center space-x-4 text-sm text-gray-500">
                <span class="flex items-center">❤️ 63</span>
                <span class="flex items-center">💬 18</span>
                <span class="flex items-center">🔗 15</span>
              </div>
              <span class="text-xs font-semibold text-green-600 bg-green-50 px-3 py-1 rounded-full">Business Visa</span>
            </div>
          </div>

          <!-- Testimonial 3: Muhammad Kashif -->
          <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="flex items-start justify-between mb-4">
              <div class="flex items-center space-x-3">
                <div class="w-12 h-12 bg-teal-500 rounded-full flex items-center justify-center text-white font-bold text-lg">
                  MK
                </div>
                <div>
                  <h4 class="font-bold text-gray-900">Muhammad Kashif</h4>
                  <p class="text-sm text-gray-500">@m_kashif • 3 weeks ago</p>
                </div>
              </div>
              <div class="flex text-yellow-400 text-sm">
                ⭐⭐⭐⭐⭐
              </div>
            </div>
            <p class="text-gray-700 leading-relaxed mb-4">
              "Family reunion visa approved for France! 🇫🇷 After months of stress, eHRPakConsultant made it happen in 2 weeks. Professional, reliable, and honest. My family is finally together! ❤️ 👨‍👩‍👧‍👦"
            </p>
            <div class="flex items-center justify-between pt-4 border-t border-gray-100">
              <div class="flex items-center space-x-4 text-sm text-gray-500">
                <span class="flex items-center">❤️ 89</span>
                <span class="flex items-center">💬 25</span>
                <span class="flex items-center">🔗 22</span>
              </div>
              <span class="text-xs font-semibold text-pink-600 bg-pink-50 px-3 py-1 rounded-full">Family Visa</span>
            </div>
          </div>

          <!-- Testimonial 4: Zara Ahmed -->
          <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="flex items-start justify-between mb-4">
              <div class="flex items-center space-x-3">
                <div class="w-12 h-12 bg-orange-500 rounded-full flex items-center justify-center text-white font-bold text-lg">
                  ZA
                </div>
                <div>
                  <h4 class="font-bold text-gray-900">Zara Ahmed</h4>
                  <p class="text-sm text-gray-500">@zara_ahmed • 1 week ago</p>
                </div>
              </div>
              <div class="flex text-yellow-400 text-sm">
                ⭐⭐⭐⭐⭐
              </div>
            </div>
            <p class="text-gray-700 leading-relaxed mb-4">
              "Study visa for Italy approved! 🇮🇹 The approval calculator was spot on - 94% chance and it came through! Thank you eHRPakConsultant for making my educational dreams come true! 📚 🎓"
            </p>
            <div class="flex items-center justify-between pt-4 border-t border-gray-100">
              <div class="flex items-center space-x-4 text-sm text-gray-500">
                <span class="flex items-center">❤️ 34</span>
                <span class="flex items-center">💬 9</span>
                <span class="flex items-center">🔗 6</span>
              </div>
              <span class="text-xs font-semibold text-indigo-600 bg-indigo-50 px-3 py-1 rounded-full">Student Visa</span>
            </div>
          </div>

          <!-- Testimonial 5: Rizwan Ali -->
          <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="flex items-start justify-between mb-4">
              <div class="flex items-center space-x-3">
                <div class="w-12 h-12 bg-red-500 rounded-full flex items-center justify-center text-white font-bold text-lg">
                  RA
                </div>
                <div>
                  <h4 class="font-bold text-gray-900">Rizwan Ali</h4>
                  <p class="text-sm text-gray-500">@rizwan_ali • 4 days ago</p>
                </div>
              </div>
              <div class="flex text-yellow-400 text-sm">
                ⭐⭐⭐⭐⭐
              </div>
            </div>
            <p class="text-gray-700 leading-relaxed mb-4">
              "Spain tourist visa success! 🇪🇸 Third time applying and finally got it thanks to eHRPakConsultant's expert guidance. They knew exactly what was missing in my previous applications. Muchas gracias! 🙏"
            </p>
            <div class="flex items-center justify-between pt-4 border-t border-gray-100">
              <div class="flex items-center space-x-4 text-sm text-gray-500">
                <span class="flex items-center">❤️ 52</span>
                <span class="flex items-center">💬 14</span>
                <span class="flex items-center">🔗 11</span>
              </div>
              <span class="text-xs font-semibold text-blue-600 bg-blue-50 px-3 py-1 rounded-full">Tourist Visa</span>
            </div>
          </div>

          <!-- Testimonial 6: Fatima Khan -->
          <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="flex items-start justify-between mb-4">
              <div class="flex items-center space-x-3">
                <div class="w-12 h-12 bg-teal-600 rounded-full flex items-center justify-center text-white font-bold text-lg">
                  FK
                </div>
                <div>
                  <h4 class="font-bold text-gray-900">Fatima Khan</h4>
                  <p class="text-sm text-gray-500">@fatima_khan • 2 days ago</p>
                </div>
              </div>
              <div class="flex text-yellow-400 text-sm">
                ⭐⭐⭐⭐⭐
              </div>
            </div>
            <p class="text-gray-700 leading-relaxed mb-4">
              "Switzerland visa approved for honeymoon! 🇨🇭 The team was incredibly supportive and made sure everything was perfect. Now planning the most romantic trip ever! 💍 🏔️"
            </p>
            <div class="flex items-center justify-between pt-4 border-t border-gray-100">
              <div class="flex items-center space-x-4 text-sm text-gray-500">
                <span class="flex items-center">❤️ 76</span>
                <span class="flex items-center">💬 21</span>
                <span class="flex items-center">🔗 18</span>
              </div>
              <span class="text-xs font-semibold text-blue-600 bg-blue-50 px-3 py-1 rounded-full">Tourist Visa</span>
            </div>
          </div>
        </div>

        <!-- View More Button -->
        <div class="text-center mt-12">
          <button class="bg-[#013220] text-white px-8 py-3 rounded-lg font-semibold hover:bg-[#C5A247] transition-colors duration-300 shadow-lg">
            View More Success Stories
          </button>
        </div>
      </div>
    </section>

    <!-- Footer Component -->
    <Footer />
  </div>
</template>

<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';
import Header from '@/Components/Frontend/Header.vue';
import Footer from '@/Components/Frontend/Footer.vue';

const form = ref({
  name: '',
  email: '',
  phone: '',
  visaType: ''
});

const submitForm = () => {
  console.log('Form submitted:', form.value);
  // Add your form submission logic here
};
</script>
