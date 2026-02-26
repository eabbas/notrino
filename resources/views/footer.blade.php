<footer class="relative z-1 top-23 mt-20 md:top-50 border-t-1 border-(--color-zinc-300) px-5 md:px-10 py-5">
      <!-- logo, des, go to up -->

      <section class="flex gap-x-8 gap-y-4 items-center md:items-start flex-wrap md:flex-nowrap justify-between mb-12">
        <!-- <section class="w-[99%] mt-5 md:w-[90%] mx-auto flex flex-col md:flex-row justify-between items-center"> -->
        <div class="w-4/12 md:w-1/12 order-1 md:order-none">
            <a href="">
              @if($footerLogo)
              <!-- <h1 class="font-bold text-base">NOTRINO<span class="text-(--color-primary-500)">SHAP</span></h1>
              <span class="text-[13px]">فروشگاه اینترنتی <span class="text-(--color-primary-500)">نوترینو</span></span> -->
              <img src="{{ asset('storage/'.$footerLogo['meta_value']) }}" alt="logo" class="w-full">
              @endif
            </a>
        </div>
        <div class="md:w-8/12 text-xs text-zinc-400 leading-7 order-3 md:order-none text-justify flex items-center justify-center">
          @if($footerDescription)
          {{ $footerDescription['meta_value'] }}
          @endif
        </div>
        <div class="md:w-1/12 order-2 md:order-none">
          <button onclick="scrollToTop()" class="flex items-center justify-center cursor-pointer w-28 gap-x-2 p-3 text-(--color-zinc-400) text-xs md:text-sm border border-zinc-200 rounded-lg" id="btn-back-to-top" style="display: flex;">
            برو به بالا
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_2028_6)">
                <path d="M12.707 3.63599C12.5194 3.44852 12.2651 3.3432 12 3.3432C11.7348 3.3432 11.4805 3.44852 11.293 3.63599L5.63598 9.29299C5.54047 9.38523 5.46428 9.49558 5.41188 9.61758C5.35947 9.73959 5.33188 9.87081 5.33073 10.0036C5.32957 10.1364 5.35487 10.268 5.40516 10.3909C5.45544 10.5138 5.52969 10.6255 5.62358 10.7194C5.71747 10.8133 5.82913 10.8875 5.95202 10.9378C6.07492 10.9881 6.2066 11.0134 6.33938 11.0122C6.47216 11.0111 6.60338 10.9835 6.72538 10.9311C6.84739 10.8787 6.95773 10.8025 7.04998 10.707L11 6.75699V20C11 20.2652 11.1053 20.5196 11.2929 20.7071C11.4804 20.8946 11.7348 21 12 21C12.2652 21 12.5195 20.8946 12.7071 20.7071C12.8946 20.5196 13 20.2652 13 20V6.75699L16.95 10.707C17.1386 10.8891 17.3912 10.9899 17.6534 10.9877C17.9156 10.9854 18.1664 10.8802 18.3518 10.6948C18.5372 10.5094 18.6424 10.2586 18.6447 9.99639C18.6469 9.73419 18.5461 9.48159 18.364 9.29299L12.707 3.63599Z" fill="#9f9fa9"></path>
              </g>
              <defs>
                <clipPath id="clip0_2028_6">
                  <rect width="24" height="24" fill="white"></rect>
                </clipPath>
              </defs>
            </svg>
          </button>
        </div>
      </section>
      <!-- 5 good box -->
      
      <section class="w-[99%] mt-5 md:w-[90%] mx-auto my-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-5 gap-5">
        @if($footer_expresses)
        @foreach ($footer_expresses as $express)
        <div class="flex justify-center items-center gap-2 bg-white border border-zinc-200 rounded-xl p-5">
          <div class="w-[40px] h-[40px]">
               <img src="{{ asset('storage/'.$express->icon) }}" alt="expresses">
          </div>
          <div class="flex flex-col gap-y-2">
            <div class="text-sm text-zinc-600">
              {{ $express->title }}
            </div>
            <div class="text-xs text-zinc-400">
             {{ $express->description }}
            </div>
          </div>
        </div>
     
        @endforeach
        @endif
      </section>
      <!-- links -->
      <section class="relative w-[99%] mt-5 md:w-[90%] mx-auto flex flex-col md:flex-row gap-y-8">
        <div class="md:w-5/12 grid grid-cols-2 md:grid-cols-3">
          <div class="">
            @if($footer['column_one'])
            @foreach($footer['column_one'] as $columnOne)
              {{-- @dd($columnOne); --}}
              @if($columnOne->key == null)
                <div class="text-zinc-500 mb-4 text-sm">{{ $columnOne->column_title }}</div>
              @endif
              <ul class="flex flex-col gap-y-5">
                <li>
                  <a href="{{ $columnOne->value }}" class="text-xs text-(--color-zinc-400) hover:text-(--color-primary-500) transition-all hover:pr-1 ease-out duration-300">{{ $columnOne->key }}</a>
                </li>
              </ul>
              @endforeach
              @endif
            </div>
            
          <div class="">
            @if($footer['column_two'])
            @foreach ($footer['column_two'] as $columnTwo)
              @if($columnTwo->key == null)
                <div class="text-zinc-500 mb-4 text-sm">{{ $columnTwo->column_title }}</div>
              @endif
              <ul class="flex flex-col gap-y-4">
                <li>
                  <a href="{{ $columnTwo->value }}" class="text-xs text-(--color-zinc-400) hover:text-(--color-primary-500) transition-all hover:pr-1 ease-out duration-300">{{ $columnTwo->key }}</a>
                </li>
              </ul>
              @endforeach
              @endif
          </div>
          <div class="">
            @if($footer['column_three'])
            @foreach ($footer['column_three'] as $columnThree)
              @if($columnThree->key == null)
                <div class="text-zinc-500 mb-4 text-sm">{{ $columnThree->column_title }}</div>
              @endif
            <ul class="flex flex-col gap-y-5">
              <li>
                <a href="{{ $columnThree->key }}" class="text-xs text-(--color-zinc-500) flex ">
                  {{ $columnThree->value }}
                </a>
              </li>
            </ul>
            @endforeach
            @endif
          </div>
        </div>
        
        <div class="md:w-4/12 flex justify-center gap-10">
          @if($footer['column_four'])
          @foreach ($footer['column_four'] as $columnFour)
            <div class="w-[100px] md:w-[30%]">
              <img src="{{ asset('storage/'.$columnFour->value) }}" alt="">
            </div>
          @endforeach
          @endif
          @if($footer['column_five'])
          @foreach ($footer['column_five'] as $columnFive)
            <div class="w-[100px] md:w-[30%]">
              <img src="{{ asset('storage/'.$columnFive->value) }}" alt="">
            </div>
          @endforeach
          @endif
        </div>
        <div class="md:w-4/12 flex items-center flex-col ">
          <p class="text-xs text-zinc-400 pt-6 pb-3 pr-l flex justify-center">
            @if($footer['column_six_title'])
            {{ $footer['column_six_title']['column_title'] }}
            @endif
          </p>
            <div class="grid grid-cols-4 gap-2">
              @if($footer['column_six'])
              @foreach ($footer['column_six'] as $columnSix)
                  @if($columnSix->key == "Eitaa")
                  <a href="{{ $columnSix->value }}">
                    <svg width="40" height="40" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g id="Frame" clip-path="url(#clip0_4667_548)">
                        <g id="Isolation Mode">
                          <path id="Vector" fill-rule="evenodd" clip-rule="evenodd" d="M8.72696 8.16637e-05H21.2724C25.8728 8.16637e-05 29.6361 3.75792 29.6361 8.35796V12.3916C25.512 14.2453 21.3518 23.4008 15.2883 21.4114C14.7889 21.7663 13.6378 23.2288 13.557 24.3385C11.4574 24.0589 9.03679 21.6527 9.32727 19.058C5.83255 16.5301 8.71846 11.8638 11.4897 9.9856C17.4293 5.96007 25.6751 9.42212 21.0884 12.3004C18.2994 14.0505 12.3354 15.2066 12.9554 10.9101C11.3194 11.382 10.2721 14.4326 12.2419 16.0223C10.4172 17.815 10.768 21.1105 12.7185 22.1925C14.6912 17.0814 21.5571 17.7494 24.3311 11.6481C26.4182 7.05861 23.3239 1.82911 17.1373 2.63243C12.4682 3.23879 8.09169 7.17735 5.90294 11.8486C3.68218 16.588 4.01267 22.9345 8.57278 26.1331C13.9393 29.8971 19.6528 26.4118 23.1132 21.8565C25.1529 19.1715 26.935 16.1972 29.6361 14.4792V21.6307C29.6361 26.2306 25.8723 30.0001 21.2724 30.0001H8.72696C4.12692 30.0001 0.363281 26.2364 0.363281 21.6364V8.36368C0.363281 3.76364 4.12692 0 8.72696 0V8.16637e-05Z" fill="#EE7F22"></path>
                        </g>
                      </g>
                      <defs>
                        <clipPath id="clip0_4667_548">
                          <rect width="30" height="30" fill="white"></rect>
                        </clipPath>
                      </defs>
                    </svg>
                  </a>
                  @endif
                  @if($columnSix->key == "Instagram")
                  <a href="{{ $columnSix->value }}">
                    <svg class="size-10" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g id="Livello_1" clip-path="url(#clip0_4667_561)">
                        <path id="Vector" d="M16 32C24.8366 32 32 24.8366 32 16C32 7.16344 24.8366 0 16 0C7.16344 0 0 7.16344 0 16C0 24.8366 7.16344 32 16 32Z" fill="url(#paint0_linear_4667_561)"></path>
                        <path id="Vector_2" d="M10.8301 17.1695L12.7283 22.4236C12.7283 22.4236 12.9657 22.9152 13.2198 22.9152C13.4739 22.9152 17.2538 18.9829 17.2538 18.9829L21.4571 10.8643L10.8978 15.8132L10.8301 17.1695Z" fill="#C8DAEA"></path>
                        <path id="Vector_3" d="M13.3473 18.5171L12.9829 22.3899C12.9829 22.3899 12.8304 23.5766 14.0168 22.3899C15.2032 21.2032 16.3388 20.2882 16.3388 20.2882" fill="#A9C6D8"></path>
                        <path id="Vector_4" d="M10.8653 17.3569L6.96047 16.0846C6.96047 16.0846 6.4938 15.8953 6.64407 15.466C6.675 15.3774 6.7374 15.3021 6.92407 15.1726C7.78927 14.5696 22.9382 9.12463 22.9382 9.12463C22.9382 9.12463 23.3659 8.98049 23.6182 9.07636C23.6806 9.09568 23.7368 9.13123 23.7809 9.17937C23.8251 9.22751 23.8557 9.28652 23.8695 9.35036C23.8968 9.46311 23.9082 9.57912 23.9034 9.69503C23.9022 9.79529 23.8901 9.88823 23.8809 10.034C23.7886 11.5226 21.0275 22.633 21.0275 22.633C21.0275 22.633 20.8623 23.2832 20.2705 23.3054C20.125 23.3101 19.9801 23.2855 19.8444 23.233C19.7087 23.1805 19.5849 23.1012 19.4805 22.9998C18.319 22.0008 14.3046 19.3029 13.4175 18.7096C13.3975 18.6959 13.3807 18.6782 13.3681 18.6575C13.3556 18.6368 13.3476 18.6136 13.3447 18.5896C13.3323 18.527 13.4003 18.4496 13.4003 18.4496C13.4003 18.4496 20.3905 12.2362 20.5765 11.584C20.5909 11.5334 20.5365 11.5085 20.4634 11.5306C19.9991 11.7014 11.9509 16.784 11.0626 17.3449C10.9987 17.3642 10.9311 17.3683 10.8653 17.3569Z" fill="white"></path>
                      </g>
                      <defs>
                        <linearGradient id="paint0_linear_4667_561" x1="16" y1="32" x2="16" y2="0" gradientUnits="userSpaceOnUse">
                          <stop stop-color="#1D93D2"></stop>
                          <stop offset="1" stop-color="#38B0E3"></stop>
                        </linearGradient>
                        <clipPath id="clip0_4667_561">
                          <rect width="32" height="32" fill="white"></rect>
                        </clipPath>
                      </defs>
                    </svg>
                  
                  </a>
                  @endif
                  @if($columnSix->key == "WhatsApp")
                  <a href="{{ $columnSix->value }}">
                    <img src="{{ asset('assets/img/whatsapp.png') }}" class="size-10" alt="">
                  </a>
                  @endif
                  @if($columnSix->key == "Telegram")
                  <a href="{{ $columnSix->value }}">
                    <svg width="40" height="40" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M124.541 256.001C124.541 183.397 183.397 124.541 256.001 124.541C328.603 124.541 387.459 183.397 387.459 256.001C387.459 328.603 328.603 387.459 256.001 387.459C183.397 387.459 124.541 328.603 124.541 256.001ZM256 341.333C208.871 341.333 170.667 303.129 170.667 256.001C170.667 208.871 208.871 170.667 256 170.667C303.128 170.667 341.333 208.871 341.333 256.001C341.333 303.129 303.128 341.333 256 341.333Z" fill="url(#paint0_linear_1_921)"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M124.541 256.001C124.541 183.397 183.397 124.541 256.001 124.541C328.603 124.541 387.459 183.397 387.459 256.001C387.459 328.603 328.603 387.459 256.001 387.459C183.397 387.459 124.541 328.603 124.541 256.001ZM256 341.333C208.871 341.333 170.667 303.129 170.667 256.001C170.667 208.871 208.871 170.667 256 170.667C303.128 170.667 341.333 208.871 341.333 256.001C341.333 303.129 303.128 341.333 256 341.333Z" fill="url(#paint1_radial_1_921)"></path>
                      <path d="M392.653 150.066C409.62 150.066 423.374 136.313 423.374 119.347C423.374 102.38 409.62 88.6263 392.653 88.6263C375.688 88.6263 361.934 102.38 361.934 119.347C361.934 136.313 375.688 150.066 392.653 150.066Z" fill="url(#paint2_linear_1_921)"></path>
                      <path d="M392.653 150.066C409.62 150.066 423.374 136.313 423.374 119.347C423.374 102.38 409.62 88.6263 392.653 88.6263C375.688 88.6263 361.934 102.38 361.934 119.347C361.934 136.313 375.688 150.066 392.653 150.066Z" fill="url(#paint3_radial_1_921)"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M256.001 0C186.475 0 177.757 0.294696 150.452 1.54055C123.203 2.78335 104.594 7.11132 88.3103 13.4402C71.476 19.9814 57.1995 28.7349 42.9667 42.9667C28.7349 57.1995 19.9814 71.476 13.4402 88.3103C7.11132 104.594 2.78335 123.203 1.54055 150.452C0.294696 177.757 0 186.475 0 256.001C0 325.525 0.294696 334.243 1.54055 361.548C2.78335 388.797 7.11132 407.406 13.4402 423.69C19.9814 440.524 28.7349 454.8 42.9667 469.033C57.1995 483.265 71.476 492.019 88.3103 498.561C104.594 504.889 123.203 509.217 150.452 510.459C177.757 511.705 186.475 512 256.001 512C325.525 512 334.243 511.705 361.548 510.459C388.797 509.217 407.406 504.889 423.69 498.561C440.524 492.019 454.8 483.265 469.033 469.033C483.265 454.8 492.019 440.524 498.561 423.69C504.889 407.406 509.217 388.797 510.459 361.548C511.705 334.243 512 325.525 512 256.001C512 186.475 511.705 177.757 510.459 150.452C509.217 123.203 504.889 104.594 498.561 88.3103C492.019 71.476 483.265 57.1995 469.033 42.9667C454.8 28.7349 440.524 19.9814 423.69 13.4402C407.406 7.11132 388.797 2.78335 361.548 1.54055C334.243 0.294696 325.525 0 256.001 0ZM256.001 46.126C324.355 46.126 332.452 46.3872 359.446 47.6188C384.406 48.757 397.961 52.9274 406.982 56.4333C418.931 61.0773 427.459 66.6247 436.417 75.5835C445.375 84.5412 450.923 93.0691 455.567 105.019C459.073 114.039 463.243 127.594 464.381 152.554C465.613 179.548 465.874 187.645 465.874 256.001C465.874 324.355 465.613 332.452 464.381 359.446C463.243 384.406 459.073 397.961 455.567 406.981C450.923 418.931 445.375 427.459 436.417 436.417C427.459 445.375 418.931 450.923 406.982 455.567C397.961 459.073 384.406 463.243 359.446 464.381C332.456 465.613 324.36 465.874 256.001 465.874C187.64 465.874 179.545 465.613 152.554 464.381C127.594 463.243 114.039 459.073 105.019 455.567C93.0692 450.923 84.5413 445.375 75.5835 436.417C66.6258 427.459 61.0774 418.931 56.4333 406.981C52.9275 397.961 48.757 384.406 47.6189 359.446C46.3873 332.452 46.1261 324.355 46.1261 256.001C46.1261 187.645 46.3873 179.548 47.6189 152.554C48.757 127.594 52.9275 114.039 56.4333 105.019C61.0774 93.0691 66.6248 84.5412 75.5835 75.5835C84.5413 66.6247 93.0692 61.0773 105.019 56.4333C114.039 52.9274 127.594 48.757 152.554 47.6188C179.548 46.3872 187.645 46.126 256.001 46.126Z" fill="url(#paint4_linear_1_921)"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M256.001 0C186.475 0 177.757 0.294696 150.452 1.54055C123.203 2.78335 104.594 7.11132 88.3103 13.4402C71.476 19.9814 57.1995 28.7349 42.9667 42.9667C28.7349 57.1995 19.9814 71.476 13.4402 88.3103C7.11132 104.594 2.78335 123.203 1.54055 150.452C0.294696 177.757 0 186.475 0 256.001C0 325.525 0.294696 334.243 1.54055 361.548C2.78335 388.797 7.11132 407.406 13.4402 423.69C19.9814 440.524 28.7349 454.8 42.9667 469.033C57.1995 483.265 71.476 492.019 88.3103 498.561C104.594 504.889 123.203 509.217 150.452 510.459C177.757 511.705 186.475 512 256.001 512C325.525 512 334.243 511.705 361.548 510.459C388.797 509.217 407.406 504.889 423.69 498.561C440.524 492.019 454.8 483.265 469.033 469.033C483.265 454.8 492.019 440.524 498.561 423.69C504.889 407.406 509.217 388.797 510.459 361.548C511.705 334.243 512 325.525 512 256.001C512 186.475 511.705 177.757 510.459 150.452C509.217 123.203 504.889 104.594 498.561 88.3103C492.019 71.476 483.265 57.1995 469.033 42.9667C454.8 28.7349 440.524 19.9814 423.69 13.4402C407.406 7.11132 388.797 2.78335 361.548 1.54055C334.243 0.294696 325.525 0 256.001 0ZM256.001 46.126C324.355 46.126 332.452 46.3872 359.446 47.6188C384.406 48.757 397.961 52.9274 406.982 56.4333C418.931 61.0773 427.459 66.6247 436.417 75.5835C445.375 84.5412 450.923 93.0691 455.567 105.019C459.073 114.039 463.243 127.594 464.381 152.554C465.613 179.548 465.874 187.645 465.874 256.001C465.874 324.355 465.613 332.452 464.381 359.446C463.243 384.406 459.073 397.961 455.567 406.981C450.923 418.931 445.375 427.459 436.417 436.417C427.459 445.375 418.931 450.923 406.982 455.567C397.961 459.073 384.406 463.243 359.446 464.381C332.456 465.613 324.36 465.874 256.001 465.874C187.64 465.874 179.545 465.613 152.554 464.381C127.594 463.243 114.039 459.073 105.019 455.567C93.0692 450.923 84.5413 445.375 75.5835 436.417C66.6258 427.459 61.0774 418.931 56.4333 406.981C52.9275 397.961 48.757 384.406 47.6189 359.446C46.3873 332.452 46.1261 324.355 46.1261 256.001C46.1261 187.645 46.3873 179.548 47.6189 152.554C48.757 127.594 52.9275 114.039 56.4333 105.019C61.0774 93.0691 66.6248 84.5412 75.5835 75.5835C84.5413 66.6247 93.0692 61.0773 105.019 56.4333C114.039 52.9274 127.594 48.757 152.554 47.6188C179.548 46.3872 187.645 46.126 256.001 46.126Z" fill="url(#paint5_radial_1_921)"></path>
                      <defs>
                        <linearGradient id="paint0_linear_1_921" x1="29.8736" y1="26.9173" x2="191.303" y2="651.345" gradientUnits="userSpaceOnUse">
                          <stop stop-color="#4E60D3"></stop>
                          <stop offset="0.142763" stop-color="#913BAF"></stop>
                          <stop offset="0.761458" stop-color="#D52D88"></stop>
                          <stop offset="1" stop-color="#F26D4F"></stop>
                        </linearGradient>
                        <radialGradient id="paint1_radial_1_921" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(155.005 512) rotate(32.1601) scale(478.18 344.131)">
                          <stop stop-color="#FED276"></stop>
                          <stop offset="0.17024" stop-color="#FDBD61" stop-opacity="0.975006"></stop>
                          <stop offset="0.454081" stop-color="#F6804D"></stop>
                          <stop offset="1" stop-color="#E83D5C" stop-opacity="0.01"></stop>
                        </radialGradient>
                        <linearGradient id="paint2_linear_1_921" x1="29.8736" y1="26.9173" x2="191.303" y2="651.345" gradientUnits="userSpaceOnUse">
                          <stop stop-color="#4E60D3"></stop>
                          <stop offset="0.142763" stop-color="#913BAF"></stop>
                          <stop offset="0.761458" stop-color="#D52D88"></stop>
                          <stop offset="1" stop-color="#F26D4F"></stop>
                        </linearGradient>
                        <radialGradient id="paint3_radial_1_921" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(155.005 512) rotate(32.1601) scale(478.18 344.131)">
                          <stop stop-color="#FED276"></stop>
                          <stop offset="0.17024" stop-color="#FDBD61" stop-opacity="0.975006"></stop>
                          <stop offset="0.454081" stop-color="#F6804D"></stop>
                          <stop offset="1" stop-color="#E83D5C" stop-opacity="0.01"></stop>
                        </radialGradient>
                        <linearGradient id="paint4_linear_1_921" x1="29.8736" y1="26.9173" x2="191.303" y2="651.345" gradientUnits="userSpaceOnUse">
                          <stop stop-color="#4E60D3"></stop>
                          <stop offset="0.142763" stop-color="#913BAF"></stop>
                          <stop offset="0.761458" stop-color="#D52D88"></stop>
                          <stop offset="1" stop-color="#F26D4F"></stop>
                        </linearGradient>
                        <radialGradient id="paint5_radial_1_921" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(155.005 512) rotate(32.1601) scale(478.18 344.131)">
                          <stop stop-color="#FED276"></stop>
                          <stop offset="0.17024" stop-color="#FDBD61" stop-opacity="0.975006"></stop>
                          <stop offset="0.454081" stop-color="#F6804D"></stop>
                          <stop offset="1" stop-color="#E83D5C" stop-opacity="0.01"></stop>
                        </radialGradient>
                      </defs>
                    </svg>
                  </a>
                  @endif
                @endforeach
                @endif
              </div>
        </div>
        </section>
      <!-- copyright -->
      <div class="relative w-[99%] mt-7 m-b10 md:w-[90%] mx-auto border-t-1 border-(--color-zinc-400) flex flex-col items-center">
        <a href="" class="">
          طراحی و توسعه توسط <span class="text-(--color-primary-500)">فائوس</span>
        </a>
        <a href="tell:09147794595"><strong>09147794595</strong></a>
      </div>
    </footer>
  </div>
  <script src="{{ asset('assets/js/hamberger.js') }}"></script>
<script>
    function scrollToTop(){
        window.scrollTo(0,0)
    }

  
        const categoryButtons = document.querySelectorAll('.cats');
        const categorySections = document.querySelectorAll('.category-section');
        const allProductsSection = document.querySelector('.all-products-section');
        const allButton = document.getElementById('all-categories-btn');
        
        if(allProductsSection) {
            allProductsSection.style.display = 'flex';
        }
        
        if(allButton) {
            allButton.addEventListener('click', function() {
                if(allProductsSection) {
                    allProductsSection.style.display = 'flex';
                }
                categoryButtons.forEach(btn => {
                    btn.classList.remove('text-(--color-primary-500)', 'bg-zinc-100');
                });
                this.classList.add('text-(--color-primary-500)', 'bg-zinc-100');
            });
        }
        
        categoryButtons.forEach(button => {
            button.addEventListener('click', function() {
                const catId = this.getAttribute('data-cat-id');
                
                if(allProductsSection) {
                    allProductsSection.style.display = 'none';
                }
                
                categorySections.forEach(section => {
                    section.style.display = 'none';
                });
                
                const selectedSection = document.querySelector(`.category-section[data-category-id="${catId}"]`);
                if(selectedSection) {
                    selectedSection.style.display = 'flex';
                }
                
                categoryButtons.forEach(btn => {
                    btn.classList.remove('text-(--color-primary-500)', 'bg-zinc-100');
                });
                if(allButton) {
                    allButton.classList.remove('text-(--color-primary-500)', 'bg-zinc-100');
                }
                this.classList.add('text-(--color-primary-500)', 'bg-zinc-100');
            });
        });

</script>

</body>

</html>