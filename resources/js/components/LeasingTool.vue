<template>
    <div class="mx-6 md:mx-auto " style="color: #4A5568; max-width: 60ch">
        <div style="flex flex-col items-center justify-center">
            <h2 class="pt-12 text-2xl font-bold">Leasing Calculator</h2>
            <div class="text-sm leading-normal">
                <p class="pt-2" style="max-width: 60ch">
                    Have you considered financing? If not, you should! When the potential tax benefits of leasing are coupled with the conservation of working capital 
                    and the potential income to be derived from the conserved capital, then leasing may be cheaper than paying cash for your furniture.
                </p>
                <p class="pt-2" style="max-width: 60ch">
                    Here are some of the other advantages of leasing&hellip; 
                </p>
                <div class="w-full pb-6 flex flex-col md:flex-row leading-loose">
                    <ul class="px-6 font-bold">
                        <li>Tax Advantages</li>
                        <li>Overcome Budgetary Limitations</li>
                        <li>Conserve Cash Flow</li>
                    </ul>
                    <ul class="px-6 font-bold">
                        <li>Obsolescence Protection</li>
                        <li>Hedge Against Inflation</li>
                        <li>Preserve Bank Credit Lines/Liquidity</li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="text-2xl font-bold flex items-center justify-center">
                    <input 
                        v-model="amount"
                        name="amount"
                        type="text"
                        placeholder="$5,000 min"
                        onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                        class="mr-3 py-3 px-2 text-2xl font-bold text-center"
                    >
                </div>
            </div>
        </div>

        <div v-if="showLeasing">
            <div class="container mx-auto">
                <div class="w-full py-6 flex leading-normal">
                    <div class="w-48 text-center">
                        <div class="text-base">36 months</div>
                        <div class="text-2xl"><strong v-text="leases[36].payment"></strong></div>
                    </div>
                    <div class="w-48 text-center">
                        <div class="text-base">48 months</div>
                        <div class="text-2xl"><strong v-text="leases[48].payment"></strong></div>
                    </div>
                    <div class="w-48 text-center">
                        <div class="text-base">60 months</div>
                        <div class="text-2xl"><strong v-text="leases[60].payment"></strong></div>
                    </div>
                </div>
                <div class="w-full pt-4 text-xs leading-normal" style="max-width: 60ch">$1 Purchase Option. <br>$150 lease documentation fee required in advance. <br>Payments do not include applicable taxes and fees. </div>
            </div>

            <div class="w-full mt-6 mb-12 flex flex-col">
                <div class="w-full flex flex-col">
                    <div class="w-1/3 mt-2 text-center">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 170 40" enable-background="new 0 0 170 40" xml:space="preserve">
                            <g>
                                <path fill="#005686" d="M36.4,32c0-0.9-1.1-1.4-2-1.4c-1.1,0-2.5,0.6-2.5,2.7c0,2.1,1.4,2.7,2.5,2.7c1.4,0,2-0.7,2.1-1.4h1.8
                                    c-0.1,2-2,2.6-4,2.6c-2.5,0-4.1-1.3-4.1-4c0-2.5,1.6-4,4.2-4c1.6,0,3.7,0.6,3.8,2.6H36.4L36.4,32z"/>
                                <path fill="#005686" d="M45.1,34.2l-1.6-3.3l-1.6,3.3H45.1L45.1,34.2z M42.5,29.6h2.1l3.9,7.6h-2l-0.9-1.7h-4.4l-0.8,1.7h-1.8
                                    L42.5,29.6L42.5,29.6z"/>
                                <path fill="#005686" d="M51,33.1h2c0.9,0,1.6-0.3,1.6-1.1c0-1-0.9-1.2-1.9-1.2H51V33.1L51,33.1z M49.3,29.6h3.7
                                    c2.4,0,3.4,0.8,3.4,2.4c0,0.9-0.4,2.3-3.1,2.3H51v2.8h-1.7V29.6L49.3,29.6z"/>
                                <polygon fill="#005686" points="57.4,29.6 59.1,29.6 59.1,37.1 57.4,37.1 57.4,29.6 	"/>
                                <polygon fill="#005686" points="67.8,29.6 67.8,30.8 64.9,30.8 64.9,37.1 63.2,37.1 63.2,30.8 60.4,30.8 60.4,29.6 67.8,29.6 	"/>
                                <path fill="#005686" d="M73.9,34.2l-1.6-3.3l-1.6,3.3H73.9L73.9,34.2z M71.4,29.6h2.1l3.9,7.6h-2l-0.9-1.7h-4.4l-0.8,1.7h-1.8
                                    L71.4,29.6L71.4,29.6z"/>
                                <polygon fill="#005686" points="78.2,29.6 79.9,29.6 79.9,35.9 84,35.9 84,37.1 78.2,37.1 78.2,29.6 	"/>
                                <polygon fill="#005686" points="86.8,35.7 85.5,38 84.2,38 85.1,35.7 86.8,35.7 	"/>
                                <polygon fill="#005686" points="90.6,29.6 92.3,29.6 92.3,37.1 90.6,37.1 90.6,29.6 	"/>
                                <polygon fill="#005686" points="93.5,29.6 95.9,29.6 100.1,35.4 100.2,35.4 100.2,29.6 101.7,29.6 101.7,37.1 99.4,37.1 95,31.2 
                                    95,31.2 95,37.1 93.5,37.1 93.5,29.6 	"/>
                                <path fill="#005686" d="M109.1,32c0-0.9-1.1-1.4-2-1.4c-1.1,0-2.5,0.6-2.5,2.7c0,2.1,1.4,2.7,2.5,2.7c1.4,0,2-0.7,2.1-1.4h1.8
                                    c-0.1,2-2,2.6-4,2.6c-2.5,0-4.1-1.3-4.1-4c0-2.5,1.6-4,4.2-4c1.6,0,3.7,0.6,3.8,2.6H109.1L109.1,32z"/>
                                <polygon fill="#005686" points="113.1,35.7 113.1,37.1 111.7,37.1 111.7,35.7 113.1,35.7 	"/>
                                <path fill="#005686" d="M43.8,4.4v12.3c0,3.4-1.4,4.4-4.3,4.4c-2.9,0-4.3-1.1-4.3-4.4V4.4h-6.2v13.4c0,5.7,3.9,8,10.5,8
                                    s10.5-2.2,10.5-8V4.4H43.8L43.8,4.4z"/>
                                <polygon fill="#005686" points="68,4.4 68,17.4 67.9,17.4 59.3,4.4 52.1,4.4 52.1,25.1 58.1,25.1 58.1,12 58.2,12 67.1,25.1 
                                    74,25.1 74,4.4 68,4.4 	"/>
                                <polygon fill="#005686" points="76,25.1 82.2,25.1 82.2,4.4 76,4.4 76,25.1 	"/>
                                <polygon fill="#005686" points="107.3,4.4 107.3,25.1 126,25.1 126,20.7 113.5,20.7 113.5,16.9 125.2,16.9 125.2,12.6 113.5,12.6 
                                    113.5,8.9 126,8.9 126,4.4 107.3,4.4 	"/>
                                <path fill="#005686" d="M126.9,10.4c0,3.1,1.5,5.2,5.3,5.9l6.2,1c2.2,0.4,3,0.8,3,1.9c0,1.8-1.7,2.2-3.3,2.2c-3.2,0-4-1-4.2-2.6
                                    h-7.4c0.4,5.8,4.9,7,11.3,7c2.6,0,10.8-0.1,10.8-7.1c0-3.7-2.1-5.2-5.6-5.9c-1.8-0.4-6.6-1.1-8.2-1.4c-0.9-0.2-1.4-0.6-1.4-1.3
                                    c0-1.4,1.1-2,3.2-2c2.9,0,3.9,1,4.1,2.4h7.1c-0.4-4.9-4.5-6.7-11.2-6.7C128.4,3.8,126.9,7.6,126.9,10.4"/>
                                <polygon fill="#005686" points="148.5,4.4 148.5,9 155.4,9 155.4,25.1 161.6,25.1 161.6,9 168.4,9 168.4,4.4 148.5,4.4 	"/>
                                <polygon fill="#005686" points="99.6,4.4 94.8,19.2 94.8,19.2 90,4.4 83.2,4.4 91.5,25.1 98.1,25.1 106.4,4.4 99.6,4.4 	"/>
                                <path fill="#005686" d="M166.4,10.5c-0.4-0.4-0.9-0.6-1.5-0.6c-0.6,0-1.1,0.2-1.5,0.6c-0.4,0.4-0.6,0.9-0.6,1.5
                                    c0,0.6,0.2,1.1,0.6,1.5c0.4,0.4,0.9,0.6,1.5,0.6c0.6,0,1.1-0.2,1.5-0.6c0.4-0.4,0.6-0.9,0.6-1.5C167.1,11.4,166.9,10.9,166.4,10.5
                                    M166.2,13.3c-0.4,0.4-0.8,0.5-1.3,0.5c-0.5,0-1-0.2-1.3-0.5c-0.4-0.4-0.5-0.8-0.5-1.3c0-0.5,0.2-0.9,0.5-1.3
                                    c0.4-0.4,0.8-0.5,1.3-0.5c0.5,0,0.9,0.2,1.3,0.5c0.4,0.4,0.5,0.8,0.5,1.3C166.8,12.5,166.6,13,166.2,13.3 M165.9,11.5
                                    c0-0.3-0.1-0.5-0.4-0.6c-0.1-0.1-0.3-0.1-0.6-0.1h-0.8v2.3h0.4v-0.9h0.3c0.2,0,0.4,0,0.5,0.1c0.1,0.1,0.2,0.3,0.2,0.5v0.2l0,0.1
                                    l0,0l0,0h0.4l0,0l0-0.1l0-0.2v-0.2c0-0.1,0-0.2-0.1-0.4c-0.1-0.1-0.2-0.2-0.4-0.2c0.1,0,0.3-0.1,0.3-0.1
                                    C165.8,11.9,165.9,11.7,165.9,11.5 M165.3,11.9c-0.1,0-0.2,0.1-0.4,0.1h-0.4v-0.8h0.4c0.2,0,0.4,0,0.5,0.1c0.1,0.1,0.2,0.2,0.2,0.3
                                    C165.5,11.7,165.4,11.9,165.3,11.9"/>
                                <path fill="#FFFFFF" d="M1.6,8.8c0,0.4,0.2,1.3,0.2,1.3l0.4,0.9c0,0,4.4,10.2,4.4,10.2c0,0,3.5,1.5,3.5,1.4c0,0,5.6,0.1,5.6,0.1
                                    c0-0.1,5.5-3.6,5.6-3.6c0,0,0.5-0.2,0.6-0.4c0-0.1,0.2-0.6,0.2-0.6c0.2-0.5-0.5-1.6-0.5-1.6s-0.1-3.5-0.1-3.5c0,0,0.9-5.5,0.9-5.5
                                    L19.6,6l-4.1-1.1l-4.4-0.1l-8,2C3.1,6.8,1.6,8.5,1.6,8.8L1.6,8.8z"/>
                                <path fill="#005686" d="M19.1,8.5c0,0-0.1,0-0.1,0c-0.1,0-0.2,0-0.3,0.1c-0.2,0.1-0.4,0.2-0.4,0.2c0,0.1,0.2,0,0.4,0
                                    C18.9,8.7,19.1,8.6,19.1,8.5 M24.4,4.3C17.9,5.5,13.1,2,13.1,2S8.2,5.5,1.7,4.3C1.5,5.9,1.5,7.4,1.6,8.8c1.7,0.9,4.2,2,5.3,1.4
                                    C7.3,10,7.8,9.3,6.3,9.5c0.6-0.1,1.2-1.1,1.9-1.2C8.2,8.2,7.2,8.1,7.3,8C7.4,8,7.5,8,7.7,7.9c0.7-0.3,0.6-0.6,1.2-0.7
                                    C9.5,7,8,6.8,8.5,6.8c1.4-0.2,3.4-2,7.9-1c1.7,0.4,1.9,1.8,1.9,2.1c-0.3,0-0.8,0-1.3-0.3c-1.3-0.7-2.4,0.5-2.4,0.5s1.6-0.5,1.3,0
                                    c-0.4,0.6,0.6,0.6,0.6,0.6s0.6-0.2,0.3-0.7c0.2-0.4,1.1,0.2,1.3,0.1c0.1,0,0.2-0.1,0.3-0.1v0c0,0,2.2,0.2,2.7,0.7
                                    c0.5,0.5,0.2,1.6,0.2,1.6s-0.3-0.8-2.1-0.1c-0.1,0.1-0.6,0.1-1.4,0.3c-1.4,0.4-3.3,6,4.4,7.6C23.7,14.5,24.9,9.8,24.4,4.3"/>
                                <path fill="#E6A624" d="M17.6,17.1c-0.2,1.2-0.6,1.5-0.6,1.5c-0.5-0.4-1-1.6-1-1.6C15,18.6,13.6,19,13.6,19l-0.2,0.1
                                    c0.1-0.7-0.5-1.5-0.5-1.5c-0.5,0.9-1.6,1.4-2.2,1.6c-0.2-1.7-0.8-2.6-0.8-2.6c-0.9,0.5-1.2,1-1.4,1.6c-0.5-1.1-0.8-2.8-0.8-2.8
                                    c-0.6,0.2-0.8,1.7-0.8,1.7C6.3,16.4,6,13.7,6,13.7l0-0.3c-0.4,0.2-0.6,0.7-0.6,0.7c-0.1-0.6,0.1-1.7,0.2-2.3
                                    c-2.3-0.6-3.4-1.4-3.8-1.7c0.2,2.2,0.7,4.8,1.9,7.2c2.8,6.1,6.6,8.9,9.5,10c2.6-1,6.1-3.4,8.8-8.6C20.3,18.6,18.7,17.7,17.6,17.1
                                    L17.6,17.1z"/>
                                <path fill="#6698BF" d="M13.1,2c0,0-4.9,3.5-11.4,2.3C1.5,5.9,1.5,7.4,1.6,8.8C1.7,8.9,1.9,9,2.1,9c-0.1-1.9,0-3.5,0-4.2
                                    C2.5,4.9,3.3,5,4.2,5C6.3,5,9.6,5.1,13.1,3C16.6,5.1,19.8,5,21.8,5c1,0,1.7-0.1,2.2-0.2c0.1,1.5,0.3,6.3-1.2,10.3
                                    c-0.4,1.1-0.8,2-1.3,2.9c0.2,0,0.3,0.1,0.5,0.1c1.6-3.7,2.8-8.3,2.3-13.9C17.9,5.5,13.1,2,13.1,2L13.1,2z"/>
                                <g>
                                    <defs>
                                        <path id="SVGID_1_" d="M13.1,2c0,0-4.9,3.5-11.4,2.3C1.5,5.9,1.5,7.4,1.6,8.8C1.7,8.9,1.9,9,2.1,9c-0.1-1.9,0-3.5,0-4.2
                                            C2.5,4.9,3.3,5,4.2,5C6.3,5,9.6,5.1,13.1,3C16.6,5.1,19.8,5,21.8,5c1,0,1.7-0.1,2.2-0.2c0.1,1.5,0.3,6.3-1.2,10.3
                                            c-0.4,1.1-0.8,2-1.3,2.9c0.2,0,0.3,0.1,0.5,0.1c1.6-3.7,2.8-8.3,2.3-13.9C17.9,5.5,13.1,2,13.1,2L13.1,2z"/>
                                    </defs>
                                    <clipPath id="SVGID_2_">
                                        <use xlink:href="#SVGID_1_"  overflow="visible"/>
                                    </clipPath>
                                    <polygon clip-path="url(#SVGID_2_)" fill="#3278AB" points="13.1,3.5 1.2,9.8 1.2,1.8 13.1,1.8 13.1,3.5 		"/>
                                </g>
                                <path fill="#EAB74E" d="M13.1,25.7c-0.8-0.2-6.8-2-9.9-10.6c-0.6-1.5-0.9-3.2-1-4.7c-0.2-0.1-0.3-0.2-0.4-0.3
                                    c0.2,2.2,0.7,4.8,1.9,7.2c2.8,6.1,6.6,8.9,9.5,10c2.6-1,6.1-3.4,8.8-8.6c-0.2,0-0.4-0.1-0.6-0.1C18.1,24.5,13.7,25.5,13.1,25.7
                                    L13.1,25.7z"/>
                                <g>
                                    <defs>
                                        <path id="SVGID_3_" d="M13.1,25.7c-0.8-0.2-6.8-2-9.9-10.6c-0.6-1.5-0.9-3.2-1-4.7c-0.2-0.1-0.3-0.2-0.4-0.3
                                            c0.2,2.2,0.7,4.8,1.9,7.2c2.8,6.1,6.6,8.9,9.5,10c2.6-1,6.1-3.4,8.8-8.6c-0.2,0-0.4-0.1-0.6-0.1C18.1,24.5,13.7,25.5,13.1,25.7
                                            L13.1,25.7z"/>
                                    </defs>
                                    <clipPath id="SVGID_4_">
                                        <use xlink:href="#SVGID_3_"  overflow="visible"/>
                                    </clipPath>
                                    <polygon clip-path="url(#SVGID_4_)" fill="#F0C97B" points="22.2,18.4 13.1,18.5 13.1,27.9 19.5,25.1 22.2,18.4 		"/>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="w-full my-2 text-xl font-bold">Get Started Today!</div>
                <div class="mb-6 text-sm" style="color: #4A5568; max-width: 60ch">
                    Univest Captial offers capital leasing solutions that help manage cash flow, preserve lines of credit, and stay current with changing technology.
                </div> 
                
                <div class="flex flex-col md:flex-row"> 
                    <div @click="downloadApplication()" class="w-full md:w-1/2 flex flex-col justify-center items-center cursor-pointer">
                        <div class="w-12">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 40 52" enable-background="new 0 0 40 52" xml:space="preserve">
                                <g>
                                    <path fill="#EF4438" d="M23,2H3.7C2.7,2,2,2.8,2,3.7v44.6C2,49.2,2.7,50,3.7,50h32.7c0.9,0,1.7-0.8,1.7-1.7V17.5L23,2z"/>
                                    
                                        <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="15.8672" y1="56.604" x2="30.2309" y2="80.9924" gradientTransform="matrix(1 0 0 -1 0 90)">
                                        <stop  offset="0" style="stop-color:#B72025;stop-opacity:0"/>
                                        <stop  offset="1" style="stop-color:#B72025"/>
                                    </linearGradient>
                                    <polygon opacity="0.5" fill="url(#SVGID_1_)" enable-background="new    " points="23,2 2.1,35.2 19.9,47.7 38,17.5 	"/>
                                    <path fill="#EF9A9B" d="M23,15.8c0,0.9,0.7,1.7,1.7,1.7H38L23,2V15.8z"/>
                                </g>
                                <g>
                                    <path fill="#FFFFFF" d="M9.6,40.8c-0.1-0.1-0.2-0.3-0.2-0.5s0.1-0.4,0.2-0.5c0.1-0.1,0.3-0.2,0.5-0.2s0.4,0.1,0.5,0.2
                                        c0.1,0.1,0.2,0.3,0.2,0.5s-0.1,0.4-0.2,0.5C10.5,41,10.3,41,10.1,41S9.7,41,9.6,40.8z"/>
                                    <path fill="#FFFFFF" d="M11.9,40.8c-0.1-0.1-0.2-0.3-0.2-0.5v-6c0-0.2,0.1-0.3,0.2-0.5s0.3-0.2,0.5-0.2h2.4c0.7,0,1.3,0.2,1.7,0.6
                                        c0.4,0.4,0.6,0.9,0.6,1.6s-0.2,1.2-0.6,1.6c-0.4,0.4-1,0.6-1.7,0.6H13v2.2c0,0.2-0.1,0.4-0.2,0.5C12.7,41,12.6,41,12.4,41
                                        C12.2,41,12.1,41,11.9,40.8z M14.6,37.2c0.9,0,1.3-0.4,1.3-1.2c0-0.8-0.4-1.2-1.3-1.2H13v2.4L14.6,37.2L14.6,37.2z"/>
                                    <path fill="#FFFFFF" d="M17.9,40.8c-0.1-0.1-0.2-0.3-0.2-0.5v-5.9c0-0.2,0.1-0.3,0.2-0.5s0.3-0.2,0.5-0.2h2c1.1,0,2,0.3,2.7,0.9
                                        c0.6,0.6,0.9,1.5,0.9,2.6c0,1.1-0.3,2-0.9,2.7c-0.6,0.6-1.5,0.9-2.7,0.9h-2C18.2,41,18,40.9,17.9,40.8z M20.3,39.9
                                        c1.6,0,2.4-0.8,2.4-2.5c0-1.7-0.8-2.5-2.4-2.5H19v5H20.3z"/>
                                    <path fill="#FFFFFF" d="M24.9,40.8c-0.1-0.1-0.2-0.3-0.2-0.5v-6c0-0.2,0.1-0.3,0.2-0.5c0.1-0.1,0.3-0.2,0.5-0.2h3.5
                                        c0.4,0,0.6,0.2,0.6,0.5c0,0.3-0.2,0.5-0.6,0.5H26v2h2.6c0.4,0,0.6,0.2,0.6,0.5c0,0.3-0.2,0.5-0.6,0.5H26v2.5c0,0.2-0.1,0.4-0.2,0.5
                                        C25.7,41,25.6,41,25.4,41C25.2,41,25,41,24.9,40.8z"/>
                                </g>
                            </svg>
                        </div>
                        <div class="text-sm"> Download Application </div>
                    </div>
                    <div class="w-full md:w-1/2 flex flex-col justify-center">
                        <p>Steve Morgan</p>
                        <address>Senior Relationship Manager</address>
                        <address>phone: 612-867-1813</address>
                        <address>fax: 866-575-7617  </address> 
                        <a href="mailto:morgans@univest.net" target="_blank" class="no-underline active" style="color: #3182CE">morgans@univest.net</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import _ from 'lodash'
    export default {

        /**
         * Local state
         */
        data() {
            return {
                amount: null,
                intAmount: 0,
                leases: {
                    '36': null,
                    '48': null,
                    '60': null
                },
                showLeasing: false,
            }
        },

        /**
         * Events
         */
        watch: {
            amount(value, oldValue) {
                
                let removeDollar = value.toString().replace('$', "")
                let removeComma = removeDollar.replace(/,/g, "")
                let clean = removeComma.replace(/(\.[0-9]*?)0+/g, "")
                this.intAmount = parseInt(clean)
            },

            intAmount(value, oldValue) {
                if (value > 4999) {
                    this.loadLeases(value)
                } else {
                    this.showLeasing = false
                }
            },
        },
        /**
         * Lifecycle Events
         */
        mounted() {
            let amountInput = document.querySelector('input[name="amount"]')
            amountInput.addEventListener('blur', this.addFormat)
            amountInput.addEventListener('focus', this.removeFormat)
        },

        /**
         * Non reactive properties
         */
        methods: {
            
            addFormat(event) {
                if (event && event.target && event.target.value) {
                    console.log({ADD: '$' + parseInt(event.target.value).toFixed(2)})
                    let formatted = '$' + parseInt(event.target.value).toFixed(2)
                    this.amount = formatted.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
                }
            },

            removeFormat(event) {
                if (event && event.target && event.target.value) {
                    let clean = event.target.value.toString().replace(/,/g, "")
                    clean = clean.replace('.00', '')
                    this.amount = clean.replace('$', '')
                }
            },
            
            loadLeases(amount) {
                let $this = this
                
                _.each(Nova.config.nova_leasing_tool.rates, function (rates, months) {
                    $this.leases[months] = $this.createLease($this.intAmount, months, rates)   
                })

                this.showLeasing = true
            },

            createLease(amount, months, rates) {
                let rate = this.rateFactor(amount, rates)
                
                let payment = parseFloat(amount * rate).toFixed(2)
                payment = '$' + payment.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
                
                return { payment }
            },

            rateFactor(amount, rates) {
                if (rates.length && rates.length === 4) {
                    let rate = rates[0]

                    if (parseInt(amount) > 9999) {
                        rate = rates[1]
                    }

                    if (parseInt(amount) > 24999) {
                        rate = rates[2]
                    }

                    if (parseInt(amount) > 74999) {
                        rate = rates[3]
                    }

                    return rate
                }
            },

            downloadApplication() {
                window.location = "/leasing/application"
            },
        },

        
    }
</script>
<style lang="sass">
    
</style>