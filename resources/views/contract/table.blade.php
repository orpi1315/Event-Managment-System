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
                                <th scope="col">Name</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($sl=1)
                            @foreach ($show as $show)
                                
                          
                            <tr>
                                <th scope="row">{{$sl++}}</th>
                                <td>{{$show->name}}</td>
                                <td>{{$show->email }}</td>
                                <td>{{$show->message}}</td>
                                <td>

                                    
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