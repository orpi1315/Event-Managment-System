<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
@extends('back.back')
@section('content')

    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Horizontal Form</h6>
                    <form method="post" action="{{route('category.update')}}">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Category Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" value="{{$check->cat_name}}" class="form-control" id="inputEmail3">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <input type="text" name="email" value="{{$check->cat_des}}" class="form-control" id="inputEmail3">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Venue</label>
                            <div class="col-sm-10">
                                <input type="text" name="phone" value="{{$check->cat_venue}}" class="form-control" id="inputPassword3">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">seat</label>
                            <div class="col-sm-10">
                                <input type="text" name="date" value="{{$check->cat_seat}}" class="form-control" id="inputPassword3">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Ticket</label>
                            <div class="col-sm-10">
                                <input type="text" name="time" value="{{$check->cat_ticket}}" class="form-control" id="inputPassword3">
                            </div>
                        </div>
                       
                        <button type="submit" class="btn btn-info">Submit</button>
                        <input type="hidden" name="c_id" value="{{$check->cat_id}}">
                    </form>
                </div>
            </div>
          
        </div>
    </div>
    <!-- Form End -->


   
</div>
<!-- Content End -->

@endsection()