@extends('admin.layouts.app')
@section('content')

<div class=" " style="margin-left: 270px;margin-top:100px; margin-right:10px">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header card-header-bordered">
                    <h3 class="card-title">Create Category</h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">NAME</th>
                                <th scope="col">STATUS</th>
                                <th scope="col">CREATE AT</th>
                                <th scope="col">Select</th>
                                <th scope="col">Change</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)

                            <tr>
                                <th scope="row">{{$loop->index+1}}</th>
                                <td>{{$category->name}}</td>

                                <td>
                                    <a href="{{ route('category.status', $category) }}" class="btn btn-sm {{ $category->status ? 'btn-success' : 'btn-warning' }}">
                                        {{ $category->status ? 'Active' : 'Deactive' }}
                                    </a>
                                </td>

                                <td>{{$category->created_at}}</td>
                                <td>
                                    <form action="{{ route('category.delete',$category) }}" method="post" onsubmit="return confirm('are you sure')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-success">Delete</button>
                                    </form>
                                </td>
                                <td>
                                    <a href="{{route('category.edit',$category)}}" class="btn btn-primary">Edit</a>
                                </td>


                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection