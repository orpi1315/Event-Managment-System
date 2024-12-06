<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
@extends('back.back')
@section('content')

 <!-- Table Start -->
 <div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
         
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Responsive Table</h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Venue</th>
                                <th scope="col">Seat</th>
                                <th scope="col">Ticket</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($sl=1)
                            @foreach ($show as $show)
                                
                          
                            <tr>
                                <th scope="row">{{$sl++}}</th>
                                <td>{{$show->cat_name}}</td>
                                <td>{{$show->cat_venue }}</td>
                                <td>{{$show->cat_seat}}</td>
                                <td>{{$show->cat_ticket}}</td>
                                <td>
                                    
                                        <div class="m-n2">
                                            <a href="{{route('category.edit',$show->cat_id )}}"><i class="fa fa-edit"></i></a>
                                            <a href="{{route('category.del',$show->cat_id )}}"><i class="fas fa-trash-alt"></i></a>
                                        </div>
                                    
                                </td>
                            </tr>
@endforeach()
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Table End -->

@endsection()