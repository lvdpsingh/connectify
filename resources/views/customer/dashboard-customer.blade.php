<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome to Connectify!') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2l mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">


                    <div class="row row-cols-auto row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card h-100">
                                {{--                                <img src="..." class="card-img-top" alt="...">--}}
                                <div class="card-body  d-flex flex-column">
                                    <h5 class="card-title text-center"><strong>Request a new service</strong></h5>
                                    <p class="card-text align-justify ">A single connection manages all of your connectivity services like internet, phone, wifi, network, IOT device management, as well as new connection requests, address changes all under one account.</p><br>
                                    <a id="nw-service" href="{{route('newservice.all')}}" class="btn btn-dark text-center mt-auto">Request New Service</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100  ">
                                {{--                                <img src="..." class="card-img-top" alt="...">--}}
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title text-center"><strong>Manage Requests</strong></h5>
                                    <p class="card-text align-justify">Manage your submitted service-requests like new request, update requests, move-in date changes, address changes directly via your connectify account.</p><br>
                                    <a id="manage-req" href="{{route('manage-request-customer')}}" class="btn btn-dark mt-auto">View / Manage Submitted Request</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
