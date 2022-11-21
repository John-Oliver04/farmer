<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
    <div class="" >


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                </div>
            </div>
        </div>
    </div>

    {{-- Start Account Info --}}
    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <ul class="list-group">
                        <li class="list-group-item bg-success" aria-current="true">Accounts Information</li>
                        <li class="list-group-item">Name: {{Auth::user()->name}}</li>
                        <li class="list-group-item">Address: {{Auth::user()->address}}</li>
                        <li class="list-group-item">Birthday: {{Auth::user()->birthday}}</li>
                        <li class="list-group-item">Contacts: {{Auth::user()->contact}}</li>
                        <li class="list-group-item">RSBSA No.: {{Auth::user()->rsbsa}}</li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{-- End Acount Info --}}

    {{-- Start Damages Report --}}
    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="">
                    {{-- start modal --}}
                        <!-- Button trigger modal -->
                        <button   class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            +
                        </button>
                        <form  action="{{url('dashboard-register')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Damages Report Form</h5>
                                    <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="crop" class="form-label">Type of Crop (Choose one only)</label>
                                            <input required type="text" class="form-control" id="crop" name="crop" placeholder="Ex: Rice, Corn, Union, Banana etc.">
                                        </div>

                                        <div class="mb-3">
                                            <label for="losses" class="form-label">Estimated Crop Losses</label>
                                            <input required type="number" class="form-control" id="losses" name="losses" placeholder="Php 000.00">
                                        </div>

                                        <div class="mb-3">
                                            <label for="disaster" class="form-label">Type of Disaster</label>
                                            <input required type="text" class="form-control" id="disaster" name="disaster" placeholder="Ex: Flood, High Wind, Typhoon">
                                        </div>

                                        <div class="mb-3">
                                            <label for="dated" class="form-label">Date</label>
                                            <input required type="text" class="form-control" id="dated" name="dated" placeholder="Date of typhoon">
                                        </div>

                                        <div class="mb-3">
                                            <label for="pic" class="form-label">Picture of Damages</label>
                                            <input type="file" name="photos" class="form-control" id="pic">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button  class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                        <input type="submit" class="btn btn-outline-success" value="Add"/>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </form>
                        {{-- end modal --}}
                    </div>

                    {{-- message start --}}
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    {{-- message end --}}
                    <table class="table table-success table-striped mt-1">
                        <thead>
                            <th>#</th>
                            <th>Type of Crops</th>
                            <th>Estimated crop losses</th>
                            <th>Disaster</th>
                            <th>Date of Disater</th>
                            <th>Picture of Damages</th>
                        </thead>
                        <tbody>

                            @php
                                $damages = App\Models\Damages::where('email', Auth::user()->email)->get();
                            @endphp
                            @foreach ($damages as $item)
                                <tr>
                                    <td> {{$loop->index +1}} </td>
                                    <td> {{$item->crop}} </td>
                                    <td>Php {{number_format($item->losses)}} </td>
                                    <td> {{$item->disaster}} </td>
                                    <td> {{$item->date}} </td>
                                    <td>
                                        {{-- start modal --}}
                                        <!-- Button trigger modal -->
                                        <button name="$loop->index"   class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#staticBackdropimage">
                                            View {{$loop->index}}
                                        </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="staticBackdropimage"  data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Pictures of damages</h5>
                                                    <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body overflow-y-scroll">
                                                        <form  action="{{route('dashboard-addimage')}}" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                            <div class="card" >
                                                                <div class="card-body">
                                                                    @php
                                                                        $images = App\Models\Photo::where('farmersemail', Auth::user()->email)->get();

                                                                @endphp

                                                                    <div class="form-group">Crop: <input  class="border-none form-control" type="text" name="crop" id="crop" value="{{$item->crop}}"/> </div>
                                                                    <div class="form-group">Estimated Loss: <input   class="border-none form-control" type="text" name="loss" id="loss" value="Php {{number_format($item->losses)}}"/>   </div>
                                                                    <div class="form-group">Disaster: <input   class="border-none form-control" type="text" name="disaster" id="disaster" value="{{$item->disaster}}"/></div>
                                                                    <div class="form-group">On: <input  class="border-none form-control" type="text" name="disasterdate" id="disasterdate" value="{{$item->date}}"/></div>


                                                                            @foreach ($images as $image)

                                                                                @if ($image->disasterdate == $item->date || $image->)
                                                                                    <div class="bg-gray-900 drop-shadow-lg h-7 my-3 ">
                                                                                        <img class="img-fluid img-thumbnail" src="{{asset('images').'/'.$image->images}}" alt="">
                                                                                    </div>
                                                                                @endif
                                                                            @endforeach



                                                                </div>
                                                                <div class=" card-footer">

                                                                        <label for="pic" class="form-label">Add Image</label>
                                                                        <input type="file" required name="photos" class="form-control" id="photos">

                                                                        <input type="submit" class="btn bg-success text-white mt-3 w-100" value="Add"/>

                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button  class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        {{-- end modal --}}

                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- End Damages Report --}}



</x-app-layout>
