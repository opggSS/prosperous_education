@extends('admins.app')
    <!-- Begin Page Content -->
  @section('content')
    <div class="container">
    <div class="row">
        <div class="col">
            <h1>Gallery</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="1" class="required">Title</th>
                        <th colspan="1" class="required">Alt Text</th>
                        <th colspan="1">Description</th>
                        <th colspan="2" class="required">Image</th>
                        <th colspan="1">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <form method="post" action="{{route('galleries.store')}}" enctype="multipart/form-data" >
                        {{ csrf_field() }}
                        <tr>
                            <td colspan="1">
                                <input class="form-control" name="title" placeholder="required">
                            </td>
                            <td colspan="1"> 
                                <input class="form-control" name="alt_text" placeholder="required">
                            </td>
                            <td colspan="1">
                                <input class="form-control" name="description" >
                            </td>
                            <td colspan="2">
                                <input type="file" name="image" class="form-control" accept="image/*">
                            </td>
                            <td colspan="1">
                                <input type="submit"  value="Add" class="btn btn-primary btn-block btn-h1-spacing"> 
                            </td>
                        </tr>
                    </form>
                    @foreach ($galleries as $gallery)
                    
                        <tr>
                            <form method="post" action="{{route('galleries.update',$gallery->id)}}" enctype="multipart/form-data"  >
                            @method('PUT')
                            {{ csrf_field() }}
                            <td colspan="1">
                                <input class="form-control" name="title" value="{{ $gallery->title }}" placeholder="required">
                            </td>
                            <td colspan="1" >
                                <input class="form-control" name="alt_text" value="{{ $gallery->alt_text }}" placeholder="required">
                            </td>
                            <td colspan="1">
                                <input class="form-control" name="description" value="{{ $gallery->description }}">
                            </td>
                            <td colspan="2">
                                <img src="/images/uploads/{{$gallery->url}}" style="max-width: 500px">
                                <input type="file" name="image" value="{{$gallery->url}}" class="form-control" accept="image/*">
                            </td>
                            <td colspan="1">
                                <input type="submit"  value="Update" class="btn btn-primary btn-block btn-h1-spacing" style="margin-bottom: 20px"> 
                                </form>
                                <form method="post" action="{{route('galleries.destroy',$gallery->id)}}" enctype="multipart/form-data"  >
                                    @method('delete')
                                    {{ csrf_field() }}
                                    <input type="submit"  value="Delete" class="btn btn-danger btn-block btn-h1-spacing"> 
                                </form>
                            </td>
                        </tr>
                     
                    @endforeach
                </tbody>
            </table>
        </div> <!-- end of .col-md-8 -->
  <!--  <div class="col-md-2">
            <div class="well">
                <form method="post" action="{{route('galleries.store')}}">
                    {{ csrf_field() }}
                    <h2>Add Image</h2>
                    <label for="name">Name:</label>
                    <input name="name" class="form-control" style="margin-bottom: 20px">
                    <input type="submit" name="" value="添加新类别" class="btn btn-primary btn-block btn-h1-spacing"> 
                </form>
               {{--  {!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}
                    <h2>New gallery</h2>
                    {{ Form::label('name', 'Name:') }}
                    {{ Form::text('name', null, ['class' => 'form-control']) }}
                    {{ Form::submit('Create New gallery', ['class' => 'btn btn-primary btn-block btn-h1-spacing']) }}
                {!! Form::close() !!} --}}
            </div>
        </div>. -->
    </div>

@endsection