@extends('layouts.main')

@section('title', 'Services')

@section('content')
    {{-- slide --}}
    <div>
        <div style="background-image: url({{ asset('/img/services_02.png')}})" class="bg-cover bg-center bg-no-repeat xxs:h-48 xs:h-48 sm:h-84 lg:h-64 xl:h-96">
            <div class="container flex items-center justify h-full">
                <p class="font-body text-white text-center text-shadow xxs:text-xxs xs:text-base sm:text-1xl md:text-2xl lg:text-2xl xl:text-2xl">
                    The Company is focused on providing savers, investors and institutional clients with solutions through a large range of financial products. Cucchiara operates with regulated banks and brokers who enjoy excellent ratings and reputation in the international financial markets.Given our FSP status, we are not a member of any Stock Exchange.
                </p>
                <div class="xxs:h-3 xs:h-20 sm:h-32 md:h-48 lg:h-80 xl:h-96"></div>
            </div>
        </div>
        <div class="bg-secondary">
            <div class="container">
                <div class="flex flex-row lg:px-40 py-32 items-center justify-center">
                    <div class="text-white xs:pr-3 lg:pr-20">
                        <div class="text-xl font-bold text-right max-w-3xl">
                            Brokerage
                        </div>
                        <div class="xxs:text-xs xs:text-base sm:text-base text-right max-w-3xl pt-5">
                            We trade a wide range of OTC and listed financial instruments on behalf of our clients, including: sovereign bonds, shares, corporate bonds, options, ETF, funds and structured products. We provide our clients with access to all major international exchanges.
                        </div>
                    </div>
                    <div class="ml-4">
                        <img src="{{ asset('/img/Group 1.png') }}" class="xxs:w-20 sm:w-auto" alt="about image"/>
                    </div>
                </div>
                <div class="border border-services-c"></div>
                <div class="container flex flex-row lg:px-40 py-32 items-center justify-center">
                    <div class="mr-4">
                        <img src="{{ asset('/img/_219_Duty_Finance_Marketing_Money.png') }}" class="xxs:w-20 sm:w-auto" alt="about image"/>
                    </div>
                    <div class="text-white xs:pl-3 lg:pl-20">
                        <div class="text-xl font-bold text-left max-w-3xl">
                            Custody
                        </div>
                        <div class="xxs:text-xs xs:text-base sm:text-base text-left max-w-3xl pt-5">
                            We provide custody and securities servicing solutions to institutional clients and investors.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end slide --}}
    <div class="h-[10rem]"></div>
@endsection
