<x-app-layout>
           <div class="dashboard-bg py-7 pl-7 pr-4 w-full">
            <div class="flex items-center justify-between">
                <div class="min-w-max">
                    <h4 class="text-gray-900 font-size-22 font-bold">Dashboard</h4>
                    <p class="text-gray-600"><span>109</span> Orders Found</p>
                </div>

                <div class="min-w-max">
                    <div class="flex items-center gap-2">
                        <span class="text-gray-400">Sort By:- </span>
                        <div class="flex items-center min-w-max bg-white">
                            <span class="pl-2 pr-1">
                                <img src="{{ asset('assets/img/Iconly/Light/paper.svg') }}" alt="">
                            </span>
                            <select
                                class="border text-gray-600 pl-0 py-1 border-white focus:ring-0 focus:outline-none focus:border-white"
                                name="" id="">
                                <option>All Orders</option>
                                <option value="Dec">Dec</option>
                                <option value="Asc">Asc</option>
                            </select>
                        </div>
                        <div class="flex items-center min-w-max bg-white">
                            <span class="pl-2 pr-1">
                                <img src="{{ asset('assets/img/Iconly/Light/calendar.svg') }}" alt="">
                            </span>
                            <select
                                class="border text-gray-600 pl-0 py-1 border-white focus:ring-0 focus:outline-none focus:border-white"
                                name="" id="">
                                <option value="June">June</option>
                                <option value="Dec">Dec</option>
                            </select>
                        </div>
                        <a href="#" class="bg-blue-600 py-1 px-2 text-white flex gap-2 items-center">Add New
                            <span><img src="{{ asset('assets/img/Iconly/Light/plus.svg') }}"
                                    alt=""></span></a>
                    </div>
                </div>
            </div>

            <!--Service Box info-->
            <div class="flex w-full mt-4 gap-4">
                <div class="dc-service-box">
                    <div class="w-1/2">                    
                        <h2 class="text-gray-400 text-sm pb-2">Courier Service</h2>
                        <h2 class="text-black text-2xl">$ 1.34 L</h2>
                        <div class="flex items-center space-x-2 py-2">
                            <img class="w-5" src="{{ asset('assets/img/Iconly/Light/discovery.svg') }}"/>
                            <h2 class="text-base"><span class="text-blue-600">+30%</span> Inc</h2>
                        </div>
                    </div>
                    <div class="flex w-1/2 items-center justify-center">                    
                          <svg viewbox="0 0 35.83098862 35.83098862" width="80" height="80" xmlns="http://www.w3.org/2000/svg">
                            <circle stroke="#efefef" stroke-width="4" fill="none" cx="17.91549431" cy="17.91549431" r="15.91549431" />
                            <circle stroke="#00acc1" stroke-width="4" stroke-dasharray="65,100" stroke-linecap="none" fill="none" cx="17.91549431" cy="17.91549431" r="15.91549431" />
                            <g class="circle-chart__info items-center">
                                <text class="circle-chart__percent" x="16.91549431" y="16.5" alignment-baseline="central" text-anchor="middle" font-size="8">65%</text>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="dc-service-box">
                    <div class="w-1/2">                    
                        <h2 class="text-gray-400 text-sm pb-2">Package Service</h2>
                        <h2 class="text-black text-2xl">$ 0.84 L</h2>
                        <div class="flex items-center space-x-2 py-2">
                            <img class="w-5" src="{{ asset('assets/img/Iconly/Light/discovery.svg') }}"/>
                            <h2 class="text-base"><span class="text-blue-600">+30%</span> Inc</h2>
                        </div>
                    </div>
                    <div class="flex w-1/2 items-center justify-center">                    
                          <svg viewbox="0 0 35.83098862 35.83098862" width="80" height="80" xmlns="http://www.w3.org/2000/svg">
                            <circle stroke="#efefef" stroke-width="4" fill="none" cx="17.91549431" cy="17.91549431" r="15.91549431" />
                            <circle stroke="#48521f" stroke-width="4" stroke-dasharray="80,100" stroke-linecap="none" fill="none" cx="17.91549431" cy="17.91549431" r="15.91549431" />
                            <g class="circle-chart__info items-center">
                                <text class="circle-chart__percent" x="16.91549431" y="16.5" alignment-baseline="central" text-anchor="middle" font-size="8">80%</text>
                            </g>
                        </svg>
                        
                    </div>
                </div>
                <div class="dc-service-box">
                    <div class="w-1/2">                    
                        <h2 class="text-gray-400 text-sm pb-2">Quick Service</h2>
                        <h2 class="text-black text-2xl">$ 1.57 L</h2>
                        <div class="flex items-center space-x-2 py-2">
                            <img class="w-5" src="{{ asset('assets/img/Iconly/Light/discovery.svg') }}"/>
                            <h2 class="text-base"><span class="text-blue-600">+15%</span> Inc</h2>
                        </div>
                    </div>
                    <div class="flex w-1/2 items-center justify-center">                    
                          <svg viewbox="0 0 35.83098862 35.83098862" width="80" height="80" xmlns="http://www.w3.org/2000/svg">
                            <circle stroke="#efefef" stroke-width="4" fill="none" cx="17.91549431" cy="17.91549431" r="15.91549431" />
                            <circle stroke="#bb4f00" stroke-width="4" stroke-dasharray="90,100" stroke-linecap="none" fill="none" cx="17.91549431" cy="17.91549431" r="15.91549431" />
                            <g class="circle-chart__info items-center">
                                <text class="circle-chart__percent" x="16.91549431" y="16.5" alignment-baseline="central" text-anchor="middle" font-size="8">90%</text>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="dc-service-box">
                    <div class="w-1/2">                    
                        <h2 class="text-gray-400 text-sm pb-2">Overall</h2>
                        <h2 class="text-black text-2xl">$ 2.34 L</h2>
                        <div class="flex items-center space-x-2 py-2">
                            <img class="w-5" src="{{ asset('assets/img/Iconly/Light/discovery.svg') }}"/>
                            <h2 class="text-base"><span class="text-blue-600">+10%</span> Inc</h2>
                        </div>
                    </div>
                    <div class="flex w-1/2 items-center justify-center">                    
                          <svg viewbox="0 0 35.83098862 35.83098862" width="80" height="80" xmlns="http://www.w3.org/2000/svg">
                            <circle stroke="#efefef" stroke-width="4" fill="none" cx="17.91549431" cy="17.91549431" r="15.91549431" />
                            <circle stroke="#c60b63" stroke-width="4" stroke-dasharray="75,100" stroke-linecap="none" fill="none" cx="17.91549431" cy="17.91549431" r="15.91549431" />
                            <g class="circle-chart__info items-center">
                                <text class="circle-chart__percent" x="16.91549431" y="16.5" alignment-baseline="central" text-anchor="middle" font-size="8">75%</text>
                            </g>
                        </svg>
                    </div>
                </div>              
            </div>

            <!--Servec box info-->
            

            <!--Pagination-->

        </div>
</x-app-layout>
