@extends('layouts.app')
@section('content')
   <div class="container">
       <div class="card">
           <div class="card-header">
               <div class="card-heading d-flex justify-content-between w-100">
                   <h2>AJAX Request</h2>
                   <button class="btn btn-primary" data-toggle="modal" data-target="#createTask">Create New</button>

               </div>
           </div>
           <div class="card-body">
               <table class="table table-stripped table-bordered">
                   <thead>
                        <tr>
                            <td>Name</td>
                            <td>Roll</td>
                            <td>Action</td>
                        </tr>
                   </thead>
                   <tbody id="CustomerTableBody">
                   @foreach($customer as $customers)
                        <tr data-id="{{$customers->id}}">
                            <td>{{$customers->name}}</td>
                            <td>{{$customers->roll}}</td>
                            <td>
                                <a href="" class="btn btn-success btn-sm edit" data-toggle="modal" data-target="#editTask">Update</a>
                                <a href="" class="btn btn-danger btn-sm">Delete</a>

                            </td>
                        </tr>
                   @endforeach
                   </tbody>
               </table>
           </div>
       </div>
   </div>
   <!-- Button trigger modal -->


   <!-- Modal -->
   <div class="modal fade" id="createTask" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content">
               <form action="" id="createForm">
                   <input type="hidden" name="_token" value="{{csrf_token()}}">
                   <div class="modal-header">
                       <h5 class="modal-title" id="createTaskTitle">Create new Student</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                       <div class="form-group">
                           <label for="name">Student Name</label>
                           <input type="text" class="form-control" name="name" id="name" placeholder="Student Name">
                       </div>
                       <div class="form-group">
                           <label for="name">Student Roll</label>
                           <input type="number" class="form-control" name="roll" id="roll" placeholder="Student Roll">
                       </div>
                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                       <button type="submit" class="btn btn-primary">Add Student</button>
                   </div>
               </form>
           </div>

       </div>
   </div>
{{--    Edit Modal--}}
   <!-- Modal -->
   <div class="modal fade" id="editTask" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content">
               <form action="" id="editForm">
                   <input type="hidden" name="_token" value="{{csrf_token()}}">
                   <div class="modal-header">
                       <h5 class="modal-title" id="editTitle">Edit Profile</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                       <div class="form-group">
                           <label for="name">Student Name</label>
                           <input type="text" class="form-control" name="name" id="name" placeholder="Student Name">
                       </div>
                       <div class="form-group">
                           <label for="name">Student Roll</label>
                           <input type="number" class="form-control" name="roll" id="roll" placeholder="Student Roll">
                       </div>
                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                       <button type="submit" class="btn btn-primary ">Update Profile</button>
                   </div>
               </form>
           </div>

       </div>
   </div>
@endsection

