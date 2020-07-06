@extends('master')
@section('content')

    <section class="ftco-section">
        <div class="container">
            <div class="search-wrap-1 ftco-animate p-4">
                <form action="{{route('list.search')}}" class="search-property-1" method="get">
                    <div class="row">
                        <div class="col-lg align-items-end">
                            <div class="form-group">
                                <label for="#">Keyword</label>
                                <div class="form-field">
                                    <div class="icon"><span class="fa fa-search"></span></div>
                                    <input type="text" class="form-control" placeholder="Enter Keyword">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg align-items-end">
                            <div class="form-group">
                                <label for="#">Bed room</label>
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                        <select name="bed_room" id="" class="form-control">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg align-items-end">
                            <div class="form-group">
                                <label for="#">Bath room</label>
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                        <select name="bath_room" id="" class="form-control">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg align-items-end">
                            <div class="form-group">
                                <label for="#">Location</label>
                                <div class="form-field">
                                    <div class="icon"><span class="fa fa-search"></span></div>
                                    <input type="text" class="form-control" name="location" placeholder="Location">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg align-items-end">
                            <div class="form-group">
                                <label for="#">Price Limit</label>
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                        <select name="price_limit" id="" class="form-control">
                                            <option value="500000">500,000</option>
                                            <option value="1000000">1,000,000</option>
                                            <option value="1500000">1,500,000</option>
                                            <option value="2000000">2,000,000</option>
                                            <option value="5000000">5,000,000</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg align-self-end">
                            <div class="form-group">
                                <div class="form-field">
                                    <input type="submit" value="Search" class="form-control btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">What we offer</span>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="row">
                        @if(count($houses)== 0){
                            Non-data
                    }@else
                        @foreach($houses as $house)
                        <div class="col-md-4" style="margin-top: 30px">
                            <a href="{{route('house.details', ["$house->id"])}}" class="search-place img" style="background-image: url({{$house->image}});">
                                <div class="desc">
                                    <h3><span>{{$house->room_category}}</span></h3>
                                    <span>{{$house->price}}</span>
                                </div>
                            </a>
                        </div>
                        @endforeach
                        @endif
                    </div>
                    <div style="margin-top: 30px">{{$houses->links()}}</div>

            </div>
        </div>
        </div>
    </section>

@endsection



