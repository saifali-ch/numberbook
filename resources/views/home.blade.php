<x-layouts.app>
  <x-slot name="title">
    {{ __('Number Book Saudi Arabia: Your guide to caller ID and blocking unwanted numbers') }}
  </x-slot>
  <x-slot name="description">
    {{ __("Are you tired of unwanted calls? \"Number Book\" is the ideal solution to know the caller's identity and block spam numbers in Saudi Arabia.") }}
  </x-slot>

  <section class="bg-white md:px-10 pb-20">
    <div class="flex flex-col md:flex-row-reverse items-center justify-center gap-5 mt-5">
      <a href="https://apps.apple.com/us/app/%D9%83%D8%A7%D8%B4%D9%81-%D8%A7%D9%84%D8%A7%D8%B1%D9%82%D8%A7%D9%85-%D9%85%D8%B9%D8%B1%D9%81%D8%A9-%D8%A7%D8%B3%D9%85-%D8%A7%D9%84%D9%85%D8%AA%D8%B5%D9%84/id1522059253" target="_blank">
        <img src="{{ Vite::asset('resources/images/app-store.webp') }}" style="height: 64px; width: 100%" alt="App Store">
      </a>

      <a href="https://play.google.com/store/apps/details?id=com.nft.kashff&hl=en" target="_blank">
        <img src="{{ Vite::asset('resources/images/google-play.webp') }}" style="height: 64px; width: 100%" alt="Google Play">
      </a>
    </div>
  </section>

  <section class="bg-white px-5 md:px-10">
    <h1 class="text-2xl font-bold text-center text-red-600 lg:text-3xl">
      {{ __('Number Book Saudi Arabia: Your guide to caller ID and blocking unwanted numbers') }}
    </h1>

    <div class="flex flex-col gap-3 max-w-full md:max-w-4xl md:px-6 py-10 mx-auto" x-data="faqComponent()">
      <template x-for="item in faqs" :key="item.id">
        <div class="space-y-8 hover:bg-red-50/70" :class="{ 'bg-red-50/70': faq === item.id }">
          <div class="border-2 border-gray-100 rounded-lg">
            <button class="flex items-center justify-between w-full p-8"
                    @click="toggle(item.id)">

              <template x-if="item.page_url">
                <a :href="item.page_url">
                  <h2 class="font-semibold text-black md:text-2xl text-start underline" x-text="item.question"></h2>
                </a>
              </template>

              <template x-if="!item.page_url">
                <h2 class="font-semibold text-black md:text-2xl text-start" x-text="item.question"></h2>
              </template>

              <img x-show="faq !== item.id" src="{{ Vite::asset('resources/svg/plus.svg') }}"
                   class="h-6 w-6 bg-red-600 rounded-full" alt="+">
              <img x-show="faq === item.id" src="{{ Vite::asset('resources/svg/minus.svg') }}"
                   class="h-6 w-6 bg-red-600 rounded-full" alt="-">
            </button>
            <hr class="border-gray-200">
            <div class="prose overflow-hidden transition-all duration-300 ease-in-out max-w-full"
                 :style="faq === item.id ? '' : 'max-height: 0px'">
              <ul x-show="faq === item.id" class="px-8 py-4 text-base text-gray-700"
                  x-transition:enter="transition ease-out duration-200"
                  x-transition:enter-start="opacity-0 transform -translate-y-2"
                  x-transition:enter-end="opacity-100 transform translate-y-0"
                  x-transition:leave="transition ease-in duration-200"
                  x-transition:leave-start="opacity-100 transform translate-y-0"
                  x-transition:leave-end="opacity-0 transform -translate-y-2">
                <template x-for="answer in item.answer">
                  <li x-html="answer"></li>
                </template>
              </ul>
            </div>
          </div>
        </div>
      </template>
    </div>
  </section>

  <script>
    function faqComponent() {
      return {
        faq: null,

        faqs: [
          {
            id: 1,
            question: '{{ __('What is the Saudi number book?') }}',
            answer: [
              '{{ __('The Saudi Number Book website is a Saudi website that helps you discover the identity of the caller and search by name to obtain the phone number of a person inside Saudi Arabia or in any country in the world online without downloading applications.') }}',
              '{!! __('You can use the Number Book website via the online browser by entering the link to the official website of the Number Book application and searching by number or name to get the data you are looking for.') .' ' . __('<a target="_blank" href="https://apps.apple.com/us/app/%D9%83%D8%A7%D8%B4%D9%81-%D8%A7%D9%84%D8%A7%D8%B1%D9%82%D8%A7%D9%85-%D9%85%D8%B9%D8%B1%D9%81%D8%A9-%D8%A7%D8%B3%D9%85-%D8%A7%D9%84%D9%85%D8%AA%D8%B5%D9%84/id1522059253">You can download the application via this link. </a>') !!}',
            ],
            page_url: '{{ route('q1') }}'
          },

          {
            id: 2,
            question: '{{ __('Features of Saudi Number Book') }}',
            answer: [
              '{{ __('One of the most important features offered by the Saudi Number Book website is the ease of using the site on the phone or computer for free through the browser.') }}',
              '{{ __('Here are some of the most important services provided by Number Book Saudi Arabia or online number book.') }}',
              '{{ __('You can search by number or name through the following steps: Write the phone number whose owner you want to know, then press the search button to show you all the names online.') }}'
            ],
          },

          {
            id: 3,
            question: '{{ __('Number detector without downloading number book online') }}',
            answer: [
              '{{ __('There is no need to download programs or applications, as you can use the number detector website from Numberbook Saudi Arabia without downloading.') }}',
              '{{ __('In addition, it works on all mobile devices and computers via the browser.') }}',
            ]
          },
          {
            id: 4,
            question: '{{ __('Number book without vpn') }}',
            answer: [
              '{{ __('You can use the Number Book website with a direct link without the need for VPN programs via the Numberozo website, which provides you with the same services as the Number Book website on the browser online.') }}',
              '{{ __('You can search by number or name without problems through the following steps: Write the phone number whose owner you want to know, then press the search button to show you all the names online.') }}',
            ]
          },
          {
            id: 5,
            question: '{{ __('How to use Saudi Number Book ?') }}',
            answer: [
              '{{ __('Through the Number Book website, you can search for a person’s phone number or find out who is calling without the need to download an application on your mobile phone. All of this is done through the Number Book caller\'s name detector website.') }}',
              '{{ __('All you have to do is write the phone number whose owner you want to know, then press the search button to show you all the names online through the caller\'s name detector application or website through the phone number.') }}',
            ]
          },
          {
            id: 6,
            question: '{{ __('Download number book Saudi number detector') }}',
            answer: [
              '{{ __('You can obtain the Number Book application on your phone via the following links, depending on the operating system if your phone is running Android or iPhone.') }}',
              '{{ __('You can also obtain the Number Book Gulf application through the Number Book Arabic website') }}',
            ]
          },
          {
            id: 7,
            question: '{{ __('Find out the caller name in Saudi Arabia') }}',
            answer: [
              '{{ __('Nembrozo website provides the service of knowing the identity of the unknown number by writing the phone number that called you and obtaining the name of the owner of the number and all the data related to him.') }}',
              '{{ __('You can search by number or name through the following steps: Write the phone number whose owner you want to know, then press the search button to show you all the names online.') }}',
            ],
            page_url: '{{ route('q2') }}'
          },
          {
            id: 8,
            question: '{{ __('Caller name online Saudi Arabia') }}',
            answer: [
              '{{ __('You can search for the caller name online in Saudi Arabia by visiting the ksa numbers website, writing the phone number without the country code, then clicking on search') }}',
              '{{ __('You can also get the caller name online in Saudi Arabia through the Nembrozo Arab Phone Directory website') }}',
            ]
          },
          {
            id: 9,
            question: '{{ __('An alternative to ksa numbers online for all Arab countries and the Arab Gulf countries') }}',
            answer: [
              '{{ __('The KSA Numbers website is one of the best websites dedicated to displaying the names of unknown number owners and searching for numbers by name. It is considered very similar to the Number Book application and the Dalili program, but it is an online website without programs and can be used from a browser or through a phone or computer.') }}',
              '{{ __('You can search for the caller name online in Saudi Arabia by visiting the ksa numbers website, writing the phone number without the country code, then clicking on search') }}',
            ],
            page_url: '{{ route('q3') }}'
          },
          {
            id: 10,
            question: '{{ __('How to access the Number Book website is free') }}',
            answer: [
              '{{ __('You can access the Number Book website for free by visiting the official website and logging in through your account on the website.') }}',
              '{{ __('You can also access the Number Book website for free by visiting the Number Book Arabic website.') }}',
            ]
          },
          {
            id: 11,
            question: '{{ __('ksa numbers website: Saudi numbers directory') }}',
            answer: [
              '{{ __('The ksa numbers website provides a service for searching for phone numbers within the Kingdom of Saudi Arabia.') }}',
              '{{ __('You can search for a Saudi phone number online by visiting the ksa numbers website, writing the phone number without the country code, then clicking on search.') }}',
            ],
            page_url: '{{ route('q4') }}'
          },
          {
            id: 12,
            question: '{{ __('Number book for iPhone without downloading') }}',
            answer: [
              '{{ __('There is no version of the NumberBook program specifically for iPhones, but you can use the KSA Numbers website through the browser on the phone and search for the phone number that called you, or search by name and obtain the mobile number with ease.') }}',
            ]
          },
        ],

        toggle(id) {
          // Only toggle if a different FAQ is clicked
          if (this.faq !== id) {
            this.faq = id;
          }
        }
      }
    }
  </script>
</x-layouts.app>
